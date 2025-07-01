@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <div class="section__title" style="padding-bottom: 0px;">
        <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('HOME_PAGE_INT_TITLE_PROGRAM') }} {{ __('HOME_PAGE_INT_TITLE_INITIATIVE') }}</h2>
        <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
    </div>
    <section class="section-notifications">
        <form id="form1"></form>
        <div class="container_common" id="ajaxResponseData">
            @if(count($initiativeList))
                <div class="row mx-0">
                    @if(count($initiativeList))
                        @foreach($initiativeList as $intDetail)
                            <div class="col-md-12 initiative-div mt-30">
                                <div class="context_area" id="DivContent">
                                    <div class="projects">
                                        <article class="project">
                                            <div class="project__img-container"><img class="project__img" src="https://panel.jalgaonpolice.gov.in/{{ $intDetail->MINT_Path }}" alt=""  onerror="this.onerror=null;this.src='images/initiative.jpg';"></div>
                                            <div class="project__content grid-flow">
                                                <p style="font-size: 16px;">{{ $intDetail->MINT_Title }}</p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="col-md-12 d-flex justify-content-center mt-30">
                        {{ $initiativeList->onEachSide(0)->links('layout.pagination') }}
                    </div>
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
        </div>
    </section>
@endsection