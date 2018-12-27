<?php
	class Member {
		public $co;
		public $id;
		public $user;
		public $pwd;

		function __construct() {
			if(func_num_args() == 3) {
				$list_arg = func_get_args();
				$this->co = $list_arg[0];
				$this->user = $list_arg[1];
				$this->pwd = $list_arg[2];
		}
	}
	
		function modif_mdepasse($mdp) {
			$this->pwd = $mdp;
			mysqli_query("UPDATE USERS SET pwd = '$this->pwd' WHERE id = '$this->id'");
		}

		function connexion() {
			session_start();
		}

		function deconnexion() {
			session_destroy();
		}
	}
?>
