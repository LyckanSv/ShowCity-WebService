<?php

namespace App\Http\Controllers;

use App\Article as Article;
use App\User as User;
use App\Subscription as Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscription = Subscription::all();
        return array("subscriptions"=> $subscription);
    }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
    public function create()
    {
        //
    }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
    public function store(Request $request)
    {
        $subscription = new Subscription;
        $subscription->subscriber_id = $request->subscriber_id;
        $subscription->author_id = $request->author_id;
        $subscription-> save();
        return "Ok :)";
    }
 
     /**
      * Display the specified resource.
      *
      * @param  \App\Article  $article
      * @return \Illuminate\Http\Response
      */
    public function show($id)
    {
    
        $pila= array();

        $subscription = Subscription::where('subscriber_id', $id)->get();
        foreach ($subscription as $flight) {
            $user = User::find($flight->author_id);
            $article = $user->articles;
            $user -> $article;
            array_push($pila, $user);
        }

        return array("users"=> $pila);
    }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Article  $article
      * @return \Illuminate\Http\Response
      */
    public function edit(Article $article)
    {
        //
    }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Article  $article
      * @return \Illuminate\Http\Response
      */
    public function update(Request $request, Article $article)
    {
        //
    }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Article  $article
      * @return \Illuminate\Http\Response
      */
    public function destroy(Article $article)
    {
    }
}
