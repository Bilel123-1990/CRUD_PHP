<?php

try {
    
$conn=new PDO("mysql:host=127.0.0.1;dbname=monbase","root","");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $exec) 
{
    echo "Echec de connexion" .$exec->getMessage();
    
}




?>