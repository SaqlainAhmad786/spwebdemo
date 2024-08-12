<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Home </title>
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
            background-color: #e83e8c15;
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

        .inputGroup {
            font-family: 'Inter', sans-serif;
            margin: 0.5em 0 1em 0;
            position: relative;
        }

        .inputGroup input {
            font-size: 100%;
            padding: 0.8em;
            outline: none;
            border: 2px solid rgb(200, 200, 200);
            background-color: var(--color4);
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border: none;
            border-bottom: 2px solid rgb(0, 0, 0, 0.2);
            width: 100%;
        }

        .inputGroup label {
            font-size: 100%;
            position: absolute;
            left: 0;
            padding: 0.8em;
            margin-left: 0.5em;
            pointer-events: none;
            transition: all 0.3s ease;
            color: rgb(100, 100, 100);
        }

        .inputGroup :is(input:focus, input:valid)~label {
            transform: translateY(-50%) scale(.8);
            margin: 0em;
            margin-top: 0.5em;
            margin-left: 0em;
            /* padding: 0em; */
            color: var(--color1);
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
        <div class="loginContainer bg-white mx-auto mt-5 shadow" style="max-width: 400px;">
            <div>
                <img src="./images/login-cover.jpg" alt="">
            </div>
            <div class="p-4">
                <h1 class="mb-2" style="font-size: 20px; color: gray; font-family: 'League Spartan', sans-serif;">
                    <span style="font-size: 24px; color: black;;">Login</span> or <span
                        style="font-size: 24px; color: black;;">Signup</span>
                </h1>
                <p class="mb-1" style="font-size: 12px; color: var(--color1);">Kindly enter your 10 digit mobile number
                    and verify using OTP</p>
                <form>
                    <div class="inputGroup">
                        <input type="number" maxlength="10" inputmode="numeric" id="number" required>
                        <label for="number">Mobile number</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" required>
                        <label for="referral">Referral code (optional)</label>
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
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>