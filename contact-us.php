<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
    :root {
        --primary-color: #014A9B;
        --secondary-color: #FECD22;
        --text-dark: #000000;
        --text-light: #ffffff;
        --gray-light: #F8F8F8;
        --transition-speed: 0.3s;
    }

    /* General */
    body {
        font-family: 'Sarabun', sans-serif;
    }

    a {
        text-decoration: none;
        color: var(--primary-color);
        transition: color var(--transition-speed) ease;
    }

    a:hover {
        color: var(--secondary-color);
    }

    h1 {
        font-size: 26px;
        position: relative;
        padding-left: 20px;
        margin-bottom: 1.5rem;
    }

    .highlight-bar {
        position: absolute;
        width: 4px;
        height: 20px;
        background-color: var(--secondary-color);
        left: 0;
        top: 5px;
    }

    .image-container img {
        width: 100%;
        height: auto;
        object-fit: cover;
        object-position: center;
        filter: brightness(50%);
        transition: transform 10s ease-in-out;
    }

    .image-container:hover img {
        transform: scale(1.1);
    }

    .img-fluid {
        width: 100%;
        object-fit: contain;
        object-position: center top;
        filter: brightness(50%);
        transition: transform 0.6s ease-out;
    }

    .blue-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 82, 170, 0.7);
        color: white;
        padding: 10px 20px;
        font-size: clamp(24px, 5vw, 40px);
        text-align: center;
        white-space: nowrap;
        border-radius: 8px;
        box-shadow: var(--box-shadow);
        animation: fadeInBox 1.5s ease-out forwards;
        opacity: 0;
    }

    @keyframes fadeInBox {
        from {
            opacity: 0;
            transform: translate(-50%, -60%) scale(0.95);
        }

        to {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }
    }

    .image-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        max-height: 250px;
        box-shadow: var(--box-shadow);
    }

    /* Breadcrumbs and Main Content */
    .contact-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        margin-bottom: 50px;
    }
    
    .header-info {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin-bottom: 1.5rem;
    }
    
    .header-info a {
        text-decoration: none;
        font-size: 16px;
        margin-right: 5px;
    }

    .content-row {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
    }
    
    .content-col {
        flex: 1;
        min-width: 300px;
    }

    /* Map and Address Section */
    .map-info {
        margin-top: 30px;
    }

    .map-container {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        max-width: 100%;
        padding: 20px 0;
    }

    .map-container iframe {
        width: 100%;
        height: 357px;
        border: 0;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform var(--transition-speed) ease;
    }
    
    .map-container iframe:hover {
        transform: scale(1.02);
    }

    .contact-address {
        background-color: #f1f1f1;
        padding: 20px;
        border-radius: 8px;
    }

    .contact-address ul {
        list-style-type: none;
        padding-left: 0;
    }
    
    .contact-address ul li {
        margin-bottom: 10px;
        font-size: 16px;
        color: #555;
    }
    
    .contact-address ul li i {
        color: var(--primary-color);
        margin-right: 10px;
    }
    
    /* Contact Form Section */
    .contact-form {
        background: var(--gray-light);
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .contact-form h1 {
        margin-top: 0;
    }

    .contact-form label {
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
        color: #333;
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
        transition: border-color var(--transition-speed) ease;
    }
    
    .contact-form select:focus,
    .contact-form input[type="text"]:focus,
    .contact-form input[type="email"]:focus,
    .contact-form textarea:focus {
        border-color: var(--primary-color);
        outline: none;
        box-shadow: 0 0 5px rgba(1, 74, 155, 0.2);
    }

    .contact-form .form-group-row {
        display: flex;
        gap: 15px;
    }

    .contact-form .form-group {
        flex: 1;
    }

    .contact-form button {
        background-color: var(--primary-color);
        color: var(--text-light);
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color var(--transition-speed) ease, transform 0.2s ease;
    }

    .contact-form button:hover {
        background-color: #003366;
        transform: translateY(-2px);
    }
    
    .contact-form button:active {
        transform: translateY(0);
    }
    
    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translate(-50%, -60%);
        }
        to {
            opacity: 1;
            transform: translate(-50%, -50%);
        }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .blue-box {
            font-size: 1.5rem;
            padding: 10px 20px;
        }
        
        h1 {
            font-size: 24px;
        }

        .content-row {
            flex-direction: column;
        }
        
        .contact-form .form-group-row {
            flex-direction: column;
            gap: 0;
        }
    }

    @media (max-width: 576px) {
        .blue-box {
            font-size: 1.2rem;
            padding: 8px 15px;
        }
        
        h1 {
            font-size: 22px;
        }
        
        .contact-container {
            padding: 10px;
        }
    }
</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>

    <main>
        <div class="image-container">
            <img src="assets/images/contactus-pic.jpg" alt="Contact Us Banner">
            <div class="blue-box">ติดต่อเรา</div>
        </div>

        <div class="contact-container">
            <div class="header-info">
                <a href="index.php"><i class="bi bi-house-door"></i></a> > ติดต่อเรา
            </div>

            <div class="content-row">
                <div class="content-col">
                    <div class="map-info">
                        <h1><span class="highlight-bar"></span>ที่อยู่</h1>
                        <div class="contact-address">
                            <ul>
                                <li><i class="bi bi-geo-alt-fill"></i> 224 ท่าอากาศยานนานาชาติอุดรธานี ต.หมากแข้ง อ.เมือง จ.อุดรธานี 41000</li>
                                <li><i class="bi bi-telephone-fill"></i> โทรศัพท์: +66 (0) 4224-4426</li>
                                <li><i class="bi bi-printer-fill"></i> โทรสาร: +66 (0) 4224-6804</li>
                            </ul>
                        </div>
                    </div>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3824.773323062325!2d102.7844007!3d17.391673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3124803d1591f861%3A0x6d88f98d451b6a12!2z4Lir4Lit4LiH4Liy4Lih4Lib4Lij4Lix4Liw4LmA4LiB4Liy4Lir4Lin4Li04LiX4Lii4LiH4Liy4LiZ4Lia4Liy4Lir4LiB4Liy4Lij4Lih4LmI!5e0!3m2!1sth!2sth!4v1690000000000!5m2!1sth!2sth" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="content-col">
                    <div class="contact-form">
                        <h1><span class="highlight-bar"></span>แบบฟอร์มติดต่อ</h1>
                        <form>
                            <div class="form-group">
                                <label for="topic">ติดต่อ</label>
                                <select id="topic" name="topic" required>
                                    <option value="">เลือกหัวข้อการติดต่อ...</option>
                                    <option value="1">ข้อเสนอแนะ</option>
                                    <option value="2">สอบถามข้อมูล</option>
                                    <option value="3">แจ้งปัญหา</option>
                                </select>
                            </div>

                            <div class="form-group-row">
                                <div class="form-group">
                                    <label for="name">ชื่อ</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">อีเมล</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subject">หัวข้อ</label>
                                <input type="text" id="subject" name="subject" required>
                            </div>

                            <div class="form-group">
                                <label for="message">รายละเอียด</label>
                                <textarea id="message" name="message" rows="5" required></textarea>
                            </div>

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