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
use src\model\ClientMoralRepository;

class ClientMoralController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/clientMoral/
     */

    public function index(){

        return $this->view->load("client/clientMoral");
    }
    /** 
     * url pattern for this method
     * localhost/projectName/ClientMoral/getId/value
     */

    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("client/clientMoral/get_id", $data);
    }
    
    public function get($id){
        
        $data['ClientMoral'] = $tdb->getClientMoral($id);
        
        return $this->view->load("client/clientMoral/get", $data);
    }
    /** 
     * url pattern for this method
     * localhost/projectName/clientMoral/liste
     */
    public function liste(){
        $tdb = new ClientMoralRepository();
        
        $data['ClientMoral'] = $tdb->listeClientMoral();
        return $this->view->load("client/clientMoral/liste", $data);
    }
     /** 
     * url pattern for this method
     * localhost/projectName/clientMoral/add
     */
    public function add(){
        $tdb = new ClientMoralRepository();
        if(isset($_POST['valider']))
        {
            extract($_POST);
            //var_dump($_POST);
    
            $data['ok'] = 0;
           //if(!empty($id) && !empty($nom_entreprise) && !empty($type_entreprise) 
            //&& !empty($raison_social) && !empty($identifiant_entreprise)&& !empty($adresse_entreprise)) {
                
                $clientmoralObject = new ClientMoral();
                
                $clientmoralObject->setNom_entreprise(addslashes($nom_entreprise));
                $clientmoralObject->setAdresse(addslashes($adresse));
                $clientmoralObject->setTelephone(addslashes($telephone));
                $clientmoralObject->setEmail(addslashes($email));
                $clientmoralObject->setType_entreprise(addslashes($type_entreprise));
                $clientmoralObject->setRaison_social(addslashes($raison_social));
                $clientmoralObject->setIdentifiant_entreprise(addslashes($identifiant_entreprise));
                $clientmoralObject->setAdresse_entreprise(addslashes($adresse_entreprise));

                $ok = $tdb->addClientMoral($clientmoralObject);
               // var_dump($ok);
              //  die;
                $data['ok'] = $ok;
            
            return $this->view->load("client/clientMoral", $data);
        }else{
            return $this->view->load("client/clientMoral");
        }
    //}
}
     /** 
     * url pattern for this method
     * localhost/projectName/Test/update
     */
    public function update(){
        $tdb = new ClientMoralRepository();
        if(isset($_POST['modifier'])){
            extract($_POST);
           // if(!empty($id) && !empty($nom_entreprise) && !empty($type_entreprise) 
           // && !empty($raison_social) && !empty($identifiant_entreprise)&& !empty($adresse_entreprise)) {
                
                $clientmoralObject = new ClientMoral();
                $clientmoralObject->setId($id);
                $clientmoralObject->setNom_entreprise($nom_entreprise);
                $clientmoralObject->setAdresse(addslashes($adresse));
                $clientmoralObject->setTelephone(addslashes($telephone));
                $clientmoralObject->setEmail(addslashes($email));
                $clientmoralObject->setType_entreprise($type_entreprise);
                $clientmoralObject->setRaison_social($raison_social);
                $clientmoralObject->setIdentifiant_entreprise($identifiant_entreprise);
                $clientmoralObject->setAdresse_entreprise($adresse_entreprise);
                $ok = $tdb->updateClientMoral($clientmoralObject);
            }
        
        
        return $this->liste();
    }
//}
     /** 
     * url pattern for this method
     * localhost/projectName/Test/delete/value
     */
    public function delete($id){
        
        $tdb = new ClientMoralRepository();
        $tdb->deleteClientMoral($id);
        return $this->liste();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Test/edit/value
     */
    public function edit($id){
        
        $tdb = new ClientMoralRepository();
        
        $data['ClientMoral'] = $tdb->getClientMoral($id);
        var_dump($tdb->getClientMoral($id));
        return $this->view->load("client/clientMoral/edit", $data);
    }
}
?>