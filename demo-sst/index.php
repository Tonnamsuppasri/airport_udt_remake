<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>
    <body>
        <div>
            <?php include './include/navbar.php'; ?>
        </div>
        <main>
            <div class="container">
                <div class="section d-md-flex">
                    <img src="./assets/images/logo.png" alt="logo image" class="d-none d-xl-block" />
                    <div class="col overflow-hidden grow">
                        <div id="carusel" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carusel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carusel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carusel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carusel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carusel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./assets/images/17062024111742_Picture.jpg" class="carousel-image d-block w-100" alt="carousel image">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/images/17062024111745_Picture.jpg" class="carousel-image d-block w-100" alt="carousel image">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/images/17062024111750_Picture.jpg" class="carousel-image d-block w-100" alt="carousel image">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/images/17062024111756_Picture.jpg" class="carousel-image d-block w-100" alt="carousel image">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/images/17062024111801_Picture.jpg" class="carousel-image d-block w-100" alt="carousel image">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carusel" data-bs-slide="prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M11.8 13H15q.425 0 .713-.288T16 12t-.288-.712T15 11h-3.2l.9-.9q.275-.275.275-.7t-.275-.7t-.7-.275t-.7.275l-2.6 2.6q-.3.3-.3.7t.3.7l2.6 2.6q.275.275.7.275t.7-.275t.275-.7t-.275-.7zm.2 9q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22"/></svg>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carusel" data-bs-slide="next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m.2-9l-.9.9q-.275.275-.275.7t.275.7t.7.275t.7-.275l2.6-2.6q.3-.3.3-.7t-.3-.7l-2.6-2.6q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7l.9.9H9q-.425 0-.712.288T8 12t.288.713T9 13z"/></svg>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
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
                                <a href="" class="view-btn rounded-pill">
                                    ดูทั้งหมด
                                    <span class="view-icon rounded-circle">
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
                                    <video class="shadow" controls style="width: 100%; height: 300px; background-color: #fff; overflow: hidden; border-radius: 10px;">
                                        <source src="./assets/video/17062024112307.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            <div class="section d-flex">
                                <a href="" class="view-btn rounded-pill">
                                    ดูทั้งหมด
                                    <span class="view-icon rounded-circle">
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
</html>