<style>
table, th, td {
  border: 1px solid black;
}
</style>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Services Requried</th>
                <th>Frequency</th>
                <th style="width: 14%;text-align: right;">Amount Fee (GBP)</th>

            </tr>
        </thead>
        <tbody>
        @foreach($data['q_services'] as $key=> $quote_ajax)
            <tr>
                <td>{{$quote_ajax}}</td>

                <td>{{$data['payment_frquency'][$key]}}</td>

                <td style="width: 14%;text-align: right;">{{number_format($data['quote_price'][$key])}}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3" style="text-align: right;">{{number_format(array_sum($data['quote_price']))}}</td>
            </tr>

            <tr>
                <td>VAT</td>
                <td>20%</td>
                <td style="text-align: right;" >{{number_format(array_sum($data['quote_price'])*20/100)}}</td>

            </tr>
            <tr>
                <td>Experlu Fee</td>
                <td>25%</td>
                <td style="text-align: right;" >{{number_format(array_sum($data['quote_price'])*25/100)}}</td>

            </tr>
            <tr style="background-color: #03840396;font-weight: 700;">
                <td colspan="2">Total</td>

                <td  style="text-align: right;">{{number_format(array_sum($data['quote_price']) + array_sum($data['quote_price'])*20/100 + array_sum($data['quote_price'])*25/100)}}</td>
            </tr>
        </tbody>
    </table>
</div>
<p style="font-size: 20px;color: #072f44; padding-top: 0px;font-weight: 700;">The Experlu fee for this job is <strong>{{number_format(array_sum($data['quote_price'])*25/100)}}</strong></p>
