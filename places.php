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
    background-image: url('./assets/images/place-interest.png'); 
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

.navbar-line {
    display: flex;
    justify-content: flex-start; /* จัดรายการชิดซ้าย */
    align-items: center;
    background-color: #fff; /* สีพื้นหลังขาว */
    padding: 10px 20px; /* ระยะขอบบน-ล่าง และซ้าย-ขวา */
    border-bottom: 1px solid #eee; /* เส้นขอบด้านล่างบางๆ */
}

.nav-item {
    margin-right: 30px; /* ระยะห่างระหว่างรายการ */
}

.nav-item a {
    text-decoration: none;
    color: black; /* สีข้อความเริ่มต้น */
    font-size: 16px;
    padding-bottom: 5px; /* ระยะห่างด้านล่างข้อความ */
}

.nav-item a:hover {
    color: #007bff; /* สีข้อความเมื่อเมาส์ชี้ */
    border-top: 4px solid #007bff; /* เปลี่ยนจาก border-bottom เป็น border-top */
    padding-top: 1px; /* เพิ่ม padding ด้านบนเพื่อให้มีพื้นที่สำหรับ border-top */
    padding-bottom: 2px; /* ปรับ padding ด้านล่างให้สมดุล */
}

.nav-item.active a {
    color: #007bff; /* สีข้อความของรายการที่เลือก */
}

.nav-item.active::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 3px; /* ความหนาของแถบสีน้ำเงิน */
}

.card {
    margin-top: 1rem;
    display: flex;
    gap: 50px;
}

.card-body {
    display: flex; /* ทำให้ card-body เป็น flex container */
    flex-direction: column; /* จัดเรียง item ในแนวตั้ง */
    align-items: flex-start; /* จัด item ชิดด้านซ้ายตามแนวขวาง (เริ่มต้น) */
}

.card-body .btn {
    margin-left: auto; /* ผลักปุ่มไปทางขวา */
}

.blog-item {
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
                <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #0d47a1; color: white; padding: 10px; border-radius: 5px; text-align: center;"">สถานที่น่าสนใจ</h1>
            </div>
        </section>

        <section class="nav-bar">
        <div class="container">
            <div class="navbar-line">
                <div class="nav-item active">
                    <a href="#">แหล่งท่องเที่ยว</a>
                </div>
                <div class="nav-item">
                    <a href="#">ร้านอาหาร</a>
                </div>
                <div class="nav-item">
                    <a href="#">โรงแรม</a>
                </div>
                <div class="nav-item">
                    <a href="#">โปรโมชั่น</a>
                </div>
            </div>
        </div>
        </section>

        <hr>


        <section class="blog-title">
            <div class="container">
                <div style="display: flex; align-items: center;">
                    <span style="display: inline-block; width: 5px; height: 20px; background-color: #ffc107; margin-right: 10px;"></span>
                    <span>แหล่งท่องเที่ยว</span>
                    <span style="flex-grow: 1;"></span>
                    <span>
                        <a href="#" class="material-symbols-outlined">home</a>
                    <span> > </span>
                    <span>สถานที่น่าสนใจ</span>
                    </span>
                </div>
            </div>
        </section>

        <section class="blog-item">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/images/phuphrabad-park.png" class="card-img-top" alt="อุทยานประวัติศาสตร์ภูพระบาทอุทยานประวัติศาสตร์ภูพระบาท">
                            <div class="card-body">
                                <h5 class="card-title">อุทยานประวัติศาสตร์ภูพระบาท</h5>
                                <p class="card-text">อุทยานที่มีเสาหินและภาพเขียนสีโบราณ</p>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/images/forest-temple.png" class="card-img-top" alt="วัดป่าภูก้อน">
                            <div class="card-body">
                                <h5 class="card-title">วัดป่าภูก้อน</h5>
                                <p class="card-text">วัดบนยอดเขา มีพระพุทธไสยาสน์</p>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </diV>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/images/redlotus-sea.png" class="card-img-top" alt="ทะเลบัวแดง at กุมภวาปี อุดรธานี">
                            <div class="card-body">
                                <h5 class="card-title">ทะเลบัวแดง at กุมภวาปี อุดรธานี</h5>
                                <p class="card-text">นั่งเรือชมดอกบัวสีชมพูในทะเลสาบ</p>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/images/banchaing-museum.png" class="card-img-top" alt="พิพิธภัณฑสถานแห่งชาติ บ้านเชียง">
                            <div class="card-body">
                                <h5 class="card-title">พิพิธภัณฑสถานแห่งชาติ บ้านเชียง</h5>
                                <p class="card-text">การจัดแสดงประวัติศาสตร์และโบราณวัตถุ</p>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/images/PhuFoilom-Ecotourism.png" class="card-img-top" alt="พุทธสถานภูฝอยลม">
                            <div class="card-body">
                                <h5 class="card-title">พุทธสถานภูฝอยลม</h5>
                                <p class="card-text">                    </p>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/images/nayun-park.png" class="card-img-top" alt="อุทยานแห่งชาตินายูง-น้ำโสม">
                            <div class="card-body">
                                <h5 class="card-title">อุทยานแห่งชาตินายูง-น้ำโสม</h5>
                                <p class="card-text">                    </p>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/images/nongprajak-park.png" class="card-img-top" alt="สวนสาธารณะ หนองประจักษ์">
                            <div class="card-body">
                                <h5 class="card-title">สวนสาธารณะ หนองประจักษ์</h5>
                                <p class="card-text">                    </p>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/images/sirisuttho-temple.png" class="card-img-top" alt="วัดศิริสุทโธคําชะโนด(เจ้าปู่ศรีสุทโธ)">
                            <div class="card-body">
                                <h5 class="card-title">วัดศิริสุทโธคําชะโนด(เจ้าปู่ศรีสุทโธ)</h5>
                                <p class="card-text">                    </p>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    </div>
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