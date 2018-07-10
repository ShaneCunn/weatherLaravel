<script>
    var icons = new Skycons({"color": "#fff"}),
        list = [
            "clear-night", "clear-day", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
        ],
        i;

    for (i = list.length; i--;)
        icons.set(list[i], list[i]);

    icons.play();
</script>
</div>
</div>
</div>

<!-- //main -->
<!-- copyrights -->
<div class="copy-rights wthree">
    <p>© {{$year}} Weather Report Widget. All Rights Reserved </p>
</div>
<!-- //copyright -->
</body>
</html>