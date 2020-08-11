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
	
class ClientSalarieRepository extends Model{
	
	protected $db;
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getClientSalarie($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('ClientSalarie')->find(array('id' => $id));
		}
	}
	
	public function addClientSalarie($clientsalarie)
	{
		if($this->db != null)
		{
            //var_dump($this->db);
            //die;
			$this->db->persist($clientsalarie);
			$this->db->flush();

			return $this->db;
		}
	}
	
	public function deleteClientSalarie($id){
		if($this->db != null)
		{
			$clientsalarie = $this->db->find('ClientSalarie', $id);
			if($clientsalarie != null)
			{
				$this->db->remove($clientsalarie);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updateClientSalarie($clientsalarie){
		if($this->db != null)
		{
			$getClientSalarie = $this->db->find('ClientSalarie', $clientsalarie->getId());
			if($getClientSalarie != null)
			{
				$getClientSalarie->setNom_entreprise($clientsalarie->getNom_entreprise());
				$getClientSalarie->setAdresse($clientsalarie->getAdresse());
				$getClientSalarie->setTelephone($clientsalarie->getTelephone());
                $getClientSalarie->setEmail($clientsalarie->getEmail());
                $getClientSalarie->setProfession($clientsalarie->getProfession());
                $getClientSalarie->setSalaire_actuel($clientsalarie->getSalaire_actuel());
                $getClientSalarie->setNom_entreprise($clientsalarie->getNom_entreprise());
                $getClientSalarie->setAdresse_entreprise($clientsalarie->getAdresse_entreprise());
                $getClientSalarie->setIdentifiant_entreprise($clientsalarie->getIdentifiant_entreprise());
                $getClientSalarie->setNumero_CNI($clientsalarie->getNumero_CNI());
                
                
				$this->db->flush();

			}else {
				die("Objet ".$clientsalarie->getId()." does not existe!!");
			}	
		}
	}
	
	public function listeClientSalarie(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM ClientSalarie t")->getResult();
		}
	}
	
	public function listeClientSalarieById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('ClientSalarie')->findBy(array('id' => $id));
		}
	}
	
	public function listeOfClientSalarieById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM ClientSalarie t WHERE t.id = " . $id)->getSingleResult();
		}
	}

	public function listeOfClientSalarie()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('ClientSalarie')->findAll();
		}
	}
	
}