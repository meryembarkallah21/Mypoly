<?php

namespace App\Services;

use App\Repository\MaxNumberDeliveryRepository;
use App\Repository\MaxNumberRepository;
use App\Repository\MaxNumberTakeAwayRepository;
use App\Repository\MinNumberDeliveryRepository;
use App\Repository\MinNumberRepository;
use App\Repository\MinNumberTakeAwayRepository;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class Utils
{
    use ControllerTrait;
    private $user;
    private $urlGenerator;
    private $minNumberRepo;
    private $maxNumberRepo;
    private $minNumberDelivery;
    private $maxNumberDelivery;
    private $minNumberTakeAway;
    private $maxNumberTakeAway;
    public function __construct(
        TokenStorageInterface $token,
        UrlGeneratorInterface $urlGenerator,
        MinNumberRepository $numberRepo,
        MaxNumberRepository $maxNumberRepo,
        MinNumberDeliveryRepository $minNumberDeliveryRepo,
        MaxNumberDeliveryRepository $maxNumberDeliveryRepo,
        MinNumberTakeAwayRepository $minNumberTakeAwayRepo,
        MaxNumberTakeAwayRepository $maxNumberTakeAwayRepo
    )
    {
        $this->user = $token->getToken()->getUser();
        $this->urlGenerator = $urlGenerator;
        $this->minNumberRepo = $numberRepo;
        $this->maxNumberRepo = $maxNumberRepo;
        $this->minNumberDelivery = $minNumberDeliveryRepo;
        $this->maxNumberDelivery = $maxNumberDeliveryRepo;
        $this->minNumberTakeAway = $minNumberTakeAwayRepo;
        $this->maxNumberTakeAway = $maxNumberTakeAwayRepo;
    }

    public function isUserConnected(){
       // dd($this->user);
        if($this->user !="anon."){
            // dd($this->user);
            if ($this->user->getRoles()[0] == 'ROLE_ADMIN') {
              return new RedirectResponse($this->urlGenerator->generate('admin_profile'));
            } 
            elseif($this->user->getRoles()[0] == 'ROLE_CHEF'){
                return new RedirectResponse($this->urlGenerator->generate('chef_dashbord'));
            }else{
                return new RedirectResponse($this->urlGenerator->generate('customer_profile'));
            }
        }
        return true;
    }

    public function getMinNumber(): array{
        $num = $this->minNumberRepo->findAll();
        $arrayNumber = [];

        foreach ($num as $item){
            $arrayNumber[$item->getNumber()] = $item->getNumber();
        }
        return $arrayNumber;
    }

    public function getMaxNumber(): array{
        $num = $this->maxNumberRepo->findAll();
        $arrayNumber = [];

        foreach ($num as $item){
            $arrayNumber[$item->getNumber()] = $item->getNumber();
        }
        return $arrayNumber;
    }

    public function getMinNumberDelivery(): array{
        $num = $this->minNumberDelivery->findAll();
        $arrayNumber = [];

        foreach ($num as $item){
            $arrayNumber[$item->getNumber()] = $item->getNumber();
        }
        return $arrayNumber;
    }

    public function getMaxNumberDelivery(): array{
        $num = $this->maxNumberDelivery->findAll();
        $arrayNumber = [];

        foreach ($num as $item){
            $arrayNumber[$item->getNumber()] = $item->getNumber();
        }
        return $arrayNumber;
    }

    public function getMinNumberTakeAway(): array{
        $num = $this->minNumberTakeAway->findAll();
        $arrayNumber = [];

        foreach ($num as $item){
            $arrayNumber[$item->getNumber()] = $item->getNumber();
        }
        return $arrayNumber;
    }

    public function getMaxNumberTakeAway(): array{
        $num = $this->maxNumberTakeAway->findAll();
        $arrayNumber = [];

        foreach ($num as $item){
            $arrayNumber[$item->getNumber()] = $item->getNumber();
        }
        return $arrayNumber;
    }
}