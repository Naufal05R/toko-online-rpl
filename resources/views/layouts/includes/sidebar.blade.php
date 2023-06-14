<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        @if (Auth::user()->roles == 'ADMIN')
        <li class="nav-item">
            <a class="nav-link " href="{{ route('home') }}">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a href="{{ route('dashboard.category.index') }}" class="nav-link collapsed">
                <i class="bi bi-handbag-fill"></i>
                Category
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('dashboard.product.index') }}" class="nav-link collapsed">
                <i class="bi bi-newspaper"></i>
                Product
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('dashboard.transaction.index') }}" class="nav-link collapsed">
                <i class="bi bi-currency-dollar"></i>
                Transaction
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('dashboard.user.index') }}" class="nav-link collapsed">
                <i class="bi bi-people"></i>
                User
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('dashboard.my-transaction.index') }}" class="nav-link collapsed">
                <i class="bi bi-cart"></i>
                My Transaction
            </a>
        </li>

        @else
        <li class="nav-item">
            <a class="nav-link " href="{{ route('home') }}">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('dashboard.my-transaction.index') }}" class="nav-link collapsed">
                <i class="bi bi-cart"></i>
                My Transaction
            </a>
        </li>
        @endif

       
    </ul>

</aside>
