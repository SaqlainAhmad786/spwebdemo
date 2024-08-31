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

        .sidebar {
            height: 100%;
            background-color: #fff;
            width: 0;
            position: fixed;
            top: 0;
            right: 0;
            overflow-x: hidden;
            overflow-y: scroll;
            transition: 0.3s;
            padding-top: 60px;
            z-index: 1000;
            /* box-shadow: -4px 0px 2px 4px rgb(0, 0, 0,0.5) ; */
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
            display: grid;
            gap: 8px;
            padding-inline: 16px;
            margin-bottom: 16px;
        }

        .addressBtn {
            font-size: 14px;
            border: 1px solid var(--color2);
            border-radius: 100vh;
        }

        .addressBtn:hover {
            background-color: var(--color2);
            color: white;
        }

        .addressBtn:focus {
            background-color: var(--color2);
            color: white;
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
    <main>
        <div id="addressSidebar" class="sidebar" style="z-index: 1000;">
            <button class="close-btn btn" onclick="closeAddressSidebar()">❌</button>
            <div class="sidebar-content">
                <div>
                    <p class="font-weight-bold m-0" style="font-size: 20px"><i
                            class="fa-solid fa-location-dot mr-1"></i>Add new address</p>
                </div>
                <hr class="m-0" style="border: 1px dashed var(--color2);">
                <form>
                    <div>
                        <label for="fullName" style="font-size: 12px;" class="m-0 font-weight-bold">CONTACT
                            DETAILS</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Name*"
                            style="font-size: 14px;" required>
                        <input type="number" class="form-control mt-1" id="mobile" name="mobile"
                            placeholder="Mobile number*" style="font-size: 14px;" required>
                    </div>
                    <div class="mt-2">
                        <label for="pincode" style="font-size: 12px;" class="m-0 font-weight-bold">ADDRESS</label>
                        <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode*"
                            style="font-size: 14px;" required>
                        <input type="text" class="form-control mt-1" id="address" name="address"
                            placeholder="Full Address*" style="font-size: 14px;" required>
                        <input type="text" class="form-control mt-1" id="city" name="city" placeholder="City*"
                            style="font-size: 14px;" required>
                        <input type="text" class="form-control mt-1" id="state" name="state" placeholder="State*"
                            style="font-size: 14px;" required>
                    </div>
                    <div class="mt-2">
                        <label style="font-size: 12px;" class="m-0 font-weight-bold">SAVE ADDRESS AS</label>
                        <div class="mt-1">
                            <input class="btn addressBtn" type="button" value="HOME">
                            <input class="btn addressBtn" type="button" value="OFFICE">
                        </div>
                        <div class="my-3 d-flex align-items-center" style="font-size: 12px;">
                            <input type="checkbox" name="default" id="defaultAddress">
                            <label for="defaultAddress" class="text-secondary m-0 ml-1">Make this my default
                                address</label>
                        </div>
                    </div>
                    <div class="mt-2" role="group" aria-label="Basic example">
                        <button type="submit" class="btn w-100 font-weight-bold"
                            style="background-color: var(--color2); color: white;">Add address</button>
                    </div>
                </form>
            </div>
        </div>
        <section>
            <div class="stepper-wrapper">
                <div class="stepper-item completed">
                    <div class="step-counter">1</div>
                    <div class="step-name">CART</div>
                </div>
                <div class="stepper-item active">
                    <div class="step-counter">2</div>
                    <div class="step-name">ADDRESS</div>
                </div>
                <div class="stepper-item ">
                    <div class="step-counter">3</div>
                    <div class="step-name">PAYMENT</div>
                </div>
            </div>
        </section>
        <section>
            <div class="cartContainer mb-2">
                <div class="mt-lg-3 mt-md-3 mt-sm-0 mt-0">
                    <div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div style="font-family: 'League Spartan', sans-serif';">
                                <p class="text-secondary m-0 p-0 text-dark font-weight-bold">Select delivery
                                    address</p>
                            </div>
                            <button onclick="openAddressSidebar()" class="btn font-weight-bold"
                                style="font-size: 12px; border: 1px solid black">Add
                                new address</button>
                        </div>
                        <div class="mt-4">
                            <p class="text-secondary m-0 p-0 font-weight-bold" style="font-size: 12px;">DEFAULT ADDRESS
                            </p>
                            <div class="mt-2 p-3 rounded-lg" style="box-shadow: 0px 0px 4px 1px #ccc;">
                                <div class="d-flex align-items-center">
                                    <input type="radio" name="" id="" style="zoom: 1.1;" checked>
                                    <p class="m-0 p-0 ml-2 text-dark font-weight-bold" style="font-size: 18px;">John Doe
                                        <span class="text-success font-weight-normal ml-4 rounded-lg p-1"
                                            style="font-size: 12px; border: 1px solid green;">HOME</span>
                                    </p>
                                </div>
                                <div class="text-secondary mt-2 ml-3" style="font-size: 14px;">
                                    <p class="m-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore,
                                        dolor.</p>
                                    <p class="m-1">Mobile: <span class="font-weight-bold text-dark">+91 123456789</span>
                                    </p>
                                    <p class="m-1"><i class="fa-solid fa-caret-right mr-1"></i>Pay on Delivery not
                                        available</p>
                                    <!-- <li>Pay on Delivery available</li> -->
                                    <div class="mt-2">
                                        <button class="btn font-weight-bold"
                                            style="font-size: 14px; border: 1px solid black; font-family: 'League Spartan';">Remove</button>
                                        <button onclick="openAddressSidebar()" class="btn font-weight-bold"
                                            style="font-size: 14px; border: 1px solid black; font-family: 'League Spartan';">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button onclick="openAddressSidebar()" class="btn btn-block text-left mt-2 p-4 rounded-lg"
                            style="border: 2px dashed rgb(0, 0, 0,0.2); text-decoration: none;">
                            <p class="m-0 p-0 font-weight-bold" style="font-size: 12px; color: var(--color2);">+ADD NEW
                                ADDRESS</p>
                        </button>
                    </div>
                </div>
                <div class="mt-lg-3 mt-md-3 mt-sm-0 mt-0">
                    <p class="text-secondary m-0 p-0 font-weight-bold" style="font-size: 12px;">DELIVERY ESTIMATES
                    </p>
                    <div class="d-flex flex-column" style="gap: 8px;">
                        <div class="d-flex align-items-center mt-2">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwqIMSS6cTq7wi1c08k5ZHrGiyQ0tepv1bfg&s"
                                alt="" style="width: 40px;">
                            <p class="m-0 p-0 ml-2 text-secondary" style="font-size: 14px;">Delivery between <span
                                    class="font-weight-bold text-dark">2 Aug - 30 Aug</span></p>
                        </div>
                        <div class="d-flex align-items-center mt-2">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwqIMSS6cTq7wi1c08k5ZHrGiyQ0tepv1bfg&s"
                                alt="" style="width: 40px;">
                            <p class="m-0 p-0 ml-2 text-secondary" style="font-size: 14px;">Delivery between <span
                                    class="font-weight-bold text-dark">2 Aug - 30 Aug</span></p>
                        </div>
                        <div class="d-flex align-items-center mt-2">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwqIMSS6cTq7wi1c08k5ZHrGiyQ0tepv1bfg&s"
                                alt="" style="width: 40px;">
                            <p class="m-0 p-0 ml-2 text-secondary" style="font-size: 14px;">Delivery between <span
                                    class="font-weight-bold text-dark">2 Aug - 30 Aug</span></p>
                        </div>
                    </div>
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
                            style="font-size: 14px; background-color: var(--color2);">Continue</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>

        const addressSidebar = document.getElementById("addressSidebar");

        function openAddressSidebar() {
            document.body.classList.toggle('modal-open');
            document.getElementById("addressSidebar").style.width = "376px";
            document.getElementById("addressSidebar").style.boxShadow = "-2px 0px 4px 0px rgb(0, 0, 0,0.2)";
            document.body.classList.toggle('modal-open');
        }

        function closeAddressSidebar() {
            document.body.classList.toggle('modal-open');
            document.getElementById("addressSidebar").style.width = "0";
            document.getElementById("addressSidebar").style.boxShadow = "none";
            document.body.classList.toggle('modal-open');
        }
    </script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>