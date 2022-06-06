<?php
require "../bdcon.php";
if(isset($_GET['del']) && $_GET['del'] == 1 && isset($_GET['id'])){

	$query=mysqli_query($conn, "DELETE FROM `reservation` WHERE `num_res` = ".$_GET['id']."");
    if ($query) {
		echo "<script>alert('User Deleted Successfully');</script>";
		header("Location:../after/reservations.php");
		// echo "<script>window.location.href ='manage-incomingvehicle.php'</script>";
	}else{
		echo "<script>alert('Something Went Wrong. Please try again.');</script>";       
    }
}else {
    echo "erreur";
}






?>