<?php

namespace App\Http\Controllers;

use App\Helpers\GetData;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = GetData::getElement(CONTACT);
        return view('contact', compact('data'));
    }
}
