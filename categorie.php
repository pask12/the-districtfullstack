<?php
include('header.php');

require('pdo.php')
?>
<section>
  <h1 class="title-page mt-5 mb-5">Le meilleur du fast food</h1>
  <div class="container-fluid">
    <div id="categorie" class="row">
      <?php
        $connexion = connect();
        $categories = get_categories($connexion);
        $index = 0;
        $newline = false;
        foreach ($categories as $categorie) {
          $index++;
          if ($newline) {
            echo '<div class="row">';
            $newline = false;
        }
        echo  '<div class="col-3 p-0 d-flex justify-content-center ms-5 mb-5">';
        echo '<div class="card mb-3">';
        echo '<h1 class="card-title">' . $categorie->libelle . '</h1>';
        echo '<img src="asset/img/category/' . $categorie->image . '" class="card-img-top" alt="Placeholder Image" style="height : 25rem; width : 25rem">';
        echo '<div class="card-body">';
        
        echo '</div></div></div>';
        if ( $index % 3 == 0) {
          echo '</div>';
          $newline = true;
        }
      }
      ?>
    </div>
  </div>
</section>
  



 <?php
 include('footer.php');
 ?>
 
      
