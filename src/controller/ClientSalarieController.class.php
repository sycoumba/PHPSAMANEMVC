<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/ 
use libs\system\Controller; 
use src\model\ClientSalarieRepository;

class ClientSalarieController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/ClientSalarie/
     */

    public function index(){

        return $this->view->load("client/clientSalarie");
    }
    /** 
     * url pattern for this method
     * localhost/projectName/ClientSalarie/getId/value
     */

    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("client/clientSalarie/get_id", $data);
    }
    
    public function get($id){
        
        $data['ClientSalarie'] = $tdb->getClientSalarie($id);
        
        return $this->view->load("client/clientSalarie/get", $data);
    }
    /** 
     * url pattern for this method
     * localhost/projectName/clientSalarie/liste
     */
    public function liste(){
        $tdb = new ClientSalarieRepository();
        
        $data['ClientSalarie'] = $tdb->listeClientSalarie();
        return $this->view->load("client/clientSalarie/liste", $data);
    }
     /** 
     * url pattern for this method
     * localhost/projectName/ClientSalarie/add
     */
    public function add(){
        $tdb = new ClientSalarieRepository();
        if(isset($_POST['valider']))
        {
            extract($_POST);
            //var_dump($_POST);
    
            $data['ok'] = 0;
           //if(!empty($id) && !empty($nom_entreprise) && !empty($type_entreprise) 
            //&& !empty($raison_social) && !empty($identifiant_entreprise)&& !empty($adresse_entreprise)) {
                
                $clientsalarielObject = new ClientSalarie();
                $clientsalarielObject->setNom(addslashes($nom));
                $clientsalarielObject->setPrenom(addslashes($prenom));
                $clientsalarielObject->setAdresse(addslashes($adresse));
                $clientsalarielObject->setTelephone(addslashes($telephone));
                $clientsalarielObject->setEmail(addslashes($email));
                $clientsalarielObject->setProfession(addslashes($profession));
                $clientsalarielObject->setSalaire_actuel(addslashes($salaire_actuel));
                $clientsalarielObject->setNom_entreprise(addslashes($nom_entreprise));
                $clientsalarielObject->setAdresse_entreprise(addslashes($adresse_entreprise));
                $clientsalarielObject->setIdentifiant_entreprise(addslashes($identifiant_entreprise));
                $clientsalarielObject->setNumero_CNI(addslashes($numero_CNI));

                $ok = $tdb->addClientSalarie($clientsalarielObject);
               // var_dump($ok);
              //  die;
                $data['ok'] = $ok;
            
            return $this->view->load("client/clientSalarie", $data);
        }else{
            return $this->view->load("client/clientSalarie");
        }
    //}
}
     /** 
     * url pattern for this method
     * localhost/projectName/Test/update
     */
    public function update(){
        $tdb = new ClientSalarieRepository();
        if(isset($_POST['modifier'])){
            extract($_POST);
           // if(!empty($id) && !empty($nom_entreprise) && !empty($type_entreprise) 
           // && !empty($raison_social) && !empty($identifiant_entreprise)&& !empty($adresse_entreprise)) {
                
                $clientsalarieObject = new ClientSalarie();
                $clientsalarieObject->setId($id);
                $clientsalarieObject->setNom($nom);
                $clientsalarieObject->setAdresse(addslashes($adresse));
                $clientsalarieObject->setTelephone(addslashes($telephone));
                $clientsalarieObject->setEmail(addslashes($email));
                $clientsalarieObject->setProfession(addslashes($profession));
                $clientsalarieObject->setSalaire_actuel(addslashes($salaire_actuel));
                $clientsalarieObject->setNom_entreprise(addslashes($nom_entreprise));
                $clientsalarieObject->setAdresse_entreprise(addslashes($adresse_entreprise));
                $clientsalarieObject->setIdentifiant_entreprise(addslashes($identifiant_entreprise));
                $clientsalarieObject->setNumero_CNI(addslashes($numero_CNI));
               $ok = $tdb->updateClientSalarie($clientsalarieObject);
            }
            
        return $this->liste();
    }

//}
     /** 
     * url pattern for this method
     * localhost/projectName/Test/delete/value
     */
    public function delete($id){
        
        $tdb = new ClientSalarieRepository();
        $tdb->deleteClientSalarie($id);
        return $this->liste();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/ClientSalarie/edit/value
     */
    public function edit($id){
        
        $tdb = new ClientSalarieRepository();
        
        $data['ClientSalarie'] = $tdb->getClientSalarie($id);
        var_dump($tdb->getClientSalarie($id));
        return $this->view->load("client/clientSalarie/edit", $data);
    }
}
?>