<?php 
session_start();
   require "../config.php";

$sql = $conn->prepare("UPDATE client SET nom=?, tel=?, username=?, mail=?, password=? WHERE code_client=?");

$sql -> bind_param("ssssss", $nom, $tel, $username, $mail, $password, $id_modiff );
$nom= $_POST["nom"];
$tel= $_POST["tel"];
$username= $_POST["username"];
$mail= $_POST["mail"];
$password= $_POST["password"];
$id_modiff= $_SESSION["c_mofiff"] ;
$sql -> execute();

        
header('Location:client.php');

 ?>