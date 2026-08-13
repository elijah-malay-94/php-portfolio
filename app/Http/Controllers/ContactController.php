<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|max:100',
            'email'   => 'required|email|max:200',
            'message' => 'required|max:2000',
        ]);

        try {
            Mail::raw(
                "New portfolio contact from {$validated['name']} ({$validated['email']}):\n\n{$validated['message']}",
                function ($mail) use ($validated) {
                    $mail->to('malaydovelee94@gmail.com')
                         ->replyTo($validated['email'], $validated['name'])
                         ->subject("Portfolio contact from {$validated['name']}");
                }
            );
            return back()->with('success', __('site.contact_success'));
        } catch (\Exception $e) {
            return back()->with('mail_error', 'Could not send your message — please email me directly at malaydovelee94@gmail.com.')->withInput();
        }
    }
}
