@extends('../main')
@section('content')
<div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="qrt-half-content-frame">
          <div class="qrt-left">

            
            <div class="row">
              <div class="col-lg-4">

                <h3 class="qrt-mb-40">{{ $kvkk->getTranslatedAttribute('title',$locale,'fallbackLocale') }}</h3>

              </div>
              <div class="col-lg-8 qrt-mb-25">

              {!! $kvkk->getTranslatedAttribute('body',$locale,'fallbackLocale') !!}

              </div>
             
            </div>

            <div class="qrt-divider"></div>

            
      
          </div>
          <!-- Form Alanı -->
        @include('inc/form-sag')
        </div>
      </div>
    </div>
@endsection