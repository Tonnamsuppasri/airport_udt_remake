<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
    @media (max-width: 768px) {
        .blue-box {
            font-size: 1rem;
            padding: 8px 15px;
        }
    }


    @media (max-width: 576px) {
        .blue-box {
            font-size: 0.9rem;
            padding: 5px 10px;
        }
    }
    .faq-container {
        max-width: 1214px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        font-size: 26px;
        position: relative;
        padding-left: 20px;
    }

    .highlight-bar {
        position: absolute;
        width: 4px;
        height: 20px;
        background-color: #f4c900;
        left: 0;
        top: 5px;
    }

    .accordion-item {
        border: 1px solidrgb(102, 102, 102);
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .accordion-button {
        background-color: #ffffff;
        color: #333;
        font-weight: 500;

    }

    .accordion-button::after {
        transform: rotate(0deg);
        transition: transform 0.2s;
    }

    .accordion-button:not(.collapsed)::after {
        transform: rotate(180deg);
    }

    .accordion-body {
        background-color: #fff;
        font-size: 0.95rem;
        color: #555;
    }

    .faq-header {
        display: flex;
        justify-content: space-between; 
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .home {
        display: flex; 
        align-items: center;
    }

    .home a {
        text-decoration: none;
        font-size: 16px;
        margin-right: 5px;
    }

    .img-fluid {
        width: 100%;
        object-fit: contain;
        object-position: center top;
        filter: brightness(50%);
    }

    .blue-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 82, 170, 0.7);
        color: white;
        padding: 10px 20px;
        font-size: 30px;
        text-align: center;
        white-space: nowrap;
    }

    .image-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        max-height: 250px;
    }

    .nav-underline .nav-link {
        color: #000;
    }

    .nav-underline .nav-link.active {
        color: #0d6efd;
    }

</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
    <div class="image-container">
          <img src="assets/images/airport-pic.jpg" class="img-fluid" alt="FAQ Image">
          <div class="blue-box">คำถามที่พบบ่อย</div>
    </div>

    <div class="faq-container">

    <ul class="nav nav-underline">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">ประวัติความเป็นมา</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">ข้อมูลทั่วไป</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">ผู้บริหารท่าอากาศยานอุดรธานี</a>
    </li>
    </ul>
  </div>

    <hr class="mb-4">

    <div class="faq-container">
      <div class="faq-header">
        <h1><span class="highlight-bar"></span>FAQ ยอดนิยม</h1>
      <div class="home">
        <a href="#"><i class="bi bi-house-door"></i></a> > คำถามที่พบบ่อย
      </div>
    </div>
    <div class="accordion" id="accordion">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            <i class="bi bi-chat-left-text-fill me-2 text-dark"></i>
              แนะนำ-ติชมหรือสอบถามข้อมูลต่างๆ
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordion">
            <div class="accordion-body">
              คำตอบ
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <i class="bi bi-chat-left-text-fill me-2 text-dark"></i>
              ฉันลืมของหรือทำของหาย ฉันจะติดต่อใคร
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion">
            <div class="accordion-body">
              คำตอบ
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <i class="bi bi-chat-left-text-fill me-2 text-dark"></i>
              ถ้าหากเที่ยวบินดีเลย์หรือยกเลิก
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion">
            <div class="accordion-body">
              คำตอบ
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