<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        $data1 = 'Contact us - Online Store';
        $data2 = 'Contact us';
        $email = 'oquicen2@topicosingsoftware.com';
        $address = 'Small';
        $phone = '3105669035';

        return view('home.contact')->with('title', $data1)
            ->with('subtitle', $data2)
            ->with('email', $email)
            ->with('address', $address)
            ->with('phone', $phone);
    }
}
