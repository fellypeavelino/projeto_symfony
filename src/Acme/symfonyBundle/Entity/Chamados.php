<?php

namespace Acme\symfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Acme\symfonyBundle\Entity\Cliente;
use Acme\symfonyBundle\Entity\Pedidos;

/**
 * Chamados
 *
 * @ORM\Table(name="chamados")
 * @ORM\Entity(repositoryClass="Acme\symfonyBundle\Repository\ChamadosRepository")
 */
class Chamados
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
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text")
     */
    private $observacao;

    /**
    * @ORM\ManyToOne(targetEntity="Acme\symfonyBundle\Entity\Cliente")
    */
    private $cliente;

    /**
    * @ORM\ManyToOne(targetEntity="Acme\symfonyBundle\Entity\Pedidos")
    */
    private $pedidos;

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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Chamados
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return Chamados
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set cliente
     *
     * @param Cliente $cliente
     *
     */
    public function setCliente(Cliente $cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return Cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    } 
    /**
     * Set pedidos
     *
     * @param Pedidos $pedidos
     *
     */
    public function setPedidos(Pedidos $pedidos)
    {
        $this->pedidos = $pedidos;

        return $this;
    }

    /**
     * Get pedidos
     *
     * @return Pedidos
     */
    public function getPedidos()
    {
        return $this->pedidos;
    }    
}

