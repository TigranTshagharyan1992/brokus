<?php

namespace App\Http\Controllers;

use App\Helpers\GetData;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = GetData::getElement(PARTNERS);
        $partners =  GetData::getData(['entity_parent' => PARTNERS],['entity_order' => 'DESC']);
        return view('partners', compact('data','partners'));
    }
}
