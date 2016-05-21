<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Library\myclass;

use Fpdf;

use DB;

class ReportController extends Controller
{
    public function getReport()
    {
    	//Fpdf::AddPage();
        //Fpdf::SetFont('Arial','B',16);
        //Fpdf::Cell(40,10,'Hello World!');
        //Fpdf::Ln();
        //$a = count(DB::table('movie')->pluck('MOVIE_ID'));
        //Fpdf::Cell(0, 10, 'we have'. $a.' movies');

        //Fpdf::Image('C:\xampp\htdocs\project\public\images\image1.jpg', 10, 6, 100);

        //Fpdf::Output();
        //exit;
    	$pdf = new myclass();

		Fpdf::AliasNbPages();
		Fpdf::AddPage();
		Fpdf::SetFont('Times','',12);

		$pdf->Header();

		$header = array('Country', 'Capital', 'Area (sq km)', 'Pop. (thousands)');
		for($i=0;$i<4;$i++)
			for($j=0;$j<4;$j++)
				$data[$i][$j] = $i;


		Fpdf::SetFont('Arial','',14);
		$pdf->BasicTable($header,$data);

		Fpdf::AddPage();
		$pdf->ImprovedTable($header,$data);

		Fpdf::AddPage();
		$pdf->FancyTable($header,$data);

		Fpdf::Output();
		exit;

    }
}
