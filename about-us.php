<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
    :root {
        --primary-color: #007bff;
        --secondary-color: #ffc107;
        --dark-text: #333;
        --light-text: #fff;
        --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    body {
        font-family: "Tahoma", sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
        color: var(--dark-text);
        overflow-x: hidden;
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
        transition: transform 0.6s ease-out;
    }

    .blue-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 82, 170, 0.7);
        color: var(--light-text);
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

    .about-us-index .nav-link {
        border-top: 2px solid transparent;
        color: var(--dark-text);
        padding: 0.5rem 1.5rem;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        border-bottom: none;
    }

    .about-us-index .nav-link:hover {
        border-top: 2px solid var(--primary-color);
        color: var(--primary-color);
        transform: translateY(-2px);
    }

    .about-us-index .nav .nav-link.active {
        color: var(--primary-color) !important;
        border-top: 2px solid var(--primary-color);
        font-weight: 500;
        border-bottom: none;
    }

    .about-us-index .header {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .about-us-index .home {
        display: flex;
        align-items: center;
        font-size: 0.9rem;
        transition: transform 0.3s ease;
    }

    .about-us-index .home:hover {
        transform: scale(1.05);
    }

    .about-us-index .home a {
        text-decoration: none;
        margin-right: 5px;
    }

    .about-us-index .blog-title {
        font-weight: 600;
        margin-bottom: 40px;
    }

    h1,
    h2 {
        font-family: 'Sarabun', sans-serif;
        color: #000;
        transition: transform 0.6s ease-out, opacity 0.6s ease-out;
        transform: translateY(20px);
        opacity: 0;
    }

    .animated-heading.is-visible {
        transform: translateY(0);
        opacity: 1;
    }

    p {
        margin-bottom: 20px;
        font-size: 15px;
        line-height: 1.8;
        transition: transform 0.6s ease-out, opacity 0.6s ease-out;
        transform: translateY(20px);
        opacity: 0;
    }

    p.is-visible {
        transform: translateY(0);
        opacity: 1;
    }

    .about-us-index .timeline {
        position: relative;
        margin-left: 20px;
        padding-left: 30px;
        border-left: 3px solid var(--primary-color);
        
    }

    .about-us-index .event {
        position: relative;
        margin-bottom: 40px;
        transition: transform 0.6s cubic-bezier(0.25, 0.8, 0.25, 1), opacity 0.6s ease-out;
        transform: translateX(-20px);
        opacity: 0;
    }

    .about-us-index .event.is-visible {
        transform: translateX(0);
        opacity: 1;
    }

    .about-us-index .event::before {
        content: '';
        position: absolute;
        left: -36px;
        top: 5px;
        width: 10px;
        height: 10px;
        background-color: var(--primary-color);
        border-radius: 50%;
        box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.2);
        transition: all 0.3s ease;
    }

    .about-us-index .event:hover::before {
        transform: scale(1.5);
        background-color: var(--secondary-color);
        box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.4);
    }

    .about-us-index .event p {
        
        font-size: 15px;
        line-height: 1.6;
        transform: none;
        opacity: 1;
        margin-left: 20px;
    }

    @media (max-width: 600px) {
        .container {
            padding: 20px 10px;
        }

        .blue-box {
            font-size: 20px;
        }
    }
</style>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;600&display=swap" rel="stylesheet">

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
        <section class="hero">
            <div class="image-container">
                <img src="assets/images/about-us.jpg" class="img-fluid" alt="About-us Image">
                <div class="blue-box">เกี่ยวกับเรา</div>
            </div>
        </section>

        <div class="about-us-index">
            <div class="container">
                <div class="nav-box">
                    <ul class="nav nav-underline" style="font-size: 1.1rem;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">ประวัติความเป็นมา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ข้อมูลทั่วไป</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ผู้บริหารท่าอากาศยานอุดรธาน</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="header">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h1 class="mb-0 animated-heading">
                            <span style="border-left: 5px solid var(--secondary-color); padding-left: 10px;">ประวัติความเป็นมาของท่าอากาศยานอุดรธานี</span>
                        </h1>
                        <div class="home">
                            <a href="index.php"><i class="bi bi-house-door"></i></a> > ประวัติความเป็นมา
                        </div>
                    </div>
                </div>
            </div>

            <div class="blog-title">
                <div class="container">
                    <p style="margin-left: 2rem;">
                        เมื่อสิ้นสงครามโลกครั้งที่ 1 ประมาณปี พ.ศ. 2463 - 2466 กรมอากาศยานทหารบกในสมัยนั้นได้ทำการดัดแปลงเครื่องบินแบบ "เบรเกต์"
                    </p>
                    <p>เป็นเครื่องบินขนส่งพัสดุไปรษณีย์ บินไปยังจังหวัดที่การคมนาคมทางบกยังไปไม่ถึง เช่น ดอนเมือง นครราชสีมา และได้มีการขยายเส้นทางนครราชสีมา ร้อยเอ็ด - อุดรธานี
                    </p>

                    <br>

                    <p>
                        ท่าอากาศยานอุดรธานีเป็นหน่วยงานราชการ สังกัดกรมท่าอากาศยาน กระทรวงคมนาคม มีหน้าที่รับผิดชอบในการควบคุมกิจการการขนส่งทางอากาศให้เป็นไปตามกฎหมาย
                    </p>
                    <p>ข้อบังคับต่าง ๆ ตลอดจนข้อตกลงและอนุสัญญาว่าด้วยการบินพลเรือนระหว่างประเทศ รวมทั้งให้บริการการอำนวยความสะดวก ความปลอดภัยแก่ผู้ใช้บริการท่าอากาศยาน
                    </p>
                    <p>ซึ่งท่าอากาศยานอุดรธานีเป็นสนามบินที่อยู่ในความครอบครองของกองทัพอากาศ กองบิน 23 และกรมการขนส่งทางอากาศเป็นผู้ขอใช้พื้นที่ร่วมกิจการการบิน
                    </p>
                    <p>ประกาศเป็นสนามบินเมื่อวันที่ 13 ธันวาคม 2497</p>
                    <br>
                </div>
            </div>

            <div class="blog-detail">
                <div class="container">
                    <h2 class="animated-heading">ประวัติท่าอากาศยานอุดรธานี</h2>
                    <br>

                    <div class="timeline">
                        <div class="event"><p>พ.ศ. 2466 สนามบินอุดรธานีเปิดบริการเป็นครั้งแรกอยู่ภายในตัวเมืองอุดรธานี</p></div>
                        <div class="event"><p>พ.ศ. 2475 ย้ายมาสร้างใหม่ที่ตำบลหนองบัว โดยมีทางวิ่งยาวประมาณ 500 เมตร</p></div>
                        <div class="event"><p>พ.ศ. 2495 สำนักงานการบินพลเรือน กรมการขนส่งฯ ได้สร้างอาคารสนามบิน และหอบังคับการบิน</p></div>
                        <div class="event"><p>พ.ศ. 2500 ได้สร้างทางวิ่งใหม่ ยาว 3,048 เมตร กว้าง 38 เมตร โดยความร่วมมือกับรัฐบาลสหรัฐอเมริกา</p></div>
                        <div class="event"><p>พ.ศ. 2505 กรมการบินพลเรือน ได้เข้ารับช่วงจากท่าอากาศยานอุดรธานี พร้อมหอบังคับการบินแล้วเสร็จในเดือนกันยายน</p></div>
                        <div class="event"><p>พ.ศ. 2533 กรมการบินพลเรือน ได้ที่ดินเพิ่มอีก 400 ไร่ พร้อมสิ่งปลูกสร้างเพิ่มเติม</p></div>
                        <div class="event"><p>พ.ศ. 2543-545 ได้ขยายทางวิ่งจากกว้าง 38 เมตร เป็น 45 เมตร และทางขับกว้าง 23 เมตร</p></div>
                        <div class="event"><p>พ.ศ. 2546-548 ก่อสร้างอาคารที่พักผู้โดยสารใหม่ พร้อมลานจอดและทางวิ่งใหม่</p></div>
                        <div class="event"><p>พ.ศ. 2556-558 ปรับปรุงอาคารหลังเดิมให้เป็นอาคารผู้โดยสารระหว่างประเทศ</p></div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to handle scroll animations
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            // Target elements for animation
            document.querySelectorAll('h1, h2, p, .event').forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>

</html>