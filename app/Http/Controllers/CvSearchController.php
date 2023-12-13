<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CvSearchController extends Controller
{
    public function findCv(): View
    {
        return \view('Frontend.findCv.index');
    }
}
