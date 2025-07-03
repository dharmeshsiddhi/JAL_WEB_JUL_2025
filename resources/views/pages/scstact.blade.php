@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('SHEDULE_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <form id="form1">
            <div class="row mx-0">
                <div class="col-md-4"></div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>{{ __('PRESS_PAGE_FORM_YEAR_LABEL') }} :</label>
                        <div class="rightNavDropdown" data-aos="fade-left">
                            <select class="home-ds-select col6" id="formYearId" name="formYearId">
                                <option value="" title="{{ __('PRESS_PAGE_FORM_YEAR_SELECT') }}">{{ __('PRESS_PAGE_FORM_YEAR_SELECT') }}</option>
                                <?php for ($year=2022; $year <= date('Y)'); $year++): ?>
                                    <option value="<?php echo $year;?>"><?php echo $year;?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <label>&nbsp;</label>
                    <button type="button" class="btn btn-primary btn-lg btn-block mt-2" style="padding:15px;" onclick="searchSCActList()"><i class="fa fa-search mr-2"></i>{{ __('PRESS_PAGE_FORM_BUTTON') }}</button>
                </div>
                <div class="col-md-12"><hr></div>
            </div>
        </form>
       @if(count($scstactList))
            <div class="row mx-0">
                <div class="col-md-1"></div>
                <div class="col-md-10" id="ajaxResponseData" style="overflow-x:auto;">
                    <table class="table table-hover table-bordered table-responsive-md">
                        <thead>
                            <tr>
                                <th scope="col" width="5%">#</th>
                                <th scope="col" width="10%">{{ __('SHEDULE_PAGE_TABLE_YEAR') }}</th>
                                <th scope="col" width="55%">{{ __('SHEDULE_PAGE_TABLE_TITLE') }}</th>
                                <th scope="col" width="15%">{{ __('SHEDULE_PAGE_TABLE_DOWNLOAD') }}</th>
                                <th scope="col" width="15%">{{ __('SHEDULE_PAGE_TABLE_VIEW') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($scstactList))
                                @foreach($scstactList as $detail)
                                    <tr>
                                        <td class="v-center">{{ $loop->iteration }}</td>
                                        <td class="v-center">{{ $detail->MSC_Year }}</td>
                                        <td class="v-center">{{ $detail->MSC_Title }}</td>
                                        <td><a target="_blank" rel="noopener noreferrer" href="https://panel.jalgaonpolice.gov.in/{{ $detail->MSC_Attach }}" class="btn btn-danger btn-lg btn-block"><i class="fa fa-file-pdf-o mr-2"></i>{{ __('SHEDULE_PAGE_TABLE_DOWNLOAD') }}</a></td>
                                        <td><button type="button" class="btn btn-danger btn-lg btn-block" onclick="openCustomModal('Offence Register Under Atrocities Act','https://panel.jalgaonpolice.gov.in/{{ $detail->MSC_Attach }}')"><i class="fa fa-eye mr-2"></i>{{ __('SHEDULE_PAGE_TABLE_VIEW') }}</button></td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    <div class="col-md-12 d-flex justify-content-center">
                        {{ $scstactList->onEachSide(0)->links('layout.pagination') }}
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