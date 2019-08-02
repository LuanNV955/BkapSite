<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function in_home()
    {
        return Post::paginate(10);
    }

    public function in_detail($id)
    {
        return Post::find($id);
    }

}
