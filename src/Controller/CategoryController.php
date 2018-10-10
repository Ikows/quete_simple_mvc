<?php
namespace Controller;
use Model;

class CategoryController extends AbstractController
{

    public function index()
    {
        $categoryManager = new Model\CategoryManager($this->pdo);
        $categories = $categoryManager->selectAll();
        return $this->twig->render('category.html.twig', ['categories' => $categories]);
    }

    public function show(int $id)
    {
        $categoryManager = new Model\CategoryManager($this->pdo);
        $category = $categoryManager->selectOneById($id);
        return $this->twig->render('showCategory.html.twig', ['category' => $category]);
    }

    public function add()
    {
        if (!empty($_POST)) {
            // TODO : validations des valeurs saisies dans le form
            // création d'un nouvel objet Item et hydratation avec les données du formulaire
            $category = new Model\Category();
            $category->setName($_POST['title']);

            $categoryManager = new Model\CategoryManager($this->pdo);
            // l'objet $item hydraté est simplement envoyé en paramètre de insert()
            $categoryManager->insert($category);
            // si tout se passe bien, redirection
            header('Location: /categories');
            exit();
        }
        // le formulaire HTML est affiché (vue à créer)
        return $this->twig->render('add.html.twig');
    }

    public function edit()
    {

    }
}