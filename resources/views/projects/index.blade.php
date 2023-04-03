@extends('../main')
@section('content')
<div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="qrt-content-frame">
          <div class="qrt-left">

        

            <div class="qrt-masonry-grid  qrt-mb-80">
              <div class="qrt-grid-sizer"></div>
              @foreach($projects as $project)
              <div class="qrt-masonry-grid-item">
                <div class="qrt-work-item"><a href="{{ url('proje/'.$project->slug) }}" class="qrt-cursor-scale qrt-work-cover-frame"><img src="{{ Voyager::image( $project->image ) }}" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                    <div class="qrt-work-category"><span>{{ $project->satisdurumu }}</span></div>
                  </a>
                  <div class="qrt-work-descr">
                    <h4 class="qrt-cursor-color qrt-white"><a href="{{ url('proje/'.$project->slug) }}" class="qrt-anima-link">{{ $project->getTranslatedAttribute('name',$locale,'fallbackLocale') }}</a></h4><a href="{{ url('proje/'.$project->slug) }}" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
             @endforeach
            </div>
           
          </div>
          <div id="fixed" class="qrt-right">
          </div>
        </div>
      </div>
    </div>
  </div>
        
@endsection