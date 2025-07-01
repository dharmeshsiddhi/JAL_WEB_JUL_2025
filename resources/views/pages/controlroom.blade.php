@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);"> {{ __('CONTROL_PAGE_TITLE') }} </h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="aboutDesc">
                    <p class="line-height-2em text-justify"> {{ __('CONTROL_PAGE_PARA_1') }}</p>
                    <p class="line-height-2em text-justify"> {{ __('CONTROL_PAGE_PARA_2') }}</p>
                    <table>
                        <tr>
                            <td class="text-primary" style="border:0" width="20%"><h2 class="mt-20"><strong><i class="fa fa-volume-control-phone"></i>&nbsp;&nbsp;{{ __('CONTROL_PAGE_CONTACT_PHONE') }}</strong></h2></td>
                            <td class="text-primary" style="border:0" width="1%"><h2 class="mt-20"><strong><i class="fa fa-angle-double-right"></i></strong></h2></td>
                            <td class="text-primary" style="border:0" width="35%"><h2 class="mt-20"><strong>{{ __('FOOTER_ADDRESS_PHONE_1') }} / {{ __('FOOTER_ADDRESS_PHONE_2') }}</strong></h2></td>
                        </tr>
                        <tr>
                            <td class="text-primary" style="border:0" width="20%"><h2 class="mt-20"><strong><i class="fa fa-phone"></i>&nbsp;&nbsp;{{ __('CONTROL_PAGE_CONTACT_EMERGENCY') }}</strong></h2></td>
                            <td class="text-primary" style="border:0" width="1%"><h2 class="mt-20"><strong><i class="fa fa-angle-double-right"></i></strong></h2></td>
                            <td class="text-primary" style="border:0" width="35%"><h2 class="mt-20"><strong>{{ __('HOME_PAGE_HELPLINE_POLICE_NO') }}</strong></h2></td>
                        </tr>
                        <tr>
                            <td class="text-primary" style="border:0" width="20%"><h2 class="mt-20"><strong><i class="fa fa-envelope"></i>&nbsp;&nbsp;{{ __('CONTROL_PAGE_CONTACT_EMAIL') }}</strong></h2></td>
                            <td class="text-primary" style="border:0" width="1%"><h2 class="mt-20"><strong><i class="fa fa-angle-double-right"></i></strong></h2></td>
                            <td class="text-primary" style="border:0" width="35%"><h2 class="mt-20"><strong>{{ __('FOOTER_ADDRESS_EMAIL') }}</strong></h2></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
@endsection