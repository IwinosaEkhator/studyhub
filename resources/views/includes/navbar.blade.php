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
        <li><a href="./index.html" class="nav-link px-3">Home</a></li>
        <li><a href="./myHub.html" class="nav-link px-3">MyHub</a></li>
        <li><a href="./studyHub.html" class="nav-link px-3">StudyHub</a></li>
        <li><a href="./Library.html" class="nav-link px-3">Library</a></li>
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