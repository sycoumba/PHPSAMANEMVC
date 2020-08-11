<?php
use Doctrine\ORM\Annotation as ORM;
//use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/** 
 * @Entity @Table(name="compte_epargne")
 **/
class Compteepargne
{
    /** @Id @column(type ="integer")  @GeneratedValue **/
    private $id;
    /** @column(type ="decimal") **/
    private $frais_ouverture;
    /** @column(type ="integer") **/
    private $montant_remuneration;
    /** @column(type ="integer") **/
    private $Id_compte;
    
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
    public function getFrais_ouverture()
    {
    return $this->frais_ouverture;
    }
    public function setFrais_ouverture($frais_ouverture)
    {
     $this->frais_ouverture= $frais_ouverture;
    }
    public function getMontant_remuneration()
    {
    return $this->montant_remuneration;
    }
    public function setMontant_remuneration($montant_remuneration)
    {
     $this->montant_remuneration= $montant_remuneration;
    }

    public function getId_compte()
    {
    return $this->Id_compte;
    }
    public function setId_compte($Id_compte)
    {
     $this->Id_compte= $Id_compte;
    }


}

?>

