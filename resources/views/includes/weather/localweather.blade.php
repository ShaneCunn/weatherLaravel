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