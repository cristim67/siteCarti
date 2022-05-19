
<?php include('server.php');?>
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
            <span class="breadcrumb-item active">Magazin</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h2>CELE MAI POPULARE CĂRȚI</h2>
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
            <h2>Adăugate recent</h2>
            <div class="recent-book-sec">
                <div class="row">
                    <div class="col-md-3">
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
                </div>
                <div class="btn-sec">
                 
        <div id="hero1"></div>
        <div id="hero2"></div>
        <div id="hero3"></div>
        <button id="add_btn1" class="btn gray-btn"style="margin-bottom:50px;">Mai multe carti - FUNCTIONAL</button>
        
    </div>
                </div>

            </div><div class="container">
            <h2>Cursuri pentru medicina</h2>
            <div class="recent-book-sec">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <a href="produs25.php"><img src="images/r21.jpg" alt="img"></a>
                        <h3><a href="produs25.php">Curs de pneumologie pentru studenti</a></h3>
                        <h6><span class="price">Gratuit!</span> / <a href="produs25.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs27.php">
                        <img src="images/r22.jpg" alt="img"></a>
                        <h3><a href="produs27.php">Anatomia Omului, Volumul I: Embriologie
 </a></h3>
                        <h6><span class="price">Gratuit</span> / <a href="produs27.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs26.php">
                        <img src="images/r23.jpg" alt="img">
                        <h3><a href="produs26.php">CURS DE ECOGRAFIE ABDOMINALĂ PENTRU STUDENŢI
 </a></h3>
                        <h6><span class="price">Gratuit</span> / <a href="produs26.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs28.php">
                        <img src="images/r24.jpg" alt="img"></a>
                        <h3><a href="produs28.php">Medicina psihiatrică la cumpăna dintre milenii
 </a></h3>
                        <h6><span class="price">Gratuit</span> / <a href="produs28.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs29.php">
                        <img src="images/r25.jpg" alt="img"></a>
                        <h3><a href="produs29.php">Manual de radiologie și imagistică medicală, vol. I - Toracele
 </a></h3>
                        <h6><span class="price">Gratuit!</span> / <a href="produs29.php">Cumpara acum!</a></h6>

                    </div>

                </div>

        </div>
        <div class="btn-sec">
                    <button class="btn gray-btn" name="maimultecarti">Mai multe cărti!</button>
                </div>
            </div>
            <h2>Cursuri pentru ASE</h2>
            <div class="recent-book-sec">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <a href="produs30.php"><img src="images/r26.jpg" alt="img" style="width:600px; height: 300px;"></a>
                        <h3><a href="produs30.php">Finante publice</a></h3>
                        <h6><span class="price">Gratuit!</span> / <a href="produs30.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs31.php">
                        <img src="images/r27.jpg" alt="img" style="width: 400px; height: 290px;"></a>
                        <h3><a href="produs31.php">Management
 </a></h3>
                        <h6><span class="price">Gratuit</span> / <a href="produs31.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs32.php">
                        <img src="images/r28.jpg" alt="img" style="height: 300px;">
                        <h3><a href="produs32.php">Curs Audit Intern ASE
 </a></h3>
                        <h6><span class="price">Gratuit</span> / <a href="produs32.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs33.php">
                        <img src="images/r29.jpg" alt="img"></a>
                        <h3><a href="produs33.php">Marketingul intreprinderilor mici si mijlocii
 </a></h3>
                        <h6><span class="price">Gratuit</span> / <a href="produs33.php">Cumpara acum!</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item"><a href="produs34.php">
                        <img src="images/r30.jpg" alt="img" style="height: 300px;width: 300px;"></a>
                        <h3><a href="produs34.php">Metode cantitative în eMarketing
 </a></h3>
                        <h6><span class="price">Gratuit!</span> / <a href="produs34.php">Cumpara acum!</a></h6>

                    </div>

                </div>

        </div>   <div class="btn-sec">

        <button id="add_btn" class="btn gray-btn"style="margin-bottom:50px;">Mai multe carti</button>
</div></div></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    </section>    <script src="js/adaugarecarti.js">
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>