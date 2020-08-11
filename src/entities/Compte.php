<?php
use Doctrine\ORM\Annotation as ORM;
//use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/** 
 * @Entity @Table(name="compte")
 **/
class Compte
{
    /** @Id @column(type ="integer")  @GeneratedValue **/
    private $id;
    /** @column(type ="string") **/
    private $numero_compte;
    /** @column(type ="integer") **/
    private $cle_rib;
    /** @column(type ="integer") **/
    private $solde_compte;  
    /** @column(type ="integer") **/
    private $numero_agence;
    /** @column(type ="string") **/
    private $date_ouverture;
    /** @column(type ="integer") **/
    private $id_responsable;
    /** @column(type ="integer") **/
    private $id_client;  

    /**
     * Many compte have one client. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="Compte")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $product;


    public function __construct()
    {
        $this->client = new ArrayCollection();
    }

    public function getId()
    {
    return $this->id;
    }
    public function setId($id)
    {
     $this->id= $id;
    }
    public function getNumero_compte()
    {
    return $this->numero_compte;
    }
    public function setNumero_compte($numero_compte)
    {
     $this->numero_compte= $numero_compte;
    }
    public function getCle_rib()
    {
    return $this->cle_rib;
    }
    public function setCle_rib($cle_rib)
    {
     $this->cle_rib= $cle_rib;
    }
    public function getSolde_compte()
    {
    return $this->solde_compte;
    }
    public function setSolde_compte($solde_compte)
    {
     $this->solde_compte= $solde_compte;
    }
    public function getNumero_agence()
    {
    return $this->numero_agence;
    }
    public function setNumero_agence($numero_agence)
    {
     $this->numero_agence= $numero_agence;
    }
    public function getDate_ouverture()
    {
    return $this->date_ouverture;
    }
    public function setDate_ouverture($date_ouverture)
    {
     $this->date_ouverture= $date_ouverture;
    }
    public function getId_client()
    {
    return $this->id_client;
    }
    public function setId_client($id_client)
    {
     $this->id_client= $id_client;
    }
    public function getId_responsable()
    {
    return $this->id_responsable;
    }
    public function setId_responsablet($id_responsable)
    {
     $this->id_responsable= $id_responsable;
    }

}

?>