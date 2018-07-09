<?php

namespace Weather\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

//use Stevebauman\Location\Position;
//use Stevebauman\Location\Drivers\Driver;

use Stevebauman\Location\Position;
use Naughtonium\LaravelDarkSky\DarkSky;

class WeatherController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currrentTime = \Carbon\Carbon::now()->toDayDateTimeString();
        $title = 'weather page';
        $ip = \Request::ip();

        if ($ip == "127.0.0.1") {

            $ip = '86.44.136.190';
        } else {

            $ip = \Request::ip();

        }


        $position = \Location::get($ip);
        //    dd($position);
        $location = $position->cityName;
        $lat = $position->latitude;
        $long = $position->longitude;


        $weather = \DarkSky::location($lat, $long)->get();


        $test3[] = $weather->daily->data;
        // dd($test3);
        /*
                foreach ((array)$test3 as $key => $value) {

                 //   echo $key . " " . $value;
                    // echo $test4;
                }*/


        $resultsDark = json_decode(json_encode($weather), true);
        // dd($resultsDark) ;
        $test1 = $resultsDark['daily']['data'][0]['summary'];
        $test2 = $resultsDark['daily']['data'];

        /*  $dailyCond = array();
          foreach ($test2 as $d) { // for loop through array to find  Key daily and value data,
              // set that as a new array dailycond
            //  print_r($dailyCond[] = $d);


          }
          //  dd($dailyCond);
          foreach ($dailyCond as $cond) {
              $wTempHigh = round($cond['temperatureMax']);
              $wTempLow = round($cond['temperatureMin']);
              $wTime = $cond['time'];
              $wIcon = $cond['icon'];
              echo " high is: " . $wTempHigh . " low is: " . $wTempLow . " icon is " . $wIcon . "<br>";
          }*/


        $direction = null;


        $bearing = $weather->currently->windBearing;



        function windRose($item) {
            $winddir[]="North";
            $winddir[]="North North East";
            $winddir[]="North East";
            $winddir[]="East North East";
            $winddir[]="East";
            $winddir[]="East South East";
            $winddir[]="South East";
            $winddir[]="South South East";
            $winddir[]="South";
            $winddir[]="South South West";
            $winddir[]="South West";
            $winddir[]="West South West";
            $winddir[]="West";
            $winddir[]="West North West";
            $winddir[]="North West";
            $winddir[]="North North West";
            $winddir[]="North";
            return $winddir[round($item*16/360)];
        }


        $direction = windRose($bearing);
       // dd($direction);
        $wea = json_encode($weather, true);
        //  dd($wea);

        $weatherJson = json_decode($wea, true);

        // dd($daily);

        $dailySummary = $weatherJson['daily']['data'];

        // dd($dailySummary);
        /* foreach ($weatherJson['daily']['data'] as $value) {
             $dailyCond[] = $value;
             foreach ($dailyCond as $cond) {
                 $dailysum = $cond['summary'];
                 echo $dailysum . '<br>';

             }
         }*/
        //dd($dailyCond);

        //  dd($weather->currently->summary);
        return view('weather.index', ['time' => $currrentTime, 'title' => $title, 'loc' => $location,
            'lat' => $lat, 'long' => $long, 'weather' => $weather, 'direction' => $direction, 'ip' => $ip]);
    }


    public function location()
    {

        return view('weather.loc');
    }


    public function test()
    {
        $title = 'test page';
        return view('weather.test', ['title' => $title]);
    }
}
