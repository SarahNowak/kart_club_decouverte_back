<?php

namespace App\Entity;

use App\Repository\TripsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=TripsRepository::class)
 */
class Trips
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"trips_browse", "trips_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $imgCard;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $circuit;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $date;

    /**
     * @ORM\Column(type="array", length=255)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $description = [null, null, null, null];

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $classAdult;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $materialAdult;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $tarifAdultMember;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $tarifAdultExt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $tarifAdult;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $classYoung;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $materialYoung;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $tarifYoungMember;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $tarifYoungExt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $tarifYoung;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $classMinJunior;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $classMaxJunior;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $materialJunior;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $tarifJuniorMember;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $tarifJuniorExt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $tarifJunior;

    /**
     * @ORM\Column(type="array", length=64)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $sessionJunior = [null, null, null, null, null];

    /**
     * @ORM\Column(type="array", length=64)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $photosTrip = [null, null, null];

    /**
     * @ORM\Column(type="array", length=64)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $coordinates = [null, null];

    /**
     * @ORM\Column(type="array", length=64)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $sessionYoung = [null, null, null, null, null];

    /**
     * @ORM\Column(type="array", length=64)
     * @Groups({"trips_browse", "trips_read"})
     */
    private $sessionAdult = [null, null, null, null, null];

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"trips_browse", "trips_read"})
     */
    private $status = 1;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImgCard(): ?string
    {
        return $this->imgCard;
    }

    public function setImgCard(string $imgCard): self
    {
        $this->imgCard = $imgCard;

        return $this;
    }

    public function getCircuit(): ?string
    {
        return $this->circuit;
    }

    public function setCircuit(string $circuit): self
    {
        $this->circuit = $circuit;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDescription(): ?array
    {
        return $this->description;
    }

    public function setDescription(array $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getClassAdult(): ?string
    {
        return $this->classAdult;
    }

    public function setClassAdult(?string $classAdult): self
    {
        $this->classAdult = $classAdult;

        return $this;
    }

    public function getMaterialAdult(): ?string
    {
        return $this->materialAdult;
    }

    public function setMaterialAdult(?string $materialAdult): self
    {
        $this->materialAdult = $materialAdult;

        return $this;
    }

    public function getTarifAdultMember(): ?string
    {
        return $this->tarifAdultMember;
    }

    public function setTarifAdultMember(?string $tarifAdultMember): self
    {
        $this->tarifAdultMember = $tarifAdultMember;

        return $this;
    }

    public function getTarifAdultExt(): ?string
    {
        return $this->tarifAdultExt;
    }

    public function setTarifAdultExt(?string $tarifAdultExt): self
    {
        $this->tarifAdultExt = $tarifAdultExt;

        return $this;
    }

    public function getTarifAdult(): ?string
    {
        return $this->tarifAdult;
    }

    public function setTarifAdult(?string $tarifAdult): self
    {
        $this->tarifAdult = $tarifAdult;

        return $this;
    }


    public function getClassYoung(): ?string
    {
        return $this->classYoung;
    }

    public function setClassYoung(?string $classYoung): self
    {
        $this->classYoung = $classYoung;

        return $this;
    }

    public function getMaterialYoung(): ?string
    {
        return $this->materialYoung;
    }

    public function setMaterialYoung(?string $materialYoung): self
    {
        $this->materialYoung = $materialYoung;

        return $this;
    }

    public function getTarifYoungMember(): ?string
    {
        return $this->tarifYoungMember;
    }

    public function setTarifYoungMember(?string $tarifYoungMember): self
    {
        $this->tarifYoungMember = $tarifYoungMember;

        return $this;
    }

    public function getTarifYoungExt(): ?string
    {
        return $this->tarifYoungExt;
    }

    public function setTarifYoungExt(?string $tarifYoungExt): self
    {
        $this->tarifYoungExt = $tarifYoungExt;

        return $this;
    }

    public function getTarifYoung(): ?string
    {
        return $this->tarifYoung;
    }

    public function setTarifYoung(?string $tarifYoung): self
    {
        $this->tarifYoung = $tarifYoung;

        return $this;
    }

    public function getClassMinJunior(): ?string
    {
        return $this->classMinJunior;
    }

    public function setClassMinJunior(?string $classMinJunior): self
    {
        $this->classMinJunior = $classMinJunior;

        return $this;
    }

    public function getClassMaxJunior(): ?string
    {
        return $this->classMaxJunior;
    }

    public function setClassMaxJunior(?string $classMaxJunior): self
    {
        $this->classMaxJunior = $classMaxJunior;

        return $this;
    }

    public function getMaterialJunior(): ?string
    {
        return $this->materialJunior;
    }

    public function setMaterialJunior(?string $materialJunior): self
    {
        $this->materialJunior = $materialJunior;

        return $this;
    }

    public function getTarifJuniorMember(): ?string
    {
        return $this->tarifJuniorMember;
    }

    public function setTarifJuniorMember(?string $tarifJuniorMember): self
    {
        $this->tarifJuniorMember = $tarifJuniorMember;

        return $this;
    }

    public function getTarifJuniorExt(): ?string
    {
        return $this->tarifJuniorExt;
    }

    public function setTarifJuniorExt(?string $tarifJuniorExt): self
    {
        $this->tarifJuniorExt = $tarifJuniorExt;

        return $this;
    }

    public function getTarifJunior(): ?string
    {
        return $this->tarifJunior;
    }

    public function setTarifJunior(?string $tarifJunior): self
    {
        $this->tarifJunior = $tarifJunior;

        return $this;
    }

    public function getSessionJunior(): ?array
    {
        return $this->sessionJunior;
    }

    public function setSessionJunior(?array $sessionJunior): self
    {
        $this->sessionJunior = $sessionJunior;

        return $this;
    }

    public function getPhotosTrip(): ?array
    {
        return $this->photosTrip;
    }

    public function setPhotosTrip(array $photosTrip): self
    {
        $this->photosTrip = $photosTrip;

        return $this;
    }

    public function getCoordinates(): ?array
    {
        return $this->coordinates;
    }

    public function setCoordinates(array $coordinates): self
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    public function getSessionYoung(): ?array
    {
        return $this->sessionYoung;
    }

    public function setSessionYoung(?array $sessionYoung): self
    {
        $this->sessionYoung = $sessionYoung;

        return $this;
    }

    public function getSessionAdult(): ?array
    {
        return $this->sessionAdult;
    }

    public function setSessionAdult(?array $sessionAdult): self
    {
        $this->sessionAdult = $sessionAdult;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

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
}
