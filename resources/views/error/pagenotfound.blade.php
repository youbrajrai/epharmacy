@extends('layouts.dashboard.dashboardapp')

@section('content')
<!-- Error -->
    <div class="container-xxl container-p-y">
        <div class="misc-wrapper">
          <h2 class="mb-2 mx-2">Page Not Found :(</h2>
          <p class="mb-4 mx-2">Oops! 😖 The requested URL was not found on this server.</p>
          @if (auth()->user()->is_admin == 1)
          <a href="{{route('admin.home')}}" class="btn btn-primary">Back to home</a>          
          @else
          <a href="{{route('home')}}" class="btn btn-primary">Back to home</a>           
          @endif
          
          <div class="mt-3">
            <img
              src="{{asset('dashboard/assets/img/illustrations/page-misc-error-light.png')}}"
              alt="page-misc-error-light"
              width="500"
              class="img-fluid"
              data-app-dark-img="illustrations/page-misc-error-dark.png"
              data-app-light-img="illustrations/page-misc-error-light.png"
            />
          </div>
        </div>
      </div>
      <!-- /Error -->
@endsection      