<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Drinks
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DrinksRepository")
 */
class Address
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
     * @var string
     *
     * @ORM\Column(name="street1", type="string", length=255)
     */
    private $street1;
 /**
     * @var int
     *
     * @ORM\Column(name="bussiness_id", type="string", length=255)
     */
    private $bussiness_id;

    /**
     * @var int
     *
     * @ORM\Column(name="postcode", type="integer", length=2000)
     */
    private $postcode;

   

    /**
     * @var string
     *
     * @ORM\Column(name="street2", type="string", length=255)
     */
    private $street2;

    /**
     * @var string
     *
     * @ORM\Column(name="street3", type="string", length=255)
     */
    private $street3;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string")
     */
    private $city;

	
    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string")
     */
    private $region;
	
    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="string")
     */
    private $timezone;

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
     * Set postcode
     *
     * @param int $postcode
     *
     * @return bussiness
     */
    public function setPostCode($description)
    {
        $this->postcode = $description;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return int
     */
    public function getPostCode()
    {
        return $this->postcode;
    }


    /**
     * Set street1
     *
     * @param string $street1
     *
     * @return address
     */
    public function setStreet1($alcContent)
    {
        $this->street1 = $alcContent;

        return $this;
    }

    /**
     * Get street1
     *
     * @return string
     */
    public function getStreet1()
    {
        return $this->legal_name;
    }

    /**
     * Set street2
     *
     * @param string $street2
     *
     * @return bussiness
     */
    public function setStreet2($type)
    {
        $this->street2 = $type;

        return $this;
    }

    /**
     * Get street2
     *
     * @return string
     */
    public function getStreet2()
    {
        return $this->type;
    }

    /**
     * Set street3
     *
     * @param string street3
     *
     * @return address
     */
    public function setStreet3( $image)
    {
        $this->street3 = $image;

        return $this;
    }

    /**
     * Get street3
     *
     * @return string
     */
    public function getStreet3()
    {
        return $this->street3;
    }
	 /**
     * Set city
     *
     * @param string city
     *
     * @return city
     */
    public function setCity( $image)
    {
        $this->city = $image;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
	 /**
     * Set region
     *
     * @param string region
     *
     * @return region
     */
    public function setRegion( $image)
    {
        $this->region = $image;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }
	 /**
     * Set timezone
     *
     * @param string timezone
     *
     * @return timezone
     */
    public function setTimezone( $image)
    {
        $this->timezone = $image;

        return $this;
    }

    /**
     * Get bussinessaddress
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }
	 public function setBussinessAddress( $image)
    {
        $this->bussiness_id = $image;

        return $this;
    }

    /**
     * Get bussinessaddress
     *
     * @return string
     */
    public function getBussinessAddress()
    {
        return $this->bussiness_id;
    }
}

