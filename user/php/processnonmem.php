<?php
session_start();

$name=$_POST["name"];
$tel=$_POST["tel"];




require_once("../bdcon.php");

/*
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "pfa";
*/
// Create connection


$sql = "INSERT INTO `client` (`code_client`, `nom`, `tel`, `username`, `mail`, `password`) VALUES (NULL, '$name', '$tel','','','')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  
  
  $sql = "SELECT * FROM `client` where (tel='$tel') ";


  $result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
    
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      //echo "code: " . $row["C_code"]. " - Nom: " . $row["nom"]. " " .  "<br>";
      if ($row["password"]==$password){
          echo "jawk behy";
          

          $_SESSION["name"]=$row["nom"];
          $_SESSION["code_client"]=$row["code_client"];
          //$_SESSION["username"]=$username;
          mysqli_close($conn);
          header("Location: ../after/index.php");
          break;

      } 
      


      

      //echo "<option>"  . $row["nom"] .  "</option>";
    }
  }
  else {
      

    echo "<script>alert('une erreur c est produite')</script>";
      header("Location: ../index.html");
  }







  
  header("Location: ../after/index.php");


exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  $_SESSION["error"]="nom d utilisateur existe deja";
  header("Location: ../register.php");
}

mysqli_close($conn);




?>