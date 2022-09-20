


<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link @if (Route::is('home')) active @endif" aria-current="page" href=" {{ url('/') }} ">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if (Route::is('treni')) active @endif"  href="{{ route('treni') }}">Treni Arcodati</a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if (Route::is('trenidb.index')) active @endif"  href="{{ route('trenidb.index') }}">Treni Dal DB</a>
  </li>
</ul>