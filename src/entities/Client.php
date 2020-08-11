<?php
use Doctrine\ORM\Annotation as ORM;
//use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/** 
 * @Entity @Table(name="client")
 **/
class Client
{
    /** @Id @column(type ="integer")  @GeneratedValue **/
    private $id;
     /** @column(type ="string") **/
    private $adresse;
 /** @column(type ="string") **/
    private $telephone;
     /** @column(type ="string") **/
    private $email;  

    /**
     * One client has many compte. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="Client")
     */
    private $client;


    public function __construct()
    {
        $this->compte = new ArrayCollection();
    }

    public function getId()
    {
    return $this->id;
    }
    public function setId($id)
    {
     $this->id= $id;
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
}
?>