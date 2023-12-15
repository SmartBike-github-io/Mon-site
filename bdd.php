<?php

try{
    
$bdd=new pdo("mysql:host=localhost;dbname=Smartbike", "root", "");

echo "OK";
} 
catch (Exception $e) 
 {
    echo "Probleme BDD";
 }
    



 
?>


