<?php
session_start();
include ('connexion.php');
if (isset($_POST['connecter'])) {
    header('location:paiement/paiement.php');}
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
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End --> 
        
        <!-- Checkout Start -->
        <?php

                                        include('connexion.php');
                                            $idClient=$_SESSION['idClient'];
                                            $req="SELECT * FROM client WHERE idClient= ".$idClient;   
                                            $res=$cnx->query($req);
                                                while ($data=$res->fetch_assoc()) {  ?>  
                                                    
        <div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-lg-8">
                        <form action='' method='POST'> 
                        <div class="checkout-inner">
                            <div class="billing-address">
                                <h2>Adresse de livraison</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Prenom</label>
                                        <input class="form-control" type="text" value="<?=$data['prenom']?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nom</label>
                                        <input class="form-control" type="text" value="<?=$data['nom']?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email</label>
                                        <input class="form-control" type="text" value="<?=$data['email']?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Numero de téléphone</label>
                                        <input class="form-control" type="text" value="<?=$data['telephoneAdresse']?>">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Addresse</label>
                                        <input class="form-control" type="text" value="<?=$data['adresseLivraison']?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Pays</label>
                                      <input class="form-control" type="text" value="<?=$data['pays']?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Ville</label>
                                        <input class="form-control" type="text" value="<?=$data['ville']?>">
                                    </div>
                                        <div class="custom-control custom-checkbox">
                                           <div class="col-md-12">
                                              <input type="submit" class="btn" name="connecter" value="Passer la commande">
                                           </div>
                                        </div>                                            
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            <?php }?>
                    <div class="col-lg-4">
                        <div class="checkout-inner">
                            <!--<div class="checkout-summary">
                                <h1>Total du panier</h1>
                                <p>Nom du produit<span>?????</span></p>
                                <p class="sub-total">Sous-total<span>$99</span></p>
                                <p class="ship-cost">Frais de livraison<span>$1</span></p>
                                <h2>Total<span>$100</span></h2>
                            </div>-->

                            <div class="checkout-payment">
                                <div class="payment-methods">
                                    <h1>Méthodes de payement</h1>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-1" name="payment">
                                            <label class="custom-control-label" for="payment-1">Paypal</label>
                                        </div>
                                        <div class="payment-content" id="payment-1-show">
                                            <p>
                                               PayPal est le moyen le plus rapide et le plus sûr d'envoyer de l'argent, d'effectuer un paiement en ligne, de recevoir de l'argent ou de créer un compte marchand.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-2" name="payment">
                                            <label class="custom-control-label" for="payment-2">Payoneer</label>
                                        </div>
                                        <div class="payment-content" id="payment-2-show">
                                            <p>
                                                Simplifiez vos paiements, frais réduits, retirez des fonds localement.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-3" name="payment">
                                            <label class="custom-control-label" for="payment-3">Paiement par chèquet</label>
                                        </div>
                                        <div class="payment-content" id="payment-3-show">
                                            <p>
                                                 Le titulaire d'un compte donne ordre à son établissement bancaire de payer au bénéficiaire du chèque la somme inscrite sur celui-ci.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-4" name="payment">
                                            <label class="custom-control-label" for="payment-4">Virement bancaire direct</label>
                                        </div>
                                        <div class="payment-content" id="payment-4-show">
                                            <p>
                                                Grâce au virement instantané, votre argent se retrouve en quelques secondes sur le compte de votre bénéficiaire. 
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-5" name="payment">
                                            <label class="custom-control-label" for="payment-5">Paiement à la livraison</label>
                                        </div>
                                        <div class="payment-content" id="payment-5-show">
                                            <p>
                                                Le paiement à la livraison implique la réalisation d'un paiement en espèces ou cash.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout End -->
        
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
