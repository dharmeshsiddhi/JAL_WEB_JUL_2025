@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">Recruitment</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        @if(count($recruitmentList))
            <div class="row mx-0">
                <div class="col-md-1"></div>
                <form id="form1"></form>
                <div class="col-md-10" id="ajaxResponseData" style="overflow-x:auto;">
                    <!-- <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>From Date :</label>
                                <input
                                    type="tel"
                                    class="form-control form-control-sm"
                                    id="us_date1"
                                    name="us_date1"
                                    placeholder="DD-MM-YYYY"
                                    onkeypress="return handle1(event, 'us_name');"
                                    tabindex="1"
                                    readonly = "readonly" 
                                    value="{{ date('d-m-Y', strtotime('-1 month', strtotime(date('d-m-Y')))) }}"
                                />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>To Date :</label>
                                <input
                                    type="tel"
                                    class="form-control form-control-sm"
                                    id="us_date2"
                                    name="us_date2"
                                    placeholder="DD-MM-YYYY"
                                    onkeypress="return handle1(event, 'us_name');"
                                    tabindex="1"
                                    readonly = "readonly" 
                                    value="{{ date('d-m-Y') }}"
                                />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label>&nbsp;</label>
                            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="openCustomModal()"><i class="fa fa-search mr-2"></i>View</button>
                        </div>
                        <div class="col-md-12"><hr></div>
                    </div> -->
                    <table class="table table-hover table-bordered table-responsive-md mt-10">
                        <thead>
                            <tr>
                                <th scope="col" width="5%">#</th>
                                <th scope="col" width="70%">TITLE</th>
                                <th scope="col" width="15%">DOWNLOAD</th>
                                <th scope="col" width="10%">VIEW</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($recruitmentList))
                                @foreach($recruitmentList as $detail)
                                    <tr>
                                        <td class="v-center">{{ $rowStart + $loop->iteration }}</td>
                                        <td class="v-center">{{ $detail->MRCT_Title }}</td>
                                        <td><a target="_blank" rel="noopener noreferrer" href="https://panel.jalgaonpolice.gov.in/{{ $detail->MRCT_Link }}" class="btn btn-danger btn-lg btn-block"><i class="fa fa-file-pdf-o mr-2"></i>Download</a></td>
                                        <td><button type="button" class="btn btn-danger btn-lg btn-block" onclick="openCustomModal('Recruitment','https://panel.jalgaonpolice.gov.in/{{ $detail->MRCT_Link }}')"><i class="fa fa-eye mr-2"></i>View</button></td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    <div class="col-md-12 d-flex justify-content-center">
                        {{ $recruitmentList->onEachSide(0)->links('layout.pagination') }}
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        @else
            <div class="row mx-0">
                <div class="col"></div>
                <div class="col-md-6">
                    <div role="alert" class="fade d-flex justify-content-between align-items-center alert alert-danger show">No Records Found!</div>
                </div>
                <div class="col"></div>
            </div>
        @endif
    </section>
    <div id="detailModal" class="modal">
        <div class="modal__inner">
            <label for="3" onclick="closeCustomModal()"><i class="fa fa-times m-14"></i></label>
            <div class="modal-container">
                <div class="modal-header">
                    <h2 id="modalTitle">Title</h2>
                </div>
                <div class="modal-mainbody" id="detailModalBody">
                </div>
            </div>
        </div>
    </div>
@endsection
