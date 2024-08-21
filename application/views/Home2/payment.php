<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Address </title>
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

        body.modal-open {
            overflow-y: hidden;
        }

        ul {
            list-style-type: none;
        }

        input {
            font-family: 'Inter', sans-serif;
        }

        input[type="checkbox"],
        input[type="radio"] {
            accent-color: var(--color2) !important;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        textarea:focus {
            border-color: var(--color2) !important;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        img {
            width: 100%;
        }

        .btn:focus,
        a:focus,
        input[type="text"]:focus,
        input[type="number"]:focus {
            box-shadow: none;
            outline: none;
        }

        .stepper-wrapper {
            max-width: 500px;
            font-family: 'League Spartan', sans-serif;
            margin-inline: auto;
            display: flex;
            justify-content: space-between;
            margin-block: 20px;
        }

        .stepper-item {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;

            @media (max-width: 768px) {
                font-size: 12px;
            }
        }

        .stepper-item::before {
            position: absolute;
            content: "";
            border-bottom: 2px solid #ccc;
            width: 100%;
            top: 20px;
            left: -50%;
            z-index: 2;
        }

        .stepper-item::after {
            position: absolute;
            content: "";
            border-bottom: 2px solid #ccc;
            width: 100%;
            top: 20px;
            left: 50%;
            z-index: 2;
        }

        .stepper-item .step-counter {
            position: relative;
            z-index: 5;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #ccc;
            margin-bottom: 6px;
        }

        .stepper-item.active {
            font-weight: 500;
            color: var(--color2);
        }

        .stepper-item.completed .step-counter {
            background-color: var(--color1);
            color: white;
        }

        .stepper-item.completed::after {
            position: absolute;
            content: "";
            border-bottom: 2px solid var(--color2);
            width: 100%;
            top: 20px;
            left: 50%;
            z-index: 3;
        }

        .stepper-item:first-child::before {
            content: none;
        }

        .stepper-item:last-child::after {
            content: none;
        }

        .cartContainer {
            width: 70%;
            display: grid;
            gap: 16px;
            grid-template-columns: 3fr 2fr;
            margin-inline: auto;
        }

        .recommendPayments {
            transition: all .2s ease-in-out;
        }

        .recommendPayments p {
            font-size: 14px;
        }

        .recommendPayments:hover {
            scale: 1.01;
            box-shadow: 0 0 4px 2px rgba(0, 0, 0, 0.1);
        }

        .recommendPayments .icon {
            border: 1px solid #ccc;
            border-radius: 100vh;
            padding: 4px 7px;
        }

        .recommendPayments .icon2 {
            border: 1px solid #ccc;
            border-radius: 100vh;
            padding: 3px 4px;
        }

        .recommendPayments .icon2 i {
            padding-top: 4px;
        }

        @media (width<1150px) {
            .cartContainer {
                width: 80%;
            }
        }

        @media (width<950px) {
            .cartContainer {
                width: 95%;
            }
        }

        @media (width<900px) {
            .cartContainer {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <?php include('include/header.php'); ?>
    <main>
        <section>
            <div class="stepper-wrapper">
                <div class="stepper-item completed">
                    <div class="step-counter">1</div>
                    <div class="step-name">CART</div>
                </div>
                <div class="stepper-item completed">
                    <div class="step-counter">2</div>
                    <div class="step-name">ADDRESS</div>
                </div>
                <div class="stepper-item active">
                    <div class="step-counter">3</div>
                    <div class="step-name">PAYMENT</div>
                </div>
            </div>
        </section>
        <section>
            <div class="cartContainer mb-2">
                <div class="mt-lg-3 mt-md-3 mt-sm-0 mt-0">
                    <div>
                        <div style="font-family: 'League Spartan', sans-serif';">
                            <p class="text-secondary m-0 p-0 text-dark font-weight-bold">Choose payment mode</p>
                        </div>
                        <div class="mt-4">
                            <p class="text-secondary m-0 p-0 font-weight-bold" style="font-size: 10px;">RECOMMENDED
                                PAYMENT MODE</p>
                            <div class="d-flex flex-column mt-1">
                                <label for="pod"
                                    class="d-flex align-items-center justify-content-between p-3 mb-0 recommendPayments">
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="recommendPayment" id="pod" value="pod" />
                                        <p class="m-0 p-0 ml-2 font-weight-bold">Pay on delivery</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-money-bill-wave"></i>
                                    </div>
                                </label>
                                <hr class="my-0">
                                <label for="online"
                                    class="d-flex align-items-center justify-content-between p-3 recommendPayments">
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="recommendPayment" id="online" value="online" />
                                        <p class="m-0 p-0 ml-2 font-weight-bold">Gpay</p>
                                    </div>
                                    <div class="icon2">
                                        <i class="fa-brands fa-google-pay" style="font-size: 20px;"></i>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="text-secondary m-0 p-0 font-weight-bold" style="font-size: 10px;">ONLINE PAYMENT
                                METHODS</p>
                            <div class="card py-2 rounded-lg mt-1 border-0">
                                <div class="" id="headingOne">
                                    <button
                                        class="btn btn-block text-left font-weight-bold text-dark align-items-center"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="font-weight-bold">
                                            <img src="./images/upi.png" style="width: 20px;" alt="">
                                            UPI
                                            <span class="font-weight-normal">(Pay with any UPI app)</span></span>
                                        <i class="fa-solid fa-caret-down float-right mt-1"></i>
                                    </button>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="">
                                    <div class="card-body p-0 px-3 pb-2 mt-2"
                                        style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                        <label for="gpay" class="d-flex align-items-center justify-content-between p-2">
                                            <div class="d-flex align-items-center">
                                                <input type="radio" name="onlinePayments" id="gpay" value="gpay" />
                                                <div class="ml-2">
                                                    <img src="./images/gpay-icon.png" style="width: 20px;" alt="">
                                                </div>
                                                <p class="m-0 p-0 ml-2 font-weight-bold">Gpay</p>
                                            </div>
                                        </label>
                                        <label for="phonepe"
                                            class="d-flex align-items-center justify-content-between p-2">

                                            <div class="d-flex align-items-center">
                                                <input type="radio" name="onlinePayments" id="phonepe"
                                                    value="phonepe" />
                                                <div class="icon2 ml-2">
                                                    <img src="./images/phonepe.png" style="width: 20px;" alt="">
                                                </div>
                                                <p class="m-0 p-0 ml-1 font-weight-bold">PhonePe</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0">
                            <div class="card py-2 rounded-lg mt-1 border-0">
                                <div class="" id="headingTwo">
                                    <button
                                        class="btn btn-block text-left font-weight-bold text-dark align-items-center"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        <span class="font-weight-bold">
                                            <i class="fa-solid fa-credit-card mr-1"></i>
                                            Credit/Debit card
                                            <i class="fa-solid fa-caret-down float-right mt-1"></i>
                                    </button>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="">
                                    <div class="card-body p-0 px-3 pb-2 mt-2"
                                        style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                        <p>Please ensure your card can be used for online payments<i
                                                class="fa-solid fa-info-circle ml-1" style="color: var(--color2);"></i>
                                        </p>
                                        <form>
                                            <input type="number" class="form-control mt-2" id="cardNumber"
                                                name="cardNumber" placeholder="Card number*" style="font-size: 14px;"
                                                required>
                                            <input type="text" class="form-control mt-2" id="fullName" name="fullName"
                                                placeholder="Name on card*" style="font-size: 14px;" required>
                                            <div class="d-flex" style="gap: 8px;">
                                                <input type="text" class="form-control mt-2" id="validThru"
                                                    name="validThru" placeholder="Valid thru (MM/YY)*"
                                                    style="font-size: 14px;" required>
                                                <input type="number" class="form-control mt-2" id="cvv" name="cvv"
                                                    placeholder="CVV*" style="font-size: 14px;" required>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="text-secondary m-0 p-0 font-weight-bold" style="font-size: 10px;">PAY ON DELIVERY
                                OPTION</p>
                            <div>
                                <label for="cod" class="w-100 p-3 mb-0 recommendPayments">
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="cod" id="cod" value="cod" />
                                        <p class="m-0 p-0 ml-2 font-weight-bold">Cash on delivery
                                            <span class="font-weight-normal">(CASH/UPI)</span></p>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-lg-3 mt-md-3 mt-sm-0 mt-0">
                    <div class="mt-4">
                        <p class="text-secondary m-0 p-0 font-weight-bold" style="font-size: 12px;">PRICE DETAILS
                            <span>(1 item)</span>
                        </p>
                        <div class="mt-2" style="font-size: 14px;">
                            <p>Total MRP <span class="float-right">₹399</span></p>
                            <p>Platform fee<i class="fa-solid fa-info-circle ml-1" style="color: var(--color2);"></i>
                                <span class="float-right">₹399</span>
                            </p>
                            <p>Delivery charges<i class="fa-solid fa-info-circle ml-1"
                                    style="color: var(--color2);"></i> <span class="float-right">₹399</span></p>
                            <hr>
                            <p class="font-weight-bold text-dark">Total Amount <span class="float-right">₹399</span></p>
                        </div>
                        <button class="btn btn-block font-weight-bold text-light"
                            style="font-size: 14px; background-color: var(--color2);">PAY NOW</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>