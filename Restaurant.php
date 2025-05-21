<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.hero {
    position: relative;
    height: 300px;
    background-image: url('./assets/images/shophero.jpg'); 
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;  
    justify-content: center;  
}

.container {
    max-width: 1440px;
    margin: 0 auto;
}


.navbar {
    display: flex;
    justify-content: flex-start; 
    align-items: center;
    background-color: #fff; 
    padding: 10px 20px; 
    border-bottom: 1px solid #eee; 
}

.nav-item {
    margin-top: 1rem;
    display: inline-block;
    margin-right: 30px; 
    position: relative; 
}

.nav-item a {
    text-decoration: none;
    color: #333; 
    font-size: 16px;
    padding-bottom: 5px; 
}

.nav-item a:hover {
    border-bottom: 3px solid #007bff;
    font-weight: bold;
}

.nav-item.active a {
    border-bottom: 2px solid #007bff;
    font-weight: bold; 
}


.breadcrumb {
    font-size: 16px;
    color: #666;
    display: flex;
    align-items: center;
    gap: 5px;
    margin-left: 85%;
}


.section-title {
    padding: 20px;
    font-size: 24px;
    border-left: 5px solid gold;
    margin: 0;
}


.blog-con {
    margin-top: 1rem;
    display: flex;
    gap: 50px;
}



.blog-item img {
    width: 300px;
    height: 300px;
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

}


.blog-item h4 {
    margin-top: 1rem;
}


.blog-item p {
    margin: 1rem 0;
}


.blog-item a {
    display: inline-flexbox;
    justify-content: end;
    color: blue;
    padding: 0.5rem 1rem;
    text-decoration: none;
    border-radius: 5px;
    margin-left: 65%;
}

.blog-footer a p {
    margin-top: 3rem;
    margin-left: 45%;
    color: black;
    position: relative;
    align-items: center;
    padding: 10px 20px;
    font-size: 24px;
    border-radius: 4px;
}


</style>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-con"></div>
                <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #0d47a1; color: white; padding: 10px; border-radius: 5px; text-align: center;"">ร้านอาหาร</h1>
            </div>
        </section>

        <div class="container">
            <div class="navbar-res">
                <div class="nav-item">
                    <a href="#">สิ่งอำนวยความสะดวก</a>
                </div>
                <div class="nav-item active">
                    <a href="#">ร้านอาหาร</a>
                </div>
                <div class="nav-item">
                    <a href="#">ร้านค้า</a>
                </div>
            </div>
            <div class="breadcrumb">
                <a href="#" class="material-symbols-outlined">home</a>  <span>></span> <span style="color: #333; margin-left: 1px;">ร้านอาหาร</span>
            </div>
        </div>

        <section class ="blog">
            <div class="container">
                <div class="blog title">
                    <h2 class="section-title">ร้านอาหาร</h2>
                </div>
                <div class="blog-con">


                <div class="card" style="width: 18rem;">
                    <img src="./assets/images/Restaurant.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">ร้านอาหารภายในอาคารผู้โดยสาร</p>
                        <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                    </div>
                </div>
                    <div class="blog-item">
                        <img src="./assets/images/Restaurant.png" class="card-img-top" alt="">
                        <p>ร้านอาหารภายในอาคารผู้โดยสาร</p>
                        <a href="#" class="btn btn-outline-primary">ดูเพิ่มเติม</a>
                    </div>

                    <div class="blog-item">
                        <img src="./assets/images/Coffee-shop.jpg" class="card-img-top" alt="">
                        <p>Coffee shop</p>
                        <a href="#" class="btn btn-outline-primary">ดูเพิ่มเติม</a>
                    </div>

                </div>

                <div class="blog-footer">
                    <a href="#" class="tab">
                        <p>Load More...</p>
                    </a>
                <div class="spinner-border text-secondary" role="status" style="margin-left: 50%; margin-top: 1rem;" >
                    <span class="visually-hidden">Loading...</span>
                </div>
                </div>
        </section>
    </main>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>