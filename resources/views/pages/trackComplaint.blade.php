@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")


    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('TRACK_COMPLAINT_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form id="trackForm">
                    <div id="errorMsgDiv1"></div>
                    <div class="aboutDesc row">
                        <div class="col-md-12">
                            <div class="form-group mt-20">
                                <label for="form_track_id"><b>{{ __('TRACK_COMPLAINT_PAGE_TRACK_ID_LABEL') }}:</b></label>
                                <input type="tel" class="form-control" placeholder="{{ __('TRACK_COMPLAINT_PAGE_TRACK_ID_PLACE_LABEL') }}" id="form_track_id" name="form_track_id" tabindex="1" onkeypress="return onlyNumber(event, 'submitBtnId1');">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-20">
                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                <div class="g-recaptcha" id="feedback-recaptcha" data-sitekey="6LezT-IqAAAAAGfuXwF0OELGW0Vqmy-p77AxSgqI"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-20 text-center">
                                <input type="submit" class="btn btn-primary btn-lg btn-block p-10 font-20" tabindex="1" id="submitBtnId1" value="{{ __('TRACK_COMPLAINT_PAGE_SUBMIT_BUTTON') }}"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-20 text-center">
                                <a href="/register-complaint" class="btn btn-danger btn-lg btn-block p-10 font-20" tabindex="1" id="submitBtnId2">{{ __('HOME_PAGE_REGISTER_BUTTON') }}</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="aboutDesc row">
                    <div class="col-md-12" id="ajaxResponseDiv" style="overflow-x:auto;"></div>
                </div>
            </div>
        </div>
    </section>
@endsection