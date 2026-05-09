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
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    private function uploadImage($request, $fieldName, $folder)
    {
        if ($request->hasFile($fieldName)) {
            return $request->file($fieldName)->store($folder, 'public');
        }
        return null;
    }

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

    // Projects
    public function projects() { return view('admin.projects.index', ['projects' => Project::all()]); }
    public function createProject() { return view('admin.projects.create'); }
    public function showProject(Project $project) { return view('admin.projects.show', compact('project')); }
    public function editProject(Project $project) { return view('admin.projects.edit', compact('project')); }
    public function updateProject(Request $request, Project $project)
    {
        $data = $request->all();
        if ($image = $this->uploadImage($request, 'image', 'projects')) {
            $data['image'] = $image;
        }
        $project->update(array_filter($data));
        return redirect()->route('admin.projects')->with('success', 'Project updated!');
    }
    public function storeProject(Request $request)
    {
        $data = $request->all();
        if ($image = $this->uploadImage($request, 'image', 'projects')) {
            $data['image'] = $image;
        }
        Project::create(array_filter($data));
        return redirect()->route('admin.projects')->with('success', 'Project created!');
    }
    public function destroyProject(Project $project)
    {
        if ($project->image) Storage::disk('public')->delete($project->image);
        $project->delete();
        return redirect()->route('admin.projects')->with('success', 'Project deleted!');
    }

    // Heroes
    public function heroes() { return view('admin.heroes.index', ['heroes' => Hero::all()]); }
    public function createHero() { return view('admin.heroes.create'); }
    public function showHero(Hero $hero) { return view('admin.heroes.show', compact('hero')); }
    public function editHero(Hero $hero) { return view('admin.heroes.edit', compact('hero')); }
    public function updateHero(Request $request, Hero $hero)
    {
        $data = $request->all();
        if ($image = $this->uploadImage($request, 'main_image', 'heroes')) {
            $data['main_image'] = $image;
        }
        if ($image = $this->uploadImage($request, 'additional_image', 'heroes')) {
            $data['additional_image'] = $image;
        }
        $hero->update(array_filter($data));
        return redirect()->route('admin.heroes')->with('success', 'Hero updated!');
    }
    public function storeHero(Request $request)
    {
        $data = $request->all();
        if ($image = $this->uploadImage($request, 'main_image', 'heroes')) {
            $data['main_image'] = $image;
        }
        if ($image = $this->uploadImage($request, 'additional_image', 'heroes')) {
            $data['additional_image'] = $image;
        }
        Hero::create(array_filter($data));
        return redirect()->route('admin.heroes')->with('success', 'Hero created!');
    }
    public function destroyHero(Hero $hero)
    {
        if ($hero->main_image) Storage::disk('public')->delete($hero->main_image);
        if ($hero->additional_image) Storage::disk('public')->delete($hero->additional_image);
        $hero->delete();
        return redirect()->route('admin.heroes')->with('success', 'Hero deleted!');
    }

    // Abouts
    public function abouts() { return view('admin.abouts.index', ['abouts' => About::all()]); }
    public function createAbout() { return view('admin.abouts.create'); }
    public function showAbout(About $about) { return view('admin.abouts.show', compact('about')); }
    public function editAbout(About $about) { return view('admin.abouts.edit', compact('about')); }
    public function updateAbout(Request $request, About $about)
    {
        $about->update($request->all());
        return redirect()->route('admin.abouts')->with('success', 'About updated!');
    }
    public function storeAbout(Request $request)
    {
        About::create($request->all());
        return redirect()->route('admin.abouts')->with('success', 'About created!');
    }
    public function destroyAbout(About $about)
    {
        $about->delete();
        return redirect()->route('admin.abouts')->with('success', 'About deleted!');
    }

    // Skills
    public function skills() { return view('admin.skills.index', ['skills' => Skill::all()]); }
    public function createSkill() { return view('admin.skills.create'); }
    public function showSkill(Skill $skill) { return view('admin.skills.show', compact('skill')); }
    public function editSkill(Skill $skill) { return view('admin.skills.edit', compact('skill')); }
    public function updateSkill(Request $request, Skill $skill)
    {
        $skill->update($request->all());
        return redirect()->route('admin.skills')->with('success', 'Skill updated!');
    }
    public function storeSkill(Request $request)
    {
        Skill::create($request->all());
        return redirect()->route('admin.skills')->with('success', 'Skill created!');
    }
    public function destroySkill(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('admin.skills')->with('success', 'Skill deleted!');
    }

    // Education
    public function education() { return view('admin.education.index', ['education' => Education::all()]); }
    public function createEducation() { return view('admin.education.create'); }
    public function showEducation(Education $education) { return view('admin.education.show', compact('education')); }
    public function editEducation(Education $education) { return view('admin.education.edit', compact('education')); }
    public function updateEducation(Request $request, Education $education)
    {
        $education->update($request->all());
        return redirect()->route('admin.education')->with('success', 'Education updated!');
    }
    public function storeEducation(Request $request)
    {
        Education::create($request->all());
        return redirect()->route('admin.education')->with('success', 'Education created!');
    }
    public function destroyEducation(Education $education)
    {
        $education->delete();
        return redirect()->route('admin.education')->with('success', 'Education deleted!');
    }

    // Experiences
    public function experiences() { return view('admin.experiences.index', ['experiences' => Experience::all()]); }
    public function createExperience() { return view('admin.experiences.create'); }
    public function showExperience(Experience $experience) { return view('admin.experiences.show', compact('experience')); }
    public function editExperience(Experience $experience) { return view('admin.experiences.edit', compact('experience')); }
    public function updateExperience(Request $request, Experience $experience)
    {
        $experience->update($request->all());
        return redirect()->route('admin.experiences')->with('success', 'Experience updated!');
    }
    public function storeExperience(Request $request)
    {
        Experience::create($request->all());
        return redirect()->route('admin.experiences')->with('success', 'Experience created!');
    }
    public function destroyExperience(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('admin.experiences')->with('success', 'Experience deleted!');
    }

    // Contacts
    public function contacts() { return view('admin.contacts.index', ['contacts' => Contact::all()]); }
    public function createContact() { return view('admin.contacts.create'); }
    public function showContact(Contact $contact) { return view('admin.contacts.show', compact('contact')); }
    public function editContact(Contact $contact) { return view('admin.contacts.edit', compact('contact')); }
    public function updateContact(Request $request, Contact $contact)
    {
        $contact->update($request->all());
        return redirect()->route('admin.contacts')->with('success', 'Contact updated!');
    }
    public function storeContact(Request $request)
    {
        Contact::create($request->all());
        return redirect()->route('admin.contacts')->with('success', 'Contact created!');
    }
    public function destroyContact(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts')->with('success', 'Contact deleted!');
    }

    // ProjectItems
    public function projectItems() { return view('admin.project-items.index', ['projectItems' => ProjectItem::all()]); }
    public function createProjectItem() { return view('admin.project-items.create'); }
    public function showProjectItem(ProjectItem $projectItem) { return view('admin.project-items.show', compact('projectItem')); }
    public function editProjectItem(ProjectItem $projectItem) { return view('admin.project-items.edit', compact('projectItem')); }
    public function updateProjectItem(Request $request, ProjectItem $projectItem)
    {
        $data = $request->all();
        if ($image = $this->uploadImage($request, 'image', 'projectItem')) {
            $data['image'] = $image;
        }
        $projectItem->update(array_filter($data));
        return redirect()->route('admin.project-items')->with('success', 'Project item updated!');
    }
    public function storeProjectItem(Request $request)
    {
        $data = $request->all();
        if ($image = $this->uploadImage($request, 'image', 'projectItem')) {
            $data['image'] = $image;
        }
        ProjectItem::create(array_filter($data));
        return redirect()->route('admin.project-items')->with('success', 'Project item created!');
    }
    public function destroyProjectItem(ProjectItem $projectItem)
    {
        if ($projectItem->image) Storage::disk('public')->delete($projectItem->image);
        $projectItem->delete();
        return redirect()->route('admin.project-items')->with('success', 'Project item deleted!');
    }

    // ProjectDetails
    public function projectDetails() { return view('admin.project-details.index', ['projectDetails' => ProjectDetail::all()]); }
    public function createProjectDetail() { return view('admin.project-details.create'); }
    public function showProjectDetail(ProjectDetail $projectDetail) { return view('admin.project-details.show', compact('projectDetail')); }
    public function editProjectDetail(ProjectDetail $projectDetail) { return view('admin.project-details.edit', compact('projectDetail')); }
    public function updateProjectDetail(Request $request, ProjectDetail $projectDetail)
    {
        $projectDetail->update($request->all());
        return redirect()->route('admin.project-details')->with('success', 'Project detail updated!');
    }
    public function storeProjectDetail(Request $request)
    {
        ProjectDetail::create($request->all());
        return redirect()->route('admin.project-details')->with('success', 'Project detail created!');
    }
    public function destroyProjectDetail(ProjectDetail $projectDetail)
    {
        $projectDetail->delete();
        return redirect()->route('admin.project-details')->with('success', 'Project detail deleted!');
    }
}