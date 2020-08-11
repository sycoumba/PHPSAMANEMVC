<?php
/* Smarty version 3.1.30, created on 2020-08-10 23:51:44
  from "/opt/lampp/htdocs/samanemvc/src/view/client/clientNonSalarie.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f31c170d80d69_28832312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '655fa2a1edd90709671b0e82535153c893f5c627' => 
    array (
      0 => '/opt/lampp/htdocs/samanemvc/src/view/client/clientNonSalarie.html',
      1 => 1597089884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f31c170d80d69_28832312 (Smarty_Internal_Template $_smarty_tpl) {
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
    <form id="client_non_salarie" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientNonSalarie/add" method="POST">
        <fieldset id="non_salarie">
            <legend>INFORMATIONS DU CLIENT NON SALARIE</legend> 
            <div>
            <label> nom:</label>
                    <input type="Texte" name="nom" id="nom" placeholder="Entrer le nom">
            </div>
            <div>
            <label> prenom:</label>
                    <input type="Texte" name="prenom" id="prenom" placeholder="Entrer le prenom">
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
            <label> activite :</label>
                    <input type="text" name=" activite" id=" activite" placeholder="Entrer  l' activite"></p>
            </div>
            <div>
            <label>numero_CNI:</label>
                    <input type="Texte" name="numero_CNI" id="cni" placeholder="Entrer le 
                    cni"></p>
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
