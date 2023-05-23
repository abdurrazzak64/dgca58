
<script>
        setInterval(updateCountdown, 1000);

        function updateCountdown() {
            var date1 = moment([2023, 10, 14]);
            var date2 = moment().add(1, 'months');
            let months = date1.diff(date2, 'months');
            date2.add(months, 'months');

            let days = date1.diff(date2, 'days');
            date2.add(days, 'days');

            let hours = date1.diff(date2, 'hours');
            date2.add(hours, 'hours');

            let minutes = date1.diff(date2, 'minutes');
            date2.add(minutes, 'minutes');

            let seconds = date1.diff(date2, 'seconds');
            document.getElementById("months").innerHTML = months;
            document.getElementById("days").innerHTML = days;
            document.getElementById("hour").innerHTML = hours;
            document.getElementById("minute").innerHTML = minutes;
            document.getElementById("second").innerHTML = seconds;
        }
    </script>
<script src="assets/js/lightgallery.min.js"></script>
    <script src="assets/js/lg-thumbnail.min.js"></script>
    <script src="assets/js/lg-fullscreen.min.js"></script>
    <script src="assets/js/lg-zoom.min.js"></script>
    <script src="assets/js/lg-autoplay.min.js"></script>
    <!-- <script src="/dist/build.js"></script> -->
    <script>
        lightGallery(document.getElementById("lg"), {
            thumbnail: true,
            subHtmlSelectorRelative: true
        });
    </script>


    <!-- gallary  -->
    <!-- time countdown js  -->
    <script type="text/JavaScript" src="assets/js/moment.js"></script>

    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/jquery/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- template js -->

    <!-- nform part  -->
    <script src="assets/vendors/reg-form/js/materialize.min.js"></script>
    <!-- template js -->
    <script src="assets/js/main.js"></script>

    <!-- nivo slider js  -->
    <script src="assets/vendors/nivo-slider/scripts/jquery-1.9.0.min.js"></script>
    <script src="assets/vendors/nivo-slider/scripts/jquery.nivo.slider.js"></script>
    <script>
        $(window).load(function () {
            $('#slider').nivoSlider();
        });
    </script>
    <!-- nivo slider js   -->

    <!-- indexmodal -->
    <!-- <script>
        $(document).ready(function () {
            $('#exampleModalr').modal('show');
        })
    </script> -->
</body>

</html>