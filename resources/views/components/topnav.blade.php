<!-- Basic Top Navigation -->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

            <span class="fs-4">RaffleCopter&trade; 3.0</span>
        </a>

        <ul class="nav nav-pills">
{{--            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link active" >Dashboard</a></li>--}}
            <li class="nav-item"><a href="{{ route('new-raffle') }}" class="nav-link">Create New Raffle</a></li>
            <li class="nav-item"><a href="{{ route('buy-raffle-ticket') }}" class="nav-link">Buy Raffle Ticket</a></li>
        </ul>
    </header>

