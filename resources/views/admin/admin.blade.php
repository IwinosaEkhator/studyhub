<!DOCTYPE html>
<html lang="en">

  <body>
    @include("admin.include.sidebar")
    <section class="home">
      @include("admin.include.navbar")

      <!--? Main Section -->

      <div class="home-content">

        <!-- ! Overview boxes -->

        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Order</div>
              <div class="number">40,876</div>
              <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">Up from yesterday</span>
              </div>
            </div>
            <i class="bx bx-cart-alt cart"></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Sales</div>
              <div class="number">38,876</div>
              <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">Up from yesterday</span>
              </div>
            </div>
            <i class="bx bxs-cart-add cart two"></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Profit</div>
              <div class="number">$12,876</div>
              <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">Up from yesterday</span>
              </div>
            </div>
            <i class="bx bx-cart cart three"></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Return</div>
              <div class="number">11,086</div>
              <div class="indicator">
                <i class="bx bx-down-arrow-alt down"></i>
                <span class="text">Down From Today</span>
              </div>
            </div>
            <i class="bx bxs-cart-download cart four"></i>
          </div>
        </div>

        <div class="details">
          <div class="recentOrders">
            <div class="cardHeader">
                <h2>All Books</h2>
                <a href="#" class="btn">View All</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>Date Added</td>
                        <td>Names</td>
                        <td>Category</td>
                        <td>Pages</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Star Refrigerator</td>
                        <td>$1200</td>
                        <td>Paid</td>
                        <td><span class="status delivered">Delivered</span></td>
                    </tr>

                    <tr>
                        <td>Dell Laptop</td>
                        <td>$110</td>
                        <td>Due</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>

                    <tr>
                        <td>Apple Watch</td>
                        <td>$1200</td>
                        <td>Paid</td>
                        <td><span class="status return">Return</span></td>
                    </tr>

                    <tr>
                        <td>Addidas Shoes</td>
                        <td>$620</td>
                        <td>Due</td>
                        <td><span class="status inProgress">In Progress</span></td>
                    </tr>

                    <tr>
                        <td>Star Refrigerator</td>
                        <td>$1200</td>
                        <td>Paid</td>
                        <td><span class="status delivered">Delivered</span></td>
                    </tr>

                    <tr>
                        <td>Dell Laptop</td>
                        <td>$110</td>
                        <td>Due</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>

                    <tr>
                        <td>Apple Watch</td>
                        <td>$1200</td>
                        <td>Paid</td>
                        <td><span class="status return">Return</span></td>
                    </tr>

                    <tr>
                        <td>Addidas Shoes</td>
                        <td>$620</td>
                        <td>Due</td>
                        <td><span class="status inProgress">In Progress</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

          <div class="top-sales box">
            <h4>Most Popular Books</h4>
            <ul class="top-sales-details">
              <li>
                <a href="#">
                  <img src="images/sunglasses.jpg" alt="" />
                  <span class="product">Vuitton Sunglasses</span>
                </a>
                <span class="price">$1107</span>
              </li>
              <li>
                <a href="#">
                  <img src="images/jeans.jpg" alt="" />
                  <span class="product">Hourglass Jeans </span>
                </a>
                <span class="price">$1567</span>
              </li>
              <li>
                <a href="#">
                  <img src="images/nike.jpg" alt="" />
                  <span class="product">Nike Sport Shoe</span>
                </a>
                <span class="price">$1234</span>
              </li>
              <li>
                <a href="#">
                  <img src="images/scarves.jpg" alt="" />
                  <span class="product">Hermes Silk Scarves.</span>
                </a>
                <span class="price">$2312</span>
              </li>
              <li>
                <a href="#">
                  <img src="images/blueBag.jpg" alt="" />
                  <span class="product">Succi Ladies Bag</span>
                </a>
                <span class="price">$1456</span>
              </li>
              <li>
                <a href="#">
                  <img src="images/bag.jpg" alt="" />
                  <span class="product">Gucci Womens's Bags</span>
                </a>
                <span class="price">$2345</span>
              </li>

              <li>
                <a href="#">
                  <img src="images/addidas.jpg" alt="" />
                  <span class="product">Addidas Running Shoe</span>
                </a>
                <span class="price">$2345</span>
              </li>
              <li>
                <a href="#">
                  <img src="images/shirt.jpg" alt="" />
                  <span class="product">Bilack Wear's Shirt</span>
                </a>
                <span class="price">$1245</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="users">
          <div class="cardHeader">
              <h2>Users</h2>
              <a href="#" class="btn">View All</a>
          </div>

          <table>
              <thead>
                  <tr>
                      <td>Date Added</td>
                      <td>Names</td>
                      <td>Books Read</td>
                  </tr>
              </thead>

              <tbody>
                  <tr>
                      <td>02 Jan 2021</td>
                      <td>$1200</td>
                      <td>Paid</td>
                  </tr>

                  <tr>
                      <td>02 Jan 2021</td>
                      <td>$110</td>
                      <td>Due</td>
                  </tr>

                  <tr>
                      <td>02 Jan 2021</td>
                      <td>$1200</td>
                      <td>Paid</td>
                  </tr>

                  <tr>
                      <td>02 Jan 2021</td>
                      <td>$620</td>
                      <td>Due</td>
                  </tr>

                  <tr>
                      <td>02 Jan 2021</td>
                      <td>$1200</td>
                      <td>Paid</td>
                  </tr>

                  <tr>
                      <td>02 Jan 2021</td>
                      <td>$110</td>
                      <td>Due</td>
                  </tr>

                  <tr>
                      <td>02 Jan 2021</td>
                      <td>$1200</td>
                      <td>Paid</td>
                  </tr>

                  <tr>
                      <td>02 Jan 2021</td>
                      <td>$620</td>
                      <td>Due</td>
                  </tr>
              </tbody>
          </table>
      </div>

      
    </section>
    <!-- <script>
      const body = document.querySelector("body"),
        sidebar = body.querySelector("nav"),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");
      toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
      });
      searchBtn.addEventListener("click", () => {
        sidebar.classList.remove("close");
      });
      modeSwitch.addEventListener("click", () => {
        body.classList.toggle("dark");

        if (body.classList.contains("dark")) {
          modeText.innerText = "Light mode";
        } else {
          modeText.innerText = "Dark mode";
        }
      });
    </script> -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
