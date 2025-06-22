<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>@yield('title','Jandel`s Portfolio')</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>
    <body>

        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="#"><img src="img/logo4.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="#about">About</a></li>
								<li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                                <li class="nav-item"><a class="nav-link" href="#blogs">Blog</a></li>
								<li class="nav-item"><a class="nav-link" id="contactBtn" style="cursor: pointer;">Contact</a></li>
							</ul>
						</div>
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->

        @yield('content')

          <!--================Footer Area =================-->
          <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>About Me</h3>
        					</div>
        					<p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | By Jandel Lopez
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="#" method="get" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                                    </div>
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="https://web.facebook.com/demski.chu2xbrothers" target="_blank"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="https://www.linkedin.com/in/jandel-lopez-85a6272ba/" target="_blank"><i class="fa-solid fa-tent-arrow-down-to-line"></i></a></li>
        						<li><a href="https://www.instagram.com/demski.21/" target="_blank"><i class="fa-brands fa-square-instagram"></i></a></li>
        						<li><a href="https://www.youtube.com/@jandellopez2120" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->

         <!--================Contact Modal Area =================-->
        <div id="contactModal" style="position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); display: none; align-items: center; justify-content: center; z-index: 9999;">
            <div style="background-color: white; border-radius: 8px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); width: 100%; max-width: 500px; padding: 24px; position: relative;">
                <button id="closeModal" style="position: absolute; top: 12px; right: 12px; color: #4B5563; font-size: 24px; background: none; border: none; cursor: pointer;">&times;</button>
                <h2 style="font-size: 24px; font-weight: 600; margin-bottom: 16px;">Contact Me</h2>
                <form action="/contact" method="POST">
                    @csrf
                    <div style="margin-bottom: 12px;">
                        <label for="name" style="display: block; font-size: 14px; font-weight: 500; margin-bottom: 4px;">Name</label>
                        <input type="text" name="name" id="name" required style="width: 100%; border: 1px solid #ccc; border-radius: 4px; padding: 8px;">
                    </div>
                    <div style="margin-bottom: 12px;">
                        <label for="email" style="display: block; font-size: 14px; font-weight: 500; margin-bottom: 4px;">Email</label>
                        <input type="email" name="email" id="email" required style="width: 100%; border: 1px solid #ccc; border-radius: 4px; padding: 8px;">
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label for="message" style="display: block; font-size: 14px; font-weight: 500; margin-bottom: 4px;">Message</label>
                        <textarea name="message" id="message" rows="4" required style="width: 100%; border: 1px solid #ccc; border-radius: 4px; padding: 8px;"></textarea>
                    </div>
                    <button type="submit" style="background-color: #3B82F6; color: white; padding: 10px 16px; border: none; border-radius: 4px; cursor: pointer;">Send</button>
                </form>
            </div>
        </div>
         <!--================End Contact Modal Area =================-->

         <script>
            const contactBtn = document.getElementById('contactBtn');
            const contactBtn1 = document.getElementById('contactBtn1');
            const contactModal = document.getElementById('contactModal');
            const closeModal = document.getElementById('closeModal');

            contactBtn.addEventListener('click', () => {
                contactModal.style.display = 'flex';
            });

            contactBtn1.addEventListener('click', () => {
                contactModal.style.display = 'flex';
            });

            closeModal.addEventListener('click', () => {
                contactModal.style.display = 'none';
            });

            contactModal.addEventListener('click', (e) => {
                if (e.target === contactModal) {
                    contactModal.style.display = 'none';
                }
            });


        </script>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <!--gmaps Js-->
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script> --}}
        {{-- <script src="js/gmaps.min.js"></script> --}}
        <script src="js/theme.js"></script>
    </body>
</html>

