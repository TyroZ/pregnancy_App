<?php 
	class DbConnect {
		private $host = 'localhost';
		private $dbName = 'id9752012_pregnancybw';
		private $user = 'id9752012_pregnancybw';
		private $pass = 'pregnancybw';

		public function connect() {
			try {
				$conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->user, $this->pass);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch( PDOException $e) {
				echo 'Database Error: ' . $e->getMessage();
			}
		}
	}
 ?>