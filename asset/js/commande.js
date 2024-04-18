$.get('fichier.json', function (data) {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const plat_id = urlParams.get('id');
    console.log(plat_id);
 

    let plat_commande = $('#plat_commande')

    const plat = data.plat.filter(plat => plat.id_plat == plat_id);

    plat.forEach(plat => {
  
        let element = document.createElement('div'); 
        element.className = "col-10  d-flex justify-content-center mx-auto "

        let cardcategorie = document.createElement('div');
        cardcategorie.className = "card ";
 
        let imgcategorie = document.createElement('img');
        imgcategorie.src = plat.image
        imgcategorie.className = "card-img-top ";
       

        let libelle = document.createElement('h3');
        libelle.textContent = plat.libelle ;
        libelle.className = "card-title p-3 pb-0";

        let description = document.createElement('p');
        description.textContent = plat.description;
        description.className = "card-text p-3 pt-0";

        // let commander = document.createElement('a');
        // commander.textContent = "commander";
        // commander.className = "btn btn-primary w-50 mx-auto mb-4";
        // commander.href = "commande.html?id=" + plat.id_plat;

        let prix = document.createElement('p');
        prix.textContent = "prix : " +plat.prix + " €";
        prix.className = "p-3 justify-content-center d-flex";
        

        plat_commande.append(element);
        element.append(cardcategorie);
        cardcategorie.append(imgcategorie, libelle, description, prix);


    });
})