@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('FAQ_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-12">
                <div class="aboutDesc">
                    <div class="asideSection col12 pageContent">
                        <div class="aboutDesc">
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('FAQ_PAGE_ACCORD_1_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_1_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_1_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_2_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_2_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_3_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_3_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_4_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <div class="space-y-2">
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_4_SUB_LINE_1') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_4_SUB_LINE_2') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_4_SUB_LINE_3') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_4_SUB_LINE_4') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_4_SUB_LINE_5') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_4_SUB_LINE_6') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_4_SUB_LINE_7') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_4_SUB_LINE_8') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_4_SUB_LINE_9') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_4_SUB_LINE_10') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_5_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_5_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_6_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_6_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_7_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_7_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_8_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <div class="space-y-2">
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_8_SUB_LINE_1') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_8_SUB_LINE_2') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_8_SUB_LINE_3') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_8_SUB_LINE_4') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_9_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <div class="space-y-2">
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_9_SUB_LINE_1') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_9_SUB_LINE_2') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_9_SUB_LINE_3') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_9_SUB_LINE_4') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_10_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_10_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_11_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <div class="space-y-2">
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_11_SUB_LINE_1') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_11_SUB_LINE_2') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_11_SUB_LINE_3') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_11_SUB_LINE_4') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_11_SUB_LINE_5') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_11_SUB_LINE_6') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_12_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <div class="space-y-2">
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_12_SUB_LINE_1') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_12_SUB_LINE_2') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_12_SUB_LINE_3') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_12_SUB_LINE_4') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_12_SUB_LINE_5') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_13_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <div class="space-y-2">
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_13_SUB_LINE_1') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_13_SUB_LINE_2') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_13_SUB_LINE_3') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_13_SUB_LINE_4') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_13_SUB_LINE_5') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_14_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <div class="space-y-2">
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_14_SUB_LINE_1') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_14_SUB_LINE_2') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_14_SUB_LINE_3') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_14_SUB_LINE_4') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_14_SUB_LINE_5') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_15_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <div class="space-y-2">
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_15_SUB_LINE_1') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_15_SUB_LINE_2') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_15_SUB_LINE_3') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_15_SUB_LINE_4') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_1_POINT_16_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <div class="space-y-2">
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_16_SUB_LINE_1') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_16_SUB_LINE_2') }}</p>
                                                        <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_1_POINT_16_SUB_LINE_3') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('FAQ_PAGE_ACCORD_2_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_1') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_2') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_3') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_4') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_5') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_6') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_7') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_8') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_9') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_10') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_11') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_12') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_13') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_14') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_15') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_16') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_17') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_18') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_19') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_20') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_1_SUB_LINE_21') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_2_POINT_2_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_2_SUB_LINE_1') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_2_SUB_LINE_2') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_2_SUB_LINE_3') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_2_POINT_2_SUB_LINE_4') }}</p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('FAQ_PAGE_ACCORD_3_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_3_POINT_1_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_3_POINT_1_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_3_POINT_2_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_3_POINT_2_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_3_POINT_3_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_3_POINT_3_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('FAQ_PAGE_ACCORD_4_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_4_POINT_1_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_4_POINT_1_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_4_POINT_2_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_4_POINT_2_SUB_LINE_1') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_4_POINT_2_SUB_LINE_2') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_4_POINT_2_SUB_LINE_3') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_4_POINT_2_SUB_LINE_4') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_4_POINT_2_SUB_LINE_5') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_4_POINT_2_SUB_LINE_6') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_4_POINT_2_SUB_LINE_7') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_4_POINT_2_SUB_LINE_8') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_3_POINT_3_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">
                                                        <table>
                                                            <tr>
                                                                <th rowspan="2">{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_1') }}</th>
                                                                <th rowspan="2">{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_2') }}</th>
                                                                <th colspan="2">{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_3') }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_4') }}</th>
                                                                <th>{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_5') }}</th>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_6') }}</td>
                                                                <td>{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_7') }}</td>
                                                                <td>75</td>
                                                                <td>70</td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_8') }}</td>
                                                                <td>{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_9') }}</td>
                                                                <td>65</td>
                                                                <td>55</td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_10') }}</td>
                                                                <td>{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_11') }}</td>
                                                                <td>55</td>
                                                                <td>45</td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_12') }}</td>
                                                                <td>{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_13') }}</td>
                                                                <td>50</td>
                                                                <td>40</td>
                                                            </tr>
                                                        </table>
                                                    </p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_14') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_15') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_16') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_17') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_4_POINT_3_SUB_LINE_18') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('FAQ_PAGE_ACCORD_5_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_5_POINT_1_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_5_POINT_1_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_5_POINT_2_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_5_POINT_2_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_5_POINT_3_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_5_POINT_3_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_5_POINT_4_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_5_POINT_4_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_5_POINT_5_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_5_POINT_5_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('FAQ_PAGE_ACCORD_6_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_6_POINT_1_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_6_POINT_1_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_6_POINT_2_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_6_POINT_2_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_6_POINT_3_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_6_POINT_3_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_6_POINT_4_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_6_POINT_4_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_6_POINT_5_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_6_POINT_5_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_6_POINT_6_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_6_POINT_6_SUB_LINE_1') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_6_POINT_6_SUB_LINE_2') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_6_POINT_7_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_6_POINT_7_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_6_POINT_8_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_6_POINT_8_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_6_POINT_9_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_6_POINT_9_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('FAQ_PAGE_ACCORD_7_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_7_POINT_1_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_7_POINT_1_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_7_POINT_2_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_7_POINT_2_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_7_POINT_3_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_7_POINT_3_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_7_POINT_4_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_7_POINT_4_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_7_POINT_5_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_7_POINT_5_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_7_POINT_6_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_7_POINT_6_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_7_POINT_7_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_7_POINT_7_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_7_POINT_8_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_7_POINT_8_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('FAQ_PAGE_ACCORD_8_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_SUB_LINE_1') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_SUB_LINE_2') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_SUB_LINE_3') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_SUB_LINE_4') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_SUB_LINE_5') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_SUB_LINE_6') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_SUB_LINE_7') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_SUB_LINE_8') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_SUB_LINE_9') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_SUB_LINE_10') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_SUB_LINE_11') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_SUB_LINE_12') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_SUB_LINE_13') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_SUB_LINE_14') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_1_SUB_LINE_15') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_8_POINT_2_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_2_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_8_POINT_3_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_3_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_8_POINT_4_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_4_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_8_POINT_5_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_5_SUB_LINE_1') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_5_SUB_LINE_2') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_5_SUB_LINE_3') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_5_SUB_LINE_4') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_5_SUB_LINE_5') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_5_SUB_LINE_6') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_5_SUB_LINE_7') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_5_SUB_LINE_8') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_5_SUB_LINE_9') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_5_SUB_LINE_10') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_5_SUB_LINE_11') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_5_SUB_LINE_12') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_8_POINT_6_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_6_SUB_LINE_1') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_6_SUB_LINE_2') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_6_SUB_LINE_3') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_8_POINT_7_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_7_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_8_POINT_8_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_8_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_8_POINT_9_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_9_SUB_LINE_1') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_9_SUB_LINE_2') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_9_SUB_LINE_3') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_9_SUB_LINE_4') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_9_SUB_LINE_5') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_9_SUB_LINE_6') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_9_SUB_LINE_7') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_9_SUB_LINE_8') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_8_POINT_10_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_10_SUB_LINE_1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8 pb-4 border-b border-gray-200 last:border-0">
                                            <h3 class="font-semibold text-lg text-blue-800 mb-2">{{ __('FAQ_PAGE_ACCORD_8_POINT_11_MAIN') }}</h3>
                                            <div class="pl-2 text-gray-700">
                                                <strong class="text-gray-900">{{ __('FAQ_PAGE_ANSWER') }} </strong>
                                                <div class="mt-1">
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_11_SUB_LINE_1') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_11_SUB_LINE_2') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_11_SUB_LINE_3') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_11_SUB_LINE_4') }}</p>
                                                    <p class="text-gray-700">{{ __('FAQ_PAGE_ACCORD_8_POINT_11_SUB_LINE_5') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
