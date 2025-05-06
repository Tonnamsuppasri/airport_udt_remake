<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
    @media (max-width: 768px) {
        .blue-box {
            font-size: 1rem;
            padding: 8px 15px;
        }
    }


    @media (max-width: 576px) {
        .blue-box {
            font-size: 0.9rem;
            padding: 5px 10px;
        }
    }

    .img-fluid {
        width: 100%;
        object-fit: contain;
        object-position: center top;
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

    .sitemap-container {
        max-width: 1214px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        font-size: 26px;
        position: relative;
        padding-left: 20px;
    }

    .highlight-bar {
        position: absolute;
        width: 4px;
        height: 20px;
        background-color: #f4c900;
        left: 0;
        top: 5px;
    }

    .header {
        display: flex;
        justify-content: space-between; 
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .home {
        display: flex; 
        align-items: center;
        margin-left: auto;
    }

    .home a {
        text-decoration: none;
        font-size: 16px;
        margin-right: 5px;
    }

    ul {
        list-style-type: none;
    }

    li {

    }
    
</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
    <div class="image-container">
          <img src="assets/images/airport-pic.jpg" class="img-fluid" alt="FAQ Image">
          <div class="blue-box">แผนผังเว็ปไซต์</div>
    </div>

    <div class="sitemap-container">
        <div class="header">
            <div class="home">
                <a href="#"><i class="bi bi-house-door"></i></a> > แผนผังเว็ปไซต์
            </div>
        </div>
        <h1><span class="highlight-bar"></span>แผนผังเว็ปไซต์</h1>
        <br>
        
    <div class="sitemap-container">
        <div class="row">
            <div class="col">
                <a href="#" class="sitemap-link">หน้าหลัก</a>
            </div>
            <div class="col">
                <ul>
                    <li><a href="#" class="sitemap-link">ข่าวประชาสัมพันธ์</a></li>
                </ul>
            </div>
            <div class="col">
                <a href="#" class="sitemap-link">หน้าหลัก</a>
            </div>
            <div class="col">
                <a href="#" class="sitemap-link">หน้าหลัก</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="#" class="sitemap-link">หน้าหลัก</a>
            </div>
            <div class="col">
                <ul>
                    <li>ข่าวประชาสัมพันธ์</li>
                    <li>จัดซื้อจัดจ้าง</li>
                    <li>รับสมัครบุคลากร</li>
                </ul>
            </div>
            <div class="col">
                Column
            </div>
            <div class="col">
                Column
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="#" class="sitemap-link">หน้าหลัก</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="#" class="sitemap-link">หน้าหลัก</a>
            </div>
        </div>
    </div>
    </main>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>