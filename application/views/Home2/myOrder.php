<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title> Slick Pattern - Profile Details </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <!-- Toastr CSS -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
     <!-- Toastr JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <?php include 'include/cssLinks.php'; ?>


    <style>
        * {
            box-sizing: border-box;
        }

        .toast-success {
            background-color: green !important; /* Set the background color to green */
            color: white !important;           /* Ensure the text is readable */
        }

        input[type="radio"]:checked {
        accent-color: #8340a1; /* Modern browsers support accent-color */
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

        a.active {
            color: var(--pinkcolor);
            font-weight: 700;
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

        /* startrating */
        .rating {
            direction: rtl;
            unicode-bidi: bidi-override;
            font-size: 2rem;
            color: gray;
            display: inline-flex;
        }

        .rating span {
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .rating span:hover,
        .rating span:hover~span {
            color: gold;
        }

        /* endrating */


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

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <h1 style="all:unset;">
                                <p class="m-0 fs16 font-weight-bold text-dark"> All Orders </p>
                            </h1>
                            <p>from anytime</p>
                        </div>

                        <div class="col-md-8">
                            <div class="row">

                                <div class="col-8">
                                    <div class="search-container">
                                        <input type="text" placeholder="Search in orders" class="form-control">
                                        <i class="fa fa-search search-icon"></i>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="input-icon">
                                        <input type="text" placeholder="FILTER" class="form-control"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="fa fa-filter"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- filter Modal -->
                    <div class="modal fade" id="staticBackdrop" tabindex="-1" role="dialog" data-bs-backdrop="static"
                        data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"> <b> Filter Orders </b> </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-6">
                                                <b> Status </b>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiostatus" id="flexRadioall" checked>
                                                    <label class="form-check-label" for="flexRadioall">
                                                        All
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiostatus" id="flexRadio_the_Way">
                                                    <label class="form-check-label" for="flexRadio_the_Way">
                                                        On the Way
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiostatus" id="flexRadioDelivered">
                                                    <label class="form-check-label" for="flexRadioDelivered">
                                                        Delivered
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiostatus" id="flexRadioCancelled">
                                                    <label class="form-check-label" for="flexRadioCancelled">
                                                        Cancelled
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiostatus" id="flexRadioExchange">
                                                    <label class="form-check-label" for="flexRadioExchange">
                                                        Exchange
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiostatus" id="flexRadioReturned">
                                                    <label class="form-check-label" for="flexRadioReturned">
                                                        Returned
                                                    </label>
                                                </div>

                                            </div>

                                            <div class="col-6">
                                                <b> Time </b>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiotime" id="flexRadiotime1" checked>
                                                    <label class="form-check-label" for="flexRadiotime1">
                                                        Any Time
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiotime" id="flexRadiotime30_Days">
                                                    <label class="form-check-label" for="flexRadiotime30_Days">
                                                        Last 30 Days
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiotime" id="flexRadiotime_6_Moths">
                                                    <label class="form-check-label" for="flexRadiotime_6_Moths">
                                                        Last 6 Moths
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiotime" id="flexRadiotimelast_year">
                                                    <label class="form-check-label" for="flexRadiotimelast_year">
                                                        Last Years
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn  border" id="clearFiltersButton">CLEAR FILTERS</button>
                                    <button type="button" class="btn custom-btn"> APPLY </button>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function () {
                                $('#clearFiltersButton').click(function () {
                                    // Reset status filters
                                    $('input[name="flexRadiostatus"]').prop('checked', false);
                                    $('#flexRadioall').prop('checked', true);

                                    // Reset time filters
                                    $('input[name="flexRadiotime"]').prop('checked', false);
                                    $('#flexRadiotime1').prop('checked', true);
                                });
                            });
                        </script>

                    </div>
                    <!-- end filter Modal -->

                    <hr>

                    <!-- start all order -->
                     <div class="row py-3 custom-bg-color">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-1 col-2">
                                            <center> <i class="fa fa-times-circle" style="font-size:24px"></i> </center>
                                        </div>
                                        <div class="col-sm-11 col-10 px-0">
                                            <b> Cancelled </b> <br>
                                            <span> on Fri, 20 Dec as per your request </span>
                                            <br>
                                        </div>
                                    </div>

                                    <div class="row mx-1 py-1 custom-bg-color">
                                        <div class="col-1 px-sm-1 px-0">
                                            <img src="<?= base_url('public/images/jeans.webp') ?>"
                                                class="object-fit-contain" alt="no-img">
                                        </div>
                                        <div class="col-sm-10 col-9">
                                            <b> Refund Credited </b> <br>
                                            <span> Men jeans </span>
                                            <br>
                                            <p> Size : 34 </p>
                                        </div>
                                        <div class="col-sm-1 col-2 d-flex align-items-center">
                                            <a href="<?php echo site_url('Home2/order_details'); ?>"> <i class="fa fa-angle-right"
                                                    style="font-size:21px"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-1 col-2">
                                            <center> <i class="fa fa-arrow-left" style="font-size:21px"></i> </center>
                                        </div>
                                        <div class="col-sm-11 col-10 px-0">
                                            <b> Refund Credited </b> <br>
                                            <span> Your refund of ₹450.00 for return has been proccessed successfully on Wed, 18 Oct. </span>
                                            <br>
                                        <a class="text-danger" data-bs-toggle="modal" data-bs-target="#refundproduct"> View Refund details </a>

                                     <!-- refundproduct Modal -->
                                         <div class="modal fade" id="refundproduct" tabindex="-1" role="dialog"
                                             data-bs-backdrop="static" data-bs-keyboard="false"
                                             aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                             <div class="modal-dialog modal-dialog-centered" role="document">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <h5 class="modal-title" id="staticBackdropLabel"> <b>  Refund details </b> </h5>
                                                         <button type="button" class="close"
                                                             data-bs-dismiss="modal" aria-label="Close">
                                                             <span aria-hidden="true">&times;</span>
                                                         </button>
                                                     </div>

                                                     <div class="modal-body">
                                                        <div class="d-flex justify-content-between">
                                                            <b> Total Refund Amount </b>
                                                            <b> ₹450.00 </b>
                                                        </div>
                                                        <div class="d-flex justify-content-between py-3 px-3 custom-bg-color">
                                                            <div> <b> ₹450.00 </b> </div>
                                                            <div>
                                                                <p> Added to Hdfc Bank Account <br>
                                                                    Ending in xxxx 4378 <br>
                                                                    Credit by Wed, 18 Oct
                                                                </p>
                                                            </div>
                                                            <div> <i class="fa fa-bank"></i> </div>
                                                        </div>

                                                        <div class="d-flex justify-content-between">
                                                            <i class='fas fa-exclamation-circle pt-1 mr-2'></i>  <p> Have a dispute? Contact your bank with the refund transaction reference number 654652315 </p>
                                                        </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <!-- end refundproduct Modal -->

                                        </div>
                                    </div>
                                    <div class="row mx-1 py-1 custom-bg-color">
                                        <div class="col-1 px-sm-1 px-0">
                                            <img src="<?= base_url('public/images/jeans.webp') ?>"
                                                class="object-fit-contain" alt="no-img">
                                        </div>
                                        <div class="col-sm-10 col-9">
                                            <b> Refund Credited </b> <br>
                                            <span> Your refund of ₹450.00 for return has been proccessed jeans </span>
                                            <br>
                                            <p> Size : 34 </p>
                                        </div>
                                        <div class="col-sm-1 col-2 d-flex align-items-center">
                                            <a href="<?php echo site_url('Home2/order_details'); ?>"> <i class="fa fa-angle-right"
                                                    style="font-size:21px"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-1 col-2 d-flex align-items-center">
                                            <center> <i class="fa fa-cube" style="font-size:22px"></i> </center>
                                        </div>
                                        <div class="col-sm-11 col-10 px-0">
                                            <b style="color: rgb(8 186 150);"> Delivered </b> <br>
                                            <span> Arriving by Tue, 24 Dec </span>
                                            <br>
                                        </div>
                                    </div>

                                    <div class="row mx-1 py-1 custom-bg-color">
                                        <div class="col-1 px-sm-1 px-0">
                                            <img src="<?= base_url('public/images/shirt.webp') ?>"
                                                class="object-fit-contain" alt="no-img">
                                        </div>
                                        <div class="col-sm-10 col-9">
                                            <b> Refund Credited </b> <br>
                                            <span> Your refund of ₹450.00 for return has been proccessed jeans </span>
                                            <br>
                                            <p> Size : 34 </p>
                                        </div>
                                        <div class="col-sm-1 col-2 d-flex align-items-center">
                                            <a href="<?php echo site_url('Home2/order_details'); ?>"> <i class="fa fa-angle-right"
                                                    style="font-size:21px"></i> </a>
                                        </div>

                                        <div class="col-12">

                                            <p class="mt-2"> <i class='fas fa-dot-circle'
                                                    style="font-size: 10px"></i> Exchange/Return window closed on Wed,
                                                13 Dec </p>

                                            <div class="rating">
                                                <span data-value="5" onclick="rate(5)">☆</span>
                                                <span data-value="4" onclick="rate(4)">☆</span>
                                                <span data-value="3" onclick="rate(3)">☆</span>
                                                <span data-value="2" onclick="rate(2)">☆</span>
                                                <span data-value="1" onclick="rate(1)">☆</span>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <p class="fs12"> Rate & Review to <b> earn spweb </b> </p>
                                                <a class="active fs12" data-bs-toggle="modal"
                                                    data-bs-target="#writereview"> Write Review </a>
                                            </div>

                                            <!-- writereview Modal -->
                                            <div class="modal fade" id="writereview" tabindex="-1" role="dialog"
                                                data-bs-backdrop="static" data-bs-keyboard="false"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel"> <b>
                                                                    WRITE REVIEW </b> </h5>
                                                            <button type="button" class="close"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body p-0">
                                                            <div class="container">
                                                                <div class="row">

                       
                                                                    <div class="col-12" style="background: #f0ceff">
                                                                       <img src="<?= base_url('public/images/reward.png') ?>" style="max-width: 4%;" alt=""> 
                                                                         <b class="text-dark"> Write review and earn upto ₹2000 spweb. </b>
                                                                    </div>

                                                                    <div class="col-sm-1 col-2 pr-0">
                                                                        <img src="<?= base_url('public/images/jeans.webp') ?>" style="height: 83px;width:100%" class="rounded py-2">
                                                                    </div>
                                                                    <div class="col-10 pr-0">
                                                                        <span class="fs12">Your refund of ₹450.00 for return has been </span> <br>
                                                                        <div class="rating">
                                                                            <span data-value="5" onclick="rate(5)">☆</span>
                                                                            <span data-value="4" onclick="rate(4)">☆</span>
                                                                            <span data-value="3" onclick="rate(3)">☆</span>
                                                                            <span data-value="2" onclick="rate(2)">☆</span>
                                                                            <span data-value="1" onclick="rate(1)">☆</span>
                                                                        </div>
                                                                    </div>
                                                                  <form action="" id="validmyForm">
                                                                    <div class="col-12">
                                                                        <textarea  class="form-control" id="validreview" name="" rows="6" placeholder="Please write product review here."></textarea>
                                                                        <span id="reviewError" style="color: red; display: none;">Please enter a valid review.</span>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <p  >By submitting review you give us consent to publish and process personal information in accordance with <a class="active" href="#">Terms of use</a> and <a class="active" href="#">Privacy Policy</a></p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn custom-btn"> SUBMIT
                                                                </button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- end writereview Modal -->

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-1 col-2 d-flex align-items-center">
                                            <i class="fa fa-cube" style="font-size:22px"></i>
                                        </div>
                                        <div class="col-sm-11 col-10 px-0">
                                            <b style="color: rgb(8 186 150);"> In Transit </b> <br>
                                            <span> Arriving by Tue, 24 Dec </span>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row mx-1 py-1 custom-bg-color">
                                        <div class="col-1 px-sm-1 px-0">
                                            <img src="<?= base_url('public/images/shirt.webp') ?>"
                                                class="object-fit-contain" alt="no-img">
                                        </div>
                                        <div class="col-sm-10 col-9">
                                            <b> Refund Credited </b> <br>
                                            <span> Your refund of ₹450.00 for return has been proccessed jeans </span>
                                            <br>
                                            <p> Size : 34 </p>
                                        </div>
                                        <div class="col-sm-1 col-2 d-flex align-items-center">
                                            <a href="<?php echo site_url('Home2/order_details'); ?>"> <i class="fa fa-angle-right"
                                                    style="font-size:21px"></i> </a>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <a data-bs-toggle="modal" data-bs-target="#trackmodal"
                                                class="form-control text-center"> Track </a>
                                        </div>
                                    </div>


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
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
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
                                                                                    data-icon="circle" role="img"
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
                                                                                    data-icon="circle" role="img"
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
                                                                                    data-icon="circle" role="img"
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
                                                                                    data-icon="circle" role="img"
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
                                                                                    data-icon="circle" role="img"
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
                                                                                    data-icon="circle" role="img"
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
                                                                                    data-icon="circle" role="img"
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

                                </div>
                            </div>
                        </div>
                        
                    </div> 

                   <div class="col-md-12">
                        <div class="col-md-12 mt-2">
                            <center> <span>Showing 1 -2 of 2</span> </center>
                        </div>
                    </div> 
                    <!-- end all order -->





                    <!-- start no order image  -->
                   <!--  <div class="row text-center">
                        <div class="col-md-12 ">
                            <img src="<?= base_url('public/images/no-order.jpg') ?>" style="max-width: 50%;" alt=""> <br>
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

    <!-- review validation with toaster -->
    <script>
        $(document).ready(function () {
        $('#validmyForm').on('submit', function (e) {
            let validreview = $('#validreview').val();
            if (!validreview) {
            $('#reviewError').show();
            e.preventDefault(); // Prevent form submission
            } else {
            $('#reviewError').hide();
            }

            if (validreview){
                e.preventDefault(); // Prevent default form submission
                // Show success toaster
                toastr.success('Review submitted successfully!');
                // Optionally clear form fields
                $(this).trigger('reset');
            }

        });
        });
    </script>
    <!-- review validation with toaster -->


<!-- ratingstart -->
    <script>
        function rate(value) {
            const stars = document.querySelectorAll('.rating span');
            stars.forEach(star => {
                star.style.color = parseInt(star.getAttribute('data-value')) <= value ? 'gold' : 'gray';
            });
        }
    </script>
 <!-- end -->

    <?php include 'include/footer.php'; ?>
    <!-- <?php include 'include/modal.php'; ?> -->
    <?php include 'include/jsLinks.php'; ?>

</body>

</html>
