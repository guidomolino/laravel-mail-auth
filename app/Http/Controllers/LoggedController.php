<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class LoggedController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }

  public function delete($id){
    $post = Post::findOrFail($id);
    $post -> delete();

    return redirect() -> route('posts');
  }

  public function edit($id){
    $post = Post::findOrFail($id);

    return view('post-edit', compact('post'));
  }

  public function update(Request $request, $id){
    $data = $request -> all();
    $post = Post::findOrFail($id);

    $post -> update($data);

    return redirect() -> route('post.show', $id);
  }

}
