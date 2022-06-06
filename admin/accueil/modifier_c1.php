      
<?php
session_start();
$_SESSION["c_mofiff"]=$_GET['c_modif'];

require "../config.php";


$replaced = str_replace(' ', '', $_GET['c_modif']);
$sql="SELECT `nom`,`tel`,`mail`,`username`,`password` FROM client WHERE code_client=$replaced";
$liste = mysqli_query($conn, $sql);


while($roww = mysqli_fetch_assoc($liste )){
 ?>

 <style>

.aaa{
    text-align: center;

  vertical-align: middle;
}   
input[type=text],[type=email], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 50%;
  background-color: red ;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=button] {
  width: 50%;
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
       <form id="ajouter" action="modifier_c.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">nom client</label>
            <input required name="nom" autocomplete="off" type="text" class="form-control" id="recipient-name" value="<?php echo $roww['nom']; ?>" type="text">
          
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">numero telephone </label>

            <input required value="<?php echo $roww['tel']; ?>" name="tel" autocomplete="off" class="form-control" type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" />

            
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">email</label>
            <input required name="mail" autocomplete="off" type="email" class="form-control" id="recipient-name" value="<?php echo $roww['mail']; ?>">
          </div>
          
          
               
       
           
          <div class="form-group">
            <label for="message-text" class="col-form-label">username</label>
            <input required value="<?php echo $roww['username']; ?>" name="username" autocomplete="off" class="form-control" type="text" >
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">password</label>
            <input required value="<?php echo $roww['password']; ?>" name="password" autocomplete="off" class="form-control" type="text" >
          </div>


          <div>
              <input value="modifier" type="submit">
              <input type="button" onclick="location.href='client.php';" value="annuler" />


          </div>
        </form>

   </div>
      



<?PHP

}
 ?>












      