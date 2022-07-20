<?php
namespace App\Imports;

use DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\ChartFamiliy;
use App\Models\ChartData;

class DataChartImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        if ($rows) {
            DB::table('chart_datas')->delete();
        }

        $dateArray = [];
        foreach ($rows as $row_key => $row)
        {
            // get date entries

            if ($row_key == 0) {
                foreach ($row as $col_key => $col_date) {
                    if ($col_date != Null && is_int($col_date)) {
                        $dateExcel = intval($col_date);
                        $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($dateExcel)->format('Y-m-d');
                        $dateArray[$col_key] = ($date);
                    }
                }
            }

            if ($row_key  > 1) {
                $family = $row[0];
                $existChartFamily = ChartFamiliy::where('name', $family)->first();

                if ($existChartFamily != Null) {
                    $chart_families_id = $existChartFamily->id;
                    for ($i = 1; $i <= $col_key;  $i++) {
                        if (!empty($row[$i])) {
                            if ($i%2 == 0) {
                                $entry = new ChartData();
                                $entry->chart_family_id = $chart_families_id;
                                $entry->date = $dateArray[$i-1];
                                $entry->low = $row[$i-1];
                                $entry->high = $row[$i];
                                $entry->save();
                            }
                        }
                    }
                }
            }
        }
    }
}
