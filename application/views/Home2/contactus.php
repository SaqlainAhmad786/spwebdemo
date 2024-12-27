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
        .rating span:hover ~ span {
            color: gold;
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

     
                
            <div class="row pt-lg-5  pt-md-5 pt-sm-5 pt-3 pb-3">

                <div class="col-3 d-sm-block d-none"> 
                    <p class="m-0 fs18 font-weight-bold text-dark"> HELP CENTER </p>
                    <p class="m-0 fs16">We are here to help you</p>
                </div>

             <div class="col-8 d-sm-block d-none"> 
                <div class="border d-flex justify-content-between p-3">
                    <span> <i class="fa fa-briefcase fs18"></i> <b class="fs12">TRACK, CANCEL, RETURN/EXCHANGE</b> 
                    </span>

                    <a href="<?php echo site_url('Home2/myOrder'); ?>" class="btn custom-btn fs12"> ORDERS </a>

                </div>

             </div>

            </div>

      


            <div class="row border-top mb-5 pb-5">
                <div class="d-lg-block d-md-block d-sm-none d-none col-3 overviewSidebar border-right">
                    <div class="mt-3">
                        <b class="m-0 fs10"> SELECT QUERY TYPE </b>
                        <ul>
                            <li class="d-flex justify-content-between"><a href="#" class="active"> Order Related Queries</a> <i class="fa fa-angle-right fs18" ></i> </li>
                            <li class="d-flex justify-content-between"><a href="#"> Non-order Related Issue </a> <i class="fa fa-angle-right fs18" ></i> </li>
                            <li class="d-flex justify-content-between"><a href="#">Recent Issue</a> <i class="fa fa-angle-right fs18" ></i> </li>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <ul>
                            <li class="d-flex justify-content-between"><a href="#"> Frequently Asked Questions </a> <i class="fa fa-angle-right fs18" ></i> </li>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <p class="m-0 fs12 font-weight-bold">  Want to reach us old style? Here is our </p>
                        <a href="#" class="text-primary"> Postal Address </a>
                    </div>
                   
                </div>

                <!-- profile details start  -->
                <div class="col-lg-9 col-md-9 col-sm-12 pb-5">

                <!-- start all order -->
                    <div class="row py-3 custom-bg-color">
                        
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-1">
                                            <i class="fa fa-times-circle" style="font-size:24px"></i>
                                        </div>
                                        <div class="col-11">
                                            <b> Cancelled </b> <br>
                                              <span> on Fri, 20 Dec as per your request </span>
                                            <br>
                                        </div>
                                    </div>

                                    <div class="row mx-1 py-1 custom-bg-color">
                                        <div class="col-1 px-sm-1 px-0">
                                            <img src="<?= base_url('public/images/jeans.webp') ?>" class="object-fit-contain"  alt="no-img">
                                        </div>
                                        <div class="col-10">
                                            <b> Refund Credited </b> <br>
                                            <span> Your refund of ₹450.00 for return has been proccessed jeans </span>
                                            <br>
                                            <p> Size : 34 </p>
                                        </div>
                                        <div class="col-1">
                                            <a href="<?php echo site_url('Home2/order_details'); ?>"> <i class="fa fa-angle-right" style="font-size:21px"></i> </a>
                                        </div>
                                        <div class="col-12">
                                            <div class="rating">
                                                <span data-value="5" onclick="rate(5)">☆</span>
                                                <span data-value="4" onclick="rate(4)">☆</span>
                                                <span data-value="3" onclick="rate(3)">☆</span>
                                                <span data-value="2" onclick="rate(2)">☆</span>
                                                <span data-value="1" onclick="rate(1)">☆</span>
                                              </div>
                                              <p> Rate & Review to <b> earn spweb </b> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <b>Contact Us</b>
                                    <p> Hi , let us help you with your queries </p>
                                    <div>
                                        <button type="button" class="btn custom-btn"> CHAT WITH US </button>
                                        <a href="tel:1234567890" class="btn custom-btn"> CALL US </a>
                                    </div>
                                </div>
                            </div>
                    </div>

                    </div>

                 <!-- end all order -->
                

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

    <script>
        function rate(value) {
            const stars = document.querySelectorAll('.rating span');
            stars.forEach(star => {
                star.style.color = parseInt(star.getAttribute('data-value')) <= value ? 'gold' : 'gray';
            });
            }
    </script>

    <?php include 'include/footer.php'; ?>
    <!-- <?php include 'include/modal.php'; ?> -->
    <?php include 'include/jsLinks.php'; ?>

</body>

</html>
