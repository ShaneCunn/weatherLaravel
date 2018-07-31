<?php

namespace Weather\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use Weather\CountryUser;
use Charts;

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


        echo('wind degree: ' . $csv[1]);
        echo('<br>current temp: : ' . $csv[2]);
        echo('<br>current air pressure: : ' . $csv[3]);
        echo('<br>current wind speed? : ' . $csv[4]);
        echo('<br>current humidty : ' . $csv[6]);
        echo('<br>current temp: : ' . $csv[2]);
        echo('<br>today sunrise: : ' . $csv[29]);
        echo('<br>today sunset: : ' . $csv[30]);

        //    dd($csv);
// '{"id": 1420053, "name": "guzzle", ...}'


        $temps = \Lava::DataTable();


        $temps->addStringColumn('Type')
            ->addNumberColumn('Value')
            ->addRow(['Temperature', $csv[2]]);


        $gaugechart = \Lava::GaugeChart('Temps', $temps, [
            'width' => 400,
            'greenFrom' => 5,
            'greenTo' => 25,
            'yellowFrom' => -50,
            'yellowTo' => 4,
            'redFrom' => 26,
            'redTo' => 60,
            'max' => 60,
            'min' => -50,
            'minorTicks' => 2,
            'majorTicks' => [
                '-50',
                '60'
            ]
        ]);

        $airPressure = \Lava::DataTable();
        $airPressure->addStringColumn('Type')
            ->addNumberColumn('Value')
            ->addRow(['Air Pressure', $csv[3]]);


        $airGuage = \Lava::GaugeChart('Air', $airPressure, [
            'width' => 400,
            'max' => 1060,
            'min' => 950,
            'minorTicks' => 20,
            'majorTicks' => [
                '950',
                '1060'
            ]
        ]);


        $airSpeed = \Lava::DataTable();


        $airSpeed->addStringColumn('Type')
            ->addNumberColumn('Value')
            ->addRow(['Wind Speed', round(($csv[4] * 3.6), 2)]);


        $airSpeed = \Lava::GaugeChart('speed', $airSpeed, [
            'width' => 400,
            'max' => 100,
            'min' => 0,
            'greenFrom' => 25,
            'greenTo' => 51,
            'yellowFrom' => 52,
            'yellowTo' => 61,
            'redFrom' => 62,
            'redTo' => 200,
            'minorTicks' => 10,
            'majorTicks' => [
                '0',
                '100'
            ]
        ]);

        $airGust = \Lava::DataTable();


        $airGust->addStringColumn('Type')
            ->addNumberColumn('Value')
            ->addRow(['Gusts', round(($csv[5] * 3.6), 2)]);


        $airGust = \Lava::GaugeChart('Gust', $airGust, [
            'width' => 400,
            'max' => 100,
            'min' => 0,
            'greenFrom' => 25,
            'greenTo' => 51,
            'yellowFrom' => 52,
            'yellowTo' => 61,
            'redFrom' => 62,
            'redTo' => 200,
            'minorTicks' => 10,
            'majorTicks' => [
                '0',
                '100'
            ]
        ]);

        $humidty = \Lava::DataTable();


        $humidty->addStringColumn('Type')
            ->addNumberColumn('Value')
            ->addRow(['Humidty', round($csv[6], 1)]);


        $humidty = \Lava::GaugeChart('Humidty', $humidty, [
            'width' => 400,
            'max' => 100,
            'min' => 0,
            'minorTicks' => 10,
            'majorTicks' => [
                '0',
                '100'
            ]
        ]);

        $title = 'Temp gauge';


        $chart = Charts::create('line', 'highcharts')
            ->setTitle('My nice chart')
            ->setLabels(['First', 'Second', 'Third'])
            ->setValues([5, 10, 20])
            ->setDimensions(1000, 500)
            ->setResponsive(false);


        return view('guage.temp', ['title' => $title], compact('gaugechart', 'airGuage',
            'airSpeed', 'airGust', 'chart'));


    }

    public function getCompass()
    {


        $chart = Charts::create('line', 'highcharts')
            ->setTitle('My nice chart')
            ->setLabels(['First', 'Second', 'Third'])
            ->setValues([5, 10, 20])
            ->setDimensions(1000, 500)
            ->setResponsive(false);

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://weather.nuigalway.ie/getLiveData.php');
        //  echo $res->getStatusCode();

        //   echo $res->getHeaderLine('content-type');
// 'application/json; charset=utf8'
        //  echo $res->getBody();
        $csv = str_getcsv($res->getBody(), ",");
        //  $test = json_decode($res->getBody());


              echo('wind degree: ' . $csv[1]);
                echo('<br>current temp: : ' . $csv[2]);
                echo('<br>current air pressure: : ' . $csv[3]);
                echo('<br>current wind speed? : ' . $csv[4]);
                echo('<br>current humidity : ' . $csv[6]);
                echo('<br>current temp: : ' . $csv[2]);
                echo('<br>today sunrise: : ' . $csv[29]);
                echo('<br>today sunset: : ' . $csv[30]);


        $degree = $csv[1];
        $temperature = $csv[2];
        $windSpeed = ($csv[4] * 3.6);
        $windGust = ($csv[4] * 3.6);
        $humidity = round($csv[6], 1);
        $airPressure = $csv[3];
        $title = 'Compass gauge';
        return view('guage.compass', ['title' => $title, 'degree' => $degree, 'temperature' => $temperature,
            'windSpeed' => $windSpeed, 'windGust' => $windGust, 'humidity' => $humidity, 'airPressure' => $airPressure]);
    }
}
