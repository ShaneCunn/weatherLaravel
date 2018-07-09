<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">

        @if (Route::has('login'))
            @auth
                <a class="p-2 text-muted" href="{{ url('/') }}">Home</a>
            @endauth
        @endif
            <a class="p-2 text-muted" href="/weather">Weather</a>
            <a class="p-2 text-muted" href="#">U.S.</a>
            <a class="p-2 text-muted" href="#">U.S.</a>
            <a class="p-2 text-muted" href="#">U.S.</a>

    </nav>
</div>
