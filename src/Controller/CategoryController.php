<?php
/**
 * Created by PhpStorm.
 * User: patricia
 * Date: 02/10/18
 * Time: 11:24
 */

namespace Controller;

use Model\CategoryManager;

class CategoryController
{

    public function index ()
    {
        $categoryManager=new CategoryManager();
        $categories=$categoryManager->selectAllCategories();

        require __DIR__ . '/../View/category.php';
    }

    public function show(int $id)
    {
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneCategory($id);

        require __DIR__ . '/../View/showCategory.php';
    }
}