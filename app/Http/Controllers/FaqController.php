<?php

namespace App\Http\Controllers;

use App\Helpers\GetData;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class FaqController extends Controller
{

    public function __invoke(Request $request) : View
    {
        $data = GetData::getElement(FAQ);

        $faqs = GetData::getData(['entity_parent' => FAQ], ['entity_order' => 'DESC']);

        return view('faq',compact('data','faqs'));
    }
}
