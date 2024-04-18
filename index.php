<?php
include('header.php');
?>
  <section>
      <div class="container-fluid p-0">
        <div class="col">
          <div class="image1">
            <img src="images_the_district/bg.jpg" alt="img" class="w-100">
            <h1 class="title-page position-absolute">Le meilleur du fast food</h1>
            <form class="search ">
              <!-- d-none d-md-flex"  -->
              <input id="recherche" class="text-over-recherche form-control me-2 d-flex" type="search" placeholder="Recherche" aria-label="Recherche">
              <div id="resultats" class="d-flex col-md-12"></div>
           <!--  <button class="btn btn-outline-success" type="submit">Recherche</button> -->
            </form>
          </div>
        </div>
      </div>
  
  </section>
  
    
<?php
include('footer.php');
?>