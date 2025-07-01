@if(count($galleryList))
    @foreach($galleryList as $galDetail)
        <div class="col-md-3 col-sm-3 col-xs-12 mb-4">
            <a class="Mp_card photoCat" href="{{ url('/photo-gallery/view-photo-gallery/'.$galDetail->rowId) }}" title="{{ $galDetail->GMN_Title }}">
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