{*Fisier Smarty pentru antetul tuturor paginilor acestui site*}
{config_load file='../FTGI/configs/configurareSite.conf'}
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
<LINK rel="stylesheet" href="../FTGI/pagini/css/stil.css">
</HEAD>
<TITLE>{$title|default:"MostraDeLucru(FTGI)"}</TITLE>
<BODY>
<!-- Navbar  -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card-2" id="myNavbar">
    <a href="#acasa" class="w3-bar-item w3-button w3-wide">FTGI</a>
     <div class="w3-right w3-hide-small">
      <a href="#despre" class="w3-bar-item w3-button"><i class="fa fa-info-circle"></i> Despre</a>
      {*<a class="w3-bar-item w3-button"><i class="fa fa-user"></i> Servicii</a>*}
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
  {*<a onclick="w3_close()" class="w3-bar-item w3-button">Servicii</a>*}
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
</header>