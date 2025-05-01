<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Firefly\FilamentBlog\Facades\SEOMeta;
use Firefly\FilamentBlog\Models\NewsLetter;
use Firefly\FilamentBlog\Models\Post;
use Firefly\FilamentBlog\Models\ShareSnippet;
use Firefly\FilamentBlog\Models\Category;
use Firefly\FilamentBlog\Models\Tag;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscribeMail;
class PostController extends Controller
{

    public function index(Request $request)
    {
        SEOMeta::setTitle('Blog | '.config('app.name')) ;

        $posts = Post::query()->with(['categories', 'user', 'tags'])
            ->published()
            ->paginate(10);
            foreach ($posts->items() as $post) {
                $post->cover_photo_path = asset('storage/' . ltrim($post->cover_photo_path, '/'));
            }
         return response()->json(
             [
                 'success' => true,
                 'message' => 'Posts fetched successfully',
                 'data' => $posts
             ]
         );
    }

    public function categories(){
        $categories = Category::all();
        return response()->json(
            [
                'success' => true,
                'message' => 'Categories fetched successfully',
                'data' => $categories
            ]
        );
    }
     public function tags(){
        $tags = Tag::all();
        return response()->json(
            [
                'success' => true,
                'message' => 'Tags fetched successfully',
                'data' => $tags
            ]
        );
    }


    public function search(Request $request)
    {
        SEOMeta::setTitle('Search result for '.$request->get('query'));

        $request->validate([
            'query' => 'required',
        ]);
        $posts = Post::query()
            ->with(['categories', 'user'])
            ->published()
            ->whereAny(['title', 'sub_title'], 'like', '%'.$request->get('query').'%')
            ->paginate(10)->withQueryString();


        return response()->json(
            [
                'success' => true,
                'message' => 'Posts fetched successfully',
                'data' => $posts
            ]
        );

    }


    public function show(Post $post)
    {

        $seoMeta = $post->seoDetail?->title;

        $seoDescription = $post->seoDetail?->description;
        $seoKeywords = $post->seoDetail->keywords ?? [];

        $shareButton = ShareSnippet::query()->active()->first();
        $post->load(['user', 'categories', 'tags', 'comments' => fn ($query) => $query->approved(), 'comments.user']);

        return response()->json(
            [
                'success' => true,
                'message' => 'Post fetched successfully',
                'data' => $post,
                'seoData' => [
                    'title' => $seoMeta,
                    'description' => $seoDescription,
                    'keywords' => $seoKeywords,
                ],

            ]
        );
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:fblog_news_letters,email',
        ], [
            'email.unique' => 'You have already subscribed',
        ]);
        $emailAddress = $request->email; // your static email address

        $mailData = [
            'email' => $emailAddress, // whatever data you want to show inside email
        ];
        try {
            Mail::to($emailAddress)->send(new SubscribeMail($mailData));
            NewsLetter::create([
                'email' => $request->email,
            ]);
            return response()->json(['message' => 'Thank you for subscribing','success' => true], 200);
        } catch (\Throwable $th) {
            throw $th;
            return response()->json(['message' => 'Something went wrong', 'error' => $th->getMessage()], 500);
        }

    }

    public function tagPost(Tag $tag)
    {
        $posts = $tag->load(['posts.user'])
            ->posts()
            ->published()
            ->paginate(25);

        return response()->json(
            [
                'success' => true,
                'message' => 'Posts fetched successfully',
                'data' => $posts,
            ]
        );
    }

    public function categoryPost(Request $request, Category $category)
    {
        $posts = $category->load(['posts.user', 'posts.categories'])
            ->posts()
            ->published()
            ->paginate(25);

        return response()->json(
            [
                'success' => true,
                'message' => 'Posts fetched successfully',
                'data' => $posts,
            ]
            );
    }
    public function comment(Request $request, Post $post)
    {
        $request->validate([
            'comment' => 'required|min:3|max:500',
        ]);

        $post->comments()->create([
            'comment' => $request->comment,
            // 'user_id' => $request->user()->id,
            'approved' => false,
        ]);

        return response()->json(
         [
             'success' => true,
             'message' => 'Thank you for your comment',
             'comment_status' => 'Comment submitted for approval.',
         ]
        );
    }

}
