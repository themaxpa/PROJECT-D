<?php
include './connection/dbconnection.php';
include './header.php';
?>
<style>
*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.video-hero{
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  /* border: 1px solid #fff; */
}
.content-v{
  text-align: center;
}
.background-clip{
  position: absolute;
  right: 0;
  z-index: -1;
}

.video-title{
  font-size: 90px;
  color:#fff;
}
@media (min-aspect-ratio:16/9) {
  .background-clip{
    width:100%;
    height: 100%;
  }
}

@media (max-width:393px){
  .video-title{
  font-size: 35px;
}
}
</style>


<section>
  <div class="video-hero">
  <video autoplay loop muted plays-inline class="background-clip">
      <source src="./assets/video/live-wallpaper-car-ferrari-testarossa-driving-on-the-street-1080-ytshorts.savetube.me.mp4" type="video/mp4">
    </video>
  <div class="content-v">
  <h1 class="video-title"> Initial Dream</h1>
  <a href="#">Click here</a>
  </div> 
  </div>
</section>
 

<!-- ======= Services Section ======= -->
<section>
  <div class="container">

    <div class="section-title">
      <h2 style="color: #ee2442;">Services</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dribbble"></i></div>
          <h4><a href="">Lorem Ipsum</a></h4>
          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4><a href="">Sed ut perspiciatis</a></h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
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
          <h4><a href="">Dele cardo</a></h4>
          <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
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