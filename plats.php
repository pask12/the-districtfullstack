<?php
include('header.php');

require('pdo.php');
?>

<!-- <div class="parallax" style="background-image: url('image_parallax/pngegg.png')"></div> -->
<div class="parallax"></div>

<section>
  <h1 class="title-page mt-5 mx-5">Le meilleur du fast food</h1>
      <div class="container-fluid mt-5">
        <div class="row justify-content-center">


         
          <!-- <div  id="plat" class="col-md-10 p-0 d-flex row justify-content-center"> -->
          <?php
        $connexion = connect();
        $plats = get_plats($connexion);
        // var_dump($plats);
        // die();
        $index = 0;
        $newline = false;
        foreach ($plats as $plat) {
          $index++;
          if ($newline) {
            echo '<div class="row justify-content-center card-custom">';
            $newline = false;
        }
        echo  '<div class="col-3 p-0 d-flex justify-content-center ms-5 mb-5">';
        echo '<div class="card mb-3">';
        echo '<h1 class="card-title">' . $plat->libelle . '</h1>';
        echo '<img src="images_the_district/food/' . $plat->image . '" class="card-img-top" alt="Placeholder Image" style="height : 25rem; width : 30rem;">';
        echo '<div class="card-body">';
        echo '<p class="card-text">' . $plat->description . '</p>'; 
        echo '<div class="text-center">';
        echo '<a href="commande.php?id=' . $plat->id . '" class="envoi btn btn-primary">Commander</a>';

        echo '</div></div></div></div>';
        if ( $index % 3 == 0) {
          echo '</div>';
          $newline = true;
        }
      }

      ?>
    </div>
  
    </div>
        
    

    <!-- <div class="col-md-3 mx-2 mb-4 d-flex justify-content-center">
      <div class="card text" style="width: 20rem">
        <img src="images_the_district/menu-burger.jpg" class="card-img-top" alt="Placeholder Image" height="300rem">
        <div class="card-body">
          <h5 class="card-title">HAMBURGER</h5>
          <p class="card-text mb-2">Burger composé d'un bun's du boulanger, deux steaks de 80g (origine française), de deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits</p>
          <div class="d-flex justify-content-center mb-4<br>">
            <button type="button" class="envoi btn btn-primary mt-3">Commander</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 mx-2 mb-4 p-0 d-flex justify-content-center">
      <div class="card text" style="width: 20rem">
        <img src="images_the_district/food/cheesburger.jpg" class="card-img-top" alt="Placeholder Image" height="300rem">
        <div class="card-body">
          <h5 class="card-title">CHEESBURGER</h5>
          <p class="card-text mb-2">Burger composé d’un bun’s du boulanger, de salade, oignons rouges, pickles, oignon confit, tomate, d’un steak d’origine Française, d’une tranche de cheddar affiné, et de notre sauce maison</p>
          <div class="d-flex justify-content-center mb-4">
            <a href="#" class="envoi btn btn-primary mt-3">Commander</a>
            
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 mx-2 mb-4 p-0 d-flex justify-content-center">
      <div class="card text" style="width: 20rem">
        <img src="images_the_district/food/pizza-margherita.jpg" class="card-img-top" alt="Placeholder Image" height="300rem">
        <div class="card-body">
          <h5 class="card-title">PIZZA MARGHERITA</h5>
          <p class="card-text mb-2">Une authentique pizza margarita, un classique de la cuisine italienne! Une pâte faite maison, une sauce tomate fraîche, de la mozzarella Fior di latte, du basilic, origan, ail, sucre, sel & poivre</p>
          <div class="d-flex justify-content-center mb-4">
            <a href="#" class="envoi btn btn-primary mt-3">Commander</a>
          </div>
        </div>
      </div>
    </div> -->
    <!-- <div class="container-fluid mt-5">
      <div class="col row"> -->
        
        <!-- <div class="col-md-3 mx-2 mb-4 p-0 d-flex justify-content-center">
      <div class="card text" style="width: 20rem">
        <img src="images_the_district/food/pizza-salmon.png" class="card-img-top" alt="Placeholder Image" height="300rem">
        <div class="card-body">
          <h5 class="card-title">PIZZA SAUMON</h5>
          <p class="card-text">Une pizza fine et croustillante garnie de crème mascarpone légèrement citronnée et de tranches de saumon fumé, le tout relevé de baies roses et de basilic frais</p>
          <div class="d-flex justify-content-center mb-4">
            <a href="#" class="envoi btn btn-primary mt-3">Commander</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 mx-2 mb-4 p-0 d-flex justify-content-center">
      <div class="card text" style="width: 20rem">
        <img src="images_the_district/food/spaghetti-legumes.jpg" class="card-img-top" alt="Placeholder Image" height="300rem">
        <div class="card-body">
          <h5 class="card-title">SPAGHETTI AUX LEGUMES</h5>
          <p class="card-text">Un plat de spaghetti au pesto de basilic et légumes poêlés, très parfumé et rapide</p>
          <div class="d-flex justify-content-center mb-4">
            <a href="#" class="envoi btn btn-primary mt-3">Commander</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 mx-2 mb-4 p-0 d-flex justify-content-center">
      <div class="card text" style="width: 20rem">
      <img src="images_the_district/food/tagliatelles-saumon.webp" class="card-img-top" alt="Placeholder Image" height="300rem">
      <div class="card-body">
        <h5 class="card-title">TAGLIATELLES AU SAUMON</h5>
        <p class="card-text">Découvrez notre recette délicieuse de tagliatelles au saumon frais et à la crème qui qui vous assure un véritable régal!</p>
        <div class="d-flex justify-content-center mb-4">
          <a href="#" class="envoi btn btn-primary mt-3">Commander</a>
        </div>
      </div>
    </div>
  </div> -->
  
  
  <!-- <div class="container-fluid mt-5">
    <div class="col row"> -->
      
      <!-- <div class="col-md-3 mx-2 mb-4 p-0 d-flex justify-content-center">
        <div class="card text" style="width: 20rem">
          <img src="images_the_district/food/buffalo-chicken.webp" class="card-img-top" alt="Placeholder Image" height="300rem">
          <div class="card-body">
            <h5 class="card-title">WRAP POULET</h5>
            <p class="card-text">Du bon filet de poulet mariné dans notre spécialité sucrée & épicée, enveloppé dans une tortilla blanche douce faite maison</p>
            <div class="d-flex justify-content-center mb-4">
              <a href="#" class="envoi btn btn-primary mt-3">Commander</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 mx-2 mb-4 p-0 d-flex justify-content-center">
      <div class="card text" style="width: 20rem">
        <img src="images_the_district/category/sandwich_cat.jpg" class="card-img-top" alt="Placeholder Image" height="300rem">
        <div class="card-body">
          <h5 class="card-title">SANDWICH</h5>
          <p class="card-text">Sandwich jambon emmental salade tomates</p>
          <div class="d-flex justify-content-center mb-4">
            <a href="#" class="envoi btn btn-primary mt-3">Commander</a>
          </div>
        </div>
      </div>
    </div>  
    <div class="col-md-3 mx-2 mb-4 p-0 d-flex justify-content-center">
      <div class="card text" style="width: 20rem">
        <img src="images_the_district/food/cesar_salad.jpg" class="card-img-top" alt="Placeholder Image" height="300rem">
        <div class="card-body">
          <h5 class="card-title">SALADE CESAR</h5>
          <p class="card-text">Une délicieuse salade Caesar (César) composée de filets de poulet grillés, de feuilles croquantes de salade romaine, de croutons à l'ail, de tomates cerise et surtout de sa fameuse sauce Caesar. Le tout agrémenté de copeaux de parmesan</p>
          <div class="d-flex justify-content-center mb-4">
            <a href="#" class="envoi btn btn-primary mt-3">Commander</a>
          </div>
        </div>
      </div>
    </div> -->
    
    <!-- <div class="container-fluid mt-5">
      <div class="col row"> -->
        
        
        <!-- <div class="col-md-3 mx-2 mb-4 p-0 d-flex justify-content-center">
          <div class="card text" style="width: 20rem">
            <img src="images_the_district/food/salad1.png" class="card-img-top" alt="Placeholder Image" height="300rem">
            <div class="card-body">
              <h5 class="card-title">SALADE VERTE</h5>
              <p class="card-text">Salade verte aux tomates, thon, anchois, concombre, poivron, oeufs, basilic</p>
              <div class="d-flex justify-content-center mb-4">
                <a href="#" class="envoi btn btn-primary mt-3">Commander</a>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-md-3 mx-2 mb-4 p-0 d-flex justify-content-center">
          <div class="card text" style="width: 20rem">
            <img src="image internet/depositphotos_303266386-stock-photo-aachen-germany-06-june-2015.webp" class="card-img-top" alt="Placeholder Image" height="300rem">
        <div class="card-body">
          <h5 class="card-title">ORANGINA</h5>
          <p class="card-text">Content of card 2</p>
          <div class="d-flex justify-content-center mb-4">
            <a href="#" class="envoi btn btn-primary mt-3">Commander</a>
          </div>
        </div>
      </div>
    </div> 
     <div class="col-md-3 mx-2 mb-4 p-0 d-flex justify-content-center">
       <div class="card text" style="width: 20rem">
        <img src="image internet/depositphotos_298386796-stock-photo-glass-of-carbonated-soft-drink.webp" class="card-img-top" alt="Placeholder Image"height="300rem">
        <div class="card-body">
          <h5 class="card-title">COCA COLA</h5>
          <p class="card-text">Content of card 2</p>
          <div class="d-flex justify-content-center mb-4">
            <a href="#" class="envoi btn btn-primary mt-3">Commander</a>
          </div>
        </div>
      </div>
    </div> -->
         
    <!-- <div class="container-fluid mt-5">
      <div class="col row"> -->

        
        <!-- <div class="col-md-3 mx-2 mb-4 p-0 d-flex justify-content-center">
      <div class="card text" style="width: 20rem">
        <img src="image internet/depositphotos_29481459-stock-photo-neapolitan-ice-cream.webp" class="card-img-top" alt="Placeholder Image" height="300rem">
        <div class="card-body">
          <h5 class="card-title">GLACE</h5>
          <p class="card-text">Glace à la vanille, fraise ou chocolat</p>
          <div class="d-flex justify-content-center mb-4">
            <a href="#" class="envoi btn btn-primary mt-3">Commander</a>
          </div>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mx-2 mb-4 p-0 d-flex justify-content-center">
      <div class="card text" style="width: 20rem">
        <img src="image internet/depositphotos_19965431-stock-photo-fresh-homemade-chocolate-brownie.webp" class="card-img-top" alt="Placeholder Image" height="300rem">
        <div class="card-body">
          <h5 class="card-title">BROWNIE</h5>
          <p class="card-text">Content of card 2</p>
          <div class="d-flex justify-content-center mb-4">
            <a href="#" class="envoi btn btn-primary mt-3">Commander</a>
          </div>
        </div>
      </div>
    </div>
    
       
  
  </div>
</div>  -->



</section>
<div class="parallax"></div>

<!-- Remove the container if you want to extend the Footer to full width. -->
<?php
 include('footer.php');
 ?>
