<?php

require_once('model/domaine/Manager.php');
require_once('model/domaine/ArticleDao.php');
require_once('model/domaine/CategorieDao.php');


class CategorieController{
    private $categorieDao;
    private $articleDao;

    public function __construct() {
        // $this->userDao = new UserDao($db);
        $this->articleDao = new ArticleDao();
        $this->categorieDao = new CategorieDao();

    }

    public function dirCategorie($createdBy){
        $categories = $this->categorieDao->getMyCategorie($createdBy);
        require('view/admin/categorie/listCategorie.php');
    }

    public function dirOneCategorie($id){
        $categorie = $this->categorieDao->getOneCategorie($id);
        require('view/admin/categorie/detailsCategorie.php');
    }

    public function doCreate(){
        require('view/admin/categorie/create.php');
    }

    public function doUp($id){
        $categorie = $this->categorieDao->getOneCategorie($id);
        require('view/admin/categorie/update.php');
    }

    public function deleteCategorie($id){
        $categorie = $this->categorieDao->removeCategorie($id);
        if($categorie === false){
            die("Erreur lors de la suppression");
        }
        else{
            header('location:index.php?action=listCategorie');
        }
    }

    public function addCategorie($titre,$createdBy){
        $categories = $this->categorieDao->addCategorie($titre,$createdBy);
        if($categories === false){
            die("Erreur lors de l'ajoute");
        }
        else{
            header('location:index.php?action=listCategorie');
        }
    }

    public function updateCategorie($titre,$id){
        $categories = $this->categorieDao->updateCategorie($titre,$id);
        if($categories === false){
            die("Erreur lors de la modification");
        }
        else{
            header('location:index.php?action=listCategorie');
        }
    }



}

?>