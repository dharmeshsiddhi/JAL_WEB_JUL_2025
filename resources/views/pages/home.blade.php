@extends("layout.app") 
@section('inlineStyle')
<style>
    .scroller {
    max-width: 100%;
    }
    .scroller__inner {
    display: flex;
    flex-wrap: wrap;
    }

    .scroller[data-animated="true"] {
    overflow: hidden;
    }

    .scroller[data-animated="true"] .scroller__inner {
    width: max-content;
    flex-wrap: nowrap;
    animation: scroll var(--_animation-duration, 40s)
        var(--_animation-direction, forwards) linear infinite;
    }

    .scroller[data-direction="right"] {
    --_animation-direction: reverse;
    }

    .scroller[data-direction="left"] {
    --_animation-direction: forwards;
    }

    .scroller[data-speed="fast"] {
    --_animation-duration: 20s;
    }

    .scroller[data-speed="slow"] {
    --_animation-duration: 60s;
    }

    @keyframes scroll {
    to {
        transform: translate(calc(-50% - 0.5rem));
    }
    }

    /* general styles */

    :root {
    --clr-neutral-100: hsl(0, 0%, 100%);
    --clr-primary-100: hsl(205, 15%, 58%);
    --clr-primary-400: hsl(215, 25%, 27%);
    --clr-primary-800: hsl(217, 33%, 17%);
    --clr-primary-900: hsl(218, 33%, 9%);
    }

    .tag-list {
    margin: 0;
    padding-inline: 0;
    list-style: none;
    }

    .tag-list li {
    background: var(--clr-primary-400);
    border-radius: 0.5rem;
    box-shadow: 0 0.5rem 1rem -0.25rem var(--clr-primary-900);
    color:#fff;
    }
    #profi_box {
        padding-left: 0 !important;
        background:#f0f5f9;
    }
    .profi_box {
        margin:10px;
        border: 1px solid rgb(11, 114, 199);
        border-radius: 7px;
        background:#f0f5f9;
        height: 420px;
    }
    .profi_thumb {
        margin: 10px;
    }
    .profi_thumb img {
       /* width:95%;*/
        padding: 5px;
        height:290px;
    }
    .profi_cont {
        padding-left: 5px;
        padding-right: 5px;
    }
    .profi_cont p {
        font-size: 13px;
        text-align: center;
    }
    .profi_cont h3 {
        font-size: 17px;
        text-align: center;
        margin-top: 10px;
    }
    .profi_cont a {
        background-color: #028;
        border: none;
        border-radius: 5px;
        display: block;
        margin-top: 5px;
        font-size: 18px !important;
        font-weight: 600;
        padding: 8px 0 8px 0;
    }
</style>
@endsection
@section("page")
            <!-- <section class="navsmu">
                <ul style="margin-bottom: -0.6rem;padding-left: 0.1rem;">
                    <li><a target="_blank" href="https://www.youtube.com/@Jalgaonpolice_"> <i class="fa fa-youtube"></i><span>Youtube</span> </a> </li>
                    <li><a target="_blank" href="https://www.instagram.com/jalgaonpolice_/"><i class="fa fa-instagram"></i><span>Instagram</span></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/JalgaonPolice"><i class="fa fa-facebook-f"></i><span style="color:white;">Facebook</span></a></li>
                    <li><a target="_blank" href="https://twitter.com/jalgaonpolice"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                    <li><a target="_blank" href="https://wa.me/919490616555"><i class="fa fa-whatsapp"></i><span>Whatsapp</span></a></li>
                </ul>
            </section> -->
            <div class="w-full overflow-hidden relative">
                <div class="w-full flex justify-center items-center">
                    <div class="relative w-full max-w-7xl mx-auto">
                        <!-- <img src="https://palghar-police.s3.amazonaws.com/cb6afc58-cd60-4bf8-beae-c26d1023c3ae.jpeg" alt="police images" class="w-full h-[300px] md:h-[600px] object-cover rounded-lg shadow-lg" style="aspect-ratio: 16 / 9; object-position: center center;"> -->
                        <div class="slider_banner">
                            <div id="slider1" class="owl-carousel owl-theme">
                                @if(count($sliderList))
                                    @foreach($sliderList as $sliderDetail)
                                        <div class='item'><img src="https://panel.jalgaonpolice.gov.in/{{ $sliderDetail->MSLD_Photo }}"  class="w-full h-[300px] md:h-[600px] object-cover rounded-lg shadow-lg" style="aspect-ratio: 16 / 9; object-position: center center;"/></div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block absolute left-4 lg:left-8 top-1/2 -translate-y-1/2 space-y-4" style="z-index:1">
                    <a target="_blank" rel="noopener noreferrer" class="group block bg-white/95 backdrop-blur-sm rounded-xl p-1 shadow-lg border border-gray-200/80 hover:bg-white  hover:shadow-xl hover:scale-105 transition-all duration-300  w-[140px] relative hover:border-blue-200" title="{{ __('HOME_PAGE_SIDEBAR_ICONS_NATIONAL_CRIME') }}" href="https://cybercrime.gov.in/">
                        <div class="flex flex-col items-center gap-1">
                            <div class="bg-gradient-to-br from-blue-50 to-white p-1.5 rounded-full shadow-inner group-hover:shadow-md  transition-all duration-300"><img alt="lost" loading="lazy" width="40" height="40" decoding="async" data-nimg="1" class="object-contain w-7 h-7 drop-shadow-sm  group-hover:drop-shadow-md transition-all duration-300" src="{{ asset('hyd/sidebar/i4c.png') }}" style="color: transparent;"></div>
                            <p class="text-xs text-center font-medium text-gray-700  group-hover:text-gray-900 transition-all duration-300">{{ __('HOME_PAGE_SIDEBAR_ICONS_NATIONAL_CRIME') }}</p>
                        </div>
                    </a>
                    <!-- <a target="_blank" rel="noopener noreferrer" class="group block bg-white/95 backdrop-blur-sm rounded-xl p-1  shadow-lg border border-gray-200/80 hover:bg-white  hover:shadow-xl hover:scale-105 transition-all duration-300  w-[140px] relative hover:border-blue-200" title="{{ __('HOME_PAGE_SIDEBAR_ICONS_REPORT_LOST_FOUND_INFO') }}" href="/register-complaint">
                        <div class="flex flex-col items-center gap-1">
                            <div class="bg-gradient-to-br from-blue-50 to-white p-1.5 rounded-full shadow-inner group-hover:shadow-md  transition-all duration-300"><img alt="lost" loading="lazy" width="40" height="40" decoding="async" data-nimg="1" class="object-contain w-7 h-7 drop-shadow-sm  group-hover:drop-shadow-md transition-all duration-300" src="{{ asset('hyd/sidebar/lostfound.png') }}" style="color: transparent;"></div>
                            <p class="text-xs text-center font-medium text-gray-700  group-hover:text-gray-900 transition-all duration-300">{{ __('HOME_PAGE_SIDEBAR_ICONS_REPORT_LOST_FOUND_INFO') }}</p>
                        </div>
                    </a> -->
                    <!-- <a target="_blank" rel="noopener noreferrer" class="group block relative bg-white/95 backdrop-blur-sm rounded-xl p-1  shadow-lg border border-gray-200/80 hover:bg-white  hover:shadow-xl hover:scale-105 transition-all duration-300  w-[140px] hover:border-blue-200" title="{{ __('HOME_PAGE_SIDEBAR_ICONS_REPORT_INDUSTRY_GRIEVANCE') }}" href="/register-complaint">
                        <div class="flex flex-col items-center gap-1">
                            <div class="bg-gradient-to-br from-blue-50 to-white p-1.5  rounded-full shadow-inner group-hover:shadow-md  transition-all duration-300"><img alt="industry" loading="lazy" width="40" height="40" decoding="async" data-nimg="1" class="object-contain w-7 h-7 drop-shadow-sm  group-hover:drop-shadow-md transition-all duration-300" src="{{ asset('hyd/sidebar/factory.png') }}" style="color: transparent;"></div>
                            <p class="text-xs text-center font-medium text-gray-700  group-hover:text-gray-900 transition-all duration-300">{{ __('HOME_PAGE_SIDEBAR_ICONS_REPORT_INDUSTRY_GRIEVANCE') }}</p>
                        </div>
                    </a> -->
                    <a target="_blank" rel="noopener noreferrer" class="group block bg-white/95 backdrop-blur-sm rounded-xl p-1  shadow-lg border border-gray-200/80 hover:bg-white  hover:shadow-xl hover:scale-105 transition-all duration-300  w-[140px] relative hover:border-blue-200" title="{{ __('HOME_PAGE_SIDEBAR_ICONS_BLOCK_LOST_STOLEN_MOBILE') }}" href="https://www.ceir.gov.in/Request/CeirUserBlockRequestDirect.jsp">
                        <div class="flex flex-col items-center gap-1">
                            <div class="bg-gradient-to-br from-blue-50 to-white p-1.5  rounded-full shadow-inner group-hover:shadow-md  transition-all duration-300"><img alt="lost" loading="lazy" width="40" height="40" decoding="async" data-nimg="1" class="object-contain w-7 h-7 drop-shadow-sm  group-hover:drop-shadow-md transition-all duration-300" src="{{ asset('hyd/sidebar/sancharsaathi-logo.png') }}" style="color: transparent;"></div>
                            <p class="text-xs text-center font-medium text-gray-700  group-hover:text-gray-900 transition-all duration-300">{{ __('HOME_PAGE_SIDEBAR_ICONS_BLOCK_LOST_STOLEN_MOBILE') }}</p>
                        </div>
                    </a>
                    <a target="_blank" rel="noopener noreferrer" class="group block bg-white/95 backdrop-blur-sm rounded-xl p-1  shadow-lg border border-gray-200/80 hover:bg-white  hover:shadow-xl hover:scale-105 transition-all duration-300  w-[140px] relative hover:border-blue-200" title="{{ __('HOME_PAGE_SIDEBAR_ICONS_CITIZEN_PORTAL') }}" href="https://citizen.mahapolice.gov.in/Citizen/MH/index.aspx">
                        <div class="flex flex-col items-center gap-1">
                            <div class="bg-gradient-to-br from-blue-50 to-white p-1.5  rounded-full shadow-inner group-hover:shadow-md  transition-all duration-300"><img alt="lost" loading="lazy" width="40" height="40" decoding="async" data-nimg="1" class="object-contain w-7 h-7 drop-shadow-sm  group-hover:drop-shadow-md transition-all duration-300" src="{{ asset('hyd/sidebar/factory.png') }}" style="color: transparent;"></div>
                            <p class="text-xs text-center font-medium text-gray-700  group-hover:text-gray-900 transition-all duration-300">{{ __('HOME_PAGE_SIDEBAR_ICONS_CITIZEN_PORTAL') }}</p>
                        </div>
                    </a>
                    <a target="_blank" rel="noopener noreferrer" class="group block bg-white/95 backdrop-blur-sm rounded-xl p-1  shadow-lg border border-gray-200/80 hover:bg-white  hover:shadow-xl hover:scale-105 transition-all duration-300  w-[140px] relative hover:border-blue-200" title="{{ __('HOME_PAGE_SIDEBAR_ICONS_E_CHALAN') }}" href="https://mahatrafficechallan.gov.in/payechallan/PaymentService.htm?_qc=d0174c98ca6e30dff6c9db897d05c103">
                        <div class="flex flex-col items-center gap-1">
                            <div class="bg-gradient-to-br from-blue-50 to-white p-1.5  rounded-full shadow-inner group-hover:shadow-md  transition-all duration-300"><img alt="lost" loading="lazy" width="40" height="40" decoding="async" data-nimg="1" class="object-contain w-7 h-7 drop-shadow-sm  group-hover:drop-shadow-md transition-all duration-300" src="{{ asset('hyd/sidebar/e-challan.jpeg') }}" style="color: transparent;"></div>
                            <p class="text-xs text-center font-medium text-gray-700  group-hover:text-gray-900 transition-all duration-300">{{ __('HOME_PAGE_SIDEBAR_ICONS_E_CHALAN') }}</p>
                        </div>
                    </a>
                </div>
            </div>
        <!--<div class="preloader">
            <div class="preloaderIn">
                <img class="preloaderLogo first transition" src="{{ asset('images/mahaPolicelLogo2.jpg') }}" title="Maharashtra State Police" alt="Maharashtra State Police">
                <div class="governance ">
                    <h3 class="second transition">{{ __('SPLASH_SCREEN_TITLE') }}</h3>
                    <div class="governanceIn fifth transition mobileView">
                        <img src="{{ asset('images/dg_dattatray_karale.jpg') }}" title="{{ __('SPLASH_SCREEN_DG_DESGN') }}" alt="{{ __('SPLASH_SCREEN_DG_DESGN') }}">
                        <p class="preloader-font">{{ __('SPLASH_SCREEN_DG_NAME') }}</p>
                        <p>{{ __('SPLASH_SCREEN_DG_DESGN') }}</p>
                    </div>
                    <div class="governanceIn fourth transition mobileView">
                        <img src="{{ asset('images/dgp_rashmi_shukla.jpg') }}" title="{{ __('SPLASH_SCREEN_DGP_DESGN') }}" alt="{{ __('SPLASH_SCREEN_DGP_DESGN') }}">
                        <p class="preloader-font">{{ __('SPLASH_SCREEN_DGP_NAME') }}</p>
                        <p>{{ __('SPLASH_SCREEN_DGP_DESGN') }}</p>
                    </div>
                    <div class="governanceIn third transition cmIn">
                        <img src="{{ asset('images/devendra_fadanvis.jpg') }}" title="{{ __('SPLASH_SCREEN_CM_DESGN') }}" alt="{{ __('SPLASH_SCREEN_CM_DESGN') }}">
                        <p class="preloader-font">{{ __('SPLASH_SCREEN_CM_NAME') }}</p>
                        <p>{{ __('SPLASH_SCREEN_CM_DESGN') }}</p>
                    </div>
                    <div class="governanceIn fourth transition desktopView">
                        <img src="{{ asset('images/dgp_rashmi_shukla.jpg') }}" title="{{ __('SPLASH_SCREEN_DGP_DESGN') }}" alt="{{ __('SPLASH_SCREEN_DGP_DESGN') }}">
                        <p class="preloader-font">{{ __('SPLASH_SCREEN_DGP_NAME') }}</p>
                        <p>{{ __('SPLASH_SCREEN_DGP_DESGN') }}</p>
                    </div>
                    <div class="governanceIn fifth transition desktopView">
                        <img src="{{ asset('images/dg_dattatray_karale.jpg') }}" title="{{ __('SPLASH_SCREEN_DG_DESGN') }}" alt="{{ __('SPLASH_SCREEN_DG_DESGN') }}">
                        <p class="preloader-font">{{ __('SPLASH_SCREEN_DG_NAME') }}</p>
                        <p>{{ __('SPLASH_SCREEN_DG_DESGN') }}</p>
                    </div>
                </div>
            </div>
        </div>-->
            <div class="section__title" style="padding: 0px;">
                <style>
                    .elementor-counter .elementor-counter-number-wrapper{display:flex;font-size:69px;font-weight:600;line-height:1}.elementor-counter .elementor-counter-number-prefix,.elementor-counter .elementor-counter-number-suffix{flex-grow:1;white-space:pre-wrap}.elementor-counter .elementor-counter-number-prefix{text-align:right}.elementor-counter .elementor-counter-number-suffix{text-align:left}.elementor-counter .elementor-counter-title{text-align:center;font-size:19px;font-weight:400;line-height:2.5}
                </style>
                <div class="scroller" data-speed="slow">
                    <ul class="tag-list scroller__inner">
                        <li>
                            <div class="elementor-widget-wrap elementor-element-populated" style="height:88px;background-color: #EEC641; transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;width:250px">
                                <div class="elementor-element elementor-element-4b5edbd elementor-widget elementor-widget-counter" data-id="4b5edbd" data-element_type="widget" data-widget_type="counter.default">
                                    <div class="elementor-widget-container" style="margin: 0px 0px 0px 0px;padding: 13px 8px 8px 8px;background-color: #EEC641;border-radius: 13px 13px 13px 13px;">
                                        <div class="elementor-counter">
                                            <div class="elementor-counter-number-wrapper">
                                                <span class="elementor-counter-number-prefix" style="font-size: 26px;"></span>
                                                <span class="elementor-counter-number" style="font-size: 26px; color:#fff">{{ __('HOME_PAGE_HELPLINE_POLICE_NO') }}</span>
                                                <span class="elementor-counter-number-suffix" style="font-size: 26px;"></span>
                                            </div>
                                            <div class="elementor-counter-title" style="color:#fff;font-size:17px;">{{ __('HOME_PAGE_HELPLINE_POLICE_LABEL') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="elementor-widget-wrap elementor-element-populated" style="height:88px;background-color: #163269; transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;width:250px">
                                <div class="elementor-element elementor-element-c8bd8eb elementor-widget elementor-widget-counter" data-id="c8bd8eb" data-element_type="widget" data-widget_type="counter.default">
                                    <div class="elementor-widget-container" style="margin: 0px 0px 0px 0px;padding: 13px 8px 8px 8px;background-color: #163269;border-radius: 13px 13px 13px 13px;">
                                        <div class="elementor-counter">
                                            <div class="elementor-counter-number-wrapper">
                                                <span class="elementor-counter-number-prefix" style="font-size: 26px;"></span>
                                                <span class="elementor-counter-number" style="font-size: 26px; color:#fff">{{ __('HOME_PAGE_HELPLINE_FIRE_NO') }}</span>
                                                <span class="elementor-counter-number-suffix" style="font-size: 26px;"></span>
                                            </div>
                                            <div class="elementor-counter-title" style="color:#fff;font-size:17px;">{{ __('HOME_PAGE_HELPLINE_FIRE_LABEL') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="elementor-widget-wrap elementor-element-populated" style="height:88px;background-color: #EEC641; transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;width:250px">
                                <div class="elementor-element elementor-element-4b6cf69 elementor-widget elementor-widget-counter" data-id="4b6cf69" data-element_type="widget" data-widget_type="counter.default">
                                    <div class="elementor-widget-container" style="margin: 0px 0px 0px 0px;padding: 13px 8px 8px 8px;background-color: #EEC641;border-radius: 13px 13px 13px 13px;">
                                        <div class="elementor-counter">
                                            <div class="elementor-counter-number-wrapper">
                                                <span class="elementor-counter-number-prefix" style="font-size: 26px;"></span>
                                                <span class="elementor-counter-number"style="font-size: 26px; color:#fff">{{ __('HOME_PAGE_HELPLINE_AMBULANCE_NO') }}</span>
                                                <span class="elementor-counter-number-suffix" style="font-size: 26px;"></span>
                                            </div>
                                            <div class="elementor-counter-title" style="color:#fff;font-size:17px;">{{ __('HOME_PAGE_HELPLINE_AMBULANCE_LABEL') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="elementor-widget-wrap elementor-element-populated" style="height:88px;background-color: #163269; transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;width:250px">
                                <div class="elementor-element elementor-element-4b5edbd elementor-widget elementor-widget-counter" data-id="4b5edbd" data-element_type="widget" data-widget_type="counter.default">
                                    <div class="elementor-widget-container" style="margin: 0px 0px 0px 0px;padding: 13px 8px 8px 8px;background-color: #163269;border-radius: 13px 13px 13px 13px;">
                                        <div class="elementor-counter">
                                            <div class="elementor-counter-number-wrapper">
                                                <span class="elementor-counter-number-prefix" style="font-size: 26px;"></span>
                                                <span class="elementor-counter-number" style="font-size: 26px; color:#fff">{{ __('HOME_PAGE_HELPLINE_RAIL_ACCIDENT_NO') }}</span>
                                                <span class="elementor-counter-number-suffix" style="font-size: 26px;"></span>
                                            </div>
                                            <div class="elementor-counter-title" style="color:#fff;font-size:17px;">{{ __('HOME_PAGE_HELPLINE_RAIL_ACCIDENT_LABEL') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="elementor-widget-wrap elementor-element-populated" style="height:88px;background-color: #EEC641; transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;width:250px">
                                <div class="elementor-element elementor-element-c8bd8eb elementor-widget elementor-widget-counter" data-id="c8bd8eb" data-element_type="widget" data-widget_type="counter.default">
                                    <div class="elementor-widget-container" style="margin: 0px 0px 0px 0px;padding: 13px 8px 8px 8px;background-color: #EEC641;border-radius: 13px 13px 13px 13px;">
                                        <div class="elementor-counter">
                                            <div class="elementor-counter-number-wrapper">
                                                <span class="elementor-counter-number-prefix" style="font-size: 26px;"></span>
                                                <span class="elementor-counter-number" style="font-size: 26px; color:#fff">{{ __('HOME_PAGE_HELPLINE_CHILD_NO') }}</span>
                                                <span class="elementor-counter-number-suffix" style="font-size: 26px;"></span>
                                            </div>
                                            <div class="elementor-counter-title" style="color:#fff;font-size:17px;">{{ __('HOME_PAGE_HELPLINE_CHILD_LABEL') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="elementor-widget-wrap elementor-element-populated" style="height:88px;background-color: #163269; transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;width:250px">
                                <div class="elementor-element elementor-element-4b5edbd elementor-widget elementor-widget-counter" data-id="4b5edbd" data-element_type="widget" data-widget_type="counter.default">
                                    <div class="elementor-widget-container" style="margin: 0px 0px 0px 0px;padding: 13px 8px 8px 8px;background-color: #163269;border-radius: 13px 13px 13px 13px;">
                                        <div class="elementor-counter">
                                            <div class="elementor-counter-number-wrapper">
                                                <span class="elementor-counter-number-prefix" style="font-size: 26px;"></span>
                                                <span class="elementor-counter-number" style="font-size: 26px; color:#fff">{{ __('HOME_PAGE_HELPLINE_WOMEN_NO') }}</span>
                                                <span class="elementor-counter-number-suffix" style="font-size: 26px;"></span>
                                            </div>
                                            <div class="elementor-counter-title" style="color:#fff;font-size:17px;">{{ __('HOME_PAGE_HELPLINE_WOMEN_LABEL') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="elementor-widget-wrap elementor-element-populated" style="height:88px;background-color: #EEC641; transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;width:250px">
                                <div class="elementor-element elementor-element-c8bd8eb elementor-widget elementor-widget-counter" data-id="c8bd8eb" data-element_type="widget" data-widget_type="counter.default">
                                    <div class="elementor-widget-container" style="margin: 0px 0px 0px 0px;padding: 13px 8px 8px 8px;background-color: #EEC641;border-radius: 13px 13px 13px 13px;">
                                        <div class="elementor-counter">
                                            <div class="elementor-counter-number-wrapper">
                                                <span class="elementor-counter-number-prefix" style="font-size: 26px;"></span>
                                                <span class="elementor-counter-number" style="font-size: 26px; color:#fff">{{ __('HOME_PAGE_HELPLINE_CYBER_NO') }}</span>
                                                <span class="elementor-counter-number-suffix" style="font-size: 26px;"></span>
                                            </div>
                                            <div class="elementor-counter-title" style="color:#fff;font-size:17px;">{{ __('HOME_PAGE_HELPLINE_CYBER_LABEL') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="elementor-widget-wrap elementor-element-populated" style="height:88px;background-color: #163269; transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;width:250px">
                                <div class="elementor-element elementor-element-4b6cf69 elementor-widget elementor-widget-counter" data-id="4b6cf69" data-element_type="widget" data-widget_type="counter.default">
                                    <div class="elementor-widget-container" style="margin: 0px 0px 0px 0px;padding: 13px 8px 8px 8px;background-color: #163269;border-radius: 13px 13px 13px 13px;">
                                        <div class="elementor-counter">
                                            <div class="elementor-counter-number-wrapper">
                                                <span class="elementor-counter-number-prefix" style="font-size: 26px;"></span>
                                                <span class="elementor-counter-number"style="font-size: 26px; color:#fff">{{ __('HOME_PAGE_HELPLINE_SENIOR_NO') }}</span>
                                                <span class="elementor-counter-number-suffix" style="font-size: 26px;"></span>
                                            </div>
                                            <div class="elementor-counter-title" style="color:#fff;font-size:17px;">{{ __('HOME_PAGE_HELPLINE_SENIOR_LABEL') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <section class="whats_new p-0">
                <div class="common_container">
                    <div class="row">
                        <div class="col-md-12" id="functionaryID">
                            <div class="Key_Functionary">
                                <div class="minister_box me-5 wow zoomIn" data-wow-delay="0.3s">
                                    <div class="outside">
                                        <div class="inside"><img src="{{ asset('hyd/person/devendra_fadanvis.png') }}" class="key_fun_img" alt="Image of {{ __('SPLASH_SCREEN_CM_NAME') }}" title="{{ __('SPLASH_SCREEN_CM_NAME') }}"></div>
                                    </div>
                                    <div class="cm_name">
                                        <p>{{ __('SPLASH_SCREEN_CM_NAME') }}</p>
                                        <span>{{ __('SPLASH_SCREEN_CM_DESGN') }}</span>
                                    </div>
                                </div>
                                <div class="minister_box me-5 wow zoomIn" data-wow-delay="0.3s">
                                    <div class="outside">
                                        <div class="inside"><img src="{{ asset('hyd/person/dgp_rashmi_shukla.png') }}" class="key_fun_img" alt="Image of {{ __('SPLASH_SCREEN_DGP_NAME') }}" title="{{ __('SPLASH_SCREEN_DGP_NAME') }}"></div>
                                    </div>
                                    <div class="cm_name">
                                        <p>{{ __('SPLASH_SCREEN_DGP_NAME') }}</p>
                                        <span>{{ __('SPLASH_SCREEN_DGP_DESGN') }}</span>
                                    </div>
                                </div>
                                <div class="minister_box me-5 wow zoomIn" data-wow-delay="0.3s">
                                    <div class="outside">
                                        <div class="inside"><img src="{{ asset('hyd/person/dg_dattatray_karale.png') }}" class="key_fun_img" alt="Image of {{ __('SPLASH_SCREEN_DG_NAME') }}" title="{{ __('SPLASH_SCREEN_DG_NAME') }}"></div>
                                    </div>
                                    <div class="cm_name">
                                        <p>{{ __('SPLASH_SCREEN_DG_NAME') }}</p>
                                        <span>{{ __('SPLASH_SCREEN_DG_DESGN') }}</span>
                                    </div>
                                </div>
                                <div class="minister_box me-5 wow zoomIn" data-wow-delay="0.3s">
                                    <div class="outside">
                                        <div class="inside"><img src="{{ asset('hyd/person/drmaheshwarreddy.png') }}" class="key_fun_img" alt="Image of {{ __('HOME_PAGE_SP_DESK_SP_NAME') }}" title="{{ __('HOME_PAGE_SP_DESK_SP_NAME') }}"></div>
                                    </div>
                                    <div class="cm_name">
                                        <p>{{ __('HOME_PAGE_SP_DESK_SP_NAME') }}</p>
                                        <span>{{ __('HOME_PAGE_SP_DESK_SP_DESG') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-info offer" id="spMessageDiv">
                <div class="section__title">
                    <h2 class="section__titletext" style="color: #FFF;">{{ __('HOME_PAGE_SP_DESK_TITLE_FROM') }} <label style="font-size: 1.6rem;font-weight: 700;color: #FFC404;text-align: center;margin-bottom: 1rem;">{{ __('HOME_PAGE_SP_DESK_TITLE_SP_DESK') }}</label></h2>
                    <hr class="section__titlehr" style="background-color: #FFC404;">
                </div>
                <div class="row mx-0 mt-10">
                    <div class="col-md-4"><img style="box-shadow: 3px 3px 3px 3px rgba(0.3, 0, 0, 0.6);" src="{{ asset('sppic/drmaheshwarreddy.jpg') }}" alt="SP" class="section-info__image"></div>
                    <div class="col-md-8">
    <p class="section-info__paragraph" style="font-family: 'Poppins', 'sans-serif'; font-size: 1rem; line-height: 1.7;text-indent: 40px;">
    {{ __('HOME_PAGE_SP_DESK_PARA_1') }}
    </p><br>
    <p class="section-info__paragraph" style="font-family: 'Poppins', 'sans-serif'; font-size: 1rem; line-height: 1.7;text-indent: 40px;">
    {{ __('HOME_PAGE_SP_DESK_PARA_2') }}
    </p>
    <p class="section-info__from mt-20" style="font-family: 'Poppins', 'sans-serif'; font-weight: 700;">{{ __('HOME_PAGE_SP_DESK_SP_NAME') }}</p>
    <p class="section-info__from mt-10" style="font-family: 'Poppins', 'sans-serif'; font-weight: 700;">{{ __('HOME_PAGE_SP_DESK_SP_DESG') }}</p>
</div>

                </div>
            </section>
            <!--<section class="key_fun_section">
                <div class="container_common">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <div class="section__title">
                                <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('HOME_PAGE_SP_DESK_TITLE_FROM') }} <label style="font-size: 1.6rem;font-weight: 700;color: #FFC404;text-align: center;margin-bottom: 1rem;">{{ __('HOME_PAGE_SP_DESK_TITLE_SP_DESK') }}</label></h2>
                                <hr class="section__titlehr" style="background-color: #FFC404;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="Key_functionary">
                                <div class="Key_functionary_box">
                                    <ul>
                                        <li class="cm_name1">
                                            <svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="220" height="220" viewBox="0 0 327 337" fill="none">
                                                <path d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z" fill="#1a6ed2"></path>
                                            </svg>
                                            <div class="key_border"><span><img src="{{ asset('sppic/drmaheshwarreddy.jpg') }}" alt=""></span></div>
                                            <h5>{{ __('HOME_PAGE_SP_DESK_SP_NAME') }}</h5>
                                            <h6>{{ __('HOME_PAGE_SP_DESK_SP_DESG') }}</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <p class="" style="font-family: 'Poppins', 'sans-serif';font-size: 1rem;text-align: justify;line-height:2em;">{{ __('HOME_PAGE_SP_DESK_PARA_1') }}</p>
                            <p class="" style="font-family: 'Poppins', 'sans-serif';font-size: 1rem;text-align: justify;line-height:2em;">{{ __('HOME_PAGE_SP_DESK_PARA_2') }}</p>
                        </div>
                    </div>
                </div>
            </section>-->
            <div class="bg-gradient-to-r from-blue-700 via-blue-800 to-blue-900 py-6 shadow-lg relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full transform -translate-x-16 -translate-y-32"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full transform translate-x-12 translate-y-16"></div>
                <div class="max-w-7xl mx-auto px-4 relative z-10">
                    <div class="flex flex-col md:flex-row items-center justify-between">
                        <div class="flex items-center gap-4 md:mb-0">
                            <div class="bg-white/20 p-3 rounded-lg shadow-inner relative overflow-hidden group">
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-400/30 to-blue-300/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="text-white text-3xl relative z-10" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-bold text-xl md:text-2xl mb-1">{{ __('HOME_PAGE_100_DAY_TEXT') }}</h3>
                            </div>
                        </div>
                        <a href="/100-day-program" class="btn btn-primary btn-lg p-10 font-20" tabindex="1" id="submitBtnId1">{{ __('HOME_PAGE_100_DAY_BUTTON') }} &nbsp; <i class="fa fa-hand-o-right"></i></a>
                    </div>
                </div>
            </div>
            <main class="gutterSpace cust-bg-9">
                <div class="asideSection col12 option_item">
                    <div class="row row-xs">
                            <div class="col-lg-2 col-md-2 col-sm-12"></div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <h2 class="section__titletext" style="margin-top:5px;color: rgb(10, 36, 99);font-family: 'Poppins', 'sans-serif'; font-weight: 700;">{{ __('HOME_PAGE_SEARCH_PS_TITLE') }}</h2>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="relative w-full max-w-[320px] mx-auto sm:w-80">
                                    <label for="group" class="absolute -top-2 left-2 bg-white px-1 text-xs text-gray-600">{{ __('HOME_PAGE_SEARCH_PS_PS') }}</label>
                                    <select id="policeStationBox1" name="policeStationBox1" title="select police station" class="know-ps-select w-full rounded-md border border-gray-300 bg-white py-2.5 sm:px-4 sm:py-3 sm:text-base text-gray-700 shadow-sm transition-all duration-200 ease-in-out focus:border-[#0245A7] focus:outline-none focus:ring-2 focus:ring-blue-200">
                                        <option value="" class="text-gray-500" title="{{ __('HOME_PAGE_SEARCH_PS_SELECT_PS') }}">{{ __('HOME_PAGE_SEARCH_PS_SELECT_PS') }}</option>
                                            @if(count($data['stationList']))
                                                @foreach($data['stationList'] as $stnDetail)
                                                    <option value="{{ $stnDetail->MPS_ID }}">@if(Lang::locale() == 'mr') {{ $stnDetail->MPS_Name_MR }} @else {{ $stnDetail->MPS_Name }} @endif</option>
                                                @endforeach
                                            @endif
                                    </select>
                                </div>
                                <!-- <div class="rightNavDropdown" data-aos="fade-left">
                                    <select class="home-ds-select col6" id="policeStationBox1">
                                        <option value="" title="{{ __('HOME_PAGE_SEARCH_PS_SELECT_PS') }}">{{ __('HOME_PAGE_SEARCH_PS_SELECT_PS') }}</option>
                                            @if(count($data['stationList']))
                                                @foreach($data['stationList'] as $stnDetail)
                                                    <option value="{{ $stnDetail->MPS_ID }}">  
                                                    @if(Lang::locale() == 'mr') {{ $stnDetail->MPS_Name_MR }} @else {{ $stnDetail->MPS_Name }} @endif
                                                    </option>
                                                @endforeach
                                            @endif
                                    </select>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <section class="section-notifications">
                <div class="row mx-0">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 mahaMap">
                        <svg style="width:100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3600 2400">
                            <style>
                                .image-mapper-shape {
                                    fill: rgba(0, 0, 0, 0);
                                }
                                g:hover .image-mapper-shape {
                                    stroke: white;
                                    stroke-width: 2px;
                                    <!-- opacity: 20%; -->
                                    opacity: 0.2;
                                    fill: #180054;
                                }
                            </style>
                                    
                            <image xlink:href="hyd/Jalgaon Blank Map Number.png" style="width: 3600px;"></image>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=22" target="_blank" xlink:title="30 Mehunbare">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="1" points="177,1871,196,1848,231,1855,263,1845,285,1867,301,1855,327,1858,352,1864,371,1867,409,1845,416,1829,409,1801,419,1775,438,1772,454,1782,467,1801,495,1794,511,1785,527,1772,518,1740,511,1712,521,1693,546,1702,575,1702,572,1673,591,1670,616,1658,610,1632,600,1604,591,1572,584,1537,553,1530,524,1515,495,1502,479,1486,479,1445,502,1441,521,1445,511,1419,502,1391,499,1356,473,1349,444,1359,413,1378,413,1410,406,1429,381,1486,330,1486,308,1508,276,1515,250,1524,222,1527,181,1537,174,1591,155,1613,146,1632,149,1667,146,1689,123,1702,104,1712,104,1743,123,1762,123,1785,107,1813,133,1804,152,1813,155,1839,161,1858"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=21" target="_blank" xlink:title="31 Bhadgaon">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="2" points="518,1445,537,1448,553,1445,568,1439,584,1432,584,1429,597,1413,613,1400,632,1397,654,1384,670,1388,686,1400,702,1391,699,1369,715,1362,743,1362,762,1356,785,1343,817,1330,829,1308,832,1276,845,1257,864,1257,896,1251,912,1264,918,1280,921,1299,941,1299,969,1299,988,1305,1004,1311,1023,1305,1042,1299,1065,1289,1065,1305,1071,1324,1084,1337,1096,1349,1090,1365,1071,1381,1049,1388,1033,1400,1017,1423,1011,1445,1001,1464,976,1467,953,1470,934,1493,925,1508,912,1524,896,1547,877,1566,852,1578,820,1588,797,1610,785,1636,766,1648,728,1667,728,1696,721,1712,699,1686,673,1683,648,1677,626,1677,619,1648,607,1617,597,1591,594,1562,581,1534,556,1531,534,1515,502,1512,486,1496,479,1473,479,1451,495,1439,514,1448"></polygon>
                                </g>
                            </a>
                            <a xlink:title="8,9,19 Bhusawal" id="bhusawalPSMain">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="3" points="1662,706,1655,721,1671,747,1684,760,1690,772,1703,782,1732,791,1725,807,1728,823,1725,849,1703,849,1677,852,1662,868,1658,890,1665,906,1652,918,1655,938,1674,941,1684,953,1681,973,1684,988,1690,1008,1700,1023,1716,1023,1722,1039,1741,1039,1757,1036,1779,1030,1795,1030,1811,1036,1814,1055,1817,1074,1833,1065,1852,1068,1871,1074,1881,1055,1874,1027,1894,1023,1913,1014,1932,1014,1944,1001,1941,976,1935,963,1922,938,1909,912,1906,890,1916,874,1932,877,1935,858,1932,833,1951,817,1963,798,1979,782,1970,760,1948,763,1919,760,1894,760,1868,757,1843,760,1817,760,1792,744,1763,734,1738,728,1713,718,1687,703"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=20" target="_blank" xlink:title="29 Chalisgaon Rural">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="4" points="177,1874,196,1852,228,1861,263,1845,289,1871,305,1861,330,1864,365,1867,384,1867,400,1893,422,1899,444,1896,473,1902,495,1912,530,1918,546,1906,562,1893,578,1883,594,1867,603,1848,629,1842,626,1804,619,1782,613,1750,603,1734,578,1747,568,1766,540,1763,518,1756,518,1724,518,1702,568,1705,572,1680,588,1674,597,1658,613,1657,626,1669,635,1680,661,1680,677,1683,699,1689,715,1709,715,1734,743,1750,737,1804,750,1817,753,1839,788,1847,775,1873,747,1892,712,1887,693,1906,673,1931,677,1950,686,1966,693,1988,699,2017,699,2044,693,2066,686,2098,664,2106,635,2093,642,2065,616,2052,594,2052,581,2074,584,2114,553,2101,524,2077,502,2066,479,2068,483,2093,492,2115,495,2131,473,2140,454,2109,438,2114,419,2127,400,2144,416,2175,381,2181,349,2171,327,2175,298,2175,257,2162,250,2147,250,2119,254,2093,263,2068,247,2039,247,2011,235,1979,215,1956,206,1942,219,1928,206,1906,187,1890,184,1876,181,1879"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=29" target="_blank" xlink:title="27 Parola">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="5" points="375,1012,381,1024,394,1034,410,1040,413,1059,420,1075,426,1088,429,1104,429,1120,426,1136,439,1145,448,1158,461,1174,458,1193,439,1190,426,1206,426,1228,432,1244,435,1257,448,1269,458,1285,474,1304,477,1326,464,1342,483,1355,493,1368,502,1384,499,1403,499,1419,515,1425,518,1441,528,1457,547,1450,566,1444,582,1438,598,1419,617,1406,642,1406,658,1393,671,1406,690,1409,706,1393,706,1371,728,1371,744,1377,763,1368,775,1355,795,1339,817,1339,826,1314,833,1285,845,1269,868,1266,896,1266,887,1237,893,1209,906,1184,909,1171,915,1139,925,1111,928,1088,941,1063,934,1037,909,1018,903,986,886,949,868,926,845,904,820,897,810,916,779,904,756,916,728,910,709,923,681,926,658,939,633,920,620,929,601,920,576,914,569,936,550,942,522,936,493,939,471,945,452,955,430,952,423,977,401,974,376,984,375,1003,378,993,391,980"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=19" target="_blank" xlink:title="28 Chalisgaon City">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="6" points="409,1841,409,1819,403,1793,416,1774,432,1768,448,1774,460,1787,473,1796,489,1793,505,1781,524,1774,534,1758,562,1758,581,1736,603,1730,613,1746,616,1771,629,1787,626,1809,632,1841,603,1841,597,1866,575,1876,562,1898,546,1914,518,1924,495,1905,473,1898,438,1895,403,1889,384,1860,400,1860"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=37" target="_blank" xlink:title="37 Fattepur">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="7" points="1820,1406,1817,1425,1795,1448,1808,1460,1824,1464,1840,1479,1849,1495,1855,1511,1865,1524,1881,1527,1897,1530,1903,1549,1906,1565,1919,1553,1935,1546,1951,1553,1954,1572,1954,1591,1970,1591,1986,1603,1986,1622,1986,1642,1979,1661,1998,1661,2021,1661,2037,1673,2059,1680,2065,1654,2065,1635,2059,1607,2078,1610,2084,1629,2094,1645,2110,1651,2122,1632,2135,1616,2135,1591,2110,1584,2097,1556,2110,1543,2122,1553,2138,1559,2157,1556,2176,1553,2183,1533,2189,1508,2183,1479,2176,1464,2176,1438,2173,1413,2173,1387,2189,1378,2205,1368,2202,1340,2183,1336,2160,1324,2148,1305,2164,1298,2170,1276,2173,1247,2151,1235,2129,1231,2110,1241,2097,1254,2071,1257,2052,1260,2037,1286,2021,1298,2017,1320,2021,1340,2027,1359,2037,1375,2021,1387,1989,1390,1963,1387,1938,1387,1919,1397,1900,1400,1875,1400,1843,1400"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=23" target="_blank" xlink:title="32 Kasoda">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="8" points="893,1241,909,1254,915,1267,921,1289,937,1298,956,1305,976,1305,991,1311,1011,1305,1026,1302,1046,1298,1065,1292,1065,1311,1071,1327,1084,1337,1096,1349,1115,1356,1122,1337,1135,1321,1150,1305,1166,1292,1166,1263,1160,1232,1173,1213,1189,1197,1201,1174,1217,1168,1217,1143,1195,1143,1173,1152,1170,1138,1141,1133,1125,1149,1125,1168,1112,1181,1093,1174,1071,1165,1049,1165,1036,1143,1020,1117,998,1122,998,1097,956,1073,937,1079,918,1085,918,1111,918,1133,912,1159,902,1178,890,1203,887,1219"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=12" target="_blank" xlink:title="17 Nimbhora">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="9" points="2068,750,2084,740,2107,731,2119,721,2129,706,2145,690,2161,696,2183,706,2202,706,2202,687,2221,674,2234,664,2243,658,2265,648,2285,632,2304,620,2285,601,2275,585,2278,569,2297,575,2316,560,2294,543,2281,509,2259,503,2250,528,2227,528,2205,534,2196,508,2199,493,2183,489,2161,473,2142,470,2119,467,2094,467,2091,486,2072,496,2072,515,2084,543,2091,569,2072,578,2056,594,2053,620,2053,639,2043,655,2037,674,2046,696,2059,709,2065,725,2075,741"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=30" target="_blank" xlink:title="26 Erandol">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="10" points="931,1079,950,1079,966,1066,969,1085,988,1088,998,1101,988,1123,1004,1117,1030,1136,1039,1152,1049,1164,1065,1161,1084,1168,1096,1177,1122,1181,1125,1164,1128,1142,1144,1136,1163,1133,1173,1145,1192,1142,1208,1145,1224,1145,1230,1123,1246,1110,1252,1091,1259,1072,1265,1050,1284,1044,1303,1031,1319,1018,1319,993,1319,964,1329,942,1348,934,1344,916,1316,904,1294,904,1294,923,1281,939,1255,932,1233,929,1220,907,1201,913,1179,910,1157,894,1144,875,1122,869,1106,882,1096,897,1084,907,1065,897,1033,897,1030,913,1020,929,995,939,1001,955,988,967,969,977,953,990,937,999,928,1018,934,1034,944,1050"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=24" target="_blank" xlink:title="33 Pachora">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="11" points="756,1816,769,1800,785,1807,804,1807,820,1813,823,1791,836,1775,855,1768,871,1772,867,1746,880,1730,890,1711,896,1689,909,1667,925,1632,941,1638,960,1641,979,1638,1001,1635,1020,1629,1023,1603,1042,1603,1061,1606,1081,1610,1096,1594,1106,1603,1122,1600,1141,1600,1144,1575,1141,1549,1138,1521,1179,1528,1195,1521,1182,1486,1192,1467,1208,1463,1220,1473,1236,1473,1255,1479,1255,1457,1259,1435,1236,1428,1217,1409,1211,1384,1230,1381,1249,1374,1271,1374,1271,1349,1287,1339,1300,1349,1319,1358,1338,1355,1351,1336,1376,1337,1370,1304,1389,1304,1408,1288,1389,1260,1360,1261,1341,1241,1319,1219,1294,1215,1271,1206,1249,1193,1227,1177,1205,1168,1195,1190,1176,1209,1166,1231,1166,1260,1166,1285,1157,1308,1138,1308,1128,1339,1112,1349,1115,1356,1084,1368,1061,1381,1039,1390,1030,1412,1014,1435,1014,1457,998,1474,976,1463,953,1470,934,1486,921,1509,909,1536,890,1552,861,1575,836,1581,813,1598,788,1606,778,1632,772,1652,756,1658,734,1658,728,1683,728,1702,715,1714,721,1737,750,1743,743,1762,740,1788,734,1807,743,1807,743,1807"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=25" target="_blank" xlink:title="34 Pimpalgaon Hareshwar">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="12" points="1096,1600,1112,1599,1131,1600,1147,1591,1144,1565,1141,1540,1144,1518,1163,1521,1179,1527,1195,1511,1185,1489,1179,1459,1214,1464,1230,1476,1252,1480,1262,1460,1262,1438,1239,1432,1224,1424,1214,1384,1233,1384,1255,1378,1278,1375,1271,1352,1290,1343,1306,1352,1322,1362,1341,1359,1351,1340,1373,1340,1373,1308,1392,1308,1408,1291,1430,1289,1449,1289,1465,1298,1478,1311,1487,1324,1497,1343,1491,1362,1481,1384,1481,1403,1487,1429,1465,1441,1440,1441,1411,1432,1408,1454,1405,1476,1399,1494,1414,1513,1386,1530,1382,1546,1389,1565,1398,1578,1395,1594,1373,1603,1373,1623,1379,1645,1373,1664,1357,1677,1338,1696,1322,1712,1300,1691,1265,1672,1255,1691,1265,1710,1265,1736,1246,1723,1243,1704,1220,1704,1201,1713,1211,1729,1195,1745,1176,1726,1154,1723,1150,1697,1147,1669,1144,1637,1112,1627"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=13" target="_blank" xlink:title="16 Faizpur">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="13" points="1802,414,1798,430,1802,446,1798,465,1789,487,1783,506,1770,538,1767,554,1763,573,1760,589,1757,611,1738,621,1738,640,1751,652,1757,665,1773,668,1776,684,1779,700,1786,716,1789,732,1811,757,1827,764,1843,757,1862,757,1878,757,1894,764,1903,770,1919,764,1916,748,1916,719,1916,716,1916,694,1929,690,1948,684,1954,678,1960,652,1960,627,1964,601,1960,586,1980,570,1983,551,1967,538,1954,531,1941,522,1935,509,1935,487,1935,468,1932,449,1941,427,1926,423,1900,433,1878,436,1843,423,1811,411"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=34" target="_blank" xlink:title="22 Adawad">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="14" points="1408,633,1427,636,1430,627,1446,611,1433,610,1417,610,1398,601,1385,586,1379,566,1382,534,1392,502,1395,474,1404,439,1420,410,1423,382,1420,350,1427,308,1420,280,1423,248,1420,226,1395,207,1360,188,1344,191,1319,184,1293,181,1274,178,1252,178,1255,194,1261,213,1258,232,1230,230,1204,233,1188,242,1169,258,1166,280,1157,305,1128,299,1138,322,1131,347,1125,341,1109,360,1109,382,1099,394,1093,420,1083,432,1090,448,1087,467,1093,486,1090,496,1115,512,1103,537,1112,553,1109,569,1128,575,1160,575,1182,566,1207,557,1246,566,1249,579,1265,595,1287,595,1309,589,1319,608,1341,621,1360,617,1373,627,1389,630,1401,624,1430,627,1446,611"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=15" target="_blank" xlink:title="12 Muktainagar">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="15" points="2107,722,2123,732,2132,754,2132,779,2138,805,2145,821,2154,837,2154,865,2157,888,2164,907,2154,922,2161,945,2180,951,2202,954,2227,967,2250,957,2278,954,2310,957,2329,983,2348,973,2364,957,2370,935,2374,922,2386,916,2405,907,2415,891,2437,875,2450,846,2453,814,2475,830,2501,840,2510,853,2548,862,2577,878,2609,900,2634,926,2647,945,2679,948,2717,957,2755,961,2783,926,2818,913,2831,865,2837,846,2850,818,2831,779,2831,735,2802,738,2771,729,2736,738,2685,732,2663,744,2644,741,2628,722,2590,716,2555,719,2523,716,2494,713,2472,729,2462,719,2469,690,2437,678,2418,668,2402,652,2412,630,2393,601,2367,592,2374,573,2399,560,2434,576,2462,576,2469,541,2456,528,2466,512,2447,487,2450,474,2424,465,2412,474,2412,497,2399,512,2374,512,2351,509,2342,538,2335,563,2300,563,2278,573,2281,592,2291,611,2269,627,2256,646,2221,665,2189,690,2157,684,2123,697"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=14" target="_blank" xlink:title="19 Yawal">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="16" points="1411,214,1420,230,1423,245,1420,268,1423,287,1423,309,1414,334,1420,350,1423,366,1426,385,1414,423,1404,439,1388,462,1388,477,1385,493,1385,519,1385,538,1379,557,1376,576,1382,595,1395,605,1423,601,1433,611,1414,621,1423,636,1436,649,1461,662,1490,671,1512,652,1535,649,1560,662,1573,681,1595,687,1611,671,1627,671,1633,687,1643,703,1662,716,1677,710,1700,710,1716,719,1722,735,1741,729,1760,738,1779,741,1801,754,1805,729,1789,710,1782,684,1770,678,1770,665,1751,659,1744,627,1760,621,1770,566,1786,522,1795,487,1814,468,1805,420,1805,382,1811,341,1817,322,1830,296,1805,271,1792,239,1776,204,1741,175,1703,185,1659,188,1617,204,1573,201,1541,195,1528,179,1503,175,1471,182,1443,195"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=17" target="_blank" xlink:title="14 Varangaon">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="17" points="2145,811,2132,779,2135,751,2113,729,2081,741,2049,748,2018,748,1980,767,1967,783,1954,799,1938,818,1929,868,1913,875,1903,897,1913,935,1941,970,1983,967,1980,996,1964,1008,1980,1024,2002,1043,2014,1015,2037,989,2024,970,2034,945,2049,948,2056,977,2046,996,2072,1008,2097,1005,2100,983,2116,983,2126,951,2129,926,2157,932,2167,938,2173,910,2161,875,2157,843,2148,837,2145,814"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=18" target="_blank" xlink:title="15 Savda">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="18" points="1980,767,1999,760,2018,748,2040,751,2072,754,2075,729,2075,703,2059,690,2043,684,2043,665,2053,646,2049,614,2065,598,2072,579,2094,576,2084,557,2084,528,2075,500,2091,487,2100,468,2094,433,2097,398,2056,382,2011,398,1992,404,1967,417,1941,427,1922,427,1929,446,1935,481,1932,512,1954,528,1973,547,1957,570,1954,598,1957,636,1951,668,1922,690,1913,716,1910,757,1935,764,1970,770"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=11" target="_blank" xlink:title="18 Raver">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="19" points="2354,245,2370,268,2377,296,2386,325,2389,347,2412,360,2421,376,2440,411,2424,427,2412,446,2418,512,2351,506,2342,563,2313,570,2310,547,2285,547,2275,512,2259,506,2250,531,2227,528,2196,535,2189,512,2205,493,2170,484,2142,468,2091,471,2091,401,2053,385,2011,401,1976,417,1929,433,1906,430,1837,430,1795,411,1798,357,1814,303,1808,280,1783,249,1786,226,1767,195,1814,185,1859,195,1900,191,1929,182,1938,191,1960,169,1999,166,2024,182,2056,179,2091,182,2123,179,2151,207,2208,220,2234,223,2256,245,2335,207"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=16" target="_blank" xlink:title="12 Bodwad">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="20" points="2320,1126,2335,1101,2367,1069,2335,1037,2307,1015,2323,977,2316,951,2285,945,2246,951,2211,948,2177,945,2157,922,2132,916,2116,951,2107,973,2097,986,2081,1002,2053,996,2059,967,2053,938,2024,951,2018,967,2030,989,2008,1015,2005,1037,1964,1011,1980,989,1980,964,1948,964,1935,999,1887,1018,1865,1034,1878,1059,1900,1085,1913,1110,1932,1097,1967,1107,1999,1123,2030,1139,2049,1161,2068,1180,2068,1202,2097,1209,2119,1224,2148,1250,2173,1266,2208,1256,2250,1259,2262,1224,2269,1193,2297,1167"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=27" target="_blank" xlink:title="35 Pahur">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="21" points="1389,1564,1401,1577,1420,1589,1433,1570,1452,1574,1471,1583,1497,1586,1522,1580,1509,1554,1525,1539,1538,1548,1560,1561,1582,1554,1598,1535,1605,1513,1598,1485,1611,1469,1633,1465,1652,1472,1674,1481,1668,1507,1662,1529,1665,1551,1678,1561,1697,1554,1713,1558,1719,1574,1738,1570,1757,1567,1763,1583,1763,1602,1763,1621,1773,1637,1789,1628,1811,1618,1817,1634,1821,1653,1840,1647,1856,1656,1878,1663,1900,1659,1903,1640,1897,1628,1897,1615,1906,1593,1903,1570,1910,1542,1884,1532,1884,1516,1862,1526,1849,1497,1843,1472,1821,1469,1798,1456,1811,1434,1821,1415,1789,1408,1789,1380,1783,1354,1776,1338,1763,1319,1763,1303,1744,1294,1729,1287,1706,1303,1687,1313,1671,1306,1671,1294,1659,1287,1649,1265,1640,1249,1617,1233,1608,1240,1589,1252,1563,1256,1547,1262,1532,1268,1509,1278,1497,1291,1484,1303,1484,1316,1490,1332,1490,1354,1484,1376,1477,1399,1481,1421,1452,1443,1427,1437,1404,1440,1404,1469,1395,1497,1411,1513,1382,1532,1379,1548,1385,1554,1395,1574"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=26" target="_blank" xlink:title="36 Jamner">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="22" points="1983,1109,2002,1116,2018,1125,2037,1135,2043,1154,2062,1163,2062,1179,2059,1198,2075,1202,2094,1202,2107,1217,2129,1227,2113,1243,2103,1259,2081,1265,2056,1265,2043,1281,2021,1291,2018,1316,2018,1335,2021,1354,2030,1367,2034,1386,2018,1395,1995,1405,1967,1395,1938,1392,1916,1395,1894,1408,1871,1405,1846,1408,1824,1415,1798,1415,1783,1405,1776,1380,1776,1354,1776,1341,1760,1326,1754,1306,1735,1291,1706,1300,1687,1313,1665,1303,1655,1294,1646,1268,1649,1249,1633,1249,1608,1240,1595,1256,1570,1262,1547,1259,1522,1272,1497,1291,1474,1306,1449,1300,1427,1291,1401,1281,1385,1256,1392,1230,1408,1217,1430,1208,1452,1198,1465,1179,1484,1163,1490,1138,1484,1109,1490,1087,1512,1074,1535,1074,1560,1074,1576,1078,1598,1078,1624,1078,1649,1071,1674,1059,1703,1059,1725,1039,1763,1030,1786,1020,1805,1030,1821,1062,1865,1059,1900,1074,1913,1094,1935,1087"></polygon>
                                </g>
                            </a>
                            <a id="jalgaonPSMain" xlink:title="1,2,3,4,5,6,7 Jalgaon Division">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="23" points="1366,610,1389,617,1408,620,1427,626,1439,639,1455,658,1477,661,1506,658,1525,642,1541,645,1560,655,1573,668,1586,683,1582,712,1589,731,1598,747,1586,763,1560,769,1557,792,1547,826,1541,855,1535,871,1509,877,1506,893,1519,909,1547,922,1551,960,1592,995,1592,1005,1598,1033,1598,1055,1557,1062,1547,1024,1525,1046,1528,1084,1493,1081,1487,1119,1490,1144,1484,1170,1471,1183,1455,1205,1417,1217,1392,1237,1389,1252,1350,1262,1331,1240,1306,1224,1268,1214,1242,1189,1217,1173,1223,1138,1246,1116,1255,1087,1258,1062,1290,1039,1319,1017,1319,979,1331,947,1354,928,1354,900,1344,871,1350,839,1344,801,1341,782,1338,763,1319,757,1312,718,1284,709,1300,690,1290,674,1271,680,1268,655,1246,648,1220,648,1204,658,1179,626,1179,645,1147,661,1125,677,1103,671,1083,680,1071,668,1042,664,1023,642,988,614,1045,626,1055,604,1112,563,1176,563,1236,556,1265,585,1312,594"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=10" target="_blank" xlink:title="11 Nashirabad">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="24" points="1725,807,1722,846,1687,846,1662,868,1659,896,1646,922,1662,935,1681,938,1678,970,1684,998,1690,1014,1713,1024,1725,1036,1725,1052,1703,1062,1671,1062,1636,1081,1601,1078,1560,1081,1528,1078,1519,1049,1547,1024,1557,1043,1576,1062,1595,1049,1601,1036,1586,1014,1589,992,1573,970,1551,954,1547,922,1522,919,1509,896,1497,881,1509,868,1528,871,1535,833,1551,807,1551,760,1576,757,1576,747,1592,744,1576,712,1576,680,1589,690,1605,668,1624,671,1655,709,1662,747,1700,776,1729,779"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=32" target="_blank" xlink:title="20 Chopda City">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="25" points="995,273,988,353,960,353,963,337,931,321,925,350,899,343,877,401,874,420,861,439,836,439,832,467,845,480,839,512,861,540,852,553,874,566,899,566,925,556,950,547,956,528,975,534,979,540,1007,553,1036,525,1077,544,1087,547,1106,540,1112,525,1118,502,1096,486,1090,470,1090,439,1080,435,1093,423,1090,410,1109,394,1109,375,1122,356,1150,350,1125,324,1134,305,1106,289,1077,286,1068,286,1052,312,1036,321,1039,273"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=33" target="_blank" xlink:title="21 Chopda Rural">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="26" points="661,451,629,477,604,477,578,496,556,525,524,544,543,553,572,547,610,563,655,556,702,566,750,575,782,550,810,556,848,598,883,614,937,614,966,601,1001,614,1045,629,1064,591,1093,572,1109,566,1109,544,1090,547,1074,540,1036,528,1017,544,982,540,975,531,963,521,947,540,931,553,899,563,880,556,848,553,858,544,848,518,839,515,845,502,845,480,829,477,836,455,839,439,845,439,864,439,877,416,880,401,886,372,893,340,921,343,934,318,963,334,969,350,982,353,988,324,995,273,1039,280,1029,324,1052,324,1071,283,1099,286,1106,292,1122,305,1138,299,1160,302,1163,267,1179,245,1217,242,1230,235,1258,235,1268,178,1230,181,1185,175,1166,197,1131,197,1106,159,1074,172,1049,178,998,188,991,143,956,146,918,156,886,134,861,146,823,137,785,153,753,172,724,194,721,223,737,251,709,251,696,270,721,273,744,292,734,312,721,324,728,343,709,362,696,397,680,423"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=35" target="_blank" xlink:title="23 Dharangaon">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="27" points="813,888,836,905,855,908,867,920,874,946,880,962,893,974,902,990,909,1013,921,1025,934,1013,944,997,960,984,976,978,991,968,991,946,1011,936,1026,924,1030,901,1049,905,1068,905,1084,911,1093,898,1106,882,1119,870,1135,873,1150,885,1160,901,1173,914,1192,917,1211,911,1227,920,1236,936,1255,940,1275,940,1297,930,1290,908,1306,901,1319,911,1335,920,1348,936,1360,927,1357,905,1354,882,1344,860,1348,844,1351,819,1344,793,1341,768,1319,752,1319,720,1290,711,1300,685,1281,672,1265,657,1243,647,1224,650,1208,666,1195,650,1185,622,1176,644,1144,663,1125,672,1103,669,1087,682,1071,663,1046,663,1026,644,1004,625,982,606,963,603,941,606,931,628,931,650,912,666,880,660,874,679,880,698,877,720,867,743,871,765,890,765,871,784,867,809,871,828,855,838,839,838,836,863"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=28" target="_blank" xlink:title="24 Amalner">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="28" points="301,783,311,796,320,809,336,818,343,834,349,856,352,875,355,895,368,914,371,936,346,936,340,958,343,987,349,1009,368,1009,384,999,400,984,419,984,438,977,438,955,454,949,473,952,492,942,508,936,524,936,540,942,559,939,575,930,575,910,591,917,607,920,623,926,632,942,648,949,648,926,664,926,686,930,699,920,715,914,734,904,753,910,772,907,791,910,810,907,810,885,826,869,836,860,832,837,852,837,867,831,867,806,867,783,887,767,867,748,874,726,880,704,874,678,883,659,899,666,915,659,931,650,931,618,909,608,883,608,858,599,836,586,817,567,801,548,778,551,766,567,747,580,721,564,712,586,696,599,708,612,721,628,724,650,708,659,683,643,677,669,658,678,626,666,613,674,603,674,603,717,607,742,594,764,578,752,581,780,556,774,534,771,518,767,502,783,473,783,448,780,416,783,394,786,371,774,352,758,336,739,327,755,317,774,311,776"></polygon>
                                </g>
                            </a>
                            <a href="https://jalgaonpolice.gov.in/police-stations?id=31" target="_blank" xlink:title="25 Marwad">
                                <g>
                                    <polygon class="image-mapper-shape" data-index="29" points="305,788,320,775,330,743,349,756,359,769,378,775,400,788,419,782,438,782,457,782,476,782,499,785,511,766,534,772,553,775,575,782,575,753,591,762,597,743,607,724,607,696,632,696,603,670,619,661,638,670,658,673,683,648,689,667,708,673,721,654,718,629,708,610,686,603,705,591,715,569,689,556,664,553,642,553,616,562,594,556,575,543,543,543,521,534,495,540,473,524,457,499,438,476,416,476,422,499,425,521,425,540,409,556,390,565,371,578,349,581,333,591,317,603,301,623,298,648,292,673,276,693,273,715,270,737,254,759,257,775,279,782"></polygon>
                                </g>
                            </a>
                        </svg>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </section>
            <div class="bg-gray-50 aos-init" data-aos="fade-up">
                <section class="py-10 w-full cust-bg-art">
                    <div class="section__title" style="padding: 0px;">
                        <h2 class="section__titletext" style="color: color: rgb(10, 36, 99);">{{ __('HOME_PAGE_ABOUT_TITLE_JALGAON_POLICE') }} <label style="font-size: 1.6rem;font-weight: 700;color: #FFC404;text-align: center;margin-bottom: 1rem;">{{ __('HOME_PAGE_ABOUT_TITLE_ABOUT') }}</label></h2>
                        <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
                    </div>
                    <div class="w-28 mt-5 mb-5 border-b border-gray-700 mx-auto"></div>
                    <div class="my-10 grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-8 max-w-4xl mx-auto justify-items-center items-center font-fira">
                        <div class="w-52 h-36 relative rounded-xl boderdiv">
                            <a href="/about-district">
                                <img src="{{ asset('hyd/Jalgaon_district.jpg') }}" alt="report" loading="lazy" width="100" height="100" title="{{ __('HEADER_MENU_ABOUT_US_ABOUT') }}" class="object-cover w-full h-full rounded-xl">
                                <div class="absolute inset-0 bg-black bg-opacity-50 hover:bg-opacity-70 rounded-xl"></div>
                                <div title="{{ __('HEADER_MENU_ABOUT_US_ABOUT') }}" class="font-bold text-right text-lg absolute bottom-2 right-1 text-white">{{ __('HEADER_MENU_ABOUT_US_ABOUT') }}</div>
                            </a>
                        </div>
                        <div class="w-52 h-36 relative rounded-xl boderdiv">
                            <a href="/hall-of-fame">
                                <img src="{{ asset('hyd/hall_of_fame.png') }}" alt="tenant" loading="lazy" width="100" height="100" title="{{ __('HEADER_MENU_ABOUT_US_HALL_OF_FAME') }}" class="object-cover w-full h-full rounded-xl">
                                <div class="absolute inset-0 bg-black bg-opacity-50 hover:bg-opacity-70 rounded-xl"></div>
                                <div title="{{ __('HEADER_MENU_ABOUT_US_HALL_OF_FAME') }}" class="font-bold text-right text-lg absolute bottom-2 right-1 text-white">{{ __('HEADER_MENU_ABOUT_US_HALL_OF_FAME') }}</div>
                            </a>
                        </div>
                        <div class="w-52 h-36 relative rounded-xl boderdiv">
                            <a href="/organization-structure">
                                <img src="{{ asset('hyd/org_chart.jpg') }}" alt="rewards" width="100" height="100" loading="lazy" title="{{ __('HEADER_MENU_ABOUT_US_ORGANIZATION') }}" class="object-cover w-full h-full rounded-xl">
                                <div class="absolute inset-0 bg-black bg-opacity-50 hover:bg-opacity-70 rounded-xl"></div>
                                <div title="{{ __('HEADER_MENU_ABOUT_US_ORGANIZATION') }}" class="font-bold text-right text-lg absolute bottom-2 right-1 text-white text-capitalize">{{ __('HEADER_MENU_ABOUT_US_ORGANIZATION') }}</div>
                            </a>
                        </div>
                        <div class="w-52 h-36 relative rounded-xl boderdiv">
                            <a href="/senior-officers">
                                <img src="{{ asset('hyd/senior_officer.jpg') }}" alt="cyber image" width="100" height="100" title="{{ __('HEADER_MENU_ABOUT_US_SENIOR') }}" loading="lazy" class="object-cover w-full h-full rounded-xl">
                                <div class="absolute inset-0 bg-black bg-opacity-50 hover:bg-opacity-70 rounded-xl"></div>
                                <div title="{{ __('HEADER_MENU_ABOUT_US_SENIOR') }}" class="font-bold text-right text-lg absolute bottom-2 right-1 text-white text-capitalize">{{ __('HEADER_MENU_ABOUT_US_SENIOR') }}</div>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
            <main class="gutterSpace cust-bg-9">
                <div class="asideSection col12 pb-4 option_item">
                    <div class="section__title">
                        <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('HOME_PAGE_CITIZEN_SERVICES_TITLE_CITIZEN') }} <label style="font-size: 1.6rem;font-weight: 700;color: #FFC404;text-align: center;margin-bottom: 1rem;">{{ __('HOME_PAGE_CITIZEN_SERVICES_TITLE_SERVICES') }}</label></h2>
                        <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
                    </div>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay" href="/register-complaint" target="_self">
                                    <img src="{{ asset('hyd/quick/PCC-Online.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_LODGE_PETITION') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay external" href="https://citizen.mahapolice.gov.in/Citizen/MH/SearchView.aspx" target="_blank">
                                    <img src="{{ asset('hyd/quick/missingpersons.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_MISSING_PERSON') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay external" href="https://citizen.mahapolice.gov.in/Citizen/MH/PublishedFIRs.aspx" target="_blank">
                                    <img src="{{ asset('hyd/quick/view_fir.png') }}" class="firimg" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_VIEW_PRINT_FIR') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay external" href="https://citizen.mahapolice.gov.in/Citizen/MH/SearcgAccusedArrest.aspx" target="_blank">
                                    <img src="{{ asset('hyd/quick/arrest.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_ARREST_PARTICULARS') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay" href="javascript:void(0)" target="_self">
                                    <img src="{{ asset('hyd/quick/abandandvehicle.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_ACCIDENT_COMPENSATION') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay external" href="https://passportindia.gov.in/AppOnlineProject/statusTracker/trackStatusInpNew" target="_blank">
                                    <img src="{{ asset('hyd/quick/PassPort.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_PASSPORT_VERIFICATION') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay external" href="https://www.ceir.gov.in/Request/CeirUserBlockRequestDirect.jsp" target="_blank">
                                    <img src="{{ asset('hyd/quick/sancharsaathi.png') }}" class="permssnimg" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_STOLEN_MOBILE') }}</span>
                                    </h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay external" href="https://citizen.mahapolice.gov.in/Citizen/MH/SearchDeadBodyList.aspx" target="_blank">
                                    <img class="meesevaimg" src="{{ asset('hyd/quick/deadbody.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_UNIDENTIFIED_BODY') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay external" href="https://pcs.mahaonline.gov.in/Forms/Home.aspx" target="_blank">
                                    <img src="{{ asset('hyd/quick/PCC.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_POLICE_CLEARANCE') }}<br>{{ __('HOME_PAGE_CITIZEN_SERVICES_VERIFICATION_CERTIFICATE') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay external" href="https://mahatrafficechallan.gov.in/payechallan/PaymentService.htm" target="_blank">
                                    <img class="challanimg" src="{{ asset('hyd/quick/echallan.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_E_CHALAN') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay" href="/recruitments" target="_self">
                                    <img src="{{ asset('hyd/quick/recruitment.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_POLICE_RECRUITMENT') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay external" href="https://cybercrime.gov.in/Webform/Accept.aspx" target="_blank">
                                    <img class="actsimg" src="{{ asset('hyd/quick/ncrp.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_OTHER_CYBER_CRIME') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay external" href="https://cybercrime.gov.in/Webform/chkackstatus.aspx" target="_blank">
                                    <img class="actsimg" src="{{ asset('hyd/quick/ncrp.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_OTHER_CYBER_CRIME_TRACK') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay external" href="https://sancharsaathi.gov.in/sfc/" target="_blank">
                                    <img class="actsimg" src="{{ asset('hyd/quick/chakshu.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_REPORT_FROUD_COMMUNICATION') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay external" href="https://cybercrime.gov.in/Webform/report_abuse_social_media.aspx" target="_blank">
                                    <img class="actsimg" src="{{ asset('hyd/quick/social.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_REPORT_SOCIAL_MEDIA') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay external" href="https://tafcop.sancharsaathi.gov.in/telecomUser/" target="_blank">
                                    <img class="actsimg" src="{{ asset('hyd/quick/tafcop.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_KNOW_MOBILE_NO') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay external" href="https://www.mahapolice.gov.in/act-and-rules" target="_blank">
                                    <img class="actsimg" src="{{ asset('hyd/quick/Laworder.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_ACTS_RULES') }}</span></h6>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <a class="product-thumb-overlay external" href="https://citizen.mahapolice.gov.in/Citizen/MH/index.aspx" target="_blank">
                                    <img class="actsimg" src="{{ asset('hyd/quick/eodb.png') }}" alt="">
                                    <h6><span style="color: white;">{{ __('HOME_PAGE_CITIZEN_SERVICES_CITIZEN_PORTAL') }}</span></h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <div class="section__title" style="padding-bottom: 0px;background-color:rgb(242, 242, 242);">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('HOME_PAGE_WINGS_TITLE_WINGS_OF') }} <label style="font-size: 1.6rem;font-weight: 700;color: #FFC404;text-align: center;margin-bottom: 1rem;">{{ __('HOME_PAGE_WINGS_TITLE_JALGAON_POLICE') }}</label></h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
            <main class="gutterSpace" style="background-color:rgb(242, 242, 242);">
                <div class="asideSection col12 pb-4 option_item wings">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3">
                            <a class="product-thumb-overlay" href="/local-crime-branch" target="_self">
                                <img src="{{ asset('hyd/wings/lcb.png') }}" alt="">
                                <h6 style="padding-top: 15%;font-size: 14px;"><span style="color: white;">{{ __('HEADER_MENU_SPECIAL_UNIT_LCB') }}</span></h6>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3">
                            <a class="product-thumb-overlay" href="/district-special-branch" target="_self">
                                <img src="{{ asset('hyd/wings/dsb.png') }}" alt="">
                                <h6 style="padding-top: 15%;font-size: 14px;"><span style="color: white;">{{ __('HEADER_MENU_SPECIAL_UNIT_DSB') }}</span></h6>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3">
                            <a class="product-thumb-overlay" href="/cctns" target="_self">
                                <img src="{{ asset('hyd/wings/cctns.png') }}" alt="">
                                <h6 style="padding-top: 15%;font-size: 14px;"><span style="color: white;">{{ __('HEADER_MENU_SPECIAL_UNIT_CCTNS') }}</span></h6>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3">
                            <a class="product-thumb-overlay" href="/bdds" target="_self">
                                <img src="{{ asset('hyd/wings/bdds.png') }}" alt="">
                                <h6 style="padding-top: 15%;font-size: 14px;"><span style="color: white;">{{ __('HEADER_MENU_SPECIAL_UNIT_BDDS') }}</span></h6>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3">
                        <a class="product-thumb-overlay" href="/economic-offence-wing" target="_self">
                                <img src="{{ asset('hyd/wings/eow.png') }}" alt="">
                                <h6 style="padding-top: 15%;font-size: 14px;"><span style="color: white;">{{ __('HEADER_MENU_SPECIAL_UNIT_ECONOMIC') }}</span></h6>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3">
                        <a class="product-thumb-overlay" href="/traffic-branch" target="_self">
                                <img src="{{ asset('hyd/wings/traffic.png') }}" alt="">
                                <h6 style="padding-top: 15%;font-size: 14px;"><span style="color: white;">{{ __('HEADER_MENU_SPECIAL_UNIT_TRAFFIC_BRANCH') }}</span></h6>
                            </a>
                        </div>
                    </div>
                </div>
            </main>
            <section class="our_services">
                <div class="common_container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="section__title" style="padding-bottom: 0px;">
                                <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('HOME_PAGE_INT_TITLE_PROGRAM') }} <label style="font-size: 1.6rem;font-weight: 700;color: #FFC404;text-align: center;margin-bottom: 1rem;">{{ __('HOME_PAGE_INT_TITLE_INITIATIVE') }}</label></h2>
                                <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
                            </div>
                        </div>
                    </div>
                    <div id="ourservices" class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1753px, 0px, 0px); transition: 1.5s; width: 3800px;">
                                @if(count($initiativeList))
                                    @foreach($initiativeList as $intDetail)
                                        <div class="owl-item">
                                            <a href="javascript:void(0);" class="ourservices wow zoomInDown" data-wow-delay="0.2s" target="_blank" title="Opens in a new window" onclick="return Confirmviewpage();">
                                                <div class="header">
                                                    <div class="thumb">
                                                        <img src="https://panel.jalgaonpolice.gov.in/{{ $intDetail->MINT_Path }}" alt="service" onerror="this.onerror=null;this.src='images/initiative.jpg';">
                                                    </div>
                                                    <div class="overlay-inner wow zoomIn" data-wow-delay="0.6s">
                                                        <div class="icon">
                                                            <img class="icon-img" src="{{ asset('images/inticon.png') }}" alt="Icon">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <h3 class="title" style="font-size: 16px;">{{ \Illuminate\Support\Str::limit($intDetail->MINT_Title, 240, $end='...') }}</h3>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                        <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
                    </div>
                    <div class="row mx-0">
                        <div class="col-md-12 text-center">
                            <a href="/initiatives" class="bluebtn mt-4 wow slideInUp" data-wow-delay="0.4s" title="VIEW ALL">VIEW ALL</a>
                        </div>
                    </div>
                </div>
            </section>
        <section class="HomePhotoGallery">
            <div class="container_common_xl">
                <div class="section__title">
                    <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('HOME_PAGE_RECENT_EVENTS_TITLE_RECENT') }} <label style="font-size: 1.6rem;font-weight: 700;color: #FFC404;text-align: center;margin-bottom: 1rem;">{{ __('HOME_PAGE_RECENT_EVENTS_TITLE_EVENTS') }}</label></h2>
                    <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
                </div>
                <div class="row mx-0">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div id="ourgallery" class="owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-1753px, 0px, 0px); transition: 1.5s; width: 3800px;">
                                    @if(count($galleryList))
                                        @foreach($galleryList as $galDetail)
                                            <div class="owl-item">
                                                <a class="home_img_bx" href="https://panel.jalgaonpolice.gov.in/{{ $galDetail->GMN_Thumbnail_Path }}" data-groups="{{ $galDetail->GMN_Title }}" data-fancybox="gallery" data-caption="{{ $galDetail->GMN_Title }}"><img src="https://panel.jalgaonpolice.gov.in/{{ $galDetail->GMN_Thumbnail_Path }}" alt="{{ $galDetail->GMN_Title }}" title="{{ $galDetail->GMN_Title }}"></a>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
             <div class="section__title" style="padding-bottom: 0px;background-color:rgb(242, 242, 242);">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('HOME_PAGE_SOCIAL_MEDIA_TITLE_SOCIAL') }} <label style="font-size: 1.6rem;font-weight: 700;color: #FFC404;text-align: center;margin-bottom: 1rem;">{{ __('HOME_PAGE_SOCIAL_MEDIA_TITLE_MEDIA') }}</label></h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="gutterSpace" style="background-color:rgb(242, 242, 242);">
            <div class="trending-social-section" id="trending-social-section">
                <div class="container11">
                    <div class="social-content">
                        <div class="view view-trending-social-media view-id-trending_social_media view-display-id-block view-dom-id-fbc221b922a5d4a507064897939429cb">
                            <div class="view-content row">
                            <div class="col-md-4 col-sm-4" style="padding:5px;">
                                    <div class="views-row views-row-1 views-row-odd views-row-first">
                                        <div class="row1 Twitter">
                                            <div class="social-box-wrapper">
                                                <h2 style="background: linear-gradient(to left, #494F55, #000000);color:#fff"><i></i>Twitter</h2>
                                                <div class="details">
                                                    <div class="twitter-tweet twitter-tweet-rendered" style="display: flex; max-width: 550px; width: 100%; margin-top: 10px; margin-bottom: 10px;">
                                                        <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="" title="X Post" src="https://syndication.twitter.com/srv/timeline-profile/screen-name/jalgaonpolice?dnt=false&amp;embedId=twitter-widget-0&amp;features=eyJ0ZndfdGltZWxpbmVfbGlzdCI6eyJidWNrZXQiOltdLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2ZvbGxvd2VyX2NvdW50X3N1bnNldCI6eyJidWNrZXQiOnRydWUsInZlcnNpb24iOm51bGx9LCJ0ZndfdHdlZXRfZWRpdF9iYWNrZW5kIjp7ImJ1Y2tldCI6Im9uIiwidmVyc2lvbiI6bnVsbH0sInRmd19yZWZzcmNfc2Vzc2lvbiI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfZm9zbnJfc29mdF9pbnRlcnZlbnRpb25zX2VuYWJsZWQiOnsiYnVja2V0Ijoib24iLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X21peGVkX21lZGlhXzE1ODk3Ijp7ImJ1Y2tldCI6InRyZWF0bWVudCIsInZlcnNpb24iOm51bGx9LCJ0ZndfZXhwZXJpbWVudHNfY29va2llX2V4cGlyYXRpb24iOnsiYnVja2V0IjoxMjA5NjAwLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3Nob3dfYmlyZHdhdGNoX3Bpdm90c19lbmFibGVkIjp7ImJ1Y2tldCI6Im9uIiwidmVyc2lvbiI6bnVsbH0sInRmd19kdXBsaWNhdGVfc2NyaWJlc190b19zZXR0aW5ncyI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfdXNlX3Byb2ZpbGVfaW1hZ2Vfc2hhcGVfZW5hYmxlZCI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfdmlkZW9faGxzX2R5bmFtaWNfbWFuaWZlc3RzXzE1MDgyIjp7ImJ1Y2tldCI6InRydWVfYml0cmF0ZSIsInZlcnNpb24iOm51bGx9LCJ0ZndfbGVnYWN5X3RpbWVsaW5lX3N1bnNldCI6eyJidWNrZXQiOnRydWUsInZlcnNpb24iOm51bGx9LCJ0ZndfdHdlZXRfZWRpdF9mcm9udGVuZCI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9fQ%3D%3D&amp;frame=false&amp;hideBorder=false&amp;hideFooter=false&amp;hideHeader=false&amp;hideScrollBar=false&amp;lang=en&amp;origin=https%3A%2F%2Fwww.jalgaonpolice.gov.in%2F&amp;sessionId=6856b1a2b5025bc3392c5dfe94df44a2461d714a&amp;showHeader=true&amp;showReplies=false&amp;transparent=false&amp;widgetsVersion=2615f7e52b7e0%3A1702314776716" style="position: static; visibility: visible; width: 331px; height: 690px; display: block; flex-grow: 1;" data-tweet-id="1841518342840189311"></iframe></div>
                                                    <script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <a target="_BLANK" href="https://twitter.com/jalgaonpolice" title="View More" class="bluebtn float-center mt-4 wow slideInUp"  style="background: linear-gradient(to left, #494F55, #000000);color:#fff" data-wow-delay="0.4s">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4" style="padding:5px;">
                                    <div class="views-row views-row-3 views-row-odd">
                                        <div class="row1 Facebook">
                                            <div class="social-box-wrapper">
                                                <h2 style="background: linear-gradient(to left, #0082fb, #163269);color:#fff"><i></i>Facebook</h2>
                                                <div class="details">
                                                    <div class="fb-post fb_iframe_widget" style="display: flex; max-width: 550px; width: 100%; margin-top: 10px; margin-bottom: 10px;">
                                                        <iframe name="f20557366bd327cf5" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v5.0/plugins/page.php?adapt_container_width=true&amp;app_id=1680330345533928&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfc9ff08e3d67cc3bc%26domain%3Dwww.jalgaonpolice.gov.in%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.jalgaonpolice.gov.in%252Ff91bed0647c30807d%26relation%3Dparent.parent&amp;container_width=498&amp;height=400&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FJalgaonPolice%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=" style="border: none; visibility: visible; width: 330px; height: 690px;" class=""></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <a target="_BLANK" href="https://www.facebook.com/JalgaonPolice" title="View More" class="bluebtn float-center mt-4 wow slideInUp" style="background: linear-gradient(to left, #0082fb, #163269);color:#fff" data-wow-delay="0.4s">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4" style="padding:5px;">
                                    <div class="views-row views-row-2 views-row-even">
                                        <div class="row1 Instagram">
                                            <div class="social-box-wrapper">
                                                <h2 style="background: linear-gradient(115deg, #f9ce34, #ee2a7b, #6228d7);color:#fff"><i></i>Notifications</h2>
                                                <div class="details">
                                                    <div class="demo6 demof">
                                                        <ul class="projcard-container">
                                                            @if(count($notifyList))
                                                                @foreach($notifyList as $notifyDetail)
                                                                    <!-- <li class="notifications-item"><a target="_blank" rel="noopener noreferrer" @if($notifyDetail->MNO_Type == 2) href="{{ $notifyDetail->MNO_Link }}" @endif @if($notifyDetail->MNO_Type == 3) href="{{ $notifyDetail->MNO_Link }}" @endif class="notifications-link">@if($notifyDetail->MNO_Type == 1) <i class="fa fa-bullhorn mr-2 text-danger"></i> @endif @if($notifyDetail->MNO_Type == 2) <i class="fa fa-link mr-2 text-danger"></i> @endif @if($notifyDetail->MNO_Type == 3) <i class="fa fa-file-pdf-o mr-2 text-danger"></i>@endif {{ $notifyDetail->MNO_Title }}</a></li> -->
                                                                    <li class="projcard projcard-blue wow slideInRight et-item-visible" data-wow-delay="0.1s" style="">
                                                                        <div class="projcard-innerbox">
                                                                            <div class="app_calendar">
                                                                                <div class="day"> {{ date('d', strtotime($notifyDetail->MNO_Start_Date)) }}</div>
                                                                                <br>
                                                                                <div class="mnth">{{ date('M', strtotime($notifyDetail->MNO_Start_Date)) }}</div>
                                                                                <br>
                                                                                <div class="yer">{{ date('Y', strtotime($notifyDetail->MNO_Start_Date)) }}</div>
                                                                            </div>
                                                                            <a class="projcard-textbox" target="_blank" rel="noopener noreferrer" @if($notifyDetail->MNO_Type == 2) href="https://panel.jalgaonpolice.gov.in/{{ $notifyDetail->MNO_Link }}" @endif @if($notifyDetail->MNO_Type == 3) href="{{ $notifyDetail->MNO_Link }}" @endif title="{{ $notifyDetail->MNO_Title }}"> {{ $notifyDetail->MNO_Title }}</a>
                                                                            <div class="ticker_size">@if($notifyDetail->MNO_Type == 1) <i class="fa fa-bullhorn mr-2 text-danger"></i> @endif @if($notifyDetail->MNO_Type == 2) <i class="fa fa-link mr-2 text-danger"></i> @endif @if($notifyDetail->MNO_Type == 3) <i class="fa fa-file-pdf-o mr-2 text-danger"></i>@endif</span></div>
                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                            @endif
                                                        </ul>                          
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <!-- <a target="_BLANK" href="https://www.instagram.com/sp.dhule/" title="View More" class="bluebtn float-center mt-4 wow slideInUp" style="background: linear-gradient(115deg, #f9ce34, #ee2a7b, #6228d7);color:#fff" data-wow-delay="0.4s">View More</a> -->
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
        <div class="section__title">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('HOME_PAGE_REGISTER_LABEL') }}</h2>
                    <a href="/register-complaint" class="btn btn-primary btn-lg p-10 font-20" tabindex="1" id="submitBtnId1">{{ __('HOME_PAGE_REGISTER_BUTTON') }} &nbsp; <i class="fa fa-hand-o-right"></i></a>
                </div>
            </div>
        </div>

        <section class="Importanlink">
            <div class="container_common">
                <div id="Importantlinks" class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-3292px, 0px, 0px); transition: 1s; width: 4734px;">
                            <div class="owl-item" style="width: 205.8px;">
                                <div class="slideritem">
                                    <a class="external" target="_blank" href="https://www.mahapolice.gov.in/">
                                        <img class="links_img indsvg" src="{{ asset('imp_link/mlogo.png') }}" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 205.8px;">
                                <div class="slideritem">
                                    <a class="external" target="_blank" href="https://cbi.gov.in/">
                                        <img class="links_img indsvg" src="{{ asset('imp_link/cbi.png') }}" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 205.8px;">
                                <div class="slideritem">
                                    <a class="external" target="_blank" href="https://mahacid.gov.in/">
                                        <img class="links_img indsvg" src="{{ asset('imp_link/cid.png') }}" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 205.8px;">
                                <div class="slideritem">
                                    <a class="external" target="_blank" href="https://www.india.gov.in/">
                                        <img class="links_img " src="{{ asset('imp_link/indiagov.png') }}" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 205.8px;">
                                <div class="slideritem">
                                    <a class="external" target="_blank" href="https://www.mygov.in/">
                                        <img class="links_img indsvg" src="{{ asset('imp_link/mygov.png') }}" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 205.8px;">
                                <div class="slideritem">
                                    <a class="external" target="_blank" href="https://aaplesarkar.mahaonline.gov.in/">
                                        <img class="links_img indsvg" src="{{ asset('imp_link/aplesarkar.png') }}" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 205.8px;">
                                <div class="slideritem">
                                    <a class="external" target="_blank" href="https://www.digitalindia.gov.in/">
                                        <img class="links_img indsvg" src="{{ asset('imp_link/digital_india.png') }}" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 205.8px;">
                                <div class="slideritem">
                                    <a class="external" target="_blank" href="https://www.startupindia.gov.in/">
                                        <img class="links_img indsvg" src="{{ asset('imp_link/startup.png') }}" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 205.8px;">
                                <div class="slideritem">
                                    <a class="external" target="_blank" href="https://www.maharashtra.gov.in/">
                                        <img class="links_img indsvg" src="{{ asset('imp_link/mh.png') }}" height="70">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('inlineScript')
<script>
</script>
@endsection
