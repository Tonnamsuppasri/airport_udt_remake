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
        margin-bottom: 1rem;
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
        flex-wrap: wrap; /* Allow wrapping on smaller screens */
    }

    .text-date {
        margin-left: 20px;
        padding: 4px 12px;
        background-color: #e2e3e5;
        color: #6c757d;
        border-radius: 20px;
        font-size: 14px;
        margin-top: 10px; /* Add margin for wrapping */
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

        .section-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .text-date {
            margin-left: 0;
            margin-top: 10px;
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
            <img src="assets/images/policy-pic.jpg" class="img-fluid" alt="Website Policy Image">
            <div class="blue-box">นโยบายเว็บไซต์</div>
        </div>

        <div class="back-container">
            <div class="policy-header">
                <a href="javascript:history.back()" class="back-btn">
                    <span class="arrow">&lt;</span>
                    <div class="back-text">ย้อนกลับ</div>
                </a>
                <div class="home">
                    <a href="index.php"><i class="bi bi-house-door"></i></a> > นโยบายเว็บไซต์
                </div>
            </div>
        </div>

        <hr class="mt-0 mb-4">

        <div class="info-container">
            <div class="policy-section">
                <div class="section-header">
                    <h1><span class="highlight-bar"></span>นโยบายเว็บไซต์</h1>
                    <div class="text-date">จัดทำเมื่อวันที่ 15 พฤศจิกายน 2556</div>
                </div>
                <div class="section-content">
                    <p>
                        เว็บไซต์ กรมท่าอากาศยาน ได้จัดทำขึ้นเพื่อให้บริการข้อมูลข่าวสารแก่ประชาชนทั่วไปและบุคลากรในกรมท่าอากาศยาน
                    </p>
                    <p>
                        การใช้บริการเว็บไซต์ของผู้ใช้บริการจะอยู่ภายใต้เงื่อนไขและข้อกำหนดดังต่อไปนี้ ผู้ใช้บริการจึงควรศึกษาเงื่อนไขและข้อกำหนดการใช้งานเว็บไซต์ และ/หรือเงื่อนไขและข้อตกลงอื่นใดที่กรมท่าอากาศยานได้แจ้งให้ทราบบนเว็บไซต์โดยละเอียดก่อนการเข้าใช้บริการ ทั้งนี้ในการใช้บริการ ให้ถือว่าผู้ใช้บริการได้ตกลงที่จะปฏิบัติตามเงื่อนไขและข้อกำหนดการให้บริการที่กำหนดไว้นี้ หากผู้ใช้บริการไม่ประสงค์ที่จะผูกพันตามข้อกำหนดและเงื่อนไขการให้บริการ กรุณายุติการเข้าชมและใช้งานเว็บไซต์นี้ในทันที
                    </p>
                </div>
            </div>

            <div class="policy-section">
                <h1><span class="highlight-bar"></span>วัตถุประสงค์</h1>
                <div class="section-content">
                    <p>
                        เว็บไซต์ กรมท่าอากาศยาน ได้จัดทำขึ้นเพื่อให้บริการในการใช้บริการข้อมูลข่าวสารแก่ประชาชนทั่วไปและบุคลากรในกรมท่าอากาศยาน
                    </p>
                    <p>
                        การใช้บริการเว็บไซต์ของผู้ใช้บริการจะอยู่ภายใต้เงื่อนไขและข้อกำหนดดังต่อไปนี้ ผู้ใช้บริการจึงควรศึกษาเงื่อนไขและข้อกำหนดการใช้งานเว็บไซต์ และ/หรือเงื่อนไขและข้อตกลงอื่นใดที่กรมท่าอากาศยานได้แจ้งให้ทราบบนเว็บไซต์โดยละเอียดก่อนการเข้าใช้บริการ ทั้งนี้ในการใช้บริการ ให้ถือว่าผู้ใช้บริการได้ตกลงที่จะปฏิบัติตามเงื่อนไขและข้อกำหนดการให้บริการที่กำหนดไว้นี้ หากผู้ใช้บริการไม่ประสงค์ที่จะผูกพันตามข้อกำหนดและเงื่อนไขการให้บริการ กรุณายุติการเข้าชมและใช้งานเว็บไซต์นี้ในทันที
                    </p>
                </div>
            </div>

            <div class="policy-section">
                <h1><span class="highlight-bar"></span>เงื่อนไขและข้อกำหนดการใช้งานเว็บไซต์</h1>
                <div class="section-content">
                    <ol>
                        <li>
                            ผู้ใช้บริการอาจได้รับสิทธิ์ในการเข้าถึง สร้าง ส่ง หรือแสดงข้อมูล เช่น ไฟล์ข้อมูล ข้อความ ลายลักษณ์อักษร ซอฟต์แวร์คอมพิวเตอร์ ดนตรี ไฟล์เสียง หรือเสียงอื่น ๆ ภาพถ่าย วิดีโอ หรือรูปภาพอื่น ๆ โดยเป็นส่วนหนึ่งของบริการหรือโดยผ่านการใช้บริการ ซึ่งต่อไปนี้จะเรียกว่า “เนื้อหา”
                        </li>
                        <li>
                            เนื้อหาที่นำเสนอต่อผู้ใช้บริการอาจได้รับการคุ้มครองโดยสิทธิในทรัพย์สินทางปัญญาของเจ้าของเนื้อหานั้น ผู้ใช้บริการไม่มีสิทธิเปลี่ยนแปลงแก้ไข จำหน่ายจ่ายโอน หรือสร้างผลงานต่อเนื่อง โดยอาศัยเนื้อหาดังกล่าว ไม่ว่าจะทั้งหมด หรือบางส่วน เว้นแต่ผู้ใช้บริการจะได้รับอนุญาตโดยชัดแจ้งจากเจ้าของเนื้อหานั้น
                        </li>
                        <li>
                            ผู้ใช้บริการอาจพบเนื้อหาที่ไม่เหมาะสม หรือหยาบคายอันก่อให้เกิดความไม่พอใจภายใต้ความเสี่ยงของตนเอง
                        </li>
                        <li>
                            กรมท่าอากาศยานทรงไว้ซึ่งสิทธิในการคัดกรอง ตรวจทาน ทำเครื่องหมายเปลี่ยนแปลงแก้ไข ปฏิเสธ หรือลบเนื้อหาใด ๆ ที่ไม่เหมาะสมออกจากบริการ ซึ่งกรมท่าอากาศยานอาจจัดเตรียมเครื่องมือในการคัดกรองเนื้อหาอย่างชัดเจนโดยไม่ขัดต่อกฎหมาย กฎระเบียบของทางราชการที่เกี่ยวข้อง
                        </li>
                        <li>
                            กรมท่าอากาศยานอาจหยุดให้บริการเป็นการชั่วคราว หรือถาวร หรือยกเลิกการให้บริการแก่ผู้ใช้บริการรายใดเป็นการเฉพาะ หากการให้บริการดังกล่าวส่งผลกระทบต่อผู้ใช้บริการอื่นๆ หรือขัดแย้งต่อกฎหมาย โดยไม่ต้องแจ้งให้ผู้ใช้บริการทราบล่วงหน้า
                        </li>
                        <li>
                            การหยุด หรือการยกเลิกบริการตามข้อ 2.5 ผู้ใช้บริการจะไม่สามารถเข้าใช้บริการ และเข้าถึงรายละเอียดบัญชีของผู้ใช้บริการ ไฟล์เอกสารใดๆ หรือเนื้อหาอื่นๆ ที่อยู่ในบัญชีของผู้ใช้บริการได้
                        </li>
                        <li>
                            ในกรณีที่กรมท่าอากาศยานหยุดให้บริการเป็นการถาวร หรือยกเลิกบริการแก่ผู้ใช้บริการ กรมท่าอากาศยานมีสิทธิในการลบข้อมูลต่างๆ ที่อยู่ในบัญชีของผู้ใช้บริการได้โดยไม่ต้องแจ้งให้ผู้ใช้บริการทราบล่วงหน้า
                        </li>
                    </ol>
                </div>
            </div>

            <div class="policy-section">
                <h1><span class="highlight-bar"></span>สิทธิ หน้าที่ และความรับผิดชอบของผู้ใช้บริการ</h1>
                <div class="section-content">
                    <ol>
                        <li>
                            ผู้ใช้บริการจะให้ข้อมูลเกี่ยวกับตนเอง เช่น ข้อมูลระบุตัวตน หรือรายละเอียดการติดต่อที่ถูกต้อง เป็นจริง และเป็นปัจจุบันเสมอแก่กรมท่าอากาศยาน อันเป็นส่วนหนึ่งของกระบวนการลงทะเบียนใช้บริการหรือการใช้บริการที่ต่อเนื่อง
                        </li>
                        <li>
                            ผู้ใช้บริการจะใช้บริการเว็บไซต์นี้ เพื่อวัตถุประสงค์ที่ได้รับอนุญาตตามข้อกำหนดของกรมท่าอากาศยาน และไม่ขัดต่อกฎหมาย กฎ ระเบียบ ข้อบังคับ หรือหลักปฏิบัติที่เป็นที่ยอมรับโดยทั่วไป
                        </li>
                        <li>
                            ผู้ใช้บริการจะไม่เข้าใช้ หรือพยายามเข้าใช้บริการหนึ่งบริการใด โดยวิธีอื่นรวมถึงการใช้วิธีการอัตโนมัติ (การใช้สคริปต์) นอกจากช่องทางที่กรมท่าอากาศยานจัดเตรียมไว้ให้ เว้นแต่ผู้ใช้บริการจะได้รับอนุญาตจากกรมท่าอากาศยานโดยชัดแจ้ง
                        </li>
                        <li>
                            ผู้ใช้บริการจะไม่ทำ หรือมีส่วนร่วมในการขัดขวางหรือรบกวนบริการของกรมท่าอากาศยาน รวมทั้งเครื่องแม่ข่ายและเครือข่ายที่เชื่อมต่อกับบริการ
                        </li>
                        <li>
                            ผู้ใช้บริการจะไม่ทำสำเนา คัดลอก ทำซ้ำ ขาย แลกเปลี่ยน หรือขายต่อบริการเพื่อวัตถุประสงค์ใดๆ เว้นแต่ผู้ใช้บริการจะได้รับอนุญาตจากกรมท่าอากาศยานโดยชัดแจ้งให้ทำเช่นนั้นได้
                        </li>
                        <li>
                            ผู้ใช้บริการมีหน้าที่ในการรักษาความลับของรหัสผ่านที่เชื่อมโยงกับบัญชีใดๆ ที่ใช้ในการเข้าถึงบริการ
                        </li>
                        <li>
                            ผู้ใช้บริการจะเป็นผู้รับผิดชอบแต่เพียงผู้เดียวต่อบุคคลใดๆ รวมถึงกรมท่าอากาศยานในความเสียหายอันเกิดจากการละเมิดข้อกำหนดในข้อตกลงนี้
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </main>

    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>