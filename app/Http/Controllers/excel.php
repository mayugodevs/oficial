<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

class excel extends Controller
{
    public function export() 
    {
        return FacadesExcel::download(new UsersExport, 'paise.xlsx');
        // return [
        //     (new DownloadExcel)->only('name', 'email'),
        // ];
    }
}
