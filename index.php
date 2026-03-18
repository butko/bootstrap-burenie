<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Astro v5.13.2" />
    <title>Бурение скважин в ДНР</title>
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.3/examples/carousel/"
    />
    <script src="assets/js/color-modes.js"></script>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <meta name="theme-color" content="#712cf9" />
    <link href="carousel.css" rel="stylesheet" />
	<link href="custom.css" rel="stylesheet" />
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: #0000001a;
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow:
          inset 0 0.5em 1.5em #0000001a,
          inset 0 0.125em 0.5em #00000026;
      }
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
      .bd-mode-toggle .bi {
        width: 1em;
        height: 1em;
      }
      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>
  </head>
  <body>
  
<? include "header.inc" ?>	  
    
	<main>
      <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="slider_desktop" src="img/slider1.jpg">
			<img class="slider_mobile" src="img/slider-mobile1.jpg">
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Бурение</h1>
                <p class="opacity-75">
                  Бурение скважин под воду малогабаритной установкой.
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="#burenie">Подробнее</a>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="slider_desktop" src="img/slider2.jpg">
			<img class="slider_mobile" src="img/slider-mobile2.jpg">
            <div class="container">
              <div class="carousel-caption">
                <h1>Водоочистка</h1>
                <p>
                  Мы выполняем комплексную очистку воды.
                </p>
                <p><a class="btn btn-lg btn-primary" href="#vodoochistka">Подробнее</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="slider_desktop" src="img/slider3.jpg">
			<img class="slider_mobile" src="img/slider-mobile3.jpg">
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Канализация</h1>
                <p>
                  Варианты обустройства для комфортной жизни.
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="#kanalizatsiya">Подробнее</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Назад</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Вперёд</span>
        </button>
      </div>
      <!-- Marketing messaging and featurettes
  ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
			<div class="circle-image-container">
				<a href="#burenie">
					<img src="img/circle1.jpg">
				</a>
			</div>
            <h2 class="fw-normal">Бурение</h2>
            <p>
              Бурение скважин под воду малогабаритной установкой.
            </p>
            <p>
              <a class="btn btn-secondary" href="#burenie">Подробнее &raquo;</a>
            </p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
			<div class="circle-image-container">
				<a href="#vodoochistka">
					<img src="img/circle2.jpg">
				</a>
			</div>
            <h2 class="fw-normal">Водоочистка</h2>
            <p>
              Мы выполняем комплексную очистку воды.
            </p>
            <p>
              <a class="btn btn-secondary" href="#vodoochistka">Подробнее &raquo;</a>
            </p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
			<div class="circle-image-container">
				<a href="#kanalizatsiya">
					<img src="img/circle3.jpg">
				</a>
			</div>
            <h2 class="fw-normal">Канализация</h2>
            <p>
              Варианты обустройства для комфортной жизни.
            </p>
            <p>
              <a class="btn btn-secondary" href="#kanalizatsiya">Подробнее &raquo;</a>
            </p>
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider" />
		<a name="burenie">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">
              Бурение скважин малогабаритной установкой
              <!--
			  <span class="text-body-secondary">It’ll blow your mind.</span>
			  -->
            </h2>
            <p class="lead">
              Бурение скважин малогабаритной установкой (МГБУ) — это процесс, при котором для бурения скважин используют компактные мобильные машины, которые позволяют работать в условиях ограниченного пространства. Например, МГБУ применяют для бурения скважин на воду на участках с узким подъездом, минимальной площадкой под размещение и препятствиями по высоте.
            </p>
          </div>
          <div class="col-md-5">
			<img src="img/square1.jpg">
          </div>
        </div>
        <hr class="featurette-divider" />
		<a name="vodoochistka">
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">
              Водоочистка
			  <!--
              <span class="text-body-secondary"></span>
			  -->
            </h2>
            <p class="lead">
              Хотя природная вода без очистки негативно влияет на оборудование и здоровье человека, эту проблему легко решить. Наша компания предлагает услуги по комплексной очистке воды — надёжно и эффективно.
            </p>
          </div>
          <div class="col-md-5 order-md-1">
			<img src="img/square2.jpg">
          </div>
        </div>
        <hr class="featurette-divider" />
		<a name="kanalizatsiya">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">
              Канализация
			  <!--
              <span class="text-body-secondary">Checkmate.</span>
			  -->
            </h2>
            <p class="lead">
              Хотите сделать канализацию на даче? Для временного проживания подойдёт накопительный бак или простая выгребная яма. Для постоянного — лучше установить септик или биостанцию: они требуют меньше ухода.
            </p>
          </div>
          <div class="col-md-5">
			<img src="img/square3.jpg">
          </div>
        </div>
        <hr class="featurette-divider" />
        <!-- /END THE FEATURETTES -->
      </div>	  
      <!-- /.container -->
	  
<? include "footer.inc" ?>	  	  
 

  </body>
</html>