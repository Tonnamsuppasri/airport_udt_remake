<style>
        .index-navbar {
            background-color: #014A9B;
        }
        .index-navbar h1 {
            font-size: 26px;
            position: relative;
            padding-left: 20px;
        }
        .index-navbar .navbar {
            padding-bottom: 0; 
            padding-top: 0;
            border: none !important;
            box-shadow: none !important;
        }
        .index-navbar .navbar-nav .nav-link {
            margin: 10px 20px 0 20px;
            font-size: 20px;
            color: white !important;
            border-bottom: 3px solid transparent; 
            transition: border-bottom 0.3s ease;
        }

        .index-navbar .header-top {
            padding: 5px 20px;
            color: white;
            display: flex;
        }

        .index-navbar .lang-login {
            text-align: right;
        }

        .index-navbar .lang-login a {
            color: white;
            font-size: 18px;
        }
        .index-navbar .lang-login .dropdown-menu img {
            width: 20px;
            height: 15px;
            margin-right: 5px;
        }

        .index-navbar .airport-name .thai-name {
            font-size: 22.45px;
            font-weight: bold;
        }

        .index-navbar .airport-name .english-name {
            font-size: 15.75px;
        }

        .index-navbar .airport-center {
            position: relative;
            display: flex;
            align-items: center;
        }

        .index-navbar .header-btn-group .btn {
            font-size: 18px;
            padding: 8px 10px;
        }

        .index-navbar .separator-bottom {
            border-bottom: 1px solid #ffffff4d;
        }
        .index-navbar .lang-login {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 10px;
            height: 48px;
            border-radius: 4px;
        }
        .index-navbar .lang-login a,
        .index-navbar .lang-login .dropdown > a {
            color: white;
            font-size: 20x;

        }

        .index-navbar .lang-login .dropdown-item {
            color: black;
        }
        .index-navbar .btn {
            border-radius: 0 ;
        }   

        .index-navbar .vr {
            height: 30px;
            width: 2px;    
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 15px;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

        .index-navbar .header-top .airport-center img {
            height: 80x;
            width: 80px;
            margin-right: 10px;
        }
        .index-navbar .navbar-nav .nav-link.active {
            border-bottom: 3px solid #FECD22;
        }

        .index-navbar .navbar-nav .nav-link:hover {
            border-bottom: 3px solid #FECD22;
        }

        .index-navbar .dropdown-menu {
            width: 300px;
            border-radius: 2px;
            max-height: 475px;
            overflow-y: auto;
        }
        .index-navbar .dropdown-menu::-webkit-scrollbar {
            width: 4px; 
        }

        .index-navbar .dropdown-menu::-webkit-scrollbar-thumb {
            background-color:rgb(32, 4, 58);
            border-radius: 3px;
        }
        .index-navbar .dropdown-menu::-webkit-scrollbar-track {
            background-color:rgb(126, 126, 126);
        }

        .index-navbar .dropdown-menu h1 {
            font-size: 24px;
            color:rgb(136, 136, 136);
            margin-left: 20px;
            position: relative;
        }

        .index-navbar .dropdown-menu h1 .highlight-bar {
            position: absolute;
            width: 4px;
            height: 20px;
            background-color: #f4c900;
            left: 0;
            top: 1px;
        }

        .index-navbar .lang-login .dropdown-menu {
            width: 20px;
        }

        .index-navbar .navbar-toggler {
            border: none;
            background-color: #F8C71B;
            width: 120px;
            height: 100%;
            border-radius: 0;
            position: relative;
            top: 0;
            box-sizing: border-box;
        }

        .index-navbar .navbar-toggler:hover {
            background-color:rgb(252, 226, 135);
        }
        
        .index-navbar .navbar-toggler i {
            color:rgb(0, 0, 0);
            font-size: 60px;
        }
        .index-navbar .main-navbar-menu {
            justify-content: center;
            width: 100%;
        }

        .icon-down,
        .icon-down-2 {
            position: relative;
            display: inline-block;
            width: 24px;
            height: 24px;
            margin-left: 8px;
        }

        .icon-down .bi-circle,
        .icon-down-2 .bi-circle {
            font-size: 20px;
            position: absolute;
            top: -1px;
            left: 0;
        }

        .icon-down .bi-caret-down-fill,
        .icon-down-2 .bi-caret-down-fill {
            position: absolute;
            top: 64%;
            left: 42%;
            transform: translate(-50%, -50%);
            font-size: 13px;
        }

        .icon-down  {
            color: black;
        }

        .icon-down-2 {
            color: white;
        }

        .dropdown .btn:hover .icon-down-2 {
            color: black;
        }
         @media (max-width: 991px) {
            .index-navbar .airport-center {
                margin: 20px 0;
            }
            .index-navbar .header-container {
                justify-content: flex-start !important;
                 padding-right: 0 !important;
            }
            .index-navbar .navbar-toggler {
                margin-left: auto;
            }


            .index-navbar .header-top {
                padding: 0;
                margin: 0;
            }
            .index-navbar .header-top .header-dropdown .dropdown {
                display: none;
            }
            .index-navbar .header-top .lang-login {
                display: none;
            }
            .index-navbar .separator-bottom {
                border-bottom: none;
            }
            .icon-down .bi-circle,
            .icon-down-2 .bi-circle {
                top: 6px;
            }

            .icon-down .bi-caret-down-fill,
            .icon-down-2 .bi-caret-down-fill {
                top: 90%;
            }
            .navbar .navbar-collapse .d-lg-none {
            display: flex !important;
            flex-direction: row !important;
            gap: 0px;
            justify-content: center;
        }
        .navbar .navbar-collapse .d-lg-none .dropdown.mb-2 {
            margin-bottom: 0 !important;
            width: 300px;
        }
        
        .navbar .navbar-collapse .d-lg-none .lang-login {
            justify-content: center;
            align-items: center;
        } 
        }
</style>
<div class="index-navbar">
    <div class="header-top separator-bottom">
        <div class="container-fluid header-container d-flex justify-content-between align-items-center">
            <!-- Left buttons -->
            <div class="header-btn-group d-flex header-dropdown">
                <!-- ท่าอากาศยาน dropdown -->
                <div class="dropdown">
                    <button class="btn btn-warning d-flex align-items-center px-3 " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-airplane-engines me-2"></i> ท่าอากาศยาน 
                        <div class="icon-down">
                            <i class="bi bi-circle"></i>
                            <i class="bi bi-caret-down-fill"></i>
                        </div>
                    </button>
                    <ul class="dropdown-menu">
                        <h1><span class="highlight-bar"></span>ภาคเหนือ</h1>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                        <hr>
                        <h1><span class="highlight-bar"></span>ภาคตะวันออกเฉียงเหนือ</h1>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                        <hr>
                        <h1><span class="highlight-bar"></span>ภาคใต้</h1>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                        <hr>
                    </ul>
                </div>

                <!-- เที่ยวกับเรา dropdown -->
                <div class="dropdown">
                    <button class="btn btn-outline-light d-flex align-items-center px-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        เกี่ยวกับเรา
                        <div class="icon-down-2">
                            <i class="bi bi-circle"></i>
                            <i class="bi bi-caret-down-fill"></i>
                        </div>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">...</a></li>
                        <li><a class="dropdown-item" href="#">...</a></li>
                    </ul>
                </div>
            </div>

            <!-- Center logo and name -->
            <div class="d-flex align-items-center airport-center">
                <img src="assets/images/logo-airport.png" alt="logo">
                <div class="airport-name">
                    <div class="thai-name">ท่าอากาศยานนานาชาติอุดรธานี</div>
                    <div class="english-name">UdonThani International Airport</div>
                </div>
            </div>

            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <!-- Right section -->
            <div class="lang-login">
                <a href="#"><i class="bi bi-facebook"></i></a>
                
            
                <div class="dropdown">
                    <a class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-globe"></i> TH
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="langDropdown">
                        <li><a class="dropdown-item" href="#"><img src="assets/images/17062024105346_lang.png" alt="TH"> ไทย</a></li>
                        <li><a class="dropdown-item" href="#"><img src="assets/images/17062024105202_lang.png" alt="EN"> English</a></li>
                    </ul>
                </div>  

                <span class="vr"></span>
        

                <a href="#"><i class="bi bi-person-circle"></i> เข้าสู่ระบบ</a>
            </div>
        </div>
    </div>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- ✅ Right buttons: ภาษาและเข้าสู่ระบบ -->
        <div class="d-lg-none mt-3">
            <div class="lang-login">
                <a href="#"><i class="bi bi-facebook"></i></a>
                
            
                <div class="dropdown">
                    <a class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-globe"></i> TH
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="langDropdown">
                        <li><a class="dropdown-item" href="#"><img src="assets/images/17062024105346_lang.png" alt="TH"> ไทย</a></li>
                        <li><a class="dropdown-item" href="#"><img src="assets/images/17062024105202_lang.png" alt="EN"> English</a></li>
                    </ul>
                </div>

                <span class="vr"></span>
        

                <a href="#"><i class="bi bi-person-circle"></i> เข้าสู่ระบบ</a>
            </div>
        </div>

        <!-- ✅ Left buttons: แสดงเฉพาะบนมือถือ -->
        <div class="d-lg-none mt-3">
            <div class="dropdown mb-2">
                <button class="btn btn-warning w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-airplane-engines me-2"></i> ท่าอากาศยาน
                        <div class="icon-down">
                            <i class="bi bi-circle"></i>
                            <i class="bi bi-caret-down-fill"></i>
                        </div>
                </button>
                <ul class="dropdown-menu">
                        <h1><span class="highlight-bar"></span>ภาคเหนือ</h1>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                        <hr>
                        <h1><span class="highlight-bar"></span>ภาคตะวันออกเฉียงเหนือ</h1>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                        <hr>
                        <h1><span class="highlight-bar"></span>ภาคใต้</h1>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                        <hr>
                    </ul>
            </div>

            <div class="dropdown mb-2">
                <button class="btn btn-outline-light w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    เที่ยวกับเรา
                    <div class="icon-down-2">
                        <i class="bi bi-circle"></i>
                        <i class="bi bi-caret-down-fill"></i>
                    </div>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">...</a></li>
                    <li><a class="dropdown-item" href="#">...</a></li>
                </ul>
            </div>
        </div>
        <!-- เมนูหลัก -->
        <div class="mx-auto d-flex">
            <ul class="navbar-nav mb-2 mb-lg-0 main-navbar-menu d-flex justify-content-center">
                <li class="nav-item"><a class="nav-link" href="index.php">หน้าแรก</a></li>
                <li class="nav-item"><a class="nav-link" href="flight-info.php">เที่ยวบิน</a></li>
                <li class="nav-item"><a class="nav-link" href="airportguide.php">คำแนะนำผู้โดยสาร</a></li>
                <li class="nav-item"><a class="nav-link" href="service1.php">สิ่งอำนวยความสะดวก</a></li>
                <li class="nav-item"><a class="nav-link" href="t">ข่าวประชาสัมพันธ์</a></li>
            </ul>
        </div>
    </div>
</nav>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // ✅ ทำให้ลิงก์ navbar active ตรงตามหน้า
        const currentPath = window.location.pathname.split("/").pop();
        const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

        navLinks.forEach(link => {
            const href = link.getAttribute("href");
            if (
                (currentPath === "" && href === "index.php") ||
                (href === currentPath)
            ) {
                link.classList.add("active");
            } else {
                link.classList.remove("active");
            }
        });

        // ✅ สลับ caret icon (ลง/ขึ้น) สำหรับ dropdown
        const dropdownToggles = document.querySelectorAll('[data-bs-toggle="dropdown"]');

        dropdownToggles.forEach(button => {
            const caretIcon = button.querySelector('.bi-caret-down-fill, .bi-caret-up-fill');

            if (!caretIcon) return;

            button.addEventListener('click', function () {
                setTimeout(() => {
                    const parentDropdown = button.closest('.dropdown');
                    const isShown = parentDropdown.classList.contains('show');

                    if (isShown) {
                        // เปลี่ยนจาก caret-down → caret-up
                        caretIcon.classList.remove('bi-caret-down-fill');
                        caretIcon.classList.add('bi-caret-up-fill');
                    } else {
                        // เปลี่ยนจาก caret-up → caret-down
                        caretIcon.classList.remove('bi-caret-up-fill');
                        caretIcon.classList.add('bi-caret-down-fill');
                    }
                }, 100); // ให้ Bootstrap มีเวลาดำเนินการ dropdown ก่อน
            });
        });
    });
</script>