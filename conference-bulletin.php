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
                    <div class="container-fluid headding-text mb-2">
                        <div class="col-12">
                            <h1 class="text-center">Conference Bulletin</h1>
                        </div>
                    </div>
                    <!-- new submenu-2 design start  -->

                    <div class="snb only_web">
                        <div class="inner">
                            <ul class="snb-list snb-list9">
                                <!-- <li><a href="/sub01/greeting.html" class="selected">Greeting</a></li>
                                <li><a href="/sub01/agenda.html">Agenda</a></li>
                                <li><a href="/sub01/program.html">Programme</a></li>
                                <li><a href="/sub01/business.html">Order of Business</a></li>
                                <li><a style="padding: 1.21% 0;" href="/sub01/reference.html">Reference</br>Documents</a></li>
                                <li><a href="/sub01/delegations.html">List of Delegations</a></li>
                                <li><a href="/sub01/action.html">Action Items</a></li>
                                <li><a href="/sub01/draft.html">Draft Reports</a></li>
                                <li><a href="/sub01/meetings.html">Side Meetings</a></li> -->
                                <li><a href="conference-bulletin.html" class="selected">Conference Bulettin</a></li>
                                <li><a href="conference-agenda.html">Agenda</a></li>
                                <li><a href="conference-programme.html">Programme</a></li>
                                <li><a href="order-of-business.html">Order of Business</a></li>
                                <li><a href="discussion-papers.html">Discussion Papers</a></li>
                                <li><a href="information-papers.html">Information Papers</a></li>
                                <li><a href="guidence-on-preparation-of-papers.html">Guidence Papers</a></li>
                                <li><a href="side-meeting.html">Side Meeting</a></li>
                                <li><a href="conference-action-items.html">Action Items</a></li>
                                <li><a href="useful-info.html">Useful Information</a></li>

                            </ul>
                        </div>
                    </div>

                    <!-- <div class="submenu_2">
                        <div class="container">
                            <ul id="myactive">
                                <a class=" act actv" href="conference-bulletin.html">Conference Bulettin</a>
                                <a class="act" href="conference-agenda.html">Agenda</a>
                                <a class="act" href="conference-programme.html">Conference Programme</a>
                                <a class="act" href="order-of-business.html">Order of Business</a>
                                <a class="act" href="discussion-papers.html">Discussion Papers</a>
                                <a class="act" href="information-papers.html">Information Papers</a>
                                <a class="act" href="guidence-on-preparation-of-papers.html">Guidence on Preparation of Papers</a>
                                <a class="act" href="side-meeting.html">Side Meeting</a>
                                <a class="act" href="conference-action-items.html">Conference Action Items</a>
                                <a class="act" href="final-report.html">Final Report</a>
                            </ul>
                        </div>
                    </div> -->
                    <!-- new submenu-2 design end  -->
                    <!-- paragraph  -->
                    <div class="rtd typography-page">
                        <div class="typography-section typography-section-border">
                            <!-- <div class="container">
                                    <div class="row">
                                        <div class=" searchselect mb-5">
                                            <ul>
                                                <li>
                                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                        <option selected>Subject</option>
                                                        <option value="1">Contents</option>
                                                      </select>
                                                </li>
                                                <li>
                                                    
                                                        <input type="text" class="form-control" placeholder="Search Keyword" >
                                                </li>
                                                <li><button class="btn btn-outline-secondary" type="button" id="button-addon2"><a href="#">search</a></button></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
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
                                </div> -->



                            <div class="container">
                                <div class="column">

                                    <!-- <script type="text/javascript">
                                        function go_search(r_url) {
                                            var frm = document.searchform;

                                            search_type = frm.search_type.value;
                                            term = frm.term.value;

                                            if (term == "") {
                                                alert("Input search terms");
                                                return false;
                                            }
                                            url = r_url + "?act=list&type=" + search_type + "&term=" + term;
                                            document.location.href = url;
                                        }

                                    </script> -->

                                    <div class=" inner">
                                        <!--search-->
                                        <div data-search="" class="AWbbs_f_search" style="margin-top:30px;">
                                            <div class="search_wrap">
                                                <form name="searchform">

                                                    <div data-select-box="">
                                                        <select class="opt" name="search_type">
                                                            <option value="1">Subject</option>
                                                            <option value="2">Contents</option>
                                                        </select>
                                                    </div>
                                                    <input name="term" type="text" value="" placeholder="Search Keyword">
                                                    <button type="button" onclick="go_search('/sub05/notice.html');return false;"><span>Search</span></button>

                                                </form>
                                            </div>
                                        </div>
                                        <!--// search-->

                                        <!--list-->
                                        <div data-board-list="" class="table-responsive boardList">
                                            <table id="tblwrap" class="board" width="100%" border="0" cellpadding="0" cellspacing="0" style="border-top:1px solid #333;border-bottom:1px solid #efefef">
                                                <colgroup>
                                                    <col class="no">
                                                    <col>
                                                    <col class="cnt">
                                                </colgroup>
                                                <tbody>
                                                    <tr>
                                                        <th class="number" scope="row">5
                                                        </th>
                                                        <td class="tit">
                                                            <a href="#">DGCA58_FAQ about Entry</a>
                                                            <span class="date">2023-10-15</span>
                                                        </td>
                                                        <td class="misc">
                                                            <div class="misc_wrap">
                                                                <ul>
                                                                    <li class="file">
                                                                        <!-- <a class="item" href="#" title="Download">file</a> -->
                                                                    </li>
                                                                    <li class="view">
                                                                        <span class="item">599</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="number" scope="row">4
                                                        </th>
                                                        <td class="tit">
                                                            <a href="">DGCA58_Preparation for Entry and Quarantine_220702</a>
                                                            <span class="date">2023-10-15</span>
                                                        </td>
                                                        <td class="misc">
                                                            <div class="misc_wrap">
                                                                <ul>
                                                                    <li class="file">
                                                                        <!-- <a class="item" href="#" title="Download">file</a> -->
                                                                    </li>
                                                                    <li class="view">
                                                                        <span class="item">606</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="number" scope="row">3
                                                        </th>
                                                        <td class="tit">
                                                            <a href="#">Conference Bulletin_02</a>
                                                            <span class="date">2023-10-15</span>
                                                        </td>
                                                        <td class="misc">
                                                            <div class="misc_wrap">
                                                                <ul>
                                                                    <li class="file">
                                                                        <!-- <a class="item" href="#" title="Download">file</a> -->
                                                                    </li>
                                                                    <li class="view">
                                                                        <span class="item">480</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="number" scope="row">2
                                                        </th>
                                                        <td class="tit">
                                                            <a href="#">Conference Bulletin_01_1</a>
                                                            <span class="date">2023-10-15</span>
                                                        </td>
                                                        <td class="misc">
                                                            <div class="misc_wrap">
                                                                <ul>
                                                                    <li class="file">
                                                                        <!-- <a class="item" href="#" title="Download">file</a> -->
                                                                    </li>
                                                                    <li class="view">
                                                                        <span class="item">656</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="number" scope="row">1
                                                        </th>
                                                        <td class="tit">
                                                            <a href="#">Conference Bulletin_01</a>
                                                            <span class="date">2023-10-15</span>
                                                        </td>
                                                        <td class="misc">
                                                            <div class="misc_wrap">
                                                                <ul>
                                                                    <li class="file">
                                                                        <!-- <a class="item" href="#" title="Download">file</a> -->
                                                                    </li>
                                                                    <li class="view">
                                                                        <span class="item">586</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!--/ list-->

                                       

                                        <!--paging-->
                                        <div data-paging="" class="paging">
                                            <!-- <ul class="pagination">
                                                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                                                <li class="active"><a href="#!">1</a></li>
                                                <li class="waves-effect"><a href="#!">2</a></li>
                                                <li class="waves-effect"><a href="#!">3</a></li>
                                                <li class="waves-effect"><a href="#!">4</a></li>
                                                <li class="waves-effect"><a href="#!">5</a></li>
                                                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                                            </ul> -->
                                            <!-- <ul class="pager">
                                                <li class="previous prev btn"><a href="?page=1" class="item">page</a></li>
                                                <li class="active">
                                                    <a href="?page=1" class="item">1</a>
                                                </li>
                                                <li class="next btn"><a href="?page=1" class="item"> page page</a></li>
                                            </ul> -->
                                        </div>
                                        <!--/ paging-->


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- paragraph  -->

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