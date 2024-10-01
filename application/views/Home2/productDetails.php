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

        *{
            box-sizing: border-box;
        }
        
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

        /* .productHeroSection {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        } */

        .productImageContainer {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
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

        .lookSwiper{
            height: 180px;
        }

        .lookSwiperItem{            
            transition: all 200ms ease;
        }

        .lookSwiperItem:hover{
            text-decoration: underline;
        }

        .lookSwiperItem:hover img{
            filter: brightness(125%);
        }

        .offerSwiper{
            height: auto;
        }

        .productImageSwiper{
            height: 320px;
        }

        .similarProductsSwiper{
            height: 380px;
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
            color: white;
            background-color: var(--maincolor);
            padding: 8px 10px;
            border-radius: 100vh;
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

        .pincodeInput {
            border:0;
            outline:0;
        }

        .pincodeInput::placeholder {
            color: rgb(150, 150, 150);
        }

        .pincodeBtn {
            background-color: transparent;
            border:0;
            outline:0;
            font-size: 14px;
            font-weight: 600;
            color: var(--pinkcolor);
        }

        dialog {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            max-width: 400px;
            min-width: 360px;
            border-radius: 4px;
            border: 0;
            box-shadow: 0 5px 30px 0 #000;
            animation: fadeIn 300ms ease both;
        }

        dialog::backdrop {
            animation: fadeIn 300ms ease both;
            background: rgba(0, 0, 0, 0.5);
            z-index: 2;
        }

        .similarProductsContainer {
            width: 85%;
            margin-inline: auto;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 8px;
            padding: 16px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .similarBtn button {
            position: absolute;
            bottom: 16px;
            right: 16px;
            padding: 4px 6px;
            outline: none;
            border: none;
            border-radius: 100vh;
        }

        .similarBtn button:hover .similarText {
            display: inline;
        }

        .similarBtn button img {
            width: 20px;
            height: 20px;
        }

        .similarText {
            display: none;
            margin: 0;
            padding: 0;
            font-size: 12px;
            font-weight: 600;
            color: var(--color2);
            margin-left: 4px;
        }

        .shareBtn, .likeBtn {
            background-color: var(--maincolor);
            color: white;
            padding: 8px 12px;
            border-radius: 100vh;
        }

        .shareBtn:hover, .likeBtn:hover {
            background-color: var(--pinkcolor);
            color: white;
        }

        .modalBtnContainer{
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }

        .modalBtn{
            position: relative;
            overflow: hidden;
            border-radius: 0!important;
        }

        .modalBtn img{
            transition: all 2s ease-in-out;
        }

        .modalBtn:hover img{
            scale: 1.2;
        }

        .modalBtnText{
            background-color: rgba(0, 0, 0, 0.4);
            position: absolute;
            bottom: 0;
            color: white;
            font-weight: 500;
            padding-block: 16px;
        }

        .extraReviewImg{
            padding: 2px 4px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        @media (width < 1100px) {
            .similarProductsContainer{
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (width < 900px) {
            .similarProductsContainer{
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (width < 568px) {

            dialog{
                top:100%;
                left:0;
                transform: translateY(-100%);
                min-width: 100%;
                border-radius: 0;
            }
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
        <dialog class="reviewDialog" id="dialog">
            <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
                <p class="m-0 font-weight-bold">What customer say about this product?</p>
                <button id="closeReviewBtn" type="button" aria-label="close" class="btn p-0">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="p-3">
                <p class="m-0 text-secondary">Fit</p>
                <div>
                    <div class="d-flex align-items-center">
                        <div class="progress flex-grow-1" style="height: 6px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="ml-2">Tight (40%)</span>                    
                    </div>
                </div>
                <div>
                    <div class="d-flex align-items-center">
                        <div class="progress flex-grow-1" style="height: 6px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="ml-2">Tight (40%)</span>                    
                    </div>
                </div>
                <div>
                    <div class="d-flex align-items-center">
                        <div class="progress flex-grow-1" style="height: 6px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="ml-2">Tight (40%)</span>                    
                    </div>
                </div>
                <p class="m-0 text-secondary">Stretch</p>
                <div>
                    <div class="d-flex align-items-center">
                        <div class="progress flex-grow-1" style="height: 6px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="ml-2">Tight (40%)</span>                    
                    </div>
                </div>
                <div>
                    <div class="d-flex align-items-center">
                        <div class="progress flex-grow-1" style="height: 6px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="ml-2">Tight (40%)</span>                    
                    </div>
                </div>
                <div>
                    <div class="d-flex align-items-center">
                        <div class="progress flex-grow-1" style="height: 6px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="ml-2">Tight (40%)</span>                    
                    </div>
                </div>
            </div>
        </dialog>
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
            <div class="productHeroSection row m-0">
                <div class="col-lg-7 col-md-6 col-12">
                    <div class="d-lg-block d-md-block d-none">
                        <div class="productImageContainer">
                            <div class="zoom-container">
                                <img class="zoom-image" src="<?= base_url('assets/new_website/img/img1.png')?>" alt="">
                            </div>
                            <div class="zoom-container position-relative">
                                <img class="zoom-image" src="<?= base_url('assets/new_website/img/img1.png')?>" alt="">
                                <div class="similarBtn">
                                    <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                            class="similarText">Similar
                                            Products</span></button>
                                </div>
                            </div>
                            <div class="zoom-container">
                                <img class="zoom-image" src="<?= base_url('assets/new_website/img/img1.png')?>" alt="">
                            </div>
                            <div class="zoom-container">
                                <img class="zoom-image" src="<?= base_url('assets/new_website/img/img1.png')?>" alt="">
                            </div>
                            <div class="zoom-container">
                                <img class="zoom-image" src="<?= base_url('assets/new_website/img/img1.png')?>" alt="">
                            </div>
                            <div class="zoom-container">
                                <img class="zoom-image" src="<?= base_url('assets/new_website/img/img1.png')?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-none d-md-none d-block swiper productImageSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt="">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="my-2 d-flex justify-content-between align-items-center">
                        <div>
                            <button class="btn p-0 fs14 font-weight-bold">Modal insight</button>
                            <a href="#similarProducts" class="btn p-0 fs14 font-weight-bold"><img src="<?= base_url('assets/new_website/img/cards.png') ?>" style="width: 20px;" alt=""> View Similar</a>
                        </div>
                        <div class="d-lg-block d-md-block d-none">
                            <button class="btn fs14 font-weight-bold likeBtn"><img src="<?= base_url('assets/new_website/img/love-icon.png') ?>" style="width: 20px;" alt=""> Like</button>
                            <button class="btn fs14 font-weight-bold shareBtn"><img src="<?= base_url('assets/new_website/img/share.png') ?>" style="width: 20px;" alt=""> Share</button>
                        </div>
                    </div>
                    <div class="my-3 d-lg-block d-md-block d-none">
                        <p class="m-0 mb-1 text-dark font-weight-bold">UNLOCKING GLAMOUR</p>
                        <div class="modalBtnContainer">
                            <button class="btn p-0 modalBtn">
                                <img src="https://i1.adis.ws/i/canon/pro-fashion-photography-technique-tips-1-new_e6eef04e6fe9434e9d9427a0220ef27c.jpeg" alt="">
                                <div class="w-100 modalBtnText">
                                    <span>CELEBRITY BEAUTY SECRETS</span>
                                </div>
                            </button>
                            <button class="btn p-0 modalBtn">
                                <img src="https://i1.adis.ws/i/canon/pro-fashion-photography-technique-tips-1-new_e6eef04e6fe9434e9d9427a0220ef27c.jpeg" alt="">
                                <div class="w-100 modalBtnText">
                                    <span>FASHION PAIRING</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-12">
                    <div>
                        <h3 class="m-0 text-dark">Jack & Jones</h3>
                        <p class="fs12 text-secondary m-0" style="line-height: 1;">Men Grey Slim Fit Light Fade Stretchable Jeans</p>
                        <p class="m-0 mb-2 fs12">Product Code: <span class="font-weight-bold text-dark">#123456789</span></p>
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
                                                    <button type="button" class="btn bg-light font-weight-bold text-nowrap"><i class="fa-solid fa-copy"></i> COPY</button>
                                                </div>
                                                <button class="btn p-1 col-2 text-white text-nowrap"><i class="fa-solid fa-share"></i> Share</button>
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
                                                    <button type="button" class="btn bg-light font-weight-bold text-nowrap"><i class="fa-solid fa-copy"></i> COPY</button>
                                                </div>
                                                <button class="btn p-1 col-2 text-white text-nowrap"><i class="fa-solid fa-share"></i> Share</button>
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
                                                    <button type="button" class="btn bg-light font-weight-bold text-nowrap"><i class="fa-solid fa-copy"></i> COPY</button>
                                                </div>
                                                <button class="btn p-1 col-2 text-white text-nowrap"><i class="fa-solid fa-share"></i> Share</button>
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
                        <div class="swiper lookSwiper my-2 px-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" class="text-dark lookSwiperItem">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg')?>" style="height: 120px;" alt="">
                                        <p class="m-0 mt-2 font-weight-bold" style="line-height: 1.25">Shirt</p>
                                        <p class="m-0 mt-1 fs12" style="line-height: 1.25">₹1,998</p>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="text-dark lookSwiperItem">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg')?>" style="height: 120px;" alt="">
                                        <p class="m-0 mt-2 font-weight-bold" style="line-height: 1.25">Shirt</p>
                                        <p class="m-0 mt-1 fs12" style="line-height: 1.25">₹1,998</p>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="text-dark lookSwiperItem">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg')?>" style="height: 120px;" alt="">
                                        <p class="m-0 mt-2 font-weight-bold" style="line-height: 1.25">Shirt</p>
                                        <p class="m-0 mt-1 fs12" style="line-height: 1.25">₹1,998</p>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="text-dark lookSwiperItem">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg')?>" style="height: 120px;" alt="">
                                        <p class="m-0 mt-2 font-weight-bold" style="line-height: 1.25">Shirt</p>
                                        <p class="m-0 mt-1 fs12" style="line-height: 1.25">₹1,998</p>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <hr class="m-0">
                    <div class="my-3">
                        <div class="d-flex flex-column border-bottom py-2 mx-2">
                            <div id="headingOne">
                                <button class="btn btn-block text-left font-weight-bold text-dark align-items-center fs14" type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <img src="<?=base_url('assets/new_website/img/product-details.png')?>" class="mr-1" style="width: 20px; margin-top: -2px;"
                                        alt="">
                                    <span class="font-weight-bold">PRODUCT DETAILS</span>
                                    <i class="fa-solid fa-caret-down float-right mt-1"></i>
                                </button>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="">
                                <div class="card-body p-0 px-3 pb-2 mt-2">
                                    <div>
                                        <p class="text-dark font-weight-bold mb-1">Fabric:</p>
                                        <ul style="list-style-type: '-'; padding-left: 0;">
                                            <li>
                                                <div>
                                                    <span class="font-weight-bold">Material: </span>
                                                    <span>100% Organic Cotton</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="font-weight-bold">Weight: </span>
                                                    <span>180 GSM (grams per square meter) for a comfortable, medium-weight feel</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="font-weight-bold">Weave: </span>
                                                    <span>Je₹ey knit for a soft and breathable texture</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column border-bottom py-2 mx-2">
                            <div id="headingTwo">
                                <button class="btn btn-block text-left font-weight-bold text-dark align-items-center fs14" type="button" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="<?=base_url('assets/new_website/img/dressBoth.png')?>" class="mr-1" style="width: 20px; margin-top: -2px;"
                                        alt="">
                                    <span class="font-weight-bold">GET TO KNOW YOUR PRODUCT</span>
                                    <i class="fa-solid fa-caret-down float-right mt-1"></i>
                                </button>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="">
                                <div class="card-body p-0 px-3 pb-2 mt-2">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, a ad! Modi praesentium facere dignissimos deleniti illo cum sint necessitatibus illum laborum quo vero totam blanditiis cumque molestias possimus, animi corrupti alias, pariatur nisi sapiente at impedit nostrum! Quo, hic minus soluta consequuntur, ipsum nulla eaque beatae nesciunt placeat nam aspernatur atque excepturi commodi distinctio incidunt reiciendis laborum voluptate voluptates.</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column border-bottom py-2 mx-2">
                            <div id="headingThree">
                                <button class="btn btn-block text-left font-weight-bold text-dark align-items-center fs14" type="button" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="true" aria-controls="collapseThree">
                                    <img src="<?=base_url('assets/new_website/img/return2.png')?>" class="mr-1" style="width: 20px; margin-top: -2px;"
                                        alt="">
                                    <span class="font-weight-bold">RETURN & EXCHANGE GUIDELINES</span>
                                    <i class="fa-solid fa-caret-down float-right mt-1"></i>
                                </button>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="">
                                <div class="card-body p-0 px-3 pb-2 mt-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores impedit necessitatibus qui quaerat commodi ipsa harum sequi, at aliquid quidem iure ad quasi tempore alias amet est perferendis facere unde vel! Quos perspiciatis est quas! Sint consequatur non eius rem sequi soluta? Quis vero sint a eveniet incidunt, praesentium fugiat?</p>
                                    <div>
                                        <p class="text-dark font-weight-bold mb-1">Fabric:</p>
                                        <ul style="list-style-type: '-'; padding-left: 0;">
                                            <li>
                                                <div>
                                                    <span class="font-weight-bold">Material: </span>
                                                    <span>100% Organic Cotton</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="font-weight-bold">Weight: </span>
                                                    <span>180 GSM (grams per square meter) for a comfortable, medium-weight feel</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="font-weight-bold">Weave: </span>
                                                    <span>Je₹ey knit for a soft and breathable texture</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="m-0">
                    <div class="my-3">
                        <p class="m-0 mb-3 font-weight-bold text-dark">SELECT DELIVERY LOCATION</p>
                        <div class="border rounded-lg p-2 d-inline">
                            <input type="text" placeholder="Enter coupon code" class="pincodeInput">
                            <button class="pincodeBtn">CHECK</button>
                        </div>
                        <p class="fs12 m-0 mt-1">Enter your PIN code to check estimated delivery time and Pay on Delivery availability.</p>
                    </div>
                    <hr class="m-0">
                    <div class="my-3">
                        <p class="m-0 mb-3 font-weight-bold text-dark">RATINGS & REVIEWS</p>
                        <div class="d-flex border rounded-lg py-2">
                            <div class="border-right px-4 d-flex align-items-center">
                                <p class="m-0" style="font-size: 22px;">4.0 </p>
                                <img src="<?=base_url('assets/new_website/img/star.png')?>" class="ml-1" style="width: 18px;" alt="">
                            </div>
                            <div class="text-center px-4">
                                <p class="m-0 fs16 font-weight-bold" style="line-height: 1;">61</p>
                                <span>Ratings</span>
                            </div>
                            <div class="text-center border-left px-4">
                                <p class="m-0 fs16 font-weight-bold" style="line-height: 1;">6</p>
                                <span>Reviews</span>
                            </div>
                        </div>
                        <div>
                            <p class="m-0 my-2 font-weight-bold text-dark">WHAT CUSTOMER SAID <i class="fa-solid fa-star-half"></i></p>
                            <div style="line-height:1;">
                                <p class="m-0 text-secondary">Fit</p>
                                <div class="d-flex align-items-center">
                                    <div class="progress flex-grow-1" style="height: 6px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ml-2">Tight (40%)</span>
                                </div>
                            </div>
                            <div style="line-height:1;">
                                <p class="m-0 text-secondary">Stretch</p>
                                <div class="d-flex align-items-center">
                                    <div class="progress flex-grow-1" style="height: 6px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ml-2">Medium (80%)</span>
                                </div>
                            </div>
                            <button class="btn p-0 fs14 font-weight-bold reviewBtn" style="color:var(--pinkcolor);">View more...</button>
                        </div>
                        <div>
                            <p class="m-0 my-2 font-weight-bold text-dark">BUYER PHOTOS</p>
                            <div>
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <a href="#" class="position-relative extraReviewImgCont">
                                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                    <div class="position-absolute extraReviewImg">
                                        <span class="fs16">+5</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <hr class="my-3">
                        <div>
                            <p class="m-0 my-2 font-weight-bold text-dark">MOST HELPFULL REVIEW</p>
                            <div class="border-bottom py-2">
                                <div class="mb-1">
                                    <span class="text-light bg-success p-1 rounded-lg">4 <i class="fa-solid fa-star fs12"></i></span>
                                </div>
                                <p class="m-0 text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum temporibus exercitationem deserunt eos inventore laborum?</p>
                                <div class="mt-2 text-secondary d-flex justify-content-between">
                                    <span>John Doe | 1 day ago</span>
                                    <div>
                                        <button class="btn p-0 text-secondary"><i class="fa-regular fa-thumbs-up"></i> 12</button>
                                        <button class="btn p-0 text-secondary"><i class="fa-regular fa-thumbs-down"></i> 12</button>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom py-2">
                                <div class="mb-1">
                                    <span class="text-light bg-success p-1 rounded-lg">4 <i class="fa-solid fa-star fs12"></i></span>
                                </div>
                                <p class="m-0 text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum temporibus exercitationem deserunt eos inventore laborum?</p>
                                <div class="mt-2 text-secondary d-flex justify-content-between">
                                    <span>John Doe | 1 day ago</span>
                                    <div>
                                        <button class="btn p-0 text-secondary"><i class="fa-regular fa-thumbs-up"></i> 12</button>
                                        <button class="btn p-0 text-secondary"><i class="fa-regular fa-thumbs-down"></i> 12</button>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="text-dark font-weight-bold">View all reviews <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="my-4">
                <p class="fs16 text-center font-weight-bold text-dark">Frequently Asked Questions (FAQ)</p>
                <div class="accordion px-4" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#accordOne" aria-expanded="true" aria-controls="accordOne">
                            Collapsible Group Item #1
                            </button>
                        </h2>
                        </div>

                        <div id="accordOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#accordTwo" aria-expanded="false" aria-controls="accordTwo">
                            Collapsible Group Item #2
                            </button>
                        </h2>
                        </div>
                        <div id="accordTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#accordThree" aria-expanded="false" aria-controls="accordThree">
                            Collapsible Group Item #3
                            </button>
                        </h2>
                        </div>
                        <div id="accordThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-4 px-4" id="similarProducts">
                <p class="fs16 text-center font-weight-bold text-dark">SIMILAR PRODUCTS</p>
                <hr class="my-3">
                <div class="d-lg-block d-md-block d-none">
                    <div class="similarProductsContainer">
                        <div class="border rounded-lg overflow-hidden">
                            <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-lg overflow-hidden">
                            <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-lg overflow-hidden">
                            <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-lg overflow-hidden">
                            <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-lg overflow-hidden">
                            <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-lg overflow-hidden">
                            <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-lg overflow-hidden">
                            <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-lg-none d-md-none d-block swiper similarProductsSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="border rounded-lg overflow-hidden mx-auto" style="width: 200px;">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" style="width: 100%; object-fit: contain" alt="">
                                <div class="p-2 text-left">
                                    <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                    <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                    <div class="mt-1">
                                        <span>₹1,998</span>
                                        <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                        <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border rounded-lg overflow-hidden">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                <div class="p-2">
                                    <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                    <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                    <div class="mt-1">
                                        <span>₹1,998</span>
                                        <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                        <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
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
                spaceBetween: '8px',
                autoplay:false,
                loop: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 7
                    },
                    768: {
                        slidesPerView: 5
                    },
                    640: {
                        slidesPerView: 5
                    },
                    400: {
                        slidesPerView: 5
                    },
                    300: {
                        slidesPerView: 4
                    }
                }
        });

        var swiper2 = new Swiper('.sizeSwiper', {
                slidesPerView: 8,
                spaceBetween: '8px',
                autoplay:false,
                loop: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 8
                    },
                    768: {
                        slidesPerView: 5
                    },
                    640: {
                        slidesPerView: 5
                    },
                    400: {
                        slidesPerView: 5
                    },
                    300: {
                        slidesPerView: 4
                    }
                }
        });

        var swiper3 = new Swiper('.offerSwiper', {
                slidesPerView: 1,
                spaceBetween: '8px',
                autoplay:false,
                loop: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
        });

        var swiper4 = new Swiper('.royalClubSwiper', {
                slidesPerView: 4,
                spaceBetween: '8px',
                autoplay:false,
                loop: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
        });

        var swiper5 = new Swiper('.lookSwiper', {
                slidesPerView: 4,
                spaceBetween: '8px',
                autoplay:false,
                loop: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
        });

        var swiper6 = new Swiper('.productImageSwiper', {
                slidesPerView: 1,
                spaceBetween: 0,
                autoplay:true,
                loop: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
        });

        var swiper7 = new Swiper('.similarProductsSwiper', {
                slidesPerView: 1,
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

        const reviewDialog = document.querySelector(".reviewDialog");
        const closeReviewBtn = document.querySelector("#closeReviewBtn");
        const reviewBtn = document.querySelector(".reviewBtn");

        reviewBtn.addEventListener("click", (e) => {
            e.preventDefault();
            reviewDialog.showModal();
        });

        closeReviewBtn.addEventListener("click", () => {
            reviewDialog.close();
        });

        
    </script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>