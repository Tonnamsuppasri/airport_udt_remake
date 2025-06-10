<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<style>
    .service1-container {
        max-width: 1214px;
        margin: 0 auto 50px;
        padding: 0 15px;
    }

    .service1-container .nav-link {
        border-top: 2px solid transparent;
        color: #333;
        padding: 0.5rem 1.5rem;
        transition: all 0.2s ease-in-out;
        border-bottom: none;
    }

    .service1-container .nav-link:hover {
        border-bottom: 2px solid #007bff;
        color: #0d6efd;
    }

    .service1-container .nav .nav-link.active {
        color: #007bff !important;
        border-bottom: 2px solid #007bff;
        font-weight: 500;
    }

    .service1-container .home {
        display: flex;
        align-items: center;
    }

    .service1-container .home a {
        text-decoration: none;
        font-size: 0.9rem;
        margin-right: 5px;
    }

    .img-fluid {
        width: 100%;
        object-fit: contain;
        object-position: center top;
        filter: brightness(50%);
    }

    .blue-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 82, 170, 0.7);
        color: white;
        padding: 10px 20px;
        font-size: 30px;
        text-align: center;
        white-space: nowrap;
    }

    .image-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        max-height: 250px;
    }

    .service1-container .full-width-hr {
        width: 99.5vw;
        margin-left: calc(-50vw + 50%);
        border: none;
        border-top: 1px solid #333;
    }

    .category-section {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 20px;
        background-color: #f2f2f2;
        padding: 12px 16px;
        border-radius: 8px;
        flex-wrap: wrap;
    }

    .category-label {
        font-size: 16px;
        font-weight: bold;
        color: #333;
        white-space: nowrap;
    }

    .tabs-container {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .tab-button {
        padding: 6px 18px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 3px;
        cursor: pointer;
        font-size: 14px;
        color: #333;
        transition: all 0.2s ease-in-out;
    }

    .tab-button:hover {
        background-color: #e6e6e6;
    }

    .tab-button.active {
        background-color: #005bac;
        color: white;
        border-color: #005bac;
    }

    .card-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .card-wrapper {
        flex: 0 0 calc(16.66% - 1.5rem);
        display: flex;
    }

    @media (max-width: 1200px) {
        .card-wrapper {
            flex: 0 0 calc(25% - 1.5rem);
        }
    }

    @media (max-width: 992px) {
        .card-wrapper {
            flex: 0 0 calc(33.33% - 1.5rem);
        }
    }

    @media (max-width: 768px) {
        .card-wrapper {
            flex: 0 0 calc(50% - 1.5rem);
        }
    }

    @media (max-width: 480px) {
        .card-wrapper {
            flex: 0 0 100%;
        }
    }

    .card {
        background: white;
        border-radius: 0;
        width: 100%;
        aspect-ratio: 1 / 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
        transition: transform 0.2s;
        padding: 16px 10px 12px;
        text-align: center;
        text-decoration: none;
        color: inherit;
        cursor: pointer;
    }

    .card:hover {
        transform: translateY(-3px);
    }

    .card img {
        width: 70%;
        max-height: 90px;
        height: auto;
        object-fit: contain;
        margin-top: 10px;
        flex-shrink: 0;
    }

    .card-title {
        font-size: clamp(13px, 1.3vw, 17px);
        font-weight: 500;
        color: #333;
        margin-top: auto;
    }
</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
        <div class="image-container">
            <img src="assets/images/ห้างร้านอาหาร.png" class="img-fluid" alt="ห้าง">
            <div class="blue-box">สิ่งอำนวยความสะดวกและบริการ</div>
        </div>
        <div class="service1-container">
            <div class="nav-box">
                <ul class="nav nav-underline" style="font-size: 1.1rem;">
                    <li class="nav-item">
                        <a class="nav-link active" href="service2.php">สิ่งอำนวยความสะดวก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service1.php">ร้านอาหาร</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service3.php">ร้านค้า</a>
                    </li>
                </ul>
            </div>

            <hr class="full-width-hr mb-4" style="margin-top: 0;">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-0">
                    <span style="border-left: 5px solid #ffc107; padding-left: 10px;">สิ่งอำนวยความสะดวกและบริการ</span>
                </h5>
                <div class="home">
                    <a href="#"><i class="bi bi-house-door"></i></a> &gt; สิ่งอำนวยความสะดวกและบริการ
                </div>
            </div>

            <div class="category-section">
                <div class="category-label">หมวดหมู่</div>
                <div class="tabs-container">
                    <div class="tab-button active">ทั้งหมด</div>
                    <div class="tab-button">ห้องรับรอง</div>
                    <div class="tab-button">บริการลูกค้า</div>
                    <div class="tab-button">การเดินทาง</div>
                    <div class="tab-button">อื่นๆ</div>
                </div>
            </div>

            <div class="card-grid">
                <a href="servicedetail.php" class="card-wrapper">
                    <div class="card">
                        <img src="assets/images/arrival.png" alt="ห้องผู้โดยสารขาเข้า">
                        <div class="card-title">ห้องผู้โดยสารขาเข้า</div>
                    </div>
                </a>
                <a href="departure.php" class="card-wrapper">
                    <div class="card">
                        <img src="assets/images/departure.png" alt="ห้องผู้โดยสารขาออก">
                        <div class="card-title">ห้องผู้โดยสารขาออก</div>
                    </div>
                </a>
                <a href="parking.php" class="card-wrapper">
                    <div class="card">
                        <img src="assets/images/parking.png" alt="ที่จอดรถสนามบิน">
                        <div class="card-title">ที่จอดรถสนามบิน</div>
                    </div>
                </a>
                <a href="shuttle.php" class="card-wrapper">
                    <div class="card">
                        <img src="assets/images/shuttle.png" alt="รถบัสรับส่งสนามบิน">
                        <div class="card-title">รถบัสรับส่งสนามบิน</div>
                    </div>
                </a>
                <a href="taxi.php" class="card-wrapper">
                    <div class="card">
                        <img src="assets/images/taxi.png" alt="รถ TAXI">
                        <div class="card-title">รถ TAXI</div>
                    </div>
                </a>
                <a href="rentcar.php" class="card-wrapper">
                    <div class="card">
                        <img src="assets/images/rentcar.png" alt="รถเช่า">
                        <div class="card-title">รถเช่า</div>
                    </div>
                </a>
                <a href="counter.php" class="card-wrapper">
                    <div class="card">
                        <img src="assets/images/counter.png" alt="เคาน์เตอร์ประชาสัมพันธ์">
                        <div class="card-title">เคาน์เตอร์ประชาสัมพันธ์</div>
                    </div>
                </a>
                <a href="wifi.php" class="card-wrapper">
                    <div class="card">
                        <img src="assets/images/wifi.png" alt="WIFI">
                        <div class="card-title">WIFI</div>
                    </div>
                </a>
                <a href="mailbox.php" class="card-wrapper">
                    <div class="card">
                        <img src="assets/images/mailbox.png" alt="ตู้ไปรษณีย์อัตโนมัติ">
                        <div class="card-title">ตู้ไปรษณีย์อัตโนมัติ</div>
                    </div>
                </a>
                <a href="postoffice.php" class="card-wrapper">
                    <div class="card">
                        <img src="assets/images/postoffice.png" alt="ที่ทำการไปรษณีย์">
                        <div class="card-title">ที่ทำการไปรษณีย์</div>
                    </div>
                </a>
                <a href="phone.php" class="card-wrapper">
                    <div class="card">
                        <img src="assets/images/phone.png" alt="จุดบริการโทรศัพท์">
                        <div class="card-title">จุดบริการโทรศัพท์</div>
                    </div>
                </a>
                <a href="baggage.php" class="card-wrapper">
                    <div class="card">
                        <img src="assets/images/baggage.png" alt="จุดบริการรถเข็นสัมภาระ">
                        <div class="card-title">จุดบริการรถเข็นสัมภาระ</div>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>