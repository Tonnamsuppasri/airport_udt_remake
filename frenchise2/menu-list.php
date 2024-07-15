<!DOCTYPE html>
<html lang="en">


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
<style>
    .menu-list{
        border-radius: 10px;
        padding: 13px 18px;
        /* gap: 1rem; */
    }
    .menu-list .col{
        padding: 5px;
    }
    .card-list{
        background: #F8F8F8;
        border-radius: 6px;
        padding: 10px 15px;
    }
    .card-text-title{
        color: #241442;
        text-wrap: nowrap;
    }
    .card-text-title-custom{
        color: #241442;
        line-height: 1;
        text-wrap: nowrap;
    }
    .card-icons img{
        width: 45px;
        height: auto;
        filter: drop-shadow(0 10px 8px rgb(0 0 0 / 0.04)) drop-shadow(0 4px 3px rgb(0 0 0 / 0.1));
    }
    .card-icons{
        margin-right: 8px;
    }
</style>

<body>
    <div class="d-flex justify-content-center my-5 px-4">
        <div class="menu-list bg-white shadow overflow-hidden row row-cols-1 row-cols-sm-2 row-cols-md-5">
            <div class="col">
                <div class="card-list px-3 py-2 d-flex align-items-center">
                    <div class="card-icons">
                        <img src="./assets/images/span.rt-icon-home.png" alt="Home icons"/>
                    </div>
                    <div class="card-texts">
                        <p class="card-text-title-custom mb-0 fw-bolder">แฟรนไชส์<br>มาใหม่</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-list px-3 py-2 d-flex align-items-center">
                    <div class="card-icons">
                        <img src="./assets/images/span.rt-icon-business.png" alt="Business icons"/>
                    </div>
                    <div class="card-texts">
                        <p class="card-text-title mb-0 fw-bolder">ลงทุนต่ำ</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-list px-3 py-2 d-flex align-items-center">
                    <div class="card-icons">
                        <img src="./assets/images/span.rt-icon-development.png" alt="Development icons"/>
                    </div>
                    <div class="card-texts">
                        <p class="card-text-title mb-0 fw-bolder">โปรโมชั่น</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-list px-3 py-2 d-flex align-items-center">
                    <div class="card-icons">
                        <img src="./assets/images/span.rt-icon-finance.png" alt="Finance icons"/>
                    </div>
                    <div class="card-texts">
                        <p class="card-text-title mb-0 fw-bolder">สุดยอด</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-list px-3 py-2 d-flex align-items-center">
                    <div class="card-icons">
                        <img src="./assets/images/span.rt-icon-top10.png" alt="Top10 icons"/>
                    </div>
                    <div class="card-texts">
                        <p class="card-text-title mb-0 fw-bolder">10 อันดับ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<?php include 'include/footer.php'; ?>



</html>