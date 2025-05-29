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
        <img src="assets/images/คำแนะนำผดส.jpg" class="img-fluid" alt="คำแนะนำผู้โดยสาร">
        <div class="blue-box">คำแนะนำผู้โดยสาร</div>
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
                <span>คำแนะนำผู้โดยสาร</span>
                <span class="breadcrumb-separator">&gt;</span>
                <span>รายละเอียด</span>
            </div>
        </div>
    </div>
    <br>
    <hr class="full-width-hr mb-4">

    <div class="content">
        <h5 class="mb-0">
            <span>ข้อควรรู้ก่อนขึ้นเครื่อง: การนำของเหลว เจล สเปรย์ (Aerosols) ขึ้นไปกับอากาศยาน</span>
        </h5>
        <br>

        <!-- ภาพก่อนเนื้อหา -->
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="assets/images/liquid-hand-spray.png" alt="ภาพแสดงการใช้เจลล้างมือ" class="custom-img"
                style="max-width: 1000px; width: 100%; height: auto; border-radius: 10px;">
        </div>
        <br>
        <!-- เนื้อหา -->
        <div class="description">
            <p>
                ตั้งแต่วันที่ 1 มิถุนายน 2550 กรมการขนส่งทางอากาศได้มีประกาศ ข้อห้ามเกี่ยวกับการนำของเหลวฯ เจล สเปรย์หรือวัสดุ
                และสารอื่นๆ ซึ่งมีลักษณะคล้ายคลึงกันที่เป็นสัมภาระติดตัวผู้โดยสาร และเจ้าหน้าที่ประจำท่าอากาศยาน
                ที่จะเดินทางออกจากสนามบินในประเทศไทย ดังนี้
            </p>

            <ol>
                <li>
                    ของเหลวฯ ทุกชนิดที่ไม่ใช่วัตถุอันตราย ซึ่งผู้โดยสารจะนำติดตัวขึ้นไปในอากาศยาน ต้องใส่ไว้ในภาชนะซึ่งมีขนาดความจุไม่เกิน 100 มิลลิลิตร (100 cc) โดยจะพิจารณาขนาดของภาชนะเป็นสำคัญ หากภาชนะสามารถบรรจุเกิน 100 มิลลิลิตร จะนำติดตัวขึ้นไปในอากาศยานไม่ได้ ถึงแม้ว่าจะใส่ของเหลวไว้ไม่ถึง 100 มิลลิลิตร ก็ตาม
                </li>
                <br>
                <li>
                    ภาชนะที่ใส่ของเหลวฯ ตามข้อ 1 ต้องใส่รวมไว้ในถุงพลาสติกใสซึ่งเปิดปิดผนึกได้ (Transparent re-sealable plastic bag) และปิดปากถุงให้สนิท โดยถุงพลาสติกใสนี้มีขนาดความจุไม่เกิน 1 ลิตร
                </li>
                <br>
                <li>
                    ผู้โดยสารสามารถนำถุงพลาสติกใสตามข้อ 2 ติดตัวขึ้นไปในอากาศยานได้คนละ 1 ใบ เท่านั้น
                </li>
                <br>
                <li>
                    ให้นำถุงพลาสติกใสดังกล่าว แสดงให้เจ้าหน้าที่รักษาความปลอดภัยตรวจสอบ ณ จุดที่ตรวจค้น (Screening Point)
                </li>
                <br>
                <li>
                    ประเภทของเหลวฯ ที่เข้าข่ายต้องปฏิบัติตามข้อ 1-4 ได้แก่ น้ำ เครื่องดื่ม ครีม โลชั่น ออยล์ น้ำหอม สเปรย์ (aerosols)
                    เจลใส่ผม เจลอาบน้ำ โฟมชนิดต่างๆ ยาสีฟัน น้ำยากำจัดกลิ่นตัว และของอื่นๆ ซึ่งมีลักษณะคล้ายคลึงกัน
                </li>
                <br>
                <li>
                    ของเหลวฯ ซึ่งได้รับการยกเว้นไม่ต้องปฏิบัติตามข้อ 1-4 ได้แก่ นม และอาหารสำหรับเด็ก ยาในปริมาณที่เหมาะสม
                </li>
                <br>
                <li>
                    ของเหลวฯ ซึ่งซื้อจากร้านค้าปลอดภาษี (Duty Free shop) ในสนามบินหรือซื้อในอากาศยาน จะต้องบรรจุไว้ในถุงพลาสติกที่ปิดผนึกปากถุง โดยไม่มีร่องรอยผิดปกติให้สงสัยว่ามีการใส่สิ่งของอย่างอื่นลงไปในถุง และมีหลักฐานแสดงชัดเจนว่า ซื้อจากร้านค้าปลอดภาษีที่สนามบิน หรือในอากาศยานในวันเดินทาง
                </li>
                <br>
            </ol>
        </div>

        <!-- ภาพประกอบหลังเนื้อหา -->
        <div style="text-align: center; margin: 30px 0;">
            <img src="assets/images/liquid-bag-example.png" alt="ภาพแสดงตัวอย่างการจัดของเหลว" class="custom-img"
                style="max-width: 1000px; width: 100%; height: auto; border: 1px solid #ccc; border-radius: 10px;">
        </div>
    </div>

    <!-- FOOTER-NAV -->
    <div class="footer-nav" role="navigation" aria-label="Footer navigation">
        <div class="dots-grid" aria-label="เข้าสู่หน้าคำแนะนำผู้โดยสารทั้งหมด">
            <a href="airportguide.php"></a>
            <a href="airportguide.php"></a>
            <a href="airportguide.php"></a>
            <a href="airportguide.php"></a>
            <a href="airportguide.php"></a>
            <a href="airportguide.php"></a>
            <a href="airportguide.php"></a>
            <a href="airportguide.php"></a>
            <a href="airportguide.php"></a>
        </div>
        <a class="title" href="airportguide.php">คำแนะนำผู้โดยสารทั้งหมด</a>

        <button class="prev" onclick="history.back()" aria-label="ก่อนหน้า">
            <span class="arrow">&#8592;</span>
            <div class="texts">
                <span>คำแนะนำ</span>
                <span>ก่อนหน้า</span>
            </div>
        </button>

        <button class="next" aria-label="ถัดไป">
            <span class="arrow">&#8594;</span>
            <div class="texts">
                <span>คำแนะนำ</span>
                <span>ถัดไป</span>
            </div>
        </button>
    </div>


    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>