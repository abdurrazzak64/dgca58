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
                    <a href="gallery.php" class="btn btn-primary">Gallery</a>

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

            

            <!--Main Slider End-->


            <section class="up-comming-events">
                    <div class="container-fluid headding-text mb-2">
                        <div class="col-12">
                            <h1 class="text-center">Contact</h1>
                        </div>
                    </div>
                    <!-- body text heading here start  -->
                    <!-- <div data-canvas="container">
                <div class="section-title-page area-bg area-bg_dark area-bg_op_60">
                    <div class="area-bg__inner">
                        <div class="container">
                            <div class="row">
                                <div class="col offset-lg-3">
                                    <div class="b-title-page__wrap">
                                        <h1 class="b-title-page">Contact</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
                    <!-- body text heading end here  -->

                    <div class="rtd typography-page">
                        <div class="typography-section typography-section-border">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="https://executionbd.com/dgca57/contact-mail" class="form-horizontal contact-custom" id="contact_form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                            <div class="form-group">
                                                <label class="mt-5 mt-md-0">Full Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Full Name" name="full_name">
                                            </div>
                                            <div class="form-group">
                                                <label>Organization</label>
                                                <input type="text" class="form-control" placeholder="Enter Organization" name="organization">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Enter email" name="contact_email">
                                            </div>
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <input type="text" class="form-control" placeholder="Enter Subject" name="contact_subject">
                                            </div>
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea class="form-control" placeholder="Write your message..." rows="5" name="contact_message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary cbutton btn-sm">Submit</button>
                                        </form>
                                    </div>
                                    <div class="col-md-6 contact-link custom-contact">
                                        <ul class="fa-ul mb-0 ml-4 contact-ul ">
                                            <li>
                                                <span class="fa-li"><i class="fas fa-plane"></i></span>
                                                <strong>For Registration enquiries:</strong> <br>
                                                <i class="fas fa-user"></i> : .............................<br>
                                                <i class="fas fa-envelope"></i> : <a href="mailto:registration@dgca58.gov.bd">registration@dgca58.gov.bd</a> <br>
                                                <i class="fas fa-phone"></i> : <a href="tel:+8800000000000">+88 0000 0000 000</a>
                                            </li>
                                            <li class="mt-4">
                                                <span class="fa-li"><i class="fas fa-plane"></i></span>
                                                <strong>For Hotel enquiries:</strong> <br>
                                                <i class="fas fa-user"></i> : .............................<br>
                                                <i class="fas fa-envelope"></i> : <a href="mailto:hotels@dgca58.gov.bd">hotels@dgca58.gov.bd</a> <br>
                                                <i class="fas fa-phone"></i> : <a href="tel:+8800000000000">+88 0000 0000 000</a>
                                            </li>
                                            <li class="mt-4">
                                                <span class="fa-li"><i class="fas fa-plane"></i></span>
                                                <strong>For Exhibition enquiries:</strong> <br>
                                                <i class="fas fa-user"></i> : .............................<br>
                                                <i class="fas fa-envelope"></i> : <a href="mailto:exhibition@dgca58.gov.bd">exhibition@dgca58.gov.bd</a> <br>
                                                <i class="fas fa-phone"></i> : <a href="tel:+8800000000000">+88 0000 0000 000</a>
                                            </li>
                                            <li class="mt-4">
                                                <span class="fa-li"><i class="fas fa-plane"></i></span>
                                                <strong>For Sponsorship enquiries:</strong> <br>
                                                <i class="fas fa-user"></i> : .............................<br>
                                                <i class="fas fa-envelope"></i> : <a href="mailto:sponsors@dgca58.gov.bd">sponsors@dgca58.gov.bd</a> <br>
                                                <i class="fas fa-phone"></i> : <a href="tel:+8800000000000">+88 0000 0000 000</a>
                                            </li>
                                            <li class="mt-4">
                                                <span class="fa-li"><i class="fas fa-plane"></i></span>
                                                <strong>For other enquiries:</strong> <br>
                                                <i class="fas fa-user"></i> : .............................<br>
                                                <i class="fas fa-envelope"></i> : <a href="mailto:secretariat@dgca58.gov.bd">secretariat@dgca58.gov.bd</a> <br>
                                                <!-- <i class="fas fa-phone"></i> : <a href="tel:+88028901406">+88 02 8901 406</a> -->
                                                <i class="fas fa-phone"></i> : <a href="tel:+8800000000000">+88 0000 0000 000</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><?php
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