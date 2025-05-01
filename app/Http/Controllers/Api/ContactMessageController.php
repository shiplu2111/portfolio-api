<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactConfirmationMail;
use Illuminate\Support\Facades\Log;
class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            $contact = new ContactMessage($validated);

            // আগে email পাঠাই
            Mail::to($validated['email'])->send(new ContactConfirmationMail($contact));

            // Email success হলে database-এ save করি
            $contact->save();
            // Mail::to($validated['email'])->send(new ContactConfirmationMail($contact));
            // $contact = ContactMessage::create($validated);
            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message!',
                'data' => $contact,
            ], 201);}
             catch (\Exception $e) {
                // Log the error
                Log::error('Contact Form Error: '.$e->getMessage());

                // Return Error JSON Response
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong. Please try again later!',
                    'error' => $e->getMessage(),
                ], 500);
            }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
