<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '../vendor/autoload.php');


class Tweet extends CI_Controller {

	function __construct() {
        parent::__construct();
	
    }
		
	


public function hashtags()
{
	$inputFileType = 'Xlsx';

	$filePath= "./public/sample.xlsx";
	$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
	$excel = $reader->load($filePath);

	$excel=$reader->load($filePath); // set the excel file name here   
	$excel->setActiveSheetIndexByName('hashtag');

	$hashtag = $excel->getActiveSheet()->toArray();

return $hashtag;
}

public function say(){
	
	$inputFileType = 'Xlsx';

	$filePath= "./public/sample.xlsx";
	$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
	
	$excel = $reader->load($filePath);

	$excel=$reader->load($filePath); // set the excel file name here   
	$excel->setActiveSheetIndexByName('say');
	$say = $excel->getActiveSheet()->toArray();
	$sayac=intval($say[0][0])+1;

	$excel->getActiveSheet()->getCell('A1')->setValue($sayac);
	$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($excel);
$writer->save($filePath);
	
return $sayac;
}

	public function index()
	{

		$inputFileType = 'Xlsx';

		$filePath= "./public/sample.xlsx";
		$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
		$excel = $reader->load($filePath);

		$excel=$reader->load($filePath); // set the excel file name here   
		$excel->setActiveSheetIndexByName('tweets');

		$sample = $excel->getActiveSheet()->toArray();
		//$count= $excel->getActiveSheet()->getHighestRow();
		
$data=Array(
"data_excell" => $sample,
"hashtag"=> $this->hashtags(),
"tweetsay"=> $this->say()


);
		
		$this->load->view('tweets',$data);
	}
}
