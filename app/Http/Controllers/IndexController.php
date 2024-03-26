<?php

namespace App\Http\Controllers;

use App\Models\ActaEntrega;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {
        $data = ActaEntrega::with('actuacionFiscal', 'personalEntrega.unidad')->get();
        return view('dashboard', ['data' => $data]);
    }
}
