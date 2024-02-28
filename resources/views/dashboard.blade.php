<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('index.css') }}">
  
  <title>Agrify - Your Green Market</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>

<body>


  <div class="overlay" data-overlay></div>

  <!--
    - MODAL
  -->

  <div class="modal" data-modal>

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">

      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">
      </div>

      <div class="newsletter">

        <form action="#">

          <div class="newsletter-header">

            <h3 class="newsletter-title">Subscribe Newsletter.</h3>

            <p class="newsletter-desc">
              Subscribe to<b>Agrify</b> to get latest products and discount update.
            </p>

          </div>

          <input type="email" name="email" class="email-field" placeholder="Email Address" required>

          <button type="submit" class="btn-newsletter">Subscribe</button>

        </form>

      </div>

    </div>

  </div>





  <!--
    - NOTIFICATION TOAST
  -->

  <div class="notification-toast" data-toast>

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="./assets/images/products/deal2.jpg" alt="deals" width="80" height="70">
    </div>

    <div class="toast-detail">

      <p class="toast-message">
        Someone just bought
      </p>

      <p class="toast-title">
        ATLAS UREA SUPERPHO
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">2 Minutes</time> ago
      </p>

    </div>

  </div>





  <!--
    - HEADER
  -->

  <header>

    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="header-alert-news">
          <p>
            <b>Free Shipping</b>
            This Week Order Over - ₱55
          </p>
        </div>

        <div class="header-top-actions">

          <select name="currency">

            <option value="peso">PHP ₱ </option>
            <option value="usd">USD $</option>

          </select>

          <select name="language">

            <option value="en-US">English</option>
            <option value="es-L1">Lang1</option>

          </select>

        </div>

      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
          <img src="./assets/images/logo/agrify.png" alt="Agrify logo" width="150" height="50">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

        <button class="action-btn" onclick="redirectToProfile()">
        <ion-icon name="person-outline"></ion-icon>
        </button>


          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </button>

          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">0</span>
          </button>

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="index.html" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Categories</a>

            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Vegetables & Fruits</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 1</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 2</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 3</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 4</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 5</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/" alt="1" width="250"
                      height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Dairy Product's</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 1</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 2</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 3</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 4</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 5</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/" alt="2" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Farm Utilities</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 1</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 2</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 3</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 4</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 5</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/" alt="3" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Crop Seeds</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 1</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 2</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 3</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 4</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">item 5</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/" alt="4" width="250" height="119">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Plants & Flowers</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">item 1</a>
              </li>

              <li class="dropdown-item">
                <a href="#">item 2</a>
              </li>

              <li class="dropdown-item">
                <a href="#">item 3</a>
              </li>

              <li class="dropdown-item">
                <a href="#">item 4</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Fertilizers</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">item 1</a>
              </li>

              <li class="dropdown-item">
                <a href="#">item 2</a>
              </li>

              <li class="dropdown-item">
                <a href="#">item 3</a>
              </li>

              <li class="dropdown-item">
                <a href="#">item 4</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Livestock</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">item 1</a>
              </li>

              <li class="dropdown-item">
                <a href="#">item 2</a>
              </li>

              <li class="dropdown-item">
                <a href="#">item 3</a>
              </li>

              <li class="dropdown-item">
                <a href="#">item 4</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Miscellaneous</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">item 1</a>
              </li>

              <li class="dropdown-item">
                <a href="#">item 2</a>
              </li>

              <li class="dropdown-item">
                <a href="#">item 3</a>
              </li>

              <li class="dropdown-item">
                <a href="#">item 4</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Blog</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Hot Offers</a>
          </li>

        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="dashboard.html" class="menu-title">Accounts</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Vegetables & Fruits</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 1</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 2</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 3</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 4</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Dairy Product's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 1</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 2</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 3</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 4</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Farm Utilities</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 1</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 2</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 3</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 4</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Crop Seeds</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 1</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 2</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 3</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">item 4</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
        </li>

      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>

              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Lang1</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">PHP ₱</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">USD $</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>

  </header>





  <!--
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->

    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">

          <div class="slider-item">

            <img src="./assets/images/banner-1.jpg" alt="banner-1.jpg" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Trusted Products</p>

              <h2 class="banner-title">Your trusted products are in sale</h2>

              <p class="banner-text">
                starting at <b> ₱99</b>.00
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/banner-2.jpg" alt="banner-2.jpg" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Crop & Fertilizers</p>

              <h2 class="banner-title">Best crops & fertilizers are in sale</h2>

              <p class="banner-text">
                starting at <b> ₱95</b>.00
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/banner-3.jpg" alt="banner-3.jpg" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Sale Offer</p>

              <h2 class="banner-title">New Summer season sale</h2>

              <p class="banner-text">
                starting at <b> ₱75</b>.99
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - CATEGORY
    -->

    <div class="category">

      <div class="container">

        <div class="category-item-container has-scrollbar">

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/summer.png" alt="summer.png" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Summer season</h3>

                <p class="category-item-amount">(53)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/rainy.png" alt="rainy.png" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Rainy season</h3>

                <p class="category-item-amount">(58)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/brand.png" alt="brand.png" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Best brands</h3>

                <p class="category-item-amount">(68)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/windy.png" alt="windy.png" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Cool season</h3>

                <p class="category-item-amount">(84)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/accesories.png" alt="accesories.png" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Accesories</h3>

                <p class="category-item-amount">(35)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/gardening.png" alt="gardening.png" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Gardening</h3>

                <p class="category-item-amount">(16)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/agriculture.png" alt="agriculture.png" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">AG & Tillage</h3>

                <p class="category-item-amount">(27)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/agapp.png" alt="agapp.png" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">AG apparels</h3>

                <p class="category-item-amount">(39)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

        </div>

      </div>

    </div>
    
    <div class="product-container">

      <div class="container">


        <!--
          - SIDEBAR
        -->

        <div class="sidebar  has-scrollbar" data-mobile-menu>

          <div class="sidebar-category">

            <div class="sidebar-top">
              <h2 class="sidebar-title">Category</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/cast.png" alt="cast.png" width="20" height="20"
                      class="menu-title-img">

                    <p class="menu-title">Cast iron & Fencing</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 1</p>
                      <data value="300" class="stock" title="Available Stock">300</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 2</p>
                      <data value="60" class="stock" title="Available Stock">60</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 3</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 4</p>
                      <data value="87" class="stock" title="Available Stock">87</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/livestock.png" alt="livestock.png" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Poultry & Livestock Supplies</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 1</p>
                      <data value="45" class="stock" title="Available Stock">45</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 2</p>
                      <data value="75" class="stock" title="Available Stock">75</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 3</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 4</p>
                      <data value="26" class="stock" title="Available Stock">26</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/hometools.png" alt="hometools.png" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Home & Toolboxes</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 1</p>
                      <data value="46" class="stock" title="Available Stock">46</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 2</p>
                      <data value="73" class="stock" title="Available Stock">73</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 3</p>
                      <data value="61" class="stock" title="Available Stock">61</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/sprayp.png" alt="sprayp.png" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Sprayers,Pump parts & Accesories</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 1</p>
                      <data value="12" class="stock" title="Available Stock">12 pcs</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 2</p>
                      <data value="60" class="stock" title="Available Stock">60 pcs</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 3</p>
                      <data value="50" class="stock" title="Available Stock">50 pcs</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 4</p>
                      <data value="87" class="stock" title="Available Stock">87 pcs</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/outdoorliv.png" alt="outdoorliv.png" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Supplies & Outdoor living</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 1</p>
                      <data value="68" class="stock" title="Available Stock">68</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 2</p>
                      <data value="46" class="stock" title="Available Stock">46</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 3</p>
                      <data value="79" class="stock" title="Available Stock">79</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 4</p>
                      <data value="23" class="stock" title="Available Stock">23</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/lawng.png" alt="lawng.png" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Lawn & Gardening</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 1</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 2</p>
                      <data value="48" class="stock" title="Available Stock">48</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/misc.png" alt="misc.png" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Miscellaneous</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 1</p>
                      <data value="62" class="stock" title="Available Stock">62</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 2</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 3</p>
                      <data value="80" class="stock" title="Available Stock">80</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">item 4</p>
                      <data value="75" class="stock" title="Available Stock">75</data>
                    </a>
                  </li>

                </ul>

              </li>

            </ul>

          </div>

          <div class="product-showcase">

            <h3 class="showcase-heading">best sellers</h3>

            <div class="showcase-wrapper">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/best1.jpg" alt="best1.jpg" width="75" height="75"
                      class="showcase-img">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Farm General 41%, Grass & Weed killer</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$150</del>
                      <p class="price">₱120</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/best2.jpg" alt="best2.jpg" class="showcase-img"
                      width="75" height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Fire ant Bifen, 1 Gallon</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>₱170</del>
                      <p class="price">₱120</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/best3.jpg" alt="best3.jpg" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Hand Pump Sprayer, 2.9 Gallon Capacity</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>₱550</del>
                      <p class="price">₱499</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/best4.jpg" alt="best4.jpg" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">3-Point Sprayer, 110 Gallon</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>₱1,200</del>
                      <p class="price">₱999</p>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>



        <div class="product-box">

          <!--
            - PRODUCT MINIMAL
          -->

          <div class="product-minimal">

            <div class="product-showcase">

              <h2 class="title">Trusted Products</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/best1.jpg" alt="best1.jpg" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Farm General 41%, Grass & Weed killer</h4>
                      </a>

                      <a href="#" class="showcase-category">Lawn & Gardening</a>

                      <div class="price-box">
                        <p class="price">₱120</p>
                        <del>₱150</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/new1.jpg" alt="new1.jpg" class="showcase-img" width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Gauge field fence 47 In, x330 Ft. Roll</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Fences</a>
                  
                      <div class="price-box">
                        <p class="price">₱160</p>
                        <del>₱200</del>
                      </div>
                  
                    </div>
                  
                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/new2.jpg" alt="new2.jpg" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Dog Kennel, 10 Ft</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Pet Supplies</a>
                  
                      <div class="price-box">
                        <p class="price">₱350</p>
                        <del>₱400</del>
                      </div>
                  
                    </div>
                  
                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/new3.jpg" alt="new3.jpg" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Studded T-Post,6', 1.25 lbs. per foot</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Fences</a>
                  
                      <div class="price-box">
                        <p class="price">₱75</p>
                        <del>$100</del>
                      </div>
                  
                    </div>
                  
                  </div>

                </div>

                <div class="showcase-container">
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/new4.jpg" alt="new4.jpg" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Tillovator, 7 Ft, Gear Driven</h4>
                      </a>
                
                      <a href="#" class="showcase-category">AG & Tillage</a>
                
                      <div class="price-box">
                        <p class="price">₱2,499/p>
                        <del>₱4,000</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/new5.jpg" alt="new5.jpg" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Barn Door Roller, 450 Cpt</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Home & Farm</a>
                
                      <div class="price-box">
                        <p class="price">₱75</p>
                        <del>₱100</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/new6.jpg" alt="new6.jpg" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">COSMO Model PL400 3-Point Spreader with Poly Hopper</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Farm Utilities</a>
                
                      <div class="price-box">
                        <p class="price">₱1,050</p>
                        <del>₱1,225</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/new7.jpg" alt="new7.jpg" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">43% Glyphosate Weed Prevent, 1 Gal</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Lawn & Gardening</a>
                
                      <div class="price-box">
                        <p class="price">₱120</p>
                        <del>₱150</del>
                      </div>
                
                    </div>
                
                  </div>
                
                </div>

              </div>

            </div>

            <div class="product-showcase">
            
              <h2 class="title">Recommended</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/reco1.jpg" alt="reco1.jpg" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">High Pressure Cast Iron Burner, 100,000 BTUs</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Cast Iron</a>
            
                      <div class="price-box">
                        <p class="price">₱699</p>
                        <del>₱850</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/reco2.jpg" alt="reco2.jpg" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Toolbox - Matte Black</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Toolboxes</a>
            
                      <div class="price-box">
                        <p class="price">₱399</p>
                        <del>₱500</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/reco3.jpg" alt="reco3.jpg" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Foam Marker, TJ EV24</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Sprayer & Pump parts</a>
            
                      <div class="price-box">
                        <p class="price">₱2,499</p>
                        <del>₱3,000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/reco4.jpg" alt="reco4.jpg" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Grass Seed Contractors Mix 40 lb. Bag Pennington®</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Lawn & Gardening</a>
            
                      <div class="price-box">
                        <p class="price">₱95.00</p>
                        <del>₱120.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/reco5.jpg" alt="reco5.jpg" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Agmate® Finishing Mower, 5' Rear Discharge, 5FMOWR</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Lawn & Gardening</a>
            
                      <div class="price-box">
                        <p class="price">₱4,599</p>
                        <del>₱5,000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/reco6.jpg" alt="reco6.jpg" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">6' Heavy Duty Box Scraper & Land Leveler</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Farm Utilities</a>
            
                      <div class="price-box">
                        <p class="price">₱3,499</p>
                        <del>₱3,600</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/reco7.jpg" alt="reco7.jpg" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Delavan ™ Turbo 90 ™ Pump, Cast Iron</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Cast Iron</a>
            
                      <div class="price-box">
                        <p class="price">₱999</p>
                        <del>₱1,200</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/reco8.jpg" alt="reco8.jpg" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Fimco Sprayer 110-Gallon Boomless 3-Point</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Sprayer & Pump parts</a>
            
                      <div class="price-box">
                        <p class="price">₱4,000</p>
                        <del>₱4,500</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
              </div>
            
            </div>

            <div class="product-showcase">
            
              <h2 class="title">Top Rated</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/top1.jpg" alt="top1.jpg" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Dog Kennel Clamp</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Pet Supplies</a>
            
                      <div class="price-box">
                        <p class="price">₱75</p>
                        <del>₱99</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/top2.jpg" alt="top2.jpg" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Gulf Annual Ryegrass Seed, 50 Lb.</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Lawn & Gardening</a>
            
                      <div class="price-box">
                        <p class="price">₱599</p>
                        <del>₱650</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/top3.jpg" alt="top3.jpg" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Truper® 35177 6 Tine Manure Fork with 50" Fiberglass Handle</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Lawn & Gardening</a>
            
                      <div class="price-box">
                        <p class="price">₱199</p>
                        <del>₱250</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/top4.jpg" alt="top4.jpg" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">10' X 26" 29 Gauge 5V Galvanized Metal Roofing Panels</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Roofing</a>
            
                      <div class="price-box">
                        <p class="price">₱70</p>
                        <del>₱100</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/top5.jpg" alt="top5.jpg" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Standard Duty Wheelbarrow, Double Wheels, 10 Cu. Ft.</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Farm Utilities</a>
            
                      <div class="price-box">
                        <p class="price">₱399</p>
                        <del>₱450</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/top6.jpg" alt="top6.jpg" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">NeverKink 5/8 In. x 100 Ft. Heavy Duty Garden Hose</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Lawn & Gardening</a>
            
                      <div class="price-box">
                        <p class="price">₱175</p>
                        <del>₱220</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/top7.jpg" alt="top7.jpg" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Truper® 31198 48-inch Round Point Shovel, Yellow, with fiberglass handle</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Farm Utilities</a>
            
                      <div class="price-box">
                        <p class="price">₱199</p>
                        <del>₱250</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/top8.jpg" alt="top8.jpg" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Aluminum Roof Paint, 5 Gallons</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Roofing</a>
            
                      <div class="price-box">
                        <p class="price">₱300</p>
                        <del>₱475</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
              </div>
            
            </div>

          </div>



          <!--
            - PRODUCT FEATURED
          -->

          <div class="product-featured">

            <h2 class="title">Best Deals</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">
                  
                  <div class="showcase-banner">
                    <img src="./assets/images/products/deal1.jpg" alt="deal1" class="showcase-img">
                  </div>

                  <div class="showcase-content">
                    
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title">ATLAS BASAL PLUS ZINC 15-5-15-1.5Zn</h3>
                    </a>

                    <p class="showcase-desc">
                      Best for irrigated rice, provides complete and readily-available nutrients in response to 
                      widespread zinc deficiency in the Philippines.
                    </p>

                    <div class="price-box">
                      <p class="price">₱350.00</p>

                      <del>₱500</del>
                    </div>

                    <button class="add-cart-btn">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          already sold: <b>20</b>
                        </p>

                        <p>
                          available: <b>40</b>
                        </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Hurry Up! Offer ends in:
                      </p>

                      <div class="countdown">

                        <div class="countdown-content">

                          <p class="display-number">360</p>

                          <p class="display-text">Days</p>

                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="showcase-container">
              
                <div class="showcase">
              
                  <div class="showcase-banner">
                    <img src="./assets/images/products/deal2.jpg" alt="deal2" class="showcase-img">
                  </div>
              
                  <div class="showcase-content">
              
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>
              
                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title">ATLAS UREA SUPERPHOSPHATE 20-10-0</a>
                    </h3>
              
                    <p class="showcase-desc">
                      A product of a unique French Technology the only compound 
                      fertilizer with the highest Nitrogen content for best vegetative growth.
                    </p>
              
                    <div class="price-box">
                      <p class="price">₱450</p>
                      <del>₱650</del>
                    </div>
              
                    <button class="add-cart-btn">add to cart</button>
              
                    <div class="showcase-status">
                      <div class="wrapper">
                        <p> already sold: <b>15</b> </p>
              
                        <p> available: <b>40</b> </p>
                      </div>
              
                      <div class="showcase-status-bar"></div>
                    </div>
              
                    <div class="countdown-box">
              
                      <p class="countdown-desc">Hurry Up! Offer ends in:</p>
              
                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">360</p>
                          <p class="display-text">Days</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>
              
                    </div>
              
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>



          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">Featured Products</h2>

            <div class="product-grid">

              <div class="showcase">

                <div class="showcase-banner">

                  <img src="./assets/images/products/fprod1.jpg" alt="Alugbhati WHOLESALE1" width="300" class="product-img default">
                  <img src="./assets/images/products/fprod1.jpg" alt="Alugbhati WHOLESALE1" width="300" class="product-img hover">

                  <p class="showcase-badge">15%</p>

                  <div class="showcase-actions">

                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>

                  </div>

                </div>

                <div class="showcase-content">

                  <a href="#" class="showcase-category">Vegetables</a>

                  <a href="#">
                    <h3 class="showcase-title">Alugbhati WHOLESALE</h3>
                  </a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">₱40</p>
                    <del>₱75</del>
                  </div>

                </div>

              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/fprod2.jpg" alt="Ampalaya WHOLESALE" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/fprod2.jpg" alt="Ampalaya WHOLESALE" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Vegetables</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Ampalaya WHOLESALE</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱45</p>
                    <del>₱50</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/fprod3.jpg" alt="Baguio Bean WHOLESALE" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/fprod3.jpg" alt="Baguio Bean WHOLESALE" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Vegetables</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Baguio Bean WHOLESALE</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱58</p>
                    <del>₱65</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/fprod4.jpg" alt="Coconut Oil, Baguio 1L x 2" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/fprod4.jpg" alt="Coconut Oil, Baguio 1L x 2" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle pink">new</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Home Essentials</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Coconut Oil, Baguio 1L x 2</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱90</p>
                    <del>₱120</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/fprod5.jpg" alt="Rice, Jasponica Brown 2kg" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/fprod5.jpg" alt="Rice, Jasponica Brown 2kg" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Home Essentials</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Rice, Jasponica Brown 2kg</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱970</p>
                    <del>₱1,100</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/fprod6.jpg" alt=" Red Salted Egg Half Dozen" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/fprod6.jpg" alt=" Red Salted Egg Half Dozen" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Livestock</a>
              
                  <h3>
                    <a href="#" class="showcase-title"> Red Salted Egg Half Dozen</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱85</p>
                    <del>₱100</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/fprod7.jpg" alt="Monterey Beef Breakfast Steak 500g" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/fprod7.jpg" alt=" Monterey Beef Breakfast Steak 500g" class="product-img hover" width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Livestock</a>
              
                  <h3>
                    <a href="#" class="showcase-title"> Monterey Beef Steak 500g</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱299</p>
                    <del>₱320</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/fprod8.jpg" alt=" Cavendish Dole WHOLESALE" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/fprod8.jpg" alt=" Cavendish Dole WHOLESALE" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Fruits</a>
              
                  <h3>
                    <a href="#" class="showcase-title"> Cavendish Banana WHOLESALE</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱99</p>
                    <del>₱120</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/fprod9.jpg" alt="Country Feeds" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/fprod9.jpg" alt="Country Feeds" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Poultry</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Country Feeds® Scratch Grains & Poultry Feed 50 Lb.</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱85</p>
                    <del>₱115</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/fprod10.jpg" alt="Yard Tuff Chicken Coop 105" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/fprod10.jpg" alt="Yard Tuff Chicken Coop 105" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Poultry</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Yard Tuff Chicken Coop 105" x 39.4" x 67"</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱699</p>
                    <del>₱950</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/fprod11.jpg" alt="FEEDER SINGLE" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/fprod11.jpg" alt="FEEDER SINGLE" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Poultry</a>
              
                  <h3>
                    <a href="#" class="showcase-title">5 Gallon Plastic Poultry and Game Bird Waterer</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱120</p>
                    <del>₱170</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/fprod12.jpg" alt="Miller Deluxe Nesting Box"
                    class="product-img default" width="300">
                  <img src="./assets/images/products/fprod12.jpg" alt="Miller Deluxe Nesting Box"
                    class="product-img hover" width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Poultry</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Live Bird Shipping Carton</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱120</p>
                    <del>₱150</del>
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div>

      <div class="container">

        <div class="testimonials-box">

          <!--
            - TESTIMONIALS
          -->

          <div class="testimonial">

            <h2 class="title">testimonial</h2>

            <div class="testimonial-card">

              <img src="./assets/images/testimonial-1.jpg" alt="Divino" class="testimonial-banner" width="80" height="80">

              <p class="testimonial-name">Divino Sison</p>

              <p class="testimonial-title">Product Manager</p>

              <p class="testimonial-desc">
                Farming looks mighty easy when your plow is a pencil, and you're a thousand miles from the corn field.
              </p>

            </div>

          </div>



          <!--
            - CTA
          -->

          <div class="cta-container">

            <img src="./assets/images/spromo.jpg" alt="summer promo" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">Summer Promo</h2>

              <p class="cta-text">Starting @ ₱50</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>



          <!--
            - SERVICE
          -->

          <div class="service">

            <h2 class="title">Our Services</h2>

            <div class="service-container">

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Next Day delivery</h3>
                  <p class="service-desc">Local Orders Only</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 8AM - 11PM</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Free Return</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">30% money back</h3>
                  <p class="service-desc">For Order Over ₱100</p>
              
                </div>
              
              </a>

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - BLOG
    -->

    <div class="blog">

      <div class="container">

        <div class="blog-container has-scrollbar">

          <div class="blog-card">

            <a href="#">
              <img src="./assets/images/blog-1.jpg" alt="Blog1" width="300" class="blog-banner">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">1</a>

              <a href="#">
                <h3 class="blog-title">Lorem ipsum dolor sit, amet consectetur adipisicing el.</h3>
              </a>

              <p class="blog-meta">
                By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Feb 06, 2024</time>
              </p>

            </div>

          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/blog-2.jpg" alt="Blog2."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Blog 2</a>
          
              <h3>
                <a href="#" class="blog-title">Lorem ipsum dolor sit, amet consectetur adipisicing el.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Admin</cite> / <time datetime="2022-01-18">Jan 18, 2024</time>
              </p>
          
            </div>
          
          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/blog-3.jpg" alt="Blog3"
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Blog 3</a>
          
              <h3>
                <a href="#" class="blog-title">Lorem ipsum dolor sit, amet consectetur adipisicing el.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Admin</cite> / <time datetime="2022-02-10">Feb 10, 2024</time>
              </p>
          
            </div>
          
          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/blog-4.jpg" alt="Blog4"
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Blog 4</a>
          
              <h3>
                <a href="#" class="blog-title">Lorem ipsum dolor sit, amet consectetur adipisicing el.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Admin</cite> / <time datetime="2022-03-15">Feb 15, 2022</time>
              </p>
          
            </div>
          
          </div>

        </div>

      </div>

    </div>

  </main>





  <!--
    - FOOTER
  -->

  <footer>

    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Popular Brands</h2>
          </li>

          <li class="footer-nav-item">
            <a href="https://fordtractor.ph" class="footer-nav-link">Ford Tractor Philippines</a>
          </li>

          <li class="footer-nav-item">
            <a href="https://www.atlasfertilizer.com" class="footer-nav-link">Atlas Corp</a>
          </li>

          <li class="footer-nav-item">
            <a href="https://adamco.ph" class="footer-nav-link">ADAMCO</a>
          </li>

          <li class="footer-nav-item">
            <a href="https://www.harbest.com.ph" class="footer-nav-link">Harbest Corp</a>
          </li>

          <li class="footer-nav-item">
            <a href="https://www.cargill.ph" class="footer-nav-link">Cargill Ph</a>
          </li>

        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Products</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Our Company</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Delivery</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Legal Notice</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Terms and conditions</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">About us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Secure payment</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              419 Street 414 Rte
              AV Fern, Dagupan(DAGP), 2432, PHIL
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+607936-8058" class="footer-nav-link">(639) 936-8058</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link">admin1@gmail.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

        <p class="copyright">
          Copyright &copy; <a href="#">Agrify</a> all rights reserved.
        </p>

      </div>

    </div>

  </footer>






  <!--
    - custom js link
  -->
  <script src="{{ asset('script.js') }}"></script>
  
  <script>
    function redirectToProfile() {
        window.location = "{{ route('profile') }}";
    }

    </script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>