document.getElementById("number").addEventListener("change", update_quantite);

function update_quantite(e) {
    prix = parseInt(document.getElementById("prix").value);
    totalChamp = document.getElementById("totalChamp");
    totalValue = (e.target.value * prix).toFixed(2)

    document.getElementById("quantite").value = e.target.value;
    
    totalChamp.innerText = "Total : " + totalValue + " €";
    totalForm = document.getElementById("total");
    totalForm.value = totalValue;
    

}

