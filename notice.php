<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
    
    body {
            font-family: sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
    .hero {
    position: relative;
    height: 300px;
    background-image: url('./assets/images/shophero.jpg'); 
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;  
    justify-content: center;  
        }


        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header a {
            display: flex;
            align-items: center;
            text-decoration: none;
        }
        
        .breadcrumb {
            font-size: 0.9em;
            color: #6c757d;
        }
        .breadcrumb a {
            color: #007bff;
            text-decoration: none;
        }
        .breadcrumb span {
            margin: 0 5px;
        }
        .content-box {
            padding: 20px;
            border-left: 5px solid #ffc107;
            margin-bottom: 30px;
        }
        .content-title {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .file-info {
            display: flex;
            align-items: center;
            border: 1px solid #ced4da;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .file-icon {
            font-size: 2em;
            margin-right: 15px;
            color: #007bff;
        }
        .file-details {
            flex-grow: 1;
        }
        .file-name {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .file-size {
            font-size: 0.9em;
            color: #6c757d;
        }
        .download-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .download-button:hover {
            background-color: #0056b3;
        }
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid #ced4da;
            color: #6c757d;
            font-size: 0.9em;
        }
        .footer a {
            color: black;
            text-decoration: none;
        }
        .left-navigation {
            text-align: start;
        }

        /* .left-navigation span {
            display: flex;
            align-items: center;
        } */

        .center-navigation {
            text-align: center;
        }
        .center-navigation span {
            margin: 0 10px;
        }

        .right-navigation span {
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
            <div class="container">
                <div class="hero-con"></div>
                <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #0d47a1; color: white; padding: 10px; border-radius: 5px; text-align: center;"">ข่าวประกาศจัดซื้อจัดจ้าง</h1>
            </div>
        </section>
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


    </main>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>