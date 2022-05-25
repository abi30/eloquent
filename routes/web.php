<?php

use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $phone = User::find(1);
    $phone = User::find(2)->phone;
    // return $phone;


    // $user = Phone::find(1);
    // $user = Phone::find(1)->user;
    // return $user;
    // $alldatas = User::all();
    $alldatas = Phone::all();
    // return ($alldatas);


    // $post = Comment::find(5)->post;
    // $allPost = Comment::all();
    // $post1Comments = Post::find(1)->comments;
    // $post2Comments = Post::find(2)->comments;

    // return [
    //     "postno1" => $post1Comments,
    //     "postno2" => $post2Comments,
    //     "comFromPost" => $post,
    //     "allpost" => $allPost,
    //     // "postno2" => $post2Comments
    // ];

    // $postwithComments = Post::with('comments')->get();
    // $alldatas = Post::with('comments')->get();
    $alldatas = Comment::all();

    // return $postwithComments;

    return view('welcome', compact('alldatas'));
});