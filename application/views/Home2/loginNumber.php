<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Login </title>
    <?php include('include/cssLinks.php'); ?>
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

        main{
            background-image: linear-gradient(127deg, #feedf4 0%, #fcf0e3 100%);
            height: 80vh;
        }

        ul {
            list-style-type: none;
        }

        input {
            font-family: 'Inter', sans-serif;
        }

        img {
            width: 100%;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        input[type="checkbox"] {
            accent-color: var(--color2);
        }

        .container {
            height: 48px;
            position: relative;
            width: 100%;
            background-color: var(--color4);
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
        }

        .container input {
            width: 100%;
            background: transparent;
            outline: none;
            border: none;
            color: #222;
            padding-top: 18px;
        }

        .container label {
            position: absolute;
            left: 8px;
            top: 12px;
            color: rgba(105, 105, 105, 0.7);
            pointer-events: none;
            transition: .3s;
        }

        .container input:valid~label,
        .container input:focus~label {
            color: var(--color1);
            transform: translateY(-12px);
            font-size: .65rem;
        }

        .container i {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: #222;
        }

        .container i:before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: gray;
            /* background: linear-gradient(90deg, #ff1b69, #ff0, #2196f3, #9c27b0, #ff1b69); */
            animation: animate 3s linear infinite;
        }

        .container input:focus~i:before {
            background-color: var(--color1);
        }

        .inputGroup :is(input:focus, input:valid) {
            border-color: rgb(150, 150, 200);
        }

        .loginBtn {
            width: 100%;
            background-color: var(--color1);
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 2px;
            cursor: pointer;
            margin-bottom: 8px;
        }

        .loginBtn.disabled {
            background-color: gray;
            cursor: not-allowed;
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
        <div class="loginContainer bg-white mx-auto mt-5 shadow my-lg-4 my-md-2" style="max-width: 400px;">
            <div>
                <img src="https://static.vecteezy.com/system/resources/previews/005/405/595/non_2x/special-offer-sale-banner-besign-discount-label-and-sticker-for-media-promotion-product-free-vector.jpg" alt="">
            </div>
            <div class="p-4">
                <h1 class="mb-2" style="font-size: 20px; color: gray; font-family: 'League Spartan', sans-serif;">
                    <span style="font-size: 24px; color: black;;">Login</span> or <span
                        style="font-size: 24px; color: black;;">Signup</span>
                </h1>
                <p class="mb-1" style="font-size: 12px; color: var(--color1);">Please enter your mobile number and verify with OTP</p>
                <form>
                <div class="container">
                        <input type="number" id="number" required="true">
                        <label>Mobile number</label>
                        <i></i>
                    </div>
                    <div class="container" style="margin-top: 20px;">
                        <input type="text" id="referral" required>
                        <label>Referral code (optional)</label>
                        <i></i>
                    </div>
                    <div class="d-flex align-items-center mt-2 mb-4"
                        style="gap: 4px;font-size: 12px;font-weight: 500; color: var(--color1);">
                        <input type="checkbox" id="tandc">
                        <label class="m-0" for="tandc">I ACCEPT TERMS AND CONDITIONS</label>
                    </div>
                    <p class="mb-2" style="font-size: 12px;">By continuing, I agree to the <a href="#"
                            style="color: var(--color1); font-weight: 600;">Terms of Use</a>
                        and <a href="#" style="color: var(--color1); font-weight: 600;">Privacy Policy</a></p>
                    <button type="submit" class="loginBtn disabled" disabled>LOGIN</button>
                    <p class="text-center" style="font-size: 14px; color: gray;">Login via <a href="./loginEmail.html"
                            style="color: var(--color1); font-weight: 600;">Email</a>
                    </p>
                    <p class="text-center mt-4 mb-0" style="font-size: 12px; color: gray;">Having Trouble? <a
                            href="mailto:me@example.com?subject=Me&body=HELP!!!"
                            style=" color: var(--color1); font-weight: 600;">Get Help</a></p>
                </form>
            </div>
        </div>
    </main>
    <script>
        const number = document.getElementById('number')

        number.addEventListener('input', validate)

        function validate() {
            if (number.value.length === 10) {
                document.querySelector('.loginBtn').removeAttribute('disabled')
                document.querySelector('.loginBtn').classList.remove('disabled')
            } else {
                document.querySelector('.loginBtn').disabled = true
            }
        }
        validate()
    </script>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>