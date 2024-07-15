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



<script>
    function changeLng(id) {
        $.post("", {
                lang: id,
            },
            function(data, status) {
                location.reload();
            });
    }
</script>