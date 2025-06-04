<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
    .blue-box {
        background-color: #02407F;
        width: 100%;
        height: 100%;
        position: relative;
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
    }

    .carousel-indicators .active {
        background-color: #02407F !important;
    }

    /*  Responsive */
    @media (max-width: 768px) {
        .second-container {
            padding: 10px;
            padding-bottom: 80px;
        }

        .blue-box h1 {
            font-size: 16px;
            padding: 10px 20px;
        }

        .second-container .text {
            font-size: 13px;
            padding: 0px 20px;
        }

        .blue-box .btn {
            font-size: 12px;
            bottom: 10px;
            right: 15px;
            padding: 4px 12px;
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
        width: 60px;
        text-align: center;
        font-weight: bold;
        color: #0056a3;
    }

    .news-date .day {
        font-size: 22px;
    }

    .news-date .month-year {
        font-size: 12px;
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
        background-color:rgb(252, 226, 113);
    }

    .more-button a {
        color: #000;
        text-decoration: none;
        font-weight: bold;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
    }

    .more-button a span {
        background-color: #f4c900;
        color: black;
        padding: 1px 9px;
        margin-left: 8px;
        font-size: 20px;
    }

    .custom-nav .nav-link {
        color: #6c757d;
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
        transition: transform 0.2s;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        color: inherit;
        cursor: pointer;
    }

    .grid-responsive .card:hover {
        transform: translateY(-3px);
    }

    .grid-responsive .card img {
        width: 60%;
        height: auto;
        max-height: 80px;
        object-fit: contain;
        margin-bottom: 12px;
    }

    .grid-responsive .card-title {
        font-size: clamp(12px, 1.2vw, 16px);
        color: #333;
    }
    .grid-responsive .card-plus {
        background-color: #00589B;
    }
    .grid-responsive .card-plus:hover{
        background-color:rgb(36, 121, 187);
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
        font-size: 26px
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
        .grid-responsive {
            grid-template-columns: repeat(2, 1fr);
        }
        .service-search-header{
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
    @media (max-width: 767px) {
        .third-pic {
            height: 530px;
        }
        .service-search-header{
            margin-left: 60px;
            top: 20px;
        }
        .service-search-btn-group {
            flex-direction: row;
        }
        .service-search-btn {
            min-width: unset;
        }
    }
    @media (max-width: 576px) {
        .col-md-6.p-5 {
            padding: 1rem !important;
        }
        .service-search-header{
            margin-left: 20px;
            top: 10px;
        }
    }

    .second-third-pic-left{
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
        background-color:#052B5D; /* สีพื้นหลังหลัก */
        padding: 50px 0; /* ช่องว่างด้านบน-ล่าง */
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
        display: none; /* ซ่อน scrollbar */
    }
    .forth-container .scroll-container::-webkit-scrollbar-thumb {
        background-color: #ccc;
        border-radius: 4px;
    }

    .forth-container .card {
        min-width: 350px;
        flex: 0 0 auto;
        border-radius:0;
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
        color:white;
        border-bottom: 3px solid transparent;
    }
    .forth-container .nav-link:hover {
        border-bottom: 3px solid #68B9FF;
    }
    .forth-container .nav-link.active {
        color: #68B9FF;
        border-bottom: 3px solid #68B9FF;
    }


    .fifth-container {
        background-color:white;
        padding: 0;
    }

    .fifth-container .app-section {
        display: flex;
        padding: 20px 0;
        align-items: center; /* จัดกลางแนวตั้ง */
        flex-wrap: wrap;
        border-bottom: 1px solid lightgray;
        position: relative; /* เพิ่มสำหรับจัด faq */
    }

    .fifth-container .app-logo {
        height: 60px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        margin-left: 200px;
        margin-right: 16px; /* เพิ่มระยะห่างระหว่างโลโก้กับข้อความ */
    }

    .fifth-container .app-text {
        font-size: 14px;
        margin-right: 20px;
        /* ลบ margin-left ถ้ามี */
    }

    .fifth-container .store-buttons img {
        height: 40px;
        margin-right: 10px;
    }

    .fifth-container .faq {
        display: flex;
        align-items: center; /* ตรงกลางแนวตั้งของเนื้อหาในกล่อง */
        background: linear-gradient(to right, #FFAA01, #FECD22);
        font-weight: bold;
        color: #000;
        padding: 30px 260px 30px 40px; /* เพิ่ม padding-left ให้ icon ไม่ติดขอบ */
        height: 100%;
        margin: 0;
        border-radius: 0 0 0 0;
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
    }
    .fifth-container .faq:hover{
        background: linear-gradient(to right,rgb(253, 184, 44),rgb(248, 207, 59));
    }
    .fifth-container .faq span {
        margin-left: 8px;
        position: static;
    }
    .fifth-container .faq i {
        position: static;
        left: unset;
    }

    .fifth-container .faq img {
        height: 30px;
        margin-right: 8px;
    }

    .fifth-container .airline-logos {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    }

    .fifth-container .airline-logos img {
    height: 50px;
    margin: 10px 15px;
    }
    .fifth-container .store-buttons img {
        height: 40px;
        width: 40px;
        display: inline-block;
    }
    .icon-circle {
        background-color: #333333;
        color: white;
        border-radius: 50%;      /* ทำให้เป็นวงกลม */
        width: 50px;             /* ขนาดของวงกลม */
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 25px;         /* ขนาดไอคอน */
    }
    .fifth-container .airline-logos{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        padding: 10px 0;
        gap: 30px;
    }
    .fifth-container .airline-logos img {
        width: 140px;
        height: 110px;
        object-fit: contain;
        margin: 5px 5px;
        background: #fff;
        border-radius: 8px;
        display: block;
    }
</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
        <div class="index-container">
            <div class="first-container">
                <div class="row">

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
                                <ul class="nav nav-underline custom-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">ข่าวประชาสัมพันธ์</a>
                                    </li>
                                    <li class="nav-separator">/</li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">ประกาศจัดซื้อจัดจ้าง</a>
                                    </li>
                                    <li class="nav-separator">/</li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">ข่าวรับสมัครงาน</a>
                                    </li>
                                </ul>

                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="news-item">
                                            <div class="news-date">
                                            <div class="day">05</div>
                                            <div class="month-year">ต.ค. 2564</div>
                                            </div>
                                            <div class="news-content">
                                            lorem ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry's standard dummy text
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="news-item">
                                            <div class="news-date">
                                            <div class="day">30</div>
                                            <div class="month-year">ก.ย. 2564</div>
                                            </div>
                                            <div class="news-content">
                                            lorem ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry's standard dummy text
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="news-item">
                                            <div class="news-date">
                                            <div class="day">25</div>
                                            <div class="month-year">ก.ย. 2564</div>
                                            </div>
                                            <div class="news-content">
                                            lorem ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry's standard dummy text
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="news-item">
                                            <div class="news-date">
                                            <div class="day">20</div>
                                            <div class="month-year">ก.ย. 2564</div>
                                            </div>
                                            <div class="news-content">
                                            lorem ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry's standard dummy text
                                            </div>
                                        </div>
                                    </a>

                                <div class="more-button">
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
            </div>
            
            <!-- Third Container -->
            <div class="third-container">
                <div class="row g-0">
                    <!-- First Left Section -->
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

                    <!-- First Right Section -->  
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

                <!-- Second thrid Container -->
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
            

            <!-- Fourth Container -->
             
            <div class="forth-container">
                <div class="container py-4">
                    <h2 class="text-white text-center mb-3">สถานที่น่าสนใจ</h2>

                    <!-- Tabs -->
                    <ul class="nav justify-content-center mb-4" id="myTabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-type="attraction" href="#">แหล่งท่องเที่ยว</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-type="restaurant" href="#">ร้านอาหาร</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-type="hotel" href="#">โรงแรม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-type="promotion" href="#">โปรโมชั่น</a>
                    </li>

                    <!-- Scrollable Cards -->
                    <div class="scroll-container"  id="cardContainer">
                    <!-- cards here -->
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-warning fw-bold px-4">ดูทั้งหมด +</button>
                    </div>
                </div>
            </div>

            <!-- fifth Container -->
            <div class="fifth-container">
                <div class="app-section">
                    <img src="assets/images/thai-flight-info-logo.png" alt="ThaiFlightInfo Logo" class="app-logo">
                    <div class="app-text">
                    <strong>Mobile Application</strong><br>
                    Download ThaiFlightInfo
                    </div>
                    <div class="store-buttons">
                    <img src="assets/images/app-store.png" alt="App Store">
                    <img src="assets/images/google-play.png" alt="Google Play">
                    </div>
                    <a href="faqs-page.php" class="faq" style="text-decoration: none;">
                        <i class="bi bi-chat-left-text-fill icon-circle"></i>
                        <span>คำถามที่พบบ่อย</span>
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
const data = {
  attractions: [
    { title: "อุทยานประวัติศาสตร์ภูพระบาท", desc: "อุทยานโบราณสถานแห่งแผ่นดินอีสาน", img: "assets/images/ภูพระบาท.png" },
    { title: "อุทยานประวัติศาสตร์ภูพระบาท", desc: "อุทยานโบราณสถานแห่งแผ่นดินอีสาน", img: "assets/images/ภูพระบาท.png" },
    { title: "อุทยานประวัติศาสตร์ภูพระบาท", desc: "อุทยานโบราณสถานแห่งแผ่นดินอีสาน", img: "assets/images/ภูพระบาท.png" },
    { title: "อุทยานประวัติศาสตร์ภูพระบาท", desc: "อุทยานโบราณสถานแห่งแผ่นดินอีสาน", img: "assets/images/ภูพระบาท.png" },
    { title: "อุทยานประวัติศาสตร์ภูพระบาท", desc: "อุทยานโบราณสถานแห่งแผ่นดินอีสาน", img: "assets/images/ภูพระบาท.png" }
  ],
  restaurants: [
    { title: "ร้านลาบอุบล", desc: "อาหารอีสาน", img: "https://via.placeholder.com/300x200?text=ลาบอุบล" },
    { title: "ครัวคุณยาย", desc: "อาหารไทยพื้นบ้าน", img: "https://via.placeholder.com/300x200?text=ครัวคุณยาย" }
  ],
  hotels: [
    { title: "โรงแรมริมโขง", desc: "วิวแม่น้ำ", img: "https://via.placeholder.com/300x200?text=ริมโขง" },
    { title: "บูทีคโฮเทล", desc: "โรงแรมสวยๆ", img: "https://via.placeholder.com/300x200?text=บูทีค" }
  ],
  promotions: [
    { title: "ส่วนลด 50%", desc: "เฉพาะเดือนนี้", img: "https://via.placeholder.com/300x200?text=โปร50" },
    { title: "พัก 3 คืน", desc: "ราคาพิเศษ", img: "https://via.placeholder.com/300x200?text=แพ็กเกจ" }
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
        <a href="#" class="btn btn-outline-primary btn-sm justify-content-end">ดูเพิ่มเติม</a>
      </div>

    `;
    container.appendChild(card);
  });
}

// Event listeners
document.addEventListener('DOMContentLoaded', () => {
  loadCards('attractions');

  document.querySelectorAll('#categoryTabs .nav-link').forEach(tab => {
    tab.addEventListener('click', (e) => {
      document.querySelectorAll('#categoryTabs .nav-link').forEach(t => t.classList.remove('active'));
      e.target.classList.add('active');
      const category = e.target.getAttribute('data-category');
      loadCards(category);
    });
  });

  // Drag scroll with mouse
  const scroller = document.getElementById('cardContainer');
  let isDown = false;
  let startX, scrollLeft;

  scroller.addEventListener('mousedown', (e) => {
    isDown = true;
    scroller.classList.add('active');
    startX = e.pageX - scroller.offsetLeft;
    scrollLeft = scroller.scrollLeft;
  });
  scroller.addEventListener('mouseleave', () => {
    isDown = false;
    scroller.classList.remove('active');
  });
  scroller.addEventListener('mouseup', () => {
    isDown = false;
    scroller.classList.remove('active');
  });
  scroller.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - scroller.offsetLeft;
    const walk = (x - startX) * 1.5; // scroll speed
    scroller.scrollLeft = scrollLeft - walk;
  });
});
</script>



</html>
