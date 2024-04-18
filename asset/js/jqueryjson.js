$(document).ready(function(){
  



  $.get('fichier.json', function (data) {



    let categorie = $('#categorie');

    for (i =0; i< data.categorie.length;i++) {

      // for (i =0; i<8;i++) {

      let element = document.createElement('div');
      element.className = "col-3 p-0 d-flex justify-content-center ms-5 mb-5 "

      let cardcategorie = document.createElement('div');
      cardcategorie.className = "card ";

      let imgcategorie = document.createElement('img');
      imgcategorie.src = data.categorie[i].image
      imgcategorie.style = "height : 30rem; width : 25rem"


      let libelle = document.createElement('h1');
      libelle.textContent = data.categorie[i].libelle;

      
      let lien = document.createElement('a');
      lien.href ="platcategorie.php?id=" +data.categorie[i].id_categorie;
      

      categorie.append(element);
      element.append(lien);
      cardcategorie.append(libelle, imgcategorie)

      lien.append(cardcategorie)
    }
    
    let plat = $('#plat');
  
    for (i =0; i < data.plat.length;i++) {
  
        // for (i =0; i<10;i++) {
  
        let element = document.createElement('div');
        element.className = "col-3 p-0 d-flex justify-content-center ms-5 me-5 mb-5 "

  
        let cardcategorie = document.createElement('div');
        cardcategorie.className = "card";
  
        let imgcategorie = document.createElement('img');
        imgcategorie.src = data.plat[i].image
        imgcategorie.className = "card-img-top ";
        imgcategorie.style = "height : 20rem; width : 25rem"
  
        /* let cardbody = document.createElement('div');
        cardcat.className = "card-body"; */

        let libelle = document.createElement('h3');
        libelle.textContent = data.plat[i].libelle;
        libelle.className = "card-title p-3 pb-0";

        let description = document.createElement('p');
        description.textContent = data.plat[i].description;
        description.className = "card-text p-3 pt-0";

        let commander = document.createElement('a');
        commander.textContent = "commander";
        commander.className = "btn btn-primary w-50 mx-auto mb-4";
        commander.href = "commande.php?id=" + data.plat[i].id_plat;
        
        plat.append(element);
        element.append(cardcategorie);
        cardcategorie.append(imgcategorie, libelle, description, commander);
    }

//plat par catégorie//

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const categoryId = urlParams.get('id');
    console.log(categoryId);
 

    let plat_cat = $('#plat_categorie')

    const plats = data.plat.filter(plat => plat.id_categorie == categoryId);

    plats.forEach(plat => {
  
        let element = document.createElement('div'); 
        element.className = "col-3 p-0 d-flex justify-content-center mb-5 me-5 "

        let cardcategorie = document.createElement('div');
        cardcategorie.className = "card ";
 
        let imgcategorie = document.createElement('img');
        imgcategorie.src = plat.image
        imgcategorie.className = "card-img-top ";
        imgcategorie.style = "height : 20rem; width : 30rem"

        let libelle = document.createElement('h3');
        libelle.textContent = plat.libelle ;
        libelle.className = "card-title p-3 pb-0";

        let description = document.createElement('p');
        description.textContent = plat.description;
        description.className = "card-text p-3 pt-0";

        let commander = document.createElement('a');
        commander.textContent = "commander";
        commander.className = "btn btn-primary w-50 mx-auto mb-4";
        commander.href = "commande.php?id=" + plat.id_plat;

        plat_cat.append(element);
        element.append(cardcategorie);
        cardcategorie.append(imgcategorie, libelle, description, commander);


    });
    /* pour la barre de recherche */

    // let resultats = $('#resultats');

    // $("#recherche").on("keyup", function()

    // {
    //     let motCle = document.getElementById("recherche").value;
    //     console.log(motCle);
    //     let plats = jQuery.grep(data.plat, function(n, i) {
    //       if (n.libelle.indexOf(motCle) != -1 || n.description.indexOf(motCle) != -1) {
    //         return n;
    //       }
    //     });

    //     plats.forEach(plat => {
    //       let element = document.createElement('div'); 
    //       element.className = "col-3 p-0 d-flex justify-content-center mb-5 me-5 "

    //       let cardcategorie = document.createElement('div');
    //       cardcategorie.className = "card ";
  
    //       let imgcategorie = document.createElement('img');
    //       imgcategorie.src = plat.image
    //       imgcategorie.className = "card-img-top ";
    //       imgcategorie.style = "height : 20rem; width : 30rem"

    //       let libelle = document.createElement('h3');
    //       libelle.textContent = plat.libelle ;
    //       libelle.className = "card-title p-3 pb-0";

    //       let description = document.createElement('p');
    //       description.textContent = plat.description;
    //       description.className = "card-text p-3 pt-0";

    //       let commander = document.createElement('a');
    //       commander.textContent = "commander";
    //       commander.className = "btn btn-primary w-50 mx-auto mb-4";
    //       commander.href = "commande.html?id=" + plat.id_plat;

    //       resultats.append(element);
    //       element.append(cardcategorie);
    //       cardcategorie.append(imgcategorie, libelle, description, commander);



            const motcle = document.querySelector('#recherche')
            console.log(motcle);  
            motcle.addEventListener('keyup' , function() {
              const inputValue = motcle.value.toLowerCase();


              $.get('fichier.json', function (data) {

                const plats = data.plat.filter(plat => plat.libelle.toLowerCase().includes(inputValue))
    
                console.log(plats);
    
                const list = document.querySelector('#resultats')
                list.className = '' ;
                list.innerHTML = '';


              plats.forEach(plat => {


                let element = document.createElement('div'); 
                element.className = "col-12 p-0 d-flex justify-content-center mb-2"
      
                let cardcategorie = document.createElement('div');
                cardcategorie.className = "card";
        
                let imgcategorie = document.createElement('img');
                imgcategorie.src = plat.image
                imgcategorie.className = "card-img-top";
                imgcategorie.style = "height : 15rem; width : 20rem "
      
                let libelle = document.createElement('h3');
                libelle.textContent = plat.libelle ;
                libelle.className = "card-title px-1 pb-0 fs-5";
      
           /*       let description = document.createElement('p');
                description.textContent = plat.description;
                description.className = "card-text p-3 pt-0";  */
      
          /*       let commander = document.createElement('a');
                commander.textContent = "commander";
                commander.className = "btn btn-primary w-50 mx-auto mb-4";
                commander.href = "commande.html?id=" + plat.id_plat; */
      
                list.append(element);
                element.append(cardcategorie);
                cardcategorie.append(imgcategorie, libelle, /* description , */ /* commander */);

            });

            
        
      
        });
      
        
      });
  });
});
 
