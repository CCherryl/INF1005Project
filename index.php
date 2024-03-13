<body>
    <?php
    include "php/inc/head.inc.php";
    include "php/inc/header.inc.php";
    ?>

      <!-- ======= Gallery Section HEADER PROMO ======= -->
<section id="gallery" class="gallery section-bg">

        <div class="section-header">
          <h2>Promotions</h2>
          <p>Current <span>Promotions</span></p>
        </div>


  <br>
  
  <div id="promo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#promo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#promo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#promo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner" style="height:75%">
  <div class="carousel-item active">
    <img src="assets\img\gallery\gallery-1.jpg" alt="pizza promo" class="d-block" style="width:100%">
  </div>
  <div class="carousel-item">
    <img src="assets\img\gallery\gallery-2.jpg" alt="pasta promo" class="d-block" style="width:100%">
  </div>
  <div class="carousel-item">
    <img src="assets\img\gallery\gallery-3.jpg" alt="sides promo" class="d-block" style="width:100%">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#promo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#promo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>
</section>

    <!-- ======= homemenu Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Chefs</h2>
          <p> <span>Food items</span> </p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/imgHome/pizza.png.jpeg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Pizza</h4>
                <span>Our specialty</span>
                <p>Get your pizza now.</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/imgHome/pasta.png.jpeg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Pastas</h4>
                <span>Italian Essentials</span>
                <p>Dont' miss out</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/imgHome/wings.png.jpeg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Sides</h4>
                <span>Grab a snack</span>
                <p>Best wings around</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->
    </section>
  </div> 
</body>
<?php
include "php/inc/footer.inc.php";
?>
