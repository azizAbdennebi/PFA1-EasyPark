<?php 
   require "../config.php";
if(isset($_GET['delete']) && $_GET['delete'] == 1 && isset($_GET['id'])){
	$query=mysqli_query($conn, "DELETE FROM parking WHERE p_code = ".$_GET['id']."");
    if ($query) {
		echo "<script>alert('User Deleted Successfully');</script>";
		header("Location:index1.php");
		// echo "<script>window.location.href ='manage-incomingvehicle.php'</script>";
	}else{
		echo("Error description: " . $query -> error);       
    }}
?>