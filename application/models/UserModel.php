<?php 
	class UserModel extends CI_Model {
		protected $table = 'users';
		protected $primary = "id";
		
		public function __construct(){
			parent::__construct();
			$this->load->database();

		}

		public function get(){
			$query = $this->db->get($this->table);
			return $query->row();
		}


	}
