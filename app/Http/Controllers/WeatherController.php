<?php

namespace Weather\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

//use Stevebauman\Location\Position;
//use Stevebauman\Location\Drivers\Driver;

use Stevebauman\Location\Position;
use Naughtonium\LaravelDarkSky\DarkSky;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

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
            'loc' => $location, 'weather' => $weather, 'dailyS' => $dailySummary, 'loc' => $location]);
    }


    public function weatherPage()
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
        //  $lat = $position->latitude;
        //   $long = $position->longitude;
        $lat = '53.2707';
        $long = '-9.0568';

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
            'loc' => $location, 'weather' => $weather, 'dailyS' => $dailySummary, 'loc' => $location, 'lat' => $lat, 'long' => $long]);

    }

    function nuig()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://weather.nuigalway.ie/getLiveData.php');
        //  echo $res->getStatusCode();

        //   echo $res->getHeaderLine('content-type');
// 'application/json; charset=utf8'
        //  echo $res->getBody();
        $csv = str_getcsv($res->getBody(), ",");
        //  $test = json_decode($res->getBody());
        $nuig = (object)array('windDeg' => $csv[1], 'currentTemp' => $csv[2], 'currentAirPressure' => $csv[3],
            'windSpeed' => $csv[4], 'currentWindGust' => $csv[5], 'CurrentHumidty' => $csv[6], 'totalSolar' => $csv[7],
            'diffusedSolar' => $csv[8], 'avgYesterdayTemp' => $csv[9], 'maxTempYes' => $csv[10], 'minTempYes' => $csv[11],
            'avgYestwindSpeed' => $csv[12], 'maxGustYes' => $csv[13], 'avgYesDirection' => $csv[14], 'maxYesGust' => $csv[15],
            'avgYesAirPressure' => $csv[16], 'maxYesAirPressure' => $csv[17], 'minYesAirPressure' => $csv[18], 'avgYeshumidty' => $csv[19],
            'maxYesHumidy' => $csv[20], 'minYesHumidty' => $csv[21], 'avyYesSolar' => $csv[22], 'maxYesSolar' => $csv[23],
            'avyYesSolarDiffused' => $csv[24], 'maxYesSolarDiffuse' => $csv[25], 'updatedHour' => $csv[26], 'rainfall' => $csv[27],
            'rainfallYes' => $csv[28], 'sunrrise' => $csv[29], 'sunset' => $csv[30], 'yesSunrise' => $csv[31], 'yesSunset' => $csv[32],
        );


        /*     $updatedDate_minute=$data_array[0];
            $wind_direction=$data_array[1];
            $temperature=$data_array[2];
            $barometer=$data_array[3];
            $wind_speed=$data_array[4];
            $gust=$data_array[5];
            $humidity=$data_array[6];
            $totalSolar=$data_array[7];
            $diffuseSolar=$data_array[8];
            $avg_yesterdayTemperature=$data_array[9];  //Yesterday's avg for temperature
            $max_yesterdayTemperature=$data_array[10]; //Yesterday's max for temperature
            $min_yesterdayTemperature=$data_array[11]; //Yesterday's min for temperature
            $avg_yesterdayWindSpeed=$data_array[12]; //Yesterday's avg for windspeed
            $max_yesterdayWindSpeed=$data_array[13]; //Yesterday's max for windspeed
            $avg_yesterdayWindDirection=$data_array[14]; //Yesterday's avg for winddirection
            $max_yesterdayGust=$data_array[15];  //Yesterday's max for gust
            $avg_yesterdayBaromter=$data_array[16];
            $max_yesterdayBaromter=$data_array[17];
            $min_yesterdayBaromter=$data_array[18];
            $avg_yesterdayHumidity=$data_array[19];
            $max_yesterdayHumidity=$data_array[20];
            $min_yesterdayHumidity=$data_array[21];
            $avg_yesterdayTotalSolar=$data_array[22];
            $max_yesterdayTotalSolar=$data_array[23];
            $avg_yesterdayDiffuseSolar=$data_array[24];
            $max_yesterdayDiffuseSolar=$data_array[25];
            $updatedDate_hour=$data_array[26];
            $rainfall=$data_array[27];
            $sum_yesterdayRain=$data_array[28];
            $todaySunrise=$data_array[29];
            $todaySunset=$data_array[30];
            $yesterdaySunrise=$data_array[31];
            $yesterdaySunset=$data_array[32];*/

        echo 'windspeed = ' . $nuig->windSpeed;

//dd($nuig);
        return view('includes.weatherStation.weather');


    }
}
