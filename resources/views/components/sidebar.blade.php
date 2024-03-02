<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('user.index') }}">SIBATIK</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SB</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">App</li>
            <li class="{{ $type_menu === 'profile' ? 'active' : '' }}">
                <a href="#" class="nav-link"><i class="fas fa-address-card"></i><span>Profile</span></a>
            </li>
            <li class="{{ $type_menu === 'contact' ? 'active' : '' }}">
                <a href="#" class="nav-link"><i class="fas fa-link"></i><span>Social Media</span></a>
            </li>
            <li class="{{ $type_menu === 'product' ? 'active' : '' }}">
                <a href="#" class="nav-link"><i class="fas fa-box"></i><span>Product</span></a>
            </li>
            <li class="{{ $type_menu === 'message' ? 'active' : '' }}">
                <a href="#" class="nav-link"><i class="fas fa-address-book"></i><span>Contact</span></a>
            </li>
            
            <li class="menu-header">User Management</li>
            <li class="{{ $type_menu === 'user' ? 'active' : '' }}">
                <a href="{{ route('admin.user.index') }}" class="nav-link"><i class="fas fa-user"></i><span>Users</span></a>
            </li>
        </ul>
    </aside>
</div>
