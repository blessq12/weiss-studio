  <footer class="footer">
    {{-- footer section --}}
    <div class="container">
      <div class="row">
        <div class="col-md-4 position-relative d-flex justify-content-center justify-content-md-start justify-content-lg-start">
          <div class="footer-logo">
              <object data="{{ asset('/assets/icons/logo-text.svg') }}" type=""></object>
          </div>
        </div>
        <div class="col-md-4 text-center text-md-start">
          <p class="m-0">Телефон: <a href="tel:{{$phone}}">{{$phone}}</a></p>
          <p class="m-0">Адрес: {{$address}}</p>
        </div>
        <div class="col-md-4 text-center text-md-end mt-2 mt-md-0 mt-lg-0">
          <p class="m-0 fw-bold text-white">Студия коррекции фигуры Weiss в Томске</p>
          <p class="m-0">Разработано: <a href="http://code-me.ru">code-me.ru</a> в {{ date('Y') }}</p>
        </div>
      </div>
    </div>
    {{-- end footer section --}}
  </footer>
</div>

<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins.js')}}"></script>
<script src="{{asset('/assets/js/script.js')}}"></script>
</body>
</html>