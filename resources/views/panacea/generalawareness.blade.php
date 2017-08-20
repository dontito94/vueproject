@extends('layouts.app')

@section('content')
<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row" style="backgrund-color:white;">
            <div class="col-lg-12">
                <h1 class="page-header" style="font-size:40px; line-spacing:20px; color:blue;">General Information Security Awareness</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row" style="backgrund-color:grey;" >
<article class="col-sm-8 col-md-7 col-md-offset-1 post-content">
       <p style="font-size:20px; line-spacing:20px;"> Most of the Information Security breaches begin within the organisation itself. Whether intentionally or accidentally, staff tend to operate against safety norms that eventually negatively impact organisation’s information, ICT Infrastructure and systems assets. Awareness on Information Security Management and best practices is then vital. We provide this kind of training in particular depending on the organisation scan.</p>
          
      <div class="download-section" id="downloads">
  <p class="form-notice">Please fill out the form below to download a complimentary Executive Summary.</p>

      <div class="download-forms" role="tabpanel">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Register</a></li>
            <li role="presentation"><a href="#return" aria-controls="return" role="tab" data-toggle="tab">Already Registered</a></li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="register">
              <form id="signUp" method="post" action="/forms/register.php">
    <p class="small-text">Please provide your details to download this document:</p>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="firstName">First Name</label>
      <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="lastName">Last Name</label>
      <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter Last Name">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group col-md-6">
      <label for="tel">Telephone</label>
      <input type="text" class="form-control" name="tel" id="tel" placeholder="Enter Telephone">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="organisation">Organisation</label>
      <input type="text" class="form-control" name="organisation" id="organisation" placeholder="Enter organisation">
    </div>
    <div class="form-group col-md-6">
      <label for="jobTitle">Job Title</label>
      <input type="text" class="form-control" name="jobTitle" id="jobTitle" placeholder="Enter Job Title">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-12 select-group">
      <label for="organisation">Country</label>
            <select class="field form-control" name="country" id="country">
        <option label="Select Country"></option>
        <option value="UK" selected="selected">United Kingdom</option>
        <option value="AU" >Australia</option>
        <option value="AF" >Afghanistan</option>
        <option value="AL" >Albania</option>
        <option value="DZ" >Algeria</option>
        <option value="AS" >American Samoa</option>
        <option value="AD" >Andorra</option>
        <option value="AO" >Angola</option>
        <option value="AI" >Anguilla</option>
        <option value="AQ" >Antarctica</option>
        <option value="AG" >Antigua &amp; Barbuda</option>
        <option value="AR" >Argentina</option>
        <option value="AM" >Armenia</option>
        <option value="AW" >Aruba</option>
        <option value="AT" >Austria</option>
        <option value="AZ" >Azerbaijan</option>
        <option value="BS" >Bahamas</option>
        <option value="BH" >Bahrain</option>
        <option value="BD" >Bangladesh</option>
        <option value="BB" >Barbados</option>
        <option value="BY" >Belarus</option>
        <option value="BE" >Belgium</option>
        <option value="BZ" >Belize</option>
        <option value="BJ" >Benin</option>
        <option value="BM" >Bermuda</option>
        <option value="BT" >Bhutan</option>
        <option value="BO" >Bolivia</option>
        <option value="BA" >Bosnia/Hercegovina</option>
        <option value="BW" >Botswana</option>
        <option value="BV" >Bouvet Island</option>
        <option value="BR" >Brazil</option>
        <option value="IO" >British Indian Ocean Territory</option>
        <option value="BN" >Brunei Darussalam</option>
        <option value="BG" >Bulgaria</option>
        <option value="BF" >Burkina Faso</option>
        <option value="BI" >Burundi</option>
        <option value="KH" >Cambodia</option>
        <option value="CM" >Cameroon</option>
        <option value="CA" >Canada</option>
        <option value="CV" >Cape Verde</option>
        <option value="KY" >Cayman Is</option>
        <option value="CF" >Central African Republic</option>
        <option value="TD" >Chad</option>
        <option value="CL" >Chile</option>
        <option value="CN" >China, People's Republic of</option>
        <option value="CX" >Christmas Island</option>
        <option value="CC" >Cocos Islands</option>
        <option value="CO" >Colombia</option>
        <option value="KM" >Comoros</option>
        <option value="CG" >Congo</option>
        <option value="CD" >Congo, Democratic Republic</option>
        <option value="CK" >Cook Islands</option>
        <option value="CR" >Costa Rica</option>
        <option value="CI" >Cote d'Ivoire</option>
        <option value="HR" >Croatia</option>
        <option value="CU" >Cuba</option>
        <option value="CY" >Cyprus</option>
        <option value="CZ" >Czech Republic</option>
        <option value="DK" >Denmark</option>
        <option value="DJ" >Djibouti</option>
        <option value="DM" >Dominica</option>
        <option value="DO" >Dominican Republic</option>
        <option value="TP" >East Timor</option>
        <option value="EC" >Ecuador</option>
        <option value="EG" >Egypt</option>
        <option value="SV" >El Salvador</option>
        <option value="GQ" >Equatorial Guinea</option>
        <option value="ER" >Eritrea</option>
        <option value="EE" >Estonia</option>
        <option value="ET" >Ethiopia</option>
        <option value="FK" >Falkland Islands</option>
        <option value="FO" >Faroe Islands</option>
        <option value="FJ" >Fiji</option>
        <option value="FI" >Finland</option>
        <option value="FR" >France</option>
        <option value="FX" >France, Metropolitan</option>
        <option value="GF" >French Guiana</option>
        <option value="PF" >French Polynesia</option>
        <option value="TF" >French South Territories</option>
        <option value="GA" >Gabon</option>
        <option value="GM" >Gambia</option>
        <option value="GE" >Georgia</option>
        <option value="DE" >Germany</option>
        <option value="GH" >Ghana</option>
        <option value="GI" >Gibraltar</option>
        <option value="GR" >Greece</option>
        <option value="GL" >Greenland</option>
        <option value="GD" >Grenada</option>
        <option value="GP" >Guadeloupe</option>
        <option value="GU" >Guam</option>
        <option value="GT" >Guatemala</option>
        <option value="GN" >Guinea</option>
        <option value="GW" >Guinea-Bissau</option>
        <option value="GY" >Guyana</option>
        <option value="HT" >Haiti</option>
        <option value="HM" >Heard Island And Mcdonald Island</option>
        <option value="HN" >Honduras</option>
        <option value="HK" >Hong Kong</option>
        <option value="HU" >Hungary</option>
        <option value="IS" >Iceland</option>
        <option value="IN" >India</option>
        <option value="ID" >Indonesia</option>
        <option value="IR" >Iran</option>
        <option value="IQ" >Iraq</option>
        <option value="IE" >Ireland</option>
        <option value="IL" >Israel</option>
        <option value="IT" >Italy</option>
        <option value="JM" >Jamaica</option>
        <option value="JP" >Japan</option>
        <option value="JT" >Johnston Island</option>
        <option value="JO" >Jordan</option>
        <option value="KZ" >Kazakhstan</option>
        <option value="KE" >Kenya</option>
        <option value="KI" >Kiribati</option>
        <option value="KP" >Korea, Democratic Peoples Republic</option>
        <option value="KR" >Korea, Republic of</option>
        <option value="KW" >Kuwait</option>
        <option value="KG" >Kyrgyzstan</option>
        <option value="LA" >Lao People's Democratic Republic</option>
        <option value="LV" >Latvia</option>
        <option value="LB" >Lebanon</option>
        <option value="LS" >Lesotho</option>
        <option value="LR" >Liberia</option>
        <option value="LY" >Libyan Arab Jamahiriya</option>
        <option value="LI" >Liechtenstein</option>
        <option value="LT" >Lithuania</option>
        <option value="LU" >Luxembourg</option>
        <option value="MO" >Macau</option>
        <option value="MK" >Macedonia</option>
        <option value="MG" >Madagascar</option>
        <option value="MW" >Malawi</option>
        <option value="MY" >Malaysia</option>
        <option value="MV" >Maldives</option>
        <option value="ML" >Mali</option>
        <option value="MT" >Malta</option>
        <option value="MH" >Marshall Islands</option>
        <option value="MQ" >Martinique</option>
        <option value="MR" >Mauritania</option>
        <option value="MU" >Mauritius</option>
        <option value="YT" >Mayotte</option>
        <option value="MX" >Mexico</option>
        <option value="FM" >Micronesia</option>
        <option value="MD" >Moldavia</option>
        <option value="MC" >Monaco</option>
        <option value="MN" >Mongolia</option>
        <option value="MS" >Montserrat</option>
        <option value="MA" >Morocco</option>
        <option value="MZ" >Mozambique</option>
        <option value="MM" >Union Of Myanmar</option>
        <option value="NA" >Namibia</option>
        <option value="NR" >Nauru Island</option>
        <option value="NP" >Nepal</option>
        <option value="NL" >Netherlands</option>
        <option value="NZ" >New Zealand</option>
        <option value="AN" >Netherlands Antilles</option>
        <option value="NC" >New Caledonia</option>
        <option value="NI" >Nicaragua</option>
        <option value="NE" >Niger</option>
        <option value="NG" >Nigeria</option>
        <option value="NU" >Niue</option>
        <option value="NF" >Norfolk Island</option>
        <option value="MP" >Mariana Islands, Northern</option>
        <option value="NO" >Norway</option>
        <option value="OM" >Oman</option>
        <option value="PK" >Pakistan</option>
        <option value="PW" >Palau Islands</option>
        <option value="PS" >Palestine</option>
        <option value="PA" >Panama</option>
        <option value="PG" >Papua New Guinea</option>
        <option value="PY" >Paraguay</option>
        <option value="PE" >Peru</option>
        <option value="PH" >Philippines</option>
        <option value="PN" >Pitcairn</option>
        <option value="PL" >Poland</option>
        <option value="PT" >Portugal</option>
        <option value="PR" >Puerto Rico</option>
        <option value="QA" >Qatar</option>
        <option value="RE" >Reunion Island</option>
        <option value="RO" >Romania</option>
        <option value="RU" >Russian Federation</option>
        <option value="RW" >Rwanda</option>
        <option value="WS" >Samoa</option>
        <option value="SH" >St Helena</option>
        <option value="KN" >St Kitts &amp; Nevis</option>
        <option value="LC" >St Lucia</option>
        <option value="PM" >St Pierre &amp; Miquelon</option>
        <option value="VC" >St Vincent</option>
        <option value="SM" >San Marino</option>
        <option value="ST" >Sao Tome &amp; Principe</option>
        <option value="SA" >Saudi Arabia</option>
        <option value="SN" >Senegal</option>
        <option value="SC" >Seychelles</option>
        <option value="SL" >Sierra Leone</option>
        <option value="SG" >Singapore</option>
        <option value="SK" >Slovakia</option>
        <option value="SI" >Slovenia</option>
        <option value="SB" >Solomon Islands</option>
        <option value="SO" >Somalia</option>
        <option value="ZA" >South Africa</option>
        <option value="GS" >South Georgia and South Sandwich</option>
        <option value="ES" >Spain</option>
        <option value="LK" >Sri Lanka</option>
        <option value="XX" >Stateless Persons</option>
        <option value="SD" >Sudan</option>
        <option value="SR" >Suriname</option>
        <option value="SJ" >Svalbard and Jan Mayen</option>
        <option value="SZ" >Swaziland</option>
        <option value="SE" >Sweden</option>
        <option value="CH" >Switzerland</option>
        <option value="SY" >Syrian Arab Republic</option>
        <option value="TW" >Taiwan, Republic of China</option>
        <option value="TJ" >Tajikistan</option>
        <option value="TZ" >Tanzania</option>
        <option value="TH" >Thailand</option>
        <option value="TL" >Timor Leste</option>
        <option value="TG" >Togo</option>
        <option value="TK" >Tokelau</option>
        <option value="TO" >Tonga</option>
        <option value="TT" >Trinidad &amp; Tobago</option>
        <option value="TN" >Tunisia</option>
        <option value="TR" >Turkey</option>
        <option value="TM" >Turkmenistan</option>
        <option value="TC" >Turks And Caicos Islands</option>
        <option value="TV" >Tuvalu</option>
        <option value="UG" >Uganda</option>
        <option value="UA" >Ukraine</option>
        <option value="AE" >United Arab Emirates</option>
        <option value="UM" >US Minor Outlying Islands</option>
        <option value="US" >USA</option>
        <option value="HV" >Upper Volta</option>
        <option value="UY" >Uruguay</option>
        <option value="UZ" >Uzbekistan</option>
        <option value="VU" >Vanuatu</option>
        <option value="VA" >Vatican City State</option>
        <option value="VE" >Venezuela</option>
        <option value="VN" >Vietnam</option>
        <option value="VG" >Virgin Islands (British)</option>
        <option value="VI" >Virgin Islands (US)</option>
        <option value="WF" >Wallis And Futuna Islands</option>
        <option value="EH" >Western Sahara</option>
        <option value="YE" >Yemen Arab Rep.</option>
        <option value="YD" >Yemen Democratic</option>
        <option value="YU" >Yugoslavia</option>
        <option value="ZR" >Zaire</option>
        <option value="ZM" >Zambia</option>
        <option value="ZW" >Zimbabwe</option>
      </select>    </div>
  </div>
  <div class="form-group">
    <label for="email" class="hidden">Privacy Notice</label>
    <p class="small-text privacy-notice">
    Please check this box to confirm that you have read and agree with our <a href="https://www.securityforum.org/privacy" target="_blank">Privacy Policy</a> and <a href="https://www.securityforum.org/terms-of-use" target="_blank">Terms Of Use</a> <input type="checkbox" id="privacy" name="privacy" value="yes">
  </div>
  <input type='hidden' name='file' value="Application Security: Bringing order to chaos" />
  
  <button type="submit" class="btn btn-solid" id="signUpSubmit">Submit</button>
</form>           </div>
            <div role="tabpanel" class="tab-pane" id="return">
              <form id="returning" method="post" action="/forms/return.php">
  <p class="small-text">Please enter the email address you previously registered with to access the download:</p>
  <div class="form-group">
    <label for="returnEmail">Email address</label>
    <input type="email" class="form-control" id="returnEmail" name="email" placeholder="Enter email">
  </div>
   <input type='hidden' name='file' value="Application Security: Bringing order to chaos" />
  <div class="form-group robot-check">
    <input type="text" class="form-control" id="robotcheckreturn" name="robotcheck">
  </div>
  <button type="submit" class="btn btn-solid" id="returnSubmit">Submit</button>
</form>           </div>
          </div>
      </div>
    </div>
        </article>
            
             <div class="col-md-4">
                <h3>Executive Summary</h3>
                <img src="image/pic.png" class="img-responsive download-cover-img">
                      
                            <div class="files">
      <ul class="download-links">
          <li class="restricted">
        <a href="#downloads"  class="download-link"><i class="fa fa-download" aria-hidden="true">Download NY DFS Executive Summary</i></a>

      </li>

        </ul>
    </div>
    
            </div>

        </div>

@endsection
