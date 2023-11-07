<?php
   include('connexion.php');
$req="DELETE FROM panier WHERE idProduit=".$_GET['idProduit'];
$res=$cnx->query($req);
            header('location:cart.php');
      if($res){
        echo "okk";
      }
      else{echo "noo";}
         

?>