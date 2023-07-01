<?php  class Manager{
	protected function dbConnect(){
		$db = new PDO('mysql:host=localhost;dbname=mglsi_news', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;

	}
}
?>