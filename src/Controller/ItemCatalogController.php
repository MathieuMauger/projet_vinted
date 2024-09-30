<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ItemCatalogController extends AbstractController
{
    #[Route('/catalog/items/{id}', name: 'app_item_catalog')]
    public function index(int $id): Response
    {
       
     
        return $this->render('item_catalog/index.html.twig', [
            'controller_name' => 'ItemCatalogController',
            'id' => $id,
            
        ]);
    }
}
