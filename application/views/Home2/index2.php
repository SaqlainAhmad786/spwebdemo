<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Home </title>
    <?php include('include/cssLinks.php'); ?>
    <style>
        .fs10{
            font-size: 10px;
        }
        .fs12{
            font-size: 12px;
        }
        
        .youtube-embed-container {
            position: relative;
            width: 800px;
            height: 400px;
        }

        .youtube-embed-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .youtube-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            z-index: 2;
        }

        .ytp-chrome-top-buttons {
            display: none !important;
        }

        .ytp-title-channel {
            display: none !important;
        }

        .ytp-title {
            display: none !important;
        }
    </style>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main>
        <!-- __________slider_____section_____ -->
        <section class="slider_area" id="slider_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider_Image_here slider">
                            <div class="contain slides_all">
                                <div id="topSlider" class="owl-carousel owl-theme">
                                    <div class="item"><img src="https://img.freepik.com/free-photo/top-view-model-covered-with-clothes_23-2149704522.jpg" alt="Image 1"></div>
                                    <div class="item"><img src="https://img.freepik.com/free-photo/top-view-model-covered-with-clothes_23-2149704522.jpg" alt="Image 2"></div>
                                    <div class="item"><img src="https://img.freepik.com/free-photo/top-view-model-covered-with-clothes_23-2149704522.jpg" alt="Image 3"></div>

                                    <!-- <?php
                                    foreach ($sliders as $slider) {

                                        if (!empty($slider['video_url'])) {
                                    ?>
                                            <div class="item">
                                                <iframe style="width: -webkit-fill-available;" height="450" src="<?= $slider['video_url'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <div class="youtube-overlay"></div>
                                            </div>
                                            <?php
                                        } else {
                                            if (file_exists('./uploads/slider/' . $slider['image'])) {
                                            ?>
                                                <div class="item">
                                                    <?php
                                                    if (!empty($slider['click_url'])) {
                                                    ?>
                                                        <a href="javascript:void(0)" onclick="SliderURL('<?= $slider['id'] ?>', '<?= $slider['click_url'] ?>')">
                                                        <?php
                                                    } else {
                                                        ?>
                                                            <a href="javascript:void(0)">
                                                            <?php
                                                        }
                                                            ?>
                                                            <div class="slider_img second_img">
                                                                <img class="d-block w-100 slider-img" src="<?= base_url('uploads/slider/' . $slider['image']) ?>" alt="<?= $slider['alt'] ?>" title="<?= $slider['seo_title'] ?>" data-mobile="<?= base_url('uploads/slider/' . $slider['image_mobile']) ?>" data-tablet="<?= base_url('uploads/slider/' . $slider['image_tablet']) ?>" data-desktop="<?= base_url('uploads/slider/' . $slider['image']) ?>">
                                                            </div>
                                                            </a>
                                                </div>
                                    <?php
                                            }
                                        }
                                    }
                                    ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- _______offersection___________ -->

        <?php if (!empty($getWelcomeStoreProducts)) { ?>
            <div class="box-25">
                <section class="offerSection_startHere my-lg-5 my-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section__title-wrapper text-center ">
                                    <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                        <h2 class="m-0 text-dark">Offers</h2>
                                    </div>
                                    <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                        <p class="text-secondary">Our one-stop destination for every style, trend, occasion you're shopping
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner__area-2 ">
                        <div class="container-fluid">
                            <div class="contain">
                                <div id="offer_owl" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                                            <div class="banner__thumb fix">
                                                <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/bn1.avif') ?>" alt="banner"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="banner__item-2 banner-left p-relative mb-30 pl-15">
                                            <div class="banner__thumb fix">
                                                <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/bn1.avif') ?>" alt="banner"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="banner__item-2 banner-left p-relative mb-30 pl-15">
                                            <div class="banner__thumb fix">
                                                <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/bn1.avif') ?>" alt="banner"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="banner__item-2 banner-left p-relative mb-30 pl-15">
                                            <div class="banner__thumb fix">
                                                <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/bn1.avif') ?>" alt="banner"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="welcome_startingSection blog__area my-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section__title-wrapper text-center mb-40">
                                    <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                        <h2 class="m-0 text-dark">Welcome To Store </h2>
                                    </div>
                                    <div class="section__sub-title  wow fadeInDown" data-wow-duration="2s">
                                        <p class="text-secondary">Our one-stop destination for every style, trend, occasion you're shopping </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid pb-30">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="welcome__slider owl-carousel">
                                    <?php
                                    // var_dump($getWelcomeStoreProducts[0]);
                                    foreach ($getWelcomeStoreProducts as $eachStoreProducts) {
                                        // $icons = explode(',', $eachStoreProducts->image1);
                                    ?>
                                        <div class="blog__item">
                                            <div class="blog__thumb fix ">
                                                <a href="#" class="w-img"><img class="image-placeholder" src="<?= $eachStoreProducts->image ?>" alt="img"></a>
                                            </div>
                                            <div class="blog__content">
                                                <h4><a href="#"><?= $eachStoreProducts->title ?></a></h4>
                                                <div class="blog__meta ">
                                                    <span>Min.50%off</span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <?php } ?>
        <!-- ___seller___banner_____ -->
        <section class="offerSection_startHere SaleBannerSectionhere">
            <div class="banner__area-2 ">
                <div class="container-fluid ">
                    <div class="row ">
                        <div class="col-lg-12  mx-0 px-0">
                            <div id="sellerBanner_owl" class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                                        <div class="banner__thumb fix">
                                            <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/banner1.png') ?>" alt="banner"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="banner__item-2 banner-left p-relative mb-30 pl-15">
                                        <div class="banner__thumb fix">
                                            <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/banner1.png') ?>" alt="banner"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="banner__item-2 banner-left p-relative mb-30 pl-15">
                                        <div class="banner__thumb fix">
                                            <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/banner1.png') ?>" alt="banner"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="banner__item-2 banner-left p-relative mb-30 pl-15">
                                        <div class="banner__thumb fix">
                                            <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/banner1.png') ?>" alt="banner"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="box-25">

            <!-- ____combo____product____ -->
            <section class="product__area comboProductArea pt-30 pb-50" id="view_Third_popup">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-55">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>New And Core Collection </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid combo_section_Desktopview">
                    <div class="product__banner p-relative">
                        <div class="product__banner-inner p-absolute fix d-none d-lg-block">
                            <div class="product__banner-img large-image">
                                <a href="#"><img src="<?= base_url('assets/new_website/img/combo.webp') ?>" id="mainImage" alt="product-banner"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6 ">
                                <div class="product__slider-2 owl-carousel" id="comboProducts">
                                    <div class="product__item ">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="#" class="w-img">
                                                    <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                    <img class="product__thumb-2" src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="#"> Ava Casual Chain Loafers</a>
                                                        <br>
                                                        ₹ 1,998 Regular price
                                                    </h4>
                                                    <span></span> &nbsp;
                                                    <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span></span>

                                                    <div class="product__price transition-3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="#" class="w-img">
                                                    <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                    <img class="product__thumb-2" src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>₹ 1,998 Regular price</span>&nbsp;
                                                        <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="#" class="w-img">
                                                    <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                    <img class="product__thumb-2" src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>₹ 1,998 Regular price</span>&nbsp;
                                                        <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="#" class="w-img">
                                                    <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                    <img class="product__thumb-2" src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>₹ 1,998 Regular price</span>&nbsp;
                                                        <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="#" class="w-img">
                                                    <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                    <img class="product__thumb-2" src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>₹ 1,998 Regular price</span>&nbsp;
                                                        <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6">
                                <div class="thumbnails owl-carousel" id="combo_slider">
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <img src="<?= base_url('assets/new_website/img/combo1.webp') ?>" class="thumb" alt="product-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <img src="<?= base_url('assets/new_website/img/combo2.webp') ?>" class="thumb" alt="product-img">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <img src="<?= base_url('assets/new_website/img/combo3.webp') ?>" class="thumb" alt="product-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <img src="<?= base_url('assets/new_website/img/combo4.webp') ?>" class="thumb" alt="product-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <img src="<?= base_url('assets/new_website/img/combo1.webp') ?>" class="thumb" alt="product-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <img src="<?= base_url('assets/new_website/img/combo2.webp') ?>" class="thumb" alt="product-img">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid combo_section_Mobileview">
                    <div class="product__banner p-relative">
                        <div class="row">
                            <div class="col-xl-12 ">
                                <div class="comboProductsMobile owl-carousel">
                                    <div class="item">
                                        <div class="row ">
                                            <div class="col-md-7 col-7 pr-0 combo_show_designs">
                                                <div class="product__wrapper ">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/combo.webp') ?>" class="h-100" alt="product-img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-5 combo_parts_img">
                                                <div class="product__wrapper">
                                                    <div class="product__thumb mb-40">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative mb-10">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__wrapper">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row ">
                                            <div class="col-md-7 col-7 pr-0 combo_show_designs">
                                                <div class="product__wrapper ">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/combo1.webp') ?>" class="h-100" alt="product-img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-5 combo_parts_img">
                                                <div class="product__wrapper">
                                                    <div class="product__thumb mb-40">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative mb-10">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__wrapper">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row ">
                                            <div class="col-md-7 col-7 pr-0 combo_show_designs">
                                                <div class="product__wrapper ">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/combo2.webp') ?>" class="h-100" alt="product-img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-5 combo_parts_img">
                                                <div class="product__wrapper">
                                                    <div class="product__thumb mb-40">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative mb-10">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__wrapper">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row ">
                                            <div class="col-md-7 col-7 pr-0 combo_show_designs">
                                                <div class="product__wrapper ">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/combo3.webp') ?>" class="h-100" alt="product-img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-5 combo_parts_img">
                                                <div class="product__wrapper">
                                                    <div class="product__thumb mb-40">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative mb-10">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__wrapper">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row ">
                                            <div class="col-md-7 col-7 pr-0 combo_show_designs">
                                                <div class="product__wrapper ">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/combo4.webp') ?>" class="h-100" alt="product-img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-5 combo_parts_img">
                                                <div class="product__wrapper">
                                                    <div class="product__thumb mb-40">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative mb-10">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__wrapper">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row ">
                                            <div class="col-md-7 col-7 pr-0 combo_show_designs">
                                                <div class="product__wrapper ">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/combo1.webp') ?>" class="h-100" alt="product-img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-5 combo_parts_img">
                                                <div class="product__wrapper">
                                                    <div class="product__thumb mb-40">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative mb-10">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__wrapper">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
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
            <!-- ______Latest Collections______ -->
            <section class="sale__area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>Latest Collections </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="sale__area-slider-2 owl-carousel latest_collection">
                                <div class="sale__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#l" class="w-img">
                                                <img class="image-placeholder" src="https://m.media-amazon.com/images/I/41+HM8MhyKL._AC_UF480,600_SR480,600_.jpg" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <span class="text-muted">Aurelia</span>
                                                <h4><a href="#">Cotton Floral Printed Dress </a></h4>
                                                <span class="mb-4">₹1,280</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#l" class="w-img">
                                                <img class="image-placeholder" src="https://m.media-amazon.com/images/I/71CLU0SCWwL._SY741_.jpg" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <span class="text-muted">Aurelia</span>
                                                <h4><a href="#">Cotton Floral Printed Dress </a></h4>
                                                <span class="mb-4">₹1,280</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#l" class="w-img">
                                                <img class="image-placeholder" src="https://netose.in/cdn/shop/files/27A_540x.jpg?v=1712500288" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <span class="text-muted">Aurelia</span>
                                                <h4><a href="#">Cotton Floral Printed Dress </a></h4>
                                                <span class="mb-4">₹1,280</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#l" class="w-img">
                                                <img class="image-placeholder" src="<?= base_url('assets/new_website/img/img2.jpg') ?>" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <span class="text-muted">Helsa</span>
                                                <h4><a href="#">The Amber Dress</a></h4>
                                                <span class="mb-4">₹24,849.18</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#l" class="w-img">
                                                <img class="image-placeholder" src="https://cdn.shopify.com/s/files/1/0554/7530/6627/files/kostume-2.jpg?v=1688130819" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <span class="text-muted">Helsa</span>
                                                <h4><a href="#">The Amber Dress</a></h4>
                                                <span class="mb-4">₹24,849.18</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#l" class="w-img">
                                                <img class="image-placeholder" src="https://kostumecounty.com/cdn/shop/files/IMG_3576_300x300.jpg?v=1687846468" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <span class="text-muted">Helsa</span>
                                                <h4><a href="#">The Amber Dress</a></h4>
                                                <span class="mb-4">₹24,849.18</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#l" class="w-img">
                                                <img class="image-placeholder" src="<?= base_url('assets/new_website/img/latestcollection.avif') ?>" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <span class="text-muted">Helsa</span>
                                                <h4><a href="#">The Amber Dress</a></h4>
                                                <span class="mb-4">₹24,849.18</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- ____banner_img____ -->
        <section class="banner_one_section">
            <div class="show_banner banner__area-2">
                <div class="onLayer  pb-30">
                    <div class="conatiner px-0 m-0">
                        <dirv class="row px-0 m-0">
                            <div class="col-lg-12 px-0">
                                <div class="content_here">
                                    <a href="#" class="os-btn os-btn-2">Shop Now</span></a>
                                </div>
                            </div>
                        </dirv>
                    </div>
                </div>
            </div>
        </section>

        <div class="box-25">
            <section class="sale__area pb-30 pt-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>Our Combo's </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="combos__slider add_combo_imgcss owl-carousel">
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://m.media-amazon.com/images/I/81rYMYCiyaL._AC_UL480_FMwebp_QL65_.jpg" alt="img"></a>
                                    </div>
                                    <div class="overlay_add">
                                        <div class="lastText">
                                            <p>Women Kurta</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://m.media-amazon.com/images/I/41FyQlqVCKL._AC_UF480,600_SR480,600_.jpg" alt="img"></a>
                                    </div>
                                    <div class="overlay_add">
                                        <div class="lastText">
                                            <p>Shirt</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img 
                                                src="https://m.media-amazon.com/images/I/814vRRc5JcL._AC_UL480_FMwebp_QL65_.jpg"
                                                alt="img"></a>
                                    </div>
                                    <div class="overlay_add">
                                        <div class="lastText">
                                            <p>Long tshirts </p>
                                            <p></p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://m.media-amazon.com/images/I/81rYMYCiyaL._AC_UL480_FMwebp_QL65_.jpg" alt="img"></a>
                                    </div>
                                    <div class="overlay_add">
                                        <div class="lastText">
                                            <p>Women Kurta</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://m.media-amazon.com/images/I/81uufWYCZtL._AC_UL480_FMwebp_QL65_.jpg" alt="img"></a>
                                    </div>
                                    <div class="overlay_add">
                                        <div class="lastText">
                                            <p> Fairness Cream </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://m.media-amazon.com/images/I/619hoZs6saL._AC_UL480_FMwebp_QL65_.jpg" alt="img"></a>
                                    </div>
                                    <div class="overlay_add">
                                        <div class="lastText">
                                            <p> Leather Wallet </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/shirt.avif') ?>" alt="img"></a>
                                    </div>
                                    <div class="overlay_add">
                                        <div class="lastText">
                                            <p>Shirt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/shirt.avif') ?>" alt="img"></a>
                                    </div>
                                    <div class="overlay_add">
                                        <div class="lastText">
                                            <p>Shirt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/shirt.avif') ?>" alt="img"></a>
                                    </div>
                                    <div class="overlay_add">
                                        <div class="lastText">
                                            <p>Shirt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/shirt.avif') ?>" alt="img"></a>
                                    </div>
                                    <div class="overlay_add">
                                        <div class="lastText">
                                            <p>Shirt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ______our_productSection_____ -->
            <section class="sale__area productsSection_Start pt-40 pb-50" style="background: #ededf9 !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2 style="background: #ededf9 !important;">Our Products </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row our_productSection">
                        <div class="productslider add_combo_imgcss owl-carousel">
                            <div class="blog__item">
                                <div class="card">
                                    <h2 class="fs-5 fw-bold"> Revamp your home in style</h2>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container ">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_furnishings_2._SY116_CB555624324_.jpg" class="img-fluid" alt="">
                                            </figure>
                                            <a href="#" class="product-container">
                                                <figure>
                                                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" class="img-fluid" alt="">
                                                </figure>
                                            </a>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_storage_1._SY116_CB555624324_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_lighting_2._SY116_CB555624324_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                    </div>
                                    <a href="#" class="explore-more-btn">Explore More</a>
                                </div>
                            </div>
                            <div class="blog__item">
                                <div class="card">
                                    <h2 class="fs-5 fw-bold"> Up to 60% off | Top picks </h2>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container ">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Softlines_JWL_SH_GW_Assets/2024/July/BTF/1st/PC/Shoes-low._SY116_CB554442186_.jpg" class="img-fluid" alt="">
                                            </figure>
                                            <a href="#" class="product-container">
                                                <figure>
                                                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Softlines_JWL_SH_GW_Assets/2024/July/BTF/1st/pcqc2-3-low._SY116_CB554637206_.jpg" class="img-fluid" alt="">
                                                </figure>
                                            </a>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Softlines_JWL_SH_GW_Assets/2024/July/BTF/1st/Pcqc2-4-low._SY116_CB554637206_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Softlines_JWL_SH_GW_Assets/2024/July/BTF/1st/Pcqc-2-2-low._SY116_CB554637206_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                    </div>
                                    <a href="#" class="explore-more-btn">Explore More</a>
                                </div>
                            </div>
                            <div class="blog__item">
                                <div class="card">
                                    <h2 class="fs-5 fw-bold"> Pocket-friendly fashion </h2>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container ">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/Gateway/BAU/BTF-Refresh/May/PC-PFF/PFF-1-186-116._SY116_CB636055991_.jpg" class="img-fluid" alt="">
                                            </figure>
                                            <a href="#" class="product-container">
                                                <figure>
                                                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/Gateway/BAU/BTF-Refresh/May/PC-PFF/PFF-3-186-116._SY116_CB636055991_.jpg" class="img-fluid" alt="">
                                                </figure>
                                            </a>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/Gateway/BAU/BTF-Refresh/May/PC-PFF/PFF-2-186-116._SY116_CB636055991_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/Gateway/BAU/BTF-Refresh/May/PC-PFF/PFF-4-186-116._SY116_CB636055991_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                    </div>
                                    <a href="#" class="explore-more-btn">Explore More</a>
                                </div>
                            </div>
                            <div class="blog__item">
                                <div class="card">
                                    <h2 class="fs-5 fw-bold"> Brands in focus </h2>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container ">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/LaptopsPD24_Intel_Ascent/Intel_QuadCard_186x116._SY116_CB554215172_.jpg" class="img-fluid" alt="">
                                            </figure>
                                            <a href="#" class="product-container">
                                                <figure>
                                                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Wireless/tsahtany/PrimeDay/ASCENT/PC_QuadCard186x116._SY116_CB569818057_.jpg" class="img-fluid" alt="">
                                                </figure>
                                            </a>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img24/COOP/ASCENT/PD24/GW_deskQC/Surf_1x._SY116_CB569797750_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img24/COOP/ASCENT/PD24/GW_deskQC/Pampers_1x._SY116_CB569797750_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                    </div>
                                    <a href="#" class="explore-more-btn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sale__area  our_storesSection pt-60">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>Our Stores </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Find everything for your every need</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="bagProduct__slider   owl-carousel">
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/b1.webp') ?>" alt="img">
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/b2.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/b3.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/b4.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/b5.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/f11.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/f12.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/f13.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/f14.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/j4.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Oomph</a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/j2.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Peora</a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/j3.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ______pre___book____ -->
            <section class="sale__area  prebook_sales">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>Pre Book </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Our one-stop destination for every style, trend, occasion
                                        you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="products-area ">
                        <div class="row prebook-row pre_book_showing">
                            <div class="col-md-6">
                                <figure class="position-relative">
                                    <h2 class="position-absolute top-50 start-50 translate-middle text-center newarrivals-textaboveimg">
                                        <span class="story-hero__hed-number">515</span> New Arrivals
                                    </h2>

                                    <img src="https://is4.revolveassets.com/images/up/2024/May/050424_f_na_1x.jpg" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="col-md-6">
                                <figure class="position-relative">
                                    <h2 class="position-absolute top-50 start-50 translate-middle text-center newarrivals-textaboveimg">
                                        Dresses To Preorder <br> Now
                                    </h2>

                                    <img src="https://is4.revolveassets.com/images/up/2024/May/051624_f_longweekend_02.jpg" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="col-md-6">
                                <figure>


                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sale__area  pt-20">
                <div class="container-fluid pb-30">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class=" pre_order_slider  owl-carousel">
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- new on slick pattern -->
            <section class="pro-content pro-tab-content ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>New On Slick Pattern</h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="products-area desktop_view_newONSlickPattern">
                        <!-- desktop view -->
                        <div class="row prebook-row newOnSlick-col weekend_style">
                            <div class="col-12 col-md-4">
                                <figure class="newOn_sp">
                                    <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" alt="" class="img-fluid">
                                    <figcaption class="story-hero__cta">
                                        <h3 class="mb-2">Weekend Style</h3>
                                        <a href="#" class="os-btn os-btn-2">Shop Now</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-12 col-md-4">
                                <figure class="newOn_sp">
                                    <img src="https://images.meesho.com/images/products/343616323/lcbl1_512.webp" alt="" class="img-fluid">
                                    <figcaption class="story-hero__cta">
                                        <h3 class="mb-2">Weekend Style</h3>
                                        <a href="#" class="os-btn os-btn-2">Shop Now</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-12 col-md-4">
                                <figure class="newOn_sp">
                                    <img src="https://assets.ajio.com/medias/sys_master/root/20230602/heGu/6479573d42f9e729d7112552/-473Wx593H-462076821-maroon-MODEL4.jpg" alt="" class="img-fluid">
                                    <figcaption class="story-hero__cta">
                                        <h3 class="mb-2">Weekend Style</h3>
                                        <a href="#" class="os-btn os-btn-2">Shop Now</a>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-12 col-md-4">
                                <figure class="newOn_sp">
                                    <img src="<?= base_url('assets/new_website/img/img.png') ?>" alt="" class="img-fluid">
                                    <figcaption class="story-hero__cta">
                                        <h3 class="mb-2">Weekend Style</h3>
                                        <a href="#" class="os-btn os-btn-2">Shop Now</a>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-12 col-md-4">
                                <figure class="newOn_sp">

                                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="" class="img-fluid">
                                    <figcaption class="story-hero__cta">
                                        <h3 class="mb-2">Weekend Style</h3>
                                        <a href="#" class="os-btn os-btn-2">Shop Now</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-12 col-md-4">
                                <figure class="newOn_sp">

                                    <img src="https://assets.panashindia.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/4/8/4858sr06-22406_1.jpg" alt="" class="img-fluid">
                                    <figcaption class="story-hero__cta">
                                        <h3 class="mb-2">Weekend Style</h3>
                                        <a href="#" class="os-btn os-btn-2">Shop Now</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <!-- __mobile_viewSection__ -->

                    <div class="row mobileViewNEWOnSlickPattern">
                        <div class="col-xl-12">
                            <div class=" pre_order_slider  owl-carousel">
                                <div class="blog__item ">
                                    <figure class="newOn_sp">
                                        <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" alt="" class="img-fluid">
                                        <figcaption class="story-hero__cta">
                                            <h3 class="mb-2">Weekend Style</h3>
                                            <a href="#" class="os-btn os-btn-2">Shop Now</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="blog__item">
                                    <figure class="newOn_sp">
                                        <img src="https://images.meesho.com/images/products/343616323/lcbl1_512.webp" alt="" class="img-fluid">
                                        <figcaption class="story-hero__cta">
                                            <h3 class="mb-2">Weekend Style</h3>
                                            <a href="#" class="os-btn os-btn-2">Shop Now</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="blog__item">
                                    <figure class="newOn_sp">
                                        <img src="https://assets.ajio.com/medias/sys_master/root/20230602/heGu/6479573d42f9e729d7112552/-473Wx593H-462076821-maroon-MODEL4.jpg" alt="" class="img-fluid">
                                        <figcaption class="story-hero__cta">
                                            <h3 class="mb-2">Weekend Style</h3>
                                            <a href="#" class="os-btn os-btn-2">Shop Now</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="blog__item">
                                    <figure class="newOn_sp">
                                        <img src="<?= base_url('assets/new_website/img/img.png') ?>" alt="" class="img-fluid">
                                        <figcaption class="story-hero__cta">
                                            <h3 class="mb-2">Weekend Style</h3>
                                            <a href="#" class="os-btn os-btn-2">Shop Now</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="blog__item">
                                    <figure class="newOn_sp">
                                        <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="" class="img-fluid">
                                        <figcaption class="story-hero__cta">
                                            <h3 class="mb-2">Weekend Style</h3>
                                            <a href="#" class="os-btn os-btn-2">Shop Now</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ____our Catelog_____ -->
            <section class="sale__area catelog_lookbook ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>Download Lookbook </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pb-30">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="catelog__slider   owl-carousel mt-10 catelog_section">
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://cdn.shopify.com/s/files/1/0106/4897/7444/files/02_01.jpg?v=1634485608" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4> Brocher Name </h4>
                                        <span class="badge ">
                                            <i class="fa-regular fa-thumbs-up thumbs-up-icon"></i>&nbsp; <span> 122K
                                            </span> &emsp;
                                            <!-- <i class="fa-regular fa-circle-down"></i> &nbsp;<span> 500K </span> -->
                                        </span>
                                        <span class="badge" id="download-btn">
                                            <i class="fa fa-circle-down download-icon"></i>&nbsp;<span> 500K </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://cdn.shopify.com/s/files/1/0106/4897/7444/files/02_01.jpg?v=1634485608" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4> Brocher Name </h4>
                                        <span class="badge ">
                                            <i class="fa-regular fa-thumbs-up thumbs-up-icon"></i>&nbsp; <span> 122K
                                            </span> &emsp;
                                            <!-- <i class="fa-regular fa-circle-down"></i> &nbsp;<span> 500K </span> -->
                                        </span>
                                        <span class="badge" id="download-btn">
                                            <i class="fa fa-circle-down download-icon"></i>&nbsp;<span> 500K </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://cdn.shopify.com/s/files/1/0106/4897/7444/files/02_01.jpg?v=1634485608" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4> Brocher Name </h4>
                                        <span class="badge ">
                                            <i class="fa-regular fa-thumbs-up thumbs-up-icon"></i>&nbsp; <span> 122K
                                            </span> &emsp;
                                            <!-- <i class="fa-regular fa-circle-down"></i> &nbsp;<span> 500K </span> -->
                                        </span>
                                        <span class="badge" id="download-btn">
                                            <i class="fa fa-circle-down download-icon"></i>&nbsp;<span> 500K </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://cdn.shopify.com/s/files/1/0106/4897/7444/files/02_01.jpg?v=1634485608" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4> Brocher Name </h4>
                                        <span class="badge ">
                                            <i class="fa-regular fa-thumbs-up thumbs-up-icon"></i>&nbsp; <span> 122K
                                            </span> &emsp;
                                            <!-- <i class="fa-regular fa-circle-down"></i> &nbsp;<span> 500K </span> -->
                                        </span>
                                        <span class="badge" id="download-btn">
                                            <i class="fa fa-circle-down download-icon"></i>&nbsp;<span> 500K </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://cdn.shopify.com/s/files/1/0106/4897/7444/files/02_01.jpg?v=1634485608" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4> Brocher Name </h4>
                                        <span class="badge ">
                                            <i class="fa-regular fa-thumbs-up thumbs-up-icon"></i>&nbsp; <span> 122K
                                            </span> &emsp;
                                            <!-- <i class="fa-regular fa-circle-down"></i> &nbsp;<span> 500K </span> -->
                                        </span>
                                        <span class="badge" id="download-btn">
                                            <i class="fa fa-circle-down download-icon"></i>&nbsp;<span> 500K </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://cdn.shopify.com/s/files/1/0106/4897/7444/files/02_01.jpg?v=1634485608" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4> Brocher Name </h4>
                                        <span class="badge ">
                                            <i class="fa-regular fa-thumbs-up thumbs-up-icon"></i>&nbsp; <span> 122K
                                            </span> &emsp;
                                            <!-- <i class="fa-regular fa-circle-down"></i> &nbsp;<span> 500K </span> -->
                                        </span>
                                        <span class="badge" id="download-btn">
                                            <i class="fa fa-circle-down download-icon"></i>&nbsp;<span> 500K </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- ____banner_img____ -->
        <section class="banner_one_section pb-40 ">
            <div class="show_banner_two banner__area-2">
                <div class="onLayer  pb-30">
                    <div class="container-fluid  px-0 m-0">
                        <dirv class="row px-0 m-0">
                            <div class="col-lg-12 text-center pt-4 px-0">
                                <div class="content_here">
                                    <div class="position-absolute sf-hero__content pt-lg-5">
                                        <span class=" text-white sf-hero__subtitle">BRAND STORY</span><br><br>
                                        <h2 class="sf-hero__title text-white">Launched in 2006, Vanilla Moon is an ode
                                            to <br> quality and
                                            craftsmanship.</h2>
                                        <div class="sf-hero__text ">
                                            <span class="text-white lh-md">Our vision is to provide luxury yet
                                                affordable footwear to modern women
                                                while
                                                paving the way for
                                                sustainability and social consciousness.</span>
                                        </div><br><br>
                                        <a href="#" class="os-btn os-btn-2">Learn More</span></a>
                                    </div>
                                </div>
                        </dirv>
                    </div>
                </div>
            </div>
        </section>
        <div class="box-25">
            <section class="sale__area catelog_lookbook pt-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>Our Clients </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pb-30">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="catelog__slider   owl-carousel mt-10 client_section">
                                <div class="blog__item mb-30">
                                    <figure class="clientInstaFigureContainer">
                                        <div class="position-relative">
                                            <a href="" class="">
                                                <figcaption class="videoViews d-none">
                                                    <i class="fa-solid fa-eye"></i>
                                                    <div class="">2L</div>

                                                </figcaption>
                                                <video id="clientVideo" height="100%" width="100%" muted autoplay loop class="product m-0">
                                                    <source src="https://dev.slickpattern.com/public/uploads/sample.mp4" type="video/mp4">
                                                </video>
                                                <figcaption class="clientInstaFigureCaption">
                                                    <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" alt="" class="img-fluid" style="max-width: 45px;border-radius: 6px;object-fit: contain !important;">
                                                    <div class="clientHeading">
                                                        Maroon
                                                        Blush Embroidered Georgette Suit Set</div>
                                                </figcaption>
                                            </a>
                                        </div>
                                    </figure>
                                </div>
                                <div class="blog__item mb-30">
                                    <figure class="clientInstaFigureContainer">
                                        <div class="position-relative">
                                            <a href="" class="">
                                                <figcaption class="videoViews d-none">
                                                    <i class="fa-solid fa-eye"></i>
                                                    <div class="">2L</div>

                                                </figcaption>
                                                <video id="clientVideo" height="100%" width="100%" muted autoplay loop class="product m-0">
                                                    <source src="https://dev.slickpattern.com/public/uploads/sample.mp4" type="video/mp4">
                                                </video>
                                                <figcaption class="clientInstaFigureCaption">
                                                    <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" alt="" class="img-fluid" style="max-width: 45px;border-radius: 6px;object-fit: contain !important;">
                                                    <div class="clientHeading">
                                                        Maroon
                                                        Blush Embroidered Georgette Suit Set</div>
                                                </figcaption>
                                            </a>
                                        </div>
                                    </figure>
                                </div>
                                <div class="blog__item mb-30">
                                    <figure class="clientInstaFigureContainer">
                                        <div class="position-relative">
                                            <a href="" class="">
                                                <figcaption class="videoViews d-none">
                                                    <i class="fa-solid fa-eye"></i>
                                                    <div class="">2L</div>

                                                </figcaption>
                                                <video id="clientVideo" height="100%" width="100%" muted autoplay loop class="product m-0">
                                                    <source src="https://dev.slickpattern.com/public/uploads/sample.mp4" type="video/mp4">
                                                </video>
                                                <figcaption class="clientInstaFigureCaption">
                                                    <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" alt="" class="img-fluid" style="max-width: 45px;border-radius: 6px;object-fit: contain !important;">
                                                    <div class="clientHeading">
                                                        Maroon
                                                        Blush Embroidered Georgette Suit Set</div>
                                                </figcaption>
                                            </a>
                                        </div>
                                    </figure>
                                </div>
                                <div class="blog__item mb-30">
                                    <figure class="clientInstaFigureContainer">
                                        <div class="position-relative">
                                            <a href="" class="">
                                                <figcaption class="videoViews d-none">
                                                    <i class="fa-solid fa-eye"></i>
                                                    <div class="">2L</div>

                                                </figcaption>
                                                <video id="clientVideo" height="100%" width="100%" muted autoplay loop class="product m-0">
                                                    <source src="https://dev.slickpattern.com/public/uploads/sample.mp4" type="video/mp4">
                                                </video>
                                                <figcaption class="clientInstaFigureCaption">
                                                    <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" alt="" class="img-fluid" style="max-width: 45px;border-radius: 6px;object-fit: contain !important;">
                                                    <div class="clientHeading">
                                                        Maroon
                                                        Blush Embroidered Georgette Suit Set</div>
                                                </figcaption>
                                            </a>
                                        </div>
                                    </figure>
                                </div>
                                <div class="blog__item mb-30">
                                    <figure class="clientInstaFigureContainer">
                                        <div class="position-relative">
                                            <a href="" class="">
                                                <figcaption class="videoViews d-none">
                                                    <i class="fa-solid fa-eye"></i>
                                                    <div class="">2L</div>

                                                </figcaption>
                                                <video id="clientVideo" height="100%" width="100%" muted autoplay loop class="product m-0">
                                                    <source src="https://dev.slickpattern.com/public/uploads/sample.mp4" type="video/mp4">
                                                </video>
                                                <figcaption class="clientInstaFigureCaption">
                                                    <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" alt="" class="img-fluid" style="max-width: 45px;border-radius: 6px;object-fit: contain !important;">
                                                    <div class="clientHeading">
                                                        Maroon
                                                        Blush Embroidered Georgette Suit Set</div>
                                                </figcaption>
                                            </a>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ___our promises_section___ -->
            <section class="pro-content testimonails-content pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>Our Promise</h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-sm-4 col-4 text-center">
                            <figure>
                                <div class=""><img class=" lazy promise-img" src="https://static-00.iconduck.com/assets.00/shopping-cart-icon-512x462-yrde1eu0.png" alt="" style="width: 15%;"></div>
                                <figcaption class="text-capitalize mt-2 fw-bold">A Look you love</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4  col-sm-4 col-4 text-center">
                            <img class="img-fluid  lazy promise-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSM-uNfDYK5mHtJzUcvSlRzW2zYjbzweG4Reklw21tJp_8hj-iJc_pq6iHpRkJZ4FGpU1E&usqp=CAU" alt="" style="width: 15%;">
                            <figcaption class="text-capitalize mt-2 fw-bold">Easy Return</figcaption>

                        </div>
                        <div class="col-md-4  col-sm-4 col-4 text-center">
                            <img class="img-fluid  lazy promise-img" src="https://dev.slickpattern.com/public/images/promise/fast-delivery.png" alt="" style="width: 18%;">
                            <figcaption class="text-capitalize mt-2 fw-bold ">Speedy delivery</figcaption>

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="pro-content testimonails-content stay_connected_section " style="background-color:#8340a1;">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12">
                        <div class="pro-heading-title text-light pt-4 pb-3">
                            <h2 class="text-center ">Stay Connected</h2>
                            <p class="text-center">Follow us on our social media accounts to get even more <br> tasty
                                content. </p>
                            <div class="social_icons pt-3 pb-4">
                                <a href="" class="text-white fs-2"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="" class="text-white fs-2"><i class="fa-brands fa-instagram"></i></a>
                                <a href="" class="text-white fs-2"><i class="fa-brands fa-youtube"></i></a>
                                <a href="" class="text-white fs-2"><i class="fa-brands fa-x-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--footer area end-->
    </main>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>

<!-- 88888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888 -->

<div class="productCard ">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1" style="font-size: 12px; color: orange;">Only few left</p>
                                    <p class="m-0 mt-1" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>

<div class="productCard ">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard ">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard ">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard ">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard ">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard ">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard ">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard ">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard ">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard ">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard ">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>