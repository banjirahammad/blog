<?php

  require_once('function/frontend.php');
  $page_content->getAllPageHeader();

 ?>

<!-- START SECTION BREADCRUMB -->
<div class="section breadcrumb_section bg_gray">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
            		<h1>Blog Single post</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Blog Single Post</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- START SECTION BREADCRUMB -->

<!-- START BLOG -->
<div class="section">
	<div class="container">
    	<div class="row">
    		<div class="col-lg-8">
            	<div class="single_post">
                    <div class="blog_img">
                        <img src="assets/images/blog_img1.jpg" alt="blog_img1">
                        <div class="blog_tags">
                            <a class="blog_tags_cat bg_blue" href="#">fashion</a>
                        </div>
                    </div>
                    <div class="blog_content">
                        <div class="blog_text">
                            <h2 class="blog_title">Sanford Stadium Project Consists</h2>
                            <ul class="blog_meta">
                                <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ti-comments"></i> 2 Comment</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Curabitur malesuada malesuada metus ut placerat. Cras a porttitor quam, eget ornare sapien. In sit amet vulputate metus. Nullam eget rutrum nisl. Sed tincidunt lorem sed maximus interdum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean scelerisque efficitur mauris nec tincidunt. cursus leo mieu ultricies magna faucibus id.</p>
                            <blockquote class="blockquote_style1">
                            	<p>Integer is metus site turpis facilisis customers. elementum an mauris in venenatis consectetur east. Praesent condimentum bibendum Morbi sit amet commodo pellentesque at fringilla tincidunt risus.</p>
                            </blockquote>
                            <div class="row">
                            	<div class="col-sm-6">
                                	<div class="single_img">
                                		<img class="w-100 mb-4" src="assets/images/blog_single_img1.jpg" alt="blog_single_img1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                	<div class="single_img">
                                		<img class="w-100 mb-4" src="assets/images/blog_single_img2.jpg" alt="blog_single_img2">
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec consequat laoreet sagittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus. Suspendisse vel lacus est, sit amet tincidunt erat. Etiam purus sem, euismod eu vulputate eget, porta quis sapien. Donec tellus est, rhoncus vel scelerisque id, iaculis eu nibh.</p>
                            <p>Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet eget. Fusce vitae dui sit amet lacus rutrum convallis. Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit.</p>
                        	<div class="blog_post_footer">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-md-8 mb-3 mb-md-0">
                                        <div class="artical_tags">
                                            <a href="#">General</a>
                                            <a href="#">Design</a>
                                            <a href="#">Branding</a>
                                            <a href="#">Modern</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="social_icons rounded_social text-md-right">
                                            <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                            <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                            <li><a href="#" class="sc_google"><i class="ion-social-googleplus"></i></a></li>
                                            <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post_navigation">
                	<div class="divider"></div>
                    <div class="row align-items-center justify-content-between py-4">
                        <div class="col-5">
                            <a href="#">
                                <div class="post_nav post_nav_prev">
                                    <i class="ti-arrow-left"></i>
                                    <span>Previous Post</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="#" class="post_nav_home">
                                <i class="ti-layout-grid2"></i>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="#">
                                <div class="post_nav post_nav_next">
                                    <i class="ti-arrow-right"></i>
                                    <span>Next Post</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>
				<div class="card post_author">
                	<div class="card-body">
                    	<div class="author_img">
                        	<img class="rounded-circle" src="assets/images/user1.jpg" alt="user1">
                        </div>
                        <div class="author_info">
                        	<h6 class="author_name"><a href="#" class="mb-1 d-inline-block">Cherieh Smith</a></h6>
                        	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                        </div>
                    </div>
                </div>
                <div class="related_post">
                	<div class="content_title">
                    	<h5>Related posts</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog_post">
                                <div class="blog_img">
                                    <a href="#">
                                        <img src="assets/images/blog_small_img3.jpg" alt="blog_img">
                                    </a>
                                </div>
                                <div class="blog_content">
                                    <div class="blog_text">
                                        <div class="blog_tags">
                                            <a class="blog_tags_cat bg_warning" href="#">Travel</a>
                                        </div>
                                        <h5 class="blog_heading"><a href="#">Sanford Stadium Project Consists</a></h5>
                                        <ul class="blog_meta">
                                            <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                            <li><a href="#"><i class="ti-comments"></i> <span>2 Comments</span></a></li>
                                        </ul>
                                        <p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this generator on the Internet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    	<div class="col-md-6">
                            <div class="blog_post">
                                <div class="blog_img">
                                    <a href="#">
                                        <img src="assets/images/blog_small_img17.jpg" alt="blog_img">
                                        <div class="post_video_icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="blog_content">
                                    <div class="blog_text">
                                        <div class="blog_tags">
                                            <a class="blog_tags_cat bg_blue" href="#">fashion</a>
                                        </div>
                                        <h5 class="blog_heading"><a href="#">Sanford Stadium Project Consists</a></h5>
                                        <ul class="blog_meta">
                                            <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                            <li><a href="#"><i class="ti-comments"></i> <span>2 Comments</span></a></li>
                                        </ul>
                                        <p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this generator on the Internet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                	</div>
                </div>
                <div class="comment-area">
                    <div class="content_title">
                        <h5>(03) Comments</h5>
                    </div>
                    <ul class="list_none comment_list">
                        <li class="comment_info">
                            <div class="d-flex">
                                <div class="comment_user">
                                    <img class="rounded-circle" src="assets/images/user2.jpg" alt="user2">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex">
                                        <div class="meta_data">
                                            <h6><a href="#">Sarah Taylor</a></h6>
                                            <div class="comment-time">MARCH 5, 2018, 6:05 PM</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                        </div>
                                    </div>
                                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                </div>
                            </div>
                            <ul class="children">
                            	<li class="comment_info">
                                    <div class="d-flex">
                                        <div class="comment_user">
                                            <img class="rounded-circle" src="assets/images/user3.jpg" alt="user3">
                                        </div>
                                        <div class="comment_content">
                                            <div class="d-flex align-items-md-center">
                                                <div class="meta_data">
                                                    <h6><a href="#">John Becker</a></h6>
                                                    <div class="comment-time">april 8, 2018, 5:15 PM</div>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                                </div>
                                            </div>
                                            <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="comment_info">
                            <div class="d-flex">
                                <div class="comment_user">
                                    <img class="rounded-circle" src="assets/images/user4.jpg" alt="user4">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex">
                                        <div class="meta_data">
                                            <h6><a href="#">Daisy Becker</a></h6>
                                            <div class="comment-time">april 15, 2018, 10:30 PM</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                        </div>
                                    </div>
                                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="content_title">
                        <h5>Write a comment</h5>
                    </div>
                    <form class="field_form" name="enq" method="post">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <input name="name" class="form-control" placeholder="Your Name" required="required" type="text">
                            </div>
                            <div class="form-group col-md-4">
                                <input name="email" class="form-control" placeholder="Your Email" required="required" type="email">
                            </div>
                            <div class="form-group col-md-4">
                                <input name="website" class="form-control" placeholder="Your Website" required="required" type="text">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea rows="3" name="message" class="form-control" placeholder="Your Comment" required="required"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                            	<div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="Checkbox1" value="">
                                        <label class="form-check-label" for="Checkbox1"><span>Save my name, email, and website in this browser for the next time I comment.</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <button value="Submit" name="submit" class="btn btn-default" title="Submit Your Message!" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
            	<div class="sidebar mt-4 pt-2 mt-lg-0 pt-lg-0 fixed_scroll_item" data-margintop="100">
                	<div class="widget">
                    	<h5 class="widget_title">About Me</h5>
                        <div class="about_widget">
                            <div class="about_img">
                                <img src="assets/images/author_img.jpg" alt="author_img">
                            </div>
                            <h5>Alia Brock</h5>
                            <p>Lorem ipsum dolor sit amet elit adipiscing elit. Praesent id dolor dui dapibus gravida elit. Donec sit amet laoreet sagittis. </p>
                            <img src="assets/images/signature.png" alt="signature">
                        </div>
                    </div>
                    <div class="widget">
                    	<h5 class="widget_title">Categories</h5>
                        <ul class="widget_categories">
                        	<li><a href="#"><div class="cat_bg background_bg overlay_bg_50" data-img-src="assets/images/cat_img1.jpg"><div class="post_category"><span class="cat_title">Business</span><span class="cat_num">2 Post</span></div></div></a></li>
                            <li><a href="#"><div class="cat_bg background_bg overlay_bg_50" data-img-src="assets/images/cat_img2.jpg"><div class="post_category"><span class="cat_title">Lifestyle</span><span class="cat_num">5 Post</span></div></div></a></li>
                            <li><a href="#"><div class="cat_bg background_bg overlay_bg_50" data-img-src="assets/images/cat_img3.jpg"><div class="post_category"><span class="cat_title">Travel</span><span class="cat_num">7 Post</span></div></div></a></li>
                            <li><a href="#"><div class="cat_bg background_bg overlay_bg_50" data-img-src="assets/images/cat_img4.jpg"><div class="post_category"><span class="cat_title">Fashion</span><span class="cat_num">4 Post</span></div></div></a></li>
                            <li><a href="#"><div class="cat_bg background_bg overlay_bg_50" data-img-src="assets/images/cat_img5.jpg"><div class="post_category"><span class="cat_title">Beauty</span><span class="cat_num">8 Post</span></div></div></a></li>
                        </ul>
                    </div>
                    <div class="widget">
                    	<h5 class="widget_title">Subscribe Newsletter</h5>
                        <p>Contrary to popular belief of lorem Ipsm Latin from consectetur industry blandit massa enim varius nunc.</p>
                        <div class="newsletter_form">
                            <form>
                                <input type="text" required="" class="form-control form-control-sm rounded-input" placeholder="Your email address..">
                                <button type="submit" title="Subscribe" class="btn btn-default btn-radius btn-sm" name="submit" value="Submit">subscribe</button>
                            </form>
                        </div>
                    </div>
                	<div class="widget">
                    	<h5 class="widget_title">Social Feed</h5>
                        <ul class="widget_social social_icons rounded_social">
                            <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#" class="sc_gplus"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                            <li><a href="#" class="sc_pinterest"><i class="ion-social-pinterest-outline"></i></a></li>
                    	</ul>
                    </div>
                    <div class="widget">
                    	<h5 class="widget_title">Letest Posts</h5>
                        <ul class="recent_post">
                        	<li>
                        		<div class="post_footer">
                        			<div class="post_img">
                        				<a href="#"><img class="rounded-circle" src="assets/images/letest_post1.jpg" alt="letest_post1"></a>
                        			</div>
                                    <div class="post_content">
                                        <h6><a href="#">Which Is The Saying From Toil And Pain</a></h6>
                                        <p class="small m-0">April 14, 2018</p>
                                    </div>
                                </div>
                        	</li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img class="rounded-circle" src="assets/images/letest_post2.jpg" alt="letest_post2"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Certain And Owing To The Claims Of Duty</a></h6>
                                        <p class="small m-0">April 14, 2018</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img class="rounded-circle" src="assets/images/letest_post3.jpg" alt="letest_post3"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">These Matters To This Principle Of Selection</a></h6>
                                        <p class="small m-0">April 14, 2018</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                    	<div class="text-center">
                            <div class="ads_banner">
                                <a href="#"><img src="assets/images/ads336X280.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END BLOG -->

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
