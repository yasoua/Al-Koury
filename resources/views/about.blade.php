@extends('layouts.master')
@section('content')
{{--    <div class="content-wrapper">--}}

        <section class="wrapper" {{--style="background: url("{{asset('images/about-background.jpg')}}")"--}}>
            <div class="container pt-2 pt-md-2 text-center ">
                <div class="row align-items-center justify-content-start">
                    <div class="col-xl-12 justify-content-center">
{{--                        <h1 class="display-1 mb-4">AL-Khoury Office</h1>--}}
{{--                        <p class=" mb-4">for cars rental</p>--}}

{{--                        <p class="lead fs-lg mb-0 " style="color: black">for cars rental</p>--}}
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <figure class="position-absoute " style="bottom: 0; left: 0; z-index: 2; /*height: 810px*/">
                <img style="min-height: 493px; max-height: 800px; width: 100%" src="{{asset('images/about-background.jpg')}} " srcsert="{{asset('images/about-background.jpg')}} 2x"  alt="Al-khuory about" />
            </figure>
        </section>
        <!-- /section -->
        <section class="wrapper bg-light angled upper-end lower-end" @if(App::getLocale() == 'ar') dir="rtl"  @endif>
            <div class="container py-14 py-md-16">
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                    <div class="col-lg-6 position-relative order-lg-2" dir="ltr">
                        <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 5rem; left: 5.5rem"></div>
                        <div class="overlap-grid overlap-grid-2">
                            <div class="item my-md-10">
                                <figure class="rounded pb-md-10"><img src="{{asset('images/rental-car.jpg')}}" srcset="{{asset('images/rental-car.jpg')}} 2x" alt=""></figure>
                            </div>
                            <div class="item">
                                <figure class="pt-md-15 rounded  mt-6t"><img src="{{asset('images/car-rental.jpg')}}" srcset="{{asset('images/car-rental.jpg')}} 2x" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <img src="./assets/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                        <h2 class="display-4 mb-3">{{__('messages.Who_Are_We')}}</h2>
                        <p class="lead fs-lg">{{__('messages.Who_Are_We_describe1')}}</p>
                        <p class="mb-6">{{__('messages.Who_Are_We_describe2')}}.</p>
{{--                        <div class="row gy-3 gx-xl-8">--}}
{{--                            <div class="col-xl-6">--}}
{{--                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">--}}
{{--                                    <li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur blandit tempus.</span></li>--}}
{{--                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare donec elit.</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <!--/column -->--}}
{{--                            <div class="col-xl-6">--}}
{{--                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">--}}
{{--                                    <li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis euismod.</span></li>--}}
{{--                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus faucibus amet euismod.</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <!--/column -->--}}
{{--                        </div>--}}
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="row mb-5" >
                    <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center" >
                        <img src="./assets/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                        <h2 class="display-4 mb-4 px-lg-14">{{__('messages.working_steps')}}</h2>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center" >
                    <div class="col-lg-6 order-lg-2 @if(App::getLocale() == 'ar') pt-12  @endif" >
                        <div class="card me-lg-6 ">
                            <div class="card-body p-6">
                                <div class="d-flex flex-row">
                                    <div>
                                        <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">01</span></span>
                                    </div>
                                    <div class=" @if(App::getLocale() == 'ar') mx-6  @endif">
                                        <h4 class="mb-1">{{__('messages.Passport')}}</h4>
                                        <p class="mb-0">{{__('messages.Passport_describe')}}</p>
                                    </div>
                                </div>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                        <div class="card ms-lg-13 mt-6 me-10">
                            <div class="card-body p-6">
                                <div class="d-flex flex-row">
                                    <div>
                                        <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">02</span></span>
                                    </div>
                                    <div class=" @if(App::getLocale() == 'ar') mx-6  @endif">
                                        <h4 class="mb-1">{{__('messages.Driver_License')}}</h4>
                                        <p class="mb-0">{{__('messages.Driver_License_describe')}}</p>
                                    </div>
                                </div>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                        <div class="card mx-lg-6 mt-6">
                            <div class="card-body p-6">
                                <div class="d-flex flex-row">
                                    <div>
                                        <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">03</span></span>
                                    </div>
                                    <div class=" @if(App::getLocale() == 'ar') mx-6  @endif" >
                                        <h4 class="mb-1">{{__('messages.Contract')}}</h4>
                                        <p class="mb-0">{{__('messages.Contract_describe')}}</p>
                                    </div>
                                </div>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <h2 class="display-6 mb-3">{{__('messages.How_It_Works')}} @if(App::getLocale() == 'en') ? @else ؟ @endif </h2>
                        <p class="lead fs-lg  @if(App::getLocale() == 'en') pe-lg-5 @endif">{{__('messages.How_It_Works1')}}</p>
                        <p>{{__('messages.How_It_Works2')}}</p>
                        <p class="mb-6">{{__('messages.How_It_Works3')}}</p>
                        <p class="mb-6">{{__('messages.How_It_Works4')}}</p>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->


        <section class="wrapper bg-soft-primary" @if(App::getLocale() == 'ar') dir="rtl"  @endif>
            <div class="container py-14 py-md-16">
                <div class="row mb-10">
                    <div class="col-xl-10 mx-auto">
                        <div class="row align-items-center counter-wrapper gy-6 text-center">
                            <div class="col-md-3">
                                <img src="./assets/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                                <h3 class="counter">15</h3>
                                <p>{{__('messages.Cars')}}</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-3">
                                <img src="./assets/img/icons/lineal/user.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                                <h3 class="counter">40</h3>
                                <p>{{__('messages.Satisfied_Customers')}}</p>
                            </div>
                            <!--/column -->
{{--                            <div class="col-md-3">--}}
{{--                                <img src="./assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />--}}
{{--                                <h3 class="counter">2184</h3>--}}
{{--                                <p>Expert Employees</p>--}}
{{--                            </div>--}}
                            <!--/column -->
                            <div class="col-md-3">
                                <img src="./assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                                <h3 class="counter">3</h3>
                                <p>{{__('messages.Services')}}</p>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light angled upper-end lower-end">
            <div class="container pt-18 pb-14 pt-md-19 pb-md-16">
                <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center" @if(App::getLocale() == 'ar') dir="rtl"  @endif>
                    <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
                        <div class="map map-full rounded-top rounded-lg-start w-sm-">
                            <iframe title="Al-khuory location" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d225.78213878054643!2d43.98846195568414!3d36.23015887836005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2siq!4v1686388253677!5m2!1sar!2siq" style="width:450px; height: 550px; border:0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <img src="./assets/img/icons/lineal/telemarketer.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                        <h2 class="display-4 mb-8">{{__('messages.Convinced')}}</h2>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-0 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                            </div>
                            <div class="mx-2">
                                <h5 class="mb-1">{{__('messages.Address')}}</h5>
                                <address>{{__('messages.location1')}}<br class="d-none d-md-block" /></address>
                                <address>{{__('messages.location2')}}<br class="d-none d-md-block" /></address>

                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-0 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                            </div>
                            <div class="mx-2">
                                <h5 class="mb-1">{{__('messages.Phone')}}</h5>
                                <p class="mb-0">00 (964) 114 71 11</p>
                                <p class="mb-0">00 (964) 114 61 11</p>

                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-0 mt-n1"> <i class="uil uil-envelope"></i> </div>
                            </div>
                            <div class="mx-2">
                                <h5 class="mb-1">{{__('messages.Email')}}</h5>
                                <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">sandbox@email.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
{{--    </div>--}}
    <!-- /.content-wrapper -->



@endsection
