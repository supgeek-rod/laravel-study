<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        echo 'test-styleci-rule' . 'binary_operator_spaces';

        dd();
    }
}
