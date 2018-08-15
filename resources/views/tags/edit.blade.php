@extends('master')

@section('title', 'Edit Tag')


@section('content')

{{-- Form::model($user, array('route' => array('user.update', $user->id))) --}}

<div class="container">
	<div class="row">
		<div class="offset-md-2 col-md-8">

		{{-- {{ Form::model($tag, array('route' => array('tags.update', $tag->id)) , 'method'=>'POST')  }} --}}

			<form action="{{route('tags.update',$tag->id)}}" method="POST">
				@csrf
				@method('PUT')

				{{ Form::label('name', 'Title:') }}
				{{ Form::text('name', $tag->name, ['class'=>'form-control'] ) }}

				{{ Form::submit('Save Changes', ['class'=>'btn btn-sm btn-success']) }}

		
			{{-- {{Form::close() }} --}}
		 
			</form>
			
		</div>
		
	</div>
	
</div><br><br>















@stop