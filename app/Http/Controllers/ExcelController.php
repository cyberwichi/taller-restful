<?php

namespace App\Http\Controllers;
use App\Reparations;
use Maatwebsite\Excel\Facades\Excel;


use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function index(){
		Excel::create('Laravel Excel', function($excel){
			
			$excel->('Reparaciones', function($sheet){
				$reparaciones=Reparations::all();
				$sheet->fromArray($reparaciones);
 
            });
        })->export('xls');
	}
	
	
}
