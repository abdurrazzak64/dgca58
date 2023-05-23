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
                        <h1 class="text-center">Information Papers</h1>
                    </div>
                </div>
                <!-- new submenu-2 design start  -->

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
                            <li><a  href="order-of-business.html">Order of Business</a></li>
                            <li><a  href="discussion-papers.html">Discussion Papers</a></li>
                            <li><a class="selected" href="information-papers.html">Information Papers</a></li>
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
                            <a class=" act " href="conference-bulletin.html">Conference Bulettin</a>
                            <a class="act " href="conference-agenda.html">Agenda</a>
                            <a class="act " href="conference-programme.html">Conference Programme</a>
                            <a class="act " href="order-of-business.html">Order of Business</a>
                            <a class="act " href="discussion-papers.html">Discussion Papers</a>
                            <a class="act actv" href="information-papers.html">Information Papers</a>
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
                            <div data-board-list="">
                                <table id="tblwrap">
                                    <colgroup>
                                        <col width="21%;" class="no">
                                        <col width="59%;">
                                        <col width="10%;">
                                        <col width="10%">
                                    </colgroup>
                                    <tbody> 
                                        <tr class="idx_15 board_web" style="background:#f4f4f4;">	
                                            <th class="txt-black font5 number tl" scope="row">Paper No.</th>	
                                            <th class="txt-black font5 tit tit01 tc">Title</th>
                                            <th class="txt-black font5 update tc">Update Date</th>
                                            <th class="txt-black font5 Presenter tc">Presenter</th>
                                        </tr>
                                     
                                        
            
                                     
                                        </tbody><tbody class="idx-body">
                                            <tr class="idx-ttl"> 
                                                <td colspan="4" class="tit tit01">
                                                    <div class="ico-img fl"></div>
                                                    <span class="txt-blue font5">Category : Agenda Item 3</span>   
                                                </td>
                                            </tr> 
                                         
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/3/6</td>
                                                <td class="tit tit01">
                                                    <a href="#">Thailand Aviation Safety Action Plan</a></td>	
                                                <td class="update">2023-06-29</td>
                                                <td class="presenter">Thailand</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/3/35</td>
                                                <td class="tit tit01">
                                                    <a href="#">Data Collection, Analysis, Integration and Sharing for Better Trend Monitoring and Decision Making</a></td>	
                                                <td class="update">2023-06-28</td>
                                                <td class="presenter">Pakistan</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/3/34</td>
                                                <td class="tit tit01">
                                                    <a href="#">Revamping of Personnel Licencing System in Pakistan</a></td>	
                                                <td class="update">2023-06-28</td>
                                                <td class="presenter">Pakistan</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/3/33</td>
                                                <td class="tit tit01">
                                                    <a href="#">Regulatory Update On Unmanned Aircraft System In India</a></td>	
                                                <td class="update">2023-06-28</td>
                                                <td class="presenter">India</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/3/32</td>
                                                <td class="tit tit01">
                                                    <a href="#">Response System for the Appearance of Unlawful Drones at Incheon international Airport</a></td>	
                                                <td class="update">2023-06-28</td>
                                                <td class="presenter">Bangladesh</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/3/31</td>
                                                <td class="tit tit01">
                                                    <a href="#">Introduction of the Small Unmanned Aircraft System (sUAS) Safety Management System</a></td>	
                                                <td class="update">2023-06-28</td>
                                                <td class="presenter">Bangladesh</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/3/30</td>
                                                <td class="tit tit01">
                                                    <a href="#">Information Sharing on the Risk Based Safety Surveillance System of the Bangladesh</a></td>	
                                                <td class="update">2023-06-28</td>
                                                <td class="presenter">Bangladesh</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/3/29</td>
                                                <td class="tit tit01">
                                                    <a href="#">Use of ISAGO to Complement Oversight of Ground Handling Service Providers (GHSPS) and to Drive Global Standardization</a></td>	
                                                <td class="update">2023-06-28</td>
                                                <td class="presenter">IATA</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/3/28</td>
                                                <td class="tit tit01">
                                                    <a href="#">Update on the United States Federal Aviation Administration Unmanned Aircraft Systems Security Activities</a></td>	
                                                <td class="update">2023-06-28</td>
                                                <td class="presenter">USA</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/3/27</td>
                                                <td class="tit tit01">
                                                    <a href="#">Update on the United States Unmanned Aircraft Systems Integration Activities</a></td>	
                                                <td class="update">2023-06-28</td>
                                                <td class="presenter">USA</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/3/26</td>
                                                <td class="tit tit01">
                                                    <a href="#">Safety Assurance of Ground-Based Associated Elements of Unmanned Aircraft Systems</a></td>	
                                                <td class="update">2023-06-28</td>
                                                <td class="presenter">USA</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/3/25</td>
                                                <td class="tit tit01">
                                                    <a href="#">Strengthening International Safety Data Sharing and Developing Advanced Analytics for Effective Safety Management</a></td>	
                                                <td class="update">2023-06-28</td>
                                                <td class="presenter">USA</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/3/24</td>
                                                <td class="tit tit01">
                                                    <a href="#">Unauthorized Entry of UAVs into the National ATM - Need for Restructuring of Airspace</a></td>	
                                                <td class="update">2023-07-02</td>
                                                <td class="presenter">Bangladesh</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/3/23</td>
                                                <td class="tit tit01">
                                                    <a href="#">Collaboration to Mitigate Birdstrike</a></td>	
                                                <td class="update">2023-06-28</td>
                                                <td class="presenter">Indonesia</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/3/22</td>
                                                <td class="tit tit01">
                                                    <a href="#">Standing Water Detector</a></td>	
                                                <td class="update">2023-07-02</td>
                                                <td class="presenter">Indonesia</td>
                                            </tr>   
                                                    
                                        </tbody>
                                     
                                        <tbody class="idx-body">
                                            <tr class="idx-ttl"> 
                                                <td colspan="4" class="tit tit01">
                                                    <div class="ico-img fl"></div>
                                                    <span class="txt-blue font5">Category : Agenda Item 4</span>   
                                                </td>
                                            </tr> 
                                         
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/7</td>
                                                <td class="tit tit01">
                                                    <a href="#">Implementation of Short RNAV PBN STAR and SID Procedures Initiative in Malaysia</a></td>	
                                                <td class="update">2023-06-24</td>
                                                <td class="presenter">Malaysia</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/4</td>
                                                <td class="tit tit01">
                                                    <a href="#">Mongolian Airspace Current Situation and Planning</a></td>	
                                                <td class="update">2023-06-28</td>
                                                <td class="presenter">Mongolia</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/29</td>
                                                <td class="tit tit01">
                                                    <a href="#">Need for Proper Guidance to Establish and Upgrade the ATS Airspace Classification</a></td>	
                                                <td class="update">2023-07-01</td>
                                                <td class="presenter">Nepal</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/28</td>
                                                <td class="tit tit01">
                                                    <a href="#">UAS Traffic Management System Integration Activities in Bangladesh</a></td>	
                                                <td class="update">2023-06-25</td>
                                                <td class="presenter">Bangladesh</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/27</td>
                                                <td class="tit tit01">
                                                    <a href="#">K-UAM Grand Challenge Progress and Development Plan</a></td>	
                                                <td class="update">2023-06-25</td>
                                                <td class="presenter">Bangladesh</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/26</td>
                                                <td class="tit tit01">
                                                    <a href="#">Regulatory Update on Unmanned Aircraft System in India</a></td>	
                                                <td class="update">2023-06-24</td>
                                                <td class="presenter">India</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/25</td>
                                                <td class="tit tit01">
                                                    <a href="#">States PBN Implementation Progress</a></td>	
                                                <td class="update">2023-06-28</td>
                                                <td class="presenter">Pakistan</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/24</td>
                                                <td class="tit tit01">
                                                    <a href="#">Transitioning from Aeronautical Information Service (AIS) to Aeronautical Information Management (AIM) System</a></td>	
                                                <td class="update">2023-07-01</td>
                                                <td class="presenter">Pakistan</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/23</td>
                                                <td class="tit tit01">
                                                    <a href="#">Pakistan Surveillance Coverage</a></td>	
                                                <td class="update">2023-06-27</td>
                                                <td class="presenter">Pakistan</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/22</td>
                                                <td class="tit tit01">
                                                    <a href="#">Bangladesh National Air Navigation Plan 2.0 Planning and Implementation Management</a></td>	
                                                <td class="update">2023-06-25</td>
                                                <td class="presenter">Bangladesh</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/21</td>
                                                <td class="tit tit01">
                                                    <a href="#">Navigational Aids Check Using Drones in the Bangladesh</a></td>	
                                                <td class="update">2023-06-25</td>
                                                <td class="presenter">Bangladesh</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/20</td>
                                                <td class="tit tit01">
                                                    <a href="#">Implementation of Voluntary Reporting System</a></td>	
                                                <td class="update">2023-06-27</td>
                                                <td class="presenter">Bangladesh</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/19</td>
                                                <td class="tit tit01">
                                                    <a href="#">Adoptation of SWIM for K-UAM Implementation</a></td>	
                                                <td class="update">2023-06-25</td>
                                                <td class="presenter">Bangladesh</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/18</td>
                                                <td class="tit tit01">
                                                    <a href="#">The Roadmap for the Planning and Implementation of Data-Link Air Traffic Control Services for All Flight Phases to be Published by China Civil Aviation</a></td>	
                                                <td class="update">2023-06-24</td>
                                                <td class="presenter">China</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/17</td>
                                                <td class="tit tit01">
                                                    <a href="#">SIGMET Coordination Work by China in the Asian Region</a></td>	
                                                <td class="update">2023-06-24</td>
                                                <td class="presenter">China</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/16</td>
                                                <td class="tit tit01">
                                                    <a href="#">Indonesia Air Navigation Services Improvement During Global Outbreak and Readiness to Resume to Normal Operation</a></td>	
                                                <td class="update">2023-06-25</td>
                                                <td class="presenter">Indonesia</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/4/15</td>
                                                <td class="tit tit01">
                                                    <a href="#">ATM Operational Safety during COVID-19 Spread and Recovery (Nepal)</a></td>	
                                                <td class="update">2023-07-01</td>
                                                <td class="presenter">Nepal</td>
                                            </tr>   
                                                    
                                        </tbody>
                                     
                                        <tbody class="idx-body">
                                            <tr class="idx-ttl"> 
                                                <td colspan="4" class="tit tit01">
                                                    <div class="ico-img fl"></div>
                                                    <span class="txt-blue font5">Category : Agenda Item 5</span>   
                                                </td>
                                            </tr> 
                                         
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/5/3</td>
                                                <td class="tit tit01">
                                                    <a href="#">Aviation Security Policy Activities</a></td>	
                                                <td class="update">2023-06-23</td>
                                                <td class="presenter">ICAO</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/5/18</td>
                                                <td class="tit tit01">
                                                    <a href="#">Pakistan Work on Aviation Security and Facilitation</a></td>	
                                                <td class="update">2023-06-23</td>
                                                <td class="presenter">Pakistan</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/5/17</td>
                                                <td class="tit tit01">
                                                    <a href="#">Introduction of Private Security Agency for Non-Core Security Functions at Airports in India</a></td>	
                                                <td class="update">2023-06-23</td>
                                                <td class="presenter">India</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/5/16</td>
                                                <td class="tit tit01">
                                                    <a href="#">Enhancing Air Cargo Security Through Phasing Out of Account Consignors</a></td>	
                                                <td class="update">2023-06-22</td>
                                                <td class="presenter">Hong Kong, China</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/5/15</td>
                                                <td class="tit tit01">
                                                    <a href="#">Best Practices And Achievements of Promoting Security Culture in the Bangladesh</a></td>	
                                                <td class="update">2023-06-22</td>
                                                <td class="presenter">Bangladesh</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/5/14</td>
                                                <td class="tit tit01">
                                                    <a href="#">Malaysia Airport Digital Initiative: Making Airport Safer And More Secure</a></td>	
                                                <td class="update">2023-06-22</td>
                                                <td class="presenter">Malaysia</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/5/13</td>
                                                <td class="tit tit01">
                                                    <a href="#">Remotely-Piloted Aircraft Security Programme</a></td>	
                                                <td class="update">2023-06-23</td>
                                                <td class="presenter">Indonesia</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/5/12</td>
                                                <td class="tit tit01">
                                                    <a href="#">Aviation Security and Facilitation Updates from Bangladesh</a></td>	
                                                <td class="update">2023-06-23</td>
                                                <td class="presenter">Bangladesh</td>
                                            </tr>   
                                                    
                                        </tbody>
                                     
                                        <tbody class="idx-body">
                                            <tr class="idx-ttl"> 
                                                <td colspan="4" class="tit tit01">
                                                    <div class="ico-img fl"></div>
                                                    <span class="txt-blue font5">Category : Agenda Item 6</span>   
                                                </td>
                                            </tr> 
                                         
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/6/9</td>
                                                <td class="tit tit01">
                                                    <a href="#">The Impact of COVID-19 on the Airport Business and the Path to Recovery</a></td>	
                                                <td class="update">2023-07-01</td>
                                                <td class="presenter">ACI</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/6/8</td>
                                                <td class="tit tit01">
                                                    <a href="#">Managing Air Transport During Global Pandemic - Indonesia Aviation Reviving Journey</a></td>	
                                                <td class="update">2023-07-01</td>
                                                <td class="presenter">Indonesia</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/6/10</td>
                                                <td class="tit tit01">
                                                    <a href="#">Slot and Traffic Rights Collection Deferral Policy to Respond to International Flight Shutdown Due to COVID-19</a></td>	
                                                <td class="update">2023-07-01</td>
                                                <td class="presenter">Bangladesh</td>
                                            </tr>   
                                                    
                                        </tbody>
                                     
                                        <tbody class="idx-body">
                                            <tr class="idx-ttl"> 
                                                <td colspan="4" class="tit tit01">
                                                    <div class="ico-img fl"></div>
                                                    <span class="txt-blue font5">Category : Agenda Item 7</span>   
                                                </td>
                                            </tr> 
                                         
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/7/9</td>
                                                <td class="tit tit01">
                                                    <a href="#">Japan Experience to Establish the Roadmaps for Promoting Decarbonisation of Aviation</a></td>	
                                                <td class="update">2023-06-22</td>
                                                <td class="presenter">Japan</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/7/5</td>
                                                <td class="tit tit01">
                                                    <a href="#">Safe, Sustainable and Socially Responsible Air Transport Growth for the Future</a></td>	
                                                <td class="update">2023-06-22</td>
                                                <td class="presenter">AAPA, IATA</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/7/11</td>
                                                <td class="tit tit01">
                                                    <a href="#">India Stand on Long Term Aspirational Goal</a></td>	
                                                <td class="update">2023-06-28</td>
                                                <td class="presenter">India</td>
                                            </tr>   
                                                    
                                        </tbody>
                                     
                                        <tbody class="idx-body">
                                            <tr class="idx-ttl"> 
                                                <td colspan="4" class="tit tit01">
                                                    <div class="ico-img fl"></div>
                                                    <span class="txt-blue font5">Category : Agenda Item 8</span>   
                                                </td>
                                            </tr> 
                                         
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/8/9</td>
                                                <td class="tit tit01">
                                                    <a href="#">CASP-AP Training and Capacity Building</a></td>	
                                                <td class="update">2023-06-29</td>
                                                <td class="presenter">Cooperative Aviation Security Programme-Asia Pacific (CASP-AP)</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/8/10</td>
                                                <td class="tit tit01">
                                                    <a href="#">Cooperation to Strengthen Professional Training for Aviation Safety and Security Oversight Personnel</a></td>	
                                                <td class="update">2023-07-03</td>
                                                <td class="presenter">Bangladesh</td>
                                            </tr>   
                                                    
                                        </tbody>
                                     
                                        <tbody class="idx-body">
                                            <tr class="idx-ttl"> 
                                                <td colspan="4" class="tit tit01">
                                                    <div class="ico-img fl"></div>
                                                    <span class="txt-blue font5">Category : Agenda Item 9</span>   
                                                </td>
                                            </tr> 
                                         
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/IP/9/7</td>
                                                <td class="tit tit01">
                                                    <a href="#">China Action to Meet Commitments of Beijing Declaration</a></td>	
                                                <td class="update">2023-07-03</td>
                                                <td class="presenter">China</td>
                                            </tr>   
                                             
                                            <tr class="idx-con">	
                                                <td class="number" scope="row">58/9/08</td>
                                                <td class="tit tit01">
                                                    <a href="#">Updates on Indonesia Commitment on Ministerial Beijing Declaration 2018</a></td>	
                                                <td class="update">2023-07-05</td>
                                                <td class="presenter">Indonesia</td>
                                            </tr>   
                                                    
                                        </tbody>
                                     
                                        <tbody class="idx-body">
                                            <tr class="idx-ttl"> 
                                                <td colspan="4" class="tit tit01">
                                                    <div class="ico-img fl"></div>
                                                    <span class="txt-blue font5">Category : Template</span>   
                                                </td>
                                            </tr> 
                                         
                                            <tr class="idx-con">	
                                                <td class="number" scope="row"></td>
                                                <td class="tit tit01">
                                                    <a href="#">Information Paper (IP) Template - 58DGCA</a></td>	
                                                <td class="update">2023-05-03</td>
                                                <td class="presenter">Administrator</td>
                                            </tr>            
                                        </tbody>
                                     </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- order of business  -->  
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

