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
    <link rel="stylesheet" href="style.css">
    
    <title>Yalova Proje!</title>

     <script >

            function getParameterByName(name, url) 
            {
                if (!url) url = window.location.href;
                   name = name.replace(/[\[\]]/g, '\\$&');
                var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                    results = regex.exec(url);
                   if (!results) return null;
                   if (!results[2]) return '';
                   return decodeURIComponent(results[2].replace(/\+/g, ' '));
            }

              var isimSoyisim = getParameterByName('name');
              var email = getParameterByName('email');
              var sehir = getParameterByName('sehir');
              var cinsiyet = getParameterByName('cinsiyet');
              var konu = getParameterByName('konu');
              var mesaj = getParameterByName('mesaj');
              var cinsiyet = getParameterByName('cinsiyet');
             

        </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">

  <div class="container">

    <a class="navbar-brand" href="#"><i class="fas fa-city"></i>Yalova</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="anasayfa.html">Anasayfa</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="hakk??nda.html">Hakk??nda</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="ozgecmis.html">??zge??mi??</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="sehrim.html">??ehrim</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="ilgi.html">??lgi Alanlar??m</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Miras??m??z
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="y??r??yen.html">Y??r??yen K????k</a></li>
            <li><a class="dropdown-item" href="futbol.html">Futbol Tak??m??m??z</a></li>
          </ul>

        </li>

        <li class="nav-item">
            <a class="nav-link" href="login.php">Giri?? Yap<i class="fas fa-sign-in-alt"></i></a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="iletisim.html">??leti??im</a>
        </li>


     
      </ul>
     
    </div>

  </div>

</nav>

 <header>
       <br><br> <br> <br>

        <div class="bg-dark text-light jumbotron">
        
            <div class="container">
        
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">
                        Mesaj??n??z?? ald??m.
                    </h1>
                    <p class="lead my-3">
        
                        Merhaba <script>document.write(isimSoyisim);</script>. Mesaj??n?? ba??ar??yla ald??m. En k??sa zamanda d??n???? yapmaya ??al????aca????m.Te??ekk??r ederim.
                    </p>
                </div>
        
            </div>
        
        </div>
           
       


    </header>

    <div class="container" > 

            <table class="table table-hover table-striped table-bordered table-responsive" style="text-align: center;">
                <thead>
                    <tr >
                        <th rowspan = "1" colspan="1"></th>
                        <th></th>
                        <th id="mesaj-box">Mesaj??n??z</th>
                    </tr>
                </thead>
                    
                <tbody>
                <tr>
                    <td class="mesaj-bilgi">
                        ??sim ve Soyisim:
                    </td>
                    <td > 
                        <script>document.write(isimSoyisim);</script>
                    </td>
                    <td rowspan="5" >
                    <script>document.write(mesaj);</script>
                    </td>
                </tr>
                <tr>
                    <td class="mesaj-bilgi" >
                       Cinsiyet:
                    </td>
                    <td> 
                        <script>document.write(cinsiyet);</script>
                    </td>
                  
                </tr>
                <tr>
                    <td class="mesaj-bilgi" >
                      Sehir:
                    </td>
                    <td> 
                        <script>document.write(sehir);</script>
                    </td>
                  
                </tr>
                <tr>
                    <td class="mesaj-bilgi" >
                        Email: 
                    </td>
                    <td>
                        <script>document.write(email);</script>
                    </td>
                    
                </tr>

                <tr>
                    <td class="mesaj-bilgi" >
                        Konu: 
                    </td>
                    <td>
                        <script>document.write(konu);</script>
                    </td>
                    
                </tr>
            </tbody>
            </table>

        </div>

        <br>

    
<br><br>
<!-- Footer -->
<footer class="bg-dark text-center text-white">
    
    <div class="container p-4">
        
        <section class="mb-4">
            
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/ismail.ucel168/" role="button"><i
                    class="fab fa-facebook-f"></i></a>

            
            <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/ucel_ismail" role="button"><i class="fab fa-twitter"></i></a>

            
            <a class="btn btn-outline-light btn-floating m-1" href="mailto:ismailucel@gmail.com" role="button"><i class="fab fa-google"></i></a>

            
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/ismailucel/" role="button"><i
                    class="fab fa-instagram"></i></a>

            
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/ismail-%C3%BC%C3%A7el-a487b618a/" role="button"><i
                    class="fab fa-linkedin-in"></i></a>

            
            <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/ismailucel" role="button"><i class="fab fa-github"></i></a>
        </section>
        

        

        
        <section class="mb-4">
            <p>
                Bu web sitesi ??smail ????el taraf??ndan 2021 y??l??nda Sakarya ??niversitesi Web Teknolojileri dersi i??in haz??rlanm????t??r.
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
                            <a href="hakk??nda.html" class="text-white">Hakk??nda</a>
                        </li>
                        <li>
                            <a href="ozgecmis.html" class="text-white">??zge??mi??</a>
                        </li>
                        <li>
                            <a href="sehrim.html" class="text-white">??ehrim</a>
                        </li>
                    </ul>
                </div>
                

                
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Linkler</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="yuruyen.html" class="text-white">Y??r??yen K????k</a>
                        </li>
                        <li>
                            <a href="futbol.html" class="text-white">Futbol Tak??m??m??z</a>
                        </li>
                        <li>
                            <a href="ozgecmis.html" class="text-white">??zge??mi??</a>
                        </li>
                        <li>
                            <a href="iletisim.html" class="text-white">??leti??im</a>
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
        ?? 2021 Copyright:
        <a class="text-white" href="https://www.linkedin.com/in/ismail-%C3%BC%C3%A7el-a487b618a/">??smail ????el</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>





</body>

</html>
