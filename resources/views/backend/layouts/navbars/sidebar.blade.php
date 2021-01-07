<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="{{route('backend.dashboard')}}" class="simple-text logo-normal">
            {{ __('Solid Water Backend') }}
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="@if ($activePage == 'home') active @endif">
                <a href="{{ route('backend.dashboard') }}">
                    <i class="now-ui-icons design_app"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'users') active @endif">
                <a href="{{ route('backend.users.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('USERS') }}</p>
                </a>
            </li>
            {{-- <li class="@if ($activePage == 'projects') active @endif">
                <a href="{{ route('backend.projects.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Projects') }}</p>
                </a>
            </li> --}}
            {{-- <li class="@if ($activePage == 'mainImages') active @endif">
                <a href="{{ route('backend.mainImages.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Main Images') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'services') active @endif">
                <a href="{{ route('backend.services.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Services') }}</p>
                </a>
            </li> --}}

        </ul>
    </div>
</div>
