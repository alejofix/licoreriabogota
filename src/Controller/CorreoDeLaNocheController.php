<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CorreoDeLaNocheController extends AbstractController
{
    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('correo_de_la_noche/index.html.twig', [
            'controller_name' => 'CorreoDeLaNocheController',
        ]);
    }

    /**
     * @Route("/correo_de_la_noche", name="correo", methods={"GET"})
     */
    public function correo(): Response
    {
        return $this->render('correo_de_la_noche/correo_de_la_noche.html.twig', [
            'controller_name' => 'CorreoDeLaNocheController',
        ]);
    }


}
