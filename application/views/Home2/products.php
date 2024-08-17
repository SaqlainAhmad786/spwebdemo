<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Products </title>
    <?php include('include/cssLinks.php'); ?>
</head>

<body>
<style>
        :root {
            --color1: #8340A1;
            --color2: #e83e8c;
            --color3: #068FFF;
            --color4: rgb(243 244 246);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        ul {
            list-style-type: none;
        }

        input {
            font-family: 'Inter', sans-serif;
        }

        input:focus {
            outline: none;
            box-shadow: none !important;
            border-color: var(--color2) !important;
        }

        input[type="checkbox"] {
            accent-color: var(--color2);
        }

        img {
            width: 100%;
        }

        .saleTimerStrip {
            background-color: var(--color4);
            box-shadow: inset 0 0 8px 4px rgb(0, 0, 0, 0.2);
            padding-block: 4px;
            font-weight: 500;
            text-align: center;
            font-weight: 300;
        }

        .saleTimerStrip span {
            color: var(--color2);
            font-weight: 600;
        }

        button:focus,
        .btn:focus,
        a:focus {
            box-shadow: none;
            outline: none;
        }

        .productContainer {
            display: grid;
            grid-template-columns: 2fr 10fr;
        }

        .filtersContainer {
            background-color: #e83e8c15;
            position: sticky;
            height: 100vh;
            top: 0;
            min-width: 255px;
        }

        .productsList {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 16px;
        }

        .productCard {
            position: relative;
            transition: all .2s ease-in-out;
            z-index: 10;
        }

        .productCard:hover {
            transform: scale(1.03);
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
        }

        .productCard:hover .productCardHoverBtn,
        .productCard:hover .similarBtn {
            opacity: 1;
        }

        .newTag,
        .saleTag,
        .hotLookTag,
        .preBookTag,
        .trendyTag,
        .summerTag,
        .royalTag,
        .weekendTag,
        .discountTag {
            position: absolute;
            top: 0;
            left: 22px;
            z-index: 10;
            animation: swing ease-in-out 1s infinite alternate;
            transform-origin: center -30px;
            filter: drop-shadow(4px 4px 2px rgba(0, 0, 0, 0.5));
        }

        .newTag .string,
        .saleTag .string,
        .hotLookTag .string,
        .preBookTag .string,
        .trendyTag .string,
        .summerTag .string,
        .royalTag .string,
        .weekendTag .string,
        .discountTag .string {
            position: absolute;
            z-index: 12;
            left: 18px;
            height: 20px;
            width: 2px;
            background-color: var(--color2);
        }

        .newTag .circle,
        .saleTag .circle,
        .hotLookTag .circle,
        .preBookTag .circle,
        .trendyTag .circle,
        .summerTag .circle,
        .royalTag .circle,
        .weekendTag .circle,
        .discountTag .circle {
            width: 12px;
            height: 12px;
            border: 2px solid var(--color2);
            border-radius: 50%;
            background-color: white;
            margin: 0 4px;
            position: absolute;
            left: 9px;
            top: 16px;
            z-index: 11;
        }

        .newTag .tagCard,
        .saleTag .tagCard,
        .hotLookTag .tagCard,
        .preBookTag .tagCard {
            background-color: var(--color1);
            position: absolute;
            top: 12px;
            height: 60px;
            width: 38px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .newTag p {
            position: absolute;
            transform: rotate(-25deg);
            top: 40px;
            left: 4px;
        }

        .saleTag p {
            position: absolute;
            transform: rotate(-30deg);
            top: 40px;
            left: 2px;
        }

        .hotLookTag p {
            position: absolute;
            top: 34px;
            left: 3px;
        }

        .preBookTag p {
            position: absolute;
            top: 34px;
            left: 2px;
        }

        .trendyTag .tagCard {
            background-color: var(--color1);
            position: absolute;
            top: 12px;
            height: 80px;
            width: 38px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .summerTag .tagCard {
            background-color: var(--color1);
            position: absolute;
            top: 12px;
            height: 88px;
            width: 38px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .royalTag .tagCard {
            background-color: var(--color1);
            position: absolute;
            top: 12px;
            height: 80px;
            width: 38px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .weekendTag .tagCard {
            background-color: var(--color1);
            position: absolute;
            top: 12px;
            height: 96px;
            width: 38px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .discountTag .tagCard {
            background-color: var(--color1);
            position: absolute;
            top: 12px;
            height: 96px;
            width: 38px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .trendyTag p {
            position: absolute;
            top: 48px;
            left: -10px;
            transform: rotate(-90deg);
        }

        .summerTag p {
            position: absolute;
            top: 52px;
            left: -12px;
            transform: rotate(-90deg);
        }

        .royalTag p {
            position: absolute;
            top: 44px;
            left: -4px;
            transform: rotate(-90deg);
        }

        .weekendTag p {
            position: absolute;
            top: 54px;
            left: -15px;
            transform: rotate(-90deg);
        }

        .discountTag p {
            position: absolute;
            top: 54px;
            left: -12px;
            transform: rotate(-90deg);
        }

        @keyframes swing {
            0% {
                transform: rotate(3deg);
            }

            100% {
                transform: rotate(-3deg);
            }
        }

        .productCardHoverBtn {
            opacity: 0;
            position: absolute;
            top: 0;
            right: 0;
            border-bottom-left-radius: 8px;
            overflow: hidden;
            transition: all .2s ease-in-out;
        }

        .productCardHoverBtn button {
            padding: 8px 12px;
            background-color: rgb(0, 0, 0, 0.25);
            border: 0;
            transition: all .1s ease-in-out;
        }

        .productCardHoverBtn button img {
            width: 20px;
            transition: all .2s ease-in-out;
        }

        .productCardHoverBtn button:hover {
            background-color: rgb(0, 0, 0, 0.5);
        }

        .productCardHoverBtn button:hover img {
            transform: scale(1.1);
        }

        .similarBtn {
            position: absolute;
            bottom: 8px;
            right: 8px;
            opacity: 0;
            transition: all .2s ease-in-out;
        }

        .similarBtn button {
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

        .mobileBottomNavbar {
            background-color: var(--color4);
            width: 100%;
            position: fixed;
            bottom: 0;
            right: 0;
            display: none;
            z-index: 100;
        }

        .mobileBottomNavbar button {
            border: 0;
            padding-block: 12px;
            font-size: 14px;
            color: rgb(0, 0, 0, 0.75);
        }

        .blinkingText {
            animation: blink 1.5s linear infinite;
        }

        a.toolTip {
            position: relative;
            font-size: 12px;
            z-index: 999;
        }

        a.toolTip::after {
            content: attr(tip);
            z-index: 999;
            background-image: linear-gradient(to right, var(--color1), var(--color2));
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14;
            line-height: 1.25em;
            width: 160px;
            padding: 5px 10px;
            border-radius: 6px;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, .65);
            position: absolute;
            top: -28px;
            right: -170px;
            display: none;
        }

        /* a.toolTip:before {
            position: absolute;
            z-index: 999;
            content: "";
            top: 15px;
            left: 0px;
            border-right: 7px transparent solid;
            border-left: 7px transparent solid;
            display: none;
        } */

        a.toolTip:hover {
            position: relative;
        }

        a.toolTip:hover:after {
            display: block;
            z-index: 999;
        }

        /* a.toolTip:hover:before {
            display: block;
        } */

        .sidebar {
            height: 100%;
            background-color: #ffe9f4;
            width: 0;
            position: fixed;
            top: 0;
            right: 0;
            overflow-x: hidden;
            overflow-y: scroll;
            transition: 0.3s;
            padding-top: 60px;
            z-index: 1000;
        }

        .sidebar::-webkit-scrollbar {
            width: 0;
        }

        .sidebar .close-btn {
            position: absolute;
            top: 12px;
            right: 12px;
        }

        .sidebar-content {
            padding: 15px;
            display: grid;
            gap: 24px;
            grid-template-columns: 1fr 1fr;
        }

        .productCardSidebar {
            transition: all .2s ease-in-out;
        }

        .productCardSidebar:hover {
            scale: 1.02;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .productCardSidebar .imageContainer {
            max-width: 240px;
            max-height: 320px;
        }

        .imageContainer {
            display: inline-block;
            position: relative;
        }

        .imageContainer img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .imageContainer input[type="checkbox"] {
            z-index: 10;
            zoom: 1.25;
            position: absolute;
            top: 8px;
            left: 8px;
        }

        @keyframes blink {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @media (max-width: 1160px) {
            .productsList {
                grid-template-columns: 1fr 1fr 1fr;
            }
        }

        @media (max-width: 1000px) {
            .productsList {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .productContainer {
                grid-template-columns: 1fr;
            }

            .filtersContainer,
            .hideOnMobile {
                display: none;
            }

            .mobileBottomNavbar {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }

            .productsList {
                margin-bottom: 3rem;
            }

            .productCard .productCardHoverBtn,
            .productCard .similarBtn {
                opacity: 1;
            }

            .productCard:hover {
                transform: scale(1);
                box-shadow: none;
            }

            .quickViewBtn {
                display: none;
            }
        }
    </style>
    <?php include('include/header.php'); ?>
    <main>
        <div class="mobileBottomNavbar">
            <!-- <button class="btn border rounded-0"><i class="fa-solid fa-sort mr-1" ></i>SORT</button> -->
            <div class="dropup">
                <button class="btn btn-sm border dropdown-toggle text-center w-100" type="button"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-solid fa-sort mr-1"></i>SORT
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                    style="font-size: 14px;">
                    <a class="dropdown-item" href="#">Sort by Featured</a>
                    <a class="dropdown-item" href="#">Sort by Newest</a>
                    <a class="dropdown-item" href="#">Sort by Price: Low to High</a>
                    <a class="dropdown-item" href="#">Sort by Price: High to Low</a>
                    <a class="dropdown-item" href="#">Sort by Category</a>
                </div>
            </div>
            <button class="btn border rounded-0"><i class="fa-solid fa-filter mr-1"></i>FILTERS
                <span class="text-secondary" style="font-size: 13px;">(5)</span></button>
        </div>
        <div id="sidebar" class="sidebar">
            <button class="close-btn btn" onclick="closeSidebar()">❌</button>
            <div class="sidebar-content">
                <div class="text-center text-decoration-none productCardSidebar">
                    <a href="#" class="imageContainer">
                        <img src="./images/product-1.jpg" alt="">
                    </a>
                    <div class="pb-3">
                        <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem, ipsum.</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            <span class="font-weight-bold text-danger" style="font-size: 14px;">35%</span>
                        </p>
                    </div>
                </div>
                <div class="text-center text-decoration-none productCardSidebar">
                    <a href="#" class="imageContainer">
                        <img src="./images/product-1.jpg" alt="">
                    </a>
                    <div class="pb-3">
                        <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem, ipsum.</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            <span class="font-weight-bold text-danger" style="font-size: 14px;">35%</span>
                        </p>
                    </div>
                </div>
                <div class="text-center text-decoration-none productCardSidebar">
                    <a href="#" class="imageContainer">
                        <img src="./images/product-1.jpg" alt="">
                    </a>
                    <div class="pb-3">
                        <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem, ipsum.</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            <span class="font-weight-bold text-danger" style="font-size: 14px;">35%</span>
                        </p>
                    </div>
                </div>
                <div class="text-center text-decoration-none productCardSidebar">
                    <a href="#" class="imageContainer">
                        <img src="./images/product-1.jpg" alt="">
                    </a>
                    <div class="pb-3">
                        <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem, ipsum.</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            <span class="font-weight-bold text-danger" style="font-size: 14px;">35%</span>
                        </p>
                    </div>
                </div>
                <div class="text-center text-decoration-none productCardSidebar">
                    <a href="#" class="imageContainer">
                        <img src="./images/product-1.jpg" alt="">
                    </a>
                    <div class="pb-3">
                        <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem, ipsum.</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            <span class="font-weight-bold text-danger" style="font-size: 14px;">35%</span>
                        </p>
                    </div>
                </div>
                <div class="text-center text-decoration-none productCardSidebar">
                    <a href="#" class="imageContainer">
                        <img src="./images/product-1.jpg" alt="">
                    </a>
                    <div class="pb-3">
                        <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem, ipsum.</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            <span class="font-weight-bold text-danger" style="font-size: 14px;">35%</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="saleTimerStrip">
                <p class="m-0 text-secondary">Sale ends
                    in- <span>10</span>days:<span>10</span>hrs:<span>10</span>min:<span>10</span>sec
                </p>
            </div>
        </section>
        <section class="hideOnMobile">
            <div class="px-4 my-2">
                <ul class="d-flex" style="gap: 4px;font-size: 14px;">
                    <li><a href="#" class="text-secondary">Home /</a></li>
                    <li class="font-weight-bold">Products</li>
                </ul>
            </div>
            <div class="px-4 my-2">
                <p class="font-weight-bold">Men T-Shirts <span class="font-weight-normal text-secondary"
                        style="font-size: 14px;">- 100 items</span></p>
            </div>
        </section>
        <section>
            <div class="px-4 mt-4 hideOnMobile">
                <div style="font-size: 14px;">
                    <p class="font-weight-bold m-0">DELIVER TO PINCODE <button class="btn m-0"
                            style="font-size: 14px; color: blue;">221010<i class="fa-solid fa-pen ml-1"></i></button>
                    </p>
                    <!-- <form action="" class="d-flex align-items-center">
                        <input type="text" name="" class="form-control" style="width: 150px; font-size: 14px" id=""
                            placeholder="deliver to pincode">
                        <button class="btn m-0 ml-1"
                            style="font-size: 14px; background-color: var(--color1); color: white;">CHECK</button>
                    </form> -->
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="font-weight-bold d-flex align-items-center justify-content-between"
                        style="width: 220px;">
                        <p class="m-0">FILTERS <span>(2)</span></p>
                        <button class="btn bt-sm p-0" style="color: var(--color1); font-size: 14px;"><i
                                class="fa-solid fa-rotate-right mr-1"></i>Reset</button>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="dropdown">
                            <button class="btn btn-sm dropdown-toggle border" style="width: 200px; text-align: left;"
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa-solid fa-sort mr-1"></i>
                                Sort by Recommended
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                                style="font-size: 14px;">
                                <a class="dropdown-item" href="#">Sort by Featured</a>
                                <a class="dropdown-item" href="#">Sort by Newest</a>
                                <a class="dropdown-item" href="#">Sort by Price: Low to High</a>
                                <a class="dropdown-item" href="#">Sort by Price: High to Low</a>
                                <a class="dropdown-item" href="#">Sort by Category</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="productContainer">
                <div class="filtersContainer">
                    <div class="accordion" id="accordionExample">
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingOne">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        CATEGORIES
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">Half sleeve T-Shirts <span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">Full sleeve T-Shirts <span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingTwo">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        PRICE
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">From ₹100 to ₹200<span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">From ₹200 to ₹400<span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">From ₹400 to ₹500<span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">From ₹500 to ₹1000<span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingThree">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        COLOR
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">
                                        <div class="mr-1"
                                            style="background-color: black; padding: 8px; border-radius: 100vh;"></div>
                                        Black
                                        <span class="text-secondary ml-1" style="font-size: 11px;">(100+)</span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">
                                        <div class="mr-1"
                                            style="background-color: red; padding: 8px; border-radius: 100vh;"></div>
                                        Red
                                        <span class="text-secondary ml-1" style="font-size: 11px;">(100+)</span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">
                                        <div class="mr-1"
                                            style="background-color: Yellow; padding: 8px; border-radius: 100vh;"></div>
                                        Yellow
                                        <span class="text-secondary ml-1" style="font-size: 11px;">(100+)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingFour">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        DISCOUNT
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingFive">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        OCCASION
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingSix">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        LAUNCHED IN
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="shadow-sm pl-4 pt-2 pb-3 hideOnMobile">
                        <a href="#" class="text-secondary border rounded-pill p-1 text-decoration-none"
                            style="font-size: 12px;">T-Shirts<i class="fa-solid fa-xmark pl-1"></i></a>
                        <a href="#" class="text-secondary border rounded-pill p-1 text-decoration-none"
                            style="font-size: 12px;">T-Shirts<i class="fa-solid fa-xmark pl-1"></i></a>
                        <a href="#" class="text-secondary border rounded-pill p-1 text-decoration-none"
                            style="font-size: 12px;">T-Shirts<i class="fa-solid fa-xmark pl-1"></i></a>
                    </div>
                    <div class="productsList p-lg-4 p-md-3 p-sm-3 p-2">
                        <div class="productCard">
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
                                    <img src="./images/product-1.jpg"
                                        style="height: 320px; width: 100%; object-fit: cover;" alt="">
                                    <div class="productCardHoverBtn">
                                        <div class="quickViewBtn">
                                            <button><img src="./images/eye-icon.png" alt=""></button>
                                        </div>
                                        <div>
                                            <button><img src="./images/love-icon.png" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="./images/cards.png" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem, ipsum dolor.</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="font-weight-bold text-danger">35%</span>
                                    </p>
                                    <p class="border m-0 border-danger text-danger rounded-sm p-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <img src="./images/price-down.png" class="blinkingText" style="width: 16px"
                                            alt="">
                                        <span class="ml-1">Price dropped by ₹100</span>
                                    </p>
                                    <!-- <a href="#" class="text-dark d-block mt-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-crown" style="color: #FFC107;"></i>
                                        Club price:
                                        <span class="text-secondary">₹190</span>
                                        <i class="fa-solid fa-chevron-right ml-2"></i>
                                    </a> -->
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-dark"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1 text-secondary" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard">
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
                                    <img src="./images/product-1.jpg"
                                        style="height: 320px; width: 100%; object-fit: cover;" alt="">
                                    <div class="productCardHoverBtn">
                                        <div class="quickViewBtn">
                                            <button><img src="./images/eye-icon.png" alt=""></button>
                                        </div>
                                        <div>
                                            <button><img src="./images/love-icon.png" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="./images/cards.png" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem, ipsum dolor.</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="font-weight-bold text-danger">35%</span>
                                    </p>
                                    <p class="border m-0 border-danger text-danger rounded-sm p-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <img src="./images/price-down.png" class="blinkingText" style="width: 16px"
                                            alt="">
                                        <span class="ml-1">Price dropped by ₹100</span>
                                    </p>
                                    <!-- <a href="#" class="text-dark d-block mt-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-crown" style="color: #FFC107;"></i>
                                        Club price:
                                        <span class="text-secondary">₹190</span>
                                        <i class="fa-solid fa-chevron-right ml-2"></i>
                                    </a> -->
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-dark"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1 text-secondary" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard">
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
                                    <img src="./images/product-1.jpg"
                                        style="height: 320px; width: 100%; object-fit: cover;" alt="">
                                    <div class="productCardHoverBtn">
                                        <div class="quickViewBtn">
                                            <button><img src="./images/eye-icon.png" alt=""></button>
                                        </div>
                                        <div>
                                            <button><img src="./images/love-icon.png" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="./images/cards.png" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem, ipsum dolor.</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="font-weight-bold text-danger">35%</span>
                                    </p>
                                    <p class="border m-0 border-danger text-danger rounded-sm p-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <img src="./images/price-down.png" class="blinkingText" style="width: 16px"
                                            alt="">
                                        <span class="ml-1">Price dropped by ₹100</span>
                                    </p>
                                    <!-- <a href="#" class="text-dark d-block mt-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-crown" style="color: #FFC107;"></i>
                                        Club price:
                                        <span class="text-secondary">₹190</span>
                                        <i class="fa-solid fa-chevron-right ml-2"></i>
                                    </a> -->
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-dark"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1 text-secondary" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard">
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
                                    <img src="./images/product-1.jpg"
                                        style="height: 320px; width: 100%; object-fit: cover;" alt="">
                                    <div class="productCardHoverBtn">
                                        <div class="quickViewBtn">
                                            <button><img src="./images/eye-icon.png" alt=""></button>
                                        </div>
                                        <div>
                                            <button><img src="./images/love-icon.png" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="./images/cards.png" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem, ipsum dolor.</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="font-weight-bold text-danger">35%</span>
                                    </p>
                                    <p class="border m-0 border-danger text-danger rounded-sm p-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <img src="./images/price-down.png" class="blinkingText" style="width: 16px"
                                            alt="">
                                        <span class="ml-1">Price dropped by ₹100</span>
                                    </p>
                                    <!-- <a href="#" class="text-dark d-block mt-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-crown" style="color: #FFC107;"></i>
                                        Club price:
                                        <span class="text-secondary">₹190</span>
                                        <i class="fa-solid fa-chevron-right ml-2"></i>
                                    </a> -->
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-dark"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1 text-secondary" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard">
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
                                    <img src="./images/product-1.jpg"
                                        style="height: 320px; width: 100%; object-fit: cover;" alt="">
                                    <div class="productCardHoverBtn">
                                        <div class="quickViewBtn">
                                            <button><img src="./images/eye-icon.png" alt=""></button>
                                        </div>
                                        <div>
                                            <button><img src="./images/love-icon.png" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="./images/cards.png" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem, ipsum dolor.</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="font-weight-bold text-danger">35%</span>
                                    </p>
                                    <p class="border m-0 border-danger text-danger rounded-sm p-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <img src="./images/price-down.png" class="blinkingText" style="width: 16px"
                                            alt="">
                                        <span class="ml-1">Price dropped by ₹100</span>
                                    </p>
                                    <!-- <a href="#" class="text-dark d-block mt-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-crown" style="color: #FFC107;"></i>
                                        Club price:
                                        <span class="text-secondary">₹190</span>
                                        <i class="fa-solid fa-chevron-right ml-2"></i>
                                    </a> -->
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-dark"></i>
                                        </a>
                                    </p>
                                    <p class="m-0 mt-1 text-secondary" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        function openSidebar() {
            document.getElementById("sidebar").style.width = "376px";
        }

        function closeSidebar() {
            document.getElementById("sidebar").style.width = "0";
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>