<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\GeneralSetting;
use App\Models\HeaderText;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = GeneralSetting::latest()->first();
        if ($data->logo !== null) {
            $data->logo = asset('storage/' . ltrim($data->logo, '/'));
        }
        if ($data->favicon !== null) {
            $data->favicon = asset('storage/' . ltrim($data->favicon, '/'));
        }
        if ($data->preloader !== null) {
            $data->preloader = asset('storage/' . ltrim($data->preloader, '/'));
        }
        return response()->json([
            'success' => true,
            'message' => 'General Setting fetched successfully',
            'data' => $data,
        ]);
    }
    public function faq()
    {
        $data = Faq::latest()->first();

            if ($data->image_one !== null) {
                $data->image_one = asset('storage/' . ltrim($data->image_one, '/'));
            }
            if ($data->image_two !== null) {
                $data->image_two = asset('storage/' . ltrim($data->image_two, '/'));
            }

        return response()->json([
            'success' => true,
            'message' => 'Faq fetched successfully',
            'data' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function texts()
    {
        $data = HeaderText::latest()->first();
        return response()->json([
            'success' => true,
            'message' => 'Text fetched successfully',
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
