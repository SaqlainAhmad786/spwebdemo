<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Wishlist </title>
    <?php include('include/cssLinks.php'); ?>
</head>

<body>
<style>
        :root {
            --color1: #8340A1;
            --color2: #e83e8c;
            --color3: #068FFF;
            --color4: rgb(243 244 246);
            --color5: #683481;
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

        input[type="checkbox"] {
            accent-color: var(--color2);
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: var(--color2) !important;
        }

        img {
            width: 100%;
        }

        .btn:focus,
        a:focus,
        input[type="text"]:focus {
            box-shadow: none;
            outline: none;
        }

        .saleStrip {
            background-image: linear-gradient(to right, var(--color1), var(--color2));
            width: 50%;
            display: grid;
            grid-template-columns: 2fr 1fr;
            place-items: center;
            color: white;
            padding: 0 1rem;
            margin-top: 2rem;
            margin-inline: auto;
        }

        .selectBtns {
            display: flex;
            gap: 16px;
        }

        .selectBtns button {
            border: 1px solid var(--color4);
            background-color: transparent;
            padding: 4px 8px;
            border-radius: 4px;
            font-family: 'League Spartan', sans-serif;
            font-weight: 500;
            letter-spacing: 1px;
        }

        .continueBtn {
            border: 1px solid var(--color2);
            color: var(--color2);
            background-color: transparent;
            padding: 8px 30px;
            margin-top: 3rem;
            border-radius: 4px;
            transition: all .2s ease-in-out;
            font-family: 'League Spartan', sans-serif;
            font-weight: 500;
            letter-spacing: 1px;
        }

        .continueBtn:hover {
            background-color: var(--color2);
            color: white;
        }

        .productContainer {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            place-items: center;
            gap: 16px;
        }

        .productCard {
            transition: all .2s ease-in-out;
        }

        .productCard:hover {
            scale: 1.02;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .productCard .imageContainer {
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

        .outOfStockLayer {
            height: 100%;
            width: 100%;
            top: 0;
            position: absolute;
            z-index: 10;
            background-color: rgb(0, 0, 0, 0.5);
            backdrop-filter: blur(1px) grayscale(100%);
        }

        .outOfStockLayer img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 140px;
            height: 140px;
        }

        .stockTag {
            font-size: 12px;
            position: absolute;
            bottom: 2px;
            right: 2px;
            background-color: var(--color2);
            padding: 2px 4px;
        }

        .preorderTag {
            font-size: 12px;
            position: absolute;
            bottom: 2px;
            left: 2px;
            background-color: var(--color1);
            padding: 2px 4px;
        }

        .moveBtn {
            font-size: 14px;
            color: var(--color2);
            font-family: 'League Spartan', sans-serif;
            font-weight: 600;
            border-radius: 0;
        }

        .moveBtn:hover {
            background-color: var(--color2);
            color: white;
        }

        .notifyBtn {
            font-size: 14px;
            color: var(--color2);
            font-family: 'League Spartan', sans-serif;
            font-weight: 600;
            border-radius: 0;
        }

        .notifyBtn:hover {
            background-color: var(--color2);
            color: white;
        }

        @media (max-width: 1100px) {
            .productContainer {
                grid-template-columns: repeat(3, 1fr);
            }

            .saleStrip {
                width: 75%;
            }
        }

        @media (max-width: 800px) {
            .productContainer {
                grid-template-columns: repeat(2, 1fr);
                gap: 8px;
            }

            .saleStrip {
                width: 90%;
            }
        }

        body.modal-open {
            /* height: 100vh; */
            overflow-y: hidden;
        }

        dialog {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 2rem;
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

        dialog .x {
            filter: grayscale(1);
            border: none;
            background: none;
            position: absolute;
            top: 15px;
            right: 10px;
            transition: ease filter, transform 0.3s;
            cursor: pointer;
            transform-origin: center;
        }

        dialog .x:focus {
            outline: none;
        }

        dialog .x:hover {
            filter: grayscale(0);
            transform: scale(1.1);
        }

        dialog h2 {
            font-weight: 600;
            font-size: 2rem;
            padding-bottom: 1rem;
        }

        dialog p {
            font-size: 1rem;
            line-height: 1.3rem;
            padding: 0.5rem 0;
        }

        dialog p a:visited {
            color: #000;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .sizeBtn {
            background-color: white;
            border: 2px solid var(--color1);
            width: 40px;
            height: 40px;
            outline: none !important;
            border-radius: 12px;
            margin-top: 0.5rem;
            transition: all 200ms ease;
        }

        .sizeBtn:focus {
            background-color: var(--color2);
            color: white;
            border-color: var(--color2);
        }

        .sizeBtn:hover {
            background-color: var(--color2);
            color: white;
            border-color: var(--color2);
        }

        .stockBtns .outOfStock {
            position: relative;
            background-color: rgb(0, 0, 0, 0.35);
            pointer-events: none;
            cursor: not-allowed;
        }

        .outOfStock::after {
            content: "";
            position: absolute;
            top: -4px;
            left: 50%;
            transform: translateX(-50%) rotate(45deg);
            width: 1.5px;
            height: 44px;
            background-color: var(--color1);
            z-index: 2;
            border-radius: 12px;
        }
    </style>
    <?php include('include/header.php'); ?>
    <main>
        <section>
            <div class="saleStrip">
                <p class="m-0 p-0" style="font-size: 26px; font-weight: 600;">EXTRA 10% OFF</p>
                <div class="text-center py-2">
                    <p class="m-0 p-0">USE CODE:</p>
                    <p class="m-0 p-0" style="font-size: 28px; font-weight: 600;">SPFLAT20</p>
                </div>

            </div>
        </section>
        <section>
            <div class="px-lg-5 px-md-3 px-sm-3 px-3 mt-lg-5 mt-3 d-flex justify-content-between align-items-center"
                style="font-style: 'League Spartan';">
                <p class="font-weight-bold m-0" style="font-size: 20px;">My Wishlist <span
                        class="font-weight-normal text-secondary" style="font-size: 16px;">(0)</span></p>
                <button class="btn m-0 p-0 wishlistClearBtn"><i class="fa-solid fa-rotate-right mr-1"></i>Clear</button>
                <dialog class="dialog2" id="wishlistClearDialog">
                    <div>
                        <button id="" aria-label="close" class="x wishlistClearCloseBtn">❌</button>
                        <p class="font-weight-bold text-left m-0 p-0"
                            style="font-family: 'League Spartan'; font-size: 32px;">Are you
                            sure?</p>
                        <hr class="my-2" />
                        <p class="text-secondary">Are you sure you want to clear your wishlist?</p>
                        <div>
                            <button class="btn w-100 rounded-sm"
                                style="background-color: var(--color1); color: white;">Confirm</button>
                        </div>
                    </div>
                </dialog>
                <!-- <div class="selectBtns">
                    <button><i class="fa-solid fa-cart-shopping"></i><span
                            class="d-none d-lg-inline d-md-inline d-sm-none"> Move to
                            Cart</span></button>
                    <button><i class="fa-solid fa-trash"></i><span class="d-none d-lg-inline d-md-inline d-sm-none">
                            Remove</span></button>
                </div> -->
            </div>
        </section>
        <section>
            <!-- <div class="px-3 px-lg-5 mt-3">
                <div class="mt-5 text-center">
                    <p class="m-0 mb-1 font-weight-bold text-uppercase"
                        style="font-size: 22px; font-family: 'League Spartan';">No items in
                        wishlist</p>
                    <p class="m-0 text-secondary" style="font-size: 14px;">Add items you like to your wishlist. Review
                        them anytime and effortlessly move them to your bag.
                    </p>
                    <img class="mt-4" src="./images/wishlist.png"
                        style="width: 100%; height: 180px; object-fit: contain;" alt="">
                    <button class="continueBtn">CONTINUE SHOPPING</button>
                </div>
            </div> -->
            <div class="px-3 px-lg-5 my-3 productContainer">
                <div class="text-center text-decoration-none productCard">
                    <a href="#" class="imageContainer">
                        <div class="outOfStockLayer">
                            <img src="./images/out-of-stock.png" alt="out of stock icon">
                        </div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRW2NXkjmT8p4x4kMkg73c2OJCrHncQbn26gg&s" alt="">
                        <input type="checkbox" name="" id="">
                        <!-- <div class="stockTag">
                            <p class="m-0 text-white font-weight-bold">5 left!</p>
                        </div>
                        <div class="preorderTag">
                            <p class="m-0 text-white font-weight-bold">Pre-Order</p>
                        </div> -->
                    </a>
                    <div class="border pb-3">
                        <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem, ipsum.</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            <span class="font-weight-bold text-danger" style="font-size: 14px;">35%</span>
                        </p>
                    </div>
                    <!-- <button class="btn border-top w-100 mt-3 moveBtn">MOVE TO
                        CART</button> -->
                    <button class="btn border w-100 notifyBtn
                    notifyBtn">NOTIFY ME</button>
                    <dialog class="dialog2 notifyDialog text-left" id="notifyDialog">
                        <div>
                            <button id="" aria-label="close" class="x notifyCloseBtn">❌</button>
                            <p class="font-weight-bold text-left m-0 p-0"
                                style="font-family: 'League Spartan'; font-size: 28px;">Get notified</p>
                            <hr class="my-2" />
                            <p class="text-secondary p-0">Get notified by email or WhatsApp for size restocks, price
                                drops,
                                or availability.</p>
                            <form>
                                <input type="text" name="" id="" placeholder="Enter Email id or WhatsApp number"
                                    class="form-control">
                                <button class="btn w-100 rounded-sm mt-2"
                                    style="background-color: var(--color1); color: white;">Confirm</button>
                            </form>
                        </div>
                    </dialog>
                </div>
                <div class="text-center text-decoration-none productCard">
                    <a href="#" class="imageContainer">
                        <!-- <div class="outOfStockLayer">
                            <img src="./images/out-of-stock.png" alt="">
                        </div> -->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRW2NXkjmT8p4x4kMkg73c2OJCrHncQbn26gg&s" alt="">
                        <input type="checkbox" name="" id="">
                        <div class="stockTag">
                            <p class="m-0 text-white font-weight-bold">5 left!</p>
                        </div>
                        <div class="preorderTag">
                            <p class="m-0 text-white font-weight-bold">Pre-Order</p>
                        </div>
                    </a>
                    <div class="border pb-3">
                        <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem, ipsum.</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            <span class="font-weight-bold text-danger" style="font-size: 14px;">35%</span>
                        </p>
                    </div>
                    <button class="btn border w-100 moveBtn">MOVE TO
                        CART</button>
                    <dialog class="dialog" id="dialog">
                        <div>
                            <div class="d-flex">
                                <img src="./images/product-1.jpg" style="width: 80px;" alt="">
                                <div class="ml-3 text-left">
                                    <p class="m-0 p-0">Lorem, ipsum.</p>
                                    <p class="m-0 p-0 text-secondary" style="font-size: 14px;">Lorem, ipsum.</p>
                                    <p class="m-0 p-0">
                                        <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                                        <span class="text-secondary"
                                            style="text-decoration: line-through; font-size: 14px;">₹
                                            2,999</span>
                                        <span class="font-weight-bold text-danger" style="font-size: 14px;">35%</span>
                                    </p>
                                </div>
                            </div>
                            <hr class="my-2" />
                            <p class="font-weight-bold text-left m-0 p-0"
                                style="font-family: 'League Spartan'; font-size: 16px;">SELECT SIZE</p>
                            <div class="text-left mt-2 stockBtns">
                                <button class="sizeBtn">XS</button>
                                <button class="sizeBtn outOfStock">S</button>
                                <button class="sizeBtn">M</button>
                                <button class="sizeBtn">L</button>
                                <button class="sizeBtn">XL</button>
                                <button class="sizeBtn">XXL</button>
                            </div>
                            <button class="btn w-100 mt-4"
                                style="background-color: var(--color1); color: white;">DONE</button>
                            <button id="closeModalBtn" aria-label="close" class="x closeModalBtn">❌</button>
                        </div>
                    </dialog>
                    <!-- <button class="btn border w-100 notifyBtn
                    notifyBtn">NOTIFY ME</button> -->
                    <dialog class="dialog2 notifyDialog text-left" id="notifyDialog">
                        <div>
                            <button id="" aria-label="close" class="x notifyCloseBtn">❌</button>
                            <p class="font-weight-bold text-left m-0 p-0"
                                style="font-family: 'League Spartan'; font-size: 28px;">Get notified</p>
                            <hr class="my-2" />
                            <p class="text-secondary p-0">Get notified by email or WhatsApp for size restocks, price
                                drops,
                                or availability.</p>
                            <form>
                                <input type="text" name="" id="" placeholder="Enter email address" class="form-control">
                                <button class="btn w-100 rounded-sm mt-2"
                                    style="background-color: var(--color1); color: white;">Confirm</button>
                            </form>
                        </div>
                    </dialog>
                </div>
            </div>
        </section>
    </main>
    <script>
        const moveBtns = document.querySelectorAll('.moveBtn');
        const modal = document.querySelectorAll('.dialog')
        const closeModalBtn = document.querySelectorAll('.closeModalBtn')
        const wishlistClearBtn = document.querySelector('.wishlistClearBtn')
        const wishlistClearDialog = document.getElementById('wishlistClearDialog')
        const wishlistClearCloseBtn = document.querySelector('.wishlistClearCloseBtn')
        const notifyBtn = document.querySelectorAll('.notifyBtn')
        const notifyDialog = document.querySelectorAll('.notifyDialog')
        const notifyCloseBtn = document.querySelectorAll('.notifyCloseBtn')

        moveBtns.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                modal[i].showModal();
                document.body.classList.toggle('modal-open');
            })
        })

        closeModalBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                modal[i].close();
                document.body.classList.toggle('modal-open');
                console.log(i)
            })
        })

        wishlistClearBtn.addEventListener('click', () => {
            wishlistClearDialog.showModal();
            document.body.classList.toggle('modal-open');
        })

        wishlistClearCloseBtn.addEventListener('click', () => {
            wishlistClearDialog.close();
            document.body.classList.toggle('modal-open');
        })

        notifyBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                notifyDialog[i].showModal();
                document.body.classList.toggle('modal-open');
            })
        })

        notifyCloseBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                notifyDialog[i].close();
                document.body.classList.toggle('modal-open');
                console.log(i)
            })
        })

    </script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>