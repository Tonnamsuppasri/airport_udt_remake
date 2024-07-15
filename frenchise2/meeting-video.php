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
    <div class="elearning">
        <section class="navbar-header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo.png" alt="" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarNavDropdown" style="">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Learning</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">Course</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  active" href="allcourse.php">Meeting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="product.php">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="gallery.php">Live</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php">Chat</a>
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
            <div class="back-page">
                <div class="content-main m-0">
                    <a href="meeting.php" class="d-flex">
                        <i class="bi bi-arrow-left mx-2"></i><span>Go Back</span>
                    </a>
                </div>
            </div>

            <div class="content-main m-0">
                <div class="head text-dark mb-0">
                    <span class="text-dark">Meeting</span>
                </div>
            </div>

            <section class="course">
                <div class="content-main mt-3">
                <iframe width="1400" height="600" src="https://www.youtube.com/embed/wmjePXVOVWc" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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