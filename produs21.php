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
            <span class="breadcrumb-item active">Intimidarea</span>
        </div>
    </div>
    <section class="product-sec">
        <div class="container">
            <h1>Intimidarea</h1>
            <div class="row">
                <div class="col-md-6 slider-sec">
                    <div id="myCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="images/r17.jpg" class="img-fluid" style="width: 1000px;">
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
                                <img src="images/r17.jpg" class="img-fluid">
                            </a>
                            </li>
                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 slider-content">
                    <p>Numele meu este Tate. Totusi, el nu imi spune asa. Nici macar nu i-ar trece prin cap sa mi se adreseze atat de familiar, asta in cazul in care mi s-ar adresa cat de cat. Nu, abia daca imi vorbeste.Dar nici nu ma lasa in pace.Candva, am fost cei mai buni prieteni, dupa care a inceput sa se lege de mine si a decis ca scopul lui este sa imi ruineze viata. Am fost umilita, exclusa si barfita in toti anii de liceu. Cu cat trecea timpul, cu atat mai chinuitoare deveneau farsele si zvonurile puse la cale de el, si deja mi se facuse lehamite sa ma tot feresc din calea lui. Am plecat chiar in Franta pentru un an de zile, ca sa il evit.Doar ca, acum, m-am saturat sa ma mai ascund si nici de-a naibii nu il voi lasa sa-mi distruga ultimul an de liceu. Poate ca el nu s-a schimbat, dar eu am facut-o. Este timpul sa ripostez.Nu mai am de gand sa-l las sa-si bata joc de mine
</p>
                    <ul>
                        <li>
                            <span class="name">Pret</span><span class="clm">:</span>
                            <span class="price final">Gratuit</span>
                    </ul>
                    <div class="btn-sec">
                        <a href="https://drive.google.com/file/d/1Q2LMGrBiYpaCVxdxlIIwd9u3JNdU4Shr/view?usp=sharing"><button class="btn ">Citeste acum</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>    <section class="related-books" style="margin-top: 100px;" >
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