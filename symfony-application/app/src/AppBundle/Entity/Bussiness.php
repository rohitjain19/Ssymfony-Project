<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Drinks
 *
 * @ORM\Table(name="bussiness")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DrinksRepository")
 */
class Bussiness
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var date
     *
     * @ORM\Column(name="start_date", type="date")
     */
    private $start_date;

    /**
     * @var int
     *
     * @ORM\Column(name="fein", type="integer", length=2000)
     */
    private $fein;

   

    /**
     * @var string
     *
     * @ORM\Column(name="legal_name", type="string", length=255)
     */
    private $legal_name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="industry", type="string")
     */
    private $industry;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $start_date
     *
     * @return bussiness
     */
    public function setStartDate($name)
    {
        $this->start_date = $name;

        return $this;
    }

    /**
     * Get start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set fein
     *
     * @param int $fein
     *
     * @return bussiness
     */
    public function setFein($description)
    {
        $this->fein = $description;

        return $this;
    }

    /**
     * Get fein
     *
     * @return int
     */
    public function getFein()
    {
        return $this->fein;
    }


    /**
     * Set legal_name
     *
     * @param string $alcContent
     *
     * @return bussiness
     */
    public function setLegalName($alcContent)
    {
        $this->legal_name = $alcContent;

        return $this;
    }

    /**
     * Get legal_name
     *
     * @return string
     */
    public function getLegalName()
    {
        return $this->legal_name;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return bussiness
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set industry
     *
     * @param string industry
     *
     * @return bussiness
     */
    public function setIndustry( $image)
    {
        $this->industry = $image;

        return $this;
    }

    /**
     * Get industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->industry;
    }
}

