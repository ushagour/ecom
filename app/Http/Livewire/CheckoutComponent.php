<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Transaction;
use Cart;
use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Http\UploadedFile;

class CheckoutComponent extends Component
{
  public $ship_to_different, $firstname, $lastname, $email, $line1, $line2, $mobile, $city, $province, $country, $zipcode, $s_firstname, $s_lastname, $s_email, $s_line1, $s_line2, $s_mobile, $s_city, $s_province, $s_country, $s_zipcode, $paymentmode, $thankyou, $card_no, $exp_month, $exp_year, $cvc;

  public function updated($fields)
  {
    $this->validateOnly($fields, [
      'firstname' => 'required',
      'lastname' => 'required',
      'email' => 'required|email',
      'line1' => 'required',
      'mobile' => 'required|numeric',
      'city' => 'required',
      'province' => 'required',
      'country' => 'required',
      'zipcode' => 'required',
      'paymentmode' => 'required',
    ]);

    if ($this->ship_to_different) {
      $this->validateOnly($fields, [
        's_firstname' => 'required',
        's_lastname' => 'required',
        's_email' => 'required|email',
        's_line1' => 'required',
        's_mobile' => 'required|numeric',
        's_city' => 'required',
        's_province' => 'required',
        's_country' => 'required',
        's_zipcode' => 'required',
      ]);
    }

 
  }

  public function placeOrder()
  {
    $this->validate([
      'firstname' => 'required',
      'lastname' => 'required',
      'email' => 'required|email',
      'line1' => 'required',
      'mobile' => 'required|numeric',
      'city' => 'required',
      'province' => 'required',
      'country' => 'required',
      'zipcode' => 'required',
      'paymentmode' => 'required',
    ]);

  
    $order = new Order();
    $order->user_id = Auth::user()->id;
    $order->tax =session()->get('checkout')['tax'];
    $order->subtotal =session()->get('checkout')['subtotal'];
    $order->total =session()->get('checkout')['total'];
    $order->firstname = $this->firstname;
    $order->lastname = $this->lastname;
    $order->email = $this->email;
    $order->line = $this->line1;
    $order->line1 = $this->line2;
    $order->mobile = $this->mobile;
    $order->city = $this->city;
    $order->province = $this->province;
    $order->country = $this->country;
    $order->zipcode = $this->zipcode;
    $order->status = 'ordred';
    $order->is_shipping_difrent = $this->ship_to_different ? 1 : 0;
    $order->save();

    foreach (Cart::instance('cart')->content() as $item) {
      $orderItem = new OrderItem();
      $orderItem->product_id = $item->id;
      $orderItem->order_id = $order->id;
      $orderItem->price = $item->price;
      $orderItem->quantity = $item->qty;

   

      $orderItem->save();
    }

    if ($this->ship_to_different) {
      $this->validate([
        's_firstname' => 'required',
        's_lastname' => 'required',
        's_email' => 'required|email',
        's_line1' => 'required',
        's_mobile' => 'required|numeric',
        's_city' => 'required',
        's_province' => 'required',
        's_country' => 'required',
        's_zipcode' => 'required',
      ]);

      $shipping = new Shipping();
      $shipping->order_id = $order->id;
      $shipping->firstname = $this->s_firstname;
      $shipping->lastname = $this->s_lastname;
      $shipping->email = $this->s_email;
      $shipping->line1 = $this->s_line1;
      $shipping->line2 = $this->s_line2;
      $shipping->mobile = $this->s_mobile;
      $shipping->city = $this->s_city;
      $shipping->province = $this->s_province;
      $shipping->country = $this->s_country;
      $shipping->zipcode = $this->s_zipcode;
      $shipping->save();
    }

    if ($this->paymentmode == 'COD') {
      $this->makeTransaction($order->id, 'pending');
      $this->resetCart();
    }

  }


  public function resetCart()
  {
    $this->thankyou = 1;
    Cart::instance('cart')->destroy();
    session()->forget('checkout');
  }

  public function makeTransaction($order_id, $status)
  {
    $transaction = new Transaction();
    $transaction->user_id = Auth::user()->id;
    $transaction->order_id = $order_id;
    $transaction->mode = $this->paymentmode;
    $transaction->status = $status;
    $transaction->save();
  }

  public function generateDevis()
  {
    // $pdfUrl = Storage::url('devis.pdf');

    // $this->dispatchBrowserEvent('openPDF', ['pdfUrl' => $pdfUrl]);





  }
  public function verifyForCheckout()
  {

    // $this->generateDevis();
    if (!Auth::check()) {
      return redirect()->route('login');
    } else if ($this->thankyou) {
      return redirect()->route('thankyou');
    } else if (!session()->get('checkout')) {
      return redirect()->route('product.cart');
    }
  }


  public function render()
  {
     $this->verifyForCheckout();
    return view('livewire.checkout-component')->layout('layouts.base');
  }
}
