<?php
/* Smarty version 3.1.30, created on 2020-08-11 00:50:51
  from "/opt/lampp/htdocs/samanemvc/src/view/client/clientSalarie.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f31cf4b919b97_39346789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd36262d0e59f237689bdfdd60d1cc55b8e5d672a' => 
    array (
      0 => '/opt/lampp/htdocs/samanemvc/src/view/client/clientSalarie.html',
      1 => 1597099830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f31cf4b919b97_39346789 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> </title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style.css">
</head>
<!-- onload="masquerDiv();" -->
<body>
    <header>
        <div class="main">
            <img src="../public/logo.jpeg">
            <h1> BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
        </div>
    </header>
    <h2> VEUILLEZ SELECTONNEZ LE TYPE DE CLIENT A AJOUTER</h2>
    <p>OUVERTURE COMPTE</p>
    <P>nouveau client 
        <input type="radio" name="idclient" value="nouveau Client" id="nouveau">  </P>
    <P>Client existant
        <input type="radio" name="idclient" value="client existant" id="existant"> 
        Identifiant Client 
        <input class="champ" type="text" value="rechercher" />
        <input type="submit" value="soumettre" id="soumettre"> </P>
    <form id="client_salarie" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientSalarie/add" method="POST">
        <fieldset id="salarie">
            <legend>INFORMATIONS DU CLIENT SALARIE</legend> 
            <div>
               <label> nom:</label>
                    <input type="Text" name="nom" id="nom" placeholder="Entrer le nom">
            </div>
            <div>
               <label> prenom:</label>
                    <input type="Text" name="prenom" id="prenom" placeholder="Entrer le prenom">
            </div>
            <div>
               <label> adresse:</label>
                    <input type="Text" name="adresse" id="adresse" placeholder="Entrer l'adresse">
            </div>
            <div>
               <label> telephone:</label>
                    <input type="Text" name="telephone" id="telephone" placeholder="Entrer le telephone">
            </div>
            <div>
               <label> email:</label>
                    <input type="Text" name="email" id="email" placeholder="Entrer l' email">
            </div>
            <div>
               <label> profession:</label>
                    <input type="Text" name="profession" id="profession" placeholder="Entrer la profession">
            </div>
            <div>
               <label> salaire_actuel:</label>
                    <input type="Text" name="salaire_actuel" id="salaire_actuel" placeholder="Entrer le salaire_actuel">
            </div>
            <div>
            <label> nom_entreprise:</label>
                    <input type="Texte" name="nom_entreprise" id="nom_entreprise" placeholder="Entrer nom_entreprise">
            </div>
            <div>
            <label>adresse_entreprise:</label>
                    <input type="Texte" name="adresse_entreprise" id="adresse_entreprise" placeholder="Entrer l'adresse_entreprise"></p>
            </div>
            <label>identifiant_entreprise:</label>
                    <input type="Texte" name="identifiant_entreprise" id="identifiant_entreprise" placeholder="Entrer l'identifiant_entreprise"></p>
            </div>
            <div>
            <label>cni:</label>
                    <input type="Text" name="numero_CNI" id="cni" placeholder="Entrer le numero_CNI"></p>
            </div>
                <input type="submit" name="valider" value="valider" id="valider" /> <input type="reset" value="retour" id="retour"></p>
        </fieldset>
    </form>
    <?php echo '<script'; ?>
 src="../public/control.js"><?php echo '</script'; ?>
>
</body>
</html>
$client_salarie-> setNumero_CNI($numero_CNI);
<?php }
}
