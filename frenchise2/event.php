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

    <div class="modal fade modal-calendar" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body ">
                    <p>Confirm registration</p>
                    <div class="wrap-btn mt-2">
                        <button type="button" class="btn btn-danger mx-1" data-bs-dismiss="modal">Cancel</button>
                        <button id="myButton" type="button" class="btn btn-success mx-1" data-bs-dismiss="modal">Confirm</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="event">



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
                            <a class="nav-link active" href="event.php">Event</a>
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
            <div class="back-page mb-2">
                <div class="content-main m-0">
                    <a href="learning.php" class="d-flex">
                        <i class="bi bi-arrow-left mx-2"></i><span>Go Back</span>
                    </a>
                </div>
            </div>

            <div class="content-main m-0">
                <div class="head text-dark mb-0">
                    <span class="text-dark">Event</span>
                </div>
            </div>

            <div class="bredcum-main">
                <div class="content-main m-0">
                    <div class="wrap">
                        <span>All</span>
                        <span class="active"> <i class="bi bi-dot"></i>2567</span>
                    </div>
                </div>
            </div>

            <div class="content-main mt-3">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="img">
                                    <img src="assets/images/event1.png" alt="" srcset="">
                                </div>
                                <div class="body">
                                    <div class="name">
                                        <span>Name</span>
                                    </div>
                                    <div class="location">
                                        <span>Location : </span>
                                    </div>
                                </div>

                                <div class="choice">
                                    <span class="title">ต้องการลงทะเบียนเพื่อเข้าร่วม :</span>
                                    <div class="wrap">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                เข้าร่วม
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                ไม่เข้าร่วม
                                            </label>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="button" class="btn btn-success">ลงทะเบียนเข้าร่วมสำเร็จ</button>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="img">
                                    <img src="assets/images/event2.png" alt="" srcset="">
                                </div>
                                <div class="body">
                                    <div class="name">
                                        <span>Name</span>
                                    </div>
                                    <div class="location">
                                        <span>Location : </span>
                                    </div>
                                </div>

                                <div class="choice">
                                    <span class="title">ต้องการลงทะเบียนเพื่อเข้าร่วม :</span>
                                    <div class="wrap">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                เข้าร่วม
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                ไม่เข้าร่วม
                                            </label>
                                        </div>
                                    </div>

                                    <div class="text-center" id="myDiv">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Confirm</button>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'include/footer.php'; ?>

</body>

<script>
    // select the button and the div
    const button = document.getElementById('myButton');
    const div = document.getElementById('myDiv');

    // define the function to change the HTML content
    function changeContent() {
        div.innerHTML = '<button type="button" class="btn btn-success">ลงทะเบียนเข้าร่วมสำเร็จ</button>';
    }

    // add event listener to the button
    button.addEventListener('click', changeContent);
</script>

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