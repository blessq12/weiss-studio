<footer id="footer" class="footer">
    <!-- Footer section -->
    <div class="mad_top_footer">
      <div class="v_align_center_blocks">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="mad_nav_list">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4"> 
              <a href="#" class="mad_logo_container">
                <img src="/assets/images/logo.png" alt="">
              </a>
            </div>
            <div class="col-sm-4">
              <div class="align_right">
                <span>© {{ date('Y') }} Spa and Salon Template</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<!--scripts include-->
<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins.js')}}"></script>
<script src="{{asset('/assets/js/script.js')}}"></script>
</body>
</html>