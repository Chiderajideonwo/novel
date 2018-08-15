@extends('master')

@section('title', 'Home')

@section('content')
           

	<div class="container-fluid">
		<div class="col-md-10 offset-md-1">
			<div class="jumbotron" id="welcome_message">
			
				<h1 align="center"><strong>Welcome to My Blog</strong></h1>
				<p align="center"><strong>Thank you for visiting...this is a TEST website built with Laravel...Yaay!</strong></p>
				<a href="{{  url('') }}"class="btn btn-primary btn-" id="popular_btn">Popular Post</a>

				
			</div>

		</div>
			
			
		
		
	</div>

        <div class="container">
             <div class="row">
                <div class="col-md-8 offset-md-2 ">

                  {{--   <h1 align="left">All Posts</h1><br> --}}

                    @foreach ($posts as $post)
 
                     <div class="card" align="" id="card-control_home">
                        <h1 class="post">{{$post->subject}}</h1>
                         <p class="post">{{substr($post->content,0,15)}} {{ strlen(trim($post->content)) > 18 ? '...' : '' }}</p>

                         <div class="text-center mt-4"> 
                             <a href="{{ url( 'blog/public_view/'.$post->slug) }}" class="btn btn-primary btn-" role='button'>Read More</a>  {{-- ><span><a href="{{url('/home')}}" class="btn btn-warning btn-" role='button'>cancel</a></span> --}}

                         {{-- <a href="{{url('blog/edit/'.$post->id)}}" class="btn btn-success btn-" role='button'>Edit</a>
                         <a href="{{url('blog/delete/'.$post->id)}}" class="btn btn-danger btn-" role='button'>Delete</a> --}}

                        </div>
                     </div>

                     <hr>

                    @endforeach

                </div>
            </div>
                    
                   
            
        </div>


       


                  {{--   @foreach ($posts as $post)

                     <div class="card" align="" id="card-control">
                        <h1 class="post">{{$post->subject}}</h1>
                         <p class="post">{{$post->content}}</p>
                         <a href="{{url('blog/read_more/'.$post->id)}}" class="btn btn-primary btn-" role='button'>Read More</a>
                         <a href="{{url('blog/edit/'.$post->id)}}" class="btn btn-success btn-" role='button'>Edit</a>
                         <a href="{{url('blog/delete/'.$post->id)}}" class="btn btn-danger btn-" role='button'>Delete</a>
                     </div>

                     <hr>

                    @endforeach
                     --}}
                   
            
               

               {{--   <div class="col-md-4 offset-md-1" id="sidebar">
                     <h2>SideBar</h2>
                 </div>
            </div>
        </div> --}}


       
           

@stop

           
