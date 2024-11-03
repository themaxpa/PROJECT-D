<?php
include '../connection/dbconnection.php';
include './UserHeader.php';
?>
<style>

  .iframe-map iframe{
    width: 100%;
    height:50vh;
  }
  .container {
    max-width: 1170px;
    margin: auto;
    margin-bottom: 50px;
}
.img-underline{
  height:3vh;
  width:auto;
}

.ContactUs{
  background-image: url('../assets/img/phone393/ph10.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  object-fit:cover;
  width: auto;
  height: max-content;
}
.container{
  background-color: transparent;
}
.services .icon-box {
    padding: 60px 30px;
    transition: all ease-in-out 0.3s;
    background:transparent;
    backdrop-filter:blur(65px);
    box-shadow: 0px 5px 90px 0px rgba(110, 123, 131, 0.1);
    border-radius: 18px;
    border-bottom: 5px solid #fff;
}
.services .icon-box:hover {
    transform: translateY(-10px);
    border-color:#20232b;
}
.section-title p {
    margin-bottom: 65px;
    margin-top: -90px;
    padding-left: 300px;
    font-size: 25px;
}

/* Media query */
@media (max-width: 480px) {
  .section-title p {
    margin-bottom: 0;
    padding-left: 25px;
    font-size: 15px;
    margin-bottom: 15px;
    
}
}
</style>
<div class="ContactUs">
<div class="header-filler" style="background-color:transparent"></div>

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <h2 class="h1-txt">Services</h2>
      <p class="p-txt">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dribbble"></i></div>
          <h4><a href="">Track Rental Booking</a></h4>
          <p>An option for individuals or organizations to book the race track for private events, testing sessions, or other activities.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4><a href="">Booking Calendar</a></h4>
          <p> A feature that allows users to view the availability of the race track for rental on specific dates. This calendar should be easy to navigate and user-friendly</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-tachometer"></i></div>
          <h4><a href="">Magni Dolores</a></h4>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-world"></i></div>
          <h4><a href="">Nemo Enim</a></h4>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-slideshow"></i></div>
          <h4><a href="">Booking Calendar</a></h4>
          <p> Include a visible calendar on the track rental page that allows users to select their preferred date and view availability at a glance.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-arch"></i></div>
          <h4><a href="">Divera don</a></h4>
          <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
        </div>
      </div>

    </div>
  </div>
</section><!-- End Services Section -->



<?php
include './footer.php';
?>