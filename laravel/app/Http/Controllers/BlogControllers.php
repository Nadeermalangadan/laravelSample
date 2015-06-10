<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class BlogControllers extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Show the All Posts to user.
     *
     * @return Response
     */
    public function showAllPosts()
    {
        return 500;
    }
    
    /**
     * Create Post.
     *
     * @return Response
     */
    public function createPost()
    {
        return 500;
    }
    
    /**
     * Update user post.
     *
     * @return Response
     */
    public function updatePost($id)
    {
        return 500;
    }
    
    /**
     * Delete User post.
     *
     * @param  int  $id
     * @return Response
     */
    public function deletePost($id)
    {
        return 500;
    }
    
    /**
     * Show the specific Post to user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showPost($id)
    {
        return 500;
    }

}
