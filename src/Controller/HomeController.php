<?php

namespace App\Controller;

use App\Repository\BloodBankRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(BloodBankRepository $banks): Response
    {
        return $this->render('home/index.html.twig', [
            'banks' => $banks->findAll(),
        ]);
    }
}
