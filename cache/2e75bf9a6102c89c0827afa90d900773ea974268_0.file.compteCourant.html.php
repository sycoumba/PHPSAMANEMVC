<?php
/* Smarty version 3.1.30, created on 2020-08-11 02:06:23
  from "/opt/lampp/htdocs/samanemvc/src/view/compte/compteCourant.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f31e0ff244df8_73731831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e75bf9a6102c89c0827afa90d900773ea974268' => 
    array (
      0 => '/opt/lampp/htdocs/samanemvc/src/view/compte/compteCourant.html',
      1 => 1597102511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f31e0ff244df8_73731831 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h2> compte courant </h2>
    </header>
<form id="compte_courant" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
CompteCourant/add" method="POST">
        <fieldset id="compte_courant">
<div>
                <label>numero_Agence:</label>
                        <input type="text" name="numero_agence" id="numero_Agence" placeholder="Entrer le numero de l'agence"></p>
                </div>
                <div>
                <label> numero_compte:</label>
                        <input type="text" name="numero_compte" id="numero_compte" placeholder="Entrer le numero_compte"></p>
                </div>
                <div>
                <label>cle_rib:</label>
                        <input type="text" name="cle_rib" id="cle_rib" placeholder="Entrer la cle_rib"></p>
                </div>
                <div>
                <label>solde_compte:</label>
                        <input type="text" name="solde_compte" id="solde_compte" placeholder="Entrer le solde_compte"></p>
                </div>
                <div>
                <label> date_ouverture:</label>
                        <input type="date" name="date_ouverture" id="date_ouverture"></p>
                </div>
               
                <div>
                <label> agios:</label>
                        <input type="text" name="agios" id="agios" placeholder="Entrer l'agios"></p>
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
