@extends('master')

//used htmlspecialchars for protection from xss(cross-site-scripting)...
<?php $title_tag = htmlspecialchars ( $tag->name ); ?>

@section('title', "$title_tag Tag")

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-5">

			{{-- @foreach ($post->tags as $tag) --}}
				
					<h1> {{$tag->name}} Tag <small style="color: grey;"> {{ $tag->posts()->count() }} Post(s) </small> </h1>

		{{-- 	@endforeach --}}

		
			
		</div>
		<div class="col-md-1">
		
		<a href="{{ route ('tags.edit', $tag->id) }}" class="btn btn-sm btn-default" style="">Edit</a>
		
			
		</div>

		<div class="col-md-1">
		
		{{ Form::open(['route'=>['tags.destroy', $tag->id], 'method'=>'DELETE']) }}
			
			{{ Form::submit( 'Delete', ['class'=>'btn btn-sm btn-danger'] ) }}

		{{ Form::close() }}


		{{-- <form action="{{route('tags.destroy', $tag->id)}}" method="POST">
			@csrf
		    @method('DELETE')

			<button class="btn btn-sm btn-danger" type="submit" name="delete">Delete</button>
			
			
		</form> --}}
		{{-- <a href="{{ route ('tags.destroy', $tag->id) }}" class="btn btn-sm btn-danger" style="">Delete</a> --}}
			
		</div>
		
	</div>

	<div class="row">
		<div class="col-md-8">
			 <table class="table" align="center">
                        <THEAD>
                            <TH class="table_head">#</TH>
                            <TH class="table_head">TITLE</TH>
                            <TH class="table_head">TAGS</TH>
                            <TH class="table_head">ACTION</TH>
                           
                        </THEAD>

                        <TBODY>
                                
                             @foreach ( $tag->posts as $post)

                                <TR>

                                    <th>{{ $post->id }}</th>
                                    <td>{{ $post->subject }}</td>
                                    <td> @foreach ( $post->tags as $tag)
                                    	<span class="badge badge-pill orange">{{ $tag->name }}</span>
                                    	
                                    @endforeach
                                	</td>
                                    <td><a href="{{ url('blog/read_more/'.$post->id) }}" class="btn btn-default btn-sm">View</a></td>
                                  
                                </TR>

                             @endforeach

                        </TBODY>
             </table> 
			
		</div>
		
	</div>	
	
</div>



 











@stop