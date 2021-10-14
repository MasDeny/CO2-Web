<?php 
    require_once APP_ROOT . '/src/Views/layouts/meta.php';
    require_once APP_ROOT . '/src/Views/layouts/header.php';
    require_once APP_ROOT . '/src/Views/layouts/banner.php';
?>
<section class="contact-us">
    <div id="contact" class="container">
        <div class="pt-5 pb-5">
            <div class="text-center">
                <h4 class="font-weight-bold text-uppercase text-black">contact <span class="text-yellow">us</span>
                </h4>
            </div>
            <div class="row">
                <!--<div class="col-lg-4 col-md-4">-->
                <!--    <div class=" pb-5">-->
                <!--        <h5 class="font-weight-bold text-yellow">Address</h5>-->
                <!--        <h5 class="font-weight-bold"><span class="text-yellow"><i class="fas fa-map-marker-alt"></i></span>&nbsp; &nbsp;Singapore Head Office</h5>-->

                <!--        <p>456 Alexandra Road,<br/>#04-02 Fragrance Empire Building<br/>Singapore 119962<br/></p>-->

                <!--        <p class="text-yellow mb-0"><i class="fas fa-phone-alt"></i><span class="text-black">&nbsp; &nbsp; +62 822-4223-3230</span></p>-->
                <!--    </div>-->

                <!--    <div class=" pb-5">-->
                <!--        <h5 class="font-weight-bold"><span class="text-yellow"><i class="fas fa-map-marker-alt"></i></span>&nbsp; &nbsp;Indonesia Office</h5>-->

                <!--        <p>JL. Soga No 46 Tahunan,<br/>Kec. Umbulharjo, Kota Yogyakarta,<br/>Daerah Istimewa Yogyakarta 55167</p>-->

                <!--        <p class="text-yellow mb-0"><i class="fas fa-phone-alt"></i><span class="text-black">&nbsp; &nbsp; +62 822-4223-3230</span></p>-->
                <!--    </div>-->

                <!--    <div class="">-->
                <!--        <p class="text-yellow mb-0"><i class="fas fa-envelope"></i><span class="text-black">&nbsp; &nbsp;support@codingcollective.com</span></p>-->
                <!--    </div>-->
                <!--</div>-->

                <div class="col-lg-12 col-md-12">
                    <form id="contact-form" name="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-5">
                                    <input type="text" id="name" name="name" class="form-control" required>
                                    <label for="subject" class="">Your Name <span class="text-danger">*</span></label>
                                </div>
                                <div class="md-form mb-5">
                                    <input type="text" id="mobile-number" name="mobile-number" class="form-control"
                                        required>
                                    <label for="subject" class="">Mobile Number <span
                                            class="text-danger">*</span></label>
                                </div>
                                <div class="md-form mb-5">
                                    <input type="email" id="email" name="email" class="form-control" required>
                                    <label for="subject" class="">Email <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-5">
                                    <input type="text" id="company-name" name="company-name" class="form-control"
                                        required>
                                    <label for="subject" class="">Company Name</label>
                                </div>
                                <select id="industry" name="industry" class="mdb-select md-form mb-5">
                                    <option value="" disabled selected>Industry</option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="Airlines/Aviation">Airlines/Aviation</option>
                                    <option value="Alternative Dispute Resolution">Alternative Dispute Resolution
                                    </option>
                                    <option value="Alternative Medicine">Alternative Medicine</option>
                                    <option value="Animation">Animation</option>
                                    <option value="Apparel/Fashion">Apparel/Fashion</option>
                                    <option value="Architecture/Planning">Architecture/Planning</option>
                                    <option value="Arts/Crafts">Arts/Crafts</option>
                                    <option value="Automotive">Automotive</option>
                                    <option value="Aviation/Aerospace">Aviation/Aerospace</option>
                                    <option value="Banking/Mortgage">Banking/Mortgage</option>
                                    <option value="Biotechnology/Greentech">Biotechnology/Greentech</option>
                                    <option value="Broadcast Media">Broadcast Media</option>
                                    <option value="Building Materials">Building Materials</option>
                                    <option value="Business Supplies/Equipment">Business Supplies/Equipment</option>
                                    <option value="Capital Markets/Hedge Fund/Private Equity">Capital Markets/Hedge
                                        Fund/Private Equity</option>
                                    <option value="Chemicals">Chemicals</option>
                                    <option value="Civic/Social Organization">Civic/Social Organization</option>
                                    <option value="Civil Engineering">Civil Engineering</option>
                                    <option value="Commercial Real Estate">Commercial Real Estate</option>
                                    <option value="Computer Games">Computer Games</option>
                                    <option value="Computer Hardware">Computer Hardware</option>
                                    <option value="Computer Networking">Computer Networking</option>
                                    <option value="Computer Software/Engineering">Computer Software/Engineering
                                    </option>
                                    <option value="Computer/Network Security">Computer/Network Security</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Consumer Electronics">Consumer Electronics</option>
                                    <option value="Consumer Goods">Consumer Goods</option>
                                    <option value="Consumer Services">Consumer Services</option>
                                    <option value="Cosmetics">Cosmetics</option>
                                    <option value="Dairy">Dairy</option>
                                    <option value="Defense/Space">Defense/Space</option>
                                    <option value="Design">Design</option>
                                    <option value="E-Learning">E-Learning</option>
                                    <option value="Education Management">Education Management</option>
                                    <option value="Electrical/Electronic Manufacturing">Electrical/Electronic
                                        Manufacturing</option>
                                    <option value="Entertainment/Movie Production">Entertainment/Movie Production
                                    </option>
                                    <option value="Environmental Services">Environmental Services</option>
                                    <option value="Events Services">Events Services</option>
                                    <option value="Executive Office">Executive Office</option>
                                    <option value="Facilities Services">Facilities Services</option>
                                    <option value="Farming">Farming</option>
                                    <option value="Financial Services">Financial Services</option>
                                    <option value="Fine Art">Fine Art</option>
                                    <option value="Fishery">Fishery</option>
                                    <option value="Food Production">Food Production</option>
                                    <option value="Food/Beverages">Food/Beverages</option>
                                    <option value="Fundraising">Fundraising</option>
                                    <option value="Furniture">Furniture</option>
                                    <option value="Gambling/Casinos">Gambling/Casinos</option>
                                    <option value="Glass/Ceramics/Concrete">Glass/Ceramics/Concrete</option>
                                    <option value="Government Administration">Government Administration</option>
                                    <option value="Government Relations">Government Relations</option>
                                    <option value="Graphic Design/Web Design">Graphic Design/Web Design</option>
                                    <option value="Health/Fitness">Health/Fitness</option>
                                    <option value="Higher Education/Acadamia">Higher Education/Acadamia</option>
                                    <option value="Hospital/Health Care">Hospital/Health Care</option>
                                    <option value="Hospitality">Hospitality</option>
                                    <option value="Human Resources/HR">Human Resources/HR</option>
                                    <option value="Import/Export">Import/Export</option>
                                    <option value="Individual/Family Services">Individual/Family Services</option>
                                    <option value="Industrial Automation">Industrial Automation</option>
                                    <option value="Information Services">Information Services</option>
                                    <option value="Information Technology/IT">Information Technology/IT</option>
                                    <option value="Insurance">Insurance</option>
                                    <option value="International Affairs">International Affairs</option>
                                    <option value="International Trade/Development">International Trade/Development
                                    </option>
                                    <option value="Internet">Internet</option>
                                    <option value="Investment Banking/Venture">Investment Banking/Venture</option>
                                    <option value="Investment Management/Hedge Fund/Private Equity">Investment
                                        Management/Hedge Fund/Private Equity</option>
                                    <option value="Judiciary">Judiciary</option>
                                    <option value="Law Enforcement">Law Enforcement</option>
                                    <option value="Law Practice/Law Firms">Law Practice/Law Firms</option>
                                    <option value="Legal Services">Legal Services</option>
                                    <option value="Legislative Office">Legislative Office</option>
                                    <option value="Leisure/Travel">Leisure/Travel</option>
                                    <option value="Library">Library</option>
                                    <option value="Logistics/Procurement">Logistics/Procurement</option>
                                    <option value="Luxury Goods/Jewelry">Luxury Goods/Jewelry</option>
                                    <option value="Machinery">Machinery</option>
                                    <option value="Management Consulting">Management Consulting</option>
                                    <option value="Maritime">Maritime</option>
                                    <option value="Market Research">Market Research</option>
                                    <option value="Marketing/Advertising/Sales">Marketing/Advertising/Sales</option>
                                    <option value="Mechanical or Industrial Engineering">Mechanical or Industrial
                                        Engineering</option>
                                    <option value="Media Production">Media Production</option>
                                    <option value="Medical Equipment">Medical Equipment</option>
                                    <option value="Medical Practice">Medical Practice</option>
                                    <option value="Mental Health Care">Mental Health Care</option>
                                    <option value="Military Industry">Military Industry</option>
                                    <option value="Mining/Metals">Mining/Metals</option>
                                    <option value="Motion Pictures/Film">Motion Pictures/Film</option>
                                    <option value="Museums/Institutions">Museums/Institutions</option>
                                    <option value="Music">Music</option>
                                    <option value="Nanotechnology">Nanotechnology</option>
                                    <option value="Newspapers/Journalism">Newspapers/Journalism</option>
                                    <option value="Non-Profit/Volunteering">Non-Profit/Volunteering</option>
                                    <option value="Oil/Energy/Solar/Greentech">Oil/Energy/Solar/Greentech</option>
                                    <option value="Online Publishing">Online Publishing</option>
                                    <option value="Other Industry">Other Industry</option>
                                    <option value="Outsourcing/Offshoring">Outsourcing/Offshoring</option>
                                    <option value="Package/Freight Delivery">Package/Freight Delivery</option>
                                    <option value="Packaging/Containers">Packaging/Containers</option>
                                    <option value="Paper/Forest Products">Paper/Forest Products</option>
                                    <option value="Performing Arts">Performing Arts</option>
                                    <option value="Pharmaceuticals">Pharmaceuticals</option>
                                    <option value="Philanthropy">Philanthropy</option>
                                    <option value="Photography">Photography</option>
                                    <option value="Plastics">Plastics</option>
                                    <option value="Political Organization">Political Organization</option>
                                    <option value="Primary/Secondary Education">Primary/Secondary Education</option>
                                    <option value="Printing">Printing</option>
                                    <option value="Professional Training">Professional Training</option>
                                    <option value="Program Development">Program Development</option>
                                    <option value="Public Relations/PR">Public Relations/PR</option>
                                    <option value="Public Safety">Public Safety</option>
                                    <option value="Publishing Industry">Publishing Industry</option>
                                    <option value="Railroad Manufacture">Railroad Manufacture</option>
                                    <option value="Ranching">Ranching</option>
                                    <option value="Real Estate/Mortgage">Real Estate/Mortgage</option>
                                    <option value="Recreational Facilities/Services">Recreational
                                        Facilities/Services</option>
                                    <option value="Religious Institutions">Religious Institutions</option>
                                    <option value="Renewables/Environment">Renewables/Environment</option>
                                    <option value="Research Industry">Research Industry</option>
                                    <option value="Restaurants">Restaurants</option>
                                    <option value="Retail Industry">Retail Industry</option>
                                    <option value="Security/Investigations">Security/Investigations</option>
                                    <option value="Semiconductors">Semiconductors</option>
                                    <option value="Shipbuilding">Shipbuilding</option>
                                    <option value="Sporting Goods">Sporting Goods</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Staffing/Recruiting">Staffing/Recruiting</option>
                                    <option value="Supermarkets">Supermarkets</option>
                                    <option value="Telecommunications">Telecommunications</option>
                                    <option value="Textiles">Textiles</option>
                                    <option value="Think Tanks">Think Tanks</option>
                                    <option value="Tobacco">Tobacco</option>
                                    <option value="Translation/Localization">Translation/Localization</option>
                                    <option value="Transportation">Transportation</option>
                                    <option value="Utilities">Utilities</option>
                                    <option value="Venture Capital/VC">Venture Capital/VC</option>
                                    <option value="Veterinary">Veterinary</option>
                                    <option value="Warehousing">Warehousing</option>
                                    <option value="Wholesale">Wholesale</option>
                                    <option value="Wine/Spirits">Wine/Spirits</option>
                                    <option value="Wireless">Wireless</option>
                                    <option value="Writing/Editing">Writing/Editing</option>
                                </select>

                                <select id="country" name="country" class="mdb-select md-form mb-5">
                                    <option value="" disabled selected>Country</option>
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
                                    <option value="Korea North">Korea North</option>
                                    <option value="Korea Sout">Korea South</option>
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
                            </div>
                        </div>
                        <!--Material textarea-->
                        <div class="md-form mb-5">
                            <textarea id="message" name="message" class="md-textarea form-control" rows="4"></textarea>
                            <label for="form7">Message <span class="text-danger">*</span></label>
                        </div>
                    </form>
                    <?php require_once APP_ROOT . '/src/Views/captcha.php';?>
                    <div class="text-center mt-5 mb-5">
                        <p>For any other inquiries please contact
                            <a href=mailto:support@codingcollective.com?subject="ContactUs" id="contacts">
                                support@codingcollective.com
                            </a>
                        </p>
                        <a class="btn btn-dark text-uppercase font-weight-bold text-yellow btn-rounded"
                            onclick="validateForm('contact-us')">submit</a>
                    </div>
                    <div class="status"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    require_once APP_ROOT . '/src/Views/layouts/footer.php';
    require_once APP_ROOT . '/src/Views/layouts/script.php';
?>