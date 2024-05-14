<?php

function connect() {
  $host = 'localhost';
  $dbname = 'thedistrict';
  $username = 'admin';
  $password = 'Afpa1234';
  try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connecté à $dbname sur $host avec succès.";
  } catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
  }
  return $conn;
}


function get_categories($conn) {
    $requete = $conn->query("SELECT * FROM categorie");
    $categories = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    return $categories;
}

function get_plats($conn) {
  $requete = $conn->query("SELECT * FROM plat");
  $plats = $requete->fetchAll(PDO::FETCH_OBJ);
  $requete->closeCursor();
  return $plats;
}

function get_plats_categorie($conn, $id_categorie) {
  $requete = $conn->prepare("SELECT * FROM plat WHERE id_categorie = :id");
  $requete->bindParam(":id", $id_categorie, PDO::PARAM_INT);
  $requete->execute();
  $plats = $requete->fetchAll(PDO::FETCH_OBJ);
  return $plats;
}


function get_plat($conn, $id) {
  $requete = $conn->prepare("SELECT * FROM plat WHERE id = :id_plat");
  $requete->bindParam(":id_plat", $id, PDO::PARAM_INT);
  $requete->execute();
  $plat = $requete->fetch(PDO::FETCH_OBJ);
  return $plat;
}

function get_platsvendus($conn){
  $requete = $conn->query("SELECT * FROM plat JOIN commande on commande.id_plat = plat.id ORDER BY commande.quantite DESC LIMIT 3");
  $plats = $requete->fetchAll(PDO::FETCH_OBJ);
  $requete->closeCursor();
  return $plats;
}


?>