<?php 
    require_once('Manager.php');
    require_once('model\dao\Article.php');

    class ArticleDao extends Manager{
        
        public function getLastArticle(){
            $bd =$this->dbConnect();
            $req = $bd->query("SELECT article.*,categorie.libelle FROM article join categorie on article.categorie=categorie.id ORDER BY article.dateCreation DESC LIMIT 3");   
            $articles = $req->fetchAll(PDO::FETCH_ASSOC);        
            // $articles = [];
            foreach ($articles as $article) {
                $article = new Article($article['id'], $article['titre'], $article['contenu'], $article['categorie'],$article['createdBy']);
            }
            return $articles;
    
        }

        public function getMyArticle($createdBy){
            $bd =$this->dbConnect();
            $req = $bd->prepare("SELECT * FROM article WHERE article.createdBy=?");   
            $req->execute(array($createdBy));
            $articles = $req->fetchAll(PDO::FETCH_ASSOC);        
            // $articles = [];
            foreach ($articles as $article) {
                $article = new Article($article['id'], $article['titre'], $article['contenu'], $article['categorie'],$article['createdBy']);
            }
            return $articles;
    
        }


        public function getArticleByCategorie($id){
            $bd =$this->dbConnect();
            $req = $bd->prepare("SELECT a.*, c.libelle FROM article a JOIN categorie c ON a.categorie = c.id WHERE c.id = ?");
            $req ->execute(array($id));
            $article = $req->fetch(PDO::FETCH_ASSOC);
            
            return $article = new Article($article['id'], $article['titre'], $article['contenu'], $article['categorie'],$article['createdBy']);
        }


        public function getArticleById($id){
            $bd =$this->dbConnect();
            $req = $bd->prepare("SELECT a.*,c.libelle FROM article a JOIN categorie c ON a.categorie = c.id  WHERE a.id =?");
            $req ->execute(array($id));    
            $article= $req->fetch(PDO::FETCH_ASSOC);        
            return $article;
        }


        public function addArticle($titre,$contenu,$categorie,$createdBy){
            $bd =$this->dbConnect();
            $req = $bd->prepare("INSERT INTO article(titre,contenu,dateCreation,categorie,createdBy) VALUES(?,?,?,?,?)");
            $dateCreation = date('Y-m-d H:i:s');
            $article = $req ->execute(array($titre,$contenu,$dateCreation,$categorie,$createdBy));
            return $article;   
        }


        public function removeArticle($id){
            $bd = $this->dbConnect();
            $req = $bd->prepare("DELETE FROM article WHERE id=?");
            $article = $req->execute(array($id));
           return $article;
        }


        public function updateArticle($titre,$contenu,$categorie,$id){
            $bd = $this->dbConnect();
            $req = $bd->prepare("UPDATE article SET titre=?,contenu=?,categorie=?,dateModification=? WHERE id=?");
            $dateModification = date('Y-m-d H:i:s');
            $article = $req->execute(array($titre,$contenu,$categorie,$dateModification,$id));
            return $article;
        }
        
        

        
    }

?>