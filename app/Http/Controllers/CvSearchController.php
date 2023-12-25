<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CvSearchController extends Controller
{
    public function findCv(): View
    {
        return \view('Frontend.findCv.index');
    }
}
