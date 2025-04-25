<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
class ProjectController extends Controller
{
    public function index()
    {
        $projects = DB::table('projects')->get();

    // Map over projects to attach category names
    $projects = $projects->map(function ($project) {
        $category = ProjectCategory::where('id', $project->category_id)->first();
        $project->category_name = $category->title;
        $project->image = asset('storage/' . ltrim($project->image, '/'));
        if($project->project_image_1!==null){
        $project->project_image_1 = asset('storage/' . ltrim($project->project_image_1, '/'));
        }
        if($project->project_image_2!==null){
            $project->project_image_2 = asset('storage/' . ltrim($project->project_image_2, '/'));
            }
        if($project->project_image_3!==null){
            $project->project_image_3 = asset('storage/' . ltrim($project->project_image_3, '/'));
            }
        if (is_string($project->tags)) {
            $project->tags = json_decode($project->tags, true);
        }
        return $project;
    });

    return response()->json([
        'success' => true,
        'message' => 'Projects fetched successfully',
        'data' => $projects,
    ]);
    }

        /**
         * Store a newly created resource in storage.
         */
        public function projectCategories()
        {
            $data = ProjectCategory::all();


            return response()->json([
                'success' => true,
                'message' => 'Project Category fetched successfully',
                'data' => $data,
            ]);
        }

        /**
         * Display the specified resource.
         */
        public function testimonials()
        {
            $data = Testimonial::all();
            foreach ($data as $item) {
                if ($item->image !== null) {
                    $item->image = asset('storage/' . ltrim($item->image, '/'));
                }
            }
            return response()->json([
                'success' => true,
                'message' => 'Testimonials fetched successfully',
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
