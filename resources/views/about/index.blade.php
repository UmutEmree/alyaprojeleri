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
                  <img src="img/banners/cover3.jpg" alt="our office">
                  <div class="qrt-about-info qrt-right-position">
                    
                  </div>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-lg-4">

                <h3 class="qrt-mb-40">{{ $about->getTranslatedAttribute('title',$locale,'fallbackLocale') }}</h3>

              </div>
              <div class="col-lg-8 qrt-mb-25">

              {!! $about->getTranslatedAttribute('body',$locale,'fallbackLocale') !!}

              </div>
              <div class="col-lg-12">

                <blockquote>
                Modern bir yaşam için atacağınız adımlar, her zaman günceli takip eden projelerimizle daha sağlam!.
                </blockquote>

              </div>
            </div>

            <div class="qrt-divider"></div>

            <div class="row">
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">10</span>
                  </div>
                  <h5>Yıllık Tecrübe</h5>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">15</span>
                  </div>
                  <h5>Tamamlanan Proje</h5>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">25000</span>
                  </div>
                  <h5>Mutlu Müşteri</h5>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">20</span>
                  </div>
                  <h5>....</h5>
                </div>

              </div>
            </div>

      
          </div>
          <!-- Form Alanı -->
        @include('inc/form-sag')
        </div>
      </div>
    </div>
@endsection