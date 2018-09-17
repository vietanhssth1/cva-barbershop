<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class AdminPageController extends Controller
{
    public function getIndex(){
        //dd(Sentinel::getUser());
        return view('admin.page.homepage');
    }
}
