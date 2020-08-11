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
use src\model\ClientNonSalarieRepository;

class ClientNonSalarieController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/ClientNonSalarie/
     */

    public function index(){

        return $this->view->load("client/clientNonSalarie");
    }
    /** 
     * url pattern for this method
     * localhost/projectName/ClientNonSalarie/getId/value
     */

    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("client/clientNonSalarie/get_id", $data);
    }
    
    public function get($id){
        
        $data['ClientNonSalarie'] = $tdb->getClientNonSalarie($id);
        
        return $this->view->load("client/clientNonSalarie/get", $data);
    }
    /** 
     * url pattern for this method
     * localhost/projectName/clientMoral/liste
     */
    public function liste(){
        $tdb = new ClientNonSalarieRepository();
        
        $data['ClientNonSalarie'] = $tdb->listeClientNonSalarie();
        return $this->view->load("client/clientNonSalarie/liste", $data);
    }
     /** 
     * url pattern for this method
     * localhost/projectName/ClientNonSalarie/add
     */
    public function add(){
        $tdb = new ClientNonSalarieRepository();
        if(isset($_POST['valider']))
        {
            extract($_POST);
            //var_dump($_POST);
    
            $data['ok'] = 0;
           //if(!empty($id) && !empty($nom_entreprise) && !empty($type_entreprise) 
            //&& !empty($raison_social) && !empty($identifiant_entreprise)&& !empty($adresse_entreprise)) {
                
                $clientnonsalarielObject = new ClientNonSalarie();
                $clientnonsalarielObject->setNom(addslashes($nom));
                $clientnonsalarielObject->setPrenom(addslashes($prenom));
                $clientnonsalarielObject->setAdresse(addslashes($adresse));
                $clientnonsalarielObject->setTelephone(addslashes($telephone));
                $clientnonsalarielObject->setEmail(addslashes($email));
                $clientnonsalarielObject->setActivite(addslashes($activite));
                $clientnonsalarielObject->setNumero_CNI(addslashes($numero_CNI));

                $ok = $tdb->addClientNonSalarie($clientnonsalarielObject);
               // var_dump($ok);
              //  die;
                $data['ok'] = $ok;
            
            return $this->view->load("client/clientNonSalarie", $data);
        }else{
            return $this->view->load("client/clientNonSalarie");
        }
    //}
}
     /** 
     * url pattern for this method
     * localhost/projectName/Test/update
     */
    public function update(){
        $tdb = new ClientNonSalarieRepository();
        if(isset($_POST['modifier'])){
            extract($_POST);
           // if(!empty($id) && !empty($nom_entreprise) && !empty($type_entreprise) 
           // && !empty($raison_social) && !empty($identifiant_entreprise)&& !empty($adresse_entreprise)) {
                
                $clientnonsalarieObject = new ClientNonSalarie();
                $clientnonsalarieObject->setId($id);
                $clientnonsalarieObject->setNom($nom);
                $clientnonsalarieObject->setAdresse(addslashes($adresse));
                $clientnonsalarieObject->setTelephone(addslashes($telephone));
                $clientnonsalarieObject->setEmail(addslashes($email));
                $clientnonsalarieObject->setActivite(addslashes($activite));
                $clientnonsalarieObject->setNumero_CNI(addslashes($numero_CNI));
               $ok = $tdb->updateClientNonSalarie($clientnonsalarieObject);
            }
            
        return $this->liste();
    }

//}
     /** 
     * url pattern for this method
     * localhost/projectName/Test/delete/value
     */
    public function delete($id){
        
        $tdb = new ClientNonSalarieRepository();
        $tdb->deleteClientNonSalarie($id);
        return $this->liste();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/ClientNonSalarie/edit/value
     */
    public function edit($id){
        
        $tdb = new ClientNonSalarieRepository();
        
        $data['ClientNonSalarie'] = $tdb->getClientNonSalarie($id);
        var_dump($tdb->getClientNonSalarie($id));
        return $this->view->load("client/clientNonSalarie/edit", $data);
    }
}
?>