<!DOCTYPE html>
<html lang="en">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php include 'include/head.php';
if ($langId == 1) {
    $course = "หลักสูตรที่เปิดสอน";
    $detail1 = "สปาเพื่อสุขภาพ";
    $detail2 = "สปาเพื่อความงาม";
    $detail3 = "สปาขั้นสูง";
    $allcourse = "หลักสูตรทั้งหมด";
    $click = "สนใจเรียนคอร์สออนไลน์คลิ๊ก!";
    $reviwe = "ความคิดเห็นจากผู้เรียน";
} else {
    $course = "COURSE";
    $detail1 = "Health Spa Course";
    $detail2 = "Beauty Spa Course";
    $detail3 = "Advanced Spa";
    $allcourse = "All courses";
    $click = "สนใจเรียนคอร์สออนไลน์คลิ๊ก!";
    $reviwe = "REVIEW";
}
?>

<body>

    <section class="pur-menu">
        <div class="content-main">
            <div class="head">
                <span>Our Menu</span>
            </div>
            <div class="">
                <div class="owl-carousel owl-theme owl-carousel-one">
                    <div class="item">
                        <a href="login.php">
                            <div class="wrap-hover">
                                <img src="assets/images/Learning.png" class="">
                                <div class="group">
                                    <img src="assets/images/our1.png" class="">
                                    <p>Learning</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="login.php">
                            <div class="wrap-hover">
                                <img src="assets/images/Course.png" class="">
                                <div class="group">
                                    <img src="assets/images/our2.png" class="">
                                    <p>Course</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="login.php">
                            <div class="wrap-hover">
                                <img src="assets/images/Meeting.png" class="">
                                <div class="group">
                                    <img src="assets/images/our3.png" class="">
                                    <p>Meetingg</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="login.php">
                            <div class="wrap-hover">
                                <img src="assets/images/Event.png" class="">
                                <div class="group">
                                    <img src="assets/images/our4.png" class="">
                                    <p>Event</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="login.php">
                            <div class="wrap-hover">
                                <img src="assets/images/Live.png" class="">
                                <div class="group">
                                    <img src="assets/images/our5.png" class="">
                                    <p>Live</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="login.php">
                            <div class="wrap-hover">
                                <img src="assets/images/Chat.png" class="">
                                <div class="group">
                                    <img src="assets/images/our6.png" class="">
                                    <p>Chat</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <?php include 'teestmicro.php'; ?>

                </div>
            </div>
        </div>
    </section>

    <script>
        $('.owl-carousel-one').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: false,
            // center: true,
            items: 5,
            responsive: {
                600: {
                    items: 4
                }
            },
            stagePadding: 120,
        })
    </script>

    <section class="our-menu">
        <div class="content-main">
            <div class="head">
                <span>Courses</span>
                <a href="login.php">
                    <button type="button" class="btn btn-primary">View more</button>
                </a>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="img">
                                <img src="assets/images/course-1.png" class="card-img-top" alt="...">
                            </div>
                            <div class="detail">
                                <p>Course</p>
                                <span>Pellentesque elit tellus pulvinar velit urna vitae massa.</span>
                            </div>
                            <div class="footer-card">
                                <a href=""><i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="img">
                                <img src="assets/images/course-1.png" class="card-img-top" alt="...">
                            </div>
                            <div class="detail">
                                <p>Course</p>
                                <span>Pellentesque elit tellus pulvinar velit urna vitae massa.</span>
                            </div>
                            <div class="footer-card">
                                <a href=""><i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="img">
                                <img src="assets/images/course-1.png" class="card-img-top" alt="...">
                            </div>
                            <div class="detail">
                                <p>Course</p>
                                <span>Pellentesque elit tellus pulvinar velit urna vitae massa.</span>
                            </div>
                            <div class="footer-card">
                                <a href=""><i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Live">
        <div class="content-main">
            <div class="head">
                <span>Live</span>
                <a href="login.php">
                    <button type="button" class="btn btn-primary">View more</button>
                </a>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/images/live1.png" class="card-img-top" alt="...">
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/images/live2.png" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Live">
        <div class="content-main">
            <div class="head">
                <span>Recommended Video</span>
                <a href="login.php">
                    <button type="button" class="btn btn-primary">View more</button>
                </a>
            </div>
            <div class="body">
                <!--  <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="assets/images/live2.png" class="card-img-top" alt="...">
                    </div>
                    <div class="item">
                        <img src="assets/images/live2.png" class="card-img-top" alt="...">
                    </div>
                    <div class="item">
                        <img src="assets/images/live2.png" class="card-img-top" alt="...">
                    </div>
                </div> -->
                <section class="splide" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide"> <iframe width="600" height="300" src="https://www.youtube.com/embed/wmjePXVOVWc" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </li>
                            <li class="splide__slide"> <iframe width="600" height="300" src="https://www.youtube.com/embed/F5-82oN9I-A" title="สำนักงานเลขาธิการสภาผู้แทนราษฎร : หลักสูตรค่านิยมองค์กร บทที่ ๑ มีจิตบริการ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </li>
                            <li class="splide__slide"> <iframe width="600" height="300" src="https://www.youtube.com/embed/_7QKS5oS01Q" title="สำนักงานเลขาธิการสภาผู้แทนราษฎร : หลักสูตรค่านิยมองค์กร บทที่ ๕ ถือหลักพอเพียง" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </section>


    <?php include 'include/footer.php'; ?>

</body>

<script>
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