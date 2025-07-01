<table class="table table-hover table-bordered table-responsive-md mt-10">
    <thead>
        <tr>
            <th scope="col" width="5%">#</th>
            <th scope="col" width="70%">TITLE</th>
            <th scope="col" width="15%">DOWNLOAD</th>
            <th scope="col" width="10%">VIEW</th>
        </tr>
    </thead>
    <tbody>
        @if(count($recruitmentList))
            @foreach($recruitmentList as $detail)
                <tr>
                    <td class="v-center">{{ $rowStart + $loop->iteration }}</td>
                    <td class="v-center">{{ $detail->MRCT_Title }}</td>
                    <td><a target="_blank" rel="noopener noreferrer" href="https://panel.jalgaonpolice.gov.in/{{ $detail->MRCT_Link }}" class="btn btn-danger btn-lg btn-block"><i class="fa fa-file-pdf-o mr-2"></i>Download</a></td>
                    <td><button type="button" class="btn btn-danger btn-lg btn-block" onclick="openCustomModal('Recruitment','https://panel.jalgaonpolice.gov.in/{{ $detail->MRCT_Link }}')"><i class="fa fa-eye mr-2"></i>View</button></td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
<div class="col-md-12 d-flex justify-content-center">
    {{ $recruitmentList->onEachSide(0)->links('layout.pagination') }}
</div>