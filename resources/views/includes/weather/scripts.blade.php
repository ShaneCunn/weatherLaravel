<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>--}}
</body>
</html><!-- main -->
<div class="main-agileits">
    <h1>Weather Report Widget</h1>
    <div class="main-wthree-row">
        <div class="agileinfo-text">
            <div class="date">
                <!-- Date-JavaScript -->
                <script type="text/javascript">
                    var mydate = new Date()
                    var year = mydate.getYear()
                    if (year < 1000)
                        year += 1900
                    var day = mydate.getDay()
                    var month = mydate.getMonth()
                    var daym = mydate.getDate()
                    if (daym < 10)
                        daym = "0" + daym
                    var dayarray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")
                    var montharray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")
                    document.write("" + dayarray[day] + " <br> " + daym + "  " + montharray[month] + "  " + year + "")
                </script>
                <!-- //Date-JavaScript -->
            </div>