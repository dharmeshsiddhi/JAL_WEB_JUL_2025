@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('HALL_OF_FAME_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-12">
                <div class="row mx-0">
                    @if(count($fameList))
                        @foreach($fameList as $detail)
                            <div class="col-md-3 mb-5">
                                <div class="card">
                                    <div class="senior-officers__image-container1" >
                                        <div class="senior-officers__image-mask1"></div>
                                        <img src="https://jalgaonpolice.gov.in/{{ $detail->MHF_Photo }}" class="senior-officers__image1" alt="Senior Officer" onerror="this.onerror=null;this.src='images/cap.jpg';">
                                        <!-- <img src="{{ asset('images/cap.jpg') }}" class="senior-officers__image" alt="Senior Officer"> -->
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title font-weight-bold text-center" style="color: rgb(10, 36, 99);font-family: 'Poppins','sans-serif';">{{ $detail->MHF_Name }}</h3>
                                        <p class="card-text text-center" style="font-size:12px;font-family: 'Poppins','sans-serif';">
                                            <b>
                                                From : {{  date('d-m-Y', strtotime($detail->MHF_Start_Date))   }}  To : @if($loop->first)
                                                Till Date @else {{  date('d-m-Y', strtotime($detail->MHF_End_Date)) }}  @endif 
                                            </b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
