<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Pegawai;
use App\Models\Dataps;
use App\Imports\PegawaiImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $users = Pegawai::all();
        //dd($users);
        // $dataps = DB::table('dataps')
        //      ->select(DB::raw('count(*) as dataps, STO'))
        //      ->groupBy('STO')
        //      ->get();
        $dataps = DB::select('select * from vw_rekap');
        return view('dashboard', compact('users','dataps'));
    }

    public function pegawaiimport(Request $request) {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataPegawai', $namaFile);
        DB::table('pegawais')->truncate();

        Excel::import(new PegawaiImport, public_path('/DataPegawai/'.$namaFile));
        return redirect('data');
    }
}
