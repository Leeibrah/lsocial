<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BusinessController extends Controller
{
    public function getHome()
    {
        return view('panels.business.home');
    }
}
