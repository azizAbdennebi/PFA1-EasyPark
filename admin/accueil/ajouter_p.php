<?php 
   require "../config.php";

$sql = $conn -> prepare("INSERT INTO parking (adresse,c_code,prix_h) VALUES (?, ?, ?)");
$sql -> bind_param("sss", $adre, $code, $prix );
$adre= $_POST["adresse"];
$code= $_POST["ville"];
$prix= $_POST["prix"];

$sql -> execute();

        
header('Location:index1.php');

 ?>