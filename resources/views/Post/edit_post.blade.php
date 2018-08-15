@extends('master')

@section('title', 'Edit Post')

@section('stylesheets')

 <link href="{{url('css/select2.min.css')}}" rel="stylesheet" type="text/css">

@stop

@section('content')

            <div class="container">
                <div class="col-md-6 offset-md-3 " id="blog_post_edit">
                    {!! Form::open(['method'=>'patch', 'action' => ['PostController@update', $post->id] ]) !!}

                        <p class="h4 text-center mb-4">Edit Post</p>

                    <!-- Default input name -->
                    <label for="defaultFormContactNameEx" class="grey-text">Your name</label>
                    <input name="name" type="text" value="{{$post->name}}" id="defaultFormContactNameEx" class="form-control">
                    
           

                    <!-- Default input email -->
                    <label for="defaultFormContactEmailEx" class="grey-text form-spacing-top">Your email</label>
                    <input name="email" type="email" value="{{$post->email}}" id="defaultFormContactEmailEx" class="form-control">


                    <!-- Default input subject -->
                    <label for="defaultFormContactSubjectEx" class="grey-text">Subject</label>
                    <input name="subject" type="text" value="{{$post->subject}}" id="defaultFormContactSubjectEx" class="form-control">


                    <!-- Default input slug -->
                    <label for="defaultFormContactSlugEx" class="grey-text">Slug</label>
                    <input name="slug" type="text" value="{{$post->slug}}" id="defaultFormContactSlugEx" class="form-control">


                     <label for="category_id" class="grey-text">Category:</label>
                   
                   {{-- had to use the laravel form helper for the select object because the conventional html form tags weren't getting the job done. follow through, its quite straightforward! --}}

                   {{Form::select ('category_id',$categories, $post->category_id , ['class'=>'form-control']) }}

                    
                     <label for="tags" class="grey-text">Tags:</label>
                   
                   {{-- had to use the laravel form helper for the select object because the conventional html form tags weren't getting the job done. follow through, its quite straightforward! --}}

                   {{Form::select ('tags[]',$tags, null , ['class'=>'form-control js-basic-multiple-tags', " multiple" => "multiple" ]) }}

                    
                    <!-- Default textarea message -->
                    <label for="defaultFormContactMessageEx" class="grey-text">Content</label>
                    <textarea  name="content" type="text" id="defaultFormContactMessageEx" class="form-control" rows="3">{{$post->content}}</textarea>

                    <div class="text-center mt-4">
                        <button class="btn btn-primary" type="submit">Update<i class="fa fa-paper-plane-o ml-2"></i></button><span><a href="{{url('blog/read_more/'.$post->id)}}" class="btn btn-warning btn-" role='button'>cancel</a></span>
                    </div>
    
                    {!! Form::close() !!}
                

                </div>
                
              
                
                      
            </div>
            
@endsection

@section('scripts')

 <script type="text/javascript" src="{{url('js/select2.min.js')}}"></script>

  <script type="text/javascript">

     $(document).ready(function() {
    $('.js-basic-multiple-tags').select2();
     $('.js-basic-multiple-tags').select2().val ( {!! json_encode($post->tags()->allRelatedIds() ) !!} ).trigger('change');
});

 </script>

@stop

