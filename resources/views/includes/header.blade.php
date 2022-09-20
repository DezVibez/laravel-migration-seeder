


<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link @if (Route::is('home')) active @endif" aria-current="page" href=" {{ url('/') }} ">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if (Route::is('treni')) active @endif"  href="{{ route('treni') }}">Treni</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li>
</ul>