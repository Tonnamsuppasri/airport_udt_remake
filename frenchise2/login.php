<!DOCTYPE html>
<html lang="en">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php include 'include/head.php';
?>

<style>
    body {
        background-image: url(assets/images/login-bg.png);
        background-size: 100% 100%;
    }

    .navbar-header {
        display: none;
    }

    .login-main {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        margin: auto;
        height: 100vh;
    }

    .btn-primary {
        border-radius: 15px !important;
        background: #00A3E4 !important;
        width: 100%;
        border: none !important;
        font-size: 22px;
    }

    .wrap-input input {
        border-radius: 15px;
        border: 1px solid #DBDBDB;
        background: #FFF;
        font-size: 22px;
    }

    .wrap-center p {
        font-size: 37px;
        color: #fff;
        margin: 0 auto 4px auto;
    }

    .login-main .wrap-center {
        width: 420px;
        z-index: 9;
    }

    .wrap {
        display: flex;
        justify-content: space-between;
        margin: 6px 0 18px 0;
        color: #00A3E4;
        font-size: 22px;
    }

    .forgot a {
        color: #ED7423 !important;
        font-size: 24px;
    }

    .login-main .img1 {
        position: absolute;
        bottom: 0;
        width: 100%;
        z-index: 3;
        animation-name: clound2;
        /* animation-duration: 2s; */
        animation-iteration-count: infinite;
    }

    .login-main .img2 {
        position: absolute;
        bottom: 0;
        width: 100%;
        z-index: 2;
        animation-name: clound1;
        animation-duration: 7s;
        animation-iteration-count: infinite;
    }

    @keyframes clound1 {
        0% {
            bottom: 0;
            bottom: 10px;
        }

        25% {
            bottom: 10px;
            bottom: 0px;
        }

        50% {
            bottom: 0;
            bottom: 10px;
        }

        75% {
            bottom: 10px;
            bottom: 0px;
        }

        100% {
            bottom: 0;
            bottom: 10px;
        }
    }

    .logologin {
        position: absolute;
        top: 36px;
        right: 40px;
    }

    .form-floatingggg .bi {
        position: absolute;
        left: 16px;
        top: 14px;
        font-size: 20px;
        color: #67C3E8;
    }

    .form-floatingggg {
        position: relative;
    }

    .form-floatingggg input{
        text-indent: 30px;

    }
</style>


<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <div class="login-main">
                    <!-- <img src="assets/images/login-bg.png" alt=""> -->
                    <div class="wrap-center text-center">
                        <img src="assets/images/login-logo2.png" alt="">
                        <div class="wrap-input">
                            <div class="form-floatingggg mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <i class="bi bi-person-circle"></i>
                                <!-- <label for="floatingInput">Username</label> -->
                            </div>
                            <div class="form-floatingggg">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <i class="bi bi-lock"></i>
                                <!-- <label for="floatingPassword">Password</label> -->
                            </div>
                        </div>
                        <div class="wrap mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>
                            <div class="forgot">
                                <a href="">Forgot password?</a>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="home.php">
                                <button type="button" class="btn btn-primary">Login</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

<script>
    AOS.init();
</script>

</html>