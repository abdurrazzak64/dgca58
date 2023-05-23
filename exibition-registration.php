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
                       <h1 class="text-center">Exhibition Registration</h1>
                   </div>
               </div>
               <!-- new submenu-2 design start  -->
               <div class="snb only_web">
                   <div class="inner">
                       <ul class="snb-list snb-list6">
                           <li><a href="vendor-agreement.html" >Vendor Agreement</a></li>
                           <li><a class="selected" href="exibition-registration.html">Exhibition Registration</a></li>
                           <li><a href="exibition-services.html">Exhibition Services</a></li>
                           <li><a style="letter-spacing: -1px;" href="acknowledgement.html">Acknowledgement</a></li>
                           <li><a href="update-floor-plan.html">Updated Floor Plan</a></li>
                           <li><a href="final-report.html">Final Report</a></li>
                       </ul>
                           
                   </div>                    
               </div>
               <!-- <div class="submenu_3">
                   <div class="container">
                       <ul id="myactive">
                           <a class="act " href="vendor-agreement.html">Vendor Agreement</a>
                           <a class="act actv" href="exibition-registration.html">Exhibition Registration</a>
                           <a class="act" href="exibition-services.html">Exhibition Services</a>
                           <a class="act" href="acknowledgement.html">Acknowledgement</a>
                           <a class="act" href="update-floor-plan.html">Updated Floor Plan</a>
                       </ul>
                   </div>
               </div> -->
               <!-- new submenu-2 design end  -->
               <!-- Exhibitor Registration  -->
                   <div class="rtd typography-page">
                       <div class="typography-section typography-section-border">
                           <div class="container">
                               <div class="row">
                                   <div class="col-12">
                                       <p class="red-text text-darken-4 mb-1">
                                           *Valid only for the exhibitors who have already signed up the Exhibitor Vendor Agreement with ICAO APAC Office.
                                       </p>
                                       <p class="red-text text-darken-4 mb-1">
                                           **Please note, exhibitor under the Gold Package is entitled to 04 exhibitors registration in total and 02 exhibitors registration in total under the Vendor Package.
                                       </p>
                                       <p class="red-text text-darken-4">
                                           ***Each exhibitor must fill out a separate registration form.
                                       </p>
                                   </div>
                                   <div class=" exib-regi">
                                       <form action="https://executionbd.com/dgca57/exhibitor-add" class="col-12 form-horizontal" id="exhibitor_reg" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                           <div class="card-panel">
                                               <div class="row ">
                                                   <div class="col-md-12">
                                                       <h3 class="form-header">Exhibitor Details</h3>
                                                   </div>
                                                   <div class="col-lg-6">
                                                       <label>Package <span class="red-text text-darken-4">*</span></label>
                                                       <br>
                                                       <div class="d-flex">
                                                           <label class="flex-fill">
                                                               <input class="with-gap" name="package" type="radio" value="gold" />
                                                               <span>Gold Package</span>
                                                           </label>
                                                           <label class="flex-fill">
                                                               <input class="with-gap" name="package" type="radio" value="vendor" />
                                                               <span>Vendor Package</span>
                                                           </label>
                                                       </div>
                                                   </div>
                                                   <div class="input-field col-md-6 col-lg-3">
                                                       <input id="org_name" type="text" class="validate" name="org_name" required>
                                                       <label for="org_name">Name of the Organization <span class="red-text text-darken-4">*</span></label>
                                                   </div>
                                                   <div class="input-field col-sm-6 col-lg-3">
                                                       <input id="booth_num" type="text" class="validate" name="booth_num" required>
                                                       <label for="booth_num">Booth No. <span class="red-text text-darken-4">*</span></label>
                                                   </div>

                                                   <div class="input-field col-sm-6 col-lg-3">
                                                       <input id="pp_num" type="text" class="validate" name="pp_num" required>
                                                       <label for="pp_num">Passport Number <span class="red-text text-darken-4">*</span></label>
                                                   </div>
                                                   <div class="input-field col-sm-4 col-md-6 col-lg-3">
                                                       <input id="title" type="text" class="validate" name="title" required>
                                                       <label for="title">Title <span class="red-text text-darken-4">*</span></label>
                                                       <span class="helper-text">eg. Mr./Mrs./Engr. etc.</span>
                                                   </div>
                                                   <div class="input-field col-sm-8 col-md-6 col-lg-3">
                                                       <input id="first_name" type="text" class="validate" name="first_name" required>
                                                       <label for="first_name">First Name <span class="red-text text-darken-4">*</span></label>
                                                   </div>
                                                   <div class="input-field col-md-6 col-lg-3">
                                                       <input id="last_name" type="text" class="validate" name="last_name" required>
                                                       <label for="last_name">Last Name <span class="red-text text-darken-4">*</span></label>
                                                   </div>

                                                   <div class="col-sm-6 col-lg-3">
                                                       <label>Gender <span class="red-text text-darken-4">*</span></label>
                                                       <br>
                                                       <label class="mr-3">
                                                           <input class="with-gap" name="ex_gender" type="radio" value="Male" />
                                                           <span>Male</span>
                                                       </label>
                                                       <label>
                                                           <input class="with-gap" name="ex_gender" type="radio" value="Female" />
                                                           <span>Female</span>
                                                       </label>
                                                   </div>
                                                   <div class="input-field col-sm-6 col-lg-3">
                                                       <input id="age" type="number" class="validate" name="age" required>
                                                       <label for="age">Age <span class="red-text text-darken-4">*</span></label>
                                                   </div>
                                                   <div class="input-field col-sm-6 col-lg-3">
                                                       <input id="job_title" type="text" class="validate" name="job_title" required>
                                                       <label for="job_title">Job Title <span class="red-text text-darken-4">*</span></label>
                                                   </div>
                                                   <div class="input-field col-sm-6 col-lg-3">
                                                       <input id="badge_name" type="text" class="validate" name="badge_name" required>
                                                       <label for="badge_name">Name on Badge <span class="red-text text-darken-4">*</span></label>
                                                   </div>

                                                   <div class="input-field col-sm-6 col-lg-3">
                                                       <input id="nationality" type="text" class="validate" name="nationality" required>
                                                       <label for="nationality">Nationality <span class="red-text text-darken-4">*</span></label>
                                                   </div>
                                                   <div class="input-field col-sm-6 col-lg-3">
                                                       <select id="country" required class="validate" name="country">
                                                           <option value="" disabled selected>Please Select</option>
                                                           <option value="Afganistan">Afghanistan</option>
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
                                                           <option value="Brunei">Brunei</option>
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
                                                           <option value="Fiji">Fiji</option>
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
                                                           <option value="Indonesia">Indonesia</option>
                                                           <option value="India">India</option>
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
                                                           <option value="Phillipines">Philippines</option>
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
                                                       <label for="country">Country of Residence <span class="red-text text-darken-4">*</span></label>
                                                   </div>
                                                   <div class="input-field col-lg-6">
                                                       <textarea id="address" class="materialize-textarea validate" name="address" required></textarea>
                                                       <label for="address">Official address <span class="red-text text-darken-4">*</span></label>
                                                   </div>

                                                   <div class="input-field col-sm-6 col-lg-3">
                                                       <input id="city" type="text" class="validate" name="city_name" required>
                                                       <label for="city">City <span class="red-text text-darken-4">*</span></label>
                                                   </div>
                                                   <div class="input-field col-sm-6 col-lg-3">
                                                       <input id="state" type="text" class="validate" name="state">
                                                       <label for="state">State</label>
                                                   </div>
                                                   <div class="input-field col-sm-6 col-lg-3">
                                                       <input id="email" type="email" class="validate" name="email" required>
                                                       <label for="email">Email <span class="red-text text-darken-4">*</span></label>
                                                   </div>
                                                   <div class="input-field col-sm-6 col-lg-3">
                                                       <input id="email2" type="email" class="validate" name="email2">
                                                       <label for="email2">2<sup>nd</sup> Email</label>
                                                   </div>

                                                   <div class="input-field col-sm-6 col-lg-3">
                                                       <input id="office_num" type="text" class="validate" name="office_num" required>
                                                       <label for="office_num">Office No. <span class="red-text text-darken-4">*</span></label>
                                                   </div>
                                                   <div class="input-field col-sm-6 col-lg-3">
                                                       <input id="mobile_num" type="text" class="validate" name="mobile_num" required>
                                                       <label for="mobile_num">Mobile No. <span class="red-text text-darken-4">*</span></label>
                                                   </div>
                                                   <div class="file-field input-field col-lg-6">
                                                       <div class="btn blue">
                                                           <span>Add Photo</span>
                                                           <input type="file" name="photo">
                                                       </div>
                                                       <div class="file-path-wrapper">
                                                           <input class="file-path validate placeholder-hide-xs" type="text" placeholder="Upload photo">
                                                       </div>
                                                       <span class="helper-text d-sm-none">Upload photo</span>
                                                   </div>
                                               </div>
                                           </div>

                                           <div class="card-panel mt-5">
                                               <div class="row">
                                                   <div class="col-md-12">
                                                       <h3 class="form-header">Flight Details</h3>
                                                   </div>
                                                   <div class="col-md-12">
                                                       <p class="mb-0">
                                                           *Please indicate all times in local Bangladesh time (UTC +6)
                                                       </p>
                                                       <p class="mb-0">
                                                           **In case your travel details haven't been finalized yet, please send us your confirmed travel details at <a href="mailto:exhibition@dgca57.com.bd">exhibition@dgca58.gov.bd</a> as soon as they are finalized
                                                       </p>
                                                   </div>
                                                   <div class="input-field col-md-4">
                                                       <input id="a_flight_no" type="text" class="validate" name="a_flight_no">
                                                       <label for="a_flight_no">Arrival Flight No.</label>
                                                   </div>
                                                   <div class="input-field col-md-4">
                                                       <input id="arrival_date" type="text" class="validate datepicker" name="arrival_date">
                                                       <label for="arrival_date">Arrival Date</label>
                                                   </div>
                                                   <div class="input-field col-md-4">
                                                       <input id="arrival_time" type="text" class="validate timepicker" name="arrival_time">
                                                       <label for="arrival_time">Arrival Time</label>
                                                   </div>
                                               </div>

                                               <div class="row">
                                                   <div class="input-field col-md-4">
                                                       <input id="d_flight_no" type="text" class="validate" name="d_flight_no">
                                                       <label for="d_flight_no">Departure Flight No.</label>
                                                   </div>
                                                   <div class="input-field col-md-4">
                                                       <input id="departure_date" type="text" class="validate datepicker" name="departure_date">
                                                       <label for="departure_date">Departure Date</label>
                                                   </div>
                                                   <div class="input-field col-md-4">
                                                       <input id="departure_time" type="text" class="validate timepicker" name="departure_time">
                                                       <label for="departure_time">Departure Time</label>
                                                   </div>
                                               </div>
                                           </div>

                                           <div class="card-panel mt-5">
                                               <div class="row">
                                                   <div class="col-md-12">
                                                       <h3 class="form-header">Preferences</h3>
                                                   </div>

                                                   <div class="col-md-12">
                                                       <h4 class="fs15">Activities</h4>
                                                       <p class="mb-2">
                                                           Please select the activities you will attend. For details, please see the conference website.
                                                       </p>
                                                       <div class="row">
                                                           <label class="col-lg-6">
                                                               <input type="checkbox" name="activities[]" value="Pre-conference Welcome Reception - 10 Oct 2020" />
                                                               <span>Pre-conference Welcome Reception - 10 Oct 2023</span>
                                                           </label>

                                                           <label class="col-md-6">
                                                               <input type="checkbox" name="activities[]" value="Welcome Dinner - 11 Oct 2020" />
                                                               <span>Welcome Dinner - 11 Oct 2023</span>
                                                           </label>

                                                           <label class="col-md-6">
                                                               <input type="checkbox" name="activities[]" value="Dinner Reception - 13 Oct 2020" />
                                                               <span>Dinner Reception - 13 Oct 2023</span>
                                                           </label>

                                                           <label class="col-md-6">
                                                               <input type="checkbox" name="activities[]" value="Excursion Day - 14 Oct 2020" />
                                                               <span>Excursion Day - 14 Oct 2023</span>
                                                           </label>

                                                           <label class="col-md-6">
                                                               <input type="checkbox" name="activities[]" value="Farewell Dinner - 14 Oct 2020" />
                                                               <span>Farewell Dinner - 14 Oct 2023</span>
                                                           </label>
                                                       </div>
                                                   </div>

                                                   <div class="input-field col-md-12">
                                                       <textarea id="special_need" class="materialize-textarea validate" name="special_need"></textarea>
                                                       <label for="special_need"><span class="d-none d-sm-inline">Special Requirements / </span>Additional Information</label>
                                                   </div>
                                               </div>
                                           </div>

                                           <div class="card-panel mt-5">
                                               <div class="row">
                                                   <h3 class="col-md-12 fs19">Note</h3>
                                                   <div class="col-md-12">
                                                       <ul class="fa-ul">
                                                           <li>
                                                               <span class="fa-li"><i class="fas fa-info-circle info-text fs21"></i></span> Personal data provided in this form will exclusively be used for processing of registration for DGCA Conference and other directly related administrative needs.
                                                           </li>
                                                           <li class="mt-4">
                                                               <span class="fa-li"><i class="fas fa-info-circle info-text fs21"></i></span> Please submit online by clicking on the following "submit" Button. If any difficulty is faced in online submission, please return the printed completed form by email to <a href="mailto:exhibition@dgca57.com.bd">exhibition@dgca58.gov.bd</a> or by fax to <a class="flagged" href="tel:+88012345678">+88012345678</a>. It is recommended that exhibitor register online before 28 September 2023.
                                                           </li>
                                                       </ul>
                                                   </div>
                                               </div>

                                               <div class="row mt-3">
                                                   <div class="col-md-12">
                                                       <label class="mr-4">
                                                           <input type="checkbox" name="agree" />
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
                   </div>
               <!-- Exhibitor Registration  -->

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
