<?php

namespace App\Http\Controllers;

// use App\Models\Payment;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request; 
use Omnipay\Omnipay;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;
class PaymentController extends Controller
{
    public function pay($type)
    {
        $cartItems = [];
        $total = 0;
        foreach (Cart::content() as $item) {            
            if ($item->options->type == 1){ 
                array_push($cartItems,[
                    'name' => $item->name,
                    'price' => $item->price,
                    'desc'  => 'Antes $'.$item->weight,
                    'qty' => 1
                ]);
                $total +=$item->price;
            }
        }
        $checkOutData =[
            'items' => $cartItems,
            'invoice_id' => uniqid(),
            'invoice_description' => 'Pago de curso tal',
            'return_url' => url('successpaypal'),
            'cancel_url' => url('cancelpaypal'),
            'total' => $total,
        ];
        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout($checkOutData);
        return redirect($response['paypal_link']); 
        
    }

    public function success(Request $request)
    {
        // X[!(P2k$
        // 
        $cartItems = [];
        $total = 0;
        foreach (Cart::content() as $item) {            
            if ($item->options->type == 1){ 
                array_push($cartItems,[
                    'name' => $item->name,
                    'price' => $item->price,
                    'desc'  => 'Antes $'.$item->weight,
                    'qty' => 1
                ]);
                $total +=$item->price;
            }
        }
        $checkOutData =[
            'items' => $cartItems,
            'invoice_id' => uniqid(),
            'invoice_description' => 'Pago de curso tal',
            'return_url' => url('successpaypal'),
            'cancel_url' => url('cancelpaypal'),
            'total' => $total,
        ];
        // 

        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);

        if (in_array(strtoupper($response['ACK']),['SUCCESS','SUCCESSWITHWARNING'])) {
            $payment_status = $provider ->doExpressCheckoutPayment($checkOutData, $request->token, $request->PayerID);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];
            if (in_array($status,['Completed','Processed'])) {
                return redirect(route('checkout',['tipo' =>'EAIaIQobChMl', 'link' => '0', 'step' => 'second']));
            }else ddd('No pagado');
        }        
    }

    public function cancel()
    {
        ddd('hi todo mal');
        // return 'User declined the payment!';   
    }

}
