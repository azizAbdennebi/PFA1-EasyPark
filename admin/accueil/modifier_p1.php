<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
<?php
require "../config.php";
session_start();



 

if (isset($_GET['p_modif']))
{
  
  $_SESSION["p_mofiff"]=$_GET['p_modif'];
  



}

  if(isset($_POST['submit'])){
$replaced1 = str_replace(' ', '', $_SESSION["p_mofiff"]);
$sql2="INSERT INTO `emplacement` (`num_emp`, `p_code`, `etat`) VALUES (NULL, '$replaced1', '0')";
$liste2 = mysqli_query($conn, $sql2);


if ($liste2) {
   
    header("Location:modifier_p1.php");
    // echo "<script>window.location.href ='manage-incomingvehicle.php'</script>";
  }else{
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";       
    }


}

 if(isset($_POST['submitt'])){

  $sql3 = $conn->prepare("UPDATE emplacement SET etat=? WHERE num_emp=?");
  $sql3 -> bind_param("ss", $etat, $emp );
  $etat= $_POST["etat"];
  $emp= $_POST["emp"];
  $sql3 -> execute();
   header("Location:modifier_p1.php");
  
  
  
  }












$replaced = str_replace(' ', '', $_SESSION["p_mofiff"]);

$sql="SELECT `adresse`,`c_code`,`prix_h` FROM parking WHERE p_code=$replaced";
$liste = mysqli_query($conn, $sql);
$sql1="SELECT * FROM `emplacement` WHERE p_code=$replaced";
$liste1 = mysqli_query($conn, $sql1);

while($roww = mysqli_fetch_assoc($liste )){
 ?>

 <style>

.bb{
  position:absolute;
  top:0px;
   right:200px;
}



  #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  
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
  background-color: red;
  color: white;
}

.aaa{
    text-align: left;
    width: 50%

  
}   
input[type=text] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  
  background-color: red ;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=button] {
  
  background-color: red ;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}




div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20
}
</style>

   <div class="aaa">
       <form id="ajouter" action="modifier_p.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">adresse Parking</label>
            <input style=" width: auto;" required name="adresse" autocomplete="off" type="text" class="form-control" id="recipient-name" value="<?php echo $roww['adresse']; ?>">
          </div>
          
          <label class="col-form-label" for="cars">selectionner une ville:</label>
          <select style="width: 30%;
 
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;" name="ville" class="form-control" id="cars" name="cars">
              <?php
          require("cite.php");
          ?>
               </select>
               
       
           <div class="form-group">
            <label for="message-text" class="col-form-label">prix de l'heure par dt:</label>
            <input required value="<?php echo $roww['prix_h']; ?>" name="prix" autocomplete="off" class="form-control" type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" />

            
          </div>
          
          <div>
              <input value="modifier" type="submit">
              <input type="button" onclick="location.href='index1.php';" value="annuler" />


          </div>
        </form>

   </div>

   <div class="bb">
     <table id="customers"  >
                <tr>
                    <th>num_emp</th>
                    <th>p_code</th>
                    <th>etat</th>
                    
                    
                </tr>
            <?php
           
            while($row1 = mysqli_fetch_assoc($liste1))
            {
             
            
            
            ?>

            <tr style="text-align: center;">
                
                    <td><?php echo $row1["num_emp"];?></td>
                    <td><?php echo $row1["p_code"];?></td>
                    <td><?php echo $row1["etat"];?></td>
                    
                    <td>
             <a  class="aa" href="supprimer_e.php?id=<?php echo $row1['num_emp'];?>&delete=1" >Supprimer</a>
             
             
          </td>

                </tr>
            <?PHP
            
          }
                
            ?>
        </table>

   
     

  
      

<?PHP

}
 ?>
<div >
    <form  action='' method='POST'>
     <input style=" background-color: red; margin-top: 20px;margin-left: 25%  "  value="ajouter Emp"   type='submit' name='submit' />
    </form>
<br>
    <form method="POST" action="">
      <fieldset>
        <legend style="color: red">modifier l'état d'un emplacement</legend>
        <div style="position:relative;left:35px">
          <label style="font-size:20px" for="">num_emp:</label><input style="padding:3px" name="emp" type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" >
        <select name="etat"  style="padding:3px">
          <option value="0">0</option>
          <option value="1">1</option>
        </select>
        <input name='submitt'   style="padding: 3px" type="submit" value="modifier" >
        </div>
        
      </fieldset>
    </form>




  

</div>







  </div>

  



















<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>








      