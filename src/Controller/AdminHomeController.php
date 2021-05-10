<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdminHomeController extends AbstractController
{

    /**
     * @Route("/", name="admin_home")
     */
    public function index(): Response
    {
        return $this->render('administration/home/home.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    }

}
