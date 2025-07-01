@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")


    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('REGISTER_COMPLAINT_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form id="complaintForm">
                    <div id="errorMsgDiv1"></div>
                    <div class="aboutDesc row">
                        <div class="col-md-12">
                            <div class="form-group mt-20 text-center">
                                <a href="/track-complaint" class="btn btn-primary btn-lg btn-block p-10 font-20" tabindex="1" id="submitBtnId2">{{ __('HOME_PAGE_TRACK_BUTTON') }} &nbsp; <i class="fa fa-hand-o-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-12 mt-20">
                            <div class="form-group">
                                <label for="form_name"><b>{{ __('REGISTER_COMPLAINT_PAGE_TYPE_LANG_MSG') }}:</b></label>
                                <select id="ddlSource" style="display:none">
                                    <option value="EN" selected = "selected">English</option>
                                </select>
                                <select id="ddlTarget" name="ddlTarget">
                                    <option value="MR" selected = "selected">मराठी</option>
                                    <option value="EN">English</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-20">
                                <label for="form_name"><b>{{ __('REGISTER_COMPLAINT_PAGE_NAME_LABEL') }}:</b></label>
                                <input type="text" class="form-control" placeholder="{{ __('REGISTER_COMPLAINT_PAGE_NAME_PLACE_LABEL') }}" id="form_name" name="form_name" tabindex="1" onkeypress="return handle1(event, 'form_mobile');" style="display:none">
                                <input type="text" class="form-control" placeholder="{{ __('REGISTER_COMPLAINT_PAGE_NAME_PLACE_LABEL') }}" id="form_name1" name="form_name1" tabindex="1" onkeypress="return handle1(event, 'form_mobile');">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-20">
                                <label for="form_mobile"><b>{{ __('REGISTER_COMPLAINT_PAGE_MOBILE_LABEL') }}:</b></label>
                                <input type="tel" class="form-control" placeholder="{{ __('REGISTER_COMPLAINT_PAGE_MOBILE_PLACE_LABEL') }}" id="form_mobile" name="form_mobile" maxlength="10" tabindex="1" onkeypress="return onlyNumber(event, 'form_area');">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-20"> 
                                <label for="form_area"><b>{{ __('REGISTER_COMPLAINT_PAGE_AREA_LABEL') }}:</b></label>
                                <input type="text" class="form-control" placeholder="{{ __('REGISTER_COMPLAINT_PAGE_AREA_PLACE_LABEL') }}" id="form_area" name="form_area" tabindex="1" onkeypress="return handle1(event, 'form_town');" style="display:none">
                                <input type="text" class="form-control" placeholder="{{ __('REGISTER_COMPLAINT_PAGE_AREA_PLACE_LABEL') }}" id="form_area1" name="form_area1" tabindex="1" onkeypress="return handle1(event, 'form_town1');">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-20">
                                <label for="form_town"><b>{{ __('REGISTER_COMPLAINT_PAGE_TOWN_LABEL') }}:</b></label>
                                <input type="text" class="form-control" placeholder="{{ __('REGISTER_COMPLAINT_PAGE_TOWN_PLACE_LABEL') }}" id="form_town" name="form_town" tabindex="1" onkeypress="return handle1(event, 'form_station_id');" style="display:none">
                                <input type="text" class="form-control" placeholder="{{ __('REGISTER_COMPLAINT_PAGE_TOWN_PLACE_LABEL') }}" id="form_town1" name="form_town1" tabindex="1" onkeypress="return handle1(event, 'form_station_id');">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-20">
                                <label for="form_station_id"><b>{{ __('REGISTER_COMPLAINT_PAGE_POLICE_STATION_LABEL') }}:</b></label>
                                <select class="form-control" id="form_station_id" name="form_station_id" tabindex="1" onkeypress="return handle1(event, 'form_nature');">
                                    <option value="" title="{{ __('POLICE_STATION_PAGE_SELECT_PS') }}">{{ __('POLICE_STATION_PAGE_SELECT_PS') }}</option>
                                    @if(count($data['stationList']))
                                        @foreach($data['stationList'] as $psDetail)
                                            <option value="{{ $psDetail->MPS_ID }}">  
                                            @if(Lang::locale() == 'mr') {{ $psDetail->MPS_Name_MR }} @else {{ $psDetail->MPS_Name }} @endif
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-20">
                                <label for="form_nature"><b>{{ __('REGISTER_COMPLAINT_PAGE_NATURE_LABEL') }}:</b></label>
                                <input type="text" class="form-control" placeholder="{{ __('REGISTER_COMPLAINT_PAGE_NATURE_SELECT') }}" id="form_nature" name="form_nature" tabindex="1" onkeypress="return handle1(event, 'form_brief');" style="display:none">
                                <input type="text" class="form-control" placeholder="{{ __('REGISTER_COMPLAINT_PAGE_NATURE_SELECT') }}" id="form_nature1" name="form_nature1" tabindex="1" onkeypress="return handle1(event, 'form_brief1');">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-20">
                                <label for="form_brief"><b>{{ __('REGISTER_COMPLAINT_PAGE_BRIEF_LABEL') }}:</b></label>
                                <textarea rows="3" class="form-control" placeholder="{{ __('REGISTER_COMPLAINT_PAGE_BRIEF_PLACE_LABEL') }}" id="form_brief" name="form_brief" tabindex="1" onkeypress="return handle1(event, 'submitBtnId1');" style="display:none"></textarea>
                                <textarea rows="3" class="form-control" placeholder="{{ __('REGISTER_COMPLAINT_PAGE_BRIEF_PLACE_LABEL') }}" id="form_brief1" name="form_brief1" tabindex="1" onkeypress="return handle1(event, 'submitBtnId1');"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-20">
                                <label for="form_file"><b>{{ __('REGISTER_COMPLAINT_PAGE_ATTACH_LABEL') }}:</b></label>
                                <input type="file" class="form-control" placeholder="Select file to upload" id="form_file" name="form_file" tabindex="1" onkeypress="return handle1(event, 'submitBtnId1');" accept="image/jpeg,application/pdf">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-20">
                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                <div class="g-recaptcha" id="feedback-recaptcha" data-sitekey="6LezT-IqAAAAAGfuXwF0OELGW0Vqmy-p77AxSgqI"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-20">
                                <input type="submit" class="btn btn-primary btn-lg btn-block p-10 font-20" tabindex="1" id="submitBtnId1" value="{{ __('REGISTER_COMPLAINT_PAGE_SUBMIT_BUTTON') }}"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection