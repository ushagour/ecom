<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateInvoicePDF($order_id)
    {
       

        // $customer = new Buyer([
        //     'name'          => 'John Doe',
        //     'custom_fields' => [
        //         'email' => 'test@example.com',
        //     ],
        // ]);

        // $item = (new InvoiceItem())->title('Service 1')->pricePerUnit(2);

        // $invoice = Invoice::make()
        //     ->buyer($customer)
        //     ->discountByPercent(10)
        //     ->taxRate(15)
        //     ->shipping(1.99)
        //     ->addItem($item);

        // $data= OrderItem::with(['product','order'])->where('id',2)->first();
        $data = Order::where('id', $order_id)->first();

        // $data = [
        //     'title' => 'Sample PDF Title',
        //     'content' => 'This is the PDF content.',
        // ];
        // dd($data);
        // $pdf = PDF::loadView('pdf.document',$data);
        // // return $pdf->download('nicesnippets.pdf');
        // return $pdf->stream('document.pdf');
        // $pdf = PDF::loadView('vendor.invoices.templates.default');
        // return $pdf->stream();


        // $data=[
        //     '{
        //     "invoice_number": "INV-2023-001",
        //     "date": "2023-07-19",
        //     "due_date": "2023-08-19",
        //     "customer_name": "John Doe",
        //     "items": [
        //         {"description": "Item 1", "quantity": 2, "price": 25.00},
        //         {"description": "Item 2", "quantity": 1, "price": 30.00}
        //     ],
        //     "total": 80.00
        // }'
        // ]
        

            
        //  dd($data->orderItems);
      

        $pdf = PDF::loadView('pdf.document',['order'=>$data]);
        // return $pdf->download('invoice.pdf');
                return $pdf->stream();

    }
}