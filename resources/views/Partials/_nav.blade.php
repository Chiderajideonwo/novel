
            <div class="" id="intro_background">    
            <nav class="mb-1 navbar navbar-expand-lg navbar-dark">
                <img src="https://www.onblastblog.com/wp-content/uploads/2017/08/blogger-logo-624x357.jpg" class="nav_image">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation" style="">
                    <span class="navbar-toggler-icon"></span>
                </button> 
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item , {{ Request::is('/home') ? "active" : " " }}" >
                            <a class="nav-link waves-effect waves-light" href="{{url('/home')}}">
                                <i class="fas fa-home"></i> Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                         <li class="nav-item , {{ Request::is('/about') ? "active" : " " }}">
                            <a class="nav-link waves-effect waves-light" href="{{url('/about')}}">
                                <i class="fas fa-info"></i> About Us
                            </a>
                        </li>
                        <li class="nav-item , {{ Request::is('/contact') ? "active" : " " }}">
                            <a class="nav-link waves-effect waves-light" href="{{url('/contact')}}">
                                <i class="far fa-address-book"></i> Contact 
                            </a>
                        </li>
                       {{--  <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">
                                <i class="fas fa-pencil-alt"></i>Post</a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item waves-effect waves-light" href="{{url('blog/create')}}">Create Post</a>
                                <a class="dropdown-item waves-effect waves-light" href="{{url('blog/view')}}">View Post</a>
                            </div>
                        </li> --}}

                    @if (Auth::check())
                 

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">
                                <i class="fas fa-user"></i> Hello, {{ Auth::user()->name }}</a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item waves-effect waves-light" href="{{url('blog/view')}}">Posts</a>
                                 <a class="dropdown-item waves-effect waves-light" href="{{url('blog/create')}}">Create Post</a>
                                   <a class="dropdown-item waves-effect waves-light" href="{{route('tags.index')}}">Tags</a>
                                  <a class="dropdown-item waves-effect waves-light" href="{{route('categories.index')}}">Categories</a>
                                <a class="dropdown-item waves-effect waves-light" href="{{url('/logout')}}">Log out</a>
                            </div>
                        </li>

                    @else 

                    <a href="{{ url('/login') }}" class="btn btn-primary btn-sm">Login</a>
                       
                    @endif

                    </ul>
                </div>
            </nav><br><br><br>
                    
                <div>
                     <h1 align="center" id="welcome">The Novel Blog</h1>
                </div>

            </div><br>



            



         