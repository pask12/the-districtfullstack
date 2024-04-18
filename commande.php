<?php
include('header.php');
?>
  <!-- <div class="img position-relative">
        <img src="images_the_district/bg.jpg" alt="images_the_district">
        <h1 class="position-absolute top-50 ">Le meilleur du fast food</h1>
      </div> -->

  <h1 class="text-page text-center mt-5">Le meilleur du fast food</h1>
  <div class="container-fluid p-0 mt-5 d-flex justify-content-center">
    <div class="col-md-3 mx-2 mb-4 d-flex justify-content-center">
      <div id="plat_commande">
        
      </div>
      <!-- <div class="card text" style="width: 20rem"> -->
        <!-- <img src="images_the_district/menu-burger.jpg" class="card-img-top" alt="Placeholder Image" height="300rem">
        <div class="card-body">
          <h5 class="card-title">HAMBURGER</h5>
          <p class="card-text mb-2">Burger composé d'un bun's du boulanger, deux steaks de 80g (origine française), de
            deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits</p>
          <div class="d-flex justify-content-center mb-4">
            <button type="button" class="envoi btn btn-primary mt-3">Commander</button>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid p-5 mt-5">
      <div class="col row justify-content-center">


        <div class="d-flex justify-content-center mt-5">
          <form  action="#" method="POST" id="formulaire">
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
  </section>
  
</body>
<!-- Remove the container if you want to extend the Footer to full width. -->
<?php
include('footer.php');
?>