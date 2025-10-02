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
        --border-color: #dee2e6;
    }

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

    /* Main Content Container */
    .faq-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px 20px 20px;
    }

    /* Header and Breadcrumbs */
    .faq-container h1 {
        font-size: 28px;
        position: relative;
        padding-left: 20px;
        margin-bottom: 1rem;
    }

    .highlight-bar {
        position: absolute;
        width: 4px;
        height: 25px;
        background-color: var(--secondary-color);
        left: 0;
        top: 2px; /* Adjusted for better alignment */
    }

    .faq-container .faq-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
        padding-top: 20px; /* Added padding */
    }

    .faq-container .home {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .faq-container .home a {
        text-decoration: none;
        font-size: 16px;
        margin-right: 5px;
    }
    .faq-container .home a:hover {
        color: var(--secondary-color);
    }

    /* Navigation Tabs */
    .faq-container .nav-underline {
        margin-bottom: 20px !important; /* Adjusted margin */
        border-bottom: 1px solid var(--border-color);
    }

    .faq-container .nav-underline .nav-link {
        border-bottom: 2px solid transparent;
        color: #000;
        padding: 10px 15px; /* Increased padding */
        font-size: 18px; /* Larger font size */
        transition: border-color var(--transition-speed) ease, color var(--transition-speed) ease;
    }

    .faq-container .nav-underline .nav-link:hover {
        border-bottom: 2px solid var(--primary-color);
        color: var(--primary-color);
    }

    .faq-container .nav-underline .nav-link.active {
        color: var(--primary-color);
        border-bottom: 2px solid var(--primary-color);
        font-weight: bold; /* Bold for active link */
    }

    /* Accordion Styling */
    .accordion-item {
        border: 1px solid var(--border-color);
        border-radius: 8px; /* Rounded corners */
        margin-bottom: 15px; /* Increased margin */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05); /* Subtle shadow */
    }

    .accordion-button {
        background-color: var(--text-light);
        color: var(--text-dark);
        font-weight: 500;
        font-size: 18px; /* Larger font size */
        padding: 15px 20px; /* Adjusted padding */
        border-radius: 8px 8px 0 0; /* Rounded top corners */
        transition: background-color var(--transition-speed) ease, color var(--transition-speed) ease;
    }
    
    .accordion-button:not(.collapsed) {
        background-color: var(--gray-light); /* Slightly different background when open */
        color: var(--primary-color);
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    .accordion-button::after {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23343a40'%3E%3Cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 11.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3E%3C/svg%3E");
        background-size: 1.25rem;
        transition: transform var(--transition-speed);
    }

    .accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230d6efd'%3E%3Cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 11.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3E%3C/svg%3E");
        transform: rotate(180deg);
    }

    .accordion-body {
        background-color: var(--text-light);
        font-size: 1rem; /* Adjusted font size */
        color: #555;
        padding: 20px 25px; /* Adjusted padding */
    }

    .accordion-body p {
        margin-bottom: 1em;
    }

    /* Icons */
    .accordion-button .bi {
        font-size: 1.2rem;
        margin-right: 10px;
        color: var(--primary-color); /* Icon color */
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

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .blue-box {
            font-size: 28px;
            padding: 12px 25px;
        }
        .faq-container h1 {
            font-size: 24px;
        }
        .faq-container .nav-underline .nav-link {
            font-size: 16px;
        }
        .accordion-button {
            font-size: 16px;
        }
    }

    @media (max-width: 768px) {
        .blue-box {
            font-size: 24px;
            padding: 10px 20px;
        }
        .faq-container .faq-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        .faq-container .home {
            margin-left: 0;
        }
        .faq-container .nav-underline {
            margin-bottom: 15px !important;
        }
        .faq-container .nav-underline .nav-link {
            font-size: 14px;
        }
        .accordion-button {
            font-size: 15px;
            padding: 12px 15px;
        }
        .accordion-body {
            padding: 15px 20px;
        }
    }

    @media (max-width: 576px) {
        .blue-box {
            font-size: 18px;
            padding: 8px 15px;
        }
        .faq-container h1 {
            font-size: 22px;
            padding-left: 15px;
        }
        .highlight-bar {
            height: 18px;
        }
        .faq-container .nav-underline .nav-link {
            font-size: 13px;
        }
        .accordion-button {
            font-size: 14px;
        }
        .accordion-body {
            font-size: 0.9rem;
        }
        .accordion-button .bi {
            font-size: 1rem;
        }
    }
</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>

    <main>
        <div class="image-container">
            <img src="assets/images/airport-pic.jpg" class="img-fluid" alt="FAQ Banner">
            <div class="blue-box">คำถามที่พบบ่อย</div>
        </div>

        <div class="faq-container">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">ประวัติความเป็นมา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ข้อมูลทั่วไป</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ผู้บริหารท่าอากาศยานอุดรธานี</a>
                </li>
            </ul>
        </div>
        <hr style="margin-top: -20px; margin-bottom: 20px;">

        <div class="faq-container">
            <div class="faq-header">
                <h1><span class="highlight-bar"></span>คำถามที่พบบ่อย (FAQ)</h1>
                <div class="home">
                    <a href="index.php"><i class="bi bi-house-door"></i></a> &gt; คำถามที่พบบ่อย
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <i class="bi bi-chat-left-text-fill me-2"></i>แนะนำ-ติชมหรือสอบถามข้อมูลต่างๆ
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>หากท่านมีข้อแนะนำ ติชม หรือต้องการสอบถามข้อมูลเพิ่มเติมเกี่ยวกับการให้บริการ ท่านสามารถติดต่อเราได้หลายช่องทาง:</p>
                            <ul>
                                <li><strong>โทรศัพท์:</strong> (หมายเลขโทรศัพท์)</li>
                                <li><strong>อีเมล:</strong> (ที่อยู่อีเมล)</li>
                                <li><strong>แบบฟอร์มติดต่อเรา:</strong> (ลิงก์ไปยังหน้าติดต่อเรา)</li>
                            </ul>
                            <p>เรายินดีรับฟังทุกความคิดเห็นเพื่อนำไปปรับปรุงการให้บริการของเราให้ดียิ่งขึ้น</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="bi bi-chat-left-text-fill me-2"></i>ฉันลืมของหรือทำของหาย ฉันจะติดต่อใคร
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>หากท่านทำสิ่งของสูญหายภายในท่าอากาศยาน กรุณาติดต่อ<strong>ฝ่ายของหาย</strong> หรือ<strong>ศูนย์บริการข้อมูลผู้โดยสาร</strong> ของท่าอากาศยานนั้นๆ โดยตรง ท่านสามารถค้นหาข้อมูลติดต่อของแต่ละท่าอากาศยานได้ที่หน้า "ติดต่อเรา" หรือ "แผนผังเว็บไซต์" ของเรา</p>
                            <p>หากท่านทราบรายละเอียดของสิ่งของที่หาย (เช่น ลักษณะ วันที่ เวลา สถานที่) จะช่วยให้การค้นหามีประสิทธิภาพมากขึ้น</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="bi bi-chat-left-text-fill me-2"></i>ถ้าหากเที่ยวบินดีเลย์หรือยกเลิก
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>ในกรณีที่เที่ยวบินของท่านเกิดความล่าช้าหรือถูกยกเลิก กรุณาติดต่อ<strong>สายการบิน</strong> ของท่านโดยตรงเพื่อสอบถามข้อมูลเพิ่มเติมเกี่ยวกับเที่ยวบินทดแทน หรือการดำเนินการชดเชยที่ท่านอาจมีสิทธิ์ได้รับ</p>
                            <p>ท่าอากาศยานมีหน้าที่อำนวยความสะดวกและให้บริการแก่ผู้โดยสาร แต่ข้อมูลเกี่ยวกับเที่ยวบินและการจัดการเที่ยวบินขึ้นอยู่กับนโยบายของแต่ละสายการบิน</p>
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