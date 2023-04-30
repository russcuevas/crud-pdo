<?php 
    $dbname="mysql:host=localhost;dbname=crud";
    $dbuser="root";
    $dbpass="";

    $conn = new PDO($dbname, $dbuser, $dbpass);
    // try{
    //     $conn = new PDO($dbname, $dbuser, $dbpass);
    //     echo "Connected Successfully";
    // }catch (PDOException $e){
    //     echo "Connection Failed". $e->getMesssage();
    // }

?>