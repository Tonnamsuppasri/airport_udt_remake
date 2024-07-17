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
    .card{
        box-shadow: 0px 4px 24px 0px rgba(0,0,0,0.15);
        margin: 1.5em 0;
        border-radius: 100%;
    }

    .carousel-section{
        background: rgb(0,0,96);
        background: linear-gradient(45deg, rgba(0,0,96,1) 0%, rgba(3,34,143,1) 100%);
    }
</style>

<body>


    <div class="carousel-section py-2 owl-carousel px-5">
        <div class="card border border-0"> 
            <img src="./assets/images/carousel/set-2/dernour.png" alt="dernour" />
        </div>
        <div class="card border border-0"> 
            <img src="./assets/images/carousel/set-2/chai4.png" alt="chai4" />
        </div>
        <div class="card border border-0 cale-x-125"> 
            <img src="./assets/images/carousel/set-2/chesters.png" alt="chesters" />
        </div>
        <div class="card border border-0"> 
            <img src="./assets/images/carousel/set-2/fiveStar.png" alt="fiveStar" />
        </div>
        <div class="card border border-0"> 
            <img src="./assets/images/carousel/set-2/Ozawa.png" alt="Ozawa" />
        </div>
    </div>



</body>

<?php include 'include/footer.php'; ?>

<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 26,
            stagePadding: 50,
            nav: false,
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
    });
</script>


</html>