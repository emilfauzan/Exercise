<!-- navbar -->
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ url('images/Dark logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <div>
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('discovery') }}" aria-current="page">Discovery</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('destination') }}">Destination</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('package') }}">Package</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('aboutus') }}">About us</a>
                    </li>
                </ul>
            </div>
        </div>
        <button type="button" class=" btn btn-success">
            <a class="nav-link text-white" href="{{ route('auth') }}">Login</a>
        </button>
    </div>
</nav>
<!-- end of navbar -->