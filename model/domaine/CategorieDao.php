<?php

    require_once('Manager.php');
    require_once('model\dao\Categorie.php');
    class CategorieDao extends Manager{

        public function getCategories(){
            $bd = $this->dbConnect();
            $req = $bd->query("SELECT DISTINCT categorie.* FROM categorie INNER JOIN article ON categorie.id = article.categorie");
            
            $categories = $req->fetchAll(PDO::FETCH_ASSOC);
            // $result = [];
            foreach ($categories as $categorie) {
                $categorie = new Categorie($categorie['id'], $categorie['libelle']);
            }
            return $categories;
        }

        public function getAllCategories(){
            $bd = $this->dbConnect();
            $req = $bd->query("SELECT DISTINCT * FROM categorie");
            
            $categories = $req->fetchAll(PDO::FETCH_ASSOC);
            // $result = [];
            foreach ($categories as $categorie) {
                $categorie = new Categorie($categorie['id'], $categorie['libelle']);
            }
            return $categories;
        }
        
        public function getArticleByCategorie($id){
            $bd =$this->dbConnect();
            $req = $bd->prepare("SELECT a.*, c.libelle FROM article a JOIN categorie c ON a.categorie = c.id WHERE c.id = ?");
            $req ->execute(array($id));
            $articles = $req->fetchAll(PDO::FETCH_ASSOC);                    
            foreach ($articles as $article) {
                $article = new Article($article['id'], $article['titre'], $article['contenu'], $article['categorie'],$article['createdBy']);
            }
            return $articles;
        }

        public function getMyCategorie($createdBy){
            $bd = $this->dbConnect();
            $req = $bd->prepare("SELECT  * FROM categorie WHERE createdBy=?");
            $req->execute(array($createdBy));
            $categories = $req->fetchAll(PDO::FETCH_ASSOC);
            // $result = [];
            foreach ($categories as $categorie) {
                $categorie = new Categorie($categorie['id'], $categorie['libelle']);
            }
            return $categories;
        }

        public function getOneCategorie($id){
            $bd = $this->dbConnect();
            $req = $bd->prepare("SELECT * FROM categorie WHERE id=?");
            $req->execute(array($id));
            $categorie = $req->fetch(PDO::FETCH_ASSOC);           
            return $categorie;
        }

        public function addCategorie($libelle,$createdBy){
            $bd =$this->dbConnect();
            $req = $bd->prepare("INSERT INTO categorie(libelle,createdBy) VALUES(?,?)");
            
            $categorie = $req ->execute(array($libelle,$createdBy));
            return $categorie;   
        }

        public function removeCategorie($id){
            $bd = $this->dbConnect();
            $req = $bd->prepare("DELETE FROM categorie WHERE id=?");
            $categorie = $req->execute(array($id));
           return $categorie;
        }

        public function updateCategorie($libelle,$id){
            $bd = $this->dbConnect();
            $req = $bd->prepare("UPDATE categorie SET libelle=? WHERE id=?");
            
            $categorie = $req->execute(array($libelle,$id));
            return $categorie;

        }
    }

?>