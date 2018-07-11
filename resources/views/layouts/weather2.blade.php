<!DOCTYPE html>
<html class="dark">
<head>
    <meta charset="UTF-8"/>
    <title>phpMeteo</title>
    {{--<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">--}}
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link href="{{asset('images/favicon.png')}}" rel="icon" type="image/png">
    <link href="{{asset('css/chartist.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/chartist.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/functions.js')}}"></script>
</head>
<body>
<div id="loading-bar"></div>
<div id="header" class="header">
    <div class="header-content">
        <div class="header-col header-col-logo"><a href="https://weatherlaravel.test/">
                <div class="logo"></div>
            </a></div>
        <div class="header-col-content">
            <div class="search-content">
                <div class="search-container">
                    <input type="text" name="search" id="search-input" class="search-input" tabindex="1"
                           autocomplete="off" autocapitalize="off" autocorrect="off"
                           data-search-url="https://phpmeteo.com/demo/requests/search"
                           data-token-id="e45558d10b257b48c222af4f97aec22ae391b02ae8ca1e285d0acfe954eedf5d"
                           data-autofocus="0" placeholder="City name">
                    <div id="clear-button" class="clear-button"></div>
                    <div id="search-button" class="search-button"></div>
                    <div class="fav-list">
                        <div class="fav-list-icon fav-list-close" onclick="closeFavorites()"></div>
                        <div class="fav-list-title">Favorites</div>
                        <div class="fav-list-container">
                        </div>
                    </div>
                    <div class="search-list">
                        <div class="search-list-icon search-list-close" onclick="closeSearchResults()"></div>
                        <div class="search-list-title">Search Results</div>
                        <div class="search-list-container" id="search-results"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-col header-col-menu">
            <div class="header-menu-el">
                <div class="icon header-icon icon-menu menu-button" id="db-menu" data-db-id="menu"></div>
                <div class="menu" id="dd-menu">
                    <div class="menu-content">
                        <div class="menu-title">Preferences</div>
                        <div class="divider"></div>

                        <a href="https://phpmeteo.com/demo/preferences/language">
                            <div class="menu-icon icon-language"></div>
                            Language</a>
                        <a href="https://phpmeteo.com/demo/preferences/theme">
                            <div class="menu-icon icon-theme"></div>
                            Theme</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="content" class="content content-home">
    <div class="row">
        <div style="background-image: linear-gradient(var(--cover-top), var(--cover-bottom)), url('{{asset('images/weather/03.jpg')}}');"
             class="weather-now">
            <div class="wn-title">Weather
                <form id="format">
                    <input type="hidden" name="token_id"
                           value="e45558d10b257b48c222af4f97aec22ae391b02ae8ca1e285d0acfe954eedf5d"> <input
                            type="hidden" name="format" value="1">
                </form>
                <div class="button-round-container" onclick="post('format')">
                    <div class="button-round format-c"></div>
                </div>

                <form id="favorite">
                    <input type="hidden" name="token_id"
                           value="e45558d10b257b48c222af4f97aec22ae391b02ae8ca1e285d0acfe954eedf5d"> <input
                            type="hidden" name="favorite">
                    <input type="hidden" name="id" value="2964180">
                    <input type="hidden" name="name" value="Gaillimh, IE">
                </form>
                <div class="button-round-container" onclick="post('favorite')">
                    <div class="button-round favorite"></div>
                </div>
            </div>
            <div class="wn-location"><a href="https://phpmeteo.com/demo/location/2964180">Gaillimh, IE</a></div>

            <div class="wn-box wn-temperature">23° <img src="{{asset('images/icons/weather/03.svg')}}" class="wn-icon"></div>

            <div class="wn-box wn-conditions">
                <div class="wn-box-condition-row"><img src="{{asset('images/icons/conditions/condition.svg')}}">
                    <div class="wn-conditions-text">Conditions: scattered clouds</div>
                </div>

                <div class="wn-box-condition-row"><img src="{{asset('images/icons/conditions/humidity.svg')}}">
                    <div class="wn-conditions-text">Humidity: 49%</div>
                </div>
            </div>
            <div class="wn-box wn-conditions">
                <div class="wn-box-condition-row"><img src="{{asset('images/icons/conditions/speed.svg')}}">
                    <div class="wn-conditions-text">Wind speed: 12.96 km/h</div>
                </div>

                <div class="wn-box-condition-row"><img src="{{asset('images/icons/conditions/direction.svg')}}"
                                                       style="transform: rotate(320deg);">
                    <div class="wn-conditions-text">Wind direction: 320°</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="weather-forecast daily">
            <div class="wf-title">Daily Forecast</div>
            <div>
                <a href="https://phpmeteo.com/demo/location/2964180/day/11" class="wf-list">
                    <div class="wf-list-col wf-date">
                        <div class="wf-day">Wednesday</div>
                        <div class="wf-date">07/11/2018</div>
                    </div>
                    <div class="wf-list-col wf-conditions">
                        <div class="wf-condition-row"><img src="{{asset('images/icons/conditions/condition.svg')}}">
                            <div class="wf-conditions-text">Conditions: light rain</div>
                        </div>

                        <div class="wf-condition-row"><img src="{{asset('images/icons/conditions/humidity.svg')}}">
                            <div class="wf-conditions-text">Humidity: 74%</div>
                        </div>
                    </div>
                    <div class="wf-list-col wf-temp-icon">
                        <div class="wf-icon"><img src="{{asset('images/icons/weather/10.svg')}}" class="wf-icon"></div>
                        <div class="wf-temp">
                            <div class="wf-temp-max">22°</div>
                            <div class="wf-temp-min">17°</div>
                        </div>
                    </div>
                </a>
                <a href="https://phpmeteo.com/demo/location/2964180/day/12" class="wf-list">
                    <div class="wf-list-col wf-date">
                        <div class="wf-day">Thursday</div>
                        <div class="wf-date">07/12/2018</div>
                    </div>
                    <div class="wf-list-col wf-conditions">
                        <div class="wf-condition-row"><img src="{{asset('images/icons/conditions/condition.svg')}}">
                            <div class="wf-conditions-text">Conditions: broken clouds</div>
                        </div>

                        <div class="wf-condition-row"><img src="{{asset('images/icons/conditions/humidity.svg')}}">
                            <div class="wf-conditions-text">Humidity: 81%</div>
                        </div>
                    </div>
                    <div class="wf-list-col wf-temp-icon">
                        <div class="wf-icon"><img src="{{asset('images/icons/weather/04.svg')}}" class="wf-icon"></div>
                        <div class="wf-temp">
                            <div class="wf-temp-max">20°</div>
                            <div class="wf-temp-min">14°</div>
                        </div>
                    </div>
                </a>
                <a href="https://phpmeteo.com/demo/location/2964180/day/13" class="wf-list">
                    <div class="wf-list-col wf-date">
                        <div class="wf-day">Friday</div>
                        <div class="wf-date">07/13/2018</div>
                    </div>
                    <div class="wf-list-col wf-conditions">
                        <div class="wf-condition-row"><img src="{{asset('images/icons/conditions/condition.svg')}}">
                            <div class="wf-conditions-text">Conditions: few clouds</div>
                        </div>

                        <div class="wf-condition-row"><img src="{{asset('images/icons/conditions/humidity.svg')}}">
                            <div class="wf-conditions-text">Humidity: 91%</div>
                        </div>
                    </div>
                    <div class="wf-list-col wf-temp-icon">
                        <div class="wf-icon"><img src="{{asset('images/icons/weather/02.svg')}}" class="wf-icon"></div>
                        <div class="wf-temp">
                            <div class="wf-temp-max">20°</div>
                            <div class="wf-temp-min">12°</div>
                        </div>
                    </div>
                </a>
                <a href="https://phpmeteo.com/demo/location/2964180/day/14" class="wf-list">
                    <div class="wf-list-col wf-date">
                        <div class="wf-day">Saturday</div>
                        <div class="wf-date">07/14/2018</div>
                    </div>
                    <div class="wf-list-col wf-conditions">
                        <div class="wf-condition-row"><img src="{{asset('images/icons/conditions/condition.svg')}}">
                            <div class="wf-conditions-text">Conditions: clear sky</div>
                        </div>

                        <div class="wf-condition-row"><img src="{{asset('images/icons/conditions/humidity.svg')}}">
                            <div class="wf-conditions-text">Humidity: 94%</div>
                        </div>
                    </div>
                    <div class="wf-list-col wf-temp-icon">
                        <div class="wf-icon"><img src="{{asset('images/icons/weather/01.svg')}}" class="wf-icon"></div>
                        <div class="wf-temp">
                            <div class="wf-temp-max">20°</div>
                            <div class="wf-temp-min">12°</div>
                        </div>
                    </div>
                </a>
                <a href="https://phpmeteo.com/demo/location/2964180/day/15" class="wf-list">
                    <div class="wf-list-col wf-date">
                        <div class="wf-day">Sunday</div>
                        <div class="wf-date">07/15/2018</div>
                    </div>
                    <div class="wf-list-col wf-conditions">
                        <div class="wf-condition-row"><img src="{{asset('images/icons/conditions/condition.svg')}}">
                            <div class="wf-conditions-text">Conditions: light rain</div>
                        </div>

                        <div class="wf-condition-row"><img src="{{asset('images/icons/conditions/humidity.svg')}}">
                            <div class="wf-conditions-text">Humidity: 94%</div>
                        </div>
                    </div>
                    <div class="wf-list-col wf-temp-icon">
                        <div class="wf-icon"><img src="{{asset('images/icons/weather/10.svg')}}" class="wf-icon"></div>
                        <div class="wf-temp">
                            <div class="wf-temp-max">18°</div>
                            <div class="wf-temp-min">15°</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="weather-evolution daily">
            <div class="we-title">Evolution</div>
            <div class="chart-container">
                <div class="chart-title">Daily Forecast Evolution (°C)</div>
                <div class="ct-chart">
                    <script>
                        new Chartist.Line('.ct-chart', {
                            labels: ['Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday',],
                            series: [
                                ['22', '20', '20', '20', '18',],
                                ['17', '14', '12', '12', '15',]
                            ]
                        }, {
                            axisY: {
                                labelInterpolationFnc: function (value) {
                                    return (value) + '°';
                                }
                            },
                            fullWidth: true,
                            lineSmooth: false,
                            chartPadding: {
                                right: 50,
                                top: 20
                            },
                            height: 200
                        });
                    </script>
                </div>
                <div class="chart-legends">
                    <div class="chart-legend">
                        <div class="legend-color legend-min"></div>
                        <div class="legend-name">Lowest temperature</div>
                    </div>
                    <div class="chart-legend">
                        <div class="legend-color legend-max"></div>
                        <div class="legend-name">Highest temperature</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="weather-info">
            <div class="wi-title">Info</div>
            <div class="wi-content">
                <div class="wi-item">
                    <div class="wi-icon">
                        <img src="{{asset('images/icons/sunrise.svg')}}" class="wf-icon">
                    </div>
                    <div class="wi-description">
                        <div class="wi-name">
                            Sunrise
                        </div>
                        <div class="wi-value">
                            04:23
                        </div>
                    </div>
                </div>
                <div class="wi-item">
                    <div class="wi-icon">
                        <img src="{{asset('images/icons/sunset.svg')}}" class="wf-icon">
                    </div>
                    <div class="wi-description">
                        <div class="wi-name">
                            Sunset
                        </div>
                        <div class="wi-value">
                            20:59
                        </div>
                    </div>
                </div>
                <div class="wi-item">
                    <div class="wi-icon">
                        <img src="{{asset('images/icons/latitude.svg')}}" class="wf-icon">
                    </div>
                    <div class="wi-description">
                        <div class="wi-name">
                            Latitude
                        </div>
                        <div class="wi-value">
                            53.271938
                        </div>
                    </div>
                </div>
                <div class="wi-item">
                    <div class="wi-icon">
                        <img src="{{asset('images/icons/longitude.svg')}}" class="wf-icon">
                    </div>
                    <div class="wi-description">
                        <div class="wi-name">
                            Longitude
                        </div>
                        <div class="wi-value">
                            -9.048890
                        </div>
                    </div>
                </div>
            </div>
            <div class="timezone">Timezone: GMT+00:00</div>
        </div>
    </div>

</div>
<footer id="footer" class="footer">
    <div class="footer-content">
        <div class="footer-menu">
            <a href="https://phpmeteo.com/demo/info/contact">Contact</a>
            <a href="https://phpmeteo.com/demo/info/about">About</a>
            <a href="https://phpmeteo.com/demo/admin">Admin</a>
        </div>
        Copyright &copy; 2018 phpMeteo. All rights reserved. Powered by <a href="http://phpmeteo.com" target="_blank"
                                                                           data-nd>phpMeteo</a>.
    </div>
</footer>
</body>
</html>