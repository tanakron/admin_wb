

<?php 
include './db/database.php';
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Appc2018</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
                              
    <!-- color CSS -->
    <link href="css/colors/megna.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-19175540-9', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<div id="wrapper">



<body class="fix-sidebar">
    <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Starter Page</h4>

                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                      
                        <ol class="breadcrumb">
                            <li><a href="ENG_dashboard.php">Dashboard</a></li>
                            <li class="active">Abstract</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
           

                <div class="row">
                    <div class="col-md-12">
                 
                        <div class="white-box">
                            <h3 class="box-title">  Personal Information</h3> <br>
        
                    <label> Author's Title* </label>
             <form action="cus_insert.php" method="post"  enctype="multipart/form-data">
                         <form action="ab_insert.php" method="POST" > 
                        <select id="select_demo_4"  name="title" >
                            <option value=""SELECTED>-- Choose --</option>
                            <option value="prof" >Prof.</option>
                            <option value="assoc">Assoc.Prof.</option>
                            <option value="asst">Asst.Prof.</option>
                            <option value="dr">Dr.</option>
                            <option value="mr" >Mr.</option>
                             <option value="ms">Ms.</option>
                            <option value="mrs">Mrs.</option>
                        </select>
                        <br>
                        <br>
                       <table class="table table-condensed">
                               <tr>
                           <td>   <label> First Name* </label>
                    <input type="text" class="md-input uk-form-width-medium"name="frmcontact_firstname" /></td>
                           <td> <label> Family Name* </label>
                    <input type="text" class="md-input uk-form-width-medium"name="frmcontact_familyname" /></td>
                            <td> <label>Department*</label>
                    <input type="text" name=frmcontact_department class="md-input uk-form-width-medium" /></td>
                             <td> <label>Institution*</label>
                    <input type="text" name=frmcontact_institute class="md-input uk-form-width-medium" /></td><tr>
                              <td><label>Address*</label>
                    <input type="text" name=frmcontact_addr class="md-input uk-form-width-large" /></td>
                        
                              <td>  <label>City / District *</label>
                    <input type="text" name=frmcontact_amphur class="md-input uk-form-width-medium" /></td>
                              <td>  <label> State / Province </label>
                    <input type="text" name=frmcontact_province class="md-input uk-form-width-medium" /></td>
                           <td>  <label> Post Code </label>
                    <input type="text" name=frmcontact_zipcode class="md-input uk-form-width-medium" /> </td>
                   

                       </table>
           
                                        <br> Country <font class=require>*</font>
                                      <select id="select_demo_4" data-md-selectize name="country">
                                    <option value="" selected>---Choose---</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D Ivoire">Cote D Ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="D,P,R, Korea">D,P,R, Korea</option>
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
                                    <option value="France Metropolitan">France Metropolitan</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong SAR PRC">Hong Kong SAR PRC</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea">Korea</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People s Republic">Lao People s Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="NULL">NULL</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Other-Not Shown">Other-Not Shown</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
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
                                    <option value="South Georgia and the South Sandwich Isl ">South Georgia and the South Sandwich Isl </option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="St Helena">St Helena</option>
                                    <option value="St Pierre and Miquelon">St Pierre and Miquelon</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania"> Tanzania </option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo"> Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago"> Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands     ">United States Minor Outlying Islands </option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="Virgin Islands (US)">Virgin Islands (US)</option>
                                    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Yugoslavia">Yugoslavia</option>
                                    <option value="Zaire">Zaire</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                  <table class="table table-condensed">
                      <tr>
                          <td> <label> Tel. *</label>
                                <input type="text" name=frmoffice_tel  /></td>
                          <td>  <label> Mobile*</label>
                                <input type="text" name=frmmobile  /></td>
                             <td><label> Fax</label>
                                 <input type="text" name=frmfax  /> </td><tr>
                                <td>   <label> E-mail*</label>
                                    <input  type="text" name=email  required/></td>
                                   <td> <label> E-mail (optional)</label>
                                    <input type="text" name=frmemail2 /></td>
                                      <td></td>
                             
                      </tr>
                        
                    </table>
             

                         <h2>Abstract Detail</h2>
                                <label> Abstract Category* </label>
                                <select id="select_demo_4"  name="abstractcategory" required>
                                    <option value=""SELECTED>-- Choose --</option>
                                    <option value="Nutrition & Metabolisms">Nutrition & Metabolisms</option>
                                    <option value="Health Management"> Health Management</option>
                                    <option value="Biotechnology & Molecular / Genomic"> Biotechnology & Molecular / Genomic</option>
                                    <option value="Food Safety / Process & Meat Quality">Food Safety / Process & Meat Quality</option>
                                    <option value="Environmental & Feeding Management" >Environmental & Feeding Management</option>
                                    <option value="Genetic">Genetic</option>
                                     <option value="Nutrition & Feed Technology">Nutrition & Feed Technology</option>
                                  <option value="Others"> Others</option>
                                </select>
                                      
                                <table>
                                    <tr>
                                        <td> <label> Abstract Title * Authors*</label>
                                            
                              <input type="text" name="abstracttitle" required />

                                        
                                        <br>  <td> Type of Presentation*
 &nbsp;&nbsp;&nbsp;&nbsp;  <input type=checkbox name="oralpresentation" value="Oral"> Oral 
 &nbsp;&nbsp;&nbsp;&nbsp;  <input type=checkbox name="oralpresentation" value="Poster"> Poster 

                                        </td>
                                        
                                        
                                </tr>
                                  
                                         
               
                                <br>
                               
                                </table>
                                
                               <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <td style=" font-weight:bold; text-align:center;">&nbsp;</td>
                                            <td style="font-weight:bold; text-align:center;">Presenter</td>
                                            <td style="font-weight:bold; text-align:center;">First name Last name</td>
                                            <td style="font-weight:bold; text-align:center;">Institution</td>
                                            <td style="font-weight:bold; text-align:center;">E-mail</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align=center>1. </td>
                                            <td align=center>
                                                <input type=checkbox name=frmab_presenting_1 value="yes1"> </td>
                                            <td align=center>
                                                <input type=text name=frmab_author_1 value="" size=25 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_institution_1 value="" size=40 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_email_1 value="" size=25 maxlength=100> </td>
                                        </tr>
                                        <tr>
                                            <td align=center>2. </td>
                                            <td align=center>
                                                <input type=checkbox name=frmab_presenting_2 value="yes2"> </td>
                                            <td align=center>
                                                <input type=text name=frmab_author_2 value="" size=25 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_institution_2 value="" size=40 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_email_2 value="" size=25 maxlength=100> </td>
                                        </tr>
                                        <tr>
                                            <td align=center>3. </td>
                                            <td align=center>
                                                <input type=checkbox name=frmab_presenting_3 value="yes3"> </td>
                                            <td align=center>
                                                <input type=text name=frmab_author_3 value="" size=25 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_institution_3 value="" size=40 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_email_3 value="" size=25 maxlength=100> </td>
                                        </tr>  
                                
                                            
                             
                                        <tr>
                                            <td align=center>4. </td>
                                            <td align=center>
                                                <input type=checkbox name=frmab_presenting_4 value="yes4"> </td>
                                            <td align=center>
                                                <input type=text name=frmab_author_4 value="" size=25 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_institution_4 value="" size=40 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_email_4 value="" size=25 maxlength=100> </td>
                                        </tr>
                             
                                        <tr>
                                            <td align=center>5. </td>
                                            <td align=center>
                                                <input type=checkbox name=frmab_presenting_5 value="yes5"> </td>
                                            <td align=center>
                                                <input type=text name=frmab_author_5 value="" size=25 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_institution_5 value="" size=40 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_email_5 value="" size=25 maxlength=100> </td>
                                        </tr>
                                        <tr>
                                            <td align=center>6. </td>
                                            <td align=center>
                                                <input type=checkbox name=frmab_presenting_6 value="yes6"> </td>
                                            <td align=center>
                                                <input type=text name=frmab_author_6 value="" size=25 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_institution_6 value="" size=40 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_email_6 value="" size=25 maxlength=100> </td>
                                        </tr>
                                    
                                        <tr>
                                            <td align=center>7. </td>
                                            <td align=center>
                                                <input type=checkbox name=frmab_presenting_7 value="yes7"> </td>
                                            <td align=center>
                                                <input type=text name=frmab_author_7 value="" size=25 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_institution_7 value="" size=40 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_email_7 value="" size=25 maxlength=100> </td>
                                        </tr>
                                        <tr>
                                            <td align=center>8. </td>
                                            <td align=center>
                                                <input type=checkbox name=frmab_presenting_8 value="yes8"> </td>
                                            <td align=center>
                                                <input type=text name=frmab_author_8 value="" size=25 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_institution_8 value="" size=40 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_email_8 value="" size=25 maxlength=100> </td>
                                        </tr>
                                        <tr>
                                            <td align=center>9. </td>
                                            <td align=center>
                                                <input type=checkbox name=frmab_presenting_9 value="yes9"> </td>
                                            <td align=center>
                                                <input type=text name=frmab_author_9 value="" size=25 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_institution_9 value="" size=40 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_email_9 value="" size=25 maxlength=100> </td>
                                        </tr>
                                        <tr>
                                            <td align=center>10. </td>
                                            <td align=center>
                                                <input type=checkbox name=frmab_presenting_10 value="yes10"> </td>
                                            <td align=center>
                                                <input type=text name=frmab_author_10 value="" size=25 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_institution_10 value="" size=40 maxlength=100> </td>
                                            <td align=center>
                                                <input type=text name=frmab_email_10 value="" size=25 maxlength=100> </td>
                                        </tr>
                                    </tbody>
                               </table>
                                
          
                      
                                
                            
                                    <label>Background: *</label>
                                    <textarea name=frmab_background id=frmab_background style="width:96%;height:100px;" onkeypress="do_count();" onchange="do_count();"></textarea>
                                    <label>Objectives: *</label>
                                <textarea name=frmab_objectives id=frmab_background style="width:96%;height:100px;" onkeypress="do_count();" onchange="do_count();"></textarea>
                                    
                        <label>Materials Methods: * </label>
                                <textarea name=frmab_materialsmethods id=frmab_background style="width:96%;height:100px;" onkeypress="do_count();" onchange="do_count();"></textarea>
                                
                                  <label>Results: * </label>
                                <textarea name=frmab_results id=frmab_background style="width:96%;height:100px;" onkeypress="do_count();" onchange="do_count();"></textarea>
                                <label>Conclusions: * </label>
                                <textarea name=frmab_conclusions id=frmab_background style="width:96%;height:100px;" onkeypress="do_count();" onchange="do_count();"></textarea>
                                <h4>   Word count: 0	words (Abstract detail must not over 250 words)</h4>
                                <br>
                                <br>
                                 Abstract File *
                                 <table>
                                 <tr>

            <td>
                <input type="hidden" name="cust_id" value="<?= $count_cust ['cust_id'];?>" > 
          
                  <input type="file" name="image" value="image" > เลือกไฟล์ Abstract file(*.doc, *.docx)
             
            </td>
        </tr>        
         
                              </table>
                                <br>
                                <br> Note: Submit file "The content inside the submitted file must be the same as the one submitted through online submission form.
                                <br>But if the content is not the same, we will be evaluate the abstract that submitted through online submission form"
                                <br> Note: * = required field(s)
                                    <br> 
                                        
                                    <input type="radio" name="frmab_certify" value="yes_certify" />
                                <label for="radio_demo_inline_1" class="inline-label" > I certify that this abstract has neither been published nor presented previously.</label>
                                <br> 
                                    <br> 
                                        <br> 
                                
                                <center>
                                      
                                        <input class="md-btn md-btn-primary " type="submit" value="Save"> </center>
                                     </form>
                            

                    </div>
                </div>
   
                               
                    </div>
                </div>
                </div>
        
          
         
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; APPC2018.COM </footer>
  
<!-- /#wrapper -->
    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/tether.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>

