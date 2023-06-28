<header class="wrapper bg-light">
    <div class="bg-primary text-white fw-bold fs-15 mb-2" @if(App::getLocale() == 'ar') dir="rtl"  @endif >
        <div class="container py-2 d-md-flex flex-md-row"  >
            <div class="d-flex flex-row align-items-center ms-3">
                <div class="icon text-white fs-22 mt-0 me-2 mx-2"> <i class="uil uil-location-pin-alt"></i></div>
                <div>
                    <address class="mb-0">{{__('messages.location1')}}</address>
                    <address class="mb-0">{{__('messages.location2')}}</address>
                </div>

            </div>
            <div class="d-flex flex-row align-items-center ms-auto @if(App::getLocale() == 'ar') ms-6 @else me-6 @endif  ">
                <div class="icon text-white fs-22 mt-0 me-2 mx-2">
                    <i class="uil uil-phone-volume"></i>
                </div>
                <div dir="ltr">
                    <p class="mb-0">00 (964) 114 71 11</p>
                    <p class="mb-0">00 (964) 114 61 11</p>
                </div>



            </div>
            <div class="d-flex flex-row align-items-center">
                <div class="icon text-white fs-22 mt-1 me-2 mx-2"> <i class="uil uil-message"></i></div>
                <p class="mb-0"><a href="mailto:info@alkhuory.com" class="link-white hover">info@alkhuory.com</a></p>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">

                <a href="/"><h1>Al-khuory</h1></a>
                {{--<a href="/">
                    <img style="width: 134px; height: 26px" src="{{asset('assets/img/logo.png')}}" srcset="{{asset('assets/img/logo@2x.png')}} 2x" alt="al-khuory logo" />
                </a>--}}
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">{{__('messages.name')}}</h3>
                    <button type="button" title="menu" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav" @if(App::getLocale() == 'ar') dir="rtl"  @endif>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link " href="/" >{{__('messages.Home')}}</a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link " href="/about" >{{__('messages.About')}}</a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link " href="{{route('services.index')}}">{{__('messages.Services')}}</a>
                        </li>
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                @if($services->count())--}}
{{--                                    @foreach($services as $service)--}}
{{--                                        <li class="nav-item"><a class="dropdown-item" href="{{route('services.index')}}">{{$service->name}}</a></li>--}}

{{--                                    @endforeach--}}
{{--                                @else--}}
{{--                                    <li class="nav-item"><a class="dropdown-item" href="{{route('services.index')}}">All</a></li>--}}

{{--                                @endif--}}
{{--                                <li class="nav-item"><a class="dropdown-item" href="/">Renting Cars</a></li>--}}
{{--                                <li class="nav-item"><a class="dropdown-item" href="/">Car Wash</a></li>--}}
{{--                                <li class="nav-item"><a class="dropdown-item" href="/">Car oil change</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link " href="{{route('cars.index')}}" >{{__('messages.Cars')}}</a>
                        </li>
                        @auth()
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link " href="{{route('services.create')}}" >{{__('messages.Add_service')}}</a>
                        </li>

                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link " href="{{route('cars.create')}}" >{{__('messages.Add_car')}}</a>
                        </li>
                        @endauth

                        <li class="nav-item dropdown dropdown-mega d-block d-md-none">
                            <a class="nav-link " href="/contact" >{{__('messages.Contact')}}</a>
                        </li>

                        <li class="nav-item dropdown dropdown-mega  d-block d-md-none">
                            @if (Route::has('login'))
                                @guest()
                                <a class="nav-link " href="{{ route('login') }}" >{{__('messages.Login')}}</a>
                                @endguest
                            @endif
                        </li>

                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                            <br /> 00 (123) 456 78 90 <br />
                            <nav class="nav social social-white mt-4">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                    </div>
                    <!-- /.offcanvas-footer -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item dropdown language-select text-uppercase">
                        <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Config::get('languages')[App::getLocale()] }}
                        </a>
                        <ul class="dropdown-menu">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                                @endif
                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item d-none d-md-block">
                        <a href="/contact" class="btn btn-sm btn-primary rounded-pill">{{__('messages.Contact')}}</a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        @if(auth()->user())
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   {{__('messages.Logout')}}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
{{--                        <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;">--}}
{{--                        </span>--}}
                        <li class="nav-item d-none d-md-block">
                            <a href="{{ route('login') }}" class="btn btn-outline-primary rounded-pill ">{{__('messages.Login')}}</a>
                        </li>
                        @endif
                        </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
