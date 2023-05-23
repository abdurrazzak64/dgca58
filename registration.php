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
                            <h1 class="text-center">Registration</h1>
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
                                <li><a class="selected" href="registration.html" >Registration</a></li>
                                <li><a  href="visha-information.html">Visa Information</a></li>
                                <li><a   href="vanue-information.html">Venue</a></li>
                                <li><a  href="recom-hotel.html">Hotels</a></li>
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
                                <a class="act actv" href="registration.html">Registration</a>
                                <a class="act" href="visha-information.html">Visa Information</a>
                                <a class="act" href="vanue-information.html">Venue</a>
                                <a class="act" href="recom-hotel.html">Hotels</a>
                                <a class="act" href="airline-ticket-discount.html">Airline and Ticket Discounts</a>
                                <a class="act" href="accom-persons-programme.html">Accompanying Person's Programme</a>
                                <a class="act" href="trans-schedule.html">Transportation Schedule</a>
                                <a class="act" href="exe-day.html">Excursion Day</a>
                                <a class="act" href="about-bd.html">About Bangladesh</a>
                            </ul>
                        </div>
                    </div> -->
                    <!-- new submenu-2 design end  -->
                    <!-- sub menu active section here start  -->
                    <div class="rtd typography-page">
                        <div class="typography-section typography-section-border">
                            <div class="container regi-form">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="red-text text-darken-4">
                                            *All the invited States/Administrations and organizations are requested to email the names and passport numbers of their authorized delegation to ICAO APAC Office at <a href="mailto:apac@icao.int">apac@icao.int</a> with a copy to <a href="mailto:registration@dgca57.com.bd">registration@dgca58.gov.bd</a> prior to processing any individual registration below.
                                        </p>
                                        <p class="red-text text-darken-4">
                                            **In case of problems during registration, please email your complete data along with the photos to <a href="mailto:registration@dgca58.gov.bd">registration@dgca58.gov.bd</a>
                                        </p>
                                    </div>
                                    <form action="" class="col-12 form-horizontal" id="participant_reg" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <div class="card-panel mt-3 row">
                                            <div class="col-12">
                                                <h3 class="form-header">Personal Information</h3>
                                            </div>
                                            <div class="input-field col-md-6 col-lg-4 col-xl-3">
                                                <input id="pp_num" type="text" class="validate" name="" required>
                                                <label for="pp_num">Passport Number <span class="red-text text-darken-4">*</span></label>
                                            </div>
                                            <div class="input-field col-md-6 col-lg-4 col-xl-3">
                                                <input id="title" type="text" class="validate" name="" required>
                                                <label for="title">Title <span class="red-text text-darken-4">*</span></label>
                                                <span class="helper-text">eg. Mr./Mrs./Engr. etc.</span>
                                            </div>
                                            <div class="input-field col-md-6 col-lg-4 col-xl-3">
                                                <input id="first_name" type="text" class="validate" name="" required>
                                                <label for="first_name">First Name <span class="red-text text-darken-4">*</span></label>
                                            </div>
                                            <div class="input-field col-md-6 col-lg-4 col-xl-3">
                                                <input id="last_name" type="text" class="validate" name="" required>
                                                <label for="last_name">Last Name <span class="red-text text-darken-4">*</span></label>
                                            </div>
        
                                            <div class="input-field col-md-6 col-lg-4 col-xl-3">
                                                <input id="job_title" type="text" class="validate" name="" required>
                                                <label for="job_title">Job Title <span class="red-text text-darken-4">*</span></label>
                                            </div>
                                            <div class="input-field col-md-6 col-lg-4 col-xl-3">
                                                <input id="badge_name" type="text" class="validate" name="" required>
                                                <label for="badge_name">Name on Badge <span class="red-text text-darken-4">*</span></label>
                                            </div>
                                            <div class="input-field col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                                <input id="age" type="number" class="validate" name="" required>
                                                <label for="age">Age <span class="red-text text-darken-4">*</span></label>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                                <label>Gender <span class="red-text text-darken-4">*</span></label>
                                                <br>
                                                <label class="mr-3">
                                                    <input class="with-gap" name="" type="radio" value="Male" />
                                                    <span>Male</span>
                                                </label>
                                                <label>
                                                    <input class="with-gap" name="" type="radio" value="Female" />
                                                    <span>Female</span>
                                                </label>
                                            </div>
        
                                            <div class="input-field col-md-12 col-xl-6">
                                                <textarea id="address" class="materialize-textarea validate" name="" required></textarea>
                                                <label for="address">Official address <span class="red-text text-darken-4">*</span></label>
                                            </div>
                                            <div class="input-field col-md-6 col-lg-4 col-xl-3">
                                                <input id="city" type="text" class="validate" name="" required>
                                                <label for="city">City <span class="red-text text-darken-4">*</span></label>
                                            </div>
                                            <div class="input-field col-md-6 col-lg-4 col-xl-3">
                                                <select id="country" required class="validate" name="">
                                                    <option value="" disabled selected>Please Select</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bonaire">Bonaire</option>
                                                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Canary Islands">Canary Islands</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Channel Islands">Channel Islands</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos Island">Cocos Island</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote DIvoire">Cote DIvoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Curaco">Curacao</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands">Falkland Islands</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji Islands">Fiji Islands</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Ter">French Southern Ter</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Great Britain">Great Britain</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Hawaii">Hawaii</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle of Man">Isle of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Bangladesh North">Bangladesh North</option>
                                                    <option value="Bangladesh Sout">Bangladesh South</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia">Macedonia</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Midway Islands">Midway Islands</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Nambia">Nambia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                    <option value="Nevis">Nevis</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau Island">Palau Island</option>
                                                    <option value="Palestine">Palestine</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                    <option value="Republic of Serbia">Republic of Serbia</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russia</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="St Barthelemy">St Barthelemy</option>
                                                    <option value="St Eustatius">St Eustatius</option>
                                                    <option value="St Helena">St Helena</option>
                                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                    <option value="St Lucia">St Lucia</option>
                                                    <option value="St Maarten">St Maarten</option>
                                                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                    <option value="Saipan">Saipan</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="Samoa American">Samoa American</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syria</option>
                                                    <option value="Tahiti">Tahiti</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                                    <option value="United States of America">United States of America</option>
                                                    <option value="Uraguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican City State">Vatican City State</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                    <option value="Wake Island">Wake Island</option>
                                                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zaire">Zaire</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                                <label for="country">Country <span class="red-text text-darken-4">*</span></label>
                                            </div>
        
                                            <div class="input-field col-md-6 col-lg-4 col-xl-3">
                                                <input id="office_num" type="text" class="validate" name="" required>
                                                <label for="office_num">Office No. <span class="red-text text-darken-4">*</span></label>
                                            </div>
                                            <div class="input-field col-md-6 col-lg-4 col-xl-3">
                                                <input id="mobile_num" type="text" class="validate" name="">
                                                <label for="mobile_num">Mobile No.</label>
                                            </div>
                                            <div class="input-field col-md-6 col-lg-4 col-xl-3">
                                                <input id="email" type="email" class="validate" name="" required>
                                                <label for="email">Email <span class="red-text text-darken-4">*</span></label>
                                            </div>
        
                                            <div class="file-field input-field col-lg-8 col-xl-6">
                                                <div class="btn blue">
                                                    <span>Add Photo</span>
                                                    <input type="file" name="">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate placeholder-hide-xs" type="text" placeholder="Upload photo">
                                                </div>
                                                <span class="helper-text d-sm-none">Upload photo</span>
                                            </div>
                                        </div>
        
                                        <div id="conference_details" class="card-panel mt-5 col-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3 class="form-header">Conference Details</h3>
                                                </div>
                                                <div class="input-field col-md-6 col-lg-4">
                                                    <select id="representation" required class="validate" name="representation">
                                                        <option value="" disabled selected>Please Select</option>
                                                        <option value="State/Administration">State/Administration</option>
                                                        <option value="ICAO">ICAO</option>
                                                        <option value="International Organization">International Organization</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                    <label for="representation">Representation <span class="red-text text-darken-4">*</span></label>
                                                </div>
        
                                                <div class="input-field col-md-6 col-lg-4 representation_related representation_index1 d-none">
                                                    <select id="state" class="validate representation_form_field" name="" disabled>
                                                        <option value="" disabled selected>Please Select</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="China">China</option>
                                                        <option value="China Special Administrative Region Hong Kong">China Special Administrative Region Hong Kong</option>
                                                        <option value="Special Administrative Region Macao">Special Administrative Region Macao</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Democratic People's Bangladesh (DPRK)">Democratic People's Bangladesh (DPRK)</option>
                                                        <option value="Fiji Islands">Fiji Islands</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Micronesia (Federated States of)">Micronesia (Federated States of)</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau Island">Palau Island</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-leste (Democratic Republic of)">Timor-leste (Democratic Republic of)</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                        <option value="United States of America">United States of America</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                    <label for="state">State <span class="red-text text-darken-4">*</span></label>
                                                </div>
                                                <div id="state_name_div" class="input-field col-md-6 col-lg-4 representation_related d-none">
                                                    <input id="state_name" type="text" class="validate representation_form_field" name="" disabled>
                                                    <label for="state_name">Please Specify State Name <span class="red-text text-darken-4">*</span></label>
                                                </div>
                                                <div class="input-field col-md-6 col-lg-4 representation_related representation_index1 d-none">
                                                    <input id="state_organization_name" type="text" class="validate representation_form_field" name="" disabled>
                                                    <label for="state_organization_name">Name of the Organization <span class="red-text text-darken-4">*</span></label>
                                                </div>
        
                                                <div class="input-field col-md-6 col-lg-4 representation_related representation_index2 d-none">
                                                    <select id="icao_office_name" class="validate representation_form_field" name="" disabled>
                                                        <option value="" disabled selected>Please Select</option>
                                                        <option value="ICAO HQ">ICAO HQ</option>
                                                        <option value="ICAO APAC">ICAO APAC</option>
                                                        <option value="ICAO RSO">ICAO RSO</option>
                                                        <option value="COSCAP - SA">COSCAP - SA</option>
                                                        <option value="COSCAP - SEA">COSCAP - SEA</option>
                                                        <option value="COSCAP - NA">COSCAP - NA</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                    <label for="icao_office_name">Name of the Office <span class="red-text text-darken-4">*</span></label>
                                                </div>
                                                <div id="icao_office_other_name_div" class="input-field col-md-6 col-lg-4 representation_related d-none">
                                                    <input id="icao_office_other_name" type="text" class="validate representation_form_field" name="" disabled>
                                                    <label for="icao_office_other_name">Please Specify Office Name <span class="red-text text-darken-4">*</span></label>
                                                </div>
        
                                                <div id="intl_org_name_holder" class="input-field col-md-6 col-lg-4 representation_related representation_index3 d-none">
                                                    <select id="intl_org_name" class="validate representation_form_field" name="" disabled>
                                                        <option value="" disabled selected>Please Select</option>
                                                        <option value="AAPA">AAPA - Association of Asia Pacific Airlines</option>
                                                        <option value="ACI - Airports Council International">ACI - Airports Council International</option>
                                                        <option value="ADB - Asian Development Bank">ADB - Asian Development Bank</option>
                                                        <option value="CANSO - Civil Air Navigation Services Organization">CANSO - Civil Air Navigation Services Organization</option>
                                                        <option value="EASA - European Aviation Safety Agency (EASA)">EASA - European Aviation Safety Agency (EASA)</option>
                                                        <option value="IBAC - International Business Aviation Council">IBAC - International Business Aviation Council</option>
                                                        <option value="ICCAIA - International Coordinating Council of Aerospace Industries">ICCAIA - International Coordinating Council of Aerospace Industries</option>
                                                        <option value="IFALPA - International Federation of Air Line Pilots' Associations">IFALPA - International Federation of Air Line Pilots' Associations</option>
                                                        <option value="IFATCA - International Federation of Air Traffic Controllers' Associations">IFATCA - International Federation of Air Traffic Controllers' Associations</option>
                                                        <option value="IFATSEA - International Federation of Air Traffic Safety Electronics Associations">IFATSEA - International Federation of Air Traffic Safety Electronics Associations</option>
                                                        <option value="PASO - Pacific Aviation Safety Office">PASO - Pacific Aviation Safety Office</option>
                                                        <option value="The Pacific Islands Forum">The Pacific Islands Forum</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                    <label for="intl_org_name">Name of the Organization <span class="red-text text-darken-4">*</span></label>
                                                </div>
        
                                                <div id="intl_org_other_name_div" class="input-field col-md-6 col-lg-4 representation_related d-none">
                                                    <input id="intl_org_other_name" type="text" class="validate representation_form_field" name="" disabled>
                                                    <label for="intl_org_other_name">Please Specify Organization Name <span class="red-text text-darken-4">*</span></label>
                                                </div>
        
                                                <div class="input-field col-md-6 col-lg-4 representation_related representation_index4 d-none">
                                                    <input id="organization_name" type="text" class="validate representation_form_field" name="" disabled>
                                                    <label for="organization_name">Name of the Organization <span class="red-text text-darken-4">*</span></label>
                                                </div>
                                            </div>
        
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>Role in the Conference <span class="red-text text-darken-4">*</span></label>
                                                    <br>
                                                    <label class="mr-3">
                                                        <input class="with-gap" name="" type="radio" value="Head of Deligation" />
                                                        <span>Head of Deligation</span>
                                                    </label>
                                                    <br class="d-sm-none">
                                                    <label class="mr-3">
                                                        <input class="with-gap" name="" type="radio" value="Deligate" />
                                                        <span>Deligate</span>
                                                    </label>
                                                    <br class="d-sm-none">
                                                    <label>
                                                        <input class="with-gap" name="" type="radio" value="Observer" />
                                                        <span>Observer</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="card-panel mt-5 col-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3 class="form-header">Flight Details</h3>
                                                    <p class="mb-0">
                                                        *Please indicate all times in local Bangladesh time (UTC +6)
                                                    </p>
                                                    <p class="mb-0">
                                                        **In case your travel details haven't been finalized yet, please send us your confirmed travel details at <a href="mailto:exhibition@dgca57.com.bd">exhibition@dgca58.gov.bd</a> as soon as they are finalized
                                                    </p>
                                                </div>
                                                <div class="input-field col-md-4">
                                                    <input id="flight_no" type="text" class="validate" name="">
                                                    <label for="flight_no">Arrival Flight No.</label>
                                                </div>
                                                <div class="input-field col-md-4">
                                                    <input id="arrival_date" type="text" class="validate datepicker" name="">
                                                    <label for="arrival_date">Arrival Date</label>
                                                </div>
                                                <div class="input-field col-md-4">
                                                    <input id="arrival_time" type="text" class="validate timepicker" name="">
                                                    <label for="arrival_time">Arrival Time</label>
                                                </div>
        
                                                <div class="input-field col-md-4">
                                                    <input id="d_flight_no" type="text" class="validate" name="">
                                                    <label for="d_flight_no">Departure Flight No.</label>
                                                </div>
                                                <div class="input-field col-md-4">
                                                    <input id="departure_date" type="text" class="validate datepicker" name="">
                                                    <label for="departure_date">Departure Date</label>
                                                </div>
                                                <div class="input-field col-md-4">
                                                    <input id="departure_time" type="text" class="validate timepicker" name="">
                                                    <label for="departure_time">Departure Time</label>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="card-panel mt-5 col-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3 class="form-header">Accompanying Person Details</h3>
                                                </div>
                                            </div>
                                            <div id="guest_row" class="row">
                                                <!-- <div class="col-12 guest-block">
                                                        <div class="row">
                                                            <div class="col-md-1 fs19 d-flex align-items-center justify-content-end">1.</div>
                                                            <div class="input-field col-md-3">
                                                                <input id="g_full_name1" type="text" class="validate" name="g_full_name[]" required>
                                                                <label for="g_full_name1">
                                                                    Full Name <span class="red-text text-darken-4">*</span>
                                                                </label>
                                                            </div>
                                                            <div class="input-field col-md-1">
                                                                <input id="g_age1" type="text" class="validate" name="g_age[]" required>
                                                                <label for="g_age1">
                                                                    Age <span class="red-text text-darken-4">*</span>
                                                                </label>
                                                            </div>
                                                            <div class="input-field col-md-3">
                                                                <select id="g_gender1" required class="validate" name="g_gender[]">
                                                                    <option value="" disabled selected>Please Select</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                                <label for="g_gender1">
                                                                    Gender <span class="red-text text-darken-4">*</span>
                                                                </label>
                                                            </div>
                                                            <div class="file-field input-field col-md-3">
                                                                <div class="btn blue">
                                                                    <span>Add Photo</span>
                                                                    <input type="file" name="g_photo[]">
                                                                </div>
                                                                <div class="file-path-wrapper">
                                                                    <input class="file-path validate" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <button id="add_ap" type="button" class="btn waves-effect waves-light blue mt-5">Add accompanying person</button>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="card-panel mt-5 col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h3 class="form-header">Accomodations &amp; Preferences</h3>
                                                </div>
                                                <div class="input-field col-md-6 col-lg-4">
                                                    <select id="hotel_name" class="validate" name="">
                                                        <option value="" selected>Please Select</option>
                                                        <option value="Hotel InterContinental Dhaka">Hotel InterContinental Dhaka (Venue)</option>
                                                        <option value="Pan Pacific Sonargaon Hotel">Pan Pacific Sonargaon Hotel</option>
                                                        <option value="The Westin Dhaka">The Westin Dhaka</option>
                                                        <option value="Hotel Amari Dhaka">Hotel Amari Dhaka</option>
                                                        <option value="Lakeshore Hotel">Lakeshore Hotel</option>
                                                        <option value="Long Beach Suites">Long Beach Suites</option>
                                                        <option value="Hotel Lake Castle">Hotel Lake Castle</option>
                                                        <option value="Six Seasons Hotel">Six Seasons Hotel</option>
                                                        <!-- <option value="The Holiday Inn Dhaka">The Holiday Inn Dhaka</option> -->
                                                        <option value="other">Other</option>
                                                    </select>
                                                    <label for="hotel_name">Hotel</label>
                                                    <span class="helper-text hotel_name_ht d-none blue-text">
                                                        Venue of the Conference
                                                        <br>
                                                        Distance from airport - 14.8 km
                                                    </span>
                                                    <span class="helper-text hotel_name_ht d-none blue-text">
                                                        Distance from Venue - 1.3 km
                                                        <br>
                                                        Distance from airport - 13.8 km
                                                    </span>
                                                    <span class="helper-text hotel_name_ht d-none blue-text">
                                                        Distance from Venue - 9.2 km
                                                        <br>
                                                        Distance from airport - 9.8 km
                                                    </span>
                                                    <span class="helper-text hotel_name_ht d-none blue-text">
                                                        Distance from Venue - 8.8 km
                                                        <br>
                                                        Distance from airport - 10.9 km
                                                    </span>
                                                    <span class="helper-text hotel_name_ht d-none blue-text">
                                                        Distance from Venue - 9.2 km
                                                        <br>
                                                        Distance from airport - 10.9 km
                                                    </span>
                                                    <span class="helper-text hotel_name_ht d-none blue-text">
                                                        Distance from Venue - 8.8 km
                                                        <br>
                                                        Distance from airport - 9.6 km
                                                    </span>
                                                    <span class="helper-text hotel_name_ht d-none blue-text">
                                                        Distance from Venue - 8.5 km
                                                        <br>
                                                        Distance from airport - 8.6 km
                                                    </span>
                                                    <span class="helper-text hotel_name_ht d-none blue-text">
                                                        Distance from Venue - 9 km
                                                        <br>
                                                        Distance from airport - 9 km
                                                    </span>
                                                </div>
                                                <div id="other_hotel_div" class="input-field col-md-6 col-lg-4 d-none">
                                                    <input id="other_hotel" type="text" class="validate" name="">
                                                    <label for="other_hotel"><span class="d-none d-sm-inline">Please specify the name</span><span class="d-sm-none">Name</span> of your hotel <span class="red-text text-darken-4">*</span></label>
                                                </div>
        
                                                <div class="col-md-12 mb-4 mt-3">
                                                    <h4 class="fs15">Activities</h4>
                                                    <p class="mb-2">
                                                        Please select the activities you will attend. For details, please see the conference website.
                                                    </p>
                                                    <div class="row">
                                                        <label class="col-md-6 col-lg-4">
                                                            <input type="checkbox" name="" value="Welcome Reception - 10 Oct 2020" />
                                                            <span>Welcome Reception - 10 Oct 2020</span>
                                                        </label>
        
                                                        <label class="col-md-6 col-lg-4">
                                                            <input type="checkbox" name="" value="Welcome Dinner - 11 Oct 2020" />
                                                            <span>Welcome Dinner - 11 Oct 2020</span>
                                                        </label>
        
                                                        <label class="col-md-6 col-lg-4">
                                                            <input type="checkbox" name="" value="Other Dinner(s)" />
                                                            <span>Other Dinner(s)</span>
                                                        </label>
        
                                                        <label class="col-md-6 col-lg-4">
                                                            <input type="checkbox" name="" value="Excursion Day - 14 Oct 2020" />
                                                            <span>Excursion Day - 14 Oct 2020</span>
                                                        </label>
        
                                                        <label class="col-md-6 col-lg-4">
                                                            <input type="checkbox" name="" value="Farewell Dinner - 14 Oct 2020" />
                                                            <span>Farewell Dinner - 14 Oct 2020</span>
                                                        </label>
        
                                                        <label class="col-md-6 col-lg-4">
                                                            <input type="checkbox" name="" value="Technical Tour - if any" />
                                                            <span>Technical Tour - if any</span>
                                                        </label>
                                                    </div>
                                                </div>
        
                                                <div class="input-field col-md-12">
                                                    <textarea id="special_need" class="materialize-textarea validate" name=""></textarea>
                                                    <label for="special_need"><span class="d-none d-sm-inline">Special Requirements / </span>Additional Information</label>
                                                </div>
        
                                                <div class="file-field input-field col-12">
                                                    <div class="btn blue">
                                                        <span>Credential Letter</span>
                                                        <input type="file" name="">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input id="placeholder-hide-sm-below" class="file-path validate placeholder-hide-sm-below" type="text" placeholder="Please upload the credential letter">
                                                    </div>
                                                    <span class="helper-text d-md-none">Please upload the credential letter</span>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="card-panel mt-5 col-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3 class="form-header">Use of Personal Data</h3>
                                                </div>
                                                <div class="col-md-12">
                                                    <ul class="fa-ul">
                                                        <li>
                                                            <span class="fa-li"><i class="fas fa-info-circle info-text fs21"></i></span> Personal data provided in this form will exclusively be used for processing of registration for DGCA Conference and other directly related administrative needs.
                                                        </li>
                                                        <li class="mt-4">
                                                            <span class="fa-li"><i class="fas fa-info-circle info-text fs21"></i></span> Please submit online by clicking on the following "Submit" Button. It is recommended that delegates register online before <strong>28 September 2023</strong>.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
        
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <label class="mr-4">
                                                        <input type="checkbox" name="" value="1" />
                                                        <span>I have read and agreed to the Terms &amp; Conditions above.</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row mt-5">
                                            <div class="col-12 text-center">
                                                <button class="btn waves-effect waves-light blue btn-large" type="submit">Submit
                                                    <i class="material-icons right">send</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sub menu active section here end  -->
                

                    <!-- new design start here  -->
                    
                    <!-- new design end here  -->
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