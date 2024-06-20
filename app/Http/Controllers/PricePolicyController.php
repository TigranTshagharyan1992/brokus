<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricePolicyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = '';
        return view('home', compact('data'));
    }
}
