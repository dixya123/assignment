<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav">
                <li><a class="nav-item nav-link px-4" href="/">Home</a></li>
                <li><a class="nav-item nav-link px-4" href="/about">About</a></li>
                <li><a class="nav-item nav-link px-4" href="/services">Services</a></li>
                <li><a class="nav-item nav-link px-4" href="/post">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>
