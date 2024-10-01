<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Article;
use App\Form\FormType;

class FormController extends AbstractController
{
    #[Route('/form', name: 'app_form', methods: ['GET', 'POST'])]
    public function index(Request $request): Response
    {
        $article = new Article();
        $form = $this->createForm(FormType::class, $article);
        $form->handleRequest($request);

        return $this->render('form/index.html.twig', [
            'controller_name' => 'FormController',
            'form' => $form,
        ]);
    }
}
