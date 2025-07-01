@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('ANTI_NARCO_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-12">
                <div class="aboutDesc">
                    <div class="asideSection col12 pageContent">
                        <div class="aboutDesc">
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('ANTI_NARCO_PAGE_TIPS_1_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <p align="justify" style="padding-bottom:0px;">{{ __('ANTI_NARCO_PAGE_TIPS_1_LINE') }}</p>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('ANTI_NARCO_PAGE_TIPS_2_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <p align="justify" style="padding-bottom:0px;">{{ __('ANTI_NARCO_PAGE_TIPS_2_LINE') }}</p>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('ANTI_NARCO_PAGE_TIPS_3_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <p align="justify" style="padding-bottom:0px;">{{ __('ANTI_NARCO_PAGE_TIPS_3_LINE') }}</p>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('ANTI_NARCO_PAGE_TIPS_4_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <p align="justify" style="padding-bottom:0px;">{{ __('ANTI_NARCO_PAGE_TIPS_4_LINE') }}</p>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('ANTI_NARCO_PAGE_TIPS_5_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <p align="justify" style="padding-bottom:0px;">{{ __('ANTI_NARCO_PAGE_TIPS_5_LINE') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
