@extends('master')

@section('title', 'Tags')

@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-9">
			
			<h1  align="center">Tags</h1><br>

			 <table class="table" align="center">
                        <THEAD>
                            <TH class="table_head">#</TH>
                            <TH class="table_head">NAME</TH>
                            {{-- <TH class="table_head">EMAIL</TH> --}}
                           {{--  <TH class="table_head">SUBJECT</TH>
                            <TH class="table_head">CONTENT</TH>
                            <TH class="table_head">CREATED AT</TH>
                            <TH class="table_head">UPDATED AT</TH>
                            <TH class="table_head">ACTION</TH> --}}
                        </THEAD>

                        <TBODY>
                                
                             @foreach ($tags as $tag)

                                <TR>

                                    <th>{{ $tag->id }}</th>
                                    <td><a href="{{route('tags.show', $tag->id)}}">{{ $tag->name }}</a></td>
                                    {{-- <td>{{$post->email}}</td> --}}
                                    {{-- <td>{{$post->subject}}</td>
                                    <td>{{substr($post->content,0,18)}} {{ strlen(trim($post->content)) > 18 ? '...' : '' }}</td>
                                    <td>{{ date( 'M j, Y h:ia e ', strtotime($post->created_at))}}</td>
                                    <td>{{ date( 'M j, Y h:ia e ', strtotime($post->updated_at))}}</td>
                                    <td><a href="{{url('blog/read_more/'.$post->id)}}" class="btn btn-default btn-sm">View</a> --}}{{-- <a href="{{url('blog/edit/'.$post->id)}}" class="btn btn-default btn-">Edit</a></td> --}}
                                </TR>

                             @endforeach

                        </TBODY>
                    </table> <br>

		</div>
		<div class="col-md-3">

		{{-- 	<h1>New Category</h1><br> --}}

<!-- Card -->
				<div class="card mx-xl-0">

				    <!-- Card body -->
				    <div class="card-body">

				        <!-- Default form subscription -->
				        <form method="POST" action="{{ route('tags.store') }}">
				        	@csrf

				            <p class="h4 text-center py-4">New Tag</p>
				            <hr>

				            <!-- Default input name -->
				            <label for="defaultFormCardNameEx" class="black-text font-weight-light">Name:</label>
				            <input type="text" id="defaultFormCardNameEx" name="name" class="form-control">

				            <!-- Default input email -->
				           {{--  <label for="defaultFormCardEmailEx" class="grey-text font-weight-light">Your email</label>
				            <input type="email" id="defaultFormCardEmailEx" class="form-control"> --}}

				            <div class="text-center py-4 mt-3">
				                <button class="btn btn-outline-yellow btn-block" type="submit">Create<i class="fa fa-paper-plane-o ml-2"></i></button>
				            </div>
				        </form>
				        <!-- Default form subscription -->

				    </div>
				    <!-- Card body -->

				</div>
<!-- Card -->
			
		</div>
	</div>
</div>


























@stop