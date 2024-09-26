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
        .fs10{
            font-size: 10px;
        }
        .fs12{
            font-size: 12px;
        }
        .fs16{
            font-size: 16px;
        }

        main {
            max-width: 1560px;
            margin-inline: auto;
        }

        a:hover{
            text-decoration: none;
            color: black;
        }
        
        .swiper {
            width: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .swiper-slide img {
            display: block;
        }

        .swiper-button-next,
        .swiper-button-prev{
            background-color:var(--maincolor);
            font-size: 16px;
            border-radius: 100vh;
            padding: 0px 22px;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after{
            color: white;
            font-size: 12px;
            font-weight: 900;
        }

        .swiper-button-prev.swiper-button-disabled, .swiper-button-next.swiper-button-disabled{
            display: none;
        }
    </style>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main>
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
        // var swiper1 = new Swiper('.offerSwiper', {
        //         slidesPerView: 1,
        //         spaceBetween: 24,
        //         autoplay:true,
        //         loop: true,
        //         breakpoints: {
        //             300: {
        //                 slidesPerView: 1,
        //             },
        //             768: {
        //                 slidesPerView: 2
        //             },
        //             1024: {
        //                 slidesPerView: 2
        //             }
        //         }
        // });
        
    </script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>