@extends('components.front-layout')
@section('content')

  <x-hero-banner/>

  {{-- content part starts --}}
  <div id="content">

    
    <div id="about">
      <div class="mad_section inset_none v_align_center_blocks">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <figure class="section_image align_right">
                <img src="/assets/images/women_457x524.png" alt="">
              </figure>
            </div>
            <div class="col-md-6">
              <div class="mad_section_container">
                <article>
                  <h3 class="mad_title_style1">Welcome to</h3>
                  <h2>Spa & Salon Theme</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. Sed viverra erat finibus, elementum velit sit amet.</p>
                  <div class="mad_author">
                    <h3 class="mad_title_style2">JhonDoe.</h3>
                    <span>Founder and Hairstylist</span>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- greeting --}}
      <div class="mad_section inset_none">
        <div class="mad_full_width_grid">
          <div class="row pattern_section">
            <div id="mad_item_second" class="col-md-6">
              <div class="mad_pattern bg_pattern_red clearfix">
                <article class="f_right">
                  <h2>Hair Salon</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                  <a href="#" class="mad_button style2">View all Services</a>
                </article>
              </div>
            </div>
            <div id="mad_item_first" class="col-md-6">
              <figure class="mad_img_wrap">
                <img src="/assets/images/img_women1.jpg" alt="">
              </figure>
            </div>
          </div>
          <div class="row pattern_section">
            <div class="col-md-6">
              <figure>
                <img src="/assets/images/img_women2.jpg" alt="">
              </figure>
            </div>
            <div class="col-md-6">
              <div class="mad_pattern bg_pattern_dark">
                <article>
                  <h2>Beauty Spa</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                  <a href="#" class="mad_button style2">View all Services</a>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- end greeting --}}
      
      {{-- Testimonials --}}
      <div class="mad_section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="mad_section_container mad_testimonials">
                <article>
                  <h3 class="mad_title_style1">Testimonials</h3>
                  <h2>Customers Says</h2>
                  <!-- Carousel -->
                  <div class="carousel_type_1">
                    <div class="owl-carousel" data-max-items="1" data-autoplay="true">
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
                </article>
              </div>
            </div>
            <div class="col-md-6">
              <figure class="section_image align_right">
                <img src="/assets/images/565x520_img.jpg" alt="">
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- end testimonials --}}
    {{-- Services --}}
    <div id="services">
    
      <div class="paralax_image_bg2">
        
        <svg class="separator_type_5_path top" preserveAspectRatio="none" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0 L30 100 L100 0 L100 100 L0 100 Z" fill="#fff" stroke="#fff" stroke-width="-1"></path>
          <path d="M0 0 L0 0 L50 100 L100 0 L100 0 Z" fill="rgba(255,255,255,0.01)"></path>
        </svg>

        <div class="container">
          
          <div class="row">
            
            <div class="col-sm-12">

              <div class="mad_section_container">
                <h3 class="mad_title_style1">Services</h3>
                <h2 class="mad_separator">Beauty Services</h2>
              </div>

              <!-- Carousel -->
              <div class="carousel_type_2">
                
                <div class="owl-carousel" data-max-items="3">
                    
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

            </div>

          </div>

        </div>

        <svg class="separator_type_5_path" preserveAspectRatio="none" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0 L70 100 L100 0 L100 100 L0 100 Z" fill="#fff" stroke="#fff" stroke-width="-1"></path>
          <path d="M0 -1 L0 0 L50 100 L100 0 L100 -1 Z" fill="rgba(255,255,255,0.01)"></path>
        </svg>

      </div>

      <!-- Services3 -->
      <div id="services3" class="mad_section inset_none v_align_center_blocks">
        
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
                  <h3 class="mad_title_style1">Services Pricing</h3>
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
                    <li class=""><a href="#tab_1" class="icon-cut-2">Hair</a></li>
                    <li class=""><a href="#tab_2" class="icon-women">Makeup</a></li>
                    <li class=""><a href="#tab_3" class="icon-other-1">Shaving</a></li>
                    <li class=""><a href="#tab_4" class="icon-medical">Manicure / Pedicure</a></li>
                    <li class=""><a href="#tab_5" class="icon-night">Waxing</a></li>
                    <li class=""><a href="#tab_6" class="icon-people">Massage</a></li>
                  </ul>
                  <!--tabs content-->
                  <div class="tabs_content">
                    <div id="tab_1">

                      <div class="tabs tabs-section style2">

                        <!--tabs navigation-->
                        <div class="clearfix tabs_conrainer">
                          <ul class="tabs_nav clearfix">
                            <li class=""><a href="#tab1">Hair cut</a></li>
                            <li class=""><a href="#tab2">Color</a></li>
                            <li class=""><a href="#tab3">Dressing</a></li>
                            <li class=""><a href="#tab4">Styling</a></li>
                          </ul>
                        </div>

                        <!--tabs content-->
                        <div class="tabs_content">
                          <div id="tab1">

                            <div class="accordion">

                              <!--accordion item-->
                              <div class="accordion_item">
                                <h5 class="a_title active">
                                  Womens - Long Hair Cut 
                                  <span>$ 35</span>
                                </h5>
                                <div class="a_content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula feugiat. </p>
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
                          <div id="tab2">

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
                          <div id="tab3">

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
                          <div id="tab4">

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
                    <div id="tab_2">
                      
                      <div class="tabs tabs-section style2">

                        <!--tabs navigation-->
                        <div class="clearfix tabs_conrainer">
                          <ul class="tabs_nav clearfix">
                            <li class=""><a href="#tabl-1">Hair cut</a></li>
                            <li class=""><a href="#tabl-2">Color</a></li>
                            <li class=""><a href="#tabl-3">Dressing</a></li>
                            <li class=""><a href="#tabl-4">Styling</a></li>
                          </ul>
                        </div>

                        <!--tabs content-->
                        <div class="tabs_content">
                          <div id="tabl-1">

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
                          <div id="tabl-2">

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
                          <div id="tabl-3">

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
                          <div id="tabl-4">

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
                    <div id="tab_3">

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
                    <div id="tab_4">

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
                    <div id="tab_5">

                      <div class="tabs tabs-section style2">

                        <!--tabs navigation-->
                        <div class="clearfix tabs_conrainer">
                          <ul class="tabs_nav clearfix">
                            <li class=""><a href="#ttab-1">Hair cut</a></li>
                            <li class=""><a href="#ttab-2">Color</a></li>
                            <li class=""><a href="#ttab-3">Dressing</a></li>
                            <li class=""><a href="#ttab-4">Styling</a></li>
                          </ul>
                        </div>

                        <!--tabs content-->
                        <div class="tabs_content">
                          <div id="ttab-1">

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
                          <div id="ttab-2">

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
                          <div id="ttab-3">

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
                          <div id="ttab-4">

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
                    <div id="tab_6">

                      <div class="tabs tabs-section style2">

                        <!--tabs navigation-->
                        <div class="clearfix tabs_conrainer">
                          <ul class="tabs_nav clearfix">
                            <li class=""><a href="#tab1-1">Hair cut</a></li>
                            <li class=""><a href="#tab1-2">Color</a></li>
                            <li class=""><a href="#tab1-3">Dressing</a></li>
                            <li class=""><a href="#tab1-4">Styling</a></li>
                          </ul>
                        </div>

                        <!--tabs content-->
                        <div class="tabs_content">
                          <div id="tab1-1">

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
                          <div id="tab1-2">

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
                          <div id="tab1-3">

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
                          <div id="tab1-4">

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
    
    <!-- Gallery -->
    <div id="gallery">
      
      <div class="mad_section with_bg_1">
        
        <div class="container relative">
        
          <div class="row">
            
            <div class="col-sm-12">
              
              <div class="mad_section_container">
                <h3 class="mad_title_style1">Gallery</h3>
                <h2 class="mad_separator style2">See our Works</h2>

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
          
          <div class="owl-carousel gallery_carousel" data-max-items="4">
              
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

    <!-- Team -->
    <div id="team">
      
      <div class="mad_section">
        
        <div class="container">
        
          <div class="row">
            
            <div class="col-sm-12">
              
              <div class="align_center mad_item_offset">

                <div class="mad_section_container">
                  <h3 class="mad_title_style1">Team</h3>
                  <h2>Our Experts</h2>
                </div>

              </div>
              <!-- Carousel -->
              <div class="carousel_type_1 style2">
                
                <div class="owl-carousel" data-max-items="3" data-autoplay="true">
                    
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <a href="#" class="mad_item_hover style2">
                      
                      <figure>
                        <img src="/assets/images/women_model1.png" alt="">
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
                  <!-- /Slide -->
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <a href="#" class="mad_item_hover style2">
                      
                      <figure>
                        <img src="/assets/images/women_model2.png" alt="">
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
                  <!-- /Slide -->
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <a href="#" class="mad_item_hover style2">
                      
                      <figure>
                        <img src="/assets/images/women_model3.png" alt="">
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
                  <!-- /Slide -->
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <a href="#" class="mad_item_hover style2">
                      
                      <figure>
                        <img src="/assets/images/women_model1.png" alt="">
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
                  <!-- /Slide -->
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <a href="#" class="mad_item_hover style2">
                      
                      <figure>
                        <img src="/assets/images/women_model2.png" alt="">
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
                  <!-- /Slide -->
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <a href="#" class="mad_item_hover style2">
                      
                      <figure>
                        <img src="/assets/images/women_model3.png" alt="">
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
                  <!-- /Slide -->
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <a href="#" class="mad_item_hover style2">
                      
                      <figure>
                        <img src="/assets/images/women_model1.png" alt="">
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
                  <!-- /Slide -->
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <a href="#" class="mad_item_hover style2">
                      
                      <figure>
                        <img src="/assets/images/women_model2.png" alt="">
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
                  <!-- /Slide -->
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <a href="#" class="mad_item_hover style2">
                      
                      <figure>
                        <img src="/assets/images/women_model3.png" alt="">
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
                  <!-- /Slide -->
                  
                </div>
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- Offers & News -->
    <div id="news">
      
      <div class="mad_section paralax_image_bg4">
        
        <div class="container">
        
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">

              <div class="mad_section_container mad_item_offset">
                <h3 class="mad_title_style1">Offers n News</h3>
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
    
    <!-- Blog -->
    <div id="blog">
      
      <div class="mad_section paralax_image_bg1">
        
        <div class="container">
          
          <div class="row">
            
            <div class="col-sm-12">

              <div class="mad_section_container">
                <h3 class="mad_title_style1">Blog</h3>
                <h2 class="mad_separator style2">Latest News</h2>
              </div>

              <!-- Carousel -->
              <div class="carousel_type_2">
                
                <div class="owl-carousel style2" data-max-items="2">
                    
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <div class="mad_blog_post">
                      <figure>
                        <img src="/assets/images/570x370_img1.jpg" alt="">
                        <div class="mad_post_date">

                          <div class="date">18 / JAN / 2016</div>
                          
                        </div>
                      </figure>
                      <div class="mad_post_content clearfix">
                        <div class="mad_post_info">

                          <h2><a href="#">Slider Blog Post Title Here</a></h2>
                          <div class="mad_post_action">
                            <a href="#" class="admin">Admin</a>
                            <a href="#" class="days">6 days ago</a>
                            <a href="#" class="comment">10 comments</a>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                        </div>
                      </div>

                    </div>
                    <!-- /Carousel Item -->
                  </div>
                  <!-- /Slide -->
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <div class="mad_blog_post">
                      <figure>
                        <img src="/assets/images/570x370_img2.jpg" alt="">
                        <div class="mad_post_date">

                          <div class="date">18 / JAN / 2016</div>
                          
                        </div>
                      </figure>
                      <div class="mad_post_content clearfix">
                        <div class="mad_post_info">

                          <h2><a href="#">Slider Blog Post Title Here</a></h2>
                          <div class="mad_post_action">
                            <a href="#" class="admin">Admin</a>
                            <a href="#" class="days">6 days ago</a>
                            <a href="#" class="comment">10 comments</a>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                        </div>
                      </div>

                    </div>
                    <!-- /Carousel Item -->
                  </div>
                  <!-- /Slide -->
                  <!-- Slide -->
                  <div>
                    <!-- Carousel Item -->
                    <div class="mad_blog_post">
                      <figure>
                        <img src="/assets/images/570x370_img1.jpg" alt="">
                        <div class="mad_post_date">

                          <div class="date">18 / JAN / 2016</div>
                          
                        </div>
                      </figure>
                      <div class="mad_post_content clearfix">
                        <div class="mad_post_info">

                          <h2><a href="#">Slider Blog Post Title Here</a></h2>
                          <div class="mad_post_action">
                            <a href="#" class="admin">Admin</a>
                            <a href="#" class="days">6 days ago</a>
                            <a href="#" class="comment">10 comments</a>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

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

        </div>

      </div>

    </div>

    <!-- Contact -->
    <div id="contact">
      
      <div class="mad_section">
        
        <div class="container">
        
          <div class="row">
            
            <div class="col-md-6">

              <div class="mad_section_container">
                <article>
                  <h3 class="mad_title_style1">Get in Touch</h3>
                  <h2>Make Inquiry</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod dignissim massa ut venenatis. Vivamus eleifend sem id ligula sollicitudin feugiat. Sed viverra erat finibus, elementum velit sit amet.</p>
                </article>
              </div>

            </div>
            <div class="col-md-6">
              
              <form id="contact_form" class="contact_form">
                <ul>
                  <li class="row">

                    <div class="col-sm-6">
                      <input type="text" name="cf_name" placeholder="First Name">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="cf_name" placeholder="Last Name">
                    </div>

                  </li>
                  <li>
                    <input type="url" name="cf_email" placeholder="Emai">
                  </li>
                  <li>
                    <textarea name="cf_message" placeholder="Message..."></textarea>
                  </li>
                </ul>
                <button class="mad_button">Make An Appointment</button>
              </form>

            </div>

          </div>

        </div>

      </div>

      <!-- Contact -->
      <div id="contact2" class="mad_section with_bg_2">
        
        <div class="container">
          
          <div class="mad_contact_items mad_flex_list">
            
            <div class="row">
              <div class="col-md-3 col-sm-6">
                
                <div class="mad_contact_item">
                  <h4 class="lnr lnr-location">Contact Us</h4>
                  <p>121 King Street, Melbourne <br>
                  Victoria 3000 Australia</p>
                  <a href="#">info@yourdomain.com</a>
                </div>

              </div>
              <div class="col-md-3 col-sm-6">
                <div class="mad_contact_item">
                  <h4 class="lnr lnr-clock">Opening Times</h4>
                  <p>Mon - Thu 11:30 - 22:00 clock <br>
                  Fri - Sat 11:30 - 24:00 clock </p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="mad_contact_item">
                  <h4 class="lnr lnr-calendar-full">Apointment</h4>
                  <p>Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit!</p>
                  <a href="#">Phone: +61 3 8376 6284</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="mad_contact_item">
                  <h4 class="lnr lnr-earth">Stay Connected</h4>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection