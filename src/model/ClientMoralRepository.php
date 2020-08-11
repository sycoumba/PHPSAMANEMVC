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
	
class ClientMoralRepository extends Model{
	
	protected $db;
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getClientMoral($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('ClientMoral')->find(array('id' => $id));
		}
	}
	
	public function addClientMoral($clientmoral)
	{
		if($this->db != null)
		{
            //var_dump($this->db);
            //die;
			$this->db->persist($clientmoral);
			$this->db->flush();

			return $this->db;
		}
	}
	
	public function deleteClientMoral($id){
		if($this->db != null)
		{
			$clientmoral = $this->db->find('ClientMoral', $id);
			if($clientmoral != null)
			{
				$this->db->remove($clientmoral);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updateClientMoral($clientmoral){
		if($this->db != null)
		{
			$getClientMoral = $this->db->find('ClientMoral', $clientmoral->getId());
			if($getClientMoral != null)
			{
				$getClientMoral->setNom_entreprise($clientmoral->getNom_entreprise());
				$getClientMoral->setAdresse($clientmoral->getAdresse());
				$getClientMoral->setTelephone($clientmoral->getTelephone());
				$getClientMoral->setEmail($clientmoral->getEmail());
                $getClientMoral->setType_entreprise($clientmoral->getType_entreprise());
                $getClientMoral->setRaison_social($clientmoral->getRaison_social());
                $getClientMoral->setIdentifiant_entreprise($clientmoral->getIdentifiant_entreprise());
                $getClientMoral->setAdresse_entreprise($clientmoral->getAdresse_entreprise());
				$this->db->flush();

			}else {
				die("Objet ".$clientmoral->getId()." does not existe!!");
			}	
		}
	}
	
	public function listeClientMoral(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM ClientMoral t")->getResult();
		}
	}
	
	public function listeClientMoralById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('ClientMoral')->findBy(array('id' => $id));
		}
	}
	
	public function listeOfClientMoralById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM ClientMoral t WHERE t.id = " . $id)->getSingleResult();
		}
	}

	public function listeOfClientMoral()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('ClientMoral')->findAll();
		}
	}
	
}