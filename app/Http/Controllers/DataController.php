<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Dataps;
use App\Models\Pegawai;
use App\Imports\DatapsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $users = Pegawai::all();
        //dd($users);
        return view('dashboard', compact('users'));
    }

    public function datapsimport(Request $request) {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataPS', $namaFile);
        DB::table('dataps')->truncate();

        Excel::import(new DatapsImport, public_path('/DataPS/'.$namaFile));
        return redirect('data');
    }
}
