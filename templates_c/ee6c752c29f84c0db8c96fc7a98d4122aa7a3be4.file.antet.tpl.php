<?php /* Smarty version Smarty-3.1.21, created on 2017-12-19 20:09:38
         compiled from ".\templates\antet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207815a395e5f415172-10429765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee6c752c29f84c0db8c96fc7a98d4122aa7a3be4' => 
    array (
      0 => '.\\templates\\antet.tpl',
      1 => 1513710558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207815a395e5f415172-10429765',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a395e5f42c876_15921700',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a395e5f42c876_15921700')) {function content_5a395e5f42c876_15921700($_smarty_tpl) {?>
<?php  $_config = new Smarty_Internal_Config('../FTGI/configs/configurareSite.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html>
<HTML lang="ro" dir="ltr">
<HEAD>
<META charset="utf-8">
<META name="viewport" content="width=device-width,initial-scale=1.0">
<META name="author" content="Suta Viorel-Florian">
<META name="description" content="Site de prezentare a unei firme generice">
<LINK rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<LINK rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<LINK rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Este vorba de contul meu de e-mail pe care l-am folosit ca si cheie in linia de dedesubt-->
<!--<SCRIPT src="https://use.fontawesome.com/6905abb056.js"></SCRIPT> -->
<LINK rel="stylesheet" href="../FTGI/pagini/css/stil.css">
<!--<STYLE>
	Mai pastrez acest tag, <STYLE> din motive de compatibilitate in jos pe viitor.
</STYLE> -->
</HEAD>
<TITLE><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "MostraDeLucru(FTGI)" : $tmp);?>
</TITLE>
<BODY>
<!-- Navbar  -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card-2" id="myNavbar">
    <a href="#acasa" class="w3-bar-item w3-button w3-wide">FTGI</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#despre" class="w3-bar-item w3-button"><i class="fa fa-info-circle"></i> Despre</a>
      
      <a href="#munca" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Produse</a>
      <a href="#magazin" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> Magazin</a>
      <a onclick="w3_suportTehnic()" class="w3-bar-item w3-button"><i class="fa fa-ticket"></i> Suport</a>
      <a class="w3-bar-item w3-button"><i class="fa fa-user" aria-hidden="true"></i> myFTGI</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Contact</a>
    </div>
      
    

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
<nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Inchide &times;</a>
  <a href="#despre" onclick="w3_close()" class="w3-bar-item w3-button">Despre</a>
  
  <a href="#munca" onclick="w3_close()" class="w3-bar-item w3-button">Produse</a>
  <a href="#magazin" onclick="w3_close()" class="w3-bar-item w3-button">Magazin</a>
  <a onclick="w3_close()" class="w3-bar-item w3-button">Suport</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">Contact</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="acasa">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Contactati-ma pentru detalii</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Contactati-ma pentru detalii</span><br>
    <span class="w3-large">Aveti nevoie de alte produse? Mai asteptati o zi.</span>
    <p><a href="#despre" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Descoperiti produsele viitoare</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header><?php }} ?>
