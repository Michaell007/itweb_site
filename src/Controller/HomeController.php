<?php

namespace App\Controller;

use App\Repository\SlideRepository;
use App\Repository\ActiviteRepository;
use App\Repository\CompagnieRepository;
use App\Repository\SectionOneRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(
        SlideRepository $slideRepo, ActiviteRepository $activiteRepo, SectionOneRepository $sectionRepo,
        CompagnieRepository $compagnieRepo): Response
    {

        $slides = $slideRepo->findAll();
        $activities = $activiteRepo->findAll();
        $section = $sectionRepo->findAll();
        $infos = $compagnieRepo->findOneBy(['id' => 1]);

        return $this->render('front-end/home/index.html.twig', [
            'slides' => $slides,
            'activities' => $activities,
            'section' => $section,
            'infos' => $infos,
        ]);
    }
}
