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
                        <span _ngcontent-xyq-c41=""><svg _ngcontent-xyq-c41="" 
                        xmlns="http://www.w3.org/2000/svg" width="25" height="25" 
                        viewBox="0 0 25 25" fill="none"><g _ngcontent-xyq-c41="" 
                        clip-path="url(#clip0_1_1263)"><path _ngcontent-xyq-c41="" 
                        d="M24.6103 4.6439L24.3155 5.07412L24.6061 4.64077C23.7499 
                        4.0543 22.8572 3.9814 21.9551 4.4168L19.003 5.8043L18.9155 
                        5.8564L17.0884 4.90117C16.3238 4.3918 15.4519 4.12305 14.5488 
                        4.12305C14.5478 4.12305 14.5478 4.12305 14.5478 4.12305L13.0051 
                        4.1668C12.7842 4.17407 12.5905 4.31992 12.5238 4.53032C12.4572 
                        4.74072 12.5311 4.97197 12.7092 5.1043L15.953 7.53657L13.3998 
                        8.86367C13.0863 8.83345 12.1394 8.60117 11.7176 8.49805C11.1311 
                        8.3543 11.0405 8.33345 10.9373 8.33345H9.8957C9.67592 8.33345 
                        9.47905 8.47197 9.40507 8.6793C9.3311 8.88657 9.39672 9.11782 
                        9.56757 9.25742C10.4759 9.99907 12.5092 11.5334 13.7603 
                        11.5334C13.9634 11.5334 14.1457 11.4928 14.2988 11.4032L24.6186 
                        6.1564C24.8593 5.98765 25.0009 5.70327 24.9999 5.39805C24.9989 
                        5.0918 24.852 4.80952 24.6103 4.6439ZM13.803 10.4866C13.552 
                        10.5793 12.7332 10.2001 11.7822 9.5856C13.2894 9.9502 13.5343 
                        9.9585 13.7822 9.8377L17.1665 8.07935C17.3259 7.996 17.4311 
                        7.8377 17.4457 7.65957C17.4592 7.48145 17.3822 7.30747 17.2384 
                        7.2002L14.5259 5.16582L14.5624 5.1648C15.2447 5.1648 15.9186 
                        5.37314 16.5572 5.79502L18.6905 6.9148C18.852 6.99917 19.0447 
                        6.99292 19.2009 6.9002L22.404 5.35747C22.9249 5.10435 23.3863 
                        5.121 23.8457 5.38662L13.803 10.4866Z" fill="black"></path>
                        <path _ngcontent-xyq-c41="" d="M3.64585 6.2502H5.7292C6.0167 6.2502 
                        6.25005 6.01685 6.25005 5.72935C6.25005 5.44185 6.0167 5.2085 5.7292 
                        5.2085H3.64585C3.35835 5.2085 3.125 5.44185 3.125 5.72935C3.125 6.01685 
                        3.35835 6.2502 3.64585 6.2502Z" fill="black"></path><path _ngcontent-xyq-c41="" 
                        d="M7.81382 21.8751H9.89717C10.1847 21.8751 10.418 21.6417 10.418 
                        21.3542V19.2708C10.418 18.9833 10.1847 18.75 9.89717 18.75H7.81382C7.52632
                         18.75 7.29297 18.9833 7.29297 19.2708V21.3542C7.29297 21.6417 7.52632 
                         21.8751 7.81382 21.8751ZM8.33467 19.7917H9.37632V20.8334H8.33467V19.7917Z" 
                         fill="black"></path><path _ngcontent-xyq-c41="" d="M5.72915 10.4165H3.64585C3.35835
                          10.4165 3.125 10.6499 3.125 10.9374V13.0207C3.125 13.3082 3.35835 13.5415 3.64585 
                          13.5415H5.7292C6.0167 13.5415 6.25005 13.3082 6.25005 13.0207V10.9374C6.25 10.6499 
                          6.01665 10.4165 5.72915 10.4165ZM5.20835 12.4999H4.16665V11.4582H5.2083V12.4999H5.20835Z" 
                          fill="black"></path><path _ngcontent-xyq-c41="" d="M13.0208 21.8751H15.1042C15.3917 21.8751 
                          15.625 21.6417 15.625 21.3542V19.2708C15.625 18.9833 15.3917 18.75 15.1042 18.75H13.0208C12.7333 
                          18.75 12.5 18.9833 12.5 19.2708V21.3542C12.5 21.6417 12.7333 21.8751 13.0208 21.8751ZM13.5417 
                          19.7917H14.5833V20.8334H13.5417V19.7917V19.7917Z" fill="black"></path><path _ngcontent-xyq-c41="" 
                          d="M23.4375 16.6667H20.8333V15.1042C20.8333 14.8167 20.6 14.5833 20.3125 14.5833H14.0625C13.775
                           14.5833 13.5416 14.8167 13.5416 15.1042V16.6667H8.33335V8.85415C8.33335 8.56665 8.1 8.3333
                            7.8125 8.3333H7.49375L8.30625 5.8937C8.32397 5.84058 8.33335 5.78535 8.33335
                             5.7291V3.64585C8.33335 3.35835 8.1 3.125 7.8125 3.125H5.20835V0.52085C5.20835
                              0.23335 4.975 0 4.6875 0C4.4 0 4.16665 0.23335 4.16665 0.52085V3.125H1.5625C1.275
                               3.125 1.04165 3.35835 1.04165 3.64585V5.7292C1.04165 5.78545 1.05103 5.84067 1.06875 5.8938L1.88125 8.3334H1.5625C1.275 8.3334 1.04165 8.56675 1.04165 8.85425V16.6667H0.52085C0.23335 16.6666 0 16.9 0 17.1875V24.4792C0 24.7667 0.23335 25 0.52085 25H23.4375C23.725 25 23.9583 24.7667 23.9583 24.4792V17.1875C23.9583 16.9 23.725 16.6667 23.4375 16.6667ZM14.5833 15.625H19.7917V16.6667H14.5833V15.625ZM2.08335 9.37603H2.6042C2.77192 9.37603 2.9292 9.29478 3.0271 9.15937C3.12397 9.0229 3.15107 8.8479 3.09795 8.6896L2.08335 5.64482V4.16665H7.2917V5.64375L6.2771 8.68853C6.22295 8.8479 6.25 9.0229 6.34795 9.1583C6.44585 9.29478 6.60317 9.37495 6.77085 9.37495H7.2917V16.6666H2.08335V9.37603ZM20.8333 23.9583H18.75V19.7917H20.8333V23.9583V23.9583ZM22.9166 23.9583H21.875V19.2708C21.875 18.9833 21.6416 18.75 21.3541 18.75H18.2291C17.9416 18.75 17.7083 18.9833 17.7083 19.2708V23.9583H1.04165V17.7083H22.9166V23.9583V23.9583Z" fill="black"></path><path _ngcontent-xyq-c41="" d="M2.60288 21.8751H4.68623C4.97373 21.8751 5.20708 21.6417 5.20708 21.3542V19.2708C5.20708 18.9833 4.97373 18.75 4.68623 18.75H2.60288C2.31538 18.75 2.08203 18.9833 2.08203 19.2708V21.3542C2.08208 21.6417 2.31538 21.8751 2.60288 21.8751ZM3.12373 19.7917H4.16538V20.8334H3.12373V19.7917Z" fill="black"></path></g><defs _ngcontent-xyq-c41=""><clipPath _ngcontent-xyq-c41="" id="clip0_1_1263"><rect _ngcontent-xyq-c41="" width="25" height="25" fill="white"></rect></clipPath></defs></svg></span>
                                ท่าอากาศยาน 
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
                    <span _ngcontent-xyq-c41=""><svg _ngcontent-xyq-c41="" 
                        xmlns="http://www.w3.org/2000/svg" width="25" height="25" 
                        viewBox="0 0 25 25" fill="none"><g _ngcontent-xyq-c41="" 
                        clip-path="url(#clip0_1_1263)"><path _ngcontent-xyq-c41="" 
                        d="M24.6103 4.6439L24.3155 5.07412L24.6061 4.64077C23.7499 
                        4.0543 22.8572 3.9814 21.9551 4.4168L19.003 5.8043L18.9155 
                        5.8564L17.0884 4.90117C16.3238 4.3918 15.4519 4.12305 14.5488 
                        4.12305C14.5478 4.12305 14.5478 4.12305 14.5478 4.12305L13.0051 
                        4.1668C12.7842 4.17407 12.5905 4.31992 12.5238 4.53032C12.4572 
                        4.74072 12.5311 4.97197 12.7092 5.1043L15.953 7.53657L13.3998 
                        8.86367C13.0863 8.83345 12.1394 8.60117 11.7176 8.49805C11.1311 
                        8.3543 11.0405 8.33345 10.9373 8.33345H9.8957C9.67592 8.33345 
                        9.47905 8.47197 9.40507 8.6793C9.3311 8.88657 9.39672 9.11782 
                        9.56757 9.25742C10.4759 9.99907 12.5092 11.5334 13.7603 
                        11.5334C13.9634 11.5334 14.1457 11.4928 14.2988 11.4032L24.6186 
                        6.1564C24.8593 5.98765 25.0009 5.70327 24.9999 5.39805C24.9989 
                        5.0918 24.852 4.80952 24.6103 4.6439ZM13.803 10.4866C13.552 
                        10.5793 12.7332 10.2001 11.7822 9.5856C13.2894 9.9502 13.5343 
                        9.9585 13.7822 9.8377L17.1665 8.07935C17.3259 7.996 17.4311 
                        7.8377 17.4457 7.65957C17.4592 7.48145 17.3822 7.30747 17.2384 
                        7.2002L14.5259 5.16582L14.5624 5.1648C15.2447 5.1648 15.9186 
                        5.37314 16.5572 5.79502L18.6905 6.9148C18.852 6.99917 19.0447 
                        6.99292 19.2009 6.9002L22.404 5.35747C22.9249 5.10435 23.3863 
                        5.121 23.8457 5.38662L13.803 10.4866Z" fill="black"></path>
                        <path _ngcontent-xyq-c41="" d="M3.64585 6.2502H5.7292C6.0167 6.2502 
                        6.25005 6.01685 6.25005 5.72935C6.25005 5.44185 6.0167 5.2085 5.7292 
                        5.2085H3.64585C3.35835 5.2085 3.125 5.44185 3.125 5.72935C3.125 6.01685 
                        3.35835 6.2502 3.64585 6.2502Z" fill="black"></path><path _ngcontent-xyq-c41="" 
                        d="M7.81382 21.8751H9.89717C10.1847 21.8751 10.418 21.6417 10.418 
                        21.3542V19.2708C10.418 18.9833 10.1847 18.75 9.89717 18.75H7.81382C7.52632
                         18.75 7.29297 18.9833 7.29297 19.2708V21.3542C7.29297 21.6417 7.52632 
                         21.8751 7.81382 21.8751ZM8.33467 19.7917H9.37632V20.8334H8.33467V19.7917Z" 
                         fill="black"></path><path _ngcontent-xyq-c41="" d="M5.72915 10.4165H3.64585C3.35835
                          10.4165 3.125 10.6499 3.125 10.9374V13.0207C3.125 13.3082 3.35835 13.5415 3.64585 
                          13.5415H5.7292C6.0167 13.5415 6.25005 13.3082 6.25005 13.0207V10.9374C6.25 10.6499 
                          6.01665 10.4165 5.72915 10.4165ZM5.20835 12.4999H4.16665V11.4582H5.2083V12.4999H5.20835Z" 
                          fill="black"></path><path _ngcontent-xyq-c41="" d="M13.0208 21.8751H15.1042C15.3917 21.8751 
                          15.625 21.6417 15.625 21.3542V19.2708C15.625 18.9833 15.3917 18.75 15.1042 18.75H13.0208C12.7333 
                          18.75 12.5 18.9833 12.5 19.2708V21.3542C12.5 21.6417 12.7333 21.8751 13.0208 21.8751ZM13.5417 
                          19.7917H14.5833V20.8334H13.5417V19.7917V19.7917Z" fill="black"></path><path _ngcontent-xyq-c41="" 
                          d="M23.4375 16.6667H20.8333V15.1042C20.8333 14.8167 20.6 14.5833 20.3125 14.5833H14.0625C13.775
                           14.5833 13.5416 14.8167 13.5416 15.1042V16.6667H8.33335V8.85415C8.33335 8.56665 8.1 8.3333
                            7.8125 8.3333H7.49375L8.30625 5.8937C8.32397 5.84058 8.33335 5.78535 8.33335
                             5.7291V3.64585C8.33335 3.35835 8.1 3.125 7.8125 3.125H5.20835V0.52085C5.20835
                              0.23335 4.975 0 4.6875 0C4.4 0 4.16665 0.23335 4.16665 0.52085V3.125H1.5625C1.275
                               3.125 1.04165 3.35835 1.04165 3.64585V5.7292C1.04165 5.78545 1.05103 5.84067 1.06875 5.8938L1.88125 8.3334H1.5625C1.275 8.3334 1.04165 8.56675 1.04165 8.85425V16.6667H0.52085C0.23335 16.6666 0 16.9 0 17.1875V24.4792C0 24.7667 0.23335 25 0.52085 25H23.4375C23.725 25 23.9583 24.7667 23.9583 24.4792V17.1875C23.9583 16.9 23.725 16.6667 23.4375 16.6667ZM14.5833 15.625H19.7917V16.6667H14.5833V15.625ZM2.08335 9.37603H2.6042C2.77192 9.37603 2.9292 9.29478 3.0271 9.15937C3.12397 9.0229 3.15107 8.8479 3.09795 8.6896L2.08335 5.64482V4.16665H7.2917V5.64375L6.2771 8.68853C6.22295 8.8479 6.25 9.0229 6.34795 9.1583C6.44585 9.29478 6.60317 9.37495 6.77085 9.37495H7.2917V16.6666H2.08335V9.37603ZM20.8333 23.9583H18.75V19.7917H20.8333V23.9583V23.9583ZM22.9166 23.9583H21.875V19.2708C21.875 18.9833 21.6416 18.75 21.3541 18.75H18.2291C17.9416 18.75 17.7083 18.9833 17.7083 19.2708V23.9583H1.04165V17.7083H22.9166V23.9583V23.9583Z" fill="black"></path><path _ngcontent-xyq-c41="" d="M2.60288 21.8751H4.68623C4.97373 21.8751 5.20708 21.6417 5.20708 21.3542V19.2708C5.20708 18.9833 4.97373 18.75 4.68623 18.75H2.60288C2.31538 18.75 2.08203 18.9833 2.08203 19.2708V21.3542C2.08208 21.6417 2.31538 21.8751 2.60288 21.8751ZM3.12373 19.7917H4.16538V20.8334H3.12373V19.7917Z" fill="black"></path></g><defs _ngcontent-xyq-c41=""><clipPath _ngcontent-xyq-c41="" id="clip0_1_1263"><rect _ngcontent-xyq-c41="" width="25" height="25" fill="white"></rect></clipPath></defs></svg></span>
                                ท่าอากาศยาน
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
                <li class="nav-item"><a class="nav-link" href="Press-release.php">ข่าวประชาสัมพันธ์</a></li>
            </ul>
        </div>
    </div>
</nav>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
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
    });
</script>