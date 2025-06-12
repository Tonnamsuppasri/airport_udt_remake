<!DOCTYPE html>
<html lang="en">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php include 'include/head2.php'; ?>

<style>
    .content-main .body .card .footer-card a {
        width: 43px;
        height: 36px;
    }

    .navbar-header .navbar {
        background: var(--bg-header, linear-gradient(180deg, #5BB9E5 -39%, #E0F8FE 186.5%));
    }
</style>

<body>
    <div class="course-detail">
        <section class="navbar-header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo.png" alt="" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-center" id="navbarNavDropdown" style="">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="learning.php">Learning</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="course.php">Course</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="meeting.php">Meeting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="event.php">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="Live.php">Live</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Chat.php">Chat</a>
                        </li>
                    </ul>
                </div>
                <div class="menu-header">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php"><i class="bi bi-search"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php"><i class="bi bi-bell"></i></a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/user.png" class="d-block w-100">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="my-playlist.php">
                                    <div class="wrap-mene-head">
                                        <i class="bi bi-heart-fill"></i>My Playlist
                                    </div>
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="login.php">
                                    <div class="wrap-mene-head">
                                        <i class="bi bi-box-arrow-right"></i></i>Log out
                                    </div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>

        <div class="wrap-e">
            <div class="back-page" style="margin: 1rem 0 1rem 0;">
                <div class="content-main m-0">
                    <a href="" class="d-flex">
                        <i class="bi bi-arrow-left mx-2"></i><span>Go Back</span>
                    </a>
                </div>
            </div>

            <div class="content-main m-0">
                <div class="course-time">
                    <div class="my-course">
                        <span class="head mb-0">Course</span>
                    </div>
                </div>
            </div>

            <section class="course-content mt-3">
                <div class="content-main">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="img">
                                    <img src="assets/images/course-1.png" class="card-img-top" alt="...">
                                </div>
                                <div class="detail">
                                    <p>Course</p>
                                </div>
                                <div class="footer-card">
                                    <div class="progress-bar horizontal">
                                        <div class="progress-track">
                                            <div class="progress-fill" style="width: 75%;">
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-progressbar">75%</span>
                                </div>
                            </div>

                            <div class="innerdetail">
                                <div class="wrap">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>ระยะเวลา</p>
                                            <div class="icon-text">
                                                <i class="bi bi-clock"></i>
                                                <span>2 ชั่วโมง</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>จำนวนบทเรียน</p>
                                            <div class="icon-text">
                                                <i class="bi bi-journal-bookmark-fill"></i>
                                                <span>4 บทเรียน</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="innerdetail mt-4">
                                <div class="wrap">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>ผลการเรียน</p>
                                            <div class="icon-text">
                                                <span class="text-dark mt-4">ยังไม่ผ่านเงื่อนไข</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>แบบประเมินหลักสูตร</p>
                                            <div class="icon-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
                                                    <path d="M16.2476 2.5011C14.1917 2.5011 12.5024 4.19019 12.5024 6.24611V54.9912H67.4976V14.9961H58.7524C56.6966 14.9961 54.9976 13.3068 54.9976 11.2509V2.5011H16.2476ZM57.4976 3.22372V11.2509C57.4976 11.965 58.0383 12.4962 58.7524 12.4962H66.7627L57.4976 3.22372ZM19.9976 12.4962H26.2549C26.9452 12.4987 27.5025 13.0607 27.5 13.751V19.9986C27.5025 20.689 26.9452 21.2508 26.2549 21.2535H19.9976C19.3072 21.251 18.7499 20.689 18.7524 19.9986V13.751C18.7499 13.0607 19.3072 12.4987 19.9976 12.4962ZM32.5024 12.4962H49.9951C51.6992 12.4584 51.6992 15.0339 49.9951 14.9961H32.5024C30.7984 15.0339 30.7984 12.4584 32.5024 12.4962ZM6.24511 14.9986C4.18924 14.9986 2.5 16.6878 2.5 18.7437V63.7461C2.5 65.802 4.18924 67.4937 6.24511 67.4937H73.7451C75.801 67.4937 77.5 65.802 77.5 63.7461V18.7437C77.5 16.6879 75.801 14.9986 73.7451 14.9986H69.9976V19.9913H71.2427C71.4076 19.9906 71.5711 20.0227 71.7236 20.0856C71.8762 20.1484 72.0148 20.2408 72.1314 20.3575C72.2481 20.4741 72.3405 20.6127 72.4033 20.7652C72.4662 20.9178 72.4982 21.0812 72.4976 21.2462V56.2437C72.4972 56.4081 72.4645 56.5707 72.4012 56.7224C72.3379 56.8741 72.2454 57.0118 72.1288 57.1277C72.0123 57.2435 71.874 57.3353 71.7219 57.3977C71.5699 57.4601 71.407 57.4919 71.2427 57.4913H8.74756C8.41689 57.4906 8.09996 57.3589 7.86615 57.1251C7.63233 56.8912 7.50067 56.5744 7.5 56.2437V21.2462C7.49937 21.0818 7.53116 20.919 7.59354 20.767C7.65593 20.6149 7.74768 20.4766 7.86356 20.3601C7.97943 20.2435 8.11715 20.1509 8.26884 20.0876C8.42053 20.0243 8.58321 19.9916 8.74756 19.9913H10.0024V14.9986H6.24511ZM32.5024 18.7437H49.9976C51.6675 18.745 51.6675 21.2474 49.9976 21.2462H32.5024C30.8325 21.2449 30.8325 18.7425 32.5024 18.7437ZM55.0024 18.7437H59.9976C61.6675 18.745 61.6675 21.2474 59.9976 21.2462H55.0024C53.3325 21.2449 53.3325 18.7425 55.0024 18.7437ZM32.5024 26.2437H59.9976C61.6658 26.2437 61.6658 28.7462 59.9976 28.7462H32.5024C30.8341 28.7462 30.8341 26.2437 32.5024 26.2437ZM27.5684 27.4693C28.5213 27.5119 29.3013 28.7178 28.3862 29.6324L23.3838 34.6324C22.8953 35.122 22.1022 35.122 21.6138 34.6324L19.1113 32.1323C17.9297 30.9507 19.7021 29.1783 20.8838 30.3599L22.4976 31.9762L26.6138 27.8697C26.9132 27.5711 27.2507 27.4553 27.5684 27.4695V27.4693ZM32.5024 32.4985H49.9976C51.6675 32.4998 51.6675 35.0023 49.9976 35.001H32.5024C30.8325 34.9997 30.8325 32.4973 32.5024 32.4985ZM55.0024 32.4985H59.9976C61.6675 32.4998 61.6675 35.0023 59.9976 35.001H55.0024C53.3325 34.9997 53.3325 32.4973 55.0024 32.4985ZM32.5024 39.9962H59.9976C61.6675 39.9974 61.6675 42.4998 59.9976 42.4985H32.5024C30.8325 42.4973 30.8325 39.9949 32.5024 39.9962ZM19.9365 40.0056H26.2549C26.9414 40.0081 27.4975 40.5641 27.5 41.2507V47.4983C27.5025 48.1886 26.9452 48.7506 26.2549 48.7531H19.9976C19.3072 48.7506 18.7499 48.1886 18.7524 47.4983V41.2505C18.7518 40.6079 19.2373 40.0695 19.9365 40.0054V40.0056ZM32.5024 46.2505H49.9976C51.6675 46.2518 51.6675 48.7542 49.9976 48.753H32.5024C30.8325 48.7517 30.8325 46.2492 32.5024 46.2505ZM55.0024 46.2505H59.9976C61.6675 46.2518 61.6675 48.7542 59.9976 48.753H55.0024C53.3325 48.7517 53.3325 46.2492 55.0024 46.2505ZM37.5 59.9932H42.5C42.8266 60.0006 43.1373 60.1356 43.3656 60.3692C43.5939 60.6028 43.7218 60.9165 43.7218 61.2432C43.7218 61.5699 43.5939 61.8836 43.3656 62.1172C43.1373 62.3508 42.8266 62.4858 42.5 62.4932H37.5C37.3334 62.497 37.1678 62.4675 37.0128 62.4064C36.8578 62.3453 36.7166 62.2538 36.5975 62.1374C36.4784 62.021 36.3837 61.8818 36.3191 61.7282C36.2544 61.5747 36.2211 61.4098 36.2211 61.2432C36.2211 61.0766 36.2544 60.9117 36.3191 60.7582C36.3837 60.6046 36.4784 60.4655 36.5975 60.349C36.7166 60.2326 36.8578 60.1411 37.0128 60.08C37.1678 60.0189 37.3334 59.9894 37.5 59.9932ZM31.543 69.9957C31.1529 70.8617 30.6974 71.6986 30.21 72.4298C29.3014 73.7926 28.5658 74.6062 28.2007 74.9956H24.9365C23.2095 75.0754 23.328 77.578 24.9951 77.4981H54.9951C56.6622 77.4981 56.6622 74.9956 54.9951 74.9956H51.7994C51.4342 74.6063 50.6986 73.7926 49.7901 72.4298C49.3025 71.6984 48.8472 70.862 48.4571 69.9957H31.543Z" fill="#00A3E4" />
                                                </svg>
                                                <span class="btn btn-warning mt-3">ทำแบบประเมิน</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="tabpane-main">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">รายละเอียดหลักสูตร</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">รายการหลักสูตร</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <p class="mx-2 mt-3 f-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultrices lectus quis at nisl integer lorem viverra. Aenean in accumsan donec pellentesque etiam in at turpis. </p>
                                        <p class="mx-2 f-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend fames gravida lectus magna vel ipsum tincidunt. Suspendisse arcu pharetra diam tortor lectus nulla massa viverra. Est tempus, habitasse eget tortor, purus orci, nulla curabitur. Ante pharetra mi quam dui dignissim. Leo turpis venenatis tortor vitae, feugiat ut. Auctor mattis nec, amet eros, pellentesque vitae porttitor. Vel, lacus mauris commodo pellentesque facilisi enim.</p>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="list-course">
                                            <div class="title">
                                                <span>บทที่ 1</span>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-check-circle-fill"></i> <span>Pre-test</span>
                                                </div>
                                                <div class="time">
                                                    <i class="bi bi-clock"></i>
                                                    <span>30 นาที</span>
                                                    <button type="button" class="btn btn-primary">ทำข้อสอบ</button>
                                                </div>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-circle"></i> <span>วิดีโอบทที่ 1</span>
                                                </div>
                                                <div class="time">
                                                    <i class="bi bi-clock"></i>
                                                    <span>30 นาที</span>
                                                    <a href="video-course.php">
                                                        <button type="button" class="btn btn-primary">ดูวีดีโอ</button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-circle"></i> <span>Post-test</span>
                                                </div>
                                                <div class="time">
                                                    <i class="bi bi-clock"></i>
                                                    <span>30 นาที</span>
                                                    <button type="button" class="btn btn-primary">ทำข้อสอบ</button>
                                                </div>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-circle"></i> <span>แบบประเมิน</span>
                                                </div>
                                                <div class="time">
                                                    <i class="bi bi-clock"></i>
                                                    <span>30 นาที</span>
                                                    <button type="button" class="btn btn-primary">ทำแบบประเมิน</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list-course">
                                            <div class="title">
                                                <span>บทที่ 2</span>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-check-circle-fill"></i> <span>Pre-test</span>
                                                </div>
                                                <div class="time">
                                                    <i class="bi bi-clock"></i>
                                                    <span>30 นาที</span>
                                                    <button type="button" class="btn btn-primary">ทำข้อสอบ</button>
                                                </div>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-circle"></i> <span>วิดีโอบทที่ 2</span>
                                                </div>
                                                <div class="time">
                                                    <i class="bi bi-clock"></i>
                                                    <span>30 นาที</span>
                                                    <a href="video-course.php">
                                                        <button type="button" class="btn btn-primary">ดูวีดีโอ</button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-circle"></i> <span>Post-test</span>
                                                </div>
                                                <div class="time">
                                                    <i class="bi bi-clock"></i>
                                                    <span>30 นาที</span>
                                                    <button type="button" class="btn btn-primary">ทำข้อสอบ</button>
                                                </div>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-circle"></i> <span>แบบประเมิน</span>
                                                </div>
                                                <div class="time">
                                                    <i class="bi bi-lock-fill" style="margin-right: 40px; color:#999999;"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list-course">
                                            <div class="title">
                                                <span>บทที่ 3</span>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-check-circle-fill"></i> <span>Pre-test</span>
                                                </div>
                                                <div class="time">
                                                    <i class="bi bi-clock"></i>
                                                    <span>30 นาที</span>
                                                    <button type="button" class="btn btn-primary">ทำข้อสอบ</button>
                                                </div>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-circle"></i> <span>วิดีโอบทที่ 2</span>
                                                </div>
                                                <div class="time">
                                                    <i class="bi bi-clock"></i>
                                                    <span>30 นาที</span>
                                                    <a href="video-course.php">
                                                        <button type="button" class="btn btn-primary">ดูวีดีโอ</button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-circle"></i> <span>Post-test</span>
                                                </div>
                                                <div class="time">
                                                    <i class="bi bi-clock"></i>
                                                    <span>30 นาที</span>
                                                    <button type="button" class="btn btn-primary">ทำข้อสอบ</button>
                                                </div>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-circle"></i> <span>แบบประเมิน</span>
                                                </div>
                                                <div class="time">
                                                    <i class="bi bi-lock-fill" style="margin-right: 40px; color:#999999;"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list-course">
                                            <div class="title">
                                                <span>บทที่ 4</span>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-check-circle-fill"></i> <span>Pre-test</span>
                                                </div>
                                                <div class="time">
                                                    <i class="bi bi-clock"></i>
                                                    <span>30 นาที</span>
                                                    <button type="button" class="btn btn-primary">ทำข้อสอบ</button>
                                                </div>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-circle"></i> <span>วิดีโอบทที่ 2</span>
                                                </div>
                                                <div class="time">
                                                    <i class="bi bi-clock"></i>
                                                    <span>30 นาที</span>
                                                    <a href="video-course.php">
                                                        <button type="button" class="btn btn-primary">ดูวีดีโอ</button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-circle"></i> <span>Post-test</span>
                                                </div>
                                                <div class="time">
                                                    <i class="bi bi-clock"></i>
                                                    <span>30 นาที</span>
                                                    <button type="button" class="btn btn-primary">ทำข้อสอบ</button>
                                                </div>
                                            </div>
                                            <div class="list">
                                                <div class="text-icon">
                                                    <i class="bi bi-circle"></i> <span>แบบประเมิน</span>
                                                </div>
                                                <div class="time">
                                                    <button type="button" class="btn btn-primary mx-4">ทำแบบทดสอบ</button>
                                                    <i class="bi bi-lock-fill" style="margin-right: 40px; color:#999999;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php include 'include/footer.php'; ?>

</body>

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        center: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    var splide = new Splide('.splide', {
        pagination: false,
        type: 'loop',
        padding: '10rem',
        focus: 'center',
        autoWidth: true,
        perPage: 3,
        gap: '3rem',
    });

    splide.mount();


    splide.mount();

    const scrollElements = document.querySelectorAll(".js-scroll");

    const elementInView = (el, dividend = 1) => {
        const elementTop = el.getBoundingClientRect().top;

        return (
            elementTop <=
            (window.innerHeight || document.documentElement.clientHeight) / dividend
        );
    };

    const elementOutofView = (el) => {
        const elementTop = el.getBoundingClientRect().top;

        return (
            elementTop > (window.innerHeight || document.documentElement.clientHeight)
        );
    };

    const displayScrollElement = (element) => {
        element.classList.add("scrolled");
    };

    const hideScrollElement = (element) => {
        element.classList.remove("scrolled");
    };

    const handleScrollAnimation = () => {
        scrollElements.forEach((el) => {
            if (elementInView(el, 1.25)) {
                displayScrollElement(el);
            } else if (elementOutofView(el)) {
                hideScrollElement(el)
            }
        })
    }

    window.addEventListener("scroll", () => {
        handleScrollAnimation();
    });
</script>

<script>
    document.getElementById('video').play();
</script>

<!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v15.0" nonce="hVkbERF9"></script> -->

<script>
    AOS.init();
</script>

</html>