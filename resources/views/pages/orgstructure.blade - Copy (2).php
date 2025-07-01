@extends("layout.app") 
@section('inlineStyle')
<link rel="stylesheet" href="{{ asset('css/organizational_structure_new.css') }}">
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('ORG_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-12">
                <ol class="organizational-chart-main">
                    <li>
                        <div>
                            <img src="{{ asset('images/logo_white.png') }}" class="m-2" width="50" alt="">
                            <h1>{{ __('ORG_PAGE_BOX_SP') }}</h1>
                        </div>
                        <ol>
                            <li>
                                <div id="parentDiv1" class="box" onclick="showHideBranch(1)" style="cursor:pointer">
                                    <img src="{{ asset('images/logo_white.png') }}" class="m-2" width="50" alt="">
                                    <h3>{{ __('ORG_PAGE_BOX_ADD_JAL') }}</h3>
                                </div>
                            </li>
                            <li>
                                <div id="parentDiv2" onclick="showHideBranch(2)" style="cursor:pointer">
                                    <img src="{{ asset('images/logo_white.png') }}" class="m-2" width="50" alt="">
                                    <h3>{{ __('ORG_PAGE_BOX_ADD_CHAL') }}</h3>
                                </div>
                            </li>
                            <li>
                                <div id="parentDiv3" onclick="showHideBranch(3)" style="cursor:pointer">
                                    <img src="{{ asset('images/logo_white.png') }}" class="m-2" width="50" alt="">
                                    <h3>{{ __('ORG_PAGE_BOX_ADD_SPECIAL') }}</h3>
                                </div>
                            </li>
                        </ol>
                    </li>
                </ol>
                <div class="div-shadow" style="margin-top:25px;">
                    <ol class="organizational-chart" style="padding:20px;">
                        <li id="branchDiv1">
                            <div>
                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                <h3 style="color:white">{{ __('ORG_PAGE_BOX_ADD_JAL') }}</h3>
                            </div>
                            <ol>
                                <li>
                                    <div>
                                        
                                        <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                        <h3>{{ __('ORG_PAGE_BOX_SDPO_JAL') }}</h3>
                                    </div>
                                    <ol>
                                    <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=6" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_MIDC_CITY') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=1" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_JAL_CITY') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=5" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_JILHAPETH') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=3" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_SHANIPETH') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=4" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_RAMANDAND') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=2" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_JAL_TALUKA') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=36" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_JAL_PS_CYBER') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                        <h3>{{ __('ORG_PAGE_BOX_SDPO_BSL') }}</h3>
                                    </div>
                                    <ol>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=7" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_BSL_PS_BSL_CITY') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=9" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_BSL_PS_BSL_TALUKA') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=8" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_BSL_PS_BAZARPETH') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=10" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_BSL_PS_NASHIRABAD') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                        <h3>{{ __('ORG_PAGE_BOX_SDPO_MKT') }}</h3>
                                    </div>
                                    <ol>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=15" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_MKT_PS_MKT') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=16" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_MKT_PS_BODWAD') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=18" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_MKT_PS_SAVDA') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=17" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_MKT_PS_VARANGAON') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                        <h3>{{ __('ORG_PAGE_BOX_SDPO_FZP') }}</h3>
                                    </div>
                                    <ol>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=13" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_FZP_PS_FZP') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=11" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_FZP_PS_RAVER') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=14" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_FZP_PS_YAWAL') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=12" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_FZP_PS_NIMBHORA') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li id="branchDiv2" style="display:none">
                            <div>
                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                <h3 style="color:white">{{ __('ORG_PAGE_BOX_ADD_CHAL') }}</h3>
                            </div>
                            <ol>
                                <li>
                                    <div>
                                        <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                        <h3>{{ __('ORG_PAGE_BOX_SDPO_CHL') }}</h3>
                                    </div>
                                    <ol>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=19" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_CHL_PS_CHL_CITY') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=20" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_CHL_PS_CHL_RURAL') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=21" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_CHL_PS_BHADGAON') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=22" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_CHL_PS_MEHUNBARE') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=23" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_CHL_PS_KASODA') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                        <h3>{{ __('ORG_PAGE_BOX_SDPO_PCHR') }}</h3>
                                    </div>
                                    <ol>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=24" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_PCHR_PS_PCHR') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=27" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_PCHR_PS_PAHUR') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=26" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_PCHR_PS_JAMNER') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=25" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_PCHR_PS_PIMPALGAON') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=37" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_PCHR_PS_FATTEPUR') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                        <h3>{{ __('ORG_PAGE_BOX_SDPO_AML') }}</h3>
                                    </div>
                                    <ol>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=28" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_AML_PS_AML') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=29" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_AML_PS_PAROLA') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=30" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_AML_PS_ERANDOL') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=31" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_AML_PS_MARWAD') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                        <h3>{{ __('ORG_PAGE_BOX_SDPO_CHOP') }}</h3>
                                    </div>
                                    <ol>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=32" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_CHOP_PS_CHOP_CITY') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=33" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_CHOP_PS_CHOP_RURAL') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=35" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_CHOP_PS_DHARNGAON') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/police-stations?id=34" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_SDPO_CHOP_PS_ADAWAD') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li id="branchDiv3" style="display:none">
                            <div>
                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                <h3 style="color:white">{{ __('ORG_PAGE_BOX_ADD_SPECIAL') }}</h3>
                            </div>
                            <ol>
                                <li>
                                    <div>
                                        <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                        <h3>{{ __('ORG_PAGE_BOX_BRANCH_DSB') }}</h3>
                                    </div>
                                    <ol>
                                        
                                        <li>
                                            <div>
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <h3>{{ __('ORG_PAGE_BOX_BRANCH_DSB_PS_ATB') }}</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <h3>{{ __('ORG_PAGE_BOX_BRANCH_DSB_PS_PASSPORT') }}</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <h3>{{ __('ORG_PAGE_BOX_BRANCH_CHAR_VERIFICATION') }}</h3>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                        <h3>{{ __('ORG_PAGE_BOX_BRANCH_TRF') }}</h3>
                                    </div>
                                    <ol>
                                        <li>
                                            <div>
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <h3>{{ __('ORG_PAGE_BOX_BRANCH_TRF_PS_TRF_JAL') }}</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <h3>{{ __('ORG_PAGE_BOX_BRANCH_TRF_PS_TRF_BSL') }}</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <h3>{{ __('ORG_PAGE_BOX_BRANCH_TRF_PS_TRF_CHAL') }}</h3>
                                            </div>
                                        </li>
                                        
                                    </ol>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                        <h3>{{ __('ORG_PAGE_BOX_BRANCH_LCB') }}</h3>
                                    </div>
                                    <ol>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/local-crime-branch" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_BRANCH_LCB_PS_LCB') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="https://jalgaonpolice.gov.in/economic-offence-wing" target="_blank">
                                                    <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                    <h3>{{ __('ORG_PAGE_BOX_BRANCH_LCB_PS_EOW') }}</h3>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <img src="{{ asset('images/mlogo.png') }}" class="m-2" width="50" alt="">
                                                <h3>{{ __('ORG_PAGE_BOX_BRANCH_LCB_PS_HUMAN_TRF') }}</h3>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection