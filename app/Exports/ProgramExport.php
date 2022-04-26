<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Program;
class ProgramExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($date)
    {
        $this->date = $date;
    }
    public function collection()
    {
        $date = explode('-',$this->date);
        $start = $date[0];
        $a = explode('/',$start);
        $end = $date[1];
        $b = explode('/',$end);
        return Program::whereBetween('created_at',array($a[2].'-'.$a[0].'-'.$a[1].'%',$b[2].'-'.$b[0].'-'.$b[1].'%'))->get();
    }
}
