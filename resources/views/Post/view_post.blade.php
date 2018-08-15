@extends('master')

@section('title', 'All Posts')

@section('content')




        <div class="container">
             <div class="row">
                <div class="col-md-12 offset-md-">

                    <h1 align="center">All Posts</h1><br>

                    <table align="center">
                        <THEAD>
                            <TH class="table_head">#</TH>
                            <TH class="table_head">NAME</TH>
                            {{-- <TH class="table_head">EMAIL</TH> --}}
                            <TH class="table_head">SUBJECT</TH>
                            <TH class="table_head">CONTENT</TH>
                            <TH class="table_head">CREATED AT</TH>
                            <TH class="table_head">UPDATED AT</TH>
                            <TH class="table_head">ACTION</TH>
                        </THEAD>

                        <TBODY>
                                
                             @foreach ($posts as $post)

                                <TR>

                                    <td>{{$post->id}}</td>
                                    <td>{{$post->name}}</td>
                                    {{-- <td>{{$post->email}}</td> --}}
                                    <td>{{$post->subject}}</td>
                                    <td>{{substr($post->content,0,18)}} {{ strlen(trim($post->content)) > 18 ? '...' : '' }}</td>
                                    <td>{{ date( 'M j, Y h:ia e ', strtotime($post->created_at))}}</td>
                                    <td>{{ date( 'M j, Y h:ia e ', strtotime($post->updated_at))}}</td>
                                    <td><a href="{{url('blog/read_more/'.$post->id)}}" class="btn btn-default btn-sm">View</a>{{-- <a href="{{url('blog/edit/'.$post->id)}}" class="btn btn-default btn-">Edit</a></td> --}}
                                </TR>

                             @endforeach

                        </TBODY>
                    </table> <br>


                </div>
            </div>
                
                <div class="row">
                    <div class="col-md-4 offset-md-5">


                    <div class="" align="">
                        {!! $posts->links() !!}
                        <p>Page  {!! $posts->currentPage() !!} of  {!! $posts->lastPage() !!}</p>
                    </div>
                        
                    </div>
                    
                </div>

        </div>

           



       


               {{--   <div class="col-md-4 offset-md-1" id="sidebar">
                     <h2>SideBar</h2>
                 </div>
            </div>
        </div> --}}


       
           

@stop

           
    