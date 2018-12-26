<?php
	class BD {
		public $host;
		public $user;
		public $pwd;
		public $bd;
		public $co;

		public function __construct() {
			$this->host = "90.127.201.87";
			$this->user = "remote";
			$this->pwd = "Wpkxmy7f!@#$";
			$this->bd = "hubDB";
		}
		public function connexion() {
			$this->co = mysqli_connect($this->host,$this->user,$this->pwd,$this->bd) or die("Erreur de connexion");
			return $this->co;
		}

		public function deconnexion() {
			$this->co->deconnexion();
			mysqli_close($this->co);
		}
	}
?>
