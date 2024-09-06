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
            background-image: linear-gradient(127deg, #feedf4 0%, #fcf0e3 100%);
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

        .inputGroup .errorMsg{
            display: none;
            font-size:12px;
        }

        .inputFieldContainer{
            /* border: 1px solid #d4d5d9; */
            margin-bottom: 16px;
            transition: all 200ms ease-in-out;
        }

        .inputFieldContainer input{
            width: 100%;
            border: 1px solid #d4d5d9;
            outline: none;
            padding: 6px;
        }

        .inputFieldContainer input:focus{
            border-color: var(--color1);
        }

        .inputFieldContainer input:focus .inputFieldContainer{
            border-color: var(--color2);
        }

        .inputFieldContainer span{
            color: rgb(150, 150, 150);
        }

        .inputFieldContainer input::placeholder{
            color: rgb(150, 150, 150);
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
    </style>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main>
        <div class="loginContainer bg-white mx-auto mt-5 shadow" style="max-width: 400px;">
            <div>
                <img src="<?=base_url('assets/new_website/img/login-cover.jpg')?>" alt="">
            </div>
            <div class="px-4 py-3">
                <h1 class="mb-2" style="font-size: 20px; color: gray; font-family: 'League Spartan', sans-serif;">
                    <span style="font-size: 24px; color: black;;">Login</span> or <span
                        style="font-size: 24px; color: black;;">Signup</span>
                </h1>
                <p class="mb-1" style="font-size: 12px; color: var(--color1);">Please enter your email address and verify with OTP</p>
                <form id="loginForm">
                    <div class="inputGroup">
                        <p class="m-0 p-0 errorMsg text-danger"><i class="fa-solid fa-triangle-exclamation mr-1"></i>Please enter a valid mobile number</p>
                        <div class="inputFieldContainer container1">
                            <input type="text" class="emailInput" id="email" required="true" maxlength="10" placeholder="example@company.com">
                        </div>
                        <div class="inputFieldContainer container2">
                            <input type="text" class="referralInput" id="referral" placeholder="Referral code (optional)">
                        </div>
                    </div>
                    <p id="referralErrorMsg" class="text-danger mt-1" style="font-size: 12px; display: none;"><i
                            class="fa-solid fa-triangle-exclamation mr-1"></i>Please enter a valid referral code</p>
                    <div class="d-flex align-items-center mb-4"
                        style="gap: 4px;font-size: 12px;font-weight: 500; color: var(--color1);">
                        <input type="checkbox" id="tandc">
                        <label class="m-0" for="tandc">I ACCEPT TERMS AND CONDITIONS</label>
                    </div>
                    <p class="mb-2" style="font-size: 12px;">By continuing, I agree to the <a href="#"
                            style="color: var(--color1); font-weight: 600;">Terms of Use</a>
                        and <a href="#" style="color: var(--color1); font-weight: 600;">Privacy Policy</a></p>
                    <button type="submit" class="loginBtn">LOGIN</button>
                    <p class="text-center" style="font-size: 14px; color: gray;">Login via <a href="./loginNumber.html"
                            style="color: var(--color1); font-weight: 600;">Mobile number</a>
                    </p>
                    <p class="text-center mb-0" style="font-size: 12px; color: gray;">Having Trouble? <a
                            href="mailto:me@example.com?subject=Me&body=HELP!!!"
                            style="color: var(--color1); font-weight: 600;">Get Help</a></p>
                </form>
            </div>
        </div>
    </main>
    <script>
        const email = document.getElementById('email')
        const referral = document.getElementById('referral')
        const loginForm = document.getElementById('loginForm')
        const errorMsg = document.querySelector('.errorMsg')
        const referralErrorMsg = document.getElementById('referralErrorMsg')

        // email.addEventListener('focus', () => {
        //     email.setAttribute('placeholder', 'example@company.com')
        // })

        // email.addEventListener('blur', () => {
        //     email.setAttribute('placeholder', '')
        // })

        // referral.addEventListener('focus', () => {
        //     referral.setAttribute('placeholder', 'Referral code')
        //     referralErrorMsg.style.display = 'none'
        // })

        // referral.addEventListener('blur', () => {
        //     referral.setAttribute('placeholder', '')
        // })

        email.addEventListener('input', () => {
            errorMsg.style.display = 'none'
            email.style.borderColor = '#d4d5d9'
        })
        
        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/

        loginForm.addEventListener('submit', (e) => {
            e.preventDefault()
            if (!email.value.match(pattern)) {
                errorMsg.style.display = 'block'
                email.style.borderColor = 'red'
                return
            }
        })

    </script>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>