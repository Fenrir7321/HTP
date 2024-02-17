<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;
use App\Services\MenuServiceInterface;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private MenuServiceInterface $menuService;

    public function __construct(MenuServiceInterface $menuService) 
    {
        $this->menuService = $menuService;
    }

    public function index()
    {
        $projects = Project::with('technologies')->get(['id', 'name', 'description']);
        $technologies = Technology::query()->with(['technologies'])->get(['id', 'name']);

        return view('index.main', ['menu' => $this->menuService->getMenu(), 'projects' => $projects, 'technologies' => $technologies]);    
    }

    public function show(Project $project)
    {
        $project->load('technologies');
        return view('index.show', ['menu' => $this->menuService->getMenu(), 'project' => $project]);
    }
}