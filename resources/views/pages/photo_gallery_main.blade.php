@extends("layout.app") 
@section('inlineStyle')
<style>
.ribbon-custom {
  background: red;
  height: 40px;
  line-height: 40px;
  position: absolute;
  left: 9px;
  padding-left: 20px;
  top: 10px;
  color: #fff;
  z-index: 1;
}
.ribbon-custom:before {
  content: "";
  position: absolute;
  height: 0;
  width: 0;
  top: 100%;
  left: 0px;
  border-top: 7px solid #7f0000;
  border-left: 7px solid transparent;
}
.ribbon-custom:after {
  content: "";
  display: block;
  height: 0;
  width: 0;
  border-style: solid;
  border-width: 20px;
  border-color: red;
  border-right-color: transparent;
  position: absolute;
  left: 100%;
  top: 0;
}
</style>
@endsection
@section("page")
    <div class="section__title" style="padding-bottom: 0px;">
        <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('PHOTO_GALLERY_PAGE_TITLE') }}</h2>
        <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
    </div>
    <form id="form1">
        <div class="row mx-0">
            <div class="col-md-4"></div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>{{ __('GRADATION_LIST_PAGE_FORM_YEAR_LABEL') }} :</label>
                    <div class="rightNavDropdown" data-aos="fade-left">
                        <select class="home-ds-select col6" id="formYearId" name="formYearId">
                            <option value="" title="{{ __('GRADATION_LIST_PAGE_FORM_YEAR_SELECT') }}">{{ __('GRADATION_LIST_PAGE_FORM_YEAR_SELECT') }}</option>
                            @if(count($yearList) > 0)
                                @foreach($yearList as $yDetail)
                                    <option value="{{ $yDetail->MYR_ID }}">{{ $yDetail->MYR_Name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <label>&nbsp;</label>
                <button type="button" class="btn btn-primary btn-lg btn-block mt-2" style="padding:15px;" onclick="searchGalleryMainList()"><i class="fa fa-search mr-2"></i>{{ __('PRESS_PAGE_FORM_BUTTON') }}</button>
            </div>
            <div class="col-md-12"><hr></div>
        </div>
    </form>
    <section class="content_body">
        <div class="container_common">
            <div id="DivContent">
                <div class="row" id="ajaxResponseData">
                    @if(count($galleryList))
                        @foreach($galleryList as $galDetail)
                            <div class="col-md-3 col-sm-3 col-xs-12 mb-4">
                                <div class="ribbon-custom">{{ $galDetail->MYR_Name }}</div>
                                <a class="Mp_card photoCat" href="javascript:void(0)" title="{{ $galDetail->GMN_Title }}" onclick="getPhotoGallery('{{ $galDetail->GMN_ID }}')">
                                    <img class="card__image" src="https://panel.jalgaonpolice.gov.in/{{ $galDetail->GMN_Thumbnail_Path }}" alt="Image of {{ $galDetail->GMN_Title }}" title="{{ $galDetail->GMN_Title }}">
                                    <div class="card__overlay">
                                        <div class="card__header">
                                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                                <path d=""></path>
                                            </svg>
                                            <div class="card__header-text">
                                                <h3 class="card__title">
                                                    <?php $out = strlen($galDetail->GMN_Title) > 320 ? substr($galDetail->GMN_Title,0,320)."..." : $galDetail->GMN_Title; ?>
                                                    <?php echo $out; ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <span><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp; PHOTOS  &nbsp;:&nbsp;   {{ $galDetail->count }}&nbsp;</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        <div class="col-md-12 d-flex justify-content-center mt-30">
                            {{ $galleryList->onEachSide(0)->links('layout.pagination') }}
                        </div>
                    @else
                        <div class="col"></div>
                        <div class="col-md-6">
                            <div role="alert" class="fade d-flex justify-content-between align-items-center alert alert-danger show">No Records Found!</div>
                        </div>
                        <div class="col"></div>
                    @endif
                </div>
                <div id="ajaxGalleryData"></div>
            </div>
        </div>
    </section>
@endsection
