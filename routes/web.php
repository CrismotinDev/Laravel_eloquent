<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/accessor', function(){

    $post = Post::first();

    return $post->title_and_body;

});

Route::get('/delete2', function(){

 /*   Post::destroy(1);

   $posts = Post::get();

   return $posts; */

});

Route::get('/delete', function(){
   /*  $post = Post::where('id', 6)->first();

    if(!$post)
    return 'Post Not Found';

    return $post->delete(); */
});


Route::get('/update', function (Request $request){

  /* if(!$post = Post::find(1))
    return 'Psot not found';

    // $post->title = 'titulo novo';
    // $post->save();
    $post->update($request->all());

    return Post::find(1);
 */
});

Route::get('/insert2', function (Request $request){

    /* $post = Post::create($request->all());
    return($post); */

});

Route::get('/insert', function(Post $post, Request $request){
    /* $post->user_id = 2;
    $post->title = $request->name;
    $post->body = 'Conteudo do post';
    $post->date = date('Y-m-d');
    $post->save();

    $posts = Post::get();

    return $posts; */

});

Route::get('/pagination', function(User $user){
/*     $filter = request('filter');
    $totalPage = request('paginate', 10);
    $user = $user->where('name', 'LIKE', "%{$filter}%")->paginate($totalPage);


    return $user; */
});

Route::get('/orderby', function(){
    /* $users = User::orderBy('name', 'ASC')->get();


    return $users; */
});


Route::get('/where', function(User $user){
    $filter = 'a';
    // $user =  $user->where('email', 'sbergstrom@example.org')->first();
    //$user =  $user->where('name', 'LIKE' , "%{$filter}%")->get();
   /*  $user =  $user->where('name', 'LIKE' , "%{$filter}%")
                  ->orWhere('name', 'Carlos')
                  ->get(); */
    // $user =  $user->where('name', 'LIKE' , "%{$filter}%")
    //                 ->whereIn('email', [])
    //                 ->get();
    /* $user =  $user->where('name', 'LIKE' , "%{$filter}%")
                    ->orWhere(function ($query) use ($filter){
                        $query->where('name', '<>', 'Carlos');
                        $query->where('name', '=', $filter);

                    })
                    ->toSql(); */

  /*   dd($user); */

});

Route::get('/select', function(){
   /*  $users = User::all();
    $users = User::where('id', 1)->first(); */
   /*  $user = User::where('id',10)->first(); */
//    $user = User::where('id', 100)->first();
/* $user = User::first(); */
/* $user = User::find(5); */
/*     $user = User::findOrFail(100); */
/* $user = User::findOrFail(request('id')); */
// $user = User::where('name', request('name'))->firstOrFail();

});


Route::get('/', function () {
    return view('welcome');
});
