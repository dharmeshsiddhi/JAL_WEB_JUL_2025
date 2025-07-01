@if(count($complaintDetail) > 0)
    @foreach($complaintDetail as $complaintDetail)
        <div class="custom-shadow p-10 mt-20" style="margin:20px;">
            <div class="row">
                <div class="col-md-2">
                    <label>{{ __('REGISTER_COMPLAINT_PAGE_NAME_LABEL') }}</label>
                </div>
                <div class="col-md-10">
                    <label>: {{ $complaintDetail->CMP_Name }}</label>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <label>{{ __('REGISTER_COMPLAINT_PAGE_MOBILE_LABEL') }}</label>
                </div>
                <div class="col-md-10">
                    <label>: {{ $complaintDetail->CMP_Mobile }}</label>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <label>{{ __('REGISTER_COMPLAINT_PAGE_AREA_LABEL') }}</label>
                </div>
                <div class="col-md-10">
                    <label>: {{ $complaintDetail->CMP_Area }}</label>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <label>{{ __('REGISTER_COMPLAINT_PAGE_TOWN_LABEL') }}</label>
                </div>
                <div class="col-md-10">
                    <label>: {{ $complaintDetail->CMP_Town }}</label>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <label>{{ __('REGISTER_COMPLAINT_PAGE_POLICE_STATION_LABEL') }}</label>
                </div>
                <div class="col-md-10">
                    <label>: {{ $complaintDetail->MPS_Name }}</label>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <label>{{ __('REGISTER_COMPLAINT_PAGE_NATURE_LABEL') }}</label>
                </div>
                <div class="col-md-10">
                    <label>: {{ $complaintDetail->CMP_Nature }}</label>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <label>{{ __('REGISTER_COMPLAINT_PAGE_BRIEF_LABEL') }}</label>
                </div>
                <div class="col-md-10">
                    <label>: {{ $complaintDetail->CMP_Brief }}</label>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <label>{{ __('TRACK_COMPLAINT_PAGE_STATUS_LABEL') }}</label>
                </div>
                <div class="col-md-10">
                    @if($complaintDetail->CMP_Status == 0)
                        <label class="text-danger">: {{ __('TRACK_COMPLAINT_PAGE_STATUS_LABEL_PENDING') }} </label>
                    @else 
                        <label class="text-success">: {{ __('TRACK_COMPLAINT_PAGE_STATUS_LABEL_RESOLVED') }} </label>
                    @endif
                </div>
            </div>
            <hr>
            @if($complaintDetail->CMP_File_Name !== "")
            <div class="row">
                <div class="col-md-2">
                    <label>{{ __('REGISTER_COMPLAINT_PAGE_ATTACH_LABEL') }}</label>
                </div>
                <div class="col-md-10">
                    <label><a target="_blank" rel="noopener noreferrer" href="https://jalgaonpolice.gov.in{{ $complaintDetail->CMP_File_Path }}" class="btn btn-primary btn-lg"><i class="fa fa-file-pdf-o mr-2"></i>{{ __('PRESS_PAGE_TABLE_DOWNLOAD') }}</a></label>
                </div>
            </div>
            <hr>
            @endif
            @if($complaintDetail->CMP_Status == 1)
            <div class="row">
                <div class="col-md-2">
                    <label>{{ __('TRACK_COMPLAINT_PAGE_RESOLVED_REMARK_LABEL') }}</label>
                </div>
                <div class="col-md-10">
                    <label>: {{ $complaintDetail->CMP_Resolved_Remark }}</label>
                </div>
            </div>
            <hr>
            @endif
            <div class="row">
                <div class="col-md-2">
                    <label>{{ __('TRACK_COMPLAINT_PAGE_PRINT_BUTTON') }}</label>
                </div>
                <div class="col-md-10">
                    <label><a target="_blank" rel="noopener noreferrer" href="https://panel.jalgaonpolice.gov.in/Common/generateComplaintReport/{{ $complaintDetail->CMP_ID }}" class="btn btn-primary btn-lg"><i class="fa fa-file-pdf-o mr-2"></i>{{ __('TRACK_COMPLAINT_PAGE_PRINT_BUTTON') }}</a></label>
                </div>
            </div>
            <hr>
        </div>
    @endforeach
@else
<div role="alert" class="fade d-flex justify-content-between align-items-center alert alert-danger show">No Records Found!</div>
@endif