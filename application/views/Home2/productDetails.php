<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Home </title>
    <?php include('include/cssLinks.php'); ?>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <style>
        h3{
           font-family: var(--heading_font);
           font-size: 28px;
            font-weight: 500;
        }

        body{
            background-color: #FFFFFF;
        }

        body.sidebar-open{
            overflow-y: hidden;
        }

        body.sidebar-open::after {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 10000;
        }
        
        .fs10{
            font-size: 10px;
        }
        .fs12{
            font-size: 12px;
        }
        .fs14{
            font-size: 14px;
        }
        .fs16{
            font-size: 16px;
        }

        main {
            max-width: 1560px;
            margin-inline: auto;
        }

        .addToBagBtn{
            background-color: var(--maincolor);
            color: white;
            padding-block: 8px;
        }

        .addToBagBtn:hover{
            background-color: var(--pinkcolor);
            color: white;
        }

        .wishlistBtn{
            border: 1px solid rgba(0, 0, 0, 0.25);
            color: rgba(0, 0, 0, 0.5);
            padding-block: 8px;
        }

        .sidebar{
            height: 100%;
            width: 50%;
            background-color: white;
            transform: translateX(100%);
            position: fixed;
            top: 0;
            right: 0;
            transition: 0.3s;
            padding-top: 10px;
            z-index: 100000;
        }

        .sidebar .tabButton:hover{
            background-color: var(--pinkcolor);
            color: white;
        }

        a:hover{
            text-decoration: none;
            color: black;
        }

        .saleTimerStrip {
            background-color: rgba(0, 0, 0, 0.02);
            box-shadow: inset 0 0 4px 2px rgb(0, 0, 0, 0.03);
            padding-block: 4px;
            font-weight: 500;
            text-align: center;
            font-weight: 300;
        }

        .saleTimerStrip span {
            color: var(--pinkcolor);
            font-weight: 600;
        }

        .zoom-container {
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: relative;
            cursor: zoom-in;
        }

        .zoom-image {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease; /* Smooth transition */
            transform-origin: center;
        }

        .sizeChartBtn{
            color: var(--pinkcolor);
        }
        
        .swiper {
            width: 100%;
        }

        .colorSwiper{
            height: 100px;
        }

        .colorSwiper a.active img{
            border: 2px solid var(--pinkcolor);
            padding: 2px;
        }
        
        .sizeSwiper{
            height: 55px;
        }

        .royalClubSwiper{
            height: 120px;
        }

        .offerSwiper{
            height: auto;
        }

        .swiper-slide{
            text-align:center;
        }

        .swiper-slide img {
            object-fit: contain;
            height: 100%;
        }

        .swiper-button-next,
        .swiper-button-prev{
            font-size: 16px;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after{
            color: var(--pinkcolor);
            font-size: 12px;
            font-weight: 900;
        }

        .swiper-button-prev.swiper-button-disabled, .swiper-button-next.swiper-button-disabled{
            display: none;
        }

        .sizeBtn {
            background-color: white;
            position: relative;
            border: 2px solid var(--maincolor);
            width: 40px;
            height: 40px;
            outline: none !important;
            border-radius: 12px;
            margin-top: 0.5rem;
            transition: all 200ms ease;
        }

        .sizeBtn:focus {
            background-color: var(--pinkcolor);
            color: white;
            border-color: var(--pinkcolor);
        }

        .sizeBtn:hover {
            background-color: var(--pinkcolor);
            color: white;
            border-color: var(--pinkcolor);
        }

        .sizeBtn.outOfStock {
            position: relative;
            background-color: rgb(0, 0, 0, 0.35);
            pointer-events: none;
            cursor: not-allowed;
        }

        .sizeBtn.recommended {
            box-shadow: -2px 4px 2px 0px rgba(0, 0, 0, 0.2);
            animation: hu__hu__ infinite 2s ease-in-out
        }

        @keyframes hu__hu__ {
            50% { transform: translateY(-8px) }
        }

        .sizeBtn.stockLabel::after {
            content: attr(data-stock);
            width: 100%;
            position: absolute;
            bottom: -4px;
            line-height: 1.25;
            border-radius: 4px;
            box-shadow: 0px 1px 2px 1px rgba(0, 0, 0, 0.25);
            left: 50%;
            transform: translateX(-50%);
            background-color: var(--pinkcolor);
            color: white;
            font-size: 10px;
            z-index: 2;
        }

        .outOfStock::after {
            content: "";
            position: absolute;
            top: -4px;
            left: 50%;
            transform: translateX(-50%) rotate(45deg);
            width: 1.5px;
            height: 44px;
            background-color: var(--maincolor);
            z-index: 2;
            border-radius: 12px;
        }

        a.toolTip {
            position: relative;
            font-size: 12px;
            z-index: 999;
        }

        a.toolTip::after {
            content: attr(tip);
            background-color: #FCFCFC;
            color: black;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14;
            line-height: 1.25em;
            width: 160px;
            padding: 5px 10px;
            border-radius: 6px;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, .65);
            position: absolute;
            top: -76px;
            right: -35px;
            display: none;
        }

        a.toolTip:before {
            position: absolute;
            z-index: 999;
            content: "";
            top: 15px;
            left: 0px;
            border-right: 7px transparent solid;
            border-left: 7px transparent solid;
            display: none;
        }

        a.toolTip:hover {
            position: relative;
        }

        a.toolTip:hover:after {
            display: block;
        }

        a.toolTip:hover:before {
            display: block;
        }

        .coupon {
            width: 460px;
            background-color: #D9AFD9;
            background-image: linear-gradient(45deg, #D9AFD9 0%, #97D9E1 100%);
            border-radius: 8px;
            padding: 16px;
            color: white;
            position: relative;
        }

        .couponList{
            list-style: disc;
            list-style-type: "- ";
        }

        .promoCode {
            border: 1px dashed white;
            color: white;
            cursor: auto !important;
        }

        .promoCode:hover {
            color: white;
        }

        .circle1 {
            background-color: white;
            height: 20px;
            width: 20px;
            border-radius: 100vh;
            position: absolute;
            top: 70px;
            left: -6px;
        }

        .circle2 {
            background-color: white;
            height: 20px;
            width: 20px;
            border-radius: 100vh;
            position: absolute;
            top: 70px;
            right: -6px;
        }
    </style>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main>
        <div class="sidebar">
            <div class="px-5">
                <div class="text-right">
                    <button class="btn closeSidebarBtn"><i class="fa fa-xmark"></i></button>
                </div>
                <div class="d-flex gap-2 mt-4">
                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" style="height: 200px;" alt="">
                    <div class="mt-2">
                        <p class="fs16 text-dark font-weight-bold m-0">Product Name</p>
                        <p class="fs12 text-secondary m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sint.</p>
                        <div>
                            <span class="font-weight-bold text-dark" style="font-size: 20px;">₹1,998</span>
                            <span class="text-secondary border-right pr-2" style="font-size: 16px; text-decoration: line-through;">₹2,998</span>
                            <span class="text-success font-weight-bold">50% OFF</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="pt-4 d-flex justify-content-center">
                        <div class="btn-group border rounded-pill overflow-hidden" role="group" aria-label="Basic example">
                            <button type="button" class="btn fs14 tabButton">SIZE CHART</button>
                            <button type="button" class="btn fs14 tabButton">HOW TO MEASURE</button>
                        </div>
                    </div>
                    <div class="mt-3">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="position-fixed row bg-white d-flex" style="bottom: 12px;">
                    <button class="btn fs14 addToBagBtn" style="width: 220px;"><i class=" bx bx-shopping-bag"></i> ADD TO BAG</button>
                    <button class="btn fs14 wishlistBtn ml-2" style="width: 220px;"><i class="fa-regular fa-heart"></i> WISHLIST</button>
                </div>
            </div>
        </div>
        <section class="saleTimerStripContainer border">
            <div class="saleTimerStrip">
                <p class="m-0 text-secondary">Sale ends
                    in- <span>10</span>days:<span>10</span>hrs:<span>10</span>min:<span>10</span>sec
                </p>
            </div>
        </section>
        <section class="text-dark">
            <div class="px-3 my-2">
                <ul class="d-flex" style="gap: 4px;font-size: 14px;">
                    <li><a href="#" class="text-secondary">Home /</a></li>
                    <li class="font-weight-bold">Products</li>
                </ul>
            </div>
        </section>
        <section>
            <div class="w-100 row container-fluid px-4 my-2">
                <div class="col-7">
                    <div class="row">
                        <div class="col-6 p-1 zoom-container">
                            <img class="zoom-image" src="<?= base_url('assets/new_website/img/img1.png')?>" alt="">
                        </div>
                        <div class="col-6 p-1 zoom-container">
                            <img class="zoom-image" src="<?= base_url('assets/new_website/img/img1.png')?>" alt="">
                        </div>
                        <div class="col-6 p-1 zoom-container">
                            <img class="zoom-image" src="<?= base_url('assets/new_website/img/img1.png')?>" alt="">
                        </div>
                        <div class="col-6 p-1 zoom-container">
                            <img class="zoom-image" src="<?= base_url('assets/new_website/img/img1.png')?>" alt="">
                        </div>
                        <div class="col-6 p-1 zoom-container">
                            <img class="zoom-image" src="<?= base_url('assets/new_website/img/img1.png')?>" alt="">
                        </div>
                        <div class="col-6 p-1 zoom-container">
                            <img class="zoom-image" src="<?= base_url('assets/new_website/img/img1.png')?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-5 py-2">
                    <div>
                        <h3 class="m-0 text-dark">Jack & Jones</h3>
                        <p class="fs12 text-secondary mb-1">Men Grey Slim Fit Light Fade Stretchable Jeans</p>
                        <div>
                            <a href="#reviews" class="border rounded-sm text-dark p-1 fs12 font-weight-bold">
                                <span>3.5</span>
                                <i class="fa-solid fa-star" style="color: #72BFBC;"></i>
                                <span class="border-left pl-2">71 Ratings</span>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <span class="font-weight-bold text-dark" style="font-size: 30px;">₹1,998</span>
                            <span class="text-secondary border-right pr-2" style="font-size: 26px; text-decoration: line-through;">₹2,998</span>
                            <span class="text-success font-weight-bold">50% OFF</span>
                        </div>
                        <span class="text-success font-weight-bold fs12">inclusive of all taxes</span>
                    </div>
                    <div class="my-3">
                        <p class="text-dark font-weight-bold mb-1">SELECT COLOR</p>
                        <div class="colorSwiperContainer rounded-lg">
                            <div class="d-flex justify-content-between">
                                <span>Color: <span class="font-weight-bold text-dark">Yellow</span></span>
                                <span>Available: <span class="font-weight-bold text-dark">2</span></span>
                            </div>
                            <div class="swiper colorSwiper my-1 px-3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href=""><img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="" class="active"><img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href=""><img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href=""><img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href=""><img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href=""><img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3">
                        <p class="text-dark font-weight-bold mb-1">SELECT SIZE</p>
                        <p class="fs12 border rounded-lg text-center text-dark m-0 shadow-sm">SIZE <span class="font-weight-bold">XL</span> RECOMMENDED</p>
                        <div class="sizeSwiperContainer rounded-lg">
                            <div class="d-flex justify-content-between py-2">
                                <span>Size: <span class="font-weight-bold text-dark">S</span></span>
                                <a href="#" class="font-weight-bold sizeChartBtn">Size Chart</a>
                            </div>
                            <div class="swiper sizeSwiper px-4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <button class="sizeBtn stockLabel" data-stock="2 Left">S</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button class="sizeBtn outOfStock">M</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button class="sizeBtn">L</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button class="sizeBtn recommended">XL</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button class="sizeBtn">XXL</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button class="sizeBtn">XXXL</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button class="sizeBtn">XS</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button class="sizeBtn">XS</button>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <p class="fs12 pl-2 mt-1">Tag past purchases & get right size recommendation</p>
                        </div>
                    </div>
                    <hr class="m-0">
                    <div class="border rounded-lg my-3 p-3">
                        <div class="d-flex align-items-center">
                            <img src="<?= base_url('assets/new_website/img/crown2.png')?>" style="width: 48px;" alt="">
                            <div class="d-flex flex-column flex-grow-1 ml-2" style="line-height: 1.25">
                                <span>Save <span class="text-success font-weight-bold">₹29.99</span> with Club</span>
                                <span>Club Price: <span class="text-dark font-weight-bold">₹502</span></span>
                            </div>
                            <button class="btn fs14" style="color: var(--pinkcolor);">Join now <i class="fa-solid fa-chevron-right"></i></button>
                        </div>
                        <div class="mt-2 p-2 rounded-lg d-flex justify-content-center" style="border: 1px dashed black;gap: 4px;">
                            <img src="<?= base_url('assets/new_website/img/rupee.png')?>" style="width: 24px;" alt="">
                            <span class="fs12">Buy & Earn Royal Cash upto <sapn class="font-weight-bold text-dark">₹5</sapn></span>
                            <a href="#" class="toolTip text-dark"
                                tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                <i class="fa-solid fa-circle-info text-secondary"></i>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex my-3">
                        <button class="btn fs14 addToBagBtn flex-grow-1"><i class=" bx bx-shopping-bag"></i> ADD TO BAG</button>
                        <button class="btn fs14 wishlistBtn flex-grow-1 ml-1"><i class="fa-regular fa-heart"></i> WISHLIST</button>
                    </div>
                    <hr class="m-0">
                    <div class="my-3">
                        <p class="text-dark font-weight-bold mb-1">OFFERS & DISCOUNTS</p>
                        <div class="swiper offerSwiper px-4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="d-flex justify-content-center">
                                        <div class="coupon">
                                            <div class="circle1"></div>
                                            <div class="circle2"></div>
                                            <div class="d-flex justify-content-between">
                                                <p class="m-0 fs14 text-left" style="width: 70%;">Lorem ipsum dolor sit amet consectetur adipisicing elit?</p>
                                                <button class="float-right btn p-0 m-0 font-weight-bold text-light" style="font-size: 12px; white-space: nowrap;" data-toggle="collapse" data-target="#couponOne"
                                                aria-expanded="true" aria-controls="couponOne">See more</button>
                                            </div>
                                            <hr style="border: 1px dashed white;" />
                                            <div class="row">
                                                <div class="col-8 btn-group w-100 py-1" role="group" aria-label="Basic example">
                                                    <p class="btn promoCode m-0">CART25</p>
                                                    <button type="button" class="btn bg-light font-weight-bold"><i class="fa-solid fa-copy"></i> COPY</button>
                                                </div>
                                                <button class="btn p-1 col-2 text-white"><i class="fa-solid fa-share"></i> Share</button>
                                            </div>
                                            <div id="couponOne" class="collapse" aria-labelledby="headingOne" data-parent="">
                                                <div class="card-body p-0 px-3 pb-2 mt-2"
                                                    style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                                    <p class="m-0 p-0 text-dark text-center font-weight-bold" style="font-size: 12px">TERMS & CONDITIONS</p>
                                                    <ul class="couponList text-left" >
                                                        <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</li>
                                                        <li>Lorem ipsum dolor sit amet Lorem, ipsum.</li>
                                                        <li>Lorem ipsum dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex justify-content-center">
                                        <div class="coupon">
                                            <div class="circle1"></div>
                                            <div class="circle2"></div>
                                            <div class="d-flex justify-content-between">
                                                <p class="m-0 fs14 text-left" style="width: 70%;">Lorem ipsum dolor sit amet consectetur adipisicing elit?</p>
                                                <button class="float-right btn p-0 m-0 font-weight-bold text-light" style="font-size: 12px; white-space: nowrap;" data-toggle="collapse" data-target="#couponTwo"
                                                aria-expanded="true" aria-controls="couponTwo">See more</button>
                                            </div>
                                            <hr style="border: 1px dashed white;" />
                                            <div class="row">
                                                <div class="col-8 btn-group w-100 py-1" role="group" aria-label="Basic example">
                                                    <p class="btn promoCode m-0">CART25</p>
                                                    <button type="button" class="btn bg-light font-weight-bold"><i class="fa-solid fa-copy"></i> COPY</button>
                                                </div>
                                                <button class="btn p-1 col-2 text-white"><i class="fa-solid fa-share"></i> Share</button>
                                            </div>
                                            <div id="couponTwo" class="collapse" aria-labelledby="headingTwo" data-parent="">
                                                <div class="card-body p-0 px-3 pb-2 mt-2"
                                                    style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                                    <p class="m-0 p-0 text-dark text-center font-weight-bold" style="font-size: 12px">TERMS & CONDITIONS</p>
                                                    <ul class="couponList text-left" >
                                                        <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</li>
                                                        <li>Lorem ipsum dolor sit amet Lorem, ipsum.</li>
                                                        <li>Lorem ipsum dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex justify-content-center">
                                        <div class="coupon">
                                            <div class="circle1"></div>
                                            <div class="circle2"></div>
                                            <div class="d-flex justify-content-between">
                                                <p class="m-0 fs14 text-left" style="width: 70%;">Lorem ipsum dolor sit amet consectetur adipisicing elit?</p>
                                                <button class="float-right btn p-0 m-0 font-weight-bold text-light" style="font-size: 12px; white-space: nowrap;" data-toggle="collapse" data-target="#couponOne"
                                                aria-expanded="true" aria-controls="couponOne">See more</button>
                                            </div>
                                            <hr style="border: 1px dashed white;" />
                                            <div class="row">
                                                <div class="col-8 btn-group w-100 py-1" role="group" aria-label="Basic example">
                                                    <p class="btn promoCode m-0">CART25</p>
                                                    <button type="button" class="btn bg-light font-weight-bold"><i class="fa-solid fa-copy"></i> COPY</button>
                                                </div>
                                                <button class="btn p-1 col-2 text-white"><i class="fa-solid fa-share"></i> Share</button>
                                            </div>
                                            <div id="couponOne" class="collapse" aria-labelledby="headingOne" data-parent="">
                                                <div class="card-body p-0 px-3 pb-2 mt-2"
                                                    style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                                    <p class="m-0 p-0 text-dark text-center font-weight-bold" style="font-size: 12px">TERMS & CONDITIONS</p>
                                                    <ul class="couponList text-left" >
                                                        <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</li>
                                                        <li>Lorem ipsum dolor sit amet Lorem, ipsum.</li>
                                                        <li>Lorem ipsum dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <a href="#" class="my-3 rounded-lg p-3 d-flex align-items-center" style="background-color: rgb(0,128,0,0.1); border:1px solid rgb(0,128,0,0.1);">
                        <img src="<?= base_url('assets/new_website/img/mobileWhatsapp.png')?>" style="width: 40px;" alt="">
                        <div class="d-flex flex-column flex-grow-1 pl-2" style="line-height: 1.25">
                            <span class="fs16 font-weight-bold">Discover Your Perfect Look!</span>
                            <span class="fs12">Chat with Our Personal Fashion Stylist Today</span>
                        </div>
                        <span class="float-end"><i class="fa-solid fa-chevron-right"></i></span>
                    </a>
                    <div class="d-flex justify-content-around align-items-center py-2">
                        <div class="text-center">
                            <img src="<?= base_url('assets/new_website/img/giftbox.png')?>" style="width: 28px;" alt="">
                            <p class="m-0 mt-1 fs12">Gift Wrap</p>
                        </div>
                        <div class="text-center">
                            <img src="<?= base_url('assets/new_website/img/rupee-sign.png')?>" style="width: 28px;" alt="">
                            <p class="m-0 mt-1 fs12">POD Ready</p>
                        </div>
                        <div class="text-center">
                            <img src="<?= base_url('assets/new_website/img/back.png')?>" style="width: 28px;" alt="">
                            <p class="m-0 mt-1 fs12">Easy Returns</p>
                        </div>
                        <div class="text-center">
                            <img src="<?= base_url('assets/new_website/img/crown2.png')?>" style="width: 28px;" alt="">
                            <p class="m-0 mt-1 fs12" style="width: 80px; line-height: 1.25">Royal Club Cash</p>
                        </div>
                    </div>
                    <div class="my-3">
                        <p class="m-0 font-weight-bold text-dark">ROYAL  CLUB EXCLUSIVES</p>
                        <div class="swiper royalClubSwiper my-2 px-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/club1.jpg')?>" style="width: 60px;" alt="">
                                        <p class="m-0 mt-2 fs12" style="line-height: 1.25">Club Cash Rewards Upto ₹8</p>
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-circle-question text-secondary"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/club1.jpg')?>" style="width: 60px;" alt="">
                                        <p class="m-0 mt-2 fs12" style="line-height: 1.25">Exclusive Offers & Discounts</p>
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-circle-question text-secondary"></i>
                                        </a>
                                    </div> 
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/club1.jpg')?>" style="width: 60px;" alt="">
                                        <p class="m-0 mt-2 fs12" style="line-height: 1.25">Reduced Prices on Products</p>
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-circle-question text-secondary"></i>
                                        </a>
                                    </div> 
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/club1.jpg')?>" style="width: 60px;" alt="">
                                        <p class="m-0 mt-2 fs12" style="line-height: 1.25">Lower Cost Barrier</p>
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-circle-question text-secondary"></i>
                                        </a>
                                    </div> 
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <hr class="m-0">
                    <div class="my-3">
                        <p class="m-0 font-weight-bold text-dark">COMPLETE THE LOOK</p>
                        <div class="swiper royalClubSwiper my-2 px-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/club1.jpg')?>" style="width: 60px;" alt="">
                                        <p class="m-0 mt-2 fs12" style="line-height: 1.25">Club Cash Rewards Upto ₹8</p>
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-circle-question text-secondary"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/club1.jpg')?>" style="width: 60px;" alt="">
                                        <p class="m-0 mt-2 fs12" style="line-height: 1.25">Exclusive Offers & Discounts</p>
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-circle-question text-secondary"></i>
                                        </a>
                                    </div> 
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/club1.jpg')?>" style="width: 60px;" alt="">
                                        <p class="m-0 mt-2 fs12" style="line-height: 1.25">Reduced Prices on Products</p>
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-circle-question text-secondary"></i>
                                        </a>
                                    </div> 
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/club1.jpg')?>" style="width: 60px;" alt="">
                                        <p class="m-0 mt-2 fs12" style="line-height: 1.25">Lower Cost Barrier</p>
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-circle-question text-secondary"></i>
                                        </a>
                                    </div> 
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pro-content testimonails-content stay_connected_section " style="background-color:#8340a1;">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12">
                        <div class="pro-heading-title text-light pt-4 pb-3">
                            <h2 class="text-center m-0 font-weight-bold">Stay Connected</h2>
                            <p class="text-center fs12">Follow us on our social media accounts to get even more tasty
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
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper1 = new Swiper('.colorSwiper', {
                slidesPerView: 5,
                spaceBetween: 0,
                autoplay:false,
                loop: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
        });

        var swiper2 = new Swiper('.sizeSwiper', {
                slidesPerView: 8,
                spaceBetween: 0,
                autoplay:false,
                loop: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
        });

        var swiper3 = new Swiper('.offerSwiper', {
                slidesPerView: 1,
                spaceBetween: 0,
                autoplay:false,
                loop: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
        });

        var swiper4 = new Swiper('.royalClubSwiper', {
                slidesPerView: 4,
                spaceBetween: 0,
                autoplay:false,
                loop: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
        });

        document.querySelectorAll('.zoom-container').forEach(container => {
            const zoomImage = container.querySelector('.zoom-image');
            
            container.addEventListener('mousemove', (e) => {
                const { left, top, width, height } = container.getBoundingClientRect();
                const x = ((e.clientX - left) / width) * 100;
                const y = ((e.clientY - top) / height) * 100;
                zoomImage.style.transformOrigin = `${x}% ${y}%`;
                zoomImage.style.transform = 'scale(2)'; // Zoom level
            });
            
            container.addEventListener('mouseleave', () => {
                zoomImage.style.transform = 'scale(1)'; // Reset zoom when mouse leaves
            });
        });

        const sidebar = document.querySelector(".sidebar");
        const closeBtn = document.querySelector(".closeSidebarBtn");
        const sizeChartBtn = document.querySelector(".sizeChartBtn");

        sizeChartBtn.addEventListener("click", (e) => {
            e.preventDefault();
            sidebar.style.transform = "translateX(0)";
            document.body.classList.add("sidebar-open");
        });

        closeBtn.addEventListener("click", () => {
            sidebar.style.transform = "translateX(100%)";
            document.body.classList.remove("sidebar-open");
        });



        
    </script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>