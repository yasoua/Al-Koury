@extends('layouts.master')
@section('content')



    <section class="wrapper bg-light" @if(App::getLocale() == 'ar') dir="rtl"  @endif >
        <div class="container pt-8 pt-md-14">
            <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center d-flex justify-content-between">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2 ms-10" data-cue="zoomIn" >
                    <div class="shape bg-dot primary rellax w-17 h-19 " data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>
                    <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
                    <figure class="rounded "><img src="{{asset('images/TeslaModel3.jpg')}}" srcset="{{asset('images/TeslaModel3.jpg')}} 2x" alt="car rent in erbil" /></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
                    <h1 class="display-1 mb-5" @if(App::getLocale() == 'ar') style="text-align: right " @endif>{{__('messages.office')}}</h1>
                    <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0 " style="text-align: initial">{{__('messages.offer')}}</p>
                    <div class="d-flex justify-content-center justify-content-lg-start mt-10" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                        <span><a href="{{route('cars.index')}}" class="btn btn-lg btn-primary rounded-pill me-2">{{__('messages.Explore_Cars')}}</a></span>
                        <span class="mx-4"><a href="{{route('services.index')}}" class="btn btn-lg btn-outline-primary rounded-pill">{{__('messages.Our_Services')}}</a></span>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">{{__('messages.What_We_Do?')}}</h2>
                    <h3 class="display-4 mb-10" @if(App::getLocale() == 'ar') style=" line-height: inherit; "   @endif>{{__('messages.service_we_offer')}}</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            @if($services->count())
            <div class="row  text-center mb-14 mb-md-17">
            @foreach($services as $service)
                        <div class="col-md-4 col-lg-4 mb-6">
{{--                            <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-5">--}}
                                <img style="height: 40px; width: 40px" class="mb-4" src="{{asset('images').'/'.$service->service_icon}}" srcset="{{asset('images').'/'.$service->service_icon}} 2x" alt="cars services">
{{--                            </div>--}}
                            <div class="d-flex align-items-center justify-content-center">
                                <h4 @if(auth()->user()) class="  @if(App::getLocale() == 'ar') me-10 @else ms-13 @endif " @endif>{{__('messages.service_name_'. $service->lang_name)  }}</h4>

                            @auth()
                                    <div class="">
                                        <div class="ms3">
                                            <div class="dropdown" >
                                                <a class="dropdown-toggle ms-6" href="#" data-bs-toggle="dropdown">
                                                    <img src="{{asset('images/gears.svg')}}" style="width: 20px; height: 20px"  class="svg-inject icon-svg icon-svg-xs solid-mono text-primary" alt="" />
                                                </a>
                                                <ul class="dropdown-menu" dir="ltr">
                                                    {{--                                                                                                <li class="nav-item"><a class="dropdown-item" href="{{route('cars.destroy')}}">edit</a></li>--}}
                                                    <li><a class="dropdown-item delete-service d-flex" href="#" data-service-id="{{$service->id}}"><i class="iconify me-2 mt-1" data-icon="uil:trash"></i> {{__('messages.Delete')  }}</a></li>
                                                    <li class="nav-item"><a class="dropdown-item" href="{{route('services.edit', $service->id)}}"><i class="iconify me-2 mt-1" data-icon="uil:edit"></i> {{__('messages.Edit')  }}</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                @endauth
                            </div>
                            <p class="mb-3">{{__('messages.service_description_'. $service->lang_name)  }}</p>
{{--                            <a href="#" class="more hover">Learn More</a>--}}
                        </div>
                        <!--/column -->

            @endforeach


                        @else
                    <div class="row  text-center mb-5 mb-md-5">
                        <div class="col-12">There is no services</div>
                    </div>
            @endif

        </div>
                <section class="wrapper bg-light">
                    <div class="container py-10 py-md-10">
                        <div class="row">
                            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                                <h2 class="fs-15 text-uppercase text-primary text-center" id="rent_car">{{__('messages.Rent_a_Car')}}</h2>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                        <div class="position-relative" @if(App::getLocale() == 'ar') dir="ltr"  @endif  >
                            <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
                            <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        @if($cars->count())
                                            @foreach($cars as $car)
                                        <div class="swiper-slide">

                                            <div class="item-inner">

                                                        <article>
                                                            <div class="card mb-6">
                                                                <figure class="card-img-top overlay overlay-1 hover-scale bg-white">
                                                                    <a href="/#rent_car"> <img  src="{{asset('images').'/'.$car->picture}}" srcset="{{asset('images').'/'.$car->picture}} 2x" alt="car for rent in erbil" /></a>
                                                                    <figcaption>
                                                                        <h5 class="from-top mb-0">{{--Read More--}}</h5>
                                                                    </figcaption>
                                                                </figure>
                                                                <div class="card-body">
                                                                    <div class="post-header">
                                                                        <div class="post-category text-line d-flex align-items-center ">

                                                                                <div class="">
                                                                                    <span>{{$car->brand}}</span>
                                                                                </div>
                                                                                @auth()
                                                                                <div class="">
                                                                                    <div class="ms3">
                                                                                        <div class="dropdown" >
                                                                                            <p class="dropdown-toggle ms-4"{{-- href="#" --}}data-bs-toggle="dropdown">
                                                                                                <img src="{{asset('images/gears.svg')}}" style="width: 20px; height: 20px" class="svg-inject icon-svg icon-svg-xs solid-mono text-primary" alt="car service" />
                                                                                            </p>
                                                                                            <ul class="dropdown-menu" dir="ltr">
{{--                                                                                                <li class="nav-item"><a class="dropdown-item" href="{{route('cars.destroy')}}">edit</a></li>--}}
                                                                                                <li><a class="dropdown-item delete-car d-flex" href="#" data-car-id="{{$car->id}}"><i class="iconify me-2 mt-1" data-icon="uil:trash"></i>{{__('messages.Delete')  }}</a></li>
                                                                                                <li class="nav-item"><a class="dropdown-item" href="{{route('cars.edit', $car->id)}}"><i class="iconify me-2 mt-1" data-icon="uil:edit"></i> {{__('messages.Edit')}}</a></li>
                                                                                            </ul>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            @endauth

                                                                        </div>
                                                                        <!-- /.post-category -->
                                                                        <h2 class="post-title h3 mt-1 mb-3">{{$car->name}}</h2>
                                                                    </div>
                                                                    <!-- /.post-header -->
                                                                    <div class="post-content">
{{--
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <div class="d-flex align-items-center justify-content-start mb-3">
                                                                                    <div class="ps-3"><img  style="width: 30px; height: 30px" src="{{asset('images/gas-station.png')}}"></div>
                                                                                    <div class="ps-6">{{$car->enginetype}}</div>
                                                                                </div>
                                                                                <div class="d-flex align-items-center justify-content-start mb-3">
                                                                                    <div class="ps-3"><img  style="width: 30px; height: 30px" src="{{asset('images/gear1.png')}}"></div>
                                                                                    <div class="ps-6">{{$car->gear_shift}}</div>
                                                                                </div>
                                                                                <div class="d-flex align-items-center justify-content-start mb-3">
                                                                                    <div class="ps-3"><img  style="width: 30px; height: 30px" src="{{asset('images/air-conditioning.png')}}"></div>
                                                                                    <div class="ps-6">{{$car->aircondition}}</div>
                                                                                </div>

                                                                                <div class="d-flex align-items-center justify-content-start mb-3">
                                                                                    <div class="ps-3"><img  style="width: 30px; height: 30px" src="{{asset('images/seat-belt1.png')}}"></div>
                                                                                    <div class="ps-6">{{$car->rider}}</div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-6">
                                                                                <div class="d-flex align-items-center justify-content-start mb-3">
                                                                                    <div class="ps-3"><img  style="width: 30px; height: 30px" src="{{asset('images/open-door.png')}}"></div>
                                                                                    <div class="ps-6">{{$car->car_doors}}</div>
                                                                                </div>
                                                                                <div class="d-flex align-items-center justify-content-start mb-3">
                                                                                    <div class="ps-3"><img  style="width: 30px; height: 30px" src="{{asset('images/boot.png')}}"></div>
                                                                                    <div class="ps-6">{{$car->car_luggage_capacity}}</div>
                                                                                </div>

                                                                                <div class="d-flex align-items-center justify-content-start ">
                                                                                    <div class="pe-4"><img  style="width: 50px; height: 50px" src="{{asset('images/noun-4x4-1107325.png')}}"></div>
                                                                                    <div class=""> @if($car->four_wheel_drive == 1) <span>4 X 4</span>@else
                                                                                            <img  style="width: 20px; height: 20px" src="{{asset('images/wrong.png')}}">
                                                                                        @endif</div>
                                                                                </div>

                                                                                <div class="d-flex align-items-center justify-content-start ">
                                                                                    <div class="pe-4"><img  style="width: 50px; height: 50px" src="{{asset('images/car1.png')}}"></div>
                                                                                    <div class="">{{date('Y', strtotime($car->manufacturer_year))}}</div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
--}}
                                                                        <div class="row">
                                                                            <div class="col-6 ">
                                                                                <div class="d-flex my-2">
                                                                                    <div class="  me-3 "><img style="height: 20px; width: 20px" src="{{asset('images/engine-oil-level.png')}} " srcset="{{asset('images/engine-oil-level.png')}} 2x " alt="car oil change in erile"></div>
                                                                                    <div>{{$car->enginetype}}</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6 ">
                                                                                <div class="d-flex my-2">
                                                                                    <div class="  me-3"><img style="height: 20px; width: 20px" src="{{asset('images/automatic-gearbox-warning.png')}}" srcset="{{asset('images/automatic-gearbox-warning.png')}} 2x" alt="car gear shift"></div>
                                                                                    <div>{{$car->gear_shift}}</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6 ">
                                                                                <div class="d-flex my-2">
                                                                                    <div class="  me-3"><img style="height: 20px; width: 20px" src="{{asset('images/fan-speed.png')}}" srcset="{{asset('images/fan-speed.png')}} 2x" alt="car air condition" ></div>
                                                                                    <div class="">@if($car->air_condition == 0)<img  style="width: 20px; height: 20px" src="{{asset('images/wrong.png')}}" srcset="{{asset('images/wrong.png')}} 2x" alt="car air condition not available">@else
                                                                                            <img  style="width: 20px; height: 20px" src="{{asset('images/check.png')}}" srcset="{{asset('images/check.png')}} 2x" alt="car air condition available">@endif</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6 ">

                                                                                <div class="d-flex my-2">
                                                                                    <div class=" me-3"><img style="height: 20px; width: 20px" src="{{asset('images/foot-outlet.png')}}" srcset="{{asset('images/foot-outlet.png')}} 2x" alt="car rider"></div>
                                                                                    <div class="ps-1">{{$car->rider}}</div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-6 ">

                                                                                <div class="d-flex my-2">
                                                                                    <div class="  me-3"><img  style="height: 20px; width: 20px" src="{{asset('images/door-lock.png')}}" srcset="{{asset('images/door-lock.png')}} 2x" alt="car door"></div>
                                                                                    <div class="">{{$car->car_doors}}</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6 ">
                                                                                <div class="d-flex my-2">
                                                                                    <div class="  me-3"><img style="height: 20px; width: 20px" src="{{asset('images/boot-open.png')}}" srcset="{{asset('images/boot-open.png')}} 2x" alt="car luggage capacity"></div>
                                                                                    <div class="">{{$car->car_luggage_capacity}}</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6  " >
                                                                                <div class="d-flex my-2">
                                                                                    <div class=" me-3"><img style="height: 20px; width: 20px" src="{{asset('images/hill-descent-control.png')}}" srcset="{{asset('images/hill-descent-control.png')}} 2x" alt="wheel drive"></div>
                                                                                    <div class=""> @if($car->four_wheel_drive == 1) <span>4X4</span>@else
                                                                                            <img  style="width: 20px; height: 20px" src="{{asset('images/wrong.png')}}" srcset="{{asset('images/wrong.png')}} 2x" alt="car 4x4 wheel drive not available" >
                                                                                        @endif</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6 ">

                                                                                <div class="d-flex my-2">
                                                                                    <div class="  me-3"><img style="height: 20px; width: 20px" src="{{asset('images/convertible-roof-warning.png')}}" srcset="{{asset('images/convertible-roof-warning.png')}} 2x" alt="car model"></div>
                                                                                    <div class="">{{date('Y', strtotime($car->manufacturer_year))}}</div>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <!-- /.post-content -->
                                                                </div>
                                                                <!--/.card-body -->

                                                                <!-- /.card-footer -->
                                                            </div>
                                                            <!-- /.card -->
                                                        </article>
                                            </div>


                                                <!-- /article -->
                                            <!-- /.item-inner -->
                                        </div>
                                        @endforeach

                                        @else
                                            <div class="row text-center mb-5 mb-md-5">
                                                <div class="col-12">There is no car to rent</div>
                                            </div>
                                        @endif
                                        <!--/.swiper-slide -->
                                    </div>
                                    <!--/.swiper-wrapper -->
                                </div>
                                <!-- /.swiper -->
                            </div>
                            <!-- /.swiper-container -->
                        </div>
                        <!-- /.position-relative -->
                    </div>
                    <!-- /.container -->
                </section>
                <!-- /section -->
                <div class="container pb-11">
                    <div class="row mb-14 mb-md-16 mt-20">
                        <div class="col-xl-10 mx-auto mt-n19">
                            <div class="card">
                                <div class="row gx-0">
                                    <div class="col-lg-6 align-self-stretch">
                                        <div class="map map-full rounded-top rounded-lg-start">
                                            <iframe title="Al-khuory office" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d25745.778258094026!2d44.013075936619565!3d36.234093941813654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2siq!4v1685533596528!5m2!1sar!2siq" style="width:100%; height: 100%; border:0" allowfullscreen=""></iframe>
                                        </div>
                                        <!-- /.map -->
                                    </div>
                                    <!--/column -->
                                    <div class="col-lg-6">
                                        <div class="p-10 p-md-11 p-lg-14">
                                            <div class="d-flex flex-row">
                                                <div>
                                                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                                                </div>
                                                <div class="align-items-center mx-3">
                                                    <h5 class="mb-1">{{__('messages.Address')}}</h5>
                                                    <address>{{__('messages.location1')}}</address>
                                                    <address>{{__('messages.location2')}}</address>

                                                </div>
                                            </div>
                                            <!--/div -->
                                            <div class="d-flex flex-row ">
                                                <div>
                                                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                                                </div>
                                                <div class=" mx-3">
                                                    <h5 class="mb-1">{{__('messages.Phone')}}</h5>
                                                    <p> 00 (964) 114 71 11 <br>00 (964) 114 61 11 </p>
                                                </div>
                                            </div>
                                            <!--/div -->
                                            <div class="d-flex flex-row">
                                                <div>
                                                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                                </div>
                                                <div class=" mx-3">
                                                    <h5 class="mb-1">{{__('messages.Email')}}</h5>
                                                    <p class="mb-0"><a href="mailto:info@alkhoury.com" class="link-body">info@alkhoury.com</a></p>
                                                </div>
                                            </div>
                                            <!--/div -->
                                        </div>
                                        <!--/div -->
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    <div class="row  @if(App::getLocale() == 'ar') justify-content-end @endif ">
                        <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                            <h2 class="display-4 mb-3 text-center">{{__('messages.Drop_Us_a_Line')}}</h2>
                            <p class="lead text-center mb-10">{{__('messages.Reach_out')}}</p>
                            <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate="">
                                <div class="messages"></div>
                                <div class="row gx-4">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required="">
                                            <label for="form_name"> *{{__('messages.First_Name')}}</label>
                                            <div class="valid-feedback"> ! {{__('messages.Looks_good')}}</div>
                                            <div class="invalid-feedback"> .{{__('messages.Please_enter_your_first_name')}} </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required="">
                                            <label for="form_lastname"> *{{__('messages.Last_Name')}}</label>
                                            <div class="valid-feedback"> !{{__('messages.Looks_good')}} </div>
                                            <div class="invalid-feedback"> . {{__('messages.Please_enter_your_last_name')}}</div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required="">
                                            <label for="form_email">{{__('messages.Email')}} *</label>
                                            <div class="valid-feedback"> {{__('messages.Looks_good')}}! </div>
                                            <div class="invalid-feedback">  {{__('messages.valid_email')}} </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-select-wrapper mb-4">
                                            <select class="form-select" id="form-select" name="department" required="">
                                                <option selected="" disabled="" value=""> {{__('messages.department')}}</option>
                                                <option value="Sales">{{__('messages.Sales')}}</option>
                                                <option value="Marketing">{{__('messages.Marketing')}}</option>
                                                <option value="Customer Support">{{__('messages.Customer_Support')}}</option>
                                            </select>
                                            <div class="valid-feedback"> {{__('messages.Looks_good')}}</div>
                                            <div class="invalid-feedback">  {{__('messages.select_department')}}</div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-12">
                                        <div class="form-floating mb-4">
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required=""></textarea>
                                            <label for="form_message"> {{__('messages.Message')}}*</label>
                                            <div class="valid-feedback"> {{__('messages.Looks_good')}}</div>
                                            <div class="invalid-feedback"> {{__('messages.enter_messsage')}}</div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-12 text-center">
                                        <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="{{__('messages.Send_message')}}">
                                        <p class="text-muted"><strong>*</strong> {{__('messages.fields_required')}}</p>
                                    </div>
                                    <!-- /column -->
                                </div>
                                <!-- /.row -->
                            </form>
                            <!-- /form -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>



        </div>
    </section>

@endsection


@push('script')
    <script>

        // alert('dfvkjdhkhjdhfdf');
        $('.delete-service').click(function() {
            // alert('clicked');
            var id = $(this).data('service-id');
            var url = "{{ route('services.destroy', ':id') }}";
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

