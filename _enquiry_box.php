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


	<?php include '_contact_form.php'; ?>
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
