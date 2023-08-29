@include('layouts.header')

<div id="app">
    <div class="wrap">
        <header id="header">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="{{ url('/') }}">
                            <div class="logo">
                                <img src="{{url('Frontend/img/logo.png')}}" alt="Venue Logo">
                            </div>
                        </a>
                        <nav id="primary-nav" class="dropdown cf">

                            <ul class="dropdown menu">
                                <!-- Authentication Links -->
                                @guest
                                @if (Route::has('login'))
                                <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                @endif

                                @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                @endif
                                @else
                                <li>
                                    <a href="javascript:void(0)"> {{ Auth::user()->name }}</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endguest
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </header>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</div>

@include('layouts.footer')