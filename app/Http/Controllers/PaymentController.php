<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

class PaymentController extends Controller
{
    public function stk() {
        $mpesa= new \Safaricom\Mpesa\Mpesa();

        $BusinessShortCode = '174379';
        $LipaNaMpesaPasskey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $TransactionType = 'CustomerPayBillOnline';
        $Amount = '1';
        $PartyA = '254795909989';
        $PartyB = '174379';
        $PhoneNumber = '254795909989';
        $CallBackURL = 'https://yourdomain.com/mpesa/confirmation';
        $AccountReference = 'AccountReference';
        $TransactionDesc = 'TransactionDesc';
        $Remarks = 'Remarks';

        $stkPushSimulation=$mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            $Remarks
        );
        dd($stkPushSimulation);
    }
}
