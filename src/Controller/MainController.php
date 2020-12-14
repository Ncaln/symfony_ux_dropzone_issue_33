<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Dropzone\Form\DropzoneType;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        $form = $this->createFormBuilder()
                     ->add('file', DropzoneType::class)
                     ->getForm();
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'form' => $form->createView()
        ]);
    }
}
