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

                    <h6 class="card-title">{{__('messages.Edit_Service')}}</h6>

                    <form class="forms-sample" enctype="multipart/form-data" action="{{route('services.update', $services->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label text-blue">{{__('messages.services_name')}}</label>
                            <input type="text" name="name" value="{{__('messages.service_name_' . $services->lang_name)}}" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="enter your services name">
                            @error('name')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-blue">{{__('messages.Description')}}</label>
                            <input type="text" name="description"  value="{{__('messages.service_description_' . $services->lang_name)}}"  class="form-control" id="exampleInputEmail1" placeholder="Describe your services ">
                            @error('description')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-blue">{{__('messages.Picture')}}</label>
                            <img src="{{ asset('images').'/'.$services->picture }}" class="card-img-top mb-2" alt="service-picture" id="edit_picture_img" style="max-width: 100%; border: 1px solid black;">

                            <input type="file" name="picture" id="picture" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Insert your picture">
                            @error('picture')
                            <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-blue">{{__('messages.Service_Icon')}}</label>
                            <img src="{{ asset('images').'/'.$services->service_icon }}" class="card-img-top mb-2" alt="service_icon-picture" id="edit_icon_img" style="max-width: 100%; border: 1px solid black;">

                            <input type="file" name="service_icon" id="icon" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Insert your icon as image">
                            @error('service_icon')
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
        $("#icon").on( "change", function () {

            $("#edit_icon_img").prop("hidden", true);
        });

        @if(session()->get('errors'))
        swalMessage("error", "Error Occured");
        @endif

    </script>
@endpush
