@extends('components.front-layout')
@section('content')
  <x-hero-banner/>
  {{-- content part starts --}}
  <div id="content">
    <div class="modal-launch" style="
      position: fixed;
      bottom: 50px;
      right: 50px;
      width: 50px;
      height: 50px;
      background: red;
      z-index: 999;
      " onclick="document.querySelector('.cta-modal-block').classList.toggle('d-none')"></div>
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
                    Лицо и фигура могут многое рассказать о характере человека, о состоянии его здоровья, и образе жизни. 
                    Желая обрести подтянутое тело, здоровую кожу нужно обращаться не просто в салон красоты, а к квалифицированными специалистами. 
                    Косметические проблемы требуют профессионального решения, для этого существует аппаратная и эстетическая косметология. 
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
            <div class="col-md-6 d-none d-md-block d-lg-block">
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
                <h2 class="mad_separator">Курсом дешевле</h2>
              </div>
              {{-- services carousel --}}
              <div class="carousel_type_2">
                <div id="serviceCarousel" class="owl-carousel" data-max-items="3">
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <div class="mad_item_hover">
                      <figure>
                        <img src="/assets/images/vacuum.jpeg" alt="">
                      </figure>
                      <div class="mad_item_desc with_bg_img">
                        <h5>Вакуумно роликовый массаж</h5>
                      </div>
                      <a href="#" class="item_overlay">
                        <div class="text_holder">
                          <p>Описание комплекса</p>
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
                        <img src="/assets/images/piling.jpeg" alt="">
                      </figure>
                      <div class="mad_item_desc with_bg_img">
                        <h5>Пилинги</h5>
                      </div>
                      <a href="#" class="item_overlay">
                        <div class="text_holder">
                          <p>Описание комплекса</p>
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
                        <img src="/assets/images/vibr.jpeg" alt="">
                      </figure>
                      <div class="mad_item_desc with_bg_img">
                        <h5>Вибрационные массажи</h5>
                      </div>
                      <a href="#" class="item_overlay">
                        <div class="text_holder">
                          <p>Описание комплекса</p>
                        </div>
                      </a>
                    </div>
                    <!-- /Carousel Item -->
                  </div>
                  <!-- /Slide -->
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
                  <h2>Перечень услуг</h2>
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
          <div class="ticker d-flex align-items-center">
            <div class="light-overlay"></div>
            <ul class="d-flex ticker-list" style="flex-wrap: nowrap!important;">
              <li><img src="{{ asset('/assets/images/certificates/cert-1.jpg') }}" alt=""></li>
              <li><img src="{{ asset('/assets/images/certificates/cert-2.jpg') }}" alt=""></li>
              <li><img src="{{ asset('/assets/images/certificates/cert-3.jpg') }}" alt=""></li>
              <li><img src="{{ asset('/assets/images/certificates/cert-4.jpg') }}" alt=""></li>
              <li><img src="{{ asset('/assets/images/certificates/cert-5.jpg') }}" alt=""></li>
              <li><img src="{{ asset('/assets/images/certificates/cert-6.jpg') }}" alt=""></li>
            </ul>
          </div>
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
                    <a href="javascript:void(0)" class="mad_item_hover style2">
                      
                      <figure>
                        <img src="/assets/images/team-1.png" alt="">
                      </figure>
                      <div class="mad_item_desc with_bg_img">
                        <div class="mad_author style2">
                          <h3 class="mad_title_style2">Вершинина Лариса</h3>
                          <span>Аппаратный массажист</span>
                        </div>
                      </div>

                    </a>
                    <!-- /Carousel Item -->
                  </div>
                  <div>
                    <!-- Carousel Item -->
                    <a href="javascript:void(0)" class="mad_item_hover style2">
                      
                      <figure>
                        <img src="/assets/images/women_457x524.png" alt="">
                      </figure>
                      <div class="mad_item_desc with_bg_img">
                        <div class="mad_author style2">
                          <h3 class="mad_title_style2">Ашуркина Анастасия</h3>
                          <span>Основатель студии</span>
                        </div>
                      </div>

                    </a>
                    <!-- /Carousel Item -->
                  </div>
                  <div>
                    <!-- Carousel Item -->
                    <a href="javascript:void(0)" class="mad_item_hover style2">
                      
                      <figure>
                        <img src="/assets/images/team-2.png" alt="">
                      </figure>
                      <div class="mad_item_desc with_bg_img">
                        <div class="mad_author style2">
                          <h3 class="mad_title_style2">Тереньтьева Ксения</h3>
                          <span>Аппаратный массажист</span>
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
      <div class="mad_section paralax_image_bg4 position-relative" style="background: url('{{ asset('/assets/images/mapaa.jpeg') }}')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
              <div class="mad_section_container mad_item_offset">
                <h3 class="mad_title_style1">Мы на связи</h3>
                <h2 class="text-white">Наши контакты</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="full_width_bg_pattern bg_pattern_red">
          <div class="container">
            <div class="row">
              <div class="col-md-5 d-none d-md-block d-lg-block">
                <figure><img src="/assets/images/magazine_620x480.png" alt=""></figure>
              </div>
              <div class="col-md-7">
                <div class="mad_section_container">
                  <div class="contact-section">
                    <ul class="list-unstyled contact-list">
                      <li> 
                        <div class="icon">
                          <object data="{{ asset('/assets/icons/map-marker.svg') }}" type=""></object>
                        </div>
                        <span>{{ $address }}</span>
                      <li> 
                        <div class="icon">
                          <object data="{{ asset('/assets/icons/phone-icon.svg') }}" type=""></object>
                        </div>
                        <span><a href="tel:{{ $phone }}">{{ $phone }}</a></span>
                      <li> 
                        <div class="icon">
                          <object data="{{ asset('/assets/icons/envelope.svg') }}" type=""></object>
                        </div>
                        <span><a href="mailto:{{ $emailAddress }}">{{ $emailAddress }}</a></span>
                      </li>
                    </ul>
                    <div class="social_icon_list">
                      <h5 class="mb-3 text-white">Мы в соц. сетях</h5>
                      <div class="social-mobile">
                        <a href="{{ $vkGroup }}" class="vk">
                          <span></span>
                          <object data="http://weiss-studio.dd/assets/icons/vk.svg" type=""></object>
                        </a>
                        <a href="{{ $insta }}" class="inst">
                          <span></span>
                          <object data="http://weiss-studio.dd/assets/icons/inst.svg" type=""></object>
                        </a>
                        <a href="{{ $waLink }}" class="wa">
                          <span></span>
                          <object data="http://weiss-studio.dd/assets/icons/wa.svg" type=""></object>
                        </a>
                        <a href="{{ $tgLink }}" class="tg">
                          <span></span>
                          <object data="http://weiss-studio.dd/assets/icons/telegram.svg" type=""></object>
                        </a>
                    </div>
                    </div>
                  </div>
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
    <x-modal/>
  </div>
  
@endsection