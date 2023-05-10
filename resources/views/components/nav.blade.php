
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
              <a href="{{ route('main.index') }}" class="logo">
                <img src="{{ asset('/assets/icons/logo-text.svg') }}" alt="{{ env('APP_NAME') }}">
              </a>
            </div>
            <div class="col-md-8 d-none d-md-block d-lg-block">
              <div class="header_info_section">
                <div class="head_socials">
                  <p class="icon_location">{{ $address }}</p>
                  <div class="social_icon_list">
                    <ul>
                      <li><a href="#" class="soc_icon icon-facebook"></a></li>
                      <li><a href="#" class="soc_icon icon-twitter"></a></li>
                      <li><a href="#" class="soc_icon icon-facebook"></a></li>
                      <li><a href="#" class="soc_icon icon-twitter"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="head_phone">
                  <div><p class="icon_mobile">{{ $phone }}</p></div>
                  <a href="appointment_page.html" class="mad_button">Бесплатная консультация</a>
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
            <div class="nav_item">
              <nav id="main_navigation" class="main_navigation">
                <ul id="menu" class="clearfix">
                  <li class="current"><a href="#">Главная</a></li>
                  <li class=""><a href="#about">О нас</a></li>
                  <li class=""><a href="#testimonials">Отзывы</a></li>
                  <li class=""><a href="#services">Услуги</a></li>
                  <li class=""><a href="#contact">Контакты</a></li>
                  {{-- <li class="drop"><a href="#">Pages</a>
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
                  </li> --}}
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>