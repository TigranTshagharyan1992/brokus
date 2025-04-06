<?php

namespace App\Http\Controllers;

use App\AdminModels\Entity;
use App\Helpers\GetData;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data =  GetData::getElement(ABOUT);

        $members = Entity::where(['entity_parent' => ABOUT])
            ->with(['entityDataLang','entityData'])
            ->orderBy('entity_order', 'DESC')->get();

        return view('about', compact('data','members'));
    }
}
