<style>
    :root {
        --primary-color: #014A9B;
        --secondary-color: #FECD22;
        --dark-blue: #052B5D;
        --dark-blue-footer: #014A9B;
        --text-light: #ffffff;
        --text-dark: #000000;
        --gray-light-border: #ffffff33;
        --transition-speed: 0.3s;
    }

    .footer-topbar {
        background-color: var(--dark-blue);
        color: var(--text-light);
        font-family: 'Sarabun', sans-serif;
        font-size: 14px;
        padding: 20px 120px;
        animation: fadeInBackground 1s ease-out forwards;
    }

    .footer-topbar-links {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        animation: slideInFromBottom 0.5s ease-out forwards;
    }

    .footer-links-left,
    .footer-links-right {
        display: flex;
        gap: 30px;
    }

    .footer-topbar a {
        color: var(--text-light);
        text-decoration: none;
        transition: color var(--transition-speed) ease;
    }

    .footer-topbar a:hover {
        color: var(--secondary-color);
    }

    .footer-main {
        background-color: var(--dark-blue-footer);
        color: var(--text-light);
        font-family: 'Sarabun', sans-serif;
        font-size: 14px;
        animation: fadeInBackground 1s ease-out forwards;
        position: relative; /* For potential absolute positioning of elements */
        overflow: hidden; /* To contain animations */
    }

    .footer-content {
        display: flex;
        justify-content: space-between;
        padding: 40px 120px;
        flex-wrap: wrap;
        gap: 30px;
    }

    .footer-section {
        flex: 1 1 150px;
        min-width: 150px;
        opacity: 0; /* Start hidden for animation */
        transform: translateY(20px); /* Start slightly below */
        animation: fadeInUp 0.5s ease-out forwards;
    }

    .footer-section:nth-child(1) { animation-delay: 0.2s; }
    .footer-section:nth-child(2) { animation-delay: 0.4s; }
    .footer-section:nth-child(3) { animation-delay: 0.6s; }
    .footer-section:nth-child(4) { animation-delay: 0.8s; }

    .footer-section.address {
        flex: 1 1 300px;
        min-width: 250px;
    }

    .logo-container {
        display: flex;
        align-items: center;
    }

    .logo-container img {
        width: 70px;
        height: auto;
        transition: transform var(--transition-speed) ease;
    }

    .logo-container:hover img {
        transform: scale(1.1);
    }

    .logo-text {
        margin-left: 12px;
    }

    .title-th {
        font-weight: bold;
        font-size: 16px;
    }

    .title-en {
        font-size: 13px;
    }

    .footer-section p {
        line-height: 1.6;
    }

    .section-title {
        font-weight: bold;
    }

    .stat-box {
        background-color: #222263;
        padding: 2px 6px;
        border-radius: 4px;
        display: inline-block; /* Allows padding and margin */
        transition: background-color var(--transition-speed) ease;
    }

    .stat-box:hover {
        background-color: var(--secondary-color);
        color: var(--text-dark);
    }

    .footer-copyright {
        text-align: left;
        padding: 20px 120px;
        background-color: var(--dark-blue-footer);
        margin-top: 20px;
        font-size: 14px;
        border-top: 1px solid var(--gray-light-border);
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.5s ease-out forwards;
        animation-delay: 1s; /* Delay for the copyright */
    }

    .footer-section a {
        display: block;
        color: white;
        text-decoration: none;
        padding: 6px 0;
        transition: color var(--transition-speed) ease, transform var(--transition-speed) ease;
        position: relative; /* For potential underline animation */
        overflow: hidden;
    }

    .footer-section a:hover {
        color: var(--secondary-color);
        transform: translateX(5px); /* Slight slide on hover */
    }

    /* Underline animation */
    .footer-section a::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        display: block;
        margin-top: 3px;
        right: 0;
        background: var(--secondary-color);
        transition: width 0.3s ease;
    }

    .footer-section a:hover::after {
        width: 100%;
        left: 0;
        background: var(--secondary-color);
    }

    /* Responsive adjustments */
    @media (max-width: 1024px) {
        .footer-topbar,
        .footer-content,
        .footer-copyright {
            padding: 20px 60px;
        }

        .footer-section {
            flex: 1 1 45%;
            min-width: unset; /* Allow flex to dictate width better */
        }

        .footer-section.address {
            flex: 1 1 100%;
        }
    }

    @media (max-width: 768px) {
        .footer-topbar-links {
            flex-direction: column;
            gap: 15px;
        }

        .footer-links-left,
        .footer-links-right {
            gap: 15px;
            justify-content: center;
            width: 100%;
        }

        .footer-topbar,
        .footer-content,
        .footer-copyright {
            padding: 15px 20px;
        }

        .footer-content {
            gap: 25px;
            flex-direction: column; /* Stack sections vertically */
            align-items: center; /* Center align stacked sections */
        }

        .footer-section, .footer-section.address {
            flex: none; /* Remove flex grow/shrink */
            width: 100%; /* Take full width */
            max-width: 350px; /* Limit width for readability */
            text-align: center; /* Center align content within sections */
        }

        .logo-container {
            justify-content: center;
        }

        .logo-text {
            margin-left: 0;
            margin-top: 10px;
        }

        .title-th, .title-en {
            text-align: center;
        }

        .footer-section p {
            text-align: center;
        }

        .footer-copyright {
            text-align: center;
            margin-top: 15px;
        }
        .footer-section a {
            display: inline-block; /* Allow links to sit side-by-side if space allows */
            margin: 5px 10px; /* Add some spacing between links */
        }
    }

    @media (max-width: 480px) {
        .footer-topbar,
        .footer-content,
        .footer-copyright {
            font-size: 12px;
            padding: 10px 15px;
        }

        .logo-container img {
            width: 50px;
        }

        .title-th {
            font-size: 14px;
        }

        .title-en {
            font-size: 11px;
        }

        .footer-section a {
            margin: 5px 5px; /* Reduce margin for links on very small screens */
        }
    }

    /* Animations */
    @keyframes fadeInBackground {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideInFromBottom {
        from { transform: translateY(50px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    @keyframes fadeInUp {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
</style>

<div class="footer-topbar">
    <div class="footer-topbar-links">
        <div class="footer-links-left">
            <a href="website-policy-page.php">นโยบายเว็บไซต์</a>
            <a href="privacy-policy-page.php">นโยบายความเป็นส่วนตัว</a>
            <a href="contact-us.php">ติดต่อเรา</a>
        </div>
        <div class="footer-links-right">
            <a href="sitemap-page.php">แผนผังเว็บไซต์</a>
        </div>
    </div>
</div>

<footer class="footer-main">
    <div class="footer-content">
        <div class="footer-section address">
            <div class="logo-container">
                <img src="assets/images/logo-airport.png" alt="โลโก้สนามบิน">
                <div class="logo-text">
                    <div class="title-th">ท่าอากาศยานนานาชาติอุดรธานี</div>
                    <div class="title-en">UdonThani International Airport</div>
                </div>
            </div>
            <p>
                224 ท่าอากาศยานนานาชาติอุดรธานี ต.หมากแข้ง อ.เมือง จ.อุดรธานี 41000<br>
                โทรศัพท์: +66 (0) 4224-4426 โทรสาร: +66 (0) 4224-6804
            </p>
        </div>

        <div class="footer-section">
            <a href="flight-info.php">เที่ยวบิน</a>
            <a href="airportguide.php">คำแนะนำผู้โดยสาร</a>
            <a href="service1.php">สิ่งอำนวยความสะดวก</a>
            <a href="interest.php">สถานที่น่าสนใจ</a>
        </div>

        <div class="footer-section">
            <a href="about-us.php">เกี่ยวกับเรา</a>
            <a href="Press-release.php">ข่าวสารประชาสัมพันธ์</a>
            <a href="faqs-page.php">คำถามที่พบบ่อย</a>
            <a href="contact-us.php">ติดต่อเรา</a>
        </div>

        <div class="footer-section stats">
            <p class="section-title">สถิติผู้เข้าเว็บไซต์</p>
            <p>ผู้ชมวันนี้ : <span class="stat-box">120</span></p>
            <p>ผู้ชมทั้งหมด : <span class="stat-box">1201</span></p>
        </div>
    </div>

    <div class="footer-copyright">
        Copyright Department of Airports, Thailand, 2021. All Rights Reserved
    </div>
</footer>