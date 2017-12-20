<?php
           
	$host = "localhost";
   	$username = "root";
        $parola = "";
        $conexiune = mysql_connect($host,$username,$parola);
        if(!$conexiune)
         echo "EROARE: Nu m-am putut conecta la baza de date";

     
   
        $selectBD = mysql_select_db('ftgi',$conexiune);
        if(!$selectBD)
         {
           die('Can\'t use Companie database:'.mysql_error());
         }
        //mysqli_close($conexiune);
     

?>