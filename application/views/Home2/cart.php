<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Cart </title>
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

        p {
            margin: 0;
            padding: 0;
        }

        body.modal-open {
            overflow-y: hidden;
        }

        input[type="checkbox"] {
            accent-color: var(--color2);
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

        .btn:focus,
        a:focus,
        input:focus,
        textarea:focus {
            outline: none;
            box-shadow: none !important;
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

        .productsContainer {
            width: 70%;
            margin-inline: auto;
            margin-block: 3rem;
            background-color: #e83e8c15;
            padding: 1rem 2rem;
            border-radius: 8px;
        }

        .productsContainer .products {
            display: grid;
            gap: 8px;
            grid-template-columns: repeat(5, 1fr);
        }

        .productList {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .productCard {
            display: flex;
            gap: 16px;
            border-radius: 8px;
            border: 1px solid rgb(0, 0, 0, 0.1);
            padding: 8px;
            position: relative;
        }

        .productCard .closeBtn {
            position: absolute;
            top: 4px;
            right: 8px;
        }

        .productCard input[type="checkbox"] {
            accent-color: var(--color2);
            zoom: 1.1;
            position: absolute;
            top: 6px;
            left: 6px;
        }

        .royalMemberCard {
            background-image: linear-gradient(128deg, #e83e8c 0%, 12%, #8340a1 34% 100%);
        }

        .royalMemberCard .heading {
            padding-top: 12px;
        }

        .royalMemberCard .body {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 8px;
            padding: 12px;
        }

        .royalMemberCard .body button {
            background-color: var(--color2);
            color: white;
            border-radius: 0;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        .royalMemberCard .body div {
            transition: all .2s ease-in-out;
        }

        .royalMemberCard .body div:hover {
            scale: 1.05;
            box-shadow: 0 0 8px 0 white;
        }

        .blinkAnimation {
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
            background-color: white;
            color: black;
            text-align: left;
            font-size: 14;
            font-weight: 500;
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

        a.toolTip:hover {
            position: relative;
        }

        a.toolTip:hover:after {
            display: block;
            z-index: 999;
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

        .coupon {
            background-image:
                linear-gradient(to top right, #ff0098 0%, #f0f 100%);
            border-radius: 8px;
            padding: 16px;
            color: white;
            position: relative;
        }

        .promoCode {
            border: 1px dashed white;
            color: white;
            cursor: auto !important;
        }

        .promoCode:hover {
            color: white;
        }

        .circle1 {
            background-color: white;
            height: 20px;
            width: 20px;
            border-radius: 100vh;
            position: absolute;
            top: 85px;
            left: -6px;
        }

        .circle2 {
            background-color: white;
            height: 20px;
            width: 20px;
            border-radius: 100vh;
            position: absolute;
            top: 85px;
            right: -6px;
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

        .addressDialog {
            padding: 0;
            /* max-width: 600px; */
            min-width: 40%;
            height: 500px;
        }

        .addressDialog .pincodeContainer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid rgb(0, 0, 0, 0.1);
            border-radius: 6px;
            margin: 1rem 2rem;
        }

        .addressDialog .pincodeContainer input {
            width: 100%;
        }

        .addressDialog .btn {
            font-size: 14px;
            transition: all 200ms ease;
        }

        .addressDialog .checkBtn:hover {
            color: var(--color2);
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

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @media (width<1150px) {
            .cartContainer {
                width: 80%;
            }

            .productsContainer {
                width: 80%;
            }
        }

        @media (width<950px) {
            .cartContainer {
                width: 95%;
            }

            .productsContainer {
                width: 95%;
                padding: 0.5rem 1rem;
            }

            .productsContainer .products {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (width<900px) {
            .cartContainer {
                grid-template-columns: 1fr;
            }

            .addressDialog {
                min-width: 70%;
            }

            .productsContainer .products {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (width<600px) {
            .addressDialog {
                min-width: 90%;
            }

            .productsContainer .products {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
    <main>
        <div id="couponSidebar" class="sidebar">
            <button class="close-btn btn" onclick="closeCouponSidebar()">❌</button>
            <div class="sidebar-content">
                <div class="coupon">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="d-flex justify-content-between" style="gap: 16px;">
                        <p class="m-0" style="font-size: 14px">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Suscipit, aut?</p>
                        <p class="font-weight-bold" style="font-size: 12px; white-space: nowrap;">See more</p>
                    </div>
                    <hr style="border: 1px dashed white;" />
                    <div class="btn-group w-100 py-1" role="group" aria-label="Basic example">
                        <p class="btn promoCode">CART25</p>
                        <button type="button" class="btn bg-light font-weight-bold"
                            style="color: var(--color2);">APPLY</button>
                    </div>
                </div>
                <div class="coupon">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="d-flex justify-content-between" style="gap: 16px;">
                        <p class="m-0" style="font-size: 14px">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Suscipit, aut?</p>
                        <p class="font-weight-bold" style="font-size: 12px; white-space: nowrap;">See more</p>
                    </div>
                    <hr style="border: 1px dashed white;" />
                    <div class="btn-group w-100 py-1" role="group" aria-label="Basic example">
                        <p class="btn promoCode">CART25</p>
                        <button type="button" class="btn bg-light font-weight-bold"
                            style="color: var(--color2);">APPLY</button>
                    </div>
                </div>
                <div class="coupon">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="d-flex justify-content-between" style="gap: 16px;">
                        <p class="m-0" style="font-size: 14px">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Suscipit, aut?</p>
                        <p class="font-weight-bold" style="font-size: 12px; white-space: nowrap;">See more</p>
                    </div>
                    <hr style="border: 1px dashed white;" />
                    <div class="btn-group w-100 py-1" role="group" aria-label="Basic example">
                        <p class="btn promoCode">CART25</p>
                        <button type="button" class="btn bg-light font-weight-bold"
                            style="color: var(--color2);">APPLY</button>
                    </div>
                </div>
                <div class="coupon">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="d-flex justify-content-between" style="gap: 16px;">
                        <p class="m-0" style="font-size: 14px">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Suscipit, aut?</p>
                        <p class="font-weight-bold" style="font-size: 12px; white-space: nowrap;">See more</p>
                    </div>
                    <hr style="border: 1px dashed white;" />
                    <div class="btn-group w-100 py-1" role="group" aria-label="Basic example">
                        <p class="btn promoCode">CART25</p>
                        <button type="button" class="btn bg-light font-weight-bold"
                            style="color: var(--color2);">APPLY</button>
                    </div>
                </div>
                <div class="coupon">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="d-flex justify-content-between" style="gap: 16px;">
                        <p class="m-0" style="font-size: 14px">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Suscipit, aut?</p>
                        <p class="font-weight-bold" style="font-size: 12px; white-space: nowrap;">See more</p>
                    </div>
                    <hr style="border: 1px dashed white;" />
                    <div class="btn-group w-100 py-1" role="group" aria-label="Basic example">
                        <p class="btn promoCode">CART25</p>
                        <button type="button" class="btn bg-light font-weight-bold"
                            style="color: var(--color2);">APPLY</button>
                    </div>
                </div>
                <div class="coupon">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="d-flex justify-content-between" style="gap: 16px;">
                        <p class="m-0" style="font-size: 14px">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Suscipit, aut?</p>
                        <p class="font-weight-bold" style="font-size: 12px; white-space: nowrap;">See more</p>
                    </div>
                    <hr style="border: 1px dashed white;" />
                    <div class="btn-group w-100 py-1" role="group" aria-label="Basic example">
                        <p class="btn promoCode">CART25</p>
                        <button type="button" class="btn bg-light font-weight-bold"
                            style="color: var(--color2);">APPLY</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="giftSidebar" class="sidebar">
            <button class="close-btn btn" onclick="closeGiftSidebar()">❌</button>
            <div class="sidebar-content">
                <div>
                    <p class="font-weight-bold m-0" style="font-size: 20px"><i class="fa-solid fa-gift mr-1"></i>Gift
                        Wrap</p>
                    <p class="text-secondary" style="font-size: 14px">Your personalized message will be included with
                        your gift.</p>
                </div>
                <hr class="m-0" style="border: 1px dashed var(--color2);">
                <form>
                    <div>
                        <label for="recepientName" style="font-size: 14px;" class="m-0 font-weight-bold">Recepient
                            name</label>
                        <input type="text" class="form-control" id="recepientName" name="recepientName"
                            placeholder="Enter recivers's name" style="font-size: 14px;" required>
                    </div>
                    <div class="mt-2">
                        <label for="giftMessage" style="font-size: 14px;" class="m-0 font-weight-bold">Message</label>
                        <textarea class="form-control" id="giftMessage" name="giftMessage" placeholder="Enter a message"
                            style="font-size: 14px;" rows="5" required></textarea>
                    </div>
                    <div class="mt-2">
                        <label for="senderName" style="font-size: 14px;" class="m-0 font-weight-bold">Sender's
                            name</label>
                        <input type="text" class="form-control" id="senderName" name="senderName"
                            placeholder="Enter sender's name" style="font-size: 14px;" required>
                    </div>
                    <div class="btn-group mt-3 w-100" role="group" aria-label="Basic example">
                        <button type="reset" onclick="closeGiftSidebar()" class="btn"
                            style="border: 1px solid rgb(0, 0, 0,0.2);">Cancel</button>
                        <button type="submit" class="btn"
                            style="background-color: var(--color2); color: white;">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <dialog class="dialog addressDialog" id="dialog" style="z-index: 1;">
            <div>
                <div class="d-flex px-3 py-1 font-weight-bold justify-content-between align-items-center shadow-sm">
                    <p>Select Delivery Address</p>
                    <button id="closeAddressDialogBtn" aria-label="close"
                        class="btn p-0 m-0 closeAddressDialogBtn">❌</button>
                </div>
                <div class="pincodeContainer">
                    <input type="text" class="border-0 ml-1" placeholder="Enter Pincode">
                    <button class="btn checkBtn">CHECK</button>
                </div>
                <div class="addressTab">
                    <div class="px-3 d-flex justify-content-between align-items-center"
                        style="background-color: var(--color4);">
                        <p class="text-secondary font-weight-bold" style="font-size: 12px;">SAVED ADDRESS</p>
                        <button class="btn addAddressBtn" onclick="openAddressSidebar()"
                            style="color: var(--color2);"><i class="fa-solid fa-plus"></i>
                            Add
                            new</button>
                    </div>
                    <div>
                        <!-- <p class="m-0 p-3 text-center" style="font-size: 12px;">No saved address</p> -->
                        <div class="px-3 py-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <input type="radio" class="mr-2" name="address" id="address">
                                    <p class="m-0 p-0 font-weight-bold">John Doe <span
                                            class="text-secondary font-weight-normal">(Default)</span></p>
                                </div>
                                <p class="text-success p-0 m-0" style="font-size: 10px; font-weight: 500;">HOME</p>
                            </div>
                            <p class="m-0 text-secondary" style="font-size: 14px;">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Consectetur, maxime.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button class="btn border"><i class="fa-solid fa-location-dot mr-1"></i>Delivering
                                        here</button>
                                    <!-- <button class="btn"><i class="fa-solid fa-truck mr-1"></i>Deliver here</button> -->
                                    <button class="btn btn-secondary"><i
                                            class="fa-solid fa-pencil mr-1"></i>Edit</button>
                                </div>
                                <button class="btn border"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </div>
                        <div class="px-3 py-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <input type="radio" class="mr-2" name="address" id="address">
                                    <p class="m-0 p-0 font-weight-bold">John Doe</p>
                                </div>
                                <p class="text-success p-0 m-0" style="font-size: 10px; font-weight: 500;">HOME</p>
                            </div>
                            <p class="m-0 text-secondary" style="font-size: 14px;">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Consectetur, maxime.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <!-- <button class="btn border"><i class="fa-solid fa-location-dot mr-1"></i>Delivering
                                        here</button> -->
                                    <button class="btn border"><i class="fa-solid fa-truck mr-1"></i>Deliver
                                        here</button>
                                    <button class="btn btn-secondary"><i
                                            class="fa-solid fa-pencil mr-1"></i>Edit</button>
                                </div>
                                <button class="btn border"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </dialog>
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
                <div class="stepper-item active">
                    <div class="step-counter">1</div>
                    <div class="step-name">CART</div>
                </div>
                <div class="stepper-item">
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
            <!-- <div class="d-flex flex-column justify-content-center align-items-center" style="height: 500px;">
                <img src="./images/empty-cart.png" style="width: 200px;" alt="">
                <p class="text-dark font-weight-bold m-0" style="font-size: 20px;">"It feels so effortless!"</p>
                <p class="text-secondary" style="font-size: 14px;">Your bag is empty. Let's add some items.</p>
                <button class="btn rounded-0 mt-2" style="background-color: var(--color1); color: white; font-size: 14px;">ADD ITEMS FORM WISHLIST</button>
            </div> -->
            <div class="cartContainer mb-2">
                <div class="mt-lg-3 mt-md-3 mt-sm-0 mt-0">
                    <div class="px-4 py-3 border rounded-lg d-flex align-items-center justify-content-between"
                        style="background-color: rgba(255, 193, 193, 0.25); font-size: 14px;">
                        <p class="m-0">Deliver to: <span class="font-weight-bold">221010</span></p>
                        <button class="btn border-danger text-danger font-weight-bold addressDialogBtn" style="font-size: 12px;">CHANGE
                            ADDRESS</button>
                    </div>
                    <div class="mt-2 mt-lg-4 mt-md-4 mt-sm-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center" style="font-family: 'League Spartan', sans-serif';">
                                <input type="checkbox" style="zoom:1.25;" id="selectAll" />
                                <label for="selectAll" class="text-secondary m-0 p-0 ml-2 text-dark font-weight-bold"
                                    style="font-size: 14px;">0/1 PRODUCTS
                                    SELECTED</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="btn font-weight-bold" style="font-size: 10px;">REMOVE</button>
                                <button class="btn font-weight-bold" style="font-size: 10px;">MOVE TO WISHLIST</button>
                            </div>
                        </div>
                        <div class="productList mt-2">
                            <div class="productCard">
                                <div><img
                                        src="https://www.jiomart.com/images/product/original/rvxqd4wmk4/eyebogler-light-green-tshirts-men-tshirt-tshirt-for-men-tshirt-mens-tshirt-men-s-polo-neck-regular-fit-half-sleeves-colorblocked-t-shirt-product-images-rvxqd4wmk4-1-202402121853.jpg?im=Resize=(500,630)"
                                        style="width: 120px;" alt=""></div>
                                <div>
                                    <p class="font-weight-bold text-dark" style="font-style: 'League Spartan';">Levis's
                                        Men's Slim Fit Shirt</p>
                                    <p class="text-secondary" style="font-size: 12px;">T-Shirt</p>
                                    <div class="mt-1">
                                        <button class="btn px-1 py-0 font-weight-bold sizeSelectBtn"
                                            style="font-size: 12px; background-color: rgb(0, 0, 0,0.1);">Size: XL <i
                                                class="fa-solid fa-caret-down ml-2"></i></button>
                                        <dialog class="dialog sizeDialog" id="dialog">
                                            <div>
                                                <div class="d-flex">
                                                    <img src="./images/product-1.jpg" style="width: 80px;" alt="">
                                                    <div class="ml-3 text-left">
                                                        <p class="m-0 p-0">Lorem, ipsum.</p>
                                                        <p class="m-0 p-0 text-secondary" style="font-size: 14px;">
                                                            Lorem, ipsum.</p>
                                                        <p class="m-0 p-0">
                                                            <span class="font-weight-bold text-dark"
                                                                style="font-size: 15px;">₹ 1,999</span>
                                                            <span class="text-secondary"
                                                                style="text-decoration: line-through; font-size: 14px;">₹
                                                                2,999</span>
                                                            <span class="font-weight-bold text-danger"
                                                                style="font-size: 14px;">35%</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="my-2" />
                                                <p class="font-weight-bold text-left m-0 p-0"
                                                    style="font-family: 'League Spartan'; font-size: 16px;">SELECT SIZE
                                                </p>
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
                                                <button id="closeSizeDialogBtn" aria-label="close"
                                                    class="x closeSizeDialogBtn">❌</button>
                                            </div>
                                        </dialog>
                                        <button class="btn px-1 py-0 font-weight-bold quantityBtn"
                                            style="font-size: 12px; background-color: rgb(0, 0, 0,0.1);">Quantity: 1 <i
                                                class="fa-solid fa-caret-down ml-2"></i></button>
                                        <dialog class="dialog quantityDialog" id="dialog">
                                            <div>
                                                <p class="font-weight-bold text-left m-0 p-0"
                                                    style="font-family: 'League Spartan'; font-size: 16px;">SELECT
                                                    QUANTITY
                                                </p>
                                                <div class="text-left mt-2 stockBtns">
                                                    <button class="sizeBtn">1</button>
                                                    <button class="sizeBtn">2</button>
                                                    <button class="sizeBtn">3</button>
                                                    <button class="sizeBtn">4</button>
                                                    <button class="sizeBtn">5</button>
                                                    <button class="sizeBtn">6</button>
                                                    <button class="sizeBtn">7</button>
                                                    <button class="sizeBtn">8</button>
                                                    <button class="sizeBtn">9</button>
                                                    <button class="sizeBtn">10</button>
                                                </div>
                                                <button class="btn w-100 mt-4"
                                                    style="background-color: var(--color1); color: white;">DONE</button>
                                                <button id="closeQuantitiDialogBtn" aria-label="close"
                                                    class="x closeQuantitiDialogBtn">❌</button>
                                            </div>
                                        </dialog>
                                        <span class="border border-danger rounded-lg p-1 text-danger font-weight-bold"
                                            style="font-size: 10px; white-space: nowrap;">2 left</span>
                                    </div>
                                    <div class="mt-1" style="font-size: 14px;">
                                        <span class="font-weight-bold">₹200</span>
                                        <span class="text-secondary ml-1"
                                            style="text-decoration: line-through;">₹300</span>
                                        <span class="text-danger font-weight-bold ml-1">35%</span>
                                        <span class="font-weight-bold"
                                            style="border: 1px solid rgb(0, 0, 0,0.15); padding: 2px 4px; border-radius: 100vh; font-size: 12px; white-space: nowrap;">
                                            <i class="fa-solid fa-crown" style="color: yellow;"></i>
                                            <span>RC Price: ₹195</span>
                                        </span>
                                    </div>
                                    <p class="text-secondary mt-2" style="font-size: 12px;">
                                        <i class="fa-solid fa-rotate-left border p-1 rounded-circle text-dark"
                                            style="font-size: 8px;"></i>
                                        <span class="text-dark font-weight-bold">14 days</span> return available
                                    </p>
                                    <p class="text-secondary mt-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-gift border p-1 rounded-circle text-dark"
                                            style="font-size: 8px;"></i>
                                        This product
                                        <span class="text-dark font-weight-bold">cannot</span> be Gift wrapped
                                    </p>
                                    <p class="text-secondary mt-1 pl-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-check text-success mr-1" style="font-size: 12px;"></i>
                                        Deliverd by
                                        <span class="text-dark font-weight-bold">15 Aug, 2024</span>
                                    </p>
                                    <button class="closeBtn btn p-0"><i class="fa-solid fa-xmark"></i></button>
                                    <dialog class="dialog closeProductDialogBtn" id="dialog">
                                        <div>
                                            <div class="d-flex">
                                                <img src="./images/product-1.jpg" style="width: 60px;" alt="">
                                                <div class="ml-3 text-left">
                                                    <p class="m-0 p-0">Move from Cart</p>
                                                    <p class="text-secondary" style="font-size: 14px;">Are you sure want
                                                        to move this product from cart?</p>
                                                </div>
                                            </div>
                                            <hr class="mt-4" />
                                            <div class="d-flex" style="gap: 8px;">
                                                <button class="btn w-100 text-secondary"
                                                    style="font-size: 12px;">REMOVE</button>
                                                <button class="btn w-100"
                                                    style="color: var(--color2);font-size: 12px; white-space: nowrap;">MOVE
                                                    TO WISHLIST</button>
                                            </div>
                                            <button id="closeModalBtn" aria-label="close"
                                                class="x closeModalBtn">❌</button>
                                        </div>
                                    </dialog>
                                    <input type="checkbox" name="" id="">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-block text-left border mt-4 p-3 rounded-lg" style="font-size: 14px;">
                            <img src="./images/wishlist.png" style="width: 18px;" alt="">
                            <span class="font-weight-bold">Add more from wishlist</span>
                            <i class="fa-solid fa-chevron-right float-right mt-1"></i>
                        </a>
                    </div>
                </div>
                <div class="mt-lg-3 mt-md-3 mt-sm-0 mt-0">
                    <div class="card py-2 rounded-lg">
                        <div class="" id="headingOne">
                            <button class="btn btn-block text-left font-weight-bold text-dark align-items-center"
                                style="font-size: 14px;" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <img src="<?=base_url(); ?>assets/new_website/img/coupon.png" class="mr-1" style="width: 20px; margin-top: -2px;"
                                    alt="">
                                <span class="font-weight-bold">Apply coupons</span>
                                <i class="fa-solid fa-caret-down float-right mt-1"></i>
                            </button>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="">
                            <div class="card-body p-0 px-3 pb-2 mt-2"
                                style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                <form>
                                    <input type="text" id="couponCode" name="couponCode" class="form-control"
                                        placeholder="Enter coupon code" style="font-size: 14px;">
                                    <!-- <span class="promoErrorCodeMsg text-success mt-1"><i class="fa-solid fa-circle-check"></i> Promocode
                                        applied successfully!</span> -->
                                    <!-- <span class="promoCodeSuccessMsg text-danger mt-1"><i
                                            class="fa-solid fa-triangle-exclamation"></i> Invalid promocode!</span> -->
                                    <button type="submit" class="btn btn-block mt-2 font-weight-bold"
                                        style="font-size: 14px; border: 1px solid var(--color1); color: var(--color1);">APPLY</button>
                                </form>
                                <button onclick="openCouponSidebar()" class="btn m-0 p-0 float-right mt-3"
                                    style="font-size: 12px;">Browse all coupons
                                    <i class="fa-solid fa-chevron-right text-dark"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card py-2 rounded-lg mt-2">
                        <div class="" id="headingTwo">
                            <button class="btn btn-block text-left font-weight-bold text-dark align-items-center"
                                style="font-size: 14px;" type="button" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <img src="./images/giftbox.png" class="mr-1" style="width: 18px; margin-top: -4px;"
                                    alt="">
                                Add Gift wrap
                                <i class="fa-solid fa-caret-down float-right"></i>
                            </button>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="">
                            <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                <p>Add a Personal touch: Gift Wrap Your Parcel for your loved ones with a lovely message
                                </p>
                                <button onclick="openGiftSidebar()" class="btn mt-2 font-weight-bold"
                                    style="font-size: 14px; border: 1px solid var(--color1); color: var(--color1);">ADD
                                    NOW</button>
                            </div>
                        </div>
                    </div>

                    <div class="royalMemberCard mt-2 rounded-lg">
                        <div class="heading text-white text-center">
                            <i class="fa-solid fa-crown mr-1 blinkAnimation" style="color: yellow;"></i>
                            <span style="font-family: 'League Spartan';">Join Royal Club & save ₹ with this order</span>
                            <a href="#" class="toolTip text-dark"
                                tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                <i class="fa-solid fa-info-circle ml-1" style="color: var(--color4);"></i>
                            </a>
                        </div>
                        <div class="body">
                            <div class="bg-white pt-2 rounded-lg text-center">
                                <p class="mb-2" style="font-family: 'League Spartan';">3 MONTHS</p>
                                <p class="font-weight-bold">₹299</p>
                                <p class="text-secondary" style="font-size: 12px;"><span
                                        style="text-decoration: line-through;">₹399</span> <span
                                        class="text-danger">(30% OFF)</span></p>
                                <button class="btn font-weight-bold mt-2 w-100" style="font-size: 12px;">ADD
                                    NOW</button>
                            </div>
                            <div class="bg-white pt-2 rounded-lg text-center">
                                <p class="mb-2" style="font-family: 'League Spartan';">3 MONTHS</p>
                                <p class="font-weight-bold">₹299</p>
                                <p class="text-secondary" style="font-size: 12px;"><span
                                        style="text-decoration: line-through;">₹399</span> <span
                                        class="text-danger">(30% OFF)</span></p>
                                <button class="btn font-weight-bold mt-2 w-100" style="font-size: 12px;">ADD
                                    NOW</button>
                            </div>
                            <div class="bg-white pt-2 rounded-lg text-center">
                                <p class="mb-2" style="font-family: 'League Spartan';">3 MONTHS</p>
                                <p class="font-weight-bold">₹299</p>
                                <p class="text-secondary" style="font-size: 12px;"><span
                                        style="text-decoration: line-through;">₹399</span> <span
                                        class="text-danger">(30% OFF)</span></p>
                                <button class="btn font-weight-bold mt-2 w-100" style="font-size: 12px;">ADD
                                    NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="card py-2 rounded-lg mt-2">
                        <div class="" id="headingThree">
                            <button class="btn btn-block text-left font-weight-bold text-dark align-items-center"
                                style="font-size: 14px;" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <!-- <i class="fa-solid fa-crown"></i>
                                <i class="fa-solid fa-indian-rupee-sign mr-1"></i> -->
                                <img src="./images/crown.png" class="mr-1" style="width: 20px; margin-top: -2px;"
                                    alt="">
                                Use Royal Club cash <span class="font-weight-normal" style="font-size: 12px">(₹50
                                    available)</span>
                                <i class="fa-solid fa-caret-down float-right"></i>
                            </button>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="">
                            <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                <p>You need to collect at least ₹100 in Royal Club cash before you can use it
                                    towards your future purchases.</p>
                            </div>
                        </div>
                    </div>
                    <div class="paymentDetails">
                        <div class="text-center mt-3 mb-1">
                            <p class="font-weight-bold">Payment Details</p>
                            <p class="text-secondary" style="font-size: 12px;">Prices are inclusive of all taxes</p>
                        </div>
                        <div style="font-size: 14px;">
                            <p class="py-1 px-3 font-weight-bold" style="background-color: #e83e8c20;">
                                <span>Total</span> <span class="float-right font-weight-normal">₹399</span>
                            </p>
                            <p class="py-1 px-3 font-weight-bold"><span>Discount</span> <span
                                    class="float-right font-weight-normal">-
                                    ₹399</span></p>
                            <p class="py-1 px-3 font-weight-bold" style="background-color: #e83e8c20;">
                                <span>Estimated GST</span> <span class="float-right font-weight-normal">+₹399</span>
                            </p>
                            <p class="py-1 px-3 font-weight-bold"><span>Coupon Discount</span> <span
                                    class="float-right font-weight-normal">-
                                    ₹399</span></p>
                            <p class="py-1 px-3 font-weight-bold" style="background-color: #e83e8c20;">
                                <span>Gift wrap charges</span> <span class="float-right font-weight-normal">+₹399</span>
                            </p>
                            <p class="py-1 px-3 font-weight-bold"><span>Shipping charges</span> <span
                                    class="float-right font-weight-normal">+
                                    ₹399</span></p>
                            <p class="py-1 px-3 font-weight-bold" style="background-color: #e83e8c20;">
                                <span>Platform convinience fee</span> <span
                                    class="float-right font-weight-normal">+₹399</span>
                            </p>
                            <p class="py-1 px-3 font-weight-bold"><span>Delivery charges</span> <span
                                    class="float-right font-weight-normal">+
                                    ₹399</span></p>
                            <p class="py-1 pt-2 px-3 font-weight-bold border-top">
                                <span>Sub-total</span> <span class="float-right font-weight-normal">₹399</span>
                            </p>
                            <p class="py-1 pt-2 px-3 font-weight-bold border-top">
                                <span>Net payment</span> <span class="float-right">₹399</span>
                            </p>
                            <p class="py-1 px-3 font-weight-bold" style="background-color:#e83e8c20 ;">
                                <span><i class="fa-solid fa-crown mr-1"></i>Royal Club saving</span> <span
                                    class="float-right">-₹399</span>
                            </p>
                            <p class="py-1 px-3 mt-3 mx-5 text-center font-weight-bold rounded-pill border"
                                style="background-color:#e83e8c20 ;">
                                You saved ₹99 on this purchase
                            </p>
                        </div>
                        <div>
                            <button class="btn w-100 py-1 mt-3 font-weight-bold"
                                style="background-color: var(--color1); color: white;">Place Order</button>
                        </div>
                        <div class="d-flex justify-content-around mt-1 text-secondary"
                            style="font-size: 14px; font-family: 'League Spartan';">
                            <p class="m-0 p-0"><i class="fa-solid fa-circle-check mr-1"
                                    style="color: var(--color2);"></i>Genuine product</p>
                            <p class="m-0 p-0"><i class="fa-solid fa-circle-check mr-1"
                                    style="color: var(--color2);"></i>Secure payment</p>
                            <p class="m-0 p-0"><i class="fa-solid fa-circle-check mr-1"
                                    style="color: var(--color2);"></i>Easy returns</p>
                        </div>
                        <div class="mt-2 py-2 px-3 rounded-lg"
                            style="background-image: linear-gradient(128deg, #e83e8c 0%, 12%, #8340a1 34% 100%); font-family: 'League Spartan';">
                            <div class="d-flex align-items-center mt-2">
                                <img src="./images/rupee.png" style="width: 30px; position: relative; left: 6px;"
                                    alt="">
                                <p class="m-0 p-0 px-3"
                                    style="background-image: linear-gradient(90deg, #fff 17% 17%, #ff0 110% 110%);">Save
                                    upto <span class="font-weight-bold">₹399</span> with Royal
                                    Club
                                </p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="d-flex align-items-center">
                                    <img src="./images/delivery-man.png" style="width: 32px;" alt="">
                                    <p class="m-0 p-0 ml-2 text-light">Free shipping on every order</p>
                                </div>
                                <button class="btn" style="color: yellow; box-shadow: 0px 0px 4px 1px white;"><i
                                        class="fa-solid fa-cart-shopping mr-1"></i>Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="productsContainer">
                <p>You may also like</p>
                <hr>
                <div class="products">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxduoTgyySAWCuMfZRF2eSTqCJsD7svWU22g&s" class="card-img-top" alt="...">
                        <div class="my-1 p-2" style="font-size: 14px">
                            <p class="font-weight-bold">Lorem, ipsum.</p>
                            <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                            <p>₹ 1,999 <span class="text-secondary" style="text-decoration: line-through">₹
                                    2,999</span> <span class="font-weight-bold text-danger">10% off</span></p>
                        </div>
                        <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                            style="font-size: 14px; color: var(--color2);">ADD TO CART</button>
                    </div>
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxduoTgyySAWCuMfZRF2eSTqCJsD7svWU22g&s" class="card-img-top" alt="...">
                        <div class="my-1 p-2" style="font-size: 14px">
                            <p class="font-weight-bold">Lorem, ipsum.</p>
                            <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                            <p>₹ 1,999 <span class="text-secondary" style="text-decoration: line-through">₹
                                    2,999</span> <span class="font-weight-bold text-danger">10% off</span></p>
                        </div>
                        <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                            style="font-size: 14px; color: var(--color2);">ADD TO CART</button>
                    </div>
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxduoTgyySAWCuMfZRF2eSTqCJsD7svWU22g&s" class="card-img-top" alt="...">
                        <div class="my-1 p-2" style="font-size: 14px">
                            <p class="font-weight-bold">Lorem, ipsum.</p>
                            <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                            <p>₹ 1,999 <span class="text-secondary" style="text-decoration: line-through">₹
                                    2,999</span> <span class="font-weight-bold text-danger">10% off</span></p>
                        </div>
                        <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                            style="font-size: 14px; color: var(--color2);">ADD TO CART</button>
                    </div>
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxduoTgyySAWCuMfZRF2eSTqCJsD7svWU22g&s" class="card-img-top" alt="...">
                        <div class="my-1 p-2" style="font-size: 14px">
                            <p class="font-weight-bold">Lorem, ipsum.</p>
                            <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                            <p>₹ 1,999 <span class="text-secondary" style="text-decoration: line-through">₹
                                    2,999</span> <span class="font-weight-bold text-danger">10% off</span></p>
                        </div>
                        <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                            style="font-size: 14px; color: var(--color2);">ADD TO CART</button>
                    </div>
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxduoTgyySAWCuMfZRF2eSTqCJsD7svWU22g&s" class="card-img-top" alt="...">
                        <div class="my-1 p-2" style="font-size: 14px">
                            <p class="font-weight-bold">Lorem, ipsum.</p>
                            <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                            <p>₹ 1,999 <span class="text-secondary" style="text-decoration: line-through">₹
                                    2,999</span> <span class="font-weight-bold text-danger">10% off</span></p>
                        </div>
                        <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                            style="font-size: 14px; color: var(--color2);">ADD TO CART</button>
                    </div>
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxduoTgyySAWCuMfZRF2eSTqCJsD7svWU22g&s" class="card-img-top" alt="...">
                        <div class="my-1 p-2" style="font-size: 14px">
                            <p class="font-weight-bold">Lorem, ipsum.</p>
                            <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                            <p>₹ 1,999 <span class="text-secondary" style="text-decoration: line-through">₹
                                    2,999</span> <span class="font-weight-bold text-danger">10% off</span></p>
                        </div>
                        <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                            style="font-size: 14px; color: var(--color2);">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        const closeBtn = document.querySelectorAll('.closeBtn');
        const modal = document.querySelectorAll('.closeProductDialogBtn')
        const closeModalBtn = document.querySelectorAll('.closeModalBtn')

        closeBtn.forEach((btn, i) => {
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

        function openCouponSidebar() {
            document.getElementById("couponSidebar").style.width = "376px";
            document.getElementById("couponSidebar").style.boxShadow = "-2px 0px 4px 0px rgb(0, 0, 0,0.2)";
            document.body.classList.toggle('modal-open');
        }

        function closeCouponSidebar() {
            document.getElementById("couponSidebar").style.width = "0";
            document.getElementById("couponSidebar").style.boxShadow = "none";
            document.body.classList.toggle('modal-open');
        }

        function openGiftSidebar() {
            document.getElementById("giftSidebar").style.width = "376px";
            document.getElementById("giftSidebar").style.boxShadow = "-2px 0px 4px 0px rgb(0, 0, 0,0.2)";
            document.body.classList.toggle('modal-open');
        }

        function closeGiftSidebar() {
            document.getElementById("giftSidebar").style.width = "0";
            document.getElementById("giftSidebar").style.boxShadow = "none";
            document.body.classList.toggle('modal-open');
        }

        const sizeBtn = document.querySelectorAll('.sizeSelectBtn');
        const sizeModal = document.querySelectorAll('.sizeDialog')
        const quantityBtn = document.querySelectorAll('.quantityBtn');
        const quantityModal = document.querySelectorAll('.quantityDialog')
        const closeSizeDialogBtn = document.querySelectorAll('.closeSizeDialogBtn')
        const closeQuantitiDialogBtn = document.querySelectorAll('.closeQuantitiDialogBtn')

        sizeBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                sizeModal[i].showModal();
                document.body.classList.toggle('modal-open');
            })
        })

        quantityBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                quantityModal[i].showModal();
                document.body.classList.toggle('modal-open');
            })
        })

        closeSizeDialogBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                sizeModal[i].close();
                document.body.classList.toggle('modal-open');
                console.log(i)
            })
        })

        closeQuantitiDialogBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                quantityModal[i].close();
                document.body.classList.toggle('modal-open');
                console.log(i)
            })
        })

        const addressDialogBtn = document.querySelector('.addressDialogBtn');
        const addressDialog = document.querySelector('.addressDialog');
        const closeAddressDialogBtn = document.querySelector('.closeAddressDialogBtn')

        addressDialogBtn.addEventListener('click', () => {
            addressDialog.showModal();
            document.body.classList.toggle('modal-open');
        })

        closeAddressDialogBtn.addEventListener('click', () => {
            addressDialog.close();
            document.body.classList.toggle('modal-open');
        })

        const addAddressBtn = document.querySelector('.addAddressBtn');
        const addressSidebar = document.querySelector('.addressSidebar');

        function openAddressSidebar() {
            addressDialog.close();
            document.body.classList.toggle('modal-open');
            document.getElementById("addressSidebar").style.width = "376px";
            document.getElementById("addressSidebar").style.boxShadow = "-2px 0px 4px 0px rgb(0, 0, 0,0.2)";
            document.body.classList.toggle('modal-open');
        }

        function closeAddressSidebar() {
            addressDialog.showModal();
            document.body.classList.toggle('modal-open');
            document.getElementById("addressSidebar").style.width = "0";
            document.getElementById("addressSidebar").style.boxShadow = "none";
            document.body.classList.toggle('modal-open');
        }

        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>