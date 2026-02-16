<?php
 
 $name="Ali";

 


 function greeting($name){
    echo "hello Mr. ".$name."! how are you \n";
 }

 

 function greetCostumMessage($message, $name){
    echo $message."!".$name;
 }



 //function calls 
 greeting($name);
 greetCostumMessage("Good morning", "Kasim \n");



 