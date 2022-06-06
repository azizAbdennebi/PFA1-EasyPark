<?php
session_start();

$username= $_POST["user"];
$password= $_POST["password"];



$name=$_POST["name"];
$tel=$_POST["tel"];
$mail=$_POST["mail"];







$username = stripcslashes($username);
$password = stripcslashes($password);



require_once("../bdcon.php");

/*
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "pfa";
*/
// Create connection
$sql0 = "SELECT * FROM `client` where (username='$username') ";
$res=mysqli_query($conn, $sql0);

if (mysqli_num_rows($res) == 0) {
$sql = "INSERT INTO `client` (`code_client`, `nom`, `tel`, `username`, `mail`, `password`) VALUES (NULL, '$name', '$tel','$username', '$mail', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  
  
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
          $_SESSION["username"]=$username;
          mysqli_close($conn);
          header("Location: ../after/reservations.php");
          break;

      } 
      


      

      //echo "<option>"  . $row["nom"] .  "</option>";
    }
  }
  else {
      


      header("Location: ../register.php");
  }







  
  header("Location: ../after/index.php");


exit();}
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  $_SESSION["error"]="nom d utilisateur existe deja";
  header("Location: ../register.php");
}

mysqli_close($conn);




?>