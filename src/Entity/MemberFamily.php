<?php

namespace App\Entity;

use App\Repository\MemberFamilyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=MemberFamilyRepository::class)
 */
class MemberFamily
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"memberFamily_browse", "user_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"memberFamily_browse", "user_read"})
     * 
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"memberFamily_browse", "user_read"})
     * 
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"memberFamily_browse", "user_read"})
     * 
     */
    private $license;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"memberFamily_browse", "user_read"})
     * 
     */
    private $status = 0;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="memberFamily")
     * @Groups({"memberFamily_browse"})
     * 
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity=Trips::class, inversedBy="memberFamilies")
     *  @Groups({"user_trips", "user_read", "memberFamily_trips"})
     */
    private $trip;

    public function __construct()
    {
        $this->trip = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLicense(): ?string
    {
        return $this->license;
    }

    public function setLicense(?string $license): self
    {
        $this->license = $license;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|Trips[]
     */
    public function getTrip(): Collection
    {
        return $this->trip;
    }

    public function addTrip(Trips $trip): self
    {
        if (!$this->trip->contains($trip)) {
            $this->trip[] = $trip;
        }

        return $this;
    }

    public function removeTrip(Trips $trip): self
    {
        $this->trip->removeElement($trip);

        return $this;
    }
}
