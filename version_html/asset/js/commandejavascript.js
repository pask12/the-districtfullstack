document.getElementById("formulaire").addEventListener("submit",function(e) {
    e.preventDefault();

    let nom=document.getElementById("nom");
    let prenom=document.getElementById("prenom");
    let email=document.getElementById("email");
    let telephone=document.getElementById("telephone");
    let adresse=document.getElementById("adresse");

    let erreur1="";
    let erreur2="";
    let erreur3="";
    let erreur4="";
    let erreur5="";

    if(!nom.value){
        erreur1="Veuillez entrer votre nom";
    }

    if(!prenom.value){
        erreur2="Veuillez entrer votre prenom";
    }

    if(!email.value){
        erreur3="Veuillez entrer votre email";
    }

    if(!telephone.value){
        erreur4="Veuillez entrer votre telephone";
    }

    if(!adresse.value){
        erreur5="Veuillez entrer votre adresse";
    }

    document.getElementById("erreur1").textContent=erreur1;
    document.getElementById("erreur2").textContent=erreur2;
    document.getElementById("erreur3").textContent=erreur3;
    document.getElementById("erreur4").textContent=erreur4;
    document.getElementById("erreur5").textContent=erreur5;

   if(!erreur1 && !erreur2 && !erreur3 && !erreur4 && !erreur5) {
    alert('formulaire envoyé!');
   }
  
});
// function isValidLastName(lastname) {
//     return /^[a-zA-Z]+$/.test(lastname);} REGEX JS