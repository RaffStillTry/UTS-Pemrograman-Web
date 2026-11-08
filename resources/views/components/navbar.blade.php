<nav class="navbar">
    <div class="navbar-inner">
        <a href="{{ route('dashboard', ['username' => session('username')]) }}" class="brand">Taskly</a>

        <div class="nav-links">
            <a href="{{ route('dashboard', ['username' => session('username')]) }}"
               class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>

            <a href="{{ route('tasks') }}"
               class="{{ request()->routeIs('tasks') ? 'active' : '' }}">Tasks</a>

            <a href="{{ route('profile', ['username' => session('username')]) }}"
               class="{{ request()->routeIs('profile') ? 'active' : '' }}">Profile</a>
        </div>

        <span class="nav-user">{{ session('username') }}</span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-logout">Logout</button>
        </form>
    </div>
</nav>