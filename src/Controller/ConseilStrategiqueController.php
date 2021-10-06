<?php

namespace App\Controller;

use App\Repository\ServiceRepository;
use App\Repository\CompagnieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ConseilStrategiqueController extends AbstractController
{
    /**
     * @Route("/conseil-strategique", name="conseil_strategique")
     */
    public function index(CompagnieRepository $compagnieRepo, ServiceRepository $serviceRepo): Response
    {
        $infos = $compagnieRepo->findOneBy(['id' => 1]);
        $services = $serviceRepo->findAll();

        return $this->render('front-end/conseil_strategique/conseil-strategique.html.twig', [
            'infos' => $infos,
            'services' => $services,
        ]);
    }
}
