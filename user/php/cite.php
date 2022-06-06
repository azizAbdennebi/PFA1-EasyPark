<?php



require_once("../bdcon.php");
/*
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "pfa";
*/


$sql = "SELECT * FROM `cite` ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      //echo "code: " . $row["C_code"]. " - Nom: " . $row["nom"]. " " .  "<br>";
      $code=$row["C_code"];
      echo "<option value='$code' >"  . $row["nom"] .  "</option>";
    }
  } 




mysqli_close($conn);




?>