<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SettingController;

use App\Models\MasterModel;

use Request;
use DB;
use File;

class HomeController extends SettingController {

    public function index() {
        $data['title'] = "Home";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();
        
		$newsList = $masterModel->getAllActiveNewsList();
		$stationList = $masterModel->getAllActivePoliceStationsList();
		$data['stationList'] = $stationList;
		$notifyList = $masterModel->getAllActiveNotificationsList();
		$initiativeList = $masterModel->getAllActiveInitiativesListLatest5();
		$galleryList = $masterModel->getAllActiveRecentEventListLatest8();
		$sliderList = $masterModel->getAllActiveHomeSliderList();
		//$initiativeList = $masterModel->getAllActiveInitiativesListLatest5();
        // echo "<pre>";print_r($initiativeList);exit;
        $lastDate = $this->getWebsiteLastUpdatedDate();
        session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);
		return view("pages/home", compact('data','newsList','stationList','notifyList','initiativeList','galleryList','sliderList'));
    }
    
    public function cctns() {
        $data['title'] = "Home";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();
        
        $rowPerPage = 10;
        $page = 0;
        $rowStart = $rowPerPage * $page;

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


		return view("pages/cctns", compact('data','newsList'));
    }
    
     public function lcbbranch() {
        $data['title'] = "Home";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();
        
        $rowPerPage = 10;
        $page = 0;
        $rowStart = $rowPerPage * $page;

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


		return view("pages/lcbranch", compact('data','newsList'));
    }

     public function registerComplaint() {
        $data['title'] = "Register Your Complaint ";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();
        
        $newsList = $masterModel->getAllActiveNewsList();
		$data['stationList'] = $masterModel->getAllActivePoliceStationsList();
        $stationList = $data['stationList'];
        $natureList = $masterModel->getAllActiveComplaintNatureList();
        $lastDate = $this->getWebsiteLastUpdatedDate();
        session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);

		return view("pages/registerComplaint", compact('data','newsList','stationList','natureList'));
    }

    public function ajaxSubmitNewCompalaintDetail() {
       $masterModel = new MasterModel();
       
       $ddlTarget = request()->get('ddlTarget');
       $form_name = request()->get('form_name');
       $form_mobile = request()->get('form_mobile');
       $form_area = request()->get('form_area');
       $form_town = request()->get('form_town');
       $form_station_id = request()->get('form_station_id');
       $form_nature = request()->get('form_nature');
       $form_brief = request()->get('form_brief');
       
       if($ddlTarget == 'MR') {
        $form_name = request()->get('form_name1');
        $form_area = request()->get('form_area1');
        $form_town = request()->get('form_town1');
        $form_brief = request()->get('form_brief1');
        $form_nature = request()->get('form_nature1');
       }

       $form_file_name = "";
       $form_file_path = "";

       $date = date('Y-m-d');
       $tokenNo = date('YmdHis');
       $path = public_path().'/uploads/complaint_files/'.$date.'/'.$tokenNo;
       $path1 = '/uploads/complaint_files/'.$date.'/'.$tokenNo;
       if(!File::isDirectory($path)){
           File::makeDirectory($path, $mode = 0777, true, true);
       }
       if(request()->hasfile('form_file')) {
           $file1 = request()->file('form_file');
           $file1->getClientOriginalName();
           $file1->getClientOriginalExtension();
           $file1->getRealPath();
           $file1->getSize();
           $file1->getMimeType();
           $form_file_name = $file1->getClientOriginalName();
           $form_file_path = $path1.'/'.$file1->getClientOriginalName();
           $file1->move($path,$file1->getClientOriginalName());
       }
       // Default response 
        $response = array( 
            'status' => 0, 
            'message' => 'Form submission failed, please try again.' 
        ); 
     $recaptcha = request()->get('g-recaptcha-response');

     $secretKey  = '6LezT-IqAAAAAKnriUt9iyHyR6tYWQnfaTqNGI8Y'; 
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$recaptcha); 
    // Decode JSON data of API response 
    $responseData = json_decode($verifyResponse); 
    //echo "<pre>";print_r($responseData);exit;
    if($responseData->success){ 

		$lastId = DB::table('complaints')
            ->insertGetId([
                'CMP_Name'=> $form_name,
                'CMP_Mobile'=> $form_mobile,
                'CMP_Area'=> $form_area,
                'CMP_Town'=> $form_town,
                'CMP_PS_ID'=> $form_station_id,
                'CMP_Nature'=> $form_nature,
                'CMP_Brief'=> $form_brief,
                'CMP_File_Name'=> $form_file_name,
                'CMP_File_Path'=> $form_file_path,
                'CMP_Added_On'=> date("Y-m-d H:i:s"),
            ]);
		 
		$trackId = date("Y").$lastId.date("is");
		
		DB::table('complaints')
                ->where('CMP_ID', $lastId)
                ->update([
                    'CMP_Track_ID' => $trackId
                ]);
        $url = "https://panel.jalgaonpolice.gov.in/Common/generateComplaintReport/".$lastId;
        $button = "<a target='_blank' rel='noopener noreferrer' href='$url' class='btn btn-primary btn-lg'><i class='fa fa-file-pdf-o mr-2'></i> प्रिंट</a>";
        $response['status'] = 1; 
        $response['message'] = "तक्रार यशस्वीरित्या नोंदवली ! <b>$trackId</b> हा तुमचा ट्रॅकिंग आयडी आहे. कृपया ट्रॅकिंग आयडी तुमच्याकडे गोपनीय ठेवा. तुमच्या तक्रारीची स्तिथी जाणून घेण्यासाठी ट्रॅकिंग आयडी उपयुक्त ठरेल. $button"; 
        echo json_encode($response);exit;
        //echo '<div class="alert alert-success"><strong>Complaint Register Successfully !</strong></div>';
    } else {
        $response = array( 
            'status' => 0, 
            'message' => 'Captcha veirification failed, please try again.' 
        ); 
        echo json_encode($response);exit;

    }
   }

   public function trackComplaint() {
      $data['title'] = "Track Your Complaint ";
      $data['segment1'] = Request::segment(1);
      $data['segment2'] = "//";
      
      $masterModel = new MasterModel();
      
      $newsList = $masterModel->getAllActiveNewsList();
      $data['stationList'] = $masterModel->getAllActivePoliceStationsList();
      $stationList = $data['stationList'];
      $natureList = $masterModel->getAllActiveComplaintNatureList();
      $lastDate = $this->getWebsiteLastUpdatedDate();
      session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);

      return view("pages/trackComplaint", compact('data','newsList','stationList','natureList'));
  }

  public function ajaxTrackCompalaintDetail() {
     $masterModel = new MasterModel();
     
     $form_track_id = request()->get('form_track_id');
     $recaptcha = request()->get('g-recaptcha-response');

     $secretKey  = '6LezT-IqAAAAAKnriUt9iyHyR6tYWQnfaTqNGI8Y'; 
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$recaptcha); 
    // Decode JSON data of API response 
    $responseData = json_decode($verifyResponse); 
    //echo "<pre>";print_r($responseData);exit;
    if($responseData->success){ 
     $complaintDetail = $masterModel->getComplaintDetailByTrackId($form_track_id);
     if(count($complaintDetail) > 0) {
        foreach($complaintDetail as $detail) {
            $detail->MPS_Name = $masterModel->getPoliceStationNameById($detail->CMP_PS_ID);
        }
     }
      return view("pages/trackComplaintFilter", compact('complaintDetail'));
    } else {
        echo '<div class="fade alert alert-danger show"><strong>Captcha veirification failed, please try again.</strong></div>';
    }
    }



     public function eowbranch() {
        $data['title'] = "Home";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();
        
        $rowPerPage = 10;
        $page = 0;
        $rowStart = $rowPerPage * $page;

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


		return view("pages/eowbranch", compact('data','newsList'));
    }
    public function dsbranch() {
        $data['title'] = "Home";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();
        
        $rowPerPage = 10;
        $page = 0;
        $rowStart = $rowPerPage * $page;

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


		return view("pages/dsbranch", compact('data','newsList'));
    }
    
    
   
    
    public function controlroom() {
        $data['title'] = "Home";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();
        
        $rowPerPage = 10;
        $page = 0;
        $rowStart = $rowPerPage * $page;

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


		return view("pages/controlroom", compact('data','newsList'));
    }
    
    
    public function bdds() {
        $data['title'] = "Home";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();
        
        $rowPerPage = 10;
        $page = 0;
        $rowStart = $rowPerPage * $page;

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


		return view("pages/bdds", compact('data','newsList'));
    }
    
    
    
    public function trafficfines() {
        $data['title'] = "Home";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();
        
        $rowPerPage = 10;
        $page = 0;
        $rowStart = $rowPerPage * $page;

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


		return view("pages/trafficfines", compact('data','newsList'));
    }
    
    public function trafficrules() {
        $data['title'] = "Home";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();
        
        $rowPerPage = 10;
        $page = 0;
        $rowStart = $rowPerPage * $page;

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


		return view("pages/trafficrules", compact('data','newsList'));
    }
    
    
    public function contactus() {
        $data['title'] = "Home";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();
        
        $rowPerPage = 10;
        $page = 0;
        $rowStart = $rowPerPage * $page;

        $newsList = $masterModel->getAllActiveNewsList();
        $officerList = $masterModel->getAllActiveSeniorOfficersList();
        $stationList = $masterModel->getAllActivePoliceStationsList();
		$data['stationList'] = $stationList;
        $dView = $this->getDimensions();
        $lastDate = $this->getWebsiteLastUpdatedDate();
        session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);

		return view("pages/contactus", compact('data','newsList','officerList','stationList','dView'));
    }
    
     public function scstact() {
        $data['title'] = "Home";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();
        
        $rowPerPage = 10;
        $page = 0;
        $rowStart = $rowPerPage * $page;

        $newsList = $masterModel->getAllActiveNewsList();
		$data['stationList'] = $masterModel->getAllActivePoliceStationsList();
		$scstactList = $masterModel->getAllScStActListPaging($rowPerPage);
        $lastDate = $this->getWebsiteLastUpdatedDate();
        session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);

		return view("pages/scstact", compact('data','newsList','scstactList','rowStart'));
    }
    
    public function scstactPaging() {
        $masterModel = new MasterModel();

        $page = request()->query('page');

        $rowPerPage = 10;
        if($page > 0){
            $page = $page - 1;
            $rowStart = $rowPerPage * $page;
        } else {
            $rowStart = $rowPerPage * $page;
        }
        
		$scstactList = $masterModel->getAllScStActListPaging($rowPerPage);

		return view("pages/scstact_paging", compact('scstactList','rowStart'));
    }
    
    public function accidentreceipt() {
        $data['title'] = "Home";
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
		return view("pages/accidentreceipt", compact('data','newsList','stationList'));
    }
    public function trafficbranch() {
       $data['title'] = "Traffic Branch";
       $data['segment1'] = Request::segment(1);
       $data['segment2'] = "//";
       
       $masterModel = new MasterModel();
       
       $rowPerPage = 10;
       $page = 0;
       $rowStart = $rowPerPage * $page;

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


       return view("pages/trafficbranch", compact('data','newsList'));
   }
   public function spmessage() {
      $data['title'] = "SP's Message";
      $data['segment1'] = Request::segment(1);
      $data['segment2'] = "//";
      
      $masterModel = new MasterModel();
      
      $rowPerPage = 10;
      $page = 0;
      $rowStart = $rowPerPage * $page;

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


      return view("pages/sp_message", compact('data','newsList'));
  }
    
  public function initiatives() {
      $data['title'] = "Programs & Initiatives";
      $data['segment1'] = Request::segment(1);
      $data['segment2'] = "//";
      
      $masterModel = new MasterModel();
      
      $rowPerPage = 5;
      $page = 0;
      $rowStart = $rowPerPage * $page;

      $data['stationList'] = $masterModel->getAllActivePoliceStationsList();
      $newsList = $masterModel->getAllActiveNewsList();
      $initiativeList = $masterModel->getAllInitiativeListPaging($rowPerPage);
      $lastDate = $this->getWebsiteLastUpdatedDate();
      session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);
      return view("pages/initiative", compact('data','newsList','initiativeList','rowStart'));
  }
  
  public function initiativesPaging() {
      $masterModel = new MasterModel();

      $page = request()->query('page');

      $rowPerPage = 5;
      if($page > 0){
          $page = $page - 1;
          $rowStart = $rowPerPage * $page;
      } else {
          $rowStart = $rowPerPage * $page;
      }
      
      $initiativeList = $masterModel->getAllInitiativeListPaging($rowPerPage);
      return view("pages/initiative_paging", compact('initiativeList','rowStart'));
  }
    
  public function photoGallery() {
      $data['title'] = "Photo Gallery";
      $data['segment1'] = Request::segment(1);
      $data['segment2'] = "//";
      
      $masterModel = new MasterModel();
      
      $rowPerPage = 8;
      $page = 0;
      $rowStart = $rowPerPage * $page;

      $data['stationList'] = $masterModel->getAllActivePoliceStationsList();
      $newsList = $masterModel->getAllActiveNewsList();
      $galleryList = $masterModel->getAllPhotoMainListPaging($rowPerPage);
     if(count($galleryList) > 0) {
        foreach($galleryList as $detail) {
            $detail->rowId = $this->enc_dec_key($detail->GMN_ID,'e');
            $detail->count = $masterModel->getAllActivePhotoSubListCountByMainId($detail->GMN_ID);
        }
    }
    $lastDate = $this->getWebsiteLastUpdatedDate();
    session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);
      return view("pages/photo_gallery_main", compact('data','newsList','galleryList','rowStart'));
  }
  
  public function photoGalleryPaging() {
      $masterModel = new MasterModel();

      $page = request()->query('page');

      $rowPerPage = 8;
      if($page > 0){
          $page = $page - 1;
          $rowStart = $rowPerPage * $page;
      } else {
          $rowStart = $rowPerPage * $page;
      }
      
      $galleryList = $masterModel->getAllPhotoMainListPaging($rowPerPage);
      if(count($galleryList) > 0) {
         foreach($galleryList as $detail) {
             $detail->count = $masterModel->getAllActivePhotoSubListCountByMainId($detail->GMN_ID);
         }
     }
      return view("pages/photo_gallery_paging", compact('galleryList','rowStart'));
  }

  /**
   * Created By: Dharmesh Patil
   * Created Date: 22 July 2021
   * Code For: this function is used for new inquiry entry form
   */
  public function viewPhotoGalleryDetail($id) {
    $data['title'] = "Photo Gallery";
    $data['segment1'] = Request::segment(1);
    $data['segment2'] = "//";
    
    $masterModel = new MasterModel();

    $id = $this->enc_dec_key($id,'d');

    $data['stationList'] = $masterModel->getAllActivePoliceStationsList();
    $newsList = $masterModel->getAllActiveNewsList();

    $galleryDetail = $masterModel->getPhotoMainDetailById($id);
    $subList = $masterModel->getAllActivePhotoSubListByMainId($id);
    return view('pages/photo_gallery_detail_view', compact('data','newsList','galleryDetail','subList'));
  }

  public function policeMap() {
      $data['title'] = "Jalgaon Police Map";
      $data['segment1'] = Request::segment(1);
      $data['segment2'] = "//";
      
      $masterModel = new MasterModel();

      $newsList = $masterModel->getAllActiveNewsList();
      $data['stationList'] = $masterModel->getAllActivePoliceStationsList();
      return view("pages/police_map", compact('data','newsList'));
  }

  /**
   * Created By: Dharmesh Patil
   * Created Date: 22 July 2021
   * Code For: this function is used for new inquiry entry form
   */
  public function ajaxViewPhotoGalleryDetail() {
    $masterModel = new MasterModel();

    $id = request()->get('id');

    $galleryDetail = $masterModel->getPhotoMainDetailById($id);
    $subList = $masterModel->getAllActivePhotoSubListByMainId($id);
    return view('pages/photo_gallery_detail_view_ajax', compact('galleryDetail','subList'));
  }
  public function program100Day() {
     $data['title'] = "100 Day Program";
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


     return view("pages/program_100_day", compact('data','newsList'));
 }
  public function cyberSafety() {
     $data['title'] = "Cyber Safety Tips";
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

     return view("pages/cyber_safety", compact('data','newsList'));
 }
  public function womenSafety() {
     $data['title'] = "Women Safety Tips";
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

     return view("pages/womensafety", compact('data','newsList'));
 }
  public function antiNarcotics() {
     $data['title'] = "Anti-drug campaign";
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
     return view("pages/anti_nacro", compact('data','newsList'));
 }
    
}
