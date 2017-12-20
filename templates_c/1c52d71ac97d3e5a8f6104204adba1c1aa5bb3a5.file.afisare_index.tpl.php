<?php /* Smarty version Smarty-3.1.21, created on 2017-12-18 16:49:34
         compiled from ".\templates\afisare_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1990459e1cd98ca7b28-98826749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c52d71ac97d3e5a8f6104204adba1c1aa5bb3a5' => 
    array (
      0 => '.\\templates\\afisare_index.tpl',
      1 => 1513612173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1990459e1cd98ca7b28-98826749',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59e1cd98d095a8_11850113',
  'variables' => 
  array (
    'contact' => 0,
    'adresa' => 0,
    'nrTelefon' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e1cd98d095a8_11850113')) {function content_59e1cd98d095a8_11850113($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('../FTGI/configs/configurareSite.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars('titSectiuni', 'local'); ?>
<?php  $_config = new Smarty_Internal_Config('../FTGI/configs/configurareSite.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars('titSubSectiuni', 'local'); ?>
<div class="w3-container" style="padding:128px 16px" id="despre">
  <h3 class="w3-center"><?php echo $_smarty_tpl->getConfigVariable('titluSectiune1');?>
</h3>
  <p class="w3-center w3-large"><?php echo $_smarty_tpl->getConfigVariable('titluSubSectiune10');?>
</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large"><?php echo $_smarty_tpl->getConfigVariable('titluSubSectiune11');?>
</p></a>
      <p>Salut. Ma numesc Suta Viorel-Florian si sunt web-designer-ul acestui website.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><?php echo $_smarty_tpl->getConfigVariable('titluSubSectiune12');?>
</p>
      <p>Oltenia este o regiune geografica din sud-vestul României. Este o zona destul de bogata de istorie si evenimente istorice.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><?php echo $_smarty_tpl->getConfigVariable('titluSubSectiune13');?>
</p>
      <p>Magazin de comert electronic cu privire la componentele software de la viitoarele produse.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><?php echo $_smarty_tpl->getConfigVariable('titluSubSectiune14');?>
</p>
      <p>Asigur suport prin metodele e-mail, on-line si videoconferinta. Aceste metode sunt demonstrative si nu constituie vreun angajament din partea cuiva.</p>
    </div>
  </div>
</div>

<!-- Sectiune Reclama -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Reclama</h3>
      <p>Sursa de venituri pentru site-ul meu.</p>
      <p><a href="#munca" class="w3-button w3-black"><i class="fa fa-th"> </i> Vizualizati-mi alte lucrari</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="../FTGI/imagini/pikachu.jpg" alt="Pokemon" width="700" height="394">
    </div>
  </div>
</div>

<!-- Sectiunea Echipa -->
<div class="w3-container" style="padding:128px 16px" id="echipa">
  <h3 class="w3-center">Echipa</h3>
  <p class="w3-center w3-large">Cel care se ocupa de acest website</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card-2">
      	<!--<img src="'$caleImagine'pikachu.jpg" alt="Florian" style="width:100%">-->
        
        
        <div class="w3-container">
          <h3>Suta Viorel-Florian</h3>
          <p class="w3-opacity">Web-Designer</p>
          <p>Acesta sunt eu, cel care a scris acest website din dorinta de a crea un site web comercial cat mai apropiat de cerintele lumii moderne.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Sectiunea Reclama - statistici -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xlarge">14</span>
    <br>sezoane vazute din Pokemon 
  </div>
  <div class="w3-quarter">
    <span class="w3-xlarge">25</span>
    <br>ceaiuri de lãmâie bãute
  </div>
  <div class="w3-quarter">
    <span class="w3-xlarge">1</span>
    <br>client fericit(eu)
  </div>
  <div class="w3-quarter">
    <span class="w3-xlarge">25</span>
    <br>linii de cod scrise pe sfert de ora(glumesc)
  </div>
</div>


<!-- Sectiunea Munca -->
<div class="w3-container" style="padding:128px 16px" id="munca">
  <h3 class="w3-center"><?php echo $_smarty_tpl->getConfigVariable('titluSectiune2');?>
</h3>
  <p class="w3-center w3-large"><?php echo $_smarty_tpl->getConfigVariable('titluSubSectiune20');?>
</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="../FTGI/imagini/devilMayCr.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Devil May Cry">
    </div>
    <div class="w3-col l3 m6">
      <img src="../FTGI/imagini/DevilMayCr2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Devil May Cry">
    </div>
    <div class="w3-col l3 m6">
      <img src="../FTGI/imagini/devilMayCr.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Devil May Cry">
    </div>
    <div class="w3-col l3 m6">
      <img src="../FTGI/imagini/devilMayCr2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Devil May Cry">
    </div>
  </div>

 </div>

<!-- -->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Inchide fereastra modala">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Sectiunea de aptitudini -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Design-ul website-ului</h3>
      <p>In dreapta sunt tehnologiile si uneltele pe care le exemplific in aceasta mostra de lucru.</p>
      <p>Am defalcat procesul de Web Design in 2 etape: HTML5 si celelalte tehnologii.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>HTML5</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:74%">74%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design(PHP+CSS3)</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:88%">88%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Smarty 3</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>

<!-- Sectiunea Magazin -->
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="magazin">
  <h3>Preturi</h3>
  <p class="w3-large">Alegeti un plan tarifar:</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-large w3-padding-32">Plan tarifar Standard</li>
        <li class="w3-padding-16"><b>10GB</b> HDD</li>
        <li class="w3-padding-16"><b>10</b> Email-uri</li>
        <li class="w3-padding-16"><b>10</b> Domenii</li>
        <li class="w3-padding-16"><b>Suport tehnic</b> personalizat</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">RON 75</h2>
          <span class="w3-opacity">pe luna</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Inregistrare</button>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-large w3-padding-48">Plan tarifar Professional</li>
        <li class="w3-padding-16"><b>25GB</b> HDD</li>
        <li class="w3-padding-16"><b>25</b> Email-uri</li>
        <li class="w3-padding-16"><b>25</b> Domenii</li>
        <li class="w3-padding-16"><b>Suport tehnic</b> personalizat</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">RON 85</h2>
          <span class="w3-opacity">pe luna</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Inregistrare</button>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-large w3-padding-32">Plan tarifar Premium</li>
        <li class="w3-padding-16"><b>50GB</b> HDD</li>
        <li class="w3-padding-16"><b>50</b> Email-uri</li>
        <li class="w3-padding-16"><b>50</b> Domenii</li>
        <li class="w3-padding-16"><b>Suport tehnic</b> personalizat</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">RON 95</h2>
          <span class="w3-opacity">pe luna</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Inregistrare</button>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Sectiune Contact -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Hai sa intram in legatura. Trimiteti-mi un mesaj:</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> 
        <?php  $_smarty_tpl->tpl_vars['adresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adresa']->key => $_smarty_tpl->tpl_vars['adresa']->value) {
$_smarty_tpl->tpl_vars['adresa']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['adresa']->value['oras'];?>
,<?php echo $_smarty_tpl->tpl_vars['adresa']->value['strada'];?>
,<?php echo $_smarty_tpl->tpl_vars['adresa']->value['numar'];?>

            <?php }
if (!$_smarty_tpl->tpl_vars['adresa']->_loop) {
?>
              <p class="w3-large">Nu exista informatii de contact la aceasta data.</p>   
        <?php } ?>
      </p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Telefon: +4-0
      <?php  $_smarty_tpl->tpl_vars['nrTelefon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nrTelefon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nrTelefon']->key => $_smarty_tpl->tpl_vars['nrTelefon']->value) {
$_smarty_tpl->tpl_vars['nrTelefon']->_loop = true;
?>
       <?php echo $_smarty_tpl->tpl_vars['nrTelefon']->value['nrTelefon'];?>

      <?php }
if (!$_smarty_tpl->tpl_vars['nrTelefon']->_loop) {
?>
        <p class="w3-large">Nu s-a gasit niciun numar de telefon aici.</p>
      <?php } ?>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: adresa_mea@mail.com</p>
      <br>
      <form action="../pagini/contact/formularEmail.php" target="_blank">
        <p><input class="w3-input w3-border" type="text" placeholder="Nume" required name="Nume"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Subiect" required name="Subiect"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Mesaj" required name="Mesaj"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> Trimiteti-mi un mesaj
          </button>
        </p>
      </form>
    </div>
    <div class="w3-half">
      <!-- Aici trebuie sa adaug codul Google Maps JavaScript -->
      <div id="googleMap" class="w3-greyscale-max" style="width:100%;height:510px;"></div>
    </div>
  </div>
</div>

<?php }} ?>
