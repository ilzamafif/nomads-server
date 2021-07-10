<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class DetailController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.detail');
    }
}
