@extends("layout.app") 
@section('inlineStyle')
<style>
    .zoom-custom {
        transition: transform .2s; /* Animation */
    }

    .zoom-custom:hover {
        transform: scale(1.7); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

    .click-btn {
        display: flex;
        width: 80px;
        height: 40px;
        justify-content: center;
        align-items: center;
        line-height: 35px;
        border: 1px solid;
        border-radius: 5px;
        text-align: center;
        font-size: 18px;
        color: #000;
        text-decoration: none;
        transition: all 0.35s;
        box-sizing: border-box;
    }

    .buttons-wrapper {
        display: flex;
        flex-wrap: wrap;
    }
    
    .btn-style905 {
        position: relative;
        border-width: 5px;
        border-color: #716eef;
        color: #fff;
        box-sizing: border-box;
        background-image: linear-gradient(to right, #9a395b, #4e89fd);
    }
    .btn-style905::before {
        width: 120%;
        height: 155%;
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 20px;
        border: 1px solid #3936af;
        opacity: 0;
        transform: translate(-50%, -50%) scale(1.1);
        transform-origin: center center;
        transition: all 0.25s;
        content: "";
    }
    .btn-style905:hover {
        background-color: #3936af;
        border-color: #716eef;
        border-style: inset;
        border-radius: 20px;
        color: #fff;
    }
    .btn-style905:hover::before {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }
</style>
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('USEFUL_WEBSITES_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-1"></div>
            <div class="col-md-10" id="ajaxResponseData" style="overflow-x:auto;">
                <table class="table table-hover table-bordered table-responsive-md mt-10">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center" width="10%">{{ __('USEFUL_WEBSITES_PAGE_TABLE_LOGO') }}</th>
                            <th scope="col">{{ __('USEFUL_WEBSITES_PAGE_TABLE_TITLE') }}</th>
                            <th scope="col" class="text-center" width="5%">{{ __('USEFUL_WEBSITES_PAGE_TABLE_LINK') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/mahapolice.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://www.mahapolice.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/acb.jpeg') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_ANTI_CORRUPTION') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://acbmaharashtra.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/cybercrime.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_CYBER_REPORTING') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://cybercrime.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/maharshtra_gov.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_GOV') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://www.maharashtra.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/maharshtra_gov.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_HOME_DEPT') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://home.maharashtra.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/citizen.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_CCTNS') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://citizen.mahapolice.gov.in/Citizen/MH/index.aspx" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/aplesarkar.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_APLE_SARKAR') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://aaplesarkar.mahaonline.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/india_gov.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_GOV_INDIA') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://www.india.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/umang.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_UMANG') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://web.umang.gov.in/landing/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/mygov.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_MYGOV') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://www.mygov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/digilocker.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_DIGILOCKER') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://www.digilocker.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/csc.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_CSC') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://csc.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/digital_india.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_DIGITAL_INDIA') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://www.digitalindia.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/home_ministry.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_HOME_AFFAIR_MINISTRY') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://mha.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/clearance.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_POLICE_CLEARANCE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://pcs.mahaonline.gov.in/Forms/Home.aspx" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/frro.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_FRRO') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://indianfrro.gov.in/eservices/home.jsp" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/cid.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_CID') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://mahacid.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/constitution.jpg') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_CONSTITUTE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://www.indiacode.nic.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/supreme.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_SUPREME_COURT') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://www.sci.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/high_court.jpg') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_HIGH_COURT') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://bombayhighcourt.nic.in/index.php" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/njdg.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_NJDG') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://njdg.ecourts.gov.in/njdg_v3/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/bprd.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_BPRD') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://bprd.nic.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/msphc.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_MSPHC') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://msphc.org/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/cpr.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_CPRPUNE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://cprpune.org/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/mumbai_police.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_MUMBAI_POLICE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://mumbaipolice.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/mahapolice.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_DHULE_POLICE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://dhulepolice.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/mahapolice.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_NDB_POLICE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://nandurbar.mahapolice.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/mahapolice.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_NASHIK_CITY_POLICE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://nashikcitypolice.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/mahapolice.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_NASHIK_RURAL_POLICE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://www.nashikruralpolice.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/mahapolice.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_NAGAR_POLICE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://www.ahmednagardistpolice.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><img class="bottomLogo zoom-custom" style="height:35px;margin-right:0;" src="{{ asset('useful/collector.png') }}" alt="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}" title="{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}"></td>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_JAL_COLLECTOR') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://jalgaon.gov.in/" class="click-btn btn-style905"><i class="fa fa-link"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
@endsection
