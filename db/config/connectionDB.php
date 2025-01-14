<?php
function connect(){
    try{
        $connection = new PDO ("mysql:host=localhost;dbname=devzone","Poly","asdfghjkl");
return $connection;

    }catch(PDOException $error){
        echo $error-> getMessage();

    }
}



?>