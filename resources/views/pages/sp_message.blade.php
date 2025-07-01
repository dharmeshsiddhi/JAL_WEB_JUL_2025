@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
            <section class="section-info offer" id="spMessageDiv">
                <div class="section__title">
                    <h2 class="section__titletext" style="color: #FFF;">{{ __('HOME_PAGE_SP_DESK_TITLE_FROM') }} <label style="font-size: 1.6rem;font-weight: 700;color: #FFC404;text-align: center;margin-bottom: 1rem;">{{ __('HOME_PAGE_SP_DESK_TITLE_SP_DESK') }}</label></h2>
                    <hr class="section__titlehr" style="background-color: #FFC404;">
                </div>
                <div class="row mx-0 mt-10">
                    <div class="col-md-4"><img style="box-shadow: 3px 3px 3px 3px rgba(0.3, 0, 0, 0.6);" src="{{ asset('sppic/drmaheshwarreddy.jpg') }}" alt="SP" class="section-info__image"></div>
                    <div class="col-md-8">
    <p class="section-info__paragraph" style="font-family: 'Poppins', 'sans-serif'; font-size: 1rem; line-height: 1.7;text-indent: 40px;">
    {{ __('HOME_PAGE_SP_DESK_PARA_1') }}
    </p><br>
    <p class="section-info__paragraph" style="font-family: 'Poppins', 'sans-serif'; font-size: 1rem; line-height: 1.7;text-indent: 40px;">
    {{ __('HOME_PAGE_SP_DESK_PARA_2') }}
    </p>
    <p class="section-info__from mt-20" style="font-family: 'Poppins', 'sans-serif'; font-weight: 700;">{{ __('HOME_PAGE_SP_DESK_SP_NAME') }}</p>
    <p class="section-info__from mt-10" style="font-family: 'Poppins', 'sans-serif'; font-weight: 700;">{{ __('HOME_PAGE_SP_DESK_SP_DESG') }}</p>
</div>

                </div>
            </section>
@endsection
@section('inlineScript')
<script>
</script>
@endsection
