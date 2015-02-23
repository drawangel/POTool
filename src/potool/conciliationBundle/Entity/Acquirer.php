<?php

namespace potool\conciliationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acquirer
 *
 * @ORM\Table(name="acquirer")
 * @ORM\Entity
 */
class Acquirer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="acquirer_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $acquirerPk;

    /**
     * @var string
     *
     * @ORM\Column(name="acquirer_name", type="string", length=50, nullable=true)
     */
    private $acquirerName;

    /**
     * @var integer
     *
     * @ORM\Column(name="acquirer_FK_country_PK", type="integer", nullable=true)
     */
    private $acquirerFkCountryPk;



    /**
     * Get acquirerPk
     *
     * @return integer 
     */
    public function getAcquirerPk()
    {
        return $this->acquirerPk;
    }

    /**
     * Set acquirerName
     *
     * @param string $acquirerName
     * @return Acquirer
     */
    public function setAcquirerName($acquirerName)
    {
        $this->acquirerName = $acquirerName;
    
        return $this;
    }

    /**
     * Get acquirerName
     *
     * @return string 
     */
    public function getAcquirerName()
    {
        return $this->acquirerName;
    }

    /**
     * Set acquirerFkCountryPk
     *
     * @param integer $acquirerFkCountryPk
     * @return Acquirer
     */
    public function setAcquirerFkCountryPk($acquirerFkCountryPk)
    {
        $this->acquirerFkCountryPk = $acquirerFkCountryPk;
    
        return $this;
    }

    /**
     * Get acquirerFkCountryPk
     *
     * @return integer 
     */
    public function getAcquirerFkCountryPk()
    {
        return $this->acquirerFkCountryPk;
    }
}