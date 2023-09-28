<li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : null }}">
    <a class="menu-link" href="{{ route('dashboard') }}">
        <i class="menu-icon tf-icons ti ti-smart-home"></i>
        <span class="menu-title text-truncate">{{ __('lang.leftbar.dashboard') }}</span>
    </a>
</li>

{{-- Setting Menu --}}

<li class="menu-item {{ request()->routeIs('settings') ? 'active open' : null }}">
    <a class="menu-link menu-toggle" href="javascript:void(0)">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <span class="menu-title text-truncate" data-i18n="Settings">Settings</span>
    </a>
    <ul class="menu-sub">
            <li
                class="menu-item {{ request()->routeIs('settings') ? 'active' : null }}">
                <a class="menu-link"
                    href="#">
                    <span class="menu-title text-truncate">Projects</span>
                </a>
            </li>
    </ul>
</li>
