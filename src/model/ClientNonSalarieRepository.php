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
	
class ClientNonSalarieRepository extends Model{
	
	protected $db;
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getClientNonSalarie($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('ClientNonSalarie')->find(array('id' => $id));
		}
	}
	
	public function addClientNonSalarie($clientnonsalarie)
	{
		if($this->db != null)
		{
            //var_dump($this->db);
            //die;
			$this->db->persist($clientnonsalarie);
			$this->db->flush();

			return $this->db;
		}
	}
	
	public function deleteClientNonSalarie($id){
		if($this->db != null)
		{
			$clientnonsalarie = $this->db->find('ClientNonSalarie', $id);
			if($clientnonsalarie != null)
			{
				$this->db->remove($clientnonsalarie);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updateClientNonSalarie($clientnonsalarie){
		if($this->db != null)
		{
			$getClientNonSalarie = $this->db->find('ClientNonSalarie', $clientnonsalarie->getId());
			if($getClientNonSalarie != null)
			{
				$getClientNonSalarie->setNom_entreprise($clientnonsalarie->getNom_entreprise());
				$getClientNonSalarie->setAdresse($clientnonsalarie->getAdresse());
				$getClientNonSalarie->setTelephone($clientnonsalarie->getTelephone());
				$getClientNonSalarie->setEmail($clientnonsalarie->getEmail());
                $getClientNonSalarie->setType_entreprise($clientnonsalarie->getType_entreprise());
                $getClientNonSalarie->setRaison_social($clientnonsalarie->getRaison_social());
                $getClientNonSalarie->setIdentifiant_entreprise($clientnonsalarie->getIdentifiant_entreprise());
                $getClientNonSalarie->setAdresse_entreprise($clientnonsalarie->getAdresse_entreprise());
				$this->db->flush();

			}else {
				die("Objet ".$clientnonsalarie->getId()." does not existe!!");
			}	
		}
	}
	
	public function listeClientNonSalarie(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM ClientNonSalarie t")->getResult();
		}
	}
	
	public function listeClientNonSalarieById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('ClientNonSalarie')->findBy(array('id' => $id));
		}
	}
	
	public function listeOfClientNonSalarieById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM ClientNonSalarie t WHERE t.id = " . $id)->getSingleResult();
		}
	}

	public function listeOfClientNonSalarie()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('ClientNonSalarie')->findAll();
		}
	}
	
}