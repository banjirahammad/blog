<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Templatemanja" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Morus is a very clean and modern Magazine / Blog Html Template. It's perfect for fast blogging, livestreams and classic blogs">
<meta name="keywords" content="	blog, clean, newspaper, personal blog, magazine, sport, travel, minimal, personal, elegant, lifestyle, post, blogger, blog template.">

<!-- SITE TITLE -->
<title>Morus - Personal Blog & Magazine HTML Template</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="assets/css/animate.css">
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Prata&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="assets/css/ionicons.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/linearicons.css">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="assets/css/all.min.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<!-- Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

<!-- LOADER -->
<div id="preloader">
    <div class="sk-folding-cube">
		<div class="sk-folding-cube-box">
			<div class="sk-cube1 sk-cube"></div>
			<div class="sk-cube2 sk-cube"></div>
			<div class="sk-cube4 sk-cube"></div>
			<div class="sk-cube3 sk-cube"></div>
		</div>
	</div>
</div>
<!-- END LOADER -->

<!-- START POPUP -->
<div class="modal fade lr_popup" id="Login" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered" role="document">
    	<div class="modal-content border-0">
    		<div class="modal-body">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="row no-gutters">
                	<div class="col-12">
                    	<div class="padding_eight_all">
                            <div class="heading_s1">
                                <h4>Login</h4>
                            </div>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="email" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                            <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                        </div>
                                    </div>
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-block" name="login">Log in</button>
                                </div>
                            </form>
                            <div class="different_login">
                                <span> or</span>
                            </div>
                            <ul class="btn-login list_none text-center">
                                <li><a href="#" class="btn btn-facebook rounded-0"><i class="ion-social-facebook"></i>Facebook</a></li>
                                <li><a href="#" class="btn btn-google rounded-0"><i class="ion-social-googleplus"></i>Google</a></li>
                            </ul>
                            <div class="form-note text-center">Don't Have an Account? <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#SignUp">Sign up now</a></div>
                        </div>
                	</div>
                </div>
        	</div>
        </div>
    </div>
</div>

<div class="modal fade lr_popup" id="SignUp" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered" role="document">
    	<div class="modal-content border-0">
    		<div class="modal-body">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="row no-gutters">
                	<div class="col-12">
                    	<div class="padding_eight_all">
                            <div class="heading_s1">
                                <h4>Sign Up</h4>
                            </div>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="name" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="email" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="" type="password" name="password" placeholder="Confirm Password">
                                </div>
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                            <label class="form-check-label" for="exampleCheckbox3"><span>I agree to terms &amp; Policy.</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-block" name="register">Register</button>
                                </div>
                            </form>
                            <div class="different_login">
                                <span> or</span>
                            </div>
                            <ul class="btn-login list_none text-center">
                                <li><a href="#" class="btn btn-facebook rounded-0"><i class="ion-social-facebook"></i>Facebook</a></li>
                                <li><a href="#" class="btn btn-google rounded-0"><i class="ion-social-googleplus"></i>Google</a></li>
                            </ul>
                            <div class="form-note text-center">Already have an account? <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#Login">Login Here!</a></div>
                        </div>
                	</div>
                </div>
        	</div>
        </div>
    </div>
</div>
<!-- END POPUP -->

<!-- START HEADER -->
<header class="header_wrap dark_skin fixed-top">
	<div class="top-header bg_dark light_skin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <ul class="header_list text-center text-md-left">
                    	<li><i class="far fa-clock"></i> <span id="current_time"></span></li>
                        <li><a href="#" data-toggle="modal" data-target="#SignUp">Sign Up</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#Login">Login</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="social_icons text-center social_white text-md-right">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	<div class="container">
    	<nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php">
                <img class="logo_light" src="assets/images/logo_white.png" alt="logo" />
                <img class="logo_dark" src="assets/images/logo_dark.png" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li><a class="nav-link nav_item active" href="index.php">Home</a></li>
                    <!-- <li class="dropdown">
                        <a class="nav-link" href="index.php">Home</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="index.html">Homepage 1</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="index-2.html">Homepage 2</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="index-3.html">Homepage 3</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="index-4.html">Homepage 4</a></li>
                            </ul>
                        </div>
                    </li> -->
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Pages</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="about.php">About Us</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="author-post.php">Author Post</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="404.php">404 Page</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link active" data-toggle="dropdown" href="#">Features</a>
                        <div class="dropdown-menu dropdown-reverse">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item active" href="blog-list.php">Blog List</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="blog-grid.php">Blog Grid</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-mega-menu">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">World</a>
                        <div class="dropdown-menu">
                            <ul class="post_nav_slider carousel_slider owl-carousel owl-theme" data-dots="false" data-margin="20" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "1"}, "480":{"items": "2"}, "991":{"items": "3"}, "1199":{"items": "4"}}'>
                                <li>
                                    <div class="blog_post">
                                        <div class="blog_img">
                                            <a href="#">
                                                <img src="assets/images/nav_blog_img1.jpg" alt="nav_blog_img1">
                                            </a>
                                        </div>
                                        <div class="blog_content">
                                            <div class="blog_text">
                                                <div class="blog_tags">
                                                    <a class="blog_tags_cat bg_danger" href="#">Lifestyle</a>
                                                </div>
                                                <h6 class="blog_heading"><a href="#">This Thing Is Strong And Make Your Job Good</a></h6>
                                                <ul class="blog_meta">
                                                    <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                                    <li><a href="#"><i class="ti-comments"></i> <span>2</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog_post">
                                        <div class="blog_img">
                                            <a href="#">
                                                <img src="assets/images/nav_blog_img2.jpg" alt="nav_blog_img2">
                                                <div class="post_video_icon"><i class="fas fa-play"></i></div>
                                            </a>
                                        </div>
                                        <div class="blog_content">
                                            <div class="blog_text">
                                                <div class="blog_tags">
                                                    <a class="blog_tags_cat bg_warning" href="#">Travel</a>
                                                </div>
                                                <h6 class="blog_heading"><a href="#">Nice Photo Shooting With Hand Classic Style</a></h6>
                                                <ul class="blog_meta">
                                                    <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                                    <li><a href="#"><i class="ti-comments"></i> <span>2</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog_post">
                                        <div class="blog_img">
                                            <a href="#">
                                                <img src="assets/images/nav_blog_img3.jpg" alt="nav_blog_img3">
                                            </a>
                                        </div>
                                        <div class="blog_content">
                                            <div class="blog_text">
                                                <div class="blog_tags">
                                                    <a class="blog_tags_cat bg_blue" href="#">fashion</a>
                                                </div>
                                                <h6 class="blog_heading"><a href="#">This Guitar Sound Is So Good And I Need It More</a></h6>
                                                <ul class="blog_meta">
                                                    <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                                    <li><a href="#"><i class="ti-comments"></i> <span>2</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog_post">
                                        <div class="blog_img">
                                            <a href="#">
                                                <img src="assets/images/nav_blog_img4.jpg" alt="nav_blog_img4">
                                                <div class="post_video_icon"><i class="fas fa-play"></i></div>
                                            </a>
                                        </div>
                                        <div class="blog_content">
                                            <div class="blog_text">
                                                <div class="blog_tags">
                                                    <a class="blog_tags_cat bg_purple" href="#">Photography</a>
                                                </div>
                                                <h6 class="blog_heading"><a href="#">Otter Surfboards in Pacific Ocean with friends</a></h6>
                                                <ul class="blog_meta">
                                                    <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                                    <li><a href="#"><i class="ti-comments"></i> <span>2</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog_post">
                                        <div class="blog_img">
                                            <a href="#">
                                                <img src="assets/images/nav_blog_img5.jpg" alt="nav_blog_img5">
                                            </a>
                                        </div>
                                        <div class="blog_content">
                                            <div class="blog_text">
                                                <div class="blog_tags">
                                                    <a class="blog_tags_cat bg_success" href="#">Music</a>
                                                </div>
                                                <h6 class="blog_heading"><a href="#">Having Fun With DJ And The Best Music Drop</a></h6>
                                                <ul class="blog_meta">
                                                    <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                                    <li><a href="#"><i class="ti-comments"></i> <span>2</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="nav-link nav_item" href="travel.php">Travel</a></li>
                    <li><a class="nav-link nav_item" href="contact.php">Contact</a></li>
                </ul>
            </div>
            <ul class="navbar-nav attr-nav align-items-center">
                <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                    <div class="search_wrap">
                        <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                        <form>
                            <input type="text" placeholder="Search" class="form-control" id="search_input">
                            <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                </li>
            </ul>
		</nav>
	</div>
</header>
<!-- START HEADER -->
