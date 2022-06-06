<?php
 session_start();




$emp=array();

if (!isset($_SESSION["p_code"])){
    $_SESSION["error"]="parking invalide";
    header("Location: ../after/erreur.php");
}
else 
$p_code=$_SESSION["p_code"];
require_once("../bdcon.php");





// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  $_SESSION["error"]="erreur de connexion a la base";
    header("Location: ../after/erreur.php");
}

$sql = "SELECT * FROM `emplacement` where (p_code='$p_code' and etat='0') ";
$result = mysqli_query($conn, $sql);
$i=0;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      //echo "code: " . $row["C_code"]. " - Nom: " . $row["nom"]. " " .  "<br>";
      $code=$row["num_emp"];
      //echo $code;
      if (isset($_POST[$code]))
      {
        //echo $code;
        $emp[$i]=$code;
        echo $emp[$i];
        $i++;
        
      }
      /*
      $emp[$i]=$code;
      $i=$i+1;
      //echo "<h5><INPUT TYPE='checkbox' NAME='0' value='$code' >  "  . $code . "</h5>" ;
      echo "<div class='form-check form-check-inline'>
      <input class='form-check-input' type='checkbox'  value='$code'>
      <label class='form-check-label' > $code </label>
    </div>";
*/
    }
  } 
else {
  $_SESSION["error"]="parking invalide";
  header("Location: ../after/erreur.php");
}
if (count($emp)==0)
{
  $_SESSION["error"]="aucune place n'est selectionnée";
  header("Location: ../after/erreur.php");
}
else
{
$_SESSION["emplacement"]=$emp;

header("Location: ../after/index4.php");
}
mysqli_close($conn);




?>