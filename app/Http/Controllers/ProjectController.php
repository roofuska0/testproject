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
        $project = Project::create([
            'name' => request()->input('name'),
            'description' => request()->input('description'),
            'status' => request()->input('status'),
        ]);
    }

    public function edit()
    {

    }

    public function delete()
    {

    }
}
