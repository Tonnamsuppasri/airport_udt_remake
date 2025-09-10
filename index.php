<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
    /* Add transition for a smoother look */
    body {
        transition: background-color 0.5s ease;
    }

    /* First Container */
    .first-container {
        position: relative;
        background-image: url('assets/images/artboard-pic.png');
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 750px;
    }

    .first-container .notice-box {
        max-width: 100%;
        width: 550px;
        background-color: #ffd700;
        overflow: hidden;
        position: relative;
        top: 275px;
        left: 235px;
        z-index: 1;
        transition: all 0.3s ease-in-out; /* Smooth transition for box movement/resizing */
    }

    .first-container .notice-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #ffd700;
        padding: 0px 5px 0px 15px;
        color: #000;
    }

    .icon-container {
        position: relative;
        display: inline-block;
        font-size: 20px;
        top: 3px;
    }

    .icon-container .bi-exclamation {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 18px;
        font-weight: bold;
    }

    .first-container .notice-header .plus-btn {
        border: none;
        padding: 0;
        margin: 0;
        font-size: 40px;
        line-height: 1;
        background: none;
        vertical-align: middle;
        color: black;
        transition: transform 0.2s ease-in-out; /* Add animation to the plus button */
    }

    .first-container .notice-header .plus-btn:hover {
        transform: rotate(90deg); /* Rotates on hover */
    }

    .first-container .notice-content {
        display: flex;
        background-color: #003366;
        color: white;
    }

    .first-container .notice-image {
        background: white;
    }

    .first-container .notice-image img {
        width: 275px;
        height: auto;
        transition: transform 0.3s ease-in-out;
    }

    .first-container .notice-image:hover img {
        transform: scale(1.05); /* Zoom in effect on hover */
    }

    .first-container .notice-text {
        padding: 15px;
        flex-grow: 1;
    }

    .first-container .notice-text h3 {
        margin: 0 0 5px;
        font-size: 20px;
    }

    .first-container .notice-text p {
        margin: 0 0 10px;
        font-size: 15px;
        color: #FECD22;
    }

    .first-container .notice-text .more-btn {
        padding: 5px 25px;
        font-size: 14px;
        transition: all 0.3s ease-in-out;
    }

    .first-container .notice-text .more-btn:hover {
        background-color: #FECD22;
        color: black;
    }

    .first-container .notice-text .left-right-btn {
        position: absolute;
        bottom: 0px;
        right: 0px;
        display: flex;
        gap: 2px;
    }

    .first-container .notice-text .left-right-btn .btn {
        border-radius: 0;
        margin-left: 0;
        margin-right: 0;
    }

    .first-container .highlight-bar {
        height: 50px;
        top: 13px;
    }

    .blue-box {
        background-color: #02407F;
        width: 100%;
        height: 100%;
        position: relative;
    }

    .btn {
        border-radius: 0;
    }

    h1 {
        font-size: 26px;
        position: relative;
        padding-left: 20px;
        margin-bottom: 20px;
    }

    .highlight-bar {
        position: absolute;
        width: 4px;
        height: 20px;
        background-color: #f4c900;
        left: 0;
        top: 5px;
        animation: highlightBar 0.5s ease-out forwards; /* Highlight bar animation */
    }

    @keyframes highlightBar {
        from {
            transform: scaleY(0);
        }
        to {
            transform: scaleY(1);
        }
    }
    

    .second-container {
        max-width: 1600px;
        margin: 0 auto;
        padding: 30px;
        padding-bottom: 40px;
        position: relative;
        margin-top: 20px;
    }

    .blue-box h1 {
        color: white;
        font-size: 18px;
        padding-top: 20px;
        padding-left: 40px;
        padding-right: 40px;
    }

    .blue-box .highlight-bar {
        height: 55px;
        margin-top: 20px;
    }

    .second-container .text {
        color: white;
        font-size: 14px;
        padding: 0px 40px;
    }

    .second-container img {
        width: 100%;
        min-height: 300px;
        height: 360px;
        object-fit: cover;
        filter: brightness(80%);
        transition: filter 0.3s ease-in-out;
    }

    .second-container img:hover {
        filter: brightness(100%); /* Brighter on hover */
    }

    .blue-box .btn {
        font-size: 14px;
        position: absolute;
        bottom: 20px;
        right: 30px;
        padding: 5px 20px;
    }

    .carousel-indicators {
        bottom: -50px;
        gap: 5px;
    }

    .carousel-indicators button {
        background-color: white !important;
        width: 10px !important;
        height: 10px !important;
        border-radius: 50%;
        border: 2px solid #02407F !important;
        transition: all 0.3s ease;
    }

    .carousel-indicators .active {
        background-color: #02407F !important;
        width: 12px !important;
        height: 12px !important;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .second-container {
            padding: 10px 30px;
            padding-bottom: 80px;
        }

        .blue-box h1 {
            font-size: 16px;
            padding: 10px 30px;
        }

        .second-container .text {
            font-size: 13px;
            padding: 0px 30px;
        }

        .blue-box .btn {
            font-size: 14px;
            bottom: 10px;
            padding: 6px 30px;
        }

        .carousel-indicators {
            bottom: -45px;
        }
    }

    .news-container {
        max-width: 500px;
        margin: auto;
        padding: 0px 20px;
        font-family: sans-serif;
        height: 500px;
    }

    .breadcrumb {
        font-size: 14px;
        margin-bottom: 20px;
    }

    .list-group-item {
        border-top: none !important;
        border-left: none !important;
        border-right: none !important;
        border-bottom: 1px solid #dee2e6 !important;
        border-radius: 0 !important;
    }

    .news-item {
        display: flex;
        padding: 5px 0;
    }

    .news-date {
        width: 65px;
        text-align: center;
        font-weight: bold;
        color: #0056a3;
        transition: color 0.3s ease;
    }

    .list-group-item:hover .news-date {
        color: #003058;
    }

    .news-date .day {
        font-size: 26px;
    }

    .news-date .month-year {
        font-size: 14px;
        color: #666;
    }

    .news-content {
        flex: 1;
        padding-left: 15px;
        font-size: 14px;
        color: #333;
    }

    .more-button {
        text-align: right;
        margin-top: 20px;
    }

    .more-button a span:hover {
        background-color: rgb(252, 226, 113);
    }

    .more-button a {
        color: #000;
        text-decoration: none;
        font-weight: bold;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        transition: transform 0.3s ease;
    }

    .more-button a:hover {
        transform: translateX(5px);
    }

    .more-button a span {
        background-color: #f4c900;
        color: black;
        padding: 1px 9px;
        margin-left: 8px;
        font-size: 20px;
        transition: background-color 0.3s ease;
    }

    .custom-nav .nav-link {
        color: #6c757d;
        transition: color 0.3s ease, border-bottom 0.3s ease;
    }

    .custom-nav .nav-link.active {
        color: #000 !important;
        border-bottom: 3px solid #00589B !important;
    }

    .custom-nav .nav-separator {
        display: flex;
        align-items: center;
        padding: 0 0px;
        color: #6c757d;
    }

    .custom-nav {
        align-items: center;
    }

    .custom-nav .nav-item {
        font-size: 16px;
    }

    .third-container {
        background-color: #F7F5F5;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0px;
    }

    .grid-responsive .card {
        background: white;
        border-radius: 0;
        width: 100%;
        aspect-ratio: 1 / 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
        transition: transform 0.2s, box-shadow 0.2s; /* Add smooth transitions */
        padding: 10px;
        text-align: center;
        text-decoration: none;
        color: inherit;
        cursor: pointer;
    }

    .grid-responsive .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15); /* More prominent shadow on hover */
    }

    .grid-responsive .card img {
        width: 60%;
        height: auto;
        max-height: 80px;
        object-fit: contain;
        margin-bottom: 12px;
        transition: transform 0.2s ease-in-out;
    }

    .grid-responsive .card:hover img {
        transform: scale(1.1); /* Slight zoom on image */
    }

    .grid-responsive .card-title {
        font-size: clamp(12px, 1.2vw, 16px);
        color: #333;
    }

    .grid-responsive .card-plus {
        background-color: #00589B;
    }

    .grid-responsive .card-plus:hover {
        background-color: rgb(36, 121, 187);
    }

    .grid-responsive .card-plus .plus-sign {
        font-size: 100px;
        line-height: 0.8;
    }

    .third-pic {
        position: relative;
        background-image: url('assets/images/third-left.png');
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    .third-pic::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('assets/images/third-left2.png');
        background-size: cover;
        background-position: center;
        opacity: 0.6;
        z-index: 1;
        pointer-events: none;
    }

    .third-pic .highlight-bar {
        height: 100%;
        top: 0;
        font-size: 26px;
    }

    .grid-responsive {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0px;
    }

    .service-search-header {
        display: flex;
        flex-direction: column;
        justify-content: center;
        z-index: 2;
        margin-left: 120px;
        top: 100px;
        animation: fadeInSlide 1s ease-out; /* Add fade-in animation */
    }

    @keyframes fadeInSlide {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .service-search-desc {
        font-size: 16px;
    }

    .service-search-row {
        gap: 20px;
        margin-top: 70px;
    }

    .service-search-btn-group {
        gap: 20px;
        font-size: 14px;
    }

    .service-search-btn {
        width: 30px;
    }

    .second-third-pic-left {
        background-image: url('assets/images/third-second-left.jpg');
    }

    .second-third-pic-right {
        background-image: url('assets/images/third-second-right.jpg');
    }

    .second-third-pic-left,
    .second-third-pic-right {
        position: relative;
        background-size: cover;
        background-position: center;
        height: 400px;
        z-index: 0;
    }

    .second-third-pic-left::after,
    .second-third-pic-right::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, #00589B, transparent);
        z-index: 1;
    }

    .second-third-container .text-white {
        position: absolute;
        z-index: 2;
        left: 30px;
        bottom: 30px;
        display: flex;
        align-items: center;
        width: calc(100% - 60px);
        justify-content: space-between;
    }

    .second-third-container .text-white h1,
    .second-third-container .text-white .btn {
        margin: 0;
    }

    .second-third-container h1 {
        z-index: 2;
        position: static;
        font-size: 26px;
    }

    .second-third-container .btn {
        padding: 5px 15px;
        font-size: 14px;
        margin-left: auto;
    }

    .forth-container {
        background-color: #052B5D;
        padding: 50px 0 10px 0;
    }

    .forth-container .scroll-container {
        display: flex;
        overflow-x: auto;
        gap: 2rem;
        padding: 1rem 0;
        cursor: grab;
        user-select: none;
    }

    .forth-container .scroll-container:active {
        cursor: grabbing;
    }

    .forth-container .scroll-container::-webkit-scrollbar {
        display: none;
    }

    .forth-container .scroll-container::-webkit-scrollbar-thumb {
        background-color: #ccc;
        border-radius: 4px;
    }

    .forth-container .card {
        min-width: 350px;
        flex: 0 0 auto;
        border-radius: 0;
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Card hover effects */
    }

    .forth-container .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .forth-container .nav-tabs .nav-link {
        cursor: pointer;
    }

    .forth-container .card-title {
        font-size: 18;
    }

    .forth-container .card-text {
        font-size: 14px;
    }

    .forth-container .btn-outline-primary {
        float: right;
    }

    .forth-container .nav-link {
        color: white;
        border-bottom: 3px solid transparent;
        transition: color 0.3s ease, border-bottom 0.3s ease;
    }

    .forth-container .nav-link:hover {
        border-bottom: 3px solid #68B9FF;
    }

    .forth-container .nav-link.active {
        color: #68B9FF;
        border-bottom: 3px solid #68B9FF;
    }

    .fifth-container {
        background-color: white;
        padding: 0;
    }

    .fifth-container .app-section {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        align-items: center;
        padding: 0;
        border-bottom: 1px solid lightgray;
        position: relative;
    }

    .fifth-container .app-logo {
        height: 80px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        font-size: 14px;
        margin: 0 20px 0 0;
    }

    .fifth-container .store-buttons {
        margin-right: auto;
    }

    .fifth-container .store-buttons img {
        height: 50px;
        width: auto;
    }

    .fifth-container .app-logo,
    .fifth-container .app-text,
    .fifth-container .store-buttons img {
        position: relative;
    }

    .fifth-container .faq {
        display: flex;
        align-items: center;
        background: linear-gradient(to right, #FFAA01, #FECD22);
        font-weight: bold;
        color: #000;
        padding: 30px 260px 30px 70px;
        height: 100%;
        border-radius: 0;
        position: relative;
        right: auto;
        top: 0;
        bottom: 0;
        min-width: 600px;
        max-width: 100%;
        margin-left: auto;
        transition: background-color 0.3s ease; /* Hover effect */
    }

    .fifth-container .faq:hover {
        background: linear-gradient(to right, rgb(253, 184, 44), rgb(248, 207, 59));
    }

    .fifth-container .faq span {
        margin-left: 20px;
        position: static;
    }

    .fifth-container .airline-logos img {
        height: 60px;
        margin: 5px 15px;
    }

    .fifth-container .store-buttons {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0 20px;
    }

    .fifth-container .store-buttons img {
        transition: transform 0.5s ease;
    }

    .fifth-container .store-buttons img:hover {
        transform: scale(1.05);
    }

    .fifth-container .icon-circle {
        background-color: #333333;
        color: white;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 25px;
    }

    .fifth-container .airline-logos {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        padding: 15px 0;
        gap: 50px;
    }

    .fifth-container .airline-logos img {
        width: 140px;
        height: 110px;
        object-fit: contain;
        margin: 5px 5px;
        background: #fff;
        border-radius: 8px;
        display: block;
        transition: transform 0.3s ease; /* Logo hover animation */
    }

    .fifth-container .airline-logos img:hover {
        transform: translateY(-5px);
    }

    .fifth-container .icon2 {
        font-size: 70px;
        color: rgb(0, 0, 0);
        opacity: 0.1;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        position: absolute;
        right: 60px;
    }

    .fifth-container .app-section .app {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        padding-left: 300px;
        margin-left: auto;
    }

    @media (max-width: 1562px) {
        .fifth-container .app-section .app {
            padding-left: 0;
            margin-left: 0;
            margin: 20px;
        }

        .fifth-container .faq {
            width: 100%;
            margin: 0 auto;
        }
    }

    @media (max-width: 1285px) {
        .fifth-container .faq {
            width: 100%;
            margin: 0 auto;
        }
    }

    @media (max-width: 1200px) {
        .grid-responsive {
            grid-template-columns: repeat(3, 1fr);
        }

        .service-search-header {
            margin-left: 50px;
            top: 30px;
        }
    }

    @media (max-width: 992px) {
        .first-container {
            height: auto;
            padding: 20px;
        }

        .first-container .notice-box {
            width: 90%;
            top: 0;
            left: 0;
            margin: 200px auto;
            position: relative;
        }

        .first-container .notice-image img {
            width: 100%;
            height: auto;
        }

        .carousel-item .row {
            flex-direction: column !important;
        }

        .carousel-item .col-6,
        .carousel-item .col-7,
        .carousel-item .col-5 {
            width: 100%;
        }

        .blue-box {
            height: 220px;
        }

        .blue-box .highlight-bar {
            height: 4px;
            width: 65px;
            padding-left: 30px;
            top: -20px;
            left: 40px;
        }

        .grid-responsive {
            grid-template-columns: repeat(2, 1fr);
        }

        .service-search-header {
            margin-left: 40px;
            top: 20px;
        }

        .service-search-btn-group {
            flex-direction: column;
        }

        .service-search-btn {
            min-width: 80%;
            padding: 6px 16px;
            font-size: 14px;
            white-space: nowrap;
        }
    }

    @media (max-width: 865px) {
        .second-third-container .text-white {
            position: absolute;
            z-index: 2;
            left: 30px;
            bottom: 30px;
            display: block;
            width: calc(100% - 60px);
        }

        .second-third-container .text-white h1,
        .second-third-container .text-white .btn {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
    }

    @media (max-width: 767px) {
        .second-third-container .text-white {
            display: flex;
        }

        .second-third-container .text-white h1,
        .second-third-container .text-white .btn {
            width: unset;
        }

        .third-pic {
            height: 530px;
        }

        .service-search-header {
            margin-left: 60px;
            top: 20px;
        }

        .service-search-btn-group {
            flex-direction: row;
        }

        .service-search-btn {
            min-width: unset;
        }

        .fifth-container .faq {
            min-width: unset;
            padding: 30px 0 30px 10px;
        }
    }

    @media (max-width: 702px) {
        .fifth-container .app-logo {
            margin-bottom: 20px;
        }
    }

    @media (max-width: 576px) {
        .col-md-6.p-5 {
            padding: 1rem !important;
        }

        .service-search-header {
            margin-left: 20px;
            top: 10px;
        }

        .first-container .notice-content {
            flex-direction: column;
        }

        .first-container .highlight-bar {
            top: 35px;
        }
    }
</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <style>
        .index-navbar {
            z-index: 1000;
            position: absolute;
            width: 100%;
            background-color: rgb(1, 74, 155, 0.8);
        }
    </style>
    <main>
        <div class="index-container">
            <div class="first-container">
                <div class="notice-box">
                    <div class="notice-header">
                        <span>
                            <div class="icon-container">
                                <i class="bi bi-chat-left"></i>
                                <i class="bi bi-exclamation"></i>
                            </div>
                            Notices
                        </span>
                        <a class="plus-btn" href="#"><i class="bi bi-plus"></i></a>
                    </div>
                    <div class="notice-content">
                        <div class="notice-image">
                            <img src="assets/images/index-notice-left.png" alt="Covid-19 Info">
                        </div>
                        <h1><span class="highlight-bar"></h1>
                            <div class="notice-text">
                                <h3>Covid-19 Infomation</h3>
                                <p>มาตรการช่วยเหลือ Covid-19</p>
                                <a type="button" href="#" class="btn btn-outline-light more-btn">ดูเพิ่มเติม</a>
                                <div class="left-right-btn">
                                    <a type="button" class="btn btn-warning"><i class="bi bi-chevron-left"></i></a>
                                    <a type="button" class="btn btn-warning"><i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>

                    </div>

                </div>
            </div>

            <div class="second-container">
                <div class="row gx-5">
                    <div class="col-md-7 col-12 mb-4">
                        <h1><span class="highlight-bar"></span>คำแนะนำผู้โดยสาร</h1>
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-7 p-0">
                                            <img src="assets/images/advice-pic.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="col-5 p-0">
                                            <div class="blue-box">
                                                <h1><span class="highlight-bar"></span>ข้อควรรู้ก่อนขึ้นเครื่อง "การนำของเหลว เจล สเปรย์ (Aerosols) ขึ้นไปกับอากาศยาน</h1>
                                                <p class="text">เพื่อความสะดวกในการเดินทาง และเตรียมความพร้อมก่อนขึ้นเครื่อง ทางท่าอากาศยานอุดรธานี จึงมีข้อควรรู้มาฝากให้ผู้โดยสารได้ทำความเข้าใจกันค่ะ สำหรับของเหลว</p>
                                                <a href="#" class="btn btn-outline-light">ดูเพิ่มเติม</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-6 p-0">
                                            <img src="assets/images/advice-pic.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="col-6 p-0">
                                            <div class="blue-box">
                                                <h1><span class="highlight-bar"></span>ข้อควรรู้ก่อนขึ้นเครื่อง "การนำของเหลว เจล สเปรย์ (Aerosols) ขึ้นไปกับอากาศยาน</h1>
                                                <p class="text">เพื่อความสะดวกในการเดินทาง และเตรียมความพร้อมก่อนขึ้นเครื่อง ทางท่าอากาศยานอุดรธานี จึงมีข้อควรรู้มาฝากให้ผู้โดยสารได้ทำความเข้าใจกันค่ะ สำหรับของเหลว</p>
                                                <a href="#" class="btn btn-outline-light">ดูเพิ่มเติม</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-6 p-0">
                                            <img src="assets/images/advice-pic.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="col-6 p-0">
                                            <div class="blue-box"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-6 p-0">
                                            <img src="assets/images/advice-pic.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="col-6 p-0">
                                            <div class="blue-box"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="more-button">
                            <a href="#">
                                ดูทั้งหมด
                                <span>+</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-5 col-12">
                        <h1><span class="highlight-bar"></span>ข่าวล่าสุด</h1>
                        <div class="news-container">
                            <ul class="nav nav-underline custom-nav" id="newsTabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-category="public">ข่าวประชาสัมพันธ์</a>
                                </li>
                                <li class="nav-separator">/</li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="procurement">ประกาศจัดซื้อจัดจ้าง</a>
                                </li>
                                <li class="nav-separator">/</li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="recruitment">ข่าวรับสมัครงาน</a>
                                </li>
                            </ul>

                            <div class="news-lists">
                                <div class="news-content-box" data-category="public">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="news-item">
                                                <div class="news-date">
                                                    <div class="day">05</div>
                                                    <div class="month-year">ต.ค. 2564</div>
                                                </div>
                                                <div class="news-content">
                                                    ข้อความประชาสัมพันธ์
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="news-item">
                                                <div class="news-date">
                                                    <div class="day">08</div>
                                                    <div class="month-year">ธ.ค. 2563</div>
                                                </div>
                                                <div class="news-content">
                                                    ข้อความประชาสัมพันธ์
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="news-item">
                                                <div class="news-date">
                                                    <div class="day">08</div>
                                                    <div class="month-year">ธ.ค. 2563</div>
                                                </div>
                                                <div class="news-content">
                                                    ข้อความประชาสัมพันธ์
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="news-item">
                                                <div class="news-date">
                                                    <div class="day">08</div>
                                                    <div class="month-year">ธ.ค. 2563</div>
                                                </div>
                                                <div class="news-content">
                                                    ข้อความประชาสัมพันธ์
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>

                                <div class="news-content-box d-none" data-category="procurement">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="news-item">
                                                <div class="news-date">
                                                    <div class="day">12</div>
                                                    <div class="month-year">ก.ย. 2564</div>
                                                </div>
                                                <div class="news-content">
                                                    ประกาศจัดซื้อจัดจ้างตัวอย่าง
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="news-content-box d-none" data-category="recruitment">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="news-item">
                                                <div class="news-date">
                                                    <div class="day">01</div>
                                                    <div class="month-year">ก.ย. 2564</div>
                                                </div>
                                                <div class="news-content">
                                                    ประกาศรับสมัครงาน
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="more-button mt-3">
                                <a href="#">
                                    ดูทั้งหมด
                                    <span>+</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="third-container">
            <div class="row g-0">
                <div class="col-md-6 d-flex third-pic">
                    <div class="text-white service-search-header">
                        <h1>
                            <span class="highlight-bar"></span>
                            สิ่งอำนวยความสะดวกและบริการ
                            <p style="font-size: 16px;" class="service-search-desc">โปรดเลือกคำสำคัญบริการที่คุณต้องการค้นหา</p>
                        </h1>
                        <div class="row service-search-row">
                            <div class="col-12 mb-2 d-flex flex-wrap service-search-btn-group">
                                <button class="btn btn-outline-light flex-fill service-search-btn">การเดินทาง</button>
                                <button class="btn btn-outline-light flex-fill service-search-btn">บริการลูกค้า</button>
                                <button class="btn btn-outline-light flex-fill service-search-btn">ห้องรับรอง</button>
                            </div>
                            <div class="col-4 d-flex flex-wrap service-search-btn-group">
                                <button class="btn btn-outline-light flex-fill service-search-btn">อื่นๆ</button>
                            </div>
                        </div>
                    </div>
                    <div class="ovarlay"></div>
                </div>

                <div class="col-md-6 p-5">
                    <div class="grid-responsive">
                        <a href="#" class="card">
                            <img src="assets/images/parking.png" alt="ที่จอดรถสนามบิน">
                            <div class="card-title">ที่จอดรถสนามบิน</div>
                        </a>
                        <a href="#" class="card">
                            <img src="assets/images/shuttle.png" alt="รถบัสรับส่งสนามบิน">
                            <div class="card-title">รถบัสรับส่งสนามบิน</div>
                        </a>
                        <a href="#" class="card">
                            <img src="assets/images/taxi.png" alt="รถ TAXI">
                            <div class="card-title">รถ TAXI</div>
                        </a>
                        <a href="#" class="card">
                            <img src="assets/images/rentcar.png" alt="รถเช่า">
                            <div class="card-title">รถเช่า</div>
                        </a>
                        <a href="#" class="card">
                            <img src="assets/images/lounge.png" alt="ห้องรับรอง">
                            <div class="card-title">ห้องรับรอง</div>
                        </a>
                        <a href="#" class="card">
                            <img src="assets/images/counter.png" alt="เคาน์เตอร์ประชาสัมพันธ์">
                            <div class="card-title">เคาน์เตอร์ประชาสัมพันธ์</div>
                        </a>
                        <a href="#" class="card">
                            <img src="assets/images/wifi.png" alt="WIFI">
                            <div class="card-title">WIFI</div>
                        </a>
                        <a href="#" class="card text-white card-plus">
                            <div class="plus-sign">+</div>
                            <div>ทั้งหมด</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row g-0 second-third-container">
                <div class="col-md-6 d-flex align-items-center second-third-pic-left">
                    <div class="text-white">
                        <h1>
                            ร้านอาหารภายในสนามบิน
                        </h1>
                        <div class="btn btn-outline-light">ดูเพิ่มเติม</div>
                    </div>
                </div>

                <div class="col-md-6 d-flex align-items-center second-third-pic-right">
                    <div class="text-white">
                        <h1>
                            ร้านค้าภายในสนามบิน
                        </h1>
                        <div class="btn btn-outline-light">ดูเพิ่มเติม</div>
                    </div>
                </div>
            </div>
        </div>


        <div class="forth-container">
            <div class="container py-4">
                <h2 class="text-white text-center mb-3">สถานที่น่าสนใจ</h2>

                <ul class="nav justify-content-center mb-4" id="myTabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-category="attractions" href="#">แหล่งท่องเที่ยว</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-category="restaurants" href="#">ร้านอาหาร</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-category="hotels" href="#">โรงแรม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-category="promotions" href="#">โปรโมชั่น</a>
                    </li>
                </ul>

                <div class="scroll-container d-flex gap-3 overflow-auto" id="cardContainer">
                    </div>

                <div class="text-center mt-4">
                    <button class="btn btn-warning fw-bold px-4" href="#">ดูทั้งหมด +</button>
                </div>
            </div>
        </div>

        <div class="fifth-container">
            <div class="app-section">
                <div class="app">
                    <img src="assets/images/thai-flight-info-logo.png" alt="ThaiFlightInfo Logo" class="app-logo">
                    <div class="app-text">
                        <strong>Mobile Application</strong><br>
                        Download ThaiFlightInfo
                    </div>
                    <div class="store-buttons">
                        <a href="#" target="_blank" rel="noopener" class="app-store">
                            <img src="assets/images/app-store.png" alt="ดาวน์โหลดแอป ThaiFlightInfo บน App Store สำหรับ iOS">
                        </a>
                        <a href="#" target="_blank" rel="noopener" class="google-play">
                            <img src="assets/images/google-play.png" alt="ดาวน์โหลดแอป ThaiFlightInfo บน Google Play สำหรับ Android">
                        </a>
                    </div>
                </div>
                <a href="faqs-page.php" class="faq">
                    <i class="bi bi-chat-left-text-fill icon-circle"></i>
                    <span>คำถามที่พบบ่อย</span>
                    <i class="bi bi-chat-left-text-fill icon2"></i>
                </a>
            </div>

            <div class="airline-logos">
                <img src="assets/images/logo-airport.png" alt="Logo 1">
                <img src="assets/images/udonthani-logo.png" alt="Logo 2">
                <img src="assets/images/logo-lion-air.png" alt="Lion Air">
                <img src="assets/images/nokair-logo.png" alt="Nok Air">
                <img src="assets/images/thaismile-logo.png" alt="Thai Smile">
                <img src="assets/images/airasia-logo.png" alt="AirAsia">
            </div>
        </div>
        </div>
    </main>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>
<script>
    // JavaScript สำหรับการเปลี่ยนแท็บข่าว
    document.addEventListener("DOMContentLoaded", function () {
        const navLinks = document.querySelectorAll("#newsTabs .nav-link");
        const contentBoxes = document.querySelectorAll(".news-content-box");

        navLinks.forEach(link => {
            link.addEventListener("click", function (e) {
                e.preventDefault();

                navLinks.forEach(link => link.classList.remove("active"));

                contentBoxes.forEach(box => box.classList.add("d-none"));

                this.classList.add("active");

                const category = this.getAttribute("data-category");
                document.querySelector(`.news-content-box[data-category="${category}"]`).classList.remove("d-none");
            });
        });
    });

    // JavaScript สถานที่น่าสนใจ
    const data = {
        attractions: [
            { title: "อุทยานประวัติศาสตร์ภูพระบาท", desc: "อุทยานโบราณสถานแห่งแผ่นดินอีสาน", img: "assets/images/ภูพระบาท.png" },
            { title: "อุทยานประวัติศาสตร์ภูพระบาท", desc: "อุทยานโบราณสถานแห่งแผ่นดินอีสาน", img: "assets/images/ภูพระบาท.png" },
            { title: "อุทยานประวัติศาสตร์ภูพระบาท", desc: "อุทยานโบราณสถานแห่งแผ่นดินอีสาน", img: "assets/images/ภูพระบาท.png" },
            { title: "อุทยานประวัติศาสตร์ภูพระบาท", desc: "อุทยานโบราณสถานแห่งแผ่นดินอีสาน", img: "assets/images/ภูพระบาท.png" },
            { title: "อุทยานประวัติศาสตร์ภูพระบาท", desc: "อุทยานโบราณสถานแห่งแผ่นดินอีสาน", img: "assets/images/ภูพระบาท.png" },
        ],
        restaurants: [
            { title: "ร้านอาหารตัวอย่าง 1", desc: "คำอธิบายร้านอาหาร", img: "assets/images/restaurant1.png" },
            { title: "ร้านอาหารตัวอย่าง 2", desc: "คำอธิบายร้านอาหาร", img: "assets/images/restaurant2.png" },
        ],
        hotels: [
            { title: "โรงแรมตัวอย่าง 1", desc: "คำอธิบายโรงแรม", img: "assets/images/hotel1.png" },
            { title: "โรงแรมตัวอย่าง 2", desc: "คำอธิบายโรงแรม", img: "assets/images/hotel2.png" },
        ],
        promotions: [
            { title: "โปรโมชั่นตัวอย่าง 1", desc: "คำอธิบายโปรโมชั่น", img: "assets/images/promotion1.png" },
            { title: "โปรโมชั่นตัวอย่าง 2", desc: "คำอธิบายโปรโมชั่น", img: "assets/images/promotion2.png" },
        ]
    };

    function loadCards(category) {
        const container = document.getElementById('cardContainer');
        container.innerHTML = '';

        data[category].forEach(item => {
            const card = document.createElement('div');
            card.className = 'card shadow-sm';
            card.innerHTML = `
      <img src="${item.img}" class="card-img-top" alt="${item.title}">
      <div class="card-body">
        <h6 class="card-title">${item.title}</h6>
        <p class="card-text text-muted">${item.desc}</p>
        <a href="#" class="btn btn-outline-primary btn-sm">ดูเพิ่มเติม</a>
      </div>
    `;
            container.appendChild(card);
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        loadCards('attractions');

        document.querySelectorAll('#myTabs .nav-link').forEach(tab => {
            tab.addEventListener('click', (e) => {
                e.preventDefault();

                // Toggle active tab
                document.querySelectorAll('#myTabs .nav-link').forEach(t => t.classList.remove('active'));
                e.target.classList.add('active');

                const category = e.target.getAttribute('data-category');
                loadCards(category);
            });
        });

        // Drag scroll
        const scroller = document.getElementById('cardContainer');
        let isDown = false,
            startX, scrollLeft;

        scroller.addEventListener('mousedown', e => {
            isDown = true;
            startX = e.pageX - scroller.offsetLeft;
            scrollLeft = scroller.scrollLeft;
            scroller.classList.add('active');
        });

        scroller.addEventListener('mouseleave', () => isDown = false);
        scroller.addEventListener('mouseup', () => isDown = false);
        scroller.addEventListener('mousemove', e => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - scroller.offsetLeft;
            const walk = (x - startX) * 1.5;
            scroller.scrollLeft = scrollLeft - walk;
        });
    });
</script>



</html>