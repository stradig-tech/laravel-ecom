<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Larkon E-Commerce Admin')</title>
    
    <!-- Google Fonts & FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Larkon Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/larkon.css') }}">
    @stack('styles')
</head>
<body>
    <div class="larkon-wrapper">
        <!-- Sidebar Navigation -->
        <aside class="larkon-sidebar" id="larkonSidebar">
            <div class="sidebar-header">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-logo">
                    <div class="sidebar-logo-icon">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </div>
                    <span>Larkon</span>
                </a>
                <button class="sidebar-toggle-btn" title="Toggle Sidebar">
                    <i class="fa-solid fa-angles-right"></i>
                </button>
            </div>

            <div class="sidebar-menu-wrapper">
                <div class="menu-category">GENERAL</div>
                <ul class="menu-list">
                    <li class="menu-item">
                        <a href="{{ route('admin.dashboard') }}" class="menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                            <span class="menu-icon"><i class="fa-solid fa-border-all"></i></span>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- Products Menu -->
                    <li class="menu-item">
                        <a href="{{ route('admin.products.index') }}" class="menu-link {{ request()->is('admin/products*') ? 'active' : '' }}">
                            <span class="menu-icon" style="color: #ff5e2b;"><i class="fa-solid fa-shirt"></i></span>
                            <span>Products</span>
                            <span class="chevron-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul class="submenu-list">
                            <li><a href="{{ route('admin.products.index') }}" class="submenu-link {{ request()->routeIs('admin.products.index') ? 'active' : '' }}">List</a></li>
                            <li><a href="{{ route('admin.products.grid') }}" class="submenu-link {{ request()->routeIs('admin.products.grid') ? 'active' : '' }}">Grid</a></li>
                            <li><a href="{{ route('admin.products.show', 1) }}" class="submenu-link {{ request()->routeIs('admin.products.show') ? 'active' : '' }}">Details</a></li>
                            <li><a href="{{ route('admin.products.edit', 1) }}" class="submenu-link {{ request()->routeIs('admin.products.edit') ? 'active' : '' }}">Edit</a></li>
                            <li><a href="{{ route('admin.products.create') }}" class="submenu-link {{ request()->routeIs('admin.products.create') ? 'active' : '' }}">Create</a></li>
                        </ul>
                    </li>

                    <!-- Category Menu -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link">
                            <span class="menu-icon"><i class="fa-solid fa-layer-group"></i></span>
                            <span>Category</span>
                            <span class="chevron-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul class="submenu-list">
                            <li><a href="{{ route('admin.products.index') }}" class="submenu-link">Categories List</a></li>
                            <li><a href="{{ route('admin.products.create') }}" class="submenu-link">Create Category</a></li>
                        </ul>
                    </li>

                    <!-- Inventory Menu -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link">
                            <span class="menu-icon"><i class="fa-solid fa-boxes-stacked"></i></span>
                            <span>Inventory</span>
                            <span class="chevron-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul class="submenu-list">
                            <li><a href="{{ route('admin.products.index') }}" class="submenu-link">Stock Overview</a></li>
                            <li><a href="{{ route('admin.products.grid') }}" class="submenu-link">Warehouses</a></li>
                        </ul>
                    </li>

                    <!-- Orders Menu -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link">
                            <span class="menu-icon"><i class="fa-solid fa-bag-shopping"></i></span>
                            <span>Orders</span>
                            <span class="chevron-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul class="submenu-list">
                            <li><a href="{{ route('admin.products.index') }}" class="submenu-link">All Orders</a></li>
                            <li><a href="{{ route('admin.products.show', 1) }}" class="submenu-link">Order Details</a></li>
                        </ul>
                    </li>

                    <!-- Purchases Menu -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link">
                            <span class="menu-icon"><i class="fa-solid fa-cart-flatbed"></i></span>
                            <span>Purchases</span>
                            <span class="chevron-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul class="submenu-list">
                            <li><a href="{{ route('admin.coupons.index') }}" class="submenu-link">Purchase Orders</a></li>
                            <li><a href="{{ route('admin.sellers.index') }}" class="submenu-link">Suppliers</a></li>
                        </ul>
                    </li>

                    <!-- Attributes Menu -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link">
                            <span class="menu-icon"><i class="fa-solid fa-tags"></i></span>
                            <span>Attributes</span>
                            <span class="chevron-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul class="submenu-list">
                            <li><a href="{{ route('admin.products.index') }}" class="submenu-link">Size List</a></li>
                            <li><a href="{{ route('admin.products.index') }}" class="submenu-link">Color Attributes</a></li>
                        </ul>
                    </li>

                    <!-- Invoices Menu -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link">
                            <span class="menu-icon"><i class="fa-solid fa-file-invoice-dollar"></i></span>
                            <span>Invoices</span>
                            <span class="chevron-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul class="submenu-list">
                            <li><a href="{{ route('admin.coupons.index') }}" class="submenu-link">Invoices List</a></li>
                            <li><a href="{{ route('admin.coupons.add') }}" class="submenu-link">Create Invoice</a></li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" onclick="toggleSettingsDrawer()" class="menu-link">
                            <span class="menu-icon"><i class="fa-solid fa-gear"></i></span>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>

                <div class="menu-category" style="margin-top: 16px;">USERS</div>
                <ul class="menu-list">
                    <li class="menu-item">
                        <a href="{{ route('admin.sellers.show', 1) }}" class="menu-link">
                            <span class="menu-icon"><i class="fa-regular fa-user"></i></span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link">
                            <span class="menu-icon"><i class="fa-solid fa-user-group"></i></span>
                            <span>Roles</span>
                            <span class="chevron-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul class="submenu-list">
                            <li><a href="{{ route('admin.sellers.index') }}" class="submenu-link">Roles List</a></li>
                            <li><a href="{{ route('admin.sellers.create') }}" class="submenu-link">Permissions</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link">
                            <span class="menu-icon"><i class="fa-solid fa-users"></i></span>
                            <span>Customers</span>
                            <span class="chevron-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul class="submenu-list">
                            <li><a href="{{ route('admin.sellers.index') }}" class="submenu-link">Customer List</a></li>
                            <li><a href="{{ route('admin.sellers.show', 1) }}" class="submenu-link">Customer Profile</a></li>
                        </ul>
                    </li>
                    <!-- Sellers Menu -->
                    <li class="menu-item">
                        <a href="{{ route('admin.sellers.index') }}" class="menu-link {{ request()->is('admin/sellers*') ? 'active' : '' }}">
                            <span class="menu-icon"><i class="fa-solid fa-store"></i></span>
                            <span>Sellers</span>
                            <span class="chevron-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul class="submenu-list">
                            <li><a href="{{ route('admin.sellers.index') }}" class="submenu-link {{ request()->routeIs('admin.sellers.index') ? 'active' : '' }}">List</a></li>
                            <li><a href="{{ route('admin.sellers.show', 1) }}" class="submenu-link {{ request()->routeIs('admin.sellers.show') ? 'active' : '' }}">Details</a></li>
                            <li><a href="{{ route('admin.sellers.edit', 1) }}" class="submenu-link {{ request()->routeIs('admin.sellers.edit') ? 'active' : '' }}">Edit</a></li>
                            <li><a href="{{ route('admin.sellers.create') }}" class="submenu-link {{ request()->routeIs('admin.sellers.create') ? 'active' : '' }}">Create</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="menu-category" style="margin-top: 16px;">STOREFRONT CONTENT</div>
                <ul class="menu-list">
                    <!-- Banner Sliders Menu -->
                    <li class="menu-item">
                        <a href="{{ route('admin.sliders.index') }}" class="menu-link {{ request()->is('admin/sliders*') ? 'active' : '' }}">
                            <span class="menu-icon" style="color: #ff5e2b;"><i class="fa-solid fa-images"></i></span>
                            <span>Hero Sliders</span>
                            <span class="chevron-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul class="submenu-list">
                            <li><a href="{{ route('admin.sliders.index') }}" class="submenu-link {{ request()->routeIs('admin.sliders.index') ? 'active' : '' }}">Sliders List</a></li>
                            <li><a href="{{ route('admin.sliders.create') }}" class="submenu-link {{ request()->routeIs('admin.sliders.create') ? 'active' : '' }}">Upload Slider Photo</a></li>
                        </ul>
                    </li>
                    <!-- Coupons Menu -->
                    <li class="menu-item">
                        <a href="{{ route('admin.coupons.index') }}" class="menu-link {{ request()->is('admin/coupons*') ? 'active' : '' }}">
                            <span class="menu-icon" style="color: #ff5e2b;"><i class="fa-solid fa-ticket"></i></span>
                            <span>Coupons</span>
                            <span class="chevron-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul class="submenu-list">
                            <li><a href="{{ route('admin.coupons.index') }}" class="submenu-link {{ request()->routeIs('admin.coupons.index') ? 'active' : '' }}">List</a></li>
                            <li><a href="{{ route('admin.coupons.add') }}" class="submenu-link {{ request()->routeIs('admin.coupons.add') || request()->routeIs('admin.coupons.create') ? 'active' : '' }}">Add</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.reviews.index') }}" class="menu-link {{ request()->routeIs('admin.reviews.index') ? 'active' : '' }}">
                            <span class="menu-icon" style="color: #ff5e2b;"><i class="fa-solid fa-heart"></i></span>
                            <span>Reviews</span>
                        </a>
                    </li>
                </ul>

                <div class="menu-category" style="margin-top: 16px;">OTHER APPS</div>
                <ul class="menu-list">
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <span class="menu-icon"><i class="fa-regular fa-comments"></i></span>
                            <span>Chat</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <span class="menu-icon"><i class="fa-regular fa-envelope"></i></span>
                            <span>Email</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <span class="menu-icon"><i class="fa-regular fa-calendar"></i></span>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <span class="menu-icon"><i class="fa-solid fa-list-check"></i></span>
                            <span>Todo</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Wrapper -->
        <main class="larkon-main">
            <!-- Header Top Bar -->
            <header class="larkon-header">
                <div class="page-title">
                    @yield('page_title', 'WELCOME!')
                </div>

                <div class="header-right">
                    <button class="header-icon-btn" title="Toggle Theme">
                        <i class="fa-regular fa-moon"></i>
                    </button>

                    <button class="header-icon-btn" onclick="toggleNotificationDropdown(event)" title="Notifications" style="position: relative;">
                        <i class="fa-regular fa-bell"></i>
                        <span class="badge-dot">3</span>
                    </button>

                    <button class="header-icon-btn" onclick="toggleSettingsDrawer()" title="Settings">
                        <i class="fa-solid fa-gear"></i>
                    </button>

                    <button class="header-icon-btn" title="Activities">
                        <i class="fa-regular fa-clock"></i>
                    </button>

                    <!-- User Avatar & Profile Nav Dropdown -->
                    <div class="profile-dropdown-wrapper">
                        <div style="display: flex; align-items: center; cursor: pointer;" onclick="toggleProfileDropdown(event)">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80" alt="Gaston Avatar" class="header-avatar-img">
                        </div>

                        <!-- Profile Dropdown Menu (Screenshot 1) -->
                        <div class="profile-dropdown-menu" id="profileDropdown">
                            <div class="dropdown-header-title">Welcome Gaston!</div>
                            <ul class="dropdown-menu-list">
                                <li class="dropdown-menu-item">
                                    <a href="#"><i class="fa-regular fa-user"></i> Profile</a>
                                </li>
                                <li class="dropdown-menu-item">
                                    <a href="#"><i class="fa-regular fa-comment-dots"></i> Messages</a>
                                </li>
                                <li class="dropdown-menu-item">
                                    <a href="#"><i class="fa-solid fa-wallet"></i> Pricing</a>
                                </li>
                                <li class="dropdown-menu-item">
                                    <a href="#"><i class="fa-regular fa-circle-question"></i> Help</a>
                                </li>
                                <li class="dropdown-menu-item">
                                    <a href="#"><i class="fa-solid fa-lock"></i> Lock screen</a>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li class="dropdown-menu-item logout-item">
                                    <a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Search Input -->
                    <div class="header-search-bar">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search...">
                    </div>
                </div>
            </header>

            <!-- Main Page Content -->
            <div class="larkon-content">
                @yield('content')
            </div>

            <!-- Footer -->
            <footer class="larkon-footer">
                2026 © Larkon. Crafted by <a href="#" target="_blank">Techzaa</a>
            </footer>
        </main>
    </div>

    <!-- Theme Settings Drawer (Screenshot 2) -->
    <div class="settings-drawer-backdrop" id="settingsBackdrop" onclick="toggleSettingsDrawer()"></div>
    <div class="settings-drawer" id="settingsDrawer">
        <div class="drawer-header">
            <h4 class="drawer-title">Theme Settings</h4>
            <button class="drawer-close-btn" onclick="toggleSettingsDrawer()"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <div class="drawer-body">
            <!-- Color Scheme -->
            <div class="drawer-section">
                <div class="drawer-section-title">Color Scheme</div>
                <div class="drawer-radio-group">
                    <label class="drawer-radio-option">
                        <input type="radio" name="color_scheme" value="light" checked> Light
                    </label>
                    <label class="drawer-radio-option">
                        <input type="radio" name="color_scheme" value="dark"> Dark
                    </label>
                </div>
            </div>

            <!-- Topbar Color -->
            <div class="drawer-section">
                <div class="drawer-section-title">Topbar Color</div>
                <div class="drawer-radio-group">
                    <label class="drawer-radio-option">
                        <input type="radio" name="topbar_color" value="light" checked> Light
                    </label>
                    <label class="drawer-radio-option">
                        <input type="radio" name="topbar_color" value="dark"> Dark
                    </label>
                </div>
            </div>

            <!-- Menu Color -->
            <div class="drawer-section">
                <div class="drawer-section-title">Menu Color</div>
                <div class="drawer-radio-group">
                    <label class="drawer-radio-option">
                        <input type="radio" name="menu_color" value="light"> Light
                    </label>
                    <label class="drawer-radio-option">
                        <input type="radio" name="menu_color" value="dark" checked> Dark
                    </label>
                </div>
            </div>

            <!-- Sidebar Size -->
            <div class="drawer-section">
                <div class="drawer-section-title">Sidebar Size</div>
                <div class="drawer-radio-group">
                    <label class="drawer-radio-option">
                        <input type="radio" name="sidebar_size" value="default"> Default
                    </label>
                    <label class="drawer-radio-option">
                        <input type="radio" name="sidebar_size" value="condensed"> Condensed
                    </label>
                    <label class="drawer-radio-option">
                        <input type="radio" name="sidebar_size" value="hidden"> Hidden
                    </label>
                    <label class="drawer-radio-option">
                        <input type="radio" name="sidebar_size" value="small_hover_active" checked> Small Hover Active
                    </label>
                    <label class="drawer-radio-option">
                        <input type="radio" name="sidebar_size" value="small_hover"> Small Hover
                    </label>
                </div>
            </div>
        </div>

        <div class="drawer-footer">
            <button class="btn-larkon" style="width: 100%; background: #ef4444; color: #ffffff; padding: 12px;" onclick="resetThemeSettings()">Reset</button>
        </div>
    </div>

            <!-- Notification Dropdown Menu -->
            <div class="notification-dropdown-menu" id="notificationDropdown">
                <div class="dropdown-header-title" style="display: flex; justify-content: space-between; align-items: center;">
                    <span>Notifications</span>
                    <span class="badge-larkon badge-orange" style="font-size: 10px;">3 New</span>
                </div>
                <ul class="dropdown-menu-list">
                    <li class="dropdown-menu-item">
                        <a href="#"><i class="fa-solid fa-basket-shopping" style="color: #ff5e2b;"></i> New order received #RB5625</a>
                    </li>
                    <li class="dropdown-menu-item">
                        <a href="#"><i class="fa-solid fa-star" style="color: #fbbf24;"></i> New 5-star product review added</a>
                    </li>
                    <li class="dropdown-menu-item">
                        <a href="#"><i class="fa-solid fa-user-plus" style="color: #10b981;"></i> New seller "Nike Store" registered</a>
                    </li>
                </ul>
            </div>

            <!-- Interactive Scripts -->
            <script>
                function toggleProfileDropdown(event) {
                    event.stopPropagation();
                    closeAllDropdowns();
                    const dropdown = document.getElementById('profileDropdown');
                    dropdown.classList.toggle('show');
                }

                function toggleNotificationDropdown(event) {
                    event.stopPropagation();
                    closeAllDropdowns();
                    const dropdown = document.getElementById('notificationDropdown');
                    if (dropdown) dropdown.classList.toggle('show');
                }

                function closeAllDropdowns() {
                    const prof = document.getElementById('profileDropdown');
                    const notif = document.getElementById('notificationDropdown');
                    if (prof) prof.classList.remove('show');
                    if (notif) notif.classList.remove('show');
                }

                function toggleSettingsDrawer() {
                    const drawer = document.getElementById('settingsDrawer');
                    const backdrop = document.getElementById('settingsBackdrop');
                    drawer.classList.toggle('open');
                    backdrop.classList.toggle('show');
                }

                function resetThemeSettings() {
                    document.querySelectorAll('input[type="radio"]').forEach(radio => {
                        if (radio.defaultValue) radio.checked = true;
                    });
                    alert('Theme settings reset to default.');
                }

                // Sidebar Menu Accordion Dropdowns
                document.addEventListener('DOMContentLoaded', function() {
                    const menuLinks = document.querySelectorAll('.larkon-sidebar .menu-item > a');
                    menuLinks.forEach(link => {
                        link.addEventListener('click', function(e) {
                            const parentLi = this.parentElement;
                            const submenu = parentLi.querySelector('.submenu-list');
                            if (submenu) {
                                e.preventDefault();
                                // Toggle current submenu
                                const isOpen = submenu.style.display === 'block';
                                document.querySelectorAll('.larkon-sidebar .submenu-list').forEach(sm => {
                                    if (sm !== submenu && !sm.parentElement.classList.contains('active-parent')) {
                                        sm.style.display = 'none';
                                    }
                                });
                                submenu.style.display = isOpen ? 'none' : 'block';
                                const chevron = this.querySelector('.chevron-icon i');
                                if (chevron) {
                                    chevron.className = isOpen ? 'fa-solid fa-chevron-down' : 'fa-solid fa-chevron-up';
                                }
                            }
                        });
                    });

                    // Ensure active menu item submenus remain expanded by default
                    document.querySelectorAll('.larkon-sidebar .menu-link.active').forEach(activeLink => {
                        const parentLi = activeLink.parentElement;
                        const submenu = parentLi.querySelector('.submenu-list');
                        if (submenu) {
                            submenu.style.display = 'block';
                            parentLi.classList.add('active-parent');
                            const chevron = activeLink.querySelector('.chevron-icon i');
                            if (chevron) chevron.className = 'fa-solid fa-chevron-up';
                        }
                    });
                });

                window.addEventListener('click', function(event) {
                    closeAllDropdowns();
                });
            </script>
    @stack('scripts')
</body>
</html>
