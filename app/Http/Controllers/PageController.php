<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        return view('projects');
    }

    public function contact()
    {
        return view('contact');
    }

    public function downloadResume()
    {
        $filePath = public_path('resume.pdf');
        
        if (!file_exists($filePath)) {
            abort(404, 'Resume not found');
        }
        
        return response()->download($filePath, 'Ivan_Leonov_Resume.pdf');
    }
}
