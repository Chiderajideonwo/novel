<!doctype html>
<html lang="en">

@include('partials._head')



    <body id="">
   

            @include('partials._nav')

            {{-- {{ Auth::check() ? 'Logged IN' : 'Logged OUT'}} --}}

            @include('partials._message')
             
            @yield('content')

            @include('partials._footer')
   
           
    </body>
    
    @include('partials._javascripts')

</html>
