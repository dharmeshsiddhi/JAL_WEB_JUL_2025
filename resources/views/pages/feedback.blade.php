@extends("layout.app") 
@section('inlineStyle')
<style>
    .shadow-custom {
        box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
    }
    .border-slate-300 {
        --tw-border-opacity: 1;
        border-color: rgb(203 213 225 / var(--tw-border-opacity, 1));
    }
    .border {
        border-width: 1px;
    }
    .rounded-md {
        border-radius: .375rem;
    }
    .p-5 {
        padding: 1.25rem;
    }
    .my-10 {
        margin-bottom: 2.5rem;
    }
</style>
@endsection
@section("page")


    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('FEEDBACK_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form id="feedbackForm">
                    <div class="aboutDesc row">
                        <div class="col-md-12">
                            <div class="p-5 my-10 mx-auto shadow-custom rounded-md border border-slate-300">
                                <h4 class="mb-2 text-xl text-slate-700 font-semibold">{{ __('FEEDBACK_PAGE_NOTICE_HEADER') }}</h4>
                                <p class="text-slate-700 text-justify">{{ __('FEEDBACK_PAGE_NOTICE_TEXT') }}</p>
                            </div>
                        </div>
                        <div class="col-md-12" id="errorMsgDiv1"></div>
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
                                <input type="text" class="form-control" placeholder="{{ __('REGISTER_COMPLAINT_PAGE_TOWN_PLACE_LABEL') }}" id="form_town" name="form_town" tabindex="1" onkeypress="return handle1(event, 'form_cleanliness_id');" style="display:none">
                                <input type="text" class="form-control" placeholder="{{ __('REGISTER_COMPLAINT_PAGE_TOWN_PLACE_LABEL') }}" id="form_town1" name="form_town1" tabindex="1" onkeypress="return handle1(event, 'form_cleanliness_id');">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-20">
                                <label for="form_cleanliness_id"><b>{{ __('FEEDBACK_PAGE_CLEANLINESS_LABEL') }}:</b></label>
                                <select class="form-control" id="form_cleanliness_id" name="form_cleanliness_id" tabindex="1" onkeypress="return handle1(event, 'form_facilities_id');">
                                    <option value="" title="{{ __('FEEDBACK_PAGE_SELECT_FEEDBACK_TYPE') }}">{{ __('FEEDBACK_PAGE_SELECT_FEEDBACK_TYPE') }}</option>
                                    @if(count($natureList))
                                        @foreach($natureList as $tyDetail)
                                            <option value="{{ $tyDetail->MFBT_ID }}"> {{ $tyDetail->MFBT_Name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-20">
                                <label for="form_facilities_id"><b>{{ __('FEEDBACK_PAGE_FACILITIES_LABEL') }}:</b></label>
                                <select class="form-control" id="form_facilities_id" name="form_facilities_id" tabindex="1" onkeypress="return handle1(event, 'form_treatment_id');">
                                    <option value="" title="{{ __('FEEDBACK_PAGE_SELECT_FEEDBACK_TYPE') }}">{{ __('FEEDBACK_PAGE_SELECT_FEEDBACK_TYPE') }}</option>
                                    @if(count($natureList))
                                        @foreach($natureList as $tyDetail)
                                            <option value="{{ $tyDetail->MFBT_ID }}"> {{ $tyDetail->MFBT_Name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-20">
                                <label for="form_treatment_id"><b>{{ __('FEEDBACK_PAGE_TREATMENT_LABEL') }}:</b></label>
                                <select class="form-control" id="form_treatment_id" name="form_treatment_id" tabindex="1" onkeypress="return handle1(event, 'form_resolved_id');">
                                    <option value="" title="{{ __('FEEDBACK_PAGE_SELECT_FEEDBACK_TYPE') }}">{{ __('FEEDBACK_PAGE_SELECT_FEEDBACK_TYPE') }}</option>
                                    @if(count($natureList))
                                        @foreach($natureList as $tyDetail)
                                            <option value="{{ $tyDetail->MFBT_ID }}"> {{ $tyDetail->MFBT_Name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-20">
                                <label for="form_resolved_id"><b>{{ __('FEEDBACK_PAGE_RESOLVED_LABEL') }}:</b></label>
                                <select class="form-control" id="form_resolved_id" name="form_resolved_id" tabindex="1" onkeypress="return handle1(event, 'form_brief');">
                                    <option value="" title="{{ __('FEEDBACK_PAGE_SELECT_FEEDBACK_TYPE') }}">{{ __('FEEDBACK_PAGE_SELECT_FEEDBACK_TYPE') }}</option>
                                    @if(count($natureList))
                                        @foreach($natureList as $tyDetail)
                                            <option value="{{ $tyDetail->MFBT_ID }}"> {{ $tyDetail->MFBT_Name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="display:none">
                            <div class="form-group mt-20">
                                <label for="form_nature"><b>{{ __('REGISTER_COMPLAINT_PAGE_NATURE_LABEL') }}:</b></label>
                                <input type="text" class="form-control" placeholder="{{ __('REGISTER_COMPLAINT_PAGE_NATURE_SELECT') }}" id="form_nature" name="form_nature" tabindex="1" onkeypress="return handle1(event, 'form_brief');" style="display:none">
                                <input type="text" class="form-control" placeholder="{{ __('REGISTER_COMPLAINT_PAGE_NATURE_SELECT') }}" id="form_nature1" name="form_nature1" tabindex="1" onkeypress="return handle1(event, 'form_brief1');">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-20">
                                <label for="form_brief"><b>{{ __('FEEDBACK_PAGE_BRIEF_LABEL') }}:</b></label>
                                <textarea rows="3" class="form-control" placeholder="{{ __('FEEDBACK_PAGE_BRIEF_PLACE_LABEL') }}" id="form_brief" name="form_brief" tabindex="1" onkeypress="return handle1(event, 'submitBtnId1');" style="display:none"></textarea>
                                <textarea rows="3" class="form-control" placeholder="{{ __('FEEDBACK_PAGE_BRIEF_PLACE_LABEL') }}" id="form_brief1" name="form_brief1" tabindex="1" onkeypress="return handle1(event, 'submitBtnId1');"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-20">
                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                <div class="g-recaptcha" id="feedback-recaptcha" data-sitekey="6LezT-IqAAAAAGfuXwF0OELGW0Vqmy-p77AxSgqI"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-20">
                                <input type="submit" class="btn btn-primary btn-lg btn-block p-10 font-20 mt-20" tabindex="1" id="submitBtnId1" value="{{ __('FEEDBACK_PAGE_SUBMIT_BUTTON') }}"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection