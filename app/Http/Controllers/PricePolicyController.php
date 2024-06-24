<?php

namespace App\Http\Controllers;

use App\Helpers\GetData;
use Illuminate\Http\Request;

class PricePolicyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $data =  GetData::getElement(PRICE_POLICY,['entityData','entityDataLang','entitySeo']);

        return view('pricePolicy', compact('data'));
    }
}
