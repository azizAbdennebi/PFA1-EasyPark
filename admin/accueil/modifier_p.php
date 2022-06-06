<?php 
session_start();
   require "../config.php";

$sql = $conn->prepare("UPDATE parking SET adresse=?, c_code=?, prix_h=? WHERE p_code=?");

$sql -> bind_param("ssss", $adre, $code, $prix, $id_modiff );
$adre= $_POST["adresse"];
$code= $_POST["ville"];
$prix= $_POST["prix"];

$id_modiff= $_SESSION["p_mofiff"] ;
$sql -> execute();

        
header('Location:index1.php');

 ?>