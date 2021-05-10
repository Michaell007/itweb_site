<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutUsController extends AbstractController
{
    /**
     * @Route("/qui-sommes-nous", name="about_us")
     */
    public function index(): Response
    {
        return $this->render('front-end/about_us/about.html.twig', [
            'controller_name' => 'AboutUsController',
        ]);
    }
}
