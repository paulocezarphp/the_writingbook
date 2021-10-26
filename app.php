<?php

   @$operation = $_POST['operation'];

   if($operation != null){

      include("config.php");
      
   }

   if($operation == "createuser" && $operation != null){

   }elseif($operation == "deleteuser" && $operation != null){

   }elseif($operation == "editeuser" && $operation != null){

   }elseif($operation == "validelogin" && $operation != null){

   }elseif($operation == "quitlogin" && $operation != null){

   }elseif($operation == "createproject" && $operation != null){

   }elseif($operation == "deleteproject" && $operation != null){

   }elseif($operation == "editeproject" && $operation != null){

   }elseif($operation == "createbook" && $operation != null){

   }elseif($operation == "deletebook" && $operation != null){

   }elseif($operation == "editebook" && $operation != null){

   }elseif($operation == "createchapter" && $operation != null){

   }elseif($operation == "deletechapter" && $operation != null){

   }elseif($operation == "editechapter" && $operation != null){

   }elseif($operation == "exportproject" && $operation != null){

   }elseif($operation == "exportbook" && $operation != null){

   }elseif($operation == "exportchapter" && $operation != null){

   }else{
       header('location: ./');
   }

   
?>