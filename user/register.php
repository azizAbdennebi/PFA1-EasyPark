<?php 
session_start();
//define($_SESSION["error"]);
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
      <script language="JavaScript">
			function verif()
			{	if( document.f.name.value=="") {alert("Le champs Nom ne doit pas etre Vide!!!");return false;}
			    if( document.f.tel.value=="") {alert("Le champs tel ne doit pas etre Vide!!!");return false;}
					else
					   if(document.f.cin.value.length !=6){alert("le champs tel est INVALIDE!!!");return false;}
						else 
						  {
						    var i=0;
							while(i<6 && (document.f.tel.value.charAt(i)>='0'&& document.f.tel.value.charAt(i)<='9'))
							   i++;
							if(i<8)
							   {alert("le champs CIN est INVALIDE!!!");return false;}
						  }
                
                if( document.f.user.value=="") {alert("Le champs Nom d utilisateur ne doit pas etre Vide!!!");return false;}
                if( document.f.password.value=="") {alert("Le champs mot de passe ne doit pas etre Vide!!!");return false;}
					
			}  
		</script>
</head>
<!-- body -->

<body class="main-layout Contact_page">
  

    <div class="wrapper">
    <!-- end loader -->

     <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li class="active">
                        <a href="index.html">Home</a>
                    </li>
                    
                    <li>
                        <a href="#resip_section">Nos Villes</a>
                    </li>
                    <li>
                        <a href="login.php">se connecter</a>
                    </li>
                    <li>
                        <a href="register.php">creer un compte</a>
                    </li>
                </ul>

            </nav>
        </div>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="index.html"><img src="images/logo.jpg" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                
                                <li class="button_user"><a class="button active" href="index.html">Home</a><a  href="login.php">se connecter</a></li>
                                <li><img style="margin-right: 15px;" src="images/search_icon.png" alt="#"></li>
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="images/menu_icon.png" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- end header -->
    <!-- footer -->
    <fooetr>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                  <div class=" col-md-12">
                    <h2><strong class="white"> Creer un compte</strong></h2>
                  </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      
                        <form name="f" class="main_form" method="post" action="php/processreg.php" onsubmit="return verif()">
                            <div class="row">
                             
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Nom" type="text" name="name">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="tel" type="text" name="tel">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Email" type="email" name="mail">
                                </div>


                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="nom d utilisateur" type="text" name="user">
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="mot de passe" type="password" name="password">
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    
                                    <input class="send" type="submit" id="btn" value="Creer">
                                    <center>
                                    <h4>     
                                        <?php
                                        if (isset($_SESSION["error"])){
                                            echo ($_SESSION["error"]);
                                            unset($_SESSION["error"]);
                                        }
                                        ?>
                                    </h4>
                                    </center>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="img-box">
                            <figure><img src="images/img.jpg" alt="img" /></figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_logo">
                          <a href="index.html"><img src="images/logo.jpg" alt="logo" /></a>
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