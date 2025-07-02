@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('CONTACT_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        
        
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="row justify-content-center contact">
                    <div class="col-md-12 mt-4">
                        <div class="info-box">
                            <i class="fa fa-map-marker"></i>
                            <h3>{{ __('CONTACT_PAGE_SECTION_ADDRESS') }}</h3>
                            <p>{{ __('FOOTER_ADDRESS_ADDRESS_1') }} {{ __('FOOTER_ADDRESS_ADDRESS_2') }} {{ __('FOOTER_ADDRESS_ADDRESS_3') }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="info-box">
                            <i class="fa fa-phone"></i>
                            <h3>{{ __('CONTACT_PAGE_SECTION_CALL') }}</h3>
                            <p><a href="tel:02572223333">{{ __('FOOTER_ADDRESS_PHONE_1') }}</a> &nbsp;&nbsp;/&nbsp;&nbsp; <a href="tel:02572235232">{{ __('FOOTER_ADDRESS_PHONE_2') }}</a></p>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="info-box">
                            <i class="fa fa-envelope"></i>
                            <h3>{{ __('CONTACT_PAGE_SECTION_EMAIL') }}</h3>
                            <p><a href="mailto:sp.jalgaon@mahapolice.gov.in">{{ __('FOOTER_ADDRESS_EMAIL') }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row map-container mt-4">
                    <div class="col-md-12 map-div pl-0 pr-0">
                        <iframe src="https://maps.google.com/maps?q=+Superintendent+of+Police%2C+Jalgaon&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" frameborder="0" aria-hidden="false" tabindex="0" title="Superintendent of Police, Dhule, Maharashtra"></iframe>
                    </div>
                </div>
            </div>
            
            <!-- <div class="col-md-6">
                <div class="row map-container mt-4">
                    <div class="col-md-12 map-div pl-0 pr-0">
                        <iframe src="https://www.google.com/maps/d/embed?mid=13eCyejK8-aJ0Uwq9ZHndwysGNlJDgSg&ehbc=2E312F" width="100%" height="100%" frameborder="0" aria-hidden="false" tabindex="0" title="Superintendent of Police, Dhule, Maharashtra"></iframe>
                    </div>
                </div>
            </div> -->
            <div class="col-md-1"></div>
        </div>
        
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('CONTACT_PAGE_TABLE_HEAD') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
    <form id="form1">
        <div class="row mx-0">
            <div class="col-md-9"></div>
            <div class="col-md-2">
                <a class="btn btn-primary btn-lg btn-block" style="padding:10px;" href="{{ URL::to('/pdf/generate-contact-list') }}" target="_blank"><i class="fa fa-file-pdf-o mr-2"></i>{{ __('PRESS_PAGE_TABLE_DOWNLOAD') }}</a>
            </div>
        </div>
    </form>
        <div class="row mx-0">
            <form id="form1"></form>
            <div class="col-md-12" id="ajaxResponseData" style="overflow-x:auto;">
                @if($dView == 'Desktop')
                    <table class="table table-hover table-bordered table-responsive-md mt-10">
                        <thead>
                            <tr>
                                <th scope="col" width="">{{ __('CONTACT_PAGE_TABLE_SR') }}</th>
                                <th scope="col" width="19%">{{ __('CONTACT_PAGE_TABLE_NAME') }}</th>
                                <th scope="col" width="">{{ __('CONTACT_PAGE_TABLE_DESIGN') }}</th>
                                <th scope="col" width="">{{ __('CONTACT_PAGE_TABLE_OFFICE_NO') }}</th>
                                <th scope="col" width="12%">{{ __('CONTACT_PAGE_TABLE_MOBILE') }}</th>
                                <th scope="col" width="25%">{{ __('CONTACT_PAGE_TABLE_EMAIL') }}</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @php $counter=1; @endphp
                            @if(count($officerList))
                            @foreach($officerList as $detail)
                                <tr>
                                    <td class="v-center">{{$counter}}</td>
                                    <td class="v-center"> @if(Lang::locale() == 'mr') {{ $detail->MSO_Name_Mr }} @else {{ $detail->MSO_Name }}   @endif          </td>
                                    <td class="v-center">
                                    
                                    @if(Lang::locale() == 'mr') {{ $detail->MSO_Work_Location_Mr }} @else {{ $detail->MDES_Name }}, {{ $detail->MSO_Work_Location }}   @endif
                                    </td>
                                    <td><img src="hyd/landline.svg" class="mr-2" alt="" height="15px">@if($detail->MSO_Landline != '') {{ $detail->MSO_Landline }} @endif </td>
                                    <td><img src="hyd/mobile.svg" class="mr-2" alt="" height="15px"> @if($detail->MSO_Mobile != '') {{ $detail->MSO_Mobile }} @endif</td>
                                    <td><img src="hyd/email.svg" class="mr-2" alt="" height="15px"> @if($detail->MSO_Email != '') {{ $detail->MSO_Email }} @endif</td>
                                    
                                </tr>
                                @php $counter=$counter+1; @endphp  
                            @endforeach
                            @endif
                            @if(count($stationList))
                                @foreach($stationList as $detail)
                                    <tr>
                                        <td class="v-center">{{$counter}}</td>
                                        <td class="v-center"> @if(Lang::locale() == 'mr') {{ $detail->MPS_Incharge_Name_Mr }} @else {{ $detail->MPS_Incharge_Name }}   @endif              </td>
                                        <td class="v-center">@if(Lang::locale() == 'mr') {{ $detail->MPS_Incharge_Post_Mr }} @else {{ $detail->MPS_Incharge_Post }}   @endif, @if(Lang::locale() == 'mr') {{ $detail->MPS_Name_MR }} @else {{ $detail->MPS_Name }} @endif</td>
                                        <td><img src="hyd/landline.svg" class="mr-2" alt="" height="15px">@if($detail->MPS_Phone != '') {{ $detail->MPS_Phone }} @endif </td>
                                        <td><img src="hyd/mobile.svg" class="mr-2" alt="" height="15px"> @if($detail->MPS_Incharge_Mobile != '') {{ $detail->MPS_Incharge_Mobile }} @endif</td>
                                        <td><img src="hyd/email.svg" class="mr-2" alt="" height="15px"> @if($detail->MPS_Email != '') {{ $detail->MPS_Email }} @endif</td>
                                    </tr>
                                @php $counter=$counter+1; @endphp             
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                @else
                    <div class="table-users">
                        <table class="table11" cellspacing="0">
                            <tr>
                                <th>{{ __('CONTACT_PAGE_TABLE_NAME') }}</th>
                                <th>{{ __('CONTACT_PAGE_TABLE_DESIGN') }}</th>
                                <th>{{ __('CONTACT_PAGE_TABLE_OFFICE_NO') }}</th>
                                <th>{{ __('CONTACT_PAGE_TABLE_MOBILE') }}</th>
                            </tr>
                            @php $counter=1; @endphp
                            @if(count($officerList))
                                @foreach($officerList as $detail)
                                    <tr>
                                        <td>@if(Lang::locale() == 'mr') {{ $detail->MSO_Name_Mr }} @else {{ $detail->MSO_Name }}   @endif </td>
                                        <td> @if(Lang::locale() == 'mr') {{ $detail->MSO_Work_Location_Mr }} @else {{ $detail->MDES_Name }}, {{ $detail->MSO_Work_Location }}   @endif</td>
                                        <td><img src="hyd/landline.svg" class="mr-2" alt="" height="15px">@if($detail->MSO_Landline != '') {{ $detail->MSO_Landline }} @endif </td>
                                        <td><img src="hyd/mobile.svg" class="mr-2" alt="" height="15px"> @if($detail->MSO_Mobile != '') {{ $detail->MSO_Mobile }} @endif</td>
                                        <td><img src="hyd/email.svg" class="mr-2" alt="" height="15px"> @if($detail->MSO_Email != '') {{ $detail->MSO_Email }} @endif</td>
                                    </tr>
                                    @php $counter=$counter+1; @endphp  
                                @endforeach
                            @endif
                            @if(count($stationList))
                                @foreach($stationList as $detail)
                                    <tr>
                                        <td>  @if(Lang::locale() == 'mr') {{ $detail->MPS_Incharge_Name_Mr }} @else {{ $detail->MPS_Incharge_Name }}   @endif</td>
                                        <td class="v-center">@if(Lang::locale() == 'mr') {{ $detail->MPS_Incharge_Post_Mr }} @else {{ $detail->MPS_Incharge_Post }}   @endif, @if(Lang::locale() == 'mr') {{ $detail->MPS_Name_MR }} @else {{ $detail->MPS_Name }} @endif</td>
                                        <td><img src="hyd/landline.svg" class="mr-2" alt="" height="15px">@if($detail->MPS_Phone != '') {{ $detail->MPS_Phone }} @endif </td>
                                        <td><img src="hyd/mobile.svg" class="mr-2" alt="" height="15px"> @if($detail->MPS_Incharge_Mobile != '') {{ $detail->MPS_Incharge_Mobile }} @endif</td>
                                        <td><img src="hyd/email.svg" class="mr-2" alt="" height="15px"> @if($detail->MPS_Email != '') {{ $detail->MPS_Email }} @endif</td>
                                    </tr>
                                    @php $counter=$counter+1; @endphp             
                                @endforeach
                            @endif
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
