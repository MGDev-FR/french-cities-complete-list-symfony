<?php

namespace App\Entity;

use App\Repository\CitiesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CitiesRepository::class)
 */
class Cities
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $ville_departement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_slug;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $ville_nom;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $ville_nom_simple;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $ville_nom_reel;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $ville_nom_soundex;

    /**
     * @ORM\Column(type="string", length=22)
     */
    private $ville_nom_metaphone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_code_postal;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $ville_commune;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $ville_canton;

    /**
     * @ORM\Column(type="smallint")
     */
    private $ville_amdi;

    /**
     * @ORM\Column(type="integer")
     */
    private $ville_population_2010;

    /**
     * @ORM\Column(type="integer")
     */
    private $ville_population_1999;

    /**
     * @ORM\Column(type="integer")
     */
    private $ville_population_2012;

    /**
     * @ORM\Column(type="integer")
     */
    private $ville_densite_2010;

    /**
     * @ORM\Column(type="float")
     */
    private $ville_surface;

    /**
     * @ORM\Column(type="float")
     */
    private $ville_longitude_deg;

    /**
     * @ORM\Column(type="float")
     */
    private $ville_latitude_deg;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $ville_longitude_grd;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $ville_latitude_grd;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $ville_longitude_dms;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $ville_latitude_dms;

    /**
     * @ORM\Column(type="integer")
     */
    private $ville_zmin;

    /**
     * @ORM\Column(type="integer")
     */
    private $ville_zmax;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $ville_code_commune;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="city_id")
     */
    private $users;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $ville_arrondissement;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVilleDepartement(): ?string
    {
        return $this->ville_departement;
    }

    public function setVilleDepartement(string $ville_departement): self
    {
        $this->ville_departement = $ville_departement;

        return $this;
    }

    public function getVilleSlug(): ?string
    {
        return $this->ville_slug;
    }

    public function setVilleSlug(string $ville_slug): self
    {
        $this->ville_slug = $ville_slug;

        return $this;
    }

    public function getVilleNom(): ?string
    {
        return $this->ville_nom;
    }

    public function setVilleNom(string $ville_nom): self
    {
        $this->ville_nom = $ville_nom;

        return $this;
    }

    public function getVilleNomSimple(): ?string
    {
        return $this->ville_nom_simple;
    }

    public function setVilleNomSimple(string $ville_nom_simple): self
    {
        $this->ville_nom_simple = $ville_nom_simple;

        return $this;
    }

    public function getVilleNomReel(): ?string
    {
        return $this->ville_nom_reel;
    }

    public function setVilleNomReel(string $ville_nom_reel): self
    {
        $this->ville_nom_reel = $ville_nom_reel;

        return $this;
    }

    public function getVilleNomSoundex(): ?string
    {
        return $this->ville_nom_soundex;
    }

    public function setVilleNomSoundex(string $ville_nom_soundex): self
    {
        $this->ville_nom_soundex = $ville_nom_soundex;

        return $this;
    }

    public function getVilleNomMetaphone(): ?string
    {
        return $this->ville_nom_metaphone;
    }

    public function setVilleNomMetaphone(string $ville_nom_metaphone): self
    {
        $this->ville_nom_metaphone = $ville_nom_metaphone;

        return $this;
    }

    public function getVilleCodePostal(): ?string
    {
        return $this->ville_code_postal;
    }

    public function setVilleCodePostal(string $ville_code_postal): self
    {
        $this->ville_code_postal = $ville_code_postal;

        return $this;
    }

    public function getVilleCommune(): ?string
    {
        return $this->ville_commune;
    }

    public function setVilleCommune(string $ville_commune): self
    {
        $this->ville_commune = $ville_commune;

        return $this;
    }

    public function getVilleCanton(): ?string
    {
        return $this->ville_canton;
    }

    public function setVilleCanton(string $ville_canton): self
    {
        $this->ville_canton = $ville_canton;

        return $this;
    }

    public function getVilleAmdi(): ?int
    {
        return $this->ville_amdi;
    }

    public function setVilleAmdi(int $ville_amdi): self
    {
        $this->ville_amdi = $ville_amdi;

        return $this;
    }

    public function getVillePopulation2010(): ?int
    {
        return $this->ville_population_2010;
    }

    public function setVillePopulation2010(int $ville_population_2010): self
    {
        $this->ville_population_2010 = $ville_population_2010;

        return $this;
    }

    public function getVillePopulation1999(): ?int
    {
        return $this->ville_population_1999;
    }

    public function setVillePopulation1999(int $ville_population_1999): self
    {
        $this->ville_population_1999 = $ville_population_1999;

        return $this;
    }

    public function getVillePopulation2012(): ?int
    {
        return $this->ville_population_2012;
    }

    public function setVillePopulation2012(int $ville_population_2012): self
    {
        $this->ville_population_2012 = $ville_population_2012;

        return $this;
    }

    public function getVilleDensite2010(): ?int
    {
        return $this->ville_densite_2010;
    }

    public function setVilleDensite2010(int $ville_densite_2010): self
    {
        $this->ville_densite_2010 = $ville_densite_2010;

        return $this;
    }

    public function getVilleSurface(): ?float
    {
        return $this->ville_surface;
    }

    public function setVilleSurface(float $ville_surface): self
    {
        $this->ville_surface = $ville_surface;

        return $this;
    }

    public function getVilleLongitudeDeg(): ?float
    {
        return $this->ville_longitude_deg;
    }

    public function setVilleLongitudeDeg(float $ville_longitude_deg): self
    {
        $this->ville_longitude_deg = $ville_longitude_deg;

        return $this;
    }

    public function getVilleLatitudeDeg(): ?float
    {
        return $this->ville_latitude_deg;
    }

    public function setVilleLatitudeDeg(float $ville_latitude_deg): self
    {
        $this->ville_latitude_deg = $ville_latitude_deg;

        return $this;
    }

    public function getVilleLongitudeGrd(): ?string
    {
        return $this->ville_longitude_grd;
    }

    public function setVilleLongitudeGrd(string $ville_longitude_grd): self
    {
        $this->ville_longitude_grd = $ville_longitude_grd;

        return $this;
    }

    public function getVilleLatitudeGrd(): ?string
    {
        return $this->ville_latitude_grd;
    }

    public function setVilleLatitudeGrd(string $ville_latitude_grd): self
    {
        $this->ville_latitude_grd = $ville_latitude_grd;

        return $this;
    }

    public function getVilleLongitudeDms(): ?string
    {
        return $this->ville_longitude_dms;
    }

    public function setVilleLongitudeDms(string $ville_longitude_dms): self
    {
        $this->ville_longitude_dms = $ville_longitude_dms;

        return $this;
    }

    public function getVilleLatitudeDms(): ?string
    {
        return $this->ville_latitude_dms;
    }

    public function setVilleLatitudeDms(string $ville_latitude_dms): self
    {
        $this->ville_latitude_dms = $ville_latitude_dms;

        return $this;
    }

    public function getVilleZmin(): ?int
    {
        return $this->ville_zmin;
    }

    public function setVilleZmin(int $ville_zmin): self
    {
        $this->ville_zmin = $ville_zmin;

        return $this;
    }

    public function getVilleZmax(): ?int
    {
        return $this->ville_zmax;
    }

    public function setVilleZmax(int $ville_zmax): self
    {
        $this->ville_zmax = $ville_zmax;

        return $this;
    }

    public function getVilleCodeCommune(): ?string
    {
        return $this->ville_code_commune;
    }

    public function setVilleCodeCommune(string $ville_code_commune): self
    {
        $this->ville_code_commune = $ville_code_commune;

        return $this;
    }

    public function getVilleArrondissement(): ?string
    {
        return $this->ville_arrondissement;
    }

    public function setVilleArrondissement(?string $ville_arrondissement): self
    {
        $this->ville_arrondissement = $ville_arrondissement;

        return $this;
    }
}
