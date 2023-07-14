<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    /** RETURN HOME PAGE **/
    public function home()
    {
        return view('pages.home');
    }
}
