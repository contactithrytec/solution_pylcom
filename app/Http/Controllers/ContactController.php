<?php

namespace App\Http\Controllers;

use App\Models\estimate;
use App\Rules\ReCaptcha;
use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class ContactController extends Controller
{
    public function store_contact(Request $request)
    {
        $messages = [
            'required' => ' :attribute Champ requis',
            'string'    => ' :attribute Doit être le format texte',
            'file'    => ' :attribute Doit être un fichier',
            'mimes' => 'Supported file format for :attribute are :mimes',
            'max'      => ' :attribute doit avoir une longueur maximale de :max',
            'email' => ' :attribute champ doit être une adresse e-mail valide'
        ];

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            /*'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',*/
            'message' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ],$messages);

        contact::create($request->all());

        Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('contact@pyclom.app', 'Admin')->subject($request->get('message'));
        });

        return back()->with('success', 'Nous avons reçu votre message et nous tenons à vous remercier de nous avoir écrit..');

    }

    public function store_estimate(Request $request)
    {
        $messages = [
            'required' => ' :attribute Champ requis',
            'string'    => ' :attribute Doit être le format texte',
            'file'    => ' :attribute Doit être un fichier',
            'mimes' => 'Supported file format for :attribute are :mimes',
            'max'      => ' :attribute doit avoir une longueur maximale de :max',
            'email' => ' :attribute champ doit être une adresse e-mail valide'
        ];

        $this->validate($request, [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'business' => 'required|max:50',
            'post' => 'required|max:50',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address' => 'required|max:150',
            'address1' => 'nullable|max:150',
            'country' => 'nullable',
            'city' => 'nullable|max:50',
            'needs' => 'nullable|max:500',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ],$messages);
        estimate::create($request->all());

        Mail::send('mail_estimate', array(
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'phone' => $request->get('phone'),
            'business' => $request->get('business'),
            'post' => $request->get('post'),
            'address' => $request->get('address'),
            'address1' => $request->get('address1'),
            'country' => $request->get('country'),
            'city' => $request->get('city'),
            'needs' => $request->get('needs'),
            'email' => $request->get('email'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('djamaibrahim38@gmail.com', 'Admin');
        });

        return back()->with('success', 'Nous avons reçu votre message et nous tenons à vous remercier de nous avoir écrit..');
    }
}
