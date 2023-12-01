<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index() {
        $agency = Agency::all();
        return view("agency", compact('agency'));
    }
}
