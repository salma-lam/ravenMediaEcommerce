<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Store - Raven Media</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        anas@ravenmedia.fr
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        08 92 97 64 98
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link">Accueil</a>
                            <a href="product-list.php" class="nav-item nav-link">Produits</a>
                            <a href="product-detail.php" class="nav-item nav-link">Detail des Produits</a>
                            <a href="cart.php" class="nav-item nav-link">Panier</a>
                            <a href="checkout.php" class="nav-item nav-link">Vérifier</a>
                            <a href="my-account.php" class="nav-item nav-link">Mon Compte</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Autres Pages</a>
                                <div class="dropdown-menu">
                                    <a href="login.php" class="dropdown-item">Se connecter</a>
                                    <a href="login2.php" class="dropdown-item"> S'inscrir</a>
                                    <a href="contact.php" class="dropdown-item">Nous contacter</a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Compte d'utilisateur</a>
                                <div class="dropdown-menu">
                                    <a href="login.php" class="dropdown-item">Se connecter</a>
                                    <a href="login2.php" class="dropdown-item">S'inscrire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo.jpeg" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                          <form action="product-rechercher.php" method="POST">  
                            <input type="text" placeholder="Recherche" name="recherche">
                            <button><i class="fa fa-search"></i></button>
                          </form> 
                        </div>
                    </div>
                <!--    <?php
                /* function rechercheProduit($keywords) {

                      if (isset($_POST['recherche'])) {
                        include('connexion.php');
                        $req1="SELECT * FROM produit WHERE libelle LIKE '%keywords%' ";
                        $res1=$cnx->query($req1);
                        $res1->fetch_assoc();                      
                      }

                  } */
                    ?> -->
                    <div class="col-md-3">
                        <div class="user">
                            <a href="cart.php" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->       
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                             <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-home"></i>Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="product-list3.php"><i class="fa fa-plus-square"></i>Nouveautés</a>
                                </li>
                                <li class="nav-item" >
                                    <a href="product-list.php?designation='femme'" class="nav-link"><i class="fa fa-female"></i>Femme</a>
                                </li>
                                <li class="nav-item" >
                                     <a href="product-list.php?designation='homme'" class="nav-link"><i class="fa fa-tshirt"></i>Homme</a>
                                </li>  
                                <li class="nav-item" >
                                    <a href="product-list.php?designation='enfant'" class="nav-link"><i class="fa fa-child"></i>Enfant</a>
                                </li>   
                                <li class="nav-item" >
                                    <a href="product-list.php?designation='accessoire'" class="nav-link"><i class="fa fa-shopping-bag"></i>Accessoires</a>
                                 </li>
                             </ul>
                            </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="img/shopping1.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p style="text-transform: uppercase; color: #ff0000; font-family: Fantasy; font-size: 45px">acheter en 2 et obtenez 15% de réduction !!</p>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="img/shopping3.jpg" alt="Slider Image"/>
                                <div class="header-slider-caption">
                                    <p style="text-transform: uppercase; color: #254AA5; font-family: Fantasy; font-size: 45px">vibes de vacances avec ravenmedia</p>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="img/shopping14.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p style="text-transform: uppercase; color: #9900ff; font-family: Fantasy; font-size: 45px">les meilleurs vente d'été !</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/accessories.jpg" />
                                <a class="img-text" href="">
                                    <p style="text-transform: uppercase; color: #0000AA; font-family: Fantasy; font-size: 48px">jusqu'à -80% !</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="img/shopping6.jpg" />
                                <a class="img-text" href="">
                                    <p style="text-transform: uppercase; color: #FFFF00; font-family: Fantasy; font-size: 30px">découvrez les styles les mieux notés pour vos petits! </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="brand/chanel.png" alt="" width="100px"></div>
                    <div class="brand-item"><img src="brand/ck.png" alt="" width="100px"></div>
                    <div class="brand-item"><img src="brand/converse.png" alt="" width="100px"></div>
                    <div class="brand-item"><img src="brand/lv.png" alt="" width="100px"></div>
                    <div class="brand-item"><img src="brand/nike.jpg" alt="" width="200px"></div>
                    <div class="brand-item"><img src="brand/vans.jpge" alt="" width="100px"></div>
                    <div class="brand-item"><img src="brand/chanel.png" alt="" width="100px"></div>
                    <div class="brand-item"><img src="brand/converse.png" alt="" width="100px"></div>
                    <div class="brand-item"><img src="brand/ck.png" alt="" width="100px"></div>
                    <div class="brand-item"><img src="brand/nike.jpg" alt="" width="200px"></div>
                    <div class="brand-item"><img src="brand/ck.png" alt="" width="100px"></div>
                    <div class="brand-item"><img src="brand/nike.jpg" alt="" width="200px"></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->      
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Paiement sécurisé</h2>
                            <p style="font-size: 11px">
                                Tous les prix sont entendus hors frais de livraison.
                                <br>
                                Le coût total de la commande est le prix des produits commandés et les frais de livraison.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>LIVRAISON</h2>
                            <p style="font-size: 11px">
                             Le délai de livraison est une estimation à titre indicatif. 
                             <br>
                             Le délai indiqué débute à partir de la date de validation de la commande.                            
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>POLITIQUE DE RETOUR</h2>
                            <p style="font-size: 11px">
                             Nous espérons que vous aimez ce que vous avez commandé! Au cas où vous n'êtes pas satisfait à 100%. 
                             <br>                                  
                             Nous acceptons volontiers les retours dans les 30 jours suivant la réception des articles.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>Centre d'aide</h2>
                            <p style="font-size: 11px">
                            Assistance 24/7 pour répondre à toutes vos questions.
                            <br>
                            Si le produit acheté ne correspond pas à la description ou s'il n'est pas arrivé à la date prévue, nous garantissons votre remboursement.                           
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->      
        
        <!-- Category Start-->
        <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/shopping8.jpg" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="img/shopping9.jpg" width="200px" />
                        </div>
                        <div class="category-item ch-150">
                            <img src="img/shopping11.jpeg" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="img/shopping2.jpg" />                            
                        </div>
                        <div class="category-item ch-250">
                            <img src="img/shopping5.jpeg" />                        
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/shopping16.jpg" />
                           <!-- <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>Appelez-nous pour toute question!</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">08 92 97 64 98</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
                
        <!-- Recent Product Start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Produits Recents</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-3">
                                   <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">Blazer Mid en blanc</a>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                                <img src="women/14.jpg" alt="Product Image" width="250px" height="350px">
                                        </div>
                                        <div class="product-price">
                                            <h3>26€</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">Bijoux femme</a>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                                <img src="women/67.jpg" alt="Product Image" width="250px" height="350px">
                                        </div>
                                        <div class="product-price">
                                            <h3>6€</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">T-shirt enfant</a>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                                <img src="women/51.jpg" alt="Product Image" width="250px" height="350px">
                                        </div>
                                        <div class="product-price">
                                            <h3>10,5€</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">Ballerine confortable</a>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                                <img src="women/33.jpg" alt="Product Image" width="250px" height="350px">
                                        </div>
                                        <div class="product-price">
                                            <h3>25€</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">casquette tommy hilfiger</a>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                                <img src="women/78.jpg" alt="Product Image" width="250px" height="350px">
                                        </div>
                                        <div class="product-price">
                                            <h3>11€</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
        <!-- Recent Product End -->
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Contact</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>14 RUE BEFFROY 92200 <br> NEUILLY-SUR-SEINE</p>
                                <p><i class="fa fa-envelope"></i>anas@ravenmedia.fr</p>
                                <p><i class="fa fa-phone"></i>08 92 97 64 98</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Informations sur la société</h2>
                            <ul>
                                <li><a href="info/apropos.php">A propos de nous</a></li>
                                <li><a href="info/livraison.php">Livrison</a></li>
                            </ul>
                        </div>
                    </div>

                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>NOUS ACCEPTONS:</h2>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                      <!--  <p>Copyright &copy; <span class="tm-current-year">2022</span> RAVEN MEDIA </p>  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
