<?php
require "config.php";




session_start();
$username= $_POST["username"];
$password= $_POST["pass"];




$sql="SELECT * FROM `admin` where (user='$username')";
$liste=mysqli_query($conn, $sql);

if (mysqli_num_rows($liste) > 0) {
	while($row = mysqli_fetch_assoc($liste)) {
	   if ($row["password"]==$password){
	   	echo "jawek behi";
	   	$_SESSION["user"]=$row["user"];
        $_SESSION["p_code"]=$row["p_code"];
        if (isset($_SESSION["error"])){
            unset($_SESSION["error"]);
        }
        header("Location: ../admin/accueil/index1.php");

    }

else{
	$_SESSION["error"]="mot de passe incorrect";
    header("Location:index.php");
}

}

}

else{
  $msg="Utilisateur introuvable veuillez réessayer";
  $_SESSION["error"]=$msg;
header("Location:index.php");
}





