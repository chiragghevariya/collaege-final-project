<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post =Post::auth()->get();
        return view('app.post.index',['post'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('app.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        $file->move('Result/'.\Auth::user()->id.'/images', $name);
//
//        $result->photo =$name;

//            dd($request->all());
          $post = new Post();
          $post->user_id =  \Auth::user()->id;
          $post->title =$request->title;
          $post->date =$request->date;
          $post->description =$request->description;

          if($file =$request->file('photo')){

              $name =time() .$file->getClientOriginalName();

              $file->move('Post/'.\Auth::user()->id.'/images',$name);

              $post->photo =$name;

          }

          $post->save();
          return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postt =Post::find($id);
        return view('app.post.edit',['postt'=>$postt]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $post = Post::find($id);
        $post->user_id =  \Auth::user()->id;
        $post->title =$request->title;
        $post->date =$request->date;
        $post->description =$request->description;

        if($file =$request->file('photo')){

            $name =time() .$file->getClientOriginalName();

            $file->move('Post/'.\Auth::user()->id.'/images',$name);

            $post->photo =$name;

        }

        $post->save();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
