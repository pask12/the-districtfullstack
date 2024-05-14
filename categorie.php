<?php

require('pdo.php');

include('header.php');

?>


<!-- <div class="parallax" style="background-image: url('image_parallax/pngegg.png')"> -->
<h1 class="title-page mt-5 mb-5 mx-5">Le meilleur du fast food</h1>
  <section>


    <div class="container-fluid mt-5">

      <div class="row justify-content-center">
      <?php
        $connexion = connect();
        $categories = get_categories($connexion);
        $index = 0;
        $newline = false;
        foreach ($categories as $categorie) {
          $index++;
          if ($newline) {
            echo '<div class="row justify-content-center">';
            $newline = false;
        }
        echo  '<div class="col-3 p-0 d-flex justify-content-center ms-5 mb-5">';
        echo '<div class="card mb-3 ">';
        echo '<h1 class="card-title">' . $categorie->libelle . '</h1>';
        echo '<a href="platcategorie.php?id=' . $categorie->id .'">';
        echo '<img src="asset/img/category/' . $categorie->image . '" class="card-img-top" alt="Placeholder Image" style="height : 25rem; width : 25rem;"></a>';
        echo '<div class="card-body">';
        
        
       

        echo '</div></div></div>';
        if ( $index % 3 == 0) {
          echo '</div>';
          $newline = true;
        }
      }
      ?>
    </div>

<!-- </div> -->

</section>



<?php include('footer.php');?>
 
      
