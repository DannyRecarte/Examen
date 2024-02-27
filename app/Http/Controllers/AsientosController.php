<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AsientosController extends Controller
{
    public function agregarAsientos(){
        return view('agregarAsiento');
    }

    public function editarAsientos(){
        return view('editarAsiento');
    }
}
