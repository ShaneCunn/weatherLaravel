<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items : 3,
            itemsDesktop : [768,3],
            itemsDesktopSmall : [414,4]

        });

    });
</script>
<!-- sky icons -->
<script src="js/skycons.js">

    <script>
    $(document).ready(function () {
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
    });
</script>