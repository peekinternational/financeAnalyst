
@extends('layouts.app')
 <style>
@font-face {
  font-family: SourceSansPro;
  src: url(SourceSansPro-Regular.ttf);
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #252851;
  text-decoration: none;
}

body {
  /* position: relative;
  width: 16cm;
  height: 29.7cm;
  margin: 0 auto;
  color: #555555;
  background: #FFFFFF;
  font-family: Arial, sans-serif;
  font-size: 14px;
  font-family: SourceSansPro; */
}

header {
  padding: 10px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid #AAAAAA;
}

#logo {
  float: left;
  margin-top: 8px;
}

#logo img {
  height: 70px;
}

#company {
  text-align: right;
}


#details {
  margin-bottom: 50px;
}

#client {
  padding-left: 6px;
  border-left: 6px solid #252851;
  float: left;
}

#client .to {
  color: #777777;
}

h2.name {
  font-size: 1.4em;
  font-weight: normal;
  margin: 0;
}

#invoice {
  text-align: right;
}

#invoice h1 {
  color: #0087C3;
  font-size: 2.4em;
  line-height: 1em;
  font-weight: normal;
  margin: 0  0 10px 0;
}

#invoice .date {
  font-size: 1.1em;
  color: #777777;
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 20px;
  background: #EEEEEE;
  text-align: center;
  border-bottom: 1px solid #FFFFFF;
}

table th {
  white-space: nowrap;
  font-weight: normal;
}

table td {
  text-align: right;
}

table td h3{
  color: #d9af44;
  font-size: 1.2em;
  font-weight: normal;
  margin: 0 0 0.2em 0;
}

table .no {
  color: #FFFFFF;
  font-size: 1.6em;
  background: #d9af44;
}

table .desc {
  text-align: left;
}

table .unit {
  background: #DDDDDD;
}

table .qty {
}

table .total {
  background: #d9af44;
  color: #FFFFFF;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table tbody tr:last-child td {
  border: none;
}

table tfoot td {
  padding: 10px 20px;
  background: #FFFFFF;
  border-bottom: none;
  font-size: 1.2em;
  white-space: nowrap;
  border-top: 1px solid #AAAAAA;
}

table tfoot tr:first-child td {
  border-top: none;
}

table tfoot tr:last-child td {
  color: #d9af44;
  font-size: 1.4em;
  border-top: 1px solid #d9af44;

}

table tfoot tr td:first-child {
  border: none;
}

#thanks{
  font-size: 2em;
  margin-bottom: 50px;
}

#notices{
  padding-left: 6px;
  border-left: 6px solid#d9af44;
}

#notices .notice {
  font-size: 1.2em;
}

/* footer {
  color: #777777;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #AAAAAA;
  padding: 8px 0;
  text-align: center;
} */

 </style>
  @section('content')
  <?php
   $path = public_path('/frontend-assets/logo.png');
                    $type = pathinfo($path, PATHINFO_EXTENSION);
                    $data = file_get_contents($path);
                    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

                    ?>
    <div class="container" style="margin-top: 9rem;margin-bottom: 6rem;background:white;">
      <div class="row">
        <div class="col-md-12" style="margin-bottom:30px;">
          <div class="clearfix">
            <div id="logo">
              <img src="{{$base64}}">
            </div>
            <div id="company">
              <h2 class="name">Experlu</h2>
              <div>455 Foggy Heights, AZ 85004, US</div>
              <div>(602) 519-0450</div>
              <div><a href="mailto:company@example.com">company@example.com</a></div>
            </div>
          </div>
          <div>
            <div id="details" class="clearfix">
              <div id="client">
                <div class="to">INVOICE TO:</div>
                <h2 class="name">{{$invoice->name}}</h2>
                <div class="address">{{$invoice->address}}</div>
                <div class="email"><a href="mailto:{{$invoice->email}}">{{$invoice->email}}</a></div>
              </div>
              <div id="invoice">
                <?php
                $date = $invoice->updated_at;
                $quote_date =	date('d-M-Y', strtotime($date));
                $due_date =	date('d-M-Y', strtotime($date. ' + 1 days'));
                 ?>
                <div class="date">Invoice #: {{$invoice->id}}</div>
                <div class="date">Date of Invoice: {{$quote_date}}</div>
                <div class="date">Due Date: {{$due_date}}</div>
              </div>
            </div>
            @if(FA::checkPayment($invoice->id,$invoice->p_id) == 1)
            <div class="text-right" style="margin-bottom: 20px;"><span class="label label-success" style="font-size: 15px;">Paid</span></div>
            @else
            <div class="text-right" style="margin-bottom: 20px;"><span class="label label-warning" style="font-size: 15px;">UnPaid</span></div>
            @endif
            <table border="0" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th class="no">#</th>
                  <th class="desc" colspan="3">Title</th>
                  <th class="total">TOTAL</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="no" style="text-align:center;">1</td>
                  <td class="desc"colspan="3"><h3>{{$invoice->job_title}}</h3>Experlu Fee</td>
                  <td class="total" style="text-align:center;">£{{$invoice->experlu_fee}}</td>
                </tr>
                <?php
                $vat_fee = $invoice->experlu_fee*20/100;
                $total = $invoice->experlu_fee+$vat_fee;
                ?>
                <!-- <tr>
                  <td class="no" style="text-align:center;">2</td>
                  <td class="desc"colspan="3"><h3>VAT</h3></td>
                  <td class="total" style="text-align:center;">£{{$vat_fee}}</td>
                </tr> -->
                <!-- <tr>
                  <td class="no">03</td>
                  <td class="desc"><h3>Search Engines Optimization</h3>Optimize the site for search engines (SEO)</td>
                  <td class="unit">$40.00</td>
                  <td class="qty">20</td>
                  <td class="total">$800.00</td>
                </tr> -->
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2"></td>
                  <td colspan="2">SUBTOTAL</td>
                  <td>£{{$invoice->experlu_fee}}</td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td colspan="2">VAT 20%</td>
                  <td>£{{$vat_fee}}</td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td colspan="2">GRAND TOTAL</td>
                  <td>£{{$total}}</td>
                </tr>
              </tfoot>
            </table>
            <div class="text-center" style="text-align: center;margin-top: 50px;">
              <a href="{{ url('partner/invoice_pdf/'.$invoice->id)}}" class="btn" style="color: white;background: #d9af44;padding: 15px; border-radius: 9px;">Download PDF</a>
              @if(FA::checkPayment($invoice->id,$invoice->p_id) == 0)
              <a href="{{ url('partner/checkout')}}" class="btn" style="color: white;background: #252851;padding: 15px; border-radius: 9px;">Pay Now</a>
              @endif
            </div>
            <!-- <div id="thanks">Thank you!</div>
            <div id="notices">
              <div>NOTICE:</div>
              <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  @endsection
