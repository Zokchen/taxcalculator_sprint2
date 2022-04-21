<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datacontroller;

// Route::get('/', function () {
//     return view('personal');
// });

// Route::get('about', function () {
//     return "Hello world";
// });

// Route::get('user/{u_id}', function ($id) {
//     return $id;
// });

// Route::get('post/{post_id}/comment/{comment_id}', function ($postid, $comment_id) {
//     return "Post ID: " . $postid . "comment ID:" .  $comment_id;
// });

Route::view('/','personal');  //kun page kholiraxa bhana lai
Route::view('/personal.php','personal');

Route::view('/corporate.php','corporate');

Route::view('contact','contactme',['name'=> 'Zokchen', 'roll'=> 202]);

Route::view('/Tax_system.html','tax_system');

Route::get('/', [datacontroller::class, 'showform']); //duitai option ma get garna milos bhanera
Route::get('/personal.php', [datacontroller::class, 'showform']);

Route::post('/', [datacontroller::class, 'signup']); //duitai option ma post garna milos bhanera
Route::post('/personal.php', [datacontroller::class, 'signup']);

//Route::view('olddata','olddata')->msalary(90000);
