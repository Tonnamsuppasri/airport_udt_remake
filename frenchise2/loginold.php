<!DOCTYPE html>
<html lang="en">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php include 'include/head.php';
?>

<style>
    .navbar-header {
        display: none;
    }

    .login-main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: linear-gradient(180deg, #4CA9D9 0%, #7EE0FF 74.48%);
        width: 100%;
        margin: auto;
    }

    .wrap-input input {
        background-color: #fff0 !important;
        border-top: none !important;
        border-left: none !important;
        border-right: none !important;
        color: #fff !important;
    }

    .wrap-input .form-floating>label {
        color: #fff;
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
        color: #fff;
        font-size: 20px;
    }

    .forgot a {
        color: #FFEB83 !important;
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

    .btn-primary {
        background: #fff0 !important;
        border: 1px solid #fff !important;
        padding: 6px 48px;
        border-radius: 24px;
    }

    .logologin {
        position: absolute;
        top: 36px;
        right: 40px;
    }
</style>


<body>

    <section class="login-main">
        <img class="logologin" src="assets/images/logo-login.png" class="">
        <div class="wrap-center text-center">
            <p>E-learning</p>
            <div class="wrap-input">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
            </div>
            <div class="wrap">
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
                <a href="index.php">
                    <button type="button" class="btn btn-primary">Login</button>
                </a>
            </div>

        </div>
        <img class="img1" src="assets/images/login-clound1.png" class="">
        <img class="img2" src="assets/images/login-clound2.png" class="">
    </section>

</body>

<script>
    AOS.init();
</script>

</html>