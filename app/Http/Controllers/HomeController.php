<?php

namespace App\Http\Controllers;

use App\Garage;
use App\Sparepart;
use App\Speciality;
use App\Mechanician;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {$chart_options2 = [
        'chart_title' => 'monthly Registered Mechanician',
        'report_type' => 'group_by_date',
        'model' => 'App\Mechanician',
        'group_by_field' => 'created_at',
        'group_by_period' => 'month',
        'chart_type' => 'bar',
    ];
    $chart_options = [
        'chart_title' => 'registered Garage monthly',
        'report_type' => 'group_by_date',
        'model' => 'App\Garage',
        'group_by_field' => 'created_at',
        'group_by_period' => 'month',
        'chart_type' => 'bar',
    ];
    $chart1 = new LaravelChart($chart_options);
    $chart2 = new LaravelChart($chart_options2);

        $mechanicians = Mechanician::all();
        $garages =     Garage::all();
        $spareparts =  Sparepart::all();
        $specialities =Speciality::all();

        return view('dashboard', compact('mechanicians','garages','spareparts','specialities','chart1','chart2'));
    }
}


