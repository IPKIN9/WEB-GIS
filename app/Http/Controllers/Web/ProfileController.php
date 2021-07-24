<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Model\ContactUs;
use App\Model\WebDescriptionModel;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = array(
            'web_desc' => WebDescriptionModel::first(),
            'contact_us' => ContactUs::first(),
        );
        return view('pages.Profile')->with('data', $data);
    }
}
