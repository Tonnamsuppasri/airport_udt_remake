<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: sans-serif;
    line-height: 1.6;
}

.hero {
    position: relative;
    height: 300px;
    background-image: url('./assets/images/Announcement.png'); 
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;  
    justify-content: center;  
}

.Press-index .container {
    max-width: 1440px;
    margin: 0 auto;
}

.Press-index .container-fluid {
    display: flex;
    min-height: 100vh; 
    margin-left: 5%;
    max-width: 1440px;
}

.Press-index .sidebar {
    width: 250px; 
    background-color: #f8f9fa; 
    padding: 20px;
    margin-top: 4rem;
}

.Press-index .sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.Press-index .sidebar li a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    text-decoration: none;
    color: #333;
    border-bottom: 1px solid #eee;
}

.Press-index .sidebar li:last-child a {
    border-bottom: none;
}

.Press-index .sidebar li a:hover{
    border-bottom: 3px solid #007bff;
    font-weight: bold;
}

.Press-index .sidebar li a.active {
    border-bottom: 2px solid #007bff;
    font-weight: bold;
}

.Press-index .content {
    flex-grow: 1;
    padding: 20px;
}

.Press-index .breadcrumb {
    margin-bottom: 10px;
    font-size: 0.9em;
    margin-left: 85%;
}


.Press-index .search-bar {
    display: inline-flexbox;
    margin-bottom: 20px;
    margin-left: 75%;
}

.Press-index .search-bar input[type="text"] {
    flex-grow: 1;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px 0 0 4px;
}

.Press-index .search-bar button {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-left: none;
    padding: 8px 10px;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
}


.Press-index .news-item {
    display: flex;
    margin-bottom: 15px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    align-items: flex-start; /* จัดให้ items เริ่มต้นที่ด้านบน */
}

.Press-index .news-item .image-container {
    margin-right: 10px;
    width: 100px;
    height: 100px;
    border-radius: 4px;
    flex-shrink: 0; 
}

.Press-index .news-item img {
    width: 180%;
    height: auto;
    object-fit: cover;
}

.Press-index .news-item .details {
    flex-grow: 1; /* ให้รายละเอียดขยายเพื่อใช้พื้นที่ */
}

.Press-index .news-item .details h6 {
    margin-top: 0;
    margin-bottom: 5px;
    font-size: 1em;
    margin-left: 90px;
}

.Press-index .news-item .details .info {
    color: #777;
    font-size: 0.8em;
    margin-bottom: 10px;
}

.Press-index .news-item .actions {
    display: flex;
    align-items: flex-end; /* จัดปุ่มให้อยู่ด้านล่าง */
    margin-left: auto; 
}

.Press-index .news-item .actions .btn {
    font-size: 0.8em;
    margin-top: 85% ; 
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

        <div class="Press-index">
        <div class="container-fluid">
            <div class="sidebar">
                <ul>
                    <li><a href="#" class="active">ข่าวประชาสัมพันธ์ <span class="material-symbols-outlined">chevron_forward</span></a></li>
                    <li><a href="#" >ข่าวประกาศจัดซื้อจัดจ้าง <span class="material-symbols-outlined">chevron_forward</span></a></li>
                    <li><a href="#">ข่าวรับสมัครงาน <span class="material-symbols-outlined">chevron_forward</span></a></li>
                </ul>
            </div>
            <div class="content">
                <div class="breadcrumb ">
                    <a href="#" class="material-symbols-outlined">home</a>  <span>></span> <span style="color: #333; margin-left: 1px;">ข่าวประชาสัมพันธ์</span>
                </div>

                <div class="flex justify-content-between align-items-center mb-3">
                    <div>
                        <span class="font-weight-bold">ทั้งหมด</span> <span class="num-post" style="color: #0d47a1">5</span>  <span class="text-muted"> โพสต์</span>
                    </div>
                    <div class="search-bar">
                        <input type="text" placeholder="ค้นหา">
                        <button type="button"><span class="material-symbols-outlined">search</span></button>
                    </div>
                </div>
                

            <div class="container">
                <div class="news-item">
                    <div class="image-container">
                        <img src="./assets/images/thaiflight-info.png" alt="thaiflight-info">
                    </div>
                    <div class="details">
                        <h6>กรมท่าอากาศยานอำนวยความสะดวกให้ผู้โดยสารยุค 4.0 ผ่านแอพพลิเคชั่น Thai Flight Info</h6>
                        <div class="info">
                            <span class="material-symbols-outlined" style="margin-left: 85px;">calendar_today</span> 23 สิงหาคม 2564
                            <span class="material-symbols-outlined" style="margin-left: 2rem;">visibility</span> 120
                            <span class="material-symbols-outlined" style="color: orange;">fiber_new</span>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="#" class="btn btn-outline-primary btn-sm">ดูเพิ่มเติม</a>
                    </div>
                </div>

                <div class="news-item">
                    <div class="image-container">
                        <img src="./assets/images/online-survey.png" alt="การสำรวจความพึงพอใจของประชาชน">
                    </div>
                    <div class="details">
                        <h6>การสำรวจความพึงพอใจของประชาชนต่อการให้บริการตามคู่มือสำหรับประชาชน</h6>
                        <div class="info">
                            <span class="material-symbols-outlined" style="margin-left: 85px;">calendar_today</span> 23 สิงหาคม 2564
                            <span class="material-symbols-outlined" style="margin-left: 2rem;">visibility</span> 120
                            <span class="material-symbols-outlined" style="color: orange;">fiber_new</span>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="#" class="btn btn-outline-primary btn-sm">ดูเพิ่มเติม</a>
                    </div>
                </div>
                <div class="news-item">
                    <div class="image-container">
                        <img src="./assets/images/e-broading-pass.png" alt="การแสดงเอกสาร E-boarding pass ของผู้โดยสารตอนขึ้นเครื่อง">
                    </div>
                    <div class="details">
                        <h6>การแสดงเอกสาร E-boarding pass ของผู้โดยสารตอนขึ้นเครื่อง</h6>
                        <div class="info">
                            <span class="material-symbols-outlined" style="margin-left: 85px;">calendar_today</span> 23 สิงหาคม 2564
                            <span class="material-symbols-outlined" style="margin-left: 2rem;">visibility</span> 120
                        </div>
                    </div>
                    <div class="actions">
                        <a href="#" class="btn btn-outline-primary btn-sm">ดูเพิ่มเติม</a>
                    </div>
                </div>
                <div class="news-item">
                    <div class="image-container">
                        <img src="./assets/images/thai-plane.png" alt="เครื่องบิน">
                    </div>
                    <div class="details">
                        <h6>เปิดเที่ยวบินปฐมฤกษ์ ไทยเวียตเจ็ท จากสุวรรณภูมิ อุดรธานี ประตูสู่แดนอีสาน</h6>
                        <div class="info">
                            <span class="material-symbols-outlined" style="margin-left: 85px;">calendar_today</span> 23 สิงหาคม 2564
                            <span class="material-symbols-outlined" style="margin-left: 2rem;">visibility</span> 120
                        </div>
                    </div>
                    <div class="actions">
                        <a href="#" class="btn btn-outline-primary btn-sm">ดูเพิ่มเติม</a>
                    </div>
                </div>
                <div class="news-item">
                    <div class="image-container">
                        <img src="./assets/images/older-promo.png" alt="สิทธิผู้โดยสารผู้สูงอายุ ">
                    </div>
                    <div class="details">
                        <h6>สิทธิผู้โดยสารผู้สูงอายุ </h6>
                        <div class="info">
                            <span class="material-symbols-outlined" style="margin-left: 85px;">calendar_today</span> 23 สิงหาคม 2564
                            <span class="material-symbols-outlined" style="margin-left: 2rem;">visibility</span> 120
                        </div>
                    </div>
                    <div class="actions">
                        <a href="#" class="btn btn-outline-primary btn-sm">ดูเพิ่มเติม</a>
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