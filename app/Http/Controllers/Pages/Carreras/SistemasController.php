<?php

namespace App\Http\Controllers\Pages\Carreras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SistemasController extends Controller
{
    public function index()
    {
        return view('pages.carreras.sistemas');
    }
}
