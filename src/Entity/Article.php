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
    private ?string $image = null;

    #[ORM\Column(type:"integer", length:255)]
    private ?string $fav = null;

    #[ORM\Column(type:"integer", length:255)]
    private ?string $ht = null;

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

        $this->tva = $contenu;
        return $this;
    }

    public function getImage(): ?string{

        return $this->image;
    }

    public function setImage(?string $image): self{

        $this->image = $image;
        return $this;

    }

    public function getFav(): ?string{
        return $this->fav;
    }

    public function setFav(?string $fav): self{

        $this->fav = $fav;
        return $this;
    }

    public function getHt(): ?string{

        return $this->ht;
    }

    public function setHt(?string $ht): self{

        $this->ht = $ht;
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
