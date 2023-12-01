<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Pegawai;
use App\Imports\PegawaiImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;


class PegawaiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $users = Pegawai::all();
        //dd($users);
        return view('dashboard', compact('users'));
    }

    public function pegawaiimport(Request $request) {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataPegawai', $namaFile);

        Excel::import(new PegawaiImport, public_path('/DataPegawai/'.$namaFile));
        return redirect('data');
    }
}
