<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Hero;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
        //dd($heroes);
        $projects = Project::all();
        $abouts = About::all();
        return view('home', compact('heroes', 'projects', 'abouts'));
    }

    public function allProjects()
    {
        $projects = Project::all();
        return view('all-projects', compact('projects'));
    }

    public function project()
    {
        return view('project');
    }
}