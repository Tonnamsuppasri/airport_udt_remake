<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
     

    .map-container {
        display: flex;
        justify-content: center; 
        align-items: center; 
        position: relative;
        max-width: 100%; 
        padding: 20px 0;      
    }

    .map-container iframe {
        width: 496px;
        height: 357px;
        border: 0;
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

    .contact-container {
        max-width: 1214px;
        margin: 0 auto;
        padding: 20px;
        margin-bottom: 50px;
    }

    h1 {
        font-size: 26px;
        position: relative;
        padding-left: 20px;
    }

    .highlight-bar {
        position: absolute;
        width: 4px;
        height: 20px;
        background-color: #f4c900;
        left: 0;
        top: 5px;
    }

    .header {
        display: flex;
        justify-content: space-between; 
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .home {
        display: flex; 
        align-items: center;
        margin-left: auto;
    }

    .home a {
        text-decoration: none;
        font-size: 16px;
        margin-right: 5px;
    }
    
    .contact-form {
        max-width: 640px;
        margin: auto;
        background: #F8F8F8;
        padding-top: 30px;
    }

    form {
        max-width: 640px;
        margin: auto;
        padding: 30px;
        background: #F8F8F8;
     }

    .contact-form label {
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
    }

    .contact-form select,
    .contact-form input[type="text"],
    .contact-form input[type="email"],
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
      box-sizing: border-box;
    }

    .contact-form .row {
      display: flex;
      gap: 10px;
    }

    .contact-form .row > div {
      flex: 1;
    }

    .contact-form button {
      background-color: #004080;
      width: 96px;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      font-size: 14px;
      cursor: pointer;
    }

    .contact-form button:hover {
      background-color: #003366;
    }
    
    .map-info {
        margin-top: 30px;
    }
    
    ul {
        list-style-type: none;
    }
    @media (max-width: 768px) {
        .blue-box {
            font-size: 1rem;
            padding: 8px 15px;
        }
    }


    @media (max-width: 576px) {
        .blue-box {
            font-size: 0.9rem;
            padding: 5px 10px;
        }
    }
</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
    <div class="image-container">
          <img src="assets/images/contactus-pic.jpg" class="img-fluid" alt="FAQ Image">
          <div class="blue-box">ติดต่อเรา</div>
    </div>

    <div class="contact-container">
        <div class="header">
            <div class="home">
                <a href="#"><i class="bi bi-house-door"></i></a> > ติดต่อเรา
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="map-info">
                    <h1><span class="highlight-bar"></span>ที่อยู่</h1>
                    <br>
                    <ul>
                        <li>224 ท่าอากาศยานนานาชาติอุดรธานี ต.หมากแข้ง อ.เมือง จ.อุดรธานี 41000</li>
                        <li>โทรศัพท์ : +66 (0) 4224-4426 </li>
                        <li>โทรสาร: +66 (0) 4224-6804</li>
                    </ul>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.513719934734!2d102.77295297382908!3d17.387117102815616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31239d88ac386879%3A0x960d0f16cb0ab983!2z4LiX4LmI4Liy4Lit4Liy4LiB4Liy4Lio4Lii4Liy4LiZ4LiZ4Liy4LiZ4Liy4LiK4Liy4LiV4Li04Lit4Li44LiU4Lij4LiY4Liy4LiZ4Li1!5e0!3m2!1sth!2sth!4v1746592815905!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="contact-form">
                <h1><span class="highlight-bar"></span>แบบฟอร์มติดต่อ</h1>
                    <form>
                    <label for="topic">ติดต่อ</label>
                        <select id="topic" name="topic">
                            <option value=""></option>
                            <option value="1">...</option>
                            <option value="2">...</option>
                            <option value="3">...</option>
                        </select>

                    <div class="row">
                    <div>
                    <label for="name">ชื่อ</label>
                        <input type="text" id="name" name="name">
                        </div>
                    <div>
                    <label for="email">อีเมล</label>
                     <input type="email" id="email" name="email">
                    </div>
                    </div>

                    <label for="subject">หัวข้อ</label>
                    <input type="text" id="subject" name="subject">

                    <label for="message">รายละเอียด</label>
                    <textarea id="message" name="message" rows="5"></textarea>

                    <button type="submit">ส่ง</button>
                    </form>
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