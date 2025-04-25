<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;
use App\Models\Education;
use App\Models\Experiance;
use App\Models\Resume;
use App\Models\Training;
class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Resume::all();

        // foreach ($data as $item) {
        //     if ($item->certificate !== null) {
        //         $item->certificate = asset('storage/' . ltrim($item->certificate, '/'));
        //     }
        // }
        return response()->json([
            'success' => true,
            'message' => 'Resume fetched successfully',
            'data' => $data,
        ]);
    }
    public function certificates()
    {
        $data = Certificate::all();

        foreach ($data as $item) {
            if ($item->certificate !== null) {
                $item->certificate = asset('storage/' . ltrim($item->certificate, '/'));
            }
        }
        return response()->json([
            'success' => true,
            'message' => 'Certificate fetched successfully',
            'data' => $data,
        ]);
    }
    public function education()
    {
        $data = Education::all();


        return response()->json([
            'success' => true,
            'message' => 'Education fetched successfully',
            'data' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function experiances()
    {

        $data = Experiance::all();


        return response()->json([
            'success' => true,
            'message' => 'Experiance fetched successfully',
            'data' => $data,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function trainings()
    {
        $data = Training::all();


        return response()->json([
            'success' => true,
            'message' => 'Training fetched successfully',
            'data' => $data,
        ]);
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
