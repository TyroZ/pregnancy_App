<?php 
	
	class patientMarkers	{
		private $P_ID;
		private $FIRSTNAME;
		private $type;
		private $LASTNAME;
		private $LATITUDE;
		private $LONGITUDE;
		private $conn;
		private $tableName = "PATIENT";

		function setId($P_ID) { $this->P_ID = $P_ID; }
		function getId() { return $this->P_ID; }
		function setName($FIRSTNAME) { $this->FIRSTNAME = $FIRSTNAME; }
		function getName() { return $this->FIRSTNAME; }
		function setLat($LATITUDE) { $this->LATITUDE	 = $LATITUDE; }
		function getLat() { return $this->LATITUDE	; }
		function setLng($LONGITUDE) { $this->LONGITUDE = $LONGITUDE; }
		function getLng() { return $this->LONGITUDE; }
		function setlast($LASTNAME) { $this->LASTNAME = $LASTNAME; }
		function getlast() { return $this->LASTNAME; }
		
		
		public function __construct() {
			require_once('db/DbConnect.php');
			$conn = new DbConnect;
			$this->conn = $conn->connect();
		}

		public function getCollegesBlankLatLng() {
			$sql = "SELECT * FROM $this->tableName WHERE LATITUDE IS NULL AND LONGITUDE IS NULL";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getAllColleges() {
			$sql = "SELECT * FROM $this->tableName";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function updateCollegesWithLatLng() {
			$sql = "UPDATE $this->tableName SET LATITUDE = :LATITUDE , LONGITUDE = :LONGITUDE WHERE P_ID = :P_ID";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':LATITUDE	', $this->LATITUDE	);
			$stmt->bindParam(':LONGITUDE', $this->LONGITUDE);
			$stmt->bindParam(':P_ID', $this->P_ID);

			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		}
	}

?>