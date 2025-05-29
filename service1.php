<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<style>
    .nav-link {
        color: #333;
        padding: 0.5rem 1.5rem;
        transition: all 0.2s ease-in-out;
    }

    .nav-link:hover {
        color: #0d6efd;
    }

    .nav-link.active {
        color: #007bff;
        border-bottom: 2px solid #007bff;
        font-weight: 500;
    }

    .nav .nav-link.active {
        color: #007bff !important;
        border-bottom: 2px solid #007bff;
        font-weight: 500;
    }

    .home {
        display: flex;
        align-items: center;
    }

    .home a {
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

    .full-width-hr {
        width: 99.5vw;
        margin-left: calc(-50vw + 50%);
        border: none;
        border-top: 1px solid #333;
    }

    .body {
        font-family: sans-serif;
        background-color: #f9f9f9;
        padding: 30px;
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

    .grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 20px;
    }

    .card {
        background: white;
        border-radius: 10px;
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
        /* ป้องกันขีดเส้นใต้ลิงก์ */
        color: inherit;
        /* ให้สีเหมือนตัวหนังสือปกติ */
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

    @media (max-width: 1200px) {
        .grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 992px) {
        .grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>

    <div class="image-container">
        <img src="assets/images/ห้างร้านอาหาร.png" class="img-fluid" alt="ห้างร้านอาหาร">
        <div class="blue-box">สิ่งอำนวยความสะดวก</div>
    </div>

    <main class="container my-4">
        <ul class="nav nav-underline mb-4" style="font-size: 1.1rem;">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="service1.php">สิ่งอำนวยความสะดวก</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="service2.php">ร้านอาหาร</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="service3.php">ร้านค้า</a>
            </li>
        </ul>

        <hr class="full-width-hr mb-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="mb-0">
                <span style="border-left: 5px solid #ffc107; padding-left: 10px;">สิ่งอำนวยความสะดวกและบริการ</span>
            </h5>
            <div class="home">
                <a href="#"><i class="bi bi-house-door"></i></a> > สิ่งอำนวยความสะดวกและบริการ
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

        <div class="grid">
            <a href="servicedetail.php" class="card">
                <img src="assets/images/arrival.png" alt="ห้องผู้โดยสารขาเข้า">
                <div class="card-title">ห้องผู้โดยสารขาเข้า</div>
            </a>
            <a href="departure.php" class="card">
                <img src="assets/images/departure.png" alt="ห้องผู้โดยสารขาออก">
                <div class="card-title">ห้องผู้โดยสารขาออก</div>
            </a>
            <a href="parking.php" class="card">
                <img src="assets/images/parking.png" alt="ที่จอดรถสนามบิน">
                <div class="card-title">ที่จอดรถสนามบิน</div>
            </a>
            <a href="shuttle.php" class="card">
                <img src="assets/images/shuttle.png" alt="รถรับส่งสนามบิน">
                <div class="card-title">รถรับส่งสนามบิน</div>
            </a>
            <a href="taxi.php" class="card">
                <img src="assets/images/taxi.png" alt="รถ TAXI">
                <div class="card-title">รถ TAXI</div>
            </a>
            <a href="rentcar.php" class="card">
                <img src="assets/images/rentcar.png" alt="รถเช่า">
                <div class="card-title">รถเช่า</div>
            </a>
            <a href="counter.php" class="card">
                <img src="assets/images/counter.png" alt="เคาน์เตอร์ประชาสัมพันธ์">
                <div class="card-title">เคาน์เตอร์ประชาสัมพันธ์</div>
            </a>
            <a href="wifi.php" class="card">
                <img src="assets/images/wifi.png" alt="WIFI">
                <div class="card-title">WIFI</div>
            </a>
            <a href="mailbox.php" class="card">
                <img src="assets/images/mailbox.png" alt="ตู้ไปรษณีย์อัตโนมัติ">
                <div class="card-title">ตู้ไปรษณีย์อัตโนมัติ</div>
            </a>
            <a href="postoffice.php" class="card">
                <img src="assets/images/postoffice.png" alt="ที่ทำการไปรษณีย์">
                <div class="card-title">ที่ทำการไปรษณีย์</div>
            </a>
            <a href="phone.php" class="card">
                <img src="assets/images/phone.png" alt="จุดบริการโทรศัพท์">
                <div class="card-title">จุดบริการโทรศัพท์</div>
            </a>
            <a href="baggage.php" class="card">
                <img src="assets/images/baggage.png" alt="จุดบริการรถเข็นสัมภาระ">
                <div class="card-title">จุดบริการรถเข็นสัมภาระ</div>
            </a>
        </div>
    </main>

    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>