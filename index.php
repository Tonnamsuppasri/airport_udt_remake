<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>
    <body>
        <div>
            <?php include './include/navbar.php'; ?>
        </div>
        <main>
            <div class="container px-5">
                <div class="section d-flex">
                    <img src="./assets/images/logo.png" alt="logo image" />
                    <div class="col overflow-hidden grow">
                        <swiper-container class="mySwiper" pagination="true" navigation="true" loop="true">
                            <swiper-slide>
                                <img class="carousel-image" src="./assets/images/17062024111742_Picture.jpg" alt="carousel image" />
                            </swiper-slide>
                            <swiper-slide>
                                <img class="carousel-image" src="./assets/images/17062024111745_Picture.jpg" alt="carousel image" />
                            </swiper-slide>
                            <swiper-slide>
                                <img class="carousel-image" src="./assets/images/17062024111750_Picture.jpg" alt="carousel image" />
                            </swiper-slide>
                            <swiper-slide>
                                <img class="carousel-image" src="./assets/images/17062024111756_Picture.jpg" alt="carousel image" />
                            </swiper-slide>
                            <swiper-slide>
                                <img class="carousel-image" src="./assets/images/17062024111801_Picture.jpg" alt="carousel image" />
                            </swiper-slide>
                        </swiper-container>
                    </div>
                </div>
                <div class="section menu-bar my-5 row row-cols-2 row-cols-md-4">
                    <div class="col">
                        <a href="" class="d-flex flex-column justify-content-center">
                            <img class="menubar-image mx-auto mb-1" src="./assets/images/E-Library.png" alt="E-Library" />
                            <p class="mb-0 text-center text-body-secondary">ห้องสมุดออนไลน์</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="" class="d-flex flex-column justify-content-center">
                            <img class="menubar-image mx-auto mb-1" src="./assets/images/Download-Files.png" alt="Download-Files" />
                            <p class="mb-0 text-center text-body-secondary">ดาวน์โหลดเอกสาร</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="" class="d-flex flex-column justify-content-center">
                            <img class="menubar-image mx-auto mb-1" src="./assets/images/Course-Plan.png" alt="Course-Plan" />
                            <p class="mb-0 text-center text-body-secondary">แผนการเรียน</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="" class="d-flex flex-column justify-content-center">
                            <img class="menubar-image mx-auto mb-1" src="./assets/images/Course-Status.png" alt="Course-Status" />
                            <p class="mb-0 text-center text-body-secondary">สถานะของหลักสูตร</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="sub-main">
                <div class="container">
                    <div class="section row">
                        <div class="col-md-8 mb-5 mb-md-0">
                            <div class="section mb-3">
                                <div class="section-header mb-3">
                                    <h4 class="mb-0">ข่าวประชาสัมพันธ์</h4>
                                </div>
                                <div class="section-body row row-cols-1 row-cols-md-3">
                                    <div class="col mb-3 mb-md-0">
                                        <div class="card d-flex flex-column p-3 rounded bg-white h-full">
                                            <img src="./assets/images/17062024132601_Picture.png" alt="infomation images" class="mb-3" />
                                            <div class="card-body-custom grow">
                                                <p class="info-title mb-1">ข่าว</p>
                                                <p>รายละเอียดข่าว</p>
                                            </div>
                                            <div class="card-footer-custom">
                                                <button type="button" class="viewMore-btn px-3 py-1 rounded text-white">
                                                    อ่านเพิ่มเติม
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col mb-3 mb-md-0">
                                        <div class="card p-3 rounded bg-white">
                                            <img src="./assets/images/17062024132601_Picture.png" alt="infomation images" class="mb-3" />
                                            <div class="card-body-custom grow">
                                                <p class="info-title mb-1">ข่าว</p>
                                                <p>รายละเอียดข่าว</p>
                                            </div>
                                            <div class="card-footer-custom">
                                                <button type="button" class="viewMore-btn px-3 py-1 rounded text-white">
                                                    อ่านเพิ่มเติม
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card p-3 rounded bg-white">
                                            <img src="./assets/images/17062024132601_Picture.png" alt="infomation images" class="mb-3" />
                                            <div class="card-body-custom grow">
                                                <p class="info-title mb-1">ข่าว</p>
                                                <p>รายละเอียดข่าว</p>
                                            </div>
                                            <div class="card-footer-custom">
                                                <button type="button" class="viewMore-btn px-3 py-1 rounded text-white">
                                                    อ่านเพิ่มเติม
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section d-flex">
                                <a href="" class="view-btn">
                                    ดูทั้งหมด
                                    <span class="view-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1.25em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H6q-.425 0-.712-.288T5 12t.288-.712T6 11h5V6q0-.425.288-.712T12 5t.713.288T13 6v5h5q.425 0 .713.288T19 12t-.288.713T18 13h-5v5q0 .425-.288.713T12 19t-.712-.288T11 18z"/></svg>
                                    </span>
                                </a>
                            </div>
                        </div>  
                        <div class="col-md-4">
                            <div class="section mb-3">
                                <div class="section-header mb-3">
                                    <h4 class="mb-0">วิดีโอแนะนำ</h4>
                                </div>
                                <div class="section-body">
                                    <video controls style="width: 100%; height: auto;">
                                        <source src="./assets/video/17062024112307.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            <div class="section d-flex">
                                <a href="" class="view-btn">
                                    ดูทั้งหมด
                                    <span class="view-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1.25em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H6q-.425 0-.712-.288T5 12t.288-.712T6 11h5V6q0-.425.288-.712T12 5t.713.288T13 6v5h5q.425 0 .713.288T19 12t-.288.713T18 13h-5v5q0 .425-.288.713T12 19t-.712-.288T11 18z"/></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div>
            <?php include 'include/footer.php'; ?>
        </div>
    </body>
    <script>
        const swiperEl = document.querySelector('swiper-container');
        const swiperParams = {
            slidesPerView: 1,
            on: {
                init() {
                    // ...
                },
            },
        };
        Object.assign(swiperEl, swiperParams);
        swiperEl.initialize();
    </script>
</html>