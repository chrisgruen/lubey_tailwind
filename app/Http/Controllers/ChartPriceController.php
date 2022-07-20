<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Imports\ChartsImport;

class ChartPriceController extends Controller
{
    public function index()
    {
        $import = new ChartsImport();
        $import->onlySheets('Daten-zusammengefasst');

        Excel::import($import, 'storage/EuwidPreise1.xlsx');
        return view('admin.chartprice');
    }
}
