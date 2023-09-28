@php
    $configData = Helper::appClasses();
@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <!-- ! Hide app brand if navbar-full -->
    @if (!isset($navbarFull))
        <div class="app-brand demo">
            <a href="{{ url('/') }}" class="app-brand-link">
                {{-- <span class="app-brand-logo demo"> --}}
                {{-- @include('_partials.macros',["height"=>20]) --}}
                <img src="{{ asset('assets/img/logo-imtiaz-developments-transparent.png') }}">

                {{-- </span> --}}
                {{-- <span class="app-brand-text demo menu-text fw-bold">{{config('variables.templateName')}}</span> --}}
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
        </div>
    @endif


    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        @include('layouts.sections.menu.leftbar')
    </ul>

</aside>
