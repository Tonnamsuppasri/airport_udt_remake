<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<style>
    .card {
        width: 18rem;
        min-height: 100%;
        /* ให้ความสูงสม่ำเสมอหากมีหลายบรรทัด */
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
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

    .full-width-hr {
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
    <div class="image-container">
        <img src="assets/images/ห้างร้านอาหาร.png" class="img-fluid" alt="ห้างร้านอาหาร">
        <div class="blue-box">ร้านค้า</div>
    </div>
    <main class="container my-4">

        <ul class="nav nav-underline mb-4" style="font-size: 1.1rem;">
            <li class="nav-item">
                <a class="nav-link" href="service1.php">สิ่งอำนวยความสะดวก</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="service2.php">ร้านอาหาร</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="service3.php">ร้านค้า</a>
            </li>
        </ul>
        <hr class="full-width-hr mb-4">
        <!-- Heading -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="mb-0">
                <span style="border-left: 5px solid #ffc107; padding-left: 10px;">ร้านค้า</span>
            </h5>
            <div class="home">
                <a href="#"><i class="bi bi-house-door"></i></a> > ร้านค้า
            </div>
        </div>


        <!-- Cards Grid -->
        <div class="d-flex flex-wrap gap-4">
            <!-- Card 1 -->
            <div class="card" style="width: 18rem;">
                <img src="assets/images/Auntie.png" class="card-img-top" alt="Auntie Anne's">
                <div class="card-body d-flex flex-column justify-content-between">
                    <p class="card-text">Auntie Anne's</p>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card" style="width: 18rem;">
                <img src="assets/images/ร้านค้าปลีก.png" class="card-img-top" alt="ร้านค้าปลีก">
                <div class="card-body d-flex flex-column justify-content-between">
                    <p class="card-text">ร้านค้าปลีก</p>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card" style="width: 18rem;">
                <img src="assets/images/ร้านของฝาก.png" class="card-img-top" alt="ร้านของฝาก">
                <div class="card-body d-flex flex-column justify-content-between">
                    <p class="card-text">ร้านของฝาก</p>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
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