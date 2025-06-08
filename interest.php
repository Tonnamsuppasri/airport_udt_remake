<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<style>
    .interest-container {
        max-width: 1214px;
        margin: 0 auto;
        margin-bottom: 50px;
    }
    .interest-container .card {
        border-radius: 0px;
        width: 100%;
        height: 100%;
    }

    .interest-container .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .interest-container .card-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .interest-container .card-wrapper {
        flex: 0 0 calc(25% - 1.5rem);
    }

    @media (max-width: 992px) {
        .interest-container .card-wrapper {
            flex: 0 0 calc(50% - 1.5rem);
        }
    }

    @media (max-width: 576px) {
        .interest-container .card-wrapper {
            flex: 0 0 100%;
        }
    }

    .interest-container .nav-link {
        color: #333;
        padding: 0.5rem 1.5rem;
        transition: all 0.2s ease-in-out;
    }

    .interest-container .nav-link:hover {
        color: #0d6efd;
    }

    .interest-container .nav .nav-link.active {
        color: #007bff !important;
        /* ใช้สีน้ำเงินที่ต้องการ */
        border-top: 2px solid #007bff;
        font-weight: 500;
        border-bottom: none;
    }

    .interest-container .home {
        display: flex;
        align-items: center;
    }

    .interest-container .home a {
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

    .interest-container .full-width-hr {
        width: 99.5vw;
        margin-left: calc(-50vw + 50%);
        border: none;
        border-top: 1px solid #333;
    }

</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
        <div class="image-container">
                <img src="assets/images/สถานที่น่าสนใจ.jpg" class="img-fluid" alt="สถานที่น่าสนใจ">
                <div class="blue-box">สถานที่น่าสนใจ</div>
            </div>
        <div class="interest-container">
            <div class="nav-box">
                <ul class="nav nav-underline" style="font-size: 1.1rem;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">แหล่งท่องเที่ยว</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ร้านอาหาร</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">โรงแรม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">โปรโมชั่น</a>
                    </li>
                </ul>
            </div>
        <hr class="full-width-hr mb-4">
        <!-- Heading -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="mb-0">
                <span style="border-left: 5px solid #ffc107; padding-left: 10px;">แหล่งท่องเที่ยว</span>
            </h5>
            <div class="home">
                <a href="#"><i class="bi bi-house-door"></i></a> > สถานที่น่าสนใจ
            </div>
        </div>


        <!-- Cards Grid -->
        <div class="card-grid">
            <!-- Card 1 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/ภูพระบาท.png" class="card-img-top" alt="อุทยานประวัติศาสตร์ภูพระบาท
">
                    <div class="card-body">
                        <p class="card-text">อุทยานประวัติศาสตร์ภูพระบาท
                        </p>
                        <h7 class="card-subtitle mb-2 text-body-secondary">อุทยานที่มีเสาหินและภาเขียนสีโบราณ
                        </h7>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/วัดป่า.png" class="card-img-top" alt="วัดป่าภูก้อน">
                    <div class="card-body">
                        <p class="card-text">วัดป่าภูก้อน</p>
                        <h7 class="card-subtitle mb-2 text-body-secondary">วัดบนยอดเขา มีพระพุทธไสยาสน์
                        </h7>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/ทะเลบัว.png" class="card-img-top" alt="ทะเลบัวแดง at กุมภวา อุดรธานี">
                    <div class="card-body">
                        <p class="card-text">ทะเลบัวแดง at กุมภวา อุดรธานี</p>
                        <h7 class="card-subtitle mb-2 text-body-secondary">นั่งเรือชมดอกบัวสีชมพูในทะเลสาบ</h7>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/บ้านเขียง.png" class="card-img-top" alt="ร้านค้าปลีก">
                    <div class="card-body">
                        <p class="card-text">พิพิธภัณฑสถานแห่งชาติ บ้านเชียง</p>
                        <h7 class="card-subtitle mb-2 text-body-secondary">การจัดการแสดงประวัติศาสตร์และโบราณวัตถุ</h7>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/ฝอยลม.png" class="card-img-top" alt="พุทธสถานภูฝอยลม">
                    <div class="card-body">
                        <p class="card-text">พุทธสถานภูฝอยลม</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/น้ำโสม.png" class="card-img-top" alt="อุทยานแห่งชาตินายูง-น้ำโสม">
                    <div class="card-body">
                        <p class="card-text">อุทยานแห่งชาตินายูง-น้ำโสม</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/หนองประจักษ์.png" class="card-img-top" alt="สวนสาธารณะ หนองประจักษ์">
                    <div class="card-body">
                        <p class="card-text">สวนสาธารณะ หนองประจักษ์</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="card-wrapper">
                <div class="card">
                    <img src="assets/images/วัดศิริ.png" class="card-img-top" alt="วัดศิริสุทโธคำชะโนด">
                    <div class="card-body">
                        <p class="card-text">วัดศิริสุทโธคำชะโนด</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                        </div>
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