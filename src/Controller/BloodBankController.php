<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BloodBankController extends AbstractController
{
    /**
     * @Route("/blood/bank", name="app_blood_bank")
     */
    public function index(): Response
    {
        return $this->render('blood_bank/index.html.twig', [
            'controller_name' => 'BloodBankController',
        ]);
    }
}
