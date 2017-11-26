<footer>
    <!-- footer -->
    <div class="footer">
        <div class="wrapper">
            <ul>
                <li>
                    <span class="heading">Study Abroad</span>
                    <a href="http://www.immi.gov.au/students/" class="ripple" data-color="#ddd" target="_blank" >Australia</a>
                    <a href="http://www.ice.gov/sevis/index.htm" class="ripple" data-color="#ddd" target="_blank" >USA</a>
                    <a href="http://www.ukvisas.gov.uk/en/" class="ripple" data-color="#ddd" target="_blank" >United Kingdom</a>
                    <a href="http://www.inis.gov.ie/en/INIS/Pages/Study" class="ripple" data-color="#ddd" target="_blank" >Ireland</a>
                    <a href="#" class="ripple" data-color="#ddd" target="_blank" >Sweden</a>
                    <a href="#" class="ripple" data-color="#ddd" target="_blank" >Norway</a>
                </li>
                
                <li>
                    <span class="heading">Services </span>

                    <a href="#" class="ripple" data-color="#ddd" target="_blank" >UnderGraduate Studies</a>
                    <a href="#" class="ripple" data-color="#ddd" target="_blank" >Post Graduate Studies</a>
                    <a href="#" class="ripple" data-color="#ddd" target="_blank" >Nursing Skilled Workers Programme</a>

                </li>
                <li>
                    <span class="heading">Higher Education Institutions</span>
                    
                    <a href="#" class="ripple" data-color="#ddd" target="_blank" >Sweden</a>
                    <a href="#" class="ripple" data-color="#ddd" target="_blank" >Ireland</a>
                    <a href="#" class="ripple" data-color="#ddd" target="_blank" >Norway</a>
                    <a href="#" class="ripple" data-color="#ddd" target="_blank" >United Kingdom</a>
</li>
                <li><span class="heading">Contact Us</span>


                    <div class="">
                        
                        <span style="color: #fff">For general enquiries and information please write to us:</span>
                        <p><a href="mailto:jwsconsult@outlook.com">jwsconsult@outlook.com</a></p>
                        <span style="color: #fff">Sweden : +46-70-279-3273<br>
                        Ireland : +353-83-452-2705<br>
                        Nigeria : +234-</span>
                    </div>
                </li>


                <div class="clearfix"></div>
            </ul>
            <div></div>
        </div>
    </div>
    <!-- copyright -->
    <div class="top-header">
        <div class="wrapper">
            <!-- social -->
            <div class="social">
                <a href="https://www.facebook.com/jws" target="_blank" title="Join JWS Consult on Facebook " ><i class="fa fa-facebook"></i></a> 
                <a title="Join JWS Consult > on Twitter " href="https://twitter.com/jws" target="_blank" ><i class="fa fa-twitter"></i></a> 
                <a title="Join JWS Consult > on Linkdin" href="#" target="_blank" ><i class="fa fa-linkedin"></i></a></div>
                
            <!-- social -->
            <!-- top-right-menu -->
            <div class="top-right">
                <ul class="clearfix">
                    <li><a title="About JWS Consult &gt;" href="about-us.php">About</a></li>
                    <li><a title="Contact JWS Consult &gt;" href="contact-us.php">Contact</a></li>
                    <li><a title="Contact JWS Consult &gt;" href="support.php">Help Desk</a></li>

                    <li><a href="search-institutions.php">Find Institutions</a></li>
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="terms-and-condition.php">Terms and Condition</a></li>
                </ul>
            </div>
            <!-- top-right-menu -->
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- copyright -->

    <!-- footer -->
</footer>



<script src="js/jws.js"></script>

<!-- benefits hover -->
<script>
    $(document).ready(function () {

// instiution
        $('#ins').hover(function () {
            $('#instiution').fadeIn(500);
            $('#instiution a').css({'display': 'block'});
//alert('hover');
        },
                function () {
                    $('#instiution').fadeOut();
//$('.ins-hover a').css({'display':'none'});
//alert('mouseout');

                }
        );

// consultants
        $('#con').hover(function () {
            $('#consultants').fadeIn(500);
            $('#consultants a').css({'display': 'block'});
        },
                function () {
                    $('#consultants').fadeOut();

                }
        );

// consultants
        $('#stu').hover(function () {
            $('#students').fadeIn(500);
            $('#students a').css({'display': 'block'});
        },
                function () {
                    $('#students').fadeOut();

                }
        );

// featured consultants listing
//$('#ubs-hover').hide();
        $('#ubs').hover(function () {
//$('#ubs-hover').fadeIn(500);
            $('#ubs-hover').animate({bottom: "0", ' display': 'block !important'}, 400);
//$('#students a').css({'display':'block'});
        },
                function () {
                    $('#ubs-hover').animate({bottom: "-550px"});
//$('#ubs-hover').fadeOut(500);
                }
        );
//skillbar
        jQuery('.skillbar').each(function () {
            jQuery(this).find('.skillbar-bar').animate({
                width: jQuery(this).attr('data-percent')
            }, 6000);
        });

    });
</script>
<!-- benefits hover -->
<style>
    .mobile-fixed{position:fixed;width:100%;box-sizing:border-box;z-index:30;}
</style>
<script>
    function mobile() {
        var mob = $('.slicknav_menu');
        if (screen.width < 768) {
            //header.show();
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    mob.addClass("mobile-fixed");
                } else {
                    mob.removeClass("mobile-fixed");
                }
            });


        }

    }

    $(document).ready(function () {
        mobile();
    });
</script>

</body>
</html>