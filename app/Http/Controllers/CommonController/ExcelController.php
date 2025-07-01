<?php

namespace App\Http\Controllers\CommonController;

use App\Http\Controllers\SettingController;
use App\Exports\RPCustWiseProjectListExport;
use App\Exports\RevisitFormListExport;
use App\Exports\RPSupplierRatioListExport;
use App\Exports\RPSupplierRatioListSingleExport;
use App\Exports\RPProjectByCityTownVillageExport;
use App\Exports\RPCustomReportExport;
use App\Exports\UpcomingVisitListExport;
use Request;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class ExcelController extends SettingController {

    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for excel customer wise project list
     */
    public function excelGenerateReportCustomerWiseProjectList() {
        $this->checkProfileSession();
        if(session('SID_ESWIMS_SES')) {
            $current = Carbon::now()->timestamp;
            return Excel::download(new RPCustWiseProjectListExport, $current.'.xlsx');
        } else {
            return view("auth.login");
        }
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for excel revisit form list
     */
    public function excelGenerateRevisitFormList() {
        $this->checkProfileSession();
        if(session('SID_ESWIMS_SES')) {
            $current = Carbon::now()->timestamp;
            return Excel::download(new RevisitFormListExport, $current.'.xlsx');
        } else {
            return view("auth.login");
        }
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for excel cement steel supplier list
     */
    public function excelGenerateSupplierRatioList() {
        $this->checkProfileSession();
        if(session('SID_ESWIMS_SES')) {
            $current = Carbon::now()->timestamp;
            return Excel::download(new RPSupplierRatioListExport, $current.'.xlsx');
        } else {
            return view("auth.login");
        }
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for excel cement steel supplier list
     */
    public function excelGenerateSupplierRatioListSingle() {
        $this->checkProfileSession();
        if(session('SID_ESWIMS_SES')) {
            $current = Carbon::now()->timestamp;
            $data['id'] = request()->get('id');
            $data['type'] = request()->get('type');
            $data['percent'] = request()->get('percent');
            return Excel::download(new RPSupplierRatioListSingleExport($data), $current.'.xlsx');
        } else {
            return view("auth.login");
        }
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for excel customer wise project list
     */
    public function excelGenerateReportProjectListByCityTownVillage() {
        $this->checkProfileSession();
        if(session('SID_ESWIMS_SES')) {
            $current = Carbon::now()->timestamp;
            return Excel::download(new RPProjectByCityTownVillageExport, $current.'.xlsx');
        } else {
            return view("auth.login");
        }
    }
    
    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for excel customer wise project list
     */
    public function excelGenerateReportCustomReport() {
        $this->checkProfileSession();
        if(session('SID_ESWIMS_SES')) {
            $current = Carbon::now()->timestamp;
            return Excel::download(new RPCustomReportExport, $current.'.xlsx');
        } else {
            return view("auth.login");
        }
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for excel revisit form list
     */
    public function excelGenerateUpcomingVisitList() {
        $this->checkProfileSession();
        if(session('SID_ESWIMS_SES')) {
            $current = Carbon::now()->timestamp;
            return Excel::download(new UpcomingVisitListExport, $current.'.xlsx');
        } else {
            return view("auth.login");
        }
    }
}
