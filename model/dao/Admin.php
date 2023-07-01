<?php
    class Admin{
        private  $id;
        private  $login;
        private  $password;

        public function __construct($id,$login,$password){
            $this -> id = $id;
            $this-> login= $login ; 
            $this-> password=$password;
                    
        }

        
        
    

	public function getLogin() {
		return $this->login;
	}
	
	
	public function setLogin($login): self {
		$this->login = $login;
		return $this;
	}

	
	public function getPassword() {
		return $this->password;
	}
	
	
	public function setPassword($password): self {
		$this->password = $password;
		return $this;
	}
}


?>