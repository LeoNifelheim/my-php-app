<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.calculator.index',);
    }

    public function show(Request $request)
    {
        if((string)$request->input('raid') == "jsr"){
            $stats = [
                'crit'  => 'jsr',
                'cRes'  => '800',
                'block' => '2000',
                'bPen'  => '1500',
                'accu'  => '3000',
                'eva'   =>  '2222'
            ];
        }else if((string)$request->input('raid') == "wbr"){
            $stats = [
                'crit'  => 'wbr',
                'cRes'  => '800',
                'block' => '2000',
                'bPen'  => '1500',
                'accu'  => '3000',
                'eva'   =>  '2222'
            ];
        }else if((string)$request->input('raid') == "normal"){
            $stats = [
                'crit'  => 'normal',
                'cRes'  => '800',
                'block' => '2000',
                'bPen'  => '1500',
                'accu'  => '3000',
                'eva'   =>  '2222'
            ];
        }

        $data = json_encode($stats);
        return $data;
    }

    public static function getColorBasedOnValue(float $value, bool $boss): string
    {
        $color = 'grey';
        if($boss){
            if($value>65.00){
                $color = '#FF6868';
            }elseif($value<=65.00 && $value>35.00){
                $color = '#E0DB19';
            }else{
                $color = '#51C670';
            }
        }else{
            if($value>65.00){
                $color = '#51C670';
            }elseif($value<=65.00 && $value>35.00){
                $color = '#E0DB19';
            }else{
                $color = '#FF6868';
            }
        }
        return $color;
    }
}
