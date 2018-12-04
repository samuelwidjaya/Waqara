<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- <link rel="icon" href="img/fav-icon.png" type="image/x-icon" /> -->
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Waqara - Your Best Umroh Solution</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/icofont.css" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <style type="text/css">
        	::-webkit-input-placeholder { /* WebKit, Blink, Edge */
			    color: white !important;
			}
        </style>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="120">
       
       
       <div id="preloader">
            <div id="preloader_spinner">
				<div class="pre_inner">
					<div class="dot dot-1"></div>
					<div class="dot dot-2"></div>
					<div class="dot dot-3"></div>
				</div>
            </div>
        </div>
       
        <!--================MacBook Mockup Area =================-->
        <section class="install_app_area">
            <div class="col-md-6">
                <div class="row">
                    <div class="install_left_content">
                        <div class="left_title">
                            <img id="logo_white" src="img/logo-waqara-white.svg">
                            <p style="padding-bottom: 0; color: white;">Solusi perencanaan keuangan dan pembiayaan untuk perjalanan umroh</p>
                            <hr id="after_logo_white">
                            <br>
                        </div>
                        <br>
                        <div class="install_mockup_img_mobile">
	                        <img style="width: 460px;" src="img/Waqara-Umroh Apps.png">
	                    </div>
                        <div class="left_title">
                            <h2>WE ARE</h2>
                            <h1>COMING SOON</h1>
                        </div>
                        <div style="margin-top: -20px;" class="install_content">
                            <!-- <h5>Create Your Apps Galary</h5> -->
                            <p>Untuk individu yang ingin bepergian Umroh setidaknya sekali dalam seumur hidup mereka, Waqara adalah aplikasi paling aman dan bermanfaat untuk memotivasi tabungan umroh dan akhirnya berangkat tanpa rasa takut ditipu atau ketidakberangkatan.</p>
                            <!--<a class="gradient_bg_btn" href="#"><i class="fa fa-android" aria-hidden="true"></i>Android </a>
                            <a class="gradient_bor_btn" href="#"><i class="fa fa-apple" aria-hidden="true"></i>App Store</a> -->
                            
                            <hr id="after_logo_white">
                            <br><br>
                            <p>Kami saat ini dalam Private Beta.</p>
                            <p style="font-size: 14px; font-weight: 500; padding-bottom: 15px;">Daftar untuk menerima link dan bergabung dalam private beta kami.</p>
                           
                            <form action="insertEmail.php" method="post">
                            <div class="input-group" style="max-width: 525px;
														    margin: auto;
														    margin-left: 0;
														    display: block;
														    position: relative;
														    width: 100%;
														    height: 62px;">
	                            <input placeholder="Alamat Email Anda" required="required" name="email" style="height: 50px;
    color: white;
    padding: 0px 120px 0px 25px;
    border-radius: 31px;
    border: 1px solid #e0e2e6;
    border-right: 0px;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: none;
    background: transparent;
    width: 75%;
    display: block;" type="email" class="form-control" >
	                            <span style="display: block;
    white-space: normal;
    position: absolute;
    right: 70px;
    width: 172px;
    border-radius: 31px;
    top: 0px;
    -webkit-box-shadow: 0px 4px 12.35px 0.65px rgba(0, 0, 0, 0.12);
    box-shadow: 0px 4px 12.35px 0.65px rgba(0, 0, 0, 0.12);" class="input-group-btn">
	                                <button style="height: 50px;
    padding: 0px;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline: none !important;
    border-radius: 0px;
    border: none;
    background: white;
    position: relative;
    width: 160px;
    text-align: center;
    border-radius: 31px;
    z-index: 3;
    color: #058255;
    font-family: 'Poppins', sans-serif;
    letter-spacing: .48px;
    font-size: 14px;
    font-weight: 500;" class="btn btn-default" type="submit">Request Invite</button>
	                            </span>
                        	</div>
                            <?php

                                if(isset($_GET["err"]) && $_GET["err"] == 1) {
                                    echo '<span style="color: white;">Data Email Anda sudah berhasil disimpan.</span>';
                                }
                            ?>
                            </form>
                            <p style="text-align: left;">Untuk informasi kemitraan Anda dapat menghubungi : <b style="font-size: 14px">partner@waqara.com</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            	<div class="row">
            		<a href="http://waqara.com/partner.php"><span style="margin-bottom: 10px; float: right; color: white; margin-right: 25%;">DAFTAR SEBAGAI PARTNER KAMI</span></a>
            		<br>
            		<img style="float: right; margin-right: 25%; height: 36px;" src="img/Waqara-Partners.png">
            	</div>
                <div class="row">
                	<div id="div_socmed_desktop" style="float: right; margin-right: 10%; margin-top: 10%;" id="social_media_icon">
                    	<a target="_blank" href="https://www.facebook.com/waqaraID/"><img class="social_media_per_icon" src="img/icon-facebook.svg"></a>
                    	<br>
                    	<a target="_blank" href="https://wa.me/6282298883839"><img class="social_media_per_icon" src="img/icon-whatsapp.svg"></a>
                    	<br>
                    	<a target="_blank" href="https://www.instagram.com/waqaraofficial/"><img class="social_media_per_icon" src="img/icon-instagram.svg"></a>
                    	<br>
                    	<img class="social_media_per_icon" src="img/icon-youtube.svg">
                    	<br>
                    	<a target="_blank" href="mailto: hi@waqara.com"><img class="social_media_per_icon" src="img/icon-email.svg"></a>
                    </div>
                    <div class="install_mockup_img">
                        <img src="img/Waqara-Umroh Apps.png">
                    </div>
                    <div id="div_socmed_mobile">
                    	<a target="_blank" href="https://www.facebook.com/waqaraID/"><img class="social_media_per_icon" src="img/icon-facebook.svg"></a>
                    	<a target="_blank" href="https://wa.me/6282298883839"><img class="social_media_per_icon" src="img/icon-whatsapp.svg"></a>
                    	<a target="_blank" href="https://www.instagram.com/waqaraofficial/"><img class="social_media_per_icon" src="img/icon-instagram.svg"></a>
                    	<img class="social_media_per_icon" src="img/icon-youtube.svg">
                    	<a target="_blank" href="mailto: hi@waqara.com"><img class="social_media_per_icon" src="img/icon-email.svg"></a>
                    	<br/><br/><br/>
                    </div>
                </div>
            </div>
        </section>
        <!--================End MacBook Mockup Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area" id="contact">
            <div class="footer_copy_right">
                <div class="container">
                    <div style="text-align: center;">
                        <p style="font-size: 10px; color: #8E8E8E; font-weight: 600;" class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 <span style="float: left; text-align: center;">PT Waqara Karya Indonesia. Mayapada Tower 2 level 19, Jl. Jend. Sudirman No.Kav.28, RT.4/RW.2, Kuningan, Karet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta.</span> <span style="float: right;">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All rights reserved.</span>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- Extra Plugin -->
        <script src="vendors/parallax/jquery.parallax-scroll.js"></script>
        <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/counterup/waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/flexslider/flex-slider.js"></script>
        <script src="vendors/flexslider/mixitup.js"></script>
        <script src="vendors/swiper/js/swiper.min.js"></script>
        <script src="vendors/flipster-slider/jquery.flipster.min.js"></script>
        <script src="vendors/nice-selector/jquery.nice-select.min.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>