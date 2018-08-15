@extends('master')

@section('title', 'Create Post')

@section('stylesheets')

 <link href="{{url('css/select2.min.css')}}" rel="stylesheet" type="text/css">

@stop


@section('content')

            <div class="container">
                <div class="col-md-6 offset-md-3 " id="blog_post_create">
                    {!! Form::open(['action' => 'PostController@store']) !!} 

                        <p class="h4 text-center mb-4">Create New Post</p>

                    <!-- Default input name -->
                    <label for="defaultFormContactNameEx" class="grey-text">Your Name</label>
                    <input name="name" type="text" id="defaultFormContactNameEx" class="form-control">
                    
           

                    <!-- Default input email -->
                    <label for="defaultFormContactEmailEx" class="grey-text">Your Email</label>
                    <input name="email" type="email" id= "defaultFormContactEmailEx" class="form-control">


                    <!-- Default input subject -->
                    <label for="defaultFormContactSubjectEx" class="grey-text">Subject</label>
                    <input name="subject" type="text" id="defaultFormContactSubjectEx" class="form-control">

                     <label for="defaultFormContactSlugEx" class="grey-text">Slug</label>
                    <input name="slug" type="text" id="defaultFormContactSlugEx" class="form-control">

                    
                     <label for="category_id" class="grey-text">Category:</label>
                    <select name="category_id"  id="defaultFormContactCategoryEx" class="form-control">
                        
                        @foreach ($categories as $category)

                          <option value="{{ $category->id }}">{{ $category->name }}</option>

                        @endforeach
                       

                    </select>

                     <label for="tags" class="grey-text">Tags:</label>
                    <select name="tags[]"  id="defaultFormContactCategoryEx" class="form-control js-basic-multiple-tags" multiple="multiple">
                        
                        @foreach ($tags as $tag)

                          <option value="{{ $tag->id }}">{{ $tag->name }}</option>

                        @endforeach
                       

                    </select>

                    
                    <!-- Default textarea message -->
                    <label for="defaultFormContactMessageEx" class="grey-text">Content</label>
                    <textarea  name="content" type="text" id="defaultFormContactMessageEx" class="form-control" rows="3"></textarea>

                    <div class="text-center mt-4">
                        <button class="btn btn-success" type="submit">Save<i class="fa fa-paper-plane-o ml-2"></i></button><span><a href="{{url('/home')}}" class="btn btn-warning btn-" role='button'>cancel</a></span>
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
});

 </script>

@stop
      


    