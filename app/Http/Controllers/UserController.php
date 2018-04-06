<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    public function index()
    {
        $typeDetail = "";
        $input = Input::all();
        switch ($input['treatment']) {
            case  "Classical Panchakarma":
                $typeDetail = $input['classicPanchakarma'];
                break;
            case  "Wellness Panchakarma":
                $typeDetail = $input['wellnessPanchakarma'];
                break;
            case  "Blissful Panchakarma":
                $typeDetail = $input['blissfulPanchakarma'];
                break;
            case  "Training Program":
                $typeDetail = $input['trainingProgram'];
                break;
            case  "Yoga Program":
                $typeDetail = $input['yogaProgram'];
                break;
            case  "Special Treatment":
                $typeDetail = null;
                break;
            case  "Consultation and Counselling":
                $typeDetail = null;
                break;

        }


        $data = array
        (
            "name" => $input['name'],
            "gen" => $input['gender'],
            "address" => $input['address'],
            "contact" => $input['phone'],
            "email" => $input['email'],
            "date" => $input['date'],
            "type" => $input['treatment'],
            "typeDetail" => $typeDetail
        );

        Mail::send('emails.mail', $data, function ($message) {
            $input = Input::all();
            $message->to(env('MAIL_USERNAME'), 'Ayushya Ayurveda')
                ->subject('New Appointment Request from ' . $input['name']);

            $message->from($input['email'], $input['name']);
        });
        return redirect()->route('success');

    }
}

