@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('DISCLAIMER_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <div class="aboutDesc">
                <div class="sel_first inner_cont text-justify row disclaimer">
                    <div class="col-md-12">
                        <div class="info-box">
                            <h3>{{ __('DISCLAIMER_PAGE_DIV_1_TITLE') }}</h3>
                            <p>{{ __('DISCLAIMER_PAGE_DIV_1_LINE_1') }}</p>
                            <p>{{ __('DISCLAIMER_PAGE_DIV_1_LINE_2') }}</p>
                            <p>{{ __('DISCLAIMER_PAGE_DIV_1_LINE_3') }}</p>
                            <p>{{ __('DISCLAIMER_PAGE_DIV_1_LINE_4') }}</p>
                            <p>{{ __('DISCLAIMER_PAGE_DIV_1_LINE_5') }}</p>
                            <p>{{ __('DISCLAIMER_PAGE_DIV_1_LINE_6') }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="info-box">
                            <h3>{{ __('DISCLAIMER_PAGE_DIV_2_TITLE') }}</h3>
                            <h4>{{ __('DISCLAIMER_PAGE_DIV_2_SUBTITLE') }}</h4>
                            <p>{{ __('DISCLAIMER_PAGE_DIV_2_LINE_1') }}</p>
                        </div>
                    </div>
                    <!-- <div class="col-md-12 mt-4">
                        <div class="info-box">
                            <h3>{{ __('DISCLAIMER_PAGE_DIV_3_TITLE') }}</h3>
                            <p>{{ __('DISCLAIMER_PAGE_DIV_3_LINE_1') }}</p>
                        </div>
                    </div> -->
                    <div class="col-md-12 mt-4">
                        <div class="info-box">
                            <h3>{{ __('DISCLAIMER_PAGE_DIV_4_TITLE') }}</h3>
                            <p>{{ __('DISCLAIMER_PAGE_DIV_4_LINE_1') }}</p>
                            <p>{{ __('DISCLAIMER_PAGE_DIV_4_LINE_2') }}</p>
                            <p>{{ __('DISCLAIMER_PAGE_DIV_4_LINE_3') }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="info-box">
                            <h3>{{ __('DISCLAIMER_PAGE_DIV_5_TITLE') }}</h3>
                            <p>{{ __('DISCLAIMER_PAGE_DIV_5_LINE_1') }}</p>
                            <p>{{ __('DISCLAIMER_PAGE_DIV_5_LINE_2') }}</p>
                            <p>{{ __('DISCLAIMER_PAGE_DIV_5_LINE_3') }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="info-box">
                            <h3>{{ __('DISCLAIMER_PAGE_DIV_6_TITLE') }}</h3>
                            <p>{{ __('DISCLAIMER_PAGE_DIV_6_LINE_1') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
@endsection