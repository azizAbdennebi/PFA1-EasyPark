<?php 
   require "../config.php";

$sql = $conn -> prepare("INSERT INTO client (nom,tel,username,mail,password) VALUES (?, ?, ?, ?, ?)");



$sql -> bind_param("sssss", $nom, $tel, $username, $mail, $password );
$nom= $_POST["nom"];
$tel= $_POST["tel"];
$username= $_POST["username"];
$mail= $_POST["mail"];
$password= $_POST["password"];

$sql -> execute();
        
header('Location:client.php');

 ?>