<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type:"string", length:255)]
    private ?string $titre = null;

    #[ORM\Column(type:"string", length:255)]
    private ?string $contenu = null;
 
    #[ORM\Column(type:"string", length:255)]
    private ?string $url_image = null;

    #[ORM\Column(type:"integer", length:255)]
    private ?string $fav = null;

    #[ORM\Column(type:"integer", length:255)]
    private ?string $prixht = null;

    #[ORM\Column(type:"integer", length:255)]
    private ?string $tva = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category = null;
    

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): self{

        $this->id = $id;
        return $this;
    }

    public function getTitre(): ?string{

        return $this->titre;

    }

    public function setTitre(?string $titre): self{

        $this->titre = $titre;
        return $this;
    }

    public function getContenu(): ?string{

        return $this->contenu;
    }

    public function setContenu(?string $contenu): self{

        $this->contenu = $contenu;
        return $this;
    }

    public function geturlimage(): ?string{

        return $this->url_image;
    }

    public function seturlimage(?string $url_image): self{

        $this->url_image = $url_image;
        return $this;

    }

    public function getFav(): ?string{
        return $this->fav;
    }

    public function setFav(?string $fav): self{

        $this->fav = $fav;
        return $this;
    }

    public function getprixht(): ?string{

        return $this->prixht;
    }

    public function setprixht(?string $prixht): self{

        $this->prixht = $prixht;
        return $this;
    }

    public function getTva(): ?string{

        return $this->tva;

    }
    public function setTva(?string $tva): self{

        $this->tva = $tva;
        return $this;

    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;

        return $this;
    }

    

    




}
