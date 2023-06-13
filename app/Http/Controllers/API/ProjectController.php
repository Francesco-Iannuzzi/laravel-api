<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::with('type', 'technologies', 'user')->orderByDesc('id')->paginate(4);
        //dd($projects);

        return response()->json([
            'success' => true,
            'projects' => $projects,
        ]);
        
    }
}