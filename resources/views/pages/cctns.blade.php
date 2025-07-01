@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('CCTNS_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <div class="aboutDesc">
                <p class="line-height-2em text-justify">{{ __('CCTNS_PAGE_PARA') }}</p>

                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('CCTNS_PAGE_LIST_1_TITLE') }}</h3>
                <p class="line-height-2em text-justify" style="font-weight: 400;">{{ __('CCTNS_PAGE_LIST_1_1') }}</p>
                <p class="line-height-2em text-justify" style="font-weight: 400;">{{ __('CCTNS_PAGE_LIST_1_2') }}</p>
                <p class="line-height-2em text-justify" style="font-weight: 400;">{{ __('CCTNS_PAGE_LIST_1_3') }}</p>
                <p class="line-height-2em text-justify" style="font-weight: 400;">{{ __('CCTNS_PAGE_LIST_1_4') }}</p>
                <p class="line-height-2em text-justify" style="font-weight: 400;">{{ __('CCTNS_PAGE_LIST_1_5') }}</p>
                <p class="line-height-2em text-justify" style="font-weight: 400;">{{ __('CCTNS_PAGE_LIST_1_6') }}</p>
                <p class="line-height-2em text-justify" style="font-weight: 400;">{{ __('CCTNS_PAGE_LIST_1_7') }}</p>
                <p class="line-height-2em text-justify" style="font-weight: 400;">{{ __('CCTNS_PAGE_LIST_1_8') }}</p>

                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('CCTNS_PAGE_LIST_2_TITLE') }}</h3>
                <p class="line-height-2em text-justify" style="font-weight: 400;">{{ __('CCTNS_PAGE_LIST_2_1') }}</p>
                <p class="line-height-2em text-justify" style="font-weight: 400;">{{ __('CCTNS_PAGE_LIST_2_2') }}</p>
                <p class="line-height-2em text-justify" style="font-weight: 400;">{{ __('CCTNS_PAGE_LIST_2_3') }}</p>
                <p class="line-height-2em text-justify" style="font-weight: 400;">{{ __('CCTNS_PAGE_LIST_2_4') }}</p>
                <p class="line-height-2em text-justify" style="font-weight: 400;">{{ __('CCTNS_PAGE_LIST_2_5') }}</p>
                <p class="line-height-2em text-justify" style="font-weight: 400;">{{ __('CCTNS_PAGE_LIST_2_6') }}</p>
                <p class="line-height-2em text-justify" style="font-weight: 400;">{{ __('CCTNS_PAGE_LIST_2_7') }}</p>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
@endsection