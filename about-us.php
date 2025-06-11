<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
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
    .about-us-container {
        max-width: 1500px;
        margin: 0 auto;
        padding: 0 20px 20px 20px;
    }

    .about-us-container h1 {
        font-size: 26px;
        position: relative;
        padding-left: 20px;
    }

    .about-us-container .highlight-bar {
        position: absolute;
        width: 4px;
        height: 20px;
        background-color: #f4c900;
        left: 0;
        top: 5px;
    }
    .about-us-container .nav {
        margin-bottom: 0 !important;
        gap: 40px;
    }
    .about-us-container .nav-underline {
        margin-bottom: 0 !important;
    }
    .about-us-container .nav-underline .nav-link {
        color: #000;
        padding: 20px 0;
        font-size: 18px;
    }

    .about-us-container .nav-underline .nav-link.active {
        color: #0d6efd;
    }
    .about-us-container .about-us-header {
        display: flex;
        justify-content: space-between; 
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .about-us-container .home {
        display: flex; 
        align-items: center;
    }

    .about-us-container .home a {
        text-decoration: none;
        font-size: 16px;
        margin-right: 5px;
    }
    .blog-info {
        margin-bottom: 30px;
        margin-left: 25px;
    }
    .blog-list {
        margin-left: 25px;
    }
    .blog-list h3 {
        font-size: 20px;
    }
    .blog-list .custom-timeline {
        list-style: none;
        padding-left: 0;
        margin-left: 25px;
    }
    .blog-list .custom-timeline li {
        position: relative;
        padding-left: 38px;
        margin-bottom: 30px;
        margin-top: 30px;
    }
    .blog-list .custom-timeline li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 15px;
        height: 15px;
        background: #00589B;
        border-radius: 50%;
        display: inline-block;
    }
    .timeline-wrapper {
        position: relative;
    }

    .timeline-wrapper .line {
        position: absolute;
        width: 3px;
        height: 93%;
        background-color: rgb(226, 226, 226);
        left: 31px;
        z-index: 0;
        top: 50%;
        transform: translateY(-50%);
        display: inline-block;
    }
</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
        <div class="image-container">
          <img src="assets/images/airport-pic.jpg" class="img-fluid" alt="FAQ Image">
          <div class="blue-box">เกี่ยวกับเรา</div>
        </div>

        <div class="about-us-container">

            <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">ประวัติความเป็นมา</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ข้อมูลทั่วไป</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ผู้บริหารท่าอากาศยานอุดรธานี</a>
            </li>
            </ul>
        </div>
        <hr style="margin-top: -20px; margin-bottom: 20px;">

            <div class="about-us-container">
                <div class="about-us-header">
                    <h1><span class="highlight-bar"></span>ประวัติความเป็นมาของท่าอากาศยานอุดรธานี</h1>
                    <div class="home">
                        <a href="#"><i class="bi bi-house-door"></i></a> > ประวัติความเป็นมา
                    </div>
                </div>


                <div class="blog-info">
                    <p>เมื่อสิ้นสงครามโลกครั้งที่ 1  ประมาณปี พ.ศ. 2463 - 2466 กรมอากาศยานทหารบกในสมัยนั้นได้ทำการดัดแปลงเครื่องบินแบบ "เบรเกต์"  เป็นเครื่องบินขนส่งพัสดุไปรษณีย์   บินไปยังจังหวัดที่การคมนาคมทางบกยังไปไม่ถึง เช่น ดอนเมือง นครราชสีมา และได้มีการขยายเส้นทางนครราชสีมา ร้อยเอ็ด - อุดรธานี</p>  
                    <p>ท่าอากาศยานอุดรธานีเป็นหน่วยงานราชการ สังกัดกรมท่าอากาศยาน กระทรวงคมนาคม มีหน้าที่รับผิดชอบในการควบคุมกิจการการขนส่งทางอากาศให้เป็นไปตามกฎหมาย ข้อบังคับต่าง ๆ  ตลอดจนข้อตกลงและอนุสัญญาว่าด้วยการบินพลเรือนระหว่างประเทศ รวมทั้งให้บริการการอำนวยความสะดวก ความปลอดภัยแก่ผู้ใช้บริการท่าอากาศยาน ซึ่งท่าอากาศยานอุดรธานีเป็นสนามบินที่อยู่ในความครอบครองของกองทัพอากาศ กองบิน 23 และกรมการขนส่งทางอากาศเป็นผู้ขอใช้พื้นที่ร่วมกิจการการบิน ประกาศเป็นสนามบินเมื่อวันที่ 13 ธันวาคม 2497</p>
                </div>

                <div class="blog-list">
    <h3>ประวัติท่าอากาศยานอุดรธานี</h3>

    <!-- ✅ Wrap both line and ul in a new container -->
    <div class="timeline-wrapper">
        <span class="line"></span>
        <ul class="timeline custom-timeline">
            <li>พ.ศ.2466 สนามบินอุดรธานีเปิดบริการเป็นครั้งแรกอยู่ภายในตัวเมืองอุดรธานี</li>
            <li>พ.ศ.2475 ย้ายมาสร้างใหม่ที่ตำบลหนองขอนกว้าง (บริเวณที่ตั้งกองบิน 23 ในปัจจุบัน) โดยมีทางวิ่งเป็นทางลูกรังยาวประมาณ 500 เมตร</li>
            <li>พ.ศ.2495 สำนักงานการบินพลเรือน กรมการขนส่ง กระทรวงคมนาคม ได้สร้างอาคารสถานีวิทยุ และหอบังคับการบิน</li>
            <li>พ.ศ.2500 ได้สร้างทางวิ่งใหม่ เป็นคอนกรีตยาว 3,048 เมตร กว้าง 38 เมตร โดยความร่วมมือระหว่างไทยกับสหรัฐอเมริกา</li>
            <li>พ.ศ.2505 กรมการบินพาณิชย์ (กรมท่าอากาศยานในปัจจุบัน) ได้สร้างอาคารท่าอากาศยานอุดรธานี พร้อมหอบังคับการบิน แล้วเสร็จในเดือนกันยายน</li>
            <li>พ.ศ.2533 กรมการบินพลเรือน (กรมท่าอากาศยานในปัจจุบัน) ได้ซื้อที่ดิน 400 ไร่ ที่ตำบลนาดี ถนนอุดร-เลย สร้างอาคารที่พักผู้โดยสาร และหอบังคับการบิน</li>
            <li>พ.ศ.2543-2545 กรมการบินพลเรือน (กรมท่าอากาศยานในปัจจุบัน) ได้ขยายทางวิ่งจากความกว้าง 38 เมตร เป็น 45 เมตร และสร้างทางขับกว้าง 23 เมตร รวมทั้งลานจอด </li>
            <li>พ.ศ.2546-2548 ก่อสร้างอาคารใหม่ ปรับปรุงทางวิ่งและทางขับ พร้อมทั้งติดตั้งสะพานเทียบเครื่องบิน</li>
            <li>พ.ศ.2556-2558 ปรับปรุงอาคารที่พักผู้โดยสารหลังเดิมให้เป็นอาคารที่พักผู้โดยสารระหว่างประเทศ พร้อมติดตั้งสะพานเทียบเครื่องบิน</li>
        </ul>
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