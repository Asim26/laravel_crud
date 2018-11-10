<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //display all records
        $posts=Post::all();
        return view('index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //display hompage
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save data in database
        $created=$add=new Post();
        $add->title=$request->input('title');
        $add->description=$request->input('description');      
        $add->save();

        if($created){

            return redirect('/home')->with('message','Your details have been Added');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $post=Post::find($post);
        //return view('show',compact('post'));

        //show single post
        $post = post::find($id);        
        return view('show' , compact ('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //show edit page
        $post=Post::find($id);
        return view('edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         //update the data
         $post = Post::find($request->id);
         $post->title = $request->title;
         $post->description=$request->description;
         
         $updated = $post->save();
       
            if($updated){
                return redirect()->back()->with('message','Post successfully updated');
            }
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete the data from db
        $post = Post::find($id);
        $deleted = $post->delete();
        
        if($deleted){
            return redirect()->back()->with('message','Post Successfully Deleted!');
        }
    }


    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
