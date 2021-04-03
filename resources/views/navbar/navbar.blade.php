<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">DrawSomething Game</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Inicio</a>
                </li>
            </ul>
            <span class="navbar-text">
                Brahian Sánchez - <a style="text-decoration: none"  href="https://github.com/brahian-dev"> @brahiandev </a> &copy; {{ date("Y") }}
            </span>
        </div>
    </div>
</nav>