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
        padding: 20px;
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

    .card {
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

    .card:hover {
        transform: translateY(-3px);
    }

    .card img {
        width: 60%;
        height: auto;
        max-height: 80px;
        object-fit: contain;
        margin-bottom: 12px;
    }

    .card-title {
        font-size: clamp(12px, 1.2vw, 16px);
        color: #333;
    }
    .card-plus {
        background-color: #00589B;
    }
    .card-plus:hover{
        background-color:rgb(36, 121, 187);
    }
    .card-plus .plus-sign {
        font-size: 100px;
        line-height: 0.8;
    }
    .overlay {
        background-color: rgba(0,0,0,0.3); 
        position: absolute; 
        top: 0; 
        left: 0; 
        width: 100%; 
        height: 100%;
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
                <!-- Left Section -->
                <div class="col-md-6 d-flex align-items-center third-pic">
                <div class="text-white p-5">
                <h1>
                <span class="highlight-bar"></span>
                สิ่งอำนวยความสะดวกและบริการ
                <p style="font-size: 16px;">โปรดเลือกคำสำคัญบริการที่คุณต้องการค้นหา</p>
                </h1>
                <div class="row row-cols-3">
                    <div class="col">
                        <button class="btn btn-outline-light">การเดินทาง</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light">บริการลูกค้า</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light">ห้องรับรอง</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light">อื่นๆ</button>
                    </div>
                    </div>
                    </div>
                    <div class="ovarlay"></div>
                </div>


    <!-- Right Section -->
    <div class="col-md-6 p-5">
        <div class="grid">
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
</div>
        </div>
    </main>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>
