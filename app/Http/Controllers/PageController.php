<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Contact;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function dummy() {
        return view('dummy');
    }

    public function biodata() {
        $data = Biodata::staticData();
        return view('biodata', compact('data'));
    }

    public function portfolio() {
        $projects = Portofolio::staticData();
        return view('portfolio', compact('projects'));
    }

    public function contact() {
        $contact = Contact::staticData();
        return view('contact', compact('contact'));
    }
}
