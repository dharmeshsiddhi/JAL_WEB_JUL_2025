@extends("layout.app") 
@section('inlineStyle')
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
                            <th scope="col">{{ __('USEFUL_WEBSITES_PAGE_TABLE_TITLE') }}</th>
                            <th scope="col" class="text-center" width="10%">{{ __('USEFUL_WEBSITES_PAGE_TABLE_LINK') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_POLICE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://www.mahapolice.gov.in/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_CYBER_REPORTING') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://cybercrime.gov.in/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_MAHA_GOV') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://www.maharashtra.gov.in/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_HOME_DEPT') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://home.maharashtra.gov.in/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_CCTNS') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://citizen.mahapolice.gov.in/Citizen/MH/index.aspx" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_APLE_SARKAR') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://aaplesarkar.mahaonline.gov.in/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_GOV_INDIA') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://www.india.gov.in/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_HOME_AFFAIR_MINISTRY') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://mha.gov.in/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_POLICE_CLEARANCE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://pcs.mahaonline.gov.in/Forms/Home.aspx" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_FRRO') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://indianfrro.gov.in/eservices/home.jsp" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_CID') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://mahacid.gov.in/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_CONSTITUTE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://www.indiacode.nic.in/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_SUPREME_COURT') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://www.sci.gov.in/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_HIGH_COURT') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://bombayhighcourt.nic.in/index.php" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_NJDG') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://njdg.ecourts.gov.in/njdg_v3/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_BPRD') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://bprd.nic.in/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_MSPHC') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://msphc.org/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_CPRPUNE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://cprpune.org/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_MUMBAI_POLICE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://mumbaipolice.gov.in/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_DHULE_POLICE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://dhulepolice.gov.in/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                        <tr>
                            <td class="v-center">{{ __('USEFUL_WEBSITES_PAGE_TABLE_NDB_POLICE') }}</td>
                            <td><a target="_blank" rel="noopener noreferrer" href="https://nandurbar.mahapolice.gov.in/" class="btn btn-danger btn-lg btn-block"><i class="fa fa-link mr-2"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
@endsection
