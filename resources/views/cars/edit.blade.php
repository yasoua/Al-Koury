@extends('layouts.master')
@section('content')

    <div class="row ">
        <div class="col-md-12 grid-margin stretch-card d-flex align-items-center justify-content-center"
            {{--style="{
       display: contents;
       }
       "--}}>
            <div class="card w-50">
                <div class="card-body">

                    <h6 class="card-title">{{__('messages.Edit_Car')}}</h6>

                    <form class="forms-sample" enctype="multipart/form-data" action="{{route('cars.update',$car->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label text-blue">{{__('messages.Brand')}}</label>
                            <input type="text" name="brand" value="{{$car->brand}}" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="enter car brand">
                            @error('brand')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-blue">{{__('messages.Car_Name')}}</label>
                            <input type="text" name="name" value="{{$car->name}}"class="form-control" id="exampleInputEmail1" placeholder="Enter car name ">
                            @error('name')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-blue">{{__('messages.Picture')}}</label>
                            <img src="{{ asset('images').'/'.$car->picture }}" class="card-img-top mb-2" alt="car-picture" id="edit_picture_img" style="max-width: 100%; border: 1px solid black;">

                            <input type="file" name="picture" id="picture" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Insert your picture">
                            @error('picture')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-blue">{{__('messages.Model')}}</label>
                            <input type="date" name="manufacturer_year" value="{{$car->manufacturer_year}}" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Chose car model">
                            @error('manufacturer_year')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-blue">{{__('messages.Riders')}}</label>
                            <input type="text" name="rider" value="{{$car->rider}}" class="form-control" id="exampleInputEmail1" placeholder="Enter how many riders">
                            @error('rider')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group col-md-12 mb-6">
                            <div class="text-start d-inline-block">
                                <label class="fw-bold">{{__('messages.Wheel_drive')}}</label>
                                <br>
                                <div class="custom-control">
                                    <input type="radio" @if($car->four_wheel_drive == 1) checked @endif id="customRadioInline1" name="four_wheel_drive" value="1"  class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline1">{{__('messages.4_wheel_drive')}}</label>
                                </div>

                                <div class="custom-control">
                                    <input type="radio" @if($car->four_wheel_drive == 0) checked @endif id="customRadioInline2" name="four_wheel_drive" value="0" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline2">{{__('messages.2_wheel_drive')}}</label>
                                </div>

                            </div>
                            @error('four_wheel_drive')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group col-md-12 mb-6">
                            <div class="text-start d-inline-block">
                                <label class="fw-bold">{{__('messages.Engine_Type')}}</label>
                                <br>
                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline1" name="engine_type" value="0" @if($car->engine_type == 0) checked @endif  class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline1">{{__('messages.Fuel')}}</label>
                                </div>

                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline2" name="engine_type" @if($car->engine_type == 1) checked @endif  value="1" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline2">{{__('messages.electricity')}}</label>
                                </div>

                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline2" name="engine_type" @if($car->engine_type == 2) checked @endif  value="2" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline2">{{__('messages.Hybrid')}}</label>
                                </div>

                            </div>
                            @error('engine_type')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group col-md-12 mb-6">
                            <div class="text-start d-inline-block">
                                <label class="fw-bold">{{__('messages.Gear_Shift')}}</label>
                                <br>
                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline1" name="gear_shift" value="0" @if($car->gear_shift == 0) checked @endif  class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline1">{{__('messages.Normal')}}</label>
                                </div>

                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline2" name="gear_shift" @if($car->gear_shift == 1) checked @endif value="1" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline2">{{__('messages.Automatic')}}</label>
                                </div>

                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline2" name="gear_shift" @if($car->gear_shift == 2) checked @endif value="2" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline2">{{__('messages.Hybrid')}}</label>
                                </div>

                            </div>
                            @error('gear_shift')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group col-md-12 mb-6">
                            <div class="text-start d-inline-block">
                                <label class="fw-bold">{{__('messages.air_condition')}}</label>
                                <br>
                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline1" name="air_condition" value="1"  @if($car->air_condition == 1) checked @endif   class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline1">{{__('messages.Available')}}</label>
                                </div>

                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline2" name="air_condition" @if($car->air_condition == 0) checked @endif value="0" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline2">{{__('messages.Unavailable')}}</label>
                                </div>

                            </div>
                            @error('air_condition')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-blue">{{__('messages.car_door')}}</label>
                            <input type="text" name="car_doors" class="form-control" id="exampleInputEmail1" value="{{$car->car_doors}}" placeholder="{{__('messages.Enter_how_many_cars_doors')}}">
                            @error('car_doors')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-blue">{{__('messages.car_luggage_capacity')}}</label>
                            <input type="text" name="car_luggage_capacity" class="form-control" id="exampleInputEmail1" value="{{$car->car_luggage_capacity}}" placeholder="{{__('messages.Enter_how_many_cars_luggage_capacity')}}">
                            @error('car_luggage_capacity')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary me-2">{{__('messages.Submit')}}</button>
                        <a href="/" class="btn btn-secondary">{{__('messages.Cancel')}}</a>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
@push('script')
<script>

    $("#picture").on( "change", function () {
        $("#edit_picture_img").prop("hidden", true);
    });

    @if(session()->get('errors'))
    swalMessage("error", "Error Occured");
    @endif

</script>
@endpush

