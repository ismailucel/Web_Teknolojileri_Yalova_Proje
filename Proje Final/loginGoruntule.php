<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">


    <!-- Ikon Kutuphanesi -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="./css/style.css">
	
    <title>
        <?php 

            include("kullanicilar.php");

                if (($_POST["email"] == $user) and ($_POST["password"] == $pass)){
                    $_SESSION["login"] = "true";
                    $_SESSION["user"] = $user;
                    $_SESSION["pass"] = $pass;
                    $_SESSION["name"]=$name;

                    echo("Hoşgeldiniz!");

                }

                else{
                   echo "Tekrar Deneyiniz!";                       
                }

        ?>      

    </title>

</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">

        <div class="container">

            <a class="navbar-brand" href="#"><i class="fas fa-city"></i>Yalova</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.html"> Anasayfa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="hakkında.html"><i class="fas fa-male"></i>Hakkında</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="ozgecmis.html"><i class="fas fa-book-reader"></i>Özgeçmiş</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="sehrim.html"><i class="fas fa-building"></i>Şehrim</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="ilgi.html"><i class="fas fa-futbol"></i>İlgi Alanlarım</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-university"></i>
                            Mirasımız
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="yürüyen.html">Yürüyen Köşk</a></li>
                            <li><a class="dropdown-item" href="futbol.html">Futbol Takımımız</a></li>
                        </ul>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="login.html">Giriş Yap<i class="fas fa-sign-in-alt"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.html"><i class="fas fa-id-card"></i>İletişim</a>
                    </li>



                </ul>

            </div>

        </div>

    </nav>

    <br><br>
    
		
	<div class="container mt-5 w-50 text-center p-5">
	
			<?php 

				include("kullanicilar.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass)){
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
                   $_SESSION["name"]=$name;
			
			       echo("$pass, <br> <br> Hoşgeldiniz!");                  
                   header("Refresh: 2; url=index.html");
                   
				}
			
				else{
			        echo "Kullancı Adı veya Şifre Yanlış.<br> <br>";
			        echo "TEKRAR DENEYİNİZ";
			        header("Refresh: 2; url=login.html");
			    }
			
			?>
			
    </div>
    
   <!-- Footer -->
    <footer class="bg-dark text-center text-white">
    
        <div class="container p-4">
    
            <section class="mb-4">
    
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/ismail.ucel168/"
                    role="button"><i class="fab fa-facebook-f"></i></a>
    
    
                <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/ucel_ismail" role="button"><i
                        class="fab fa-twitter"></i></a>
    
    
                <a class="btn btn-outline-light btn-floating m-1" href="mailto:ismailucel@gmail.com" role="button"><i
                        class="fab fa-google"></i></a>
    
    
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/ismailucel/"
                    role="button"><i class="fab fa-instagram"></i></a>
    
    
                <a class="btn btn-outline-light btn-floating m-1"
                    href="https://www.linkedin.com/in/ismail-%C3%BC%C3%A7el-a487b618a/" role="button"><i
                        class="fab fa-linkedin-in"></i></a>
    
    
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/ismailucel" role="button"><i
                        class="fab fa-github"></i></a>
            </section>
    
    
    
    
    
            <section class="mb-4">
                <p>
                    Bu web sitesi İsmail Üçel tarafından 2021 yılında Sakarya Üniversitesi Web Teknolojileri dersi için
                    hazırlanmıştır.
                </p>
            </section>
    
            <section class="">
    
                <div class="row">
    
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
    
    
    
                    </div>
    
    
    
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Linkler</h5>
    
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="anasayfa.html" class="text-white">Anasayfa</a>
                            </li>
                            <li>
                                <a href="hakkında.html" class="text-white">Hakkında</a>
                            </li>
                            <li>
                                <a href="ozgecmis.html" class="text-white">Özgeçmiş</a>
                            </li>
                            <li>
                                <a href="sehrim.html" class="text-white">Şehrim</a>
                            </li>
                        </ul>
                    </div>
    
    
    
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Linkler</h5>
    
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="yuruyen.html" class="text-white">Yürüyen Köşk</a>
                            </li>
                            <li>
                                <a href="futbol.html" class="text-white">Futbol Takımımız</a>
                            </li>
                            <li>
                                <a href="ozgecmis.html" class="text-white">Özgeçmiş</a>
                            </li>
                            <li>
                                <a href="iletisim.html" class="text-white">İletişim</a>
                            </li>
    
                        </ul>
                    </div>
    
    
    
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
    
                    </div>
    
                </div>
    
            </section>
    
        </div>
    
    
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white" href="https://www.linkedin.com/in/ismail-%C3%BC%C3%A7el-a487b618a/">İsmail Üçel</a>
        </div>
        <!-- Copyright -->
    </footer>

	<script src="Bootstrap/jquery-3.5.1.js"></script>
    <script src="Bootstrap/bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>