@extends('../main')
@section('content')
<div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="qrt-half-content-frame">
          <div class="qrt-left">

            <div class="row">
              <div class="col-lg-12">
              <div class="d-flex">
                <h2 class="mr-auto p-2 qrt-mb-40">{{ $project->getTranslatedAttribute('name',$locale,'fallbackLocale') }}</h2>
                @if($project->projectlogo !='')  
                        
                 <img src="{{ Voyager::image($project->projectlogo ) }}" alt="{{$project->name }}" class="p-2 proje-logo">
                       
                     @endif
                </div>     
                <div class="qrt-page-cover qrt-cover-center">
                  <img src="{{ Voyager::image($project->image ) }}" alt="sunset house">
                  <div class="qrt-about-info qrt-right-position">
                    <div class="qrt-cover-info">
                      <ul class="qrt-table">
                        <li>
                          <h5 class="qrt-white">@lang('main.city'):</h5><span>{{ $project->city }}</span>
                        </li>
                        <li>
                        @if($project->location !='') <h5 class="qrt-white">@lang('main.location'):</h5><span><a href="{{ url($project->location) }}" style="color:#fff" target="_blank">@lang('main.show-on-map')</a></span>@endif
                        </li>
                        <li>
                        @if($project->satisdurumu !='') <h5 class="qrt-white">@lang('main.status'):</h5><span>{{ $project->satisdurumu }}</span>@endif
                        </li>
                        <li>
                        <h5 class="qrt-white">@lang('main.year'):</h5><span>{{ $project->year }}</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="qrt-just-text">
                {!! $project->getTranslatedAttribute('body',$locale,'fallbackLocale') !!}
                </div>

                <div class="qrt-masonry-grid">
                  <div class="qrt-grid-sizer"></div>
                  @foreach($project->images as $image)  
                @php $arrayOfFiles = json_decode($image->image); @endphp
                @foreach($arrayOfFiles as $img)
                  <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 interior architecture">
                    <div class="qrt-work-item"><a data-fancybox="works" href="{{ Voyager::image($img) }}" class="qrt-cursor-scale qrt-work-cover-frame"><img src="{{ Voyager::image($img) }}" alt="work cover">
                        <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      </a>
                    </div>
                  </div>
                  @endforeach
                @endforeach
                
                </div>

             

              </div>
            </div>

          </div>
          @include('inc/form-sag')
        </div>
      </div>
    </div>
  </div>
@endsection