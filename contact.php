<?php
include('header.php');
?>
<div class="parallax" style="background-image: url('image_parallax/pngegg.png')">
  <h1 class="text-page text-center mt-5">Le meilleur du fast food</h1>
     
     
  <!-- <section>
    <div class="container-fluid p-0 mt-5">
      <div class="col row justify-content-center">
      </div>
    </div>
<div class="d-flex justify-content-center mt-5">
  <form>
      <div class="row d-inline-flex p-2">
        <div class="col">
          <label for="inputAddress">Nom</label>
          <input type="text" class="form-control" placeholder="Nom">
          <div id="nomChamp" class="form-text text-danger">
            Ce champ est obligatoire.
          </div>
        </div>
        <div class="col">
          <label for="inputAddress">Prénom</label>
          <input type="text" class="form-control" placeholder="Prénom">
        </div>
      </div>
    <br>
    <div class="row d-inline-flex p-2">
      <div class="col">
        <label for="inputAddress">Email</label>
        <input type="text" class="form-control" placeholder="Email">
      </div>
      <div class="col">
        <label for="inputAddress">Téléphone</label>
        <input type="text" class="form-control" placeholder="Téléphone">
        <div id="nomChamp" class="form-text text-danger">
          Ce champ est obligatoire.
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Votre demande</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="d-flex justify-content-center">
      <button type="submit" class="envoi btn btn-primary mb-2">Envoyer</button>
    </div>
  </div>
  </form>
</div>
   </section> -->

   

   <section>
    <div class="container-fluid p-0 mt-5">
      <div class="col row justify-content-center">


        <div class="d-flex justify-content-center mt-5">
          <form class="contact" action="contacttraitement.php" method="POST" id="formulaire">
            <div class="row d-inline-flex p-2">
              <div class="col">
                <label for="inputAddress">Nom</label>
                <input type="text" class="form-control" placeholder="Nom" id="nom" name="nomContact">
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
                <input type="text" class="form-control" placeholder="Téléphone" id="telephone" name="phoneContact">
                <p id="erreur4" style="color: red;"></p>
                <!-- <div id="nomChamp" class="form-text text-danger">
                  Ce champ est obligatoire.
                </div> -->
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group">
                <label for="demande">Votre demande</label>
                <textarea class="form-control" id="demande" name="demandeContact" rows="3"></textarea>
                <p id="erreur6" style="color: red;"></p>
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="envoi btn btn-primary mb-2" id="bouton">Envoyer</button>
              </div>
            </div>
          </form>
        </div>
        </div>

<!-- Remove the container if you want to extend the Footer to full width. -->
<?php
include('footer.php');
?>