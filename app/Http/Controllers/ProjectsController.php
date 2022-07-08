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
    public static function getTitle($title): void
    {
        echo '<h2 class="hobbies-title">'.$title.'</h2>';
    }
}
