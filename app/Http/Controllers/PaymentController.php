<?php

namespace App\Http\Controllers;

use App\Functions\BankFunction;
use App\Functions\MailFunction;
use App\Models\Payment;
use App\Models\Property;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    public function index()
    {
        $data = Payment::with('reservation')->orderBy('id', 'DESC')->get();
        return view('payment', compact('data'));
    }

    public function success(Request $request)
    {
        $trandata = $request->trandata;
        $keyCode = str_pad(env('BANK_TERMINAL'), 16, "\0");
        parse_str(BankFunction::decrypt($trandata, $keyCode), $data);
        $id = base64_decode($data['trackid']);
        $current =  Reservation::findorfail($id);
        $property = Property::findorfail($current->property);

        Payment::create([
            'reservation' => $id,
            'ref' => $data['ref'],
            'paymentId' => $data['paymentid'],
            'transactionId' => $data['tranid'],
            'amount' => $data['amt'],
            'auth' => $data['auth'],
            'authCode' => $data['authRespCode'],
            'result' => $data['result'],
            'postDate' => $data['postdate']
        ]);

        $data = [
            'id' => $current->property,
            'reservation' => $current,
            'title' => 'لقد تم تأكيد حجزك.',
            'subject' => 'تأكيد الحجز',
        ];

        foreach ([$request->email, env('MAIL_SYSTEM_ADDRESS')] as $email) {
            MailFunction::send($email, $data);
        }

        return Redirect::route('views.property.show', $property->slug)->with([
            'message' => 'تم الاستئجار بنجاح',
            'type' => 'success'
        ]);
    }

    public function error(Request $request)
    {
        $trandata = $request->trandata;
        $keyCode = str_pad(env('BANK_TERMINAL'), 16, "\0");
        parse_str(BankFunction::decrypt($trandata, $keyCode), $data);
        $id = base64_decode($data['trackid']);
        $current =  Reservation::findorfail($id);
        $property = Property::findorfail($current->property);
        $current->delete();
        return Redirect::route('views.property.show', $property->slug)->with([
            'message' => 'هناك مشكلة في عملية الدفع الخاصة بك',
            'type' => 'error'
        ]);
    }
}
