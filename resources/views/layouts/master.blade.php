<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Management System @yield('title')</title>


    
  </head>
  <body>

    {{-- navbar section --}}
    @include('partials.navbar')

    {{-- simple new heading section --}}
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="captionHeading">
            <marquee behavior="" direction="right"><a href="">some text here</a></marquee></div>
        </div>
      </div>
    </div>

    {{-- carosel section --}}

    @yield('homeContent')
    @yield('admission')
    @yield('student-profile')
    @yield('ajax-list')
    @yield('archive')


    <div class="container-fluid ">
      <div class="row">
        <div class="col-lg-12">
          <footer class="footer">
            <div >
              <p class="bg-inverse text-white p-3 text-center">Copyright&copy; Binoy Sarker</p>
            </div>
          </footer>
        </div>
      </div>
    </div>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/tether.min.css') }}">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/tether.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
   {{-- my custom Js--}}
  <script src="{{ asset('js/custom.js') }}"></script>
  
  </body>
</html>