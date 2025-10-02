<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
    <style>
    .image-container .img-fluid {
        width: 100%;
        height: 250px;
        object-fit: cover;
        object-position: center;
        filter: brightness(50%);
    }

    .image-container .blue-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 82, 170, 0.8);
        color: white;
        padding: 15px 40px;
        font-size: 30px;
        font-weight: 500;
        text-align: center;
        white-space: nowrap;
        border-radius: 4px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .image-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        max-height: 250px;
    }

    .sitemap-container {
        max-width: 1500px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .sitemap-container h1 {
        font-size: 26px;
        font-weight: 600;
        position: relative;
        padding-left: 20px;
        margin-bottom: 40px;
    }

    .sitemap-container .highlight-bar {
        position: absolute;
        width: 5px;
        height: 22px;
        background-color: #f4c900;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        border-radius: 2px;
    }

    .sitemap-container .header {
        display: flex;
        justify-content: space-between; 
        align-items: center;
        margin-bottom: 2rem;
    }

    .sitemap-container .home {
        display: flex; 
        align-items: center;
        margin-left: auto;
        font-size: 15px;
        color: #666;
    }

    .sitemap-container .home a {
        font-size: 16px;
        margin-right: 5px;
        color: #0052aa;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .sitemap-container .home a:hover {
        color: #003d7a;
    }

    .sitemap-container .row {
        margin-bottom: 32px;
    }

    .sitemap-container .col {
        margin-bottom: 35px;
    }

    .sitemap-container .col a.sitemap-link {
        font-size: 18px;
        font-weight: 600;
        color: #0052aa;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 3px;
        transition: all 0.3s ease;
    }

    .sitemap-container .col a.sitemap-link:hover {
        color: #003d7a;
        text-decoration: underline;
    }

    .sitemap-container .col ul {
        list-style-type: none;
        padding-left: 0;
        margin-top: 10px;
    }

    .sitemap-container .col ul li {
        padding: 6px 0;
        padding-left: 18px;
        position: relative;
        color: #333;
        font-size: 15px;
        transition: color 0.3s ease;
    }

    .sitemap-container .col ul li:before {
        content: "•";
        position: absolute;
        left: 0;
        color: #f4c900;
        font-weight: bold;
        font-size: 18px;
    }

    .sitemap-container .col ul li:hover {
        color: #0052aa;
    }
    
    .sitemap-container .dropdown {
        background: none;
        border: none;
        color: #333;
        padding: 8px 0;
        font-size: 15px;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .sitemap-container .dropdown:hover {
        color: #0052aa;
    }
    
    .sitemap-container .dropdown i {
        margin-right: 6px;
        font-size: 12px;
    }

    .sitemap-container .dropdown-menu {
        border: 1px solid #e0e0e0;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        border-radius: 4px;
    }

    .sitemap-container .dropdown-item {
        padding: 8px 16px;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }

    .sitemap-container .dropdown-item:hover {
        background-color: #f5f5f5;
    }

    .sitemap-container .dropdown-item i {
        color: #0052aa;
        margin-right: 8px;
    }

    /* Responsive breakpoints */
    @media (max-width: 992px) {
        .sitemap-container {
            padding: 30px 15px;
        }

        .sitemap-container h1 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .sitemap-container .col {
            margin-bottom: 20px;
        }
    }

    @media (max-width: 768px) {
        .image-container .img-fluid {
            height: 200px;
        }

        .blue-box {
            font-size: 24px !important;
            padding: 12px 30px !important;
        }

        .sitemap-container {
            padding: 25px 15px;
        }

        .sitemap-container h1 {
            font-size: 22px;
        }

        .sitemap-container .header {
            margin-bottom: 1.5rem;
        }

        .sitemap-container .col a.sitemap-link {
            font-size: 17px;
        }

        .sitemap-container .col ul li {
            font-size: 14px;
        }

        .sitemap-container .col {
            margin-bottom: 25px;
        }

        .sitemap-container .row {
            margin-bottom: 20px;
        }
    }

    @media (max-width: 576px) {
        .image-container .img-fluid {
            height: 150px;
        }

        .blue-box {
            font-size: 20px !important;
            padding: 10px 20px !important;
            white-space: normal;
        }

        .sitemap-container {
            padding: 20px 15px;
        }

        .sitemap-container h1 {
            font-size: 20px;
            margin-bottom: 25px;
        }

        .sitemap-container .home {
            font-size: 13px;
        }

        .sitemap-container .home a {
            font-size: 14px;
        }

        .sitemap-container .col a.sitemap-link {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .sitemap-container .col ul li {
            font-size: 13px;
            padding: 5px 0;
            padding-left: 18px;
        }

        .sitemap-container .dropdown {
            font-size: 14px;
            padding: 6px 0;
        }

        .sitemap-container .col {
            margin-bottom: 20px;
        }

        .sitemap-container .row {
            margin-bottom: 15px;
        }
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
                <div class="row">
                    <a href="#" class="sitemap-link">หน้าหลัก</a>
                </div>
                <div class="row">
                    <a href="#" class="sitemap-link">เที่ยวบิน</a>
                </div>
                <div class="row">
                    <a href="#" class="sitemap-link">คำถามที่พบบ่อย</a>
                </div>
                <div class="row">
                    <a href="#" class="sitemap-link">ติดต่อเรา</a>
                </div>
                <div class="row">
                    <a href="#" class="sitemap-link">เกี่ยวกับเรา</a>
                    <div class="col">
                    <ul>
                        <li>ข่าวประชาสัมพันธ์</li>
                        <li>จัดซื้อจัดจ้าง</li>
                        <li>รับสมัครบุคลากร</li>
                        <li>รับสมัครบุคลากร</li>
                    </ul>
                </div>
                </div>
                

            </div>
            
            <div class="col">
                
                <a href="#" class="sitemap-link">ข่าวประชาสัมพันธ์</a>
                <div class="col">
                    <ul>
                        <li>ข่าวประชาสัมพันธ์</li>
                        <li>จัดซื้อจัดจ้าง</li>
                        <li>รับสมัครบุคลากร</li>
                    </ul>
                </div>
                    <br>
                    <br>
                    <br>
                <div class="row">
                    <a href="#" class="sitemap-link">เว็บไซต์ท่าอากาศยาน</a>
                    <div class="dropdown" style="background:none;">
                        <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-chevron-down"></i>ภาคเหนือ
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-chevron-down"></i>ภาคใต้
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-chevron-down"></i>ภาคตะวันออกเฉียงเหนือ
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <a href="#" class="sitemap-link">คำแนะนำผู้โดยสาร</a>
                <div class="col">
                    <ul>
                        <li>การเดินทางไปสนามบิน</li>
                        <li>คู่มือผู้โดยสาร</li>
                        <li>แผนที่สนามบิน</li>
                        <li>มาตรการช่วยเหลือ Covid-19</li>
                        <li>คู่มือประชาชน</li>
                    </ul>
                    <br>
                    <a href="#" class="sitemap-link">สถานที่น่าสนใจ</a>
                    <div class="col">
                    <ul>
                        <li>ข่าวประชาสัมพันธ์</li>
                        <li>จัดซื้อจัดจ้าง</li>
                        <li>รับสมัครบุคลากร</li>
                    </ul>
                </div>
                </div>
            </div>
            
            <div class="col">
                <a href="#" class="sitemap-link">สิ่งอำนวยความสะดวก</a>
                <div class="col">
                    <ul>
                        <li>ห้องผู้โดยสารขาเข้า</li>
                        <li>ห้องผู้โดยสารขาออก</li>
                        <li>จุดบริการรถเข็นสัมภาระ</li>
                        <li>ที่จอดรดสนามบิน</li>
                        <li>รถบัสรับส่งสนามบิน</li>
                        <li>รถ TAXI</li>
                        <li>รถเช่า</li>
                        <li>เคาน์เตอร์ประชาสัมพันธ์</li>
                        <li>WIFI</li>
                        <li>ตู้ไปรษณีย์อัตโนมัติ</li>
                        <li>ที่ทำการไปรษณีย์</li>
                        <li>จุดบริการโทรศัพท์</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <a href="#" class="sitemap-link">นโยบายเว็บไซต์</a>
            </div>
            <div class="col-8">
                <a href="#" class="sitemap-link">นโยบายการคุ้มครองข้อมูลส่วนบุคคล</a>
            </div>
        </div>
    </div>
    </main>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>