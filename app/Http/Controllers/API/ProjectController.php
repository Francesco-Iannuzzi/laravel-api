<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('type', 'technologies', 'user')->orderByDesc('id')->paginate(8);

        return response()->json([
            'success' => true,
            'result' => $projects,
        ]);
    }

    public function show($slug)
    {
        $project = Project::with('type', 'technologies', 'user')->where('slug', $slug)->first();

        return response()->json([
            'success' => true,
            'result' => $project,
        ]);
    }
}
