@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">{{ __('ACCIDENT_PAGE_TITLE') }}</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
       
            <div class="row mx-0">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <table class="table table-hover table-bordered table-responsive-md">
                        <thead>
                            <tr>
                                <th scope="col" width="5%">#</th>
                                <th scope="col" width="70%">{{ __('ACCIDENT_PAGE_TABLE_TITLE') }}</th>
                                <th scope="col" width="15%">{{ __('ACCIDENT_PAGE_TABLE_VIEW') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                   <!-- <tr>
                                        <td class="v-center">1</td>
                                        <td class="v-center">Test Entry</td>
                                        <td><a target="_blank" rel="noopener noreferrer" href="#" class="btn btn-danger btn-lg btn-block"><i class="fa fa-file-pdf-o mr-2"></i>View</a></td>
                                    </tr> -->
                               
                        </tbody>
                    </table>
                </div>
                <div class="col-md-1"></div>
            </div>
       
            <div class="row mx-0">
                <div class="col"></div>
                <div class="col-md-6">
                    <div role="alert" class="fade d-flex justify-content-between align-items-center alert alert-danger show">No Records Found!</div>
                </div>
                <div class="col"></div></div>
        
    </section>
@endsection
