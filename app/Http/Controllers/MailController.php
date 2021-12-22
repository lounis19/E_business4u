<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendEmail(Request $request){
/*
        $details=[
                'title'=>'mail from surfside media',
                   'body'=>'this is for testing using gmail',
        ];
*/
$TestMail=new TestMail;
$TestMail->name=$request->name;
$TestMail->email=$request->email;
$TestMail->tel=$request->tel;
$TestMail->sujet=$request->sujet;
$TestMail->description=$request->description;

        /*Mail::to("mokranelounis19@gmail.com")->send(new TestMail($details));
        return "email send";*/

        Mail::to("mokranelounis19@gmail.com")->send(new TestMail($TestMail));
        return \redirect("temp");
    }
}
