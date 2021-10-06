<?php

namespace App\Controller;

use App\Repository\ServiceRepository;
use App\Repository\CompagnieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CreationPlateformeDigitaleController extends AbstractController
{
    /**
     * @Route("/creation-de-plateforme-digitale", name="creation_plateforme_digitale")
     */
    public function index(CompagnieRepository $compagnieRepo, ServiceRepository $serviceRepo): Response
    {
        $infos = $compagnieRepo->findOneBy(['id' => 1]);
        $services = $serviceRepo->findAll();

        return $this->render('front-end/creation_plateforme_digitale/creation-plateforme-digitale.html.twig', [
            'infos' => $infos,
            'services' => $services,
        ]);
    }
}
