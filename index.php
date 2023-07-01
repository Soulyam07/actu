<?php
require_once('controller/ArticleController.php');
require_once('controller/AdminController.php');
require_once('controller/CategorieController.php');


$articleController = new ArticleController();
$adminController = new AdminController();
$categorieController = new CategorieController();

$action = isset($_GET['action']) ? $_GET['action'] : 'home';
$role = isset($_SESSION['username']) ? $_SESSION['username'] : 'dirConnexion';


    switch($action){
        case 'dirConnexion':
            $adminController->SignIn();
            break;
        case 'connexion':
            $adminController->logIn($_POST['username'],$_POST['pwd']);
            break;
    
        case 'homeAdmin':
            if(isset($_SESSION['username']))
                $adminController->goHome();
            else
                $adminController->SignIn();
            break;
        case 'listArticle':
            if(isset($_SESSION['username']))
                $articleController->seeArticle($_SESSION['username']);
            else
                $adminController->SignIn();
        break;
        case 'editArticle':
            if(isset($_SESSION['username']))
                $articleController->doUp($_GET['id']);
            else
                $adminController->SignIn();
        break;
        case 'updateArticle':
            if(isset($_SESSION['username']))
                $articleController->updateArticle($_POST['titre'],$_POST['description'],$_POST['categorie'],$_POST['id']);
            else
                $adminController->SignIn();    
        break;
        case 'deleteArticle':
            if(isset($_SESSION['username']))
                $articleController->deleteArticle($_GET['id']);
            else
                $adminController->SignIn();            
            break;
        case 'seeOneArticle':
            if(isset($_SESSION['username']))
                $articleController->dirOneArticle($_GET['id']);
            else
                $adminController->SignIn();        
            break;
        case 'home':
            $articleController->seeLastArticle();
            break;
        case 'seeByCat':            
            $articleController->seeByCategorie($_GET['id']);
            break;
        case 'seeById':
            $articleController->seeById($_GET['id']);
            break;
        case 'addArticle':
            if(isset($_SESSION['username']))
                $articleController->dirArticle();
            else
                $adminController->SignIn(); 
            
        break;
        case 'createArticle':
            if(isset($_SESSION['username']))
                $articleController->addArticle($_POST['titre'],$_POST['description'],$_POST['categorie'],$_SESSION['username']);
            else
                $adminController->SignIn();             
        break;

        case 'listCategorie':
            if(isset($_SESSION['username']))
                $categorieController->dirCategorie($_SESSION['username']);
            else
                $adminController->SignIn(); 
        break;
        case 'addCategorie':
            if(isset($_SESSION['username']))
                $categorieController->doCreate();
            else
                $adminController->SignIn(); 
        break;
        case 'editCategorie':
            if(isset($_SESSION['username']))
                $categorieController->doUp($_GET['id']);
            else
                $adminController->SignIn();
            
        break;
        case 'seeOneCategorie':
            if(isset($_SESSION['username']))
                $categorieController->dirOneCategorie($_GET['id']);
            else
                $adminController->SignIn();
            
        break;
        case 'createCategorie':
            if(isset($_SESSION['username']))
                $categorieController->addCategorie($_POST['libelle'],$_SESSION['username']);
            else
                $adminController->SignIn();            
        break;
        case 'updateCategorie':
            if(isset($_SESSION['username']))
                $categorieController->updateCategorie($_POST['libelle'],$_POST['id']);
            else
                $adminController->SignIn();             
        break;
        case 'deleteCategorie':
            if(isset($_SESSION['username']))
                $categorieController->deleteCategorie($_GET['id']);
            else
                $adminController->SignIn(); 
            
        break;

        case 'deconnexion':
            session_destroy();
            $adminController->logUp();
        break;

        case 'profil':
            if(isset($_SESSION['username']))
                $adminController->seeProfil();
            else
                $adminController->SignIn(); 
        break;
        case 'editProfil':
            if(isset($_SESSION['username']))
                $adminController->doUp();
            else
                $adminController->SignIn(); 
        break;
        case 'updateProfil':
        if(isset($_SESSION['username']))
                $adminController->updateProfil($_POST['login'],$_POST['prenom'],$_POST['nom'],$_POST['password'],$_POST['id']);
            else
                $adminController->SignIn(); 
        break;
            
    }


?>