 


<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<body>
   

    <!-- Page Content -->

        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Registration</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="index.php" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">index</a>
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">index</a></li>
                        <li class="active">Register</li>
                    </ul>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="container-fluid">

                <div class="panel-heading"> Form Register</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="insert_registration.php" class="form-horizontal form-bordered" method="post" >    
                            <div class="form-body">  <div class="col-md-8">

                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Employment </label>
                                        <div class="col-md-9">
                                            <div class="radio-list">
                                                <label>
                                                    <input type="radio" name="employment" value="physician"> physician </label>
                                                <label>
                                                    <input type="radio" name="employment" value="nurse" >  nurse </label>
                                               
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">other</label>
                                                <div class="col-md-9">
                                                    <input type="text" placeholder="other Employment" class="form-control" name="other_employment"value="" > </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Article </label>
                                        <div class="col-md-9">
                                            <div class="radio-list">
                                                <label>
                                                    <input type="radio" name="indexname" value="Mr." > Mr. </label>
                                                <label>
                                                    <input type="radio" name="indexname"  value="Mrs." > Mrs.   </label>
                                                <label>
                                                    <input type="radio" name="indexname"  value="Miss" >  Miss </label>
                                                     <label>
                                                    <input type="radio" name="indexname"  value="Dr." >  Dr. </label>
                                                     <label>
                                                    <input type="radio" name="indexname"  value="Prof" > Prof </label>
                                         
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">First name</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="First name" class="form-control" name="first_name_eg"value="" > <span class="help-block"> First name * </span> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Family name</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Family name" class="form-control"name="last_name_eg" value=""> <span class="help-block"> Family name* </span> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" >Password*</label>
                                        <div class="col-md-9">
                                            <input id="custPassword" type="password" class="form-control" name="custPassword" smk-text="Password " required><span class="help-block">Password* </span>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-3">ProfessionalNumber </label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="ProfessionalNumber  " class="form-control" name="professional_number" value=""> <span class="help-block">ProfessionalNumber </span> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Hospital&institution</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Hospital" class="form-control"name="hospital" value=""> <span class="help-block">Hospital&institution</span> </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Department</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="department" class="form-control"name="departmentR" value=""> <span class="help-block">Department</span> </div>
                                    </div>
                                    <td valign=top align=right>Country<font class=require>*</font>  </td>
	<td valign=top >
		<select name="country" >
			<option value="">---Choose---</option>
			<option value="Afghanistan"  >Afghanistan</option><option value="Albania"  >Albania</option><option value="Algeria"  >Algeria</option><option value="American Samoa"  >American Samoa</option><option value="Andorra"  >Andorra</option><option value="Angola"  >Angola</option><option value="Anguilla"  >Anguilla</option><option value="Antarctica"  >Antarctica</option><option value="Antigua and Barbuda"  >Antigua and Barbuda</option><option value="Argentina"  >Argentina</option><option value="Armenia"  >Armenia</option><option value="Aruba"  >Aruba</option><option value="Australia"  >Australia</option><option value="Austria"  >Austria</option><option value="Azerbaijan"  >Azerbaijan</option><option value="Bahamas"  >Bahamas</option><option value="Bahrain"  >Bahrain</option><option value="Bangladesh"  >Bangladesh</option><option value="Barbados"  >Barbados</option><option value="Belarus"  >Belarus</option><option value="Belgium"  >Belgium</option><option value="Belize"  >Belize</option><option value="Benin"  >Benin</option><option value="Bermuda"  >Bermuda</option><option value="Bhutan"  >Bhutan</option><option value="Bolivia"  >Bolivia</option><option value="Bosnia and Herzegowina"  >Bosnia and Herzegowina</option><option value="Botswana"  >Botswana</option><option value="Bouvet Island"  >Bouvet Island</option><option value="Brazil"  >Brazil</option><option value="British Indian Ocean Territory"  >British Indian Ocean Territory</option><option value="Brunei Darussalam"  >Brunei Darussalam</option><option value="Bulgaria"  >Bulgaria</option><option value="Burkina Faso"  >Burkina Faso</option><option value="Burundi"  >Burundi</option><option value="Cambodia"  >Cambodia</option><option value="Cameroon"  >Cameroon</option><option value="Canada"  >Canada</option><option value="Cape Verde"  >Cape Verde</option><option value="Cayman Islands"  >Cayman Islands</option><option value="Central African Republic"  >Central African Republic</option><option value="Chad"  >Chad</option><option value="Chile"  >Chile</option><option value="China"  >China</option><option value="Christmas Island"  >Christmas Island</option><option value="Cocos (Keeling) Islands"  >Cocos (Keeling) Islands</option><option value="Colombia"  >Colombia</option><option value="Comoros"  >Comoros</option><option value="Congo"  >Congo</option><option value="Cook Islands"  >Cook Islands</option><option value="Costa Rica"  >Costa Rica</option><option value="Cote D Ivoire"  >Cote D Ivoire</option><option value="Croatia"  >Croatia</option><option value="Cuba"  >Cuba</option><option value="Cyprus"  >Cyprus</option><option value="Czech Republic"  >Czech Republic</option><option value="D,P,R, Korea"  >D,P,R, Korea</option><option value="Denmark"  >Denmark</option><option value="Djibouti"  >Djibouti</option><option value="Dominica"  >Dominica</option><option value="Dominican Republic"  >Dominican Republic</option><option value="East Timor"  >East Timor</option><option value="Ecuador"  >Ecuador</option><option value="Egypt"  >Egypt</option><option value="El Salvador"  >El Salvador</option><option value="Equatorial Guinea"  >Equatorial Guinea</option><option value="Eritrea"  >Eritrea</option><option value="Estonia"  >Estonia</option><option value="Ethiopia"  >Ethiopia</option><option value="Falkland Islands"  >Falkland Islands</option><option value="Faroe Islands"  >Faroe Islands</option><option value="Fiji"  >Fiji</option><option value="Finland"  >Finland</option><option value="France"  >France</option><option value="France Metropolitan"  >France Metropolitan</option><option value="French Guiana"  >French Guiana</option><option value="French Polynesia"  >French Polynesia</option><option value="French Southern Territories"  >French Southern Territories</option><option value="Gabon"  >Gabon</option><option value="Gambia"  >Gambia</option><option value="Georgia"  >Georgia</option><option value="Germany"  >Germany</option><option value="Ghana"  >Ghana</option><option value="Gibraltar"  >Gibraltar</option><option value="Greece"  >Greece</option><option value="Greenland"  >Greenland</option><option value="Grenada"  >Grenada</option><option value="Guadeloupe"  >Guadeloupe</option><option value="Guam"  >Guam</option><option value="Guatemala"  >Guatemala</option><option value="Guinea"  >Guinea</option><option value="Guinea-Bissau"  >Guinea-Bissau</option><option value="Guyana"  >Guyana</option><option value="Haiti"  >Haiti</option><option value="Heard and McDonald Islands"  >Heard and McDonald Islands</option><option value="Honduras"  >Honduras</option><option value="Hong Kong SAR PRC"  >Hong Kong SAR PRC</option><option value="Hungary"  >Hungary</option><option value="Iceland"  >Iceland</option><option value="India"  >India</option><option value="Indonesia"  >Indonesia</option><option value="Iran"  >Iran</option><option value="Iraq"  >Iraq</option><option value="Ireland"  >Ireland</option><option value="Israel"  >Israel</option><option value="Italy"  >Italy</option><option value="Jamaica"  >Jamaica</option><option value="Japan"  >Japan</option><option value="Jordan"  >Jordan</option><option value="Kazakhstan"  >Kazakhstan</option><option value="Kenya"  >Kenya</option><option value="Kiribati"  >Kiribati</option><option value="Korea"  >Korea</option><option value="Kuwait"  >Kuwait</option><option value="Kyrgyzstan"  >Kyrgyzstan</option><option value="Lao People s Republic"  >Lao People s Republic</option><option value="Latvia"  >Latvia</option><option value="Lebanon"  >Lebanon</option><option value="Lesotho"  >Lesotho</option><option value="Liberia"  >Liberia</option><option value="Libyan Arab Jamahiriya"  >Libyan Arab Jamahiriya</option><option value="Liechtenstein"  >Liechtenstein</option><option value="Lithuania"  >Lithuania</option><option value="Luxembourg"  >Luxembourg</option><option value="Macau"  >Macau</option><option value="Macedonia"  >Macedonia</option><option value="Madagascar"  >Madagascar</option><option value="Malawi"  >Malawi</option><option value="Malaysia"  >Malaysia</option><option value="Maldives"  >Maldives</option><option value="Mali"  >Mali</option><option value="Malta"  >Malta</option><option value="Marshall Islands"  >Marshall Islands</option><option value="Martinique"  >Martinique</option><option value="Mauritania"  >Mauritania</option><option value="Mauritius"  >Mauritius</option><option value="Mayotte"  >Mayotte</option><option value="Mexico"  >Mexico</option><option value="Micronesia"  >Micronesia</option><option value="Moldova"  >Moldova</option><option value="Monaco"  >Monaco</option><option value="Mongolia"  >Mongolia</option><option value="Montserrat"  >Montserrat</option><option value="Morocco"  >Morocco</option><option value="Mozambique"  >Mozambique</option><option value="Myanmar"  >Myanmar</option><option value="Namibia"  >Namibia</option><option value="Nauru"  >Nauru</option><option value="Nepal"  >Nepal</option><option value="Netherlands"  >Netherlands</option><option value="Netherlands Antilles"  >Netherlands Antilles</option><option value="New Caledonia"  >New Caledonia</option><option value="New Zealand"  >New Zealand</option><option value="Nicaragua"  >Nicaragua</option><option value="Niger"  >Niger</option><option value="Nigeria"  >Nigeria</option><option value="Niue"  >Niue</option><option value="Norfolk Island"  >Norfolk Island</option><option value="Northern Mariana Islands"  >Northern Mariana Islands</option><option value="Norway"  >Norway</option><option value="NULL"  >NULL</option><option value="Oman"  >Oman</option><option value="Other-Not Shown"  >Other-Not Shown</option><option value="Pakistan"  >Pakistan</option><option value="Palau"  >Palau</option><option value="Panama"  >Panama</option><option value="Papua New Guinea"  >Papua New Guinea</option><option value="Paraguay"  >Paraguay</option><option value="Peru"  >Peru</option><option value="Philippines"  >Philippines</option><option value="Pitcairn"  >Pitcairn</option><option value="Poland"  >Poland</option><option value="Portugal"  >Portugal</option><option value="Puerto Rico"  >Puerto Rico</option><option value="Qatar"  >Qatar</option><option value="Reunion"  >Reunion</option><option value="Romania"  >Romania</option><option value="Russian Federation"  >Russian Federation</option><option value="Rwanda"  >Rwanda</option><option value="Saint Kitts and Nevis"  >Saint Kitts and Nevis</option><option value="Saint Lucia"  >Saint Lucia</option><option value="Saint Vincent and the Grenadines"  >Saint Vincent and the Grenadines</option>
			<option value="Samoa">Samoa</option><option value="San Marino"  >San Marino</option><option value="Sao Tome and Principe"  >Sao Tome and Principe</option><option value="Saudi Arabia"  >Saudi Arabia</option><option value="Senegal"  >Senegal</option><option value="Seychelles"  >Seychelles</option><option value="Sierra Leone"  >Sierra Leone</option><option value="Singapore"  >Singapore</option><option value="Slovakia"  >Slovakia</option><option value="Slovenia"  >Slovenia</option><option value="Solomon Islands"  >Solomon Islands</option><option value="Somalia"  >Somalia</option><option value="South Africa"  >South Africa</option><option value="South Georgia and the South Sandwich Isl "  >South Georgia and the South Sandwich Isl </option><option value="Spain"  >Spain</option><option value="Sri Lanka"  >Sri Lanka</option><option value="St Helena"  >St Helena</option><option value="St Pierre and Miquelon"  >St Pierre and Miquelon</option><option value="Sudan"  >Sudan</option><option value="Suriname"  >Suriname</option><option value="Svalbard and Jan Mayen Islands"  >Svalbard and Jan Mayen Islands</option><option value="Swaziland"  >Swaziland</option><option value="Sweden"  >Sweden</option><option value="Switzerland"  >Switzerland</option><option value="Syrian Arab Republic"  >Syrian Arab Republic</option><option value="Taiwan"  >Taiwan</option><option value="Tajikistan"  >Tajikistan</option><option value="Tanzania"  >Tanzania</option><option value="Thailand"  selected  >Thailand</option><option value="Togo"  >Togo</option><option value="Tokelau"  >Tokelau</option><option value="Tonga"  >Tonga</option><option value="Trinidad and Tobago"  >Trinidad and Tobago</option><option value="Tunisia"  >Tunisia</option><option value="Turkey"  >Turkey</option><option value="Turkmenistan"  >Turkmenistan</option><option value="Turks and Caicos Islands"  >Turks and Caicos Islands</option><option value="Tuvalu"  >Tuvalu</option><option value="Uganda"  >Uganda</option><option value="Ukraine"  >Ukraine</option><option value="United Arab Emirates"  >United Arab Emirates</option><option value="United Kingdom"  >United Kingdom</option><option value="United States"  >United States</option><option value="United States Minor Outlying Islands     "  >United States Minor Outlying Islands     </option><option value="Uruguay"  >Uruguay</option><option value="Uzbekistan"  >Uzbekistan</option><option value="Vanuatu"  >Vanuatu</option><option value="Vatican City State (Holy See)"  >Vatican City State (Holy See)</option><option value="Venezuela"  >Venezuela</option><option value="Viet Nam"  >Viet Nam</option><option value="Virgin Islands (British)"  >Virgin Islands (British)</option><option value="Virgin Islands (US)"  >Virgin Islands (US)</option><option value="Wallis and Futuna Islands"  >Wallis and Futuna Islands</option><option value="Western Sahara"  >Western Sahara</option><option value="Yemen"  >Yemen</option><option value="Yugoslavia"  >Yugoslavia</option><option value="Zaire"  >Zaire</option><option value="Zambia"  >Zambia</option><option value="Zimbabwe"  >Zimbabwe</option>		</select>
			</td>
</tr>
<br><br>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">  Tel</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="  Tel" class="form-control"name="tel"value=""> <span class="help-block" >  Tel</span> </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3"> fax</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder=" fax" class="form-control"name="fax"value=""> <span class="help-block" value="">  fax</span> </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder=" Email" class="form-control"name="email"value=""> <span class="help-block" value=""> Email*</span> </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3"  > Food </label>
                                        <div class="col-md-9">
                                            <div class="radio-list">
                                                <label>
                                                    <input type="radio" name="food" value="Normal " > Normal   </label>
                                                <label>
                                                    <input type="radio" name="food" value="Vegetarian "  > Vegetarian  </label>
                                                <label>
                                                    <input type="radio" name="food" value="Islam"  >  Islam </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Receipt Name</label>
                                        <div class="col-md-12">
                                            <textarea type="text" class="form-control"placeholder="Receipt" rows="3" name="receipt"  value="Receipt"></textarea>
                                        </div>
                                    </div>
                                    
                                     Workshop (December 13, 2017. 8.00 am.-12.00 pm.) <br>
(Please choose only one workshop)                                                                US$ 50 : Workshop

                              <div class="col-md-4">
                                       <ul class="icheck-list">
                                           <br>
                                                <li>
                                                    <input tabindex="7" type="radio" class="check" value="WS1 Natural product and human care" name="Workshop">
                                                    <label for="WS1">WS1: Natural product and human care </label>
                                                </li>
                                                </ul>
                                            </div>
                                     <div class="col-md-4">
                                       <ul class="icheck-list">
                                                <li>
                                                    <input tabindex="7" type="radio" class="check" value="WS2: Buddhism and One Health / Buddhism and Animal Health"name="Workshop">
                                                    <label for="WS2">WS2: Buddhism and One Health / Buddhism and Animal Health     </label>
                                                </li>
                                                </ul>
                                            </div>
                                            
                                             <div class="col-md-4">
                                       <ul class="icheck-list">
                                                <li>
                                                    <input tabindex="7" type="radio" class="check" value="WS3: One Health and teaching for Health professional education"name="Workshop">
                                                    <label for="WS3">WS3: One Health and teaching for Health professional education</label>
                                                </li>
                                                </ul>
                                                
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Receipt Address</label>
                                        <div class="col-md-12">
                                            <textarea type="text" class="form-control"placeholder="Receipt Address" rows="5" name="Receipt_Address"  value="Receipt_Address"></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" value="" name="id">
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" value="">Submit</button>


                                </div> </div>
                        </form>  

                    </div>
                </div>  
            </div>

        </div>



</div>


<?php include 'footer.php'; ?>
<script src="./admin/bootstrap/js/smoke.min.js"></script>
<script src="./admin/bootstrap/js/spin.min.js"></script>

<script>
    $(document).ajaxStart(function () {
        $("#spin").show();
    }).ajaxStop(function () {
        $("#spin").hide();
    });

    $(document).ready(function () {
        $("#custName").focus();

        var spinner = new Spinner().spin();
        $("#spin").append(spinner.el);
        $("#spin").hide();

        $('#btn1').on("click", function (e) {
            if ($('#form1').smkValidate()) {
                $.post("insert_registration.php", $("#form1").serialize())
                        .done(function (data) {
                            if (data.status === "danger") {
                                $.smkAlert({text: data.message, type: data.status});
                            } else if (data.status === "success") {
                                $.smkAlert({text: data.message, type: data.status});
                            } else {
                                $.smkAlert({text: data.message, type: data.status});
                            }
                            $('#form1').smkClear();
                            $("#custName").focus();
                        });

                e.preventDefault();
            }
            e.preventDefault();
        });


    });
</script>

</body>
</html>