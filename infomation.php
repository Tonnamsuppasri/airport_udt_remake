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

body {
    font-family: sans-serif;
    line-height: 1.6;
}

.hero {
    position: relative;
    height: 300px;
    background-image: url('./assets/images/infomation.png'); 
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;  
    justify-content: center;  
}

.infomation-index .container {
    max-width: 1440px;
    margin: 0 auto;
}

.infomation-index .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.infomation-index .header a ::before {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #6c757d;
}

.infomation-index .header a ::after {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: blueviolet;
}
        
.infomation-index .breadcrumb {
    font-size: 0.9em;
    color: #6c757d;
}
.infomation-index .breadcrumb a {
    color: #6c757d;
    color: #6c757d;
    text-decoration: none;
}

.infomation-index .breadcrumb span {
    margin: 0 5px;
    color: #6c757d;
}

.infomation-index .content-box {
    justify-content: start;
    padding: 20px 0;
    margin-bottom: 30px;
}

.infomation-index .content-title {
    padding: 20px;
    font-size: 24px;
    border-left: 5px solid gold;
    margin: 0;
    margin-left: 18%;
    margin-bottom: 2rem;
}

p {
    margin-left: 3rem;
}

.infomation-index .content-detail {
    margin-bottom: 2rem;
    margin-left: 18%;
}

.infomation-index .content-detail-01 {
    margin-bottom: 2rem;
    margin-left: 18%;
}

.infomation-index .content-detail-02 {
    margin-bottom: 2rem;
    margin-left: 18%;
}

.infomation-index .content-detail-03 {
    margin-left: 18%;
}

.infomation-index .contact-info {
    margin-left: 18%;
}

.infomation-index .hr {
    border: 2px solid #ccc;
    margin-top: 3rem;
    margin-bottom: 2rem;
}

.infomation-index .blog-item {
    margin-left: 18%;
    margin-right: 2rem;
}

.infomation-index .blog-image {
    margin-top: 3rem;
    margin-left: 18%;
    margin-bottom: 3rem;
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
                <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #0d47a1; color: white; padding: 10px; border-radius: 5px; text-align: center;"">ข่าวประชาสัมพันธ์</h1>
            </div>
        </section>

        <div class="infomation-index">
        <div class="container">
            <div class="header">
                    <a class="header-link active" aria-current="page" href="#"><span class="material-symbols-outlined" style="margin-right: 5px;">chevron_backward</span>ย้อนกลับ</a>
                <div class="breadcrumb">
                    <a href="#" class="material-symbols-outlined">home</a>  <span>></span> <a href="#">ข่าวประชาสัมพันธ์</a> <span>></span> รายละเอียด
                </div>
                
            </div>

        <hr>

        <div class="container">
            <div class="content-box">
                <h2 class="content-title">กรมท่าอากาศยานอำนวยความสะดวกให้ผู้โดยสารยุค 4.0 ผ่านแอพพลิเคชั่น Thai Flight Info</h2>
                <div class="content-detail">
                    <p>ข่าวท่าอากาศยาน ฉบับที่ 28/2562</p>
                    <p>กรมท่าอากาศยานอำนวยความสะดวกให้ผู้โดยสารยุค 4.0 ผ่านแอพพลิเคชั่น Thai Flight Info</p>
                </div>

                <div class="content-detail-01">
                    <p>นางอัมพวัน วรรณโก อธิบดีกรมท่าอากาศยาน กล่าวว่า ปัจจุบันพฤติกรรมการเดินทางของนักท่องเที่ยวและประชาชน</p>
                    <p>มีการเปลี่ยนแปลงโดยใช้เทคโนโลยีในการอำนวยความสะดวกมากขึ้น</p>
                    <p>กรมท่าอากาศยานจึงพัฒนาเทคโนโลยีเพื่อตอบสนองความต้องการของประชาชนในด้านต่างๆ รวมถึงการพัฒนาแอพพลิเคชั่น Thai Flight Info</p>
                    <p>ผู้โดยสารที่ใช้บริการสายการบิน นักท่องเที่ยวและประชาชนทั่วไปให้ทราบข้อมูลด้านการบินได้สะดวกและรวดเร็วมากยิ่งขึ้น</p>
                </div>

                <div class="content-detail-02">
                    <p>แอพพลิเคชั่น Thai Flight Info มีบริการข้อมูลท่าอากาศยานที่อยู่ในความดูแลของกรมท่าอากาศยาน ทั้ง 28 แห่ง</p>
                    <p>โดยภายในแต่ละท่าอากาศยานจะประกอบไปด้วย ข้อมูลเบื้องต้นของท่าอากาศยาน สถานที่ตั้งการเดินทาง สิ่งอำนวยความสะดวกภายในท่าอากาศยาน</p>
                    <p>และช่องทางการรับข้อเสนอแนะ นอกจากนี้ที่สำคัญคือ มีการแสดงผลข้อมูลเที่ยวบินของแต่ละวัน ทั้งแบบตารางการบิน</p>
                    <p>การมาถึงและออกจากท่าอากาศยานของเที่ยวบินแบบ Real Time ด้วย ซึ่งส่วนนี้จะเป็นข้อมูลเดียวกันกับที่แสดงผลบนหน้าจอ ณ แต่ละท่าอากาศยาน</p>
                </div>

                <div class="content-detail-03">
                    <p>สำหรับผู้ที่สนใจสามารถดาวน์โหลดแอพพลิเคชั่นดังกล่าวได้ เพียงแค่ค้นหาคำว่า ThaiFlightInfo ทั้งระบบปฏิบัติการ IOS และ Android </p>
                    <p>หรือดาวน์โหลดผ่านเว็บไซต์ของกรมท่าอากาศยาน www.airports.go.th</p>
                    <p>--------------------------</p>
                </div>

                <div class="contact-info">
                    <p>กลุ่มสื่อสารองค์กร สำนักงานเลขานุการกรม</p>
                    <p>กรมท่าอากาศยาน</p>
                    <p>21 กุมภาพันธ์ 2562</p>
                    <p>pr@airports.go.th</p>
                </div>
                <hr>
            </div>

            <div class="blog-item">
                <span class="material-symbols-outlined" style="margin-right: 2rem; font-size: 50px;">photo_library</span> <span style="font-size: large;">ภาพประกอบ</span>
                <br>
            <div class="blog-image">
                <img src="./assets/images/thai-flight-info.png" alt="">
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