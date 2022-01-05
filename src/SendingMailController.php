<?php

namespace Knowproinsighter\Sendingmails;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mail\SendMailToUser;
use Illuminate\Support\Facades\Mail;

class SendingMailController extends Controller
{
    //
    public function index()
    {
        return view('sendingmails::mail');
    }
    public function sendEmail(Request $request)
    {
        // dd($request->email);
        Mail::to($request->email)->send(new SendMailToUser());
        dd("Mail has been sent successfully!");
    }
}
