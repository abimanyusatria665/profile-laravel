<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profile</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/htmltypist.js/dist/typist.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <link rel="stylesheet" href="asset/index.css" />
  </head>
  <style>
    .c-1 {
      background-color: #ac7d88;
    }
    .c-2 {
      background-color: #f8ecd1;
    }
    .c-3 {
      background-color: #deb6ab;
    }
    .c-4 {
      background-color: #85586f;
    }
    .c-5 {
      background-color: #6a4659;
    }
    .c-6 {
      background-color: #54456b;
    }
  </style>


<body class="c-2">
          @auth
  
          
    <nav
      class="navbar navbar-expand-lg navbar-light c-1"
      data-aos="fade-down"
      data-aos-duration="1500"
    >

          

    <div class="container">    
   
      <a class="navbar-brand justify-content-start" href="index.html">Abimanyu</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse me-auto" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/home"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/social-media">Social Media</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About Me</a>
            </li>
            <li class="nav-item">
              <strong>
              <p class="nav-link active">Wellcomeback, {{ auth()->user()->name }}</p>
              </strong>
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                <button type="submit" class="nav-item btn">Logout</button>  
                </form>
            </li>
          </ul>
         
        </div>
      </div>

  </nav>

      @endauth
  @guest
    <nav
      class="navbar navbar-expand-lg navbar-light c-1"
      data-aos="fade-down"
      data-aos-duration="1500"
    >
    <div class="container">        
      <a class="navbar-brand" href="index.html">Abimanyu</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse me-auto" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/home"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/social-media">Social Media</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About Me</a>
            </li>
            <li class="nav-item">
              <a href="/login" class="nav-link btn">Sign in</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
  @endguest


    <div class="container">
        @yield('content')
    </div>


    <footer class="mt-5" data-aos="fade-up" data-aos-duration="1500">
      <div class="container-fluid c-4 pt-5 pb-5">
        <div class="sosmed d-flex justify-content-center">
          <a href="" class="btn btn-lg c-6 rounded text-light m-3"
            ><i class="fab fa-instagram"></i
          ></a>
          <a href="" class="btn btn-lg c-6 rounded text-light m-3"
            ><i class="fab fa-youtube"></i
          ></a>
          <a href="" class="btn btn-lg c-6 rounded text-light m-3"
            ><i class="fab fa-spotify"></i
          ></a>
          <a href="" class="btn btn-lg c-6 rounded text-light m-3"
            ><i class="fab fa-soundcloud"></i
          ></a>
          <a href="" class="btn btn-lg c-6 rounded text-light m-3"
            ><i class="fab fa-discord"></i
          ></a>
        </div>
      </div>
      <div class="copyright d-flex justify-content-center c-5 text-light">
        <p class="m-3">Copyright &copy; 2020 Bimbim</p>
      </div>
    </footer>

    <script
      defer
      src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
      integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
      crossorigin="anonymous"
    ></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/htmltypist.js/dist/typist.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
