<table class="table table-hover table-bordered table-responsive-md mt-10">
    <thead>
        <tr>
            <th scope="col" width="5%">#</th>
            <th scope="col" width="11%">{{ __('PRESS_PAGE_TABLE_DATE') }}</th>
            <th scope="col" width="55%">{{ __('PRESS_PAGE_TABLE_TITLE') }}</th>
            <th scope="col" width="15%">{{ __('PRESS_PAGE_TABLE_DOWNLOAD') }}</th>
            <th scope="col" width="15%">{{ __('PRESS_PAGE_TABLE_VIEW') }}</th>
        </tr>
    </thead>
    <tbody>
        @if(count($pressList))
            @foreach($pressList as $detail)
                <tr>
                    <td class="v-center">{{ $rowStart + $loop->iteration }}</td>
                    <td class="v-center">{{ date('d-m-Y', strtotime($detail->MPR_Date)) }}</td>
                    <td class="v-center">{{ $detail->MPR_Title }}</td>
                    <td><a target="_blank" rel="noopener noreferrer" href="https://panel.jalgaonpolice.gov.in/{{ $detail->MPR_Attach }}" class="btn btn-danger btn-lg btn-block"><i class="fa fa-file-pdf-o mr-2"></i>{{ __('PRESS_PAGE_TABLE_DOWNLOAD') }}</a></td>
                    <td><button type="button" class="btn btn-danger btn-lg btn-block" onclick="openCustomModal('Press Release','https://panel.jalgaonpolice.gov.in/{{ $detail->MPR_Attach }}')"><i class="fa fa-eye mr-2"></i>{{ __('PRESS_PAGE_TABLE_VIEW') }}</button></td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
<div class="col-md-12 d-flex justify-content-center">
    {{ $pressList->onEachSide(0)->links('layout.pagination') }}
</div>