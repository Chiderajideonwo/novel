@extends('master')

@section('title', 'Contact Us')

@section('content')


<div class='container'>
	<div class="row">
		<div class="col-md-6 offset-md-3" id="write_to_us">
			<form method="POST" action="{{ url('contact') }}">
				@csrf
				
			    <p class="h4 text-center mb-4">Contact Us</p>

			    <!-- Default input name -->
			    <label for="defaultFormContactNameEx" class="grey-text" name="name">Your name</label>
			    <input type="text" id="defaultFormContactNameEx" class="form-control" name="name">
			    
			    <br>

			    <!-- Default input email -->
			    <label name="email" for="defaultFormContactEmailEx" class="grey-text">Your email</label>
			    <input type="email" id="defaultFormContactEmailEx" class="form-control" name="email">

			    <br>

			    <!-- Default input subject -->
			    <label name="subject" for="defaultFormContactSubjectEx" class="grey-text">Subject</label>
			    <input type="text" id="defaultFormContactSubjectEx" class="form-control" name="subject">

			    <br>
			    
			    <!-- Default textarea message -->
			    <label for="defaultFormContactMessageEx" class="grey-text" name="message">Your message</label>
			    <textarea type="text" id="defaultFormContactMessageEx" class="form-control" rows="3" name="message"></textarea>

			    <div class="text-center mt-4">
			        <button class="btn btn-danger" type="submit">Send<i class="fa fa-paper-plane-o ml-2"></i></button>
			    </div>
		   </form>
<!-- Default form contact -->
		</div>
	</div>
</div>


@endsection