@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('ABOUT_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <img src="{{ asset('hyd/Jalgaon_district.jpg') }}" class="w-full object-cover h-[30vh] rounded-lg md:h-[62vh]" alt="">
                    </div>
                </div>
                <p class="aboutDesc line-height-2em text-justify">{{ __('ABOUT_PAGE_PARA') }}</p>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
@endsection
