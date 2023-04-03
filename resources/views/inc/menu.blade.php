<ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link  @if(!Route::is('home')) nav-color @endif" href="{{ route('home') }}">@lang('main.home')</a></li>
                <li class="nav-item dropdown"> <span class="nav-link @if(!Route::is('home')) nav-color @endif"> @lang('main.corporate') <i class="ti-angle-down"></i></span>
                    <ul class="dropdown-menu last">
                        <li class="dropdown-item"><a href="{{ route('about') }}">@lang('main.about')</a></li>
                        <li class="dropdown-item"><a href="{{ route('baskanin-mesaji') }}">@lang('main.president-message')</a></li>
                        <li class="dropdown-item"><a href="{{ route('yonetim-kurulu') }}">@lang('main.management')</a></li>
                        <li class="dropdown-item"><a href="{{ url('kvkk.pdf') }}" target="_blank">KVKK</a></li>
                        <li class="dropdown-item"><a href="{{ route('aydinlatma') }}" >@lang('main.aydinlatma')</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"> <span class="nav-link @if(!Route::is('home')) nav-color @endif"> @lang('main.projects') <i class="ti-angle-down"></i></span>
                    <ul class="dropdown-menu last">
                    @foreach($categories as $cat)
                        <li class="dropdown-item"><a href="{{ url('projeler/'.$cat->slug) }}">{{ $cat->getTranslatedAttribute('name',$locale,'fallbackLocale') }}</a></li>
                    @endforeach
                    </ul>
                </li> 
                <li class="nav-item dropdown"> <span class="nav-link @if(!Route::is('home')) nav-color @endif"> @lang('main.media') <i class="ti-angle-down"></i></span>
                    <ul class="dropdown-menu last">
                        <li class="dropdown-item"><a href="{{route('press') }}">@lang('main.press')</a></li>
                        <li class="dropdown-item"><a href="{{route('news') }}">@lang('main.news')</a></li>
                        <li class="dropdown-item"><a href="{{route('video')}}">@lang('main.advertises')</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"> <span class="nav-link @if(!Route::is('home')) nav-color @endif"> @lang('main.carrier') <i class="ti-angle-down"></i></span>
                    <ul class="dropdown-menu last">
                        <li class="dropdown-item"><a href="{{ url('insan-kaynaklari-politikamiz') }}">@lang('main.ik-politika')</a></li>
                        <li class="dropdown-item"><a href="https://www.kariyer.net/firma-profil/boss4-gayrimenkul-ins-san-ve-dis-tic-a-s-5208-30091" target="_blank">@lang('main.application')</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link @if(!Route::is('home')) nav-color @endif" href="{{ route('contact') }}">@lang('main.contact')</a></li>
            </ul>