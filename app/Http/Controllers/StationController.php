<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SettingController;

use App\Models\MasterModel;

use Request;

class StationController extends SettingController {

    public function stationDetail() {
        $data['title'] = "Police Station";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $id = request()->get('id');
        
        $masterModel = new MasterModel();

        $newsList = $masterModel->getAllActiveNewsList();
		$stationList = $masterModel->getAllActivePoliceStationsList();
		$data['stationList'] = $stationList;
		$stationDetail = $masterModel->getPoliceStationDetailById($id);
        $lastDate = $this->getWebsiteLastUpdatedDate();
        session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);
		return view("pages/police_station", compact('data','newsList','stationList','id','stationDetail'));
    }
    
    public function policepatil() {
        $data['title'] = "Senior Officers";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();

        $newsList = $masterModel->getAllActiveNewsList();
		$stationList = $masterModel->getAllActivePoliceStationsList();
		$data['stationList'] = $stationList;
        $lastDate = $this->getWebsiteLastUpdatedDate();
        session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);
		return view("pages/police_patil", compact('data','newsList','stationList'));
    }
    
    public function getBitListByStationId() {
        $masterModel = new MasterModel();
        $id = request()->get('id');
		$bitList = $masterModel->getDistinctBitListByStationId($id);
		return view("pages/police_patil_bit_dropdown_list_by_station_id", compact('bitList'));
    }
    
    public function getFilterPolicePatilListPaging() {
        $masterModel = new MasterModel();

        $data['stationId'] = request()->get('ppStationId');
        $data['bitId'] = request()->get('ppBitId');
        $page = request()->query('page');

        $rowPerPage = 10;
        if($page > 0){
            $page = $page - 1;
            $rowStart = $rowPerPage * $page;
        } else {
            $rowStart = $rowPerPage * $page;
        }
		$ppList = $masterModel->getFilterPolicePatilListPaging($data,$rowPerPage);

		return view("pages/police_patil_paging", compact('ppList','rowStart'));
    }
}
