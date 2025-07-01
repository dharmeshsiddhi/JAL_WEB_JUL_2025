@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('DSB_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <div class="aboutDesc">
                <div class="row">
                    <div class="col-md-6 mb-5 police-stations">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ asset('hyd/dsb_pi.jpg') }}" class="card-img" alt="Police Station Incharge" onerror="this.onerror=null;this.src='/images/cap.jpg';">
                                    <!-- <img src="{{ asset('images/cap.jpg') }}" class="card-img" alt="Police Station Incharge"> -->
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title font-weight-bold text-uppercase">  
                                        {{ __('SPECIAL_BRANCH_PAGE_DSB_INCHARGE_NAME') }}
                                        </h3>
                                        <hr>
                                        <p class="card-text">
                                        {{ __('SPECIAL_BRANCH_PAGE_DSB_INCHARGE_DESIGNATION') }}
                                        </p>
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
                                        <h3 class="card-title font-weight-bold">Police Station Details</h3>
                                        <hr>
                                        <p class="card-text"><a target="_blank" rel="noopener noreferrer" href="tel:{{ __('SPECIAL_BRANCH_PAGE_DSB_INCHARGE_PHONE') }}" class="card-link"><i class="fa fa-phone mr-2"></i><span>{{ __('SPECIAL_BRANCH_PAGE_DSB_INCHARGE_PHONE') }}</span></a></p>
                                        <p class="card-text"><a target="_blank" rel="noopener noreferrer" href="mailto:{{ __('SPECIAL_BRANCH_PAGE_DSB_INCHARGE_EMAIL') }}" class="card-link"><i class="fa fa-envelope mr-2"></i><span>{{ __('SPECIAL_BRANCH_PAGE_DSB_INCHARGE_EMAIL') }}</span></a></p>
                                        <p class="card-text"><i class="fa fa-map-marker mr-2"></i><span>{{ __('SPECIAL_BRANCH_PAGE_DSB_INCHARGE_ADDRESS') }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('DSB_PAGE_PARA_TITLE') }}</h3>
                <p class="line-height-2em text-justify"> {{ __('DSB_PAGE_PARA_DESC') }}</p>
                <ul>
                    <li class="text-justify" style="padding-bottom: 24px;">{{ __('DSB_PAGE_LIST_1') }}</li>
                    <li class="text-justify" style="padding-bottom: 24px;">{{ __('DSB_PAGE_LIST_2') }}</li>
                    <li class="text-justify" style="padding-bottom: 24px;">{{ __('DSB_PAGE_LIST_3') }}</li>
                    <li class="text-justify" style="padding-bottom: 24px;">{{ __('DSB_PAGE_LIST_4') }}</li>
                    <li class="text-justify" style="padding-bottom: 24px;">{{ __('DSB_PAGE_LIST_5') }}</li>
                    <li class="text-justify" style="padding-bottom: 24px;">{{ __('DSB_PAGE_LIST_6') }}</li>
                    <li class="text-justify" style="padding-bottom: 24px;">{{ __('DSB_PAGE_LIST_7') }}</li>
                    <li class="text-justify" style="padding-bottom: 24px;">{{ __('DSB_PAGE_LIST_8') }}</li>
                    <li class="text-justify" style="padding-bottom: 24px;">{{ __('DSB_PAGE_LIST_9') }}</li>
                    <li class="text-justify" style="padding-bottom: 24px;">{{ __('DSB_PAGE_LIST_10') }}</li>
                    <li class="text-justify" style="padding-bottom: 24px;">{{ __('DSB_PAGE_LIST_11') }}</li>
                    <li class="text-justify" style="padding-bottom: 24px;">{{ __('DSB_PAGE_LIST_12') }}</li>
                    <li class="text-justify" style="padding-bottom: 24px;">{{ __('DSB_PAGE_LIST_13') }}</li>
                    <li class="text-justify" style="padding-bottom: 24px;">{{ __('DSB_PAGE_LIST_14') }}</li>
                </ul>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
@endsection