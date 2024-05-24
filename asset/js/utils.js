document.getElementById("number").addEventListener("change", update_quantite);

function update_quantite(e) {
    prix = parseInt(document.getElementById("prix").value);
    total = document.getElementById("total");
    total.innerText = "Total : " + (e.target.value * prix).toFixed(2) + " €";
}
