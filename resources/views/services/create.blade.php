@extends('layouts.master')
@section('content')
    <div class="row " @if(App::getLocale() == 'ar') dir="rtl"  @endif >
        <div class="col-md-12 grid-margin stretch-card d-flex align-items-center justify-content-center"
             {{--style="{
        display: contents;
        }
        "--}}>
            <div class="card w-50">
                <div class="card-body">

                    <h6 class="card-title">{{__('messages.Add_service')}}</h6>

                    <form class="forms-sample" enctype="multipart/form-data" action="{{route('services.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label text-blue">{{__('messages.services_name')}}</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="{{__('messages.enter_your_services_name')}}">
                            @error('name')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-blue">{{__('messages.Description')}}</label>
                            <input type="text" name="description" value="{{old('description')}}" class="form-control" id="exampleInputEmail1" placeholder="{{__('messages.Describe_your_services')}}">
                            @error('description')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-blue">{{__('messages.Picture')}}</label>
                            <input type="file" name="picture" value="{{old('picture')}}" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="{{__('messages.Insert_your_picture')}}">
                            @error('picture')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-blue">{{__('messages.Service_Icon')}}</label>
                            <input type="file" name="service_icon" value="{{old('service_icon')}}" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="{{__('messages.Insert_your_icon_as_image')}}">
                            @error('service_icon')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary  @if(App::getLocale() == 'ar') ms-2 @else me-2 @endif ">{{__('messages.Submit')}}</button>
                        <a href="/" class="btn btn-secondary">{{__('messages.Cancel')}}</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
