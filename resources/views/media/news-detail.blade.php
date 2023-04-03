@extends('../main')
@section('content')
<div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="qrt-half-content-frame">
          <div class="qrt-left">
            <div class="row">
              <div class="col-lg-12">

                <h2 class="qrt-mb-40">{{$news->title}}</h2>

              </div>
              <div class="col-lg-12">

                <img src="{{ Voyager::image( $news->image ) }}" alt="thumbnail" class="qrt-just-img">
                <div class="qrt-post-date qrt-mb-40">
                  <span><i class="far fa-clock"></i> {{ date('d-m-y', strtotime($news->date)) }}</span>
                </div>

              </div>
              <div class="col-lg-12">
              {!! $news->body !!}
              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

        

         
          </div>
       @include('inc/form-sag')
        </div>
      </div>
    </div>
  </div>

@endsection