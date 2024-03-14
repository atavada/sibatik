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
            <li class="{{ $type_menu === 'about' ? 'active' : '' }}">
                <a href="{{ route('admin.about.index') }}" class="nav-link"><i class="fas fa-address-card"></i><span>About</span></a>
            </li>
            <li class="{{ $type_menu === 'product' ? 'active' : '' }}">
                <a href="{{ route('admin.product.index') }}" class="nav-link"><i class="fas fa-box"></i><span>Produk</span></a>
            </li>
            <li class="{{ $type_menu === 'category' ? 'active' : '' }}">
                <a href="{{ route('admin.category.index') }}" class="nav-link"><i class="fas fa-folder"></i><span>Kategori</span></a>
            </li>
            <li class="{{ $type_menu === 'rating' ? 'active' : '' }}">
                <a href="{{ route('admin.rating.index') }}" class="nav-link"><i class="fas fa-star"></i><span>Rating</span></a>
            </li>
            <li class="{{ $type_menu === 'contact' ? 'active' : '' }}">
                <a href="{{ route('admin.contact.index') }}" class="nav-link"><i class="fas fa-address-book"></i><span>Kontak</span></a>
            </li>
            
            <li class="menu-header">User Management</li>
            <li class="{{ $type_menu === 'user' ? 'active' : '' }}">
                <a href="{{ route('admin.user.index') }}" class="nav-link"><i class="fas fa-user"></i><span>Users</span></a>
            </li>
        </ul>
    </aside>
</div>
