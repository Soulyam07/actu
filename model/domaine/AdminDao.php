<?php
    require_once('Manager.php');
    require_once('model/dao/Admin.php');
    
    class AdminDao extends Manager{

        public function login($login,$password){
            $bd = $this->dbConnect();

            $req=$bd->prepare('SELECT COUNT(*) As nb FROM admin WHERE  login=? AND password=?');
            $req->execute(array($login,$password));
            $data=$req->fetch();
            if($data['nb']==1)
                return true;
            else
                return false;
        }

        public function getProfil($login){
            $bd = $this->dbConnect();

            $req=$bd->prepare('SELECT * FROM admin WHERE  login=?');
            $req->execute(array($login));
            $admin=$req->fetch();
            return $admin ;


        }

        public function updateProfil($login,$prenom,$nom,$password,$id){
            $bd = $this->dbConnect();
            $req = $bd->prepare("UPDATE admin SET login=?,prenom=?,nom=?,password=? WHERE id=?");
            $admin = $req->execute(array($login,$prenom,$nom,$password,$id));
            return $admin;

        }
       

        
    }

?>