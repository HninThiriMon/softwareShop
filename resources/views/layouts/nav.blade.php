<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu">
    @if(Auth::check())
      <a class="dropdown-item" href="{{url('user/logout')}}">Logout</a><br>
    @else
      <a class="dropdown-item" href="{{url('user/login')}}">Login</a><br>
      <a class="dropdown-item" href="{{url('user/register')}}">Register</a><br>
    @endif
      <div class="dropdown-divider"></div>
      <!-- <a class="dropdown-item" href="#">Separated link</a> -->
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>