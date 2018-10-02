<?php
namespace Controller;
use Model;
class CategoryController
{
    public function index()
    {
        $categoryManager = new Model\CategoryManager();
        $categories = $categoryManager->selectAllItems();
        require __DIR__ . '/../View/category.php';
    }

    public function show(int $id)
    {
        $categoryManager = new Model\CategoryManager();
        $category = $categoryManager->selectOneItem($id);

        require __DIR__ . '/../View/showCategory.php';
    }
}