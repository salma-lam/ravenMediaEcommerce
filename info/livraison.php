<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>livraison</title>
<!-- 
Magazee Template 
http://www.templatemo.com/tm-514-magazee
-->
  <!-- load CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">    <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="css/bootstrap.min.css">                                        <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="css/templatemo-style.css">                                     <!-- Templatemo style -->

  <script>
    var renderPage = true;

    if(navigator.userAgent.indexOf('MSIE')!==-1
      || navigator.appVersion.indexOf('Trident/') > 0){
        /* Microsoft Internet Explorer detected in. */
        alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
        renderPage = false;
    }
  </script>

</head>

<body>
  <!-- Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

 <div class="container">

<!-- 2nd section -->
<section class="row tm-section tm-col-md-reverse">
 <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
  <div class="tm-flex-center p-5">
    <div class="tm-md-flex-center">
      <h2 style="color:#FF6F61"> LIVRAISON</h2>
       <p class="mb-4"> Le délai de livraison est une estimation à titre indicatif. Le délai indiqué débute à partir de la date de validation de la commande. En cas de problème  
            Si votre colis n'a pas été livré ou si les informations de suivi indiquent que votre colis a été livré mais que vous ne l'avez pas reçu, vous devez contacter le service clientèle pour vérifier dans les 45 jours suivant la date de la commande. Pour les autres problèmes conernant aux commandes, produits ou problèmes logistiques, vous devez contacter le service clientèle dans les 90 jours suivant la date de la commande.
            Dans la plupart des cas, le colis sera livré dans les délais estimés. Cependant, la date réelle de livraison peut être changée par les vols, les conditions météorologiques ou d'autres facteurs externes. Veuillez vous référer aux informations de suivi pour une date de livraison plus précise.</p>         
    </div>
  </div>
</div>
<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0"  style="background: #FF6F61">
  <div class="tm-flex-center p-5 tm-bg-color-primary"  style="background: #FF6F61">
    <div class="tm-max-w-400 tm-flex-center tm-flex-col">
      <img src="img/livraison.jpg" alt="Image" width="500px" height="350px">
      <br><br>
      <img src="img/livraison2.jpg" alt="Image" width="500px" height="300px">
    </div>
  </div>
</div>
</section>
<!-- Footer -->
<div class="row">
  <div class="col-lg-12">
    <p class="text-center small tm-copyright-text mb-0">Copyright &copy; <span class="tm-current-year">2022</span> RAVEN MEDIA</p>
  </div>
</div>
</div>
<!-- load JS -->
<script src="js/jquery-3.2.1.slim.min.js"></script>         <!-- https://jquery.com/ -->
<script>
  /* DOM is ready
  ------------------------------------------------*/
  $(function(){

    if(renderPage) {
      $('body').addClass('loaded');
    }

    $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright
  });

</script>

</body>
</html>