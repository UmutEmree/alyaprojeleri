@extends('../main')
@section('content')
<div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="qrt-half-content-frame">
          <div class="qrt-left">

            <div class="row qrt-p-0-40">
              <div class="col-lg-12">

                <div class="qrt-page-cover">
                  <img src="img/banners/cover2.jpg" alt="our office">
                  <div class="qrt-about-info">
                    <div class="qrt-cover-info">
                    
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">@lang('main.contact-info')</h3>

              </div>
              <div class="col-lg-4">

                <div class="qrt-icon-box">
                  <!-- icon -->
                  <img class="mb-20" src="{{asset('img/icons/icon-4.svg') }}" alt="icon">
                  <!-- title -->
                  <h4 class="mb-20">@lang('main.phone')</h4>
                  <!-- description -->
                  <a href="tel:4442592" data-no-swup><span>444 25 92</span></a><br>
                </div>

              </div>
              <div class="col-lg-4">

                <div class="qrt-icon-box">
                  <!-- icon -->
                  <img class="mb-20" src="{{asset('img/icons/icon-5.svg') }}" alt="icon">
                  <!-- title -->
                  <h4 class="mb-20">Email</h4>
                  <a href="mailto:info@alyaprojeleri.com" data-no-swup><span>info@alyaprojeleri.com</span></a><br>
                </div>

              </div>
              <div class="col-lg-4">

                <div class="qrt-icon-box">
                  <!-- icon -->
                  <img class="mb-20" src="{{asset('img/icons/icon-6.svg') }}" alt="icon">
                  <!-- title -->
                  <h4 class="mb-20">@lang('main.location')</h4>
                  <a href="https://goo.gl/maps/MAa6Au5d9ZMgSfBV7" target="_blank" data-no-swup><span>Ataköy 7-8-9-10. Kısım Mah. Çobançeşme E5 Yan Yol Cad. Ataköy Towers 20/1 A Blok. <br> Kat:12 Ofis No: 155-158-159-160-161 Bakırköy/İstanbul Türkiye</span></a>
                </div>

              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

        
            <div class="qrt-divider qrt-space-fix"></div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">@lang('main.location')</h3>

              </div>
              <div class="col-12">

                <div class="qrt-map-frame qrt-map-frame-2">
                  <div class="qrt-lock"><i class="fas fa-lock"></i></div>
                  <div id="map" class="qrt-map"></div>
                </div>

              </div>
            </div>

            <div class="qrt-divider"></div>

         

          </div>
      @include('inc/form-sag')
        </div>
      </div>
    </div>
  </div>

@endsection