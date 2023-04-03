@extends('../main')
@section('content')
        <!-- Content -->
    <div class="content-wrapper">
        <!-- Lines -->
        <section class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </section>
        <!-- Header Banner -->
        <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="{{asset('img/banner.jpg') }}">
            <!-- Left Panel -->
            <div class="left-panel"></div>
        </section>
        <!-- About -->
        <section class="team section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title mb-30"><span>@lang('main.management')</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 owl-carousel owl-theme">
                        @foreach($managements as $management)
                        <div class="item">
                            <div class="img"> <img src="https://johndaleendodontics.com/wp-content/uploads/2018/07/placeholder-male-1.png" alt="{{ $management->name }}"> </div>
                            <div class="info">
                                <h6>{{ $management->name }}</h6>
                                <p>{{ $management->getTranslatedAttribute('title',$locale,'fallbackLocale') }}</p>
                                
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
@endsection