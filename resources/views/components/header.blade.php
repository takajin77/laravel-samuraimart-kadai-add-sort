<nav class="navbar navbar-expand-md mavbar-light shadow-sm samuraimart-header-container">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">
      <img src="{{asset('img/logo.jpg')}}" alt="">
    </a>
    <form class="row g-1" action="{{route('products.index')}}" method="GET">
      <div class="col-auto">
        <input class="form-control samuraimart-header-search-input" name="keyword">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn samuraimart-header-search-button"><i class="fas fa-search samuraimart-search-icon"></i></button>
      </div>
    </form>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{__('Toggle nabigation')}}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mr-5 mt-2">
        @guest
          <li class="nav-item mr-5">
            <a href="{{route('register')}}" class="nav-link">登録</a>
          </li>
          <li class="nav-item mr-5">
            <a href="{{route('login')}}" class="nav-link">ログイン</a>
          </li>
          <hr>
          <li class="nav-item mr-5">
            <a href="{{route('login')}}" class="nav-link"><i class="far fa-heart"></i></a>
          </li>
          <li class="nav-item mr-5">
            <a href="{{route('login')}}" class="nav-link"><i class="fas fa-shopping-cart"></i></a>
          </li>
        @else
          <li class="nav-item mr-5">
            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              ログアウト
            </a>

            <form id="logout-form" action="{{route('logout')}}" method="POST" style="desplay:none">
              @csrf
            </form>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>