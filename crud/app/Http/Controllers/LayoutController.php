<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
       /**
     * Retorna a página principal
     *
     * @return void
     */
    public function index()
    {
        return view('index');
    }

}
