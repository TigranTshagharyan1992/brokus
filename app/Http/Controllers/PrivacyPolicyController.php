<?php

namespace App\Http\Controllers;

use App\Helpers\GetData;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) :View
    {

        $data = GetData::getElement(PRIVACY_POLICY);

        return view('privacyPolicy', ['data' => $data]);
    }
}
