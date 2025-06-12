<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.announcement-index body {
    font-family: sans-serif;
    line-height: 1.6;
}

.info-container {
    max-width: 1214px;
    margin: 0 auto;
    padding: 20px;
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

.announcement-index .container {
    max-width: 1440px;
    margin: 0 auto;
}

.announcement-index .container-fluid {
    display: flex;
    min-height: 100vh; 
    margin-left: 5%;
    max-width: 1440px;
}

.sidebar {
    width: 250px; 
    background-color: #f8f9fa; 
    padding: 20px;
    margin-top: 4rem;
}

.sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar li a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    text-decoration: none;
    color: #333;
    border-bottom: 1px solid #eee;
}

.sidebar li:last-child a {
    border-bottom: none;
}

.sidebar li a:hover{
    border-bottom: 3px solid #007bff;
    font-weight: bold;
}

.sidebar li a.active {
    border-bottom: 2px solid #007bff;
    font-weight: bold;
}

.content {
    flex-grow: 1;
    padding: 20px;
}

.breadcrumb {
    margin-bottom: 10px;
    font-size: 0.9em;
    margin-left: 85%;
}


.search-bar {
    display: inline-flexbox;
    margin-bottom: 20px;
    margin-left: 75%;
}

.search-bar input[type="text"] {
    flex-grow: 1;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px 0 0 4px;
}

.search-bar button {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-left: none;
    padding: 8px 10px;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
}


.news-item {
    display: flex;
    margin-bottom: 15px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    align-items: flex-start; /* จัดให้ items เริ่มต้นที่ด้านบน */
}

.news-item .image-container {
    margin-right: 10px;
    width: 100px;
    height: 100px;
    border-radius: 4px;
    flex-shrink: 0; /* ไม่ให้รูปภาพย่อขนาด */
}

.news-item img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.news-item .details {
    flex-grow: 1; /* ให้รายละเอียดขยายเพื่อใช้พื้นที่ */
}

.news-item .details h6 {
    margin-top: 0;
    margin-bottom: 5px;
    font-size: 1em;
}

.news-item .details .info {
    color: #777;
    font-size: 0.8em;
    margin-bottom: 10px;
}

.news-item .actions {
    display: flex;
    align-items: flex-end; /* จัดปุ่มให้อยู่ด้านล่าง */
    margin-left: auto; /* ชิดขวา */
}

.news-item .actions .btn {
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
            <div class="image-container">
                <img src="assets/images/Announcement.png" class="img-fluid" alt="Annoucment Image">
                <div class="blue-box">ข่าวประกาศจัดซื้อจัดจ้าง</div>
            </div>
        </section>
    <div class="announcement-index">
        <div class="container-fluid">
            <div class="sidebar">
                <ul>
                    <li><a href="#">ข่าวประชาสัมพันธ์ <span class="material-symbols-outlined">chevron_forward</span></a></li>
                    <li><a href="#" class="active">ข่าวประกาศจัดซื้อจัดจ้าง <span class="material-symbols-outlined">chevron_forward</span></a></li>
                    <li><a href="#">ข่าวรับสมัครงาน <span class="material-symbols-outlined">chevron_forward</span></a></li>
                </ul>
            </div>
            <div class="content">
                <div class="breadcrumb ">
                    <a href="#" class="material-symbols-outlined">home</a>  <span>></span> <span style="color: #333; margin-left: 1px;">ข่าวประกาศจัดซื้อจัดจ้าง</span>
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
                        <img src="./assets/images/logo-airport.png" alt="ประกาศจัดซื้อจัดจ้าง">
                    </div>
                    <div class="details">
                        <h6>ประกาศท่าอากาศยานอุดรธานี เรื่อง ประกาศผู้ชนะการเสนอราคา</h6>
                        <h6>ประกวดราคาจ้างงานจ้างเหมาบริการรักษาความปลอดภัยอาคารที่พักผู้โดยสาร อาคารที่ทำการสำนักงาน</h6>  
                        <div class="info">
                            <span class="material-symbols-outlined">calendar_today</span> 23 สิงหาคม 2564
                            <span class="material-symbols-outlined">visibility</span> 120
                            <span class="material-symbols-outlined" style="color: orange;">fiber_new</span>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="#" class="btn btn-outline-primary btn-sm">ดูเพิ่มเติม</a>
                    </div>
                </div>

                <div class="news-item">
                    <div class="image-container">
                        <img src="./assets/images/logo-airport.png" alt="ประกาศจัดซื้อจัดจ้าง">
                    </div>
                    <div class="details">
                        <h6>ประกาศท่าอากาศยานอุดรธานี เรื่อง ประกาศผู้ชนะการเสนอราคา</h6>
                        <h6>จ้างงานจ้างเหมาทำความสะอาดอาคารที่พักผู้โดยสาร รวมทั้งอาคารทำการต่าง ๆ</h6>
                        <div class="info">
                            <span class="material-symbols-outlined">calendar_today</span> 23 สิงหาคม 2564
                            <span class="material-symbols-outlined">visibility</span> 120
                            <span class="material-symbols-outlined" style="color: orange;">fiber_new</span>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="#" class="btn btn-outline-primary btn-sm">ดูเพิ่มเติม</a>
                    </div>
                </div>
                <div class="news-item">
                    <div class="image-container">
                        <img src="./assets/images/logo-airport.png" alt="ประกาศจัดซื้อจัดจ้าง">
                    </div>
                    <div class="details">
                        <h6>ประกาศท่าอากาศยานอุดรธานี เรื่อง ประกาศผู้ชนะการเสนอราคา</h6>
                        <h6>ประกวดราคาจ้างงานจ้างเหมาบริการเอกชนด้านปฏิบัติการและบำรุงรักษา</h6>
                        <div class="info">
                            <span class="material-symbols-outlined">calendar_today</span> 23 สิงหาคม 2564
                            <span class="material-symbols-outlined">visibility</span> 120
                        </div>
                    </div>
                    <div class="actions">
                        <a href="#" class="btn btn-outline-primary btn-sm">ดูเพิ่มเติม</a>
                    </div>
                </div>
                <div class="news-item">
                    <div class="image-container">
                        <img src="./assets/images/logo-airport.png" alt="ประกาศจัดซื้อจัดจ้าง">
                    </div>
                    <div class="details">
                        <h6>ประกาศท่าอากาศยานอุดรธานี เรื่อง ประกาศผู้ชนะการเสนอราคา</h6>
                        <h6>จ้างงานจ้างเหมาบริการตัดหญ้า วัชพืช และตัดต้นไม้ในพื้นที่ Air Side และพื้นที่ Land Side</h6>
                        <div class="info">
                            <span class="material-symbols-outlined">calendar_today</span> 23 สิงหาคม 2564
                            <span class="material-symbols-outlined">visibility</span> 120
                        </div>
                    </div>
                    <div class="actions">
                        <a href="#" class="btn btn-outline-primary btn-sm">ดูเพิ่มเติม</a>
                    </div>
                </div>
                <div class="news-item">
                    <div class="image-container">
                        <img src="./assets/images/logo-airport.png" alt="ประกาศจัดซื้อจัดจ้าง">
                    </div>
                    <div class="details">
                        <h6>ประกาศท่าอากาศยานอุดรธานี เรื่อง</h6>
                        <h6>ประกวดราคาจ้างงานจ้างเหมาบริการเอกชนด้านปฏิบัติการและบำรุงรักษา</h6>
                        <div class="info">
                            <span class="material-symbols-outlined">calendar_today</span> 23 สิงหาคม 2564
                            <span class="material-symbols-outlined">visibility</span> 120
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