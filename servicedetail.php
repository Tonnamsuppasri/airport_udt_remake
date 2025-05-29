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

    .nav-link.active,
    .nav .nav-link.active {
        color: #007bff !important;
        border-bottom: 2px solid #007bff;
        font-weight: 500;
    }

    .image-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        max-height: 250px;
    }

    .img-fluid {
        width: 100%;
        max-height: 250px;
        object-fit: cover;
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

    body {
        font-family: sans-serif;
        background-color: #f9f9f9;
        margin: 20px 0;
    }

    .content {
        width: 90vw;
        max-width: 1214px;
        padding: 20px 15px;
        margin: 0 auto;
        box-sizing: border-box;
    }

    h5 span {
        border-left: 5px solid #ffc107;
        padding-left: 10px;
    }

    .description {
        margin-bottom: 20px;
    }

    .custom-img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 5px;
    }

    .row-container {
        display: flex;
        gap: 30px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .vertical-column {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 450px;
        max-width: 100%;
        box-sizing: border-box;
    }

    .back-container {
        width: 100%;
        box-sizing: border-box;
    }

    .back-row {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 30px;
        box-sizing: border-box;
    }

    .back-left .back-link {
        text-decoration: none;
        color: #0d6efd;
        font-size: 16px;
        display: flex;
        align-items: center;
    }

    .back-left .bi {
        font-size: 18px;
        margin-right: 4px;
    }

    .back-right {
        display: flex;
        align-items: center;
        font-size: 14px;
        color: #333;
        justify-content: flex-end;
        gap: 6px;
    }

    .back-right a {
        color: #0d6efd;
        text-decoration: none;
        font-size: 16px;
    }

    .breadcrumb-separator {
        margin: 0 6px;
        color: #888;
    }

    .full-width-hr {
        width: 100%;
        margin: 0 auto 1rem auto;
        border: none;
        border-top: 1px solid #333;
    }

    .footer-nav {
        width: 100%;
        max-width: 100%;
        margin: 0 auto;
        padding: 0 10px;
        border-top: 1px solid #ccc;
        font-size: 16px;
        color: #666;
        position: relative;
        background-color: #fff;
        box-sizing: border-box;

        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 90px;
        text-align: center;
        overflow-x: hidden;
    }

    .footer-nav .dots-grid {
        display: inline-grid;
        grid-template-columns: repeat(3, 6px);
        gap: 4px;
        justify-content: center;
        margin-bottom: 6px;
    }

    .footer-nav .dots-grid a {
        width: 6px;
        height: 6px;
        background: gray;
        display: inline-block;
        border-radius: 50%;
        transition: background 0.2s;
    }

    .footer-nav .title {
        font-weight: bold;
        color: black;
        font-size: 18px;
        margin-bottom: 6px;
    }

    .footer-nav button {
        background: none;
        border: none;
        color: #666;
        cursor: pointer;
        display: flex;
        align-items: center;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 14px;
    }

    .footer-nav button .arrow {
        font-size: 28px;
        color: black;
    }

    .footer-nav button .texts {
        display: flex;
        flex-direction: column;
        color: black;
    }

    .footer-nav button.prev {
        left: 15px;
        flex-direction: row;
    }

    .footer-nav button.prev .texts {
        align-items: flex-start;
        margin-left: 10px;
    }

    .footer-nav button.next {
        right: 15px;
        flex-direction: row-reverse;
    }

    .footer-nav button.next .texts {
        align-items: flex-end;
        margin-right: 10px;
    }

    .footer-nav button .texts span:last-child {
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 1000px) {
        .row-container {
            flex-direction: column;
            gap: 20px;
            align-items: center;
            padding: 0 10px;
        }

        .vertical-column {
            width: 100%;
            max-width: 600px;
        }
    }

    @media (max-width: 600px) {

        .footer-nav button.prev,
        .footer-nav button.next {
            font-size: 12px;
            top: 5px;
        }

        .footer-nav button .arrow {
            font-size: 22px;
        }

        .footer-nav .title {
            font-size: 16px;
        }

        .back-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
            padding: 0 15px;
        }

        .back-right {
            justify-content: flex-start;
            max-width: 100%;
            font-size: 14px;
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
    <br>
    <!-- ✅ BACK NAVIGATION -->
    <div class="back-container">
        <div class="back-row">
            <div class="back-left">
                <a href="javascript:history.back()" class="back-link">
                    <i class="bi bi-chevron-left"></i> ย้อนกลับ
                </a>
            </div>
            <div class="back-right">
                <a href="#"><i class="bi bi-house-door"></i></a>
                <span class="breadcrumb-separator">&gt;</span>
                <span>สิ่งอำนวยความสะดวกและบริการ</span>
                <span class="breadcrumb-separator">&gt;</span>
                <span>รายละเอียด</span>
            </div>
        </div>
    </div>
    <br>
    <hr class="full-width-hr mb-4">

    <div class="content">
        <h5 class="mb-0">
            <span>ห้องผู้โดยสารขาเข้า</span>
        </h5>
        <br>
        <div class="description">
            <p>ห้องผู้โดยสารขาเข้า จะอยู่ฝั่งประตูอาคารที่ 3 ซึ่งเป็นจุดนัดพบของผู้โดยสารและญาติที่มารอรับ ซึ่งจะมีเพียงทางออกเดียว</p>
            <p>ซึ่่งผู้โดยสารที่ฝากสัมภาระมากับสายการบินจะต้องรอรับกระเป๋าที่สายพาน ภายในห้องผู้โดยสายขาเข้า โดยสามารถรอรับกระเป๋าตามเที่ยวบินของผู้โดยสารขาเข้า โดย</p>
            <p>สามารถรอรับกระเป๋าตามเที่ยวบินของผู้โดยสารจากจอที่ระบุไว้ บนสายพาน</p>
        </div>

        <div class="row-container">
            <div class="vertical-column">
                <img src="assets/images/image1.png" alt="จุดรับกระเป๋า 1" class="custom-img">
                <img src="assets/images/image2.png" alt="จุดนั่งรอ 1" class="custom-img">
                <img src="assets/images/image3.png" alt="จุดนั่งรอ 2" class="custom-img">
            </div>
            <div class="vertical-column">
                <img src="assets/images/image4.png" alt="จุดรับกระเป๋า 2" class="custom-img">
                <img src="assets/images/image5.png" alt="สายพานรับกระเป๋า" class="custom-img">
            </div>
        </div>
    </div>

    <!-- FOOTER-NAV -->
    <div class="footer-nav" role="navigation" aria-label="Footer navigation">
        <div class="dots-grid" aria-label="เข้าสู่หน้าสิ่งอำนวยความสะดวกและบริการทั้งหมด">
            <a href="service1.php"></a>
            <a href="service1.php"></a>
            <a href="service1.php"></a>
            <a href="service1.php"></a>
            <a href="service1.php"></a>
            <a href="service1.php"></a>
            <a href="service1.php"></a>
            <a href="service1.php"></a>
            <a href="service1.php"></a>
        </div>
        <a class="title" href="service1.php">สิ่งอำนวยความสะดวกและบริการ</a>

        <button class="prev" onclick="history.back()" aria-label="ก่อนหน้า">
            <span class="arrow">&#8592;</span>
            <div class="texts">
                <span>สิ่งอำนวยความสะดวกและบริการ</span>
                <span>ก่อนหน้า</span>
            </div>
        </button>

        <button class="next" aria-label="ถัดไป">
            <span class="arrow">&#8594;</span>
            <div class="texts">
                <span>สิ่งอำนวยความสะดวกและบริการ</span>
                <span>ถัดไป</span>
            </div>
        </button>
    </div>

    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>