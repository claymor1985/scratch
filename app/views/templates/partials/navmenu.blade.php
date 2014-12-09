    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{URL::to('/')}}">
            BSBlog
          </a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="{{URL::to('/')}}">ГЛАВНАЯ</a></li>
            @if(Auth::guest())
            <li><a href="{{URL::to('login')}}">ВОЙТИ</a></li>
            @else
            <li><a href="{{URL::to('profile')}}">ПРОФИЛЬ({{Auth::user()->username}})</a></li>
            <li><a href="{{URL::to('logout')}}">ВЫХОД</a></li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>