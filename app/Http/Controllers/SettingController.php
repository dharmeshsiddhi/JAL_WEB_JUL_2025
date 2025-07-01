<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Request;
use App\Models\MasterModel;

class SettingController extends Controller {

    /**
     * Created By: Dharmesh Patil
     * Created Date: 10 June 2022
     * Code For: this function is used for encrypt/decrypt any filed
     */
    function enc_dec_key( $string, $action = 'e' ) {
        $secret_key = 'sid@007123';
        $output = false;
        if( $action == 'e' ) {
            $output = openssl_encrypt( $string, 'AES-256-CBC', $secret_key, 0, "sid#eswims-apps@");
            $output = base64_encode($output);
        } else {
            $string = base64_decode($string);
            $output = openssl_decrypt( $string, 'AES-256-CBC', $secret_key, 0, "sid#eswims-apps@");
        }
        return $output;
    }
    
    public function getDimensions() {
        if(preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"])) {
            return 'Mobile';
        }else{
            return 'Desktop';
        }
    }
    
    public function getWebsiteLastUpdatedDate() {
        $masterModel = new MasterModel();
        
		$mainDate = $masterModel->getSlidersAddedDate();
		$lastDate = $masterModel->getSlidersUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }

		$lastDate = $masterModel->getSeniorOfficersAddedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
		$lastDate = $masterModel->getSeniorOfficersUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
        
		$lastDate = $masterModel->getScheduleCasteAddedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
		$lastDate = $masterModel->getScheduleCasteUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
        
		$lastDate = $masterModel->getReceruitmentAddedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
		$lastDate = $masterModel->getReceruitmentUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
        
		$lastDate = $masterModel->getRecentEventsAddedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
		$lastDate = $masterModel->getRecentEventsUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
        
		$lastDate = $masterModel->getPressAddedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
		$lastDate = $masterModel->getPressUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
        
		$lastDate = $masterModel->getPositiveStoriesAddedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
		$lastDate = $masterModel->getPositiveStoriesUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
        
		$lastDate = $masterModel->getPoliceStationAddedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
		$lastDate = $masterModel->getPoliceStationUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
        
		$lastDate = $masterModel->getNotificationsAddedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
		$lastDate = $masterModel->getNotificationsUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
        
		$lastDate = $masterModel->getNewsAddedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
		$lastDate = $masterModel->getNewsUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
        
		$lastDate = $masterModel->getInitiativesAddedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
		$lastDate = $masterModel->getInitiativesUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
        
		$lastDate = $masterModel->getHallOfFameAddedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
		$lastDate = $masterModel->getHallOfFameUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
        
		$lastDate = $masterModel->getActsAddedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
		$lastDate = $masterModel->getActsUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
        
		$lastDate = $masterModel->getGalleryImageSubAddedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
		$lastDate = $masterModel->getGalleryImageSubUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
        
		$lastDate = $masterModel->getGalleryImageMainAddedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
		$lastDate = $masterModel->getGalleryImageMainUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
        
		$lastDate = $masterModel->getAccidentLastAddedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }
		$lastDate = $masterModel->getAccidentLastUpdatedDate();
        if($lastDate > $mainDate){ $mainDate = $lastDate; }

		return $mainDate;
    }
}
