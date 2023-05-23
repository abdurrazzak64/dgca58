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

            

            <!--Main Slider End-->


            <section class="up-comming-events">

                <!-- body text heading here  -->
                <div class="container-fluid headding-text mb-2">
                    <div class="col-12">
                        <h1 class="text-center">Final Report</h1>
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
                            <li><a  href="update-floor-plan.html">Updated Floor Plan</a></li>
                            <li><a class="selected" href="final-report.html">Final Report</a></li>
                        </ul>   
                    </div>                    
                </div>
                <!-- <div class="submenu_2">
                    <div class="container">
                        <ul id="myactive">
                            <a class=" act " href="conference-bulletin.html">Conference Bulettin</a>
                            <a class="act " href="conference-agenda.html">Agenda</a>
                            <a class="act " href="conference-programme.html">Conference Programme</a>
                            <a class="act " href="order-of-business.html">Order of Business</a>
                            <a class="act " href="discussion-papers.html">Discussion Papers</a>
                            <a class="act " href="information-papers.html">Information Papers</a>
                            <a class="act " href="guidence-on-preparation-of-papers.html">Guidence on Preparation of Papers</a>
                            <a class="act " href="side-meeting.html">Side Meeting</a>
                            <a class="act " href="conference-action-items.html">Conference Action Items</a>
                            <a class="act actv" href="final-report.html">Final Report</a>
                        </ul>
                    </div>
                </div> -->
                <!-- new submenu-2 design end  -->
                <!-- final report  -->
                <div class="rtd typography-page">
                    <div class="typography-section typography-section-border">
                        <div class="container">
                            <div class="row">
                                <div data-search="">
                                    <div class="search_wrap">
                                        <div data-select-box="">
                                            <select class="opt" name="" id="">
                                                <option value="">Subject</option>
                                                <option value="">Contents</option>
                                            </select>
                                        </div>
                                        <input type="text" title="Search Keyword" placeholder="Search Keyword" name="search_input" id="search_str">
                                        <button type="submit">
                                            <span>Search</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div data-board-list="">
                                    <table id="tblwrap">
                                        <colgroup>
                                            <col width="10%" class="no">
                                            <col width="63%">
                                            <col width="17%">
                                            <col width="10%" class="cnt">
                                        </colgroup>
                                        <tbody> 
                                            <tr class="idx_15 board_web" style="background:#f4f4f4;">	
                                                <th class="txt-black font5 number tc" scope="row">No.</th>	
                                                <th class="txt-black font5 tit tit01 tc">Title </th>	
                                                <th class="txt-black font5 update tc">Update Date </th>
                                                <th class="txt-black font5 writer tc">Writer</th>
                                            </tr>
                
                                            
                                              
                                            <tr class="idx_15">	
                                                
                                                <!-- <td class="number" scope="row">1</td>	
                                                <td class="tit tit01">
                                                    <a href="#">Conference Agenda</a>
                                                </td>	
                                                <td class="">2023-10-15</td>
                                                <td class="writer">administrator</td> -->
                                                
                                            </tr>
                                       </tbody>
                                    </table>
                                    
                                    
                                    <div data-paging="">	<ul id="pagination"><li class="active"><span class="item">1</span></li>	</ul></div>                    
                                </div>
                                <!-- <div class="accordion" id="accordionExample">
                                    <div class="accordion-item custom_accordion">
                                      <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Category Agenda Item-1
                                        </button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          <table class="table">
                                            <tr>
                                                <th>Paper No.</th>
                                                <th>Title</th>
                                                <th>Update Date</th>
                                                <th>Presenter</th>
                                            </tr>
                                            <tr>
                                                <tbody class="table">
                                                    <td>57/DP/1/2</td>
                                                    <td>	
                                                        <a href="assets/upload/paper_181_220702_2143.pdf" target="_blank">
                                                        Aviation Recovery and Development Direction of Aviation Industry After the Pandemic</a></td>
                                                        <td>2023-07-02</td>
                                                        <td>Bangladesh</td>
                                                  </tbody>
                                                  <tbody class="table">
                                                    <td>57/DP/1/2</td>
                                                    <td>	
                                                        Aviation Recovery and Development Direction of Aviation Industry After the Pandemic</td>
                                                        <td>2023-07-02</td>
                                                        <td>Bangladesh</td>
                                                  </tbody>
                                            </tr>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Category Agenda Item-2
                                        </button>
                                      </h2>
                                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <table class="table">
                                                <tr>
                                                    <th>Paper No.</th>
                                                    <th>Title</th>
                                                    <th>Update Date</th>
                                                    <th>Presenter</th>
                                                </tr>
                                                <tr>
                                                    <tbody class="table">
                                                        <td>57/DP/1/2</td>
                                                        <td>	
                                                            Aviation Recovery and Development Direction of Aviation Industry After the Pandemic</td>
                                                            <td>2023-07-02</td>
                                                            <td>Bangladesh</td>
                                                      </tbody>
                                                      <tbody class="table">
                                                        <td>57/DP/1/2</td>
                                                        <td>	
                                                            Aviation Recovery and Development Direction of Aviation Industry After the Pandemic</td>
                                                            <td>2023-07-02</td>
                                                            <td>Bangladesh</td>
                                                      </tbody>
                                                </tr>
                                              </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Category Agenda Item-3
                                        </button>
                                      </h2>
                                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <table class="table">
                                                <tr>
                                                    <th>Paper No.</th>
                                                    <th>Title</th>
                                                    <th>Update Date</th>
                                                    <th>Presenter</th>
                                                </tr>
                                                <tr>
                                                    <tbody class="table">
                                                        <td>57/DP/1/2</td>
                                                        <td>	
                                                            Aviation Recovery and Development Direction of Aviation Industry After the Pandemic</td>
                                                            <td>2023-07-02</td>
                                                            <td>Bangladesh</td>
                                                      </tbody>
                                                      <tbody class="table">
                                                        <td>57/DP/1/2</td>
                                                        <td>	
                                                            Aviation Recovery and Development Direction of Aviation Industry After the Pandemic</td>
                                                            <td>2023-07-02</td>
                                                            <td>Bangladesh</td>
                                                      </tbody>
                                                </tr>
                                              </table>
                                        </div>
                                      </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- final report  -->
            </section>
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
