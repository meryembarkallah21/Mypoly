<?php

namespace App\Controller\Admin;

use App\Entity\Code;
use App\Entity\Cycle;
use App\Entity\Inscrire;
use App\Entity\Mention;
use App\Entity\Parcours;
use App\Entity\User;
use App\Entity\Years;
use App\Form\InscrireType;
use App\Services\SendEmail;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
/**
 * @Route("admin/inscription")
 */
class InscriptionController extends AbstractController
{
    private $mailer;

    public function __construct(\Swift_Mailer $mailer) {
        $this->mailer = $mailer;
    }

    /**
     * @Route("/", name="admin_inscrire_index", methods={"GET"})
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $inscrires = $em->getRepository(Inscrire::class)->findAll();

        $annees = $em->getRepository(Years::class)->findOneBy(
            [
                'current' => true,
            ]
        );

        $years = $em->getRepository(Years::class)->findAll();

        $mentions = $em->getRepository(Code::class)->findAll();
        $niveau = $em->getRepository(Cycle::class)->findAll();
        $parcours = $em->getRepository(Parcours::class)->findAll();

        return $this->render('admin/inscription/index.html.twig', [
            'etudiants' => $inscrires,
            'annees' => $annees,
            'years' => $years,
            'mentions' => $mentions,
            'niveau'=>$niveau,
            'parcours'=>$parcours,
        ]);
    }
    /**
     * @Route("/pdf/inscrit", name="admin_inscrire_pdf", methods={"POST"})
     */
    public function pdf(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $filiere = $em->getRepository(Code::class)->find($request->get('mention'));
        $niveau = $em->getRepository(Cycle::class)->find($request->get('niveau'));
        $parcours = $em->getRepository(Parcours::class)->find($request->get('parcours'));

        $mention = $em->getRepository(Mention::class)->findBy([
            'code'=>$filiere,
            'cycle'=>$niveau,
            'parcours'=>$parcours,
        ]);
        //CheckExistMention
        if (empty($mention)) {
            $this->addFlash('error', "Le mention ".$filiere->getName()." parcours "
                .$parcours->getName()." niveau ".$niveau->getCode()." n'existe pas ");
            return $this->redirectToRoute('admin_inscrire_index');
        } else {

            $annee = $em->getRepository(Years::class)->find($request->get('annee'));

            $inscris = $em->getRepository(Inscrire::class)->findBy(
                [
                    'mention' => $mention,
                    'year' => $annee,
                ]
            );
            //creer options pour le fichier pdf
            $pdfOptions = new Options();

            //$pdfOptions->set('defaultFont', 'Arial');
            //instanciation de domPdf avec options
            $dompdf = new Dompdf($pdfOptions);
            //rendu

            $html = $this->renderView(
                'admin/inscription/pdf/liste.html.twig',
                ['inscris' => $inscris, 'mention' => $filiere, 'years' => $annee, 'niveau' => $niveau, 'parcours' => $parcours]
            );
            //generer le html to dompdf
            $dompdf->loadHtml($html);
            //orientantion et format
            $dompdf->setPaper('A4', 'portrait');
            //sortie
            $dompdf->render();
            $dompdf->stream('Liste des élève-'.$parcours.'_'.$niveau.'_en_'.$filiere.'.pdf', [
                "Attachment" => true
            ]);
            //$this->addFlash('success',"Cet telechargement est avec succès" );
            return $this->redirectToRoute('admin_inscrire_index');
        }
    }

    public function getDataEtudiantToExcel(Request $request) : array
    {
        $em = $this->getDoctrine()->getManager();
        $filiere = $em->getRepository(Code::class)->find($request->get('mention'));
        $niveau = $em->getRepository(Cycle::class)->find($request->get('niveau'));
        $parcours = $em->getRepository(Parcours::class)->find($request->get('parcours'));
        $mention = $em->getRepository(Mention::class)->findBy([
            'code'=>$filiere,
            'cycle'=>$niveau,
            'parcours'=>$parcours,
        ]);
        $listes = [];
        //CheckExistMention
        if (empty($mention)) {
            $this->addFlash('error', "Le mention ".$filiere->getName()." parcours "
                .$parcours->getName()." niveau ".$niveau->getCode()." n'existe pas ");
        } else {

            $annee = $em->getRepository(Years::class)->find($request->get('annee'));
            $inscris = $em->getRepository(Inscrire::class)->findBy(
                [
                    'mention' => $mention,
                    'year' => $annee,
                ]
            );

            foreach ($inscris as $inscrires) {
                $listes[] = [
                    $inscrires->getEtudiant()->getName(),
                    $inscrires->getEtudiant()->getEmail(),
                    $inscrires->getEtudiant()->getTel(),
                    $inscrires->getMention()->getCycle()->getCode(),
                    $inscrires->getMention()->getCode()->getName(),
                    $inscrires->getMention()->getParcours(),
                    $inscrires->getDateInscription(),
                ];
            }
            $this->addFlash('success',"Cette exportation est avec succès" );
        }
            return $listes;
    }

    /**
     * @Route("/exportExcel", name="admin_export_excel", methods={"POST","GET"})
     *
     */
    public function export(Request $request,string $publicDirectory)
    {
        $em = $this->getDoctrine()->getManager();
        $filiere = $em->getRepository(Code::class)->find($request->get('mention'));
        $niveau = $em->getRepository(Cycle::class)->find($request->get('niveau'));
        $parcours = $em->getRepository(Parcours::class)->find($request->get('parcours'));
        $mention = $em->getRepository(Mention::class)->findBy([
            'code'=>$filiere,
            'cycle'=>$niveau,
            'parcours'=>$parcours,
        ]);
        if (empty($mention)) {
           return $this->redirectToRoute('admin_inscrire_index');
        }else
        {
            //Dump($this->getDataEleveToExcel());
            $spreadsheet = new Spreadsheet();

            $sheet = $spreadsheet->getActiveSheet();

            $sheet->setTitle('Listes Inscription '.$parcours);

            $sheet->getCell('A1')->setValue('Nom');
            $sheet->getCell('B1')->setValue('Email');
            $sheet->getCell('C1')->setValue('Tel');
            $sheet->getCell('D1')->setValue('Niveau');
            $sheet->getCell('E1')->setValue('Mention');
            $sheet->getCell('F1')->setValue('Parcours');
            $sheet->getCell('G1')->setValue('Date_Inscription');

            // Increase row cursor after header write
            $sheet->fromArray($this->getDataEtudiantToExcel($request),null, 'A2', true);

            $writer = new Xlsx($spreadsheet);

            $excelFilepath =  $publicDirectory . '/listes_inscription_'.$parcours.'_'.$niveau.'_en_'.$filiere.'.xlsx';

            $writer->save($excelFilepath);


            return $this->redirectToRoute('admin_inscrire_index');
        }
    }

    /**
     * @Route("/importExcel", name="admin_data_excel", methods={"POST","GET"})
     *
     */
    public function importDataExcelAction(Request $request,UserPasswordEncoderInterface $passwordEncoder)
    {
        $file = $request->files->get('file');


        $fileFolder = __DIR__ . '/../../../../public/Excel/';
        /*$fileFolder = __DIR__ . $this->getExceldataDirectory();*/

        $filePathName = md5(uniqid()) . $file->getClientOriginalName();

        try {
            $file->move($fileFolder, $filePathName);
        } catch (FileException $e) {
            Dump($e);
        }
        $spreadsheet = IOFactory::load($fileFolder . $filePathName);
        //$row = $spreadsheet->getActiveSheet()->removeRow(1);
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
        if ($sheetData) {

            $em = $this->getDoctrine()->getManager();

            foreach ($sheetData as $Row)
            {

                $nom = $Row['A'];
                $email= $Row['B'];
                $tel = $Row['C'];
                $niveau = $Row['D'];
                $filiere = $Row['E'];
                $parcours= $Row['F'];
                $date_inscription = $Row['G'];

                $etudiantExistant = $em->getRepository(User::class)->findOneBy([
                    'email'=>$email,
                ]);
                $parcour = $em->getRepository(Parcours::class)->findOneBy([
                    'name'=>$parcours,
                ]);
                $niv = $em->getRepository(Cycle::class)->findOneBy([
                    'code'=>$niveau,
                ]);
                $fil = $em->getRepository(Code::class)->findOneBy([
                   'name'=>$filiere,
                ]);
                $years = $em->getRepository(Years::class)->find(1);
                $mention = $em->getRepository(Mention::class)->findOneBy([
                    'code'=>$fil,
                    'cycle'=>$niv,
                    'parcours'=>$parcour,
                ]);
                // make sure that the user does not already exists in your db
                if (!$etudiantExistant and $mention)
                {

                    $etudiant = new User();
                    $inscrire = new Inscrire();

                    $etudiant->setAvatar('avatar.jpg');
                    $etudiant->setName($nom);
                    $etudiant->setEmail($email);
                    $etudiant->setTel($tel);
                    $etudiant->setRoles(array('ROLE_ETUDIANT'));
                    $passwordcyrpter = $passwordEncoder->encodePassword($etudiant, "azerty");
                    $etudiant->setPassword($passwordcyrpter);
                    $etudiant->setResetToken("NULL");
                    $etudiant->setStatus(1);

                    $em->persist($etudiant);

                    $inscrire->setEtudiant($etudiant);
                    $inscrire->setMention($mention);
                    $inscrire->setYear($years);
                    $inscrire->setMatricule($this->generateMatricule($years));
                    $inscrire->setIsAdmis(0);
                    $inscrire->setTypePayement('espèce');
                    $inscrire->setParcours($parcour);
                    $inscrire->setDateInscription(new \DateTime($date_inscription));
                    $inscrire->setStatus(1);
                    $inscrire->setFichierVirement('fichier.jpg');

                    $em->persist($inscrire);

                    $em->flush();


                }
            }
            return $this->redirectToRoute('admin_inscrire_index');

        }else{
            ////$request->getSession()
                //->getFlashBag()
                //>add('error', "Pas de données dans excel");

           // return $this->redirectToRoute('admin_inscrire_index');
        }
    }
    /**
     * @Route("/new", name="admin_inscrire_new", methods={"POST","GET"})
     */
    public function newAction(Request $request,UserPasswordEncoderInterface $passwordEncoder,SendEmail $sendEmail,TokenGeneratorInterface $tokenGenerator)
    {
        $nom = $request->get('nom');
        $email = $request->request->get('email');
        $tel = $request->get('tel');
        $ville = $request->get('ville');
        $parcours =$request->get('parcours');
        $niveau =$request->get('niveau');
        $filiere =$request->get('mention');
        $date_inscription = date('Y-m-d H:i:s');
        $em = $this->getDoctrine()->getManager();

        $etudiantExistant = $em->getRepository(User::class)->findOneBy([
            'email'=>$email,
        ]);

        $parcour = $em->getRepository(Parcours::class)->findOneBy([
            'id'=>$parcours,
        ]);
        $niv = $em->getRepository(Cycle::class)->findOneBy([
            'id'=>$niveau,
        ]);
        $fil = $em->getRepository(Code::class)->findOneBy([
            'id'=>$filiere,
        ]);
        $mention=$em->getRepository(Mention::class)->findOneBy([
            'code'=>$fil,
            'cycle'=>$niv,
            'parcours'=>$parcour,
        ]);
        $years = $em->getRepository(Years::class)->find(1);

        if (!$etudiantExistant and $mention)
        {

            $etudiant = new User();
            $inscrire = new Inscrire();

            $etudiant->setAvatar('avatar.jpg');
            $etudiant->setName($nom);
            $etudiant->setEmail($email);
            $etudiant->setTel($tel);
            $etudiant->setVille($ville);
            $etudiant->setRoles(array('ROLE_ETUDIANT'));
            $passwordcrypter = $passwordEncoder->encodePassword($etudiant, "azerty");
            $etudiant->setPassword($passwordcrypter);
            $token = $tokenGenerator->generateToken();
            $etudiant->setResetToken($token);
            $etudiant->setStatus(1);

            $em->persist($etudiant);

            $inscrire->setEtudiant($etudiant);
            $inscrire->setMention($mention);
            $inscrire->setYear($years);
            $inscrire->setMatricule($this->generateMatricule($years));
            $inscrire->setIsAdmis(0);
            $inscrire->setTypePayement('espèce');
            $inscrire->setParcours($parcour);
            $inscrire->setDateInscription(new \DateTime($date_inscription));
            $inscrire->setStatus(1);
            $inscrire->setFichierVirement('fichier.jpg');

            $em->persist($inscrire);

            $em->flush();

            $url = $this->generateUrl('etudiant_activate_compte', array('token' => $token), UrlGeneratorInterface::ABSOLUTE_URL);
            //$this->mail->registration($url, $user);
            $sendEmail->etudiantAfterSign($url, $etudiant);

            return $this->redirectToRoute('admin_inscrire_index');
        }else
        {
            /* $request->getSession()
                ->getFlashBag()
                ->add('error', "Cet étudiant ".$email." existe déjà");

            return $this->redirectToRoute('admin_inscrire_index'); */
        }

    }

    /**
     * @Route("/{id}/delete", name="adimn_inscrire_delete", methods={"POST"})
     */
    public function delete(Request $request, Inscrire $inscrire)
    {
        if ($this->isCsrfTokenValid('delete'.$inscrire->getId(), $request->request->get('_token')))
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($inscrire);
            $entityManager->flush();
        }
        return $this->redirectToRoute('admin_inscrire_index');
    }

    /**
     *
     * @return int
     */
    private function generateMatricule($annee)
    {
        $em = $this->getDoctrine()->getManager();
        $mat = $em->getRepository(Inscrire::class)->findBy(
            ['year' => $annee],
            [
                'id' => 'desc',
            ]
        );

        return empty($mat) ? 1 : $mat[0]->getMatricule() + 1;
    }

}
