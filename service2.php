<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
    .service2-container {
        max-width: 1214px;
        margin: 0 auto;
        margin-bottom: 50px;
    }

    .service2-container .card {
        border-radius: 0px;
        width: 100%;
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service2-container .card:hover {
        transform: translateY(-10px);
        box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
    }

    .service2-container .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .service2-container .card-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .service2-container .card-wrapper {
        flex: 0 0 calc(25% - 1.5rem);
    }

    @media (max-width: 992px) {
        .service2-container .card-wrapper {
            flex: 0 0 calc(50% - 1.5rem);
        }
    }

    @media (max-width: 576px) {
        .service2-container .card-wrapper {
            flex: 0 0 100%;
        }
    }

    .service2-container .nav-link {
        border-top: 2px solid transparent;
        color: #333;
        padding: 0.5rem 1.5rem;
        transition: all 0.2s ease-in-out;
        border-bottom: none;
    }

    .service2-container .nav-link:hover {
        border-bottom: 2px solid #007bff;
        color: #0d6efd;
    }

    .service2-container .nav .nav-link.active {
        color: #007bff !important;
        border-bottom: 2px solid #007bff;
        font-weight: 500;
    }

    .service2-container .home {
        display: flex;
        align-items: center;
    }

    .service2-container .home a {
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

    .service2-container .full-width-hr {
        width: 99.5vw;
        margin-left: calc(-50vw + 50%);
        border: none;
        border-top: 1px solid #333;
    }

    .service2-container .card-img-top {
        border-radius: 0px;
        width: 100%;
        height: 200px;
        /* กำหนดขนาดคงที่ */
        object-fit: cover;
        /* ครอบรูปให้อยู่ในกรอบ */
    }

    .service2-container .card .btn {
        border-radius: 0px;
        transition: all 0.3s ease;
    }

    .service2-container .card .btn:hover {
        background-color: #0d6efd;
        color: #fff;
        transform: scale(1.05);
    }

    /* fade-in animation */
    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .fade-in.show {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
        <div class="image-container">
            <img src="assets/images/ห้างร้านอาหาร.png" class="img-fluid" alt="ห้าง">
            <div class="blue-box">ร้านอาหาร</div>
        </div>
        <div class="service2-container">
            <div class="nav-box">
                <ul class="nav nav-underline" style="font-size: 1.1rem;">
                    <li class="nav-item">
                        <a class="nav-link" href="service1.php">สิ่งอำนวยความสะดวก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="service2.php">ร้านอาหาร</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service3.php">ร้านค้า</a>
                    </li>
                </ul>
            </div>

            <hr class="full-width-hr mb-4" style="margin-top: 0;">

            <!-- Heading -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-0">
                    <span style="border-left: 5px solid #ffc107; padding-left: 10px;">ร้านอาหาร</span>
                </h5>
                <div class="home">
                    <a href="#"><i class="bi bi-house-door"></i></a> &gt; ร้านอาหาร
                </div>
            </div>

            <div class="card-grid">
                <!-- Card 1 -->
                <div class="card-wrapper fade-in">
                    <div class="card">
                        <img src="assets/images/ร้านอาหารภายใน.png" class="card-img-top" alt="ร้านอาหารถายใน">
                        <div class="card-body">
                            <p class="card-text">ร้านอาหารภายในอาคารผู้โดยสาร</p>
                            <div class="d-flex justify-content-end">
                                <a href="#" class="btn btn-outline-primary w-auto">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card-wrapper fade-in">
                    <div class="card">
                        <img src="assets/images/coffee shop.png" class="card-img-top" alt="coffee">
                        <div class="card-body">
                            <p class="card-text">Coffee Shop</p>
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

    <!-- ===== JavaScript ===== -->
    <script>
        // Fade-in effect เมื่อเลื่อน scroll
        const fadeElements = document.querySelectorAll('.fade-in');

        const appearOnScroll = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    appearOnScroll.unobserve(entry.target); // ทำงานครั้งเดียว
                }
            });
        }, {
            threshold: 0.2
        });

        fadeElements.forEach(el => {
            appearOnScroll.observe(el);
        });
    </script>
</body>

</html>