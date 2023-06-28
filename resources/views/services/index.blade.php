@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
            <h2 class="fs-15 text-uppercase text-muted mb-3"> {{__('messages.What_We_Do?')}}</h2>
            <h3 class="display-4 mb-10">{{__('messages.service_we_offer')}}</h3>
        </div>
        <!-- /column -->
    </div>
    <!-- /.row -->
    @if($services->count())
        <div class="row  text-center mb-14 mb-md-17 ms-6 me-6">
            @foreach($services as $service)
                                    <div class="col-md-4 col-lg-4">
                                    <div class="card mb-6">
                                        @if($service->picture == $service->service_icon)
                                        <div class="card-title mt-6 " >
                                                <img class="card-img-top" src="{{asset('images').'/'.$service->picture}}" style="height: 50px; width: 50px" alt="car service icon" />

                                        </div>
                                        @else
                                            <div class="card-title " {{--style="max-height: 500px; background-image: url({{asset('images').'/'.$service->picture}})"--}} >
                                                <img class="card-img-top " src="{{asset('images').'/'.$service->picture}}" srcset="{{asset('images').'/'.$service->picture}} 2x" alt="car services" />
                                            </div>
                                                @endif
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <h4 @if(auth()->user()) class="ms-13" @endif >{{__('messages.service_name_'. $service->lang_name)}}</h4>
                                                @auth()
                                                    <div class="">
                                                        <div class="ms3">
                                                            <div class="dropdown">
                                                                <a class="dropdown-toggle ms-6" href="#" data-bs-toggle="dropdown">
                                                                    <img src="{{asset('images/gears.svg')}}" class="svg-inject icon-svg icon-svg-xs solid-mono text-primary" alt="" />
                                                                </a>
                                                                <ul class="dropdown-menu" dir="ltr">
                                                                    {{--                                                                                                <li class="nav-item"><a class="dropdown-item" href="{{route('cars.destroy')}}">edit</a></li>--}}
                                                                    <li><a class="dropdown-item delete-service d-flex" href="#" data-service-id="{{$service->id}}"><i class="iconify me-2 mt-1" data-icon="uil:trash"></i> {{__('messages.Delete')}}</a></li>
                                                                    <li class="nav-item"><a class="dropdown-item" href="{{route('services.edit', $service->id)}}"><i class="iconify me-2 mt-1" data-icon="uil:edit"></i> {{__('messages.Edit')}}</a></li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                @endauth

                                            </div>
                                            <p class="mb-3">{{__('messages.service_description_'. $service->lang_name)}}</p>
{{--                                            <a href="#" class="more hover">Learn More</a>--}}
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    </div>
                                    <!--/.card -->
{{--                <div class="col-md-4 col-lg-4 mb-6">--}}
{{--                    <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-5"><img style="hight: 40px; width: 40px" src="{{asset('images').'/'.$service->service_icon}}" ></div>--}}
{{--                    <h4>{{$service->name}}</h4>--}}
{{--                    <p class="mb-3">{{$service->description}}</p>--}}
{{--                    <a href="#" class="more hover">Learn More</a>--}}
{{--                </div>--}}
{{--                <!--/column -->--}}

            @endforeach


            @else
                <div class="row  text-center mb-5 mb-md-5">
                    <div class="col-12">There is no services</div>
                </div>
    @endif

@endsection
                @push('script')
                    <script>
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
                    </script>
        @endpush
