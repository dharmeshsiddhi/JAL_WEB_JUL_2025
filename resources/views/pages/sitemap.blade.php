@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('SITEMAP_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="content_body1">
            <div class="container_common">
                <div id="DivContent">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="text_org"><strong>Menu</strong></h5>
                            <ul class="sitemap mb-30" id="MenusDivID">
                                <li class="li-parent1"><a href="/" title="{{ __('HEADER_MENU_HOME') }}" class="text-dark">{{ __('HEADER_MENU_HOME') }}</a></li>
                                <li class="li-parent1">
                                    <a href="javascript:void(0);" title="{{ __('HEADER_MENU_ABOUT_US') }}" class="text-dark">{{ __('HEADER_MENU_ABOUT_US') }}</a>
                                    <ul style="margin-bottom:0">
                                        <li class="li-parent2"><a class="text-dark" href="/about-district" title="{{ __('HEADER_MENU_ABOUT_US_ABOUT') }}">{{ __('HEADER_MENU_ABOUT_US_ABOUT') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/hall-of-fame" title="{{ __('HEADER_MENU_ABOUT_US_HALL_OF_FAME') }}">{{ __('HEADER_MENU_ABOUT_US_HALL_OF_FAME') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/organization-structure" title="{{ __('HEADER_MENU_ABOUT_US_ORGANIZATION') }}">{{ __('HEADER_MENU_ABOUT_US_ORGANIZATION') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/police-map" title="{{ __('HEADER_MENU_ABOUT_US_POLICE_MAP') }}">{{ __('HEADER_MENU_ABOUT_US_POLICE_MAP') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/senior-officers" title="{{ __('HEADER_MENU_ABOUT_US_SENIOR') }}">{{ __('HEADER_MENU_ABOUT_US_SENIOR') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/police-stations" title="{{ __('HEADER_MENU_ABOUT_US_STATIONS') }}">{{ __('HEADER_MENU_ABOUT_US_STATIONS') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/PDF/policeRank.e52e62bb.pdf" target="_blank" title="{{ __('HEADER_MENU_ABOUT_US_RANK') }}">{{ __('HEADER_MENU_ABOUT_US_RANK') }}</a></li>
                                        <li style="padding-bottom:0" class="li-parent2"><a class="text-dark" href="/PDF/policeFlags.bb53bb5f.pdf" target="_blank" title="{{ __('HEADER_MENU_ABOUT_US_FLAG') }}">{{ __('HEADER_MENU_ABOUT_US_FLAG') }}</a></li>
                                    </ul>
                                </li>
                                <li class="li-parent1">
                                    <a href="javascript:void(0);" title="{{ __('HEADER_MENU_SPECIAL_UNIT') }}" class="text-dark">{{ __('HEADER_MENU_SPECIAL_UNIT') }}</a>
                                    <ul style="margin-bottom:0">
                                        <li class="li-parent2"><a class="text-dark" href="/control-room" title="{{ __('HEADER_MENU_SPECIAL_UNIT_CONTROL_ROOM') }}">{{ __('HEADER_MENU_SPECIAL_UNIT_CONTROL_ROOM') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/local-crime-branch" title="{{ __('HEADER_MENU_SPECIAL_UNIT_LCB') }}">{{ __('HEADER_MENU_SPECIAL_UNIT_LCB') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/district-special-branch" title="{{ __('HEADER_MENU_SPECIAL_UNIT_DSB') }}">{{ __('HEADER_MENU_SPECIAL_UNIT_DSB') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/cctns" title="{{ __('HEADER_MENU_SPECIAL_UNIT_CCTNS') }}">{{ __('HEADER_MENU_SPECIAL_UNIT_CCTNS') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/bdds" title="{{ __('HEADER_MENU_SPECIAL_UNIT_BDDS') }}">{{ __('HEADER_MENU_SPECIAL_UNIT_BDDS') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/economic-offence-wing" title="{{ __('HEADER_MENU_SPECIAL_UNIT_ECONOMIC') }}">{{ __('HEADER_MENU_SPECIAL_UNIT_ECONOMIC') }}</a></li>
                                        <li style="padding-bottom:0" class="li-parent2"><a class="text-dark" href="/traffic-branch" title="{{ __('HEADER_MENU_SPECIAL_UNIT_TRAFFIC_BRANCH') }}">{{ __('HEADER_MENU_SPECIAL_UNIT_TRAFFIC_BRANCH') }}</a></li>
                                    </ul>
                                </li>
                                <li class="li-parent1">
                                    <a href="javascript:void(0);" title="{{ __('HEADER_MENU_NEWS_UPDATES') }}" class="text-dark">{{ __('HEADER_MENU_NEWS_UPDATES') }}</a>
                                    <ul style="margin-bottom:0">
                                        <li style="padding-bottom:0" class="li-parent2"><a class="text-dark" href="/press-release" title="{{ __('HEADER_MENU_NEWS_UPDATES_PRESS') }}">{{ __('HEADER_MENU_NEWS_UPDATES_PRESS') }}</a></li>
                                    </ul>
                                </li>
                                <li class="li-parent1">
                                    <a href="javascript:void(0);" title="{{ __('HEADER_MENU_CITIZEN_CHARTER') }}" class="text-dark">{{ __('HEADER_MENU_CITIZEN_CHARTER') }}</a>
                                    <ul style="margin-bottom:0">
                                        <li class="li-parent2"><a class="text-dark" href="/register-complaint" title="{{ __('HEADER_MENU_CITIZEN_CHARTER_COMPLAINT') }}">{{ __('HEADER_MENU_CITIZEN_CHARTER_COMPLAINT') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/feedback" title="{{ __('HEADER_MENU_CITIZEN_CHARTER_FEEDBACK') }}">{{ __('HEADER_MENU_CITIZEN_CHARTER_FEEDBACK') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/cyber-safety" title="{{ __('HEADER_MENU_CITIZEN_CHARTER_CYBER_SAFETY_TIPS') }}">{{ __('HEADER_MENU_CITIZEN_CHARTER_CYBER_SAFETY_TIPS') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/women-safety" title="{{ __('HEADER_MENU_CITIZEN_CHARTER_WOMEN_SAFETY_TIPS') }}">{{ __('HEADER_MENU_CITIZEN_CHARTER_WOMEN_SAFETY_TIPS') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/anti-narcotics" title="{{ __('HEADER_MENU_CITIZEN_CHARTER_ANTI_NARCOTICS') }}">{{ __('HEADER_MENU_CITIZEN_CHARTER_ANTI_NARCOTICS') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/useful-websites" title="{{ __('HEADER_MENU_CITIZEN_CHARTER_USEFUL_WEBSITES') }}">{{ __('HEADER_MENU_CITIZEN_CHARTER_USEFUL_WEBSITES') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/scheduled-cast-tribe" title="{{ __('HEADER_MENU_CITIZEN_CHARTER_OFFENCE_ACTS') }}">{{ __('HEADER_MENU_CITIZEN_CHARTER_OFFENCE_ACTS') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/PDF/RTI_17_POINT_01_JAN_2025.pdf" target="_blank" title="{{ __('HEADER_MENU_CITIZEN_CHARTER_RIGHT_TO_INFORMATION') }}">{{ __('HEADER_MENU_CITIZEN_CHARTER_RIGHT_TO_INFORMATION') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/https://parivahan.gov.in/parivahan//en/content/act-rules-and-policies" title="{{ __('HEADER_MENU_CITIZEN_CHARTER_TRAFFIC_RULES') }}">{{ __('HEADER_MENU_CITIZEN_CHARTER_TRAFFIC_RULES') }}</a></li>
                                        <li style="padding-bottom:0" class="li-parent2"><a class="text-dark" href="/PDF/Offence-Details-V13-ADG-Office.pdf" target="_blank" title="{{ __('HEADER_MENU_CITIZEN_CHARTER_TRAFFIC_FINES') }}">{{ __('HEADER_MENU_CITIZEN_CHARTER_TRAFFIC_FINES') }}</a></li>
                                    </ul>
                                </li>
                                <li class="li-parent1">
                                    <a href="javascript:void(0);" title="{{ __('HEADER_MENU_POLICE_CORNER') }}" class="text-dark">{{ __('HEADER_MENU_POLICE_CORNER') }}</a>
                                    <ul style="margin-bottom:0">
                                        <li class="li-parent2"><a class="text-dark" href="/gradation-list" title="{{ __('HEADER_MENU_POLICE_CORNER_GRADATION_LIST') }}">{{ __('HEADER_MENU_POLICE_CORNER_GRADATION_LIST') }}</a></li>
                                        <li class="li-parent2"><a class="text-dark" href="/recruitments" title="{{ __('HEADER_MENU_POLICE_CORNER_RECRUITMENT') }}">{{ __('HEADER_MENU_POLICE_CORNER_RECRUITMENT') }}</a></li>
                                        <li style="padding-bottom:0" class="li-parent2"><a class="text-dark" href="/initiatives" title="{{ __('HEADER_MENU_POLICE_CORNER_INITIATIVES') }}">{{ __('HEADER_MENU_POLICE_CORNER_INITIATIVES') }}</a></li>
                                    </ul>
                                </li>
                                <li class="li-parent1"><a href="/photo-gallery" title="{{ __('HEADER_MENU_PHOTO_GALLERY') }}" class="text-dark">{{ __('HEADER_MENU_PHOTO_GALLERY') }}</a></li>
                                <li class="li-parent1"><a href="/contact-us" title="{{ __('HEADER_MENU_CONTACT_US') }}" class="text-dark">{{ __('HEADER_MENU_CONTACT_US') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
