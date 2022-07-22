<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Imports\ChartsImport;
use App\Models\ChartData;

class ChartPriceController extends Controller
{

    public function getFile()
    {
        return view('admin.chartprice');
    }


    public function fileImport(Request $request)
    {

        $extensions = array("xls","xlsx");

        $this->validate($request, [
            'formFile' => 'required|mimes:xlsx, csv, xls|max:2048'
        ]);

        ChartData::truncate();

        $import = new ChartsImport();
        $import->onlySheets('Daten-zusammengefasst');


        Excel::import($import, $request->file('formFile')->store('temp'));
        return back()->with('success', 'Chart-Tabelle wurde aktualisiert'); ;
    }
}
