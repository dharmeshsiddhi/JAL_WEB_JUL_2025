@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <div class="section__title" style="padding-bottom: 0px;">
        <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('PHOTO_GALLERY_PAGE_TITLE') }}</h2>
        <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
    </div>
    <section class="content_body">
        <div class="container_common">
            <div id="DivContent">
                <div class="dropdown_display3" style="display:none">
                    <span>Financial Year :</span>
                    <div class="DdBox2">
                        <select name="ctl00$ContentPlaceHolder1$ddlfinyear" id="ctl00_ContentPlaceHolder1_ddlfinyear">
                            <option value="0">All Years</option>
                            <option value="2023-24">2023-24</option>
                            <option value="2019-20">2019-20</option>
                        </select>
                    </div>
                </div>
                <div class="row" id="ajaxResponseData">
                    @if(count($galleryList))
                        @foreach($galleryList as $galDetail)
                            <div class="col-md-3 col-sm-3 col-xs-12 mb-4">
                                <a class="Mp_card photoCat" href="javascript:void(0)" title="{{ $galDetail->GMN_Title }}" onclick="getPhotoGallery('{{ $galDetail->GMN_ID }}')">
                                    <img class="card__image" src="https://panel.jalgaonpolice.gov.in/{{ $galDetail->GMN_Thumbnail_Path }}" alt="Image of {{ $galDetail->GMN_Title }}" title="{{ $galDetail->GMN_Title }}">
                                    <div class="card__overlay">
                                        <div class="card__header">
                                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                                <path d=""></path>
                                            </svg>
                                            <div class="card__header-text">
                                                <h3 class="card__title">{{ $galDetail->GMN_Title }}</h3>
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
