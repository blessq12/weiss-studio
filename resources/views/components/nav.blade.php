
<div id="wrapper" class="wrapper_container position-relative">
    <div class="page-layout d-none"></div>
    {{-- mobile menu --}}
    <nav class="mobile-menu">
      <div class="container py-3">
        <div class="row mb-1">
          <div class="col">
            <h5 class="mb-0 text-white">Навигация:</h5>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <ul class="list-unstyled mobile-list">
              <li>
                <a href="" >Some Link to</a>
              </li>
              <li>
                <a href="" >Some Link to</a>
              </li>
              <li>
                <a href="" >Some Link to</a>
              </li>
              <li>
                <a href="" >Some Link to</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row mb-1">
          <div class="col">
            <h5 class="mb-0 text-white">Мы в соцсетях:</h5>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <div class="social-mobile">
                <a href="" class="vk">
                  <object data="{{ asset('/assets/icons/vk.svg') }}" type=""></object>
                </a>
                <a href="" class="wa">
                  <object data="{{ asset('/assets/icons/wa.svg') }}" type=""></object>
                </a>
                <a href="" class="inst">
                  <object data="{{ asset('/assets/icons/inst.svg') }}" type=""></object>
                </a>
                <a href="" class="tg">
                  <object data="{{ asset('/assets/icons/telegram.svg') }}" type=""></object>
                </a>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <a href="appointment_page.html" class="mad_button">Make an Appointment</a>
          </div>
        </div>
      </div>
    </nav>
    {{-- end mobile menu --}}
    <header id="header" class="header-main rsAbsoluteEl">
    
      <!-- top-header -->
      <div class="mad_top_header position-relative">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-6 d-flex justify-content-start">
              <a href="" class="logo"><img src="{{ asset('/assets/icons/logo-text.svg') }}" alt="{{ env('APP_NAME') }}"></a>
            </div>
            <div class="col-md-8 d-none d-md-block d-lg-block">
              <div class="header_info_section">
                <div class="head_socials">
                  <p class="icon_location">{{ $address }}</p>
                  <div class="social_icon_list">
                    <ul>
                      <li><a href="#" class="soc_icon icon-facebook"></a></li>
                      <li><a href="#" class="soc_icon icon-twitter"></a></li>
                      <li><a href="#" class="soc_icon icon-gplus"></a></li>
                      <li><a href="#" class="soc_icon icon-tumblr"></a></li>
                      <li><a href="#" class="soc_icon icon-instagram"></a></li>
                      <li><a href="#" class="soc_icon icon-pinterest"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="head_phone">
                  <div><p class="icon_mobile">{{ $phone }}</p></div>
                  <a href="appointment_page.html" class="mad_button">Make an Appointment</a>
                </div>
              </div>
            </div>
            <div class="col-md-8 col-6 d-flex d-md-none d-lg-none mt-0 justify-content-end">
              <button class="mobile-toggler d-flex align-items-center">
                <div>
                  <span></span>
                  <object data="{{ asset('/assets/icons/menu-button.svg') }}" type=""></object>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!--main menu-->
      <div class="menu_holder">
        <div class="container">
          <div class="menu_wrap">
            <!-- - - - - - - - - - - - - - Navigation - - - - - - - - - - - - - - - - -->
            <div class="nav_item">
              <nav id="main_navigation" class="main_navigation">
                <ul id="menu" class="clearfix">
                  <li class="current"><a href="index.html">Home</a></li>
                  <li class="drop"><a href="#">Pages</a>
                    <!--sub menu-->
                    <div class="sub_menu_wrap clearfix">
                      <ul>
                        <li><a href="about_us.html">About Us</a></li>
                        <li class="sub"><a href="#">Team</a>
                          <!--sub menu-->
                          <div class="sub_menu_wrap sub_menu_inner type_2 clearfix">
                            <ul>
                              <li><a href="team.html">Team</a>
                              <li><a href="single_member.html">Single Member Page</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="sub"><a href="#">Services</a>
                          <!--sub menu-->
                          <div class="sub_menu_wrap sub_menu_inner type_2 clearfix">
                            <ul>
                              <li><a href="services_v1.html">Service v1</a></li>
                              <li><a href="services_v2.html">Service v2</a></li>
                            </ul>
                          </div>
                        </li>
                        <li><a href="careers.html">Carrers</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="appointment_page.html">Appointment Page</a></li>
                        <li><a href="page_404.html">404 Page</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="coming_soon.html">Coming Soon Page</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="drop"><a href="#">Features</a>
                    <!--sub menu-->
                    <div class="sub_menu_wrap clearfix">
                      <ul>
                        <li><a href="featured_elements.html">Elements</a></li>
                        <li><a href="featured_typography.html">Typography</a></li>
                        <li><a href="featured_columns.html">Columns</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="drop"><a href="#">Gallery</a>
                    <!--sub menu-->
                    <div class="sub_menu_wrap clearfix">
                      <ul>
                        <li><a href="portfolio_sortable_masonry_3columns.html">Sortable Masonry - 3 Columns</a></li>
                        <li><a href="portfolio_sortable_3columns.html">Sortable Grid - 3 Columns</a></li>
                        <li><a href="portfolio_classic_sortable_3columns.html">Sortable Classic - 3 Columns</a></li>
                        <li><a href="portfolio_single_page_v1.html">Single Portfolio Page v1</a></li>
                        <li><a href="portfolio_single_page_v2.html">Single Portfolio Page v2</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="drop"><a href="#">Blog</a>
                    <!--sub menu-->
                    <div class="sub_menu_wrap clearfix">
                      <ul>
                        <li><a href="blog_category_sidebar.html">Blog With Right Sidebar</a></li>
                        <li><a href="blog_category_left_sidebar.html">Blog With Left Sidebar</a></li>
                        <li><a href="blog_grid_2columns.html">Grid Blog - 2 Columns</a></li>
                        <li class="sub"><a href="#">Single Blog Post Page</a>
                          <!--sub menu-->
                          <div class="sub_menu_wrap sub_menu_inner type_2 clearfix">
                            <ul>
                              <li><a href="blog_single_sidebar.html">With Right Sidebar</a></li>
                              <li><a href="blog_category_left_sidebar.html">With Left Sidebar</a></li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="drop"><a href="#">Shop</a>  
                    <!--sub menu-->
                    <div class="sub_menu_wrap clearfix">
                      <ul>
                        <li><a href="shop_front_page.html">Front page</a></li>
                        <li><a href="shop_category_page.html">Category Page</a></li>
                        <li><a href="shop_product_page.html">Product Page</a></li>
                        <li><a href="shop_product_page_sidebar.html">Product Page with Sidebar</a></li>
                        <li><a href="shop_shopping_cart.html">Shopping Cart</a></li>
                        <li><a href="shop_order_list.html">Orders List</a></li>
                        <li><a href="shop_order_info.html">Order Information</a></li>
                      </ul>
                    </div>
                  </li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </nav>
            </div>
            <!-- - - - - - - - - - - - - end Navigation - - - - - - - - - - - - - - - -->
          </div>
        </div>
      </div>
    </header>