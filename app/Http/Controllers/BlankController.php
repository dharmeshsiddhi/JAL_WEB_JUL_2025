<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SettingController;

use App\Models\MasterModel;

use Request;
use DB;

class BlankController extends SettingController {

    public function blankPage() {
        $data['title'] = "Blank Page";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();

        $newsList = $masterModel->getAllActiveNewsList();
		$data['stationList'] = $masterModel->getAllActivePoliceStationsList();
        $lastDate = $this->getWebsiteLastUpdatedDate();
        session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);
		return view("pages/blank", compact('data','newsList'));
    }
}
