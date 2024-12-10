<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('data.index') }}" class="nav-link {{ Request::is('data*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-database"></i>
        <p>Data</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('mls.index') }}" class="nav-link {{ Request::is('mls*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-cogs"></i>
        <p>Mls</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('predictions.index') }}" class="nav-link {{ Request::is('predictions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-line"></i> <!-- Icon for Predictions -->
        <p>Predictions</p>
    </a>
</li>





