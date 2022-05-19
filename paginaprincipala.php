<!DOCTYPE html>
<?php include('server.php');?>
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
    <section class="slider">
        <div class="container">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="slide">
                        <img src="images/slide1.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">

                                <?php

                                if(session_status() === PHP_SESSION_ACTIVE){
                                    echo'<h3>Bun venit, ';
                                    echo $_SESSION['username'];
                                    echo' !';
                                    echo' <p style="margin-top: 24px;"><a href="shop.php" class="btn">Magazin</a>';}
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <img src="images/slide2.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">

                                <?php

                                if(session_status() === PHP_SESSION_ACTIVE){
                                    echo'<h3>Bun venit, ';
                                    echo $_SESSION['username'];
                                    echo' !';
                                    echo' <p style="margin-top: 24px;"><a href="shop.php" class="btn">Magazin</a>';}
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <img src="images/slide3.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">

                                <?php

                                if(session_status() === PHP_SESSION_ACTIVE){
                                echo'<h3>Bun venit, ';
                                    echo $_SESSION['username'];
                                    echo' !';
                                echo' <p style="margin-top: 24px;"><a href="shop.php" class="btn">Magazin</a>';}
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <img src="images/slide4.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">

                                <?php

                                if(session_status() === PHP_SESSION_ACTIVE){
                                    echo'<h3>Bun venit, ';
                                    echo $_SESSION['username'];
                                    echo' !';
                                    echo' <p style="margin-top: 24px;"><a href="shop.php" class="btn">Magazin</a>';}
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recomended-sec">
        <div class="container">
            <div class="title">
                <h2>Cele mai populare cărți</h2>
                <hr>
            </div>
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
    </section>

    <section class="recent-book-sec">
        <div class="container">
            <div class="title">
                <h2>Adăugate recent</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <a href="produs5.php"><img src="images/r1.jpg" alt="img"></a>
                        <h3><a href="produs5.php">Oamenii fericiti citesc si beau cafea</a></h3>
                        <h6><span class="price">Gratuit!</span> / <a href="produs5.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs6.php">
                        <img src="images/r2.jpg" alt="img"></a>
                        <h3><a href="produs6.php">Intelepciunea psihopatilor</a></h3>
                        <h6><span class="price">19Lei</span> / <a href="produs6.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs7.php">
                        <img src="images/r3.jpg" alt="img">
                        <h3><a href="produs7.php">Drumul spre iad</a></h3>
                        <h6><span class="price">19Lei</span> / <a href="produs7.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs8.php">
                        <img src="images/r4.jpg" alt="img"></a>
                        <h3><a href="produs8.php">Abc-ul Psihopatului de succes</a></h3>
                        <h6><span class="price">50lei</span> / <a href="produs8.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs9.php">
                        <img src="images/r5.jpg" alt="img"></a>
                        <h3><a href="produs9.php">Hotul de carti</a></h3>
                        <h6><span class="price">Gratuit!</span> / <a href="produs9.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <a href="produs10.php">
                        <img src="images/r6.jpg" alt="img"></a>
                        <h3><a href="produs10.php">Confesiunile unei iubărețe</a></h3>
                        <h6><span class="price">Gratuit</span> / <a href="produs10.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs11.php">
                        <img src="images/r7.jpg" alt="img"></a>
                        <h3><a href="produs11.php">Cel mai iubit dintre pământeni</a></h3>
                        <h6><span class="price">Gratuit</span> / <a href="produs11.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs12.php">
                        <img src="images/r8.jpg" alt="img"></a>
                        <h3><a href="produs12.php">Fizica Sufletului</a></h3>
                        <h6><span class="price">30lei</span> / <a href="produs12.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs13.php">
                        <img src="images/r9.jpg" alt="img"></a>
                        <h3><a href="produs13.php">Strainul de langa mine</a></h3>
                        <h6><span class="price">20lei</span> / <a href="produs13.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs14.php">
                        <img src="images/r10.jpg" alt="img"></a>
                        <h3><a href="produs14.php">Vanatorii de zmeie</a></h3>
                        <h6><span class="price">20lei</span> / <a href="produs14.php">Cumpara acum!</a></h6>
                    </div>
                </div>
            </div>
            <div class="btn-sec">
                <a href="shop.php" class="btn gray-btn">Vezi toate cărtile!</a>
            </div>
        </div>
    </section>
    <section class="features-sec">
        <div class="container">
            <ul>
                <li>
                    <span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    <h3>Cea mai variata gama</h3>
                    <h5>de produse</h5>
                </li>
                <li>
                    <span class="icon return"><i class="fa fa-reply-all" aria-hidden="true"></i></span>
                    <h3>Cumpara in siguranta</h3>
                    <h5>Siguranta garantata!</h5>
                </li>
                <li>
                    <span class="icon chat"><i class="fa fa-comments" aria-hidden="true"></i></span>
                    <h3>24/7 SUPORT</h3>
                    <h5>Consultatii online</h5>
                </li>
            </ul>




    <script src="js/adaugarecarti.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>