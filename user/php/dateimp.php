<?php
session_start();
echo $_POST["date1"];
echo $_POST["date2"];
$d1 =$_POST["date1"];
$d2=$_POST["date2"];
$d=array();
if ($d1>$d2 || $d1<date("Y-m-d"))
{
    $_SESSION["error"]="veuillez saisir une date valide";
    header("Location: ../after/index.php");
}
else
{
    $_SESSION["date"]=array($d1,$d2);
    header("Location: ../after/index1.php");

}


?>