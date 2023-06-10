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
                  <h2>Эстетическая Косметология и аппаратные массажи</h2>
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
                  К сожалению, возрастных изменений не удалось избежать еще никому, но все эти процессы можно замедлить и простимулировать молодость кожи лица как можно дольше.
                  В нашей студии аппаратной и эстетической косметологии есть всё необходимое для поддержания тонуса и молодости вашей кожи. 
                </p>
                <a href="#services3" class="mad_button style2">Полный список услуг</a>
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
                  Наше тело нуждается в уходе и заботте, будь-то улучшение состояния кожи, тонуса, устранение конкретных проблем.
                  Мы подберем курс в зависимости от показаний, возраста и индивидуальных особенностей организма и поможем выглядеть безупречно во всех отношениях.
                </p>
                <a href="#services3" class="mad_button style2">Полный список услуг</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- end greeting --}}

      {{-- Testimonials --}}
      <div class="mad_section" id="testimonials">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 d-block d-md-flex justify-content-center">
              <div class="testimonials-links">
                <a href="{{ $yandexLink ?? '#none'}}" target="_blank">
                <div class="item yandex">
                  <div class="img" style="background: url('{{ asset('/assets/images/yandex-logo.png') }}')"></div>
                  <h4>Мы на Яндекс</h4>
                </div>
                </a>
                <a href="{{ $gisLink ?? '#none'}}">
                <div class="item double-gis">
                  <div class="img" style="background: url('{{ asset('/assets/images/2gis-logo.png') }}')"></div>
                  <h4>Мы на 2gis</h4>
                </div>
                </a>
                <a href="{{ $googleLink ?? '#none'}}">
                <div class="item google">
                  <div class="img" style="background: url('{{ asset('/assets/images/google-logo.png') }}')"></div>
                  <h4>Мы на Google</h4>
                </div>
                </a>
              </div>
            </div>
            <div class="col-md-8">
              <div class="mad_section_container mad_testimonials">
                <article>
                  <h3 class="mad_title_style1">Отзывы</h3>
                  <h2>Что о нас говорят</h2>
                  <p>Просмотреть другие или оставить новый вы можете по ссылкам на Яндекс, Google или 2gis</p>
                  {{-- testimonial carousel --}}
                  <div class="carousel_type_1">
                    <div id="testimonialCarousel" class="owl-carousel" data-max-items="1" data-autoplay="true">
                      {{-- single slide --}}
                      @foreach ($testimonials as $testimonial)
                      <div>
                        <!-- Carousel Item -->
                        <blockquote>
                          <p> {{ $testimonial['text'] }} </p>
                          <div class="mad_author style2">
                            <h3 class="mad_title_style2"> {{ $testimonial['name'] }} </h3>
                            <span> {{ $testimonial['type'] }} </span>
                          </div>
                        </blockquote>
                        <!-- /Carousel Item -->
                      </div>
                      @endforeach
                      
                      {{-- /single slide --}}
                     
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
      <div class="paralax_image_bg2" style="background:url('{{ asset('/assets/images/promotion-background.jpg') }}')">
        <div class="paralax-layout"></div>
        <svg class="separator_type_5_path top" preserveAspectRatio="none" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0 L30 100 L100 0 L100 100 L0 100 Z" fill="#fff" stroke="#fff" stroke-width="-1"></path>
          <path d="M0 0 L0 0 L50 100 L100 0 L100 0 Z" fill="rgba(255,255,255,0.01)"></path>
        </svg>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="mad_section_container">
                <h3 class="mad_title_style1">Акции на наши услуги</h3>
                <h2 class="mad_separator">Всегда знаем, что предложить</h2>
              </div>
              {{-- services carousel --}}
              <div class="carousel_type_2">
                <div id="serviceCarousel" class="owl-carousel" data-max-items="3">
                  <div class="promotion-item" style="background: url('{{ asset('/assets/images/back1.jpeg') }}')">
                    <div class="overlay" style="background: rgba(0,0,0,0.5)"></div>
                    <div class="promotion-content">
                      <div class="item">
                        <h4 class="text-white">Приведи друга</h4>
                        <p class="text-white">
                          Рекомендуй нас своим друзьям и получи <b>30 минут любой процедуры бесплатно</b>
                        </p>
                      </div>  
                    </div>
                  </div>
                  <div class="promotion-item" style="background: url('{{ asset('/assets/images/back2.jpeg') }}')">
                    <div class="overlay" style="background: rgba(0,0,0,0.5)"></div>
                    <div class="promotion-content">
                      <div class="item">
                        <h4 class="text-white">Пробный массаж</h4>
                        <p class="text-white">
                          При первом посещении пробный сеанс массажа (30 минут) - <b>всего 300 рублей!</b>
                        </p>
                      </div>  
                    </div>
                  </div>
                  <div class="promotion-item" style="background: url('{{ asset('/assets/images/back3.jpeg') }}')">
                    <div class="overlay" style="background: rgba(0,0,0,0.5)"></div>
                    <div class="promotion-content">
                      <div class="item">
                        <h4 class="text-white">Постоянный клиент</h4>
                        <p class="text-white">
                          Для постоянных клиентов <b>скидка 500 рублей</b> на покупку абонемента на процедуры
                        </p>
                      </div>
                    </div>
                  </div>
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
            <div class="col-md-8">
              <div class="mad_section_container">
                <article>
                  <h3 class="mad_title_style1">Цены на услуги</h3>
                  <h2>Перечень услуг</h2>
                  <p>
                    Ниже приведены цены на наши услуги и комплексы процедур, цены на процедуры представлены как в разовом посещении, так и при покупке комплексом. Если у вас возникли вопросы, свяжитесь с нами удобным для вас способом.
                    Телефон для связи: <a href="tel:{{$phone}}">{{$phone}}</a>
                  </p>
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
                  <ul class="tabs_nav clearfix">
                    @foreach ($services->categories as $category)
                      <li data-tab="{{ $category['data-tab'] }}"><span class="@if ($loop->index == 0) active @endif">{{ $category['title'] }}</span></li>
                    @endforeach
                  </ul>
                  <div class="tabs_content">
                    @foreach ($services->categories as $category)
                      <div data-tab-target="{{ $category['data-tab'] }}" class="tab-content @if ($loop->index > 0) d-none @endif">
                        <div class="tabs tabs-section style2">
                          <div class="clearfix tabs_conrainer"></div>
                          <div class="tabs_content">
                            <div class="service-list-wrapper">
                              <ul class="list-unstyled service-list">
                                {{-- single item --}}
                                @foreach ($services->services as $item)
                                @if ($item['category_id'] == $category['id'])
                                <li class="item">
                                  <div class="row align-items-center">
                                    <div class="col-12 col-md-10 col-lg-10">
                                      <h4>{{ $item['title'] }}</h4>
                                      <p class="m-0"> {{ $item['description'] }} </p>
                                      <hr>
                                    </div>
                                    <div class="col-12 col-md-2 col-lg-2 mt-0 d-flex d-md-block price-block">
                                      <p class="m-0">Стоимость:</p>
                                      <span class="position-relative"></span>
                                      <button class="order-button" data-toggle="modal" data-target="order-modal">Записаться</button>
                                    </div>
                                    <div class="col-12 mt-0 d-flex align-items-center">
                                      <ul class="procedures">
                                        @foreach ($services->prices as $price)
                                          @if ($price['product_id'] == $item['id'])
                                            <li class=" @if ($loop->index == 0) active @endif" data-price="{{ $price['value'] }}">{{ $price['title'] }}</li>
                                          @endif
                                        @endforeach
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                                @endif
                                @endforeach
                                
                                {{-- end single item --}}
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <svg class="separator_type_5_path" style="bottom:99px" preserveAspectRatio="none" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0 L70 100 L100 0 L100 100 L0 100 Z" fill="#fff" stroke="#fff" stroke-width="-1"></path>
          <path d="M0 -1 L0 0 L50 100 L100 0 L100 -1 Z" fill="rgba(255,255,255,0.01)"></path>
        </svg>
      </div>
    </div>
    <x-modal/>
  </div>
  
@endsection