<?php

$emp=array();
$i=0;
if (!isset($_SESSION["date"])){
  header("Location: ../index.php");
  $_SESSION["error"]="une erreur s est produite veuiller reessayer";
}
else{
  $d1 =$_SESSION["date"][0];
  $d2=$_SESSION["date"][1];
}
$p_code=$_POST["p_code"];
if ($p_code==0){
    $_SESSION["error"]="parking invalide";
    header("Location: erreur.php");
}


require_once("../bdcon.php");
/*$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "pfa";
*/
// Create connection

$sql = "SELECT * FROM `emplacement` where (p_code='$p_code' and etat='0' and (num_emp not in(select num_emp from reservation where ('$d1'<=date_sortie and '$d2'>=date_arr)))) ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      //echo "code: " . $row["C_code"]. " - Nom: " . $row["nom"]. " " .  "<br>";
      $code=$row["num_emp"];
      $emp[$i]=$code;
      $i=$i+1;
      //echo "<h5><INPUT TYPE='checkbox' NAME='0' value='$code' >  "  . $code . "</h5>" ;
      echo "<div class='form-check form-check-inline'>
      <input class='form-check-input' type='checkbox'  name='$code' value='$code'>
      <label class='form-check-label' > $code </label>
    </div>";

    }
  } 
else {
    echo "non disponible";
}

$_SESSION["p_code"]=$p_code;



mysqli_close($conn);




?>