@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('CYBER_SAFETY_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-12">
                <div class="aboutDesc">
                    <div class="asideSection col12 pageContent">
                        <div class="aboutDesc">
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('CYBER_SAFETY_PAGE_TIPS_1_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <p>
                                        {{ __('CYBER_SAFETY_PAGE_TIPS_1_LINE_1') }}
                                    </p>
                                    <ol>
                                        <li align="justify"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_1_OPTION_1') }}</p></li>
                                        <li align="justify"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_1_OPTION_2') }}</p></li>
                                        <li align="justify"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_1_OPTION_3') }}</p></li>
                                        <li align="justify"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_1_OPTION_4') }}</p></li>
                                        <li align="justify"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_1_OPTION_5') }}</p></li>
                                    </ol>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('CYBER_SAFETY_PAGE_TIPS_2_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <ol>
                                        <li align="justify" style="padding-bottom:15px;"><p><b>{{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_1_MAIN') }}</b> {{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_1_SUB') }}</p></li>
                                        <li align="justify" style="padding-bottom:15px;"><p><b>{{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_2_MAIN') }}</b> {{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_2_SUB') }}</p></li>
                                        <li align="justify" style="padding-bottom:15px;"><p><b>{{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_3_MAIN') }}</b> {{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_3_SUB') }}</p></li>
                                        <li align="justify" style="padding-bottom:15px;"><p><b>{{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_4_MAIN') }}</b> {{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_4_SUB') }}</p></li>
                                        <li align="justify" style="padding-bottom:15px;"><p><b>{{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_5_MAIN') }}</b> {{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_5_SUB') }}</p></li>
                                        <li align="justify" style="padding-bottom:15px;"><p><b>{{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_6_MAIN') }}</b> {{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_6_SUB') }}</p></li>
                                        <li align="justify" style="padding-bottom:15px;"><p><b>{{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_7_MAIN') }}</b> {{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_7_SUB') }}</p></li>
                                        <li align="justify" style="padding-bottom:15px;"><p><b>{{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_8_MAIN') }}</b> {{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_8_SUB') }}</p></li>
                                        <li align="justify" style="padding-bottom:15px;"><p><b>{{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_9_MAIN') }}</b> {{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_9_SUB') }}</p></li>
                                        <li align="justify" style="padding-bottom:15px;"><p><b>{{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_10_MAIN') }}</b> {{ __('CYBER_SAFETY_PAGE_TIPS_2_OPTION_10_SUB') }}</p></li>
                                    </ol>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('CYBER_SAFETY_PAGE_TIPS_3_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <p align="justify" style="padding-bottom:0px;">{{ __('CYBER_SAFETY_PAGE_TIPS_3_LINE_1') }}</p>
                                    <p align="justify" style="padding-bottom:0px;">{{ __('CYBER_SAFETY_PAGE_TIPS_3_LINE_2') }}</p>
                                    <p align="justify" style="padding-bottom:0px;">{{ __('CYBER_SAFETY_PAGE_TIPS_3_LINE_3') }}</p>
                                    <p align="justify" style="padding-bottom:0px;">{{ __('CYBER_SAFETY_PAGE_TIPS_3_LINE_4') }}</p>
                                    <p align="justify" style="padding-bottom:0px;">{{ __('CYBER_SAFETY_PAGE_TIPS_3_LINE_5') }}</p>
                                    <p align="justify" style="padding-bottom:0px;">{{ __('CYBER_SAFETY_PAGE_TIPS_3_LINE_6') }}</p>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('CYBER_SAFETY_PAGE_TIPS_4_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <ol>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_4_OPTION_1') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_4_OPTION_2') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_4_OPTION_3') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_4_OPTION_4') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_4_OPTION_5') }}</p></li>
                                    </ol>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('CYBER_SAFETY_PAGE_TIPS_5_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <ol>
                                        <li align="justify" style="padding-bottom:15px;"><p><b>{{ __('CYBER_SAFETY_PAGE_TIPS_5_OPTION_1_MAIN') }}</b> {{ __('CYBER_SAFETY_PAGE_TIPS_5_OPTION_1_SUB') }}</p></li>
                                        <li align="justify" style="padding-bottom:15px;"><p><b>{{ __('CYBER_SAFETY_PAGE_TIPS_5_OPTION_2_MAIN') }}</b> {{ __('CYBER_SAFETY_PAGE_TIPS_5_OPTION_2_SUB') }}</p></li>
                                        <li align="justify" style="padding-bottom:15px;"><p><b>{{ __('CYBER_SAFETY_PAGE_TIPS_5_OPTION_3_MAIN') }}</b> {{ __('CYBER_SAFETY_PAGE_TIPS_5_OPTION_3_SUB') }}</p></li>
                                        <li align="justify" style="padding-bottom:15px;"><p><b>{{ __('CYBER_SAFETY_PAGE_TIPS_5_OPTION_4_MAIN') }}</b> {{ __('CYBER_SAFETY_PAGE_TIPS_5_OPTION_4_SUB') }}</p></li>
                                    </ol>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('CYBER_SAFETY_PAGE_TIPS_6_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <ol>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_6_OPTION_1') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_6_OPTION_2') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_6_OPTION_3') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_6_OPTION_4') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_6_OPTION_5') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_6_OPTION_6') }}</p></li>
                                    </ol>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('CYBER_SAFETY_PAGE_TIPS_7_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <ol>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_7_OPTION_1') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_7_OPTION_2') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_7_OPTION_3') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_7_OPTION_4') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_7_OPTION_5') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_7_OPTION_6') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_7_OPTION_7') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_7_OPTION_8') }}</p></li>
                                    </ol>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('CYBER_SAFETY_PAGE_TIPS_8_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <ol>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_8_OPTION_1') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_8_OPTION_2') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_8_OPTION_3') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_8_OPTION_4') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_8_OPTION_5') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_8_OPTION_6') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_8_OPTION_7') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_8_OPTION_8') }}</p></li>
                                    </ol>
                                </div>
                            </div>
                            <div class="accordianOut">
                                <div class="accordianTop">
                                    {{ __('CYBER_SAFETY_PAGE_TIPS_9_TITLE') }}
                                </div>
                                <div class="accordianBottom">
                                    <ol>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_9_OPTION_1') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_9_OPTION_2') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_9_OPTION_3') }}</p></li>
                                        <li align="justify" style="padding-bottom:10px;"><p>{{ __('CYBER_SAFETY_PAGE_TIPS_9_OPTION_4') }}</p></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
