<?php 
  session_start();

        if (isset($_POST['miseajour'])) {
            include("connexion.php");
            $n=$_POST['nom'];
            $p=$_POST['prenom'];
            $a=$_POST['adresse'];
            $e=$_POST['email'];
            $t=$_POST['telephone'];
            $req="UPDATE client 
                  SET nom='$n', prenom ='$p', adresse='$a', email='$e' , telephone=$t
                  WHERE idClient=".$_SESSION['idClient'];
            $res=$cnx->query($req);
            echo $req;
            if($res){
             echo "OKKK";
            }
         }                                
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
        
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" id="orders-nav" href="cart.php"><i class="fa fa-shopping-bag"></i>Ordres</a>
                            <a class="nav-link" id="payment-nav" data-toggle="pill" href="#payment-tab" role="tab"><i class="fa fa-credit-card"></i>Mode de paiement</a>
                            <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-map-marker-alt"></i>Addresse</a>
                            <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Détails du compte</a>
                            <a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i>Se déconnecter</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Produit</th>
                                                <th>Prix</th>
                                                <th>Quantite</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Product Name</td>
                                                <td>01 Jan 2020</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">
                                <h4>Mode de paiement</h4>
                                <p>
                                    Comment se déroule donc un paiement en e-commerce ? <br>
                                    Il y a 5 étapes :  <br>

                                    + Le client passe une commande chez un e-commercant. <br>
                                    + Le site adresse une requête au PSP pour ouvrir une page sécurisé ou le client va saisir ses informations de carte. <br>
                                    + Le PSP va transmettre la demande de paiement à la banque du client. <br>
                                    + La banque va valider ou non la requête et fait par de sa réponse au PSP. <br>
                                    + La banque du commerçant reçoit le paiement et transmet les fonds sur le compte bancaire. <br>
                                </p> 
                            </div>
                            <div class="tab-pane fade" id="address-tab" role="tabpanel" aria-labelledby="address-nav">
                                <h4>Addresse</h4>
                                <div class="row">
                                    <?php

                                    if (isset($_POST['modifier'])) {
                                        include("connexion.php");
                                        $a=$_POST['al'];
                                        $t=$_POST['tl'];
                                        $req2="UPDATE client 
                                              SET adresseLivraison='$a' , telephoneAdresse='$t'
                                              WHERE idClient=".$_SESSION['idClient'];  
                                        $res2=$cnx->query($req2);   
                                    }                             
                                    ?>
                                    <?php

                                        include('connexion.php');
                                            $idClient=$_SESSION['idClient'];
                                            $req="SELECT * FROM client WHERE idClient= ".$idClient;   
                                            $res=$cnx->query($req);
                                                while ($data=$res->fetch_assoc()) {  ?>  
                                    <div class="col-md-6">
                                        <h5>adresse de Livraison</h5>
                                        <form action="" method="POST">
                                       <div class="col-md-6">
                                        <input class="form-control" type="text" value="<?=$data['adresseLivraison']?>" name="al">
                                       </div>
                                       <div class="col-md-12">
                                        <input class="form-control" type="text" value="0<?=$data['telephoneAdresse']?>" name="tl">
                                       </div>
                                        <input type="submit" name="modifier" value="Sauvegarder les modifications" class="btn">
                                       </form>
                                   </div>
                            </div>
                            <div class="tab-pane fade" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                <h4>Détails du compte</h4>
                                <div class="row">
                                  <form action="" method="POST">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" value="<?=$data['nom']?>" name="nom">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" value="<?=$data['prenom']?>" name="prenom">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" value="0<?=$data['telephoneAdresse']?>" name="telephone">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" value="<?=$data['email']?>" name="email">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="<?=$data['adresse']?>" name="adresse">
                                    </div>
                                            <input type="submit" name="miseajour" value="Sauvegarder les modifications" class="btn">
                                        <br><br>
                                  </form>                <?php }?>

                                </div>
                                <h4>Changement de mot de passe</h4>
                                <div class="row">
                                  <form action="" method="POST">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="Mot de passe actuel" name="oldpw" size="50">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="password" placeholder="Nouveau mot de passe" name="newpw" size="50">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" name="sauvegarder" value="Sauvegarder les modifications" class="btn">
                                    </div>
                                    <?php
                                    if (isset($_POST['sauvegarder'])) {
                                        include("connexion.php");
                                        $opw=$_POST['oldpw'];
                                        $npw=$_POST['newpw'];
                                        $req1="UPDATE client 
                                              SET motPasse='$npw'
                                              WHERE  motPasse='$opw' and idClient=".$_SESSION['idClient'];  
                                        $res1=$cnx->query($req1);   
                                    }                             
                                    ?>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account End -->
        
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
