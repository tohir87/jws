<!-- feedback form -->
<div class="slide-form-container">
<script type="text/javascript">
$(document).ready(function(){
$('.slide-left-button').click(function(){
$('.slide-form-container').toggleClass('open');
});
});
</script>
<style>
.slide-form-container{position:fixed;right:-501px;transition:all 0.5s ease-in-out;max-width:500px;border:1px solid #ccc;border-radius:25px 0 0 25px;font-family:Arial, Helvetica, sans-serif;color:#666;background:#fff;top:45px;z-index:20;padding-bottom:5px;}
.slide-left-button{position:absolute;left:-30px;background:#C30;color:#fff;border:none;padding:5px 10px;width:30px;word-break:break-all;border-radius:8px 0 0 8px;text-align:center;cursor:pointer;top:100px;z-index:10;font-size:16px;text-transform:uppercase;word-break:break-word;-ms-word-break: break-all;}
.open{right:0;}
.slide-form-container form{padding:10px;font-size:12px;}
.slide-form-container form input[type='text'],.slide-form-container form input[type='email'],.slide-form-container form textarea,.slide-form-container form select{border:1px solid #ccc;width:100%;padding:2px 5px !important;box-sizing:border-box;}
.slide-form-container form .fields{padding-top:0px !important;display:inline-block;width:100%;font-size:12px !important;}
.slide-form-container p{font-size:14px;color:#666;padding:0 10px;margin:0;font-weight:bold;}
.slide-form-container form input.fb-button{
border:1px solid #284F20;-webkit-box-shadow: #B7B8B8 0px 1px 0px inset !important;-moz-box-shadow: #B7B8B8 0px 1px 0px inset !important; box-shadow: #B7B8B8 0px 1px 0px inset !important; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:12px;padding: 10px 30px 10px 30px !important; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);color: #FFFFFF;
 background-color: #4ba614; background-image: -webkit-gradient(linear, left top, left bottom, from(#4ba614), to(#008c00)) !important;
 background-image: -webkit-linear-gradient(top, #4ba614, #008c00) !important;
 background-image: -moz-linear-gradient(top, #4ba614, #008c00) !important;
 background-image: -ms-linear-gradient(top, #4ba614, #008c00) !important;
 background-image: -o-linear-gradient(top, #4ba614, #008c00) !important;
 background-image: linear-gradient(to bottom, #4ba614, #008c00);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#4ba614, endColorstr=#008c00); !important}
.slide-form-container form input.fb-button:hover{border:1px solid #4B546A;
 background-color: #36780f; background-image: -webkit-gradient(linear, left top, left bottom, from(#36780f), to(#005900)) !important;
 background-image: -webkit-linear-gradient(top, #36780f, #005900) !important;
 background-image: -moz-linear-gradient(top, #36780f, #005900) !important;
 background-image: -ms-linear-gradient(top, #36780f, #005900) !important;
 background-image: -o-linear-gradient(top, #36780f, #005900) !important;
 background-image: linear-gradient(to bottom, #36780f, #005900);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#36780f, endColorstr=#005900); !important}
textarea{resize:vertical;}
</style>

<button type="button" class="slide-left-button">Enquiry</button>
<div style="padding:10px;overflow-y:scroll;max-height:500px;">

<div class="body-wrapper" style="width:auto;">
<p>Leave your details below for registration request and enquiry. </p>


	<form action="contact-us.php" method="post" onsubmit="return check_required();">

		<input name="referer" value="" type="hidden">

		<!-- contact left -->
		<div class="contact-left" style="width:auto;padding-bottom:0;">
<table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tbody><tr>
    <td width="160"><span class="fields">You are <span class="required">*</span> </span></td>
    <td><span class="fields">
    <select id="enquiry_type" name="enquiry_type" onchange="show_org1(this.value);" required="">
				<option value="" selected="selected"> Select </option>
				<option value="1">Student</option>
                <option value="3">Agents</option>
                <option value="4">Others</option>
                </select>
                </span>
	<!--<div id="org_div1" style="display:none;">
	</div>-->
    </td>
  </tr><tr id="org_div1" style="display:none;">
  <td><span class="fields">Name of Organisation</span></td>
  <td><span class="fields"><input id="org_name" name="org_name" type="text"></span></td>
  </tr>
  <script>
			function show_org1(category_sales_id){
				// alert(category_sales_id);
				if( category_sales_id=='1' || category_sales_id=='' ){
					$("#org_div1").hide();
				} else {
					$("#org_div1").show();
				}

				values = {"type":"search","category_sales_id":category_sales_id}
					 $.ajax({
						dataType: "json",
						url: "ajax.php",
						type: "post",
						data: values,
						success: function(data){
							// alert(data.institute_present);
							if(data.institute_present=='0') {

								$("#inst_notice").html('<font color="red">No Institute is present!</font>');
							} else {
								$("#inst_notice").html('');
							}
							if(data.content=='not_exist') {
								// $("#remaining_form").hide();
							} else {
								$("#country_new").html(data.content);
								// setTimeout( function(){equal_height('left-panel','right-panel');} , 900);
							}
						},
						error:function(){
							$("#other_inst_li_id").show().html('<input name="other_inst" id="other_inst" value="" type="text" placeholder="Please enter institute Name" required style="width:100%;"/>');
							$("#other_inst").css({'width':'100%'});
						}
					});
			}
</script>

  <tr>
    <td>
	<span class="fields">Your Name <span class="required">*</span> </span></td>
    <td><span class="fields"><input name="name" id="name" required="" type="text"></span></td>
  </tr>
  <tr>
    <td><span class="fields">Contact No.</span></td>
    <td><span class="fields"><input name="contact" type="text"></span></td>
  </tr>
  <tr>
    <td><span class="fields">Mobile</span></td>
    <td><span class="fields"><input id="mobile" name="mobile" type="text"></span></td>
  </tr>
  <tr>
    <td><span class="fields">Email Address <span class="required">*</span> </span></td>
    <td><span class="fields"><input name="emailAddress" id="emailAddress" required="" type="email"></span></td>
  </tr>
  <tr>
    <td><span class="fields">Website</span></td>
    <td><span class="fields"><input id="website" name="website" type="text"></span></td>
  </tr>
  <tr>
    <td><span class="fields">Skype ID</span></td>
    <td><span class="fields"><input id="skypeId" name="skypeId" type="text"></span></td>
  </tr>
  <tr>
    <td><span class="fields">City</span></td>
    <td><span class="fields"><input name="city" type="text"></span></td>
  </tr>
  <tr>
    <td><span class="fields">Country <span class="required">*</span> </span></td>
    <td><span id="country_new" class="fields">
<select id="country" name="country" required="">
					<option value="" selected="selected">Select</option><option value="Afghanistan">Afghanistan</option><option value="Akrotiri">Akrotiri</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Ashmore and Cartier Islands">Ashmore and Cartier Islands</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas, The">Bahamas, The</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Bassas da India">Bassas da India</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Clipperton Island">Clipperton Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Coral Sea Islands">Coral Sea Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d'Ivoire">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Dhekelia">Dhekelia</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="East Timor">East Timor</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Europa Island">Europa Island</option><option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option><option value="French Southern Territories">French Southern Territories</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia, The">Gambia, The</option><option value="Gaza Strip">Gaza Strip</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Glorioso Islands">Glorioso Islands</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Holy See (Vatican City)">Holy See (Vatican City)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Ivory Coast">Ivory Coast</option><option value="Jamaica">Jamaica</option><option value="Jan Mayen">Jan Mayen</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Juan de Nova Island">Juan de Nova Island</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Navassa Island">Navassa Island</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="North Korea">North Korea</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paracel Islands">Paracel Islands</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn Islands">Pitcairn Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Republic of Kosova">Republic of Kosova</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevisv">Saint Kitts and Nevisv</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia and Montenegro">Serbia and Montenegro</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="South Korea">South Korea</option><option value="Spain">Spain</option><option value="Spratly Islands">Spratly Islands</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tromelin Island">Tromelin Island</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States of America">United States of America</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vatican City State">Vatican City State</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands">Virgin Islands</option><option value="Wake Island">Wake Island</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="West Bank">West Bank</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zaire">Zaire</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select></span></td>
  </tr>
  <tr>
    <td><span class="fields">Subject</span></td>
    <td><span class="fields"><input name="subject" type="text"></span></td>
  </tr>
  <tr>
    <td valign="top"><span class="fields">Your Message</span></td>
    <td><span class="fields"><textarea name="message" style="min-height:50px;"></textarea></span></td>
  </tr>

  <tr>
    <td valign="top"><span class="fields">Captcha </span></td>
    <td><span class="fields">
	<input autocomplete="off" name="captcha_code" id="captcha_code" required="" type="text">
	<img src="images/get_captcha.png" alt="" id="captcha_contact" style="display:inline:block;vertical-align:top;"><i class="fa fa-refresh" style="font-size:20px;display:inline:block;vertical-align:top;padding:15px 0;cursor:pointer;color:red;" id="refresh" onclick="change_captcha_contact();"></i>

	</span></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><span class="fields"><input name="save" value="Send Enquiry" class="fb-button" type="submit"></span></td>
    </tr>
        </tbody></table>

		</div>
		<!-- contact left -->
</form>
<script>

	function change_captcha_contact()
	 {
	 	document.getElementById('captcha_contact').src="https://www.uniagents.com/get_captcha.php?rnd=" + Math.random();
	 }

	 function change_captcha()
	 {
	 	document.getElementById('captcha').src="https://www.uniagents.com/get_captcha.php?rnd=" + Math.random();
	 }

	function check_required(){
			var error = 'not';
			var name = $.trim($("#name").val());
			var emailAddress = $("#emailAddress").val();

			if(name==''){
				error = 'yes';
				alert('Please Enter correct name');
			}

			if(emailAddress==''){
				error = 'yes';
				alert('Please Enter correct email');
			}

			if(error=='yes')
			return false;


	}
</script>
<div class="clearfix"></div>
</div>
</div>
</div>
<!-- feedback form -->
