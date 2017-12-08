<form action="mailto:otcleantech@gmail.com" method="post" onsubmit="return check_required();">

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
                    </td>
                </tr><tr id="org_div1" style="display:none;">
                    <td><span class="fields">Name of Organisation</span></td>
                    <td><span class="fields"><input id="org_name" name="org_name" type="text"></span></td>
                </tr>

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
                <td>
                    <span id="country_new" class="fields">
                        <select id="country" name="country" required="">
                            <option value="Nigeria">Nigeria</option>
                        </select>
                    </span>
                </td>
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