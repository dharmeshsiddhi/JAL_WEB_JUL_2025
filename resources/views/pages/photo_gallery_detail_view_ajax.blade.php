
<div class="row mx-0">
    <div class="col-md-10 text-center">
        @if(count($galleryDetail))
            @foreach($galleryDetail as $mDetail)
                <h2 class="text-justify text-primary" style="line-height: 1.5em !important;"><i class="fa fa-camera"></i> : {{ $mDetail->GMN_Title }}</h2>
            @endforeach
        @endif
    </div>
    <div class="col-md-2 text-center"><button type="button" class="btn btn-danger btn-lg btn-block" onclick="closeGalleryDetailDiv()"><i class="fa fa-backward mr-2"></i>{{ __('GALLARY_PAGE_BACK_BUTTON') }}</button></div>
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