<?php

namespace App\Entity;

use App\Repository\AtristRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AtristRepository::class)]
class Atrist
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'atrists')]
    private ?Disc $artist = null;

    #[ORM\OneToMany(mappedBy: 'atrist', targetEntity: Disc::class)]
    private Collection $disc;

    public function __construct()
    {
        $this->disc = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArtist(): ?Disc
    {
        return $this->artist;
    }

    public function setArtist(?Disc $artist): static
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * @return Collection<int, Disc>
     */
    public function getDisc(): Collection
    {
        return $this->disc;
    }

    public function addDisc(Disc $disc): static
    {
        if (!$this->disc->contains($disc)) {
            $this->disc->add($disc);
            $disc->setAtrist($this);
        }

        return $this;
    }

    public function removeDisc(Disc $disc): static
    {
        if ($this->disc->removeElement($disc)) {
            // set the owning side to null (unless already changed)
            if ($disc->getAtrist() === $this) {
                $disc->setAtrist(null);
            }
        }

        return $this;
    }
}
