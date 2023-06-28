@extends('layouts.master')
@section('content')
    <div class="container pb-11" @if(App::getLocale() == 'ar') dir="rtl"  @endif>
        <div class="row mb-14 mb-md-16 mt-20">
            <div class="col-xl-10 mx-auto mt-n19">
                <div class="card mt-7">
                    <div class="row gx-0">
                        <div class="col-lg-6 align-self-stretch">
                            <div class="map map-full rounded-top rounded-lg-start">
                                <iframe title="Al-khuory office" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d225.78213878054643!2d43.98846195568414!3d36.23015887836005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2siq!4v1686388253677!5m2!1sar!2siq" style="width:100%; height: 100%; border:0" allowfullscreen=""></iframe>
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
                                    <div >
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                                    </div>
                                    <div class=" mx-3">
                                        <h5 class="mb-1">{{__('messages.Phone')}}</h5>
                                        <div dir="ltr">
                                            <p class="mb-0">00 (964) 114 71 11</p>
                                            <p class="mb-0">00 (964) 114 61 11</p>
                                        </div>
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


@endsection
