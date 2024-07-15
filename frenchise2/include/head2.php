<?php
session_start();

if (!empty($_POST['lang'])) {
    $_SESSION['lang'] = $_POST['lang'];
}

if (empty($_SESSION['lang']) || $_SESSION['lang'] == 1) {
    $_SESSION['lang'] = 1;
    $flag = 'thflag.png';
    $langId = 1;
    $home = 'หน้าเเรก';
    $aboutus = 'เกี่ยวกับเรา';
    $allcourse = 'หลักสูตร';
    $product7 = 'ผลิตภัณฑ์สปา';
    $gallery = 'แกลเลอรี';
    $contactus = 'ติดต่อเรา';
} else {
    $_SESSION['lang'] = 2;
    $flag = 'enflag.png';
    $langId = 2;
    $home = 'Home';
    $aboutus = 'About us';
    $allcourse = 'Course';
    $product7 = 'Product';
    $gallery = 'Gallery';
    $contactus = 'Contact us ';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <link rel="stylesheet" href="assets/fonts/db/stylesheet.css">
    <link rel="stylesheet" href="assets/style.css">

    <link rel="stylesheet" href="assets/bootstrap5.0.2/css/bootstrap.min.css">

    <link href="assets/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="assets/fontawesome/css/brands.css" rel="stylesheet">
    <link href="assets/fontawesome/css/solid.css" rel="stylesheet">


    <link href="assets/splide-4/dist/css/splide.min.css" rel="stylesheet">

    <script src="assets/splide-4/dist/js/splide.min.js"></script>
    <script src="assets/bootstrap5.0.2/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="assets/bootstrap5.0.2/js/bootstrap.min.js"></script> -->


    <link rel="stylesheet" href="assets/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/dist/assets/owl.theme.default.min.css">

    <script src="assets\owlcarousel\docs\assets\vendors\jquery.min.js"></script>
    <script src="assets\owlcarousel\dist\owl.carousel.min.js"></script>

</head>

<style>
    .banner-home {
        position: relative;
        padding-bottom: 10rem;
    }

    .owl-carousel {
        z-index: 5;
    }

    .navbar-header .img1 {
        position: absolute;
        bottom: 0;
        width: 100%;
        z-index: 1;
        animation-name: clound2;
        animation-duration: 7s;
        animation-iteration-count: infinite;
    }

    .navbar-header .img2 {
        position: absolute;
        bottom: 0;
        width: 100%;
        z-index: 0;
        animation-name: clound1;
        animation-duration: 7s;
        animation-iteration-count: infinite;
    }

    @keyframes clound1 {
        0% {
            bottom: 0;
            bottom: 10px;
        }

        25% {
            bottom: 10px;
            bottom: 0px;
        }

        50% {
            bottom: 0;
            bottom: 10px;
        }

        75% {
            bottom: 10px;
            bottom: 0px;
        }

        100% {
            bottom: 0;
            bottom: 10px;
        }
    }

    @keyframes clound2 {
        0% {
            bottom: 0;
            bottom: -10px;
        }

        25% {
            bottom: -10px;
            bottom: 0px;
        }

        50% {
            bottom: 0;
            bottom: -10px;
        }

        75% {
            bottom: -10px;
            bottom: 0px;
        }

        100% {
            bottom: 0;
            bottom: -10px;
        }
    }
</style>

<body>
    <section class="navbar-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.png" alt="" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-center" id="navbarNavDropdown" style="">
                <ul class="navbar-nav" id="menu-nav">
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
</body>

<script>
    
    $('#menu-nav>.nav-item').each((_index, list) => {
        let link = $(list).find('a')
        console.log(link)
        if (link.attr('href')) {
            link_href = link.attr('href');
            if ('/coway/' + link_href == window.location.pathname) {
                link.addClass('active');
            }
        }
    })

    function changeLng(id) {
        $.post("", {
                lang: id,
            },
            function(data, status) {
                location.reload();
            });
    }

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
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
</script>