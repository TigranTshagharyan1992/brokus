<?php

namespace App\Http\Controllers;

use App\Helpers\GetData;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data =  GetData::getElement(SERVICES,['entityData','entityDataLang','entitySeo']);

        return view('services', compact('data'));
    }
}
