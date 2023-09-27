<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class SpreadSheetC extends CI_Controller
{
	public function index()
	{
		// $spreadsheet = new Spreadsheet();
		// $activeWorksheet = $spreadsheet->getActiveSheet();
		// $activeWorksheet->setCellValue('A1', 'Hello World !');

		// $writer = new Xlsx($spreadsheet);
		// $writer->save('test.xlsx');

		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$spreadsheet = $reader->load('test.xlsx');
		$worksheet = $spreadsheet->getActiveSheet();
		$worksheet->setCellValue('A1', 'tes bang');
		$spreadsheet->save('test.xlsx');
		// $worksheet->save('test.xlsx');
		// $worksheet->
		// $worksheet->save('test.xlsx');

	}
}
