<?php

namespace App\Http\Controllers;

use App\Reply;
use App\Comment;
use App\Post;
use App\Like;
use App\Category;
use App\User;
use App\Tag;
use Illuminate\Http;
use Illuminate\Support\Facades\DB;
use Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Validator;

class ManagementController extends Controller
{
    public function blog(){
        $posts = Post::all();
        return view('pages/blog', array('posts' => $posts));
    }
}
