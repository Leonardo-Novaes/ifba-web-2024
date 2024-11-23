<?php 

    //Condicionais
      $Hora = date('H');

      if($Hora == 12){
        echo "BOM ALMOÇO!";
      }  
      
      else if ($Hora == 20){
         echo "BOA JANTA!";
      }
      
      else {
         echo "BOM RANGO!";
      }

?>