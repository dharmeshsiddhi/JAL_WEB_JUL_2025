<?php

namespace App\Http\Controllers\CommonController;

use App\Http\Controllers\SettingController;
use Request;
use App\Models\MasterModel;
use PDF;
use DB;
use Illuminate\Support\Facades\Storage;
use \Exception;

class PDFController extends SettingController {

      
    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for print customer wise project list
     */
    public function printDownloadContactList() {
        
        $masterModel = new MasterModel();
        
        $data['officerList'] = $masterModel->getAllActiveSeniorOfficersList();
        $data['stationList'] = $masterModel->getAllActivePoliceStationsList();

        $pdf = PDF::loadView('print.print_generate_contact_list', $data)->setPaper('a4', 'landscape');
        $current = date("YmdHis");
        //return $pdf->stream($current.'.pdf');
        return $pdf->download($current.'.pdf');
    }
}
