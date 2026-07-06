<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    $name = "James";
    $age = 23;

    return view('pages.home', compact('name', 'age'));
});


Route::post('/register', function (Request $request) {

   $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8'
    ]);

    return "Success"; // kapag nag sucess ang request validation

});
