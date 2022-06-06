<?PHP





$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "pfa";

// Create connection
$conn = mysqli_connect($servername, $user, $pass, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `cite` ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      //echo "code: " . $row["C_code"]. " - Nom: " . $row["nom"]. " " .  "<br>";
      $code=$row["C_code"];
      echo "<option value=".$code." >"  . $row["nom"] .  "</option>";
    }
  } 









?>