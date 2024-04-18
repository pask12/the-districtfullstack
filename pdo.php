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

?>