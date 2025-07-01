@extends("layout.app") 
@section('inlineStyle')
<!-- <link rel="stylesheet" href="{{ asset('css/organizational_structure.css') }}"> -->
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="{{ asset('chart/css/reset-html5.css') }}" rel="stylesheet" media="screen" />
<link href="{{ asset('chart/css/micro-clearfix.css') }}" rel="stylesheet" media="screen" />
<link href="{{ asset('chart/css/stiff-chart.css') }}" rel="stylesheet" media="screen" />
<link href="{{ asset('chart/css/custom.css') }}" rel="stylesheet" media="screen" />
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">Organisation Structure</h2>
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
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>अप्पर पोलीस अधीक्षक, जळगाव</p>
                                        </div>
                                    </li>
                                    <li data-parent="b">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>अप्पर पोलीस अधीक्षक, चाळीसगाव</p>
                                        </div>
                                    </li>
                                    <li data-parent="c">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>शाखा</p>
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
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>11</p>
                                        </div>
                                    </li>
                                    <li data-parent="a02">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>12</p>
                                        </div>
                                    </li>
                                    <li data-parent="a03">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>13</p>
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
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>21</p>
                                        </div>
                                    </li>
                                    <li data-parent="b02">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>22</p>
                                        </div>
                                    </li>
                                    <li data-parent="b03">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>23</p>
                                        </div>
                                    </li>
                                    <li data-parent="b04">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>24</p>
                                        </div>
                                    </li>
                                    <li data-parent="b05">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>25</p>
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
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>31</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="stiff-chart-level" data-level="03">
                            <div class="stiff-child" data-child-from="c07">
                                <ul>
                                    <li data-parent="c0701">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                        </div>
                                    </li>
                                    <li data-parent="c0702">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                        </div>
                                    </li>
                                    <li data-parent="c0703">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                        </div>
                                    </li>
                                    <li data-parent="c0704">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                        </div>
                                    </li>
                                    <li data-parent="c0705">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                        </div>
                                    </li>
                                    <li data-parent="c0706">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                        </div>
                                    </li>
                                    <li data-parent="c0707">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="stiff-chart-level" data-level="03">
                            <div class="stiff-child" data-child-from="b01">
                                <ul>
                                    <li data-parent="b0101">
                                        <div class="the-chart">
                                            <img src="http://127.0.0.1:8000/images/mlogo.png" width="100" alt="">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
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