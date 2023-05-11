@extends('components.front-layout')
@section('content')

  <x-hero-banner/>
  {{-- content part starts --}}
  <div id="content">
    {{-- about section --}}
    <div>
      <div id="about" class="mad_section v_align_center_blocks mad_about">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="mad_section_container">
                <article>
                  <h3 class="mad_title_style1">Больше, чем просто работа</h3>
                  <h2>Косметология и аппаратные массажи</h2>
                  <p>
                    За столько лет это стало больше, чем просто работа, была проделана большая работа чтобы студия стала тем местом, куда люди приходят и не бояться оценочных суждений.
                    Мы заботимся о наших клиентах и делаем всё возможное, чтобы наши услуги стали максимально эффективными для каждой!
                  </p>
                  <div class="mad_author">
                    <h3 class="mad_title_style2">Анастасия Ашуркина.</h3>
                    <span>Основатель студии</span>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-md-6 mt-0">
              <figure class="section_image align_right">
                <img src="/assets/images/women_457x524.png" alt="">
              </figure>
            </div>
          </div>
        </div>
      </div>
      {{-- greeting --}}
      <div class="container-fluid greeting-back">
        <div class="pattern-overlay"></div>
        <div class="container">
          <div class="row mb-3 mb-md-0 mb-lg-0">
            <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
              <div class="greeting-wrap">
                <h2>для лица</h2>
                <p>
                  Какое то описание процедур и что они направлены именно на какую-то определенную часть тела.
                  Описание общее как для отдельной категории, что это важно и нужно
                </p>
                <a href="#" class="mad_button style2">Перечень услуг</a>
              </div>
              </div>
            <div class="col-12 col-md-6 col-lg-6 right-image d-none d-md-block d-lg-block" data-background="/assets/images/face-mask.jpg"></div>
            <div class="col-12 d-block d-md-none d-lg-none position-relative">
              <img src="/assets/images/face-mask.jpg" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-6 left-image d-none d-md-block d-lg-block" data-background="/assets/images/massage-therapy.jpeg"></div>
            <div class="col-12 d-block d-md-none d-lg-none position-relative">
              <img src="/assets/images/massage-therapy.jpeg" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
              <div class="greeting-wrap greeting-last">
                <h2>для тела</h2>
                <p>
                  Какое то описание процедур и что они направлены именно на какую-то определенную часть тела.
                  Описание общее как для отдельной категории, что это важно и нужно.
                  Желательно чтобы текста было не мало
                </p>
                <a href="#" class="mad_button style2">Перечень услуг</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- end greeting --}}

      {{-- Testimonials --}}
      <div class="mad_section" id="testimonials">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <figure class="section_image align_right">
                <img src="/assets/images/testimonials_img.png" alt="">
              </figure>
            </div>
            <div class="col-md-6">
              <div class="mad_section_container mad_testimonials">
                <article>
                  <h3 class="mad_title_style1">Отзывы</h3>
                  <h2>Что о нас говорят</h2>
                  {{-- testimonial carousel --}}
                  <div class="carousel_type_1">
                    <div id="testimonialCarousel" class="owl-carousel" data-max-items="1" data-autoplay="true">
                      <!-- Slide -->
                      <div>
                        <!-- Carousel Item -->
                        <blockquote>
                          <p>
                            Я могу рекомендовать этот салон с полной уверенностью. Это место, где вам предоставят не только профессиональные услуги, здесь вас также ждет приветливый и заботливый персонал. 
                            Здесь я нашла все, что мне нужно: уютная атмосфера, профессиональные мастера, которые являются настоящими экспертами в своем деле.
                          </p>
                          <div class="mad_author style2">
                            <h3 class="mad_title_style2">​Светлана Волженина</h3>
                            <span>Клиент</span>
                          </div>
                        </blockquote>
                        <!-- /Carousel Item -->
                      </div>
                      <!-- /Slide -->
                      <!-- Slide -->
                      <div>
                        <!-- Carousel Item -->
                        <blockquote>
                          <p>
                            Хотела бы оставить свой отзыв, место чудесное, чисто, уютно, работают специалисты своего дела, всё подробно расскажут и объяснят, уже приобрела абонемент на ВР массаж, я с вами на долго 😉❤
                            Кто ещё не был в этой студии, советую обязательно сходить...
                          </p>
                          <div class="mad_author style2">
                            <h3 class="mad_title_style2">​Кристина Вострякова</h3>
                            <span>Клиент</span>
                          </div>
                        </blockquote>
                        <!-- /Carousel Item -->
                      </div>
                      <!-- /Slide -->
                      <!-- Slide -->
                      <div>
                        <!-- Carousel Item -->
                        <blockquote>
                          <p>
                            Ещё в 2019 году познакомилась с мастером Анастасией,ходила на вакуумный массаж тела,мне очень понравилась!В этом году в отпуске прошла курс рф лифтинг лица и осталась довольна!Хочу выразить огромную благодарность Анастасии ,она настоящий мастер своего дела,легкая,чуткая,аккуратная, мастер ,который постоянно обучается ,радует новинками!Рекомендую посетить эту студию без раздумий!
                          </p>
                          <div class="mad_author style2">
                            <h3 class="mad_title_style2">Ольга Филонова</h3>
                            <span> Клиент</span>
                          </div>
                        </blockquote>
                        <!-- /Carousel Item -->
                      </div>
                      <!-- /Slide -->
                    </div>
                  </div>
                  {{-- end testimonial carousel --}}
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Services --}}
    <div id="services">
      <div class="paralax_image_bg2" style="background:url('https://velikorodnov.com/html/spa-construction/spa/multi-page/images/bg_image_1920x1419.jpg')">
        <div class="paralax-layout"></div>
        <svg class="separator_type_5_path top" preserveAspectRatio="none" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0 L30 100 L100 0 L100 100 L0 100 Z" fill="#fff" stroke="#fff" stroke-width="-1"></path>
          <path d="M0 0 L0 0 L50 100 L100 0 L100 0 Z" fill="rgba(255,255,255,0.01)"></path>
        </svg>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="mad_section_container">
                <h3 class="mad_title_style1">Комплексные процедуры</h3>
                <h2 class="mad_separator">Beauty Services</h2>
              </div>
              {{-- services carousel --}}
              <div class="carousel_type_2">
                <div id="serviceCarousel" class="owl-carousel" data-max-items="3">
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <div class="mad_item_hover">
                      <figure>
                        <img src="/assets/images/370x370_img1.jpg" alt="">
                      </figure>
                      <div class="mad_item_desc with_bg_img">
                        <h5>Barber Services for Women</h5>
                      </div>
                      <a href="#" class="item_overlay">
                        <div class="text_holder">
                          <p>Barber Services for Women</p>
                        </div>
                      </a>
                    </div>
                    <!-- /Carousel Item -->
                  </div>
                  <!-- /Slide -->
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <div class="mad_item_hover">
                      <figure>
                        <img src="/assets/images/370x370_img2.jpg" alt="">
                      </figure>
                      <div class="mad_item_desc with_bg_img">
                        <h5>Barber Services for Mens</h5>
                      </div>
                      <a href="#" class="item_overlay">
                        <div class="text_holder">
                          <p>Barber Services for Mens</p>
                        </div>
                      </a>
                    </div>
                    <!-- /Carousel Item -->
                  </div>
                  <!-- /Slide -->
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <div class="mad_item_hover">
                      <figure>
                        <img src="/assets/images/370x370_img3.jpg" alt="">
                      </figure>
                      <div class="mad_item_desc with_bg_img">
                        <h5>Barber Services Shaving</h5>
                      </div>
                      <a href="#" class="item_overlay">
                        <div class="text_holder">
                          <p>Barber Services Shaving</p>
                        </div>
                      </a>
                    </div>
                    <!-- /Carousel Item -->
                  </div>
                  <!-- /Slide -->
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <div class="mad_item_hover">
                      <figure>
                        <img src="/assets/images/370x370_img4.jpg" alt="">
                      </figure>
                      <div class="mad_item_desc with_bg_img">
                        <h5>Spa Services (Massage)</h5>
                      </div>
                      <a href="#" class="item_overlay">
                        <div class="text_holder">
                          <p>Spa Services (Massage)</p>
                        </div>
                      </a>
                    </div>
                    <!-- /Carousel Item -->
                  </div>
                  <!-- /Slide -->
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <div class="mad_item_hover">
                      <figure>
                        <img src="/assets/images/370x370_img5.jpg" alt="">
                      </figure>
                      <div class="mad_item_desc with_bg_img">
                        <h5>Beauty Services for Women</h5>
                      </div>
                      <a href="#" class="item_overlay">
                        <div class="text_holder">
                          <p>Beauty Services for Women</p>
                        </div>
                      </a>
                    </div>
                    <!-- /Carousel Item -->
                  </div>
                  <!-- /Slide -->
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <div class="mad_item_hover">
                      <figure>
                        <img src="/assets/images/370x370_img6.jpg" alt="">
                      </figure>
                      <div class="mad_item_desc with_bg_img">
                        <h5>Beauty Services for Mens</h5>
                      </div>
                      <a href="#" class="item_overlay">
                        <div class="text_holder">
                          <p>Beauty Services for Mens</p>
                        </div>
                      </a>
                    </div>
                    <!-- /Carousel Item -->
                  </div>
                  <!-- /Slide -->
                </div>
                <div class="align_center">
                  <a href="#" class="mad_button style2">View all Services</a>
                </div>
              </div>
              {{-- end services carousel --}}
            </div>
          </div>
        </div>
        <svg class="separator_type_5_path" preserveAspectRatio="none" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0 L70 100 L100 0 L100 100 L0 100 Z" fill="#fff" stroke="#fff" stroke-width="-1"></path>
          <path d="M0 -1 L0 0 L50 100 L100 0 L100 -1 Z" fill="rgba(255,255,255,0.01)"></path>
        </svg>

      </div>

      <!-- Services3 -->
      <div id="services3" class="mad_section mad_about v_align_center_blocks">
        
        <div class="container">
          <div class="row">
            <div class="col-md-6">

              <figure class="section_image align_center">
                <img src="/assets/images/500x385_img.jpg" alt="">
              </figure>

            </div>
            <div class="col-md-6">
              <div class="mad_section_container">
                <article>
                  <h3 class="mad_title_style1">Цены на услуги</h3>
                  <h2>Plan and Pricing</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. Sed viverra erat finibus, elementum velit sit amet.</p>
                </article>
              </div>
            </div>
          </div>
        </div>
        <!-- Tabs section -->
        <div class="mad_section">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="tabs tabs-section vertical clearfix">
                  <!--tabs navigation-->
                  <ul class="tabs_nav clearfix">
                    <li data-tab="first"><span class="active">Процедуры для лица</span></li>
                    <li data-tab="second"><span class="">Процедуры для тела</span></li>
                  </ul>
                  <!--tabs content-->
                  <div class="tabs_content">
                    <div data-tab-target="first" class="tab-content">
                      <div class="tabs tabs-section style2">
                        <!--tabs navigation-->
                        <div class="clearfix tabs_conrainer">
                          
                        </div>
                        <!--tabs content-->
                        <div class="tabs_content">
                            <ul class="list-unstyled service-list">
                              <li>
                                <div class="content">
                                  <h4>Название процедуры/услуги</h4>
                                  <p>
                                    Описание краткое, но вмещающее суть для процедуры/услуги.
                                    Описание краткое, но вмещающее суть для процедуры/услуги.
                                  </p>
                                </div>
                                <div class="price">
                                    <span>2700</span>
                                </div>
                              </li>
                              <li>
                                <div class="content">
                                  <h4>Название процедуры для лица 1</h4>
                                  <p>
                                    Описание краткое, но вмещающее суть для процедуры/услуги.
                                    Описание краткое, но вмещающее суть для процедуры/услуги.
                                  </p>
                                </div>
                                <div class="price">
                                    <span>2700</span>
                                </div>
                              </li>
                              <li>
                                <div class="content">
                                  <h4>Название процедуры для лица 2</h4>
                                  <p>
                                    Описание краткое, но вмещающее суть для процедуры/услуги.
                                    Описание краткое, но вмещающее суть для процедуры/услуги.
                                  </p>
                                </div>
                                <div class="price">
                                    <span>2700</span>
                                </div>
                              </li>
                              <li>
                                <div class="content">
                                  <h4>Название процедуры для лица 3</h4>
                                  <p>
                                    Описание краткое, но вмещающее суть для процедуры/услуги.
                                    Описание краткое, но вмещающее суть для процедуры/услуги.
                                  </p>
                                </div>
                                <div class="price">
                                    <span>2700</span>
                                </div>
                              </li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    <div data-tab-target="second" class="tab-content d-none">
                      <div class="tabs tabs-section style2">

                        <!--tabs navigation-->
                        <div class="clearfix tabs_conrainer">
                          
                        </div>

                        <!--tabs content-->
                        <div class="tabs_content">
                          <ul class="list-unstyled service-list">
                            <li>
                              <div class="content">
                                <h4>Название процедуры для тела 1</h4>
                                <p>
                                  Описание краткое, но вмещающее суть для процедуры/услуги.
                                  Описание краткое, но вмещающее суть для процедуры/услуги.
                                </p>
                              </div>
                              <div class="price">
                                  <span>2700</span>
                              </div>
                            </li>
                            <li>
                              <div class="content">
                                <h4>Название процедуры для тела 2</h4>
                                <p>
                                  Описание краткое, но вмещающее суть для процедуры/услуги.
                                  Описание краткое, но вмещающее суть для процедуры/услуги.
                                </p>
                              </div>
                              <div class="price">
                                  <span>2700</span>
                              </div>
                            </li>
                            <li>
                              <div class="content">
                                <h4>Название процедуры для тела 3</h4>
                                <p>
                                  Описание краткое, но вмещающее суть для процедуры/услуги.
                                  Описание краткое, но вмещающее суть для процедуры/услуги.
                                </p>
                              </div>
                              <div class="price">
                                  <span>2700</span>
                              </div>
                            </li>
                            <li>
                              <div class="content">
                                <h4>Название процедуры для тела 4</h4>
                                <p>
                                  Описание краткое, но вмещающее суть для процедуры/услуги.
                                  Описание краткое, но вмещающее суть для процедуры/услуги.
                                </p>
                              </div>
                              <div class="price">
                                  <span>2700</span>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- gallery --}}
    <div id="gallery">
      <div class="mad_section with_bg_1">
        <div class="container relative">
          <div class="row">
            <div class="col-sm-12">
              <div class="mad_section_container">
                <h3 class="mad_title_style1">Галерея</h3>
                <h2 class="mad_separator style2">Наша работа</h2>
                <div class="owl_custom_buttons">
                  <button class="mad_owl_prev"></button>
                  <button class="mad_owl_next"></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Carousel -->
        <div class="carousel_type_2 full_width_gallery">
          <div id="gallery_carousel" class="owl-carousel gallery_carousel" data-max-items="4">
            @foreach ($galleryPairs as $key => $val)
                <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <div class="mad_item_hover">
                      <figure>
                        <img src="/assets/images/gallery/{{ $key .'_' .$val[0]}}.jpg" alt="">
                      </figure>
                    </div>
                    <div class="mad_item_hover">
                      <figure>
                        <img src="/assets/images/gallery/{{ $key .'_' .$val[1]}}.jpg" alt="">
                      </figure>
                    </div>
                    <!-- /Carousel Item -->
                  </div>
                <!-- /Slide -->
            @endforeach
          </div>
        </div>
      </div>
    </div>

    {{-- team --}}
    <div id="team">
      <div class="mad_section">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="align_center mad_item_offset">
                <div class="mad_section_container">
                  <h3 class="mad_title_style1">Профессионалы</h3>
                  <h2>своего дела</h2>
                </div>
              </div>
              {{-- team carousel --}}
              <div class="carousel_type_1 style2">
                <div id="teamCarousel" class="owl-carousel" data-max-items="3" data-autoplay="true">
                  <div>
                    <!-- Carousel Item -->
                    <a href="#" class="mad_item_hover style2">
                      
                      <figure>
                        <img src="/assets/images/team-1.png" alt="">
                      </figure>
                      <div class="mad_item_desc with_bg_img">
                        <div class="mad_author style2">
                          <h3 class="mad_title_style2">Rosy</h3>
                          <span>Hair Stylist</span>
                        </div>
                      </div>

                    </a>
                    <!-- /Carousel Item -->
                  </div>
                  <div>
                    <!-- Carousel Item -->
                    <a href="#" class="mad_item_hover style2">
                      
                      <figure>
                        <img src="/assets/images/women_457x524.png" alt="">
                      </figure>
                      <div class="mad_item_desc with_bg_img">
                        <div class="mad_author style2">
                          <h3 class="mad_title_style2">Liza</h3>
                          <span>Hair Stylist and Manager</span>
                        </div>
                      </div>

                    </a>
                    <!-- /Carousel Item -->
                  </div>
                  <div>
                    <!-- Carousel Item -->
                    <a href="#" class="mad_item_hover style2">
                      
                      <figure>
                        <img src="/assets/images/team-2.png" alt="">
                      </figure>
                      <div class="mad_item_desc with_bg_img">
                        <div class="mad_author style2">
                          <h3 class="mad_title_style2">Merry</h3>
                          <span>Spa Assistant</span>
                        </div>
                      </div>

                    </a>
                    <!-- /Carousel Item -->
                  </div>
                </div>
              </div>
              {{-- end team carousel --}}
            </div>

          </div>

        </div>

      </div>

    </div>

    {{-- offers and news --}}
    <div id="news">
      <div class="mad_section paralax_image_bg4" style="background: url('https://velikorodnov.com/html/spa-construction/spa/multi-page/images/bg_image_1920x1278.jpg')">
        <div class="container">
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
              <div class="mad_section_container mad_item_offset">
                <h3 class="mad_title_style1">Новости и предложения</h3>
                <h2>Latest News & Offers</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="full_width_bg_pattern bg_pattern_red">
          <div class="container">
            <div class="row">
              <div class="col-md-5">
                <figure><img src="/assets/images/magazine_620x480.png" alt=""></figure>
              </div>
              <div class="col-md-7">
                <div class="mad_section_container">
                  <h3 class="mad_title_style1">See the Latest News Regarding “Hairstyle”</h3>
                  <a href="#" class="mad_button style2">Read All</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <svg class="separator_type_5_path" preserveAspectRatio="none" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0 L70 100 L100 0 L100 100 L0 100 Z" fill="#fff" stroke="#fff" stroke-width="-1"></path>
          <path d="M0 -1 L0 0 L50 100 L100 0 L100 -1 Z" fill="rgba(255,255,255,0.01)"></path>
        </svg>
      </div>
    </div>

  </div>
@endsection