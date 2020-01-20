<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Experlu Invoice</title>

    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
  <div class="invoice-box" id="DivIdToPrint">
    <table cellpadding="0" cellspacing="0">
      <tr class="top">
        <td colspan="2">
          <table>
            <tr>
              <td class="title">
                <img src="{{asset('frontend-assets/logo.png')}}" style="width:100%; max-width:300px;">
              </td>
              <td>
                <?php
                $date = $invoice->updated_at;
                $quote_date =	date('d-M-Y', strtotime($date));
                $due_date =	date('d-M-Y', strtotime($date. ' + 1 days'));
                 ?>
                Invoice #: {{$invoice->id}}<br>
                Created: {{$quote_date}}<br>
                Due: {{$due_date}}
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr class="information">
        <td colspan="2">
          <table>
            <tr>
              <td>
                Sparksuite, Inc.<br>
                12345 Sunny Road<br>
                Sunnyville, CA 12345
              </td>

              <td>
                <!-- Acme Corp.<br> -->
                {{$invoice->name}}<br>
                {{$invoice->email}}
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr class="heading">
        <td>
          Payment Method
        </td>

        <td>
          Check #
        </td>
      </tr>

      <tr class="details">
        <td>
          Check
        </td>

        <td>
          1000
        </td>
      </tr>

      <tr class="heading">
        <td>Item</td>

        <td>Price</td>
      </tr>

      <tr class="item">
        <td> Experlu Fee</td>

        <td> {{$invoice->experlu_fee}}</td>
      </tr>

      <tr class="item">
        <td>VAT</td>

        <td>{{$invoice->vat_fee}}</td>
      </tr>
      <tr class="total">
        <td></td>
        <?php
          $total =$invoice->experlu_fee+$invoice->vat_fee;
         ?>
        <td>
          Total: {{$total}}
        </td>
      </tr>
    </table>
  </div>
  <div class="text-center" style="text-align: center;margin-top: 10px;">
    <button type="button" name="button" id='print_btn' onclick='downloadPdf();' class="btn btn-md btn-primary" style="color: white;background: #d9af44;height: 34px;">Download PDF</button>
  </div>
</body>
</html>
<script src="{{asset('/frontend-assets/dashboard/js/core/jquery.min.js')}}"></script>
<script>
function printDiv()
{
  // $('#print_btn').hide();
  var divToPrint=document.getElementById('DivIdToPrint');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}

function downloadPdf(){
  var formdata=$('form').serialize();
  console.log(formdata);
  $.ajax({
      url: "{{ url('quote_ajax')}}",
      type: "post",
      data: formdata ,
      success: function (response) {
    console.log(response);
       $('#qoute_ajax').html(response);
         // You will get response from your PHP page (what you echo or print)
      },
      error: function(jqXHR, textStatus, errorThrown) {
         console.log(textStatus, errorThrown);
      }
  });
}

</script>
