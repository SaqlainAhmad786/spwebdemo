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

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .inputs {
            display: flex;
            margin-bottom: 16px;
        }

        .inputs input {
            flex: 1;
            padding: 8px;
            border: 1px solid rgb(0, 0, 0, 0.2);
            margin-right: 8px;
            outline: none;
            max-width: 32px;
            transition: all 0.3s ease;
        }

        .inputs input:focus {
            border: 1px solid var(--color1);
        }

        .verifyBtn {
            font-family: 'League Spartan', sans-serif;
            font-size: 16px;
            width: 100%;
            background-color: var(--color1);
            padding: 8px 16px;
            border-radius: 4px;
            color: white;
            margin-top: 16px;
        }
    </style>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main class="d-flex align-items-center" style="min-height: 90vh;">
        <div class="bg-white px-4 py-4 mx-auto shadow" style="width:30%; min-width: 360px; border-radius: 8px;">
            <!-- <a class="d-block mb-4" href="loginEmail.html">
                <i class="fa-solid fa-arrow-left"></i>
            </a> -->
            <h1 class="my-2"
                style="font-size: 24px; color: black;font-family: 'League Spartan', sans-serif; font-weight: 600;">
                Verify with OTP
            </h1>
            <p class="mb-1" style="font-size: 14px; color: gray;">Enter the OTP sent to your mobile number/email</p>
            <p class="mb-4" style="font-size: 16px;font-weight: 600;">+91 9876543210</p>
            <form id="otpForm" onsubmit="onFormSubmit(event)">
                <div class="inputs" id="inputs">
                    <input type="number" inputmode="numeric" class="otpValue">
                    <input type="number" inputmode="numeric" class="otpValue">
                    <input type="number" inputmode="numeric" class="otpValue">
                    <input type="number" inputmode="numeric" class="otpValue">
                    <input type="number" inputmode="numeric" class="otpValue">
                    <input type="number" inputmode="numeric" class="otpValue">
                </div>
                <p class="text-danger" id="otpErrorMsg" style="font-size: 12px;display: none;"><i
                        class="fa-solid fa-triangle-exclamation mr-1"></i>The
                    OTP does not match</p>
                <!-- <button class="px-2 py-1 bg-transparent"
                    style="font-family: 'League Spartan', sans-serif; font-size: 16px;border: 1px solid rgb(0, 0, 0, 0.2);">Resend
                    OTP</button> -->
                <p style="color: gray; font-size: 14px;">Resend OTP in <span id="time">00:00</span></p>
                <p class="text-center mt-5 mb-0" style="font-size: 12px; color: gray;">Having Trouble? <a
                        href="mailto:me@example.com?subject=Me&body=HELP!!!"
                        style="color: var(--color1); font-weight: 600;">Get Help</a></p>
            </form>
        </div>
    </main>
    <script>
        const inputs = document.getElementById("inputs");
        const otp = document.querySelectorAll(".otpValue");
        const otpForm = document.getElementById("otpForm");

        inputs.addEventListener("input", function (e) {
            const target = e.target;
            const val = target.value;

            if (isNaN(val)) {
                target.value = "";
                return;
            }

            if (val != "") {
                const next = target.nextElementSibling;
                if (next) {
                    next.focus();
                }
            }
        });

        inputs.addEventListener("keyup", function (e) {
            const target = e.target;
            const key = e.key.toLowerCase();

            if (key == "backspace" || key == "delete") {
                target.value = "";
                const prev = target.previousElementSibling;
                if (prev) {
                    prev.focus();
                    prev.value = "";
                }
                return;
            }
        });
    </script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>