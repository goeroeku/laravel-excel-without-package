<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Driver;

class DriverController extends Controller
{

    public function index(){
        $data = [
            [
                'id' => 1, 'name' => 'aic', 'address' => 'bms'
            ],
            [
                'id' => 2, 'name' => 'cia', 'address' => 'pwt'
            ]
        ];

        return view('index', compact('data'));
    }

    public function export(){
        $data = [
            [
                'id' => 1, 'name' => 'aic', 'address' => 'bms'
            ],
            [
                'id' => 2, 'name' => 'cia', 'address' => 'pwt'
            ]
        ];
        $filename = "driver_excel.xls";

        return view('excel', compact('data', 'filename'));
    }
}
