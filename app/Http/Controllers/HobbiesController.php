<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function hobbies()
    {
      return view('home.hobbies');
    }
    public static function getTitle(): void
    {
        echo '<h2 class="hobbies-title">Hobbies</h2>';
    }
    public static function getName(string $name): string
    {
        return '<h3 class="hobbie-name">'.$name.'</h3>';
    }
    public static function getSentence(string $sentence): string
    {
        return '<div class="col-md-12 hobbies-text">'.$sentence.'</div>';
    }
    public static function hobbiesLine(string $name, string $sentence): void
    {
        $div  = HobbiesController::getName($name);
        $div .= HobbiesController::getSentence($sentence);

        echo $div;
    }
}
