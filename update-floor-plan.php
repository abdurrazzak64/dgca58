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
                            <h1 class="text-center">Updated Floor Plan</h1>
                        </div>
                    </div>
                    <!-- new submenu-2 design start  -->

                    <div class="snb only_web">
                        <div class="inner">
                            <ul class="snb-list snb-list6">
                                <li><a href="vendor-agreement.html" >Vendor Agreement</a></li>
                                <li><a  href="exibition-registration.html">Exhibition Registration</a></li>
                                <li><a  href="exibition-services.html">Exhibition Services</a></li>
                                <li><a  style="letter-spacing: -1px;" href="acknowledgement.html">Acknowledgement</a></li>
                                <li><a class="selected" href="update-floor-plan.html">Updated Floor Plan</a></li>
                                <li><a href="final-report.html">Final Report</a></li>
                            </ul>   
                        </div>                    
                    </div>
                    <!-- <div class="submenu_3">
                        <div class="container">
                            <ul id="myactive">
                                <a class="act " href="vendor-agreement.html">Vendor Agreement</a>
                                <a class="act " href="exibition-registration.html">Exhibition Registration</a>
                                <a class="act" href="exibition-services.html">Exhibition Services</a>
                                <a class="act " href="acknowledgement.html">Acknowledgement</a>
                                <a class="act actv" href="update-floor-plan.html">Updated Floor Plan</a>
                            </ul>
                        </div>
                    </div> -->
                    <!-- new submenu-2 design end  -->
                    <!-- Update Floor Plan  -->
                    <div class="rtd typography-page">
                        <div class="typography-section typography-section-border">
                            <div class="container">
                                <div class="row">
                                    <div data-desc-content="">
                                        <div class="desc-box ">
                                            <div class="desc">
                                                <p class="desc-txt font3 mgb10">
                                                    - The exhibition booth floor plan will be updated according to the booth contract status.                             
                                                </p>                            
                         
                                                <table class="tableList tc">
                                                    <colgroup>
                                                        <col width="10%">
                                                        <col width="40%">
                                                        <col width="10%">
                                                        <col width="40%">
                                                    </colgroup>
                                                    <thead>
                                                        <tr>
                                                            <th class="fp_btn" scope="col">Booth No.</th>
                                                            <th class="fp_btn" scope="col">Name</th>
                                                            <th class="fp_btn" scope="col">Booth No.</th>
                                                            <th class="fp_btn" scope="col">Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="tc">01</td>
                                                            <td class="tl">Bangladesh Civil Aviation Association</td>
                                                            <td class="tc">08</td>
                                                            <td class="tl">EMPIC</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tc">02</td>
                                                            <td class="tl">ASPEQ</td>
                                                            <td class="tc">09</td>
                                                            <td class="tl">CAA Bangladesh</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tc">03</td>
                                                            <td class="tl">Bangladesh Airports Corporation</td>
                                                            <td class="tc">10</td>
                                                            <td class="tl"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tc">04</td>
                                                            <td class="tl">NOKIA</td>
                                                            <td class="tc">11</td>
                                                            <td class="tl"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tc">05</td>
                                                            <td class="tl">VariFlight</td>
                                                            <td class="tc">12</td>
                                                            <td class="tl"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tc">06</td>
                                                            <td class="tl">THALES</td>
                                                            <td class="tc">13</td>
                                                            <td class="tl"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tc">07</td>
                                                            <td class="tl">UAE GCAA</td>
                                                            <td class="tc">14</td>
                                                            <td class="tl"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>   
                                            </div>
                                        </div>     
                                        <div class="desc-box">
                                            <div class="desc">
                                                <img src="./assets/images-2/hotel image/floorplan4.png" alt="">	                       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Update Floor Plan  -->

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