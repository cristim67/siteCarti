<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <title>Cristi Miloiu - 414B</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/logo.ico" />
</head>

<body>
    <header>
        
        <div class="main-menu">
            <div class="container">
                <?php include('server.php');?>
                <nav class="lista">

                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="paginaprincipala.php"><img src="images/logo.png" alt="logo" style="width:600px; height:400px;"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="navbar-item active">
                                    <a href="paginaprincipala.php" class="nav-link">Acasa</a>
                                </li>
                                <li class="navbar-item">
                                    <a href="shop.php" class="nav-link">Magazin</a>
                                </li>

                                <?php

                                if(session_status() === PHP_SESSION_ACTIVE){
                                    echo '<li class="navbar-item">
                                <a href="logout.php" class="nav-link">Deconectare</a>
                            </li>';}
                                echo $_SESSION['username'];
                                ?>

                            </ul>

                            <div class="cart my-2 my-lg-0">
                            <span>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                <span class="quntity">1</span>
                            </div>
                            <div>

                                <div style="  width: 100%;
  position: relative;
  display: flex;">
                                    <input type="text" placeholder="Caută aici..." style="width: 200px;padding:6px;" name="q" method="post"  id="post_id">
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">

                                    </script> <button type="submit" >
                                        <a id="link" href="#">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </button></div>

                                <div>

                                    <script  src="js/cautare.js">
                                    </script>

                                </div>
                    </nav>
                </nav>
            </div>
        </div>
    </header>
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="paginaprincipala.php">Acasa</a>
            <span class="breadcrumb-item active">Abc-ul Psihopatului de succes</span>
        </div>
    </div>
    <section class="product-sec">
        <div class="container">
            <h1>Abc-ul Psihopatului de succes</h1>
            <div class="row">
                <div class="col-md-6 slider-sec">
                    <div id="myCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="images/r4.jpg" class="img-fluid" style="width: 1000px;">
                            </div>
                            <div class="item carousel-item" data-slide-number="1">
                                <img src="images/product2.jpg" class="img-fluid">
                            </div>
                            <div class="item carousel-item" data-slide-number="2">
                                <img src="images/product3.jpg" class="img-fluid">
                            </div>
                        </div>
                        <ul class="carousel-indicators list-inline">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                <img src="images/r4.jpg" class="img-fluid">
                            </a>
                            </li>
                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 slider-content">
                    <p>Dupa ce a publicat bestseller-ul "Intelepciunea psihopatilor", Editura Globo ofera cititorului pasionat de expeditii prin labirinturile psihicului uman o noua carte de referointa, scrisa de acelasi autor: "ABC-ul psihopatului de succes".

Doctorul Kevin Dutton este cercetator la Departamentul de Psihologie Experimentala - Universitatea Oxford. De data aceasta, isi propune sa ne convinga ca in fiecare dintre noi zace un psihopat. Totul e sa-l descoperim, sa ni-l asumam, sa-l intelegem si, in ultima instanta, sa-l folosim in dobandirea succesului....
</p>
                    <ul>
                        <li>
                            <span class="name">Pret</span><span class="clm">:</span>
                            <span class="price final">50lei</span>
                    </ul>
                    <div class="btn-sec">
                        <button class="btn ">Cumpara acum!</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="related-books" style="margin-top: 100px;" >
        <div class="container">
            <h2>CUMPARATE FRECVENT</h2>
            <div class="recomended-sec">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <img src="images/img1.jpg" alt="img">
                            <h3>Tatuatorul</h3>
                            <h3>de la Auschwitz</h3>
                            <h6><span class="price">49Lei</span> / <a href="#">Cumpara acum!</a></h6>
                            <div class="hover">
                                <a href="produs1.php">
                                    <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <img src="images/img2.jpg" alt="img">
                            <h3>Pacienta Tăcută</h3>
                            <h6><span class="price">19Lei</span> / <a href="#">Cumpara acum!</a></h6>
                            <span class="sale">Reducere !</span>
                            <div class="hover">
                                <a href="produs2.php">
                                    <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <img src="images/img3.jpg" alt="img">
                            <h3>Arta subtilă </h3>
                            <h3>a nepăsării</h3>
                            <h6><span class="price">49Lei</span> / <a href="#">Cumpara acum!</a></h6>

                            <div class="hover">
                                <a href="produs3.php">
                                    <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <img src="images/img4.jpg" alt="img">
                            <h3>Scurtă istorie</h3>
                            <h3> a omenirii</h3>
                            <h6><span class="price">49Lei</span> / <a href="#">Cumpara acum!</a></h6>
                            <span class="sale">Reducere !</span>
                            <div class="hover">
                                <a href="produs4.php">
                                    <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>