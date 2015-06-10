<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller {

    
    public function __construct() {
//        $this->middleware('oauth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $Post = Post::get();
//        $data   =   (object);
        return $Post;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request) {
        $json = $request->json();
        $title = $json->get('title');
        $content = $json->get('content');
        $auther = $json->get('auther');
        $post = new Post;
        
        $post->title    = $title;
        $post->content  = $content;
        $post->auther   = $auther;
        
        $post->save();
        return response('Created', 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $json   =   $request->json();
        $id = $json->get('id');
        $title = $json->get('title');
        $content = $json->get('content');
        $auther = $json->get('auther');
        if($post = Post::find($id)){
            $post->title    = $title;
            $post->content  = $content;
            $post->auther   = $auther;
            $post->save();
        }
        return response('Updated', 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        
        if($post = Post::find($id)){
            $post->delete();
        }
        return response('Deleted', 204);
    }

}
