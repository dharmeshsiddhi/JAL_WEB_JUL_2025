<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SettingController;

use App\Models\MasterModel;

use Request;
use DB;

class OfficerController extends SettingController {

    public function seniorOfficersList() {
        $data['title'] = "Senior Officers";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();

        $newsList = $masterModel->getAllActiveNewsList();
		$data['stationList'] = $masterModel->getAllActivePoliceStationsList();
		$officerList = $masterModel->getAllActiveSeniorOfficersList();
        // if(count($officerList) > 0) {
        //     foreach($officerList as $detail) {
        //         $external_link = 'https://panel.dhulepolice.gov.in/'.$detail->MSO_Photo;
        //         // $detail->exist = $this->IsRemoteFile($external_link);
        //         if (@getimagesize($external_link)) {
        //             $detail->exist = "1";
        //         } else {
        //             $detail->exist = "2";
        //         }
        //     }
        // }
        $lastDate = $this->getWebsiteLastUpdatedDate();
        session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);
		return view("pages/officer_list", compact('data','newsList','officerList'));
    }
    
    
    
    public function halloffame() {
        $data['title'] = "Senior Officers";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();

        $newsList = $masterModel->getAllActiveNewsList();
		$data['stationList'] = $masterModel->getAllActivePoliceStationsList();
		$fameList = $masterModel->getAllHallofFame();
        // if(count($officerList) > 0) {
        //     foreach($officerList as $detail) {
        //         $external_link = ''.$detail->MSO_Photo;
        //         // $detail->exist = $this->IsRemoteFile($external_link);
        //         if (@getimagesize($external_link)) {
        //             $detail->exist = "1";
        //         } else {
        //             $detail->exist = "2";
        //         }
        //     }
        // }
        $lastDate = $this->getWebsiteLastUpdatedDate();
        session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);
		return view("pages/halloffame", compact('data','newsList','fameList'));
    }
    function IsRemoteFile($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_NOBODY, 1);
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        $result = curl_exec($ch);
        curl_close($ch);
        if($result !== FALSE) {
            return "1";
        } else {
            return "2";
        }
    }
}
