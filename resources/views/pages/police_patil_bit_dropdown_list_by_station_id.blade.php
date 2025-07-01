@if(count($bitList))
    <option value="All" title="All">All</option>
    @foreach($bitList as $detail)
    <option value="{{ $detail->MPP_BEAT_NAME }}">{{ $detail->MPP_BEAT_NAME }}</option>
    @endforeach
@else
    <option value="" title="Select Bit">Select Bit</option>
@endif