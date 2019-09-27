
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title> {{ config('app.name', 'Windowstory Inventory App') }} </title>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/680d5ce0c2.js"></script>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap  p-0 shadow">
  
    <div class="d-flex flex-row "> 
      <div class="flex-row ">
         <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ url('/') }}"> {{ config('app.name', 'InventoryApp') }}</a>
      </div>
     <i class="fas fa-plus-circle fa-2x" style="color: white;     margin: auto; padding: 9px;"></i>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    </div>
    
  <!-- Right Side Of Navbar -->
  <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest
</nav>

<div class="container-fluid" >
  <div class="row" >
    <nav class="col-md-2 d-none d-md-block bg-light sidebar"  >
      <div class="sidebar-sticky" style="margin-top: 50px; border-right: 2px solid #000; box-shadow: 0 4px 20px 1px rgba(0, 0, 0, 0.06), 0 1px 4px rgba(0, 0, 0, 0.08); height:700px;" >
        <ul class="nav flex-column" >
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Contacts <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
             Stock Order
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Make
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
             Purchase Order
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Bills
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="margin-top: 50px;">           
      @yield('content')
    </main>
  </div>
</div>
</body>
</html>
