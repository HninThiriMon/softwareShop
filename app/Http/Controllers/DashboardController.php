<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\ContinuousService;

class DashboardController extends Controller
{
    public function faq()
    {
        return view('Dashboard.faq');
    }

    public function home()
    {
        $continuousServices = ContinuousService::all();
        return view('Dashboard.home',compact('continuousServices'));
    }

    public function termsOfUse()
    {
        return view('Dashboard.terms-of-use');
    }

    public function privacyPolicy()
    {
        return view('Dashboard.privacy-policy');
    }
}
