<?php 

    class Article{
        private $id;
        private $titre;
        private $contenu;
        private $dateCreation;

        private $dateModification;
        private $categorie;

        private $createdBy;

        public function __construct($id,$titre,$contenu,$categorie,$createdBy){
            $this -> id = $id;
            $this-> titre = $titre;
            $this-> contenu = $contenu;          
            $this-> categorie = $categorie;
        }
        

        public function getId(){
            return $this-> id;
        }
        public function getTitre(){
            return $this-> titre;
        }
        public function getContenu(){
            return $this->contenu;
        }
        public function getDateCreation(){
            return $this-> dateCreation;
        }
        public function getDateModification(){
            return $this-> dateModification;
        }
        public function getCategorie(){
            return $this-> categorie;
        }

        public function getCreatedBy(){
            return $this-> createdBy;
        }
        

    }

?>