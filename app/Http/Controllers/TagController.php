<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Tag;
use App\Post;

class TagController extends Controller
{


    public function __construct(){

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags= Tag::all();

        return view('tags.index', ['tags'=>$tags] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
        
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this-> validate ( $request, array(
            'name'=> 'required | max:255'
        ));

 

        $tag= new Tag;

        $tag->name = $request->name;
      

        $tag->save ();

        Session:: flash ('awesome_three', ' New Tag has been created' );

        return redirect()->route ('tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $tags = Tag::withCount('posts')->get();

        //     foreach ($tags as $tag) 
        //     {
        //          $tag->posts_count;
        //     }

        
        $tag= Tag::findorfail($id);

        return view('tags.show', compact('tag'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::findorfail($id);

        return view('tags.edit')->withTag($tag);

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
        $tag = Tag::findorfail($id);

        $this->validate($request, array(

            'name'=> 'required | max:255',
        ));

        $tag = Tag::findorfail($id);

        $tag->name = $request->input('name');

        // dd($request); 

        $tag->update();

        Session::flash('update_tag', 'The tag name has been updated successfully' );

        return redirect()->route('tags.show', $tag->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag= Tag::findorfail($id);

        $tag->posts()->detach();

        // $post->deleted_at = Carbon::now(+1);

        $tag->delete();

        Session::flash('delete_tag', 'Deleted tag successfully');

        return redirect()->route('tags.index');
    }
}
