<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('articleList', function ()
{
    return response()->json([
        'data' => App\Article::all()
    ],200);
});

Route::get('categoryList', function () {
    return response()->json([
        'data' => App\Category::all()
    ], 200);
});

Route::get('tagList', function () {
    return response()->json([
        'data' => App\Tag::all()
    ], 200);
});