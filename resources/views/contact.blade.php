@extends('layouts.frontend.app')

@section('content')

{{-- contact us --}}

{{-- breadcumbs --}}
<div class="container-fluid breadcrumb-bg" style="background-image: url('./img/bg-img/contactus.png'); ">
    <div class="container">
        <nav aria-label="breadcrumb" >
            <h2 class="mb-3">Contact Us</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
{{-- /breadcumbs --}}


<div class="container mt-lg">

    <div class="row">
        <div class="col-md-6">

            <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                <strong>Success!</strong> Your message has been sent to us.
            </div>

            <div class="alert alert-danger hidden mt-lg" id="contactError">
                <strong>Error!</strong> There was an error sending your message.
                <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
            </div>



            <h2 class="mb-sm mt-sm"><strong>Contact</strong> Us</h2>
            <form id="contactForm" action="#" name="myform" ng-app="gdxMain" ng-controller="Contact_Us" class="ng-pristine ng-scope ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength ng-valid-minlength ng-valid-email">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>First name *</label>
                            <input type="text" value="" ng-pattern="/^[a-zA-Z\s]*$/" data-msg-required="Please enter your first name." maxlength="100" ng-model="First_name" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" name="name" id="firstname" required="">
                            <span class="error ng-hide" ng-show="myform.name.$touched &amp;&amp; myform.name.$error.required">First name Required!</span>
                            <span class="error ng-hide" ng-show="myform.name.$touched &amp;&amp; myform.name.$error.pattern">Only alphabates!</span>
                        </div>


                        <div class="col-md-6">
                            <label>Last name *</label>
                            <input type="text" value="" ng-pattern="/^[a-zA-Z\s]*$/" data-msg-required="Please enter your last name." maxlength="100" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" name="last_name" id="lastname" required="" ng-model="last_name">
                            <span class="error ng-hide" ng-show="myform.last_name.$touched &amp;&amp; myform.last_name.$error.required"> Last name Required!</span>
                            <span class="error ng-hide" ng-show="myform.last_name.$touched &amp;&amp; myform.last_name.$error.pattern">Only alphabates!</span>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Your contact number *</label>
                            <input type="text" value="" data-msg-required="Please enter your contact number." minlength="10" maxlength="13" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength" name="contact" id="contact" required="" pattern="^(\+?\d{1,4}[\s-])?(?!0+\s+,?$)\d{10}\s*,?$" ng-model="mobile">
                            <span class="error ng-hide" ng-show="myform.contact.$touched &amp;&amp; myform.contact.$error.required">Required!</span>
                        </div>

                        <div class="col-md-6">
                            <label>Your email address *</label>
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control ng-pristine ng-untouched ng-empty ng-valid-email ng-invalid ng-invalid-required ng-valid-maxlength" name="reg_email" id="email" required="" ng-model="email">
                            <span class="error ng-hide" ng-show="myform.reg_email.$touched &amp;&amp; myform.reg_email.$error.required">Required!</span>
                            <span class="error ng-hide" ng-show="myform.reg_email.$touched &amp;&amp; myform.reg_email.$error.email">Not valid email!</span>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Your Country *</label>
                            <select required="" id="Country_residence" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" ng-model="Country_residence" ng-options="obj.id as obj.name for obj in birth_country" name="Country_residence" ng-class="{ 'has-error': (myform.countryOfResi.$touched &amp;&amp; myform.countryOfResi.$error.required) }"><option value="" class="" selected="selected"> Country </option><option label="Afghanistan" value="number:79">Afghanistan</option><option label="Albania" value="number:80">Albania</option><option label="Algeria" value="number:81">Algeria</option><option label="American Samoa" value="number:82">American Samoa</option><option label="Andorra" value="number:83">Andorra</option><option label="Angola" value="number:84">Angola</option><option label="Anguilla" value="number:85">Anguilla</option><option label="Antarctica" value="number:86">Antarctica</option><option label="Antigua And Barbuda" value="number:87">Antigua And Barbuda</option><option label="Argentina" value="number:88">Argentina</option><option label="Armenia" value="number:89">Armenia</option><option label="Aruba" value="number:90">Aruba</option><option label="Australia" value="number:77">Australia</option><option label="Austria" value="number:91">Austria</option><option label="Azerbaijan" value="number:92">Azerbaijan</option><option label="Bahamas The" value="number:93">Bahamas The</option><option label="Bahrain" value="number:94">Bahrain</option><option label="Bangladesh" value="number:95">Bangladesh</option><option label="Barbados" value="number:96">Barbados</option><option label="Belarus" value="number:97">Belarus</option><option label="Belgium" value="number:98">Belgium</option><option label="Belize" value="number:99">Belize</option><option label="Benin" value="number:100">Benin</option><option label="Bermuda" value="number:101">Bermuda</option><option label="Bhutan" value="number:102">Bhutan</option><option label="Bolivia" value="number:103">Bolivia</option><option label="Bosnia and Herzegovina" value="number:104">Bosnia and Herzegovina</option><option label="Botswana" value="number:105">Botswana</option><option label="Bouvet Island" value="number:106">Bouvet Island</option><option label="Brazil" value="number:61">Brazil</option><option label="British Indian Ocean Territory" value="number:107">British Indian Ocean Territory</option><option label="Brunei" value="number:108">Brunei</option><option label="Bulgaria" value="number:109">Bulgaria</option><option label="Burkina Faso" value="number:110">Burkina Faso</option><option label="Burundi" value="number:111">Burundi</option><option label="Cambodia" value="number:112">Cambodia</option><option label="Cameroon" value="number:113">Cameroon</option><option label="Canada" value="number:54">Canada</option><option label="Cape Verde" value="number:114">Cape Verde</option><option label="Cayman Islands" value="number:115">Cayman Islands</option><option label="Central African Republic" value="number:116">Central African Republic</option><option label="Chad" value="number:117">Chad</option><option label="Chile" value="number:118">Chile</option><option label="China" value="number:52">China</option><option label="Christmas Island" value="number:119">Christmas Island</option><option label="Cocos (Keeling) Islands" value="number:120">Cocos (Keeling) Islands</option><option label="Columbia" value="number:71">Columbia</option><option label="Comoros" value="number:121">Comoros</option><option label="Congo" value="number:122">Congo</option><option label="Congo The Democratic Republic Of The" value="number:123">Congo The Democratic Republic Of The</option><option label="Cook Islands" value="number:124">Cook Islands</option><option label="Costa Rica" value="number:125">Costa Rica</option><option label="Cote D'Ivoire (Ivory Coast)" value="number:126">Cote D'Ivoire (Ivory Coast)</option><option label="Croatia (Hrvatska)" value="number:127">Croatia (Hrvatska)</option><option label="Cuba" value="number:128">Cuba</option><option label="Cyprus" value="number:129">Cyprus</option><option label="Czech Republic" value="number:130">Czech Republic</option><option label="Denmark" value="number:131">Denmark</option><option label="Djibouti" value="number:132">Djibouti</option><option label="Dominica" value="number:133">Dominica</option><option label="Dominican Republic" value="number:134">Dominican Republic</option><option label="East Timor" value="number:135">East Timor</option><option label="Ecuador" value="number:136">Ecuador</option><option label="Egypt" value="number:137">Egypt</option><option label="El Salvador" value="number:138">El Salvador</option><option label="Emirates" value="number:60">Emirates</option><option label="Equatorial Guinea" value="number:139">Equatorial Guinea</option><option label="Eritrea" value="number:140">Eritrea</option><option label="Estonia" value="number:141">Estonia</option><option label="Ethiopia" value="number:142">Ethiopia</option><option label="External Territories of Australia" value="number:143">External Territories of Australia</option><option label="Falkland Islands" value="number:144">Falkland Islands</option><option label="Faroe Islands" value="number:145">Faroe Islands</option><option label="Fiji Islands" value="number:146">Fiji Islands</option><option label="Finland" value="number:147">Finland</option><option label="France" value="number:50">France</option><option label="French Guiana" value="number:148">French Guiana</option><option label="French Polynesia" value="number:149">French Polynesia</option><option label="French Southern Territories" value="number:150">French Southern Territories</option><option label="Gabon" value="number:151">Gabon</option><option label="Gambia The" value="number:152">Gambia The</option><option label="Georgia" value="number:153">Georgia</option><option label="Germany" value="number:46">Germany</option><option label="Ghana" value="number:154">Ghana</option><option label="Gibraltar" value="number:155">Gibraltar</option><option label="Greece" value="number:156">Greece</option><option label="Greenland" value="number:157">Greenland</option><option label="Grenada" value="number:158">Grenada</option><option label="Guadeloupe" value="number:159">Guadeloupe</option><option label="Guam" value="number:160">Guam</option><option label="Guatemala" value="number:161">Guatemala</option><option label="Guernsey and Alderney" value="number:162">Guernsey and Alderney</option><option label="Guinea" value="number:163">Guinea</option><option label="Guinea-Bissau" value="number:164">Guinea-Bissau</option><option label="Guyana" value="number:165">Guyana</option><option label="Haiti" value="number:166">Haiti</option><option label="Heard and McDonald Islands" value="number:167">Heard and McDonald Islands</option><option label="Honduras" value="number:168">Honduras</option><option label="Hong Kong" value="number:64">Hong Kong</option><option label="Hungary" value="number:169">Hungary</option><option label="Iceland" value="number:170">Iceland</option><option label="India" value="number:1">India</option><option label="Indonesia" value="number:65">Indonesia</option><option label="Iran" value="number:171">Iran</option><option label="Iraq" value="number:172">Iraq</option><option label="Ireland" value="number:75">Ireland</option><option label="Israel" value="number:173">Israel</option><option label="Italy" value="number:174">Italy</option><option label="Jamaica" value="number:175">Jamaica</option><option label="Japan" value="number:49">Japan</option><option label="Jersey" value="number:176">Jersey</option><option label="Jordan" value="number:177">Jordan</option><option label="Kazakhstan" value="number:178">Kazakhstan</option><option label="Kenya" value="number:68">Kenya</option><option label="Kiribati" value="number:179">Kiribati</option><option label="Korea North" value="number:180">Korea North</option><option label="Kuwait" value="number:181">Kuwait</option><option label="Kyrgyzstan" value="number:182">Kyrgyzstan</option><option label="Laos" value="number:183">Laos</option><option label="Latvia" value="number:184">Latvia</option><option label="Lebanon" value="number:185">Lebanon</option><option label="Lesotho" value="number:186">Lesotho</option><option label="Liberia" value="number:187">Liberia</option><option label="Libya" value="number:188">Libya</option><option label="Liechtenstein" value="number:189">Liechtenstein</option><option label="Lithuania" value="number:190">Lithuania</option><option label="Luxembourg" value="number:191">Luxembourg</option><option label="Macau S.A.R." value="number:192">Macau S.A.R.</option><option label="Macedonia" value="number:193">Macedonia</option><option label="Madagascar" value="number:194">Madagascar</option><option label="Malawi" value="number:195">Malawi</option><option label="Malaysia" value="number:67">Malaysia</option><option label="Maldives" value="number:196">Maldives</option><option label="Mali" value="number:197">Mali</option><option label="Malta" value="number:198">Malta</option><option label="Man (Isle of)" value="number:199">Man (Isle of)</option><option label="Marshall Islands" value="number:200">Marshall Islands</option><option label="Martinique" value="number:201">Martinique</option><option label="Mauritania" value="number:202">Mauritania</option><option label="Mauritius" value="number:203">Mauritius</option><option label="Mayotte" value="number:204">Mayotte</option><option label="Mexico" value="number:56">Mexico</option><option label="Micronesia" value="number:205">Micronesia</option><option label="Moldova" value="number:206">Moldova</option><option label="Monaco" value="number:207">Monaco</option><option label="Mongolia" value="number:208">Mongolia</option><option label="Montserrat" value="number:209">Montserrat</option><option label="Morocco" value="number:210">Morocco</option><option label="Mozambique" value="number:211">Mozambique</option><option label="Myanmar" value="number:212">Myanmar</option><option label="Namibia" value="number:213">Namibia</option><option label="Nauru" value="number:214">Nauru</option><option label="Nepal" value="number:62">Nepal</option><option label="Netherlands" value="number:51">Netherlands</option><option label="New Caledonia" value="number:216">New Caledonia</option><option label="New Zealand" value="number:78">New Zealand</option><option label="Nicaragua" value="number:217">Nicaragua</option><option label="Niger" value="number:218">Niger</option><option label="Nigeria" value="number:66">Nigeria</option><option label="Niue" value="number:219">Niue</option><option label="Norfolk Island" value="number:220">Norfolk Island</option><option label="Northern Mariana Islands" value="number:221">Northern Mariana Islands</option><option label="Norway" value="number:222">Norway</option><option label="Oman" value="number:223">Oman</option><option label="Pakistan" value="number:224">Pakistan</option><option label="Palau" value="number:225">Palau</option><option label="Palestinian Territory Occupied" value="number:226">Palestinian Territory Occupied</option><option label="Panama" value="number:227">Panama</option><option label="Papua new Guinea" value="number:228">Papua new Guinea</option><option label="Paraguay" value="number:229">Paraguay</option><option label="Peru" value="number:230">Peru</option><option label="Philippines" value="number:231">Philippines</option><option label="Pitcairn Island" value="number:232">Pitcairn Island</option><option label="Poland" value="number:233">Poland</option><option label="Portugal" value="number:234">Portugal</option><option label="Puerto Rico" value="number:235">Puerto Rico</option><option label="Qatar" value="number:236">Qatar</option><option label="Republic of Azerbaijan" value="number:291">Republic of Azerbaijan</option><option label="Romania" value="number:238">Romania</option><option label="Russia" value="number:69">Russia</option><option label="Rwanda" value="number:239">Rwanda</option><option label="Saint Helena" value="number:240">Saint Helena</option><option label="Saint Kitts And Nevis" value="number:241">Saint Kitts And Nevis</option><option label="Saint Lucia" value="number:242">Saint Lucia</option><option label="Saint Pierre and Miquelon" value="number:243">Saint Pierre and Miquelon</option><option label="Saint Vincent And The Grenadines" value="number:244">Saint Vincent And The Grenadines</option><option label="Samoa" value="number:245">Samoa</option><option label="San Marino" value="number:246">San Marino</option><option label="Sao Tome and Principe" value="number:247">Sao Tome and Principe</option><option label="Saudi Arabia" value="number:59">Saudi Arabia</option><option label="Senegal" value="number:248">Senegal</option><option label="Serbia" value="number:249">Serbia</option><option label="Seychelles" value="number:250">Seychelles</option><option label="Sierra Leone" value="number:251">Sierra Leone</option><option label="Singapore" value="number:76">Singapore</option><option label="Slovakia" value="number:252">Slovakia</option><option label="Slovenia" value="number:253">Slovenia</option><option label="Smaller Territories of the UK" value="number:254">Smaller Territories of the UK</option><option label="Solomon Islands" value="number:255">Solomon Islands</option><option label="Somalia" value="number:256">Somalia</option><option label="South Africa" value="number:257">South Africa</option><option label="South Georgia" value="number:258">South Georgia</option><option label="South Korea" value="number:53">South Korea</option><option label="South Sudan" value="number:259">South Sudan</option><option label="Spain" value="number:74">Spain</option><option label="Sri Lanka" value="number:3">Sri Lanka</option><option label="Sudan" value="number:260">Sudan</option><option label="Suriname" value="number:261">Suriname</option><option label="Svalbard And Jan Mayen Islands" value="number:262">Svalbard And Jan Mayen Islands</option><option label="Swaziland" value="number:263">Swaziland</option><option label="Sweden" value="number:72">Sweden</option><option label="Switzerland" value="number:73">Switzerland</option><option label="Syria" value="number:264">Syria</option><option label="Taiwan" value="number:55">Taiwan</option><option label="Tajikistan" value="number:265">Tajikistan</option><option label="Tanzania" value="number:266">Tanzania</option><option label="Thailand" value="number:63">Thailand</option><option label="Togo" value="number:267">Togo</option><option label="Tokelau" value="number:268">Tokelau</option><option label="Tonga" value="number:269">Tonga</option><option label="Trinidad And Tobago" value="number:270">Trinidad And Tobago</option><option label="Tunisia" value="number:271">Tunisia</option><option label="Turkey" value="number:57">Turkey</option><option label="Turkmenistan" value="number:272">Turkmenistan</option><option label="Turks And Caicos Islands" value="number:273">Turks And Caicos Islands</option><option label="Tuvalu" value="number:274">Tuvalu</option><option label="Uganda" value="number:275">Uganda</option><option label="Ukraine" value="number:276">Ukraine</option><option label="United Arab Emirates" value="number:290">United Arab Emirates</option><option label="United Kingdom" value="number:48">United Kingdom</option><option label="United States Minor Outlying Islands" value="number:277">United States Minor Outlying Islands</option><option label="United States of America" value="number:47">United States of America</option><option label="Uruguay" value="number:278">Uruguay</option><option label="Uzbekistan" value="number:279">Uzbekistan</option><option label="Vanuatu" value="number:280">Vanuatu</option><option label="Vatican City State (Holy See)" value="number:281">Vatican City State (Holy See)</option><option label="Venezuela" value="number:70">Venezuela</option><option label="Vietnam" value="number:58">Vietnam</option><option label="Virgin Islands (British)" value="number:282">Virgin Islands (British)</option><option label="Virgin Islands (US)" value="number:283">Virgin Islands (US)</option><option label="Wallis And Futuna Islands" value="number:284">Wallis And Futuna Islands</option><option label="Western Sahara" value="number:285">Western Sahara</option><option label="Yemen" value="number:286">Yemen</option><option label="Yugoslavia" value="number:287">Yugoslavia</option><option label="Zambia" value="number:288">Zambia</option><option label="Zimbabwe" value="number:289">Zimbabwe</option></select>
                            <span class="error ng-hide" ng-show="myform.Country_residence.$touched &amp;&amp; myform.Country_residence.$error.required">Select  Country!</span>
                        </div>
                        <div class="col-md-6">
                            <label>I am *</label>
                            <select class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" required="" id="i_am" name="i_am" ng-model="i_am">
                                <option value="">select the correct option</option>
                                <option value="a high school student seeking undergraduate degree">a high school student seeking undergraduate degree</option>
                                <option value="seeking a Graduate/Post Graduate / PhD Degree">seeking a Graduate/Post Graduate / PhD Degree</option>
                                <option value="a parent or a guardian looking for more information">a parent or a guardian looking for more information</option>
                                <option value="a study abroad counselor or a company">a study abroad counselor or a company</option>
                                <option value="a school, college or a university official">a school, college or a university official</option>
                                <option value="an education service provider">an education service provider</option>
                                <option value="other">other</option>

                            </select>
                              <span class="error ng-hide" ng-show="myform.i_am.$touched &amp;&amp; myform.i_am.$error.required">Choose any one</span>
                        </div>


                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>My Response *</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength" name="message" id="message" ng-model="my_response" required=""></textarea>
                            <span class="error ng-hide" ng-show="myform.message.$touched &amp;&amp; myform.message.$error.required">Enter your response</span>
                        </div>
                    </div>
                </div>

                <!-- START CAPTCHA -->

                <div class="form-group">
                    <div class="col-md-2">&nbsp;</div>
                    <div class="col-md-10">
                        <div class="capbox">

                            <div id="CaptchaDiv" disabled="true">26942</div>


                            <div class="capbox-inner">
                                Type the above number:<br>

                                <input type="hidden" id="txtCaptcha" value="26942">
                                <input required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" ng-model="captchaInput" type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label style="font-weight: 400;">
                            <input required="" type="checkbox" ng-model="terms" name="terms" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"> I agree to the  Gdx <a href="/TermsofUse">Terms &amp; Conditions</a> and <a href="/PrivacyPolicy">Privacy Policy</a>
                            <span class="error ng-hide" ng-show="myform.terms.$touched &amp;&amp; myform.terms.$error.required">Please agree to the  Gdx Terms &amp; Conditions.</span>
                        </label>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="button" id="gdContactSubmit" ng-disabled="(!myform.$valid) || isDisabled" value="Send Message" ng-model="isDisabled" class="btn btn-primary btn-mg mb-xlg ng-pristine ng-untouched ng-valid ng-empty" data-loading-text="Loading..." ng-click="Contact_Us_function()" disabled="disabled">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">

            <style>
                .custom-location {
                    padding-left: 50px;
                }

                    .custom-location > img {
                        position: absolute;
                        top: 17px;
                        left: 0;
                    }

                    .custom-location p {
                        text-align: justify;
                    }
            </style>

            <h4 class="heading-primary">Our <strong>Support</strong></h4>
            <ul class="list list-icons list-icons-style-3 mt-xlg">
                <li>
                    <i class="fa fa-users"></i> <strong>Book an Appointment:</strong>
                    <br>
                    For One-on-One Study Abroad Counseling, <a href="" target="_blank">schedule your appointment here.</a>
                </li>
                <li>
                    <i class="fa fa-phone"></i> <strong>Helpline:</strong> (+91) 828 633 4353
                </li>
                <li>
                    <i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:info@gdx.in">info@gdx.in</a>
                </li>
                <li>
                    <i class="fa fa-skype"></i> <strong>Skype Us:</strong> grad.dreams
                </li>
            </ul>

            <hr>

            <div class="col-md-10">
                <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
                <script>
                    (function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://www.facebook.com/RouteAlternative/';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/RouteAlternative/" data-tabs="timeline" data-width="400px" data-height="300px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=433&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FWeHelpToStudyAbroad%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;tabs=timeline&amp;width=400px"><span style="vertical-align: bottom; width: 400px; height: 300px;"><iframe name="f38f0299fc232c" height="300px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="" style="border: none; visibility: visible; width: 400px; height: 300px;" class=""></iframe></span></div>
            </div>

            <div class="col-md-2">
                <ul class="social-icons hidden-xs">
                    <li class="social-icons-facebook"><a href="https://www.facebook.com/RouteAlternative/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-icons-linkedin"><a href="https://www.linkedin.com/company/route-alternative" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="custom-location">
                <img src="/COntent/img/demos/gym/map/pin.png" alt="" class="img-responsive">
                <h6 class="font-weight-bold text-color-quaternary text-lg mb-xs">Headquarters</h6>
                <p>
                    2nd Floor, Falcon Court, Hari Om Nagar, Near Eastern Express Highway, Mulund (E), Mumbai. State: Maharashtra. 400081, India.
                    <br>
                    <strong>It's close to Thane Station, East Side.</strong>
                </p>
                <p>
                    <a href="https://goo.gl/maps/SCtgEA4YECDsct9Y9" data-toggle="modal" data-target="#mumbaiAddr">Google Map</a>
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="custom-location">
                <img src="/COntent/img/demos/gym/map/pin.png" alt="" class="img-responsive">
                <h6 class="font-weight-bold text-color-quaternary text-lg mb-xs">Pune</h6>
                <p>
                    330, 3rd Floor, Marvel Vista, Above PNG Showroom, Bibwewadi Kondhwa Road,Kondhwa Chowk, Lulla Nagar, Pune. State: Maharashtra, 411048, India.
                </p>
                <p>
                    <a href="https://goo.gl/maps/Eb2umfPysFq" data-toggle="modal" data-target="#puneAddr">Google Map</a>
                </p>
            </div>
        </div>

    </div>

    <br>
    <div class="row">
        <div class="col-md-6">
            <h6 class="font-weight-bold text-color-quaternary text-lg mb-lg">
                <a href="#">Looking for study abroad consultant in Pune?</a>
            </h6>
            <p class="text-justify">
                One of the best study abroad consultants in Pune, at Grad-Dreams you will get an expert advice and assistance for University Selection, Admissions and Application Process, Visa Guidance to study in USA, UK, Ireland, Canada, Australia, New Zealand and other countries. Our Coaching for IELTS, TOEFL, GRE and SAT employs a scientific and student centric approach, our certified trainers adopt methodical techniques with the structured classes and extensive practise to train students for IELTS and TOEFL in achieving their desired goal. Come and meet Grad-Dreams’ top overseas education consultants and realise your dream to study overseas.
            </p>
        </div>
        <div class="col-md-6">
            <h6 class="font-weight-bold text-color-quaternary text-lg mb-lg">
                <a href="#"> Looking for overseas education consultant in Mumbai ?</a>
            </h6>
            <p class="text-justify">
                Grad-Dreams as expert study abroad consultants in Mumbai, Navi Mumbai and Thane, has served thousands of students in pursuing their dreams to study in USA, UK, Ireland, Canada, Australia, New Zealand and other countries for past 15 years. Our overseas education counselors assist students in University Selection, Admissions and Application Process and Visa Guidance. Our Certified IELTS and TOEFL trainers ensure that the students get their desired scores through the classroom coaching for IELTS, TOEFL, SAT and GRE wherein our trainers employ advanced teaching methodology, innovative resources through structured classes and extensive practice. The combined efforts by our trainers, advisors and students brings sure shot success. Achieve your goals to study overseas by taking advice from expert education abroad consultants at Grad-Dreams.
            </p>
        </div>
    </div>
</div>

{{-- /contact us --}}
@endsection
