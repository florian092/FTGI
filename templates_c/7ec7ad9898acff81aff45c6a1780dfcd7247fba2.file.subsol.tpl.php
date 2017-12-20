<?php /* Smarty version Smarty-3.1.21, created on 2017-12-19 19:45:51
         compiled from ".\templates\subsol.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296835a395e5f808cf3-91952678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ec7ad9898acff81aff45c6a1780dfcd7247fba2' => 
    array (
      0 => '.\\templates\\subsol.tpl',
      1 => 1513613330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296835a395e5f808cf3-91952678',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a395e5f8186f0_34150016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a395e5f8186f0_34150016')) {function content_5a395e5f8186f0_34150016($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\smarty-3.1.21\\libs\\plugins\\modifier.date_format.php';
?>


<SCRIPT type="text/javascript">

var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}


function w3_close() {
    mySidebar.style.display = "none";
}


function w3_suportTehnic() {
    alert("Functia nu este implementata inca");
}
</SCRIPT>
<footer class="w3-center w3-black w3-padding-64">
  <a href="#acasa" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Duceti-va SUS</a>
  <div class="w3-large w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>
<a href="../pagini/feedbackFormular.html" title="Send feedback" class="w3-hover-text-green">Feedback la acest site</a> | <a href="https://www.ftgi.com/servicii/servicii.php" title="Our services" class="w3-hover-text-green">Servicii</a> | 
<a href="../pagini/disclaimer.html" title="Disclaimer" target="_blank" class="w3-hover-text-green">Disclaimer</a></p><BR>
Copyright &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 Suta Viorel-Florian. All rights reserved.
</footer>
</BODY>
</HTML>

<?php }} ?>
