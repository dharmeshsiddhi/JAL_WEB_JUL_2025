<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Arr;

class MasterModel extends Model
{
    use HasFactory;

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active news list
     */
    public function getAllActiveNewsList() {
        return DB::table('master_news')
            ->select('MNW_ID','MNW_Title','MNW_Type','MNW_Link','MNW_Start_Date','MNW_End_Date','MNW_Status') 
            ->where('MNW_Status', 1)
            ->orderBy('MNW_Start_Date', 'asc')
            ->get();
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getAllActivePoliceStationsList() {
        return DB::table('master_police_station')
            ->select('MPS_ID','MPS_Name','MPS_Name_MR','PS_map','MPS_Incharge_Post_Mr','MPS_Incharge_Post','MPS_Incharge_Name_Mr','MPS_Name_MR','MPS_Division','MPS_Phone','MPS_Email','MPS_Station_Photo','MPS_Station_Location','MPS_Address','MPS_Incharge_Name','MPS_Incharge_Mobile','MPS_Incharge_Photo','MPS_Status') 
            ->where('MPS_Status', 1)
            ->orderBy('MPS_Name', 'asc')
            ->get();
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getPoliceStationDetailById($id) {
        return DB::table('master_police_station')
            ->select('MPS_ID','MPS_Name','MPS_Division','PS_map','MPS_Incharge_Post_Mr','MPS_Incharge_Name_Mr','MPS_Division_Mr','MPS_Phone','MPS_Name_MR','MPS_Email','MPS_Station_Photo','MPS_Station_Location','MPS_Address','MPS_Incharge_Name','MPS_Incharge_Post','MPS_Incharge_Mobile','MPS_Incharge_Photo','MPS_Status') 
            ->where('MPS_ID', $id)
            ->get();
    }
	
    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active senior officer list
     */
    public function getAllActiveSeniorOfficersList() {
        return DB::table('master_senior_officers')
            ->join('master_designation', 'master_senior_officers.MSO_Post', '=', 'master_designation.MDES_ID')
            ->select('MSO_ID','MSO_Lang','MSO_Name','MSO_Name_Mr','MSO_Post','MSO_Work_Location','MSO_Work_Location_Mr','MSO_Mobile','MSO_Landline','MSO_Email','MSO_Photo','MSO_Status','MDES_Name','MDES_Name_Mar','MDES_Order') 
            ->where('MSO_Status', 1)
            ->orderBy('MDES_Order', 'asc')
            ->orderBy('MDES_Name', 'asc')
            ->get();
    }
    
    public function getAllHallofFame() {
        return DB::table('master_fame')
            ->select('MHF_ID','MHF_Name','MHF_Photo','MHF_Start_Date','MHF_End_Date') 
            ->where('MHF_Status', 1)
            ->orderBy('MHF_ID', 'desc')
            ->orderBy('MHF_Name', 'desc')
            ->get();
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getAllActivePressList() {
        $today = date('Y-m-d', strtotime("-3 month"));
        return DB::table('master_press')
            ->select('MPR_ID','MPR_Lang','MPR_Title','MPR_Attach','MPR_Date','MPR_Status') 
            ->where('MPR_Status', 1)
            ->where('MPR_Date', '>=', $today)
            ->orderBy('MPR_Date', 'desc')
            ->get();
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getAllActivePressListPaging($rowPerPage,$data) {
        $query = DB::table('master_press')
            ->select('MPR_ID','MPR_Lang','MPR_Title','MPR_Attach','MPR_Date','MPR_Status') 
            ->where('MPR_Status', 1);
            if($data['month'] != '') {
                $query->whereMonth('MPR_Date', $data['month']);
            }
            if($data['year'] != '') {
                $query->whereYear('MPR_Date', $data['year']);
            }
            $query->orderBy('MPR_Added_Date', 'desc');
        $queryResult = $query->paginate($rowPerPage)->withPath('/press-release/ajax-paginate-press-release-list');
        return $queryResult;
    }
    
    public function getAllScStActList() {
        $today = date('Y-m-d', strtotime("-3 month"));
        return DB::table('master_schedule_caste')
            ->select('MSC_ID','MSC_Title','MSC_Attach') 
            ->where('MSC_Status', 1)
            ->orderBy('MSC_ID', 'desc')
            ->get();
    }
    
    public function getAllScStActListPaging($rowPerPage) {
        return DB::table('master_schedule_caste')
            ->select('MSC_ID','MSC_Title','MSC_Year','MSC_Attach') 
            ->where('MSC_Status', 1)
            ->orderBy('MSC_Year', 'desc')
            ->paginate($rowPerPage)->withPath('/scheduled-cast-tribe/ajax-paginate-scheduled-cast-tribe-list');
    }
    
    public function getDistinctBitListByStationId($id) {
        return DB::table('master_police_patil')
            ->distinct() 
            ->where('MPP_PS_ID', $id)
            ->orderBy('MPP_BEAT_NAME', 'asc')
            ->get('MPP_BEAT_NAME');
    }
    
    public function getFilterPolicePatilListPaging($data,$rowPerPage) {
        $query = DB::table('master_police_patil')
            ->select('MPP_ID','MPP_BEAT_NAME','MPP_BEAT_VILLAGE','MPP_PP_NAME','MPP_PP_MOBNO') 
            ->where('MPP_PS_ID', $data['stationId']);
            if($data['bitId'] !== 'All') {
                $query->where('MPP_BEAT_NAME',$data['bitId']);
            }
            $query->orderBy('MPP_BEAT_NAME', 'asc')
            ->orderBy('MPP_BEAT_VILLAGE', 'asc')
            ->orderBy('MPP_PP_NAME', 'asc');
        $queryResult = $query->paginate($rowPerPage)->withPath('/police-patil/ajax-filter-paginate-police-patil-list');
        return $queryResult;
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getAllActiveRecruitmentListPaging($rowPerPage) {
        return DB::table('master_recruitment')
            ->select('MRCT_ID','MRCT_Lang','MRCT_Title','MRCT_Type','MRCT_Link','MRCT_Date','MRCT_Status') 
            ->where('MRCT_Status', 1)
            ->orderBy('MRCT_Date', 'desc')
            ->paginate($rowPerPage)->withPath('/recruitment/ajax-paginate-recruitment-list');
    }
    
    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active news list
     */
    public function getAllActiveNotificationsList() {
        return DB::table('master_notification')
            ->select('MNO_ID','MNO_Title','MNO_Type','MNO_Link','MNO_Start_Date','MNO_End_Date','MNO_Status') 
            ->where('MNO_Status', 1)
            ->orderBy('MNO_Start_Date', 'desc')
            ->get();
    }
    
    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active complaint nature list
     */
    public function getAllActiveComplaintNatureList() {
        return DB::table('master_complaint_nature')
            ->select('MCMN_ID','MCMN_Name','MCMN_Name_Mr','MCMN_Status') 
            ->where('MCMN_Status', 1)
            ->orderBy('MCMN_ID', 'asc')
            ->get();
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getComplaintDetailByTrackId($id) {
        return DB::table('complaints')
            ->select('complaints.*') 
            ->where('CMP_Track_ID', $id)
            ->get();
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getPoliceStationNameById($id) {
        return DB::table('master_police_station')
            ->select('MPS_Name') 
            ->where('MPS_ID', $id)
            ->value('MPS_Name');
    }
    
    public function getAllActiveInitiativesListLatest5() {
        return DB::table('master_initiatives')
            ->select('MINT_ID','MINT_Title','MINT_Path') 
            ->where('MINT_Status', 1)
            ->limit(5)
            ->orderBy('MINT_ID', 'desc')
            ->get();
    }
    
    public function getAllInitiativeListPaging($rowPerPage) {
        return DB::table('master_initiatives')
            ->select('MINT_ID','MINT_Title','MINT_Path') 
            ->where('MINT_Status', 1)
            ->orderBy('MINT_ID', 'desc')
            ->paginate($rowPerPage)->withPath('/initiatives/ajax-paginate-initiatives-list');
    }
    
    public function getAllActivePhotoMainListLatest8() {
        return DB::table('gallery_main')
            ->select('GMN_ID','GMN_Title','GMN_Thumbnail_Path') 
            ->where('GMN_Status', 1)
            ->limit(4)
            ->orderBy('GMN_ID', 'desc')
            ->get();
    }
    
    public function getAllPhotoMainListPaging($rowPerPage) {
        return DB::table('gallery_main')
            ->select('GMN_ID','GMN_Title','GMN_Thumbnail_Path') 
            ->where('GMN_Status', 1)
            ->orderBy('GMN_ID', 'desc')
            ->paginate($rowPerPage)->withPath('/photo-gallery/ajax-paginate-photo-gallery-list');
    }
    
    public function getAllActivePhotoSubListCountByMainId($id) {
        return DB::table('gallery_image_list')
            ->select('GIL_ID','GIL_Thumbnail_Path') 
            ->where('GIL_Main_Id', $id)
            ->where('GIL_Status', 1)
            ->count();
    }
    
    public function getPhotoMainDetailById($id) {
        return DB::table('gallery_main')
            ->select('GMN_ID','GMN_Title','GMN_Thumbnail_Path') 
            ->where('GMN_ID', $id)
            ->get();
    }
    
    public function getAllActivePhotoSubListByMainId($id) {
        return DB::table('gallery_image_list')
            ->select('GIL_ID','GIL_Thumbnail_Path') 
            ->where('GIL_Main_Id', $id)
            ->where('GIL_Status', 1)
            ->get();
    }
    
    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active complaint nature list
     */
    public function getAllActiveHomeSliderList() {
        return DB::table('master_slider')
            ->select('MSLD_ID','MSLD_Photo','MSLD_Status') 
            ->where('MSLD_Status', 1)
            ->orderBy('MSLD_ID', 'asc')
            ->get();
    }
    
    public function getAllActiveRecentEventListLatest8() {
        return DB::table('master_recent_events')
            ->select('GMN_ID','GMN_Title','GMN_Thumbnail_Path') 
            ->where('GMN_Status', 1)
            ->limit(8)
            ->orderBy('GMN_ID', 'desc')
            ->get();
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getAccidentLastAddedDate() {
        return DB::table('accident_report')
            ->select('Added_On') 
            ->limit(1)
            ->orderBy('Added_On', 'desc')
            ->value('Added_On');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getAccidentLastUpdatedDate() {
        return DB::table('accident_report')
            ->select('Updated_On') 
            ->limit(1)
            ->orderBy('Updated_On', 'desc')
            ->value('Updated_On');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getGalleryImageMainAddedDate() {
        return DB::table('gallery_main')
            ->select('GMN_Added_Date') 
            ->limit(1)
            ->orderBy('GMN_Added_Date', 'desc')
            ->value('GMN_Added_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getGalleryImageMainUpdatedDate() {
        return DB::table('gallery_main')
            ->select('GMN_Updated_Date') 
            ->limit(1)
            ->orderBy('GMN_Updated_Date', 'desc')
            ->value('GMN_Updated_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getGalleryImageSubAddedDate() {
        return DB::table('gallery_image_list')
            ->select('GIL_Added_Date') 
            ->limit(1)
            ->orderBy('GIL_Added_Date', 'desc')
            ->value('GIL_Added_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getGalleryImageSubUpdatedDate() {
        return DB::table('gallery_image_list')
            ->select('GIL_Updated_Date') 
            ->limit(1)
            ->orderBy('GIL_Updated_Date', 'desc')
            ->value('GIL_Updated_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getActsAddedDate() {
        return DB::table('master_acts')
            ->select('MACT_Added_Date') 
            ->limit(1)
            ->orderBy('MACT_Added_Date', 'desc')
            ->value('MACT_Added_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getActsUpdatedDate() {
        return DB::table('master_acts')
            ->select('MACT_Updated_Date') 
            ->limit(1)
            ->orderBy('MACT_Updated_Date', 'desc')
            ->value('MACT_Updated_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getHallOfFameAddedDate() {
        return DB::table('master_fame')
            ->select('MHF_Added_Date') 
            ->limit(1)
            ->orderBy('MHF_Added_Date', 'desc')
            ->value('MHF_Added_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getHallOfFameUpdatedDate() {
        return DB::table('master_fame')
            ->select('MHF_Updated_Date') 
            ->limit(1)
            ->orderBy('MHF_Updated_Date', 'desc')
            ->value('MHF_Updated_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getInitiativesAddedDate() {
        return DB::table('master_initiatives')
            ->select('MINT_Added_Date') 
            ->limit(1)
            ->orderBy('MINT_Added_Date', 'desc')
            ->value('MINT_Added_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getInitiativesUpdatedDate() {
        return DB::table('master_initiatives')
            ->select('MINT_Updated_Date') 
            ->limit(1)
            ->orderBy('MINT_Updated_Date', 'desc')
            ->value('MINT_Updated_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getNewsAddedDate() {
        return DB::table('master_news')
            ->select('MNW_Added_Date') 
            ->limit(1)
            ->orderBy('MNW_Added_Date', 'desc')
            ->value('MNW_Added_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getNewsUpdatedDate() {
        return DB::table('master_news')
            ->select('MNW_Updated_Date') 
            ->limit(1)
            ->orderBy('MNW_Updated_Date', 'desc')
            ->value('MNW_Updated_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getNotificationsAddedDate() {
        return DB::table('master_notification')
            ->select('MNO_Added_Date') 
            ->limit(1)
            ->orderBy('MNO_Added_Date', 'desc')
            ->value('MNO_Added_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getNotificationsUpdatedDate() {
        return DB::table('master_notification')
            ->select('MNO_Updated_Date') 
            ->limit(1)
            ->orderBy('MNO_Updated_Date', 'desc')
            ->value('MNO_Updated_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getPoliceStationAddedDate() {
        return DB::table('master_police_station')
            ->select('MPS_Added_Date') 
            ->limit(1)
            ->orderBy('MPS_Added_Date', 'desc')
            ->value('MPS_Added_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getPoliceStationUpdatedDate() {
        return DB::table('master_police_station')
            ->select('MPS_Updated_Date') 
            ->limit(1)
            ->orderBy('MPS_Updated_Date', 'desc')
            ->value('MPS_Updated_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getPositiveStoriesAddedDate() {
        return DB::table('master_positive_stories')
            ->select('MPST_Added_Date') 
            ->limit(1)
            ->orderBy('MPST_Added_Date', 'desc')
            ->value('MPST_Added_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getPositiveStoriesUpdatedDate() {
        return DB::table('master_positive_stories')
            ->select('MPST_Updated_Date') 
            ->limit(1)
            ->orderBy('MPST_Updated_Date', 'desc')
            ->value('MPST_Updated_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getPressAddedDate() {
        return DB::table('master_press')
            ->select('MPR_Added_Date') 
            ->limit(1)
            ->orderBy('MPR_Added_Date', 'desc')
            ->value('MPR_Added_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getPressUpdatedDate() {
        return DB::table('master_press')
            ->select('MPR_Updated_Date') 
            ->limit(1)
            ->orderBy('MPR_Updated_Date', 'desc')
            ->value('MPR_Updated_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getRecentEventsAddedDate() {
        return DB::table('master_recent_events')
            ->select('GMN_Added_Date') 
            ->limit(1)
            ->orderBy('GMN_Added_Date', 'desc')
            ->value('GMN_Added_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getRecentEventsUpdatedDate() {
        return DB::table('master_recent_events')
            ->select('GMN_Updated_Date') 
            ->limit(1)
            ->orderBy('GMN_Updated_Date', 'desc')
            ->value('GMN_Updated_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getReceruitmentAddedDate() {
        return DB::table('master_recruitment')
            ->select('MRCT_Added_Date') 
            ->limit(1)
            ->orderBy('MRCT_Added_Date', 'desc')
            ->value('MRCT_Added_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getReceruitmentUpdatedDate() {
        return DB::table('master_recruitment')
            ->select('MRCT_Updated_Date') 
            ->limit(1)
            ->orderBy('MRCT_Updated_Date', 'desc')
            ->value('MRCT_Updated_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getScheduleCasteAddedDate() {
        return DB::table('master_schedule_caste')
            ->select('MSC_Added_Date') 
            ->limit(1)
            ->orderBy('MSC_Added_Date', 'desc')
            ->value('MSC_Added_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getScheduleCasteUpdatedDate() {
        return DB::table('master_schedule_caste')
            ->select('MSC_Updated_Date') 
            ->limit(1)
            ->orderBy('MSC_Updated_Date', 'desc')
            ->value('MSC_Updated_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getSeniorOfficersAddedDate() {
        return DB::table('master_senior_officers')
            ->select('MSO_Added_Date') 
            ->limit(1)
            ->orderBy('MSO_Added_Date', 'desc')
            ->value('MSO_Added_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getSeniorOfficersUpdatedDate() {
        return DB::table('master_senior_officers')
            ->select('MSO_Updated_Date') 
            ->limit(1)
            ->orderBy('MSO_Updated_Date', 'desc')
            ->value('MSO_Updated_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getSlidersAddedDate() {
        return DB::table('master_slider')
            ->select('MSLD_Added_Date') 
            ->limit(1)
            ->orderBy('MSLD_Added_Date', 'desc')
            ->value('MSLD_Added_Date');
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 11 Feb 2024
     * Code For: this function is used for get active press list
     */
    public function getSlidersUpdatedDate() {
        return DB::table('master_slider')
            ->select('MSLD_Updated_Date') 
            ->limit(1)
            ->orderBy('MSLD_Updated_Date', 'desc')
            ->value('MSLD_Updated_Date');
    }
}
