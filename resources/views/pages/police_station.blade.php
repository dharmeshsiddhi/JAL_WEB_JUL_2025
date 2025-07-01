@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('POLICE_STATION_PAGE_SELECT_PS') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="asideSection col12">
                    <h3 class="sectionHead" data-aos="fade-left">{{ __('POLICE_STATION_PAGE_PS') }}</h3>
                    <div class="rightNavDropdown" data-aos="fade-left">
                        <select class="home-ds-select col6" id="policeStationBox1">
                            <option value="" title="{{ __('POLICE_STATION_PAGE_SELECT_PS') }}">{{ __('POLICE_STATION_PAGE_SELECT_PS') }}</option>
                                @if(count($stationList))
                                    @foreach($stationList as $detail)
                                        <option value="{{ $detail->MPS_ID }}" @if($id== $detail->MPS_ID) selected @endif>  
                                        
                                        @if(Lang::locale() == 'mr') {{ $detail->MPS_Name_MR }} @else {{ $detail->MPS_Name }} @endif
                                        
                                        </option>
                                    @endforeach
                                @endif
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </section>
    @if(count($stationDetail))
        @foreach($stationDetail as $detail)
            <section class="section-notifications">
                <div class="section__title">
                    <h2 class="section__titletext" style="color: rgb(10, 36, 99);">@if(Lang::locale() == 'mr') {{ $detail->MPS_Name_MR }} पोलीस ठाणे @else {{ $detail->MPS_Name }} POLICE STATION @endif </h2>
                    <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-6 mb-5">
                                <div class="police-stations__image-container">
                                    <img src="https://panel.jalgaonpolice.gov.in/{{ $detail->MPS_Station_Photo }}" alt="Police Station" class="police-stations__image" onerror="this.onerror=null;this.src='/images/station.jpg';">
                                    <!-- <img src="{{ asset('images/station.jpg') }}" alt="Police Station" class="police-stations__image"> -->
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="police-stations__image-container">
                                    <!--<iframe width="100%" height="100%" frameborder="0" aria-hidden="false" tabindex="0" title="Police Station" src="{{ $detail->MPS_Station_Location }}"></iframe> -->
                                     <img src="https://jalgaonpolice.gov.in/Police Station Map/{{ $detail->PS_map }}" alt="Police Station" class="police-stations__image" onerror="this.onerror=null;this.src='/images/station.jpg';">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5 police-stations">
                                <div class="card">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="https://panel.jalgaonpolice.gov.in/{{ $detail->MPS_Incharge_Photo }}" class="card-img" alt="Police Station Incharge" onerror="this.onerror=null;this.src='/images/cap.jpg';">
                                            <!-- <img src="{{ asset('images/cap.jpg') }}" class="card-img" alt="Police Station Incharge"> -->
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h3 class="card-title font-weight-bold text-uppercase">  
                                                
                                                @if(Lang::locale() == 'mr') {{ $detail->MPS_Incharge_Name_Mr }} @else {{ $detail->MPS_Incharge_Name }}   @endif
                                                  </h3>
                                                <hr>
                                                <p class="card-text">
                                                @if(Lang::locale() == 'mr') {{ $detail->MPS_Incharge_Post_Mr }} @else {{ $detail->MPS_Incharge_Post }}   @endif
                                                </p>
                                                <p class="card-text"><a target="_blank" rel="noopener noreferrer" href="tel:@if($detail->MPS_Incharge_Mobile != '') {{ $detail->MPS_Incharge_Mobile }} @endif" class="card-link"><i class="fa fa-mobile mr-2"></i><span>@if($detail->MPS_Incharge_Mobile != '') {{ $detail->MPS_Incharge_Mobile }} @endif</span></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5 police-stations">
                                <div class="card">
                                    <div class="row no-gutters">
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <h3 class="card-title font-weight-bold">@if(Lang::locale() == 'mr') पोलीस स्टेशनची माहिती @else Police Station Details @endif    </h3>
                                                <hr>
                                                <p class="card-text"><a target="_blank" rel="noopener noreferrer" href="tel:@if($detail->MPS_Phone != '') {{ $detail->MPS_Phone }} @endif" class="card-link"><i class="fa fa-phone mr-2"></i><span>@if($detail->MPS_Phone != '') {{ $detail->MPS_Phone }} @endif</span></a></p>
                                                <p class="card-text"><a target="_blank" rel="noopener noreferrer" href="mailto:@if($detail->MPS_Email != '') {{ $detail->MPS_Email }} @endif" class="card-link"><i class="fa fa-envelope mr-2"></i><span>@if($detail->MPS_Email != '') {{ $detail->MPS_Email }} @endif</span></a></p>
                                                <p class="card-text"><i class="fa fa-map-marker mr-2"></i><span>{{ $detail->MPS_Address }}</span></p>
                                                <p class="card-text"><i class="fa fa-building mr-2"></i><span> 
                                                
                                                @if(Lang::locale() == 'mr') {{ $detail->MPS_Division_Mr }} @else {{ $detail->MPS_Division }} (Division)  @endif
                                                                       </span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        

                        <div class="row" >
                            <div class="col-md-12 mb-5 police-stations" >
                            <h3 class="card-title font-weight-bold text-uppercase"> 
                            @if(Lang::locale() == 'mr') {{ $detail->MPS_Name_MR }} पोलीस ठाणे  गूगल मॅप वर : @else {{ $detail->MPS_Name }} Police Station On Google Map : @endif
                            
                              </h3><hr>
                                <div class="class="police-stations__image-container" >

<iframe width="100%" height="100%" frameborder="0" aria-hidden="false" tabindex="0" title="Police Station" src="{{ $detail->MPS_Station_Location }}"></iframe>
                       </div></div></div>         
                    </div>
                </div>
            </section>
        @endforeach
    @endif
@endsection
