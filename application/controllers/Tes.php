<?php

use Dompdf\Dompdf;
use Dompdf\Options;

class Tes extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("UserModel");
		$this->load->library('Pdf');
	}

	function index()
	{
		$path = base_url('public/q.jpg');
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

		$options = new Options();
		$options->setDefaultPaperSize([0,0,520,286.5]);
		$dompdf = new Dompdf($options);

		$user = $this->UserModel->get();

		$data = array(	
			"profile_picture" => $base64,
			"identity" => $user
		);

		$dompdf->loadHtml($this->load->view('card', $data, true));

		$dompdf->render();
		$dompdf->stream('tes.pdf',[
			'Attachment' => 0
		]);
	}
}
