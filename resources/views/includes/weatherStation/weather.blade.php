

<!DOCTYPE html>
<html>
<head>
    <title>Galway Smart Home Weather Station</title>
    <meta content="Smart Home weather station providing current weather conditions for Galway" name="description">
    <meta content="website" property="og:type">
    <meta content="7 days" name="revisit-after">
    <meta content="web" name="distribution">
    <meta content="Galway 
 smart home weather station" property="og:title">
    <meta content="Galway 
 smart home weather station" property="og:site_name">
    <meta content="" property="og:url">
    <meta content="Smart Home weather station providing current weather conditions for Galway" property="og:description">
    <meta content="img/weather34.png" property="og:image">
    <meta content="" property="fb:app_id">
    <meta content="place" property="og:type">
    <meta content="brian underdown" name="author">
    <meta content="INDEX,FOLLOW" name="robots">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name=apple-mobile-web-app-title content="SMART HOME WEATHER STATION">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, viewport-fit=cover">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/manifest.json">
    <meta name="theme-color" content="#ffffff">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <link href="css/main.light.css?version=1531524406" rel="stylesheet prefetch">
</head>
<body>
<!-- begin top layout for homeweatherstation template-->
<div class="weather2-container">
    <div class="container weather34box-toparea">
        <!-- position1 --->
        <div class="weather34box clock">  <div class="title"><svg id=i-info viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg>  Max-Min <orange>Temperature </orange> Yesterday </div><div class="value"><div id="position1"></div></div></div>
        <!-- position2--->
        <div class="weather34box indoor"> <div class="title"><svg id=i-info viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg>  Max-Min <green>Temperature </orange> Today </div><div class="value"><div id="position2"></div></div></div>
        <!-- position3--->
        <div class="weather34box earthquake"> <div class="title"><svg id=i-info viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg>  Annual <blue> Rainfall </div><div class="value"><div id="position3"></div></div></div>
        <!-- position4--->
        <div class="weather34box alert"><div class="title"><svg id=i-info viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg>  Weather <red>Alert</red> </div><div class="value"><div id="position4"></div></div></div>
    </div></div></div></div>
<!--end position section for homeweatherstation template-->
<!--begin outside/station data section for homeweatherstation template-->
<div class="weather-container"><div class="weather-item"><div class="chartforecast">
            <span class="yearpopup">  <a href="mbcharts/yearlytemperature.php" data-featherlight="iframe" > <svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> 2018 </a></span>
            <span class="yearpopup">  <a href="tempalmanac.php" data-featherlight="iframe" > <svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> Almanac 2018 </a></span>
            <span class="monthpopup"> <a href="mbcharts/monthlytemperature.php" data-featherlight="iframe" > <svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg>  Jul </a></span>
            <span class="todaypopup"> <a href="mbcharts/todaytemperature.php" data-featherlight="iframe" >  <svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> Today </a></span>
        </div>
        <span class='moduletitle'> Temperature <span class="fgcontrast">&deg;C
</span><br /></span>
        <div id="temperature"></div><br></div>
    <!--forecast for homeweatherstation template-->
    <div class="weather-item"><div class="chartforecast">
            <span class="yearpopup"> <a href="outlookds.php" data-featherlight="iframe"><svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> Forecast Summary</a></span>
            <span class="yearpopup">  <a href="forecastdshour.php" data-featherlight="iframe" ><svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> Hourly Forecast </a></span>
        </div>
        <span class='moduletitle'>
  Forecast  </span><br />
        <div id="currentfore"></div></div>
    <!--currentsky for homeweatherstation template-->
    <div class="weather-item"><div class="chartforecast">
            <!-- HOURLY & Outlook for homeweather station-->
            <span class="yearpopup"> <a href="metarnearby.php" data-featherlight="iframe"><svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> Nearby Metar</a></span>

        </div>
        <span class='moduletitle'>Current Conditions</span><br />
        <div id="currentsky"></div></div></div>
<!--windspeed for homeweatherstation template-->
<div class="weather-container"><div class="weather-item"><div class="chartforecast">
            <span class="yearpopup">  <a href="mbcharts/yearlywindspeedgust.php" data-featherlight="iframe" ><svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> 2018</a></span>
            <span class="yearpopup">  <a href="windalmanac.php" data-featherlight="iframe" ><svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> Almanac 2018</a></span>
            <span class="monthpopup"> <a href="mbcharts/monthlywindspeedgust.php" data-featherlight="iframe"><svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg>  Jul </a></span>
            <span class="todaypopup"> <a href="mbcharts/todaywindspeedgust.php" data-featherlight="iframe" ><svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> Today </a></span>
        </div>
        <span class='moduletitle'>Wind | Gust</span><br />
        <div id="windspeed"></div></div>
    <!--barometer for homeweatherstation template-->
    <div class="weather-item"><div class="chartforecast" style="z-index:20">
            <span class="yearpopup">  <a href="mbcharts/yearlybarometer.php" data-featherlight="iframe" ><svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> 2018 </a></span>
            <span class="monthpopup"> <a href="mbcharts/monthlybarometer.php" data-featherlight="iframe" ><svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg>  Jul </a></span>
            <span class="todaypopup"> <a href="mbcharts/todaybarometer.php" data-featherlight="iframe" ><svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> Today</a></span>
        </div>
        <span class='moduletitle'>Barometer   </span><br />
        <div id="barometer"></div></div>
    <!--moonphase for homeweatherstation template-->
    <div class=weather-item><div class=chartforecast style="margin-top:172px;z-index:20;">
            <div class="moonposition1">
                <div class="wi wi-moon-3"></div><span style='color:#777;font-weight:normal;font-size:13px'>  </span>
            </div>
            <span class=yearpopup style="margin-top:-5px;z-index:20;"><a href=mooninfo.php data-featherlight=iframe>
Waxing Crescent</a></span>
            <span class="monthpopup"><a href="meteorshowers.php" data-featherlight="iframe"><svg width='12px' height='12px' viewBox='0 0 16 16'><path fill='currentcolor' d='M0 0l14.527 13.615s.274.382-.081.764c-.355.382-.82.055-.82.055L0 0zm4.315 1.364l11.277 10.368s.274.382-.081.764c-.355.382-.82.055-.82.055L4.315 1.364zm-3.032 2.92l11.278 10.368s.273.382-.082.764c-.355.382-.819.054-.819.054L1.283 4.284zm6.679-1.747l7.88 7.244s.19.267-.058.534-.572.038-.572.038l-7.25-7.816zm-5.68 5.13l7.88 7.244s.19.266-.058.533-.572.038-.572.038l-7.25-7.815zm9.406-3.438l3.597 3.285s.094.125-.029.25c-.122.125-.283.018-.283.018L11.688 4.23zm-7.592 7.04l3.597 3.285s.095.125-.028.25-.283.018-.283.018l-3.286-3.553z'/></svg> &nbsp;Meteor Showers</a></span>
            <span class=todaypopup><a href=aurora.php data-featherlight=iframe><svg id=i-info viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg>  Aurora </a></span></div>
        <span class='moduletitle'>Daylight</span><br />
        <div id="moonphase"></div> </div></div></div>
<!--rainfall for homeweatherstation template-->
<div class="weather-container"><div class="weather-item"><div class="chartforecast" >
            <span class="yearpopup">  <a href="mbcharts/yearlyrainfall.php" data-featherlight="iframe" ><svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> 2018 </a></span>
            <span class="monthpopup"> <a href="mbcharts/monthlyrainfall.php" data-featherlight="iframe" ><svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg>  Jul </a></span>
            <span class="todaypopup"> <a href="mbcharts/todayrainfall.php" data-featherlight="iframe" ><svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> Today </a></span>
        </div>
        <span class='moduletitle'>Rainfall Today</span><br />
        <div id="rainfall"></div></div>
    <!--solar or web cam for homeweatherstation template-->
    <div class="weather-item"><div class="chartforecast">
  <span class="yearpopup"> 
  </a></span>
            <span class="monthpopup">
     <a href="cloudbaseuvds.php" data-featherlight="iframe"> <svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> Cloudbase | UV Forecast </a></span>


        </div>
        <span class='moduletitle'>
  Indoor</span></span><br />
        <div id="solar"></div></div>
    <!--air quality- moon for homeweatherstation template-->
    <div class="weather-item"><div class="chartforecast" style="z-index:20">
            <span class="monthpopup"> <a href="purpleair.php" data-featherlight="iframe"><svg viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg>Air Quality | Cloudbase </a></span>
            <span class="yearpopup"> <a href="eqlist.php" data-featherlight="iframe"> <svg id=i-activity viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M4 16 L11 16 14 29 18 3 21 16 28 16" />
</svg>  Earthquake   </a></span>
        </div>
        <span class='moduletitle'>
	 Purple Air Quality Index     </span></span>
        <div id="dldata"></div>
    </div></div>

<!--end outdoor data for homeweatherstation template-->
<!--footer area for homeweatherstation template warning dont mess with this below this line unless you really know what you are doing-->
<div class="weatherfooter-container">
    <div class="weatherfooter-item">
        <div class="cclicencelogo"><a href="http://wiki.meteobridge.com/wiki/index.php/Home" target="_blank" title="http://wiki.meteobridge.com/wiki/index.php/Home">
                <img src="img/meteobridge.svg" width"25px" height="25px"></a>
        </div>
        <div class="designedby">
            <a href="http://weatherflow.com" title="http://weatherflow.com"><img src="img/wflogo.svg" width="130px" height="30px" alt="weatherflow hardware"></a> </div>
        <div class="footertext"><svg id=i-info viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg>  &nbsp; Data Source:  meteobridge-api
            (3.6-12224)&nbsp;
            <svg id=i-info viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg>  &nbsp; Hardware: Your Station Hardware </div>
        <div class="footertext"><svg id=i-info viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg> &nbsp; Version: <a href="info/info.html" data-featherlight="iframe"> Dashboard MB(11-07-2018)
                &copy; 2015-2018</a> &nbsp; &nbsp;<svg id=i-info viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg> &nbsp;Operational Since:&nbsp; May 2015  </div>
        <div class="footertext"><svg id=i-info viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg> &nbsp; &nbsp;<img rel="prefetch" src="img/flags/en.svg"width="23px" height="23px"> </div>
    </div></div>
<!--cron jobs no longer required this script automates the update every 30 minutes-->
<span class="blank"><div id="blank"></div><div id=weatherflow class=blank></div></span><div id=lightningalert></div>
<script src=js/jquery.js></script>
<script DEFER type="text/livescript">
 //update the charts,eq,forecast data and current conditions//
  var refreshId;$(document).ready(function(){stationcron()});function stationcron(){$.ajax({cache:false,
  success:function(a){$("#blank")
  .html(a);setTimeout(stationcron,1800000)},
  contentType: "application/x-www-form-urlencoded;charset=ISO-8859-15",
  type:"GET",url:"jsondata/wuupdate.php"})}; 
  </script>
<script Defer>
    //simple weather34 main clock
    $(function() {weather34clock();});function weather34clock() {
        var d = new Date();var utc = d.getTime() + (d.getTimezoneOffset() * 60000);var offset = 0;var currentTime = new Date(utc + (3600000*offset));var currentHours = currentTime.getHours ( );
        var currentMinutes = currentTime.getMinutes ( );var currentSeconds = currentTime.getSeconds ( );currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;
        currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;var timeOfDay = ( currentHours < 12 ) ? "<am>am</am>" : "<pm>pm</pm>";
        currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;currentHours = ( currentHours == 0 ) ? 12 : currentHours;
        var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay ;$('#weather34clock').html(currentTimeString);setTimeout("weather34clock()",1000);};
    //utc clock weather34 24 hour
    !function(t,n,o){function e(){var t=new i;t.startClock()}function i(){this.time=""}o(function(){e()}),i.prototype={startClock:function(){var t=this;setInterval(this.updateClock.bind(this,t),500)},updateClock:function(t){var n=t.getTime();this.updateClockView(n)},updateClockView:function(t){for(var n=o(".clock-container>ul>li>span"),e=0;5>e;e++)n.eq(e).html(t[e])},getTime:function(){var t=new Date,n=t.getUTCHours(),o=t.getUTCMinutes(),e=t.getUTCSeconds(),i=this.convertHourByTimeZone(n);o=this.fixLayout(o),e=this.fixLayout(e);for(var r=[],u=0;5>u;u++){var c=i[u]+":"+o+":"+e;r.push(c)}return r},convertHourByTimeZone:function(t){for(var n=[0],o=[],e=0;5>e;e++){var i=t+n[e];i>=24?i-=24:0>i&&(i=24+i),o.push(i)}return o},fixLayout:function(t){return 10>t&&(t="0"+t),t}}}(window,document,window.jQuery);setTimeout(function(){$(document).ready(function($){
        function getParameter(theParameter){var params=window.location.search.substr(1).split('&');for(var i=0;i<params.length;i++){var p=params[i].split('=');if(p[0]==theParameter){return decodeURIComponent(p[1]);}}return false;}
    }); }, 1000);
    //update the modules



    //update the modules position 1
    var refreshId;$(document).ready(function(){position1()});function position1(){$.ajax({cache:false,success:function(a){$("#position1").html(a);setTimeout(position1,17000)},
        contentType: "application/x-www-form-urlencoded;charset=ISO-8859-15",
        type:"GET",url:"tempyesterday.php"})};

    //update the modules position 2
    var refreshId;$(document).ready(function(){indoor()});function indoor(){$.ajax({cache:false,success:function(a){$("#position2").html(a);setTimeout(indoor,7200000)},
        contentType: "application/x-www-form-urlencoded;charset=ISO-8859-15",
        type:"GET",url:"max-mintemp.php"})};

    // position 3
    var refreshId;$(document).ready(function(){earthquake()});function earthquake(){$.ajax({cache:false,success:function(a){$("#position3").html(a);setTimeout(earthquake,600000)},type:"GET",url:"rainfallf-year-month.php"})};


    // position 4
    var refreshId;$(document).ready(function(){notification()});function notification(){$.ajax({cache:false,success:function(a){$("#position4").html(a);setTimeout(notification,17000)},type:"GET",url:"advisory.php"})};

    // outdoor temp
    var refreshId;$(document).ready(function(){temperature()});function temperature(){$.ajax({cache:false,success:function(a){$("#temperature").html(a);setTimeout(temperature,30000)},type:"GET",url:"temperaturein.php"})};
    //current conditions icon
    var refreshId;$(document).ready(function(){currentsky()});function currentsky(){$.ajax({cache:false,success:function(a){$("#currentsky").html(a);setTimeout(currentsky,300000)},type:"GET",url:"currentconditionsds.php"})};
    /// wind speed / direction
    var refreshId;$(document).ready(function(){windspeed()});function windspeed(){$.ajax({cache:false,success:function(a){$("#windspeed").html(a);setTimeout(windspeed,16000)},type:"GET",url:"windspeeddirection.php"})};
    //barometer
    var refreshId;$(document).ready(function(){barometer()});function barometer(){$.ajax({cache:false,success:function(a){$("#barometer").html(a);setTimeout(barometer,300000)},type:"GET",url:"barometer.php"})};
    // moonphase
    var refreshId;$(document).ready(function(){moonphase()});function moonphase(){$.ajax({cache:false,success:function(a){$("#moonphase").html(a);setTimeout(moonphase,1800000)},type:"GET",url:"daylight5.php"})};
    // rainfall
    var refreshId;$(document).ready(function(){rainfall()});function rainfall(){$.ajax({cache:false,success:function(a){$("#rainfall").html(a);setTimeout(rainfall,50000)},type:"GET",url:"rainfall.php"})};
    // solar or webcam
    var refreshId;$(document).ready(function(){solar()});function solar(){$.ajax({cache:false,success:function(a){$("#solar").html(a);setTimeout(solar,60000)},type:"GET",url:'temperature2.php'})};

    //daylight /airquality
    var refreshId;$(document).ready(function(){dldata()});function dldata(){$.ajax({cache:false,success:function(a){$("#dldata").html(a);setTimeout(dldata,65000)}, type:"GET",url:"airqualitymodule.php"})};
    //current 3dy forecast
    var refreshId;$(document).ready(function(){currentfore()});function currentfore(){$.ajax({cache:false,success:function(a){$("#currentfore").html(a);setTimeout(currentfore,360000)},type:"GET",url:"forecast3ds.php"})};

</script><header><!---start menu.php 23-02-2018--><h1><ogreyh1>test galway&nbsp; </ogreyh1><ogreenh1>SMART </ogreenh1><ogreyh1>&#8226; HOME WEATHER &#8226;</ogreyh1><oblueh1> STATION</oblueh1></h1>
    <div class="menuclock"><div class="clock-container"><memclock><svg id="menu clock" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="16" cy="16" r="14" /><path d="M16 8 L16 16 20 20" /></svg></memclock> <span id='weather34clock'></span> </div></div>
    <button class="button right"></button><div class='w34logo'> <a  class="menucolor" href="./?units=us"><svg id ="weather34 menu fahrenheit" width="24" height="24" fill="#ff8841" viewBox="0 0 24 24"><path d="M8 8c0 .551-.449 1-1 1s-1-.449-1-1 .449-1 1-1 1 .449 1 1zm16 4c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-15-4c0-1.105-.895-2-2-2s-2 .895-2 2 .895 2 2 2 2-.895 2-2zm8.352-2h-7.352v12h2.472v-4.904h4.385v-1.995h-4.385v-3.098h4.879v-2.003z"/></svg></a></div>
    <div class=w34uptime> <svg id=i-info viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg>  Uptime: <ogreen>2 day(s) 1 hrs 28 min</ogreen></div>
    <input type="checkbox" class="openweather34sidebarMenu" id="openweather34sidebarMenu">
    <label for="openweather34sidebarMenu" class="weather34sidebarIconToggle">
        <div class="weather34spinner weather34cross part-1"></div>
        <div class="weather34spinner weather34horizontal"></div>
        <div class="weather34spinner weather34cross part-2"></div>
    </label>
    <div id="weather34sidebarMenu">
        <ul class="weather34sidebarMenuInner">
            <div class="weather34calendarapp">
                <div class="weather34calendarapp-calendar">
                    <div id="weather34weekday"></div>
                    <div id="weather34day"></div></div></div>
            <li><a href="#">ADMIN</a></li>
            <li><a href="easyweathersetup.php" target="_blank" title="WEATHERSTATION SETTINGS PAGE"><svg id="i-settings" viewBox="0 0 32 32" width=14 height=14 fill=none stroke=#ccc stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                        <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />  <circle cx="16" cy="16" r="4" /></svg> Settings </a></li>
            <p>
            <li><a href="#">USER PREFERENCES</a></li>
            <li><a href="index.php" title="WEATHERSTATION HOME PAGE"> <svg width=14 height=14 fill=#ccc stroke=#ccc  viewBox="0 0 93 97.06" ><title/><g data-name="Layer 2" id="Layer_2"><g id="weather34 icon home"><path d="M92.56,45.42l-45-45a1.54,1.54,0,0,0-2.12,0l-45,45a1.5,1.5,0,0,0,0,2.12l8.12,8.12a1.54,1.54,0,0,0,2.12,0l2.16-2.16V95.56a1.5,1.5,0,0,0,1.5,1.5H78.66a1.5,1.5,0,0,0,1.5-1.5V53.5l2.16,2.16a1.5,1.5,0,0,0,2.12,0l8.12-8.12A1.5,1.5,0,0,0,92.56,45.42ZM37.66,94.06V70.65H55.34V94.06ZM77.16,50.63V94.06H58.34V69.15a1.5,1.5,0,0,0-1.5-1.5H36.16a1.5,1.5,0,0,0-1.5,1.5V94.06H15.84V50.63s0-.08,0-.11L46.5,19.84,77.17,50.51S77.16,50.59,77.16,50.63Zm6.23,1.86L47.56,16.66a1.54,1.54,0,0,0-2.12,0L9.62,52.48l-6-6L46.5,3.6,89.38,46.48Z"/></g></g></svg> Home </a></li>
            <li><a href=?theme=dark><svg x="0px" y="0px" width=14 height=14 fill=#ccc stroke=#ccc viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" >
                        <g><path d="M500,10C229.4,10,10,229.4,10,500c0,270.6,219.4,490,490,490c270.6,0,490-219.4,490-490C990,229.4,770.6,10,500,10z M500,967.9C241.6,967.9,32.1,758.4,32.1,500C32.1,241.6,241.6,32.1,500,32.1c258.4,0,467.9,209.5,467.9,467.9C967.9,758.4,758.4,967.9,500,967.9z M634.6,501.4l-247,248.3L371,733l230.3-231.6L371,269.8l16.6-16.7L634.6,501.4L634.6,501.4z"/></g></svg> Dark Theme</a></li>
            <p>
            <li><a href="#">UNITS</a></li>
            <li> <a  href="./?units=us"> <svg x="0px" y="0px" width=14 height=14 fill=#ccc stroke=#ccc viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" >
                        <g><path d="M500,10C229.4,10,10,229.4,10,500c0,270.6,219.4,490,490,490c270.6,0,490-219.4,490-490C990,229.4,770.6,10,500,10z M500,967.9C241.6,967.9,32.1,758.4,32.1,500C32.1,241.6,241.6,32.1,500,32.1c258.4,0,467.9,209.5,467.9,467.9C967.9,758.4,758.4,967.9,500,967.9z M634.6,501.4l-247,248.3L371,733l230.3-231.6L371,269.8l16.6-16.7L634.6,501.4L634.6,501.4z"/></g></svg>  Non Metric  <svg id ="weather34 fahrenheit menu" width="14" height="14" fill="#ff8841" viewBox="0 0 24 24"><path d="M8 8c0 .551-.449 1-1 1s-1-.449-1-1 .449-1 1-1 1 .449 1 1zm16 4c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-15-4c0-1.105-.895-2-2-2s-2 .895-2 2 .895 2 2 2 2-.895 2-2zm8.352-2h-7.352v12h2.472v-4.904h4.385v-1.995h-4.385v-3.098h4.879v-2.003z"/></svg></a><br />  <li> <a  href="./?units=uk">  <svg x="0px" y="0px" width=14 height=14 fill=#ccc stroke=#ccc viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" >
                        <g><path d="M500,10C229.4,10,10,229.4,10,500c0,270.6,219.4,490,490,490c270.6,0,490-219.4,490-490C990,229.4,770.6,10,500,10z M500,967.9C241.6,967.9,32.1,758.4,32.1,500C32.1,241.6,241.6,32.1,500,32.1c258.4,0,467.9,209.5,467.9,467.9C967.9,758.4,758.4,967.9,500,967.9z M634.6,501.4l-247,248.3L371,733l230.3-231.6L371,269.8l16.6-16.7L634.6,501.4L634.6,501.4z"/></g></svg> UK ( MPH)  <svg id ="weather34 celsius menu" width="14" height="14" fill="#9aba2f" viewBox="0 0 24 24"><path d="M7 8c0 .551-.449 1-1 1-.551 0-1-.449-1-1s.449-1 1-1c.551 0 1 .449 1 1zm17 4c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-16-4c0-1.105-.895-2-2-2s-2 .895-2 2 .895 2 2 2 2-.895 2-2zm2.901 4.393v-.882c.011-1.208.215-2.1.614-2.675.398-.575.999-.862 1.801-.862.738 0 1.288.17 1.648.509.361.34.571.886.63 1.64h2.406c-.128-1.305-.604-2.318-1.428-3.04s-1.909-1.083-3.257-1.083c-.973 0-1.828.229-2.563.686s-1.3 1.114-1.696 1.969c-.396.856-.593 1.845-.593 2.968v.714c0 1.76.429 3.143 1.287 4.151.858 1.008 2.036 1.512 3.533 1.512 1.369 0 2.472-.361 3.309-1.083.837-.722 1.301-1.711 1.392-2.968h-2.406c-.054.711-.263 1.237-.63 1.576s-.921.509-1.665.509c-.823 0-1.427-.292-1.809-.874-.382-.582-.573-1.505-.573-2.767z"/></svg></a><br /> <li> <a  href="./?units=scandinavia"> <svg x="0px" y="0px" width=14 height=14 fill=#ccc stroke=#ccc viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" >
                        <g><path d="M500,10C229.4,10,10,229.4,10,500c0,270.6,219.4,490,490,490c270.6,0,490-219.4,490-490C990,229.4,770.6,10,500,10z M500,967.9C241.6,967.9,32.1,758.4,32.1,500C32.1,241.6,241.6,32.1,500,32.1c258.4,0,467.9,209.5,467.9,467.9C967.9,758.4,758.4,967.9,500,967.9z M634.6,501.4l-247,248.3L371,733l230.3-231.6L371,269.8l16.6-16.7L634.6,501.4L634.6,501.4z"/></g></svg> M/S  <svg id ="weather34 celsius menu" width="14" height="14" fill="#9aba2f" viewBox="0 0 24 24"><path d="M7 8c0 .551-.449 1-1 1-.551 0-1-.449-1-1s.449-1 1-1c.551 0 1 .449 1 1zm17 4c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-16-4c0-1.105-.895-2-2-2s-2 .895-2 2 .895 2 2 2 2-.895 2-2zm2.901 4.393v-.882c.011-1.208.215-2.1.614-2.675.398-.575.999-.862 1.801-.862.738 0 1.288.17 1.648.509.361.34.571.886.63 1.64h2.406c-.128-1.305-.604-2.318-1.428-3.04s-1.909-1.083-3.257-1.083c-.973 0-1.828.229-2.563.686s-1.3 1.114-1.696 1.969c-.396.856-.593 1.845-.593 2.968v.714c0 1.76.429 3.143 1.287 4.151.858 1.008 2.036 1.512 3.533 1.512 1.369 0 2.472-.361 3.309-1.083.837-.722 1.301-1.711 1.392-2.968h-2.406c-.054.711-.263 1.237-.63 1.576s-.921.509-1.665.509c-.823 0-1.427-.292-1.809-.874-.382-.582-.573-1.505-.573-2.767z"/></svg></a>
            <li><a href="#">EXTRAS</a></li>
            <li><!---webcam---> <a href="cam.php" data-featherlight="iframe" title="WEATHERSTATION WEBCAM"> <svg x="0px" y="0px" width=14 height=14 fill=#ccc stroke=#ccc viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" >
                        <g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M4546.8,4991.7c-966.9-124.5-1867.7-618.7-2498-1369.6c-647.9-770.4-978.6-1776.2-900.8-2731.5c99.2-1212,716-2266.5,1721.8-2941.6c1535-1031.1,3531.1-834.6,4848.2,478.6c1180.9,1177,1480.5,2939.7,749,4408.5c-593.4,1192.6-1721.8,1994.1-3036.9,2155.6C5237.5,5017.1,4739.4,5015.1,4546.8,4991.7z M5642.1,4546.2c1237.4-229.6,2235.4-1091.4,2626.4-2268.5c124.5-375.5,161.5-585.6,171.2-1019.4c17.5-675.1-85.6-1149.8-375.5-1712.1c-169.3-326.8-344.4-568.1-601.2-826.8c-597.3-603.1-1311.3-931.9-2182.9-1005.8c-846.3-72-1700.4,173.2-2373.5,679C2116.9-1014,1616.9-80.2,1560.5,908.1c-60.3,1089.5,317.1,2066.1,1073.9,2772.4c252.9,235.4,486.4,396.9,801.6,554.5c377.4,188.7,745.1,299.6,1157.6,350.2C4834.8,4614.3,5389.2,4594.9,5642.1,4546.2z"/><path d="M4718,1715.5c-268.5-58.4-501.9-182.9-719.8-385.2c-260.7-243.2-431.9-570.1-472.8-910.5C3420.4-420.7,4146-1231.9,5002.1-1231.9c657.6,0,1272.4,488.3,1441.6,1144c179,698.5-231.5,1463-933.8,1733.4C5247.2,1746.6,4970.9,1770,4718,1715.5z M5354.2,1277.8c332.7-101.2,597.3-383.3,686.8-733.5c38.9-149.8,38.9-431.9,1.9-577.8c-101.2-383.3-408.6-679-797.7-760.7c-589.5-124.5-1138.1,200.4-1284,760.7c-37,144-37,433.9,0,577.8c105.1,404.7,424.1,696.5,842.4,772.4C4939.8,1342,5210.2,1322.5,5354.2,1277.8z"/><path d="M4762.8,919.8c-299.6-126.5-505.8-441.6-472.8-727.6c27.2-223.7,188.7-453.3,404.7-568.1c237.3-126.5,511.7-97.3,735.4,79.8c190.7,149.8,311.3,414.4,282.1,620.6C5681,554,5492.3,805,5278.3,904.2C5118.8,978.2,4916.5,984,4762.8,919.8z M5157.7,522.9c91.4-46.7,142-138.1,142-266.5c0-184.8-112.8-301.6-291.8-301.6c-165.4,0-262.6,70-297.7,214c-25.3,105-1.9,235.4,54.5,299.6C4844.5,557.9,5035.1,585.2,5157.7,522.9z"/><path d="M1877.6-2156c-33.1-17.5-70-50.6-81.7-73.9c-13.6-23.3-149.8-418.3-307.4-879.4c-324.9-955.2-330.7-990.3-231.5-1175.1c105.1-192.6,342.4-352.1,671.2-453.3l145.9-44.7l2854.1-5.8c2770.4-3.9,2861.8-3.9,3042.8,33.1c498.1,103.1,879.4,428,838.5,719.9c-5.8,38.9-140.1,455.2-297.7,926.1c-319.1,947.5-326.9,963-472.8,963c-114.8,0-206.2-83.7-204.3-186.8c2-42.8,126.4-447.5,287.9-920.2c165.4-492.2,280.2-859.9,274.3-879.3c-31.1-97.3-245.1-194.6-501.9-229.6c-212.1-29.2-5573.9-29.2-5786,0c-173.1,23.3-330.7,73.9-412.4,132.3c-120.6,85.6-122.6,70,196.5,1015.5c272.4,813.2,289.9,867.7,268.5,937.7C2126.6-2156,1990.4-2099.6,1877.6-2156z"/></g></g>
                    </svg> Web Cam </a></li>
            <li><!---wxcharts---> <a href="wxcharts.php" title="WEATHERSTATION EXTRAS"> <svg x="0px" y="0px" width=14 height=14 fill=#ccc stroke=#ccc viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" >
                        <g><path d="M500,10C229.4,10,10,229.4,10,500c0,270.6,219.4,490,490,490c270.6,0,490-219.4,490-490C990,229.4,770.6,10,500,10z M500,967.9C241.6,967.9,32.1,758.4,32.1,500C32.1,241.6,241.6,32.1,500,32.1c258.4,0,467.9,209.5,467.9,467.9C967.9,758.4,758.4,967.9,500,967.9z M634.6,501.4l-247,248.3L371,733l230.3-231.6L371,269.8l16.6-16.7L634.6,501.4L634.6,501.4z"/></g></svg> WXCHARTS </a></li>
            <!---languages--->
            <br>        <li><a href="https://weather34.com"title="weather34.com"target="_blank"><svg id=i-info viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg>  Designed by weather34.com</a></li>
    </div>
    <li><div class=c><a href=contact/contact.php data-featherlight=iframe class=cl><svg id="email me" viewBox="0 0 106 106">
                    <path fill="#fff" id="hand" d="M29 80.7c4.3-5.1 11.6-6.4 17.4-3.2l3.2 1.7-11-36c-1.1-3.8 1-7.8 4.7-8.9 3.7-1.1 7.8 1 8.9 4.8l5.7 18.5c.7-2 2.3-3.5 4.4-4.2 1.5-.4 3-.4 4.3.1l17.3 4.1c2.3.6 5.2 4.8 5.9 7.4l3.5 11.2c3.7 12.2-3.8 22.7-16 26.4-5.9 1.8-12 1.1-17-1.5L29.7 84.9c-1.2-.7-1.7-2.2-1.1-3.6.1-.3.2-.5.4-.6z"/>
                    <path fill="#fff" id="outer" d="M18.5 38.3c.7 4.9 2.7 9.6 5.9 13.4 1.1 1.4 1 3.3-.4 4.4-.5.4-1 .6-1.6.7-1.1.1-2.1-.2-2.8-1.1-3.9-4.8-6.5-10.6-7.4-16.6C9.7 21.3 21.9 4.8 39.3 2.3c17.5-2.5 33.8 10.1 36.2 28 .4 2.6.4 5.3.1 7.9-.1 1.7-1.7 3-3.5 2.8-1.7-.1-3-1.7-2.8-3.5.2-2.1.1-4.3-.1-6.4C67.2 16.7 54 6.6 40 8.6c-13.7 2-23.5 15.3-21.5 29.7z"/>
                    <path fill="#fff" id="inner" d="M60.8 40.8c-1.7-.2-2.8-1.8-2.6-3.7.2-1.5.2-2.8 0-4.3-1.1-8-8.4-13.6-16.1-12.4S28.8 28.8 30 36.7c.4 2.3 1.2 4.7 2.6 6.5 1 1.4.7 3.5-.6 4.4-.4.4-.9.5-1.4.6-1.1.1-2.2-.4-3-1.2-2-2.8-3.3-6-3.8-9.5-1.6-11.4 6.2-22 17.4-23.5s21.6 6.4 23.2 17.9c.2 2.1.2 4.2 0 6.2-.3 1.7-1.9 2.9-3.6 2.7z"/></svg></a></div></li>
    </div></div></div></header>
<script>(function() {	var date = new Date(),	weekday = ["Sunday", "Monday", "Tue", "Wed", "Thur", "Friday", "Sat"];	document.getElementById('weather34weekday').innerHTML = weekday[date.getDay()];	document.getElementById('weather34day').innerHTML = date.getDate();}) ();</script></body></html>