<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}

.hero {
    position: relative;
    height: 300px;
    background-image: url('./assets/images/flight-info-header.jpg'); 
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;  
    justify-content: center;  
    }

.flightinfo-index .hero-con {
    width: 500%;
}

.flightinfo-index .flight-title {
    display: flex;
    align-items: center; /* จัดให้ข้อความและแถบอยู่แนวเดียวกันตรงกลาง */
    font-size: 23px;
    margin-top: 1rem;
}

.flightinfo-index .yellow-bar {
    width: 5px; /* กำหนดความกว้างของแถบสีเหลือง */
    height: 20px; /* กำหนดความสูงของแถบสีเหลือง */
    background-color: #FFD700; /* สีเหลือง (Goldenrod) คุณสามารถปรับสีได้ตามต้องการ */
    margin-right: 10px; /* เว้นระยะห่างระหว่างแถบสีเหลืองกับข้อความ */
    margin-left: 2rem;
}

.flightinfo-index .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.flightinfo-index .breadcrumb {
    display: flex;
    justify-content: flex-end; /* จัดเรียงเนื้อหาไปทางขวา */
    align-items: center; /* จัดให้กึ่งกลางในแนวตั้ง */
    padding: 10px; /* เพิ่มพื้นที่ขอบด้านในเล็กน้อย */
}

.flightinfo-index .breadcrumb a {
    font-size: 18px;
    text-decoration: none;
    color: dodgerblue; /* สีของลิงก์ */
    margin-left: 5px; /* เว้นระยะห่างจากไอคอน > */
}

.flightinfo-index .breadcrumb span {
    font-size: 18px;
    margin-left: 5px; /* เว้นระยะห่างระหว่างลิงก์และไอคอน > */
    color: #6c757d; /* สีของเครื่องหมาย > */
}

.flightinfo-index .blog-item {
    display: flex; /* ใช้ Flexbox สำหรับการจัดวาง */
    justify-content: center; /* จัดวางตามแนวนอนตรงกลาง */
    align-items: center; /* จัดวางตามแนวตั้งตรงกลาง */
    min-height: 100vh; /* ทำให้ body ครอบคลุมความสูงของ viewport อย่างน้อย */
    margin: 0; /* ลบ margin เริ่มต้นของ body */
}
.flightinfo-index .img {
    max-width: 90%; /* ปรับขนาดรูปภาพให้ไม่เกิน 90% ของ viewport width */
    max-height: 90vh; /* ปรับขนาดรูปภาพให้ไม่เกิน 90% ของ viewport height */
    display: block; /* ป้องกัน margin collapsing ที่อาจเกิดขึ้น */
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
                <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #0d47a1; color: white; padding: 10px; border-radius: 5px; text-align: center;"">เที่ยวบิน</h1>
            </div>
        </section>
            <div class="flightinfo-index">
            <div class="container">
                <div class="breadcrumb">
                    <a href="#" class="material-symbols-outlined">home</>  <span>></span> 
                    <span>เที่ยวบิน</span>
                </div>
                <div class="flight-title">
                    <div class="yellow-bar"></div>
                    <h3>เที่ยวบิน</h3>
                </div>
            </div>

        <div class="container">
            <div class="blog-item">
                <img style="position: absolute; top: 105%; left: 50%; transform: translate(-50%, -50%);" src="./assets/images/flight-info.jpeg" alt="ข้อมูลเที่ยวบิน">
            </div>
        </div>
        </div>
    </main>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>