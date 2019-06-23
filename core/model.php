<?php 
	class model {

		protected $pdo;

		public function __construct() {
			global $pdo;
			return $this->pdo = $pdo;
		}

	}
?>