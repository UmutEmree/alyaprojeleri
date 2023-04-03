@extends('../main')

@section('content')
<div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="swiper-container qrt-main-slider">
          <div class="qrt-slider-pagination">
            <div class="swiper-pagination swiper-main-pagination"></div>
          </div>
          <div class="qrt-slider-navigation qrt-absolute">
            <div class="qrt-slider-nav-btn qrt-main-prev qrt-cursor-scale qrt-cursor-color"><i class="fas fa-arrow-left"></i><span>prev</span></div>
            <div class="qrt-slider-nav-btn qrt-main-next qrt-cursor-scale qrt-cursor-color"><span>next</span><i class="fas fa-arrow-right"></i></div>
          </div>
          <div class="swiper-wrapper">
         
          @foreach($sliders as $slider)
          <div class="swiper-slide">
              <div class="qrt-project-cover">
                <div class="qrt-image-frame">
                  <img class="img-responsive" id="slider" src="{{ Voyager::image( $slider->image ) }}" alt="project cover" >
                </div>
                <div class="qrt-overlay">

                      <a href="{{ url($slider->projelink) }}" class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>@lang('main.see-project')</span><i class="fas fa-arrow-right"></i></a>
                  
                </div>
              </div>
            </div>
           @endforeach
           
          </div>
        </div>
      </div>
    </div>
       
@endsection