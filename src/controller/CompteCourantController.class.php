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
use src\model\CompteCourantRepository;

class CompteCourantController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/CompteCourant/
     */

    public function index(){

        return $this->view->load("compte/compteCourant");
    }
    /** 
     * url pattern for this method
     * localhost/projectName/CompteCourant/getId/value
     */

    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("compte/compteCourant/get_id", $data);
    }
    
    public function get($id){
        
        $data['CompteCourant'] = $tdb->getCompteCourant($id);
        
        return $this->view->load("compte/compteCourant/get", $data);
    }
    /** 
     * url pattern for this method
     * localhost/projectName/compteCourant/liste
     */
    public function liste(){
        $tdb = new CompteCourantRepository();
        
        $data['CompteCourant'] = $tdb->listeCompteCourant();
        return $this->view->load("compte/compteCourant/liste", $data);
    }
     /** 
     * url pattern for this method
     * localhost/projectName/compteCourant/add
     */
    public function add(){
        $tdb = new CompteCourantRepository();
        if(isset($_POST['valider']))
        {
            extract($_POST);
            //var_dump($_POST);
    
            $data['ok'] = 0;
            $comptecourantObject = new CompteCourant();
            $comptecourantObject->setNumero_compte(addslashes($numero_compte));
            $comptecourantObject->setCle_rib(addslashes($cle_rib));
            $comptecourantObject->setSolde_compte(addslashes($solde_compte));
            $comptecourantObject->setNumero_agence(addslashes($numero_agence));
            $comptecourantObject->setDate_ouverture(addslashes($date_ouverture));
           // $comptecourantObject->setId_responsable(addslashes($id_responsable));
           // $comptecourantObject->setId_client(addslashes($id_client));
            $comptecourantObject->setAgios(addslashes($agios));
            $ok = $tdb->addCompteCourant($comptecourantObject);
           // var_dump($ok);
          //  die;
            $data['ok'] = $ok;
        
        return $this->view->load("compte/compteCourant", $data);
    }else{
        return $this->view->load("compte/compteCourant");
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
    return $this->view->load("client/compteCourant/edit", $data);
}
}
?>