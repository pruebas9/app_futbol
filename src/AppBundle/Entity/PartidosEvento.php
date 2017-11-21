<?php

namespace AppBundle\Entity;

/**
 * PartidosEvento
 */
class PartidosEvento
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \DateTime
     */
    private $start;

    /**
     * @var \DateTime
     */
    private $end;

    /**
     * @var boolean
     */
    private $jugado = '0';

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return PartidosEvento
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return PartidosEvento
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return PartidosEvento
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set jugado
     *
     * @param boolean $jugado
     *
     * @return PartidosEvento
     */
    public function setJugado($jugado)
    {
        $this->jugado = $jugado;

        return $this;
    }

    /**
     * Get jugado
     *
     * @return boolean
     */
    public function getJugado()
    {
        return $this->jugado;
    }

    /**
     * Set idPabellon
     *
     * @param \AppBundle\Entity\Pabellon $idPabellon
     *
     * @return PartidosEvento
     */
    public function setIdPabellon(\AppBundle\Entity\Pabellon $idPabellon = null)
    {
        $this->idPabellon = $idPabellon;

        return $this;
    }

    /**
     * Get idPabellon
     *
     * @return \AppBundle\Entity\Pabellon
     */
    public function getIdPabellon()
    {
        return $this->idPabellon;
    }
}

