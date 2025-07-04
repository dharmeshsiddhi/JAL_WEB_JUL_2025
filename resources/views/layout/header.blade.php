
<div class="homeMainWrapOut">
            <div class="overlay mobileMenuOverlay"></div>
            <div class="overlay innerMenuOverlay"></div>
            <!-- @if($data['segment1'] == '') <div class="feedbackBtn" onclick="openCyberModal()"><p>Cyber Awareness</p></div> @endif -->
            <header class="gutterSpace p-0" data-aos="fade-down">
                <div class="wrapper light-header design-2">
                    <div class="top-nav">
                        <a href="javascript:void(0);" class="humburger-ico" style="font-size: 14px;"><i class="fa fa-bars"></i></a>
                        <a href="javascript:void(0);" class="closemenu" style="font-size: 14px;"><i class="fa fa-times"></i></a>
                        <div class="container11 position-relative">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 pl-5 pr-5">
                                    <ul class="right-panel float-right">
                                        <li class="dropdown cog-dropdown">
                                            <div class="search-input">
                                                <a href="" target="_blank" hidden></a>
                                                <input type="text" placeholder="Type to search.." id="search_box_main" name="search_box_main" value="">
                                                <div class="autocom-box">
                                                <!-- here list are inserted from javascript -->
                                                </div>
                                                <div class="icon search_box_icon"><i class="fa fa-search"></i></div>
                                            </div>
                                        </li>
                                        <li class="dropdown cog-dropdown">
                                            <div class="region region-language-switcher">
                                                <div id="block-languagedropdownswitcher-2" class="block block-lang-dropdown block-language-dropdown-blocklanguage-interface">
                                                    <form class="lang-dropdown-form lang_dropdown_form clearfix language_interface" id="lang_dropdown_form_lang-dropdown-form" data-drupal-selector="lang-dropdown-form-2" action="/" method="post" accept-charset="UTF-8" data-once="cvJqueryValidate" novalidate="novalidate">
                                                        <div class="js-form-item form-item js-form-type-select form-type-select js-form-item-lang-dropdown-select form-item-lang-dropdown-select form-no-label">
                                                            <label for="edit-lang-dropdown-select" class="visually-hidden">Select your language</label>
                                                            <select class="lang-dropdown-select-element form-select clearfix form-control valid" data-lang-dropdown-id="lang-dropdown-form" data-drupal-selector="edit-lang-dropdown-select" id="policeStationBox" name="policeStationBox" aria-invalid="false">
                                                                <option value="" title="{{ __('HOME_PAGE_SEARCH_PS_SELECT_PS') }}">{{ __('HOME_PAGE_SEARCH_PS_SELECT_PS') }}</option>
                                                                @if(count($data['stationList']))
                                                                    @foreach($data['stationList'] as $stnDetail)
                                                                        <option value="{{ $stnDetail->MPS_ID }}">@if(Lang::locale() == 'mr') {{ $stnDetail->MPS_Name_MR }} @else {{ $stnDetail->MPS_Name }} @endif</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <input data-drupal-selector="edit-en" type="hidden" name="en" value="/node" class="clearfix form-control">
                                                        <input data-drupal-selector="edit-hi" type="hidden" name="hi" value="/hi/node" class="clearfix form-control">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown cog-dropdown">
                                            <a href="/screen-reader" title="Screen Reader Access" id="screenreader" style="font-size: 14px;">                  
                                            <img src="{{ asset('images/screenreader.png') }}" alt="logo"> 
                                            </a>
                                        </li>
                                        <li class="dropdown cog-dropdown mobile-font-hide">
                                            <a href="javascript:void(0);" onclick="setFontSize('plus');" class="dropdown-toggle" title="Accessibility Dropdown" data-toggle="dropdown" style="font-size: 14px;">
                                            A <sup>+</sup>
                                            </a>
                                        </li>
                                        <li class="dropdown cog-dropdown mobile-font-hide">
                                            <a href="javascript:void(0);" onclick="setFontSize('default');" class="dropdown-toggle" title="Accessibility Dropdown" data-toggle="dropdown" style="font-size: 14px;">
                                            A <sup>&nbsp;</sup>
                                            </a>
                                        </li>
                                        <li class="dropdown cog-dropdown mobile-font-hide">
                                            <a href="javascript:void(0);" onclick="setFontSize('minus');" class="dropdown-toggle" title="Accessibility Dropdown" data-toggle="dropdown" style="font-size: 14px;">
                                            A <sup>-</sup>
                                            </a>
                                        </li>
                                        <li class="dropdown cog-dropdown">
                                            <div class="region region-language-switcher">
                                                <div id="block-languagedropdownswitcher-2" class="block block-lang-dropdown1 block-language-dropdown-blocklanguage-interface">
                                                    <form class="lang-dropdown-form lang_dropdown_form clearfix language_interface" id="lang_dropdown_form_lang-dropdown-form" data-drupal-selector="lang-dropdown-form-2" action="/" method="post" accept-charset="UTF-8" data-once="cvJqueryValidate" novalidate="novalidate">
                                                        <div class="js-form-item form-item js-form-type-select form-type-select js-form-item-lang-dropdown-select form-item-lang-dropdown-select form-no-label">
                                                            <label for="edit-lang-dropdown-select" class="visually-hidden">Select your language</label>
                                                            <select class="lang-dropdown-select-element form-select clearfix form-control valid" data-lang-dropdown-id="lang-dropdown-form" data-drupal-selector="edit-lang-dropdown-select" id="lang_dropdown_select" name="lang_dropdown_select" aria-invalid="false">
                                                                <option value="mr" {{ \Session::get('language') == 'mr' ? 'selected' : '' }}>मराठी</option>
                                                                <option value="en" {{ \Session::get('language') == 'en' ? 'selected' : '' }}>English</option>
                                                            </select>
                                                        </div>
                                                        <input data-drupal-selector="edit-en" type="hidden" name="en" value="/node" class="clearfix form-control">
                                                        <input data-drupal-selector="edit-hi" type="hidden" name="hi" value="/hi/node" class="clearfix form-control">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mid-nav bg-mid-nav">
                        <a href="/">
                            <img src="{{ asset('hyd/header.jpg') }}" alt="Header Logo 1" class="Header__image1" style="width:100%">
                        </a>
                        <!-- <div class="container11">
                            <div class="Header">
                                <div class="Header__left">
                                    <a href="/"><img src="{{ asset('images/mlogo.png') }}" alt="Header Logo 1" class="Header__image1"></a>
                                    <div class="Header__title">
                                        <h2>जळगाव जिल्हा पोलीस</h2>
                                        <h2>Jalgaon District Police</h2>
                                    </div>
                                </div>
                                <div class="Header__right"><img src="{{ asset('images/emblem-dark.png') }}" alt="Header Logo 2" class="Header__image2"></div>
                            </div>
                        </div> -->
                    </div>
                    <div class="menu-bar">
                        <div class="container11">
                            <div class="row">
                                <div class="col-lg-12 p-0">
                                    <div class="menu_wrapper">
                                        <nav class="navbar navbar-expand-lg navbar-light">
                                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                                <div class="region region-primary-menu">
                                                    <nav role="navigation" aria-labelledby="block-jalgaon-gov-main-menu-menu" id="block-jalgaon-gov-main-menu" class="col-sm-10 block block-menu navigation menu--main">
                                                        <h2 class="visually-hidden" id="block-jalgaon-gov-main-menu-menu">Main navigation</h2>
                                                        <ul class="nav navbar-nav mr-auto" data-smartmenus-id="17149963338979644">
                                                            <li class="nav-item level-0">
                                                                <a href="/" data-drupal-link-system-path="<front>" class="is-active" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_HOME') }}</a>
                                                            </li>
                                                            <li class="nav-item level-0 dropdown">
                                                                <a href="javascript:void(0);" class="nav-link has-submenu" id="sm-17149963338979644-1" aria-haspopup="true" aria-controls="sm-17149963338979644-2" aria-expanded="false" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_ABOUT_US') }}</a>
                                                                <ul class="dropdown-menu sm-nowrap" id="sm-17149963338979644-2" role="group" aria-hidden="true" aria-labelledby="sm-17149963338979644-1" aria-expanded="false" style="width: auto; min-width: 10em; display: none; max-width: 20em; top: auto; left: 0px; margin-left: 0px; margin-top: 0px;">
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/about-district" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_ABOUT_US_ABOUT') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/hall-of-fame" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_ABOUT_US_HALL_OF_FAME') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/organization-structure" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_ABOUT_US_ORGANIZATION') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/police-map" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_ABOUT_US_POLICE_MAP') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/senior-officers" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_ABOUT_US_SENIOR') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/police-stations" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_ABOUT_US_STATIONS') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/PDF/policeRank.e52e62bb.pdf" target="_blank" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_ABOUT_US_RANK') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/PDF/policeFlags.bb53bb5f.pdf" target="_blank" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_ABOUT_US_FLAG') }}</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="nav-item level-0 dropdown">
                                                                <a href="javascript:void(0);" class="nav-link has-submenu" id="sm-17149963338979644-5" aria-haspopup="true" aria-controls="sm-17149963338979644-6" aria-expanded="false" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_SPECIAL_UNIT') }}</a>
                                                                <ul class="dropdown-menu sm-nowrap" id="sm-17149963338979644-6" role="group" aria-hidden="true" aria-labelledby="sm-17149963338979644-5" aria-expanded="false" style="width: auto; min-width: 10em; display: none; max-width: 20em; top: auto; left: 0px; margin-left: 0px; margin-top: 0px;">
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/control-room" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_SPECIAL_UNIT_CONTROL_ROOM') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/local-crime-branch" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_SPECIAL_UNIT_LCB') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/district-special-branch" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_SPECIAL_UNIT_DSB') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/cctns" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_SPECIAL_UNIT_CCTNS') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/bdds" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_SPECIAL_UNIT_BDDS') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/economic-offence-wing" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_SPECIAL_UNIT_ECONOMIC') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/traffic-branch" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_SPECIAL_UNIT_TRAFFIC_BRANCH') }}</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="nav-item level-0 dropdown">
                                                                <a href="javascript:void(0);" class="nav-link has-submenu" id="sm-17149963338979644-11" aria-haspopup="true" aria-controls="sm-17149963338979644-12" aria-expanded="false" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_NEWS_UPDATES') }}</a>
                                                                <ul class="dropdown-menu" id="sm-17149963338979644-12" role="group" aria-hidden="true" aria-labelledby="sm-17149963338979644-11" aria-expanded="false">
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/press-release" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_NEWS_UPDATES_PRESS') }}</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="nav-item level-0 dropdown">
                                                                <a href="javascript:void(0);" class="nav-link has-submenu" id="sm-17149963338979644-13" aria-haspopup="true" aria-controls="sm-17149963338979644-14" aria-expanded="false" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_CITIZEN_CHARTER') }}</a>
                                                                <ul class="dropdown-menu" id="sm-17149963338979644-14" role="group" aria-hidden="true" aria-labelledby="sm-17149963338979644-13" aria-expanded="false">
                                                                    <!-- <li class="dropdown-item level-1">
                                                                        <a href="/accident-detail-receipt" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_CITIZEN_CHARTER_ACCIDENT') }}</a>
                                                                    </li> -->
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/register-complaint" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_CITIZEN_CHARTER_COMPLAINT') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/feedback" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_CITIZEN_CHARTER_FEEDBACK') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/cyber-safety" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_CITIZEN_CHARTER_CYBER_SAFETY_TIPS') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/women-safety" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_CITIZEN_CHARTER_WOMEN_SAFETY_TIPS') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/anti-narcotics" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_CITIZEN_CHARTER_ANTI_NARCOTICS') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/useful-websites" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_CITIZEN_CHARTER_USEFUL_WEBSITES') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/scheduled-cast-tribe" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_CITIZEN_CHARTER_OFFENCE_ACTS') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/PDF/RTI_17_POINT_01_JAN_2025.pdf" target="blank" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_CITIZEN_CHARTER_RIGHT_TO_INFORMATION') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="https://parivahan.gov.in/parivahan//en/content/act-rules-and-policies" class="external" target="_blank" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_CITIZEN_CHARTER_TRAFFIC_RULES') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/PDF/Offence-Details-V13-ADG-Office.pdf" target="_blank" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_CITIZEN_CHARTER_TRAFFIC_FINES') }}</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="nav-item level-0 dropdown">
                                                                <a href="javascript:void(0);" class="nav-link has-submenu" id="sm-17149963338979644-15" aria-haspopup="true" aria-controls="sm-17149963338979644-16" aria-expanded="false" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_POLICE_CORNER') }}</a>
                                                                <ul class="dropdown-menu" id="sm-17149963338979644-16" role="group" aria-hidden="true" aria-labelledby="sm-17149963338979644-15" aria-expanded="false">
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/gradation-list" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_POLICE_CORNER_GRADATION_LIST') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/recruitments" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_POLICE_CORNER_RECRUITMENT') }}</a>
                                                                    </li>
                                                                    <li class="dropdown-item level-1">
                                                                        <a href="/initiatives" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_POLICE_CORNER_INITIATIVES') }}</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="nav-item level-0">
                                                                <a href="/photo-gallery" class="nav-link" data-target="#" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_PHOTO_GALLERY') }}</a>
                                                            </li>
                                                            <li class="nav-item level-0">
                                                                <a href="/contact-us" class="nav-link" data-target="#" style="font-size: 14px;font-weight:600;">{{ __('HEADER_MENU_CONTACT_US') }}</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- <div class="topTicker" data-aos="fade-down" id="maincontent">
                <p>ठळक बातम्या</p>
                <marquee scrollamount="4">
                    @if(count($newsList))
                        @foreach($newsList as $detail)
                            <a @if($detail->MNW_Type == 2) href="{{ $detail->MNW_Link }}" @endif @if($detail->MNW_Type == 3) href="https://jalpanel.ssstest.in/{{ $detail->MNW_Link }}" target="_blank" @endif  title="{{ $detail->MNW_Title }}"><span>@if($detail->MNW_Type == 1) <i class="fa fa-bullhorn mr-2"></i> @endif @if($detail->MNW_Type == 2) <i class="fa fa-link mr-2"></i> @endif @if($detail->MNW_Type == 3) <i class="fa fa-file-pdf-o mr-2"></i> @endif{{ $detail->MNW_Title }}</span></a>
                        @endforeach
                    @endif
                </marquee>
            </div> -->
            <div class="container11">
                <div class="news_feed">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 p-news">
                            <h2 class="newsfeed_label" tabindex="0">{{ __('HEADER_LATEST_NEWS') }}</h2>
                        </div>
                        <div class="col-lg-10 col-md-9">
                            <div class="region region-top-header-one">
                                <div class="views-element-container block block-views block-views-blockscrolling-messag-block-1" id="block-views-block-scrolling-messag-block-1-2">
                                    <div>
                                        <div class="view view-scrolling-messag view-id-scrolling_messag view-display-id-block_1 js-view-dom-id-5d068163e1f095338a00f759eae839d2df488bcd71fd7298784cb59a56561b22">
                                            <div class="view-content">
                                                <div class="news-ticker">
                                                    <div class="newslider bn-effect-scroll bn-direction-ltr" style="height: 40px; line-height: 38px; border-radius: 2px; border-width: 1px;">
                                                        <div class="bn-news" style="right: 90px;">
                                                            <ul style="width: 9336.28px; margin-left: -784px;">
                                                                @if(count($newsList))
                                                                    @foreach($newsList as $detail)
                                                                        <li>
                                                                            <a class="gif-icon" @if($detail->MNW_Type == 2) href="https://panel.jalgaonpolice.gov.in/{{ $detail->MNW_Link }}" target="_blank" @endif @if($detail->MNW_Type == 3) href="{{ $detail->MNW_Link }}" target="_blank" @endif  title="{{ $detail->MNW_Title }}">@if($detail->MNW_Type == 1) <i class="fa fa-bullhorn mr-2"></i> @endif @if($detail->MNW_Type == 2) <i class="fa fa-link mr-2"></i> @endif @if($detail->MNW_Type == 3) <i class="fa fa-file-pdf-o mr-2"></i> @endif{{ $detail->MNW_Title }}</a>
                                                                        </li>
                                                                    @endforeach
                                                                @endif
                                                            </ul>
                                                        </div>
                                                        <div class="bn-controls"><button tabindex="0"><span class="bn-arrow bn-prev" tabindex="0"></span></button><button tabindex="0"><span class="bn-action bn-pause" tabindex="0"></span></button><button tabindex="0"><span class="bn-arrow bn-next" tabindex="0"></span></button></div>
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
            <div class="sticky-icon">
                <a href="https://www.facebook.com/JalgaonPolice" target="_blank" class="Facebook22"><i class="fa fa-facebook-f"> </i> Facebook </a>
                <a href="https://www.instagram.com/jalgaonpolice_/" target="_blank" class="Instagram22"><i class="fa fa-instagram"></i> Instagram </a>
                <a href="https://twitter.com/jalgaonpolice" target="_blank" class="Twitter22"><i class="fa fa-twitter"> </i> Twitter </a>   
                <!-- <a href="https://aboutme.google.com/u/0/?referer=gplus" target="_blank" class="Google22"><i class="fa fa-google-plus-g"> </i> Google + </a> -->
                <a href="https://www.youtube.com/@Jalgaonpolice_" target="_blank" class="Youtube22"><i class="fa fa-youtube"></i> Youtube </a>
            </div>
            <!-- <div class="icon-bar33">
                <a href="https://www.facebook.com/JalgaonPolice" target="_blank" class="facebook33"><i class="fa fa-facebook"></i></a> 
                <a href="https://www.instagram.com/jalgaonpolice_/" target="_blank" class="instagram33"><i class="fa fa-instagram"></i></a>
                <a href="https://twitter.com/jalgaonpolice" target="_blank" class="twitter33"><i class="fa fa-twitter"></i></a> 
                <a href="https://www.youtube.com/@Jalgaonpolice_" target="_blank" class="youtube33"><i class="fa fa-youtube"></i></a> 
            </div> -->
            <div id="chat-circle" class="btn btn-raised">
                <div id="chat-overlay"></div>
                <img src="{{ asset('chat-ui/chat_icon.png') }}" alt="tenant" loading="lazy" width="100" height="100" title="" class="object-cover w-full h-full rounded-xl">
            </div>
            <div class="chat-box">
                <div class="chat-box-header">
                    {{ __('CHATBOT_LEVEL_BOX') }}
                    <span class="chat-box-toggle"><i class="fa fa-times"></i></span>
                </div>
                <div class="chat-box-body">
                    <div class="chat-box-overlay"></div>
                    <div class="chat-logs">
                        <div id="chat" class="conv-form-wrapper">
                            <form action="" method="GET" class="hidden">
                                <select name="level_main" data-callback="storeState" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_title') }}">
                                    <option value="level_cyber_froud">{{ __('CHATBOT_LEVEL_level_cyber_froud') }}</option>
                                    <!-- <option value="level_atm_banking">Compalints </option> -->
                                </select>
                                <div data-conv-fork="level_main">
                                    <div data-conv-case="level_cyber_froud">
                                        <select name="level_cyber_froud" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_title1') }}">
                                            <option value="level_cyber_froud_facebook">{{ __('CHATBOT_LEVEL_level_cyber_froud_facebook') }}</option>
                                            <option value="level_cyber_froud_instagram">{{ __('CHATBOT_LEVEL_level_cyber_froud_instagram') }}</option>
                                            <option value="level_cyber_froud_email">{{ __('CHATBOT_LEVEL_level_cyber_froud_email') }}</option>
                                            <option value="level_cyber_froud_youtube">{{ __('CHATBOT_LEVEL_level_cyber_froud_youtube') }}</option>
                                            <option value="level_cyber_froud_financial">{{ __('CHATBOT_LEVEL_level_cyber_froud_financial') }}</option>
                                            <option value="level_cyber_froud_lost_stolen">{{ __('CHATBOT_LEVEL_level_cyber_froud_lost_stolen') }}</option>
                                            <option value="level_cyber_froud_mobile_hijack">{{ __('CHATBOT_LEVEL_level_cyber_froud_mobile_hijack') }}</option>
                                            <option value="level_cyber_froud_cyber">{{ __('CHATBOT_LEVEL_level_cyber_froud_cyber') }}</option>
                                        </select>
                                    </div>
                                    <div data-conv-case="level_atm_banking">
                                        <select name="level_atm_banking" data-conv-question="Please click the menu or type the number present in front of the following options:">
                                            <option value="level_atm_banking">Report A Complaint</option>
                                            <option value="level_atm_banking">Online Banking</option>
                                        </select>
                                    </div>
                                </div>
                                <div data-conv-fork="level_cyber_froud">
                                    <div data-conv-case="level_cyber_froud_facebook">
                                        <select name="level_cyber_froud_facebook" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_facebook_title') }}">
                                            <option value="level_cyber_froud_facebook_1">{{ __('CHATBOT_LEVEL_level_cyber_froud_facebook_1') }}</option>
                                            <option value="level_cyber_froud_facebook_2">{{ __('CHATBOT_LEVEL_level_cyber_froud_facebook_2') }}</option>
                                            <option value="level_cyber_froud_facebook_3">{{ __('CHATBOT_LEVEL_level_cyber_froud_facebook_3') }}</option>
                                            <option value="level_cyber_froud_facebook_4">{{ __('CHATBOT_LEVEL_level_cyber_froud_facebook_4') }}</option>
                                            <option value="level_cyber_froud_facebook_5">{{ __('CHATBOT_LEVEL_level_cyber_froud_facebook_5') }}</option>
                                        </select>
                                    </div>
                                    <div data-conv-case="level_cyber_froud_instagram">
                                        <select name="level_cyber_froud_instagram" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_instagram_title') }}">
                                            <option value="level_cyber_froud_instagram_1">{{ __('CHATBOT_LEVEL_level_cyber_froud_instagram_1') }}</option>
                                            <option value="level_cyber_froud_instagram_2">{{ __('CHATBOT_LEVEL_level_cyber_froud_instagram_2') }}</option>
                                            <option value="level_cyber_froud_instagram_3">{{ __('CHATBOT_LEVEL_level_cyber_froud_instagram_3') }}</option>
                                            <option value="level_cyber_froud_instagram_4">{{ __('CHATBOT_LEVEL_level_cyber_froud_instagram_4') }}</option>
                                            <option value="level_cyber_froud_instagram_5">{{ __('CHATBOT_LEVEL_level_cyber_froud_instagram_5') }}</option>
                                        </select>
                                    </div>
                                    <div data-conv-case="level_cyber_froud_email">
                                        <select name="level_cyber_froud_email" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_email_title') }}">
                                            <option value="level_cyber_froud_email_1">{{ __('CHATBOT_LEVEL_level_cyber_froud_email_1') }}</option>
                                            <option value="level_cyber_froud_email_2">{{ __('CHATBOT_LEVEL_level_cyber_froud_email_2') }}</option>
                                            <option value="level_cyber_froud_email_3">{{ __('CHATBOT_LEVEL_level_cyber_froud_email_3') }}</option>
                                            <option value="level_cyber_froud_email_4">{{ __('CHATBOT_LEVEL_level_cyber_froud_email_4') }}</option>
                                            <option value="level_cyber_froud_email_5">{{ __('CHATBOT_LEVEL_level_cyber_froud_email_5') }}</option>
                                        </select>
                                    </div>
                                    <div data-conv-case="level_cyber_froud_youtube">
                                        <select name="level_cyber_froud_youtube" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_youtube_title') }}">
                                            <option value="level_cyber_froud_youtube_1">{{ __('CHATBOT_LEVEL_level_cyber_froud_youtube_1') }}</option>
                                            <option value="level_cyber_froud_youtube_2">{{ __('CHATBOT_LEVEL_level_cyber_froud_youtube_2') }}</option>
                                            <option value="level_cyber_froud_youtube_3">{{ __('CHATBOT_LEVEL_level_cyber_froud_youtube_3') }}</option>
                                            <option value="level_cyber_froud_youtube_4">{{ __('CHATBOT_LEVEL_level_cyber_froud_youtube_4') }}</option>
                                            <option value="level_cyber_froud_youtube_5">{{ __('CHATBOT_LEVEL_level_cyber_froud_youtube_5') }}</option>
                                        </select>
                                    </div>
                                    <div data-conv-case="level_cyber_froud_financial">
                                        <select name="level_cyber_froud_financial" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_financial_title') }}">
                                            <option value="level_cyber_froud_financial_1">{{ __('CHATBOT_LEVEL_level_cyber_froud_financial_1') }}</option>
                                            <option value="level_cyber_froud_financial_2">{{ __('CHATBOT_LEVEL_level_cyber_froud_financial_2') }}</option>
                                            <option value="level_cyber_froud_financial_3">{{ __('CHATBOT_LEVEL_level_cyber_froud_financial_3') }}</option>
                                            <option value="level_cyber_froud_financial_4">{{ __('CHATBOT_LEVEL_level_cyber_froud_financial_4') }}</option>
                                            <option value="level_cyber_froud_financial_5">{{ __('CHATBOT_LEVEL_level_cyber_froud_financial_5') }}</option>
                                        </select>
                                    </div>
                                    <div data-conv-case="level_cyber_froud_lost_stolen">
                                        <select name="level_cyber_froud_lost_stolen" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_lost_stolen_title') }}">
                                            <option value="level_cyber_froud_lost_stolen_1">{{ __('CHATBOT_LEVEL_level_cyber_froud_lost_stolen_1') }}</option>
                                            <option value="level_cyber_froud_lost_stolen_2">{{ __('CHATBOT_LEVEL_level_cyber_froud_lost_stolen_2') }}</option>
                                            <option value="level_cyber_froud_lost_stolen_3">{{ __('CHATBOT_LEVEL_level_cyber_froud_lost_stolen_3') }}</option>
                                            <option value="level_cyber_froud_lost_stolen_4">{{ __('CHATBOT_LEVEL_level_cyber_froud_lost_stolen_4') }}</option>
                                            <option value="level_cyber_froud_lost_stolen_5">{{ __('CHATBOT_LEVEL_level_cyber_froud_lost_stolen_5') }}</option>
                                        </select>
                                    </div>
                                    <div data-conv-case="level_cyber_froud_mobile_hijack">
                                        <select name="level_cyber_froud_mobile_hijack" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_mobile_hijack_title') }}">
                                            <option value="level_cyber_froud_mobile_hijack_1">{{ __('CHATBOT_LEVEL_level_cyber_froud_mobile_hijack_1') }}</option>
                                            <option value="level_cyber_froud_mobile_hijack_2">{{ __('CHATBOT_LEVEL_level_cyber_froud_mobile_hijack_2') }}</option>
                                            <option value="level_cyber_froud_mobile_hijack_3">{{ __('CHATBOT_LEVEL_level_cyber_froud_mobile_hijack_3') }}</option>
                                            <option value="level_cyber_froud_mobile_hijack_4">{{ __('CHATBOT_LEVEL_level_cyber_froud_mobile_hijack_4') }}</option>
                                            <option value="level_cyber_froud_mobile_hijack_5">{{ __('CHATBOT_LEVEL_level_cyber_froud_mobile_hijack_5') }}</option>
                                        </select>
                                    </div>
                                    <div data-conv-case="level_cyber_froud_cyber">
                                        <select name="level_cyber_froud_cyber" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_cyber_title') }}">
                                            <option value="level_cyber_froud_cyber_1">{{ __('CHATBOT_LEVEL_level_cyber_froud_cyber_1') }}</option>
                                            <option value="level_cyber_froud_cyber_2">{{ __('CHATBOT_LEVEL_level_cyber_froud_cyber_2') }}</option>
                                            <option value="level_cyber_froud_cyber_3">{{ __('CHATBOT_LEVEL_level_cyber_froud_cyber_3') }}</option>
                                            <option value="level_cyber_froud_cyber_4">{{ __('CHATBOT_LEVEL_level_cyber_froud_cyber_4') }}</option>
                                            <option value="level_cyber_froud_cyber_5">{{ __('CHATBOT_LEVEL_level_cyber_froud_cyber_5') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div data-conv-fork="level_cyber_froud_facebook">
                                    <div data-conv-case="level_cyber_froud_facebook_1">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_facebook_1_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_facebook_2">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_facebook_2_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_facebook_3">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_facebook_3_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_facebook_4">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_facebook_4_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_facebook_5">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_facebook_5_msg') }}" data-no-answer="true">
                                    </div>
                                </div>
                                <div data-conv-fork="level_cyber_froud_instagram">
                                    <div data-conv-case="level_cyber_froud_instagram_1">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_instagram_1_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_instagram_2">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_instagram_2_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_instagram_3">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_instagram_3_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_instagram_4">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_instagram_4_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_instagram_5">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_instagram_5_msg') }}" data-no-answer="true">
                                    </div>
                                </div>
                                <div data-conv-fork="level_cyber_froud_email">
                                    <div data-conv-case="level_cyber_froud_email_1">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_email_1_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_email_2">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_email_2_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_email_3">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_email_3_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_email_4">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_email_4_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_email_5">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_email_5_msg') }}" data-no-answer="true">
                                    </div>
                                </div>
                                <div data-conv-fork="level_cyber_froud_youtube">
                                    <div data-conv-case="level_cyber_froud_youtube_1">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_youtube_1_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_youtube_2">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_youtube_2_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_youtube_3">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_youtube_3_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_youtube_4">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_youtube_4_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_youtube_5">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_youtube_5_msg') }}" data-no-answer="true">
                                    </div>
                                </div>
                                <div data-conv-fork="level_cyber_froud_financial">
                                    <div data-conv-case="level_cyber_froud_financial_1">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_financial_1_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_financial_2">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_financial_2_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_financial_3">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_financial_3_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_financial_4">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_financial_4_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_financial_5">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_financial_5_msg') }}" data-no-answer="true">
                                    </div>
                                </div>
                                <div data-conv-fork="level_cyber_froud_lost_stolen">
                                    <div data-conv-case="level_cyber_froud_lost_stolen_1">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_lost_stolen_1_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_lost_stolen_2">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_lost_stolen_2_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_lost_stolen_3">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_lost_stolen_3_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_lost_stolen_4">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_lost_stolen_4_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_lost_stolen_5">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_lost_stolen_5_msg') }}" data-no-answer="true">
                                    </div>
                                </div>
                                <div data-conv-fork="level_cyber_froud_mobile_hijack">
                                    <div data-conv-case="level_cyber_froud_mobile_hijack_1">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_mobile_hijack_1_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_mobile_hijack_2">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_mobile_hijack_2_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_mobile_hijack_3">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_mobile_hijack_3_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_mobile_hijack_4">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_mobile_hijack_4_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_mobile_hijack_5">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_mobile_hijack_5_msg') }}" data-no-answer="true">
                                    </div>
                                </div>
                                <div data-conv-fork="level_cyber_froud_cyber">
                                    <div data-conv-case="level_cyber_froud_cyber_1">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_cyber_1_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_cyber_2">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_cyber_2_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_cyber_3">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_cyber_3_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_cyber_4">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_cyber_4_msg') }}" data-no-answer="true">
                                    </div>
                                    <div data-conv-case="level_cyber_froud_cyber_5">
                                        <input type="text" data-conv-question="{{ __('CHATBOT_LEVEL_level_cyber_froud_cyber_5_msg') }}" data-no-answer="true">
                                    </div>
                                </div>
                                <select name="callbackTest" data-conv-question="{{ __('CHATBOT_LEVEL_LAST_MSG') }}">
                                    <option value="yes" data-callback="rollback">{{ __('CHATBOT_LEVEL_LAST_OPTION') }}</option>
                                    <!-- <option value="no" data-callback="restore">No</option> -->
                                </select>
                            </form>
                        </div>
                    </div>
                    <!--chat-log -->
                </div>
            </div>
            <div id="copyrightModal" class="modal">
                <div class="modal__inner">
                    <label for="3" onclick="closeModal()"><i class="fa fa-times m-14"></i></label>
                    <div class="modal-container">
                        <div class="modal-header">
                            <h2>Copyright Policy</h2>
                        </div>
                        <div class="modal-mainbody" id="cyberModalBody">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="doDonMain firstCh mt-3">
                                        <div class="doDonImg">
                                            <!-- <img src="{{ asset('images/correct.png') }}" alt="Do's for customers" aria-label="Do's for customers">-->
                                        </div>
                                        <h3 class="mb-4 font-weight-bold">Copyright policy (if the published information is available free of any charge)</h3>
                                        <ul class="list">
                                            <li>Information featured on this website can be re-published in any media form free of any charge only with prior permission from us or concerned respective authority which is owning the website, through email.</li>
                                            <li>Information can be republished as it is available and not to be used in a distorted or misleading manner.</li>
                                            <li>Where the material is being published or suggested to others, the source must be prominently acknowledged.</li>
                                            <li>However, the permission to reproduce this material does not extend to any material on this site, which is explicitly identified as being the copyright of a third party
                                            <br> Copyright policy (if there is a provision to reuse published information)
                                            <br>The information published on the website comes under copyright policy and obtaining authorization for their republish is a pre-requisite.
                                            <br>
                                            
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <!--  <div class="doDonMain mt-3">
                                        <div class="doDonImg">
                                            <img src="{{ asset('images/cancel.png') }}" alt="Don'ts for customers" aria-label="Don'ts for customers">
                                        </div>
                                        <h3 class="mb-4 font-weight-bold">Don’ts</h3>
                                        <ul class="list">
                                            <li>Never share debit card credentials &amp; UPI Pin with a third party</li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="securityModal" class="modal">
                <div class="modal__inner">
                    <label for="3" onclick="closeModal()"><i class="fa fa-times m-14"></i></label>
                    <div class="modal-container">
                        <div class="modal-header">
                            <h2>Security Policy</h2>
                        </div>
                        <div class="modal-mainbody" id="cyberModalBody">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="doDonMain firstCh mt-3">
                                        <div class="doDonImg">
                                            <!-- <img src="{{ asset('images/correct.png') }}" alt="Do's for customers" aria-label="Do's for customers">-->
                                        </div>
                                        <h3 class="mb-4 font-weight-bold">Security Policy</h3>
                                        <ul class="list">
                                            <li>For site security purposes and to ensure that this service remains available to all users, this Government computer system employs commercial software programs to monitor network traffic to identify unauthorized attempts to upload or change information, or otherwise cause damage.</li>
                                            <li>Except for authorized law enforcement investigations, no other attempts are made to identify individual users or their usage habits. Raw data logs are used for no other purposes and are scheduled for regular deletion.</li>
                                            <li> Unauthorized attempts to upload information or change information on this service are strictly prohibited and may be punishable under the Indian IT Act (2000).</li>
                                          
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="termsModal" class="modal">
                <div class="modal__inner">
                    <label for="3" onclick="closeModal()"><i class="fa fa-times m-14"></i></label>
                    <div class="modal-container">
                        <div class="modal-header">
                            <h2>Security Policy</h2>
                        </div>
                        <div class="modal-mainbody" id="cyberModalBody">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="doDonMain firstCh mt-3">
                                        <div class="doDonImg">
                                            <!-- <img src="{{ asset('images/correct.png') }}" alt="Do's for customers" aria-label="Do's for customers">-->
                                        </div>
                                        <h3 class="mb-4 font-weight-bold">Security Policy</h3>
                                        <ul class="list">
                                            <li>The concerned department does not guarantee the availability of linked pages at all times.</li>
                                            <li>If the user visits the information and collects information or downloads files, the following elements may automatically download,
                                            <br>- Your service domain, IP number, how visitors accessed our website.
                                            <br>- browsers and operating systems.
                                            <br>- date and time of users’ visits.
                                            <br>- URLs from which visitors accessed information.
                                            <br>- if the user has visited the website from other websites, details of that website
                                            
                                            </li>
                                            
                                          
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statePopup" style="display: none;">
                <div class="closeStatePopup"></div>
                <div class="jalgaonPSMain statePopupMain">
                    <a href="https://jalgaonpolice.gov.in/police-stations?id=1" target="_blank"><button>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_JAL_CITY') }}</button></a>
                    <a href="https://jalgaonpolice.gov.in/police-stations?id=2" target="_blank"><button>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_JAL_TALUKA') }}</button></a>
                    <a href="https://jalgaonpolice.gov.in/police-stations?id=5" target="_blank"><button>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_JILHAPETH') }}</button></a>
                    <a href="https://jalgaonpolice.gov.in/police-stations?id=6" target="_blank"><button>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_MIDC_CITY') }}</button></a>
                    <a href="https://jalgaonpolice.gov.in/police-stations?id=3" target="_blank"><button>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_SHANIPETH') }}</button></a>
                    <a href="https://jalgaonpolice.gov.in/police-stations?id=4" target="_blank"><button>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_RAMANDAND') }}</button></a>
                    <a href="https://jalgaonpolice.gov.in/police-stations?id=36" target="_blank"><button>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_CYBER') }}</button></a>
                    </div>
                <div class="bhusawalPSMain statePopupMain">
                    <a href="https://jalgaonpolice.gov.in/police-stations?id=8" target="_blank"><button>{{ __('ORG_PAGE_BOX_SDPO_BSL_PS_BAZARPETH') }}</button></a>
                    <a href="https://jalgaonpolice.gov.in/police-stations?id=7" target="_blank"><button>{{ __('ORG_PAGE_BOX_SDPO_BSL_PS_BSL_CITY') }}</button></a>
                    <a href="https://jalgaonpolice.gov.in/police-stations?id=9" target="_blank"><button>{{ __('ORG_PAGE_BOX_SDPO_BSL_PS_BSL_TALUKA') }}</button></a>
                </div>
                <div class="day100Main statePopupMain">
                    <div class="main1">
                        <ul class="cards1">
                            <li class="cards_item1" id="item_fig1">
                            <div class="card1">
                                <div class="card_price1">दि. ७ मे २०२५</div>
                                <div class="card_image1"><img src="100daymain.jpg" alt="A side view of a plate of figs and berries. "></div>
                                <div class="card_content1">
                                <h2 class="card_title1">१०० दिवसांच्या कार्यालयीन सुधारणा कार्यक्रमांतर्गत राज्यस्तरीय गुणगौरव सोहळा – जळगाव जिल्हा पोलिस अधीक्षकांचा भव्य सन्मान !</h2>
                                <div class="card_text1">
                                    <p>मंत्रिमंडळ सभागृह, मंत्रालय, मुंबई – मा. मुख्यमंत्री ना. श्री. देवेंद्र फडणवीस यांच्या हस्ते पोलीस अधीक्षक जळगाव डॉ. महेश्वर रेड्डी यांना 100 दिवस कृती कार्यक्रमात उत्कृष्ट कामगिरी करून राज्यात 3 रा क्रमांक मिळविल्याबद्दल सन्मानित करण्यात आले.</p>
                                    <p>विशेष अभिनंदन – जळगाव जिल्हा पोलीस दलाने 100 दिवस कृती कार्यक्रमामध्ये खालील मुद्द्यांवर उत्कृष्ट कामगिरी केली. नागरिकांसाठी User friendly website बनविणे, नागरिकांना सुलभ सेवा देण्यासाठी जलद पारपत्र व चारित्र्य पडताळणी प्रक्रिया, नागरिकांच्या तक्रारींचा त्वरित निपटारा करण्यासाठी तक्रार निवारण दिवस राबवणे, QR code द्वारे जिल्ह्यातून कुठूनही ऑनलाईन तक्रार नोंदवणे, प्रत्येक कार्यालय व पोलीस ठाण्यात अभ्यागतांच्या सुलभतेसाठी अभ्यागत मदत कक्ष उभारणे, पोलीस ठाण्यात वर्षानुवर्ष पडून असलेल्या निरुपयोगी वाहनांची त्वरित निर्गती करून परिसर स्वच्छता, मुदतबाह्य अभिलेखांचे निर्लेखीकरण, पोलिसांचे मनोबल उंचावण्यासाठी Top Cop Of The Month संकल्पना राबवणे, इत्यादी विभागातून चांगली कामगिरी केल्यामुळे संपूर्ण महाराष्ट्र राज्यातून जळगाव जिल्हा पोलीस दलाने तिसरा क्रमांक पटकाविला आहे..त्याबद्दल संपूर्ण जळगाव जिल्हा पोलीस दलाचे मनःपूर्वक अभिनंदन.</p>
                                    <p>नागरिकांच्या सेवेसाठी जळगाव जिल्हा पोलीस दल सदैव तत्पर आहे!</p>
                                </div>
                                </div>
                            </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="day100Main1 statePopupMain">
                    <div class="container100">
                        <div class="card100">
                            <div class="card__header100">
                                <img src="100daymain.jpg" alt="card__image" class="card__image100" width="600">
                            </div>
                            <div class="card__body100">
                                <div class="scrollbar100 style-100">
                                    <span class="tag100 tag-blue100">दि. ७ मे २०२५</span>
                                    <h3>१०० दिवसांच्या कार्यालयीन सुधारणा कार्यक्रमांतर्गत राज्यस्तरीय गुणगौरव सोहळा – जळगाव जिल्हा पोलिस अधीक्षकांचा भव्य सन्मान !</h3>
                                    <p>मंत्रिमंडळ सभागृह, मंत्रालय, मुंबई – मा. मुख्यमंत्री ना. श्री. देवेंद्र फडणवीस यांच्या हस्ते पोलीस अधीक्षक जळगाव डॉ. महेश्वर रेड्डी यांना 100 दिवस कृती कार्यक्रमात उत्कृष्ट कामगिरी करून राज्यात 3 रा क्रमांक मिळविल्याबद्दल सन्मानित करण्यात आले.</p>
                                    <p>विशेष अभिनंदन – जळगाव जिल्हा पोलीस दलाने 100 दिवस कृती कार्यक्रमामध्ये खालील मुद्द्यांवर उत्कृष्ट कामगिरी केली. नागरिकांसाठी User friendly website बनविणे, नागरिकांना सुलभ सेवा देण्यासाठी जलद पारपत्र व चारित्र्य पडताळणी प्रक्रिया, नागरिकांच्या तक्रारींचा त्वरित निपटारा करण्यासाठी तक्रार निवारण दिवस राबवणे, QR code द्वारे जिल्ह्यातून कुठूनही ऑनलाईन तक्रार नोंदवणे, प्रत्येक कार्यालय व पोलीस ठाण्यात अभ्यागतांच्या सुलभतेसाठी अभ्यागत मदत कक्ष उभारणे, पोलीस ठाण्यात वर्षानुवर्ष पडून असलेल्या निरुपयोगी वाहनांची त्वरित निर्गती करून परिसर स्वच्छता, मुदतबाह्य अभिलेखांचे निर्लेखीकरण, पोलिसांचे मनोबल उंचावण्यासाठी Top Cop Of The Month संकल्पना राबवणे, इत्यादी विभागातून चांगली कामगिरी केल्यामुळे संपूर्ण महाराष्ट्र राज्यातून जळगाव जिल्हा पोलीस दलाने तिसरा क्रमांक पटकाविला आहे..त्याबद्दल संपूर्ण जळगाव जिल्हा पोलीस दलाचे मनःपूर्वक अभिनंदन.</p>
                                    <p>नागरिकांच्या सेवेसाठी जळगाव जिल्हा पोलीस दल सदैव तत्पर आहे!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>