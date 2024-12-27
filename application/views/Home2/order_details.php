<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title> Slick Pattern - Profile Details </title>
    <?php include 'include/cssLinks.php'; ?>
    <style>
        * {
            box-sizing: border-box;
        }

        h3 {
            font-family: var(--heading_font);
            font-size: 28px;
            font-weight: 500;
        }

        body {
            background-color: #FFFFFF;
        }

        body.sidebar-open {
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

        .feedback-btn {
            display: none !important;
        }

        .fs10 {
            font-size: 10px;
        }

        .fs11 {
            font-size: 11px;
        }

        .fs12 {
            font-size: 12px;
        }

        .fs14 {
            font-size: 14px;
        }

        .fs16 {
            font-size: 16px;
        }

        .fs18 {
            font-size: 18px;
        }

        .lineHeight {
            line-height: 1;
        }

        main {
            max-width: 1560px;
            margin-inline: auto;
        }

        .overviewContainer {
            width: 70%;
            margin-inline: auto;
        }

        .overviewSidebar a {
            display: block;
            transition: 0.1s all ease-in-out;
        }

        .overviewSidebar p {
            color: rgba(0, 0, 0, 0.4);
        }

        .overviewSidebar a.active {
            color: var(--pinkcolor);
            font-weight: 700;
        }

        .overviewSidebar a.active:hover {
            color: var(--pinkcolor);
            font-weight: 700;
        }


        .overviewSidebar a:hover {
            color: black;
            font-weight: 600;
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

        .profileDetailsCont {
            width: 50%;
            margin-inline: auto;
            line-height: 2.25;
        }

        .editBtn {
            background-color: var(--maincolor);
            color: white;
            width: 100%;
        }

        .editBtn:hover {
            background-color: var(--pinkcolor);
            color: white;
        }

        @media (width< 1100px) {
            .overviewContainer {
                width: 85%;
            }

            .profileDetailsCont {
                width: 70%;
            }
        }

        @media (width< 910px) {
            .overviewContainer {
                width: 90%;
            }

            .profileDetailsCont {
                width: 80%;
            }
        }

        @media (width< 768px) {
            .overviewContainer {
                width: 92%;
            }
        }

        @media (width< 600px) {
            .overviewCards {
                grid-template-columns: 1fr 1fr;
            }

            .profileDetailsCont {
                width: 90%;
            }
        }

        @media (width< 568px) {

            header,
            .category_section,
            .extra_info {
                display: none;
            }

            .overviewContainer {
                padding-top: 60px;
            }

            .profileDetailsCont {
                width: 100%;
            }

            dialog {
                top: 100%;
                left: 0;
                transform: translateY(-100%);
                min-width: 100%;
                border-radius: 0;
            }
        }

        .custom-bg-color {
            background: #f3f3f3;
        }

        @media only screen and (max-width: 600px) {
            .res-img {
                height: 50px;
                width: 50px;
            }
        }

        .res-img {
            height: 50px;
            width: 50px;
        }



        /* search icon in placeholder  */
        .search-container {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .search-container input {
            padding-left: 30px;
        }

        .search-icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #888;
            pointer-events: none;
        }

        /* end search icon in placeholder  */

        /* filter icon in placeholder  */
        .input-icon {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .input-icon input {
            padding-left: 35px;
        }

        .input-icon i {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #888;
            pointer-events: none;
        }

        /* end filter icon in placeholder  */

        .bg-active-custom {
            background-color: #03a685 !important;
            color: white
        }

        .fa-heart {
            cursor: pointer;
        }

        .fa-heart.red {
            background-color: red;
            color: white;
            padding: 5px;
            border-radius: 50%;
        }

        .row.overflow-scroll::-webkit-scrollbar {
            height: 8px;
        }

        .row.overflow-scroll::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 4px;
        }

        .row.overflow-scroll::-webkit-scrollbar-thumb:hover {
            background: #aaa;
        }

        .hover-brightness {
            transition: filter 0.2s ease;
        }

        .hover-brightness:hover {
            filter: brightness(1.1);
        }

        /* track oredr css */

        .tracking-detail {
            padding: 3rem 0;
        }

        #tracking {
            margin-bottom: 1rem;
        }

        [class*="tracking-status-"] p {
            margin: 0;
            font-size: 1.1rem;
            color: #fff;
            text-transform: uppercase;
            text-align: center;
        }

        [class*="tracking-status-"] {
            padding: 1.6rem 0;
        }

        .tracking-item {
            border-left: 4px solid #00ba0d;
            position: relative;
            padding: 2rem 1.5rem 0.5rem 2.5rem;
            font-size: 0.9rem;
            margin-left: 3rem;
            min-height: 5rem;
        }

        .tracking-item:last-child {
            padding-bottom: 4rem;
        }

        .tracking-item .tracking-date {
            margin-bottom: 0.5rem;
        }

        .tracking-item .tracking-date span {
            color: #888;
            font-size: 85%;
            padding-left: 0.4rem;
        }

        .tracking-item .tracking-content {
            padding: 0.5rem 0.8rem;
            background-color: #f4f4f4;
            border-radius: 0.5rem;
        }

        .tracking-item .tracking-content span {
            display: block;
            color: #767676;
            font-size: 13px;
        }

        .tracking-item .tracking-icon {
            position: absolute;
            left: -0.7rem;
            width: 1.1rem;
            height: 1.1rem;
            text-align: center;
            border-radius: 50%;
            font-size: 1.1rem;
            background-color: #fff;
            color: #fff;
        }

        .tracking-item-pending {
            border-left: 4px solid #d6d6d6;
            position: relative;
            padding: 2rem 1.5rem 0.5rem 2.5rem;
            font-size: 0.9rem;
            margin-left: 3rem;
            min-height: 5rem;
        }

        .tracking-item-pending:last-child {
            padding-bottom: 4rem;
        }

        .tracking-item-pending .tracking-date {
            margin-bottom: 0.5rem;
        }

        .tracking-item-pending .tracking-date span {
            color: #888;
            font-size: 85%;
            padding-left: 0.4rem;
        }

        .tracking-item-pending .tracking-content {
            padding: 0.5rem 0.8rem;
            background-color: #f4f4f4;
            border-radius: 0.5rem;
        }

        .tracking-item-pending .tracking-content span {
            display: block;
            color: #767676;
            font-size: 13px;
        }

        .tracking-item-pending .tracking-icon {
            line-height: 2.6rem;
            position: absolute;
            left: -0.7rem;
            width: 1.1rem;
            height: 1.1rem;
            text-align: center;
            border-radius: 50%;
            font-size: 1.1rem;
            color: #d6d6d6;
        }

        .tracking-item-pending .tracking-content {
            font-weight: 600;
            font-size: 17px;
        }

        .tracking-item .tracking-icon.status-current {
            width: 1.9rem;
            height: 1.9rem;
            left: -1.1rem;
        }

        .tracking-item .tracking-icon.status-intransit {
            color: #00ba0d;
            font-size: 0.6rem;
        }

        .tracking-item .tracking-icon.status-current {
            color: #00ba0d;
            font-size: 0.6rem;
        }

        @media (min-width: 992px) {
            .tracking-item {
                margin-left: 10rem;
            }

            .tracking-item .tracking-date {
                position: absolute;
                left: -10rem;
                width: 7.5rem;
                text-align: right;
            }

            .tracking-item .tracking-date span {
                display: block;
            }

            .tracking-item .tracking-content {
                padding: 0;
                background-color: transparent;
            }

            .tracking-item-pending {
                margin-left: 10rem;
            }

            .tracking-item-pending .tracking-date {
                position: absolute;
                left: -10rem;
                width: 7.5rem;
                text-align: right;
            }

            .tracking-item-pending .tracking-date span {
                display: block;
            }

            .tracking-item-pending .tracking-content {
                padding: 0;
                background-color: transparent;
            }
        }

        .tracking-item .tracking-content {
            font-weight: 600;
            font-size: 17px;
        }

        .blinker {
            border: 7px solid #e9f8ea;
            animation: blink 1s;
            animation-iteration-count: infinite;
        }

        @keyframes blink {
            50% {
                border-color: #fff;
            }
        }

        /* end track order css */
    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <main>

        <section class="d-lg-none d-md-none d-sm-block position-fixed w-100 bg-white" style="z-index: 1000; top: 0;">
            <div class="d-flex justify-content-between align-items-center px-3 py-1 shadow-sm">
                <div class="d-flex align-items-center text-dark">
                    <a href=""><span style="font-size: 20px;"><i class="fa-solid fa-arrow-left"></i></span></a>
                    <img src="<?= base_url('assets/new_website/img/favicon.png') ?>" class="ml-2" style="width: 40px;"
                        alt="">
                </div>
                <div class="d-flex align-items-center">
                    <a class="cartCounterBtn ml-3" href="">
                        <img src="<?= base_url('assets/new_website/img/search-black.png') ?>" style="width: 18px;"
                            alt="">
                    </a>
                    <a class="cartCounterBtn ml-3" href="">
                        <img src="<?= base_url('assets/new_website/img/heart-black.png') ?>" style="width: 20px;"
                            alt="">
                    </a>
                    <a class="cartCounterBtn ml-3" href="">
                        <img src="<?= base_url('assets/new_website/img/bag-black.png') ?>" style="width: 20px;"
                            alt="">
                    </a>
                </div>
            </div>
        </section>

        <section class="overviewContainer">
            <div class="pt-lg-5 pt-md-5 pt-sm-5 pt-3 pb-3">
                <div>
                    <p class="m-0 fs18 font-weight-bold text-dark">Account</p>
                    <p class="m-0 fs16">Welcome, SP Guest</p>
                    <p class="m-0">Good Morning, Mrs. Shukla</p>
                </div>
            </div>

            <div class="row border-top mb-5 pb-5">

                <div class="d-lg-block d-md-block d-sm-none d-none col-3 overviewSidebar border-right">
                    <div class="mt-3">
                        <a href="#">Overview</a>
                    </div>
                    <hr>
                    <div>
                        <p class="m-0 fs10 font-weight-bold">ORDERS, WISHLIST AND MORE</p>
                        <ul>
                            <li><a href="#" class="active">My Orders</a></li>
                            <li><a href="#">My Wishlist & Collections</a></li>
                            <li><a href="#">Notify Me</a></li>
                            <li><a href="#">Beauty Advice</a></li>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <p class="m-0 fs10 font-weight-bold">EXCLUSIVE</p>
                        <ul>
                            <li><a href="#">My Wallet</a></li>
                            <li><a href="#">Invites & Credits</a></li>
                            <li><a href="#">My Reward Points</a></li>
                            <li><a href="#">My Cashback</a></li>
                            <li><a href="#">Coupons</a></li>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <p class="m-0 fs10 font-weight-bold">SUPPORT</p>
                        <ul>
                            <li><a href="#">Message Settings</a></li>
                            <li><a href="#">Chat with Us</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Help Us Improve</a></li>
                            <li><a href="#">Delete Account</a></li>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <p class="m-0 fs10 font-weight-bold">PERSONALIZATION</p>
                        <ul>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">My Address Book</a></li>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <p class="m-0 fs10 font-weight-bold">ROYAL CLUB MEMBERS</p>
                        <ul>
                            <li><a href="#">Royal Benefits</a></li>
                            <li><a href="#">Special Offers</a></li>
                            <li><a href="#">RC Dashboard</a></li>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <p class="m-0 fs10 font-weight-bold">LEGAL</p>
                        <ul>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <!-- profile details start  -->
                <div class="col-lg-9 col-md-9 col-sm-12 pb-5">




                    <!-- start all order -->

                    <div class="row py-3 custom-bg-color">

                        <div class="col-md-12 d-flex flex-row-reverse">

                            <div class="card w-auto ml-1">
                                <div class="card-body p-1 pl-2">
                                    <a href="<?php echo site_url('Home2/contactus'); ?>"> <b> Help </b> <i class='fas fa-headphones'></i> </a>
                                </div>
                            </div>

                            <div class="card w-auto">
                                <div class="card-body p-1 pl-2">
                                    <a href="<?php echo site_url('Home2/myOrder'); ?>"> <b> Reorder </b> <i class='fa fa-reorder'></i> </a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 d-flex justify-content-center">
                            <img src="<?= base_url('public/images/jeans.webp') ?>" class="hover-brightness"
                                style="height: 123px;" alt=""> <br>
                        </div>

                        <div class="col-md-12 mt-2">
                            <center>
                                <b> T-SHIRT </b> <br>
                                <span> Lsdhvbs bvjh bcsdv jbszdvshdfv jbvsdh dfh </pspan> <br>
                            </center>
                        </div>

                        <div class="col-md-12 mb-1 d-flex justify-content-around">
                            <span> <b>Price:</b> Rs20 </span>
                            <span> <b>Color:</b> Red </span>
                            <span> <b>Quantity:</b> 5 </span>
                            <span> <b>Size:</b> 12-20Y </span>
                        </div>

                        <div class="col-md-12 px-sm-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 py-3 d-flex">
                                            <b> Arriving </b> <span> by fri,25 Des </span>
                                            <i class='fas fa-angle-right ml-auto'></i>
                                        </div>
                                        <div class="col-12 py-3 bg-active-custom d-flex" data-bs-toggle="modal" data-bs-target="#trackmodal">
                                            <b> Placed </b>
                                            <b> Order Placed </b> <span> on 19 Des</span>
                                            <i class='fas fa-angle-right ml-auto'></i>
                                        </div>
                                        <div class="col-12 py-3 d-flex">
                                            <b> Order Placed </b> <span> on 19 Des </span>
                                            <i class='fas fa-angle-right ml-auto'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card my-3">
                                <div class="card-body py-2">
                                    <div class="row">

                                        <div class="col-6 border-right">
                                            <center>
                                              <a data-bs-toggle="modal" data-bs-target="#cancelmodal">  
                                                <i class="fas fa-times-circle" style="font-size:21px"></i> <br>
                                                <b>Cancel</b>
                                              </a>
                                            </center>
                                        </div>

                                        <div class="col-6">
                                            <center>
                                                <a data-bs-toggle="modal" data-bs-target="#trackmodal">
                                                    <i class="fas fa-map-marker-alt" style="font-size:24px"></i> <br>
                                                    <b>Track</b>
                                                </a>
                                            </center>

                                            <!-- track modal  -->
                                            <div class="modal fade" id="trackmodal" tabindex="-1" role="dialog"
                                                data-bs-backdrop="static" data-bs-keyboard="false"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"
                                                    role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-header pb-0">
                                                            <h5 class="modal-title" id="staticBackdropLabel"> <b>
                                                                    Track Item </b> <br>
                                                                <span> Tracking no: MYSC11347143582132 </span>
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>



                                                        <div class="modal-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-12">

                                                                        <div id="tracking-pre"></div>
                                                                        <div id="tracking">
                                                                            <div class="tracking-list">
                                                                                <div class="tracking-item">
                                                                                    <div
                                                                                        class="tracking-icon status-intransit">
                                                                                        <svg class="svg-inline--fa fa-circle fa-w-16"
                                                                                            aria-hidden="true"
                                                                                            data-prefix="fas"
                                                                                            data-icon="circle"
                                                                                            role="img"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 512 512"
                                                                                            data-fa-i2svg="">
                                                                                            <path fill="currentColor"
                                                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                    <div class="tracking-date"><img
                                                                                            src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                                                                            class="img-responsive"
                                                                                            alt="order-placed" /></div>
                                                                                    <div class="tracking-content">Order
                                                                                        Placed<span>09 Aug 2021,
                                                                                            10:00am</span></div>
                                                                                </div>
                                                                                <div class="tracking-item">
                                                                                    <div
                                                                                        class="tracking-icon status-intransit">
                                                                                        <svg class="svg-inline--fa fa-circle fa-w-16"
                                                                                            aria-hidden="true"
                                                                                            data-prefix="fas"
                                                                                            data-icon="circle"
                                                                                            role="img"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 512 512"
                                                                                            data-fa-i2svg="">
                                                                                            <path fill="currentColor"
                                                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                    <div class="tracking-date"><img
                                                                                            src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                                                                            class="img-responsive"
                                                                                            alt="order-placed" /></div>
                                                                                    <div class="tracking-content">Order
                                                                                        Confirmed<span>09 Aug 2021,
                                                                                            10:30am</span></div>
                                                                                </div>
                                                                                <div class="tracking-item">
                                                                                    <div
                                                                                        class="tracking-icon status-intransit">
                                                                                        <svg class="svg-inline--fa fa-circle fa-w-16"
                                                                                            aria-hidden="true"
                                                                                            data-prefix="fas"
                                                                                            data-icon="circle"
                                                                                            role="img"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 512 512"
                                                                                            data-fa-i2svg="">
                                                                                            <path fill="currentColor"
                                                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                    <div class="tracking-date"><img
                                                                                            src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                                                                            class="img-responsive"
                                                                                            alt="order-placed" /></div>
                                                                                    <div class="tracking-content">
                                                                                        Packed the product<span>09 Aug
                                                                                            2021, 12:00pm</span></div>
                                                                                </div>
                                                                                <div class="tracking-item">
                                                                                    <div
                                                                                        class="tracking-icon status-intransit">
                                                                                        <svg class="svg-inline--fa fa-circle fa-w-16"
                                                                                            aria-hidden="true"
                                                                                            data-prefix="fas"
                                                                                            data-icon="circle"
                                                                                            role="img"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 512 512"
                                                                                            data-fa-i2svg="">
                                                                                            <path fill="currentColor"
                                                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                    <div class="tracking-date"><img
                                                                                            src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                                                                            class="img-responsive"
                                                                                            alt="order-placed" /></div>
                                                                                    <div class="tracking-content">
                                                                                        Arrived in the warehouse<span>10
                                                                                            Aug 2021, 02:00pm</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tracking-item">
                                                                                    <div
                                                                                        class="tracking-icon status-current blinker">
                                                                                        <svg class="svg-inline--fa fa-circle fa-w-16"
                                                                                            aria-hidden="true"
                                                                                            data-prefix="fas"
                                                                                            data-icon="circle"
                                                                                            role="img"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 512 512"
                                                                                            data-fa-i2svg="">
                                                                                            <path fill="currentColor"
                                                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                    <div class="tracking-date"><img
                                                                                            src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                                                                            class="img-responsive"
                                                                                            alt="order-placed" /></div>
                                                                                    <div class="tracking-content">Near
                                                                                        by Courier facility<span>10 Aug
                                                                                            2021, 03:00pm</span></div>
                                                                                </div>

                                                                                <div class="tracking-item-pending">
                                                                                    <div
                                                                                        class="tracking-icon status-intransit">
                                                                                        <svg class="svg-inline--fa fa-circle fa-w-16"
                                                                                            aria-hidden="true"
                                                                                            data-prefix="fas"
                                                                                            data-icon="circle"
                                                                                            role="img"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 512 512"
                                                                                            data-fa-i2svg="">
                                                                                            <path fill="currentColor"
                                                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                    <div class="tracking-date"><img
                                                                                            src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                                                                            class="img-responsive"
                                                                                            alt="order-placed" /></div>
                                                                                    <div class="tracking-content">Out
                                                                                        for Delivery<span>12 Aug 2021,
                                                                                            05:00pm</span></div>
                                                                                </div>
                                                                                <div class="tracking-item-pending">
                                                                                    <div
                                                                                        class="tracking-icon status-intransit">
                                                                                        <svg class="svg-inline--fa fa-circle fa-w-16"
                                                                                            aria-hidden="true"
                                                                                            data-prefix="fas"
                                                                                            data-icon="circle"
                                                                                            role="img"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 512 512"
                                                                                            data-fa-i2svg="">
                                                                                            <path fill="currentColor"
                                                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                    <div class="tracking-date"><img
                                                                                            src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                                                                            class="img-responsive"
                                                                                            alt="order-placed" /></div>
                                                                                    <div class="tracking-content">
                                                                                        Delivered<span>12 Aug 2021,
                                                                                            09:00pm</span></div>
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
                                            <!-- end track modal  -->

                                             <!-- cancel product modal -->

                                             <div class="modal fade" id="cancelmodal" tabindex="-1" role="dialog"
                                                data-bs-backdrop="static" data-bs-keyboard="false"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                   
                                                    <div class="modal-content">

                                                    <div class="modal-header pb-0">
                                                        <h5 class="modal-title" id="staticBackdropLabel"> <b> Reason For Cancellation </b> <br>
                                                            <span> Please tell us correct reason for cancellation. This information is only used to improve our services </span>
                                                        </h5>
                                                        <button type="button" class="close"
                                                            data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>



                                                        <div class="modal-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-12">

                                                                 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                             <!-- end cancel product modal  -->


                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12 px-0">
                            <div class="card mt-3">
                                <div class="card-body py-1">
                                    <i class='far fa-clock'></i> <span> Expiry Date <b> 30 Jun, 2026 </b> </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 px-0">
                            <div class="card mt-3">
                                <div class="card-body py-1">
                                    <b class="fs16"> Items that go well with this item </b>
                                    <div class="row mb-2 mt-5 gap-2 flex-nowrap overflow-scroll"
                                        style="display: flex; overflow-x: auto;">

                                        <div class="col-md-3 border flex-shrink-0">
                                            <img src="<?= base_url('public/images/jeans.webp') ?>"
                                                style="height: 224px;width:100%" alt=""><br>
                                            <div class="mt-1 d-flex justify-content-between">
                                                <span> T-SHIRT </span>
                                                <span> <i class="far fa-heart heart-icon"></i> </span>
                                            </div>
                                            <span class="fs12"> Tea Tree Essential oil. </span>
                                            <div class="mt-y d-flex justify-content-between">
                                                <span class="fs11"> <b>₹ </b> 1339 </span>
                                                <span class="fs11"> <del> ₹1539 </del> <span class="text-danger">
                                                        (15% OFF) </span></span>
                                            </div>
                                        </div>

                                        <div class="col-md-3 border flex-shrink-0">
                                            <img src="<?= base_url('public/images/jeans.webp') ?>"
                                                style="height: 224px;width:100%" alt=""><br>
                                            <div class="mt-1 d-flex justify-content-between">
                                                <span> T-SHIRT </span>
                                                <span> <i class="far fa-heart heart-icon"></i> </span>
                                            </div>
                                            <span class="fs12"> Tea Tree Essential oil. </span>
                                            <div class="mt-y d-flex justify-content-between">
                                                <span class="fs11"> <b>₹ </b> 1339 </span>
                                                <span class="fs11"> <del> ₹1539 </del> <span class="text-danger">
                                                        (15% OFF) </span></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 border flex-shrink-0">
                                            <img src="<?= base_url('public/images/jeans.webp') ?>"
                                                style="height: 224px;width:100%" alt=""><br>
                                            <div class="mt-1 d-flex justify-content-between">
                                                <span> T-SHIRT </span>
                                                <span> <i class="far fa-heart heart-icon"></i> </span>
                                            </div>
                                            <span class="fs12"> Tea Tree Essential oil. </span>
                                            <div class="mt-y d-flex justify-content-between">
                                                <span class="fs11"> <b>₹ </b> 1339 </span>
                                                <span class="fs11"> <del> ₹1539 </del> <span class="text-danger">
                                                        (15% OFF) </span></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 border flex-shrink-0">
                                            <img src="<?= base_url('public/images/jeans.webp') ?>"
                                                style="height: 224px;width:100%" alt=""><br>
                                            <div class="mt-1 d-flex justify-content-between">
                                                <span> T-SHIRT </span>
                                                <span> <i class="far fa-heart heart-icon"></i> </span>
                                            </div>
                                            <span class="fs12"> Tea Tree Essential oil. </span>
                                            <div class="mt-y d-flex justify-content-between">
                                                <span class="fs11"> <b>₹ </b> 1339 </span>
                                                <span class="fs11"> <del> ₹1539 </del> <span class="text-danger">
                                                        (15% OFF) </span></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 border flex-shrink-0">
                                            <img src="<?= base_url('public/images/jeans.webp') ?>"
                                                style="height: 224px;width:100%" alt=""><br>
                                            <div class="mt-1 d-flex justify-content-between">
                                                <span> T-SHIRT </span>
                                                <span> <i class="far fa-heart heart-icon"></i> </span>
                                            </div>
                                            <span class="fs12"> Tea Tree Essential oil. </span>
                                            <div class="mt-y d-flex justify-content-between">
                                                <span class="fs11"> <b>₹ </b> 1339 </span>
                                                <span class="fs11"> <del> ₹1539 </del> <span class="text-danger">
                                                        (15% OFF) </span></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 border flex-shrink-0">
                                            <img src="<?= base_url('public/images/jeans.webp') ?>"
                                                style="height: 224px;width:100%" alt=""><br>
                                            <div class="mt-1 d-flex justify-content-between">
                                                <span> T-SHIRT </span>
                                                <span> <i class="far fa-heart heart-icon"></i> </span>
                                            </div>
                                            <span class="fs12"> Tea Tree Essential oil. </span>
                                            <div class="mt-y d-flex justify-content-between">
                                                <span class="fs11"> <b>₹ </b> 1339 </span>
                                                <span class="fs11"> <del> ₹1539 </del> <span class="text-danger">
                                                        (15% OFF) </span></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 border flex-shrink-0">
                                            <img src="<?= base_url('public/images/jeans.webp') ?>"
                                                style="height: 224px;width:100%" alt=""><br>
                                            <div class="mt-1 d-flex justify-content-between">
                                                <span> T-SHIRT </span>
                                                <span> <i class="far fa-heart heart-icon"></i> </span>
                                            </div>
                                            <span class="fs12"> Tea Tree Essential oil. </span>
                                            <div class="mt-y d-flex justify-content-between">
                                                <span class="fs11"> <b>₹ </b> 1339 </span>
                                                <span class="fs11"> <del> ₹1539 </del> <span class="text-danger">
                                                        (15% OFF) </span></span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 px-0">
                            <div class="card mt-3">
                                <div class="card-body py-1">
                                    <b> Delivery Address </b> <br>
                                    <span> <b>Name : </b> krishna </span> <br>
                                    <span> <b>Contact : </b> 1234567890 </span> <br>
                                    <span> <b>Address : </b> varanasi, pandeypur, Baragaon - 456254 </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 px-0">
                            <div class="card mt-3">
                                <div class="card-body py-1 d-flex justify-content-between">
                                    <b> Total Order Price </b>
                                    <a data-bs-toggle="modal" data-bs-target="#order_price"> <b> ₹499.00 <i
                                                class='fas fa-angle-down fs16' style="color: #ff3f6c"></i> </b> </a>
                                </div>
                            </div>

                            <div class="modal fade" id="order_price" tabindex="-1" role="dialog"
                                data-bs-backdrop="static" data-bs-keyboard="false"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header py-2">
                                            <h5 class="modal-title" id="staticBackdropLabel"> <b> Payment Information
                                                </b> </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="d-flex justify-content-between">
                                                <p>1 x ARATA All Natural Styling Hair Gel with Organic.. </p>
                                                <b> ₹699.00</b>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p> Discount </p>
                                                <b> -₹200.00</b>
                                            </div>
                                            <div class="d-flex justify-content-between border-top">
                                                <p> Discounted Price </p>
                                                <b> ₹499.00</b>
                                            </div>
                                            <div class="d-flex justify-content-between border-top">
                                                <b> Total Paid </b>
                                                <b> ₹499.00</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                        <div class="col-md-12 px-0">
                            <div class="card mt-1">
                                <div class="card-body py-1">
                                    <span> <b>Item sold by : </b> SLICK ORGANICS - SJIT </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 px-0">
                            <div class="card mt-3">
                                <div class="card-body py-3">
                                    <b> Updates sent to </b> <br>
                                    <div class="d-flex justify-content-start">
                                        <span> <i class="fas fa-phone-alt fs12"></i> <a href="tel:1234567890"> 1234567890 </a> </span>
                                        <span class="ml-3"> <i class="fa fa-envelope fs12"></i> <a href="mailto:kv@gmail.com"> kv@gmail.com </a> </span>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 px-0">
                            <div class="card mt-1">
                                <div class="card-body py-1">
                                    <span> <b> Order Id : </b> 546423165485 </span>
                                </div>
                            </div>
                        </div>


                    </div>


                    <!-- end all order -->


                    <!-- start no order image  -->
                    <!--  <div class="row text-center">
                        <div class="col-md-12 ">
                            <img src="<?= base_url('public/images/no-order.png') ?>" style="max-width: 50%;" alt=""> <br>
                            <b> Your shopping journey is waiting to begin!  No orders yet? </b>
                            <p> Treat yourself! Discover something you'll love and start shopping.
                                    Track all your fabulous finds right here. Happy shopping, beautiful! </p>
                        </div>
                    </div> -->
                    <!-- end no order image  -->

                </div>
                <!-- profile details end -->


            </div>
        </section>
    </main>

    <script>
        const mobileProfileBtn = document.querySelector('.mobileProfileBtn');
        const profileUploadDialog = document.querySelector('.profileUploadDialog');
        const closeProfileUploadDialogBtn = document.querySelector('#closeProfileUploadDialogBtn');

        mobileProfileBtn.addEventListener('click', () => {
            profileUploadDialog.showModal();
            document.body.classList.add('sidebar-open');
        })

        closeProfileUploadDialogBtn.addEventListener('click', () => {
            profileUploadDialog.close();
            document.body.classList.remove('sidebar-open');
        })
    </script>

    <!-- like button -->>
    <script>
        document.querySelectorAll(".heart-icon").forEach(function(heart) {
            heart.addEventListener("click", function() {
                this.classList.toggle("red");
            });
        });
    </script>
    <!-- end  -->>





    <?php include 'include/footer.php'; ?>
    <!-- <?php include 'include/modal.php'; ?> -->
    <?php include 'include/jsLinks.php'; ?>

</body>

</html>
