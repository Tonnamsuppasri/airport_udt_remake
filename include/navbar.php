<style>
        .navbar {
            background-color: #155B99;
            padding-bottom: 0; 
        }
        .navbar-nav .nav-link {
            font-size: 16px;
            color: white !important;
            border-bottom: 3px solid transparent; 
        }
        .navbar-brand {
            color: white;
            font-weight: bold;
            font-size: 18px;
        }

        .header-top {
            background-color: #155B99;
            padding: 20px 20px;
            color: white;
        }

        .header-logo img {
            margin-right: 10px;
            height: 60.89;
            width: 60.89;
        }

        .lang-login {
            text-align: right;
        }

        .lang-login a {
            color: white;
            font-size: 14px;
        }

        .airport-name .thai-name {
            font-size: 18.45px;
            font-weight: bold;
        }

        .airport-name .english-name {
            font-size: 11.07px;
        }

        .airport-center {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .header-btn-group .btn {
            font-size: 14px;
            padding: 5px 10px;
        }

        .header-container {
            position: relative;
        }

        .separator-bottom {
            border-bottom: 1px solid #ffffff4d;
        }

        .lang-login a,
        .lang-login .dropdown > a {
            color: white;
            font-size: 16px;

        }
        .btn {
            border-radius: 0 !important;
        }   

        .vr {
            height: 26px;
            width: 2px;    
            vertical-align: middle; 
            margin-right: 15px;
        }

        @media (max-width: 991.98px) {
            .airport-center {
                position: static;
                transform: none;
                justify-content: center;
                margin-top: 10px;
            }
            .header-container {
                flex-wrap: wrap;
                text-align: center;
            }
            .lang-login {
                width: 100%;
                margin-top: 10px;
                text-align: center;
            }
        }

        .header-top .airport-center img {
            height: 60px;
            width: 60px;
            margin-right: 10px;
        }

        .navbar-nav .nav-link:hover {
            border-bottom: 3px solid #FECD22;
        }

        .dropdown-menu {
            width: 300px;
            border-radius: 2px;
            max-height: 475px;
            overflow-y: auto;
        }
        .dropdown-menu::-webkit-scrollbar {
            width: 4px; 
        }

        .dropdown-menu::-webkit-scrollbar-thumb {
            background-color:rgb(32, 4, 58); /* สีของตัว scrollbar */
            border-radius: 3px;
        }
        .dropdown-menu::-webkit-scrollbar-track {
            background-color:rgb(126, 126, 126); /* สีของ track */
        }

        .dropdown-menu h1 {
            font-size: 20px;
            color:rgb(136, 136, 136);
            margin-left: 20px;
            position: relative;
        }

        .dropdown-menu h1 .highlight-bar {
            position: absolute;
            width: 4px;
            height: 20px;
            background-color: #f4c900;
            left: 0;
            top: 1px;
        }
</style>

<div class="header-top separator-bottom">
    <div class="container-fluid header-container d-flex justify-content-between align-items-center">
        <!-- Left buttons -->
        <div class="header-btn-group d-flex">
            <!-- ท่าอากาศยาน dropdown -->
            <div class="dropdown">
                <button class="btn btn-warning d-flex align-items-center px-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-airplane-engines me-2"></i> ท่าอากาศยาน
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
                <button class="btn btn-outline-light d-flex align-items-center px-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    เที่ยวกับเรา
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

        <!-- Right section -->
        <div class="lang-login">
            <a href="#"><i class="bi bi-facebook"></i></a>
            
          
            <a class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-globe"></i> TH
            </a>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">TH</button></li>
                <li><button class="dropdown-item" type="button">EN</button></li>
            </ul>

            <span class="vr"></span>
    

            <a href="#"><i class="bi bi-person-circle"></i> เข้าสู่ระบบ</a>
        </div>
    </div>
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">หน้าแรก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">เที่ยวบิน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">คำแนะนำผู้โดยสาร</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">สิ่งอำนวยความสะดวก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ข่าวประชาสัมพันธ์</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
