@extends('master')

@section('title', 'Posts')

@section('content')
           



       

        <div class="container">
             <div class="row">
                <div class="col-md-7">

                    {{-- @foreach ($posts as $post) --}}
                    {!! Form::open(['method'=>'get', 'action'=> ['PostController@read_more', $post->id] ]) !!}

                     <div class="card" align="" id="card-control">
                        <h1>{{$post->subject}}</h1>
                     <p style="display: block;">{{$post->content}}</p>
                     
                     <p>Posted in: {{$post->category->name}} Category</p>
                        
                        
                     </div>

                     

                    {{-- @endforeach --}}
                    {!! Form::close() !!}

                <hr>

                <div class="tags">

                    @foreach ($post->tags as $tag)

                        <span class="badge badge-pill orange">{{ $tag->name }}</span>

                    @endforeach
                    
                </div>                    
                   
            
                </div>
                




                 <div class="col-md-4 offset-md-1">
                    <div class="row">
                        <div class="well" id="sidebar">
                            <dl class="dl-horizontal">
                            <dt class="d_title">Url:</dt>

                                <dd class="d_data"><a href="{{ url ('blog/single/'.$post->slug) }}">{{ url ('blog/single/'.$post->slug) }}</a></dd>
             
                            </dl>
                            
                             <dl class="dl-horizontal">
                            <dt class="d_title">Category:</dt>

                                <dd class="d_data">{{$post->category->name}}</dd>
             
                            </dl>
                                
                            <dl class="dl-horizontal">
                            <dt class="d_title">Created at:</dt>

                                <dd class="d_data">{{ date( 'M j, Y h:ia e ', strtotime($post->created_at))}}</dd>
             
                            </dl>
                             <dl class="dl-horizontal">
                                <dt class="d_title">Updated at:</dt>

                                <dd class="d_data">{{ date( 'M j, Y h:ia e ', strtotime($post->updated_at))}}</dd>
             
                            </dl>

                             <div class="row">
                                <div class="col-md-5">
                                     {{-- the html link route helper performs the same function as the anchor tag below --}}
                                  {{--   {!!Html::linkRoute('blog/edit/','Edit', array($post->id),array('class'=>'btn btn-success btn-'))!!} --}}
                                   
                                    <a href="{{url('blog/edit/'.$post->id)}}" class="btn btn-success btn-" role='button'>Edit</a>
                                    
                                </div>
                                <div class="col-md-5">
                                     <a href="{{url('blog/delete/'.$post->id)}}" class="btn btn-danger btn-" role='button'>Delete</a>
                                 </div>
                        
                             </div>

                             <div class="row">
                                <div class="col-md-7 offset-md-3" >
                                     <a href="{{url('blog/view')}}" class="btn btn-default btn-md" role='button'> << Go Back </a>
                                </div>
                                 
                             </div>
                    
                        </div>
                    </div>
                   
                    
                 </div>
            </div><br>

            <div class="row">

                <div class="col-md-8 offset-md-">

                    <h2 class="comment_title"><i class="fas fa-comment"></i> {{$post->comments()->count()}} Comment(s)</h2>

                    @foreach ($post->comments as $comment)

                       <div class="comment">
                            
                            <div class="author_info">

                                <img src="http://images4.fanpop.com/image/photos/17600000/Awesome-random-17652989-500-278.jpg" class="author_pic">

                                 <div class="author_name">

                                    <h4>{{$comment->name}} </h4>
                                    <p class="author_time">{{date('F jS, Y - h:iA ',strtotime($comment->created_at))}}</p>  

                                 </div>

                            </div>

                           

                             <div class="author_comment">

                                  {{$comment->comment}}
                                  
                             </div>
                           
                           
                       </div>
                        
                    @endforeach
                    
                </div>
                
            </div><br>
            
            <div class="row">

                <div class="col-md-6">

                 <div class="card" style="border:2px solid orange;">

                <div {{-- class="col-md-6" --}} id="comment_form">
                   
                   {{ Form::open( ['route'=>['comments.store', $post->id], 'method'=>'POST']) }}

                        <div class="row">

                            <div class="col-md-5 offset-md-1" style="padding-top: 10px;">
                                
                            {{ Form::label('name', "Name:") }}
                            {{ Form::text('name', null, ['class'=>'form-control']) }}
                                
                            </div>


                            <div class="col-md-5 " style="padding-top: 10px;">
                                
                            {{ Form::label('email', "Email:") }}
                            {{ Form::text('email', null, ['class'=>'form-control']) }}
                                
                            </div>


                            <div class="col-md-10 offset-md-1">
                                
                            {{ Form::label('comment', "Comment:") }}
                            {{ Form::textarea('comment', null, ['class'=>'form-control',]) }}

                            {{ Form::submit('Add Comment', ['class'=>'btn btn- btn-primary']) }}
                                
                            </div>
                           
                            
                        </div>
                      

                   {{ Form::close() }}
                    
                </div>
                
            </div>

                
            </div>
           
                
            </div><br>
            
        </div>


       
           

@stop

           
    