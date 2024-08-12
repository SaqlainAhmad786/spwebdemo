<header class="header_area" id="header-sticky">
    <div class="header_top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1 ">
                </div>
                <div class="col-lg-7 col-md-6">
                    <marquee width="100%" direction="left" class="text-white">
                        <?php
                        if ($this->sitepermission->notification) {
                        ?>
                            <?php
                            $notification = $this->db->get_where('notification', ['is_status' => 'true'])->row();
                            if (!empty($notification)) {
                                echo $notification->description;
                            }
                            ?>
                        <?php } ?>
                    </marquee>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-end text-end">
                    <div class="top_right text-right show_left right_top_conetnt">
                        <ul class="main_ul">
                            <li><i class="bx bx-user-circle"></i> Miss. khushi </li>
                            <li><a href="<?= base_url() ?>/Home/appDownload">
                                    <i class="bx bx-mobile-alt"></i>
                                    App Download</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropbtn"> Need Help? <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-content need_help_drodown">
                                    <?php
                                    if (!empty($this->needHelp)) {
                                    ?>
                                        <li>
                                            <span class="fw-bold"> Chat: </span>
                                            <a class="text-dark  text-nowrap" href="https://wa.me/<?= !empty($this->needHelp) ? $this->needHelp['whatsapp_no'] : '' ?>?text=Hello%20World!" target="_blank"> &emsp; Let's Chat </a>

                                        </li>
                                        <li><span class="fw-bold">Phone:</span>
                                            <a href="tel:91<?= !empty($this->needHelp) ? $this->needHelp['mobile'] : '' ?>" class="text-black text-nowrap" style="text-decoration: none;"> +91 <?= !empty($this->needHelp) ? $this->needHelp['mobile'] : '' ?> </a>
                                        </li>
                                        <li><span class="fw-bold">Email:</span>
                                            <a class="text-black  text-nowrap" href="mailto:<?= !empty($this->needHelp) ? $this->needHelp['email'] : '' ?>"> &nbsp; <?= !empty($this->needHelp) ? $this->needHelp['email'] : '' ?></a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                    <li><span class="fw-bold">Order:</span>
                                        <a class="text-black  text-nowrap" href="<?= base_url() ?>/Home/OrderTracking"> &nbsp; Track Your Orders</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle_header desktop_header">
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                    <a class="navbar-brand header_logo_here" href="<?= base_url() ?>">
                        <img src="<?= !empty($this->webLogo) ? base_url('uploads/logo/' . $this->webLogo['web_header_logo']) : '' ?>" alt="<?= !empty($this->webLogo) ? $this->webLogo['web_header_logo_alt'] : '' ?>" title="<?= !empty($this->webLogo) ? $this->webLogo['web_header_logo_title'] : '' ?>">
                    </a>
                </div>
                <!-- <div class="col-xl-6 col-lg-6 col-md-2 col-sm-1 col-2"> -->
                <!-- <div class="collapse navbar-collapse justify-content-center search-container" id="navbarSupportedContent">
                    <div id="autocomplete"></div>  -->
                <!-- <form class="d-flex mx-auto position-relative search_input">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search" aria-describedby="search-icon" id="search-input">
                                <span class="input-group-text" id="search-icon">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                            <div class="dropdown-menu" id="searchSuggestions" style="width: 100%;">
                                <p class="dropdown-item"><span class="font-weight-bold">SUGGESTIONS</span>
                                <div class="serach_suggestion padding_left">
                                    <a class="category-sub-link ">
                                        Clothes Doctor <i class="site-search__cat">in
                                            womens</i></a>
                                </div>
                                <div><a class="category-sub-link padding_left">Yeb Clothing <i class="site-search__cat">in
                                            womens</i></a></div>
                                </p>
                                <div class="recent-searches padding_left">
                                    <p class="font-weight-bold"><span>RECENT SEARCHES</span></p>
                                    <div class="serach_suggestion">
                                        <a class="category-sub-link gap-2 d-flex">
                                            <p> <i class="fa fa-history"></i> Women Kurta </p>
                                        </a>
                                    </div>
                                    <div><a class="category-sub-link gap-2 d-flex">
                                            <p><i class="fa fa-history"></i>
                                                Yeb Clothing </p>
                                        </a></div>
                                </div>
                                <div class="related-products padding_left">
                                    <p class="font-weight-bold"> RELATED PRODUCTS </p>
                                    <div class="row mobile-search-js pb-4">
                                        <a class="search-product zoomAnimation col" href="#">
                                            <img src="https://is4.revolveassets.com/images/p4/n/ps/FREE-WR275_V1.jpg" alt="Product 1">
                                            <div class="mt-1">
                                                <div class="text-nowrap"><span> Yazime Dress</span></div>
                                                <span class="text-muted">Yeb Clothing </span> <br>
                                                <span> ₹20,489.25 </span>
                                            </div>
                                        </a>
                                        <a class="search-product zoomAnimation col" href="#">
                                            <img src="https://is4.revolveassets.com/images/p4/n/ps/HMAY-WL27_V1.jpg" alt="Product 2">
                                            <div class="mt-1">
                                                <div> <span> Cedarwood And Vanilla </span> </div>
                                                <span class="text-muted"> Clothes Doctor </span><br>
                                                <span> ₹1,421.70 </span>
                                            </div>
                                        </a>
                                        <a class="search-product zoomAnimation col" href="#">
                                            <img src="https://is4.revolveassets.com/images/p4/n/ps/SLEE-WD342_V1.jpg" alt="Product 2">
                                            <div class="mt-1">
                                                <div> <span> Cedarwood And Vanilla </span> </div>
                                                <span class="text-muted"> Clothes Doctor </span><br>
                                                <span> ₹1,421.70 </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form> -->
                <!-- </div>
                </div> -->
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12 text-center d-flex justify-content-center align-content-center">

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <div id="autocomplete"></div>
                        <ul class="navbar-nav mb-2 mb-lg-0 shopping_Btn">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" aria-current="page" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class=' bx bx-user'></i> Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item dropdown-item2 " href="#"> <i class="fa-regular fa-user"></i> Profile</a>
                                    <a class="dropdown-item dropdown-item2" href="#"> <i class="fa-solid fa-clock-rotate-left"></i> Order History</a>
                                    <a class="dropdown-item dropdown-item2" href="#"> <i class="fa-solid fa-table-columns"></i> Club Dashboard</a>
                                    <a class="dropdown-item dropdown-item2" href="#"> <i class="fa-solid fa-wallet"></i> Wallet</a>
                                    <a class="dropdown-item dropdown-item2" href="#"><i class="fa-solid fa-share"></i> Share A Friend</a>
                                    <a class="dropdown-item dropdown-item2" href="#"> <i class="fa-solid fa-mobile-screen-button"></i> Share App With
                                        Friend</a>
                                    <a class="dropdown-item dropdown-item2" href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class=' bx bx-heart'></i>
                                    Wishlist
                                    <span class="badge badge-pill badge-danger" id="wishlist-count">2</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class=' bx bx-shopping-bag'></i>
                                    Cart
                                    <span class="badge badge-pill badge-danger" id="cart-count">3</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header desktop_header">
        <nav>
            <div class="wrapper d-flex justify-content-center">
                <ul class="nav-links text-center"> 
                    <?php
                    foreach ($this->getTitleCategory as $cindex => $catData) {

                    ?>
                        <li>
                            <a href="#" class="desktop-item menu-toggle-button"> <?= $catData['name'] ?> <i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i> </a>
                            <input type="checkbox" id="showMega">
                            <label for="showMega" class="mobile-item">Western Wear new </label>
                            <div class="mega-box">
                                <div class="content">
                                    <div class="row">
                                        <?php
                                        if (!empty($catData['icon'])) {
                                        ?>
                                            <img src="<?= $catData['icon'] ?>" class="img-fluid w-100 " style="object-fit: contain;" alt="<?= $catData['alt'] ?>">

                                        <?php
                                        }
                                        ?>

                                    </div>
                                    <?php
                                    foreach ($catData['categoryTags'] as $tindex => $ctags) {
                                        if (!empty($ctags['subcategories'])) {
                                    ?>
                                            <div class="row">

                                                <header><?= $ctags['tag_name'] ?></header>
                                                <ul class="mega-links">
                                                    <?php
                                                    foreach ($ctags['subcategories'] as $scindex => $subcat) {
                                                    ?>
                                                        <li><a href="#"><?= $subcat['name'] ?></a></li>
                                                    <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>


                                </div>
                            </div>
                        </li>
                    <?php
                    }
                    ?>

                    <!-- <li>
                        <a href="#" class="desktop-item">Women <i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i> </a>
                        <input type="checkbox" id="showMega">
                        <label for="showMega" class="mobile-item">Women </label>
                        <div class="mega-box">
                            <div class="content">
                                <div class="row">
                                    <img src="<?= base_url('assets/new_website/img/categoryone.webp') ?>" class="img-fluid w-100 " style="object-fit: contain;" alt="">
                                </div>
                                <div class="row">
                                    <header>Shop By Category</header>
                                    <ul class="mega-links">
                                        <li><a href="#">dress material</a></li>

                                    </ul>
                                </div>
                                <div class="row">
                                    <header>Email Services</header>
                                    <ul class="mega-links">
                                        <li><a href="#">Personal Email</a></li>
                                    </ul>
                                </div>
                                <div class="row"></div>
                            </div>
                        </div>
                    </li> -->
                    <!-- <li>
                        <a href="#" class="desktop-item">Men <i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i> </a>
                        <input type="checkbox" id="showMega">
                        <label for="showMega" class="mobile-item">Men </label>
                        <div class="mega-box">
                            <div class="content">
                                <div class="row">
                                    <img src="<?= base_url('assets/new_website/img/categoryone.webp') ?>" class="img-fluid w-100 " style="object-fit: contain;" alt="">
                                </div>
                                <div class="row">
                                    <header>Shop By Category</header>
                                    <ul class="mega-links">
                                        <li><a href="#">dress material</a></li>

                                    </ul>
                                </div>
                                <div class="row">
                                    <header>Email Services</header>
                                    <ul class="mega-links">
                                        <li><a href="#">Personal Email</a></li>
                                    </ul>
                                </div>
                                <div class="row"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="desktop-item">Kids <i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i> </a>
                        <input type="checkbox" id="showMega">
                        <label for="showMega" class="mobile-item">Kids </label>
                        <div class="mega-box">
                            <div class="content">
                                <div class="row">
                                    <img src="<?= base_url('assets/new_website/img/categoryone.webp') ?>" class="img-fluid w-100 " style="object-fit: contain;" alt="">
                                </div>
                                <div class="row">
                                    <header>Shop By Category</header>
                                    <ul class="mega-links">
                                        <li><a href="#">dress material</a></li>

                                    </ul>
                                </div>
                                <div class="row">
                                    <header>Email Services</header>
                                    <ul class="mega-links">
                                        <li><a href="#">Personal Email</a></li>
                                    </ul>
                                </div>
                                <div class="row"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="desktop-item">All Brands <i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a>
                        <input type="checkbox" id="showMega">
                        <label for="showMega" class="mobile-item">All Brands </label>
                        <div class="mega-box">
                            <div class="content">
                                <div class="row">
                                    <img src="<?= base_url('assets/new_website/img/categoryone.webp') ?>" class="img-fluid w-100 " style="object-fit: contain;" alt="">
                                </div>
                                <div class="row">
                                    <header>Shop By Category</header>
                                    <ul class="mega-links">
                                        <li><a href="#">dress material</a></li>

                                    </ul>
                                </div>
                                <div class="row">
                                    <header>Email Services</header>
                                    <ul class="mega-links">
                                        <li><a href="#">Personal Email</a></li>
                                    </ul>
                                </div>
                                <div class="row"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="desktop-item">Indian & Fusion Wear <i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i> </a>
                        <input type="checkbox" id="showMega">
                        <label for="showMega" class="mobile-item">Indian & Fusion Wear </label>
                        <div class="mega-box">
                            <div class="content">
                                <div class="row">
                                    <img src="<?= base_url('assets/new_website/img/categoryone.webp') ?>" class="img-fluid w-100 " style="object-fit: contain;" alt="">
                                </div>
                                <div class="row">
                                    <header>Shop By Category</header>
                                    <ul class="mega-links">
                                        <li><a href="#">dress material</a></li>

                                    </ul>
                                </div>
                                <div class="row">
                                    <header>Email Services</header>
                                    <ul class="mega-links">
                                        <li><a href="#">Personal Email</a></li>
                                    </ul>
                                </div>
                                <div class="row"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="desktop-item">Today's Deals <i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i> </a>
                        <input type="checkbox" id="showMega">
                        <label for="showMega" class="mobile-item">Indian & Fusion Wear </label>
                        <div class="mega-box">
                            <div class="content">
                                <div class="row">
                                    <img src="<?= base_url('assets/new_website/img/categoryone.webp') ?>" class="img-fluid w-100 " style="object-fit: contain;" alt="">
                                </div>
                                <div class="row">
                                    <header>Shop By Category</header>
                                    <ul class="mega-links">
                                        <li><a href="#">dress material</a></li>

                                    </ul>
                                </div>
                                <div class="row">
                                    <header>Email Services</header>
                                    <ul class="mega-links">
                                        <li><a href="#">Personal Email</a></li>
                                    </ul>
                                </div>
                                <div class="row"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="desktop-item">Today's Deals <i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i> </a>
                        <input type="checkbox" id="showMega">
                        <label for="showMega" class="mobile-item">Indian & Fusion Wear </label>
                        <div class="mega-box">
                            <div class="content">
                                <div class="row">
                                    <img src="<?= base_url('assets/new_website/img/categoryone.webp') ?>" class="img-fluid w-100 " style="object-fit: contain;" alt="">
                                </div>
                                <div class="row">
                                    <header>Shop By Category</header>
                                    <ul class="mega-links">
                                        <li><a href="#">dress material</a></li>

                                    </ul>
                                </div>
                                <div class="row">
                                    <header>Email Services</header>
                                    <ul class="mega-links">
                                        <li><a href="#">Personal Email</a></li>
                                    </ul>
                                </div>
                                <div class="row"></div>
                            </div>
                        </div>
                    </li> -->

                </ul>
                <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
            </div>
        </nav>
    </div>
    <div class="mobile_Header">
        <div class="header__area ">
            <div class="container-fluid ">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-6">
                        <div class="header__right p-relative">
                            <div class="mobile-menu-btn text-center d-lg-none d-flex justify-content-between">
                                <a href="<?= base_url() ?>"><img src="<?= !empty($this->webLogo) ? base_url('uploads/logo/' . $this->webLogo['web_header_logo']) : '' ?>" class="mobile_header" alt="<?= !empty($this->webLogo) ? $this->webLogo['web_header_logo_alt'] : '' ?>" title="<?= !empty($this->webLogo) ? $this->webLogo['web_header_logo_title'] : '' ?>"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0">
                        <div class="header__action header__action-2 f-right">
                            <ul>
                                <!-- <li><a href="#" class="search-toggle"><i class="fa-solid fa-magnifying-glass"></i>
                                    </a></li> -->
                                <li><a href="javascript:void(0);" class="cart"><i class="bx bx-shopping-bag"></i>
                                        <span class="badge badge-pill badge-danger" id="mobile_cart-count">3</span> </a>
                                </li>
                                <li><a href="javascript:void(0);" class="cart"><i class="bx bx-heart"></i>
                                        <span class="badge badge-pill badge-danger" id="mobile_cart-count">3</span> </a>
                                </li>
                                <li> <a href="javascript:void(0);"><i class="bx bx-user"></i></a>
                                    <ul class="extra-info">
                                        <li>
                                            <div class="my-account">
                                                <ul>
                                                    <li><a href="#"> <i class="fa-regular fa-user"></i>
                                                            Profile</a></li>
                                                    <li><a href="#"> <i class="fa-solid fa-clock-rotate-left"></i> Order
                                                            History</a></li>
                                                    <li><a href="#"> <i class="fa-solid fa-table-columns"></i>
                                                            Club Dashboard</a></li>
                                                    <li><a href="#"> <i class="fa-solid fa-wallet"></i>
                                                            Wallet</a></li>
                                                    <li><a href="#"> <i class="fa-solid fa-share"></i> Share A
                                                            Friend</a></li>
                                                    <li><a href="#"> <i class="fa-solid fa-mobile-screen-button"></i>
                                                            Share App With Friend</a></li>
                                                    <li><a href="#"> <i class="fa-solid fa-right-from-bracket"></i>
                                                            Logout</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="Add_horizontal_line_here">
            <div class="container-fluid secondHrLine">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-3 pt-1">
                        <div class="mobile-menu-btn text-center d-lg-none d-flex justify-content-between">
                            <a href="javascript:void(0);" class="mobile-menu-toggle"><i class="fas fa-bars"></i> <span class="menu_name">Menu</span> </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-9 pl-0">
                        <div class="mobile_search">
                            <div class="search_group" onclick="openNav()">
                                <div>
                                    <p>Search for products, brand and more <i class="fa fa-search"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>

<section class="category_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 pr-0">
                <div class="show_header_category">
                    <div class="contain">
                        <div id="category_slider" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="category_item active">
                                    <div class="category_img ">
                                        <img src="https://images-static.nykaa.com/uploads/60090952-9d44-4719-9e16-2a595657752e.jpg?tr=w-300,cm-pad_resize" alt="">
                                    </div>
                                    <div class="category_title_here">
                                        <p>View All</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="category_img">
                                        <img src="https://images-static.nykaa.com/uploads/18ade5f2-2977-45fa-98aa-4d855742a062.jpg?tr=w-300,cm-pad_resize" alt="">
                                    </div>
                                    <div class="category_title_here">
                                        <p>Westurnwear</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="category_img">
                                        <img src="https://images-static.nykaa.com/uploads/79a2c586-8b2b-4569-85ec-314513ab6851.jpg?tr=w-300,cm-pad_resize" alt="">
                                    </div>
                                    <div class="category_title_here">
                                        <p>Footwear</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="category_img">
                                        <img src="https://images-static.nykaa.com/uploads/c85e1a76-a8a7-495d-be0d-2717be8b6bfc.jpg?tr=w-300,cm-pad_resize" alt="">
                                    </div>
                                    <div class="category_title_here">
                                        <p>Men Store</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="category_img">
                                        <img src="https://images-static.nykaa.com/uploads/60090952-9d44-4719-9e16-2a595657752e.jpg?tr=w-300,cm-pad_resize" alt="">
                                    </div>
                                    <div class="category_title_here">
                                        <p>Indianwear</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="extra__info transition-3">
    <div class="extra__info-inner">
        <div class="extra__info-close text-right">
            <i class="bx bx-user"></i>
            <a href="javascript:void(0);" class="extra__info-close-btn"><i class="fal fa-times"></i></a>
        </div>
        <div class="UserName_here">
            <nav class="side-mobile-menu d-block d-lg-none p-0">
                <ul id="mobile-menu">
                    <li class=" has-dropdown">
                        <a href="#">khushi</a>
                    </li>
                </ul>
            </nav>
        </div>
        <nav class="side-mobile-menu d-block d-lg-none">
            <ul id="mobile-menu-active">
                <?php
                foreach ($this->getTitleCategory as $cindex => $catData) {

                ?>
                    <li class="active has-dropdown"><a href="<?= base_url() ?>"> <?= $catData['name'] ?> </a>
                        <ul class="submenu transition-3">
                            <?php
                            foreach ($catData['categoryTags'] as $tindex => $ctags) {
                                if (!empty($ctags['subcategories'])) {

                                    foreach ($ctags['subcategories'] as $scindex => $subcat) {

                            ?>
                                        <li><a href="#"><?= $subcat['name'] ?></a></li>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </li>
                <?php
                }
                ?>
                <!-- <li class="active has-dropdown"><a href="<?= base_url() ?>">Women </a>
                    <ul class="submenu transition-3">
                        <li><a href="#">dress material</a></li>
                        <li><a href="#">Personal Email</a></li>
                    </ul>
                </li>
                <li class="active has-dropdown"><a href="<?= base_url() ?>">Men </a>
                    <ul class="submenu transition-3">
                        <li><a href="#">dress material</a></li>
                        <li><a href="#">Personal Email</a></li>
                    </ul>
                </li>
                <li class="active has-dropdown"><a href="<?= base_url() ?>">Kids </a>
                    <ul class="submenu transition-3">
                        <li><a href="#">dress material</a></li>
                        <li><a href="#">Personal Email</a></li>
                    </ul>
                </li>
                <li class="active has-dropdown"><a href="<?= base_url() ?>">All Brands </a>
                    <ul class="submenu transition-3">
                        <li><a href="#">dress material</a></li>
                        <li><a href="#">Personal Email</a></li>
                    </ul>
                </li>
                <li class="active has-dropdown"><a href="<?= base_url() ?>">Indian & Fusion Wear </a>
                    <ul class="submenu transition-3">
                        <li><a href="#">dress material</a></li>
                        <li><a href="#">Personal Email</a></li>
                    </ul>
                </li>
                <li class="active has-dropdown"><a href="<?= base_url() ?>">Today's Deals </a>
                    <ul class="submenu transition-3">
                        <li><a href="#">dress material</a></li>
                        <li><a href="#">Personal Email</a></li>
                    </ul>
                </li> -->
            </ul>
        </nav>
    </div>
</section>
<div class="body-overlay transition-3"></div>

<div id="mySidenav" class="sidenav">

    <div class="searchOptionHere">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </a>
        <form action="#">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search products, brands and more...  " aria-label="Search" aria-describedby="search-icon">
                <span class="input-group-text"> <i class="search-icon fas fa-search" id="search-icon"></i>
                </span>
            </div>
        </form>
    </div>
    <div class=" mt-4">
        <div class="container">
            <div class="row">
                <div class="col-4 col-sm-4 px-0">
                    <div class="search_img_here">
                        <img src="https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/2024/3/28/0253fdda-4a02-4da7-8a20-5a87ab55dc541711628486708-Puma.jpg" alt="">
                    </div>
                </div>
                <div class="col-4 col-sm-4 px-0">
                    <div class="search_img_here">
                        <img src="https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/2024/3/28/c5ab7617-9a89-4211-9c0a-68389239b3bb1711628483515-Campus.jpg" alt="">
                    </div>
                </div>
                <div class="col-4 col-sm-4 px-0">
                    <div class="search_img_here">
                        <img src="https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/2024/3/28/ea4a2453-9f99-4df1-b26f-ca9d702eb6411711628487334-Roadster.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4 col-sm-4 px-0">
                    <div class="search_img_here">
                        <img src="https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/2024/3/28/0253fdda-4a02-4da7-8a20-5a87ab55dc541711628486708-Puma.jpg" alt="">
                    </div>
                </div>
                <div class="col-4 col-sm-4 px-0">
                    <div class="search_img_here">
                        <img src="https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/2024/3/28/c5ab7617-9a89-4211-9c0a-68389239b3bb1711628483515-Campus.jpg" alt="">
                    </div>
                </div>
                <div class="col-4 col-sm-4 px-0">
                    <div class="search_img_here">
                        <img src="https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/2024/3/28/ea4a2453-9f99-4df1-b26f-ca9d702eb6411711628487334-Roadster.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>