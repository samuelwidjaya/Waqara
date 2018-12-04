<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- <link rel="icon" href="img/fav-icon.png" type="image/x-icon" /> -->
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Waqara - Partner</title>

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
			    color: #AEAEAE;
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

        <!--================Header Area =================-->
        <header class="main_header_area">
            <div class="main_menu_area">
                <div class="container">
                    <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button style="display: none;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="http://www.waqara.com/"><img src="img/logo-hijau.png" alt=""></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.html"></a></li>
                            <li><a href="#feature"></a></li>
                            <li><a href="#about"></a></li>
                            <li><a href="#screenshot"></a></li>
                            <li><a href="#price"></a></li>
                            <li><a href="#blog"></a></li>
                            <li><a href="#contact"></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>
        <!--================End Header Area =================-->
       
        <!--================MacBook Mockup Area =================-->
        <section class="install_app_area">
            <div class="col-md-6">
                <div class="row">
                    <div class="install_left_content">
                        <div class="left_title">
                            <h1 id="h1_partner" style="text-align: center; text-transform: none; font-size: 37px; margin-top: 130px; line-height: 65px; margin-right: 30px;">Bersama-sama membantu jutaan masyarakat Indonesia mewujudkan impian umroh mereka</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="square" class="row">
                    <form action="insertPartner.php" method="post">
                    <p style="font-size: 30px; font-weight: 200;">Pendaftaran Partner</p>
                    <hr id="after_logo_green"><br/><br/>
                    <select name="kategori" class="form_partner" style="padding: 5px 12px;">
                        <option selected="selected" disabled="disabled" value="Pilih Kategori">Pilih Kategori</option>
                        <option value="Travel Partner">Travel Partner</option>
                        <option value="Pembiayaan Partner">Pembiayaan Partner</option>
                        <option value="Insurance Partner">Insurance Partner</option>
                    </select>
                    <input class="form_partner" type="text" name="nama_perusahaan" placeholder="Nama Perusahaan">
                    <input class="form_partner" type="text" name="no_izin_usaha" placeholder="No Izin Usaha">
                    <input class="form_partner" type="text" name="deskripsi" placeholder="Deskripsi">
                    <input class="form_partner" type="text" name="usaha_berjalan" placeholder="Usaha sudah berjalan selama">
                    <input class="form_partner" type="text" name="jumlah_peserta" placeholder="Berapa jumlah peserta yang sudah diterbangkan">
                    <input class="form_partner" type="text" name="nama_lengkap" placeholder="Nama Lengkap">
                    <input class="form_partner" type="text" name="jabatan" placeholder="Jabatan">
                    <input class="form_partner" type="text" name="email" placeholder="Email">
                    <input class="form_partner" type="text" name="no_telp" placeholder="No Telp">
                    <br/>
                    <?php
                        if(isset($_GET["err"]) && $_GET["err"] == 1) {
                            echo '<p style="color: #5D5D5D;">Data Anda berhasil disimpan. Tim Kami akan segera menghubungi Anda.</p>';
                        }
                    ?>
                    <button type="submit" style="height: 41px;
    padding: 0px;
    margin-right: 50px;
    margin-top: 10px;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline: none !important;
    border-radius: 0px;
    border: none;
    background: #23BB78;
    position: relative;
    width: 118px;
    text-align: center;
    border-radius: 31px;
    z-index: 3;
    color: white;
    float: right;
    font-family: 'Poppins', sans-serif;
    letter-spacing: .48px;
    font-size: 14px;
    font-weight: 500;" class="btn btn-default" type="submit">Kirim</button>
                    </form>
                </div>
                <div style="display: none;" class="row" id="div_partner">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
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