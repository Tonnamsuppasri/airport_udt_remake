<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>
<style>
    body{
        background-image: url("./assets/images/background.png");
        background-repeat: repeat;
        background-color: rgba(243, 243, 243, 1);
    }
    .login-card{
        background-color: #fff;
        border-radius: 10px;
        padding: 30px 60px;
        max-width: 480px;
        width: 100%;
        margin: 0 auto;
    }
    .login-card h3{
        font-weight: 600;
        font-size: 23px;
    }
    
    input{
        width: 100%;
        border-radius: 4px !important;
        border: 2px solid #ddd !important;
        padding: 6px 12px;
        display: block;
        color: #555;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        transition: all .2s ease-in-out ;
        outline: none;
    }
    input:focus {
        border: 2px solid #105cb2 !important;
        box-shadow: 0px 0px 12px -5px #2070CA;
    }
    .input-group lable{
        font-weight: 600 !important;
    }
    a.forgot-password{
        color: #105cb2 !important;
    }
    a:hover {
        color: #0E4E97 !important;
    }
    .btn-submit{
        display: block;
        padding: 6px 12px;
        border-radius: 5px;
        border: none;
        width: 100%;
        color: #fff;
        background: #105DB3;
        font-size: 20px;
    }
    .logo-section img{
        max-width: 250px;
        width: 100%;
        height: auto;
    }
</style>
<body>
    <main class="container pt-5">
        <div class="logo-section mb-5 d-flex justify-content-center">
            <img src="./assets/images/logo.png" />
        </div>
        <div class="login-card">
            <div class="login-card-header">
                <h3 class="text-center">เข้าสู่ระบบ / Login</h3>
            </div>
            <div class="login-card-body mb-3">
                <div class="input-group mb-3">
                    <lable class="mb-1">ชื่อผู้ใช้ / Username</lable>
                    <input type="text" placeholder="ชื่อผู้ใช้ / Username" />
                </div>
                <div class="input-group">
                    <lable class="mb-1">รหัสผ่าน / Password</lable>
                    <input type="password" placeholder="รหัสผ่าน / Password" />
                </div>
            </div>
            <div class="login-card-footer">
                <a href="" class="forgot-password">
                    ลืมรหัสผ่าน / Forgot Password
                </a>
                <button type="sumbit" class="btn-submit mt-3">
                    เข้าสู่ระบบ / Login
                </button>
            </div>
        </div>
    </main>
</body>

</html>