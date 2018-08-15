@if (Session::has('awesome'))

	

				 <div class="alert alert-success" role="alert" id= "flash_saved">

        			 <i class="fas fa-exclamation-circle "><strong>Success:</strong>{{Session::get('awesome')}}</i> 

          		 </div>

	
@endif

@if (Session::has('awesome_two'))

	

				 <div class="alert alert-success" role="alert" id= "flash_saved">

        			 <i class="fas fa-exclamation-circle "><strong>Success:</strong>{{Session::get('awesome_two')}}</i> 

          		 </div>

	
@endif


@if (Session::has('awesome_three'))

	

				 <div class="alert alert-success" role="alert" id= "flash_saved">

        			 <i class="fas fa-exclamation-circle "><strong>Success:</strong>{{Session::get('awesome_three')}}</i> 

          		 </div>

	
@endif


@if (Session::has('update'))

	

				 <div class="alert alert-success" role="alert" id= "flash_saved">

        			 <i class="fas fa-exclamation-circle "><strong>Success:</strong>{{Session::get('update')}}</i> 

          		 </div>

	
@endif

@if (Session::has('update_tag'))

	

				 <div class="alert alert-success" role="alert" id= "flash_saved">

        			 <i class="fas fa-exclamation-circle "><strong>Success:</strong>{{Session::get('update_tag')}}</i> 

          		 </div>

	
@endif

@if (Session::has('comment_saved'))

	

				 <div class="alert alert-success" role="alert" id= "flash_saved">

        			 <i class="fas fa-exclamation-circle "><strong>Success:</strong>{{Session::get('comment_saved')}}</i> 

          		 </div>

	
@endif

@if (Session::has('MailSuccess'))

	

				 <div class="alert alert-success" role="alert" id= "flash_saved">

        			 <i class="fas fa-exclamation-circle "><strong>Success:</strong>{{Session::get('MailSuccess')}}</i> 

          		 </div>

	
@endif


@if (Session::has('delete'))

	

				 <div class="alert alert-success" role="alert" id= "flash_saved">

        			 <i class="fas fa-exclamation-circle "><strong>Success:</strong>{{Session::get('delete')}}</i> 

          		 </div>

	
@endif

@if (Session::has('delete_tag'))

	

				 <div class="alert alert-success" role="alert" id= "flash_saved">

        			 <i class="fas fa-exclamation-circle "><strong>Success:</strong>{{Session::get('delete_tag')}}</i> 

          		 </div>

	
@endif

@if (Session::has('new_user'))

	

				 <div class="alert alert-success" role="alert" id= "flash_saved">

        			 <i class="fas fa-exclamation-circle "><strong>Success:</strong>{{Session::get('new_user')}}</i> 

          		 </div>

	
@endif


@if (count($errors) > 0)



				 <div class="alert alert-danger" role="alert" id= "flash_error">

        			 <i class="fas fa-exclamation-circle ">
						<strong>Errors:</strong>
        			 	<ul>

							@foreach ($errors->all() as $error)

								<li>{{ $error }}</li>

							@endforeach
					 		
						</ul>

        			 </i> 

          		 </div>

			
	
	
@endif