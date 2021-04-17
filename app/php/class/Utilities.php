<?php

   class Utilities{

       public function FormatDate(){
           $date = date("Y-m-d");
           return $date;
       }

       public function FormatTime(){
           $time = date("H:i:s");
           return = $time;
       }

       public function FormatDateTime(){
           $datetime = FormatDate()." ".FormatTime();
           return $datetime;
       }
       	

   }

?>