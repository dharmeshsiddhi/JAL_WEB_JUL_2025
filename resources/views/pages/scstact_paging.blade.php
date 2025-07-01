    <table class="table table-hover table-bordered table-responsive-md">
        <thead>
            <tr>
                <th scope="col" width="5%">#</th>
                <th scope="col" width="10%">{{ __('SHEDULE_PAGE_TABLE_YEAR') }}</th>
                <th scope="col" width="55%">{{ __('SHEDULE_PAGE_TABLE_TITLE') }}</th>
                <th scope="col" width="15%">{{ __('SHEDULE_PAGE_TABLE_DOWNLOAD') }}</th>
                <th scope="col" width="15%">{{ __('SHEDULE_PAGE_TABLE_VIEW') }}</th>
            </tr>
        </thead>
        <tbody>
            @if(count($scstactList))
                @foreach($scstactList as $detail)
                    <tr>
                        <td class="v-center">{{ $loop->iteration }}</td>
                        <td class="v-center">{{ $detail->MSC_Year }}</td>
                        <td class="v-center">{{ $detail->MSC_Title }}</td>
                        <td><a target="_blank" rel="noopener noreferrer" href="https://panel.jalgaonpolice.gov.in/{{ $detail->MSC_Attach }}" class="btn btn-danger btn-lg btn-block"><i class="fa fa-file-pdf-o mr-2"></i>{{ __('SHEDULE_PAGE_TABLE_DOWNLOAD') }}</a></td>
                        <td><button type="button" class="btn btn-danger btn-lg btn-block" onclick="openCustomModal('Offence Register Under Atrocities Act','https://panel.jalgaonpolice.gov.in/{{ $detail->MSC_Attach }}')"><i class="fa fa-eye mr-2"></i>{{ __('SHEDULE_PAGE_TABLE_VIEW') }}</button></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div class="col-md-12 d-flex justify-content-center">
        {{ $scstactList->onEachSide(0)->links('layout.pagination') }}
    </div>