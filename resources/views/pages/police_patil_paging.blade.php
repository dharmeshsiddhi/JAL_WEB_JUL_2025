@if(count($ppList))
    <table class="table table-hover table-bordered table-responsive-md mt-10">
        <thead>
            <tr>
                <th scope="col" width="5%">#</th>
                <th scope="col">BEAT/OUTPOST NAME</th>
                <th scope="col"> VILLAGE</th>
                <th scope="col">POLICE PATIL NAME</th>
                <th scope="col">POLICE PATIL CONTACT NO.</th>
            </tr>
        </thead>
        <tbody>
            @if(count($ppList))
                @foreach($ppList as $detail)
                    <tr>
                        <td class="v-center">{{ $rowStart + $loop->iteration }}</td>
                        <td class="v-center">{{ $detail->MPP_BEAT_NAME }}</td>
                        <td class="v-center">{{ $detail->MPP_BEAT_VILLAGE }}</td>
                        <td class="v-center">{{ $detail->MPP_PP_NAME }}</td>
                        <td class="v-center"><a target="_blank" rel="noopener noreferrer" href="tel:@if($detail->MPP_PP_MOBNO != '') {{ $detail->MPP_PP_MOBNO }} @endif" class="card-link text-decoration-none"><i class="fa fa-phone mr-2"></i><span>@if($detail->MPP_PP_MOBNO != '')  {{ $detail->MPP_PP_MOBNO }} @endif</span></a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div class="col-md-12 d-flex justify-content-center">
        {{ $ppList->onEachSide(0)->links('layout.pagination') }}
    </div>
@else
    <div role="alert" class="fade d-flex justify-content-between align-items-center alert alert-danger show">No Records Found!</div>
@endif