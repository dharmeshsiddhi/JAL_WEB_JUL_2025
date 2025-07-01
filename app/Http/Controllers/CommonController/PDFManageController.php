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
use Illuminate\Support\Facades\File; 
use \Exception;

class PDFManageController extends SettingController {

    /**
     * Created By: Dharmesh Patil
     * Created Date: 12 June 2022
     * Code For: this function is used for get customer wise prject list
     */
    public function generatePDF() {
        $this->checkProfileSession();
        $data['title'] = "Customer Wise Project List";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = Request::segment(2);

        if(session('SID_ESWIMS_SES')) {
            return view('pdf/generate_pdf', compact('data'));
        } else {
            return view("auth.login");
        }
    }
    
    
    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for print customer wise project list
     */
    public function printGenerateSamplePDF() {
        $this->checkProfileSession();
        $data = array();
        $data['fileList'] = array();
        if(isset($_SESSION['custom_id'])) {
            $data['fileList'] = DB::table('jquery')
                ->select('jquery.*')
                ->where('byid', $_SESSION['custom_id'])
                ->get();
        }
        // echo '<pre>';print_r($fileList);exit;
        $pdf = PDF::loadView('print.print_generate_sample_pdf', $data);
        $current = Carbon::now()->timestamp;
        // Storage::put('public/'.$current.'.pdf', $pdf->output());
        $path = public_path('sample/');
        $pdf->save($path . '/' . $current.'.pdf');
        if(count($data['fileList']) > 0) {
            foreach($data['fileList'] as $detail) {
                $fileName = "fileupload/server/php/files/$detail->name";
                if(File::exists(public_path($fileName))){
                    File::delete(public_path($fileName));
                }
            }
        }
    }

}
