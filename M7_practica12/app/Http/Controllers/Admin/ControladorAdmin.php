<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorAdmin extends Controller
{
    public function articulos(){
        return view('admin.mensajeAdmin') -> with(['text' => 'Benvinguts a la pàgina articles']);
    }

    public function clientes(){
        return view('admin.mensajeAdmin') -> with(['text' => 'Benvinguts a la pàgina clientes']);
    }

    public function facturacion(){
        return view('admin.mensajeAdmin') -> with(['text' => 'Benvinguts a la pàgina facturacion']);
    }

    public function contabilidad(){
        return view('admin.mensajeAdmin') -> with(['text' => 'Benvinguts a la pàgina contabilidad']);
    }

    
}
