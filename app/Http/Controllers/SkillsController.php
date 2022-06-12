<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function skills()
    {
      return view('home.skills');
    }

    public static function getTitle(): void
    {
        echo '<h2 class="skills-title">Skills</h2>';
    }
    public static function getSentence(string $sentence): void
    {
        echo '<div class="col-md-12 skills-sentence">'.$sentence.'</div>';
    }
    public static function skillLine(string $name, int $level = 0, int $half = 0): void
    {
        $skillDiv = '';

        $filledStars = $level + $half;
        $filledStars = ($filledStars > 6)?6:$filledStars;
        $starsLeft = 5 - $filledStars;

        $skillDiv .= '<div class="col-md-3 skills-text">'.$name.'</div>';
        $skillDiv .= '<div class="col-md-3 skills-text">';
        for($i = 0; $i < $level; $i++){
            $skillDiv .= '<i class="fas fa-star"></i>';
        }
        $skillDiv .=(!$half)?'':'<i class="fas fa-star-half-alt"></i>';
        for($i = 0; $i < $starsLeft; $i++){
            $skillDiv .= '<i class="far fa-star"></i>';
        }
        $skillDiv .= '</div>';

        echo $skillDiv;
    }

}
