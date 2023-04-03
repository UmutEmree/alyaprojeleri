@extends('../main')
@section('content')
  <div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="qrt-half-content-frame">
          <div class="qrt-left">
            <div class="row">
     
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">@lang('main.news')</h3>

              </div>
              @foreach($news as $news)
              <div class="col-lg-6">

                <div class="qrt-post-frame qrt-popular">
                  <a href="{{ url('haberler/'.$news->slug) }}" class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
                    <img src="{{ Voyager::image( $news->image ) }}" alt="{{ $news->name }}">
                    <div class="qrt-post-date">
                      <span><i class="far fa-clock"></i>  {{ date('d-m-y', strtotime($news->date)) }}</span>
                    </div>
                  </a>
                  <div class="qrt-post-descr">
                    <div>
                      <h4 class="qrt-cursor-color qrt-post-title"><a href="{{ url('haberler/'.$news->slug) }}" class="qrt-anima-link">{{ $news->getTranslatedAttribute('title',$locale,'fallbackLocale') }}</a></h4>
                    
                    </div>
                  </div>
                </div>

              </div>
              @endforeach
           
            </div>
            <div class="qrt-divider qrt-space-fix-2"></div>
        


        
        
          </div>
        @include('inc/form-sag')
        </div>
      </div>
    </div>
  </div>
@endsection