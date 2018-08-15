@extends('master')

@section('title', "$post->subject")

@section('content')


 	<div class="container">
             <div class="row">
                <div class="col-md-8 offset-md-2 ">

                  {{--   <h1 align="left">All Posts</h1><br> --}}

                   {{--  @foreach ($posts as $post) --}}

                     {!! Form::open(['method'=>'get', 'action'=> ['BlogController@public_view', $post->slug] ]) !!}
 
                     <div class="well" align="" id="card-control_home">
                        <h1 class="post">{{$post->subject}}</h1>
                         <p class="post">{{$post->content}}</p>

                        {{--  <div class="text-center mt-4"> 
                             <a href="{{url('blog/read_more/'.$post->id)}}" class="btn btn-primary btn-" role='button'>Read More</a>><span><a href="{{url('/home')}}" class="btn btn-warning btn-" role='button'>cancel</a></span>

                         <a href="{{url('blog/edit/'.$post->id)}}" class="btn btn-success btn-" role='button'>Edit</a>
                         <a href="{{url('blog/delete/'.$post->id)}}" class="btn btn-danger btn-" role='button'>Delete</a>

                        </div> --}}
                     </div>

                     <hr>

                       {!! Form::close() !!}

                   {{--  @endforeach --}}

                </div>
            </div>
                    
                   
            
    </div>




@stop
