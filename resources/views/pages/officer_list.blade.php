@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">@if(Lang::locale() == 'mr') वरिष्ठ पोलीस अधिकारी  @else Senior Police Officer's @endif    </h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-12">
                <div class="row mx-0">
                    @if(count($officerList))
                        @foreach($officerList as $detail)
                            <div class="col-md-4 zoomIn wow delay-1  animated" style="padding-top: 80px; visibidivty: visible; animation-name: zoomIn;">
                                <div class="leadbox">
                                    <div class="cell-1">
                                        <img src="https://panel.jalgaonpolice.gov.in/{{ $detail->MSO_Photo }}" alt="{{ $detail->MSO_Name }}" title="{{ $detail->MSO_Name }}" onerror="this.onerror=null;this.src='images/cap.jpg';">
                                    </div>
                                    <div class="cell-2">
                                        <h4>@if(Lang::locale() == 'mr') {{ $detail->MSO_Name_Mr }} @else {{ $detail->MSO_Name }}   @endif</h4>
                                        <div class="mod-contact">
                                            <a class="contact-item" href="javascript:void(0)">
                                                <span class="contact-icon"><i class="fa fa-map-marker"></i></span>
                                                <span class="contact-label">@if(Lang::locale() == 'mr') {{ $detail->MSO_Work_Location_Mr }} @else {{ $detail->MDES_Name }}, {{ $detail->MSO_Work_Location }}   @endif</span>
                                            </a>
                                            <a class="contact-item" href="tel:@if($detail->MSO_Landline!= '') {{ $detail->MSO_Landline }} @endif">
                                                <span class="contact-icon"><i class="fa fa-phone-square"></i></span>
                                                <span class="contact-label">@if($detail->MSO_Landline != '') {{ $detail->MSO_Landline }} @endif</span>
                                            </a>
                                            <a class="contact-item" href="mailto:@if($detail->MSO_Mobile!= '') {{ $detail->MSO_Mobile }} @endif">
                                                <span class="contact-icon"><i class="fa fa-phone"></i></span>
                                                <span class="contact-label">@if($detail->MSO_Mobile!= '') {{ $detail->MSO_Mobile }} @endif</span>
                                            </a>
                                            <a class="contact-item" href="mailto:@if($detail->MSO_Email!= '') {{ $detail->MSO_Email }} @endif">
                                                <span class="contact-icon"><i class="fa fa-envelope"></i></span>
                                                <span class="contact-label">@if($detail->MSO_Email!= '') {{ $detail->MSO_Email }} @endif</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
