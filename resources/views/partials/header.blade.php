<header>


    <nav class="nav justify-content-center bg-dark py-2 d-flex">
        <a class="nav-link fs-5 text-white {{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}"
            href="{{ route('welcome') }}" aria-current="page">
            Home
        </a>
        <a class="nav-link fs-5 text-white {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}"
            href="{{ route('comics') }}">
            Comics
        </a>
        <a id="admin_btn" class="btn fs-5 rounded-pill text-end justify-end" href="{{ route('comics.index') }}">
            Login
        </a>

    </nav>



</header>
