<?php

namespace AppBundle\Entity;

/**
 * Partidos
 */
class Partido
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \AppBundle\Entity\Pabellones
     */
    private $idPabellon;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Partidos
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idPabellon
     *
     * @param \AppBundle\Entity\Pabellones $idPabellon
     *
     * @return Partidos
     */
    public function setIdPabellon(\AppBundle\Entity\Pabellones $idPabellon = null)
    {
        $this->idPabellon = $idPabellon;

        return $this;
    }

    /**
     * Get idPabellon
     *
     * @return \AppBundle\Entity\Pabellones
     */
    public function getIdPabellon()
    {
        return $this->idPabellon;
    }
}
