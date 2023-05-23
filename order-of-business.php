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
                            <h1 class="text-center">Order of Business</h1>
                        </div>
                    </div>

                    <div class="snb only_web">
                        <div class="inner">
                            <ul  class="snb-list snb-list9">
                                <!-- <li><a href="/sub01/greeting.html" class="selected">Greeting</a></li>
                                <li><a href="/sub01/agenda.html">Agenda</a></li>
                                <li><a href="/sub01/program.html">Programme</a></li>
                                <li><a href="/sub01/business.html">Order of Business</a></li>
                                <li><a style="padding: 1.21% 0;" href="/sub01/reference.html">Reference</br>Documents</a></li>
                                <li><a href="/sub01/delegations.html">List of Delegations</a></li>
                                <li><a href="/sub01/action.html">Action Items</a></li>
                                <li><a href="/sub01/draft.html">Draft Reports</a></li>
                                <li><a href="/sub01/meetings.html">Side Meetings</a></li> -->
                                <li><a  href="conference-bulletin.html" >Conference Bulettin</a></li>
                                <li><a  href="conference-agenda.html">Agenda</a></li>
                                <li><a   href="conference-programme.html">Programme</a></li>
                                <li><a class="selected" href="order-of-business.html">Order of Business</a></li>
                                <li><a href="discussion-papers.html">Discussion Papers</a></li>
                                <li><a href="information-papers.html">Information Papers</a></li>
                                <li><a href="guidence-on-preparation-of-papers.html">Guidence Papers</a></li>
                                <li><a href="side-meeting.html">Side Meeting</a></li>
                                <li><a href="conference-action-items.html">Action Items</a></li>
                                <li><a href="useful-info.html">Useful Information</a></li>
                                
                            </ul>    
                        </div>                    
                    </div>
                     <!-- new submenu-2 design start  -->
                     <!-- <div class="submenu_2">
                        <div class="container">
                            <ul id="myactive">
                                <a class=" act " href="conference-bulletin.html">Conference Bulettin</a>
                                <a class="act " href="conference-agenda.html">Agenda</a>
                                <a class="act " href="conference-programme.html">Conference Programme</a>
                                <a class="act actv" href="order-of-business.html">Order of Business</a>
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
                     <!-- order of business  -->
                    <div class="rtd typography-page">
                        <div class="typography-section typography-section-border">
                            <div class="container">
                                <div class="column">
            
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
                                                    <td class="number" scope="row">1</td>	
                                                    <td class="tit tit01">
                                                        <a href="#">Order Of Business</a>
                                                    </td>	
                                                    <td class="">2023-10-15</td>
                                                    <td class="writer">administrator</td>
                                                </tr>
                                                                        </tbody>
                                        </table>
                                        
                                        
                                        <div data-paging="">	<ul id="pagination"><li class="active"><span class="item">1</span></li>	</ul></div>                    
                                    </div>
                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- order of business  -->  
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