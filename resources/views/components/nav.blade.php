
<div id="wrapper" class="wrapper_container position-relative">
    <div class="page-layout d-none"></div>
    {{-- mobile menu --}}
    <nav class="mobile-menu">
      <div class="container py-3">
        <div class="row mb-2">
          <div class="col">
            <h5 class="mb-0 text-white">Навигация:</h5>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <ul class="list-unstyled mobile-list">
              <li><a href="#about" class="mob-link-active">О нас</a></li>
              <li><a href="#testimonials">Отзывы</a></li>
              <li><a href="#services3">Услуги</a></li>
              <li><a href="#news">Контакты</a></li>
            </ul>
          </div>
        </div>
        {{-- contact group --}}
        <div class="row mb-3">
          <div class="col">
              <ul class="list-unstyled cont-list">
                <li>
                    <object data="{{ asset('/assets/icons/phone-icon.svg') }}" alt="Телефон" type=""></object>
                    <a href="tel:{{$phone}}" aria-label="Телефон">{{$phone}}</a>
                </li>
                <li>
                    <object data="{{ asset('/assets/icons/map-marker.svg') }}" alt="Адрес" type=""></object>
                    <a href="javascript:void(0)" aria-label="Адрес">{{$address}}</a>
                </li>
                <li>
                  <object data="{{ asset('/assets/icons/envelope.svg') }}" alt="Электронная почта" type=""></object>
                  <a href="mailto:{{ $emailAddress }}" aria-label="Электронная почта">{{$emailAddress}}</a>
              </li>
              </ul>
          </div>
        </div>
        {{-- end contact group --}}
        {{-- social group --}}
        <div class="row mb-2">
          <div class="col">
            <h5 class="mb-0 text-white">Мы в соцсетях:</h5>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <div class="social-mobile">
                <a href="{{ $vkGroup }}" aria-label="Vkontakte" class="vk">
                  <object data="{{ asset('/assets/icons/vk.svg') }}" alt="Vkontakte" type=""></object>
                </a>
                <a href="{{ $insta }}" aria-label="Instagram" class="inst">
                  <object data="{{ asset('/assets/icons/inst.svg') }}" alt="Instagram" type=""></object>
                </a>
                <a href="{{ $waLink }}" aria-label="WhatsApp" class="wa">
                  <object data="{{ asset('/assets/icons/wa.svg') }}" alt="WhatsApp" type=""></object>
                </a>
                <a href="{{ $tgLink }}" aria-label="Telegram" class="tg">
                  <object data="{{ asset('/assets/icons/telegram.svg') }}" alt="Telegram" type=""></object>
                </a>
            </div>
          </div>
        </div>
        {{-- end social group --}}
      </div>
    </nav>
    {{-- end mobile menu --}}
    <header id="header" class="header-main rsAbsoluteEl">
    
      <!-- top-header -->
      <div class="mad_top_header position-relative">
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-6 d-flex justify-content-start">
              <a href="{{ route('main.index') }}" class="logo">
                <img src="{{ asset('/assets/icons/logo-text.svg') }}" alt="{{ env('APP_NAME') }}">
              </a>
            </div>
            <div class="col-md-4 justify-content-center d-none d-md-flex d-lg-flex">
              <div class="cta-nav" data-toggle="modal" data-target="basic-modal">
                <div class="surprise"><img src="{{ asset('/assets/images/surprise-box.png') }}" alt=""></div>
                <div class="content">
                  <h3>Впервые у нас?</h3>
                  <p class="m-0 text-white">Weiss-studio дарит скидку на первое посещение студии!</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-none d-md-block d-lg-block">
              <div class="header_info_section">
                <div class="head_socials">
                  <h5 class="text-white fw-normal">Подпишись на нас<br>в соцсетях!</h5>
                  <div class="social_icon_list">
                    <div class="social-mobile">
                      <a href="{{ $vkGroup }}" aria-label="Vkontakte" class="vk">
                        <span></span>
                        <object data="{{ asset('/assets/icons/vk.svg') }}" alt="Vkontakte"  type=""></object>
                      </a>
                      <a href="{{ $insta }}" aria-label="Instagram" class="inst">
                        <span></span>
                        <object data="{{ asset('/assets/icons/inst.svg') }}" alt="Instagram"  type=""></object>
                      </a>
                      <a href="{{ $waLink }}" aria-label="WhatsApp" class="wa">
                        <span></span>
                        <object data="{{ asset('/assets/icons/wa.svg') }}" alt="WhatsApp"  type=""></object>
                      </a>
                      <a href="{{ $tgLink }}" aria-label="Telegram" class="tg">
                        <span></span>
                        <object data="{{ asset('/assets/icons/telegram.svg') }}" alt="Telegram"  type=""></object>
                      </a>
                  </div>
                  </div>
                </div>
                <div class="head_phone">
                  <h5 class="text-white fw-normal">Контакты</h5>
                  <div class="d-flex align-items-center mb-1">
                    <object data="{{ asset('/assets/icons/phone-icon.svg') }}" alt="Телефон" type="" style="margin-right: 10px"></object>
                    <a href="tel:{{ $phone }}" class="text-white fw-normal">{{ $phone }}</a>
                  </div>
                  <div class="d-flex align-items-center mb-1">
                    <object data="{{ '/assets/icons/map-marker.svg' }}" alt="Адрес" type="" style="margin-right: 10px"></object>
                    <p class="m-0 fw-normal">{{ $address }}</p>
                  </div>
                  <div class="d-flex align-items-center mb-1">
                    <object data="{{ '/assets/icons/envelope.svg' }}" alt="Электронная почта" type="" style="margin-right: 10px"></object>
                    <p class="m-0 fw-normal">{{ $emailAddress }}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 col-6 d-flex d-md-none d-lg-none mt-0 justify-content-end">
              <button class="mobile-toggler d-flex align-items-center" aria-label="Меню">
                <div>
                  <span></span>
                  <object data="{{ asset('/assets/icons/menu-button.svg') }}" alt="Меню" type=""></object>
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
                  <li class=""><a href="#about">О нас</a></li>
                  <li class=""><a href="#testimonials">Отзывы</a></li>
                  <li class=""><a href="#services3">Услуги</a></li>
                  <li class=""><a href="#news">Контакты</a></li>
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