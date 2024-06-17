<?php

namespace App\Http\Controllers;

use App\AdminModels\EntityData;
use App\Helpers\GetData;
use App\Helpers\Helper;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        $data = GetData::getElement(9);
        return view('welcome', compact('data'));
    }
}
