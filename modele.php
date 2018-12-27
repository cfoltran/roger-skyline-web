<?php
	class BD {
		public $host;
		public $user;
		public $pwd;
		public $bd;
		public $co;

		public function __construct() {
			$this->host = "86.245.18.192:3306";
			$this->user = "usr";
			$this->pwd = "coucouhibou";
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
