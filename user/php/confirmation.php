<?php
session_start();
echo "test";

$emp=$_SESSION["emplacement"];
$d1=$_SESSION["date"][0];
$d2=$_SESSION["date"][1];
$c=$_SESSION["code_client"];
require_once("../bdcon.php");
//$i=0;


/*$sql = "INSERT INTO `client` (`code_client`, `nom`, `tel`, `username`, `mail`, `password`) VALUES (NULL, '$name', '$tel','$username', '$mail', '$password')";

if ($res=mysqli_query($conn, $sql)) {
  echo "$res New record created successfully";

*/

$num="NULL";

for ($i=0;$i<count($emp);$i++)
{
  $mat=$_POST["$emp[$i]mat"];
  $coul=$_POST["$emp[$i]col"];
  $puis=$_POST["$emp[$i]puis"];



$sql0="INSERT INTO `voiture` (`matricule`, `couleur`, `puissance`, `code_client`) VALUES ('$mat', '$coul', '$puis', '$c');";
  if ($res=mysqli_query($conn, $sql0)) {
    echo "$res New record created successfully voiture";
  
  }
  


    
$sql1 = "INSERT INTO `reservation` (`num_res`, `code_client`, `matricule`, `num_emp`, `date_arr`, `date_sortie`) VALUES ($num, '$c', '$mat', '$emp[$i]', '$d1', '$d2'); ";

if ($res1=mysqli_query($conn, $sql1)) {
  echo "$res1 New record created successfully reservation $num";



  if($num=="NULL")
  {
    $sql = "SELECT * FROM `reservation` where (code_client='$c' and matricule='$mat' and num_emp='$emp[$i]' and date_arr='$d1' and date_sortie='$d2') ";

    if ($result=mysqli_query($conn, $sql)) {
      echo " New record created successfully ";
    }

    echo "<br/>teeeseet";
    //$result = mysqli_query($conn, $sql);
    
    
    if (mysqli_num_rows($result)>0) {//niveau d erreeuur
      echo ("<br/>jaww jaw");
      echo mysqli_num_rows($result);
      
      while($row = mysqli_fetch_assoc($result)) {
        
            echo "jawk behy";
            $num=$row["num_res"];
  
            //$_SESSION["name"]=$row["nom"];
            $_SESSION["num_res"]=$num;
            echo $num;
            
            //header("Location: ../after/index.php");
            break;
  
        } 
        
  
  
        
  
        //echo "<option>"  . $row["nom"] .  "</option>";
      
    }
    }
    /*else {
        
      echo "error";
  
       // header("Location: ../register.php");
    }
  
  */
}
}
  
  echo $num;
  
    
   header("Location: ../after/reservations.php");
  
  
  //exit();


//}


//}
mysqli_close($conn);

?>