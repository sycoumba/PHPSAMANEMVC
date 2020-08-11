<?php
/* Smarty version 3.1.30, created on 2020-08-10 18:52:37
  from "/opt/lampp/htdocs/samanemvc/src/view/client/clientMoral.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f317b55cbce75_95785839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea0b93270d5ac1a055f9e287032edcdaf885443b' => 
    array (
      0 => '/opt/lampp/htdocs/samanemvc/src/view/client/clientMoral.html',
      1 => 1597078287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f317b55cbce75_95785839 (Smarty_Internal_Template $_smarty_tpl) {
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
    <form id="client_moral" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientMoral/add" method="POST">
        <fieldset id="moral">
            <legend>INFORMATIONS DU CLIENT MORAL</legend> 
            <div>
               <label> nom_entreprise:</label>
                    <input type="Text" name="nom_entreprise" id="nom_entreprise" placeholder="Entrer le nom_entreprise">
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
            <label> type_entreprise:</label>
                    <input type="Texte" name="type_entreprise" id="type_entreprise" placeholder="Entrer type_entreprise">
            </div>
            <div>
            <label>raison_social:</label>
                    <input type="Text" name="raison_social" id="raison_social" placeholder="Entrer la raison_social"></p>
            </div>
            <div>
            <label> identifiant_entreprise :</label>
                    <input type="text" name="identifiant_entreprise" id="identifiant_entreprise" placeholder="Entrer  l'identifiant_entreprise"></p>
            </div>
            <div>
            <label>adresse_entreprise:</label>
                    <input type="Texte" name="adresse_entreprise" id="adresse_entreprise" placeholder="Entrer l'adresse_entreprise"></p>
            </div>
                <input type="submit" name="valider" value="valider" id="valider" /> <input type="reset" value="retour" id="retour"></p>
        </fieldset>
    </form>
    <?php echo '<script'; ?>
 src="../public/control.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
