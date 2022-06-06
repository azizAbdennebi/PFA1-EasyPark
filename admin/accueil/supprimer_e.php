<?php 
   require "../config.php";
if(isset($_GET['delete']) && $_GET['delete'] == 1 && isset($_GET['id'])){
	$query=mysqli_query($conn, "DELETE FROM emplacement WHERE num_emp = ".$_GET['id']."");
    if ($query) {
		echo "<script>alert('User Deleted Successfully');</script>";
		header("Location:modifier_p1.php");
		// echo "<script>window.location.href ='manage-incomingvehicle.php'</script>";
	}else{
		echo "<script>alert('Something Went Wrong. Please try again.');</script>";       
    }}
?>