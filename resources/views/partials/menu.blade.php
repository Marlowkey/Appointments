<div class="sidebar bg-dark border-end">
    <nav class="sidebar-nav p-3">
        <ul class="nav flex-column">
            <!-- Services -->
            <li class="nav-item">
                <a href="{{ route('admin.services.index') }}"
                   class="nav-link {{ request()->is('admin/services') || request()->is('admin/services/*') ? 'active bg-black text-white fw-bold' : 'text-light' }} fs-5">
                    <i class="fa-fw fas fa-cogs nav-icon me-2"></i>
                    {{ trans('cruds.service.title') }}
                </a>
            </li>
            <!-- Clients -->
            <li class="nav-item">
                <a href="{{ route('admin.clients.index') }}"
                   class="nav-link {{ request()->is('admin/clients') || request()->is('admin/clients/*') ? 'active bg-black text-white fw-bold' : 'text-light' }} fs-5">
                    <i class="fa-fw fas fa-user nav-icon me-2"></i>
                    {{ trans('cruds.client.title') }}
                </a>
            </li>
            <!-- Appointments -->
            <li class="nav-item">
                <a href="{{ route('admin.appointments.index') }}"
                   class="nav-link {{ request()->is('admin/appointments') || request()->is('admin/appointments/*') ? 'active bg-black text-white fw-bold' : 'text-light' }} fs-5">
                    <i class="fa-fw fas fa-calendar-check nav-icon me-2"></i>
                    {{ trans('cruds.appointment.title') }}
                </a>
            </li>
            <!-- System Calendar -->
            <li class="nav-item">
                <a href="{{ route('admin.systemCalendar') }}"
                   class="nav-link {{ request()->is('admin/system-calendar') || request()->is('admin/system-calendar/*') ? 'active bg-black text-white fw-bold' : 'text-light' }} fs-5">
                    <i class="fa-fw fas fa-calendar nav-icon me-2"></i>
                    {{ trans('global.systemCalendar') }}
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
