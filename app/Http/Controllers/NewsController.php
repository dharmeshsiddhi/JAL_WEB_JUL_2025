<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SettingController;

use App\Models\MasterModel;

use Request;
use DB;

class NewsController extends SettingController {

    public function pressList() {
        $data['title'] = "Press Release List";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();

        $rowPerPage = 10;
        $page = 0;
        $rowStart = $rowPerPage * $page;

        $newsList = $masterModel->getAllActiveNewsList();
		$data['stationList'] = $masterModel->getAllActivePoliceStationsList();
		$pressList = $masterModel->getAllActivePressListPaging($rowPerPage);
        $lastDate = $this->getWebsiteLastUpdatedDate();
        session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);

		return view("pages/press_list", compact('data','newsList','pressList','rowStart'));
    }
    
    public function pressListPaging() {
        $masterModel = new MasterModel();

        $page = request()->query('page');

        $rowPerPage = 10;
        if($page > 0){
            $page = $page - 1;
            $rowStart = $rowPerPage * $page;
        } else {
            $rowStart = $rowPerPage * $page;
        }
        
		$pressList = $masterModel->getAllActivePressListPaging($rowPerPage);

		return view("pages/press_list_paging", compact('pressList','rowStart'));
    }

    public function recruitmentList() {
        $data['title'] = "Recruitment List";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();

        $rowPerPage = 10;
        $page = 0;
        $rowStart = $rowPerPage * $page;

        $newsList = $masterModel->getAllActiveNewsList();
		$data['stationList'] = $masterModel->getAllActivePoliceStationsList();
		$recruitmentList = $masterModel->getAllActiveRecruitmentListPaging($rowPerPage);
        $lastDate = $this->getWebsiteLastUpdatedDate();
        session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);
        //echo "<pre>";print_r($recruitmentList);exit;

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);
		return view("pages/recruitment_list", compact('data','newsList','recruitmentList','rowStart'));
    }
    
    public function recruitmentListPaging() {
        $masterModel = new MasterModel();

        $page = request()->query('page');

        $rowPerPage = 10;
        if($page > 0){
            $page = $page - 1;
            $rowStart = $rowPerPage * $page;
        } else {
            $rowStart = $rowPerPage * $page;
        }
        
		$recruitmentList = $masterModel->getAllActiveRecruitmentListPaging($rowPerPage);

		return view("pages/recruitment_list_paging", compact('recruitmentList','rowStart'));
    }
}
