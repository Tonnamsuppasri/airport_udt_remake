<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
    
 * {
    margin: 0;
    padding: 0;
}

body {
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

.notice-index .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.notice-index .header a {
    display: flex;
    align-items: center;
    text-decoration: none;
}
        
.notice-index .breadcrumb {
    font-size: 0.9em;
    color: #6c757d;
}

.notice-index .breadcrumb a {
    color: #007bff;
    text-decoration: none;
}

.notice-index .breadcrumb span {
    margin: 0 5px;
}

.notice-index .content-box {
    padding: 20px;
    border-left: 5px solid #ffc107;
    margin-bottom: 30px;
}

.notice-index .content-title {
    font-size: 1.5em;
    font-weight: bold;
    margin-bottom: 10px;
}

.notice-index .file-info {
    display: flex;
    align-items: center;
    border: 1px solid #ced4da;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 20px;
}

.notice-index .file-icon {
    font-size: 2em;
    margin-right: 15px;
    color: #007bff;
}

.notice-index .file-details {
    flex-grow: 1;
}

.notice-index .file-name {
    font-weight: bold;
    margin-bottom: 5px;
}

.notice-index .file-size {
    font-size: 0.9em;
    color: #6c757d;
}

.notice-index .download-button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}

.notice-index .download-button:hover {
    background-color: #0056b3;
}

.notice-index .footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 20px;
    border-top: 1px solid #ced4da;
    color: #6c757d;
    font-size: 0.9em;
}

.notice-index .footer a {
    color: black;
    text-decoration: none;
}

.notice-index .left-navigation {
    text-align: start;
}

.notice-index .center-navigation {
    text-align: center;
}

.notice-index .center-navigation span {
    margin: 0 10px;
}

.notice-index .right-navigation span {
    size: 1em;
}


</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
        <section class="hero">
            <div class="image-container">
                <img src="assets/images/policy-pic.jpg" class="img-fluid" alt="Policy Image">
            <div class="blue-box">ข่าวประกาศจัดซื้อจัดจ้าง</div>
            </div>
        </section>
        <div class="notice-index">
            <div class="container">
                <div class="header">
                        <a href="#"><span class="material-symbols-outlined" style="margin-right: 5px;">chevron_backward</span>ย้อนกลับ</a>
                    <div class="breadcrumb">
                        <a href="#" class="material-symbols-outlined">home</a>  <span>></span> <a href="#">ข่าวประกาศจัดซื้อจัดจ้าง</a> <span>></span> รายละเอียด
                    </div>
                </div>

            <div class="content-box">
                <h2 class="content-title">ข่าวประกาศจัดซื้อจัดจ้าง</h2>
                <p>ประกาศเช่าอาคารอุบัติเหตุ เรื่อง ประกาศผู้ชนะการเสนอราคา</p>
                <p>จ้างงานจ้างเหมาทำความสะอาดอาคารที่พักผู้โดยสาร รวมถึงอาคารทำการต่างๆ และเก็บขนสิ่งปฏิกูล/มูลฝอยผู้โดยสาร ที่ท่าอากาศยานอุบลราชธานี ประจำปีงบประมาณ 2565 ระยะเวลาจ้าง 6 เดือน ตั้งแต่วันที่ 1 ตุลาคม 2564 ถึงวันที่ 31 มีนาคม 2565 โดยวิธีคัดเลือก</p>
            </div>

            <div class="file-info">
                <i class="fas fa-file-pdf file-icon"></i>
                <div class="file-details">
                    <div class="file-name">ประกาศผู้ชนะจ้างเหมาทำความสะอาด 6 เดือน ปี 2565.pdf</div>
                    <div class="file-size">ไฟล์แนบ</div>
                </div>
                <button type="button" class="btn btn-outline-primary">ดาวน์โหลด</button>
            </div>

            <div class="footer">
                <div class="left-navigation">
                    <div style="display: flex; align-items: center;">
                    <span class="material-symbols-outlined">arrow_back</span>
                        <a href="#">ข่าวประกาศจัดซื้อจัดจ้าง ก่อนหน้า</a>
                    </div>
                </div>

                <div class="center-navigation">
                    <div style="text-align: center;">
                        <span class="material-symbols-outlined" style="display: block; margin-bottom: 5px; font-size: 2em;">apps</span>
                        <a href="#">ข่าวประกาศจัดซื้อจัดจ้างทั้งหมด</a>
                    </div>
                </div>

                <div class="right-navigation">
                    <div style="display: flex; align-item: end;">
                        <a href="#">ข่าวประกาศจัดซื้อจัดจ้าง ถัดไป</a>
                        <span class="material-symbols-outlined">arrow_forward</span>
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