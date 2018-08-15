<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use Session;
use Carbon\Carbon ;
// 'Carbon' => 'Carbon\Carbon';
// use Validator;


class PostController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    
      public function create() {

        $categories = Category::all();

        $tags= Tag::all();

    	return view('post/create', compact('categories'), compact('tags'));
    }

      public function view() {

      	$posts = Post::orderBy('id', 'desc')->paginate(10);

    	return view('post/view_post', compact('posts'));
    
 }

  public function read_more($id) {

      	$post = Post::findorfail($id);
      	
    	return view('post/read_more', ['post'=>$post] );

    
 }

 // public function carbon {

 // 	$dt= Carbon::now('')




 // }

    
    public function store(Request $request){

        // dd($request);
        

    	 $this-> validate( $request, array(
    	 	'name'=> 'required| max:100',
    		'email'=> 'required',
    		'subject'=> 'required',
 'slug'=>'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id'=> 'required|integer',
    		'content'=> 'required',
    	));

 
//dd($validator);
		// if($validator->fails()){
		// 	return redirect('/blog/create');
		// }

    	$post= new Post;

    	$post->name= $request->name;
    	$post->email= $request->email;
    	$post->subject= $request->subject;
    	$post->content= $request->content;
        $post->category_id= $request->category_id;
    	$post->slug= $request->slug;
    	$post->created_at = Carbon::now(+1);
    	$post->updated_at = Carbon::now(+1);
        // $post->deleted_at = Carbon::now(+1);

    	$post->save();

        //this line of code is to associate the tags with its respective post in the database relationship between the posts and the tags table. the code for this sort of association always come AFTEER the save function under the store method of the controller.
        //enter FALSE as the 2nd parameter in the sync fxn so that this association doesnnt override all other existing associations and relationships in the application which would pose a big problem. you can also leave the second parameter blank for the same purpose.
        $post->tags()->sync($request->tags, false);

    	Session:: flash('awesome', 'The blog post was successfully saved' );

    	return redirect('blog/read_more/'.$post->id);
    	//dd('you have saved your first post' );

    }

    public function edit($id) {
    	//query statement
    	$post= Post::where('id', $id)->first();

          $categories = Category::all();

          $cats= array();

          foreach ($categories as $category) 
          {
              $cats[$category->id]= $category->name;
          }

          $tags = Tag::all();

          $tags2= array();

          foreach ($tags as $tag) 
          {
              $tags2[$tag->id]= $tag->name;
          }



    	//$post = Post::findOrFail($id)...this line of code can be used in place of the query above;
    	//the with() function should be used when making use of the find query function;
    	return view('post.edit_post')->withPost($post)->withCategories($cats)->withTags($tags2);


    }

    public function update(Request $request, $id){

    	$post=Post::findorfail($id);

    	$requestt= "$request->slug";
    	$postt= "$post->slug";

    	if ( ($requestt) == ($postt) ) {
    		$this-> validate( $request, array(
    	 	'name'=> 'required| max:100',
    		'email'=> 'required|email',
    		'subject'=> 'required',
            'category_id'=> 'required|integer',
    	// 'slug'=> 'required|alpha_dash|min:5|max:255|unique:posts,slug',
    		'content'=> 'required',
    	));
    	} else {
    		$this-> validate( $request, array(
    	 	'name'=> 'required| max:100',
    		'email'=> 'required|email',
    		'subject'=> 'required',
    	'slug'=> 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id'=> 'required|integer',
    		'content'=> 'required',
    	));
    	}


    	$post= Post::findorfail($id);
    	
    	$post->name= $request->input('name');
    	$post->email= $request->input('email');
    	$post->subject= $request->input('subject');
    	$post->slug= $request->input('slug');
        $post->category_id= $request->input('category_id');
    	$post->content= $request->input('content');
    	$post->updated_at = Carbon::now(+1);

    	// dd($post->updated_at);
    	$post->update();

         //enter TRUE as the 2nd parameter of the sync fxn in order to actually override the existing association in the database and perform the update. leaving the 2nd parameter blank will also perform the same function as the former
         
         $rt= $request->tags;

         if (isset($rt)) {

             $post->tags()->sync($rt, true);

         } else {
             
             $post->tags()->sync(array());
         }-
         
         

    	Session::flash('update', 'The blog post has been updated successfully' );
    	
    	return redirect('blog/read_more/'.$post->id);
    }

    public function delete($id) {

    	$post= Post::where('id', $id)->first();

    	return view('post.delete_post', compact('post'));
    }

    public function destroy($id){

    	$post= Post::findorfail($id);

        $post->tags()->detach();

        $post->deleted_at = Carbon::now(+1);

    	$post->delete();

    	Session::flash('delete', 'The blog post has been deleted');

    	return redirect('blog/view');

    }

    

    
}





