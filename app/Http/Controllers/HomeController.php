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
        $partners =  GetData::getData(['entity_parent' => PARTNERS],['entity_order' => 'DESC'],false,12);
        $members = GetData::getData(['entity_parent' => ABOUT],['entity_order' => 'DESC'],['entityData','entityDataLang'],8);

        return view('home', compact('data','partners','members'));
    }
}
