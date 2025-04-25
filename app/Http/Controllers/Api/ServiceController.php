<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Pricing;
use App\Models\Client;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Service::all();

        // foreach ($data as $item) {
        //     if ($item->image !== null) {
        //         $item->image = asset('storage/' . ltrim($item->image, '/'));
        //     }
        // }
        return response()->json([
            'success' => true,
            'message' => 'Services fetched successfully',
            'data' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function pricingPlans()
    {
        $data = Pricing::all();

        // foreach ($data as $item) {
        //     if ($item->image !== null) {
        //         $item->image = asset('storage/' . ltrim($item->image, '/'));
        //     }
        // }
        return response()->json([
            'success' => true,
            'message' => 'Pricing plans fetched successfully',
            'data' => $data,
        ]);
    }


    public function clients()
    {
        $data = Client::all();

        foreach ($data as $item) {
            if ($item->image !== null) {
                $item->image = asset('storage/' . ltrim($item->image, '/'));
            }
        }
        return response()->json([
            'success' => true,
            'message' => 'Pricing plans fetched successfully',
            'data' => $data,
        ]);
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
