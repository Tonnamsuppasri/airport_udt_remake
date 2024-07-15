<!DOCTYPE html>
<html lang="en">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php include 'include/head3.php';
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

<style>
    .wrapbgindex {
        background-image: url(assets//images/bg-index.png) !important;
        background-position: center;
    }

    .content-main .body {
        background-image: none !important;
    }
    .navbar {
        background: linear-gradient(180deg, #5BB9E5 0%, #E0F8FE 791.5%) !important;
    }
</style>

<body>
    <div class="wrapbgindex">
        <section class="pur-menu">
            <div class="content-main">
                <div class="head">
                    <span>Our Menu</span>
                </div>
                <div class="">
                    <div class="owl-carousel carousel-one owl-theme">
                        <div class="item" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                            <div class="wrap-hover">
                                <img src="assets/images/Learning.png" class="">
                                <div class="group">
                                    <img src="assets/images/our1.png" class="">
                                    <p>Learning</p>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1200">
                            <a href="course.php">
                                <div class="wrap-hover">
                                    <img src="assets/images/Course.png" class="">
                                    <div class="group">
                                        <img src="assets/images/our2.png" class="">
                                        <p>Course</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1400">
                            <a href="meeting.php">
                                <div class="wrap-hover">
                                    <img src="assets/images/Meeting.png" class="">
                                    <div class="group">
                                        <img src="assets/images/our3.png" class="">
                                        <p>Meeting</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1600">
                            <a href="event.php">
                                <div class="wrap-hover">
                                    <img src="assets/images/Event.png" class="">
                                    <div class="group">
                                        <img src="assets/images/our4.png" class="">
                                        <p>Event</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1800">
                            <a href="Live.php">
                                <div class="wrap-hover">
                                    <img src="assets/images/Live.png" class="">
                                    <div class="group">
                                        <img src="assets/images/our5.png" class="">
                                        <p>Live</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item" data-aos="fade-right" data-aos-delay="300" data-aos-duration="2000">
                            <a href="chat.php">
                                <div class="wrap-hover">
                                    <img src="assets/images/Chat.png" class="">
                                    <div class="group">
                                        <img src="assets/images/our6.png" class="">
                                        <p>Chat</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="our-menu">
            <div class="content-main">
                <div class="head">
                    <span>Courses</span>
                    <a href="course.php">
                        <button type="button" class="btn btn-primary">View more</button>
                    </a>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                            <div class="card">
                                <a href="course-detail.php">
                                    <div class="img">
                                        <img src="assets/images/course-1.png" class="card-img-top" alt="...">
                                    </div>
                                </a>
                                <div class="detail">
                                    <p>Course</p>
                                    <span>Pellentesque elit tellus pulvinar velit urna vitae massa.</span>
                                </div>
                                <div class="footer-card">
                                    <a href=""><i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
                            <div class="card">
                                <a href="course-detail.php">
                                    <div class="img">
                                        <img src="assets/images/course-1.png" class="card-img-top" alt="...">
                                    </div>
                                </a>
                                <div class="detail">
                                    <p>Course</p>
                                    <span>Pellentesque elit tellus pulvinar velit urna vitae massa.</span>
                                </div>
                                <div class="footer-card">
                                    <a href=""><i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
                            <div class="card">
                                <a href="course-detail.php">
                                    <div class="img">
                                        <img src="assets/images/course-1.png" class="card-img-top" alt="...">
                                    </div>
                                </a>
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
                    <a href="live.php">
                        <button type="button" class="btn btn-primary">View more</button>
                    </a>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                            <img src="assets/images/live1.png" class="card-img-top" alt="...">
                        </div>
                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1200">
                            <img src="assets/images/live2.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="Live" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
            <div class="content-main">
                <div class="head">
                    <span>Recommended Video</span>
                    <a href="video-course.php">
                        <button type="button" class="btn btn-primary">View more</button>
                    </a>
                </div>
                <div class="body">
                    <section class="splide" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide"> <img src="assets/images/recom1.png" class="card-img-top" alt="...">
                                </li>
                                <li class="splide__slide"> <img src="assets/images/recom2.png" class="card-img-top" alt="...">
                                </li>
                                <li class="splide__slide"> <img src="assets/images/recom3.png" class="card-img-top" alt="...">
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>


    <?php include 'include/footer.php'; ?>

</body>

<script>
    $('.carousel-one').owlCarousel({
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
</script>

<script>
    AOS.init();
</script>

</html>