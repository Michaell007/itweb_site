<?php

namespace App\Controller;

use App\Repository\VisionRepository;
use App\Repository\CompagnieRepository;
use App\Repository\PageAboutRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutUsController extends AbstractController
{
    /**
     * @Route("/qui-sommes-nous", name="about_us")
     */
    public function index(CompagnieRepository $compagnieRepo, PageAboutRepository $pageAboutRepo, VisionRepository $visionRepo): Response
    {
        $infos = $compagnieRepo->findOneBy(['id' => 1]);
        $pageAbout = $pageAboutRepo->findOneBy(['id' => 1]);
        $visions = $visionRepo->findAll();
        
        return $this->render('front-end/about_us/qui-sommes-nous.html.twig', [
            'infos' => $infos,
            'pageAbout' => $pageAbout,
            'visions' => $visions,
        ]);
    }
}
