<div class="sidebar bg-dark border-end">
    <nav class="sidebar-nav p-3">
        <ul class="nav flex-column">
            <!-- Appointments -->
            <li class="nav-item">
                <a href="{{ route('client.home') }}"
                   class="nav-link {{ request()->is('admin/appointments') || request()->is('admin/appointments/*') ? 'active bg-black text-white fw-bold' : 'text-light' }} fs-5">
                    <i class="fa-fw fas fa-calendar-check nav-icon me-2"></i>
                   Home
                </a>
            </li>
            <!-- Logout -->
            <li class="nav-item mt-4">
                <a href="#"
                   class="nav-link text-light fw-bold fs-5"
                   onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-fw fa-sign-out-alt nav-icon me-2"></i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </nav>
</div>
