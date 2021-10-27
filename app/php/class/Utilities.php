<?php

   class Utilities{

       public function Format_Date(){
           $date = date("Y-m-d");
           return $date;
       }

       public function Format_Time(){
           $time = date("H:i:s");
           return = $time;
       }

       public function Format_Date_Time(){
           $datetime = FormatDate()." ".FormatTime();
           return $datetime;
       }

       public function Code_Create(){
           return "";
       }
       	

   }

?>