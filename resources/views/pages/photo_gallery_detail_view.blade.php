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
            <div class="row mx-0">
                <div class="col-md-12 text-center">
                    @if(count($galleryDetail))
                        @foreach($galleryDetail as $mDetail)
                            <h2 class="line-height-2em text-justify text-primary"><i class="fa fa-camera"></i> : {{ $mDetail->GMN_Title }}</h2>
                        @endforeach
                    @endif
                </div>
            </div>
            <div id="DivContent">
                <div class="row" id="PressImgId">
                    @if(count($subList))
                        @foreach($subList as $galDetail)
                            <div class="col-lg-3 col-md-3 col-sm-12"><a class="home_img_bx" href="https://panel.jalgaonpolice.gov.in/{{ $galDetail->GIL_Thumbnail_Path }}" data-groups="Image Of Event" data-fancybox="gallery" data-caption="Image Of Event"><img src="https://panel.jalgaonpolice.gov.in/{{ $galDetail->GIL_Thumbnail_Path }}" alt="Image Of Event" title="Image Of Event"></a></div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
