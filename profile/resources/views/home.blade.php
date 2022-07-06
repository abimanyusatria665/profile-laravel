@extends('layouts.main')

@section('content')
        <div class="container">
      <div
        id="carouselExampleControls"
        class="carousel slide mt-5"
        data-bs-ride="carousel"
        data-aos="fade-left"
        data-aos-duration="1500"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="/asset/img/seulgi.jpg"
              class="d-block w-100"
              alt="https://bimbim-prof-statis.netlify.app/asset/img/seulgi.jpg"
            />
          </div>
          <div class="carousel-item">
            <img
              src="/asset/img/irene.jpg"
              class="d-block w-100"
              alt="https://bimbim-prof-statis.netlify.app/asset/img/seulgi.jpg"
            />
          </div>
          <div class="carousel-item">
            <img
              src="/asset/img/wendy.jpg"
              class="d-block w-100"
              alt="https://bimbim-prof-statis.netlify.app/asset/img/seulgi.jpg"
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="row mt-5 d-flex">
        <div class="col-lg-6 mt-3 col-sm-12">
          <div
            class="card c-3 h-100 border-0 rounded-3"
            data-aos="fade-right"
            data-aos-duration="1500"
          >
            <div class="card-body" style="color: #6a4659">
              <h1
                class="typist"
                data-typist-repeat="2"
                data-typist-cursor-show="2"
                data-typist-sequence="intro"
              >
                Hi, I'm Bimbim ganteng.
              </h1>
              <h4>Student of Wikrama Vocational School</h4>
              <!-- skills -->
              <section class="skill rounded-3">
                <div class="container">
                  <!-- title -->
                  <div class="row text-white text-center">
                    <div class="col m-4">
                      <h1 class="display-4">Skills</h1>
                      <div class="underline mb-4"></div>
                    </div>
                  </div>
                  <!-- end of title -->
                  <div class="row">
                    <div class="col-md-4 text-center">
                      <i class="fas fa-cogs fa-5x mb-4"></i>
                      <h3 class="text-white mb-3">Back End</h3>
                      <p class="text-white">PHP, Laravel</p>
                    </div>
                    <div class="col-md-4 text-center">
                      <i class="fas fa-crop fa-5x mb-4"></i>
                      <h3 class="text-white mb-3">Front End</h3>
                      <p class="text-white">CSS, Bootstrap 5</p>
                    </div>
                    <div class="col-md-4 text-center">
                      <i class="fas fa-database fa-5x mb-4"></i>
                      <h3 class="text-white mb-3">Databases</h3>
                      <p class="text-white">MySQL</p>
                    </div>
                  </div>
                </div>
              </section>
              <!-- end of skills -->

              <a href="" class="btn mt-3">More about me</a>
            </div>
          </div>
        </div>

        <div
          class="col-lg-6 mt-3 col-sm-12 d-flex justify-content-end"
          data-aos="fade-left"
          data-aos-duration="1500"
        >
          <img
            src="https://bimbim-prof-statis.netlify.app/asset/img/ganteng.jpg"
            alt=""
            class="img-fluid rounded-3"
            width="550px"
          />
        </div>
      </div>
    </div>
@endsection