<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class HomeController
{
    public function mail()
    {
        $name = 'Krunal';
        Mail::to('krunal@appdividend.com')->send(new SendMailable($name));

        return 'Email was sent';
    }
}
