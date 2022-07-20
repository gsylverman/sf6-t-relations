<?php

namespace App\Entity;

use App\Repository\ProductPromotionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductPromotionRepository::class)]
class ProductPromotion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'productPromotions')]
    private ?Product $Product = null;

    #[ORM\ManyToOne]
    private ?Pomotion $Promotion = null;

    #[ORM\Column(length: 255)]
    private ?string $validTo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?Product
    {
        return $this->Product;
    }

    public function setProduct(?Product $Product): self
    {
        $this->Product = $Product;

        return $this;
    }

    public function getPromotion(): ?Pomotion
    {
        return $this->Promotion;
    }

    public function setPromotion(?Pomotion $Promotion): self
    {
        $this->Promotion = $Promotion;

        return $this;
    }

    public function getValidTo(): ?string
    {
        return $this->validTo;
    }

    public function setValidTo(string $validTo): self
    {
        $this->validTo = $validTo;

        return $this;
    }
}
