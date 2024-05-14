<?php
include('header.php');

require('pdo.php');
?>
<div class="parallax" style="background-image: url('image_parallax/pngegg.png')">

      <h1 class="title-page mt-5 mx-5 ">Le meilleur du fast food</h1>
      <section>
          <div class="container-fluid mt-5">
            <div class="col row justify-content-center">
            <?php
        $conn = connect();
        $plat = get_plat($conn, $_GET['id']);
        // var_dump($plat);
        // die();
        echo '<div class="row justify-content-center p-0">';
        echo  '<div class="col-3 p-0 d-flex mb-5">';
        echo '<div class="card mb-3 w-5">';
        echo '<div class="card-body">';        
        echo '<h5 class="card-title">' . $plat->libelle . '</h5>';
        echo '<img src="images_the_district/food/' . $plat->image . '" class="card-img-top" alt="Placeholder Image" style="height : 25rem; width : 28rem;">';
        echo '<p class="card-text">' . $plat->description . '</p>'; 
        echo '<div class="text-center">';
        echo '<p class="card-text">' . $plat->prix . " €" . '</p>';
        
        echo '</div></div></div></div>';
    
      ?>
  <section>
    <div class="container-fluid p-0 mt-5">
      <div class="col row justify-content-center">


        <div class="d-flex justify-content-center mt-5">
          <form action="#" method="POST" id="formulaire">
            <div class="row d-inline-flex p-2">
              <div class="col">
                <label for="inputAddress">Nom</label>
                <input type="text" class="form-control" placeholder="Nom" id="nom">
                <!-- <div id="nomChamp" class="form-text text-danger">
                  Ce champ est obligatoire. -->
                  <p id="erreur1" style="color: red;"></p>
                </div>
              <!-- </div> -->
              <div class="col">
                <label for="inputAddress">Prénom</label>
                <input type="text" class="form-control" placeholder="Prénom" id="prenom">
                <p id="erreur2" style="color: red;"></p>
              </div>
            </div>
            <br>
            <div class="row d-inline-flex p-2">
              <div class="col">
                <label for="inputAddress">Email</label>
                <input type="text" class="form-control" placeholder="Email" id="email">
                <p id="erreur3" style="color: red;"></p>
              </div>
              <div class="col">
                <label for="inputAddress">Téléphone</label>
                <input type="text" class="form-control" placeholder="Téléphone" id="telephone">
                <p id="erreur4" style="color: red;"></p>
                <!-- <div id="nomChamp" class="form-text text-danger">
                  Ce champ est obligatoire.
                </div> -->
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Votre adresse</label>
                <textarea class="form-control" id="adresse" rows="3"></textarea>
                <p id="erreur5" style="color: red;"></p>
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="envoi btn btn-primary mb-2" id="bouton">Envoyer</button>
              </div>
            </div>
          </form>
        </div>
        </div>
  </section>



<?php
include('footer.php');
?>