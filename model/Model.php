<?php
require_once('model/Manager.php');

class Model extends Manager{
    public function getLastArticle(){
        $bd =$this->dbConnect();
        $req = $bd->query("SELECT * FROM article join categorie on article.categorie=categorie.id ORDER BY article.id DESC LIMIT 3");   
        $articles = $req->fetchAll(PDO::FETCH_ASSOC);        
        return $articles;

    }

    public function getCategorie(){
        $bd =$this->dbConnect();
        $req = $bd->query("SELECT * FROM categorie");        
        $categories = $req->fetchAll(PDO::FETCH_ASSOC);        
        return $categories;
    }

    public function getArticleByCategorie($id){
        $bd =$this->dbConnect();
        $req = $bd->prepare("SELECT a.*, c.libelle FROM article a JOIN categorie c ON a.categorie = c.id WHERE c.id = ?");
        $req ->execute(array($id));
        $results = $req->fetchAll(PDO::FETCH_ASSOC);        
        return $results;
    }

    public function getArticleById($id){
        $bd =$this->dbConnect();
        $req = $bd->prepare("SELECT * FROM article join categorie on article.categorie=categorie.id WHERE article.id =?");
        $req ->execute(array($id));

        $results = $req->fetch(PDO::FETCH_ASSOC);        
        return $results;
    }


}


?>