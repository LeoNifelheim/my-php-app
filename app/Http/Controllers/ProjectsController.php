<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home()
    {
      return view('projects.index');
    }
    public static function getTitle(): void
    {
        echo '<h2 class="hobbies-title">Projects</h2>';
    }
}
