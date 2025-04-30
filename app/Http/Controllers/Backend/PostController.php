<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'   => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        /*
        Post::create([
           'title'   => $request->input('title'),
           'content' => $request->input('content'),
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Post has been created successfully!'
        ]);
        */

        $insertPost          = new Post();
        $insertPost->title   = $request->input('title');
        $insertPost->content = $request->input('content');
        $insertPost->save();

        return response()->json([
            'message' => 'Post has been created successfully!'
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $postUpdate = Post::find($id);

        return response()->json([
            'editData' => $postUpdate
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'title'   => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $post = Post::findOrFail($id);

        $post->title   = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return response()->json([
            'message' => 'Post has been updated successfully!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deletePost = Post::findOrFail($id);
        $deletePost->delete();

        return response()->json([
            'message' => 'Post has been deleted successfully!'
        ]);
    }
}
