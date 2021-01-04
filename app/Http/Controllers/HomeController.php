<?php

namespace App\Http\Controllers;

use App\Project;
use App\MainImage;
use Carbon\Carbon;
use App\ContactDetail;
use App\Customer;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        // $mainImages = MainImage::where('status','active')->get();
        // $projects = Project::where('status','main')->get();
        // foreach($projects as $project){
        //     $project->description =  substr( $project->description ,0,100);
        // }


        return view('frontend/page/home');
    }
    public function index(){

        $start_date = Carbon::now()->subDays(30);
        $end_date = Carbon::now();
        $period = CarbonPeriod::create($start_date, $end_date);
        $users = Customer::whereBetween('created_at', [$start_date->toDateTimeString(), $end_date->toDateTimeString()])->get();
        $date_array = [];
        $count_array = [];

        foreach ($period as $date) {
            $formatted_date = $date->shortEnglishMonth . " " . $date->day;
            $iso_date = $date->toDateString();
            $date_array[] = $formatted_date;
            $count_array[] = $users->filter(function ($item) use ($iso_date) {
                return false !== stristr($item->created_at, $iso_date);
            })->count();
        }
        return view('backend.home', [
            "date_array" => $date_array,
            "count_array" => $count_array,
        ]);
    }
}
