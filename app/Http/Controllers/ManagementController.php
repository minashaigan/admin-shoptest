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
    public function blog($category = null){
        $categories = Category::all();
        if ($category)
            if ($category == 'All') {

                $posts = Post::all();
            } else {
                $posts = Post::whereHas('categories', function ($q) use ($category) {
                    $q->where('category_name', $category);
                })->get();
            }
        else
            $posts = Post::all();
        return view('pages/blog', array('posts' => $posts,'categories'=>$categories));
    }

    public function add()
    {
        
        return $this->validatesRequestErrorBag;
    }
}
