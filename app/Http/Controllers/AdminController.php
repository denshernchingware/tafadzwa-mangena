<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Hero;
use App\Models\About;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Contact;
use App\Models\ProjectItem;
use App\Models\ProjectDetail;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'projects' => Project::count(),
            'heroes' => Hero::count(),
            'abouts' => About::count(),
            'skills' => Skill::count(),
            'education' => Education::count(),
            'experiences' => Experience::count(),
            'contacts' => Contact::count(),
            'projectItems' => ProjectItem::count(),
            'projectDetails' => ProjectDetail::count(),
        ];
        return view('admin.dashboard', compact('stats'));
    }

    public function projects() { return view('admin.projects.index', ['projects' => Project::all()]); }
    public function showProject(Project $project) { return view('admin.projects.show', compact('project')); }
    public function editProject(Project $project) { return view('admin.projects.edit', compact('project')); }

    public function heroes() { return view('admin.heroes.index', ['heroes' => Hero::all()]); }
    public function showHero(Hero $hero) { return view('admin.heroes.show', compact('hero')); }
    public function editHero(Hero $hero) { return view('admin.heroes.edit', compact('hero')); }

    public function abouts() { return view('admin.abouts.index', ['abouts' => About::all()]); }
    public function showAbout(About $about) { return view('admin.abouts.show', compact('about')); }
    public function editAbout(About $about) { return view('admin.abouts.edit', compact('about')); }

    public function skills() { return view('admin.skills.index', ['skills' => Skill::all()]); }
    public function showSkill(Skill $skill) { return view('admin.skills.show', compact('skill')); }
    public function editSkill(Skill $skill) { return view('admin.skills.edit', compact('skill')); }

    public function education() { return view('admin.education.index', ['education' => Education::all()]); }
    public function showEducation(Education $education) { return view('admin.education.show', compact('education')); }
    public function editEducation(Education $education) { return view('admin.education.edit', compact('education')); }

    public function experiences() { return view('admin.experiences.index', ['experiences' => Experience::all()]); }
    public function showExperience(Experience $experience) { return view('admin.experiences.show', compact('experience')); }
    public function editExperience(Experience $experience) { return view('admin.experiences.edit', compact('experience')); }

    public function contacts() { return view('admin.contacts.index', ['contacts' => Contact::all()]); }
    public function showContact(Contact $contact) { return view('admin.contacts.show', compact('contact')); }
    public function editContact(Contact $contact) { return view('admin.contacts.edit', compact('contact')); }

    public function projectItems() { return view('admin.project-items.index', ['projectItems' => ProjectItem::all()]); }
    public function showProjectItem(ProjectItem $projectItem) { return view('admin.project-items.show', compact('projectItem')); }
    public function editProjectItem(ProjectItem $projectItem) { return view('admin.project-items.edit', compact('projectItem')); }

    public function projectDetails() { return view('admin.project-details.index', ['projectDetails' => ProjectDetail::all()]); }
    public function showProjectDetail(ProjectDetail $projectDetail) { return view('admin.project-details.show', compact('projectDetail')); }
    public function editProjectDetail(ProjectDetail $projectDetail) { return view('admin.project-details.edit', compact('projectDetail')); }
}