<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBn5THQjynmrMo948+4rSq0b0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
body {
            background-color: #f8f9fa; /* Light grey background */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Example font */
        }

        /* Hero section (ภาพด้านบน) */
        .hero-section {
            background-image: url('./assets/images/contact-header.jpg');  ; 
            background-size: cover;
            background-position: center;
            height: 400px; /* Adjust height as needed */
            display: flex;
            align-items: flex-end; /* จัดให้ข้อความอยู่ด้านล่าง */
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            position: relative; /* สำหรับตำแหน่งของ overlay */
        }

        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 100%); /* ไล่สีดำจางๆ ด้านล่าง */
        }


        /* Breadcrumb (ติดต่อเรา > Home) */
        .breadcrumb-section {
            display: flex;
            justify-content: flex-end;
            margin-left: 85%;
            padding: 15px 0;
        }

        /* Main content section */
        .main-content {
            padding: 40px 0;
        }

        .card-custom {
            border: none;
            border-radius: 8px;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            background-color: #fff;
            padding: 25px;
            height: 100%; /* ทำให้ card สูงเท่ากัน */
        }

        .heading-yellow-line {
            font-size: 1.5rem; /* h2 equivalent */
            font-weight: 600;
            color: #333;
            margin-bottom: 25px;
            padding-left: 15px;
            position: relative;
        }

        .heading-yellow-line::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 5px; /* ความหนาของเส้น */
            background-color: #ffc107; /* สีเหลืองของ Bootstrap */
            border-radius: 2px;
        }

        .address-info p {
            margin-bottom: 8px;
            color: #555;
        }

        .map-container {
            width: 100%;
            height: 300px; /* ปรับความสูงแผนที่ */
            border-radius: 8px;
            overflow: hidden;
            margin-top: 20px;
        }
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* Form styling */
        .form-label {
            font-weight: 500;
            color: #333;
            margin-bottom: 5px;
        }

        .form-control, .form-select {
            border-radius: 0.25rem;
            border: 1px solid #ced4da;
            padding: 0.75rem 1rem;
            font-size: 1rem;
        }
        .form-control:focus, .form-select:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13,110,253,.25);
        }

        .btn-primary {
            background-color: #007bff; /* Bootstrap blue */
            border-color: #007bff;
            padding: 0.75rem 2rem;
            border-radius: 0.25rem;
            font-size: 1.1rem;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }


</style>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
        <section class="hero-section">
        <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #0d47a1; color: white; padding: 10px; border-radius: 5px; text-align: center;"">ติดต่อเรา</h1>
    </section>

    <section class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <a href="#" class="material-symbols-outlined">home</a>  <span>></span> <span style="color: #333; margin-left: 1px;">ติดต่อเรา</span>
            </nav>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <div class="row g-4"> <div class="col-lg-6">
                    <div class="card-custom">
                        <h2 class="heading-yellow-line">ที่อยู่</h2>
                        <div class="address-info">
                            <p>224 ท่าอากาศยานนานาชาติอุดรธานี ต.หมากแข้ง อ.เมือง จ.อุดรธานี 41000</p>
                            <p>โทรศัพท์ : +66 (0) 4224-4426</p>
                            <p>โทรสาร: +66 (0) 4224-5804</p>
                        </div>
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.5138264620628!2d102.77295297498526!3d17.387111983500052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31239d88ac386879%3A0x960d0f16cb0ab983!2z4LiX4LmI4Liy4Lit4Liy4LiB4Liy4Lio4Lii4Liy4LiZ4LiZ4Liy4LiZ4Liy4LiK4Liy4LiV4Li04Lit4Li44LiU4Lij4LiY4Liy4LiZ4Li1!5e0!3m2!1sth!2sth!4v1747813096035!5m2!1sth!2sth" 
                                width="900" 
                                height="800" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                            ></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card-custom">
                        <h2 class="heading-yellow-line">แบบฟอร์มติดต่อ</h2>
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="contact-type" class="form-label">ติดต่อ</label>
                                <select class="form-select" id="contact-type" name="contact_type">
                                    <option selected disabled>เลือกหัวข้อ</option>
                                    <option value="general">สอบถามทั่วไป</option>
                                    <option value="feedback">ข้อเสนอแนะ</option>
                                    <option value="support">ติดต่อฝ่ายสนับสนุน</option>
                                </select>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">ชื่อ</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">อีเมล</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">หัวข้อ</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="details" class="form-label">รายละเอียด</label>
                                <textarea class="form-control" id="details" name="details" rows="6" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">ส่ง</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




        
        </div>
    </main>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>