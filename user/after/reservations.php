<?php
session_start();

if (!isset($_SESSION["code_client"])){
  $_SESSION["error"]="veuillez vous connecter";
  header("Location: ../login.php");
  //$_SESSION["error"]="veuillez vous connecter";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Easy Park</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <link rel="stylesheet" href="liste.css">

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
  background-color: black;
  color: white;
}
</style>
      

      

</head>
<!-- body -->

<body class="main-layout blog_page">
    <!-- loader  -->
    

    <div class="wrapper">
    <!-- end loader -->

     
    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="reservations.php"><img src="images/logo.jpg" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                
                                <li class="button_user" ><?php echo "Welcome " . $_SESSION["name"] ;?></li>
                                <li class="button_user"> <a class="button" href="index.php">Reserver</a><a class="button active" href="../php/deco.php">se deconnecter</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
<div class="yellow_bg">
   <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Mes reservations</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>

<!-- tableau -->
<div class="blog">
  <div class="container">
    
    <div >
      
       <div >
        <div class="blog_box">
          
          
          


        
                <?php
        //require "../bdcon.php";
        require  "../php/functions1.php";
        $c=$_SESSION["code_client"];
        $sql="SELECT num_res,count(num_emp) as np,date_arr,date_sortie From `reservation` where (code_client=$c ) group by num_res  ";
        $liste=mysqli_query($conn, $sql);
        if (mysqli_num_rows($liste)==0)
        {
          echo "<center><h3>aucune reservation n'a ete faite</h3></center>";
          echo "<br/><center>";
          echo "<a  style='color:black;' href='index.php'><h3>Reserver maintenant</h3></a></center>";
          //echo "<button class='submit-btn'>reserver</button>";
        }
        else
        {
          echo "<table id='customers'>
          <tr>
              <th></th>
              <th>numero de reservation</th>
              <th>adresse</th>
              <th>nombre de places</th>
              <th>date d'arrivee</th>
              <th>date de sortie</th>
              <th>prix</th>
              
              
          </tr>";

          while($row = mysqli_fetch_assoc($liste))
          {
            $nu=$row["num_res"];
            $np=$row["np"];
            $d1=$row["date_arr"];
            $d2=$row["date_sortie"];
            $prix=prix($nu,$np,$d1,$d2);
            //prix($nu,$np,$d1,$d2);
            $adr=adresse($nu);
            $bouton="";
            if ($d1>date("Y-m-d"))
            {
              //echo date("Y-m-d");
              $bouton="<a href='../php/annul_reserv.php?id=$nu&del=1' >annuler </br>la reservation</a>";
            }

            echo "<tr style='text-align: center;'>
            <td>$bouton</td>
            <td>$nu</td>
            <td>$adr</td>
            <td>$np </td>
            <td>$d1 </td>
            <td>$d2 </td>
            <td>$prix dt </td>
            


            </tr>
            ";




          }


        }



        ?>


        </table>

<br><br>
          <div id="booking" class="section">

</div>







          <script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>


</div>
        
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- end blog -->


    <!-- footer -->
    <fooetr>
        <div class="footer">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_logo">
                          <a href="reservations.php"><img src="images/logo.jpg" alt="logo" /></a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            
        </div>
    </fooetr>
    <!-- end footer -->

    </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
     <script src="js/jquery-3.0.0.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

</body>

</html>