@extends("layout.app") 
@section('inlineStyle')
<!-- <link rel="stylesheet" href="{{ asset('css/organizational_structure.css') }}"> -->
<!-- <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> -->
<link href="{{ asset('chart/css/reset-html5.css') }}" rel="stylesheet" media="screen" />
<link href="{{ asset('chart/css/micro-clearfix.css') }}" rel="stylesheet" media="screen" />
<link href="{{ asset('chart/css/stiff-chart.css') }}" rel="stylesheet" media="screen" />
<link href="{{ asset('chart/css/custom.css') }}" rel="stylesheet" media="screen" />
<link rel="stylesheet" href="{{ asset('css/organizational_structure_new.css') }}">
<style>
    @media (max-width: 767px) {
        .chart-vertical .stiff-chart-inner li {
            margin-bottom:10px;
        }
    }
    .stiff-child ul li a {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        font-size: 100% !important;
        vertical-align: baseline;
        background: transparent;
        text-decoration:none;
        color:#000;
    }
    ul li p {
        line-height: 1.5;
    }
    .stiff-child ul li p a:hover{
        text-decoration:none;
        color:#000
    }
</style>
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('ORG_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-12">
                <p class="aboutDesc line-height-2em text-justify text-danger my-2">{{ __('ORG_PAGE_MSG') }}</p>
                <div class="chart-container">
                    <ol class="organizational-chart-main">
                        <li>
                            <div>
                                <img src="{{ asset('images/logo_white.png') }}" class="m-2" width="50" alt="">
                                <h1>{{ __('ORG_PAGE_BOX_SP') }}</h1>
                            </div>
                        </li>
                    </ol>
                    <div id="your-chart-name">
                        <div class="stiff-chart-inner">
                            <div class="stiff-chart-level" data-level="01">
                                <div class="stiff-main-parent">
                                    <ul>
                                        <li data-parent="a">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_ADD_JAL') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="b">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_ADD_CHAL') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="c">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_ADD_SPECIAL') }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="stiff-chart-level" data-level="02">
                                <div class="stiff-child" data-child-from="a">
                                    <ul>
                                        <li data-parent="a01">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_SDPO_JAL') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="a02">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_SDPO_BSL') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="a03">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_SDPO_MKT') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="a04">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_SDPO_FZP') }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="stiff-chart-level" data-level="02">
                                <div class="stiff-child" data-child-from="b">
                                    <ul>
                                        <li data-parent="b01">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_SDPO_CHL') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="b02">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_SDPO_PCHR') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="b03">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_SDPO_AML') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="b04">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_SDPO_CHOP') }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="stiff-chart-level" data-level="02">
                                <div class="stiff-child" data-child-from="c">
                                    <ul>
                                        <li data-parent="c01">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_DSB') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="c02">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_TRF') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="c03">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_LCB') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="c04">
                                            <a href="/economic-offence-wing" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_BRANCH_EOW') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="c05">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_HUMAN_TRF') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="c06">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_TMC') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="c07">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_WELFARE') }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="stiff-chart-level" data-level="03">
                                <div class="stiff-child" data-child-from="a01">
                                    <ul>
                                        <li data-parent="a0101">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=6" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_MIDC_CITY') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="a0102">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=1" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_JAL_CITY') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="a0103">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=5" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_JILHAPETH') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="a0104">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=3" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_SHANIPETH') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="a0105">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=4" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_RAMANDAND') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="a0106">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=2" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_JAL_TALUKA') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="a0107">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=36" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_CYBER') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="stiff-chart-level" data-level="03">
                                <div class="stiff-child" data-child-from="a02">
                                    <ul>
                                        <li data-parent="a0201">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=7" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_BSL_PS_BSL_CITY') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="a0202">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=9" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_BSL_PS_BSL_TALUKA') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="a0203">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=8" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_BSL_PS_BAZARPETH') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="a0204">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=10" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_BSL_PS_NASHIRABAD') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="stiff-chart-level" data-level="03">
                                <div class="stiff-child" data-child-from="a03">
                                    <ul>
                                        <li data-parent="a0301">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=15" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_MKT_PS_MKT') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="a0302">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=16" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_MKT_PS_BODWAD') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="a0303">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=18" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_MKT_PS_SAVDA') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="a0304">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=17" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_MKT_PS_VARANGAON') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="stiff-chart-level" data-level="03">
                                <div class="stiff-child" data-child-from="a04">
                                    <ul>
                                        <li data-parent="a0401">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=13" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_FZP_PS_FZP') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="a0402">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=11" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_FZP_PS_RAVER') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="a0403">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=14" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_FZP_PS_YAWAL') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="a0404">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=12" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_FZP_PS_NIMBHORA') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="stiff-chart-level" data-level="03">
                                <div class="stiff-child" data-child-from="b01">
                                    <ul>
                                        <li data-parent="b0101">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=19" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_CHL_PS_CHL_CITY') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="b0102">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=20" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_CHL_PS_CHL_RURAL') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="b0103">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=21" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_CHL_PS_BHADGAON') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="b0104">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=22" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_CHL_PS_MEHUNBARE') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="b0105">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=23" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_CHL_PS_KASODA') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="stiff-chart-level" data-level="03">
                                <div class="stiff-child" data-child-from="b02">
                                    <ul>
                                        <li data-parent="b0201">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=24" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_PCHR_PS_PCHR') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="b0202">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=27" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_PCHR_PS_PAHUR') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="b0203">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=26" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_PCHR_PS_JAMNER') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="b0204">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=25" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_PCHR_PS_PIMPALGAON') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="b0205">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=37" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_PCHR_PS_FATTEPUR') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="stiff-chart-level" data-level="03">
                                <div class="stiff-child" data-child-from="b03">
                                    <ul>
                                        <li data-parent="b0301">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=28" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_AML_PS_AML') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="b0302">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=29" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_AML_PS_PAROLA') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="b0303">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=30" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_AML_PS_ERANDOL') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="b0304">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=31" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_AML_PS_MARWAD') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="stiff-chart-level" data-level="03">
                                <div class="stiff-child" data-child-from="b04">
                                    <ul>
                                        <li data-parent="b0401">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=32" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_CHOP_PS_CHOP_CITY') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="b0402">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=33" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_CHOP_PS_CHOP_RURAL') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="b0403">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=35" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_CHOP_PS_DHARNGAON') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="b0404">
                                            <a href="https://jalgaonpolice.gov.in/police-stations?id=34" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_SDPO_CHOP_PS_ADAWAD') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="stiff-chart-level" data-level="03">
                                <div class="stiff-child" data-child-from="c01">
                                    <ul>
                                        <li data-parent="c0101">
                                            <a href="/district-special-branch" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_BRANCH_DSB_PS_DSB') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="c0102">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_DSB_PS_ATB') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="c0103">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_DSB_PS_PASSPORT') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="c0104">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_CHAR_VERIFICATION') }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="stiff-chart-level" data-level="03">
                                <div class="stiff-child" data-child-from="c02">
                                    <ul>
                                        <li data-parent="c0201">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_TRF_PS_TRF_JAL') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="c0202">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_TRF_PS_TRF_BSL') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="c0203">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_TRF_PS_TRF_CHAL') }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="stiff-chart-level" data-level="03">
                                <div class="stiff-child" data-child-from="c03">
                                    <ul>
                                        <li data-parent="c0301">
                                            <a href="/local-crime-branch" target="_blank">
                                                <div class="the-chart">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <p>{{ __('ORG_PAGE_BOX_BRANCH_LCB_PS_LCB') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-parent="c0302">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_LCB_PS_WOMEN') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="c0303">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_LCB_PS_FINGER') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="c0304">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_LCB_PS_CCTNS') }}</p>
                                            </div>
                                        </li>
                                        <li data-parent="c0305">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>{{ __('ORG_PAGE_BOX_BRANCH_LCB_PS_MCU') }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
@endsection