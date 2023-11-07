<?php 
session_start();  

?>
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
                    <a href="#" class="navbar-brand">MENU</a>
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
                                    <a href="login.php" class="dropdown-item">S'inscrire</a>
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
        
        <!-- Breadcrumb End -->
        

                <!-- Side Bar Start -->
<!--<style>
    .amine{
        display: fixed;
    }
</style>
<div class="amine">
     <div>
        <div>
            <div> -->
                    <div class="col-lg-4 sidebar">
                        <div class="sidebar-widget category">
                            <h2 class="title">Catégorie</h2>
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
                          <div class="sidebar-widget widget-slider">
                            <div class="sidebar-slider normal-slider">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="">T-shirt court à ruché à cordon côtelé</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                            <img src="women/5.jpg" alt="Product Image" width="400px" height="500px">
                                    </div>
                                    <div class="product-price">
                                        <h3>11,5€</h3>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="">Pantalon taille haute à poches en velours </a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                            <img src="women/26.jpg" alt="Product Image" width="400px" height="500px">
                                    </div>
                                    <div class="product-price">
                                        <h3>19,5€</h3>
                                    </div>
                                </div>
                                 <div class="product-item">
                                    <div class="product-title">
                                        <a href=""> Pantalon & sweat-shirt à capuche bicolore</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                            <img src="women/31.jpg" alt="Product Image" width="400px" height="500px">
                                    </div>
                                    <div class="product-price">
                                        <h3>29,5€</h3>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="">Pantalon palazzo taille élastique à rayures</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                            <img src="women/20.jpg" alt="Product Image" width="400px" height="500px">
                                    </div>
                                    <div class="product-price">
                                        <h3>16€</h3>
                                    </div>
                                </div>
                                 <div class="product-item">
                                    <div class="product-title">
                                        <a href="">Pantalon de survêtement & sweat-shirt</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                            <img src="women/49.jpg" alt="Product Image" width="400px" height="500px">
                                    </div>
                                    <div class="product-price">
                                        <h3>19€</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget brands">
                            <h2 class="title">Nos marques</h2>
                            <ul>
                                <li><a>Addids </a></li>
                                <li><a>Nike </a></li>
                                <li><a>Chanel </a></li>
                                <li><a>Converse </a></li>
                                <li><a>Calvin Klein </a></li>
                                <li><a>Dior </a></li>
                                <li><a>Fendi </a></li>
                                <li><a>Prada </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Product List End -->  
 <style type="text/css">
     .divv{
        margin-left: 30%;
        width: 100%;
        margin-top: -1435px;
     }
 </style>       
<div class="divv">
        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-view-top">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="product-short">
                                                <div class="dropdown">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-price-range">
                                                <div class="dropdown">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                                include('connexion.php');
                                if (isset($_POST['recherche'])&& !empty($_POST['recherche'])) {
                                $recherche=$_POST['recherche'];
                                $req="select * from produit where libelle like '$recherche%'";   }
                                else{
                                  $req="select * from produit";   
                                }
                                $res=$cnx->query($req);
                                    while ($data=$res->fetch_assoc()) {  ?>  
                          <div class='col-md-4'>
                            <div class='product-item'>
                 <form action='' method='POST'> 
                   <div class='product-title'>
                    <a><b><?=$data['libelle']?></b><br><?=$data['description']?></a>
                   <div class='ratting'>
                         <i class='fa fa-star'></i> 
                         <i class='fa fa-star'></i>
                         <i class='fa fa-star'></i>
                         <i class='fa fa-star'></i>
                         <i class='fa fa-star'></i>
                   </div>
                  </div>
                          <div class='product-image'>
                            <img src='women/<?=$data['photo']?>' alt='Product Image' width='300px' height='350px'>
                          </div>
                          <div class='product-price'><h3><?=$data['prix']?>€</h3> 
                            <div class='product-action'><a href='product-detail.php?idProduit=<?=$data['idProduit']?>' >Detail produit</a>  </div>
                          </div>
                        </form>
                       </div>
                     </div>         
                               
                                    <br>
                                    <?php }  ?>     
                      
                                </div>
                            </div>
                         </div>
                    </div>           
    </div>                
</div>
        
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
