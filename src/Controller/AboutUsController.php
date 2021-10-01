<?php

namespace App\Controller;

use App\Repository\CompagnieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutUsController extends AbstractController
{
    /**
     * @Route("/qui-sommes-nous", name="about_us")
     */
    public function index(CompagnieRepository $compagnieRepo): Response
    {
        $infos = $compagnieRepo->findOneBy(['id' => 1]);
        
        return $this->render('front-end/about_us/qui-sommes-nous.html.twig', [
            'infos' => $infos,
        ]);
    }
}
