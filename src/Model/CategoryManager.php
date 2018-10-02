<?php
/**
 * Created by PhpStorm.
 * User: patricia
 * Date: 02/10/18
 * Time: 11:18
 */

namespace Model;


// connection BDD (définir les constantes dans un fichier app.php qui sera inclus)
require __DIR__ . '/../../app/db.php';



class CategoryManager
{
    public function selectAllCategories(): array
    {
        $pdo = new \PDO(DSN, USER, PASS);

// requete SQL
        $query = "SELECT * FROM category";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }

    public function selectOneCategory(int $id) : array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM category WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        // contrairement à fetchAll(), fetch() ne renvoie qu'un seul résultat
        return $statement->fetch();
    }
}


?>