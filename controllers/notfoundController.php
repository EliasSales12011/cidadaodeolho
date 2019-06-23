<?php 
	class notfoundController extends controller {

		public function index() {
			$data = array();

			$this->loadView('erro404', $data);
		} 

	}
?>
