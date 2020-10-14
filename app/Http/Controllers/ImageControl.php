<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\img;
use App\User;
class ImageControl extends Controller
{

   public function image(){

        request()->validate([
            'title'=>'required',
            'name'=>'required',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
         $post= new img;
    
         $post->title=request('title');
         $post->name=request('name');
         $post->img = request()->file('img')->store('public');
        $post->img = str_replace('public', '', $post->img); 
         $post->save();
         return redirect()->route('view');
    }   
    public function view()
    {
        $image =  img::get();

        return view('view',['image'=>$image]);

    } 
    public function up()
    {

        return view('uplode');

    } 
    public function us(){
        $users =  User::get();
        return view('users',['users'=>$users]);

    }

}
