@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('WOMEN_SAFETY_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-12">
                <div class="asideSection col12 pageContent">
                    <div class="aboutDesc">
                        <div class="accordianOut">
                            <div class="accordianTop">
                            {{ __('WOMEN_SAFETY_PAGE_TIPS_1_TITLE') }}
                            </div>
                            <div class="accordianBottom">
                                <p>
                                    <span style="font-weight: 400;">
                                    {{ __('WOMEN_SAFETY_PAGE_TIPS_1_LINE_1') }}
                                    </span>
                                </p>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_1_PROBLEM') }}</h3>
                                <p>
                                    <span style="font-weight: 400;">
                                    {{ __('WOMEN_SAFETY_PAGE_TIPS_1_PROBLEM_LINE') }}
                                    </span>
                                </p>
                                <h2 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_TITLE') }}</h2>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_1_TITLE') }}</h3>
                                <p>
                                    <span style="font-weight: 400;">
                                    {{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_1_OPTION') }}
                                    </span>
                                </p>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_2_TITLE') }}</h3>
                                <p>
                                    <span style="font-weight: 400;">
                                    {{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_2_OPTION') }}
                                    </span>
                                </p>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_3_TITLE') }}</h3>
                                <p>
                                    <span style="font-weight: 400;">
                                    {{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_3_OPTION_1') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                    {{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_3_OPTION_2') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                    {{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_3_OPTION_3') }}
                                    </span>
                                </p>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_4_TITLE') }}</h3>
                                <ul>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_4_OPTION_1') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_4_OPTION_2') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_4_OPTION_3') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_4_OPTION_4') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_4_OPTION_5') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_1_MYTH_4_OPTION_6') }}</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordianOut">
                            <div class="accordianTop">
                            {{ __('WOMEN_SAFETY_PAGE_TIPS_2_TITLE') }}
                            </div>
                            <div class="accordianBottom">
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_TITLE') }}</h3>
                                <p>
                                    <span style="font-weight: 400;">
                                    {{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_LINE_1') }}
                                    </span>
                                </p>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW') }}</h3>
                                <ul>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_1') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_2') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_3') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_4') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_5') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_6') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_7') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_8') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_9') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_10') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_11') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_12') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_13') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_14') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_15') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_16') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_17') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_18') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_19') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_20') }}</p></li>
                                </ul>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_2_SIGN_FOLLOW_OPTION_LINE') }}
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="accordianOut">
                            <div class="accordianTop">
                                {{ __('WOMEN_SAFETY_PAGE_TIPS_3_TITLE') }}
                            </div>
                            <div class="accordianBottom">
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_TITLE') }}</h3>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_LINE_1') }}
                                    </span>
                                </p>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_CHILD') }}</h3>
                                <ul>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_CHILD_OPTION_1') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_CHILD_OPTION_2') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_CHILD_OPTION_3') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_CHILD_OPTION_4') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_CHILD_OPTION_5') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_CHILD_OPTION_6') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_CHILD_OPTION_7') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_CHILD_OPTION_8') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_CHILD_OPTION_9') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_CHILD_OPTION_10') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_CHILD_OPTION_11') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_CHILD_OPTION_12') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_CHILD_OPTION_13') }}</p></li>
                                </ul>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_ECONOMIC') }}</h3>
                                <ul>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_ECONOMIC_OPTION_1') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_ECONOMIC_OPTION_2') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_ECONOMIC_OPTION_3') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_ECONOMIC_OPTION_4') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_ECONOMIC_OPTION_5') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_ECONOMIC_OPTION_6') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_ECONOMIC_OPTION_7') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_ECONOMIC_OPTION_8') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_ECONOMIC_OPTION_9') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_ECONOMIC_OPTION_10') }}</p></li>
                                </ul>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_PHYSICAL') }}</h3>
                                <ul>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_PHYSICAL_OPTION_1') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_PHYSICAL_OPTION_2') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_PHYSICAL_OPTION_3') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_PHYSICAL_OPTION_4') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_PHYSICAL_OPTION_5') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_PHYSICAL_OPTION_6') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_PHYSICAL_OPTION_7') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_PHYSICAL_OPTION_8') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_PHYSICAL_OPTION_9') }}</p></li>
                                </ul>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_SEXUAL') }}</h3>
                                <ul>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_SEXUAL_OPTION_1') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_SEXUAL_OPTION_2') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_SEXUAL_OPTION_3') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_SEXUAL_OPTION_4') }}</p></li>
                                </ul>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DV_ACT') }}</h3>
                                <ul>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DV_ACT_OPTION_1') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DV_ACT_OPTION_2') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DV_ACT_OPTION_3') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DV_ACT_OPTION_4') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DV_ACT_OPTION_5') }}</p></li>
                                </ul>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_REPORT') }}</h3>
                                <ul>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_REPORT_OPTION_1') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_REPORT_OPTION_2') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_REPORT_OPTION_3') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_REPORT_OPTION_4') }}</p></li>
                                </ul>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_SHELTER') }}</h3>
                                <ul>
                                    <li align="justify" style="padding-bottom: 24px;"><p><b>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_SHELTER_1_MAIN') }} </b> {{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_SHELTER_1_SUB') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p><b>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_SHELTER_2_MAIN') }} </b> {{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_SHELTER_2_SUB') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p><b>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_SHELTER_3_MAIN') }} </b> {{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_SHELTER_3_SUB') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p><b>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_SHELTER_4_MAIN') }} </b> {{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_SHELTER_4_SUB') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p><b>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_SHELTER_5_MAIN') }} </b> {{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_SHELTER_5_SUB') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p><b>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_SHELTER_6_MAIN') }} </b> {{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_SHELTER_6_SUB') }}</p></li>
                                </ul>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_ALIENTING') }}</h3>
                                <ul>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_ALIENTING_OPTION_1') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_ALIENTING_OPTION_2') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_ALIENTING_OPTION_3') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_ALIENTING_OPTION_4') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_ALIENTING_OPTION_5') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_ALIENTING_OPTION_6') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_DOMESTIC_ALIENTING_OPTION_7') }}</p></li>
                                </ul>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_3_FACING_LINE') }}
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="accordianOut">
                            <div class="accordianTop">
                                {{ __('WOMEN_SAFETY_PAGE_TIPS_4_TITLE') }}
                            </div>
                            <div class="accordianBottom">
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_4_PRACTICE_TITLE') }}</h3>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_PRACTICE_LINE_1') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_PRACTICE_LINE_2') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_PRACTICE_LINE_3') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_PRACTICE_LINE_4') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_PRACTICE_LINE_5') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_PRACTICE_LINE_6') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_PRACTICE_LINE_7') }}
                                    </span>
                                </p>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_4_EFFECT_TITLE') }}</h3>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_EFFECT_LINE_1') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_EFFECT_LINE_2') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_EFFECT_LINE_3') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_EFFECT_LINE_4') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_EFFECT_LINE_5') }}
                                    </span>
                                </p>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_4_DOWRY_TITLE') }}</h3>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_DOWRY_LINE_1') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_DOWRY_LINE_2') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_DOWRY_LINE_3') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_DOWRY_LINE_4') }}
                                    </span>
                                </p>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_4_PARENT_TITLE') }}</h3>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_PARENT_LINE_1') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_PARENT_LINE_2') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_PARENT_LINE_3') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_4_PARENT_LINE_4') }}
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="accordianOut">
                            <div class="accordianTop">
                                {{ __('WOMEN_SAFETY_PAGE_TIPS_5_TITLE') }}
                            </div>
                            <div class="accordianBottom">
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_TITLE') }}</h3>
                                <ul>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_1') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_2') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_3') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_4') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_5') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_6') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_7') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_8') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_9') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_10') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_11') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_12') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_13') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_14') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_15') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_16') }}</p></li>
                                    <li align="justify" style="padding-bottom: 24px;"><p>{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_OPTION_17') }}</p></li>
                                </ul>
                                <h3 style="color: rgb(10, 36, 99);font-weight: bold">{{ __('WOMEN_SAFETY_PAGE_TIPS_5_COMPLAINT_TITLE') }}</h3>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_1') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_2') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_3') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_4') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_5') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_6') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_7') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_8') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_9') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_10') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_11') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_12') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_13') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_14') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_15') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_16') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_17') }}
                                    </span>
                                </p>
                                <p>
                                    <span style="font-weight: 400;">
                                        {{ __('WOMEN_SAFETY_PAGE_TIPS_5_ABUSE_LINE_18') }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
