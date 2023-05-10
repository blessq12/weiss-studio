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
                  <h3 class="mad_title_style1">Добро пожаловать</h3>
                  <h2>Косметология и аппаратные массажи</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. Sed viverra erat finibus, elementum velit sit amet.</p>
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
                  Процедуры направленные на омоложение и поддержание состояния кожи лица
                </p>
                <a href="#" class="mad_button style2">Все услуги</a>
              </div>
              </div>
            <div class="col-12 col-md-6 col-lg-6 right-image d-none d-md-block d-lg-block" data-background=""></div>
            <div class="col-12 d-block d-md-none d-lg-none position-relative">
              <img src="https://hips.hearstapps.com/hmg-prod/images/6-beauty-treatments-every-woman-should-try-in-her-lifetime-1487255003.jpg" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-6 left-image d-none d-md-block d-lg-block"></div>
            <div class="col-12 d-block d-md-none d-lg-none position-relative">
              <img src="http://via.placeholder.com/1024x512" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
              <div class="greeting-wrap greeting-last">
                <h2>для тела</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, praesentium ab. Eaque nulla dolore voluptates eius aspernatur, dignissimos sed magni distinctio! Tenetur magni, inventore id amet est veniam fugiat expedita?</p>
                <a href="#" class="mad_button style2">View all Services</a>
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat.
                          </p>
                          <div class="mad_author style2">
                            <h3 class="mad_title_style2">Alex Jhon</h3>
                            <span> Founder and CEO</span>
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat.
                          </p>
                          <div class="mad_author style2">
                            <h3 class="mad_title_style2">Alex Jhon</h3>
                            <span> Founder and CEO</span>
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat.
                          </p>
                          <div class="mad_author style2">
                            <h3 class="mad_title_style2">Alex Jhon</h3>
                            <span> Founder and CEO</span>
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
                    <li data-tab="first"><span class="active">Hair</span></li>
                    <li data-tab="second"><span class="">Makeup</span></li>
                    <li data-tab="third"><span class="">Shaving</span></li>
                    <li data-tab="fourth"><span class="">Manicure / Pedicure</span></li>
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
                          <h2>content 1</h2>
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
                          <h2>content 2</h2>
                        </div>

                      </div>

                    </div>
                    <div data-tab-target="third" class="tab-content d-none">

                      <div class="tabs tabs-section style2">

                        <!--tabs navigation-->
                        <div class="clearfix tabs_conrainer">
                          <ul class="tabs_nav clearfix">
                            <li class=""><a href="#tabb-1">Hair cut</a></li>
                            <li class=""><a href="#tabb-2">Color</a></li>
                            <li class=""><a href="#tabb-3">Dressing</a></li>
                            <li class=""><a href="#tabb-4">Styling</a></li>
                          </ul>
                        </div>

                        <!--tabs content-->
                        <div class="tabs_content">
                          <div id="tabb-1">

                            <div class="accordion">

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title active">
                                  Womens - Long Hair Cut 
                                  <span>$ 35</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Long Hair Cut 
                                  <span>$ 30</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Short Hair Cut 
                                  <span>$ 25</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Childrens - Hair Cut 
                                  <span>$ 20</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                            </div>

                          </div>
                          <div id="tabb-2">

                            <div class="accordion">

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title active">
                                  Womens - Long Hair Cut 
                                  <span>$ 35</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Long Hair Cut 
                                  <span>$ 30</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Short Hair Cut 
                                  <span>$ 25</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Childrens - Hair Cut 
                                  <span>$ 20</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                            </div>

                          </div>
                          <div id="tabb-3">

                            <div class="accordion">

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title active">
                                  Womens - Long Hair Cut 
                                  <span>$ 35</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Long Hair Cut 
                                  <span>$ 30</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Short Hair Cut 
                                  <span>$ 25</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Childrens - Hair Cut 
                                  <span>$ 20</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                            </div>

                          </div>
                          <div id="tabb-4">

                            <div class="accordion">

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title active">
                                  Womens - Long Hair Cut 
                                  <span>$ 35</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Long Hair Cut 
                                  <span>$ 30</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Short Hair Cut 
                                  <span>$ 25</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Childrens - Hair Cut 
                                  <span>$ 20</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                            </div>

                          </div>
                        </div>

                      </div>

                    </div>
                    <div data-tab-target="fourth" class="tab-content d-none">

                      <div class="tabs tabs-section style2">

                        <!--tabs navigation-->
                        <div class="clearfix tabs_conrainer">
                          <ul class="tabs_nav clearfix">
                            <li class=""><a href="#taab-1">Hair cut</a></li>
                            <li class=""><a href="#taab-2">Color</a></li>
                            <li class=""><a href="#taab-3">Dressing</a></li>
                            <li class=""><a href="#taab-4">Styling</a></li>
                          </ul>
                        </div>

                        <!--tabs content-->
                        <div class="tabs_content">
                          <div id="taab-1">

                            <div class="accordion">

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title active">
                                  Womens - Long Hair Cut 
                                  <span>$ 35</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Long Hair Cut 
                                  <span>$ 30</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Short Hair Cut 
                                  <span>$ 25</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Childrens - Hair Cut 
                                  <span>$ 20</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                            </div>

                          </div>
                          <div id="taab-2">

                            <div class="accordion">

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title active">
                                  Womens - Long Hair Cut 
                                  <span>$ 35</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Long Hair Cut 
                                  <span>$ 30</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Short Hair Cut 
                                  <span>$ 25</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Childrens - Hair Cut 
                                  <span>$ 20</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                            </div>

                          </div>
                          <div id="taab-3">

                            <div class="accordion">

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title active">
                                  Womens - Long Hair Cut 
                                  <span>$ 35</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Long Hair Cut 
                                  <span>$ 30</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Short Hair Cut 
                                  <span>$ 25</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Childrens - Hair Cut 
                                  <span>$ 20</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                            </div>

                          </div>
                          <div id="taab-4">

                            <div class="accordion">

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title active">
                                  Womens - Long Hair Cut 
                                  <span>$ 35</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Long Hair Cut 
                                  <span>$ 30</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Mans - Short Hair Cut 
                                  <span>$ 25</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
                                </div>
                              </div>

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title">
                                  Childrens - Hair Cut 
                                  <span>$ 20</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. </p>
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
            <!-- Slide -->
            <div>
              <!-- Carousel Item -->
              <div class="mad_item_hover">
                <figure>
                  <img src="/assets/images/480x370_img1.jpg" alt="">
                </figure>
                <div class="item_overlay">
                  <div class="text_holder">
                    <a href="/assets/images/480x370_img1.jpg" class="mad_icon_plus gallery" rel="category"></a>
                    <a href="#" class="mad_icon_link"></a>
                  </div>
                </div>
              </div>
              <div class="mad_item_hover">
                <figure>
                  <img src="/assets/images/480x370_img5.jpg" alt="">
                </figure>
                <div class="item_overlay">
                  <div class="text_holder">
                    <a href="/assets/images/480x370_img5.jpg" class="mad_icon_plus gallery" rel="category"></a>
                    <a href="#" class="mad_icon_link"></a>
                  </div>
                </div>
              </div>
              <!-- /Carousel Item -->
            </div>
            <!-- /Slide -->
            <!-- Slide -->
            <div>
              <!-- Carousel Item -->
              <div class="mad_item_hover">
                <figure>
                  <img src="/assets/images/480x370_img2.jpg" alt="">
                </figure>
                <div class="item_overlay">
                  <div class="text_holder">
                    <a href="/assets/images/480x370_img2.jpg" class="mad_icon_plus gallery" rel="category"></a>
                    <a href="#" class="mad_icon_link"></a>
                  </div>
                </div>
              </div>

              <div class="mad_item_hover">
                <figure>
                  <img src="/assets/images/480x370_img6.jpg" alt="">
                </figure>
                <div class="item_overlay">
                  <div class="text_holder">
                    <a href="/assets/images/480x370_img6.jpg" class="mad_icon_plus gallery" rel="category"></a>
                    <a href="#" class="mad_icon_link"></a>
                  </div>
                </div>
              </div>
              <!-- /Carousel Item -->
            </div>
            <!-- /Slide -->
            <!-- Slide -->
            <div>
              <!-- Carousel Item -->
              <div class="mad_item_hover">
                <figure>
                  <img src="/assets/images/480x370_img3.jpg" alt="">
                </figure>
                <div class="item_overlay">
                  <div class="text_holder">
                    <a href="/assets/images/480x370_img3.jpg" class="mad_icon_plus gallery" rel="category"></a>
                    <a href="#" class="mad_icon_link"></a>
                  </div>
                </div>
              </div>

              <div class="mad_item_hover">
                <figure>
                  <img src="/assets/images/480x370_img7.jpg" alt="">
                </figure>
                <div class="item_overlay">
                  <div class="text_holder">
                    <a href="/assets/images/480x370_img7.jpg" class="mad_icon_plus gallery" rel="category"></a>
                    <a href="#" class="mad_icon_link"></a>
                  </div>
                </div>
              </div>
              <!-- /Carousel Item -->
            </div>
            <!-- /Slide -->
            <!-- Slide -->
            <div>
              <!-- Carousel Item -->
              <div class="mad_item_hover">
                <figure>
                  <img src="/assets/images/480x370_img4.jpg" alt="">
                </figure>
                <div class="item_overlay">
                  <div class="text_holder">
                    <a href="/assets/images/480x370_img4.jpg" class="mad_icon_plus gallery" rel="category"></a>
                    <a href="#" class="mad_icon_link"></a>
                  </div>
                </div>
              </div>

              <div class="mad_item_hover">
                <figure>
                  <img src="/assets/images/480x370_img8.jpg" alt="">
                </figure>
                <div class="item_overlay">
                  <div class="text_holder">
                    <a href="/assets/images/480x370_img8.jpg" class="mad_icon_plus gallery" rel="category"></a>
                    <a href="#" class="mad_icon_link"></a>
                  </div>
                </div>
              </div>
              <!-- /Carousel Item -->
            </div>
            <!-- /Slide -->
            
          
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