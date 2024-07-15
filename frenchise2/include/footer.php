<?php
if ($langId == 1) {
    $address = "ที่อยู่";
    $address1 = "124 ซอยลาดพร้าว 64 แยก 1";
    $address2 = "แขวงวังทองหลาง เขตวังทองหลาง";
    $address3 = "กรุงเทพมหานคร 10310";
    $contact = "ติดต่อสอบถาม";
    $followus = "ติดตามเรา";
} else {
    $address = "ADDRESS";
    $address1 = "124 Soi Ladprao 64 Lane 1,";
    $address2 = "Wangtonglang, Wangtonglang,";
    $address3 = "Bangkok 10310";
    $contact = "CONTACT US";
    $followus = "STAY CONNECTED";
}
?>

<style>
    .mystyle {
        display: block !important;
    }

    .footer {
        position: relative;
    }

    .message {
        position: absolute;
        top: -46px;
        right: 20px;
    }

    .chatbot {
        position: absolute;
        right: 16px;
        top: -539px;
    }

</style>

<footer class="footer">
    <div class="container text-center text-white">
        <i class="bi bi-c-circle"></i> <span>2023 Coway Learning</span>
    </div>

    <div class="message">
        <button class="btn btn-dark" onclick="myFunction()"><i class="bi bi-robot mx-2"></i>ติดต่อเจ้าหน้าที่</button>
    </div>
    <div id="myDIV" class="d-none chatbot">
        <img src="assets/images/chatbot.png" alt="" srcset="">
    </div>
</footer>


<script>
    function myFunction() {
        var element = document.getElementById("myDIV");
        element.classList.toggle("mystyle");
    }
</script>