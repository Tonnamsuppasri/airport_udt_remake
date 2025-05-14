<style>
    .footer-topbar {
        background-color: #232162;
        color: white;
        font-family: sans-serif;
        font-size: 14px;
        padding: 20px 120px;
    }

    .footer-topbar-links {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .footer-links-left,
    .footer-links-right {
        display: flex;
        gap: 30px;
    }

    .footer-topbar a {
        color: white;
        text-decoration: none;
    }

    .footer-main {
        background-color: #014a9b;
        color: white;
        font-family: sans-serif;
        font-size: 14px;
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
    }

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
    }

    .footer-copyright {
        text-align: left;
        padding: 20px 120px;
        background-color: #014a9b;
        margin-top: 20px;
        font-size: 14px;
        border-top: 1px solid #ffffff33;
    }

    .footer-section a {
        display: block;
        color: white;
        text-decoration: none;
        padding: 6px 0;
    }

    .footer-section a:hover {
        text-decoration: underline;
    }
</style>

<div class="footer-topbar">
    <div class="footer-topbar-links">
        <div class="footer-links-left">
            <a href="policy.html">นโยบายเว็บไซต์</a>
            <a href="privacy.html">นโยบายความเป็นส่วนตัว</a>
            <a href="contact.html">ติดต่อเรา</a>
        </div>
        <div class="footer-links-right">
            <a href="sitemap.html">แผนผังเว็บไซต์</a>
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
            <p class="section-title">เที่ยวบิน</p>
            <a href="airportguide.php">คำแนะนำผู้โดยสาร</a>
            <a href="service1.php">สิ่งอำนวยความสะดวก</a>
            <a href="interest.php">สถานที่น่าสนใจ</a>
        </div>

        <div class="footer-section">
            <p class="section-title">เกี่ยวกับเรา</p>
            <a href="#">ข่าวสารประชาสัมพันธ์</a>
            <a href="#">คำถามที่พบบ่อย</a>
            <a href="#">ติดต่อเรา</a>
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