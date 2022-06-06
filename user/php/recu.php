<?php
session_start();

if (!isset($_SESSION["code_client"])){
    header("Location: ../login.php");
    $_SESSION["error"]="veuillez vous connecter";
  }
  if (!isset($_SESSION["num_res"])){
    header("Location: ../after/reservation.php");
    $_SESSION["error"]="une erreur s est produite";
  }
    



require_once("../bdcon.php");
//$i=0;

$num=$_SESSION["num_res"];
$sql = "SELECT * FROM `reservation` where (num_res=$num ) ";

if ($result=mysqli_query($conn, $sql)) {
  //echo " New record created successfully ";
    
  if (mysqli_num_rows($result)>0) {//niveau d erreeuur
    //echo ("<br/>jaww jaw");
    //echo mysqli_num_rows($result);
    echo "<table class='#'>";
    while($row = mysqli_fetch_assoc($result)) {
      
          
          //$row["num_res"];
          
          //$_SESSION["name"]=$row["nom"];
          
          
          
          

      } 
      
  }






}
else{
    header("Location: ../after/reservation.php");
    $_SESSION["error"]="une erreur s est produite";
}



mysqli_close($conn);
?>