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
</style>

<div class="modal fade modal-calendar" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body ">
                <img src="assets/images/calendar.png" alt="">
                <p>ยืนยันการเรียนหลักสูตรพิเศษ</p>
                <p>”ABCD”</p>
                <div class="wrap-btn">
                    <button type="button" class="btn btn-danger mx-1" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="button" class="btn btn-success mx-1" data-bs-dismiss="modal">ตกลง</button>
                </div>
            </div>

        </div>
    </div>
</div>

<body>
    <div class="course">
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
                            <a class="nav-link" href="course.php">Course</a>
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
                        <span class="head mb-0">My Playlist</span>
                    </div>
                    <div class="time">
                        <div class="colum">
                            <div class="wrap">
                                <div class="time-count">
                                    20
                                </div>
                                <div class="text">
                                    Hour
                                </div>
                            </div>
                        </div>
                        <div class="colum">
                            <div class="wrap">
                                <div class="time-count">
                                    12
                                </div>
                                <div class="text">
                                    Minutes
                                </div>
                            </div>
                        </div>
                        <div class="colum">
                            <div class="wrap">
                                <div class="time-count">
                                    45
                                </div>
                                <div class="text">
                                    Seconds
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bredcum-main">
                <div class="content-main m-0">
                    <div class="wrap">
                        <span class="active"> <i class="bi bi-dot"></i> All</span>
                    </div>
                </div>
            </div>

            <section class="course mt-5">
                <div class="content-main mt-3">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <a href="course-detail.php">
                                        <div class="img-like-course">
                                            <img src="assets/images/course-1.png" class="card-img-top" alt="...">
                                            <div class="like-course">
                                                <i class="bi bi-heart-fill"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="detail">
                                        <p>Course</p>
                                        <span>Pellentesque elit tellus pulvinar velit urna vitae massa.</span>
                                    </div>
                                    <div class="footer-card">
                                        <div class="progress-bar horizontal">
                                            <div class="progress-track">
                                                <div class="progress-fill" style="width: 75%;">
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-progressbar">75%</span>
                                        <a href=""><i class="bi bi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <a href="course-detail.php">
                                        <div class="img-like-course">
                                            <img src="assets/images/course-1.png" class="card-img-top" alt="...">
                                            <div class="like-course">
                                                <i class="bi bi-heart-fill"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="detail">
                                        <p>Course</p>
                                        <span>Pellentesque elit tellus pulvinar velit urna vitae massa.</span>
                                    </div>
                                    <div class="footer-card">
                                        <div class="progress-bar horizontal">
                                            <div class="progress-track">
                                                <div class="progress-fill" style="width: 75%;">
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-progressbar">75%</span>
                                        <a href=""><i class="bi bi-chevron-right"></i></a>
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