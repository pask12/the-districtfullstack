<?php


include('header.php');

require('pdo.php');

?>



<h1 class="title-page mt-5 mb-5 mx-5">Le meilleur du fast food</h1>
<section class="video-search">
  <div class="d-flex justify-content-center ">
    <video  id="video" src="video/5794437-hd_1920_1080_25fps.mp4" autoplay loop muted> </video>
  </div>

   <!-- <h1 class="position-absolute">Le meilleur du fast food</h1>  -->
    <div class="rech">
  <form action="index.php" class="search" method="POST">
    <!-- <form action="index.php" method="POST"> -->
    <!-- <input id="recherche" class="form-control" type="search" placeholder="Recherche" aria-label="Recherche" name="search"> -->
    <input id="recherche" class="text-over-recherche form-control me-2 d-md-flex d-none" type="search" placeholder="Recherche" aria-label="Recherche" name="search">
    <!-- <div id="resultats" class="d-flex col-md-12"></div> -->
           <!-- <button class="btn btn-outline-success" type="submit">Recherche</button> -->
  </form>
</div>
  <?php
      //   $connexion = connect();
      //   $plats = get_platsvendus($connexion);
      //   
      //   // var_dump($plats);
      //   // die();
      //   $index = 0;
      //   $newline = false;
      //   foreach ($plats as $plat) {
      //     $index++;
      //     if ($newline) {
      //       echo '<div class="row justify-content-center">';
      //       $newline = false;
      //   }
      //   echo '<div class="col-3 p-0 d-flex justify-content-center ms-5 mb-5">';
      //   echo '<div class="card mb-3">';
      //   echo '<h1 class="card-title">' . $plat->libelle . '</h1>';
      //   echo '<img src="images_the_district/food/' . $plat->image . '" class="card-img-top" alt="Placeholder Image" style="height : 20rem; width : 30rem;">';
      //   echo '<div class="card-body">';
      //   echo '<p class="card-text">' . $plat->description . '</p>'; 
      //   echo '<div class="text-center">';
      //   echo '<a href="commande.php?id=' . $plat->id . '" class="envoi btn btn-primary">Commander</a>';

      //   echo '</div></div></div></div>';
      //   if ( $index % 3 == 0) {
      //     echo '</div>';
      //     $newline = true;
      //   }
      // }
      ?>





</section>

<?php if (!isset($_POST["search"])) : ?>
  <h2 class="title-page mt-5 mx-5">Nos plats les plus vendus</h2>
<?php else : ?>
  <h2 class="title-page mt-5 mx-5">Nos plats</h2>
<?php endif; ?>
<section class="container-fluid">
  <!-- <div class="container-fluid mt-5"> -->
    <div class="row justify-content-center card-custom">
      <!-- <div  id="plat" class="col-md-10 p-0 d-flex row justify-content-center"> -->
      <?php
        $connexion = connect();
        if (isset($_POST["search"])) {
          $plats = get_recherche($connexion, $_POST["search"]);
        } else {
          $plats = get_platsvendus($connexion);
        }
        // var_dump($plats);
        // die();
        $index = 0;
        $newline = false;
        foreach ($plats as $plat) {
          $index++;
          if ($newline) {
            echo '<div class="row justify-content-center">';
            $newline = false;
        }
        // echo '<div class="col-3 p-0 d-flex justify-content-center ms-5 mb-5">';
        echo  '<div class="card col-10 col-md-5 col-lg-3 p-0 mx-3 mt-4 mb-5">';
        echo '<div class="mb-3">';
        echo '<h1 class="card-title">' . $plat->libelle . '</h1>';
        echo '<img src="images_the_district/food/' . $plat->image . '" class="card-img-top img-card" alt="Placeholder Image">';
        echo '<div class="card-body">';
        echo '<p class="card-text">' . $plat->description . '</p>'; 
        echo '<div class="text-center">';
        if (!isset($_POST["search"])){
          echo '<a href="commande.php?id=' . $plat->id_plat . '" class="envoi btn btn-primary">Commander</a>';
        } else{
          echo '<a href="commande.php?id=' .$plat->id . '"class="envoi btn btn-primary">Commander</a>';
        }

        echo '</div></div></div></div>';
        if ( $index % 3 == 0) {
          echo '</div>';
          $newline = true;
        }
      }
      ?>
  <!-- </div> -->
</section>
<!-- </div> -->
<!-- <div class="parallax" style=""></div> -->

<?php include('footer.php');?>
 
      


