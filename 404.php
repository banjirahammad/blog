
<?php

  require_once('function/frontend.php');
  $page_content->getAllPageHeader();

 ?>

<!-- START SECTION BREADCRUMB -->
<div class="section breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="assets/images/404_bg.jpg">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
            		<h1>Page Not Found</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Error Page</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- START SECTION BREADCRUMB -->

<!-- START 404 SECTION -->
<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                <div class="text-center">
                    <div class="error_txt">Page Not Found</div>
                    <h5 class="sub_error_txt mb-2 mb-sm-4">oops! The page you requested was not found!</h5>
                    <p>The page you are looking for was removed, renamed  or might never existed.</p>
                    <div class="search_form pb-3 pb-sm-4">
                        <form method="post">
                            <input name="text" id="text" type="text" placeholder="Search..." class="form-control">
                            <button type="submit" class="btn icon_search"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                    <a href="index.php" class="btn btn-default">Back To Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END 404 SECTION -->

<!-- START SECTION INSTAGRAM IMAGE -->
<div class="section p-0">
	<div class="container-fluid p-0">
        <div class="row no-gutters">
        	<div class="col-12">
            	<div class="follow_box">
                    <h3><i class="ti-instagram"></i> instagram</h3>
                    <span>@morusblog</span>
                </div>
            	<div class="client_logo carousel_slider owl-carousel owl-theme" data-dots="false" data-margin="0" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "6"}}'>
                	<div class="item">
                    	<div class="instafeed_box">
                        	<a href="#">
                                <img src="assets/images/insta_img1.jpg" alt="insta_img1"/>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instafeed_box">
                        	<a href="#">
                                <img src="assets/images/insta_img2.jpg" alt="insta_img2"/>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instafeed_box">
                        	<a href="#">
                                <img src="assets/images/insta_img3.jpg" alt="insta_img3"/>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instafeed_box">
                        	<a href="#">
                                <img src="assets/images/insta_img4.jpg" alt="insta_img4"/>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instafeed_box">
                        	<a href="#">
                                <img src="assets/images/insta_img5.jpg" alt="insta_img5"/>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instafeed_box">
                        	<a href="#">
                                <img src="assets/images/insta_img6.jpg" alt="insta_img6"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION INSTAGRAM IMAGE -->


<?php
  $page_content->getFooter();
 ?>
