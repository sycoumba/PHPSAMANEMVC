<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
namespace src\model; 

use libs\system\Model; 
	
class CompteCourantRepository extends Model{
	
	protected $db;
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getCompteCourant($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('CompteCourant')->find(array('id' => $id));
		}
	}
	
	public function addCompteCourant($comptecourant)
	{
		if($this->db != null)
		{
            //var_dump($this->db);
            //die;
			$this->db->persist($comptecourant);
			$this->db->flush();

			return $this->db;
		}
	}
	
	public function deleteCompteCourant($id){
		if($this->db != null)
		{
			$comptecourant = $this->db->find('CompteCourant', $id);
			if($comptecourant != null)
			{
				$this->db->remove($comptecourant);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updateCompteCourant($comptecourant){
		if($this->db != null)
		{
			$getcomptecourant = $this->db->find('CompteCourant', $comptecourant->getId());
			if($getcomptecourant != null)
			{
				$getcomptecourant->setNumero_compte($comptecourant->getNumero_compte());
				$getcomptecourant->setCle_rib($comptecourant->getCle_rib());
				$getcomptecourant->setSolde_compte($comptecourant->getSolde_compte());
                $getcomptecourant->setNumero_agence($comptecourant->getNumero_agence());
                $getcomptecourant->setDate_ouverture($comptecourant->getDate_ouverture());
               // $getcomptecourant->setId_responsable($comptecourant->getId_responsable());
              // $getcomptecourant->setId_client($comptecourant->getId_client());
                $getcomptecourant->setAgios($comptecourant->getAgios());
                
				$this->db->flush();

			}else {
				die("Objet ".$comptecourant->getId()." does not existe!!");
			}	
		}
	}
	
	public function listeCompteCourant(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM CompteCourant t")->getResult();
		}
	}
	
	public function listeCompteCourantById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('CompteCourant')->findBy(array('id' => $id));
		}
	}
	
	public function listeOfCompteCourantById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM CompteCourant t WHERE t.id = " . $id)->getSingleResult();
		}
	}

	public function listeOfCompteCourant()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('CompteCourant')->findAll();
		}
	}
	
}