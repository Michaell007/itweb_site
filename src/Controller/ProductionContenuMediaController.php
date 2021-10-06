<?php

namespace App\Controller;

use App\Repository\ServiceRepository;
use App\Repository\CompagnieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductionContenuMediaController extends AbstractController
{
    /**
     * @Route("/production-de-contenu-trans-media", name="production_contenu_media")
     */
    public function index(CompagnieRepository $compagnieRepo, ServiceRepository $serviceRepo): Response
    {
        $infos = $compagnieRepo->findOneBy(['id' => 1]);
        $services = $serviceRepo->findAll();

        return $this->render('front-end/production_contenu_media/production-contenu-media.html.twig', [
            'infos' => $infos,
            'services' => $services,
        ]);
    }
}
