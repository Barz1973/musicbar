<nav class="navbar navbar-expand-lg navbar-light bg-dark p-2 shadow">
    <h1 class="navbar-brand ms-5 text-white" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 30px;">
        Music Bar</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-5">
            <li class="nav-item">
                <a class="nav-link text-white" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/my-music-bar">Music Bar</a>
            </li>
        </ul>

        <!-- <ul class="navbar-nav ms-auto">
            @if(!auth()->check())
            <li class="nav-item">
                <a class="nav-link text-white" href="/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/register">Register</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link text-white" href="/logout">Logout</a>
            </li>
            @endif
        </ul> -->
        <div class="btn-group dropleft ms-auto">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if(auth()->check())
                <span class="text-white">{{auth()->user()->name}}</span>
                @else
                <span class="text-white">Click here to login/register</span>
                @endif
            </button>
            <div class="dropdown-menu">
                @if(!auth()->check())
                <a class="dropdown-item" href="/login">Login</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/register">Register</a>
                @else
                <a class="dropdown-item" href="/logout">Logout</a>
                @endif
            </div>
        </div>

    </div>
</nav>