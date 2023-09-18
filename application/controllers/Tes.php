<?php 

	class Tes extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->helper('my_helper');
			$this->load->library('DateLb');
		}

		public function index(){
			$angka = 123;
			$romawi = 'CXXIII';

			$data['res1'] = int_to_roman($angka);
			$data['res2'] = roman_to_int($romawi);
			$data['res3'] = $this->datelb->dateymd();
			$data['res4'] = $this->datelb->datedmy();
			$data['angka'] = $angka;
			$data['romawi'] = $romawi;


			return $this->load->view('index',$data);
			
		}


	}
?>
