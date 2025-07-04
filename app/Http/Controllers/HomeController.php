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

            $data['year'] = request()->get('formYearId');
            
            $rowPerPage = 10;
            $page = 0;
            $rowStart = $rowPerPage * $page;

            $newsList = $masterModel->getAllActiveNewsList();
            $data['stationList'] = $masterModel->getAllActivePoliceStationsList();
            $scstactList = $masterModel->getAllScStActListPaging($rowPerPage,$data);
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
            $data['year'] = request()->get('formYearId');

            $rowPerPage = 10;
            if($page > 0){
                $page = $page - 1;
                $rowStart = $rowPerPage * $page;
            } else {
                $rowStart = $rowPerPage * $page;
            }
            
            $scstactList = $masterModel->getAllScStActListPaging($rowPerPage,$data);

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
      $data['year'] = request()->get('formYearId');
      
      $rowPerPage = 8;
      $page = 0;
      $rowStart = $rowPerPage * $page;

      $data['stationList'] = $masterModel->getAllActivePoliceStationsList();
      $newsList = $masterModel->getAllActiveNewsList();
      $yearList = $masterModel->getAllActiveYearList();

      $galleryList = $masterModel->getAllPhotoMainListPaging($rowPerPage,$data);
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
      return view("pages/photo_gallery_main", compact('data','newsList','galleryList','rowStart','yearList'));
  }
  
  public function photoGalleryPaging() {
      $masterModel = new MasterModel();

      $page = request()->query('page');
      $data['year'] = request()->get('formYearId');

      $rowPerPage = 8;
      if($page > 0){
          $page = $page - 1;
          $rowStart = $rowPerPage * $page;
      } else {
          $rowStart = $rowPerPage * $page;
      }
      
      $galleryList = $masterModel->getAllPhotoMainListPaging($rowPerPage,$data);
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
  public function usefulWebsites() {
     $data['title'] = "Useful Websites";
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
     return view("pages/useful_websites", compact('data','newsList'));
 }
    public function gradationList() {
        $data['title'] = "Gradation List";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();

        $data['rank'] = request()->get('formRankId');
        $data['year'] = request()->get('formYearId');
        $rowPerPage = 10;
        $page = 0;
        $rowStart = $rowPerPage * $page;

        $newsList = $masterModel->getAllActiveNewsList();
		$data['stationList'] = $masterModel->getAllActivePoliceStationsList();
        $yearList = $masterModel->getAllActiveYearList();
        $gradesList = $masterModel->getAllActiveGradesList();
		$gradationList = $masterModel->getAllActiveGradationListPaging($rowPerPage,$data);
        $lastDate = $this->getWebsiteLastUpdatedDate();
        session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);

		return view("pages/gradation_list", compact('data','newsList','gradationList','rowStart','yearList','gradesList'));
    }
    
    public function gradationListPaging() {
        $masterModel = new MasterModel();

        $page = request()->query('page');
        $data['rank'] = request()->get('formRankId');
        $data['year'] = request()->get('formYearId');

        $rowPerPage = 10;
        if($page > 0){
            $page = $page - 1;
            $rowStart = $rowPerPage * $page;
        } else {
            $rowStart = $rowPerPage * $page;
        }
        
		$gradationList = $masterModel->getAllActiveGradationListPaging($rowPerPage,$data);

		return view("pages/gradation_list_paging", compact('gradationList','rowStart'));
    }

     public function feedback() {
        $data['title'] = "Feedback";
        $data['segment1'] = Request::segment(1);
        $data['segment2'] = "//";
        
        $masterModel = new MasterModel();
        
        $newsList = $masterModel->getAllActiveNewsList();
		$data['stationList'] = $masterModel->getAllActivePoliceStationsList();
        $natureList = $masterModel->getAllActiveFeedbackTypesList();
        $lastDate = $this->getWebsiteLastUpdatedDate();
        session(['SID_JAL_WEB_LAST_DATE' => $lastDate]);

        $mainId = DB::table('visitor_counter')
                ->insertGetId([
                    'VCTR_IP' => request()->ip(),
                    'VCTR_Added_Date' => date("Y-m-d H:i:s")
                ]);
        session(['SID_JAL_WEB_VISITOR' => $mainId]);

		return view("pages/feedback", compact('data','newsList','natureList'));
    }

    public function ajaxSubmitNewFeedbackDetail() {
       $masterModel = new MasterModel();
       
       $ddlTarget = request()->get('ddlTarget');
       $form_name = request()->get('form_name');
       $form_mobile = request()->get('form_mobile');
       $form_area = request()->get('form_area');
       $form_town = request()->get('form_town');
       $form_cleanliness_id = request()->get('form_cleanliness_id');
       $form_facilities_id = request()->get('form_facilities_id');
       $form_treatment_id = request()->get('form_treatment_id');
       $form_resolved_id = request()->get('form_resolved_id');
       $form_brief = request()->get('form_brief');
       
       if($ddlTarget == 'MR') {
        $form_name = request()->get('form_name1');
        $form_area = request()->get('form_area1');
        $form_town = request()->get('form_town1');
        $form_brief = request()->get('form_brief1');
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
            $lastId = DB::table('feedbacks')
                ->insertGetId([
                    'FBK_Name'=> $form_name,
                    'FBK_Mobile'=> $form_mobile,
                    'FBK_Area'=> $form_area,
                    'FBK_Town'=> $form_town,
                    'FBK_Cleanliness_ID'=> $form_cleanliness_id,
                    'FBK_Facilities_ID'=> $form_facilities_id,
                    'FBK_Treatment_ID'=> $form_treatment_id,
                    'FBK_Resolved_ID'=> $form_resolved_id,
                    'FBK_Brief'=> $form_brief,
                    'FBK_Added_On'=> date("Y-m-d H:i:s"),
                ]);
            $response['status'] = 1; 
            $response['message'] = "आपला अभिप्राय यशस्वीरित्या नोंदविण्यात आला. तुमचा अभिप्राय आमच्यासाठी मौल्यवान आहे."; 
            echo json_encode($response);exit;
        } else {
            $response = array( 
                'status' => 0, 
                'message' => 'Captcha veirification failed, please try again.' 
            ); 
            echo json_encode($response);exit;
        }
   }
    public function sitemap() {
        $data['title'] = "Site Map";
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

		return view("pages/sitemap", compact('data','newsList'));
    }
    public function disclaimer() {
        $data['title'] = "Disclaimer";
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

		return view("pages/disclaimer", compact('data','newsList'));
    }
    public function siteSearch($searchKey) {
        $data['title'] = "Site Search";
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

        $file_content_en = File::get(base_path('resources/lang/en.json'));
        $lang_arr_en = json_decode(json: $file_content_en, associative: true);
        $array_keys_en = array_keys($lang_arr_en);
        $array_values_en = array_values($lang_arr_en);
        $searchInput = preg_quote($searchKey, '~'); // don't forget to quote input string!
        $final_result_en = preg_grep('~' . $searchInput . '~i', $array_values_en);

        $file_content_mr = File::get(base_path('resources/lang/mr.json'));
        $lang_arr_mr = json_decode(json: $file_content_mr, associative: true);
        $array_keys_mr = array_keys($lang_arr_mr);
        $array_values_mr = array_values($lang_arr_mr);
        $searchInput = preg_quote($searchKey, '~'); // don't forget to quote input string!
        $final_result_mr = preg_grep('~' . $searchInput . '~i', $array_values_mr);
        
        $directory = __DIR__; // Root directory of your Laravel project
        $keywords = ['Auth::', 'Route::', 'DB::', 'view(', 'request(', 'return redirect']; // Add your keywords here
        $extensions = ['blade.php']; // Only scan these file types

        echo "<pre>";print_r($final_result_en);
        print_r(array_keys($final_result_en));exit;

        $this->searchInFiles($directory, $keywords, $extensions);

        echo "<pre>";print_r($final_result_en);print_r($final_result_mr);exit;
		return view("pages/sitemap", compact('data','newsList'));
    }
    function searchInFiles($dir, $keywords, $extensions) {
        $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

        foreach ($rii as $file) {
            if ($file->isDir()) continue;

            $filename = $file->getPathname();
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if (!in_array($ext, $extensions) && !str_ends_with($filename, '.blade.php')) continue;

            $lines = file($filename);
            foreach ($lines as $lineNumber => $line) {
                foreach ($keywords as $keyword) {
                    if (stripos($line, $keyword) !== false) {
                        echo "Found '$keyword' in $filename on line " . ($lineNumber + 1) . ":\n";
                        echo trim($line) . "\n\n";
                    }
                }
            }
        }
    }
}
