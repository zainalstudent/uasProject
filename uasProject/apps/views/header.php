<?php
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kelas Terbuka</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <style>
      .nav-link {
        color: #fff;
        font-weight: bold;
      }
      h1 {
        font-weight: bold;
        color: #fff;
      }
      .lead {
        color: #fff;
      }
    </style>
  </head>
  <body>
    /* Navbar */
    <nav class="navbar navbar-expand-lg" style="background-color: #ff7300">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="assets/Logo Brand.png" alt="" width="191" height="29" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="#navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Beasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kelas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Webinar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Forum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Roadmap</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Daftar</a>
            </li>
            <button
              class="btn btn-primary"
              style="
                background-color: #fff;
                border-color: #fff;
                color: #ff7300;
                width: 83px;
                height: 40px;
                font-weight: bold;
              "
              type="button"
            >
              Masuk
            </button>
          </ul>
        </div>
      </div>
    </nav>
    /* End-Navbar */

    /* Jumbotron */
    <div class="container-fluid" style="background-color: #ff7300">
      <div class="container">
        <div class="row">
          /* Tag-Jumbotron */
          <div class="col-md-6">
            <div class="jumbotron" style="margin-top: 70px">
              <h1>Mulai Kelas Terbuka</h1>
              <h1>dan Siap Jadi Talenta</h1>
              <h1>Indonesia</h1>
              <p class="lead" style="margin-top: 10px">
                Tempat paling asik belajar programming
              </p>
              <div
                style="
                  width: 100px;
                  height: 4px;
                  background-color: #fff;
                  margin-bottom: 50px;
                  margin-top: -9px;
                "
              ></div>
              <a
                class="btn btn-primary btn-lg"
                style="
                  background-color: #fff;
                  border-color: #fff;
                  color: #ff7300;
                  width: 171px;
                  height: 42px;
                  font-weight: bold;
                  font-size: 18px;
                "
                href="#"
                role="button"
                >Mulai Sekarang</a
              >
            </div>
          </div>
          /* EndTag-Jumbotron */
          /* Hero-Jumbotron */
          <div class="col-md-6">
            <img src="assets/heroweb.png" alt="" width="582px" height="597px" />
          </div>
          /* EndHero-Jumbotron */
        </div>
      </div>
    </div>
    /* End-Jumbotron */

    /* Slider-Banner */
    <div class="container-fluid pb-4 mb-4" style="background-color: #ff7300">
      <div class="row">
        <div class="col">
          <div
            id="carouselExampleInterval"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img
                  src="assets/Rectangle 6.png"
                  class="d-block w-100"
                  alt="Slide 1"
                  style="
                    width: 1196px;
                    height: 325px;
                    border: 2px solid #ff7300;
                    border-radius: 2;
                  "
                />
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img
                  src="assets/download.jpeg"
                  class="d-block w-100"
                  alt="Slide 1"
                  style="
                    width: 1196px;
                    height: 325px;
                    border: 2px solid #ff7300;
                    border-radius: 2;
                  "
                />
              </div>
              <div class="carousel-item">
                <img
                  src="assets/Rectangle 6.png"
                  class="d-block w-100"
                  alt="Slide 1"
                  style="
                    width: 1196px;
                    height: 325px;
                    border: 2px solid #ff7300;
                    border-radius: 2;
                  "
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleInterval"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleInterval"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    /* EndSlider-Banner */
?>
