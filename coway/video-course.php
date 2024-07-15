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


    <div class="video-course">
        <div class="head">
            <div class="d-flex justify-content-between align-item-center">
                <a href="course-detail.php">
                    <button type="button" class="btn btn-dark"><i class="bi bi-arrow-left mx-2"></i>Go Back</button>
                </a>
                <button type="button" class="btn btn-warning"><i class="bi bi-pencil-square mx-2"></i>จดบันทึก</button>
            </div>
        </div>

        <div class="video">
            <img src="assets/images/video.png" alt="" srcset="">
        </div>

        <div class="form mb-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="note">
                        <div class="title">
                            <span>เขียนบันทึก</span>
                        </div>

                        <div class="content">
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="group">
                            <button type="button" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="history-note">
                        <div class="title">
                            <span>โน๊ตของคุณ</span>
                        </div>
                        <div class="detail">
                            <div class="list">
                                <span class="time">01:00</span>
                                <span class="text">เขียน 1</span>
                            </div>
                            <div class="list">
                                <span class="time">02:00</span>
                                <span class="text">เขียน 2</span>
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