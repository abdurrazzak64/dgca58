<?php
include('shared/head.php');
?>



<body>

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

<section class="up-comming-events">
                    <!-- body text heading here  -->
                    <div class="container-fluid headding-text mb-2">
                        <div class="col-12">
                            <h1 class="text-center">Hotels</h1>
                        </div>
                    </div>
                    <!-- body text heading here end -->
                    <!-- new submenu-2 design start  -->

                    <div class="snb only_web">
                        <div class="inner">
                            <ul  class="snb-list snb-list10">
                                <!-- <li><a href="/sub01/greeting.html" class="selected">Greeting</a></li>
                                <li><a href="/sub01/agenda.html">Agenda</a></li>
                                <li><a href="/sub01/program.html">Programme</a></li>
                                <li><a href="/sub01/business.html">Order of Business</a></li>
                                <li><a style="padding: 1.21% 0;" href="/sub01/reference.html">Reference</br>Documents</a></li>
                                <li><a href="/sub01/delegations.html">List of Delegations</a></li>
                                <li><a href="/sub01/action.html">Action Items</a></li>
                                <li><a href="/sub01/draft.html">Draft Reports</a></li>
                                <li><a href="/sub01/meetings.html">Side Meetings</a></li> -->
                                <li><a  href="registration.html" >Registration</a></li>
                                <li><a  href="visha-information.html">Visa Information</a></li>
                                <li><a   href="vanue-information.html">Venue</a></li>
                                <li><a class="selected" href="recom-hotel.html">Hotels</a></li>
                                <li><a  style="padding: 1.21% 0;" href="airline-ticket-discount.html">Airline and Ticket Discounts</a></li>
                                <li><a style="padding: 1.21% 0;" href="accom-persons-programme.html">Accompanying Person's Programme</a></li>
                                <li><a style="padding: 1.21% 0;" href="trans-schedule.html">Transportation Schedule</a></li>
                                <li><a   href="exe-day.html">Excursion Day</a></li>
                                <li><a  href="about-bd.html">About Bangladesh</a></li>
                                
                            </ul>    
                        </div>                    
                    </div>
                    <!-- <div class="submenu_1">
                        <div class="container">
                            <ul id="myactive">
                                <a class="act" href="registration.html">Registration</a>
                                <a class="act " href="visha-information.html">Visa Information</a>
                                <a class="act " href="vanue-information.html">Venue</a>
                                <a class="act actv" href="recom-hotel.html">Hotels</a>
                                <a class="act" href="airline-ticket-discount.html">Airline and Ticket Discounts</a>
                                <a class="act" href="accom-persons-programme.html">Accompanying Person's Programme</a>
                                <a class="act" href="trans-schedule.html">Transportation Schedule</a>
                                <a class="act" href="exe-day.html">Excursion Day</a>
                                <a class="act" href="about-bd.html">About Bangladesh</a>
                            </ul>
                        </div>
                    </div> -->
                    <!-- new submenu-2 design end  -->
                    <!-- hotels  -->
            <div class="rtd typography-page">
                <div class="typography-section typography-section-border">
                    <div class="container hotel-container custom-hotel-container">
                        <div class="row card1 py-3">
                            <h3 class="fs19 col-12">Hotel InterContinental Dhaka (Venue)</h3>
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <div class="row">
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Address:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">1 Minto Rd, Dhaka 1000</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Tel:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="tel:+880255663030">+88 02 5566 3030</a></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Web:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="https://www.intercontinental.com/Dhaka" target="_blank">www.intercontinental.com/Dhaka</a></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Star Category:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">5 star</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from airport:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">14.8 km</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4 pr-0"><strong>Distance from city centre:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">2.9 km</div>
                                    <div class="col-12"><strong>Room rate:</strong></div>
                                    <div class="col-12">
                                        <table class="table table-bordered mt-1 mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Single</th>
                                                    <th>Double</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Presidential Suites</td>
                                                    <td>USD xxx.00 per night</td>
                                                    <td>USD xxx.00 per night</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <a href="https://www.ihg.com/intercontinental/hotels/us/en/dhaka/dachb/hoteldetail" class="btn btn-primary btn-sm book-now" target="_blank">Book Here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <img class="img-fluid" src="assets/images-2/hotel image/intercontinental.jpg" alt="Hotel Intercontinental, Dhaka, Bangladesh">
                            </div>
                        </div>

                        <div class="row card1 py-3 mt-5">
                            <h3 class="fs19 col-12">Pan Pacific Sonargaon Hotel</h3>
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <div class="row">
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Address:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">107 Kazi Nazrul Islam Ave, Dhaka</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Tel:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">
                                        <a href="tel:+88029128008">+88 02 9128 008</a>
                                        <br>
                                        <a href="tel:+880255028008">+88 02 5502 8008</a>
                                    </div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Web:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="https://www.panpacific.com/Dhaka" target="_blank">www.panpacific.com/Dhaka</a></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Star Category:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">5 star</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from venue:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">1.3 km</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from airport:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">13.8 km</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4 pr-0"><strong>Distance from city centre:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">4.7 km</div>
                                    <div class="col-12"><strong>Room rate:</strong></div>
                                    <div class="col-12">
                                        <table class="table table-bordered mt-1 mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Single</th>
                                                    <th>Double</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Presidential Suites</td>
                                                    <td>USD xxx.00 per night</td>
                                                    <td>USD xxx.00 per night</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <a href="https://www.panpacific.com/en/hotels-and-resorts/pp-dhaka.html" class="btn btn-primary btn-sm book-now" target="_blank">Book Here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <img class="img-fluid" src="assets/images-2/hotel image/pexels-pixabay-46160.jpg" alt="Hotel Pan Pacific Sonargaon, Dhaka, Bangladesh">
                            </div>
                        </div>

                        <div class="row card1 py-3 mt-5">
                            <h3 class="fs19 col-12">The Westin Dhaka</h3>
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <div class="row">
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Address:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">Plot 01, Road 45, Gulshan-2, Dhaka</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Tel:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">
                                        <a href="tel:+8802989188">+88 02 989 188</a>
                                        <br>
                                        <a href="tel:+8801755638282">+88 0175 5638 282</a>
                                    </div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Email:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="mailto:reservations.dhaka@westin.com">reservations.dhaka@westin.com</a></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Star Category:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"> star</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from venue:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">9.2 km</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from airport:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">9.8 km</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4 pr-0"><strong>Distance from city centre:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">9 km</div>
                                    <div class="col-12"><strong>Room rate:</strong></div>
                                    <div class="col-12">
                                        <table class="table table-bordered mt-1 mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Single</th>
                                                    <th>Double</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Presidential Suites</td>
                                                    <td>USD xxx.00 per night</td>
                                                    <td>USD xxx.00 per night</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <a href="https://www.marriott.com/hotels/travel/dacwi-the-westin-dhaka/" class="btn btn-primary btn-sm book-now" target="_blank">Book Here
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <img class="img-fluid" src="assets/images-2/hotel image/westin.jpg" alt="The Westin, Dhaka, Bangladesh">
                            </div>
                        </div>

                        <div class="row card1 py-3 mt-5">
                            <h3 class="fs19 col-12">Hotel Amari Dhaka</h3>
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <div class="row">
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Address:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">Plot 47, Road No-41, Gulshan-2</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Tel:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">
                                        <a href="tel:+880255059620">+88 02 5505 9620-29</a>
                                        <br>
                                        <a href="tel:+8801777719313">88 0177 7719 313</a>
                                    </div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Email:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="mailto:reservations.dhaka@amari.com">reservations.dhaka@amari.com</a></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Web:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="https://www.amari.com/dhaka/" target="_blank">https://www.amari.com/dhaka/</a></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Star Category:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"> star</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from venue:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">8.8 km</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from airport:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">10.9 km</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4 pr-0"><strong>Distance from city centre:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">9.5 km</div>
                                    <div class="col-12"><strong>Room rate:</strong></div>
                                    <div class="col-12">
                                        <table class="table table-bordered mt-1 mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Single</th>
                                                    <th>Double</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Presidential Suites</td>
                                                    <td>USD xxx.00 per night</td>
                                                    <td>USD xxx.00 per night</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <a href="https://www.amari.com/dhaka/" class="btn btn-primary btn-sm book-now" target="_blank">Book Here
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <img class="img-fluid" src="assets/images-2/hotel image/amari.jpg" alt="Hotel Amari, Dhaka, Bangladesh">
                            </div>
                        </div>

                        <div class="row card1 py-3 mt-5">
                            <h3 class="fs19 col-12">Lakeshore Hotel</h3>
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <div class="row">
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Address:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">Road 41, House 46, Gulshan - 2, Dhaka</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Tel:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">
                                        <a href="tel:+88029859991">+88 02 9859 991</a>
                                        <br>
                                        <a href="tel:+8801712028988">+88 0171 2028 988</a>
                                    </div>
                                    <!-- <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Email:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="mailto:emailhere">emailhere</a></div> -->
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Web:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="https://lakeshorehotel.com.bd/" target="_blank">www.lakeshorehotel.com.bd</a></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Star Category:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"> star</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from venue:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">9.2 km</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from airport:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">10.9 km</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4 pr-0"><strong>Distance from city centre:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">9.5 km</div>
                                    <div class="col-12"><strong>Room rate:</strong></div>
                                    <div class="col-12">
                                        <table class="table table-bordered mt-1 mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Single</th>
                                                    <th>Double</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Presidential Suites</td>
                                                    <td>USD xxx.00 per night</td>
                                                    <td>USD xxx.00 per night</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <a href="https://lakeshorehotel.com.bd/" class="btn btn-primary btn-sm book-now" target="_blank">Book Here
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <img class="img-fluid" src="assets/images-2/hotel image/lakeshorehotel.jpg" alt="Lakeshore Hotel, Dhaka, Bangladesh">
                            </div>
                        </div>

                        <div class="row card1 py-3 mt-5">
                            <h3 class="fs19 col-12">Long Beach Suites</h3>
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <div class="row">
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Address:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">Plot CEN 4G, Road 104, Gulshan- 2, Dhaka</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Tel:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">
                                        <a href="tel:+880255049712">+88 02 5504 9712-18</a>
                                        <br>
                                        <a href="tel:+8801755557942">+88 0175 5557 942</a>
                                    </div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Email:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="mailto:sales@longbeachsuitesbd.com">sales@longbeachsuitesbd.com</a></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Web:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="https://longbeachsuitesbd.com/" target="_blank">www.longbeachsuitesbd.com</a></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Star Category:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"> star</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from venue:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">8.8 km</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from airport:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">9.6 km</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4 pr-0"><strong>Distance from city centre:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">8.7 km</div>
                                    <div class="col-12"><strong>Room rate:</strong></div>
                                    <div class="col-12">
                                        <table class="table table-bordered mt-1 mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Single</th>
                                                    <th>Double</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Presidential Suites</td>
                                                    <td>USD xxx.00 per night</td>
                                                    <td>USD xxx.00 per night</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <!-- <a
                                            href="wwwmarriottcom"
                                            class="btn btn-primary btn-sm book-now" target="_blank">Book Here
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <img class="img-fluid" src="assets/images-2/hotel image/longbeach.jpg" alt="Long Beach Suites, Dhaka, Bangladesh">
                            </div>
                        </div>

                        <div class="row card1 py-3 mt-5">
                            <h3 class="fs19 col-12">Hotel Lake Castle</h3>
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <div class="row">
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Address:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">House 1A, Road 68/A, Gulshan-2, Dhaka</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Tel:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="tel:+88028812812">+88 02 8812 812</a></div>
                                    <!-- <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Email:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="mailto:emailhere">emailhere</a></div> -->
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Web:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="http://hotellakecastle.com/" target="_blank">www.hotellakecastle.com</a></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Star Category:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"> star</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from venue:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">8.5 km</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from airport:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">8.6 km</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4 pr-0"><strong>Distance from city centre:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">10.1 km</div>
                                    <div class="col-12"><strong>Room rate:</strong></div>
                                    <div class="col-12">
                                        <table class="table table-bordered mt-1 mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Single</th>
                                                    <th>Double</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Presidential Suites</td>
                                                    <td>USD xxx.00 per night</td>
                                                    <td>USD xxx.00 per night</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <a href="http://hotellakecastle.com/" class="btn btn-primary btn-sm book-now" target="_blank">Book Here
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <img class="img-fluid" src="assets/images-2/hotel image/lakecastle.jpg" alt="Hotel Lake Castle, Dhaka, Bangladesh">
                            </div>
                        </div>

                        <div class="row card1 py-3 mt-5">
                            <h3 class="fs19 col-12">Six Seasons Hotel</h3>
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <div class="row">
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Address:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">House 19, Road 96, Gulshan-2, Dhaka</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Tel:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">
                                        <a href="tel:+88029840789">+88 02 9840 789-92</a>
                                        <br>
                                        <a href="tel:+8801955393291">+88 0195 5393 291</a>
                                    </div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Email:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="mailto:info@sixseasonshotel.com">info@sixseasonshotel.com</a></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Web:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="https://sixseasonshotel.com/" target="_blank">www.sixseasonshotel.com/</a></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Star Category:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"> star</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from venue:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">9 km</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from airport:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">9 km</div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4 pr-0"><strong>Distance from city centre:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8">9 km</div>
                                    <div class="col-12"><strong>Room rate:</strong></div>
                                    <div class="col-12">
                                        <table class="table table-bordered mt-1 mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Single</th>
                                                    <th>Double</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Presidential Suites</td>
                                                    <td>USD xxx.00 per night</td>
                                                    <td>USD xxx.00 per night</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <a href="sixseasonshotel.com" class="btn btn-primary btn-sm book-now" target="_blank">Book Here
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <img class="img-fluid" src="assets/images-2/hotel image/sixseasons.jpg" alt="Six Seasons Hotel, Dhaka, Bangladesh">
                            </div>
                        </div>

                        <!-- <div class="row card1 py-3 mt-5">
                            <h3 class="fs19 col-12">The Holiday Inn Dhaka</h3>
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <div class="row">
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Address:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Tel:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="tel:"></a></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Email:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="mailto:"></a></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Web:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"><a href="" target="_blank"></a></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Star Category:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from venue:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4"><strong>Distance from airport:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"></div>
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4 pr-0"><strong>Distance from city centre:</strong></div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8"></div>
                                    <div class="col-12"><strong>Room rate:</strong></div>
                                    <div class="col-12">
                                        <table class="table table-bordered mt-1 mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Single</th>
                                                    <th>Double</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Presidential Suites</td>
                                                    <td>USD xxx.00 per night</td>
                                                    <td>USD xxx.00 per night</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <a
                                            href="Javascript:void(0);"
                                            class="btn btn-primary btn-sm book-now">Book Here
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <img
                                    class="img-fluid"
                                    src="https://executionbd.com/dgca57/assets/img/hotel/intercontinental.jpg"
                                    alt="The Holiday Inn Dhaka, Dhaka, Bangladesh">
                            </div>
                        </div> -->

                        <!-- <div class="row card1 py-3 mt-5">
                   <div class="col-12">
                      <ul class="fa-ul mb-0">
                         <li>
                            <span class="fa-li"><i class="fas fa-info-circle info-text fs21"></i></span> The above rates on bed &amp; breakfast basis are nett including <span class="flagged">xx% service tax, xx% Government VAT,</span> daily breakfast, airport arrival/departure transfer, and Wi-Fi.
                         </li>
                         <li class="mt-4">
                            <span class="fa-li"><i class="fas fa-info-circle info-text fs21"></i></span> At the time of booking, if the rooms are not available at your choice of hotel, rooms will be booked in a similar category of another hotel.
                         </li>
                      </ul>
                   </div>
                </div> -->

                    </div>
                </div>
            </div>
            <!-- hotels  -->
  
                </section>
            
            

            
            
            <!--Site Footer Start-->
            <?php
                include('shared/footer.php'); 
            ?>
            <!--Site Footer End-->
        </div><!-- /.page-wrapper -->
    </header>

    
    <!-- /.search-popup -->

    <?php

    include('shared/script.php');

    include('shared/modal.php');
    ?>