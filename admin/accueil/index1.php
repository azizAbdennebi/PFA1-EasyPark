<?php
session_start();
require "../config.php";
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
                <a class="dropdown-item" href="deco.php">se déconnecter</a>
                
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

        

        $sql="SElECT * From parking p,cite c where p.c_code=c.c_code  ";
        $liste=mysqli_query($conn, $sql);
        ?>
         
        <table id="customers"  >
                <tr>
                    <th>P_code</th>
                    <th>adresse</th>
                    <th>Cité</th>
                    <th>prix_h</th>
                    <th>capacité</th>
                    
                </tr>
            <?php
           
            while($row = mysqli_fetch_assoc($liste))
            {

                      $sql2="SElECT count(*) n From emplacement  where p_code=".$row["p_code"]." ";
                      $liste2=mysqli_query($conn, $sql2);
                      $row2 = mysqli_fetch_assoc($liste2);
                     

             
            
            
            ?>

            <tr style="text-align: center;">
                
                    <td><?php echo $row["p_code"];?></td>
                    <td><?php echo $row["adresse"];?></td>
                    <td><?php echo $row["nom"];?></td>
                    <td><?php echo $row["prix_h"];?></td>
                    <td><?php echo $row2["n"];?></td>
                    <td>
             <a  class="aa" href="supprimer_p.php?id=<?php echo $row['p_code'];?>&delete=1" >Supprimer</a>
             
             <a type="button" class="aa" href="modifier_p1.php?p_modif=<?PHP echo $row['p_code'];?>">Modifier</a>
          </td>

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

<button style="margin-left: 30%" " type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"> ajouter parking</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ajouter Parking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="ajouter" action="ajouter_p.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">adresse Parking</label>
            <input required name="adresse" autocomplete="off" type="text" class="form-control" id="recipient-name">
          </div>
          <?php 
           ?>
          <label class="col-form-label" for="cars">selectionner une ville:</label>
          <select name="ville" class="form-control" id="cars" name="cars">
              <?php
          require("cite.php");
          ?>
               </select>
               
       
           <div class="form-group">
            <label for="message-text" class="col-form-label">prix de l'heure par dt:</label>
            <input required name="prix" autocomplete="off" class="form-control" type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" />

            
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="reset" onclick="myFunction()" type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
        <button form="ajouter" type="submit" class="btn btn-primary">ajouter</button>
      </div>
    </div>
  </div>
</div>


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
