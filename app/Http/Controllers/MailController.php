<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\MyInvoiceEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    //FIXME
    public function sendMail($id) {

        $invoiceMail = new HtmlController;
        $pdf = $invoiceMail->convertHTML($id);
        $name = "Funny Coder";
        $file = $pdf->output();

        Mail::to('patrykr1324@gmail.com')->send(new MyInvoiceEmail($name, $file));
        return redirect()->route('invoices.index');

        // dd($file);

        
    }
}
