<?php

namespace App\Http\Controllers;

use App\Helpers\GetData;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $data =  GetData::getElement(HOME,['entityData','entityDataLang','entitySeo']);
        $partners =  GetData::getData(['entity_parent' => PARTNERS],['entity_order' => 'DESC']);
        return view('home', compact('data','partners'));
    }
}
