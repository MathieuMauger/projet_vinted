<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Services\TVA_Services;

class CatalogController extends AbstractController
{

    public function __construct(private TVA_Services $calculService) {

    }


    #[Route('/catalog', name: 'app_catalog')]
    public function index(): Response
    {
        $items = [
            [
                'titre' => 'T-shirt',
                'contenu' => 'haut blanc basique stradivarius S, comme neuf T-shirt cintré',
                'image' => 'https://picsum.photos/200',
                'fav' => 4,
                'prix' => 15,
                'tva' => 20,
            ],
            [
                'titre' => 'Veste kaki',
                'contenu' => 'Veste kaki légère manche longues zara Bon état',
                'image' => 'https://picsum.photos/200',
                'fav' => 2,
                'prix' => 10,
                'tva' => 20,
            ]
        ];

        foreach ($items as $item) {

            $product_price = $item['prix'];
            $prix_tot =  $this->calculService->calculTVA($item['prix'], $item['tva']);
        }


        return $this->render('catalog/index.html.twig', [
            'controller_name' => 'Catalogue Vinted: ',
            'articles' => $items,
            'tva' => $prix_tot,
            'price' => $product_price,
        ]);
    }
}
