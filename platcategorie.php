<?php
include('header.php');

require('pdo.php');
?>
    <!-- <div class="parallax" style="background-image: url('image_parallax/pngegg.png')"> -->
      <h1 class="title-page mt-5 mx-5 mb-5">Le meilleur du fast food</h1>
      <section>
          <div class="container-fluid mt-5">
            <div class="col row justify-content-center card-custom">
            <?php
        $conn = connect();
        $plats = get_plats_categorie($conn, $_GET['id']);
        $index = 0;
        $newline = false;
        foreach ($plats as $plat) {
          $index++;
          if ($newline) {
            echo '<div class="row">';
            $newline = false;
        }
        // echo  '<div class="col-3 p-0 d-flex justify-content-center ms-5 mb-5">';
        echo  '<div class="card col-10 col-md-5 col-lg-3 p-0 mx-3 mt-4">';
        echo '<div class="mb-3 w-5">';
        echo '<div class="card-body">';        
        echo '<h5 class="card-title">' . $plat->libelle . '</h5>';
        echo '<img src="images_the_district/food/' . $plat->image . '" class="card-img-top img-card" alt="Placeholder Image">';
        echo '<p class="card-text">' . $plat->description . '</p>'; 
        echo '<div class="text-center">';
        echo '<a href="commande.php?id=' . $plat->id . '" class="envoi btn btn-primary">Commander</a>';
        
        echo '</div></div></div></div>';
    
      }
      ?>
              
            </div>
          </div>
          
</section>
    <!-- <div id="plat_categorie"class="col-md-12 p-0 d-flex justify-content-center">
    
    </div> -->
<?php
include_once('footer.php');
?>

