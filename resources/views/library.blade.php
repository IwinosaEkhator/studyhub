<!DOCTYPE html>
<html lang="en">
  @php
  $header = 'Library';
@endphp  @include("includes.htmlhead")

  <body>
    <!-- Navbar -->

    <nav class="py-0 bg-body-tertiary border-bottom">
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
            <a href="#" class="nav-link link-body-emphasis px-2"
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
          <li class="nav-item">
            <i class="fa-regular fa-user"></i>
          </li>
        </ul>
      </div>
    </nav>

    <header class="header py-3 border-bottom">
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

        <ul class="nav me-5">
          <li><a href="{{ route('home') }}" class="nav-link px-3">Home</a></li>
          <li><a href="{{ route('myhub') }}" class="nav-link px-3">MyHub</a></li>
          <li><a href="{{ route('studyhub') }}" class="nav-link px-3">StudyHub</a></li>
          <li><a href="{{ route('library') }}" class="nav-link px-3">Library</a></li>
          <li><a href="{{ route('contact') }}" class="nav-link px-3">Contact-Us</a></li>
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


    <!-- Body -->

    <section id="library" class="home">
      <div class="py-3 border-bottom" style="padding-left: 100px">
        <b class="d-flex align-items-center">
          <a class="mb-0 me-2 lib-link-back text-decoration-none">Home</a>
          <i class="fa-solid fa-chevron-right me-2" style="font-size: 7px"></i>
          <a class="mb-0 lib-link-back text-decoration-none">Library</a>
        </b>
      </div>

      <aside id="lib-category">
        <div class="row">
          <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
            <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
              <div class="offcanvas-body d-md-flex flex-column p-0 overflow-y-auto">
                <ul class="nav flex-column">
                  <li class="nav-item border-bottom">
                    <a class="nav-link d-flex align-items-center gap-2" href="#" style="font-size: 20px;">
                      <b>Categories</b>
                    </a>
                  </li>
                  <li class="nav-item py-3 border-bottom">
                    <a class="nav-link gap-2 active sub-btn" aria-current="page" href="#">
                      TextBooks <i class="fas fa-angle-right dropdown "></i>
                    </a>
                    <div class="sub-menu">
                      <a href="#" class="sub-item">Mathematics</a>
                      <a href="#" class="sub-item pt-3">English</a>
                      <a href="#" class="sub-item pt-3">Physics</a>
                      <a href="#" class="sub-item pt-3">Chemistry</a>
                      <a href="#" class="sub-item pt-3">Computer Science</a>
                    </div>
                  </li>
                  <li class="nav-item pb-3 border-bottom">
                    <a class="nav-link d-flex align-items-center sub-btn gap-2" href="#">
                      Past Questions <i class="fas fa-angle-right dropdown "></i>
                    </a>
                    <div class="sub-menu">
                      <a href="#" class="sub-item">Mathematics</a>
                      <a href="#" class="sub-item pt-3">English</a>
                      <a href="#" class="sub-item pt-3">Physics</a>
                      <a href="#" class="sub-item pt-3">Chemistry</a>
                      <a href="#" class="sub-item pt-3">Computer Science</a>
                    </div>
                  </li>
                  <li class="nav-item pb-3 border-bottom">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                      Other Resources
                    </a>
                  </li>
                </ul>
      
                <ul class="nav flex-column mb-auto">
                  <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                      Sign out
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-10 col-8 m-auto">
            <div class="lib-content">
              <div class="prod" style="min-width: 230px">
                <span class="price-off">14% Off</span>
                <div class="image-box">
                  <img src="{{url('img/1.jpg')}}" alt="" />
                </div>
                <div class="prod-info">
                  <span class="prod-name">Demon In the Wood</span>
                  <span class="prod-price">$5.99</span>
                  <hr />
                  <span class="author-name">Liegh Bardugo</span>
                </div>
              </div>
              <div class="prod" style="min-width: 230px">
                <span class="price-off">14% Off</span>
                <div class="image-box">
                  <img src="{{url('img/2.jpg')}}" alt="" />
                </div>
                <div class="prod-info">
                  <span class="prod-name">Demon In the Wood</span>
                  <span class="prod-price">$5.99</span>
                  <hr />
                  <span class="author-name">Liegh Bardugo</span>
                </div>
              </div>
              <div class="prod" style="min-width: 230px">
                <span class="price-off">14% Off</span>
                <div class="image-box">
                  <img src="{{url('img/3.jpg')}}" alt="" />
                </div>
                <div class="prod-info">
                  <span class="prod-name">Demon In the Wood</span>
                  <span class="prod-price">$5.99</span>
                  <hr />
                  <span class="author-name">Liegh Bardugo</span>
                </div>
              </div>
              <div class="prod" style="min-width: 230px">
                <span class="price-off">14% Off</span>
                <div class="image-box">
                  <img src="{{url('img/4.jpg')}}" alt="" />
                </div>
                <div class="prod-info">
                  <span class="prod-name">Demon In the Wood</span>
                  <span class="prod-price">$5.99</span>
                  <hr />
                  <span class="author-name">Liegh Bardugo</span>
                </div>
              </div>
              <div class="prod" style="min-width: 230px">
                <span class="price-off">14% Off</span>
                <div class="image-box">
                  <img src="{{url('img/1.jpg')}}" alt="" />
                </div>
                <div class="prod-info">
                  <span class="prod-name">Demon In the Wood</span>
                  <span class="prod-price">$5.99</span>
                  <hr />
                  <span class="author-name">Liegh Bardugo</span>
                </div>
              </div>
              <div class="prod" style="min-width: 230px">
                <span class="price-off">14% Off</span>
                <div class="image-box">
                  <img src="{{url('img/2.jpg')}}" alt="" />
                </div>
                <div class="prod-info">
                  <span class="prod-name">Demon In the Wood</span>
                  <span class="prod-price">$5.99</span>
                  <hr />
                  <span class="author-name">Liegh Bardugo</span>
                </div>
              </div>
              <div class="prod" style="min-width: 230px">
                <span class="price-off">14% Off</span>
                <div class="image-box">
                  <img src="{{url('img/3.jpg')}}" alt="" />
                </div>
                <div class="prod-info">
                  <span class="prod-name">Demon In the Wood</span>
                  <span class="prod-price">$5.99</span>
                  <hr />
                  <span class="author-name">Liegh Bardugo</span>
                </div>
              </div>
              <div class="prod" style="min-width: 230px">
                <span class="price-off">14% Off</span>
                <div class="image-box">
                  <img src="{{url('img/4.jpg')}}" alt="" />
                </div>
                <div class="prod-info">
                  <span class="prod-name">Demon In the Wood</span>
                  <span class="prod-price">$5.99</span>
                  <hr />
                  <span class="author-name">Liegh Bardugo</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </section>
    @include("includes.footer")
    <script src="{{url('js/index.js')}}"></script>
  </body>
</html>
