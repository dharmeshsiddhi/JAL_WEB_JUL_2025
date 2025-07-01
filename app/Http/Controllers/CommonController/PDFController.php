<?php

namespace App\Http\Controllers\CommonController;

use App\Http\Controllers\SettingController;
use Request;
use App\Models\MasterModel;
use App\Models\ReportModel;
use App\Models\EntryModel;
use App\Models\ConstructionModel;
use App\Models\LocationModel;
use PDF;
use DB;
use Carbon\Carbon;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Storage;
use \Exception;

class PDFController extends SettingController {

    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for print customer wise project list
     */
    public function printGenerateReportCustomerWiseProjectListPDF() {
        $this->checkProfileSession();

        $HTTP_ORIGIN = $_SERVER['HTTP_ORIGIN'].'/';
        $HTTP_REFERER = $_SERVER['HTTP_REFERER'];
        $segment = str_replace($HTTP_ORIGIN, '', $HTTP_REFERER);
        if(session('RoleArray')) {
            foreach(session('RoleArray') as $roleDetail) {
                if($roleDetail->MM_Menu_Url == $segment) {
                    if($roleDetail->RP_Report == 0) {
                        return $msg = '<div class="alert alert-danger pb-0 pt-2"><h6>You do not have permission to access this section. contact administrator for further details !</h6></div>';
                    }
                }
            }
        }

        if(session('SID_ESWIMS_SES')) {
            $data['projectList'] = session('sess_rp_cust_wise_project_list');
            $data['customerDetail'] = session('sess_rp_cust_wise_project_customer');
            $data['totalCount'] = session('sess_rp_cust_wise_project_total');
            $data['totalOpen'] = session('sess_rp_cust_wise_project_open');
            $data['totalClose'] = session('sess_rp_cust_wise_project_close');
            
            $data['dateTime'] = Carbon::now()->format('d-m-Y  H:i:s');
            $pdf = PDF::loadView('print.print_generate_report_customer_wise_project_list_pdf', $data);
            $current = Carbon::now()->timestamp;
            return $pdf->download($current.'.pdf');
        } else {
            return view("auth.login");
        }
    }
    
    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for print revisit form list
     */
    public function printGenerateRevisitFormListPDF() {
        $this->checkProfileSession();

        $HTTP_ORIGIN = $_SERVER['HTTP_ORIGIN'].'/';
        $HTTP_REFERER = $_SERVER['HTTP_REFERER'];
        $segment = str_replace($HTTP_ORIGIN, '', $HTTP_REFERER);
        if(session('RoleArray')) {
            foreach(session('RoleArray') as $roleDetail) {
                if($roleDetail->MM_Menu_Url == $segment) {
                    if($roleDetail->RP_Report == 0) {
                        return $msg = '<div class="alert alert-danger pb-0 pt-2"><h6>You do not have permission to access this section. contact administrator for further details !</h6></div>';
                    }
                }
            }
        }

        if(session('SID_ESWIMS_SES')) {
            $data['projectList'] = session('sess_revisit_form_list');
            $data['customerDetail'] = session('sess_revisit_form_customer');
            $data['totalCount'] = session('sess_revisit_form_total');
            $data['totalOpen'] = session('sess_revisit_form_open');
            $data['totalClose'] = session('sess_revisit_form_close');
            
            $data['dateTime'] = Carbon::now()->format('d-m-Y  H:i:s');
            $pdf = PDF::loadView('print.print_generate_revisit_form_list_pdf', $data);
            $current = Carbon::now()->timestamp;
            return $pdf->download($current.'.pdf');
        } else {
            return view("auth.login");
        }
    }
    
    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for print revisit form list
     */
    public function printGenerateSupplierRatioListPDF() {
        $this->checkProfileSession();

        $HTTP_ORIGIN = $_SERVER['HTTP_ORIGIN'].'/';
        $HTTP_REFERER = $_SERVER['HTTP_REFERER'];
        $segment = str_replace($HTTP_ORIGIN, '', $HTTP_REFERER);
        if(session('RoleArray')) {
            foreach(session('RoleArray') as $roleDetail) {
                if($roleDetail->MM_Menu_Url == $segment) {
                    if($roleDetail->RP_Report == 0) {
                        return $msg = '<div class="alert alert-danger pb-0 pt-2"><h6>You do not have permission to access this section. contact administrator for further details !</h6></div>';
                    }
                }
            }
        }

        if(session('SID_ESWIMS_SES')) {
            $data['supplierList'] = session('sess_rp_ratio_list');
            $data['type'] = session('sess_rp_ratio_type');
            $data['totalSupplier'] = session('sess_rp_ratio_total');
            
            $data['dateTime'] = Carbon::now()->format('d-m-Y  H:i:s');
            $pdf = PDF::loadView('print.print_generate_report_supplier_ratio_list_pdf', $data);
            $current = Carbon::now()->timestamp;
            return $pdf->download($current.'.pdf');
        } else {
            return view("auth.login");
        }
    }
    
    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for print revisit form list
     */
    public function printGenerateSupplierRatioListPDFSingle() {
        $this->checkProfileSession();

        $HTTP_ORIGIN = $_SERVER['HTTP_ORIGIN'].'/';
        $HTTP_REFERER = $_SERVER['HTTP_REFERER'];
        $segment = str_replace($HTTP_ORIGIN, '', $HTTP_REFERER);
        if(session('RoleArray')) {
            foreach(session('RoleArray') as $roleDetail) {
                if($roleDetail->MM_Menu_Url == $segment) {
                    if($roleDetail->RP_Report == 0) {
                        return $msg = '<div class="alert alert-danger pb-0 pt-2"><h6>You do not have permission to access this section. contact administrator for further details !</h6></div>';
                    }
                }
            }
        }

        $constructionModel = new ConstructionModel();
        $reportModel = new ReportModel();
        $masterModel = new MasterModel();

        if(session('SID_ESWIMS_SES')) {
            $id = request()->get('id');
            $data['type'] = request()->get('type');
            $percent = request()->get('percent');

            if(session('SID_ESWIMS_SES')->userType == 1) {
                $userIds = $masterModel->getAllUsersListIds();
            } else {
                $userIds[] = session('SID_ESWIMS_SES')->userId;
            }

            if($data['type'] == 0) {
                $data['supplierList'] = $constructionModel->getMasterCementSupplierDetailById($id);
                if(count($data['supplierList']) > 0) {
                    foreach($data['supplierList'] as $detail) {
                        $detail->visitsCount = 0;
                        $detail->visitsPer = $percent;
                        $visitsList = $reportModel->getAllVisitsCountBySupplierType($data['type'],$detail->MCSUP_ID,$userIds);
                        $detail->visitsList = $visitsList;
                        $detail->visitsCount = count($visitsList);
                    }
                }
            } else {
                $data['supplierList'] = $constructionModel->getMasterSteelSupplierDetailById($id);
                if(count($data['supplierList']) > 0) {
                    $i=0;foreach($data['supplierList'] as $detail) {
                        $detail->visitsCount = 0;
                        $detail->visitsPer = $percent;
                        $visitsList = $reportModel->getAllVisitsCountBySupplierType($data['type'],$detail->MSSUP_ID,$userIds);
                        $detail->visitsList = $visitsList;
                        $detail->visitsCount = count($visitsList);
                        $i++;
                    }
                }
            }
            
            $data['dateTime'] = Carbon::now()->format('d-m-Y  H:i:s');
            $pdf = PDF::loadView('print.print_generate_report_supplier_ratio_list_single_pdf', $data);
            $current = Carbon::now()->timestamp;
            return $pdf->download($current.'.pdf');
        } else {
            return view("auth.login");
        }
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for print customer wise project list
     */
    public function printGenerateReportCustomerWiseVisitsHistoryListPDF() {
        $this->checkProfileSession();

        $HTTP_ORIGIN = $_SERVER['HTTP_ORIGIN'].'/';
        $HTTP_REFERER = $_SERVER['HTTP_REFERER'];
        $segment = str_replace($HTTP_ORIGIN, '', $HTTP_REFERER);
        if(session('RoleArray')) {
            foreach(session('RoleArray') as $roleDetail) {
                if($roleDetail->MM_Menu_Url == $segment) {
                    if($roleDetail->RP_Report == 0) {
                        return $msg = '<div class="alert alert-danger pb-0 pt-2"><h6>You do not have permission to access this section. contact administrator for further details !</h6></div>';
                    }
                }
            }
        }

        $constructionModel = new ConstructionModel();
        $entryModel = new EntryModel();
        $masterModel = new MasterModel();

        if(session('SID_ESWIMS_SES')->userType == 1) {
            $userIds = $masterModel->getAllUsersListIds();
        } else {
            $userIds[] = session('SID_ESWIMS_SES')->userId;
        }
        if(session('SID_ESWIMS_SES')) {
            $id = request()->get('id');
            $data['projectList'] = $entryModel->getFilterCustomerProjectDetailByProjectId($id);
            if(count($data['projectList']) > 0) {
                foreach($data['projectList'] as $detail) {
                    $visitList = $entryModel->getAllVisitsListByProjectId($detail->SEM_ID,$userIds);
                    if(count($visitList) > 0) {
                        foreach($visitList as $visitDetail) {
                            $visitDetail->MCS_Name = '- - -';
                            $visitDetail->MCL_Name = '- - -';
                            $visitDetail->MCMB_Name = '- - -';
                            $visitDetail->MSTB_Name = '- - -';
                            $visitDetail->SEVD_Cement_Supplier_Name = '- - -';
                            $visitDetail->SEVD_Steel_Supplier_Name = '- - -';
                            $stageDetail = $constructionModel->getMasterStageDetailById($visitDetail->SEVD_Constr_Stage_Id);
                            if(count($stageDetail) > 0) {
                                $visitDetail->MCS_Name = $stageDetail[0]->MCS_Name;
                            }
                            $levelDetail = $constructionModel->getMasterLevelDetailById($visitDetail->SEVD_Constr_Level_Id);
                            if(count($levelDetail) > 0) {
                                $visitDetail->MCL_Name = $levelDetail[0]->MCL_Name;
                            }
                            $cementBrandDetail = $constructionModel->getMasterCementBrandDetailById($visitDetail->SEVD_Cement_Brand_Id);
                            if(count($cementBrandDetail) > 0) {
                                $visitDetail->MCMB_Name = $cementBrandDetail[0]->MCMB_Name;
                            }
                            $steelBrandDetail = $constructionModel->getMasterSteelBrandDetailById($visitDetail->SEVD_Steel_Brand_Id);
                            if(count($steelBrandDetail) > 0) {
                                $visitDetail->MSTB_Name = $steelBrandDetail[0]->MSTB_Name;
                            }
                            $cementSupplierDetail = $constructionModel->getMasterCementSupplierDetailById($visitDetail->SEVD_Cement_Supplier_Id);
                            if(count($cementSupplierDetail) > 0) {
                                $visitDetail->SEVD_Cement_Supplier_Name = $cementSupplierDetail[0]->MCSUP_Name;
                            }
                            $steelSupplierDetail = $constructionModel->getMasterSteelSupplierDetailById($visitDetail->SEVD_Steel_Supplier_Id);
                            if(count($steelSupplierDetail) > 0) {
                                $visitDetail->SEVD_Steel_Supplier_Name = $steelSupplierDetail[0]->MSSUP_Name;
                            }
                        }
                    }
                    $detail->totalVisits = count($visitList);
                    $detail->visitList = $visitList;
                }
            }
            
            $data['dateTime'] = Carbon::now()->format('d-m-Y  H:i:s');
            $pdf = PDF::loadView('print.print_generate_report_customer_wise_visits_history_list_pdf', $data);
            $current = Carbon::now()->timestamp;
            return $pdf->download($current.'.pdf');
        } else {
            return view("auth.login");
        }
    }
    
    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for print customer wise project list
     */
    public function printGenerateReportProjectListByCityTownVillagePDF() {
        $this->checkProfileSession();

        $HTTP_ORIGIN = $_SERVER['HTTP_ORIGIN'].'/';
        $HTTP_REFERER = $_SERVER['HTTP_REFERER'];
        $segment = str_replace($HTTP_ORIGIN, '', $HTTP_REFERER);
        if(session('RoleArray')) {
            foreach(session('RoleArray') as $roleDetail) {
                if($roleDetail->MM_Menu_Url == $segment) {
                    if($roleDetail->RP_Report == 0) {
                        return $msg = '<div class="alert alert-danger pb-0 pt-2"><h6>You do not have permission to access this section. contact administrator for further details !</h6></div>';
                    }
                }
            }
        }

        $locationModel = new LocationModel();

        if(session('SID_ESWIMS_SES')) {
            $data['visitsList'] = session('sess_rp_project_town_list');
            $data['districtId'] = session('sess_rp_project_town_district');
            $data['talukaId'] = session('sess_rp_project_town_taluka');
            $data['cityId'] = session('sess_rp_project_town_city');
            $data['status'] = session('sess_rp_project_town_status');

            if($data['districtId'] != 'all') {
                $result = $locationModel->getMasterDistrictDetailById($data['districtId']);
                if(count($result) > 0) {
                    $data['districtId'] = $result[0]->MDST_Name;
                }
            }
            if($data['talukaId'] != 'all') {
                $result = $locationModel->getMasterTalukaDetailById($data['talukaId']);
                if(count($result) > 0) {
                    $data['talukaId'] = $result[0]->MTAL_Name;
                }
            }
            if($data['cityId'] != 'all') {
                $result = $locationModel->getMasterCityDetailById($data['cityId']);
                if(count($result) > 0) {
                    $data['cityId'] = $result[0]->MCTY_Name;
                }
            }

            $data['dateTime'] = Carbon::now()->format('d-m-Y  H:i:s');
            $pdf = PDF::loadView('print.print_generate_report_project_list_by_city_town_village_pdf', $data);
            $current = Carbon::now()->timestamp;
            return $pdf->download($current.'.pdf');
        } else {
            return view("auth.login");
        }
    }
    
    
    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for print customer wise project list
     */
    public function printGenerateReportCustomReportPDF() {
        $this->checkProfileSession();

        $HTTP_ORIGIN = $_SERVER['HTTP_ORIGIN'].'/';
        $HTTP_REFERER = $_SERVER['HTTP_REFERER'];
        $segment = str_replace($HTTP_ORIGIN, '', $HTTP_REFERER);
        if(session('RoleArray')) {
            foreach(session('RoleArray') as $roleDetail) {
                if($roleDetail->MM_Menu_Url == $segment) {
                    if($roleDetail->RP_Report == 0) {
                        return $msg = '<div class="alert alert-danger pb-0 pt-2"><h6>You do not have permission to access this section. contact administrator for further details !</h6></div>';
                    }
                }
            }
        }

        $constructionModel = new ConstructionModel();
        $locationModel = new LocationModel();

        if(session('SID_ESWIMS_SES')) {
            $data['visitsList'] = session('sess_rp_custom_report_list');
            $data['status'] = session('sess_rp_custom_report_status');
            $data['workId'] = session('sess_rp_custom_report_work');
            $data['stageId'] = session('sess_rp_custom_report_stage');
            $data['levelId'] = session('sess_rp_custom_report_level');
            $data['cementId'] = session('sess_rp_custom_report_cbrand');
            $data['steelId'] = session('sess_rp_custom_report_sbrand');
            $data['districtId'] = session('sess_rp_custom_report_district');
            $data['talukaId'] = session('sess_rp_custom_report_taluka');
            $data['cityId'] = session('sess_rp_custom_report_city');
            $data['min'] = session('sess_rp_custom_report_min');
            $data['max'] = session('sess_rp_custom_report_max');

            if($data['workId'] != 'all') {
                $result = $constructionModel->getMasterWorkTypeDetailById($data['workId']);
                if(count($result) > 0) {
                    $data['workId'] = $result[0]->MSIT_Name;
                }
            }
            if($data['stageId'] != 'all') {
                $result = $constructionModel->getMasterStageDetailById($data['stageId']);
                if(count($result) > 0) {
                    $data['stageId'] = $result[0]->MCS_Name;
                }
            }
            if($data['levelId'] != 'all') {
                $result = $constructionModel->getMasterLevelDetailById($data['levelId']);
                if(count($result) > 0) {
                    $data['levelId'] = $result[0]->MCL_Name;
                }
            }
            if($data['cementId'] != 'all') {
                $result = $constructionModel->getMasterCementBrandDetailById($data['cementId']);
                if(count($result) > 0) {
                    $data['cementId'] = $result[0]->MCMB_Name;
                }
            }
            if($data['steelId'] != 'all') {
                $result = $constructionModel->getMasterSteelBrandDetailById($data['steelId']);
                if(count($result) > 0) {
                    $data['steelId'] = $result[0]->MSTB_Name;
                }
            }
            if($data['districtId'] != 'all') {
                $result = $locationModel->getMasterDistrictDetailById($data['districtId']);
                if(count($result) > 0) {
                    $data['districtId'] = $result[0]->MDST_Name;
                }
            }
            if($data['talukaId'] != 'all') {
                $result = $locationModel->getMasterTalukaDetailById($data['talukaId']);
                if(count($result) > 0) {
                    $data['talukaId'] = $result[0]->MTAL_Name;
                }
            }
            if($data['cityId'] != 'all') {
                $result = $locationModel->getMasterCityDetailById($data['cityId']);
                if(count($result) > 0) {
                    $data['cityId'] = $result[0]->MCTY_Name;
                }
            }

            $data['dateTime'] = Carbon::now()->format('d-m-Y  H:i:s');
            $pdf = PDF::loadView('print.print_generate_report_custom_report_pdf', $data)->setPaper('a4', 'landscape');
            $current = Carbon::now()->timestamp;
            return $pdf->download($current.'.pdf');
        } else {
            return view("auth.login");
        }
    }
    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for print customer wise project list
     */
    public function printGenerateUpComingVisitListPDF() {
        $this->checkProfileSession();

        $HTTP_ORIGIN = $_SERVER['HTTP_ORIGIN'].'/';
        $HTTP_REFERER = $_SERVER['HTTP_REFERER'];
        $segment = str_replace($HTTP_ORIGIN, '', $HTTP_REFERER);
        if(session('RoleArray')) {
            foreach(session('RoleArray') as $roleDetail) {
                if($roleDetail->MM_Menu_Url == $segment) {
                    if($roleDetail->RP_Report == 0) {
                        return $msg = '<div class="alert alert-danger pb-0 pt-2"><h6>You do not have permission to access this section. contact administrator for further details !</h6></div>';
                    }
                }
            }
        }

        if(session('SID_ESWIMS_SES')) {
            $data['projectList'] = session('sess_upcoming_visit_list');
            $data['customerDetail'] = session('sess_upcoming_visit_customer');
            
            $data['dateTime'] = Carbon::now()->format('d-m-Y  H:i:s');
            $pdf = PDF::loadView('print.print_generate_upcoming_visit_list_pdf', $data);
            $current = Carbon::now()->timestamp;
            return $pdf->download($current.'.pdf');
        } else {
            return view("auth.login");
        }
    }
}
