<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get(); 

        return view('components.hero', ['projects' => $projects]);
    }
}
