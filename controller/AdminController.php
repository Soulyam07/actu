<?php 
require_once('model/domaine/Manager.php');
require_once('model/domaine/ArticleDao.php');
require_once('model/domaine/CategorieDao.php');
require_once('model/domaine/AdminDao.php');
session_start();

class AdminController{
    private $articleDao;
    private $categorieDao;
    private $adminDao;

    public function __construct() {
        // $this->userDao = new UserDao($db);
        $this->articleDao = new ArticleDao();
        $this->categorieDao = new CategorieDao();
        $this->adminDao = new AdminDao();

    }

    public function SignIn(){
        require('view/admin/connexion.php');
    }

    public function logIn($username,$pwd){
        $adminDao = $this->adminDao->login($username,$pwd);
        if($adminDao === false){
            $errorMessage = 'Invalid username or password';
            header('location:index.php?action=dirConnexion');
        }else{
            $_SESSION['username']=$username;
            $_SESSION['pwd'] =$pwd;

            header('location:index.php?action=homeAdmin');
            exit();
        }
    }

    public function seeProfil(){
        $admin = $this->adminDao->getProfil($_SESSION['username']);
        require('view/admin/profil.php');
    }

    public function goHome(){
        $articles = $this->articleDao->getLastArticle();
        require('view/admin/homeAdmin.php');
    }

    public function logUp(){
        
        header('location:index.php?action=dirConnexion');
      
    }

    public function doUp(){
        $admin = $this->adminDao->getProfil($_SESSION['username']);
        require('view/admin/update.php');
    }

    public function updateProfil($login,$prenom,$nom,$password,$id){
        $admin = $this->adminDao->updateProfil($login,$prenom,$nom,$password,$id);
        if($admin === false){
            echo "Erreur lors de la modification du profil";
        }else{
            header('location:index.php?action=profil');
        }
    }

    

    // public function goAddArticle(){
    //     require('view/admin/article/addArticle.php');
    // }
}

?>