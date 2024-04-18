$(document).ready(function()
{
 function verif()
 {
  let envoi=true;

  let prenom=$("#prenom").val();
  let nom =$('#nom').val();
  let email=$('#email').val();
  let telephone=$('#telephone').val();
  let adresse=$('#adresse').val();


  if(nom == "")
  {
    envoi=false;
    console.log("Le nom est obligatoire ");

    erreurnom = document.querySelector('#erreur1');
    erreurnom.textContent ='Le nom doit etre renseigné ';
  } else {
    erreurnom.textContent = ""
  }


  if(prenom == "")
  {
    envoi=false;
    console.log("le prénom doit être renseigné");
    erreurprenom = document.querySelector('#erreur2');
    erreurprenom.textContent ='Le prénom doit etre renseigné '; 
  }else {
    erreurprenom.textContent = ""
  }



  if(email == "")
  {
    envoi=false;
    console.log("L'email est obligatoire ");

    erreuremail = document.querySelector('#erreur3');
    erreuremail.textContent ="L'email doit etre renseigné ";
  }else {
    erreuremail.textContent = ""
  }




  if(telephone == "")
 {
  envoi=false;
  console.log("Le telephone est obligatoire");

  erreurtelephone = document.querySelector('#erreur4');
  erreurtelephone.textContent= "Le telephone est obligatoire";
 }else {
  erreurtelephone.textContent = ""
}



 if(adresse == "")
 {
  envoi=false;
  console.log("L'adresse est obligatoire");

  erreuradresse = document.querySelector('#erreur5');
  erreuradresse.textContent= "L'adresse est obligatoire";
 }else {
  erreuradresse.textContent = ""
}



  if(envoi==true)
  {
    document.forms[0].submit();
  }
  else
{
  return false;
}

 


 }
$("#bouton").click(function(e)
   
{
e.preventDefault();

verif();

});
})

