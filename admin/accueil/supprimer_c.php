<?php 
   require "../config.php";
if(isset($_GET['delete']) && $_GET['delete'] == 1 && isset($_GET['id'])){
	$query=mysqli_query($conn, "DELETE FROM client WHERE code_client = ".$_GET['id']."");
    if ($query) {
		echo "<script>alert('User Deleted Successfully');</script>";
		header("Location:client.php");
		// echo "<script>window.location.href ='manage-incomingvehicle.php'</script>";
	}else{
		echo "<script>alert('Something Went Wrong. Please try again.');</script>";       
    }}
?>