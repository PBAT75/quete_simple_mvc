<?php
// connection BDD (définir les constantes dans un fichier app.php qui sera inclus)
require __DIR__ .'/../../app/db.php';


function selectAllItems():array
{
$pdo = new \PDO(DSN, USER, PASS);

// requete SQL
$query = "SELECT * FROM item";
$res = $pdo->query($query);
return $res->fetchAll();
}


?>