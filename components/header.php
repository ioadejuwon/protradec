<!-- start: Header Area -->
 
<header class="header-area <?php if ($pagetitle == "Home"){echo "header-2";}else{echo "header-1";} ?>  header-absolute section-gap-x">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="header-wrapper">
                    <!-- site logo -->
                    <div class="site_logo">
                        <a class="logo" href="<?php echo HOME ?>"><img src="admin/assets/images/logo-2.png" alt=""></a>
                    </div>

                    <!-- navigation -->
                    <div class="menu-area d-none d-lg-inline-flex align-items-center">
                        <nav id="mobile-menu" class="mainmenu">
                            <ul>
                                <li><a href="<?php echo ABOUT ?>">About</a></li>
                                <li><a href="<?php echo SERVICES ?>">Services</a></li>
                                <li><a href="<?php echo PROJECTS ?>">Projects</a></li>
                                <li><a href="<?php echo BLOG ?>">Blog</a></li>
                                <li><a href="<?php echo CONTACT ?>">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- header right info -->
                    <div class="header-right-item d-none d-lg-inline-flex">
                        <div class="header-search">
                            <button class="search">
                                <i class="tji-search"></i>
                            </button>
                            <button type="button" class="search_close_btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="header-button">
                            <a class="tj-primary-btn" href="<?php echo CONSULTATION ?>">
                                <span class="btn-text"><span>Let’s Talk</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                        <div class="menu_bar menu_offcanvas d-none d-lg-inline-flex">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <!-- menu bar -->
                    <div class="menu_bar mobile_menu_bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Popup -->
    <div class="search_popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="tj_search_wrapper">
                        <div class="search_form">
                            <form action="#">
                                <div class="search_input">
                                    <div class="search-box">
                                        <input class="search-form-input" type="text" placeholder="Type Words and Hit Enter" required>
                                        <button type="submit">
                                            <i class="tji-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end: Header Area -->


<!-- start: Header Area -->
<header class="header-area <?php if ($pagetitle == "Home"){echo "header-2";}else{echo "header-1";} ?> header-duplicate header-sticky section-gap-x">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="header-wrapper">
                    <!-- site logo -->
                    <div class="site_logo">
                        <a class="logo" href="<?php echo HOME ?>"><img src="admin/assets/images/logo-2.png" alt=""></a>
                    </div>

                    <!-- navigation -->
                    <div class="menu-area d-none d-lg-inline-flex align-items-center">
                        <nav class="mainmenu">
                            <ul>
                                <li><a href="<?php echo ABOUT ?>">About</a></li>
                                <li><a href="<?php echo SERVICES ?>">Services</a></li>
                                <li><a href="<?php echo PROJECTS ?>">Projects</a></li>
                                <li><a href="<?php echo BLOG ?>">Blog</a></li>
                                <li><a href="<?php echo CONTACT ?>">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- header right info -->
                    <div class="header-right-item d-none d-lg-inline-flex">
                        <div class="header-search">
                            <button class="search">
                                <i class="tji-search"></i>
                            </button>
                            <button type="button" class="search_close_btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="header-button">
                            <a class="tj-primary-btn" href="<?php echo CONSULTATION ?>">
                                <span class="btn-text"><span>Let’s Talk</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                        <div class="menu_bar menu_offcanvas d-none d-lg-inline-flex">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <!-- menu bar -->
                    <div class="menu_bar mobile_menu_bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Popup -->
    <div class="search_popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="tj_search_wrapper">
                        <div class="search_form">
                            <form action="#">
                                <div class="search_input">
                                    <div class="search-box">
                                        <input class="search-form-input" type="text" placeholder="Type Words and Hit Enter" required>
                                        <button type="submit">
                                            <i class="tji-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end: Header Area -->

<div id="smooth-wrapper">
  <div id="smooth-content">
        <main id="primary" class="site-main">
      <!-- <div class=""></div> -->
       <div class="<?php if ($pagetitle == "Home"){echo "top-space-15";}else{echo "space-for-header";} ?> "></div>