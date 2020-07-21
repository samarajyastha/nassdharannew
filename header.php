<!DOCTYPE html>
<html class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="zxx" style="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Home-One || shiksha Educational Html5 Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png" /> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- all css here -->
    <!-- 
		<link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/css/responsive.css" /> -->

    <?php wp_head(); ?>
</head>

<body>

    <?php $topMenu = get_field('top_menu'); ?>
    <header>
        <!-- header-top-area-start -->
        <div class="header-top-area gray-bg-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="header-left-wrapper">
                            <ul class="header-top-text">
                                <li>
                                    <a href="">
                                        <i class="ti-location-pin"></i>
                                        <?php echo $topMenu['address']; ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo "tel:" . $topMenu['phone']; ?>">
                                        <i class="ti-mobile"></i>
                                        <?php echo $topMenu['phone']; ?>

                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo "mailto:" . $topMenu['email']; ?>">
                                        <i class="ti-email"></i>
                                        <?php echo $topMenu['email']; ?>

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="header-right-wrapper">
                            <ul class="header-right-text floatright">

                                <?php if (have_rows('social_sites')) : ?>

                                    <?php while (have_rows('social_sites')) : the_row();
                                        $socialSiteLink = get_sub_field('social_site_link');
                                    ?>
                                        <?php if ($socialSiteLink) : ?>

                                            <li>
                                                <a href="<?php echo $socialSiteLink; ?>" target="_blank"><i class="
                                         <?php
                                            $str = $socialSiteLink;
                                            preg_match('/https:\/\/www.(.*?).com/', $str, $match);
                                            echo "fab fa-" . $match[1]; ?>">
                                                    </i></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <!-- <li>
                                    <a href="login.html"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="login.html"><i class="fab fa-instagram"></i></a>
                                </li> -->
                                <li><a href="login.html">Career</a></li>
                                <li><a href="register.html">Downloads</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top-area-end -->
        <!-- main-menu-area-start -->
        <div class="main-menu-area" id="navbar">
            <div class="container-fluid">
                <div class="col-md-3 col-sm-6 col-xs-7 col-sm logo-area">
                    <?php if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    } ?>
                    <!-- <div class="logo">
                        <a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/logo 1.png" alt="" /></a>
                    </div> -->
                </div>
                <div class="col-md-7 col-sm-4 col-xs-3">
                    <div class="main-menu text-center">
                        <nav style="display: block;">
                            <?php
                           // Using BS4 navwalker for custom menu
                            wp_nav_menu([
                                'menu'            => 'main-menu',
                                'theme_location'  => 'main-menu',
                                'container'       => 'div',
                                'container_id'    => 'navbarSupportedContent',
                                'container_class' => 'collapse navbar-collapse',
                                'menu_id'         => false,
                                'menu_class'      => 'navbar-nav ml-auto',
                                'depth'           => 3,
                                'fallback_cb'     => 'bs4navwalker::fallback',
                                'walker'          => new bs4navwalker()
                            ]);
                            ?>
<!--                             
                            <ul>
                                <li>
                                    <a href="about.html">About</a>
                                    <ul class="sub-menu text-left">
                                        <li><a href="gallery.html">Introduction </a></li>
                                        <li>
                                            <a href="courses-list.html">Message from Principal</a>
                                        </li>
                                        <li>
                                            <a href="courses-details.html">Management Team</a>
                                        </li>
                                        <li><a href="event-details.html">Academic Team</a></li>
                                        <li><a href="login.html">Administration Staff</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="courses-grid.html">Academics<span class="caret"></span></a>
                                    <ul class="sub-menu text-left">
                                        <li>
                                            <a href="gallery.html">+2 Program<span class="caret caret-right"></span>
                                            </a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="gallery.html">Management </a></li>
                                                <li>
                                                    <a href="courses-list.html">Humanities</a>
                                                </li>
                                                <li>
                                                    <a href="courses-details.html">Education</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="gallery.html">Bachelors Program<span class="caret caret-right"></span>
                                            </a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="gallery.html">BBS</a></li>
                                                <li>
                                                    <a href="courses-list.html">BEd.</a>
                                                </li>
                                                <li>
                                                    <a href="courses-details.html">BEd. IT</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="event-layout.html">News & Event<span class="caret"></span></a>
                                    <ul class="sub-menu text-left">
                                        <li><a href="gallery.html">Notices </a></li>
                                        <li><a href="courses-list.html">News</a></li>
                                        <li>
                                            <a href="courses-details.html">Events</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="event-layout.html">Gallery<span class="caret"></span></a>
                                    <ul class="sub-menu text-left">
                                        <li><a href="gallery.html">Photo Gallery </a></li>
                                        <li><a href="courses-list.html">Video Gallery</a></li>
                                    </ul>
                                </li>
                                <li>
										<a href="#">Pages</a>
										<ul class="sub-menu text-left">
											<li><a href="gallery.html">Gallery </a></li>
											<li><a href="courses-list.html">courses list</a></li>
											<li>
												<a href="courses-details.html">courses-details</a>
											</li>
											<li><a href="event-details.html">event-details</a></li>
											<li><a href="login.html">login</a></li>
											<li><a href="register.html">register</a></li>
										</ul>
									</li>
									<li>
										<a href="blog-grid.html">Blog</a>
										<ul class="sub-menu text-left">
											<li>
												<a href="blog-left-sidebar.html">blog-left-sidebar</a>
											</li>
											<li>
												<a href="blog-right-sidebar.html">blog-right-sidebar</a>
											</li>
											<li>
												<a href="blog-no-sidebar.html">blog-no-sidebar</a>
											</li>
											<li><a href="blog-details.html">blog-details</a></li>
											<li>
												<a href="blog-details-no-sidebar.html"
													>blog-details-no-sidebar</a
												>
											</li>
										</ul>
									</li> 
                                <li><a href="contact.html">Contact</a></li>
                            </ul> -->
                        </nav>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 clearfix">
                    <div class="header-search">
                        <div class="search-wrapper">
                            <a href="javascript:void(0);" class="search-open">
                                <span class="ti-search"></span>
                            </a>
                            <div class="search-inside animated bounceInUp">
                                <i class="icon-close search-close fa fa-times"></i>
                                <div class="search-overlay"></div>
                                <div class="position-center-center">
                                    <div class="search">
                                        <form>
                                            <input type="search" placeholder="Search Here" />
                                            <button type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-button floatright hidden-md hidden-sm hidden-xs">
                            <a href="#">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
        <!-- main-menu-area-end -->
    </header>