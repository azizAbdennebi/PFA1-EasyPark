<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>easy park</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">easy Park</div>
      <div class="list-group list-group-flush">
        <a href="index1.php" class="list-group-item list-group-item-action bg-light">Parking</a>
        <a href="client.php" class="list-group-item list-group-item-action bg-light">Client</a>

        <a href="reservation.php" class="list-group-item list-group-item-action bg-light">Réservation</a>
      
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                profile
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 3px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 7px;
  padding-bottom: 7px;
  text-align: center;
  background-color: #007bff;
  color: white;
}
</style>
      <div class="container-fluid">
        

         <?php

        require "../config.php";

        $sql="SElECT * From reservation";
        $liste=mysqli_query($conn, $sql);
        ?>
         
        <table id="customers"  >
                <tr>
                    <th>num_res</th>
                    <th>code_client</th>
                    <th>matricule</th>
                    <th>num_emp</th>
                    <th>date d'arrivée</th>
                    <th>date de sortie</th>
                    
                </tr>
            <?php
           
            while($row = mysqli_fetch_assoc($liste))
            {

                  
            ?>

            <tr style="text-align: center;">
                
                    <td><?php echo $row["num_res"];?></td>
                    <td><?php echo $row["code_client"];?></td>
                    <td><?php echo $row["matricule"];?></td>
                    <td><?php echo $row["num_emp"];?></td>
                    <td><?php echo $row["date_arr"];?></td>
                    <td><?php echo $row["date_sortie"];?></td>
           

                </tr>
            <?PHP
            
          }
                
            ?>
        </table>

        <!--////////////////////////////////////////////////////////////////////////// -->


      

        <style>
          .aa:link {
  color: red;
  background-color: transparent;
  text-decoration: none;
      }
.aa:visited {
  color:red;
  background-color: transparent;
  text-decoration: none;
    }
.aa:hover {
  color: black;
  background-color: transparent;
  text-decoration:none;
}
.aa:active {
  color: red;
  background-color: transparent;
  text-decoration: none;
}</style>





<script>
function myFunction() {
  document.getElementById("ajouter").reset();
}
</script>
     
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
