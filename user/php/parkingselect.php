





<?php


$c_code=$_POST["cite"];

require_once("../bdcon.php");
/*
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "pfa";
*/

$sql = "SELECT * FROM `parking` where (c_code='$c_code') ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      //echo "code: " . $row["C_code"]. " - Nom: " . $row["nom"]. " " .  "<br>";
      $code=$row["p_code"];
      echo "<option value='$code' >"  . $row["adresse"] .  " ( ".$row["prix_h"]." DT/H)</option>";
    }
  } 




mysqli_close($conn);




?>