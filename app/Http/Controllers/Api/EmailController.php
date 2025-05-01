<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscribeMail;
class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staticEmail = 'shiplu2111@gmail.com'; // your static email address

        $mailData = [
            'email' => 'user@demo.com', // whatever data you want to show inside email
        ];
        try {
            Mail::to($staticEmail)->send(new SubscribeMail($mailData));
            return response()->json(['message' => 'Thank you for subscribing','success' => true], 200);
        } catch (\Throwable $th) {
            throw $th;
            return response()->json(['message' => 'Something went wrong', 'error' => $th->getMessage()], 500);
        }



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
