@extends('layouts.master')
@section('content')

    <div class="row "  @if(App::getLocale() == 'ar') dir="rtl"  @endif >
        <div class="col-md-12 grid-margin stretch-card d-flex align-items-center justify-content-center"
            {{--style="{
       display: contents;
       }
       "--}}>
            <div class="card w-50">
                <div class="card-body">

                    <h6 class="card-title">{{__('messages.Add_Car')}}</h6>

                    <form class="forms-sample" enctype="multipart/form-data" action="{{route('cars.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label text-blue">{{__('messages.Brand')}}</label>
                            <input type="text" name="brand" class="form-control" id="exampleInputUsername1" value="{{old('brand')}}" autocomplete="off" placeholder="{{__('messages.enter_car_brand')}}">
                            @error('brand')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-blue">{{__('messages.Car_Name')}}</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{old('name')}}" placeholder="{{__('messages.Enter_car_name')}} ">
                            @error('name')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-blue">{{__('messages.Picture')}}</label>
                            <input type="file" name="picture" class="form-control" id="exampleInputPassword1" value="{{old('picture')}}" autocomplete="off" placeholder="{{__('messages.Insert_your_picture')}}">
                            @error('picture')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-blue">{{__('messages.Model')}}</label>
                            <input type="date" name="manufacturer_year" class="form-control" id="exampleInputPassword1" value="{{old('manufacturer_year')}}" autocomplete="off" placeholder="{{__('messages.Chose_car_model')}}">
                            @error('manufacturer_year')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-blue">{{__('messages.Riders')}}</label>
                            <input type="text" name="rider" class="form-control" id="exampleInputEmail1" value="{{old('rider')}}" placeholder="{{__('messages.Enter_how_many_riders')}}">
                            @error('rider')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group col-md-12 mb-6">
                            <div class=" @if(App::getLocale() == 'ar') text-end @else text-start  @endif d-inline-block">
                                <label class="fw-bold">{{__('messages.Wheel_drive')}}</label>
                                <br>
                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline1" name="four_wheel_drive" value="1" @if(old('four_wheel_drive')!= null && old('four_wheel_drive') == 1) checked @endif  class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline1">{{__('messages.4_wheel_drive')}}</label>
                                </div>

                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline2" name="four_wheel_drive" @if(old('four_wheel_drive')!= null && old('four_wheel_drive') == 0) checked @endif value="0" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline2">{{__('messages.2_wheel_drive')}}</label>
                                </div>

                            </div>
                            @error('four_wheel_drive')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-12 mb-6">
                            <div class="@if(App::getLocale() == 'ar') text-end @else text-start  @endif d-inline-block">
                                <label class="fw-bold">{{__('messages.Engine_Type')}}</label>
                                <br>
                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline1" name="engine_type" value="0" @if(old('engine_type')!= null && old('engine_type') == 0) checked @endif  class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline1">{{__('messages.Fuel')}}</label>
                                </div>

                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline2" name="engine_type" @if(old('engine_type')!= null && old('engine_type') == 1) checked @endif value="1" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline2">{{__('messages.electricity')}}</label>
                                </div>

                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline2" name="engine_type" @if(old('engine_type')!= null && old('engine_type') == 2) checked @endif value="2" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline2">{{__('messages.Hybrid')}}</label>
                                </div>

                            </div>
                            @error('engine_type')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>

                        {{--<div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-blue"></label>
                            <input type="text" name="" class="form-control" id="exampleInputEmail1" value="{{old('gear_shift')}}" placeholder="Enter: Automatic, Normal or Hybrid">
                            @error('gear_shift')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>--}}
                        <div class="form-group col-md-12 mb-6">
                            <div class="@if(App::getLocale() == 'ar') text-end @else text-start  @endif d-inline-block">
                                <label class="fw-bold">{{__('messages.Gear_Shift')}}</label>
                                <br>
                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline1" name="gear_shift" value="0" @if(old('gear_shift')!= null && old('gear_shift') == 0) checked @endif  class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline1">{{__('messages.Normal')}}</label>
                                </div>

                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline2" name="gear_shift" @if(old('gear_shift')!= null && old('gear_shift') == 1) checked @endif value="1" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline2">{{__('messages.Automatic')}}</label>
                                </div>

                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline2" name="gear_shift" @if(old('gear_shift')!= null && old('gear_shift') == 2) checked @endif value="2" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline2">{{__('messages.Hybrid')}}</label>
                                </div>

                            </div>
                            @error('gear_shift')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group col-md-12 mb-6">
                            <div class="@if(App::getLocale() == 'ar') text-end @else text-start  @endif d-inline-block">
                                <label class="fw-bold">{{__('messages.air_condition')}}</label>
                                <br>
                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline1" name="air_condition" value="1" @if(old('air_condition')!= null && old('air_condition') == 1) checked @endif  class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline1">{{__('messages.Available')}}</label>
                                </div>

                                <div class="custom-control">
                                    <input type="radio" id="customRadioInline2" name="air_condition" @if(old('air_condition')!= null && old('air_condition') == 0) checked @endif value="0" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline2">{{__('messages.Unavailable')}}</label>
                                </div>

                            </div>
                            @error('air_condition')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-blue">{{__('messages.car_door')}}</label>
                            <input type="text" name="car_doors" class="form-control" id="exampleInputEmail1" value="{{old('car_doors')}}" placeholder="{{__('messages.Enter_how_many_cars_doors')}}">
                            @error('car_doors')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-blue">{{__('messages.car_luggage_capacity')}}</label>
                            <input type="text" name="car_luggage_capacity" class="form-control" id="exampleInputEmail1" value="{{old('car_luggage_capacity')}}" placeholder="{{__('messages.Enter_how_many_cars_luggage_capacity')}}">
                            @error('car_luggage_capacity')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary @if(App::getLocale() == 'ar') ms-2 @else me-2 @endif">{{__('messages.Submit')}}</button>
                        <a href="/" class="btn btn-secondary">{{__('messages.Cancel')}}</a>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
