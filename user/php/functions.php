<?php
require "../bdcon.php";

function adresse($nu)
{
    require "../bdcon.php";
    $sql="SELECT * From reservation where (num_res=$nu)  ";
    $list=mysqli_query($conn, $sql);
    if (mysqli_num_rows($list)==0)
        {
          echo "<script>alert('erreeuur')</script>";
        }
    else {
    while($row = mysqli_fetch_assoc($list))
    {
        $emp=$row["num_emp"];
        break;
    }
    //echo $emp;
    $sql1="SELECT parking.adresse as adr ,cite.nom as city From emplacement,parking,cite where (emplacement.num_emp='$emp' and  emplacement.p_code=parking.p_code and parking.c_code=cite.C_code) ";
    $lis=mysqli_query($conn, $sql1);

    //echo "test";
    $res="";
    
    
    while($row1 = mysqli_fetch_assoc($lis))
    {
        $ad=$row1["adr"];
        $cit=$row1["city"];
        $res="$ad, $cit";
        //echo $res;
        //$emp=$row["num_emp"];
        break;
    }
}
    return $res;
}


function dateDiff($d1, $d2){
    $date1=strtotime($d1);
    $date2=strtotime($d2);
    $diff = abs($date1 - $date2); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
    //$retour = array();
    //echo ($diff);
    //$tmp = $diff;
    /*
    $retour['second'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['second']) /60 );
    $retour['minute'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['minute'])/60 );
    $retour['hour'] = $tmp % 24;
    //echo $retour['hour'];
    $tmp = floor( ($tmp - $retour['hour'])  /24 );
    $retour['day'] = $tmp;
 
    return ($retour['hour']);*/

$temp=($diff/60)/60;
//echo $temp;
return $temp;

}

function prix($nu,$np,$d1,$d2)
{
   
    require "../bdcon.php";
    $sql="SELECT * From reservation where (num_res=$nu)  ";
    $list=mysqli_query($conn, $sql);
    if (mysqli_num_rows($list)==0)
        {
          echo "<script>alert('erreeuur')</script>";
          die("erreeeuuuur");
        }
    
    while($row = mysqli_fetch_assoc($list))
    {
        $emp=$row["num_emp"];
        break;
    }
    //echo $emp;
    $sql="SELECT parking.prix_h as prh From parking,emplacement where (emplacement.num_emp=$emp and parking.p_code=emplacement.p_code)  ";
    $list=mysqli_query($conn, $sql);
    if (mysqli_num_rows($list)==0)
        {
          echo "<script>alert('erreeuur')</script>";
          die("erreeeuuuur");
        }
        while($row = mysqli_fetch_assoc($list))
        {
            $prh=$row["prh"];
            break;
        }
        //echo dateDiff($d1, $d2)."<br/>";
        $res=((int)$np)*(float)$prh;//*dateDiff($d1, $d2);
        
        if (isset($_SESSION["username"])){
            $res=((float)$res*70)/100;
          }


        //echo $res;
    return $res;
}



?>