<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Hero;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
        //dd($heroes);
        $projects = Project::all();
        $abouts = About::all();
        $skills = Skill::all();
        $educations = Education::all();
        $experiences = Experience::all();
        return view('home', compact('heroes', 'projects', 'abouts', 'skills', 'educations', 'experiences'));
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
