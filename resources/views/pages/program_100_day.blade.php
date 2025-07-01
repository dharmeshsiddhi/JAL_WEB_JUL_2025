@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);"> {{ __('HOME_PAGE_100_DAY_TEXT') }} </h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="aboutDesc">
                    <iframe src="https://1drv.ms/p/c/25108d39b042fbe2/UQTi-0KwOY0QIIAlqQMAAAAAAAJ2ttMiSa2-aZQ" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
@endsection