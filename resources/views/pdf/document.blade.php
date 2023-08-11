<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Aloha!</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
      padding-top: 10px;
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
</style>

</head>
<body>

  <table width="100%">
    <tr>
      <td >
        <img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'/assets/images/logo-top-1.jpg';?>"  alt="" width="100"></td>
     
        <td align="right">

            <pre >
              <B>Devis  - Non validé</B>  
                Company address
                Tax ID
                phone
                fax
            </pre>
        </td>
    </tr>

  </table>

  <table width="100%">
    <tr>
        <td><strong>From:</strong>   Aklim-group Rabat    </td>
        <td><strong>To:</strong> {{$order->firstname." ".$order->lastname}} - {{$order->email}}</td>
    </tr>
   
                  

  </table>

  <br/>


  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>#</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Unit Price $</th>
        <th>Total $</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($order->orderItems as $item)
      <tr>
        <th scope="row">{{ $item->product->id }}</th>
        <td align="left">{{$item->product->description}}</td>
        <td align="right">{{$item->quantity}}</td>
        <td align="right">{{$item->product->regular_price}}</td>
        <td align="right">{{$item->price}}</td>
      </tr>
      @endforeach
  



    </tbody>

    <tfoot>
        <tr>
            <td colspan="3"></td>
            <td align="right">Subtotal $</td>
            <td align="right">{{$order->subtotal}}</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Tax $</td>
            <td align="right">{{ $order->tax }}</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Total $</td>
            <td align="right" class="gray">$ {{$order->total}}</td>
        </tr>
    </tfoot>
  </table>

</body>
</html>