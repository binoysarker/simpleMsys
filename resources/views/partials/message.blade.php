{{-- displying message --}}
  @if (session()->has('message'))

    <center><h2 class="alert alert-info">{{$msg = session()->get('message')}}</h2></center>
	
  @endif
