<?php

namespace App\Http\Controllers;

use App\Education;
use App\Language;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GeneralController extends Controller
{
    public function index(): View
    {
        return \view('Frontend.index');
    }
    public function about(): View
    {
        return \view('Frontend.about');
    }
    public function projects(): View
    {
        return \view('Frontend.projects');
    }

    public function contact(): View
    {
        return \view('Frontend.contact');
    }

    public function cv(): View
    {
        $education = Education::all();
        $languages = Language::all();

        return \view('Frontend.cv', compact('education', 'languages'));
    }

    public function cv_upload(Request $request): View
    {
        dd($request->all());
    }
}
