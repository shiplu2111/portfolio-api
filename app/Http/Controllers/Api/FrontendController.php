<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Counter;
use App\Models\About;
use App\Models\Skill;
class FrontendController extends Controller
{

    public function hero()
    {
        $data = Hero::latest()->first();
        $data->image = asset('storage/' . ltrim($data->image, '/'));
        $data->resume = asset('storage/' . ltrim($data->resume, '/'));
        return response()->json([
            'success' => true,
            'message' => 'Hero fetched successfully',
            'data' => $data,
        ]);
    }


    public function counters()
    {
        $data = Counter::all();
        return response()->json([
            'success' => true,
            'message' => 'Counters fetched successfully',
            'data' => $data,
        ]);
    }


    public function aboutMe()
    {
        $data = About::latest()->first();
        if($data->image!==null){
        $data->image = asset('storage/' . ltrim($data->image, '/'));
        }
        if($data->designation_image!==null){
        $data->designation_image = asset('storage/' . ltrim($data->designation_image, '/'));
        }
        if($data->testimonial_image!==null){
        $data->testimonial_image = asset('storage/' . ltrim($data->testimonial_image, '/'));
        }
        return response()->json([
            'success' => true,
            'message' => 'About me fetched successfully',
            'data' => $data,
        ]);
    }


    public function skills()
    {
        $data = Skill::all();

        foreach ($data as $item) {
            if ($item->image !== null) {
                $item->image = asset('storage/' . ltrim($item->image, '/'));
            }
        }
        return response()->json([
            'success' => true,
            'message' => 'Skills fetched successfully',
            'data' => $data,
        ]);
    }


}
