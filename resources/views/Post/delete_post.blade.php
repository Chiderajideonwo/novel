@extends('master')

@section('title', 'Delete Post')

@section('content')
           



       

        <div class="container">
             <div class="row">
                <div class="col-md-6  offset-md-3">

            {!! Form::open(['method'=>'delete', 'action'=> ['PostController@destroy', $post->id] ]) !!}
                                {{-- {!! Form::open(['method'=>'patch', 'action' => ['PostController@update', $post->id] ]) !!} --}}
                    <div class="alert alert-danger" role="alert" id= "sure_delete">

                         <h4 align="center"> <i class="fas fa-exclamation-circle "></i> Are you sure you want to delete this post?</h4> 

                    </div><br><br>
                <div class="card" align="" id="card-control">
                        <h1 style="padding-left:5px ">{{$post->subject}}</h1>
                         <p style="padding-left:5px ">{{$post->content}}</p>
                       
                        <div class="text-center mt-4">  
                             <button  class="btn btn-danger btn-" role='button'>Delete</button><span><a href="{{url('/home')}}" class="btn btn-warning btn-" role='button'>cancel</a></span>
                        </div>

            
                </div
            {!! Form::close() !!}

                     <hr>

               
                    
                   
            
                </div>

                {{--  <div class="col-md-4 offset-md-1" id="sidebar">
                     <h2>SideBar</h2>
                 </div> --}}
            </div>
        </div>


       
           

@stop

           
    