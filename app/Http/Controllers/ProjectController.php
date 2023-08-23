<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('welcome', [
            'projects' => $projects,
        ]);
    }

    public function create()
    {
        return view('projects.form', [
            'url' => route('store'),
            'method' => 'post',
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'description' => 'max:255',
            'status' => 'required',
        ]);

        Project::create([
            'name' => $attributes['name'],
            'description' => $attributes['description'],
            'status' => $attributes['status'],
        ]);

        return redirect()->route('home');
    }

    public function edit(Project $project)
    {
        return view('projects.form', [
            'url' => route('update', [
                'project' => $project
            ]),
            'method' => 'put',
            'name' => $project->name,
            'description' => $project->description,
        ]);
    }

    public function update(Request $request, Project $project)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'description' => 'max:255',
            'status' => 'required',
        ]);

        $project->update([
            'name' => $attributes['name'],
            'description' => $attributes['description'],
            'status' => $attributes['status'],
        ]);

        return redirect()->route('home');
    }

    public function delete(Project $project)
    {
        $project->delete();
        return redirect()->route('home');
    }
}
