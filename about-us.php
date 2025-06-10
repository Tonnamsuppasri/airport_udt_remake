<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.hero {
    position: relative;
    height: 300px;
    background-image: url('./assets/images/about-us.jpg'); 
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;  
    justify-content: center;  
}

.container {
    max-width: 1440px;
    margin: 0 auto;
}

.nav-underline{
    display: flex;
    align-items: center;
    padding: 10px 20px;
    margin: 1rem;
}

nav-blog {
    display: flex;
    margin-bottom: 30px;
    font-size: 10px;
    color: #555;
}

nav-blog a {
    display: flex;
    text-decoration: none;
    color: #1a1a1a;
    margin-right: 10px;
    font-size: medium;
}

nav-blog span {
    color: #555;
    font-size: medium;
}

.hero-con .h1 {
    font-size: 24px;
    font-weight: bold;
    border-left: 5px solid #f4b400;
    padding-left: 10px;
    margin-bottom: 20px;
    color: #1a1a1a;
}

p {
    font-size: 16px;
    margin-bottom: 15px;
    line-height: 1.8;
}

.blog-info p {
    color: #1a1a1a;
    font-size: 16px;
    margin-left: 2rem;
}

h3 {
    padding-left: 10px;
    color: #1a1a1a;
    margin-bottom: 2rem;
    margin-top: 2rem;
}

ul.timeline {
    list-style: none;
    padding-left: 1;
    margin-bottom: 3rem;
    margin-top: 3rem;
}

ul.timeline li {
    font-size: 14px;
    color: #1a1a1a;
    position: relative;
    margin-top: 2.25rem;
    margin-bottom: 20px;
    padding-left: 30px;
}

ul.timeline li::before {
    content: '●';
    position: absolute;
    left: 0;
    color: #007bff;
}
</style>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-con"></div>
                <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #0d47a1; color: white; padding: 10px; border-radius: 5px; text-align: center;"">เกี่ยวกับเรา</h1>
            </div>
        </section>

        <section class="nav-bar">
        <div class="container">
        <div class="nav-container">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">ประวัติความเป็นมา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ข้อมูลทั่วไป</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ผู้บริหารท่าอากาศยานอุดรธาน</a>
                </li>
            </ul>

        </div>
        </div>
        </section>

        <section class="blog">
            <div class="container">
            <nav-blog style="justify-content: flex-end;">
                <a href="#" class="material-symbols-outlined">home</>  <span>></span> 
                <span>ประวัติความเป็นมา</span>
            </nav-blog>

            <h1>ประวัติความเป็นมาของท่าอากาศยานอุดรธานี</h1>


            <div class="blog-info">
                <p>เมื่อสิ้นสงครามโลกครั้งที่ 1  ประมาณปี พ.ศ. 2463 - 2466 กรมอากาศยานทหารบกในสมัยนั้นได้ทำการดัดแปลงเครื่องบินแบบ "เบรเกต์"</p>  
                <p>เป็นเครื่องบินขนส่งพัสดุไปรษณีย์   บินไปยังจังหวัดที่การคมนาคมทางบกยังไปไม่ถึง เช่น ดอนเมือง นครราชสีมา และได้มีการขยายเส้นทางนครราชสีมา ร้อยเอ็ด - อุดรธานี</p>
            </div>

            <div class="blog-list">
                <h3>ประวัติท่าอากาศยานอุดรธานี</h3>
                <ul class="timeline">
                    <li>พ.ศ.2466 สนามบินอุดรธานีเปิดบริการเป็นครั้งแรกอยู่ภายในเขตเมืองอุดรธานี</li>
                    <li>พ.ศ.2475 มีงานสร้างสนามบินที่ตำบลหนองบัว อำเภอเมือง (บริเวณที่ตั้งปัจจุบัน)</li>
                    <li>พ.ศ.2495 กองทัพอากาศรับผิดชอบสนามบิน และมีบริการการบินพาณิชย์</li>
                    <li>พ.ศ.2500 ได้สร้างทางวิ่งคอนกรีตขนาด 3,048 เมตร</li>
                    <li>พ.ศ.2503 กรมช่างโยธาทหารอากาศก่อสร้างทางขับและลานจอด</li>
                    <li>พ.ศ.2533 การบินไทยสร้างอาคารที่พักผู้โดยสารหลังใหม่</li>
                    <li>พ.ศ.2538 สร้างรันเวย์ใหม่ ขนาดกว้าง 45 เมตร ยาว 3,000 เมตร</li>
                    <li>พ.ศ.2546-2548 ก่อสร้างลานจอดใหม่</li>
                    <li>พ.ศ.2556-2558 ปรับปรุงอาคารที่พักผู้โดยสาร พร้อมติดตั้งสะพานเทียบเครื่องบิน</li>
                </ul>
            </div>
            </div>
        </section>    

        </div>
    </main>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>