<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\img;
use App\User;
Use DB;
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
    public function destroy($id)
 {

    $imagede = img::find($id);
    img::find($id)->delete();
    return redirect()->route('view');
 }
 public function destroyuser($id)
 {

   $users=User::find($id);
   User::find($id)->delete();
   return redirect()->route('users');

 }
 public function edit($id)
 {

   $users=User::find($id);
   return view('edit', ['users'=>$users]);

 }
 public function update_user($id)
 {
   
   $user=User::find($id);
   $user->role = request('role');

   $user->save();
   return redirect()->route('users');

 }


 public function edit_img($id)
 {

   $img=img::find($id);
   
   return view('editstorge', ['img'=>$img]);

 }
 public function update_img($id)
 {

   $img=img::find($id);
   if(request()->file('img')){
   $newimagePath = request()->file('img')->store('public');
   $img->img = str_replace('public', '', $newimagePath);
   }
   
   $img->title=request('title');
   $img->name=request('name');
   $img->save();
   return redirect()->route('view');

 }

}
