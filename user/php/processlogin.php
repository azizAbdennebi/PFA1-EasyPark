<?php

session_start();


$username= $_POST["user"];
$password= $_POST["password"];











//$username = stripcslashes($username);
//$password = stripcslashes($password);

require_once("../bdcon.php");

/*
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "pfa";
*/

$sql = "SELECT * FROM `client` where (username='$username') ";


$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
    
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      //echo "code: " . $row["C_code"]. " - Nom: " . $row["nom"]. " " .  "<br>";
      if ($row["password"]==$password){
          echo "jawk behy";
          

          $_SESSION["name"]=$row["nom"];
          $_SESSION["code_client"]=$row["code_client"];
          $_SESSION["username"]=$row["username"];
          if (isset($_SESSION["error"])){
            unset($_SESSION["error"]);
        }
        header("Location: ../after/reservations.php");


      } 
      else{
        $_SESSION["error"]="mot de passe incorrect";
        header("Location: ../login.php");
      }
      


      

      //echo "<option>"  . $row["nom"] .  "</option>";
    }
  }
  else {
      
      $msg="Utilisateur introuvable veuillez réessayer";
      $_SESSION["error"]=$msg;
      header("Location: ../login.php");


      

  }




mysqli_close($conn);




?>

