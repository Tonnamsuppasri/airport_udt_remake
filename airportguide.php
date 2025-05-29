<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<style>
    .card {
        width: 100%;
        height: 100%;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .card-wrapper {
        flex: 0 0 calc(25% - 1.5rem);
    }

    @media (max-width: 992px) {
        .card-wrapper {
            flex: 0 0 calc(50% - 1.5rem);
        }
    }

    @media (max-width: 576px) {
        .card-wrapper {
            flex: 0 0 100%;
        }
    }

    .nav-link {
        color: #333;
        padding: 0.5rem 1.5rem;
        transition: all 0.2s ease-in-out;
    }

    .nav-link:hover {
        color: #0d6efd;
    }

    .nav-link.active {
        color: #0d6efd;
        border-bottom: 2px solid #0d6efd;
        font-weight: 500;
    }

    .nav .nav-link.active {
        color: #007bff !important;
        /* ใช้สีน้ำเงินที่ต้องการ */
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
</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <div class="image-container">
        <img src="assets/images/คำแนะนำผดส.jpg" class="img-fluid" alt="คำแนะนำผู้โดยสาร">
        <div class="blue-box">คำแนะนำผู้โดยสาร</div>
    </div>
    <main class="container my-4">
        <!-- Heading -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 style="margin: 20px 0;">
                <span style="border-left: 5px solid #ffc107; padding-left: 10px;">คำแนะนำผู้โดยสาร</span>
                <span class="badge bg-light text-dark" style="font-weight: normal;">
                    <span style="color: blue;">8</span> คำแนะนำ
                </span>
            </h5>
            <div class="home">
                <a href="#"><i class="bi bi-house-door"></i></a> > คำแนะนำผู้โดยสาร
            </div>
        </div>


        <!-- Cards Grid -->
        <div class="card-grid">
            <!-- Card 1 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/1.png" class="card-img-top" alt="อุทยานประวัติศาสตร์ภูพระบาท
">
                    <div class="card-body">
                        <p class="card-text">ข้อควรรู้ก่อนขึ้นเครื่อง "การนำของเหลว เจล สเปรย์ (Aerosols) ขึ้นไปกับอากาศยาน
                        </p>
                        <div class="d-flex justify-content-end">
                            <a href="airportguidedetail.php" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/2.png" class="card-img-top" alt="วัดป่าภูก้อน">
                    <div class="card-body">
                        <p class="card-text">คำแนะนำสำหรับผู้โดยสารที่ใช้บริการสายการบินของไทย</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/3.png" class="card-img-top" alt="ทะเลบัวแดง at กุมภวา อุดรธานี">
                    <div class="card-body">
                        <p class="card-text">บริการ Free WiFi ของท่าอากาศยาน</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/4.png" class="card-img-top" alt="ร้านค้าปลีก">
                    <div class="card-body">
                        <p class="card-text">ผู้โดยสารเดินทางโดยเครื่องบิน และต้อง
                            การนำอาวุธปืนไปด้วยจะต้องทำอย่างไร?</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/5.png" class="card-img-top" alt="พุทธสถานภูฝอยลม">
                    <div class="card-body">
                        <p class="card-text">คำแนะนำสำหรับผู้ที่ต้องการใช้ห้องรับรองพิเศษ</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/6.png" class="card-img-top" alt="อุทยานแห่งชาตินายูง-น้ำโสม">
                    <div class="card-body">
                        <p class="card-text">การพกพาแบตเตอรี่สำรองขึ้นอากาศยาน</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/7.png" class="card-img-top" alt="สวนสาธารณะ หนองประจักษ์">
                    <div class="card-body">
                        <p class="card-text">น้ำพริก แกง</p>
                        <p class="card-text"> และอาหารที่มีลักษณะเป็นของเหลว</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/8.png" class="card-img-top" alt="วัดศิริสุทโธคำชะโนด">
                    <div class="card-body">
                        <p class="card-text">ปล่อยโคมลอยต้องทำยังไง</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
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