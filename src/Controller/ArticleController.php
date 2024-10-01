<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticleController extends AbstractController
{

    public function __construct(private readonly EntityManagerInterface $entityManager){
    
    
    }


    #[Route('/article', name: 'ajout_bdd')]
    public function addArticle(): Response
    {
        $category = new Category();
        $category->setTitre('Tshirt');
        
        $article = new Article();
        $article->setTitre('T-shirt L oversize');
        $article->setContenu('t-shirt vraiment gelar');
        $article->seturlimage('https://www.majesticfilatures.com/99725-thickbox_default/t-shirt-oversize-col-rond-manches-courtes-en-coton-organique.jpg');
        $article->setFav(0);
        $article->setprixht(550);
        $article->setTva(20);
        $article->setCategory($category);

        $this->entityManager->persist($category);
        $this->entityManager->persist($article);
        $this->entityManager->flush();

        return $this->render('article/index.html.twig', [
            'article'=> $article,
        ]);
    }
 
}
