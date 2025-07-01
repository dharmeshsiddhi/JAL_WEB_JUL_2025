@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">Police Patil Details</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <form id="form1">
            <div class="row mb-4">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <div class="asideSection col12">
                        <h3 class="sectionHead" data-aos="fade-left">Police Station</h3>
                        <div class="rightNavDropdown" data-aos="fade-left">
                            <select class="home-ds-select col6" id="ppStationId" name="ppStationId">
                                <option value="" title="Select Police Station">Select Police Station</option>
                                    @if(count($stationList))
                                        @foreach($stationList as $detail)
                                            <option value="{{ $detail->MPS_ID }}">{{ $detail->MPS_Name_MR }}</option>
                                        @endforeach
                                    @endif
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" id="bitDiv" style="display: none;">
                    <div class="asideSection col12">
                        <h3 class="sectionHead" data-aos="fade-left">Police Bit</h3>
                        <div class="rightNavDropdown" data-aos="fade-left">
                            <select class="home-ds-select col6" id="ppBitId" name="ppBitId">
                                <option value="" title="Select Bit">Select Bit</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="asideSection col12">
                        <div class="rightNavDropdown" data-aos="fade-left">
                            <button type="button" class="btn btn-primary btn-lg btn-block mt-22" onclick="searchListOnButtonClick()"><i class="fa fa-search mr-2"></i>Search</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </form>
        <div class="row mx-0">
            <div class="col-md-1"></div>
            <div class="col-md-10" id="ajaxResponseData" style="overflow-x:auto;"></div>
        </div>
    </section>
@endsection
