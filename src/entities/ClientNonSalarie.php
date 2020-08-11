<?php
use Doctrine\ORM\Annotation as ORM;
//use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/** 
 * @Entity @Table(name="client_non_salarie")
 **/
class Clientnonsalarie
{
    /** @Id @column(type ="integer")  @GeneratedValue **/
    private $id;
    /** @column(type ="string") **/
    private $nom;
    /** @column(type ="string") **/
    private $prenom;
     /** @column(type ="string") **/
     private $adresse;
  /** @column(type ="string") **/
     private $telephone;
      /** @column(type ="string") **/
     private $email;  
    /** @column(type ="string") **/
    private $activite; 
    /** @column(type ="integer") **/
    private $numero_CNI;
    /** @column(type ="integer") **/
    private $id_client;

    public function __construct()
    {
        
    }

    public function getId()
    {
    return $this->id;
    }
    public function setId($id)
    {
     $this->id= $id;
    }
    public function getNom()
    {
    return $this->nom;
    }
    public function setNom($nom)
    {
     $this->nom= $nom;
    }
    public function getPrenom()
    {
    return $this->prenom;
    }
    public function setPrenom($prenom)
    {
     $this->prenom= $prenom;
    }
    public function getAdresse()
    {
    return $this->adresse;
    }
    public function setAdresse($adresse)
    {
     $this->adresse= $adresse;
    }
    public function getTelephone()
    {
    return $this->telephone;
    }
    public function setTelephone($telephone)
    {
     $this->telephone= $telephone;
    }
    public function getEmail()
    {
    return $this->email;
    }
    public function setEmail($email)
    {
     $this->email= $email;
    }
    public function getActivite()
    {
    return $this->activite;
    }
    public function setActivite($activite)
    {
     $this->activite= $activite;
    }
    public function getNumero_CNI()
    {
    return $this->numero_CNI;
    }
    public function setNumero_CNI($numero_CNI)
    {
     $this->numero_CNI= $numero_CNI;
    }
    public function getId_client()
    {
    return $this->id_client;
    }
    public function setId_client($id_client)
    {
     $this->id_client= $id_client;
    }
}
?>

