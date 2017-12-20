<?php
     require_once('configs\configurareSite.lib.php');
     require_once('configs\sursa.lib.php');
     
     $smarty = new Smarty();
     
     $sql = "SELECT strada,numar,oras,nrTelefon FROM contact WHERE numar=67";
     $rezultat = mysql_query($sql);
     while($rand = mysql_fetch_assoc($rezultat))
       {
          $contact[] = $rand;
       }
      
     $smarty->assign("contact",$contact);
     $smarty->display('index.tpl');


?>