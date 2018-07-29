<?php

namespace Weather\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use Weather\CountryUser;

class ChartController extends Controller
{
    //


    public function getGauge()
    {

        $lava = new Lavacharts; // See note below for Laravel


        $popularity = $lava->DataTable();
        $data = CountryUser::select("name as 0", "total_users as 1")->get()->toArray();


        $popularity->addStringColumn('Country')
            ->addNumberColumn('Popularity')
            ->addRows($data);


        $lava->GeoChart('Popularity', $popularity);

        $title = 'weather gauge';


        return view('guage.guage', ['title' => $title], compact('lava'));


    }

    public function getTemp()
    {

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://weather.nuigalway.ie/getLiveData.php');
        //  echo $res->getStatusCode();

        //   echo $res->getHeaderLine('content-type');
// 'application/json; charset=utf8'
        //  echo $res->getBody();
        $csv = str_getcsv($res->getBody(), ",");
        //  $test = json_decode($res->getBody());


        /*        echo('wind degree: ' . $csv[1]);
                echo('<br>current temp: : ' . $csv[2]);
                echo('<br>current air pressure: : ' . $csv[3]);
                echo('<br>current wind speed? : ' . $csv[4]);
                echo('<br>current humidty : ' . $csv[6]);
                echo('<br>current temp: : ' . $csv[2]);
                echo('<br>today sunrise: : ' . $csv[29]);
                echo('<br>today sunset: : ' . $csv[30]);*/

        //    dd($csv);
// '{"id": 1420053, "name": "guzzle", ...}'

// Send an asynchronous request.
        /*  $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
          $promise = $client->sendAsync($request)->then(function ($response) {
              echo 'I completed! ' . $response->getBody();
          });
          $promise->wait();*/


        $lava2 = new Lavacharts; // See note below for Laravel

        $lava = new Lavacharts; // See note below for Laravel

        $temps = $lava->DataTable();

        $airPressure = $lava->DataTable();


        $temps->addStringColumn('Type')
            ->addNumberColumn('Value')
            ->addRow(['Temperature', $csv[2]])
            ->addRow(['Air Pressure', rand(0, 100)]);
        //   ->addRow(['Graphics', rand(0, 100)]);

        $lava->GaugeChart('Temps', $temps, [
            'width' => 400,
            'greenFrom' => 0,
            'greenTo' => 69,
            'yellowFrom' => 70,
            'yellowTo' => 89,
            'redFrom' => 90,
            'redTo' => 100,
        ]);


        $airPressure->addStringColumn('Type')
            ->addNumberColumn('Value')
            //  ->addRow(['Temperature', $csv[2]])
            ->addRow(['Air Pressure', $csv[3]]);
        //   ->addRow(['Graphics', rand(0, 100)]);

        $lava2->GaugeChart('Air', $airPressure, [
            'width' => 400,
            'max' => 1050,
            'min' => 950,
            'minorTicks' => 20,
            'majorTicks' => [
                '950',
                '1050'
            ]
        ]);

        $title = 'Temp gauge';


        return view('guage.temp', ['title' => $title], compact('lava', 'lava2'));


    }
}
