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
        $categories = $categoryManager->selectOneById($id);
        return $this->twig->render('showCategory.html.twig', ['categories' => $categories]);
    }

    public function add()
    {
        if (!empty($_POST)) {
            // TODO : validations des valeurs saisies dans le form
            // création d'un nouvel objet Item et hydratation avec les données du formulaire
            $category = new Model\Category();
            $category->setName($_POST['name']);

            $categoryManager = new Model\CategoryManager($this->pdo);
            // l'objet $item hydraté est simplement envoyé en paramètre de insert()
            $categoryManager->insert($category);
            // si tout se passe bien, redirection
            header('Location: /categories');
            exit();
        }
        // le formulaire HTML est affiché (vue à créer)
        return $this->twig->render('addCategory.html.twig');
    }

    public function edit($id)
    {
        $categoryManager = new Model\CategoryManager($this->pdo);
        $category = $categoryManager->selectOneById($id);

        if (!empty($_POST))
        {
            $category->setName($_POST['name']);
            $categoryManager->update($category);
            header('Location: /categories');
            exit();
        }

        //Affiche le formulaire :
        return $this->twig->render('editCategory.html.twig', ['category' => $category]);

    }

    public function delete($id)
    {
        $categoryManager = new Model\CategoryManager($this->pdo);
        $category = $categoryManager->selectOneById($id);

        if (!empty($_POST))
        {
            $category->setName($_POST['name']);
            $categoryManager->delete($category);
            header('Location: /categories');
            exit();
        }

        //Affiche le formulaire :
        return $this->twig->render('deleteCategory.html.twig', ['category' => $category]);

    }
}