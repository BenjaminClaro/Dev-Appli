<?php

namespace App\Entity;

use App\Repository\DiscRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DiscRepository::class)]
class Disc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\OneToMany(mappedBy: 'artist', targetEntity: Disc::class)]
    private Collection $discs;

    #[ORM\OneToMany(mappedBy: 'artist', targetEntity: Atrist::class)]
    private Collection $atrists;

    #[ORM\Column(length: 255)]
    private ?string $artist = null;

    #[ORM\ManyToOne(inversedBy: 'disc')]
    private ?Atrist $atrist = null;

    public function __construct()
    {
        $this->discs = new ArrayCollection();
        $this->atrists = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Disc>
     */
    public function getDiscs(): Collection
    {
        return $this->discs;
    }

    public function addDisc(Disc $disc): static
    {
        if (!$this->discs->contains($disc)) {
            $this->discs->add($disc);
            $disc->setArtist($this);
        }

        return $this;
    }

    public function removeDisc(Disc $disc): static
    {
        if ($this->discs->removeElement($disc)) {
            // set the owning side to null (unless already changed)
            if ($disc->getArtist() === $this) {
                $disc->setArtist(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Atrist>
     */
    public function getAtrists(): Collection
    {
        return $this->atrists;
    }

    public function addAtrist(Atrist $atrist): static
    {
        if (!$this->atrists->contains($atrist)) {
            $this->atrists->add($atrist);
            $atrist->setArtist($this);
        }

        return $this;
    }

    public function removeAtrist(Atrist $atrist): static
    {
        if ($this->atrists->removeElement($atrist)) {
            // set the owning side to null (unless already changed)
            if ($atrist->getArtist() === $this) {
                $atrist->setArtist(null);
            }
        }

        return $this;
    }

    public function getArtist(): ?string
    {
        return $this->artist;
    }

    public function setArtist(string $artist): static
    {
        $this->artist = $artist;

        return $this;
    }

    public function getAtrist(): ?Atrist
    {
        return $this->atrist;
    }

    public function setAtrist(?Atrist $atrist): static
    {
        $this->atrist = $atrist;

        return $this;
    }
}
