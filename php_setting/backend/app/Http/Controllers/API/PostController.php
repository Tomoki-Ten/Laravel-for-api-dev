<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::orderBy('id','desc')->get();
        return $posts;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $instance = new Post;
    //     $instance->title = $request->title;
    //     $instance->post = $request->post;
    //     $instance->save();
    //     return response()->json(['result'=>'OK','status'=>200]);
    // }

    public function store(Request $request)
    {
        $instance = new Post;
        $instance->title = $request->title;
        $instance->post = $request->post;
        $instance->save();
        return response()->json(['result'=>'OK','status'=>200]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return $post;
    }

    public function search($postValue){
        $posts = Post::where('title', 'like', '%' . $postValue . '%')
            ->orderBy('id','desc')
            ->get();
        return response()->json($posts);
    }
    
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $instance = Post::find($id);
        $instance->title = $request->title;
        $instance->post = $request->post;
        $instance->save();
        return response()->json(['result' => 'OK','status' => 200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instance = Post::find($id);
        $instance->delete();
        return response()->json(['result' => 'OK', 'status' => 200]);
    }
}
