@extends("layout.app") 
@section('inlineStyle')
<!-- <link rel="stylesheet" href="{{ asset('css/organizational_structure.css') }}"> -->
<!-- <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> -->
<link href="{{ asset('chart/css/reset-html5.css') }}" rel="stylesheet" media="screen" />
<link href="{{ asset('chart/css/micro-clearfix.css') }}" rel="stylesheet" media="screen" />
<link href="{{ asset('chart/css/stiff-chart.css') }}" rel="stylesheet" media="screen" />
<link href="{{ asset('chart/css/custom.css') }}" rel="stylesheet" media="screen" />
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
            <div class="chart-container">
                <div id="your-chart-name">
                    <div class="stiff-chart-inner">
                        <div class="stiff-chart-level" data-level="01">
                            <div class="stiff-main-parent">
                                <ul>
                                    <li data-parent="a">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>अप्पर पोलीस अधीक्षक, जळगाव</p>
                                        </div>
                                    </li>
                                    <li data-parent="b">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>अप्पर पोलीस अधीक्षक, चाळीसगाव</p>
                                        </div>
                                    </li>
                                    <li data-parent="c">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>जळगाव जिल्हा विशेष शाखा</p>
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
                                            <p>एसडीपीओ जळगाव</p>
                                        </div>
                                    </li>
                                    <li data-parent="a02">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>एसडीपीओ भुसावळ</p>
                                        </div>
                                    </li>
                                    <li data-parent="a03">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>एसडीपीओ मुक्ताईनगर</p>
                                        </div>
                                    </li>
                                    <li data-parent="a04">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>एसडीपीओ फैजपूर</p>
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
                                            <p>एसडीपीओ चाळीसगाव</p>
                                        </div>
                                    </li>
                                    <li data-parent="b02">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>एसडीपीओ पाचोरा</p>
                                        </div>
                                    </li>
                                    <li data-parent="b03">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>एसडीपीओ अमळनेर</p>
                                        </div>
                                    </li>
                                    <li data-parent="b04">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>एसडीपीओ चोपडा</p>
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
                                            <p>इतर शाखा</p>
                                        </div>
                                    </li>
                                    <li data-parent="c02">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>इतर शाखा</p>
                                        </div>
                                    </li>
                                    <li data-parent="c03">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>इतर शाखा</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="stiff-chart-level" data-level="03">
                            <div class="stiff-child" data-child-from="a01">
                                <ul>
                                    <li data-parent="a0101">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=1" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>जळगाव शहर पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="a0102">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=5" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>जिल्हापेठ पोलीस<br>स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="a0103">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=3" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>शनिपेठ पोलीस<br>स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="a0104">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=4" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>रामानन्द नगर पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="a0105">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=2" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>जळगाव तालुका पोलीस स्टेशन</p>
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
                                                <p>भुसावळ शहर पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="a0202">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=9" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>भुसावळ तालुका पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="a0203">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=8" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>बाजारपेठ पोलीस<br>स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="a0204">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=10" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>नशिराबाद पोलीस<br>स्टेशन</p>
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
                                                <p>मुक्ताईनगर पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="a0302">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=16" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>बोदवड पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="a0303">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=18" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>सावदा पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="a0304">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=17" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>वरणगाव पोलीस स्टेशन</p>
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
                                                <p>फैजपूर पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="a0402">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=11" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>रावेर पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="a0403">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=14" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>यावल पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="a0404">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=12" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>निंभोरा पोलीस स्टेशन</p>
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
                                                <p>चाळीसगाव शहर पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="b0102">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=20" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>चाळीसगाव ग्रामीण पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="b0103">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=21" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>भडगाव पोलीस<br>स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="b0104">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=22" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>मेहुणबारे पोलीस<br>स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="b0105">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=23" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>कासोदा पोलीस<br>स्टेशन</p>
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
                                                <p>पाचोरा पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="b0202">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=27" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>पहूर पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="b0203">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=26" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>जामनेर पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="b0204">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=25" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>पिंपळगाव पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="b0205">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=37" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>फत्तेपूर पोलीस स्टेशन</p>
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
                                                <p>अमळनेर पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="b0302">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=29" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>पारोळा पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="b0303">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=30" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>एरंडोल पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="b0304">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=31" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>मारवड पोलीस स्टेशन</p>
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
                                                <p>चोपडा शहर पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="b0402">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=33" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>चोपडा ग्रा. पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="b0403">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=35" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>धरणगाव पोलीस स्टेशन</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="b0404">
                                        <a href="https://jalgaonpolice.gov.in/police-stations?id=34" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>अडावद पोलीस स्टेशन</p>
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
                                        <a href="https://jalgaonpolice.gov.in/district-special-branch" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>जिल्हा विशेष शाखा (DSB)</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="c0102">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>दहशतवाद विरोधी शाखा (ATB)</p>
                                        </div>
                                    </li>
                                    <li data-parent="c0103">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>पासपोर्ट<br>शाखा</p>
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
                                            <p>शहर वाहतूक शाखा, जळगाव</p>
                                        </div>
                                    </li>
                                    <li data-parent="c0202">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>शहर वाहतूक शाखा, भुसावळ</p>
                                        </div>
                                    </li>
                                    <li data-parent="c0203">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>शहर वाहतूक शाखा, चाळीसगाव</p>
                                        </div>
                                    </li>
                                    <li data-parent="a0204">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>मानव संसाधन<br>विभाग</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="stiff-chart-level" data-level="03">
                            <div class="stiff-child" data-child-from="c03">
                                <ul>
                                    <li data-parent="c0301">
                                        <a href="https://jalgaonpolice.gov.in/local-crime-branch" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>स्थानिक गुन्हे शाखा<br>(LCB)</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="c0302">
                                        <a href="https://jalgaonpolice.gov.in/economic-offence-wing" target="_blank">
                                            <div class="the-chart">
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <p>आर्थिक गुन्हे शाखा<br>(EOW)</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li data-parent="c0303">
                                        <div class="the-chart">
                                            <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                            <p>मानवी तस्करी विरोधी कक्ष (AHTU)</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--<div class="col-md-10 organization-structure">
                
               <div class="content">
                    <figure class="org-chart cf">
                        <div class="board">
                            <ul class="columnOne">
                                <li>
                                    <span class="lvl-a" style="background-color: rgb(238, 99, 82); color: rgb(0, 0, 0);">
                                        <br />
                                        <strong>पोलीस अधीक्षक</strong><br />
                                        <br />
                                    </span>
                                </li>
                            </ul>
                            <ul class="columnOne">
                                <li>
                                    <div class="asideSection col12">
                                        <div class="rightNavDropdown" data-aos="fade-left">
                                            <select class="home-ds-select col6" id="orgBox" style="background-color:#e1ce7a;">
                                                <option value="">परिमंडळ निवडा</option>
                                                <option value="1">अप्पर पोलीस अधीक्षक, जळगाव</option>
                                                <option value="2">अप्पर पोलीस अधीक्षक, चाळीसगाव</option>
                                                <option value="3">शाखा</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <ul class="departments" id="MainDiv1" style="display:none;">
                            <li class="department">
                                <span class="lvl-b p-4" style="background-color: rgb(64, 112, 118); color: rgb(255, 255, 255);"><strong>पोलीस उप - अधिक्षक गृह</strong></span>
                                <ul class="sections">
                                    <li class="section">
                                        <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>पोलीस मुख्यालय</strong></span>
                                    </li>
                                    <li class="section">
                                        <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>मोटार परिवहन विभाग</strong></span>
                                    </li>
                                </ul>
                            </li>
                            <li class="department">
                                <span class="lvl-b p-4" style="background-color: rgb(64, 112, 118); color: rgb(255, 255, 255);"><strong>एसडीपीओ जळगाव</strong></span>
                                <ul class="sections">
                                    <li class="section">
                                    <a href="https://jalpolice.ssstest.in/police-stations?id=1" target="_blank">    <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>जळगाव शहर पोलीस स्टेशन   </strong></span> </a> 
                                    </li>
                                    <li class="section">
                                        <a href="https://jalpolice.ssstest.in/police-stations?id=5" target="_blank"><span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>जिल्हापेठ पोलीस स्टेशन  </strong></span></a>
                                    </li>
                                    <li class="section">
                                       <a href="https://jalpolice.ssstest.in/police-stations?id=3" target="_blank"> <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>शनिपेठ पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                       <a href="https://jalpolice.ssstest.in/police-stations?id=4" target="_blank">र <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>रामानन्द नगर पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                       <a href="https://jalpolice.ssstest.in/police-stations?id=2" target="_blank"> <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>जळगाव तालुका पोलीस स्टेशन</strong></span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="department central">
                                <span class="lvl-b p-4" style="background-color: rgb(64, 112, 118); color: rgb(255, 255, 255);"><strong>एसडीपीओ भुसावळ</strong></span>
                                <ul class="sections">
                                    <li class="section">
                                       <a href="https://jalpolice.ssstest.in/police-stations?id=7" target="_blank">  <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>भुसावळ शहर पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                      <a href="https://jalpolice.ssstest.in/police-stations?id=9" target="_blank">   <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>भुसावळ तालुका पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                     <a href="https://jalpolice.ssstest.in/police-stations?id=8" target="_blank">    <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>बाजारपेठ पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                     <a href="https://jalpolice.ssstest.in/police-stations?id=10" target="_blank">    <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>नशिराबाद पोलीस स्टेशन</strong></span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="department">
                                <span class="lvl-b p-4" style="background-color: rgb(64, 112, 118); color: rgb(255, 255, 255);"><strong>एसडीपीओ मुक्ताईनगर</strong></span>
                                <ul class="sections">
                                    <li class="section">
                                      <a href="https://jalpolice.ssstest.in/police-stations?id=15" target="_blank">   <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>मुक्ताईनगर पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                      <a href="https://jalpolice.ssstest.in/police-stations?id=16" target="_blank">   <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>बोदवड पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                       <a href="https://jalpolice.ssstest.in/police-stations?id=18" target="_blank">  <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>सावदा पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                       <a href="https://jalpolice.ssstest.in/police-stations?id=17" target="_blank">  <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>वरणगाव पोलीस स्टेशन</strong></span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="department">
                                <span class="lvl-b p-4" style="background-color: rgb(64, 112, 118); color: rgb(255, 255, 255);"><strong>एसडीपीओ फैजपूर</strong></span>
                                <ul class="sections">
                                    <li class="section">
                                        <a href="https://jalpolice.ssstest.in/police-stations?id=13" target="_blank"><span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>फैजपूर पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                    <a href="https://jalpolice.ssstest.in/police-stations?id=11" target="_blank">    <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>रावेर पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                    <a href="https://jalpolice.ssstest.in/police-stations?id=14" target="_blank">    <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>यावल पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                    <a href="https://jalpolice.ssstest.in/police-stations?id=12" target="_blank">    <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>निंभोरा पोलीस स्टेशन</strong></span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="departments" id="MainDiv2" style="display:none">
                            <li class="department">
                                <span class="lvl-b p-4" style="background-color: rgb(64, 112, 118); color: rgb(255, 255, 255);"><strong>एसडीपीओ चाळीसगाव</strong></span>
                                <ul class="sections">
                                    <li class="section">
                                       <a href="https://jalpolice.ssstest.in/police-stations?id=19" target="_blank">  <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>चाळीसगाव शहर पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                      <a href="https://jalpolice.ssstest.in/police-stations?id=20" target="_blank">   <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>चाळीसगाव ग्रामीण पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                      <a href="https://jalpolice.ssstest.in/police-stations?id=21" target="_blank">   <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>भडगाव पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                     <a href="https://jalpolice.ssstest.in/police-stations?id=22" target="_blank">    <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>मेहुणबारे पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                     <a href="https://jalpolice.ssstest.in/police-stations?id=23" target="_blank">    <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>कासोदा पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                        <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>चाळीसगाव ट्राफिक पोलीस स्टेशन</strong></span>
                                    </li>
                                </ul>
                            </li>
                            <li class="department">
                                <span class="lvl-b p-4" style="background-color: rgb(64, 112, 118); color: rgb(255, 255, 255);"><strong>एसडीपीओ पाचोरा</strong></span>
                                <ul class="sections">
                                    <li class="section">
                                    <a href="https://jalpolice.ssstest.in/police-stations?id=24" target="_blank">    <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>पाचोरा पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                    <a href="https://jalpolice.ssstest.in/police-stations?id=27" target="_blank">    <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>पहूर पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                    <a href="https://jalpolice.ssstest.in/police-stations?id=26" target="_blank">    <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>जामनेर पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                    <a href="https://jalpolice.ssstest.in/police-stations?id=25" target="_blank">    <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>पिंपळगाव पोलीस स्टेशन</strong></span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="department central custom-dept">
                                <span class="lvl-b p-4 custom-span"></span>
                            </li>
                            <li class="department">
                                <span class="lvl-b p-4" style="background-color: rgb(64, 112, 118); color: rgb(255, 255, 255);"><strong>एसडीपीओ अमळनेर</strong></span>
                                <ul class="sections">
                                    <li class="section">
                                     <a href="https://jalpolice.ssstest.in/police-stations?id=28" target="_blank">     <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>अमळनेर पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                     <a href="https://jalpolice.ssstest.in/police-stations?id=29" target="_blank">     <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>पारोळा पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                     <a href="https://jalpolice.ssstest.in/police-stations?id=30" target="_blank">     <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>एरंडोल पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                      <a href="https://jalpolice.ssstest.in/police-stations?id=31" target="_blank">    <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>मारवड पोलीस स्टेशन</strong></span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="department">
                                <span class="lvl-b p-4" style="background-color: rgb(64, 112, 118); color: rgb(255, 255, 255);"><strong>एसडीपीओ चोपडा</strong></span>
                                <ul class="sections">
                                    <li class="section">
                                     <a href="https://jalpolice.ssstest.in/police-stations?id=32" target="_blank">     <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>चोपडा शहर पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                      <a href="https://jalpolice.ssstest.in/police-stations?id=33" target="_blank">    <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>चोपडा ग्रामीण पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                      <a href="https://jalpolice.ssstest.in/police-stations?id=35" target="_blank">    <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>धरणगाव पोलीस स्टेशन</strong></span></a>
                                    </li>
                                    <li class="section">
                                       <a href="https://jalpolice.ssstest.in/police-stations?id=34" target="_blank">   <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>अडावद पोलीस स्टेशन</strong></span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="departments custom-dept-main" id="MainDiv3" style="display:none">
                            <li class="department custom-dept">
                                <span class="lvl-b p-4 custom-span"></span>
                            </li>
                            <li class="department central custom-dept">
                                <span class="lvl-b p-4 custom-span"></span>
                            </li>
                            <li class="department central margin-new">
                                
                                <ul class="sections">
                                    <li class="section">
                                     <a href="https://jalpolice.ssstest.in/local-crime-branch" target="_blank">   <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>स्थानिक गुन्हे शाखा </strong></span></a>
                                    </li>
                                    <li class="section">
                                     <a href="#" target="_blank">   <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>आर्थिक गुन्हे शाखा </strong></span></a>
                                    </li>
                                    <li class="section">
                                     <a href="#" target="_blank">   <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>मानवी वाहतूक प्रति बंधक विभाग</strong></span></a>
                                    </li>
                                    <li class="section">
                                     <a href="https://jalpolice.ssstest.in/district-special-branch" target="_blank">   <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>जिल्हा विशेष शाखा</strong></span></a>
                                    </li>
									<li class="section">
                                     <a href="#" target="_blank">   <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>दहशतवाद विरोधी शाखा </strong></span></a>
                                    </li>
									<li class="section">
                                     <a href="#" target="_blank">   <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>शहर वाहतूक शाखा, जळगाव </strong></span></a>
                                    </li>
									<li class="section">
                                     <a href="#" target="_blank">   <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>शहर वाहतूक शाखा, भुसावळ </strong></span></a>
                                    </li>
									<li class="section">
                                     <a href="#" target="_blank">   <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>शहर वाहतूक शाखा, चाळीसगाव </strong></span></a>
                                    </li>
									<li class="section">
                                     <a href="#" target="_blank">   <span class="p-4" style="background-color: rgb(191, 209, 229); color: rgb(0, 0, 0);"><strong>मानव संसाधन विभाग  </strong></span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="department custom-dept extra-line">
                                <span class="lvl-b p-4 custom-span"></span>
                            </li>
                            <li class="department custom-dept">
                                <span class="lvl-b p-4 custom-span"></span>
                            </li>
                        </ul>
                    </figure>
                </div>
            </div>-->
            <div class="col-md-1"></div>
        </div>
    </section>
@endsection