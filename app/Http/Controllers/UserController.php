<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
        $user = User::all(); 
        return array("users"=> $user);
        
     }

     
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
        
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->work = $request->work;
        $user->age = $request->age;
        $user->genre = $request->genre;
        $user->profile_image = $request->profile_image;

        $user->save();
        return "Ok :)";
     }
 
     /**
      * Display the specified resource.
      *
      * @param  \App\User  $user
      * @return \Illuminate\Http\Response
      */
     public function show(User $user)
     {
         //
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\User  $user
      * @return \Illuminate\Http\Response
      */
     public function edit(User $user)
     {
         //
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\User  $user
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, User $user)
     {
         //
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\User  $user
      * @return \Illuminate\Http\Response
      */
     public function destroy(User $user)
     {
         //
     }
}
