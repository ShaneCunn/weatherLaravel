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

        // dd($position);
        $location = $position->cityName;
        $lat = $position->latitude;
        $long = $position->longitude;


        $weather = \DarkSky::location($lat, $long)->get();

        $weatherDaily = \DarkSky::location($lat, $long)->includes(['daily'])->get();
        $test3[] = $weatherDaily->daily->data['0']->summary;

        $test7[] = $weatherDaily->daily->data;

        $dailySummary = array();
        for ($count = 0; $count <= 7; $count++) {


            $dayofWeek = date('l jS', strtotime(Carbon::createFromTimestamp($weatherDaily->daily->data[$count]->time)->subDay()));
            $dailysummarytext = $weatherDaily->daily->data[$count]->summary;
            $dailySummary[] = array('summary' => $dailysummarytext, 'day' => $dayofWeek);

            // dd($dailySummary);
            $dailyDay[] = $dayofWeek;


        }


        $direction = null;


        $bearing = $weather->currently->windBearing;


        function windRose($item)
        {
            $winddir[] = "North";
            $winddir[] = "North North East";
            $winddir[] = "North East";
            $winddir[] = "East North East";
            $winddir[] = "East";
            $winddir[] = "East South East";
            $winddir[] = "South East";
            $winddir[] = "South South East";
            $winddir[] = "South";
            $winddir[] = "South South West";
            $winddir[] = "South West";
            $winddir[] = "West South West";
            $winddir[] = "West";
            $winddir[] = "West North West";
            $winddir[] = "North West";
            $winddir[] = "North North West";
            $winddir[] = "North";
            return $winddir[round($item * 16 / 360)];
        }


        $direction = windRose($bearing);
        // dd($direction);

        return view('weather.index', ['time' => $currrentTime, 'title' => $title, 'loc' => $location,
            'lat' => $lat, 'long' => $long, 'weather' => $weather, 'direction' => $direction,
            'ip' => $ip, 'dailyS' => $dailySummary, 'days' => $dailyDay]);
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

    public function widget()
    {
        $title = 'Weather Widget';
        $currentYear = \Carbon\Carbon::now();
        $year = $currentYear->year;


        $currrentTime = \Carbon\Carbon::now()->toDayDateTimeString();
        $title = 'weather page';
        $ip = \Request::ip();

        if ($ip == "127.0.0.1") {

            $ip = '86.44.136.190';
        } else {

            $ip = \Request::ip();

        }


        $position = \Location::get($ip);


        $location = $position->cityName;
        $lat = $position->latitude;
        $long = $position->longitude;


        $weather = \DarkSky::location($lat, $long)->get();

        $weatherDaily = \DarkSky::location($lat, $long)->includes(['daily'])->get();
        $test3[] = $weatherDaily->daily->data['0']->summary;

        $test7[] = $weatherDaily->daily->data;

        $dailySummary = array();
        for ($count = 0; $count <= 7; $count++) {


            $dayofWeek = date('D', strtotime(Carbon::createFromTimestamp($weatherDaily->daily->data[$count]->time)->subDay()));
            $dailysummarytext = $weatherDaily->daily->data[$count]->summary;
            $dailyIcon = $weatherDaily->daily->data[$count]->icon;
            $dailySummary[] = array('summary' => $dailysummarytext, 'day' => $dayofWeek, 'icon' => $dailyIcon);


            $dailyDay[] = $dayofWeek;


        }


        $direction = null;


        $bearing = $weather->currently->windBearing;


        function windRose($item)
        {
            $winddir[] = "North";
            $winddir[] = "North North East";
            $winddir[] = "North East";
            $winddir[] = "East North East";
            $winddir[] = "East";
            $winddir[] = "East South East";
            $winddir[] = "South East";
            $winddir[] = "South South East";
            $winddir[] = "South";
            $winddir[] = "South South West";
            $winddir[] = "South West";
            $winddir[] = "West South West";
            $winddir[] = "West";
            $winddir[] = "West North West";
            $winddir[] = "North West";
            $winddir[] = "North North West";
            $winddir[] = "North";
            return $winddir[round($item * 16 / 360)];
        }


        $direction = windRose($bearing);


        return view('layouts.weather2', ['title' => $title, 'year' => $year,
            'loc' => $location, 'weather' => $weather, 'dailyS' => $dailySummary, 'loc' => $location,]);
    }



    public function weatherPage()
    {

        return view('layouts.weather2');
    }
}
