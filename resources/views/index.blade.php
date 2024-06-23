<!DOCTYPE html>
<html lang="en">
  
    
    {{$header = "Home"}}
    @include("includes.htmlhead")


  <body>
    
    @include("includes.navbar")

    <!-- Hero Section -->

    <section id="home-page">
      <section id="home" class="home">
        <h1>Connect, Collabrate, Learn.</h1>
        <p>
          StudyHub is a web based collaborative library with fantastic resources
          for promoting learning, faciliating seamless collaboration among
          students by providing a centralized platform, exchanging ideas, and
          working together on academic pojects.
        </p>
        <div class="col-2 mb-3 mb-lg-0 me-lg-3 search-box" role="search">
          <input
            type="search"
            class="form-control home-search form-control-dark text-bg-white"
            placeholder="Search for ISBN number..."
            aria-label="Search"
          />
          <a class="search-btn" href="">Search</a>
        </div>
      </section>
    </section>

    <!-- Popular Section -->

    <section id="popular">
      <div class="d-lg-flex align-items-center justify-content-between mb-4">
        <h1>Popular Books</h1>
        <a
          class="mt-4 pe-4 text-decoration-none"
          style="font-size: 18px; font-weight: 600; color: #9eb8d9"
          >View All <i class="fa-solid fa-chevron-right"></i
        ></a>
      </div>

      <div class="slide-container">
        <div class="prod-wrapper">
          <div class="prod">
            <span class="text-end d-flex justify-content-end pe-1 price-off"
              ><a href=""
                ><i class="fa-regular fa-heart fa-lg text-white"></i
              ></a>
              <a href=""
                ><i class="fa-regular fa-bookmark ms-3 fa-lg text-white"></i
              ></a>
            </span>
            <div class="image-box">
              <img src="./images/1.jpg" alt="" />
            </div>
            <div class="prod-info">
              <span class="prod-name">If you Knew</span>
              <hr />
              <span class="author-name">George Paulson</span>
            </div>
          </div>

          <div class="prod">
            <div class="image-box">
              <img src="./images/2.jpg" alt="" />
            </div>
            <div class="prod-info">
              <span class="prod-name">The Frailty of a Woman</span>
              <hr />
              <span class="author-name">Past Questions/Mathematics</span>
              <span class="d-flex justify-content-between mt-3 prod-icons"
                ><a href="#">
                  <i class="fa-regular fa-heart fa-lg"></i>
                </a>
                <a href="#"><i class="fa-regular fa-bookmark ms-3 fa-lg"></i></a
              ></span>
            </div>
          </div>

          <div class="prod">
            <span class="price-off">7% Off</span>
            <div class="image-box">
              <img src="./images/3.jpg" alt="" />
            </div>
            <div class="prod-info">
              <span class="prod-name">The Lost Emerald</span>
              <span class="prod-price">$2.00</span>
              <hr />
              <span class="author-name">Vona Stewart</span>
            </div>
          </div>

          <div class="prod">
            <span class="price-off">14% Off</span>
            <div class="image-box">
              <img src="./images/4.jpg" alt="" />
            </div>
            <div class="prod-info">
              <span class="prod-name">Demon In the Wood</span>
              <span class="prod-price">$5.99</span>
              <hr />
              <span class="author-name">Liegh Bardugo</span>
            </div>
          </div>

          <div class="prod">
            <span class="price-off">4% Off</span>
            <div class="image-box">
              <img src="./images/5.jpg" alt="" />
            </div>
            <div class="prod-info">
              <span class="prod-name">Waves</span>
              <span class="prod-price">$2.99</span>
              <hr />
              <span class="author-name">Ingrid Chabbert</span>
            </div>
          </div>

          <div class="prod">
            <span class="price-off">8% Off</span>
            <div class="image-box">
              <img src="./images/6.jpg" alt="" />
            </div>
            <div class="prod-info">
              <span class="prod-name">Enceladus</span>
              <span class="prod-price">$4.99</span>
              <hr />
              <span class="author-name">Brandon Q. Morris</span>
            </div>
          </div>

          <div class="prod">
            <span class="price-off">6% Off</span>
            <div class="image-box">
              <img src="./images/7.jpg" alt="" />
            </div>
            <div class="prod-info">
              <span class="prod-name">Beginning After The End</span>
              <span class="prod-price">$2.99</span>
              <hr />
              <span class="author-name">Divergence</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="favorite">
      <div class="row">
        <div class="col-lg-5 fave">
          <img class="favorite-img" src="./images/9.jpg" alt="" />
          <img class="favorite-img" src="./images/10.jpg" alt="" />
          <br />
          <img class="favorite-img" src="./images/11.jpg" alt="" />
          <img class="favorite-img" src="./images/12.jpg" alt="" />
        </div>
        <div class="col-lg-7 pt-5">
          <h1>Find Your Favorite Books Here</h1>
          <p>
            Customise your virtual bookshelf where you can add and organize
            books, articles, and resources.
          </p>
          <ul class="counter-row">
            <li class="counter">
              <span class="count" data-val="5">0</span>
              <br />
              <p>Reading</p>
            </li>
            <li class="counter">
              <span class="count" data-val="12">0</span>
              <br />
              <p>Favorites</p>
            </li>
            <li class="counter">
              <span class="count" data-val="20">0</span>
              <br />
              <p>Bookmarks</p>
            </li>
          </ul>
          <a class="favorite-btn btn btn-lg">Learn more</a>
        </div>
      </div>
    </section>

    <section id="popular">
      <h1>Other Books</h1>
      <div class="slide-container">
        <div class="prod-wrapper">
          <div class="prod">
            <span class="price-off">18% Off</span>
            <div class="image-box">
              <img src="./images/13.jpg" alt="" />
            </div>
            <div class="prod-info">
              <span class="prod-name">If you Knew</span>
              <span class="prod-price">$1.99</span>
              <hr />
              <span class="author-name">George Paulson</span>
            </div>
          </div>
          <div class="prod">
            <span class="price-off">5% Off</span>
            <div class="image-box">
              <img src="./images/14.jpg" alt="" />
            </div>
            <div class="prod-info">
              <span class="prod-name">The Frailty of a Woman</span>
              <span class="prod-price">$0.99</span>
              <hr />
              <span class="author-name">Pierre Markus</span>
            </div>
          </div>
          <div class="prod">
            <span class="price-off">7% Off</span>
            <div class="image-box">
              <img src="./images/15.jpg" alt="" />
            </div>
            <div class="prod-info">
              <span class="prod-name">The Lost Emerald</span>
              <span class="prod-price">$2.00</span>
              <hr />
              <span class="author-name">Vona Stewart</span>
            </div>
          </div>
          <div class="prod">
            <span class="price-off">14% Off</span>
            <div class="image-box">
              <img src="./images/16.jpg" alt="" />
            </div>
            <div class="prod-info">
              <span class="prod-name">Demon In the Wood</span>
              <span class="prod-price">$5.99</span>
              <hr />
              <span class="author-name">Liegh Bardugo</span>
            </div>
          </div>
          <div class="prod">
            <span class="price-off">4% Off</span>
            <div class="image-box">
              <img src="./images/17.jpg" alt="" />
            </div>
            <div class="prod-info">
              <span class="prod-name">Waves</span>
              <span class="prod-price">$2.99</span>
              <hr />
              <span class="author-name">Ingrid Chabbert</span>
            </div>
          </div>
          <div class="prod">
            <span class="price-off">8% Off</span>
            <div class="image-box">
              <img src="./images/18.jpg" alt="" />
            </div>
            <div class="prod-info">
              <span class="prod-name">Enceladus</span>
              <span class="prod-price">$4.99</span>
              <hr />
              <span class="author-name">Brandon Q. Morris</span>
            </div>
          </div>
          <div class="prod">
            <span class="price-off">6% Off</span>
            <div class="image-box">
              <img src="./images/19.jpg" alt="" />
            </div>
            <div class="prod-info">
              <span class="prod-name">Beginning After The End</span>
              <span class="prod-price">$2.99</span>
              <hr />
              <span class="author-name">Divergence</span>
            </div>
          </div>
          <div class="prod">
            <span class="price-off">9% Off</span>
            <div class="image-box">
              <img src="./images/20.jpg" alt="" />
            </div>
            <div class="prod-info">
              <span class="prod-name">Nobody knows but you</span>
              <span class="prod-price">$2.99</span>
              <hr />
              <span class="author-name">Anica Mrose</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Try Section -->

    <section id="try">
      <img class="try-img" src="./images/img06.jpg" alt="" />
      <h1>
        Try our free trial today. If you don’t like,<br />
        you can cancel it anytime!
      </h1>
      <p>
        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
        molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
        eros et accumsan et iusto odio dignissim qui blandit praesent luptatum
        zzril delenit augue duis dolore te feugait nulla facilisi.
      </p>
      <a class="try-btn" href="">TRY OUR DEMO</a>
    </section>

    @include("includes.footer")

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="./index.js"></script>
  </body>
</html>
