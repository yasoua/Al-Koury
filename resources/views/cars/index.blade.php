@extends('layouts.master')
@section('content')
    <div class="row mt-8">
        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
            <h2 class="fs-15 text-uppercase text-primary text-center" id="rent_car">{{__('messages.CARS_FOR_RENT')}}</h2>
            <h3 class="display-7 mb-6 text-center">{{__('messages.Explore_the_world')}}</h3>
        </div>
        <!-- /column -->
    </div>

{{--    <section class="wrapper bg-light">--}}
{{--        <div class="container py-14 py-md-16">--}}
{{--            <!-- /.row -->--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-10 mx-auto">--}}
{{--                    <div class="job-list">--}}
{{--                        <a href="#" class="card mb-4 lift">--}}
{{--                            <div class="card-body p-5">--}}

{{--                                    <span class="row justify-content-between align-items-center">--}}
{{--                                        @if($cars->count())--}}
{{--                                            @foreach($cars as $car)--}}
{{--								<span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">--}}
{{--                                    <span class="rounded mb-0"><img src="{{asset('images') . '/' . $car->picture}}" srcset="{{asset('images') . '/' . $car->picture}} 2x" alt=""></span>--}}
{{--                                    <span>--}}
{{--                                        <h3 class="display-4 mb-4">{{$car->name}}</h3>--}}
{{--                                        <span class="d-flex align-items-center justify-content-between">--}}
{{--                                            <h5 class="display-4 mb-4">{{$car->brand}}</h5>--}}

{{--                                            @auth()--}}
{{--                                                <span class="">--}}
{{--                                                    <span class="ms3">--}}
{{--                                                        <span class="dropdown" >--}}
{{--                                                            <a class="dropdown-toggle ms-4" href="#" data-bs-toggle="dropdown">--}}
{{--                                                                <img src="{{asset('images/gears.svg')}}" class="svg-inject icon-svg icon-svg-xs solid-mono text-primary" alt="" />--}}
{{--                                                            </a>--}}
{{--                                                            <ul class="dropdown-menu" dir="ltr">--}}
{{--                                                                --}}{{--                                                                                                <li class="nav-item"><a class="dropdown-item" href="{{route('cars.destroy')}}">edit</a></li>--}}
{{--                                                                <li><a class="dropdown-item delete-car d-flex" href="#" data-car-id="{{$car->id}}"><i class="iconify me-2 mt-1" data-icon="uil:trash"></i> Delete</a></li>--}}
{{--                                                                <li class="nav-item"><a class="dropdown-item" href="{{route('cars.edit', $car->id)}}"><i class="iconify me-2 mt-1" data-icon="uil:edit"></i> Edit</a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </span>--}}

{{--                                                    </span>--}}
{{--                                                </span>--}}
{{--                                            @endauth--}}

{{--                                        </span>--}}
{{--                                    </span>--}}
{{--                                    <span class="d-flex">--}}
{{--                                        <div class="align-items-center justify-content-start mb-3">--}}
{{--                                            <div class="ps-3"><img  style="width: 30px; height: 30px" src="{{asset('images/seat.png')}}"></div>--}}
{{--                                            <div class="ps-6">{{$car->rider}}</div>--}}
{{--                                        </div>--}}

{{--                                        <div class="align-items-center justify-content-start ">--}}
{{--                                            <div class="pe-4"><img  style="width: 50px; height: 50px" src="{{asset('images/hatchback.png')}}"></div>--}}
{{--                                            <div class="">{{/*$car->manufacturer_year->format*/ date('Y', strtotime($car->manufacturer_year))}}</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="align-items-center justify-content-start ">--}}
{{--                                            <div class="pe-4"><img  style="width: 50px; height: 50px" src="{{asset('images/noun-4x4-1107325.png')}}"></div>--}}
{{--                                            <div class=""> @if($car->four_wheel_drive == 1) <span>4 X 4</span>--}}{{--<img  style="width: 20px; height: 20px" src="{{asset('images/check-mark.png')}}">--}}{{--@else--}}
{{--                                                    <img  style="width: 20px; height: 20px" src="{{asset('images/wrong.png')}}">--}}
{{--                                                @endif</div>--}}
{{--                                        </div>--}}

{{--                                    </span>--}}


{{--                                </span>--}}

{{--								<div class="col-7 col-md-4 col-lg-3 text-body align-items-center">--}}
{{--                                </div>--}}
{{--                                            @endforeach--}}

{{--                                        @else--}}
{{--                                            <div class="row text-center mb-5 mb-md-5">--}}
{{--                                        <div class="col-12">There is no car to rent</div>--}}
{{--                                    </div>--}}
{{--                                        @endif--}}


{{--							</span>--}}

{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}
{{--                        </a>--}}
{{--                        <!-- /.card -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /column -->--}}
{{--            </div>--}}
{{--            <!-- /.row -->--}}
{{--        </div>--}}
{{--        <!-- /.container -->--}}
{{--    </section>--}}
    <!-- /section -->

    <!--/.row -->
<section class="wrapper bg-light">
    <div class="container py-14 py-md-10">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-18 align-items-center justify-content-center" @if(App::getLocale() == 'ar') dir="rtl"  @endif>


            @if($cars->count())

                @foreach($cars as $car)


                    <div class="card p-5" style="width: 80%">

                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-12 col-lg-4 align-self-center">
                                        <div class="row">
                                                <img src="{{asset('images') . '/' . $car->picture}}" srcset="{{asset('images') . '/' . $car->picture}} 2x" alt="cars for rent">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-8">
                                        <div class="row ">
                                            <div class=" d-flex justify-content-between">
                                                <div class="col-6">
                                                    <h5 class="mt-2">{{$car->name}}</h5>
                                                </div>

                                                <div class="col-6">
                                                    @auth()
                                                        <div class="d-flex justify-content-between  mt-2">
                                                            <div class="">
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle ms-4" href="#" data-bs-toggle="dropdown">
                                                                        <img src="{{asset('images/gears.svg')}}" style="width: 20px; height: 20px" class="svg-inject icon-svg icon-svg-xs solid-mono text-primary" alt="setting" />
                                                                    </a>
                                                                    <ul class="dropdown-menu" dir="ltr">
                                                                        {{--                                                                                                <li class="nav-item"><a class="dropdown-item" href="{{route('cars.destroy')}}">edit</a></li>--}}
                                                                        <li><a class="dropdown-item delete-car d-flex" href="#" data-car-id="{{$car->id}}"><i class="iconify me-2 mt-1" data-icon="uil:trash"></i> {{__('messages.Delete')}}</a></li>
                                                                        <li class="nav-item"><a class="dropdown-item" href="{{route('cars.edit', $car->id)}}"><i class="iconify me-2 mt-1" data-icon="uil:edit"></i> {{__('messages.Edit')}}</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    @endauth

                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <span class="hover" rel="category">Brand: {{$car->brand}}</span>

                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-3">
                                                <div class="d-flex my-2">
                                                    <div class="  @if(App::getLocale() == 'ar') ms-3 @else me-3 @endif"><img src="{{asset('images/engine-oil-level.png')}} " srcset="{{asset('images/engine-oil-level.png')}} 2x " alt="engine type"></div>
                                                    <div>{{$car->enginetype}}</div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="d-flex my-2">
                                                    <div class=" @if(App::getLocale() == 'ar') ms-3 @else me-3 @endif"><img  src="{{asset('images/automatic-gearbox-warning.png')}}" srcset="{{asset('images/automatic-gearbox-warning.png')}} 2x" alt="gear type"></div>
                                                    <div>{{$car->gear_shift}}</div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="d-flex my-2">
                                                    <div class=" @if(App::getLocale() == 'ar') ms-3 @else me-3 @endif"><img src="{{asset('images/fan-speed.png')}}" srcset="{{asset('images/fan-speed.png')}} 2x" alt="car air condition"></div>
                                                    <div class="">@if($car->air_condition == 0)<img  style="width: 20px; height: 20px" src="{{asset('images/wrong.png')}}" alt="wrong">@else
                                                            <img  style="width: 20px; height: 20px" src="{{asset('images/check.png')}}" alt="true">@endif</div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">

                                                <div class="d-flex my-2">
                                                    <div class=" @if(App::getLocale() == 'ar') ms-3 @else me-3 @endif"><img src="{{asset('images/foot-outlet.png')}}" srcset="{{asset('images/foot-outlet.png')}} 2x" alt="car riders"></div>
                                                    <div class="ps-1">{{$car->rider}}</div>
                                                </div>
                                            </div>

                                            <div class="col-6 col-md-3">

                                                <div class="d-flex my-2">
                                                    <div class=" @if(App::getLocale() == 'ar') ms-3 @else me-3 @endif"><img  src="{{asset('images/door-lock.png')}}" srcset="{{asset('images/door-lock.png')}} 2x" alt="car doors"></div>
                                                    <div class="">{{$car->car_doors}}</div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="d-flex my-2">
                                                    <div class=" @if(App::getLocale() == 'ar') ms-3 @else me-3 @endif"><img  src="{{asset('images/boot-open.png')}}" srcset="{{asset('images/boot-open.png')}} 2x" alt="car luggage capacity"></div>
                                                    <div class="">{{$car->car_luggage_capacity}}</div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 " >
                                                <div class="d-flex my-2">
                                                    <div class=" @if(App::getLocale() == 'ar') ms-3 @else me-3 @endif"><img  src="{{asset('images/hill-descent-control.png')}}" srcset="{{asset('images/hill-descent-control.png')}} 2x" alt="car wheel type"></div>
                                                    <div class=""> @if($car->four_wheel_drive == 1) <span>4X4</span>@else
                                                            <img  style="width: 20px; height: 20px" src="{{asset('images/wrong.png')}}" alt="wrong">
                                                        @endif</div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">

                                                <div class="d-flex my-2">
                                                    <div class=" @if(App::getLocale() == 'ar') ms-3 @else me-3 @endif"><img  src="{{asset('images/convertible-roof-warning.png')}}" srcset="{{asset('images/convertible-roof-warning.png')}} 2x" alt="car model"></div>
                                                    <div class="">{{date('Y', strtotime($car->manufacturer_year))}}</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    {{--<div class="card " style="width: 80%">
                    <div class="col-lg-12 position-relative d-md-flex align-items-center justify-content-center p-6">
                        <figure class=" mb-0"><img src="{{asset('images') . '/' . $car->picture}}" srcset="{{asset('images') . '/' . $car->picture}} 2x" alt=""></figure>
                        <div class="col-lg-8 ms-none ms-md-10  @if(App::getLocale() == 'ar') mx-6  @endif">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="mt-2">{{$car->name}}</h5>

                                @auth()
                                    <div class="">
                                        <div class="ms3">
                                            <div class="dropdown" >
                                                <a class="dropdown-toggle ms-4" href="#" data-bs-toggle="dropdown">
                                                    <img src="{{asset('images/gears.svg')}}" class="svg-inject icon-svg icon-svg-xs solid-mono text-primary" alt="" />
                                                </a>
                                                <ul class="dropdown-menu" dir="ltr">
                                                    --}}{{--                                                                                                <li class="nav-item"><a class="dropdown-item" href="{{route('cars.destroy')}}">edit</a></li>--}}{{--
                                                    <li><a class="dropdown-item delete-car d-flex" href="#" data-car-id="{{$car->id}}"><i class="iconify me-2 mt-1" data-icon="uil:trash"></i> {{__('messages.Delete')}}</a></li>
                                                    <li class="nav-item"><a class="dropdown-item" href="{{route('cars.edit', $car->id)}}"><i class="iconify me-2 mt-1" data-icon="uil:edit"></i> {{__('messages.Edit')}}</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                @endauth

                            </div>
                            <div class="mb-2">
                                <span class="hover" rel="category">Brand: {{$car->brand}}</span>
                            </div>

                            <div class="row gy-3 d-md-flex">
                                <div class="col-6 col-md-3  ">
                                    <div class="d-flex align-items-center justify-content-center mb-3 ">
                                        <div class="pe-sm-1 p-0 mx-3"><img src="{{asset('images/engine-oil-level.png')}} " srcset="{{asset('images/engine-oil-level.png')}} 2x "></div>
                                        <div class="">{{$car->enginetype}}</div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="d-flex align-items-center justify-content-center mb-3">
                                        <div class=" mx-3"><img  src="{{asset('images/automatic-gearbox-warning.png')}}" srcset="{{asset('images/automatic-gearbox-warning.png')}} 2x"></div>
                                        <div class="">{{$car->gear_shift}}</div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="d-flex align-items-center @if(App::getLocale() == 'ar') justify-content-start  @else justify-content-center @endif  mb-3">
                                        <div class="pe-sm-3 p-0 mx-3"><img  src="{{asset('images/fan-speed.png')}}" srcset="{{asset('images/fan-speed.png')}} 2x" ></div>
                                        <div class="">@if($car->air_condition == 0)<img  style="width: 20px; height: 20px" src="{{asset('images/wrong.png')}}">@else
                                                <img  style="width: 20px; height: 20px" src="{{asset('images/check.png')}}">@endif</div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">

                                    <div class="d-flex align-items-center @if(App::getLocale() == 'ar') justify-content-start   @else justify-content-center @endif mb-3">
                                        <div class="@if(App::getLocale() == 'ar') mx-6  @else me-6 @endif "><img   src="{{asset('images/foot-outlet.png')}}" srcset="{{asset('images/foot-outlet.png')}} 2x"></div>
                                        <div class="ps-1">{{$car->rider}}</div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">

                                <div class="d-flex align-items-center justify-content-center mb-3">
                                    <div class="ps-sm-1 p-0 @if(App::getLocale() == 'ar') mx-sm-3 mx-md-5  @else me-6 @endif "><img  src="{{asset('images/door-lock.png')}}" srcset="{{asset('images/door-lock.png')}} 2x"></div>
                                    <div class=" @if(App::getLocale() == 'ar') ps-3  @else ps-1 @endif ">{{$car->car_doors}}</div>
                                </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="d-flex align-items-center @if(App::getLocale() == 'ar') justify-content-start  @else justify-content-center @endif mb-3">
                                        <div class=" @if(App::getLocale() == 'ar') mx-6  @else me-6 @endif "><img  src="{{asset('images/boot-open.png')}}" srcset="{{asset('images/boot-open.png')}} 2x"></div>
                                        <div class=" @if(App::getLocale() == 'ar') ps-3  @else ps-1 @endif ">{{$car->car_luggage_capacity}}</div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 " >
                                    <div class="d-flex align-items-center justify-content-center mb-3 ">
                                        <div class="pe-sm-2 pe-4 mx-3"><img  src="{{asset('images/hill-descent-control.png')}}" srcset="{{asset('images/hill-descent-control.png')}} 2x"></div>
                                        <div class=" @if(App::getLocale() == 'ar') ms-sm-2 m-0   @else ms-sm-2 m-0 @endif"> @if($car->four_wheel_drive == 1) <span>4X4</span>@else
                                                <img  style="width: 20px; height: 20px" src="{{asset('images/wrong.png')}}">
                                            @endif</div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">

                                    <div class="d-flex align-items-center justify-content-center ">
                                        <div class="   @if(App::getLocale() == 'ar') mx-4 ms-3  @else mx-3 @endif  "><img  src="{{asset('images/convertible-roof-warning.png')}}" srcset="{{asset('images/convertible-roof-warning.png')}} 2x"></div>
                                        <div class="ps-1">{{date('Y', strtotime($car->manufacturer_year))}}</div>
                                    </div>

                                </div>



                            </div>
                            <!--/.row -->
                        </div>

                    </div>
                    <!--/column -->
                    </div>--}}

                @endforeach


            @else
                <div class="row text-center mb-5 mb-md-5">
                    <div class="col-12">There is no car to rent</div>
                </div>
            @endif

            <!--/column -->
        </div>

        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@endsection
@push('script')
    <script>
        $('.delete-car').click(function() {
            // alert('clicked');
            var id = $(this).data('car-id');
            var url = "{{ route('cars.destroy', ':id') }}";
            url = url.replace(':id', id);
            var token = "{{ csrf_token() }}";
            Swal.fire({
                title: "{{__('messages.Are_you_sure?')}}",
                text: "{{__('messages.Delete_describe')}}",
                icon: 'warning',
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: "{{__('messages.Yes_Delete_it!')}}",
                cancelButtonText: "{{__('messages.Cancel')}}",
                customClass: {
                    confirmButton: 'btn btn-sm btn-primary mr-3 /*rounded-pill*/ mx-2',
                    cancelButton: 'btn btn-sm btn-secondary /*rounded-pill*/ mx-2'
                },
                showClass: {
                    popup: 'swal2-noanimation',
                    backdrop: 'swal2-noanimation'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: {
                            '_token': token,
                            '_method': 'DELETE'
                        },
                        success: function(data) {
                            if (data.status == 'success') {
                                location.reload();
                            }
                        },
                    });
                }
            });

        });
    </script>
    @endpush
