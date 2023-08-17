<?php


namespace App\Services;
use App\Entity\User;
use Mailjet\Client;
use \Mailjet\Resources;
use function GuzzleHttp\json_encode;

class SendEmail
{

    private $apiKey = "49bc29d55d61cb4cc30e52fe7a48c92b";
    private $apiSecret = "bfcdc8d64e59c6b9b71e97e70181c8c9";

    /**
     * @param string $url
     * @param User $user
     */
    public function etudiantAfterSign($url, $user)
    {
        $mj = new \Mailjet\Client('49bc29d55d61cb4cc30e52fe7a48c92b','bfcdc8d64e59c6b9b71e97e70181c8c9',true,['version' => 'v3.1']);
       
        $variable = ["confirmation_link" => $url];

        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "contact@allochef.space",
                        'Name' => "Equipe allochef"
                    ],
                    'To' => [
                        [
                            'Email' => $user->getEmail(),
                            'Name' => $user->getName()
                        ]
                    ],
                    'TemplateID' => 2649920,
                    'TemplateLanguage' => true,
                    'Subject' => "Allochef - Activation Compte",
                    'Variables' => $variable
                ]
            ]
        ];

       
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success()&& var_dump($response->getData());

    }
    /**
     * @param string $url
     * @param User $user
     */
    public function profAfterSign($url, $user)
    {
        $mj = new \Mailjet\Client('49bc29d55d61cb4cc30e52fe7a48c92b','bfcdc8d64e59c6b9b71e97e70181c8c9',true,['version' => 'v3.1']);

        $variable = ["confirmation_link" => $url];

        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "contact@allochef.space",
                        'Name' => "Equipe allochef"
                    ],
                    'To' => [
                        [
                            'Email' => $user->getEmail(),
                            'Name' => $user->getName()
                        ]
                    ],
                    'TemplateID' => 2649920,
                    'TemplateLanguage' => true,
                    'Subject' => "Allochef - Activation Compte",
                    'Variables' => $variable
                ]
            ]
        ];


        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success()&& var_dump($response->getData());

    }

    /**
     * @param string $url
     * @param User $user
     */
    public function adminAfterSign($url, $user)
    {
        $mj = new \Mailjet\Client('49bc29d55d61cb4cc30e52fe7a48c92b','bfcdc8d64e59c6b9b71e97e70181c8c9',true,['version' => 'v3.1']);

        $variable = ["confirmation_link" => $url];

        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "contact@allochef.space",
                        'Name' => "Equipe Allochef"
                    ],
                    'To' => [
                        [
                            'Email' => $user->getEmail(),
                            'Name' => $user->getName()
                        ]
                    ],
                    'TemplateID' => 2649920,
                    'TemplateLanguage' => true,
                    'Subject' => "Allochef - Activation Compte",
                    'Variables' => $variable
                ]
            ]
        ];


        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success()&& var_dump($response->getData());

    }

    /**
     * @param string $url
     * @param User $user
     */
    public function resetPassword($url, $user) {
        $mj = new \Mailjet\Client('49bc29d55d61cb4cc30e52fe7a48c92b','bfcdc8d64e59c6b9b71e97e70181c8c9',true,['version' => 'v3.1']);

        $variable = ["confirmation_link" => $url];

        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "contact@allochef.space",
                        'Name' => "Equipe allochef"
                    ],
                    'To' => [
                        [
                            'Email' => $user->getEmail(),
                            'Name' => $user->getName()
                        ]
                    ],
                    'TemplateID' => 2649943,
                    'TemplateLanguage' => true,
                    'Subject' => "Allochef - Réinitialisation mot de passe",
                    'Variables' => $variable
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();

    }

    public function sendMailJet($codeTemplate)
    {
        $mj = new \Mailjet\Client($this->apiKey,$this->apiSecret,true);

        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "contact@allochef.space",
                        'Name' => "Equipe allochef"
                    ],
                    'To' => [
                        [
                            'Email' => "cebannemichel@gmail.com",
                            'Name' => "cebanne"
                        ]
                    ],
                    'TemplateID' => $codeTemplate,
                    'TemplateLanguage' => true,
                    'Subject' => "allochef - Nouvelle Inscription",
                ]
            ]
        ];

        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success() && var_dump($response->getData());
    }
    /**
     * @param User $user
     */
    public function newRegister($user)
    {
        $mj = new \Mailjet\Client('49bc29d55d61cb4cc30e52fe7a48c92b','bfcdc8d64e59c6b9b71e97e70181c8c9',true,['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "contact@allochef.space",
                        'Name' => "Equipe   allochef"
                    ],
                    'To' => [
                        [
                            'Email' => $user->getEmail(),
                            'Name' => $user->getName()
                        ]
                    ],
                    'TemplateID' => 2887526,
                    'TemplateLanguage' => true,
                    'Subject' => "Notification Nouvelle Inscription",
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();

    }
}