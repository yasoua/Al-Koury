<footer class="bg-light">
    <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0" @if(App::getLocale() == 'ar') dir="rtl"  @endif >
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h1>{{__('messages.Al-Khoury')}}</h1>
{{--                    <img style="width: 134px; height: 26px" class="mb-4" src="./assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />--}}
                    <p class="mb-4">© 2023 {{__('messages.Al-Khoury')}}. <br class="d-none d-lg-block" />{{__('messages.All_rights_reserved')}}.</p>
                    <nav class="nav social" >
                        <a href="#" style="margin-right: 0px"><i class="uil uil-twitter" ></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                        <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3 ">
                <div class="widget">
                    <h4 class="widget-title  mb-3">{{__('messages.Get_in_Touch')}}</h4>

                    <address class="">{{__('messages.location1')}}</address>
                    <address class="mb-3">{{__('messages.location2')}}</address>

                    <a href="mailto:#" class="link-body">info@alkhuory.com</a><br />00 (964) 114 71 11
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title  mb-3">{{__('messages.Learn_More')}}</h4>
                    <ul class="list-unstyled text-reset mb-0 pe-0">
                        <li><a href="/">{{__('messages.Home')}}</a></li>
                        <li><a href="/about">{{__('messages.About')}}</a></li>
                        <li><a href="{{route('services.index')}}">{{__('messages.Services')}}</a></li>
                        <li><a href="{{route('cars.index')}}">{{__('messages.Cars')}}</a></li>
                        <li><a href="/contact">{{__('messages.Contact')}}</a></li>

                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title  mb-3">{{__('messages.Services')}}</h4>
                    <ul class="list-unstyled text-reset mb-0 pe-0">
                        <li><a href="{{route('services.index')}}">{{__('messages.service_name_Rental')}}</a></li>
                        <li><a href="{{route('services.index')}}">{{__('messages.service_name_Installment_sales')}}</a></li>
                        <li><a href="{{route('services.index')}}">{{__('messages.service_name_Foreign_lease_contracts')}}</a></li>
                        <li><a href="{{route('services.index')}}">{{__('messages.service_name_Contracts_for_the_sale_and_purchase')}}</a></li>
                        <li><a href="{{route('services.index')}}">{{__('messages.service_name_Price')}}</a></li>
                        <li><a href="{{route('services.index')}}">{{__('messages.service_name_Full_Service')}}</a></li>
                        <li><a href="{{route('services.index')}}">{{__('messages.service_name_Brands_&_Models')}}</a></li>

                    </ul>
                </div>
                <!-- /.widget -->
            </div>

            <!-- /column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</footer>
