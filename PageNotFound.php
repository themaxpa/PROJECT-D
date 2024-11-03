<?php
include './connection/dbconnection.php';
include './header.php';
?>
<style>
  .pnf-error-box h1 {
    margin: 0 0 10px 0;
    font-size: 70px;
    font-weight: 700;
    line-height: 86px;
    color: #fff;
  }

  @media (max-width:393px) {
    .pnf-error-box h1 {
      margin: 0 0px 10px 0;
      font-size: 22px;
      font-weight: 700;
      line-height: 86px;
      color: #fff;
    }

    .pnf-error-box {
      color: #fff;
      width: 100%;
      height: 45vh;
      padding: 0px 0px 0px 0px;
      margin-left: 18px;
    }

  }


  /* button  back to home */
  /* From Uiverse.io by doniaskima */
  .btn-23,
  .btn-23 *,
  .btn-23 :after,
  .btn-23 :before,
  .btn-23:after,
  .btn-23:before {
    border: 0 solid;
    box-sizing: border-box;
  }

  .btn-23 {
    -webkit-tap-highlight-color: transparent;
    -webkit-appearance: button;
    background-color: #20232b;
    transform: skew(-20);
    background-image: none;
    color: #fff;
    cursor: pointer;
    font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
      Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
      Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
    font-size: 100%;
    font-weight: 900;
    line-height: 1.5;
    margin: 0;
    -webkit-mask-image: -webkit-radial-gradient(#000, #fff);
    padding: 0;
    text-transform: uppercase;
  }

  .btn-23:disabled {
    cursor: default;
  }

  .btn-23:-moz-focusring {
    outline: auto;
  }

  .btn-23 svg {
    display: block;
    vertical-align: middle;
  }

  .btn-23 [hidden] {
    display: none;
  }

  .btn-23 {
    border-radius: 99rem;
    border-width: 2px;
    overflow: hidden;
    padding: 0.8rem 3rem;
    position: relative;
  }

  .btn-23 span {
    display: grid;
    inset: 0;
    place-items: center;
    position: absolute;
    transition: opacity 0.2s ease;
  }

  .btn-23 .marquee {
    --spacing: 5em;
    --start: 0em;
    --end: 5em;
    -webkit-animation: marquee 1s linear infinite;
    animation: marquee 1s linear infinite;
    -webkit-animation-play-state: paused;
    animation-play-state: paused;
    opacity: 0;
    position: relative;
    text-shadow: #fff var(--spacing) 0, #fff calc(var(--spacing) * -1) 0,
      #fff calc(var(--spacing) * -2) 0;
  }

  .btn-23:hover .marquee {
    -webkit-animation-play-state: running;
    animation-play-state: running;
    opacity: 1;
  }

  .btn-23:hover .text {
    opacity: 0;
  }

  @-webkit-keyframes marquee {
    0% {
      transform: translateX(var(--start));
    }

    to {
      transform: translateX(var(--end));
    }
  }

  @keyframes marquee {
    0% {
      transform: translateX(var(--start));
    }

    to {
      transform: translateX(var(--end));
    }
  }

  /* End Button */
  body {
  background-color: #111111;
  margin: 0;
  overflow-x: hidden;
}

.pnf-home-btn {
    border-radius: 0px;
    background: transparent;
    transform: skew(171deg);
    color: #fff;
    width: 150px;
    height: 45px;
    margin: 0px 0px 0px 262px;
    padding: 9px 0px 0px 13px;
    font-size: 17px;
}
.bg {
    position: fixed;
    top: -12%;
    left: 23%;
    right: -50%;
    bottom: -50%;
    width: 5%;
    height: 1px;
    /* background: transparent url('./assets/img/bikefire.jpg') repeat 0 0; */
    background-repeat: repeat;
    animation: bg-animation .2s infinite;
    opacity: .9;
    visibility: visible;
}

@keyframes bg-animation {
    0% { transform: translate(0,0) }
    10% { transform: translate(-5%,-5%) }
    20% { transform: translate(-10%,5%) }
    30% { transform: translate(5%,-10%) }
    40% { transform: translate(-5%,15%) }
    50% { transform: translate(-10%,5%) }
    60% { transform: translate(15%,0) }
    70% { transform: translate(0,10%) }
    80% { transform: translate(-15%,0) }
    90% { transform: translate(10%,5%) }
    100% { transform: translate(5%,0) }
}
</style>



<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('./assets/img/pnf.jpg');">
  <div class="container">
    <div class="row justify-content-center">
      <div class="pnf-title">
        <h1>
          PAGE NOT FOUND (404)
        </h1>
      </div>
    </div>
  </div>
</section>
<!-- End Hero -->

<section>
    <div class="pnf-box">
      <div class="pnf-error-box">
        <h3>404, page not found</h3>
        <p>Uh oh, we can't seem to find the page you're looking for. Try going back to the previous page or see our Help Center for more infromation.</p>
        <div class="pnf-home-btn">
        <div class="bg">
          <a href="./index.php">
            <button class="btn-23">
              <span class="text">Home</span>
              <span aria-hidden="" class="marquee">Home</span>
            </button>
          </a>
        </div>
        </div>
      </div>
    </div>
</section>

<section>
  <div class="pnf-bottom">
    <marquee>
      <h5>The page you are looking for does not exist or another error occurred.</h5>
    </marquee>
  </div>
</section>









<?php
include './footer.php';
?>