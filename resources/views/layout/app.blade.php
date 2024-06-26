<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudyHub: {{$header}} </title>
    <link rel="shortcut icon" href="Favicon.png" type="image/x-icon"></head>

    <!-- Icons -->
    <script
      src="https://kit.fontawesome.com/a7b55340b3.js"
      crossorigin="anonymous"
    ></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Slick -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
    />

    <!-- Bootstrap Javascript -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <!-- Slick -->
    <script
      src="https://code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
      crossorigin="anonymous"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    ></script>

    <link rel="stylesheet" href="{{url('CSS/style.css')}}" />
    <link rel="stylesheet" href="{{url('CSS/responsive.css')}}" />
  </head>


<body>
    
<!-- Navbar -->

<nav class="py-0 bg-body-tertiary border-bottom position-relative">
    <div class="container d-flex flex-wrap justify-content-between">
      <ul class="nav" style="font-size: 15px">
        <li class="nav-item me-2">
          <a
            href="#"
            class="nav-link link-body-emphasis px-2"
            aria-current="page"
          >
            <i class="fa-regular fa-circle-question me-1"></i> How can we help
            you?</a
          >
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link link-body-emphasis px-2 nav-number"
            ><i class="fa-solid fa-mobile-screen-button me-1"></i>+234
            809-063-8254</a
          >
        </li>
      </ul>
      <ul
        class="nav justify-content-center align-items-center nav-icons"
        style="font-size: 20px"
      >
        <li class="nav-item">
          <i class="fa-regular fa-heart me-5"></i>
        </li>
        <li class="nav-item">
          <i class="fa-regular fa-bookmark me-5"></i>
        </li>
        <li class="nav-item dropdown m-0">
          <i
            class="fa-regular fa-user dropdown-toggle"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          ></i>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <header class="header py-3">
    <!-- Navbar Dropdown Button -->
    <div class="toggle-btn d-lg-none">
      <i class="fa-solid fa-bars fa-2x"></i>
    </div>
    <div
      class="container d-flex flex-wrap justify-content-center align-items-center justify-content-between"
      style="max-width: 1200px"
    >
      <a
        href="/"
        class="d-flex col-md-3 mb-2 mb-md-0 text-decoration-none nav-logo link-body-emphasis"
      >
        StudyHub
      </a>

      <ul class="nav me-5 header-links">
        <li><a href="/index" class="nav-link px-3">Home</a></li>
        <li><a href="/myhub" class="nav-link px-3">MyHub</a></li>
        <li><a href="/studyhub" class="nav-link px-3">StudyHub</a></li>
        <li><a href="/library" class="nav-link px-3">Library</a></li>
        <li><a href="" class="nav-link px-3">Contact-Us</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
        <input
          type="search"
          class="form-control"
          style="width: 270px"
          placeholder="Search..."
          aria-label="Search"
        />
      </form>
    </div>
  </header>

  <!-- Navbar Dropdown -->
  <div class="dropdown-m">
    <span class="border-bottom">
      <h3 class="mb-4">Menu</h3>
    </span>

    <form class="col-7 col-lg-auto mb-3 mb-lg-0" role="search">
      <input
        type="search"
        class="form-control"
        style="width: 100%"
        placeholder="Search..."
        aria-label="Search"
      />
    </form>

    <li><a href="../index.blade.php" class="active">Home</a></li>
    <li><a href="../about.blade.php">MyHub</a></li>
    <li><a href="./videos.html">StudyHub</a></li>
    <li><a href="./blog.html">Library</a></li>
    <li><a href="./contact.html">About-us</a></li>
  </div>

  @yield('content')

  <!-- Footer Section -->

<div class="newsletter">
    <h1 class="news">Join Our Newsletter</h1>
    <p class="new">Monthly digest of what's new and exciting from us with upcoming collections</p>
    <form>
        <input type="email" placeholder="Enter email for weekly news!" required>
        <button type="submit">Subscribe</button>
    </form>
</div>

<div class="container position-relative ps-5 pt-5">
    <footer class="pt-5 position-relative">
        <div class="row pb-5">
            <div class="col-lg-4 text-black">
                <a href="/" class="d-flex col-md-3 mb-5 mb-md-0 text-decoration-none nav-logo link-body-emphasis">
                    StudyHub
                </a>
                <p class="my-4">B.i.u. Rd, Oka, Benin City 300102, Edo</p>
                <p class="mt-2 mb-0">www.StudyHub.com</p>
                <p class="my-0">+234 809-063-8254</p>
            </div>

            <div class="col-lg-2 col-md-12 mb-3">
                <h5>Explore</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">About Us</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">Sitemap</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">Bookmarks</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">Sign in/Join</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-12 mb-3">
                <h5>Customer Service</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">Accessiblity</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">Contact Us</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">Help Center</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-12 mb-3">
                <h5>Categories</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">Notes</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">TextBooks</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">Manuals</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">Past-Questions</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-12 mb-3">
                <h5>Policy</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">Term of Use</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">Security</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">Privacy</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-5 border-top">
            <p>© 2024 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3">
                    <a class="link-body-emphasis" href="#">
                        <i class="fa-regular fa-twitter"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a>
                </li>
                <li class="ms-3">
                    <a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a>
                </li>
            </ul>
        </div>
    </footer>
</div>


<script src="{{url('js/index.js')}}"></script>
</body>
</html>