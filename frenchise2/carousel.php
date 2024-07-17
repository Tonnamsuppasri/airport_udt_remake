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
    }
</style>

<body>


    <div class="carousel-section py-3 owl-carousel">
        <div class="card border border-0"> 
            <img src="./assets/images/carousel/image-1.png" alt="image-1" />
        </div>
        <div class="card border border-0"> 
            <img src="./assets/images/carousel/image-2.png" alt="image-2" />
        </div>
        <div class="card border border-0"> 
            <img src="./assets/images/carousel/image-3.png" alt="image-3" />
        </div>
        <div class="card border border-0"> 
            <img src="./assets/images/carousel/image-4.png" alt="image-4" />
        </div>
        <div class="card border border-0"> 
            <img src="./assets/images/carousel/image-5.png" alt="image-5" />
        </div>
        <div class="card border border-0"> 
            <img src="./assets/images/carousel/image-6.png" alt="image-6" />
        </div>
        <div class="card border border-0"> 
            <img src="./assets/images/carousel/image-7.png" alt="image-7" />
        </div>
        <div class="card border border-0"> 
            <img src="./assets/images/carousel/image-8.png" alt="image-8" />
        </div>
    </div>



</body>

<?php include 'include/footer.php'; ?>

<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,
            stagePadding: 50,
            margin: 26,
            nav: false,
            dots: false,
            responsive:{
                0:{
                    items:2
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