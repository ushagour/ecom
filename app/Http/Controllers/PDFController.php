<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateInvoicePDF()
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

        // return $invoice->stream();
        $order = Order::all();

           dd($order->shipping->id);
        // $pdf = PDF::loadView('vendor.invoices.templates.invoice_order_receipt', array('order'=>$order));
        // return $pdf->download('nicesnippets.pdf');

    }
}