<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
            $response = Http::withHeaders([
                'api-key'      => config('services.brevo.api_key'),
                'accept'       => 'application/json',
                'content-type' => 'application/json',
            ])->post('https://api.brevo.com/v3/smtp/email', [
                'sender'      => ['name' => 'Portfolio Contact', 'email' => 'malaydovelee94@gmail.com'],
                'to'          => [['email' => 'malaydovelee94@gmail.com', 'name' => 'Elijah Malay Dovelee']],
                'replyTo'     => ['email' => $validated['email'], 'name' => $validated['name']],
                'subject'     => "Portfolio contact from {$validated['name']}",
                'textContent' => "From: {$validated['name']} ({$validated['email']})\n\n{$validated['message']}",
            ]);

            if ($response->successful()) {
                return back()->with('success', __('site.contact_success'));
            }

            return back()->with('mail_error', 'Could not send your message — please email me directly at malaydovelee94@gmail.com.')->withInput();
        } catch (\Exception $e) {
            return back()->with('mail_error', 'Could not send your message — please email me directly at malaydovelee94@gmail.com.')->withInput();
        }
    }
}
