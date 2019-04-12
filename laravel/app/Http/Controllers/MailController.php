<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function ship(Request $request)
    {

        // Ship order...

        Mail::to('18365769602@163.com')->send(new OrderShipped());
    }
}
