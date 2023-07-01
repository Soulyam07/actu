<?php

require_once('model/domaine/Manager.php');
require_once('model/domaine/ArticleDao.php');
require_once('model/domaine/CategorieDao.php');
// require_once('model/dao/Article.php');



class ArticleController{

    private $articleDao;
    private $categorieDao;

    public function __construct() {
        // $this->userDao = new UserDao($db);
        $this->articleDao = new ArticleDao();
        $this->categorieDao = new CategorieDao();

    }

    public function seeLastArticle(){
        // $model = new Model();
        // $articleDao = new ArticleDao();
        // $categorieDao = new CategorieDao();

        $articles = $this->articleDao->getLastArticle();
        $categories = $this->categorieDao->getCategories();
        require('view/home.php');
    }
    public function seeByCategorie($id){
        // $model = new Model();
        // $articleDao = new ArticleDao();
        // $categorieDao = new CategorieDao();

        $articles = $this->categorieDao->getArticleByCategorie($id);
        $categories = $this->categorieDao->getCategories();
        require('view/showByCategorie.php');
    
    }
    public function seeById($id){
        // $articleDao = new ArticleDao();
        // $categorieDao = new CategorieDao();

        $article = $this->articleDao->getArticleById($id);
        $categories = $this->categorieDao->getCategories();
        require('view/showArticle.php');
    
    }

    public function seeArticle($createdBy){
        $articles = $this->articleDao->getMyArticle($createdBy);
        require('view/admin/article/listArticle.php');

    }

    public function dirArticle(){
        // $article = $this->articleDao->getArticleById($id);
        $categories = $this->categorieDao->getAllCategories();
        require('view/admin/article/create.php');
    }

    public function addArticle($titre,$contenu,$categorie,$createdBy){
        $articles = $this->articleDao->addArticle($titre,$contenu,$categorie,$createdBy);

        if($articles === false){
            die ("Erreur lors de l'ajout");
        }
        else{
            header("Location: index.php?action=listArticle");
        }
    }

    public function updateArticle($titre,$contenu,$categorie,$id){
        $articles = $this->articleDao->updateArticle($titre,$contenu,$categorie,$id);

        if($articles === false){
            die ("Erreur lors de l'ajout");
        }
        else{
            header("Location: index.php?action=listArticle");
        }
    }

    public function deleteArticle($id){
        $articles = $this->articleDao->removeArticle($id);

        if($articles === false){
            die ("Erreur lors de l'ajout");
        }
        else{
            header("Location: index.php?action=listArticle");
        }
    }


    public function doUp($id){
        $article = $this->articleDao->getArticleById($id);
        $categories = $this->categorieDao->getAllCategories(); 
        require('view/admin/article/edit.php');
    }
    

    public function dirOneArticle($id){
        $article = $this->articleDao->getArticleById($id);
        // $categories = $this->categorieDao->getAllCategories(); 
        require('view/admin/article/detailsArticle.php');
    }

    



}


?>