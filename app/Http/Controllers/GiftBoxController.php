<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiftBoxController extends Controller
{
    public function showClose()
    {
        return view('box.close');
    }

    public function showOpen()
    {
        return view('box.open');
    }
}
