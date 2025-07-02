<html>
<head><title>Selection List </title>
</head>
<style>
     .table1 {
          width: 100%;
          border-collapse: collapse;
     }
     .table1 th, .table1 td {
          border-collapse: collapse;
     }
     .table2 {
          width: 100%;
          border-collapse: collapse;
     }
     .table2 th, .table2 td {
          border: 1px solid black;
          border-collapse: collapse;
     }
     .table3 {
          width: 100%;
          border-collapse: collapse;
     }
     .table3 th, .table3 td {
          border: 1px solid black;
          border-collapse: collapse;
     }
     th, td {
          padding: 5px;
          text-align: left;
     }
     .textCenter {
          text-align: center;
     }
     .textRight {
          text-align: right;
     }
     .color-black {
          background-color:#000000;
     }
     .color-grey {
          background-color:#D8D8D8;
     }
     .row1 {
          /* border:1px solid black; */
     }
     .font-22 {
          font-size: 22px;
     }
     .font-13 {
          font-size: 13px;
     }
     .font-16 {
          font-size: 14px;
     }
     .font-18 {
          font-size: 18px;
     }
     .mt-10 {
          margin-top:10px;
     }
     table tfoot{display:table-row-group;}
     @page { margin:20px; margin-bottom:20px; margin-left:20px; }
</style>
<div class="row1">
     <table class="table1">
          <thead>
               <tr>
                    <th class="textCenter"><label class="font-22">JALGAON POLICE</label></th>
               </tr>
               <tr>
                    <th class="textCenter"><label class="font-18">Contact List</label></th>
               </tr>
          </thead>
     </table>
     <table class="table2 mt-10">
          <thead>
               <tr class="font-13 color-grey">
                    <th class="textCenter">Sr</th>
                    <th class="textCenter">Branch Name/Officer Name</th>
                    <th class="textCenter">Designation</th>
                    <th class="textCenter">Office Telephone Number</th>
                    <th class="textCenter">Mobile Number</th>
                    <th class="textCenter">Email</th>
               </tr>
          </thead>
          <tbody>
               @php $counter=1; @endphp
               @if(count($officerList))
                    @foreach($officerList as $detail)
                    <tr class="font-13">
                         <td class="textCenter" style="height:18px">{{ $counter }}</td>
                         <td>{{ $detail->MSO_Name }}</td>
                         <td>{{ $detail->MDES_Name }}, {{ $detail->MSO_Work_Location }}</td>
                         <td class="textCenter">{{ $detail->MSO_Landline }}</td>
                         <td class="textCenter">{{ $detail->MSO_Mobile }}</td>
                         <td>{{ $detail->MSO_Email }}</td>
                    </tr>
                    @php $counter=$counter+1; @endphp  
                    @endforeach
               @endif
               @if(count($stationList))
                    @foreach($stationList as $detail)
                    <tr class="font-13">
                         <td class="textCenter" style="height:18px">{{ $counter }}</td>
                         <td>{{ $detail->MPS_Incharge_Name }}</td>
                         <td>{{ $detail->MPS_Incharge_Post }} {{ $detail->MPS_Name }}</td>
                         <td class="textCenter">{{ $detail->MPS_Phone }}</td>
                         <td class="textCenter">{{ $detail->MPS_Incharge_Mobile }}</td>
                         <td>{{ $detail->MPS_Email }}</td>
                    </tr>
                    @php $counter=$counter+1; @endphp  
                    @endforeach
               @endif
          </tbody>
     </table>
</div>
<script type="text/php">
    if (isset($pdf)) {
        $text1 = "Page {PAGE_NUM} / {PAGE_COUNT}";
        $size = 9;
        $font = $fontMetrics->getFont("Verdana");
        $width = $fontMetrics->get_text_width($text1, $font, $size) / 2;
        $x = ($pdf->get_width() - $width) / 2;
        $y = $pdf->get_height() - 15;
        $pdf->page_text($x, $y, $text1, $font, $size);
    }
</script>