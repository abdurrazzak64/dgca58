<?php
include('shared/head.php');
?>

<!-- Button trigger modal  -->


<body>

    <!-- <div class="modal fade" id="exampleModalr" tabindex="-1" aria-labelledby="exampleModalrLabel" aria-hidden="true">
        <div class="modal-dialog dist">
            <div class="modal-content are_modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalrLabel">DGCA58</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="logo_text_height">
                        <div class="logo_text">
                            <img src="assets/images-2/logo/caab-logo-dgca.png" alt="icom-Image">
                            <div class="logo_img-text">
                                <h2>DGCA 2023</h2>
                                <p>DGCA 202358 DGCA CONFERENCE APAC</p>
                                <p>Dhaka, Bangladesh</p>
                            </div>
                        </div>
                        <h1 class="heading_text">Letter of Appreciation</h1>
                        <div class="logo_img_text_text">
                            <p>Thank you for your Participation in the DGCA 58!</p>
                            <p>Dear participants,
                                The curtain has just fallen on the DGCA 58, which was held successful- ly on October
                                15-19 in Dhaka,
                                Republic of Bangladesh. On behalf of the organizer, we would like to extend our sincere
                                appreciation
                                to you for taking the time to be part of the DGCA 58.</p>

                            <p>We are also pleased to inform you that photos from the conference are available online at
                                www.dgca2023.bd. <br> We look forward to seeing you again and appreciate your continued
                                interest and
                                support.</p>
                            <p>Respectfully yours, <br>
                                The Secretariat of the 58th DGCA Conference - APAC</p>
                        </div>



                    </div>
                </div>
                <div class="modal-footer">
                    <a href="gallery.html" class="btn btn-primary">Gallery</a>

                </div>
            </div>
        </div>
    </div> -->


    <!-- Large modal -->
    <!-- Button trigger modal  -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Large Modal
  </button> -->

    

    <!-- Small modal -->




    <?php
        include('shared/preloader.php');
    ?>
    <!-- /.preloader -->

    <!-- registration fixed start here -->
    <?php
        include('shared/registration_fixed.php');
    ?>
    <!-- registration fixed end here -->




    <!-- <div class="page-wrapper"> -->
    <header class="main-header clearfix">
        <div class="page-wrapper">
            <?php
                include('shared/topbar.php');
            ?>
            <?php
                include('shared/navbar.php');
            ?>

            <?php
                include('shared/sticky_header.php');

            ?>

            <!-- /.stricky-header -->

            <!--Main Slider Start-->

            <?php
                include('slider.php');
            ?>

            <!--Main Slider End-->


            <!--Up Comming Events Start-->
            <section class="up-comming-events">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-xl-12 col-lg-12"> -->
                        <div class="up-comming-events__inner wow fadeInUp" data-wow-delay="100ms">
                            <div class="row countt">
                                <!-- <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 reg-btn">
                                    <a class="btn btn-primary reg" href="#"><span>Registration <img src="assets/images-2/logo/registerIconCircle.png" alt=""></span></a>
                                </div> -->

                                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                                    <div class="up-comming-events__right countt-right">
                                        <div class="timer-box">
                                            <div class="countdown-timer">
                                                <!-- <div class="default-coundown">
                                                    <div class="name_time">
                                                        <div id="countdown-active" class="countdown-activeto"></div>
                                                        <span>months</span> 
                                                    </div>
                                                    <div class="name_time">
                                                        <div id="countdown-active2" class="countdown-activeto"></div>
                                                        <span>days</span> 
                                                    </div>
                                                    <div class="name_time">
                                                        <div id="countdown-active3" class="countdown-activeto"></div>
                                                        <span>hours</span> 
                                                    </div>
                                                    <div class="name_time">
                                                        <div id="countdown-active4" class="countdown-activeto"></div>
                                                        <span>minutes</span> 
                                                    </div>

                                                    <div class="name_time">
                                                        <div id="countdown-active5" class="countdown-activeto"></div>
                                                        <span>seconds</span> 
                                                    </div>  
                                                </div> -->
                                                <div id="clockdiv">
                                                    <div class="name_digit">
                                                        <span class="months bul" id="months"></span>
                                                        <div class="smalltext hour-text digit">Months</div>
                                                    </div>
                                                    <div class="name_digit">
                                                        <span class="days bul" id="days"></span>
                                                        <div class="smalltext hour-text digit">Days</div>
                                                    </div>
                                                    <div class="name_digit">
                                                        <span class="hours bul" id="hour"></span>
                                                        <div class="smalltext hour-text digit">Hours</div>
                                                    </div>
                                                    <div class="name_digit">
                                                        <span class="minutes bul" id="minute"></span>
                                                        <div class="smalltext min-text digit">Minutes</div>

                                                    </div>
                                                    <div class="name_digit">
                                                        <span class="seconds bul" id="second"></span>
                                                        <div class="smalltext digit">Seconds</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                                    <div class="up-comming-events__right countt-right">
                                        <div class="timer-box">
                                            <div class="countdown-timer">
                                                <div class="default-coundown">
                                                    <div class="box">
                                                        <div class="countdown time-countdown-two" data-countdown-time="2023/03/01">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12">
                                    <div class="Notice">
                                        <button class="btn btn-primary" type="button">Notice</button>
                                        <marquee scrollamount="3" behavior="Slider" direction="">Latest News|| DGCA
                                            Latest News | Today Latest News ||| Latest News|| DGCA Latest News | Today
                                            Latest News</marquee>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="text_img">
                                    <div class="col-xl-8 col-lg-8 col-md-12 custom-width">
                                        <div class="greeting-header">
                                            <div class="line"></div>
                                            <div class="text text-uppercase font-weight-bold">Welcome to 58<sup>th</sup>
                                                DGCA Conference</div>
                                            <div class="line"></div>
                                        </div>
                                        <div class="text_img_wel_para">
                                            <p>Under Construction</p>
                                            <!-- <p class="icao-blue">SHAGOTOM!</p>
                                            <p>
                                                We would like to cordially invite the esteemed Directors General/Chief Executives and delegates to the 58<sup>th</sup> Conference of Directors General of Civil Aviation, Asia and Pacific Region (58<sup>th</sup> DGCA Conference) to be held in Dhaka, Bangladesh from 11-15 October 2023 on behalf of the Government of the People's Republic of Bangladesh.
                                            </p>
                                            <p>
                                                The 58<sup>th</sup> DGCA Conference will provide us an excellent opportunity to showcase Bangladesh, the green emerald of South Asia, rich in culture and heritage, gifted with breathtaking landscapes, pristine sea beaches, and smiles and hospitality of Bangladeshi people.
                                            </p>
                                            <p>
                                                The conference website and my team will be at your service to assist your participation at the 58<sup>th</sup> DGCA Conference and to ensure that you have a pleasant stay in Bangladesh.
                                            </p>
                                            <p class="mb-0">
                                                Welcome to Bangladesh!
                                            </p> -->
                                        </div>
                                    </div>


                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="text_img_wel_video">
                                            <h3 class="fs15 font-weight-bold">Our Video</h3>
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/Cn4G2lZ_g2I"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </section>
            
            <?php
                include('brands.php');

            ?>
            <!--Brand One End-->

            <!-- whether section start here -->
            <?php
                include('weather.php');
            ?>
            <!-- wether section end here  -->
            <!--Site Footer Start-->
            <?php
                include('shared/footer.php'); 
            ?>
            <!--Site Footer End-->
        </div><!-- /.page-wrapper -->
    </header>

    
    <!-- /.search-popup -->

    <?php

    include('shared/scroll.php');

    ?>




    <!-- all js here  -->

    <!-- modal popup  -->
    <!-- <script>
    document.querySelector("#close").addEventListener("click",function(){
     document.querySelector(".popup").style.display="none";
        })
</script> -->

    <!-- countdown new here start -->
    
    <!-- countdown new here end -->

    <!-- <script src="https://executionbd.com/dgca57/assets/js/custom.js"></script> -->
    <?php

    include('shared/script.php');

    include('shared/modal.php');
    ?>