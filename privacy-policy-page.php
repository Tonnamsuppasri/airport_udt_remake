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
        background-color: #f4f7f9;
        color: #333;
    }

    a {
        text-decoration: none;
        color: var(--primary-color);
        transition: color var(--transition-speed) ease;
    }

    a:hover {
        color: var(--secondary-color);
    }

    /* Main Container */
    .info-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Header Image and Title */
    .image-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        max-height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
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

    /* Breadcrumbs and Back Button */
    .back-container {
        max-width: 1214px;
        margin: 0 auto;
        padding: 20px;
    }

    .policy-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .back-btn {
        display: flex;
        align-items: center;
        padding: 8px 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: var(--text-light); /* White background */
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: background-color var(--transition-speed) ease, transform 0.2s ease;
    }

    .back-btn:hover {
        background-color: #e9ecef; /* Slightly darker on hover */
        transform: translateY(-2px); /* Slight lift effect */
    }

    .back-btn .arrow {
        color: var(--primary-color); /* Use primary color for arrow */
        font-weight: bold;
        font-size: 20px;
        line-height: 1;
        margin-right: 8px;
    }

    .back-btn .back-text {
        font-size: 16px;
        font-weight: 500; /* Medium font weight */
    }
    
    .home {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin-bottom: 1.5rem;
    }
    
    .home a {
        text-decoration: none;
        font-size: 16px;
        margin-right: 5px;
    }
    .home a:hover {
        color: var(--secondary-color);
    }

    /* Content Section */
    h1 {
        font-size: 26px;
        position: relative;
        padding-left: 20px;
    }
    
    .highlight-bar {
        position: absolute;
        width: 4px;
        height: 20px;
        background-color: var(--secondary-color);
        left: 0;
        top: 5px;
    }
    
    .policy-section {
        background-color: var(--text-light);
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 20px;
    }

    .section-header {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .text-date {
        margin-left: 20px;
        padding: 4px 12px;
        background-color: #e2e3e5;
        color: #6c757d;
        border-radius: 20px;
        font-size: 14px;
    }
    
    .section-content {
        line-height: 1.8;
        font-size: 16px;
        color: #555;
    }

    .section-content p, .section-content li {
        margin-bottom: 1em;
    }

    .section-content ol {
        padding-left: 20px;
    }
    
    .section-content li {
        margin-bottom: 1.5em;
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

        .policy-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        
        .home {
            margin-left: 0;
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

        .section-content {
            font-size: 14px;
        }
        
        .text-date {
            font-size: 12px;
        }
    }
</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>

    <main>
        <div class="image-container">
            <img src="assets/images/policy-pic.jpg" alt="Policy Banner">
            <div class="blue-box">นโยบายการคุ้มครองข้อมูลส่วนบุคคล</div>
        </div>

        <div class="back-container">
            <div class="policy-header">
                <a href="javascript:history.back()" class="back-btn">
                    <span class="arrow">&lt;</span>
                    <div class="back-text">ย้อนกลับ</div>
                </a>
                <div class="home">
                    <a href="index.php"><i class="bi bi-house-door"></i></a> > นโยบายการคุ้มครองข้อมูลส่วนบุคคล
                </div>
            </div>
        </div>

        <hr class="mt-0 mb-4">

        <div class="info-container">
            <div class="policy-section">
                <div class="section-header">
                    <h1><span class="highlight-bar"></span>นโยบายการคุ้มครองข้อมูลส่วนบุคคล</h1>
                    <div class="text-date">จัดทำเมื่อวันที่ 15 พฤศจิกายน 2556</div>
                </div>
                <div class="section-content">
                    <p>
                        กรมท่าอากาศยานได้จัดทำนโยบายการคุ้มครองข้อมูลส่วนบุคคลฉบับนี้ขึ้นเพื่อคุ้มครองข้อมูลส่วนบุคคลของผู้ใช้บริการทุกท่าน (Personal Information) ที่ติดต่อเข้ามายังเว็บไซต์ของกรมท่าอากาศยาน ดังนี้
                    </p>
                </div>
            </div>

            <div class="policy-section">
                <h1><span class="highlight-bar"></span>การเก็บรวบรวมข้อมูลส่วนบุคคล</h1>
                <div class="section-content">
                    <ol>
                        <li>
                            เพื่อความสะดวกในการให้บริการแก่ผู้ใช้บริการทุกท่านที่เข้ามาใช้บริการเว็บไซต์ของกรมท่าอากาศยาน ทางเว็บไซต์จึงได้จัดเก็บรวบรวมข้อมูลส่วนบุคคลของท่านไว้ เช่น อีเมลแอดเดรส (Email Address) ชื่อ (Name) ที่อยู่หรือที่ทำงาน (Home or Work Address) เขตไปรษณีย์ (ZIP Code) หรือหมายเลขโทรศัพท์ (Telephone Number) เป็นต้น
                        </li>
                        <li>
                            ในกรณีที่ท่านสมัคร (Sign Up) เพื่อสมัครสมาชิก หรือเพื่อใช้บริการอย่างใดอย่างหนึ่ง กรมท่าอากาศยานจะเก็บรวบรวมข้อมูลส่วนบุคคลของท่านเพิ่มเติม ได้แก่ เพศ (Sex) อายุ (Gender) สิ่งที่โปรดปราน/ความชอบ (Preferences/Favorites) ความสนใจ (Interests) หรือหมายเลขบัตรเครดิต (Credit Card Number) และที่อยู่ในการแจ้งค่าใช้จ่าย (Billing Address)
                        </li>
                        <li>
                            นอกจากนั้น เพื่อสำรวจความนิยมในการใช้บริการอันจะเป็นประโยชน์ในการนำสถิติไปใช้ในการปรับปรุงคุณภาพในการให้บริการของกรมท่าอากาศยาน จึงจำเป็นต้องจัดเก็บรวบรวมข้อมูลของท่านบางอย่างเพิ่มเติม ได้แก่ หมายเลขไอพี (IP Address) ชนิดของโปรแกรมค้นผ่าน (Browser Type) โดเมนเนม (Domain Name) บันทึกหน้าเว็บ (web page) ของเว็บไซต์ที่ผู้ใช้เยี่ยมชม เวลาที่เยี่ยมชมเว็บไซต์ (Access Times) และเว็บไซต์ที่ผู้ใช้บริการเข้าถึงก่อนหน้านั้น (Referring Website Addresses)
                        </li>
                        <li>
                            กรมท่าอากาศยานขอแนะนำให้ท่านตรวจสอบนโยบายการคุ้มครองข้อมูลส่วนบุคคล (Privacy Policy) ของเว็บไซต์อื่นที่เชื่อมโยงจากเว็บไซต์นี้ เพื่อจะได้ทราบและเข้าใจว่าเว็บไซต์ดังกล่าวเก็บรวบรวมใช้ หรือดำเนินการเกี่ยวกับข้อมูลส่วนบุคคลของท่านอย่างไร ทั้งนี้ กรมท่าอากาศยานไม่สามารถรับรองข้อความหรือรับรองการดำเนินการใดๆ ตามที่ได้มีการประกาศไว้ในเว็บไซต์ดังกล่าวได้ และไม่ขอรับผิดชอบใดๆ หากเว็บไซต์เหล่านั้นไม่ได้ปฏิบัติการหรือดำเนินการใดๆ ตามนโยบายการคุ้มครองข้อมูลส่วนบุคคลที่เว็บไซต์ดังกล่าวได้ประกาศไว้
                        </li>
                    </ol>
                </div>
            </div>

            <div class="policy-section">
                <h1><span class="highlight-bar"></span>การใช้ข้อมูลส่วนบุคคล</h1>
                <div class="section-content">
                    <ol>
                        <li>
                            กรมท่าอากาศยานจะใช้ข้อมูลส่วนบุคคลของท่านเพียงเท่าที่จำเป็น เช่น ชื่อ และที่อยู่ เพื่อใช้ในการติดต่อ ให้บริการประชาสัมพันธ์ หรือให้ข้อมูลข่าวสารต่างๆ รวมทั้งสำรวจความคิดเห็นของท่านในกิจการหรือกิจกรรมของกรมท่าอากาศยานเท่านั้น
                        </li>
                        <li>
                            กรมท่าอากาศยานขอรับรองว่าจะไม่นำข้อมูลส่วนบุคคลของท่านที่กรมท่าอากาศยานได้เก็บรวบรวมไว้ ไปขาย หรือเผยแพร่ให้กับบุคคลภายนอกโดยเด็ดขาดเว้นแต่จะได้รับอนุญาตจากท่านเท่านั้น
                        </li>
                        <li>
                            ในกรณีที่กรมท่าอากาศยานได้ว่าจ้างหน่วยงานอื่นเพื่อให้ดำเนินการเกี่ยวกับข้อมูลส่วนบุคคลของท่าน เช่น การจัดส่งพัสดุไปรษณีย์ การวิเคราะห์เชิงสถิติในกิจการหรือกิจกรรมของกรมท่าอากาศยาน เป็นต้น กรมท่าอากาศยานจะกำหนดให้หน่วยงานที่ได้ว่าจ้างให้ดำเนินการดังกล่าว เก็บรักษาความลับและความปลอดภัยของข้อมูลส่วนบุคคลของท่าน และกำหนดข้อห้ามมิให้มีการนำข้อมูลส่วนบุคคลดังกล่าวไปใช้นอกเหนือจากกิจกรรมหรือกิจการของกรมท่าอากาศยาน
                        </li>
                    </ol>
                </div>
            </div>

            <div class="policy-section">
                <h1><span class="highlight-bar"></span>สิทธิในการควบคุมข้อมูลส่วนบุคคลของท่าน</h1>
                <div class="section-content">
                    <p>
                        เพื่อประโยชน์ในการรักษาความเป็นส่วนตัวของท่าน ท่านมีสิทธิเลือกที่จะให้มีการใช้หรือแชร์ข้อมูลส่วนบุคคลของท่าน หรืออาจเลือกที่จะไม่รับข้อมูลหรือสื่อทางการตลาดใดๆ จากกรมท่าอากาศยานก็ได้ โดยเพียงแต่ท่านกรอกความจำนงดังกล่าวเพื่อแจ้งให้กรมท่าอากาศยานทราบในหน้าเว็บ <a href="http://portal.aviation.go.th" target="_blank">http://portal.aviation.go.th</a>
                    </p>
                </div>
            </div>

            <div class="policy-section">
                <h1><span class="highlight-bar"></span>การรักษาความปลอดภัยสำหรับข้อมูลส่วนบุคคล</h1>
                <div class="section-content">
                    <p>
                        เพื่อประโยชน์ในการรักษาความลับและความปลอดภัยสำหรับข้อมูลส่วนบุคคลของท่าน กรมท่าอากาศยานจึงได้กำหนดระเบียบภายในหน่วยงานเพื่อกำหนดสิทธิในการเข้าถึงหรือใช้ข้อมูลส่วนบุคคลของท่าน และเพื่อรักษาความลับและความปลอดภัยของข้อมูลบางอย่างที่มีความสำคัญอย่างยิ่ง เช่น หมายเลขบัตรเครดิต เป็นต้น กรมท่าอากาศยานจึงได้จัดให้มีช่องทางการสื่อสารแบบปลอดภัยสำหรับข้อมูลดังกล่าว ด้วยการเข้ารหัสลับข้อมูลดังกล่าวเช่น จัดให้มีการใช้ Secure Socket Layer (SSL) protocol เป็นต้น
                    </p>
                </div>
            </div>

            <div class="policy-section">
                <h1><span class="highlight-bar"></span>การใช้คุกกี้ (Cookies)</h1>
                <div class="section-content">
                    <p>
                        “คุกกี้” คือ ข้อมูลที่กรมท่าอากาศยานส่งไปยังโปรแกรมค้นผ่านเว็บไซต์ (Web browser) ของผู้ใช้บริการ และเมื่อมีการติดตั้งข้อมูลดังกล่าวไว้ในระบบของท่านแล้ว หากมีการใช้ “คุกกี้” ก็จะทำให้เว็บไซต์ของกรมท่าอากาศยานสามารถบันทึกหรือจดจำข้อมูลของผู้ใช้บริการไว้ จนกว่าผู้ใช้บริการจะออกจากโปรแกรมค้นผ่านเว็บไซต์ หรือจนกว่าผู้ใช้บริการจะทำการลบ “คุกกี้” นั้นเสีย หรือไม่อนุญาตให้ “คุกกี้” นั้นทำงานอีกต่อไป หากท่านเลือกใช้ “คุกกี้” แล้ว ท่านจะได้รับความสะดวกสบายในการท่องเว็บไซต์มากขึ้น เพราะ “คุกกี้” จะช่วยจดจำเว็บไซต์ที่ท่านแวะหรือเยี่ยมชม ทั้งนี้ กรมท่าอากาศยานจะนำข้อมูลที่ “คุกกี้” ได้บันทึกหรือเก็บรวบรวมไว้ไปใช้ในการวิเคราะห์เชิงสถิติ หรือในกิจกรรมอื่นของกรมท่าอากาศยานเพื่อปรับปรุงคุณภาพการให้บริการของกรมท่าอากาศยานต่อไป
                    </p>
                </div>
            </div>
        </div>
    </main>

    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>