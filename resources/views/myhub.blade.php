<!DOCTYPE html>
<html lang="en">
  
    {{$header = "MyHub"}}
    @include("includes.htmlhead")

  <body>
    <!-- Hero Section -->

        @include("includes.navbar")

        <section id="experience">
          <div class="row">
            <div class="col-6">
              <p class="m-0" style="font-weight: 700; color: grey;">My Hub</p>
              <h1 class="mt-1 mb-4"><span style="font-size: 38px; font-weight: 400;">We Provide You The</span><br> Experience</h1>

              <p>
                Customise your virtual bookshelf where you can add and organize
                books, articles, and resources.
              </p>
              <a class="btn btn-lg mt-4" href=""> Explore Book</a>
            </div>
            <div class="ps-4 pt-2 col-6">
              <img src="./images/medium-shot-woman-reading-book.jpg" alt="" />
            </div>
          </div>
        </section>
    
    <section id="popular">
      <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3">
        <h1>Previously Reading</h1>
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
                <a href="#"
                  ><i
                    class="fa-regular fa-bookmark ms-3 fa-lg"
                  ></i></a
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


    <section id="popular">
      <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3">
        <h1>Recommendation</h1>
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
                <a href="#"
                  ><i
                    class="fa-regular fa-bookmark ms-3 fa-lg"
                  ></i></a
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


    <section id="popular">
      <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3">
        <h1>Favourites</h1>
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
                <a href="#"
                  ><i
                    class="fa-regular fa-bookmark ms-3 fa-lg"
                  ></i></a
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

    <section id="popular">
      <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3">
        <h1>Bookmarked</h1>
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
                <a href="#"
                  ><i
                    class="fa-regular fa-bookmark ms-3 fa-lg"
                  ></i></a
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
    @include("includes.footer")
    <script src="index.js"></script>
  </body>
</html>
