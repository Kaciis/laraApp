<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\Data\SymfonyYamlFrontMatterParser;
use phpDocumentor\Reflection\Types\Collection;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/news',function(){
    
   return view('news',['news'=>Post::latest()->with('category','author')->get(),'categories'=>Category::all()]);
   
});
Route::get('/tech/{post:slug}',function(Post $post){
    return view('tech',['post'=>$post]);
});

Route::get('/categories/{category:slug}',function(Category $category){
    return view('/news',['news'=>$category->posts->load(['category','author']),'categories'=>Category::all(),'currentCategory'=>$category]);
});

Route::get('/authors/{author}',function(User $author){
    return view('news',['news'=>$author->posts->load(['category','author']),'categories'=>Category::all()]);
})
?>   