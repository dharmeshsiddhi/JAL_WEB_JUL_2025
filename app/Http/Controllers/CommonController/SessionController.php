<?php

namespace App\Http\Controllers\CommonController;

use App\Http\Controllers\SettingController;
use Request;
use App\Models\LoginModel;
use App\Models\SettingModel;
use PDF;
use Carbon\Carbon;

class SessionController extends SettingController {
    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for print region list
     */
    public function serverMaintenance() {
        $loginModel = new LoginModel();
        $settingModel = new SettingModel();

        if(session('SID_ESWIMS_SES')) {
            $userId = session('SID_ESWIMS_SES')->userId;
            $sessionId = session('SID_ESWIMS_SES')->sessionId;
            $logId = session('SID_ESWIMS_SES')->logId;

            $logRecord = $loginModel->getLoginUserHistoryRecord($userId, $sessionId, $logId);
            foreach ($logRecord as $row) {
                $activity = $row->LH_Activity;
                $login = $row->LH_Login_Datetime;
            }
            $activity .= ", Logged Out";

            $startTime = Carbon::parse($login);
            $endTime = Carbon::parse(date("Y-m-d H:i:s"));
            
            $days = $startTime->diffInDays($endTime);
            $hours = $startTime->copy()->addDays($days)->diffInHours($endTime);
            $minutes = $startTime->copy()->addDays($days)->addHours($hours)->diffInMinutes($endTime);
            $seconds = $startTime->copy()->addDays($days)->addHours($hours)->addMinutes($minutes)->diffInSeconds($endTime);

            $totalDuration = '';
            if($days > 0) { $totalDuration .= $days.' Days, '; }
            if($hours > 0) { $totalDuration .= $hours.' Hours, '; }
            if($minutes > 0) { $totalDuration .= $minutes.' Minutes, '; }
            if($seconds > 0) { $totalDuration .= $seconds.' Seconds'; }
            
            $updateData['activity'] = $activity;
            $updateData['sessionTime'] = $totalDuration;
            $updateData['logoutDate'] = date('Y-m-d H:i:s');
            $updateData['logoutTime'] = date('H:i:s');
            $logRecord = $loginModel->ajaxUpdateLoginHistory($userId, $sessionId, $logId,$updateData);

            session()->forget('SID_ESWIMS_SES');
        }
        $settings = $settingModel->getProjectCurrentSettings();
        $maintainStart = date('Y-m-d').' '.$settings[0]->ST_Maintenance_Start;
        $maintainEnd = date('Y-m-d').' '.$settings[0]->ST_Maintenance_End;
        $currentDateTime = date('Y-m-d H:i:s');
        $dateTimestamp1 = strtotime($maintainStart);
        $dateTimestamp2 = strtotime($maintainEnd);
        $dateTimestamp3 = strtotime($currentDateTime);
        
        if ($dateTimestamp3 > $dateTimestamp1 && $dateTimestamp3 < $dateTimestamp2) {
        } else {
            echo '<script> window.location.href = "/"; </script>';
        }
        $data['exp_date'] = strtotime($maintainEnd);
        return view("errors/server_maintenance", compact('data'));
    }

    /**
     * Created By: Dharmesh Patil
     * Created Date: 22 July 2021
     * Code For: this function is used for print region list
     */
    public function sessionExpired() {
        $loginModel = new LoginModel();

        if(session('SID_ESWIMS_SES')) {
            $userId = session('SID_ESWIMS_SES')->userId;
            $sessionId = session('SID_ESWIMS_SES')->sessionId;
            $logId = session('SID_ESWIMS_SES')->logId;

            $logRecord = $loginModel->getLoginUserHistoryRecord($userId, $sessionId, $logId);
            foreach ($logRecord as $row) {
                $activity = $row->LH_Activity;
                $login = $row->LH_Login_Datetime;
            }
            $activity .= ", Logged Out";

            $startTime = Carbon::parse($login);
            $endTime = Carbon::parse(date("Y-m-d H:i:s"));
            
            $days = $startTime->diffInDays($endTime);
            $hours = $startTime->copy()->addDays($days)->diffInHours($endTime);
            $minutes = $startTime->copy()->addDays($days)->addHours($hours)->diffInMinutes($endTime);
            $seconds = $startTime->copy()->addDays($days)->addHours($hours)->addMinutes($minutes)->diffInSeconds($endTime);

            $totalDuration = '';
            if($days > 0) { $totalDuration .= $days.' Days, '; }
            if($hours > 0) { $totalDuration .= $hours.' Hours, '; }
            if($minutes > 0) { $totalDuration .= $minutes.' Minutes, '; }
            if($seconds > 0) { $totalDuration .= $seconds.' Seconds'; }
            
            $updateData['activity'] = $activity;
            $updateData['sessionTime'] = $totalDuration;
            $updateData['logoutDate'] = date('Y-m-d H:i:s');
            $updateData['logoutTime'] = date('H:i:s');
            $logRecord = $loginModel->ajaxUpdateLoginHistory($userId, $sessionId, $logId,$updateData);

            session()->forget('SID_ESWIMS_SES');
        }
        return view("errors/session_expired");
    }
    
}
